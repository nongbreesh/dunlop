<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Contact extends CI_Controller {

    function __construct() {
        parent::__construct();

        // SET META Tag
        $this->title = '';
        $this->mTitle = '';
        $this->mDesc = '';
        $this->mKeyword = '';
    }

    public function index() {
        $this->load->model('Email');
        $data['sent'] = false;
        if ($_POST) {
            $input = array(
                'firstname' => $this->input->post('firstname'),
                'lastname' => $this->input->post('lastname'),
                'address' => $this->input->post('address'),
                'province' => $this->input->post('province'),
                'zipcode' => $this->input->post('zipcode'),
                'tel' => $this->input->post('tel'),
                'email' => $this->input->post('email'),
                'msg' => $this->input->post('msg')
            );

            $this->Email->sendemail('marketing@dunloptire.co.th', $input);

            $data['sent'] = true;
        }
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
        $this->load->view('contact/index', $data);
    }

}
