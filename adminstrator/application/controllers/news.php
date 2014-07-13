<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class News extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->library('lbs');
        $this->load->helper('text');
        $this->load->helper('url');
        $this->load->helper('menu_helper');
        $this->load->helper('time_helper');
        $this->load->model('select_model');
        $this->load->model('insert_model');
        $this->load->model('user_model');
    }

    function getJsondata($url) {
        header('Content-type: application/json');
        $Data = json_decode(file_get_contents($url), true);
        return $Data;
    }

    function getJsondatafromString($contents) {
        header('Content-type: application/json');
        $Data = json_decode($contents, true);
        return $Data;
    }

    public function index($offset = 0) {
        if ($this->user_model->is_login()) {
            $data['account'] = $this->user_model->get_account_cookie();
        } else {
            redirect('login', 'refresh');
        }
        $data['menu'] = "news";
        $data['news_list'] = $this->select_model->dunlop_content();
        $this->load->view('admin/template/header', $data);
        $this->load->view('admin/news/index');
        $this->load->view('admin/template/footer');
    }

}
