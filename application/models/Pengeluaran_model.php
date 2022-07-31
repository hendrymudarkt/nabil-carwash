<?php
class Pengeluaran_model extends CI_Model{
    function __construct(){
        parent::__construct();
    }
    
    function get_pengeluaran($id_pengeluaran){
        return $this->db->get_where('pengeluaran',array('id'=>$id_pengeluaran))->row_array();
    }
        
    function get_all_pengeluaran(){
        $this->db->order_by('id', 'desc');
        return $this->db->get('pengeluaran')->result_array();
    }

    function add_pengeluaran($params){
        $this->db->insert('pengeluaran',$params);
        return $this->db->insert_id();
    }
	
	function add_kas($params2){
        $this->db->insert('kas',$params2);
        return $this->db->insert_id();
    }
    
    function update_pengeluaran($id_pengeluaran,$params){
        $this->db->where('id',$id_pengeluaran);
        return $this->db->update('pengeluaran',$params);
    }
    
    function delete_pengeluaran($id_pengeluaran){
        return $this->db->delete('pengeluaran',array('id'=>$id_pengeluaran));
    }
}
