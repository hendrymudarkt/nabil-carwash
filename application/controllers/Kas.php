<?php
class Kas extends CI_Controller{
    function __construct(){
        parent::__construct();
        $this->load->model('Kas_model');

        if($this->session->userdata('status') != "login"){
            redirect('');
        }
    }

    function index(){
        $data['kas'] = $this->Kas_model->get_all_kas();
        
        $data['_view'] = 'kas/index';
        $this->load->view('layouts/main',$data);
    }
}
