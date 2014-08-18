<?php

class select_model extends CI_Model {

    function __construct() {
        parent::__construct();
        $this->load->helper(array('cookie', 'url'));
    }

    public function content_count($type) {
        return $this->db->count_all("dunlop_content where type = " . $type);
    }

    function get_dunlop_content($type, $limit, $start) {
        $query = $this->db->query("SELECT  * FROM dunlop_content where type = " . $type . " order by Content_ID limit " . $start . ', ' . $limit);
        return $query->result();
    }

    function get_dunlop_content_by_id($id) {
        $query = $this->db->query("SELECT  * FROM dunlop_content where Content_ID = " . $id);
        return $query->row();
    }
    
    function get_dunlop_dealerpic($id) {
        $query = $this->db->query("SELECT  a.* FROM dunlop_pic a inner join dealer_detail b on a.Album_ID = b.Album_ID where b.Dealer_ID = " . $id);
        return $query->result();
    }

    function get_dunlop_albumpic_by_id($id) {
        $query = $this->db->query("SELECT  * FROM dunlop_pic where Album_ID = " . $id);
        return $query->result();
    }

    function get_dunlop_albumpic() {
        $query = $this->db->query("SELECT  * FROM dunlop_pic");
        return $query->result();
    }
    
    function get_dunlop_slide() {
        $query = $this->db->query("SELECT  * FROM dunlop_slide");
        return $query->result();
    }

    function getdunlop_group() {
        $this->db->select('');
        $this->db->where('Group_Parent_ID', 0);
        $this->db->order_by('Order_no', 'ASC');
        $query = $this->db->get('dunlop_group');
        return $query->result();
    }

    function getdunlop_group_detail($gid) {
        $this->db->select('');
        $this->db->where('Group_ID', $gid);
        $query = $this->db->get('dunlop_group');
        return $query->row();
    }

    function getdunlop_group_parent($gid) {
        $this->db->select('');
        $this->db->where('Group_Parent_ID', $gid);
        $this->db->order_by('Group_ID', 'ASC');
        $query = $this->db->get('dunlop_group');
        return $query->result();
    }

    function getdunlop_produt_by_gid($gid) {
        $this->db->select('');
        $this->db->where('Group_ID', $gid);
        $this->db->order_by('Order_no', 'ASC');
        $query = $this->db->get('dunlop_product');
        return $query->result();
    }

    function getdunlop_produt_by_id($id) {
        $this->db->select('');
        $this->db->where('Product_ID', $id);
        $this->db->order_by('Product_ID', 'ASC');
        $query = $this->db->get('dunlop_product');
        return $query->row();
    }

    function get_dunlop_tireDiameter_by_pid($id) {
        $query = $this->db->query("SELECT distinct(Tire_Diameter) as Tire_Diamete  FROM `dunlop_tire` WHERE `Product_ID` = " . $id . "  ORDER BY `dunlop_tire`.`Tire_ID`  ASC");
        return $query->result();
    }

    function get_dunlop_tire_by_Diameter($id, $Diameter) {
        $query = $this->db->query("SELECT *  FROM `dunlop_tire` WHERE `Product_ID` = " . $id . "  and `Tire_Diameter` = " . $Diameter . "  ORDER BY `dunlop_tire`.`Tire_ID`  ASC");
        return $query->result();
    }

    function get_dunlop_contact() {
        $query = $this->db->query("SELECT  * FROM dunlop_contact");
        return $query->result();
    }

    function get_dunlop_video() {
        $query = $this->db->query("SELECT  * FROM dunlop_vdo");
        return $query->result();
    }

    function get_dunlop_whatnews() {
        $query = $this->db->query("SELECT  * FROM dunlop_news");
        return $query->result();
    }

    function get_dealer_list() {
        $query = $this->db->query("SELECT  * FROM dealer_detail a"
                . " inner join dealer_area b"
                . " on a.AREA_ID = b.AREA_ID order by a.DEALER_ID");
        return $query->result();
    }

    function get_dealer_list_by_id($id) {
        $query = $this->db->query("SELECT  * FROM dealer_detail a"
                . " inner join dealer_area b"
                . " on a.AREA_ID = b.AREA_ID "
                . " where a.AREA_ID = " . $id);
        return $query->result();
    }

    function get_area_list($zone_id) {
        $query = $this->db->query("SELECT  * FROM dealer_area a"
                . " where a.ZONE_ID = " . $zone_id);
        return $query->result();
    }

    function get_dunlop_zone() {
        $query = $this->db->query("SELECT  * FROM dealer_zone");
        return $query->result();
    }

    function get_dunlop_zone_by_id($zone_id) {
        $query = $this->db->query("SELECT  * FROM dealer_zone where ZONE_ID = " . $zone_id);
        return $query->row();
    }

    function get_tire_width() {
        $query = $this->db->query("SELECT  distinct(Tire_Width) FROM dunlop_tire where Tire_Width != '' order by Tire_Width asc");
        return $query->result();
    }

    function get_tire_series() {
        $query = $this->db->query("SELECT  distinct(Tire_Series) FROM dunlop_tire where Tire_Series != ''  order by Tire_Series asc");
        return $query->result();
    }

    function get_tire_size() {
        $query = $this->db->query("SELECT  distinct(Tire_Diameter) FROM dunlop_tire where Tire_Diameter != ''  order by Tire_Diameter asc");
        return $query->result();
    }

    function dunlop_content() {
        $query = $this->db->query("SELECT  * FROM dunlop_content");
        return $query->result();
    }

    function get_dunlop_area($zone_id) {
        $query = $this->db->query("SELECT  * FROM dealer_area where ZONE_ID = " . $zone_id);
        return $query->result();
    }

    function get_dunlop_news() {
        $query = $this->db->query("SELECT  * FROM dunlop_news");
        return $query->result();
    }

    function get_dunlop_vdo() {
        $query = $this->db->query("SELECT  * FROM dunlop_vdo");
        return $query->result();
    }

    function get_dunlop_highlight() {
        $query = $this->db->query("SELECT  * FROM dunlop_highlight");
        return $query->result();
    }

    function get_dunlop_tire() {
        $query = $this->db->query("SELECT  a.*,b.*,c.* FROM dunlop_tire a"
                . " inner join dunlop_product b"
                . " on a.Product_ID = b.Product_ID"
                . " inner join dunlop_type c"
                . " on a.Type_ID = c.Type_ID");
        return $query->result();
    }

    function get_dunlop_search_tire($size = '', $series = '', $diameter = '') {
        $where = '';
        if ($size != '' && $size != 0) {
            $where .= " and  a.Tire_Width = '" . $size . "'";
        }
        if ($series != '' && $series != 0) {
            $where .= " and  a.Tire_Series =  '" . $series . "'";
        }
        if ($diameter != '' && $diameter != 0) {
            $where .= " and  a.Tire_Diameter	 = '" . $diameter . "'";
        }
        $sql = "SELECT  a.*,b.*,c.* FROM dunlop_tire a"
                . " inner join dunlop_product b"
                . " on a.Product_ID = b.Product_ID"
                . " inner join dunlop_type c"
                . " on a.Type_ID = c.Type_ID"
                . " where 1=1" . $where;
        $query = $this->db->query($sql);
        return $query->result();
        //return $sql;
    }

    function get_dunlop_product() {

        $query = $this->db->query("SELECT  * FROM dunlop_product a "
                . " left join dunlop_group b"
                . " on a.Group_ID = b.Group_ID");
        return $query->result();
    }

    function get_dunlop_type() {

        $query = $this->db->query("SELECT  * FROM dunlop_type");
        return $query->result();
    }

    function get_dunlop_group() {

        $query = $this->db->query("SELECT  * FROM dunlop_group");
        return $query->result();
    }

    function getalluniqtraffic() {

        $query = $this->db->query("SELECT count(distinct(b.meta_value))  as traffic_count FROM  tm_posts a inner join tm_postmeta b   on a.ID = b.post_id where a.post_type = 'pageview' AND b.meta_key  = 'ip_addr'  AND YEAR(a.post_date) = YEAR(now()) AND MONTH(a.post_date) = MONTH(now())");
        return $query->row();
    }

    function getalltraffic() {

        $query = $this->db->query("SELECT count(b.meta_id)  as traffic_count FROM  tm_posts a inner join tm_postmeta b   on a.ID = b.post_id where a.post_type = 'pageview' AND b.meta_key  = 'ip_addr' AND YEAR(a.post_date) = YEAR(now()) AND MONTH(a.post_date) = MONTH(now())");
        return $query->row();
    }

    function getregistercount() {
        $query = $this->db->query("SELECT count(a.ID)  as register_count FROM  tm_posts a where a.post_mime_type = 'register'");
        return $query->row();
    }

    function get_export_register() {
        $sql = "";
        $sql .= "SELECT post_date as registerdate, post_content as phoneno , "
                . " post_title as idcard , "
                . " post_excerpt as email"
                . " FROM  tm_posts a where a.post_mime_type = 'register'";
        mysql_query('SET CHARACTER SET tis620');
        mysql_query('SET collation_connection = "tis620_thai_ci"');
        $query = $this->db->query($sql);
        return $query;
    }

    function getalldailyuniqtraffic() {

        $query = $this->db->query("SELECT count(distinct(b.meta_value))  as traffic_count FROM  tm_posts a inner join tm_postmeta b   on a.ID = b.post_id where a.post_type = 'pageview' AND b.meta_key  = 'ip_addr' AND TO_DAYS(a.post_date) = TO_DAYS(now())");
        return $query->row();
    }

    function getalldailytraffic() {

        $query = $this->db->query("SELECT count(b.meta_id)  as traffic_count FROM  tm_posts a inner join tm_postmeta b   on a.ID = b.post_id where a.post_type = 'pageview' AND b.meta_key  = 'ip_addr' AND TO_DAYS(a.post_date) = TO_DAYS(now())");
        return $query->row();
    }

    function getalltrafficlist($offset, $per_page) {

        $query = $this->db->query("SELECT * FROM  tm_posts a   where a.post_type = 'pageview' ORDER BY a.id DESC limit " . $offset . " , " . $per_page);
        return $query->result();
    }

    function getpostmeta($postid) {

        $query = $this->db->query("SELECT * FROM  tm_postmeta a   where a.post_id = " . $postid);
        return $query->result();
    }

    function getalltrafficcount() {

        $query = $this->db->query("SELECT count(a.ID)  as traffic_count FROM  tm_posts a where a.post_type = 'pageview' and a.post_type = 'pageview' ");
        return $query->row();
    }

    function getalldailyredcard() {

        $query = $this->db->query("select count(distinct( table2.meta_value))  as traffic_count from (SELECT * FROM tm_posts a
 inner join tm_postmeta b 
on 
a.ID =b.post_id
 where a.post_type ='pageview'
 AND b.meta_key = 'cardtype'
 AND b.meta_value = 'RED'
AND TO_DAYS(a.post_date ) = TO_DAYS(now())
ORDER BY `b`.`meta_value`  DESC) table1
 inner join tm_postmeta table2
on 
table1.ID = table2.post_id
 where table2.meta_key ='ip_addr'");
        return $query->row();
    }

    function getalldailyblackcard() {

        $query = $this->db->query("select count(distinct( table2.meta_value))  as traffic_count from (SELECT * FROM tm_posts a
 inner join tm_postmeta b 
on 
a.ID =b.post_id
 where a.post_type ='pageview'
 AND b.meta_key = 'cardtype'
 AND b.meta_value = 'BLACK'
AND TO_DAYS(a.post_date ) = TO_DAYS(now())
ORDER BY `b`.`meta_value`  DESC) table1
 inner join tm_postmeta table2
on 
table1.ID = table2.post_id
 where table2.meta_key ='ip_addr'");
        return $query->row();
    }

    function getalldailynonecard() {

        //$query = $this->db->query("SELECT count(b.meta_value)  as traffic_count FROM  tm_posts a inner join tm_postmeta b   on a.ID = b.post_id where a.post_type = 'pageview' AND b.meta_key  = 'cardtype'  AND (b.meta_value = '0' or b.meta_value = '')  AND TO_DAYS(a.post_date) = TO_DAYS(now()) and a.post_type = 'pageview'");


        $query = $this->db->query("select count(distinct( table2.meta_value))  as traffic_count from (SELECT * FROM tm_posts a
 inner join tm_postmeta b 
on 
a.ID =b.post_id
 where a.post_type ='pageview'
 AND b.meta_key = 'cardtype'
AND (b.meta_value = '0' or b.meta_value = '')
AND TO_DAYS(a.post_date ) = TO_DAYS(now())
ORDER BY `b`.`meta_value`  DESC) table1
 inner join tm_postmeta table2
on 
table1.ID = table2.post_id
 where table2.meta_key ='ip_addr'");

        return $query->row();
    }

}

?>