<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Product extends CI_Controller {

    function __construct() {
        parent::__construct();

        // SET META Tag
        $this->title = '';
        $this->mTitle = '';
        $this->mDesc = '';
        $this->mKeyword = '';
    }

    public function index($groupid = 0, $productid = 0, $parentgid = 0) {
        $data['groupid'] = $groupid == 0 ? 1 : $groupid;
        $data['productid'] = $productid == 0 ? 0 : $productid;
        $data['parentgid'] = $parentgid;
        $data['title'] = $this->title;
        $data['mTitle'] = $this->mTitle;
        $data['mDesc'] = $this->mDesc;
        $data['mKeyword'] = $this->mKeyword;
        $data['slide_list'] = $this->select_model->get_dunlop_slide();
        $data['dunlop_group'] = $this->select_model->getdunlop_group();
        $data['dunlop_group_detail'] = $this->select_model->getdunlop_group_detail($groupid);
        if ($groupid != 0) {
            $data['dunlop_group_parent'] = $this->select_model->getdunlop_group_parent($groupid);
        }
        if ($productid != 0) {
            $data['tireDiameter'] = $this->select_model->get_dunlop_tireDiameter_by_pid($productid);
        }
        $this->load->view('product/index', $data);
    }

    public function g($groupid = 0, $productid = 0, $parentgid = 0) {
        $data['groupid'] = $groupid == 0 ? 1 : $groupid;
        $data['productid'] = $productid == 0 ? 0 : $productid;
        $data['parentgid'] = $parentgid;
        $data['title'] = $this->title;
        $data['mTitle'] = $this->mTitle;
        $data['mDesc'] = $this->mDesc;
        $data['mKeyword'] = $this->mKeyword;
        $data['slide_list'] = $this->select_model->get_dunlop_slide();

        $data['dunlop_group'] = $this->select_model->getdunlop_group();
        if ($parentgid == 0) {
            $data['dunlop_group_detail'] = $this->select_model->getdunlop_group_detail($groupid);
        } else {
            $data['dunlop_group_detail'] = $this->select_model->getdunlop_group_detail($parentgid);
        }

        if ($groupid != 0) {
            $data['dunlop_group_parent'] = $this->select_model->getdunlop_group_parent($groupid);
        }
        if ($productid != 0) {
            $data['tireDiameter'] = $this->select_model->get_dunlop_tireDiameter_by_pid($productid);
        }
        $this->load->view('product/index', $data);
    }

    public function maxxtt() {
        $data['pid'] = 2;
        $data['title'] = $this->title;
        $data['mTitle'] = $this->mTitle;
        $data['mDesc'] = $this->mDesc;
        $data['mKeyword'] = $this->mKeyword;
        $data['slide_list'] = $this->select_model->get_dunlop_slide();
        $data['tireDiameter'] = $this->select_model->get_dunlop_tireDiameter_by_pid($data['pid']);
        $this->load->view('product/maxxtt', $data);
    }

    public function ve302() {
        $data['pid'] = 3;
        $data['title'] = $this->title;
        $data['mTitle'] = $this->mTitle;
        $data['mDesc'] = $this->mDesc;
        $data['mKeyword'] = $this->mKeyword;
        $data['slide_list'] = $this->select_model->get_dunlop_slide();
        $data['tireDiameter'] = $this->select_model->get_dunlop_tireDiameter_by_pid($data['pid']);
        $this->load->view('product/ve302', $data);
    }

    public function ec503() {
        $data['pid'] = 4;
        $data['title'] = $this->title;
        $data['mTitle'] = $this->mTitle;
        $data['mDesc'] = $this->mDesc;
        $data['mKeyword'] = $this->mKeyword;
        $data['slide_list'] = $this->select_model->get_dunlop_slide();
        $data['tireDiameter'] = $this->select_model->get_dunlop_tireDiameter_by_pid($data['pid']);
        $this->load->view('product/ec503', $data);
    }

    public function lm704() {
        $data['pid'] = 5;
        $data['title'] = $this->title;
        $data['mTitle'] = $this->mTitle;
        $data['mDesc'] = $this->mDesc;
        $data['mKeyword'] = $this->mKeyword;
        $data['slide_list'] = $this->select_model->get_dunlop_slide();
        $data['tireDiameter'] = $this->select_model->get_dunlop_tireDiameter_by_pid($data['pid']);
        $this->load->view('product/lm704', $data);
    }

    public function dz102() {
        $data['pid'] = 6;
        $data['title'] = $this->title;
        $data['mTitle'] = $this->mTitle;
        $data['mDesc'] = $this->mDesc;
        $data['mKeyword'] = $this->mKeyword;
        $data['slide_list'] = $this->select_model->get_dunlop_slide();
        $data['tireDiameter'] = $this->select_model->get_dunlop_tireDiameter_by_pid($data['pid']);
        $this->load->view('product/dz102', $data);
    }

    public function dzII_star() {
        $data['pid'] = 7;
        $data['title'] = $this->title;
        $data['mTitle'] = $this->mTitle;
        $data['mDesc'] = $this->mDesc;
        $data['mKeyword'] = $this->mKeyword;
        $data['slide_list'] = $this->select_model->get_dunlop_slide();
        $data['tireDiameter'] = $this->select_model->get_dunlop_tireDiameter_by_pid($data['pid']);
        $this->load->view('product/dzII_star', $data);
    }

    public function sp_touring_t1() {
        $data['pid'] = 7;
        $data['title'] = $this->title;
        $data['mTitle'] = $this->mTitle;
        $data['mDesc'] = $this->mDesc;
        $data['mKeyword'] = $this->mKeyword;
        $data['slide_list'] = $this->select_model->get_dunlop_slide();
        $data['tireDiameter'] = $this->select_model->get_dunlop_tireDiameter_by_pid($data['pid']);
        $this->load->view('product/sp-touring-t1', $data);
    }

    public function product_pickup() {
        $data['pid'] = 8;
        $data['title'] = $this->title;
        $data['mTitle'] = $this->mTitle;
        $data['mDesc'] = $this->mDesc;
        $data['mKeyword'] = $this->mKeyword;
        $data['slide_list'] = $this->select_model->get_dunlop_slide();
        $data['tireDiameter'] = $this->select_model->get_dunlop_tireDiameter_by_pid($data['pid']);
        $this->load->view('product/product_pickup', $data);
    }

    public function product_oem() {
        //$data['pid'] = 8;
        $data['title'] = $this->title;
        $data['mTitle'] = $this->mTitle;
        $data['mDesc'] = $this->mDesc;
        $data['mKeyword'] = $this->mKeyword;
        $data['slide_list'] = $this->select_model->get_dunlop_slide();
        //$data['tireDiameter'] = $this->select_model->get_dunlop_tireDiameter_by_pid($data['pid']);
        $this->load->view('product/product_oem', $data);
    }

    public function product_oem_4x4() {
        //$data['pid'] = 8;
        $data['title'] = $this->title;
        $data['mTitle'] = $this->mTitle;
        $data['mDesc'] = $this->mDesc;
        $data['mKeyword'] = $this->mKeyword;
        $data['slide_list'] = $this->select_model->get_dunlop_slide();
        //$data['tireDiameter'] = $this->select_model->get_dunlop_tireDiameter_by_pid($data['pid']);
        $this->load->view('product/product_oem_4x4', $data);
    }

    public function product_oem_pickup() {
        //$data['pid'] = 8;
        $data['title'] = $this->title;
        $data['mTitle'] = $this->mTitle;
        $data['mDesc'] = $this->mDesc;
        $data['mKeyword'] = $this->mKeyword;
        $data['slide_list'] = $this->select_model->get_dunlop_slide();
        //$data['tireDiameter'] = $this->select_model->get_dunlop_tireDiameter_by_pid($data['pid']);
        $this->load->view('product/product_oem_pickup', $data);
    }

    public function warranty() {
        //$data['pid'] = 8;
        $data['title'] = $this->title;
        $data['mTitle'] = $this->mTitle;
        $data['mDesc'] = $this->mDesc;
        $data['mKeyword'] = $this->mKeyword;
        $data['slide_list'] = $this->select_model->get_dunlop_slide();
        //$data['tireDiameter'] = $this->select_model->get_dunlop_tireDiameter_by_pid($data['pid']);
        $this->load->view('product/warranty', $data);
    }

}
