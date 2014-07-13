<?php

class service_mapping_prod_model extends CI_Model {

    function __construct() {
        parent::__construct();
        $this->load->helper(array('cookie', 'url'));
        $this->db_report = $this->load->database('report', TRUE);
    }

    function getdata($from, $to) {
        $query = $this->db_report->query('truncate table report_summary');
        $query = $this->db_report->query("SELECT count(distinct(a.subscriberid)) as total
         FROM `email_list_subscriber_events` a
        inner join email_list_subscribers b
        on a.subscriberid = b.subscriberid
        left join (SELECT distinct(data),subscriberid  FROM `email_subscribers_data` WHERE fieldid  = 13) c
        on a.subscriberid = c.subscriberid
        where a.eventdate  <= UNIX_TIMESTAMP('" . $to . "') 
        AND a.eventdate	 >= UNIX_TIMESTAMP('" . $from . "') 
        AND a.eventsubject like '%Sent%'");
        return $query->result();
    }

    function genreport($offset, $limit) {

        $str = "SELECT distinct(a.subscriberid)
    ,c.data  as CERT_ID
    ,b.emailaddress as EMAIL
    ,a.eventsubject 
    , from_unixtime(a.eventdate, '%Y %D %M %h:%i:%s') as eventdate	
     FROM `email_list_subscriber_events` a
    inner join email_list_subscribers b
    on a.subscriberid = b.subscriberid
    inner join (SELECT distinct(data),subscriberid  FROM `email_subscribers_data` WHERE fieldid  = 13) c
    on a.subscriberid = c.subscriberid
         where a.eventdate  <= UNIX_TIMESTAMP('2014-06-30') 
        AND a.eventdate	 >= UNIX_TIMESTAMP('2014-01-01') 
     AND a.eventsubject like '%Sent%'  
    limit " . $offset . ", " . $limit . "";
        $query = $this->db_report->query($str);
        $result = $query->result();

        foreach ($result as $row) {
            $input = array('subscriberid' => $row->subscriberid,
                'CERT_ID' => $row->CERT_ID,
                'EMAIL' => $row->EMAIL,
                'eventsubject' => $row->eventsubject,
                'eventdate' => $row->eventdate,
            );
            $this->db->insert('report_summary', $input);
        }

        return true;
    }

}

?>