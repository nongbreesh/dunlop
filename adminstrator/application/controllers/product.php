<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Product extends CI_Controller {

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

    public function category($offset = 0) {
        if ($this->user_model->is_login()) {
            $data['account'] = $this->user_model->get_account_cookie();
        } else {
            redirect('login', 'refresh');
        }


        $data['menu'] = "product_category";
        $data['dunlop_type'] = $this->select_model->get_dunlop_group();
        $this->load->view('admin/template/header', $data);
        $this->load->view('admin/product/category');
        $this->load->view('admin/template/footer');
    }
    
    public function type($offset = 0) {
        if ($this->user_model->is_login()) {
            $data['account'] = $this->user_model->get_account_cookie();
        } else {
            redirect('login', 'refresh');
        }


        $data['menu'] = "product_type";
        $data['dunlop_type'] = $this->select_model->get_dunlop_type();
        $this->load->view('admin/template/header', $data);
        $this->load->view('admin/product/type');
        $this->load->view('admin/template/footer');
    }
    
    
    public function item($offset = 0) {
        if ($this->user_model->is_login()) {
            $data['account'] = $this->user_model->get_account_cookie();
        } else {
            redirect('login', 'refresh');
        }

        $data['menu'] = "product_item";
        $data['item_list'] = $this->select_model->get_dunlop_product();
        $data['group_list'] = $this->select_model->get_dunlop_group();
        $this->load->view('admin/template/header', $data);
        $this->load->view('admin/product/item');
        $this->load->view('admin/template/footer');
    }
    
     public function tire($offset = 0) {
        if ($this->user_model->is_login()) {
            $data['account'] = $this->user_model->get_account_cookie();
        } else {
            redirect('login', 'refresh');
        }


        $data['menu'] = "product_tire";
        $data['item_list'] = $this->select_model->get_dunlop_tire();
        
         $data['product_list'] = $this->select_model->get_dunlop_product();
         
        $data['type_list'] = $this->select_model->get_dunlop_type();
        
        
        $this->load->view('admin/template/header', $data);
        $this->load->view('admin/product/tire');
        $this->load->view('admin/template/footer');
    }

}
