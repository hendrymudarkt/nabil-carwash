<?php
class Kas_model extends CI_Model{
    function __construct(){
        parent::__construct();
    }
        
    function get_all_kas(){
        $this->db->order_by('id', 'desc');
        return $this->db->get('kas')->result_array();
    }
	
	function add_kas($params2){
        $this->db->insert('kas',$params2);
        return $this->db->insert_id();
    }
	
	function add_kas2($params2){
        $this->db->insert('kas',$params2);
        return $this->db->insert_id();
    }
}
