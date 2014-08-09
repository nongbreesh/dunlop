<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Address extends CI_Controller {

    function __construct() {
        parent::__construct();

        // SET META Tag
        $this->title = '';
        $this->mTitle = '';
        $this->mDesc = '';
        $this->mKeyword = '';
    }

    public function index($id = 1, $area = null) {
        $data['title'] = $this->title;
        $data['mTitle'] = $this->mTitle;
        $data['mDesc'] = $this->mDesc;
        $data['mKeyword'] = $this->mKeyword;
        $data['slide_list'] = $this->select_model->get_dunlop_slide();
        $data['id'] = $id;

        $data['area_list'] = $this->select_model->get_area_list($id);
        if ($area == null) {
            $data['area'] = $data['area_list'][0]->AREA_ID;
        } else {
            $data['area'] = $area;
        }
        $data['dealer_detail'] = $this->select_model->get_dealer_list_by_id($data['area']);
        $data['zone_header'] = $this->select_model->get_dunlop_zone_by_id($id)->ZONE_NAME;
        $data['zone_list'] = $this->select_model->get_dunlop_zone();
        $this->load->view('address/index', $data);
    }

    public function zone($id = 1, $area = null) {
        $data['title'] = $this->title;
        $data['mTitle'] = $this->mTitle;
        $data['mDesc'] = $this->mDesc;
        $data['mKeyword'] = $this->mKeyword;
        $data['slide_list'] = $this->select_model->get_dunlop_slide();
        $data['id'] = $id;

        $data['area_list'] = $this->select_model->get_area_list($id);
        if ($area == null) {
            $data['area'] = $data['area_list'][0]->AREA_ID;
        } else {
            $data['area'] = $area;
        }

        $data['zone_header'] = $this->select_model->get_dunlop_zone_by_id($id)->ZONE_NAME;
        $data['zone_list'] = $this->select_model->get_dunlop_zone();
        $data['dealer_detail'] = $this->select_model->get_dealer_list_by_id($data['area']);
        $this->load->view('address/index', $data);
    }

}
