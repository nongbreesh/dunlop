<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class About extends CI_Controller {

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
        $this->load->view('about/index', $data);
    }

    public function blackground() {
        $data['title'] = $this->title;
        $data['mTitle'] = $this->mTitle;
        $data['mDesc'] = $this->mDesc;
        $data['mKeyword'] = $this->mKeyword;
        $data['slide_list'] = $this->select_model->get_dunlop_slide();
        $this->load->view('about/index', $data);
    }

    public function quality() {
        $data['title'] = $this->title;
        $data['mTitle'] = $this->mTitle;
        $data['mDesc'] = $this->mDesc;
        $data['mKeyword'] = $this->mKeyword;
        $data['slide_list'] = $this->select_model->get_dunlop_slide();
        $this->load->view('about/quality', $data);
    }

    public function museum() {
        $data['title'] = $this->title;
        $data['mTitle'] = $this->mTitle;
        $data['mDesc'] = $this->mDesc;
        $data['mKeyword'] = $this->mKeyword;
        $data['slide_list'] = $this->select_model->get_dunlop_slide();
        $this->load->view('about/museum', $data);
    }

    public function activities() {
        $data['title'] = $this->title;
        $data['mTitle'] = $this->mTitle;
        $data['mDesc'] = $this->mDesc;
        $data['mKeyword'] = $this->mKeyword;

        $this->load->library('pagination');
        $data['slide_list'] = $this->select_model->get_dunlop_slide();

        $config['base_url'] = base_url() . 'about/activities';
        $config['total_rows'] = $this->select_model->content_count();
        $config['per_page'] = 8;
        $page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
        $data['content_list'] = $this->select_model->get_dunlop_content($config["per_page"], $page);
        $this->pagination->initialize($config);



        //get_dunlop_content_by_id(1)
        $this->load->view('about/activities', $data);
    }

    public function activities_news($id) {
        $data['title'] = $this->title;
        $data['mTitle'] = $this->mTitle;
        $data['mDesc'] = $this->mDesc;
        $data['mKeyword'] = $this->mKeyword;
        $data['slide_list'] = $this->select_model->get_dunlop_slide();



        $data['content'] = $this->select_model->get_dunlop_content_by_id($id);
        $data['albumpic'] = $this->select_model->get_dunlop_albumpic_by_id($data['content']->Album_ID);
        $this->load->view('about/activities_news', $data);
    }

}
