<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Api extends MY_Controller {
    
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Berita_m');
        $this->load->model('Jenis_objek_wisata_m');
        $this->load->model('Objek_wisata_m');
    }
	public function index()
	{
        $data = $this->Berita_m->get();
        echo json_encode($data);
    }
    
    public function getBerita($id_berita){
        $data = $this->Berita_m->get_row(['id_berita' => $id_berita]);
        echo json_encode($data);
    }

    public function getWisata($id){
        $data = $this->Objek_wisata_m->get(['id_jenis_objek_wisata' => $id]);
        echo json_encode($data);
    }

    public function testimoni(){
        $this->load->model('Testimoni_m');
        if($this->POST('testimoni')){
            $data = [
                'nama_guest' => $this->POST('nama'),
                'email_guest' => $this->POST('email'),
                'isi' => $this->POST('testimoni')
            ];
            $this->Testimoni_m->insert($data);
            $response = [
                'status' => 'ok',
                'pesan' => 'Testimoni berhasil disubmit'
            ];
            echo json_encode($response);
            exit;
        }
        $response = [
            'status' => 'gagal'
        ];
        echo json_encode($response);
    }
}
