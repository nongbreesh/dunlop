<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Service extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->helpers('url_helper');
        $this->load->model('select_model');
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

    public function index() {
        
    }

    public function load_deler_pic() {
        $id = $this->input->post('id');
        $dealer_pic = $this->select_model->get_dunlop_albumpic();
        $i = 1;
        $html = '';
        foreach ($dealer_pic as $each) {


            $html .= '<li>';
            $html .= '<img src="' . base_url() . 'administrator/public/uploads/' . str_replace('thumb_', '', $each->PIC_Image) . '" style="width: 500px;" />';
            $html .= '</li>';






            $html .= '</tr>';
            $i++;
        }
        echo $html;
    }

}
