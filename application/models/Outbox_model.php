<?php
class Outbox_model extends CI_Model{
    function __construct(){
        parent::__construct();
    }

    function add_outbox($param){
        $this->db->insert('outbox',$param);
        return $this->db->insert_id();
    }
    
    function get_all_outbox(){
        return $this->db->get('sentitems')->result_array();
    }
}
