<?php
class Antrian_model extends CI_Model{
    function __construct(){
        parent::__construct();
    }
    
    function get_antrian($kode_antrian){
        return $this->db->get_where('antrian',array('kode_antrian'=>$kode_antrian))->row_array();
    }
	
	function get_antrian_by_kode($kode_antrian){
        $this->db->order_by('kode_antrian', 'DESC');
        return $this->db->from('antrian')
          ->join('paket', 'paket.id_paket=antrian.id_paket')
          ->get()
          ->row_array();
    }
        
    function get_all_antrian(){
        $this->db->order_by('kode_antrian', 'desc');
        return $this->db->get('antrian')->result_array();
    }
        
    function add_antrian($params){
        $this->db->insert('antrian',$params);
        return $this->db->insert_id();
    }
    
    function update_antrian($kode_antrian,$params){
        $this->db->where('kode_antrian',$kode_antrian);
        return $this->db->update('antrian',$params);
    }
    
    function delete_antrian($kode_antrian){
        return $this->db->delete('antrian',array('kode_antrian'=>$kode_antrian));
    }
}
