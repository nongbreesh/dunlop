<?php

class update_data extends CI_Model {

    function update_cart_add($input) {
        $value = array(
            'id' => $input['id'],
            'count' => $input['count'],
            'ip_addr' => $input['ip_addr']
        );


        if ($this->db->insert('cart_history', $value)):
            return true;
        else:
            return false;
        endif;
    }

    function update_viewed($input) {

        $value = array(
            'id' => $input['id'],
            'count' => $input['count'],
            'ip_addr' => $input['ip_addr']
        );

        $query = $this->db->query("select ip_addr  from view_history where ip_addr = '" . $value['ip_addr'] . "' and  TO_DAYS(time_stamp) = TO_DAYS(now()) ");

        if ($query->num_rows() == 0) {
            if ($this->db->insert('view_history', $value)):
                return true;
            else:
                return false;
            endif;
        }
    }

    function update_message_read() {
        $value = array('is_read' => '1');
        if ($this->db->update('contact_detail', $value)):
            return true;
        else:
            return false;
        endif;
    }

    function update_membereditprofile($username, $input) {

        $value = array(
            'fullname' => $input['fullname'],
            'email' => $input['email'],
            'birthday' => $input['birthday'],
            'address' => $input['address'],
            'province' => $input['province'],
            'zipcode' => $input['zipcode'],
            'tel' => $input['tel'],
            'sex' => $input['sex'],
            'bankname' => $input['bankname'],
            'bankbranch' => $input['bankbranch'],
            'bankno' => $input['bankno'],
            'bankowner' => $input['bankowner'],
            'banktype' => $input['banktype'],
            'website' => $input['website']
        );
        $this->db->where('username', $username);

        if ($this->db->update('user', $value)):
            return true;
        else:
            return false;
        endif;
    }

    function update_membereditprofilePW($username, $input) {

        $value = array(
            'password' => md5($input['password'])
        );
        $this->db->where('username', $username);

        if ($this->db->update('user', $value)):
            return true;
        else:
            return false;
        endif;
    }

    function update_Tire($id, $input) {

        $this->db->where('Tire_ID', $id);

        if ($this->db->update('dunlop_tire', $input)):
            return true;
        else:
            return false;
        endif;
    }

    function update_Slide($id, $input) {

        $this->db->where('SLIDE_ID', $id);

        if ($this->db->update('dunlop_slide', $input)):
            return true;
        else:
            return false;
        endif;
    }

    function update_Video($id, $input) {

        $this->db->where('VIDEO_ID', $id);

        if ($this->db->update('dunlop_vdo', $input)):
            return true;
        else:
            return false;
        endif;
    }

    function update_Album($id, $input) {

        $this->db->where('Album_ID', $id);

        if ($this->db->update('dunlop_album', $input)):
            return true;
        else:
            return false;
        endif;
    }

    function update_pIC($id, $input) {

        $this->db->where('PIC_ID', $id);

        if ($this->db->update('dunlop_pic', $input)):
            return true;
        else:
            return false;
        endif;
    }

    function update_News($id, $input) {

        $this->db->where('NEWS_ID', $id);

        if ($this->db->update('dunlop_news', $input)):
            return true;
        else:
            return false;
        endif;
    }

    function update_Content($id, $input) {

        $this->db->where('Content_ID', $id);

        if ($this->db->update('dunlop_content', $input)):
            return true;
        else:
            return false;
        endif;
    }

    function update_Highlight($id, $input) {

        $this->db->where('Highlight_ID', $id);

        if ($this->db->update('dunlop_highlight', $input)):
            return true;
        else:
            return false;
        endif;
    }

    function update_Product($id, $input) {

        $this->db->where('Product_ID', $id);

        if ($this->db->update('dunlop_product', $input)):
            return true;
        else:
            return false;
        endif;
    }

    function delete_Tire($id) {

        $this->db->where('Tire_ID', $id);

        if ($this->db->delete('dunlop_tire')):
            return true;
        else:
            return false;
        endif;
    }

    function delete_Dealer($id) {

        $this->db->where('Dealer_ID', $id);

        if ($this->db->delete('dealer_detail')):
            return true;
        else:
            return false;
        endif;
    }

    function delete_Slide($id) {

        $this->db->where('SLIDE_ID', $id);

        if ($this->db->delete('dunlop_slide')):
            return true;
        else:
            return false;
        endif;
    }

    function delete_Album($id) {

        $this->db->where('Album_ID', $id);

        if ($this->db->delete('dunlop_album')):
            return true;
        else:
            return false;
        endif;
    }

    function delete_Pic($id) {

        $this->db->where('PIC_ID', $id);

        if ($this->db->delete('dunlop_pic')):
            return true;
        else:
            return false;
        endif;
    }

    function delete_Video($id) {

        $this->db->where('VIDEO_ID', $id);

        if ($this->db->delete('dunlop_vdo')):
            return true;
        else:
            return false;
        endif;
    }

    function delete_Product($id) {

        $this->db->where('product_ID', $id);

        if ($this->db->delete('dunlop_product')):
            return true;
        else:
            return false;
        endif;
    }

    function delete_msg($id) {

        $this->db->where('id', $id);

        if ($this->db->delete('contact_detail')):
            return true;
        else:
            return false;
        endif;
    }

    function update_group($id, $input) {

        $this->db->where('Group_ID', $id);

        if ($this->db->update('dunlop_group', $input)):
            return true;
        else:
            return false;
        endif;
    }

    function update_category($id, $input) {

        $this->db->where('Type_ID', $id);

        if ($this->db->update('dunlop_type', $input)):
            return true;
        else:
            return false;
        endif;
    }

    function update_dealer_address($id, $input) {

        $this->db->where('Dealer_ID', $id);

        if ($this->db->update('dealer_detail', $input)):
            return true;
        else:
            return false;
        endif;
    }

    function update_knowledge_category($id, $input) {

        $this->db->where('Cate_ID', $id);

        if ($this->db->update('dunlop_knowledge_cate', $input)):
            return true;
        else:
            return false;
        endif;
    }

    function update_about_category($id, $input) {

        $this->db->where('Cate_ID', $id);

        if ($this->db->update('dunlop_about_cate', $input)):
            return true;
        else:
            return false;
        endif;
    }

    function delete_group($id) {

        $this->db->where('Group_ID', $id);

        if ($this->db->delete('dunlop_group')):
            return true;
        else:
            return false;
        endif;
    }

    function delete_Highlight($id) {

        $this->db->where('Highlight_ID', $id);

        if ($this->db->delete('dunlop_highlight')):
            return true;
        else:
            return false;
        endif;
    }

    function delete_News($id) {

        $this->db->where('NEWS_ID', $id);

        if ($this->db->delete('dunlop_news')):
            return true;
        else:
            return false;
        endif;
    }

    function delete_content($id) {

        $this->db->where('Content_ID', $id);

        if ($this->db->delete('dunlop_content')):
            return true;
        else:
            return false;
        endif;
    }

    function delete_category($id) {

        $this->db->where('Type_ID', $id);

        if ($this->db->delete('dunlop_type')):
            return true;
        else:
            return false;
        endif;
    }

    function delete_knowledge_category($id) {

        $this->db->where('Cate_ID', $id);

        if ($this->db->delete('dunlop_knowledge_cate')):
            return true;
        else:
            return false;
        endif;
    }

    function delete_about_category($id) {

        $this->db->where('Cate_ID', $id);

        if ($this->db->delete('dunlop_about_cate')):
            return true;
        else:
            return false;
        endif;
    }

    function update_Order($id, $input) {

        $this->db->where('order_id', $id);

        if ($this->db->update('orders', $input)):
            return true;
        else:
            return false;
        endif;
    }

}

?>