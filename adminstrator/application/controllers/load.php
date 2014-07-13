<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Load extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->helpers('url_helper');
        $this->load->model('Item_model', '', TRUE);
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

    public function search_item($master_id = null) {
        $id = $this->input->post('txt_id');
        $url = 'http://api.platform.truelife.com/cms/content/true_u?condition=id=' . $id . '&format=json';
        $result = $this->getJsondata($url);



        header('Content-Type: text/html; charset=utf-8');
        $html = '<div class="alert alert-danger">not found any item...</div>';
        if ($result['contents'] != null) {
            $content = $result['contents']['entry'][0];
            $html = '<div class="alert alert-success">Found item...</div>';
            $html .= '<form class="form-group" id="form_add_item">';
            $html .= '<table class="table table-striped">';
            $html .= '<tr>';
            $html .= '<th>';
            $html .= '<label>id : </label>';
            $html .= '</th>';
            $html .= '<td>';
            $html .= '<input id="txt_id" name="txt_id" readonly="readonly" class="form-control"  value="' . $content['id'] . '"/>';
            $html .= '</td>';
            $html .= '</tr>';
            $html .= '<tr>';
            $html .= '<th>';
            $html .= '<label>parent id : </label>';
            $html .= '</th>';
            $html .= '<td>';
            $html .= '<input id="txt_parent_id" name="txt_parent_id"  class="form-control"  value="' . $master_id . '"/>';
            $html .= '</td>';
            $html .= '</tr>';
            $html .= '<th>';
            $html .= '<label>title : </label>';
            $html .= '</th>';
            $html .= '<td>';
            $html .= '<input id="txt_title" name="txt_title"  class="form-control"   value="' . $content['title'] . '"/>';
            $html .= '</td>';
            $html .= '</tr>';
            $html .= '<th>';
            $html .= '<label>description_wap : </label>';
            $html .= '</th>';
            $html .= '<td>';
            $html .= '<textarea id="txt_description_wap" name="txt_description_wap"   class="form-control" rows="3">' . preg_replace('/(?:<|&lt;)\/?([a-zA-Z]+) *[^<\/]*?(?:>|&gt;)/', '', $content['description_wap']) . '</textarea>';
            $html .= '</td>';
            $html .= '</tr>';
            $html .= '<th>';
            $html .= '<label>image : </label>';
            $html .= '</th>';
            $html .= '<td>';
            $html .= '<img src="' . $content['thumbnail4'] . '" />';
            $html .= '<input type="hidden" name="thumbnail" id="thumbnail"  value="' . $content['thumbnail4'] . '"/>';
            $html .= '</td>';
            $html .= '</tr>';
            $html .= '</table>';
            $html .= '</form>';
        }

        echo $html;
    }

    public function getitem_list() {
        $result = $this->Item_model->getitem_list();
        $html = '';
        $i = 1;
        $j = 1;
        foreach ($result as $row) {
            $html .= '<tr>';
            $html .= '<td>' . $i . '</td>';
            $html .= '<td>' . $row->item_id . '</td>';
            $html .= '<td>' . $row->description_wap . '</td>';
            $html .= '<td>' . $row->create_date . '</td>';
            $html .= '<td>' . $row->update_date . '</td>';
            $html .= '<td>';
            $html .= '<a  onclick="loaddata(' . $row->item_id . ')" class="btn"   id="btn_edit_item" style="color: #47a447;margin-right: 10px;" ><i class="fa fa-fw  fa-cog"></i></a>';
            $html .= '<a onclick="removedata(' . $row->id . ')"  class="btn" style="color: #f00;margin-right: 10px;" ><i class="fa fa-fw fa-minus-square-o"></i></a>';
            $html .= '<a   onclick="add_relate_item(' . $row->item_id . ')" class="button" style="color: #47a447;" />';
            if ($row->parent_count > 0) {
                $html .= '<a href="javascript:;" onclick="parent_toggle(' . $i . ');" ><span class="glyphicon glyphicon-minus" style="color:#000;margin-left:10px;" ></span></a>';
            }
            $html .= '</tr>';
            if ($row->parent_count > 0) {
                $parents = $this->Item_model->getitem_parent($row->item_id);
                $html .= '<tr style="background-color: rgb(250, 250, 250); display: none; background-position: initial initial; background-repeat: initial initial;" class="parent_list toogle' . $i . '"  >';
                $html .= '<td colspan = "2"></td>';
                $html .= '<td colspan = "5"> ';
                $html .= '<ul class = "list-group">';
                $html .= '<li class = "list-group-item">';
                $html .= '<table class="table">';
                $html .= '<thead>';
                $html .= '<tr>';
                $html .= '<th > #</th>';
                $html .= '<th>Deal id</th>';
                $html .= '<th>Deal name</th>';
                $html .= '<th>Create date</th>';
                $html .= '<th>Lastest edit date</th>';
                $html .= '<th>Tools</th>';
                $html .= '</tr>';
                $html .= '</thead>';
                foreach ($parents as $parent) {
                    $html .= '<tbody>';
                    $html .= '<tr>';
                    $html .= '<td>' . $j . '</td>';
                    $html .= '<td>' . $parent->item_id . '</td>';
                    $html .= '<td>' . $parent->title . '</td>';
                    $html .= '<td>' . $parent->create_date . '</td>';
                    $html .= '<td>' . $parent->update_date . '</td>';
                    $html .= '<td>';
                    $html .= '<button type="button" onclick="loaddata(' . $parent->item_id . ')" class="glyphicon glyphicon-edit"   id="btn_edit_item" style="color: #47a447;margin-right: 10px;" />';
                    $html .= '<button type="button" onclick="removedata(' . $parent->id . ')" class="glyphicon glyphicon-remove" style="color: #f00;" />';
                    $html .= '</tr>';
                    $j++;
                }
                $html .= '</tbody>';
                $html .= '</table>';
                $html .= '</li>';
                $html .= '</ul>';

                $html .= '</td>';
                $html .= '</tr>';
            }
            $i++;
        }
        echo $html;
    }

    public function add_item() {
        $item = array('item_id' => $this->input->post('txt_id'),
            'title' => $this->input->post('txt_title'),
            'parent_id' => $this->input->post('txt_parent_id'),
            'description_wap' => $this->input->post('txt_description_wap'),
            'image' => $this->input->post('thumbnail')
        );
        $this->Item_model->add($item);
        $data["status"] = array('message' => 'เพิ่มรายการสำเร็จ', 'type' => 'success');
        $this->output->set_header('Content-Type: application/json; charset=utf-8');
        echo json_encode($data);
    }

    public function removeitem_by_id() {
        $id = $this->input->post('id');
        $data["data"
                ] = $this->Item_model->removeitem_by_id($id);
        $data["status"] = array('message' => 'ลบรายการสำเร็จ', 'type' => 'success');
        $this->output->set_header('Content-Type: application/json; charset=utf-8');
        echo json_encode($data);
    }

    public function edit_item($id) {
        $item = array('title' => $this->input->post('input_title'),
            'parent_id' => $this->input->post('input_parent_id'),
            'description_wap' => $this->input->post('input_description_wap')
        );
        $this->Item_model->edit($id, $item);
        $data["status"] = array('message' => 'แก้ไขรายการสำเร็จ', 'type' => 'success');
        $this->output->set_header('Content-Type: application/json; charset=utf-8');
        echo json_encode($data);
    }

    public function getitem_by_id() {
        $id = $this->input->post('id');
        $data["data"
                ] = $this->Item_model->getitem_by_id($id);
        $data["status"] = array('message' => 'เพิ่มรายการสำเร็จ', 'type' => 'success');
        $this->output->set_header('Content-Type: application/json; charset=utf-8');
        echo json_encode($data);
    }

}
