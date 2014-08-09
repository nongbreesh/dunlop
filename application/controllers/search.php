<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Search extends CI_Controller {

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

        $data['size'] = 0;
        $data['series'] = 0;
        $data['diameter'] = 0;

        $data['tire_list'] = $this->select_model->get_dunlop_search_tire();
        if ($_POST) {
            $data['size'] = $this->input->post('size');
            $data['series'] = $this->input->post('series');
            $data['diameter'] = $this->input->post('diameter');

            $data['tire_list'] = $this->select_model->get_dunlop_search_tire($data['size'], $data['series'], $data['diameter']);
        }

        // print_r($data['tire_list']) ;

        $this->load->view('search/index', $data);
    }

}
