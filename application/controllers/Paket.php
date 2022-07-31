<?php
class Paket extends CI_Controller{
    function __construct(){
        parent::__construct();
        $this->load->model('Paket_model');

        if($this->session->userdata('status') != "login"){
            redirect('');
        }
    }

    function index(){
        $data['paket'] = $this->Paket_model->get_all_paket();
        
        $data['_view'] = 'paket/index';
        $this->load->view('layouts/main',$data);
    }

    function add(){
        if(isset($_POST) && count($_POST) > 0){
            $params = array(
                'nama_paket' => $this->input->post('nama'),
                'harga' => $this->input->post('harga'),
                'keterangan' => $this->input->post('keterangan')
            );
                
            $paket_id = $this->Paket_model->add_paket($params);
            redirect('paket/index');
        }
        else{
            $data['_view'] = 'paket/add';
            $this->load->view('layouts/main',$data);
        }
    }  

    function edit($id_paket){
        $data['paket'] = $this->Paket_model->get_paket($id_paket);
        
        if(isset($data['paket']['id_paket'])){
            if(isset($_POST) && count($_POST) > 0){
                $params = array(
					'nama_paket' => $this->input->post('nama'),
					'harga' => $this->input->post('harga'),
					'keterangan' => $this->input->post('keterangan')
				);

                $this->Paket_model->update_paket($id_paket,$params);            
                redirect('paket/index');
            }
            else{
                $data['_view'] = 'paket/edit';
                $this->load->view('layouts/main',$data);
            }
        }
    } 

    function remove($id_paket){
        $paket = $this->Paket_model->get_paket($id_paket);

        if(isset($paket['id_paket'])){
            $path = './foto/';
            unlink($path.$paket['foto']);
            
            $this->Paket_model->delete_paket($id_paket);
            redirect('paket/index');
        }
    }
    
}
