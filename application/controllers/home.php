<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Home extends CI_Controller {

    function __construct() {
        parent::__construct();

        // SET META Tag
        $this->title = '';
        $this->mTitle = '';
        $this->mDesc = '';
        $this->mKeyword = '';
    }

    public function index() {
        $data['title'] = $this->title;
        $data['mTitle'] = $this->mTitle;
        $data['mDesc'] = $this->mDesc;
        $data['mKeyword'] = $this->mKeyword;
        $data['slide_list'] = $this->select_model->get_dunlop_slide();
        $data['zone_list'] = $this->select_model->get_dunlop_zone();
        $data['tire_width'] = $this->select_model->get_tire_width();
        $data['tire_series'] = $this->select_model->get_tire_series();
        $data['tire_size'] = $this->select_model->get_tire_size();
        $data['dunlop_highlight'] = $this->select_model->get_dunlop_highlight();
        $data['dunlop_vdo'] = $this->select_model->get_dunlop_vdo();
        $data['dunlop_news'] = $this->select_model->get_dunlop_news();
        $this->load->view('template/theme', $data);
    }

    public function load_area() {
        $id = $this->input->post('id');
        $data['result'] = $this->select_model->get_dunlop_area($id);
        $this->output->set_header('Content-Type: application/json; charset=utf-8');
        echo json_encode($data);
    }

}
