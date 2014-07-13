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

        $data['zone_list'] = $this->select_model->get_dunlop_zone();
        $data['tire_width'] = $this->select_model->get_tire_width();
        $data['tire_series'] = $this->select_model->get_tire_series();
        $data['tire_size'] = $this->select_model->get_tire_size();
        $data['dunlop_highlight'] = $this->select_model->get_dunlop_highlight();
        $this->load->view('template/theme', $data);
    }

}
