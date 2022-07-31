<?php
class Pencuci extends CI_Controller{
    function __construct(){
        parent::__construct();
        $this->load->model('Pencuci_model');

        if($this->session->userdata('status') != "login"){
            redirect('');
        }
    }

    function index(){
        $data['pencuci'] = $this->Pencuci_model->get_all_pencuci();
        
        $data['_view'] = 'pencuci/index';
        $this->load->view('layouts/main',$data);
    }

    function add(){
        if(isset($_POST) && count($_POST) > 0){
            $config['upload_path']          = 'foto/';
            $config['allowed_types']        = 'gif|jpg|png|pdf';
            $config['max_size']             = 10000;
            $config['max_width']            = 3000;
            $config['max_height']           = 1688;
     
            $this->load->library('upload', $config);

            if ( ! $this->upload->do_upload('foto')){
                echo '<script>alert("Data gagal disimpan");</script>';
                redirect('pencuci/index');
            }
            else{
                $file = $this->upload->data();
                $foto = $file['file_name'];

                $params = array(
                    'nama_pencuci' => $this->input->post('nama'),
                    'foto' => $foto
                );
                
                $pencuci_id = $this->Pencuci_model->add_pencuci($params);
                redirect('pencuci/index');
            }
        }
        else{
            $data['_view'] = 'pencuci/add';
            $this->load->view('layouts/main',$data);
        }
    }  

    function edit($id_pencuci){
        $data['pencuci'] = $this->Pencuci_model->get_pencuci($id_pencuci);
        
        if(isset($data['pencuci']['id_pencuci'])){
            if(isset($_POST) && count($_POST) > 0){
                $config['upload_path']          = 'foto/';
                $config['allowed_types']        = 'gif|jpg|png|pdf';
                $config['max_size']             = 10000;
                $config['max_width']            = 3000;
                $config['max_height']           = 1688;
         
                $this->load->library('upload', $config);

                if ( ! $this->upload->do_upload('foto')){
                    $file = $this->upload->data();
                    $foto = $file['file_name'];

                    $params = array(
                        'nama_pencuci' => $this->input->post('nama')
                    );

                    $this->Pencuci_model->update_pencuci($id_pencuci,$params);            
                    redirect('pencuci/index');
                }
                else{
                    $file = $this->upload->data();
                    $foto = $file['file_name'];

                    $params = array(
                        'nama_pencuci' => $this->input->post('nama'),
                        'foto' => $foto
                    );

                    $this->Pencuci_model->update_pencuci($id_pencuci,$params);            
                    redirect('pencuci/index');
                }
            }
            else{
                $data['_view'] = 'pencuci/edit';
                $this->load->view('layouts/main',$data);
            }
        }
    } 

    function remove($id_pencuci){
        $pencuci = $this->Pencuci_model->get_pencuci($id_pencuci);

        if(isset($pencuci['id_pencuci'])){
            $path = './foto/';
            unlink($path.$pencuci['foto']);
            
            $this->Pencuci_model->delete_pencuci($id_pencuci);
            redirect('pencuci/index');
        }
    }
    
}
