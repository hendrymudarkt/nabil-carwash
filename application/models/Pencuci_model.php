<?php
class Pencuci_model extends CI_Model{
    function __construct(){
        parent::__construct();
    }
    
    function get_pencuci($id_pencuci){
        return $this->db->get_where('pencuci',array('id_pencuci'=>$id_pencuci))->row_array();
    }
        
    function get_all_pencuci(){
        $this->db->order_by('id_pencuci', 'desc');
        return $this->db->get('pencuci')->result_array();
    }
        
    function add_pencuci($params){
        $this->db->insert('pencuci',$params);
        return $this->db->insert_id();
    }
    
    function update_pencuci($id_pencuci,$params){
        $this->db->where('id_pencuci',$id_pencuci);
        return $this->db->update('pencuci',$params);
    }
    
    function delete_pencuci($id_pencuci){
        return $this->db->delete('pencuci',array('id_pencuci'=>$id_pencuci));
    }
}
