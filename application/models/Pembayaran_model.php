<?php
class Pembayaran_model extends CI_Model{
    function __construct(){
        parent::__construct();
    }
    
    function get_pembayaran($id_pembayaran){
        return $this->db->get_where('pembayaran',array('id'=>$id_pembayaran))->row_array();
    }
        
    function get_all_pembayaran(){
        $this->db->order_by('id', 'desc');
        return $this->db->get('pembayaran')->result_array();
    }
	
	function get_all_bayar(){
        $this->db->order_by('id', 'DESC');
        return $this->db->from('pembayaran')
          ->join('antrian', 'antrian.kode_antrian=pembayaran.kode_antrian')
          ->join('paket', 'paket.id_paket=antrian.id_paket')
          ->get()
          ->result_array();
    }
	
	function get_faktur($id){
        $this->db->order_by('id', 'DESC');
        return $this->db->from('pembayaran')
          ->join('antrian', 'antrian.kode_antrian=pembayaran.kode_antrian')
          ->join('paket', 'paket.id_paket=antrian.id_paket')
          ->join('pencuci', 'pencuci.id_pencuci=antrian.id_pencuci')
          ->get()
          ->row_array();
    }

    function add_pembayaran($params){
        $this->db->insert('pembayaran',$params);
        return $this->db->insert_id();
    }
    
    function update_pembayaran($id_pembayaran,$params){
        $this->db->where('id',$id_pembayaran);
        return $this->db->update('pembayaran',$params);
    }
    
    function delete_pembayaran($id_pembayaran){
        return $this->db->delete('pembayaran',array('id'=>$id_pembayaran));
    }
}
