<?php
class Inbox_model extends CI_Model{
    function __construct(){
        parent::__construct();
    }
    
    function get_all_inbox(){
        return $this->db->get('inbox')->result_array();
    }
}
