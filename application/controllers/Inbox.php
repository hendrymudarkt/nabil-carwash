<?php
class Inbox extends CI_Controller{
    function __construct(){
        parent::__construct();
        $this->load->model('Inbox_model');

        if($this->session->userdata('status') != "login"){
            redirect('');
        }
    } 

    function index(){
        $data['inbox'] = $this->Inbox_model->get_all_inbox();
        
        $data['_view'] = 'inbox/index';
        $this->load->view('layouts/main',$data);
    }
}
