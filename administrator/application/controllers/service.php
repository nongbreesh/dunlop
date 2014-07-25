<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Service extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->helpers('url_helper');
        $this->load->model('order_model');
        $this->load->model('insert_model');
        $this->load->model('select_model');
        $this->load->model('update_data');
        $this->load->model('get_data');
        $this->load->model('get_data');
        $this->load->helper('time_helper');
        $this->load->library('upload');
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

    public function load_dealer_list() {
        $result = $this->select_model->get_dealer_list();
        $i = 1;
        $html = '';
        foreach ($result as $row) {

            $html .= '<tr>';
            $html .= '<td>' . $row->Dealer_ID . '</td>';
            $html .= '<td>' . $row->AREA_NAME . '</td>';
            $html .= '<td>' . $row->Dealer_Name . '<br>';
            $html .= '<div class = "tools"><span class = "edit"><a href = "javascript:;" onclick="editdata(' . $row->Dealer_ID . ');">Edit</a> | </span><span class = "delete"><a class = "delete-tag" href = "javascript:;" onclick="removedata(' . $row->Dealer_ID . ');">Delete</a></div></td>';

            $html .= '<td>' . $row->Dealer_Address . '</td>';
            $html .= '<td>' . $row->Dealer_Tel . '</td>';
            $html .= '<td>' . $row->Dealer_URL . '</td>';
            $html .= '<td>' . $row->Dealer_Agent . '</td>';
            $html .= '<td>' . $row->Create_Date . '</td>';
            $html .= '<td>' . $row->Update_Date . '</td>';






            $html .= '</tr>';
            $i++;
        }
        echo $html;
    }

    public function load_area() {
        $id = $this->input->post('zone_id');
        $data['result'] = $this->select_model->get_dunlop_area($id);

        $this->output->set_header('Content-Type: application/json; charset=utf-8');
        echo json_encode($data);
    }

    public function getitem_order_info() {
        $id = $this->input->post('id');
        $data['result'] = $this->order_model->getOrder($id);

        $this->output->set_header('Content-Type: application/json; charset=utf-8');
        echo json_encode($data);
    }

    public function getitem_order_detail() {
        $id = $this->input->post('id');
        $order = $this->order_model->getOrder($id);
        $result = $this->order_model->getOrderDetail($id);

        header('Content-Type: text/html; charset=utf-8');

        $html = '<div class="row invoice-info">';
        $html .= '<div class="col-sm-4 invoice-col">';
        $html .= '<strong>Order information</strong><br>';
        $html .= 'Order id : #' . $order->order_id . '<br>';
        $html .= 'Order owner : ' . $order->order_id . '<br>';
        $html .= 'Ordered time : ' . $order->order_time . '<br>';
        $html .= 'Paid time : ' . $order->payment_time . '<br>';
        $html .= 'Shiped time : ' . $order->shipping_time . '<br>';
        $html .= 'Status : ';
        if ($order->is_payment == 0) {
            $html .= '<span class="label label-warning">wait payment</span>  ';
        } else {
            $html .= '<span class="label label-success">paid</span>  ';
        }

        if ($order->is_shipping == 0) {
            $html .= '<span class="label label-warning">wait shiping</span>  ';
        } else {
            $html .= '<span class="label label-success">shiped</span>  ';
        }

        $html .= '</div>';

        $html .= '<div class="col-sm-4 invoice-col">';
        $html .= '<strong> Address</strong>';
        $html .= '<address>';
        $html .= '' . $order->orders_ownername . '<br>';
        $html .= '' . $order->orders_address . '<br>';
        $html .= '' . $order->orders_providename . '<br>';
        $html .= '' . $order->orders_zipcode . '<br>';
        $html .= 'Phone: ' . $order->orders_tel . '<br/>';
        $html .= ' Email: ' . $order->orders_email . '';
        $html .= '</address>';
        $html .= ' </div>';

        $html .= '<div class="col-sm-4 invoice-col">';
        $html .= '<strong>Shipping Address</strong>';
        $html .= '<address>';
        $html .= '' . $order->orders_ownername . '<br>';
        $html .= '' . $order->orders_address . '<br>';
        $html .= '' . $order->orders_providename . '<br>';
        $html .= '' . $order->orders_zipcode . '<br>';
        $html .= 'Phone: ' . $order->orders_tel . '<br/>';
        $html .= ' Email: ' . $order->orders_email . '';
        $html .= '</address>';
        $html .= ' </div>';
        $html .= ' </div>';

        $html .= '<table class="table table-striped">';
        $html .= '<thead>';
        $html .= '<tr>';
        $html .= '<th>Product</th>';
        $html .= '<th>Serial #</th>';
        $html .= '<th>Price</th>';
        $html .= '<th>Qty</th>';
        $html .= '<th>In stock</th>';
        $html .= '<th>Subtotal</th>';
        $html .= '</tr>';
        $html .= '</thead>';
        $html .= '<tbody>';

        $summary = 0;
        $sumweight = 0;
        foreach ($result as $row) {


            $html .= '<tr>';
            $html .= '<td>' . $row->title . '</td>';
            $html .= '<td>' . $row->item_code . '</td>';
            $html .= '<td>' . number_format($row->price, 2, '.', ',') . '</td>';
            $html .= '<td>' . $row->qty . '</td>';
            $html .= '<td>' . $row->amount . '</td>';
            $html .= '<td>' . number_format($row->subtotal, 2, '.', ',') . '</td>';
            $html .= '</tr>';
            $sumweight += $row->weight;
            $summary += $row->subtotal;
        }

        $html .= '<tr>';
        $html .= '<td colspan = "5" align="right"><strong>Summary</strong></td>';
        $html .= '<td>' . number_format($summary, 2, '.', ',') . '</td>';
        $html .= '</tr >';
        $html .= '<tr>';
        $html .= '<td colspan = "5" align="right"><strong>EMS</strong></td>';
        $html .= '<td>' . number_format(costshipping($sumweight), 2, '.', ',') . '</td>';
        $html .= '</tr >';
        $html .= '<tr>';
        $html .= '<td colspan = "5" align="right"><strong>Package cost</strong></td>';
        $html .= '<td>' . number_format(costbox($sumweight), 2, '.', ',') . '</td>';
        $html .= '</tr >';
        $html .= '<tr>';
        $html .= '<td colspan = "5" align="right"><strong>Total summary</strong></td>';
        $html .= '<td>' . number_format($summary + costshipping($sumweight) + costbox($sumweight), 2, '.', ',') . '</td>';
        $html .= '</tr >';
        $html .= '</tbody>';
        $html .= '</table> ';




        echo $html;
    }

    function upload_picture_group() {
        $this->load->library('upload');
        $type = $_FILES['input_image_add']['type'];
        if (trim($_FILES["input_image_add"]["tmp_name"]) != "") {
            $images = $_FILES["input_image_add"]["tmp_name"];
            $old_images = $_FILES["input_image_add"]["name"];
            $new_images = "Thumbnails_" . $_FILES["input_image_add"]["name"];
            copy($_FILES["input_image_add"]["tmp_name"], "./public/uploads/" . $_FILES["input_image_add"]["name"]);
            $width = 150; //*** Fix Width & Heigh (Autu caculate) ***//
            $weight = GetimageSize($images);
            $height = round($width * $weight[1] / $weight[0]);
            $images_orig = ImageCreateFromJPEG($images);
            $photoX = ImagesX($images_orig);
            $photoY = ImagesY($images_orig);
            $images_fin = ImageCreateTrueColor($width, $height);
            ImageCopyResampled($images_fin, $images_orig, 0, 0, 0, 0, $width + 1, $height + 1, $photoX, $photoY);
            if ($type) {
                switch ($type) {
                    case 'image/jpeg':
                        $images_orig = ImageCreateFromJPEG($images);
                        $photoX = ImagesX($images_orig);
                        $photoY = ImagesY($images_orig);
                        $images_fin = ImageCreateTrueColor($width, $height);
                        ImageCopyResampled($images_fin, $images_orig, 0, 0, 0, 0, $width + 1, $height + 1, $photoX, $photoY);
                        ImageJPEG($images_fin, "./public/uploads/" . $new_images);
                        break;

                    case 'image/png':
                        $images_orig = imagecreatefrompng($images);
                        $photoX = ImagesX($images_orig);
                        $photoY = ImagesY($images_orig);
                        $images_fin = ImageCreateTrueColor($width, $height);
                        ImageCopyResampled($images_fin, $images_orig, 0, 0, 0, 0, $width + 1, $height + 1, $photoX, $photoY);
                        imagepng($images_fin, "./public/uploads/" . $new_images);
                        break;
                }
            }


            ImageDestroy($images_orig);
            ImageDestroy($images_fin);
        }


        $html = '<img src="' . base_url() . 'public/uploads/' . $new_images . '" height="50">';
        $html .= '<input type="hidden" id="input_hdimage_add" name="input_hdimage_add" value="' . $old_images . '" />';
        echo $html;
    }

    function upload_picture_group_hover() {
        $this->load->library('upload');
        $type = $_FILES['input_image_hover_add']['type'];
        if (trim($_FILES["input_image_hover_add"]["tmp_name"]) != "") {
            $images = $_FILES["input_image_hover_add"]["tmp_name"];
            $old_images = $_FILES["input_image_hover_add"]["name"];
            $new_images = "Thumbnails_" . $_FILES["input_image_hover_add"]["name"];
            copy($_FILES["input_image_hover_add"]["tmp_name"], "./public/uploads/" . $_FILES["input_image_hover_add"]["name"]);
            $width = 150; //*** Fix Width & Heigh (Autu caculate) ***//
            $weight = GetimageSize($images);
            $height = round($width * $weight[1] / $weight[0]);
            $images_orig = ImageCreateFromJPEG($images);
            $photoX = ImagesX($images_orig);
            $photoY = ImagesY($images_orig);
            $images_fin = ImageCreateTrueColor($width, $height);
            ImageCopyResampled($images_fin, $images_orig, 0, 0, 0, 0, $width + 1, $height + 1, $photoX, $photoY);
            if ($type) {
                switch ($type) {
                    case 'image/jpeg':
                        $images_orig = ImageCreateFromJPEG($images);
                        $photoX = ImagesX($images_orig);
                        $photoY = ImagesY($images_orig);
                        $images_fin = ImageCreateTrueColor($width, $height);
                        ImageCopyResampled($images_fin, $images_orig, 0, 0, 0, 0, $width + 1, $height + 1, $photoX, $photoY);
                        ImageJPEG($images_fin, "./public/uploads/" . $new_images);
                        break;

                    case 'image/png':
                        $images_orig = imagecreatefrompng($images);
                        $photoX = ImagesX($images_orig);
                        $photoY = ImagesY($images_orig);
                        $images_fin = ImageCreateTrueColor($width, $height);
                        ImageCopyResampled($images_fin, $images_orig, 0, 0, 0, 0, $width + 1, $height + 1, $photoX, $photoY);
                        imagepng($images_fin, "./public/uploads/" . $new_images);
                        break;
                }
            }


            ImageDestroy($images_orig);
            ImageDestroy($images_fin);
        }


        $html = '<img src="' . base_url() . 'public/uploads/' . $new_images . '" height="50">';
        $html .= '<input type="hidden" id="input_hdimage_hover_add" name="input_hdimage_hover_add" value="' . $old_images . '" />';
        echo $html;
    }

    function upload_picture() {
        $this->load->library('upload');

        if (trim($_FILES["input_image"]["tmp_name"]) != "") {
            $type = $_FILES['input_image']['type'];
            $images = $_FILES["input_image"]["tmp_name"];
            $old_images = $_FILES["input_image"]["name"];
            $new_images = "Thumbnails_" . $_FILES["input_image"]["name"];
            copy($_FILES["input_image"]["tmp_name"], "./public/uploads/" . $_FILES["input_image"]["name"]);
            $width = 150; //*** Fix Width & Heigh (Autu caculate) ***//
            $weight = GetimageSize($images);
            $height = round($width * $weight[1] / $weight[0]);

            if ($type) {
                switch ($type) {
                    case 'image/jpeg':
                        $images_orig = ImageCreateFromJPEG($images);
                        $photoX = ImagesX($images_orig);
                        $photoY = ImagesY($images_orig);
                        $images_fin = ImageCreateTrueColor($width, $height);
                        ImageCopyResampled($images_fin, $images_orig, 0, 0, 0, 0, $width + 1, $height + 1, $photoX, $photoY);
                        ImageJPEG($images_fin, "./public/uploads/" . $new_images);
                        break;

                    case 'image/png':
                        $images_orig = imagecreatefrompng($images);
                        $photoX = ImagesX($images_orig);
                        $photoY = ImagesY($images_orig);
                        $images_fin = ImageCreateTrueColor($width, $height);
                        ImageCopyResampled($images_fin, $images_orig, 0, 0, 0, 0, $width + 1, $height + 1, $photoX, $photoY);
                        imagepng($images_fin, "./public/uploads/" . $new_images);
                        break;
                    case 'image/gif':
                        $images_orig = imagecreatefromgif($images);
                        $photoX = ImagesX($images_orig);
                        $photoY = ImagesY($images_orig);
                        $images_fin = ImageCreateTrueColor($width, $height);
                        ImageCopyResampled($images_fin, $images_orig, 0, 0, 0, 0, $width + 1, $height + 1, $photoX, $photoY);
                        imagepng($images_fin, "./public/uploads/" . $new_images);
                        break;
                }
            }

            ImageDestroy($images_orig);
            ImageDestroy($images_fin);
        }


        $html = '<img src="' . base_url() . 'public/uploads/' . $new_images . '" height="50">';
        $html .= '<input type="hidden" id="input_hdimage" name="input_hdimage" value="' . $old_images . '" />';
        echo $html;
    }

    function upload_picture_hover() {
        $this->load->library('upload');

        if (trim($_FILES["input_image_hover"]["tmp_name"]) != "") {
            $type = $_FILES['input_image_hover']['type'];
            $images = $_FILES["input_image_hover"]["tmp_name"];
            $old_images = $_FILES["input_image_hover"]["name"];
            $new_images = "Thumbnails_" . $_FILES["input_image_hover"]["name"];
            copy($_FILES["input_image_hover"]["tmp_name"], "./public/uploads/" . $_FILES["input_image_hover"]["name"]);
            $width = 150; //*** Fix Width & Heigh (Autu caculate) ***//
            $weight = GetimageSize($images);
            $height = round($width * $weight[1] / $weight[0]);

            if ($type) {
                switch ($type) {
                    case 'image/jpeg':
                        $images_orig = ImageCreateFromJPEG($images);
                        $photoX = ImagesX($images_orig);
                        $photoY = ImagesY($images_orig);
                        $images_fin = ImageCreateTrueColor($width, $height);
                        ImageCopyResampled($images_fin, $images_orig, 0, 0, 0, 0, $width + 1, $height + 1, $photoX, $photoY);
                        ImageJPEG($images_fin, "./public/uploads/" . $new_images);
                        break;

                    case 'image/png':
                        $images_orig = imagecreatefrompng($images);
                        $photoX = ImagesX($images_orig);
                        $photoY = ImagesY($images_orig);
                        $images_fin = ImageCreateTrueColor($width, $height);
                        ImageCopyResampled($images_fin, $images_orig, 0, 0, 0, 0, $width + 1, $height + 1, $photoX, $photoY);
                        imagepng($images_fin, "./public/uploads/" . $new_images);
                        break;
                    case 'image/gif':
                        $images_orig = imagecreatefromgif($images);
                        $photoX = ImagesX($images_orig);
                        $photoY = ImagesY($images_orig);
                        $images_fin = ImageCreateTrueColor($width, $height);
                        ImageCopyResampled($images_fin, $images_orig, 0, 0, 0, 0, $width + 1, $height + 1, $photoX, $photoY);
                        imagepng($images_fin, "./public/uploads/" . $new_images);
                        break;
                }
            }

            ImageDestroy($images_orig);
            ImageDestroy($images_fin);
        }


        $html = '<img src="' . base_url() . 'public/uploads/' . $new_images . '" height="50">';
        $html .= '<input type="hidden" id="input_hdimage_hover" name="input_hdimage_hover" value="' . $old_images . '" />';
        echo $html;
    }
    
    function uploadedit_picture() {
        $this->load->library('upload');

        if (trim($_FILES["inputedit_image"]["tmp_name"]) != "") {
            $type = $_FILES['inputedit_image']['type'];
            $images = $_FILES["inputedit_image"]["tmp_name"];
            $old_images = $_FILES["inputedit_image"]["name"];
            $new_images = "Thumbnails_" . $_FILES["inputedit_image"]["name"];
            copy($_FILES["inputedit_image"]["tmp_name"], "./public/uploads/" . $_FILES["inputedit_image"]["name"]);
            $width = 150; //*** Fix Width & Heigh (Autu caculate) ***//
            $weight = GetimageSize($images);
            $height = round($width * $weight[1] / $weight[0]);

            if ($type) {
                switch ($type) {
                    case 'image/jpeg':
                        $images_orig = ImageCreateFromJPEG($images);
                        $photoX = ImagesX($images_orig);
                        $photoY = ImagesY($images_orig);
                        $images_fin = ImageCreateTrueColor($width, $height);
                        ImageCopyResampled($images_fin, $images_orig, 0, 0, 0, 0, $width + 1, $height + 1, $photoX, $photoY);
                        ImageJPEG($images_fin, "./public/uploads/" . $new_images);
                        break;

                    case 'image/png':
                        $images_orig = imagecreatefrompng($images);
                        $photoX = ImagesX($images_orig);
                        $photoY = ImagesY($images_orig);
                        $images_fin = ImageCreateTrueColor($width, $height);
                        ImageCopyResampled($images_fin, $images_orig, 0, 0, 0, 0, $width + 1, $height + 1, $photoX, $photoY);
                        imagepng($images_fin, "./public/uploads/" . $new_images);
                        break;
                    case 'image/gif':
                        $images_orig = imagecreatefromgif($images);
                        $photoX = ImagesX($images_orig);
                        $photoY = ImagesY($images_orig);
                        $images_fin = ImageCreateTrueColor($width, $height);
                        ImageCopyResampled($images_fin, $images_orig, 0, 0, 0, 0, $width + 1, $height + 1, $photoX, $photoY);
                        imagepng($images_fin, "./public/uploads/" . $new_images);
                        break;
                }
            }

            ImageDestroy($images_orig);
            ImageDestroy($images_fin);
        }


        $html = '<img src="' . base_url() . 'public/uploads/' . $new_images . '" height="50">';
        $html .= '<input type="hidden" id="inputedit_hdimage" name="inputedit_hdimage" value="' . $old_images . '" />';
        echo $html;
    }

    function uploadedit_picture_hover() {
        $this->load->library('upload');

        if (trim($_FILES["inputedit_image_hover"]["tmp_name"]) != "") {
            $type = $_FILES['inputedit_image_hover']['type'];
            $images = $_FILES["inputedit_image_hover"]["tmp_name"];
            $old_images = $_FILES["inputedit_image_hover"]["name"];
            $new_images = "Thumbnails_" . $_FILES["inputedit_image_hover"]["name"];
            copy($_FILES["inputedit_image_hover"]["tmp_name"], "./public/uploads/" . $_FILES["inputedit_image_hover"]["name"]);
            $width = 150; //*** Fix Width & Heigh (Autu caculate) ***//
            $weight = GetimageSize($images);
            $height = round($width * $weight[1] / $weight[0]);

            if ($type) {
                switch ($type) {
                    case 'image/jpeg':
                        $images_orig = ImageCreateFromJPEG($images);
                        $photoX = ImagesX($images_orig);
                        $photoY = ImagesY($images_orig);
                        $images_fin = ImageCreateTrueColor($width, $height);
                        ImageCopyResampled($images_fin, $images_orig, 0, 0, 0, 0, $width + 1, $height + 1, $photoX, $photoY);
                        ImageJPEG($images_fin, "./public/uploads/" . $new_images);
                        break;

                    case 'image/png':
                        $images_orig = imagecreatefrompng($images);
                        $photoX = ImagesX($images_orig);
                        $photoY = ImagesY($images_orig);
                        $images_fin = ImageCreateTrueColor($width, $height);
                        ImageCopyResampled($images_fin, $images_orig, 0, 0, 0, 0, $width + 1, $height + 1, $photoX, $photoY);
                        imagepng($images_fin, "./public/uploads/" . $new_images);
                        break;
                    case 'image/gif':
                        $images_orig = imagecreatefromgif($images);
                        $photoX = ImagesX($images_orig);
                        $photoY = ImagesY($images_orig);
                        $images_fin = ImageCreateTrueColor($width, $height);
                        ImageCopyResampled($images_fin, $images_orig, 0, 0, 0, 0, $width + 1, $height + 1, $photoX, $photoY);
                        imagepng($images_fin, "./public/uploads/" . $new_images);
                        break;
                }
            }

            ImageDestroy($images_orig);
            ImageDestroy($images_fin);
        }


        $html = '<img src="' . base_url() . 'public/uploads/' . $new_images . '" height="50">';
        $html .= '<input type="hidden" id="inputedit_hdimage_hover" name="inputedit_hdimage_hover" value="' . $old_images . '" />';
        echo $html;
    }
    
    function upload_picture_slide_bg() {
        $this->load->library('upload');

        if (trim($_FILES["input_image_slide_bg"]["tmp_name"]) != "") {
            $type = $_FILES['input_image_slide_bg']['type'];
            $images = $_FILES["input_image_slide_bg"]["tmp_name"];
            $old_images = $_FILES["input_image_slide_bg"]["name"];
            $new_images = "Thumbnails_" . $_FILES["input_image_slide_bg"]["name"];
            copy($_FILES["input_image_slide_bg"]["tmp_name"], "./public/uploads/slide/" . $_FILES["input_image_slide_bg"]["name"]);
            $width = 150; //*** Fix Width & Heigh (Autu caculate) ***//
            $weight = GetimageSize($images);
            $height = round($width * $weight[1] / $weight[0]);

            if ($type) {
                switch ($type) {
                    case 'image/jpeg':
                        $images_orig = ImageCreateFromJPEG($images);
                        $photoX = ImagesX($images_orig);
                        $photoY = ImagesY($images_orig);
                        $images_fin = ImageCreateTrueColor($width, $height);
                        ImageCopyResampled($images_fin, $images_orig, 0, 0, 0, 0, $width + 1, $height + 1, $photoX, $photoY);
                        ImageJPEG($images_fin, "./public/uploads/slide/" . $new_images);
                        break;

                    case 'image/png':
                        $images_orig = imagecreatefrompng($images);
                        $photoX = ImagesX($images_orig);
                        $photoY = ImagesY($images_orig);
                        $images_fin = ImageCreateTrueColor($width, $height);
                        ImageCopyResampled($images_fin, $images_orig, 0, 0, 0, 0, $width + 1, $height + 1, $photoX, $photoY);
                        imagepng($images_fin, "./public/uploads/slide/" . $new_images);
                        break;
                }
            }

            ImageDestroy($images_orig);
            ImageDestroy($images_fin);
        }


        $html = '<img src="' . base_url() . 'public/uploads/slide/' . $new_images . '" height="50">';
        $html .= '<input type="hidden" id="input_hdimage_slide_bg" name="input_hdimage_slide_bg" value="' . $old_images . '" />';
        echo $html;
    }

    function upload_picture_slide_object1() {
        $this->load->library('upload');

        if (trim($_FILES["input_image_slide_object1"]["tmp_name"]) != "") {
            $type = $_FILES['input_image_slide_object1']['type'];
            $images = $_FILES["input_image_slide_object1"]["tmp_name"];
            $old_images = $_FILES["input_image_slide_object1"]["name"];
            $new_images = "Thumbnails_" . $_FILES["input_image_slide_object1"]["name"];
            copy($_FILES["input_image_slide_object1"]["tmp_name"], "./public/uploads/slide/" . $_FILES["input_image_slide_object1"]["name"]);
            $width = 150; //*** Fix Width & Heigh (Autu caculate) ***//
            $weight = GetimageSize($images);
            $height = round($width * $weight[1] / $weight[0]);

            if ($type) {
                switch ($type) {
                    case 'image/jpeg':
                        $images_orig = ImageCreateFromJPEG($images);
                        $photoX = ImagesX($images_orig);
                        $photoY = ImagesY($images_orig);
                        $images_fin = ImageCreateTrueColor($width, $height);
                        ImageCopyResampled($images_fin, $images_orig, 0, 0, 0, 0, $width + 1, $height + 1, $photoX, $photoY);
                        ImageJPEG($images_fin, "./public/uploads/slide/" . $new_images);
                        break;

                    case 'image/png':
                        $images_orig = imagecreatefrompng($images);
                        $photoX = ImagesX($images_orig);
                        $photoY = ImagesY($images_orig);
                        $images_fin = ImageCreateTrueColor($width, $height);
                        ImageCopyResampled($images_fin, $images_orig, 0, 0, 0, 0, $width + 1, $height + 1, $photoX, $photoY);
                        imagepng($images_fin, "./public/uploads/slide/" . $new_images);
                        break;
                }
            }

            ImageDestroy($images_orig);
            ImageDestroy($images_fin);
        }


        $html = '<img src="' . base_url() . 'public/uploads/slide/' . $new_images . '" height="50">';
        $html .= '<input type="hidden" id="input_hdimage_slide_object1" name="input_hdimage_slide_object1" value="' . $old_images . '" />';
        echo $html;
    }

    function upload_picture_slide_object2() {
        $this->load->library('upload');

        if (trim($_FILES["input_image_slide_object2"]["tmp_name"]) != "") {
            $type = $_FILES['input_image_slide_object2']['type'];
            $images = $_FILES["input_image_slide_object2"]["tmp_name"];
            $old_images = $_FILES["input_image_slide_object2"]["name"];
            $new_images = "Thumbnails_" . $_FILES["input_image_slide_object2"]["name"];
            copy($_FILES["input_image_slide_object2"]["tmp_name"], "./public/uploads/slide/" . $_FILES["input_image_slide_object2"]["name"]);
            $width = 150; //*** Fix Width & Heigh (Autu caculate) ***//
            $weight = GetimageSize($images);
            $height = round($width * $weight[1] / $weight[0]);

            if ($type) {
                switch ($type) {
                    case 'image/jpeg':
                        $images_orig = ImageCreateFromJPEG($images);
                        $photoX = ImagesX($images_orig);
                        $photoY = ImagesY($images_orig);
                        $images_fin = ImageCreateTrueColor($width, $height);
                        ImageCopyResampled($images_fin, $images_orig, 0, 0, 0, 0, $width + 1, $height + 1, $photoX, $photoY);
                        ImageJPEG($images_fin, "./public/uploads/slide/" . $new_images);
                        break;

                    case 'image/png':
                        $images_orig = imagecreatefrompng($images);
                        $photoX = ImagesX($images_orig);
                        $photoY = ImagesY($images_orig);
                        $images_fin = ImageCreateTrueColor($width, $height);
                        ImageCopyResampled($images_fin, $images_orig, 0, 0, 0, 0, $width + 1, $height + 1, $photoX, $photoY);
                        imagepng($images_fin, "./public/uploads/slide/" . $new_images);
                        break;
                }
            }

            ImageDestroy($images_orig);
            ImageDestroy($images_fin);
        }


        $html = '<img src="' . base_url() . 'public/uploads/slide/' . $new_images . '" height="50">';
        $html .= '<input type="hidden" id="input_hdimage_slide_object2" name="input_hdimage_slide_object2" value="' . $old_images . '" />';
        echo $html;
    }

    function upload_picture_slide_object3() {
        $this->load->library('upload');

        if (trim($_FILES["input_image_slide_object3"]["tmp_name"]) != "") {
            $type = $_FILES['input_image_slide_object3']['type'];
            $images = $_FILES["input_image_slide_object3"]["tmp_name"];
            $old_images = $_FILES["input_image_slide_object3"]["name"];
            $new_images = "Thumbnails_" . $_FILES["input_image_slide_object3"]["name"];
            copy($_FILES["input_image_slide_object3"]["tmp_name"], "./public/uploads/slide/" . $_FILES["input_image_slide_object3"]["name"]);
            $width = 150; //*** Fix Width & Heigh (Autu caculate) ***//
            $weight = GetimageSize($images);
            $height = round($width * $weight[1] / $weight[0]);

            if ($type) {
                switch ($type) {
                    case 'image/jpeg':
                        $images_orig = ImageCreateFromJPEG($images);
                        $photoX = ImagesX($images_orig);
                        $photoY = ImagesY($images_orig);
                        $images_fin = ImageCreateTrueColor($width, $height);
                        ImageCopyResampled($images_fin, $images_orig, 0, 0, 0, 0, $width + 1, $height + 1, $photoX, $photoY);
                        ImageJPEG($images_fin, "./public/uploads/slide/" . $new_images);
                        break;

                    case 'image/png':
                        $images_orig = imagecreatefrompng($images);
                        $photoX = ImagesX($images_orig);
                        $photoY = ImagesY($images_orig);
                        $images_fin = ImageCreateTrueColor($width, $height);
                        ImageCopyResampled($images_fin, $images_orig, 0, 0, 0, 0, $width + 1, $height + 1, $photoX, $photoY);
                        imagepng($images_fin, "./public/uploads/slide/" . $new_images);
                        break;
                }
            }

            ImageDestroy($images_orig);
            ImageDestroy($images_fin);
        }


        $html = '<img src="' . base_url() . 'public/uploads/slide/' . $new_images . '" height="50">';
        $html .= '<input type="hidden" id="input_hdimage_slide_object3" name="input_hdimage_slide_object3" value="' . $old_images . '" />';
        echo $html;
    }

    function upload_pdf() {
        $this->load->library('upload');

        if (trim($_FILES["input_pdf"]["tmp_name"]) != "") {
            $file_name = $_FILES["input_pdf"]["name"];
            copy($_FILES["input_pdf"]["tmp_name"], "./public/uploads/files/" . $_FILES["input_pdf"]["name"]);
        }
        $html = '[' . $file_name . ']';
        $html .= '<input type="hidden" id="input_hdpdf" name="input_hdpdf" value="' . $file_name . '" />';
        echo $html;
    }
    
    function uploadedit_pdf() {
        $this->load->library('upload');

        if (trim($_FILES["inputedit_pdf"]["tmp_name"]) != "") {
            $file_name = $_FILES["inputedit_pdf"]["name"];
            copy($_FILES["inputedit_pdf"]["tmp_name"], "./public/uploads/files/" . $_FILES["inputedit_pdf"]["name"]);
        }
        $html = '[' . $file_name . ']';
        $html .= '<input type="hidden" id="inputedit_hdpdf" name="inputedit_hdpdf" value="' . $file_name . '" />';
        echo $html;
    }

    function gettire_detail() {
        $id = ($this->input->post('id') != false ? $this->input->post('id') : '');

        $data['result'] = $this->get_data->getTirebyId($id);

        $this->output->set_header('Content-Type: application/json; charset=utf-8');
        echo json_encode($data);
    }

    function getslide_detail() {
        $id = ($this->input->post('id') != false ? $this->input->post('id') : '');

        $data['result'] = $this->get_data->getSlidebyId($id);

        $this->output->set_header('Content-Type: application/json; charset=utf-8');
        echo json_encode($data);
    }

    function getvideo_detail() {
        $id = ($this->input->post('id') != false ? $this->input->post('id') : '');

        $data['result'] = $this->get_data->getVideobyId($id);

        $this->output->set_header('Content-Type: application/json; charset=utf-8');
        echo json_encode($data);
    }

    function getnews_detail() {
        $id = ($this->input->post('id') != false ? $this->input->post('id') : '');

        $data['result'] = $this->get_data->getNewsbyId($id);

        $this->output->set_header('Content-Type: application/json; charset=utf-8');
        echo json_encode($data);
    }

    function gethighlight_detail() {
        $id = ($this->input->post('id') != false ? $this->input->post('id') : '');

        $data['result'] = $this->get_data->getHighlightbyId($id);

        $this->output->set_header('Content-Type: application/json; charset=utf-8');
        echo json_encode($data);
    }

    function getproduct_detail() {
        $id = ($this->input->post('id') != false ? $this->input->post('id') : '');

        $data['result'] = $this->get_data->getProductsbyId($id);

        $this->output->set_header('Content-Type: application/json; charset=utf-8');
        echo json_encode($data);
    }

    function get_product_category() {
        $data['result'] = $this->get_data->getdunlop_type();
        $this->output->set_header('Content-Type: application/json; charset=utf-8');
        echo json_encode($data);
    }

    function get_product_group() {
        $data['result'] = $this->get_data->getdunlop_group();
        $this->output->set_header('Content-Type: application/json; charset=utf-8');
        echo json_encode($data);
    }

    function get_knowledge_category() {
        $data['result'] = $this->get_data->getdunlop_type();
        $this->output->set_header('Content-Type: application/json; charset=utf-8');
        echo json_encode($data);
    }

    function get_about_category() {
        $data['result'] = $this->get_data->getdunlop_type();
        $this->output->set_header('Content-Type: application/json; charset=utf-8');
        echo json_encode($data);
    }

    function getcontent() {
        $id = ($this->input->post('id') != false ? $this->input->post('id') : '');
        $data['result'] = $this->get_data->getContent($id);
        $this->output->set_header('Content-Type: application/json; charset=utf-8');
        echo json_encode($data);
    }

    function delete_tire() {
        $id = ($this->input->post('id') != false ? $this->input->post('id') : '');

        if ($this->update_data->delete_Tire($id)) {
            $data['status'] = array('message' => 'ลบสำเร็จ', 'type' => 'success');
        } else {
            $data['status'] = array('message' => 'ลบไม่สำเร็จ', 'type' => 'danger');
        }

        $this->output->set_header('Content-Type: application/json; charset=utf-8');
        echo json_encode($data);
    }

    function delete_slide() {
        $id = ($this->input->post('id') != false ? $this->input->post('id') : '');

        if ($this->update_data->delete_Slide($id)) {
            $data['status'] = array('message' => 'ลบสำเร็จ', 'type' => 'success');
        } else {
            $data['status'] = array('message' => 'ลบไม่สำเร็จ', 'type' => 'danger');
        }

        $this->output->set_header('Content-Type: application/json; charset=utf-8');
        echo json_encode($data);
    }

    function delete_video() {
        $id = ($this->input->post('id') != false ? $this->input->post('id') : '');

        if ($this->update_data->delete_Video($id)) {
            $data['status'] = array('message' => 'ลบสำเร็จ', 'type' => 'success');
        } else {
            $data['status'] = array('message' => 'ลบไม่สำเร็จ', 'type' => 'danger');
        }

        $this->output->set_header('Content-Type: application/json; charset=utf-8');
        echo json_encode($data);
    }

    function delete_dealer() {
        $id = ($this->input->post('id') != false ? $this->input->post('id') : '');

        if ($this->update_data->delete_Dealer($id)) {
            $data['status'] = array('message' => 'ลบสำเร็จ', 'type' => 'success');
        } else {
            $data['status'] = array('message' => 'ลบไม่สำเร็จ', 'type' => 'danger');
        }

        $this->output->set_header('Content-Type: application/json; charset=utf-8');
        echo json_encode($data);
    }

    function delete_news() {
        $id = ($this->input->post('id') != false ? $this->input->post('id') : '');

        if ($this->update_data->delete_News($id)) {
            $data['status'] = array('message' => 'ลบสำเร็จ', 'type' => 'success');
        } else {
            $data['status'] = array('message' => 'ลบไม่สำเร็จ', 'type' => 'danger');
        }

        $this->output->set_header('Content-Type: application/json; charset=utf-8');
        echo json_encode($data);
    }

    function delete_highlight() {
        $id = ($this->input->post('id') != false ? $this->input->post('id') : '');

        if ($this->update_data->delete_Highlight($id)) {
            $data['status'] = array('message' => 'ลบสำเร็จ', 'type' => 'success');
        } else {
            $data['status'] = array('message' => 'ลบไม่สำเร็จ', 'type' => 'danger');
        }

        $this->output->set_header('Content-Type: application/json; charset=utf-8');
        echo json_encode($data);
    }

    function delete_product() {
        $id = ($this->input->post('id') != false ? $this->input->post('id') : '');

        if ($this->update_data->delete_Product($id)) {
            $data['status'] = array('message' => 'ลบสำเร็จ', 'type' => 'success');
        } else {
            $data['status'] = array('message' => 'ลบไม่สำเร็จ', 'type' => 'danger');
        }

        $this->output->set_header('Content-Type: application/json; charset=utf-8');
        echo json_encode($data);
    }

    function delete_content() {
        $id = ($this->input->post('id') != false ? $this->input->post('id') : '');

        if ($this->update_data->delete_content($id)) {
            $data['status'] = array('message' => 'ลบสำเร็จ', 'type' => 'success');
        } else {
            $data['status'] = array('message' => 'ลบไม่สำเร็จ', 'type' => 'danger');
        }

        $this->output->set_header('Content-Type: application/json; charset=utf-8');
        echo json_encode($data);
    }

    function delete_cate() {
        $id = ($this->input->post('id') != false ? $this->input->post('id') : '');

        if ($this->update_data->delete_category($id)) {
            $data['status'] = array('message' => 'ลบสำเร็จ', 'type' => 'success');
        } else {
            $data['status'] = array('message' => 'ลบไม่สำเร็จ', 'type' => 'danger');
        }

        $this->output->set_header('Content-Type: application/json; charset=utf-8');
        echo json_encode($data);
    }

    function delete_Group() {
        $id = ($this->input->post('id') != false ? $this->input->post('id') : '');

        if ($this->update_data->delete_group($id)) {
            $data['status'] = array('message' => 'ลบสำเร็จ', 'type' => 'success');
        } else {
            $data['status'] = array('message' => 'ลบไม่สำเร็จ', 'type' => 'danger');
        }

        $this->output->set_header('Content-Type: application/json; charset=utf-8');
        echo json_encode($data);
    }

    function delete_knowledge_cate() {
        $id = ($this->input->post('id') != false ? $this->input->post('id') : '');

        if ($this->update_data->delete_knowledge_category($id)) {
            $data['status'] = array('message' => 'ลบสำเร็จ', 'type' => 'success');
        } else {
            $data['status'] = array('message' => 'ลบไม่สำเร็จ', 'type' => 'danger');
        }

        $this->output->set_header('Content-Type: application/json; charset=utf-8');
        echo json_encode($data);
    }

    function delete_about_cate() {
        $id = ($this->input->post('id') != false ? $this->input->post('id') : '');

        if ($this->update_data->delete_about_category($id)) {
            $data['status'] = array('message' => 'ลบสำเร็จ', 'type' => 'success');
        } else {
            $data['status'] = array('message' => 'ลบไม่สำเร็จ', 'type' => 'danger');
        }

        $this->output->set_header('Content-Type: application/json; charset=utf-8');
        echo json_encode($data);
    }

    function update_dealer_address($id) {
        $input_area = $this->input->post('inputedit_area');
        $input_dealer_name = $this->input->post('inputedit_dealer_name');
        $input_dealer_address = $this->input->post('inputedit_dealer_address');
        $input_dealer_tel = $this->input->post('inputedit_dealer_tel');
        $input_dealer_url = $this->input->post('inputedit_dealer_url');
        $input_dealer_agent = $this->input->post('inputedit_dealer_agent');
        $input = array(
            'Area_ID' => $input_area,
            'Dealer_Name' => $input_dealer_name,
            'Dealer_Address' => $input_dealer_address,
            'Dealer_Tel' => $input_dealer_tel,
            'Dealer_URL' => $input_dealer_url,
            'Dealer_Agent' => $input_dealer_agent,
            'Create_Date' => date('Y-m-d H:i:s')
        );
        $data = '';
        if ($this->update_data->update_dealer_address($id, $input)) {
            $data['status'] = array('message' => 'อัพเดทข้อมูลสำเร็จ', 'type' => 'success');
        } else {
            $data['status'] = array('message' => 'อัพเดทข้อมูลไม่สำเร็จ', 'type' => 'danger');
        }


        $this->output->set_header('Content-Type: application/json; charset=utf-8');
        echo json_encode($data);
    }

    function update_knowledge_cate($id) {
        $inputedit_catename = $this->input->post('inputedit_catename');
        $input = array(
            'Cate_Name' => $inputedit_catename,
            'Update_Date' => date('Y-m-d H:i:s'),
        );
        $data = '';
        if ($this->update_data->update_knowledge_category($id, $input)) {
            $data['status'] = array('message' => 'อัพเดทข้อมูลสำเร็จ', 'type' => 'success');
        } else {
            $data['status'] = array('message' => 'อัพเดทข้อมูลไม่สำเร็จ', 'type' => 'danger');
        }


        $this->output->set_header('Content-Type: application/json; charset=utf-8');
        echo json_encode($data);
    }

    function update_about_cate($id) {
        $inputedit_catename = $this->input->post('inputedit_catename');
        $input = array(
            'Cate_Name' => $inputedit_catename,
            'Update_Date' => date('Y-m-d H:i:s'),
        );
        $data = '';
        if ($this->update_data->update_about_category($id, $input)) {
            $data['status'] = array('message' => 'อัพเดทข้อมูลสำเร็จ', 'type' => 'success');
        } else {
            $data['status'] = array('message' => 'อัพเดทข้อมูลไม่สำเร็จ', 'type' => 'danger');
        }


        $this->output->set_header('Content-Type: application/json; charset=utf-8');
        echo json_encode($data);
    }

    function update_cate($id) {
        $inputedit_catename = $this->input->post('inputedit_catename');
        $input_hdimage = $this->input->post('input_hdimage');

        $input = array(
            'Type_Name' => $inputedit_catename,
            'Type_IMG' => $input_hdimage,
            'Update_Date' => date('Y-m-d H:i:s'),
        );
        $data = '';
        if ($this->update_data->update_category($id, $input)) {
            $data['status'] = array('message' => 'อัพเดทข้อมูลสำเร็จ', 'type' => 'success');
        } else {
            $data['status'] = array('message' => 'อัพเดทข้อมูลไม่สำเร็จ', 'type' => 'danger');
        }


        $this->output->set_header('Content-Type: application/json; charset=utf-8');
        echo json_encode($data);
    }

    function update_group($id) {
        $inputedit_catename = $this->input->post('inputedit_catename');
        $inputedit_cateparent = $this->input->post('inputedit_cateparent');
        $inputedit_url = $this->input->post('inputedit_url');
        $inputedit_info = $this->input->post('inputedit_info');
        $input_hdeditimage = $this->input->post('input_hdeditimage');
        $input_hdeditimage_hover = $this->input->post('input_hdeditimage_hover');
        $input_hdedit_pdf = $this->input->post('input_hdedit_pdf');

        $input = array(
            'Group_Name' => $inputedit_catename,
            'Group_Parent_ID' => $inputedit_cateparent,
            'Group_INFO' => $inputedit_info,
            'Group_IMG' => $input_hdeditimage,
            'Group_IMG_Hover' => $input_hdeditimage_hover,
            'Group_PDF' => $input_hdedit_pdf,
            'Group_URL' => $inputedit_url,
            'Update_Date' => date('Y-m-d H:i:s')
        );
        $data = '';
        if ($this->update_data->update_group($id, $input)) {
            $data['status'] = array('message' => 'อัพเดทข้อมูลสำเร็จ', 'type' => 'success');
        } else {
            $data['status'] = array('message' => 'อัพเดทข้อมูลไม่สำเร็จ', 'type' => 'danger');
        }


        $this->output->set_header('Content-Type: application/json; charset=utf-8');
        echo json_encode($data);
    }

    function add_dealer_address() {
        $input_area = $this->input->post('input_area');
        $input_dealer_name = $this->input->post('input_dealer_name');
        $input_dealer_address = $this->input->post('input_dealer_address');
        $input_dealer_tel = $this->input->post('input_dealer_tel');
        $input_dealer_url = $this->input->post('input_dealer_url');
        $input_dealer_agent = $this->input->post('input_dealer_agent');
        $input = array(
            'Area_ID' => $input_area,
            'Dealer_Name' => $input_dealer_name,
            'Dealer_Address' => $input_dealer_address,
            'Dealer_Tel' => $input_dealer_tel,
            'Dealer_URL' => $input_dealer_url,
            'Dealer_Agent' => boolval($input_dealer_agent),
            'Create_Date' => date('Y-m-d H:i:s')
        );

        $data = '';
        if ($this->insert_model->insert_Dealer_address($input)) {
            $data['status'] = array('message' => 'เพิ่มรายการสำเร็จ', 'type' => 'success');
        } else {
            $data['status'] = array('message' => 'เพิ่มรายการไม่สำเร็จ', 'type' => 'danger');
        }


        $this->output->set_header('Content-Type: application/json; charset=utf-8');
        echo json_encode($data);
    }

    function add_content() {
        $input_title = $this->input->post('input_title');
        $input_wordwrap = $this->input->post('input_wordwrap');
        $input_detail = $this->input->post('input_detail');
        $input_hdimage = $this->input->post('input_hdimage');

        $input = array(
            'Content_Headline' => $input_title,
            'Content_wrap' => $input_wordwrap,
            'Content_detail' => $input_detail,
            'Content_thumbnail' => $input_hdimage,
            'Create_Date' => date('Y-m-d H:i:s')
        );

        $data = '';
        if ($this->insert_model->insert_Content($input)) {
            $data['status'] = array('message' => 'เพิ่มรายการสำเร็จ', 'type' => 'success');
        } else {
            $data['status'] = array('message' => 'เพิ่มรายการไม่สำเร็จ', 'type' => 'danger');
        }


        $this->output->set_header('Content-Type: application/json; charset=utf-8');
        echo json_encode($data);
    }

    function add_group() {
        $input_catename = $this->input->post('input_catename');
        $input_cateparent = $this->input->post('input_cateparent');
        $input_url = $this->input->post('input_url');

        $input_hdimage_add = $this->input->post('input_hdimage_add');
        $input_hdimage_hover_add = $this->input->post('input_hdimage_hover_add');
        $input_hdpdf = $this->input->post('input_hdpdf');
        $input_info = $this->input->post('input_info');


        $input = array(
            'Group_Name' => $input_catename,
            'Group_Parent_ID' => $input_cateparent,
            'Group_Parent_ID' => $input_url,
            'Group_IMG' => $input_hdimage_add,
            'Group_IMG_Hover' => $input_hdimage_hover_add,
            'Group_INFO' => $input_info,
            'Group_PDF' => $input_hdpdf,
            'Create_Date' => date('Y-m-d H:i:s')
        );

        $data = '';
        if ($this->insert_model->insert_Group($input)) {
            $data['status'] = array('message' => 'เพิ่มรายการสำเร็จ', 'type' => 'success');
        } else {
            $data['status'] = array('message' => 'เพิ่มรายการไม่สำเร็จ', 'type' => 'danger');
        }


        $this->output->set_header('Content-Type: application/json; charset=utf-8');
        echo json_encode($data);
    }

    function add_category() {
        $input_catename = $this->input->post('input_catename');
        $input_hdimage = $this->input->post('input_hdimage_add');
        $input = array(
            'Type_Name' => $input_catename,
            'Type_IMG' => $input_hdimage,
            'Create_Date' => date('Y-m-d H:i:s')
        );

        $data = '';
        if ($this->insert_model->insert_Category($input)) {
            $data['status'] = array('message' => 'เพิ่มรายการสำเร็จ', 'type' => 'success');
        } else {
            $data['status'] = array('message' => 'เพิ่มรายการไม่สำเร็จ', 'type' => 'danger');
        }


        $this->output->set_header('Content-Type: application/json; charset=utf-8');
        echo json_encode($data);
    }

    function add_knowledge_category() {
        $input_catename = $this->input->post('input_catename');
        $input = array(
            'Cate_Name' => $input_catename,
            'Create_Date' => date('Y-m-d H:i:s')
        );

        $data = '';
        if ($this->insert_model->insert_knowledge_Category($input)) {
            $data['status'] = array('message' => 'เพิ่มรายการสำเร็จ', 'type' => 'success');
        } else {
            $data['status'] = array('message' => 'เพิ่มรายการไม่สำเร็จ', 'type' => 'danger');
        }


        $this->output->set_header('Content-Type: application/json; charset=utf-8');
        echo json_encode($data);
    }

    function add_about_category() {
        $input_catename = $this->input->post('input_catename');
        $input = array(
            'Cate_Name' => $input_catename,
            'Create_Date' => date('Y-m-d H:i:s')
        );

        $data = '';
        if ($this->insert_model->insert_about_Category($input)) {
            $data['status'] = array('message' => 'เพิ่มรายการสำเร็จ', 'type' => 'success');
        } else {
            $data['status'] = array('message' => 'เพิ่มรายการไม่สำเร็จ', 'type' => 'danger');
        }


        $this->output->set_header('Content-Type: application/json; charset=utf-8');
        echo json_encode($data);
    }

    function load_knowledge_detail() {
        $id = $this->input->post('id');
        $data['result'] = $this->get_data->get_knowledge_CateName($id);
        $this->output->set_header('Content-Type: application/json; charset=utf-8');
        echo json_encode($data);
    }

    function load_about_detail() {
        $id = $this->input->post('id');
        $data['result'] = $this->get_data->get_about_CateName($id);
        $this->output->set_header('Content-Type: application/json; charset=utf-8');
        echo json_encode($data);
    }

    function load_dealer_detail() {
        $id = $this->input->post('id');
        $data['result'] = $this->get_data->get_dealer_detail($id);
        $this->output->set_header('Content-Type: application/json; charset=utf-8');
        echo json_encode($data);
    }

    function load_group_detail() {
        $id = $this->input->post('id');
        $data['result'] = $this->get_data->getGroupName($id);
        $this->output->set_header('Content-Type: application/json; charset=utf-8');
        echo json_encode($data);
    }

    function load_cate_detail() {
        $id = $this->input->post('id');
        $data['result'] = $this->get_data->getCateName($id);
        $this->output->set_header('Content-Type: application/json; charset=utf-8');
        echo json_encode($data);
    }

    function load_group_list() {
        $result = $this->get_data->getdunlop_group();
        $i = 1;
        $html = '';
        foreach ($result as $row) {

            $html .= '<tr>';
            $html .= '<td>' . $i . '</td>';
            $html .= '<td>' . $row->val2 . '<br>';
            $html .= '<div class = "tools"><span class = "edit"><a href = "javascript:;" onclick="editdata(' . $row->val1 . ');">Edit</a> | </span><span class = "delete"><a class = "delete-tag" href = "javascript:;" onclick="removedata(' . $row->val1 . ');">Delete</a></div></td>';
            $html .= '<td>' . $row->Group_Parent_ID . '<br>';
            $html .= ' <td><img src="' . base_url('public') . '/uploads/Thumbnails_' . $row->val3 . '" height="50"/></td>';

            $html .= '</tr>';
            $i++;
        }
        echo $html;
    }

    function load_slide() {
        $result = $this->get_data->getdunlop_slide();
        $i = 1;
        $html = '';
        foreach ($result as $row) {


            $html .= '<tr>';
            $html .= '<td>' . $row->SLIDE_ID . '</td>';
            $html .= '<td>' . $row->SLIDE_Animation_Type . '<br>';
            $html .= '<div class = "tools"><span class = "edit"><a href = "javascript:;" onclick="edit_product(' . $row->SLIDE_ID . ');">Edit</a> | </span><span class = "delete"><a class = "delete-tag" href = "javascript:;" onclick="removedata(' . $row->SLIDE_ID . ');">Delete</a></div></td>';
            $html .= '<td>' . $row->SLIDE_bg . '</td>';
            $html .= '<td>' . $row->SLIDE_Object_img1 . '</td>';
            $html .= '<td>' . $row->SLIDE_Object_img2 . '</td>';
            $html .= '<td>' . $row->SLIDE_Object_img3 . '</td>';
            $html .= '<td>' . time_ago($row->Create_Date) . '</td>';
            $html .= '<td>' . time_ago($row->Update_Date) . '</td>';
            $html .= '</tr>';
            $i++;
        }
        echo $html;
    }

    function load_video() {
        $result = $this->get_data->getdunlop_video();
        $i = 1;
        $html = '';
        foreach ($result as $row) {


            $html .= '<tr>';
            $html .= '<td>' . $row->VIDEO_ID . '</td>';
            $html .= '<td>' . $row->VIDEO_Headline . '<br>';
            $html .= '<div class = "tools"><span class = "edit"><a href = "javascript:;" onclick="edit_product(' . $row->VIDEO_ID . ');">Edit</a> | </span><span class = "delete"><a class = "delete-tag" href = "javascript:;" onclick="removedata(' . $row->VIDEO_ID . ');">Delete</a></div></td>';
            $html .= '<td>' . $row->VIDEO_LINK . '</td>';
            $html .= '<td>' . time_ago($row->Create_Date) . '</td>';
            $html .= '<td>' . time_ago($row->Update_Date) . '</td>';
            $html .= '</tr>';
            $i++;
        }
        echo $html;
    }

    function load_news() {
        $result = $this->get_data->getdunlop_news();
        $i = 1;
        $html = '';
        foreach ($result as $row) {


            $html .= '<tr>';
            $html .= '<td>' . $row->NEWS_ID . '</td>';
            $html .= '<td>' . $row->NEWS_Headline . '<br>';
            $html .= '<div class = "tools"><span class = "edit"><a href = "javascript:;" onclick="edit_product(' . $row->NEWS_ID . ');">Edit</a> | </span><span class = "delete"><a class = "delete-tag" href = "javascript:;" onclick="removedata(' . $row->NEWS_ID . ');">Delete</a></div></td>';
            $html .= ' <td><img src="' . base_url('public') . '/uploads/Thumbnails_' . $row->NEWS_IMG . '" height="50"/></td>';

            $html .= '<td>' . $row->NEWS_URL . '</td>';
            $html .= '<td>' . time_ago($row->Create_Date) . '</td>';
            $html .= '<td>' . time_ago($row->Update_Date) . '</td>';
            $html .= '</tr>';
            $i++;
        }
        echo $html;
    }

    function load_contact() {
        $result = $this->select_model->get_dunlop_contact();
        $i = 1;
        $html = '';
        foreach ($result as $row) {


            $html .= '<tr>';
            $html .= '<td>' . $row->ID . '</td>';
            $html .= '<td>' . $row->first_name . '</td>';
            $html .= '<td>' . $row->last_name . '</td>';
            $html .= '<td>' . $row->full_address . '</td>';
            $html .= '<td>' . $row->province . '</td>';
            $html .= '<td>' . $row->tel . '</td>';
            $html .= '<td>' . $row->email . '</td>';
            $html .= '<td>' . $row->message . '</td>';
            $html .= '<td>' . time_ago($row->create_date) . '</td>';
            $html .= '</tr>';
            $i++;
        }
        echo $html;
    }

    function load_highlight() {
        $result = $this->get_data->getdunlop_highlight();
        $i = 1;
        $html = '';
        foreach ($result as $row) {


            $html .= '<tr>';
            $html .= '<td>' . $row->Highlight_ID . '</td>';
            $html .= '<td>' . $row->Highlight_Headline . '<br>';
            $html .= '<div class = "tools"><span class = "edit"><a href = "javascript:;" onclick="edit_product(' . $row->Highlight_ID . ');">Edit</a> | </span><span class = "delete"><a class = "delete-tag" href = "javascript:;" onclick="removedata(' . $row->Highlight_ID . ');">Delete</a></div></td>';
            $html .= ' <td><img src="' . base_url('public') . '/uploads/Thumbnails_' . $row->Highlight_IMG . '" height="50"/></td>';

            $html .= '<td>' . $row->Highlight_URL . '</td>';
            $html .= '<td>' . time_ago($row->Create_Date) . '</td>';
            $html .= '<td>' . time_ago($row->Update_Date) . '</td>';
            $html .= '</tr>';
            $i++;
        }
        echo $html;
    }

    function load_cate_list() {
        $result = $this->get_data->getdunlop_type();
        $i = 1;
        $html = '';
        foreach ($result as $row) {

            $html .= '<tr>';
            $html .= '<td>' . $i . '</td>';
            $html .= '<td>' . $row->val2 . '<br>';
            $html .= '<div class = "tools"><span class = "edit"><a href = "javascript:;" onclick="editdata(' . $row->val1 . ');">Edit</a> | </span><span class = "delete"><a class = "delete-tag" href = "javascript:;" onclick="removedata(' . $row->val1 . ');">Delete</a></div></td>';
            $html .= ' <td><img src="' . base_url('public') . '/uploads/Thumbnails_' . $row->val3 . '" height="50"/></td>';
            $html .= '</tr>';
            $i++;
        }
        echo $html;
    }

    function load_knowledge_cate_list() {
        $result = $this->get_data->get_knowledge_category();
        $i = 1;
        $html = '';
        foreach ($result as $row) {

            $html .= '<tr>';
            $html .= '<td>' . $i . '</td>';
            $html .= '<td>' . $row->val2 . '<br>';
            $html .= '<div class = "tools"><span class = "edit"><a href = "javascript:;" onclick="editdata(' . $row->val1 . ');">Edit</a> | </span><span class = "delete"><a class = "delete-tag" href = "javascript:;" onclick="removedata(' . $row->val1 . ');">Delete</a></div></td>';
            $html .= '</tr>';
            $i++;
        }
        echo $html;
    }

    function load_about_cate_list() {
        $result = $this->get_data->get_about_category();
        $i = 1;
        $html = '';
        foreach ($result as $row) {

            $html .= '<tr>';
            $html .= '<td>' . $i . '</td>';
            $html .= '<td>' . $row->val2 . '<br>';
            $html .= '<div class = "tools"><span class = "edit"><a href = "javascript:;" onclick="editdata(' . $row->val1 . ');">Edit</a> | </span><span class = "delete"><a class = "delete-tag" href = "javascript:;" onclick="removedata(' . $row->val1 . ');">Delete</a></div></td>';
            $html .= '</tr>';
            $i++;
        }
        echo $html;
    }

    function add_video() {
        $input_name = $this->input->post('input_headine');
        $input_url = $this->input->post('input_url');
        $input_hdimage = $this->input->post('input_hdimage');
        $input = array(
            'VIDEO_Headline' => $input_name,
            'VIDEO_LINK' => $input_url,
            'Create_Date' => date('Y-m-d H:i:s')
        );
        $data = '';
        if ($this->insert_model->insert_Video($input)) {
            $data['status'] = array('message' => 'เพิ่มรายการสำเร็จ', 'type' => 'success');
        } else {
            $data['status'] = array('message' => 'เพิ่มรายการไม่สำเร็จ', 'type' => 'danger');
        }


        $this->output->set_header('Content-Type: application/json; charset=utf-8');
        echo json_encode($data);
    }

    function add_highlight() {
        $input_name = $this->input->post('input_headine');
        $input_url = $this->input->post('input_url');
        $input_hdimage = $this->input->post('input_hdimage');
        $input = array(
            'Highlight_Headline' => $input_name,
            'Highlight_URL' => $input_url,
            'Highlight_IMG' => $input_hdimage,
            'Create_Date' => date('Y-m-d H:i:s')
        );
        $data = '';
        if ($this->insert_model->insert_Hilight($input)) {
            $data['status'] = array('message' => 'เพิ่มรายการสำเร็จ', 'type' => 'success');
        } else {
            $data['status'] = array('message' => 'เพิ่มรายการไม่สำเร็จ', 'type' => 'danger');
        }


        $this->output->set_header('Content-Type: application/json; charset=utf-8');
        echo json_encode($data);
    }

    function add_news() {
        $input_name = $this->input->post('input_headine');
        $input_url = $this->input->post('input_url');
        $input_hdimage = $this->input->post('input_hdimage');
        $input = array(
            'NEWS_Headline' => $input_name,
            'NEWS_URL' => $input_url,
            'NEWS_IMG' => $input_hdimage,
            'Create_Date' => date('Y-m-d H:i:s')
        );
        $data = '';
        if ($this->insert_model->insert_News($input)) {
            $data['status'] = array('message' => 'เพิ่มรายการสำเร็จ', 'type' => 'success');
        } else {
            $data['status'] = array('message' => 'เพิ่มรายการไม่สำเร็จ', 'type' => 'danger');
        }


        $this->output->set_header('Content-Type: application/json; charset=utf-8');
        echo json_encode($data);
    }

    function add_slide() {
        $input_slide_anim = $this->input->post('input_slide_anim');
        $input_hdimage_slide_bg = $this->input->post('input_hdimage_slide_bg');
        $input_hdimage_slide_object1 = $this->input->post('input_hdimage_slide_object1');
        $input_hdimage_slide_object2 = $this->input->post('input_hdimage_slide_object2');
        $input_hdimage_slide_object3 = $this->input->post('input_hdimage_slide_object3');
        $input = array(
            'SLIDE_Animation_Type' => $input_slide_anim,
            'SLIDE_bg' => $input_hdimage_slide_bg,
            'SLIDE_Object_img1' => $input_hdimage_slide_object1,
            'SLIDE_Object_img2' => $input_hdimage_slide_object2,
            'SLIDE_Object_img3' => $input_hdimage_slide_object3,
            'Create_Date' => date('Y-m-d H:i:s')
        );
        $data = '';
        if ($this->insert_model->insert_Slide($input)) {
            $data['status'] = array('message' => 'เพิ่มรายการสำเร็จ', 'type' => 'success');
        } else {
            $data['status'] = array('message' => 'เพิ่มรายการไม่สำเร็จ', 'type' => 'danger');
        }


        $this->output->set_header('Content-Type: application/json; charset=utf-8');
        echo json_encode($data);
    }

    function add_product() {
        $input_name = $this->input->post('input_name');
        $input_url = $this->input->post('input_url');
        $input_tech = $this->input->post('input_tech');
        $input_info = $this->input->post('input_info');
        $input_group = $this->input->post('input_group');
        $input_hdimage = $this->input->post('input_hdimage');
        $input_hdimage_hover = $this->input->post('input_hdimage_hover');
        $input_hdpdf = $this->input->post('input_hdpdf');

        $input = array(
            'Product_Name' => $input_name,
            'Product_URL' => $input_url,
            'Product_TECH' => $input_tech,
            'Product_INFO' => $input_info,
            'Group_ID' => $input_group,
            'Product_IMG' => $input_hdimage,
            'Product_IMG_HOVER	' => $input_hdimage_hover,
            'Product_PDF' => $input_hdpdf,
            'Create_Date' => date('Y-m-d H:i:s')
        );
        $data = '';
        if ($this->insert_model->insert_Product($input)) {
            $data['status'] = array('message' => 'เพิ่มรายการสำเร็จ', 'type' => 'success');
        } else {
            $data['status'] = array('message' => 'เพิ่มรายการไม่สำเร็จ', 'type' => 'danger');
        }


        $this->output->set_header('Content-Type: application/json; charset=utf-8');
        echo json_encode($data);
    }

    function add_tire() {
        $input_name = $this->input->post('input_name');
        $input_width = $this->input->post('input_width');
        $input_series = $this->input->post('input_series');
        $input_diamater = $this->input->post('input_diamater');
        $input_radial = $this->input->post('input_radial');
        $input_rim = $this->input->post('input_rim');
        $input_width_inc = $this->input->post('input_width_inc');
        $input_product_id = $this->input->post('input_product_id');
        $input_type_id = $this->input->post('input_type_id');
        $input = array(
            'Tire_Name' => $input_name,
            'Tire_Width' => $input_width,
            'Tire_Series' => $input_series,
            'Tire_Diameter' => $input_diamater,
            'Tire_Radial' => $input_radial,
            'Tire_Rim' => $input_rim,
            'Tire_Width_inc' => $input_width_inc,
            'Product_ID' => $input_product_id,
            'Type_ID' => $input_type_id,
            'Create_Date' => date('Y-m-d H:i:s')
        );
        $data = '';
        if ($this->insert_model->insert_Tire($input)) {
            $data['status'] = array('message' => 'เพิ่มรายการสำเร็จ', 'type' => 'success');
        } else {
            $data['status'] = array('message' => 'เพิ่มรายการไม่สำเร็จ', 'type' => 'danger');
        }


        $this->output->set_header('Content-Type: application/json; charset=utf-8');
        echo json_encode($data);
    }

    function edit_tire($id) {
        $input_name = $this->input->post('input_name');
        $input_width = $this->input->post('input_width');
        $input_series = $this->input->post('input_series');
        $input_diamater = $this->input->post('input_diamater');
        $input_radial = $this->input->post('input_radial');
        $input_rim = $this->input->post('input_rim');
        $input_width_inc = $this->input->post('input_width_inc');
        $input_product_id = $this->input->post('input_product_id');
        $input_type_id = $this->input->post('input_type_id');
        $input = array(
            'Tire_Name' => $input_name,
            'Tire_Width' => $input_width,
            'Tire_Series' => $input_series,
            'Tire_Diameter' => $input_diamater,
            'Tire_Radial' => $input_radial,
            'Tire_Rim' => $input_rim,
            'Tire_Width_inc' => $input_width_inc,
            'Product_ID' => $input_product_id,
            'Type_ID' => $input_type_id,
            'Update_Date' => date('Y-m-d H:i:s')
        );
        $data = '';
        if ($this->update_data->update_Tire($id, $input)) {
            $data['status'] = array('message' => 'อัพเดทข้อมูลสำเร็จ', 'type' => 'success');
        } else {
            $data['status'] = array('message' => 'อัพเดทข้อมูลไม่สำเร็จ', 'type' => 'danger');
        }


        $this->output->set_header('Content-Type: application/json; charset=utf-8');
        echo json_encode($data);
    }

    function edit_slide($id) {
        $input_slide_anim = $this->input->post('input_slide_anim');
        $input_hdimage_slide_bg = $this->input->post('input_hdimage_slide_bg');
        $input_hdimage_slide_object1 = $this->input->post('input_hdimage_slide_object1');
        $input_hdimage_slide_object2 = $this->input->post('input_hdimage_slide_object2');
        $input_hdimage_slide_object3 = $this->input->post('input_hdimage_slide_object3');
        $input = array(
            'SLIDE_Animation_Type' => $input_slide_anim,
            'SLIDE_bg' => $input_hdimage_slide_bg,
            'SLIDE_Object_img1' => $input_hdimage_slide_object1,
            'SLIDE_Object_img2' => $input_hdimage_slide_object2,
            'SLIDE_Object_img3' => $input_hdimage_slide_object3,
            'Create_Date' => date('Y-m-d H:i:s')
        );
        $data = '';
        if ($this->update_data->update_Slide($id, $input)) {
            $data['status'] = array('message' => 'อัพเดทข้อมูลสำเร็จ', 'type' => 'success');
        } else {
            $data['status'] = array('message' => 'อัพเดทข้อมูลไม่สำเร็จ', 'type' => 'danger');
        }


        $this->output->set_header('Content-Type: application/json; charset=utf-8');
        echo json_encode($data);
    }

    function edit_video($id) {
        $input_name = $this->input->post('input_headine');
        $input_url = $this->input->post('input_url');
        $input = array(
            'VIDEO_Headline' => $input_name,
            'VIDEO_LINK' => $input_url,
            'Update_Date' => date('Y-m-d H:i:s')
        );
        $data = '';
        if ($this->update_data->update_Video($id, $input)) {
            $data['status'] = array('message' => 'อัพเดทข้อมูลสำเร็จ', 'type' => 'success');
        } else {
            $data['status'] = array('message' => 'อัพเดทข้อมูลไม่สำเร็จ', 'type' => 'danger');
        }


        $this->output->set_header('Content-Type: application/json; charset=utf-8');
        echo json_encode($data);
    }

    function edit_news($id) {
        $input_name = $this->input->post('input_headine');
        $input_url = $this->input->post('input_url');
        $input_hdimage = $this->input->post('input_hdimage');
        $input = array(
            'NEWS_Headline' => $input_name,
            'NEWS_URL' => $input_url,
            'NEWS_IMG' => $input_hdimage,
            'Update_Date' => date('Y-m-d H:i:s')
        );
        $data = '';
        if ($this->update_data->update_News($id, $input)) {
            $data['status'] = array('message' => 'อัพเดทข้อมูลสำเร็จ', 'type' => 'success');
        } else {
            $data['status'] = array('message' => 'อัพเดทข้อมูลไม่สำเร็จ', 'type' => 'danger');
        }


        $this->output->set_header('Content-Type: application/json; charset=utf-8');
        echo json_encode($data);
    }

    function edit_content($id) {
        $input_title = $this->input->post('input_title');
        $input_wordwrap = $this->input->post('input_wordwrap');
        $input_detail = $this->input->post('input_detail');
        $input_hdimage = $this->input->post('input_hdimage');
        $input = array(
            'Content_Headline' => $input_title,
            'Content_wrap' => $input_wordwrap,
            'Content_detail' => $input_detail,
            'Content_thumbnail' => $input_hdimage,
            'Update_Date' => date('Y-m-d H:i:s')
        );
        $data = '';
        if ($this->update_data->update_Content($id, $input)) {
            $data['status'] = array('message' => 'อัพเดทข้อมูลสำเร็จ', 'type' => 'success');
        } else {
            $data['status'] = array('message' => 'อัพเดทข้อมูลไม่สำเร็จ', 'type' => 'danger');
        }


        $this->output->set_header('Content-Type: application/json; charset=utf-8');
        echo json_encode($data);
    }

    function edit_highlight($id) {
        $input_name = $this->input->post('input_headine');
        $input_url = $this->input->post('input_url');
        $input_hdimage = $this->input->post('input_hdimage');
        $input = array(
            'Highlight_Headline' => $input_name,
            'Highlight_URL' => $input_url,
            'Highlight_IMG' => $input_hdimage,
            'Update_Date' => date('Y-m-d H:i:s')
        );
        $data = '';
        if ($this->update_data->update_Highlight($id, $input)) {
            $data['status'] = array('message' => 'อัพเดทข้อมูลสำเร็จ', 'type' => 'success');
        } else {
            $data['status'] = array('message' => 'อัพเดทข้อมูลไม่สำเร็จ', 'type' => 'danger');
        }


        $this->output->set_header('Content-Type: application/json; charset=utf-8');
        echo json_encode($data);
    }

    function edit_product($id) {
        $input_name = $this->input->post('input_name');
        $input_url = $this->input->post('input_url');
        $input_tech = $this->input->post('input_tech');
        $input_info = $this->input->post('input_info');
        $input_group = $this->input->post('input_group');
        $input_hdimage = $this->input->post('input_hdimage');
        $input_hdimage_hover = $this->input->post('input_hdimage_hover');
        $input_hdpdf = $this->input->post('input_hdpdf');

        $input = array(
            'Product_Name' => $input_name,
            'Product_URL' => $input_url,
            'Product_TECH' => $input_tech,
            'Product_INFO' => $input_info,
            'Group_ID' => $input_group,
            'Product_IMG' => $input_hdimage,
            'Product_IMG_HOVER	' => $input_hdimage_hover,
            'Product_PDF' => $input_hdpdf,
            'Update_Date' => date('Y-m-d H:i:s')
        );
        $data = '';
        if ($this->update_data->update_Product($id, $input)) {
            $data['status'] = array('message' => 'อัพเดทข้อมูลสำเร็จ', 'type' => 'success');
        } else {
            $data['status'] = array('message' => 'อัพเดทข้อมูลไม่สำเร็จ', 'type' => 'danger');
        }


        $this->output->set_header('Content-Type: application/json; charset=utf-8');
        echo json_encode($data);
    }

    function load_tire() {

        $result = $this->select_model->get_dunlop_tire();
        header('Content-Type: text/html; charset=utf-8');
        $html = '';
        $i = 1;
        foreach ($result as $row) {


            $html .= '<tr>';
            $html .= '<td>' . $row->Tire_ID . '</td>';
            $html .= '<td>' . $row->Tire_Name;
            $html .= '<div class = "tools"><span class="edit"><a href="javascript:;" onclick="edit_product(' . $row->Tire_ID . ')">Edit</a> | </span><span class="delete"><a class="delete-tag" href="#" onclick="return removedata(' . $row->Tire_ID . ');">Delete</a></div></td>';
            $html .= '<td>' . $row->Tire_Width . '</td>';
            $html .= '<td> ' . $row->Tire_Series . '</td>';
            $html .= '<td>' . $row->Tire_Diameter . '</td>';
            $html .= '<td> ' . $row->Tire_Radial . '</td>';
            $html .= '<td>' . $row->Tire_Rim . '</td>';
            $html .= '<td> ' . $row->Tire_Width_inc . '</td>';
            $html .= '<td>' . $row->Product_Name . '</td>';
            $html .= '<td> ' . $row->Type_Name . '</td>';
            $html .= '<td> ' . time_ago($row->Create_Date) . '</td>';
            $html .= '<td> ' . time_ago($row->Update_Date) . '</td>';
            $html .= '</tr>';
            $i ++;
        }
        echo $html;
    }

    function load_content() {

        $result = $this->get_data->getContent_list();
        header('Content-Type: text/html; charset=utf-8');
        $html = '';
        $i = 1;
        foreach ($result as $row) {
            $html .= '<tr>';
            $html .= '<td><img src="' . base_url() . 'public/uploads/Thumbnails_' . $row->Content_thumbnail . '" height="50"></td>';
            $html .= '<td>' . $row->Content_ID . '</td>';
            $html .= '<td>' . $row->Content_Headline . '</br>';
            $html .= '<div class = "tools"><span class="edit"><a href="javascript:;" onclick="edit_product(' . $row->Content_ID . ')">Edit</a> | </span><span class="delete"><a class="delete-tag" href="#" onclick="return removedata(' . $row->Content_ID . ');">Delete</a></div></td>';
            $html .= '<td>' . $row->Content_wrap . '</td>';
            $html .= '<td> ' . time_ago($row->Create_Date) . '</td>';
            $html .= '<td> ' . time_ago($row->Update_Date) . '</td>';
            $html .= '</tr>';
            $i ++;
        }
        echo $html;
    }

    function load_product() {

        $result = $this->get_data->getProducts();
        header('Content-Type: text/html; charset=utf-8');
        $html = '';
        $i = 1;
        foreach ($result as $row) {
            $html .= '<tr>';
            $html .= '<td>' . $row->Product_ID . '</td>';
            $html .= '<td>' . $row->Group_Name . '</td>';
            $html .= '<td>' . $row->Product_Name;
            $html .= '<div class = "tools"><span class="edit"><a href="javascript:;" onclick="edit_product(' . $row->Product_ID . ')">Edit</a> | </span><span class="delete"><a class="delete-tag" href="#" onclick="return removedata(' . $row->Product_ID . ');">Delete</a></div></td>';
            $html .= ' <td><img src="' . base_url('public') . '/uploads/Thumbnails_' . $row->Product_IMG . '" height="50"/></td>';
            $html .= '<td>' . $row->Product_URL . '</td>';
            $html .= '<td> ' . $row->Product_TECH . '</td>';
            $html .= '<td> ' . time_ago($row->Create_Date) . '</td>';
            $html .= '<td> ' . time_ago($row->Update_Date) . '</td>';
            $html .= '</tr>';
            $i ++;
        }
        echo $html;
    }

    function update_payment($id) {
        $input_reason = $this->input->post('input_reason');
        $input_ems = $this->input->post('input_ems');

        $input = array(
            'detail' => $input_reason,
            'emstrack' => $input_ems,
            'payment_time' => date('Y-m-d H:i:s'),
            'is_payment' => 1
        );
        $data = '';
        if ($this->update_data->update_Order($id, $input)) {
            $data['status'] = array('message' => 'อัพเดทข้อมูลสำเร็จ', 'type' => 'success');
        } else {
            $data['status'] = array('message' => 'อัพเดทข้อมูลไม่สำเร็จ', 'type' => 'danger');
        }


        $this->output->set_header('Content-Type: application/json; charset=utf-8');
        echo json_encode($data);
    }

    function update_shipping($id) {
        $input_reason = $this->input->post('input_reason');
        $input_ems = $this->input->post('input_ems');

        $input = array(
            'detail' => $input_reason,
            'emstrack' => $input_ems,
            'shipping_time' => date('Y-m-d H:i:s'),
            'is_shipping' => 1
        );
        $data = '';
        if ($this->update_data->update_Order($id, $input)) {
            $data['status'] = array('message' => 'อัพเดทข้อมูลสำเร็จ', 'type' => 'success');
        } else {
            $data['status'] = array('message' => 'อัพเดทข้อมูลไม่สำเร็จ', 'type' => 'danger');
        }


        $this->output->set_header('Content-Type: application/json; charset=utf-8');
        echo json_encode($data);
    }

    function update_shipping_shortcut() {

        $id = $this->input->post('id');
        $input = array(
            'shipping_time' => date('Y-m-d H:i:s'),
            'is_shipping' => 1
        );
        $data = '';
        if ($this->update_data->update_Order($id, $input)) {
            $data['status'] = array('message' => 'อัพเดทข้อมูลสำเร็จ', 'type' => 'success');
        } else {
            $data['status'] = array('message' => 'อัพเดทข้อมูลไม่สำเร็จ', 'type' => 'danger');
        }


        $this->output->set_header('Content-Type: application/json; charset=utf-8');
        echo json_encode($data);
    }

    function update_ordercancel($id) {
        $input_reason = $this->input->post('input_reason');
        $input_ems = $this->input->post('input_ems');

        $input = array(
            'detail' => $input_reason,
            'emstrack' => $input_ems,
            'is_active' => 0
        );
        $data = '';
        if ($this->update_data->update_Order($id, $input)) {
            $data['status'] = array('message' => 'อัพเดทข้อมูลสำเร็จ', 'type' => 'success');
        } else {
            $data['status'] = array('message' => 'อัพเดทข้อมูลไม่สำเร็จ', 'type' => 'danger');
        }


        $this->output->set_header('Content-Type: application/json; charset=utf-8');
        echo json_encode($data);
    }

    function update_orderupdate($id) {
        $input_reason = $this->input->post('input_reason');
        $input_ems = $this->input->post('input_ems');

        $input = array(
            'detail' => $input_reason,
            'emstrack' => $input_ems
        );
        $data = '';
        if ($this->update_data->update_Order($id, $input)) {
            $data['status'] = array('message' => 'อัพเดทข้อมูลสำเร็จ', 'type' => 'success');
        } else {
            $data['status'] = array('message' => 'อัพเดทข้อมูลไม่สำเร็จ', 'type' => 'danger');
        }


        $this->output->set_header('Content-Type: application/json; charset=utf-8');
        echo json_encode($data);
    }

}
