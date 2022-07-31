<?php
class Utama extends CI_Controller{
    function __construct(){
        parent::__construct();

        $this->load->model('Pencuci_model');
        $this->load->model('Paket_model');
        $this->load->model('Antrian_model');
        $this->load->model('Outbox_model');
    }

    function index(){
        $data['_view'] = 'index';
        $this->load->view('index',$data);
    }

    function about(){
        $data['_view'] = 'about';
        $this->load->view('tentang_kami',$data);
    }

    function service(){
        $data['paket'] = $this->Paket_model->get_all_paket();
        $data['pencuci'] = $this->Pencuci_model->get_all_pencuci();

        $data['_view'] = 'service';
        $this->load->view('booking',$data);
    }

    function login(){
        $data['_view'] = 'login';
        $this->load->view('login',$data);
    }

    function add(){
        $tgl = $this->input->post('tanggal');
        $data2 = $this->db->query("SELECT max(nomor_antri) as maxAntri FROM antrian WHERE tanggal = '$tgl'")->row_array();
        $nomor2 = $data2['maxAntri'];
        $noUrut2 = (int) substr($nomor2, 2, 2);
        $noUrut2++;
        $char2 = "";
        $nomor2 = $char2 . sprintf("%03s", $noUrut2);

        if(isset($_POST) && count($_POST) > 0){   
            $params = array(
				'kode_antrian' => $this->input->post('kode_antrian'),
				'tanggal' => $this->input->post('tanggal'),
				'jam' => $this->input->post('jam'),
				'nomor_antri' => $nomor2,
				'nama' => $this->input->post('nama'),
				'no_hp' => $this->input->post('no_hp'),
				'plat' => $this->input->post('plat'),
				'id_paket' => $this->input->post('id_paket'),
                'id_pencuci' => $this->input->post('id_pencuci')
            );

            $reply = "Kode Booking anda adalah ".$this->input->post('kode_antrian').", dengan nomor antri ".$nomor2.". Silahkan datang 10 menit sebelum jadwal, Terimakasih :)";

            $param = array(
                'DestinationNumber' => $this->input->post('no_hp'),
                'TextDecoded' => $reply
            );
            
            $antrian_id = $this->Antrian_model->add_antrian($params);
            $outbox_id = $this->Outbox_model->add_outbox($param);
            
            $this->session->set_flashdata('sukses','Berhasil booking');
            redirect('utama/service');
        }
        else
        {            
            $data['_view'] = 'service';
            $this->load->view('booking',$data);
        }
    }
}
?>
