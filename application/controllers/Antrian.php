<?php
class Antrian extends CI_Controller{
    function __construct(){
        parent::__construct();
        $this->load->model('Antrian_model');

        if($this->session->userdata('status') != "login"){
            redirect('');
        }
    }

    function index(){
        $data['antrian'] = $this->Antrian_model->get_all_antrian();
        
        $data['_view'] = 'antrian/index';
        $this->load->view('layouts/main',$data);
    }
	
	function cetak(){
        $data['antrian'] = $this->Antrian_model->get_all_antrian();
        
        $data['_view'] = 'pendapatan/cetak';
        $this->load->view('layouts/main',$data);
    }
}
