<?php
class Paket_model extends CI_Model{
    function __construct(){
        parent::__construct();
    }
    
    function get_paket($id_paket){
        return $this->db->get_where('paket',array('id_paket'=>$id_paket))->row_array();
    }
        
    function get_all_paket(){
        $this->db->order_by('id_paket', 'desc');
        return $this->db->get('paket')->result_array();
    }

    function add_paket($params){
        $this->db->insert('paket',$params);
        return $this->db->insert_id();
    }
    
    function update_paket($id_paket,$params){
        $this->db->where('id_paket',$id_paket);
        return $this->db->update('paket',$params);
    }
    
    function delete_paket($id_paket){
        return $this->db->delete('paket',array('id_paket'=>$id_paket));
    }
}
