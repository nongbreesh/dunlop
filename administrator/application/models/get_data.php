<?php

class get_data extends CI_Model {

    function getCountView_today() {

        //$query = $this->db->query("select count(distinct(ip_addr)) as viewed_count from view_history where time_stamp >= NOW() - INTERVAL 1 DAY ");
        $query = $this->db->query("SELECT count(distinct(ip_addr))  as viewed_count FROM view_history WHERE TO_DAYS(time_stamp) = TO_DAYS(now())");
        return $query->row();
    }

    function getCountItemclick_today() {

        //$query = $this->db->query("select count(distinct(ip_addr)) as viewed_count from view_history where time_stamp >= NOW() - INTERVAL 1 DAY ");
        $query = $this->db->query("SELECT count(ip_addr)  as viewed_count FROM cart_history WHERE TO_DAYS(time_stamp) = TO_DAYS(now())");
        return $query->row();
    }

    function getCountItemclick_detail() {

        //$query = $this->db->query("select count(distinct(ip_addr)) as viewed_count from view_history where time_stamp >= NOW() - INTERVAL 1 DAY ");
        $query = $this->db->query("SELECT a.*,b.*,c.*,a.time_stamp as clicktime  FROM cart_history a left join items b on a.id = b.id left join categories c on b.categories = c.categories_id where time_stamp <= NOW() AND time_stamp >= DATE_SUB(time_stamp , INTERVAL 7 DAY) order by time_stamp desc");
        return $query->result();
    }

    function getCateused($id) {
        $query = $this->db->query("select a.* from   items  a left join categories b on a.categories = b.categories_id  where b.categories_id = " . $id);

        return $query->num_rows();
    }

    function getAffclick($acc = null) {
        $query = $this->db->query("select count(a.id) as vclick ,
				 a.bannerid ,a.acc from (select * from aff_click 
				  WHERE DATE_FORMAT(timestamp, '%Y-%m-%d') 
				BETWEEN DATE_SUB(CURRENT_DATE, INTERVAL 30 DAY)AND CURRENT_DATE) a 
				where a.acc=  '$acc' group by a.bannerid");

        return $query->result();
    }

    function getAffclickdaily($acc = null) {
        $query = $this->db->query("select count(a.id) as vclick ,
				a.bannerid ,a.acc from (select * from aff_click
				WHERE DATE_FORMAT(timestamp, '%Y-%m-%d')
				BETWEEN DATE_SUB(CURRENT_DATE, INTERVAL 1 DAY)AND CURRENT_DATE) a
				where a.acc=  '$acc' group by a.bannerid");

        return $query->result();
    }

    function getAff_index($txt_search = null, $acc = null) {
        $query = $this->db->query("SELECT * FROM aff_index");
        return $query->row();
    }

    function getOrderList($txt_search = null, $acc = null) {
        $query = $this->db->query("SELECT * FROM orders a INNER JOIN orderdetails b ON a.order_id = 
			b.order_id WHERE CONCAT(a.order_id,a.orders_ownername)  
			LIKE '%$txt_search%' AND is_active = 1 And a.acc = '$acc' GROUP BY a.order_id Order By a.order_time desc");
        return $query->result();
    }

    function getOrderDetail($order_id = null) {
        $query = $this->db->query("SELECT a.price priceaff , a.*,b.* 
				FROM orderdetails a
				INNER JOIN items b ON a.product_id = b.id
				WHERE order_id = '$order_id'");
        return $query->result();
    }

    function getPaymentHistory($acc = null) {
        $query = $this->db->query("SELECT sum(amount)  sumpayment FROM `withdraw_history` where acc = '$acc'");
        return $query->row();
    }

    function getPaymentRequest($acc = null) {
        $query = $this->db->query("SELECT sum(amount)  sumpayment FROM `withdraw_request` where acc = '$acc'");
        return $query->row();
    }

    function getPaymentHistoryDetail($acc = null) {
        $query = $this->db->query("SELECT * FROM `withdraw_history` where acc = '$acc' order by date_pay desc");
        return $query->result();
    }

    function getPaymentRequestDetail($acc = null) {
        $query = $this->db->query("SELECT * FROM `withdraw_request` where acc = '$acc' order by date_request desc");
        return $query->result();
    }

    function getPaidDetail($acc = null) {
        $query = $this->db->query("SELECT a.amount as aamount,a.*,b.* FROM withdraw_request a  
				left join withdraw_history b ON  
				a.id = b.request_id  where a.acc = '$acc'");
        return $query->result();
    }

    function getmemberDetail($username) {
        $this->db->select('*');
        $this->db->where('username', $username);
        $query = $this->db->get('user');
        return $query->row();
    }

    function getUserfromsession($session_id) {
        $this->db->select('user');
        $this->db->where('your_session_id', $session_id);
        $query = $this->db->get('session_db');
        return $query->row();
    }

    function gettrackingdata($orderid = null) {
        $this->db->select('*');
        $this->db->where('order_id', $orderid);
        $query = $this->db->get('orders');
        return $query->row();
    }

    function getProvince($limit = null) {
        $this->db->select('provinceid,provincename');
        $query = $this->db->get('province');
        return $query->result();
    }

    function getContent_list($type) {
        $query = $this->db->query("select  * from dunlop_content where type = ".$type);
        return $query->result();
    }

    function getProducts() {
        $query = $this->db->query("select a.*,b.*,a.Order_no as aorder_no from   dunlop_product  a left join dunlop_group b on a.Group_ID = b.Group_ID order by a.Order_no");
        return $query->result();
    }

    function getTirebyId($id) {
        $query = $this->db->query("SELECT  a.*,b.*,c.* FROM dunlop_tire a"
                . " inner join dunlop_product b"
                . " on a.Product_ID = b.Product_ID"
                . " inner join dunlop_type c"
                . " on a.Type_ID = c.Type_ID"
                . " where a.Tire_ID = " . $id);
        return $query->row();
    }

    function getSlidebyId($id) {
        $query = $this->db->query("select * from   dunlop_slide  where  SLIDE_ID =" . $id);
        return $query->row();
    }

    function getVideobyId($id) {
        $query = $this->db->query("select * from   dunlop_vdo  where  VIDEO_ID =" . $id);
        return $query->row();
    }

    function getNewsbyId($id) {
        $query = $this->db->query("select * from   dunlop_news  where  NEWS_ID =" . $id);
        return $query->row();
    }

    function getHighlightbyId($id) {
        $query = $this->db->query("select * from   dunlop_highlight  where  Highlight_ID =" . $id);
        return $query->row();
    }

    function getProductsbyId($id) {
        $query = $this->db->query("select a.*,b.* , a.Order_no as aorder_no from   dunlop_product  a left join dunlop_group b on a.Group_ID = b.Group_ID  where  a.Product_ID =" . $id);
        return $query->result();
    }

    function getProductHit($limit = null) {
        $this->db->select('*');
        $this->db->where('isuse', '0');
        $this->db->where('ishit', '1');
        $this->db->order_by('id', 'ASC');
        $this->db->limit($limit, '0');
        $query = $this->db->get('items');
        return $query->result();
    }

    function getProductcate($id = null) {
        $this->db->select('*');
        $this->db->where('isuse', '0');
        $this->db->where('categories', $id);
        $this->db->order_by('id', 'DESC');
        $query = $this->db->get('items');
        return $query->result();
    }

    function get_pic_detail($id = null) {
        $this->db->select('*');
        $this->db->where('PIC_ID', $id);
        $query = $this->db->get('dunlop_pic');
        return $query->row();
    }

    function getGroupName($id = null) {
        $this->db->select('*');
        $this->db->where('Group_ID', $id);
        $query = $this->db->get('dunlop_group');
        return $query->row();
    }

    function getCatename($id = null) {
        $this->db->select('*');
        $this->db->where('Type_ID', $id);
        $query = $this->db->get('dunlop_type');
        return $query->row();
    }

    function get_knowledge_CateName($id = null) {
        $this->db->select('*');
        $this->db->where('Cate_ID', $id);
        $query = $this->db->get('dunlop_knowledge_cate');
        return $query->row();
    }

    function get_about_CateName($id = null) {
        $this->db->select('*');
        $this->db->where('Cate_ID', $id);
        $query = $this->db->get('dunlop_about_cate');
        return $query->row();
    }

    function get_dealer_detail($id = null) {
        $query = $this->db->query("SELECT  * ,"
                . " (select ZONE_ID from dealer_zone c where c.ZONE_ID = b.ZONE_ID) as ZONE_ID"
                . " FROM dealer_detail a"
                . " inner join dealer_area b"
                . " on a.AREA_ID = b.AREA_ID"
                . " where a.Dealer_ID = " . $id);
        return $query->row();
    }

    function getProduct($limit = null) {
        $this->db->select('*');
        $this->db->where('isuse', '0');
        $this->db->order_by('id', 'DESC');
        $query = $this->db->get('items');
        return $query->result();
    }

    function getProductNew() {
        $this->db->select('*');
        $this->db->where('isuse', '0');
        $this->db->order_by('id', 'DESC');
        $this->db->limit('4', '0');
        $query = $this->db->get('items');
        return $query->result();
    }

    function getProductOffer() {
        $this->db->select('*');
        $this->db->where('isuse', '0');
        $this->db->where('isoffer', '1');
        $this->db->order_by('id', 'ASC');
        $this->db->limit('10', '0');
        $query = $this->db->get('items');
        return $query->result();
    }

    function getProductRandom() {
        $this->db->select('*');
        $this->db->where('isuse', '0');
        $this->db->order_by('id', 'RANDOM');
        $this->db->limit('9', '0');
        $query = $this->db->get('items');
        return $query->result();
    }

    function Product_detail($id) {
        $this->db->select('*');
        $this->db->where('id', $id);
        $query = $this->db->get('items');
        return $query->row();
    }

    function getCate() {
        $this->db->select('categories_id as id,categories_name as value');
        $query = $this->db->get('categories');
        return $query->result();
    }

    function get_contact_detail() {
        $this->db->select('*');
        $this->db->where('is_read', 0);
        $query = $this->db->get('contact_detail');
        return $query->result();
    }

    function get_contact_detail_all() {
        $this->db->select('*');
        $query = $this->db->get('contact_detail');
        return $query->result();
    }

    function getProprice($id) {
        $this->db->select('*');
        $this->db->where('id', $id);
        $query = $this->db->get('items');
        return $query->row();
    }

    function getCategories() {
        $this->db->select('*');
        $query = $this->db->get('categories');
        return $query->result();
    }

    function get_knowledge_category() {
        $this->db->select('Cate_ID as val1 , Cate_Name as val2 ');
        $query = $this->db->get('dunlop_knowledge_cate');
        return $query->result();
    }

    function get_about_category() {
        $this->db->select('Cate_ID as val1 , Cate_Name as val2 ');
        $query = $this->db->get('dunlop_about_cate');
        return $query->result();
    }

    function getdunlop_groupall() {
        $this->db->select('Group_ID as val1 , Group_Name as val2, Group_IMG as val3 , Group_Parent_ID ,Order_no');
        $this->db->order_by('Order_no');
        $query = $this->db->get('dunlop_group');
        return $query->result();
    }

    function getdunlop_group() {
        $this->db->select('Group_ID as val1 , Group_Name as val2, Group_IMG as val3 , Group_Parent_ID ');
        $this->db->where('Group_Parent_ID', 0);
        $query = $this->db->get('dunlop_group');
        return $query->result();
    }

    function getdunlop_slide() {
        $this->db->select('');
        $query = $this->db->get('dunlop_slide');
        return $query->result();
    }

    function getdunlop_video() {
        $this->db->select('');
        $query = $this->db->get('dunlop_vdo');
        return $query->result();
    }

    function getdunlop_news() {
        $this->db->select('');
        $query = $this->db->get('dunlop_news');
        return $query->result();
    }

    function getdunlop_highlight() {
        $this->db->select('');
        $query = $this->db->get('dunlop_highlight');
        return $query->result();
    }

    function getdunlop_type() {
        $this->db->select('Type_ID as val1 , Type_Name as val2 , Type_IMG as val3 ');
        $query = $this->db->get('dunlop_type');
        return $query->result();
    }

    function getContent($id) {
        $query = $this->db->query("select * from   dunlop_content  where Content_ID =" . $id);
        return $query->row();
    }

    function get_album_detail($id) {
        $this->db->select('*');
        $this->db->where('Album_ID', $id);
        $query = $this->db->get('dunlop_album');

        return $query->row();
    }

    function getCategories_detail($menu) {
        $this->db->select('*');
        $this->db->where('name_en', $menu);
        $query = $this->db->get('categories');

        return $query->row();
    }

    function getContents_slide($limit) {
        $this->db->select('*');
        $this->db->limit($limit);
        $this->db->order_by('timestamp', 'desc');
        $query = $this->db->get('content');

        return $query->result();
    }

    function getContents_slide_right($limit) {
        $this->db->select('*');
        $this->db->limit($limit, 5);
        $this->db->order_by('timestamp', 'desc');
        $query = $this->db->get('content');

        return $query->result();
    }

    function getContents_feed($per_page = null, $pageLimit = null) {

        $this->db->select('a.id aid,a.*,b.*');
        $this->db->limit($per_page, $pageLimit + 5);
        $this->db->order_by('a.timestamp', 'desc');
        $this->db->join('categories b', 'b.id = a.categories_id', 'INNER');
        $query = $this->db->get('content a');
        return $query->result();
    }

    function getContents($cateid = null) {


        $this->db->select('a.id aid,a.*,b.*');
        if ($cateid <> null) {
            $this->db->where('a.categories_id', $cateid);
        }
        $this->db->order_by('a.timestamp');
        $this->db->join('categories b', 'b.id = a.categories_id', 'INNER');
        $query = $this->db->get('content a');
        return $query->result();
    }

    function getContents_detail($id) {
        /* $this->db->select('*');

          $query	= $this->db->get('content');

          return $query->row(); */

        $this->db->select('a.id aid,a.*,b.*');
        $this->db->join('categories b', 'b.id = a.categories_id', 'INNER');
        $this->db->where('a.id', $id);
        $query = $this->db->get('content a');

        return $query->row();
    }

    function getMostRead() {
        $query = $this->db->query("select * from content t inner join 
(select a.ID , sum(a.count) as vsum from
(select *
from `view_history`    WHERE DATE_FORMAT(time_stamp, '%Y-%m-%d') BETWEEN DATE_SUB(CURRENT_DATE, INTERVAL 7 DAY) AND CURRENT_DATE) a
group by a.id) c
where t.id = c.id
order by vsum desc
limit 5");

        return $query->result();
    }

    function checkword($title) {
        $title = preg_replace("/[\"\']/", "-", $title);
        $title = stripslashes($title);
        $title = str_replace("-", "", $title);
        $title = str_replace("@", "", $title);
        $title = str_replace(" ", "-", $title);
        $title = str_replace(".", "-", $title);
        $title = str_replace("(", "", $title);
        $title = str_replace(")", "", $title);
        $title = str_replace(",", "", $title);
        $title = str_replace("+", "", $title);
        $title = str_replace("*", "", $title);
        $title = str_replace("--", "-", $title);
        $title = str_replace('"', "-", $title);
        $title = str_replace('/', "-", $title);
        $title = str_replace('&', "and", $title);
        $title = str_replace('[', "", $title);
        $title = str_replace(']', "", $title);
        $title = str_replace('?', "", $title);
        $title = str_replace('!', "", $title);
        $title = str_replace('%', "percent", $title);
        $title = str_replace('$', "dollar", $title);
        $title = str_replace('#', "", $title);
        return $title;
    }

    function getMenutop() {
        $query = $this->db->query("SELECT *,a.id as aID FROM article a INNER JOIN article_cate_mapping b ON a.id = b.article_id WHERE b.id = 1 LIMIT 0,6");
        return $query->result();
    }

    function getSidebar() {
        $query = $this->db->query("SELECT *,a.id as aID FROM article a INNER JOIN article_cate_mapping b ON a.id = b.article_id WHERE b.id = 2 LIMIT 0,4 ");
        return $query->result();
    }

}

?>