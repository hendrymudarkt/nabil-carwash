<?php
class Admin extends CI_Controller{
    function __construct(){
        parent::__construct();
        $this->load->model('Admin_model');

        if($this->session->userdata('status') != "login"){
            redirect('');
        }
	}
	
	function index(){
        $data['admin'] = $this->Admin_model->get_all_admin();
        
        $data['_view'] = 'admin/index';
        $this->load->view('layouts/main',$data);
    }

    function add(){
        if(isset($_POST) && count($_POST) > 0){   
			$params = array(
				'nama' => $this->input->post('nama'),
				'username' => $this->input->post('username'),
				'level' => $this->input->post('level'),
				'password' => $this->encryption->encrypt($this->input->post('password'))
			);

			$this->Admin_model->add_admin($params);
			redirect('admin/index');
		}
		else{
			$data['_view'] = 'admin/add';
			$this->load->view('layouts/main',$data);
		}
    }
	
	function edit($id){
        $data['admin'] = $this->Admin_model->get_admin($id);
        
        if(isset($data['admin']['id'])){
            if(isset($_POST) && count($_POST) > 0){   
                $params = array(
					'nama' => $this->input->post('nama'),
					'username' => $this->input->post('username'),
					'level' => $this->input->post('level'),
                    'password' => $this->encryption->encrypt($this->input->post('password'))
                );

                $this->Admin_model->update_admin($id,$params);            
                redirect('admin/index');
            }
            else{
                $data['_view'] = 'admin/edit';
                $this->load->view('layouts/main',$data);
            }
        }
	}
	
	function remove($id){
        $admin = $this->Admin_model->get_admin($id);

        if(isset($admin['id'])){
            $this->Admin_model->delete_admin($id);
            redirect('admin/index');
        }
    }
}
