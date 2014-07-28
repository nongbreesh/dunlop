<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Home extends CI_Controller {

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
        redirect('home/highlight');
        $data['menu'] = "home";

        $this->load->view('admin/template/header', $data);
        $this->load->view('admin/template/index');
        $this->load->view('admin/template/footer');
    }

    public function highlight($offset = 0) {
        if ($this->user_model->is_login()) {
            $data['account'] = $this->user_model->get_account_cookie();
        } else {
            redirect('login', 'refresh');
        }


        $data['menu'] = "home_highlight";
        $data['item_list'] = $this->select_model->get_dunlop_highlight();
        $this->load->view('admin/template/header', $data);
        $this->load->view('admin/home/highlight');
        $this->load->view('admin/template/footer');
    }

    public function whatnews($offset = 0) {
        if ($this->user_model->is_login()) {
            $data['account'] = $this->user_model->get_account_cookie();
        } else {
            redirect('login', 'refresh');
        }


        $data['menu'] = "home_whatnews";
        $data['item_list'] = $this->select_model->get_dunlop_whatnews();
        $this->load->view('admin/template/header', $data);
        $this->load->view('admin/home/whatnews');
        $this->load->view('admin/template/footer');
    }

    public function video($offset = 0) {
        if ($this->user_model->is_login()) {
            $data['account'] = $this->user_model->get_account_cookie();
        } else {
            redirect('login', 'refresh');
        }


        $data['menu'] = "home_video";
        $data['item_list'] = $this->select_model->get_dunlop_video();
        $this->load->view('admin/template/header', $data);
        $this->load->view('admin/home/video');
        $this->load->view('admin/template/footer');
    }

    public function slide($offset = 0) {
        if ($this->user_model->is_login()) {
            $data['account'] = $this->user_model->get_account_cookie();
        } else {
            redirect('login', 'refresh');
        }


        $data['menu'] = "home_slide";
        $data['item_list'] = $this->select_model->get_dunlop_slide();
        $this->load->view('admin/template/header', $data);
        $this->load->view('admin/home/slide');
        $this->load->view('admin/template/footer');
    }

}
