<?php
class Laporan extends CI_Controller{
    function __construct(){
        parent::__construct();
        if($this->session->userdata('status') != "login"){
            redirect('');
        }
    } 

    function antrian(){
        $data['_view'] = 'laporan/antrian';
        $this->load->view('layouts/main',$data);
    }
	
	function pendapatan(){
        $data['_view'] = 'laporan/pendapatan';
        $this->load->view('layouts/main',$data);
    }
	
	function pengeluaran(){
        $data['_view'] = 'laporan/pengeluaran';
        $this->load->view('layouts/main',$data);
    }
}
