<?php 
class Login extends CI_Controller{
    function __construct(){
        parent::__construct();
        $this->load->model('Login_model');
    }

    function index(){
        $this->load->view('login');
    }

    function aksi_login(){
        $username = $this->security->xss_clean($this->input->post('username'));
        $password = $this->security->xss_clean($this->input->post('password'));
        $level = $this->security->xss_clean($this->input->post('level'));

        $data = $this->Login_model->cek_login($username);
        $passb = $this->encryption->decrypt($data['password']);
        if ($password == $passb) {
            $data_session = array(
                'username' => $username,
                'nama' => $data['nama'],
                'status' => "login",
                'level' => $data['level']
            );
            $this->session->set_userdata($data_session);
            redirect('dashboard/index');
        }
    }

    function logout(){
        $this->session->sess_destroy();
        redirect('');
    }
}
