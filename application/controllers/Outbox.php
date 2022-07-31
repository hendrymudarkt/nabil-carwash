<?php
class Outbox extends CI_Controller{
    function __construct(){
        parent::__construct();
        $this->load->model('Outbox_model');

        if($this->session->userdata('status') != "login"){
            redirect('');
        }
    } 

    function index(){
        $data['outbox'] = $this->Outbox_model->get_all_outbox();
        
        $data['_view'] = 'outbox/index';
        $this->load->view('layouts/main',$data);
    }
}
