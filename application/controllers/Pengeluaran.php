<?php
class Pengeluaran extends CI_Controller{
    function __construct(){
        parent::__construct();
        $this->load->model('Pengeluaran_model');
        $this->load->model('Kas_model');

        if($this->session->userdata('status') != "login"){
            redirect('');
        }
    }

    function index(){
        $data['pengeluaran'] = $this->Pengeluaran_model->get_all_pengeluaran();
        
        $data['_view'] = 'pengeluaran/index';
        $this->load->view('layouts/main',$data);
    }

    function add(){
        if(isset($_POST) && count($_POST) > 0){
            $params = array(
                'keterangan' => $this->input->post('keterangan'),
                'biaya' => $this->input->post('biaya')
            );
			
			$params2 = array(
                'keterangan' => $this->input->post('keterangan'),
                'jenis' => 'Pengeluaran',
                'pengeluaran' => $this->input->post('biaya')
            );
                
            $pengeluaran_id = $this->Pengeluaran_model->add_pengeluaran($params);
            $pengeluaran_id = $this->Kas_model->add_kas2($params2);
            redirect('pengeluaran/index');
        }
        else{
            $data['_view'] = 'pengeluaran/add';
            $this->load->view('layouts/main',$data);
        }
    }  

    function edit($id_pengeluaran){
        $data['pengeluaran'] = $this->Pengeluaran_model->get_pengeluaran($id_pengeluaran);
        
        if(isset($data['pengeluaran']['id'])){
            if(isset($_POST) && count($_POST) > 0){
                $params = array(
					'keterangan' => $this->input->post('keterangan'),
                	'biaya' => $this->input->post('biaya')
				);

                $this->Pengeluaran_model->update_pengeluaran($id_pengeluaran,$params);            
                redirect('pengeluaran/index');
            }
            else{
                $data['_view'] = 'pengeluaran/edit';
                $this->load->view('layouts/main',$data);
            }
        }
    } 

    function remove($id_pengeluaran){
        $pengeluaran = $this->Pengeluaran_model->get_pengeluaran($id_pengeluaran);

        if(isset($pengeluaran['id'])){
            $this->Pengeluaran_model->delete_pengeluaran($id_pengeluaran);
            redirect('pengeluaran/index');
        }
    }
    
}
