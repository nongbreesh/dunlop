<?php

class Item_model extends CI_Model {

    function __construct() {
        parent::__construct();
        $this->load->helper(array('cookie', 'url'));
          $this->db = $this->load->database('default', TRUE);
    }

    function add($item) {
        $this->db->insert('tm_item', $item);
        return $this->db->insert_id();
    }

    function edit($id, $item) {
        $this->db->where('item_id', $id);
        $this->db->update('tm_item', $item);
    }

    function removeitem_by_id($id) {
        $this->db->where('id', $id);
        // $this->db->where('parent_id', $id);
        $this->db->delete('tm_item');
    }

    function getitem_list() {
        // $this->db->query('delete from tm_item');
        $query = $this->db->query('SELECT * , (select count(id)  FROM `tm_item`  where parent_id =  a.item_id) as parent_count FROM tm_item a WHERE parent_id = 0 or parent_id = ""');
        return $query->result();
    }

    function getitem_parent($id) {
        $query = $this->db->query('SELECT * , (select count(id)  FROM `tm_item`  where parent_id =  a.item_id) as parent_count FROM tm_item a WHERE parent_id = ' . $id);
        return $query->result();
    }

    function getitem_by_id($id) {
        $query = $this->db->query('SELECT * FROM `tm_item`  where item_id =  ' . $id);
        return $query->result();
    }

}

?>