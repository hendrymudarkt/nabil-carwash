<?php
class Pembayaran extends CI_Controller{
    function __construct(){
        parent::__construct();
        $this->load->model('Pembayaran_model');
        $this->load->model('Antrian_model');
        $this->load->model('Kas_model');

        if($this->session->userdata('status') != "login"){
            redirect('');
        }
    }

    function index(){
        $data['pembayaran'] = $this->Pembayaran_model->get_all_bayar();
        
        $data['_view'] = 'pembayaran/index';
        $this->load->view('layouts/main',$data);
    }

    function add(){
        if(isset($_POST) && count($_POST) > 0){
            $params = array(
                'kode_antrian' => $this->input->post('kode_antrian'),
                'bayar' => $this->input->post('bayar')
            );
			
			$params2 = array(
                'kode_antrian' => $this->input->post('kode_antrian'),
                'pendapatan' => $this->input->post('bayar'),
                'jenis' => 'Pendapatan'
            );
                
            $pembayaran_id = $this->Pembayaran_model->add_pembayaran($params);
            $pembayaran_id = $this->Kas_model->add_kas($params2);
            redirect('pembayaran/index');
        }
        else{
            $data['_view'] = 'pembayaran/add';
            $this->load->view('layouts/main',$data);
        }
    }  

    function edit($id){
        $data['pembayaran'] = $this->Pembayaran_model->get_pembayaran($id);
        
        if(isset($data['pembayaran']['id'])){
            if(isset($_POST) && count($_POST) > 0){
                $params = array(
					'kode_antrian' => $this->input->post('kode_antrian'),
                	'bayar' => $this->input->post('bayar')
				);

                $this->Pembayaran_model->update_pembayaran($id,$params);            
                redirect('pembayaran/index');
            }
            else{
                $data['_view'] = 'pembayaran/edit';
                $this->load->view('layouts/main',$data);
            }
        }
    } 

    function remove($id){
        $pembayaran = $this->Pembayaran_model->get_pembayaran($id);

        if(isset($pembayaran['id'])){
            $this->Pembayaran_model->delete_pembayaran($id);
            redirect('pembayaran/index');
        }
    }
	
	function get_pembayaran(){
        $kode_antrian = $this->input->post('kode_antrian');
        $data = $this->Antrian_model->get_antrian_by_kode($kode_antrian);
        echo json_encode($data);
	}
	
	function pendapatan(){
        $data['pembayaran'] = $this->Pembayaran_model->get_all_bayar();
        
        $data['_view'] = 'pendapatan/index';
        $this->load->view('layouts/main',$data);
	}
	
	function cetak($id){
        $data['cetak'] = $this->Pembayaran_model->get_faktur($id);
        
        $this->load->view('laporan/faktur',$data);
    } 
}
