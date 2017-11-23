<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 *
 */
class Admin extends MY_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->data['id_role'] = $this->session->userdata('id_role');
        if (!isset($this->data['id_role']) || $this->data['id_role'] != 1)
        {
            $this->session->unset_userdata('username');
            $this->session->unset_userdata('id_role');
            $this->flashmsg('Anda harus login dulu','warning');
            redirect('login');
            exit;
        }
        $this->load->model('Berita_m');
        $this->load->model('Objek_wisata_m');
    }

    public function index()
    {
        $this->data['title']        = 'Dashboard Admin';
        $this->data['content']      = 'admin/dashboard';
        $this->template($this->data);
    }

    public function berita()
    {
        if ($this->POST('insert'))
        {
            $this->data['entry'] = [
                "id_berita" => $this->POST("id_berita"),
                "judul_berita" => $this->POST("judul_berita"),
                "isi_berita" => $this->POST("isi_berita"),
                "foto_berita" => $this->POST("foto_berita"),
                "waktu" => $this->POST("waktu"),
                "username" => $this->POST("username"),
            ];
            $this->Berita_m->insert($this->data['entry']);
            redirect('admin/berita');
            exit;
        }
        
        if ($this->POST('delete') && $this->POST('id_berita'))
        {
            $this->Berita_m->delete($this->POST('id_berita'));
            exit;
        }
                
        if ($this->POST('edit') && $this->POST('edit_id_berita'))
        {
            $this->data['entry'] = [
                "id_berita" => $this->POST("id_berita"),
                "judul_berita" => $this->POST("judul_berita"),
                "isi_berita" => $this->POST("isi_berita"),
                "foto_berita" => $this->POST("foto_berita"),
                "waktu" => $this->POST("waktu"),
                "username" => $this->POST("username"),
            ];
            $this->Berita_m->update($this->POST('edit_id_berita'), $this->data['entry']);
            redirect('admin/berita');
            exit;
        }

        if ($this->POST('get') && $this->POST('id_berita'))
        {
            $this->data['berita'] = $this->Berita_m->get_row(['id_berita' => $this->POST('id_berita')]);
            echo json_encode($this->data['berita']);
            exit;
        }
                
        $this->data['data']     = $this->Berita_m->get();
        $this->data['columns']  = ["id_berita","judul_berita","isi_berita","foto_berita","waktu","username",];
        $this->data['title']    = 'Berita';
        $this->data['content']  = 'berita_all';
        $this->template($this->data, "material-design");
    }


    public function detail_berita()
    {
        $this->data['id_berita'] = $this->uri->segment(3);
        if (!isset($this->data['id_berita']))
        {
            redirect('admin/berita');
            exit;
        }

        $this->data['columns']  = ["id_berita","judul_berita","isi_berita","foto_berita","waktu","username",];
        $this->data['data'] = $this->Berita_m->get_row(['id_berita' => $this->data['id_berita']]);
        $this->data['title']    = 'Berita';
        $this->data['content']  = 'berita_detail';
        $this->template($this->data, "material-design");
    }

    public function objek_wisata()
    {
        if ($this->POST('insert'))
        {
            $this->data['entry'] = [
                "id_objek_wisata" => $this->POST("id_objek_wisata"),
                "nama_objek_wisata" => $this->POST("nama_objek_wisata"),
                "id_jenis_objek_wisata" => $this->POST("id_jenis_objek_wisata"),
                "lokasi_objek_wisata" => $this->POST("lokasi_objek_wisata"),
                "detail_objek_wisata" => $this->POST("detail_objek_wisata"),
                "latlong_objek_wisata" => $this->POST("latlong_objek_wisata"),
            ];
            $this->Objek_wisata_m->insert($this->data['entry']);
            redirect('admin/objek_wisata');
            exit;
        }
        
        if ($this->POST('delete') && $this->POST('id_objek_wisata'))
        {
            $this->Objek_wisata_m->delete($this->POST('id_objek_wisata'));
            exit;
        }
                
        if ($this->POST('edit') && $this->POST('edit_id_objek_wisata'))
        {
            $this->data['entry'] = [
                "id_objek_wisata" => $this->POST("id_objek_wisata"),
                "nama_objek_wisata" => $this->POST("nama_objek_wisata"),
                "id_jenis_objek_wisata" => $this->POST("id_jenis_objek_wisata"),
                "lokasi_objek_wisata" => $this->POST("lokasi_objek_wisata"),
                "detail_objek_wisata" => $this->POST("detail_objek_wisata"),
                "latlong_objek_wisata" => $this->POST("latlong_objek_wisata"),
            ];
            $this->Objek_wisata_m->update($this->POST('edit_id_objek_wisata'), $this->data['entry']);
            redirect('admin/objek_wisata');
            exit;
        }

        if ($this->POST('get') && $this->POST('id_objek_wisata'))
        {
            $this->data['objek_wisata'] = $this->Objek_wisata_m->get_row(['id_objek_wisata' => $this->POST('id_objek_wisata')]);
            echo json_encode($this->data['objek_wisata']);
            exit;
        }
                
        $this->data['data']     = $this->Objek_wisata_m->get();
        $this->data['columns']  = ["id_objek_wisata","nama_objek_wisata","id_jenis_objek_wisata","lokasi_objek_wisata","detail_objek_wisata","latlong_objek_wisata",];
        $this->data['title']    = 'Title';
        $this->data['content']  = 'objek_wisata_all';
        $this->template($this->data, "material-design");
    }


    public function detail_objek_wisata()
    {
        $this->data['id_objek_wisata'] = $this->uri->segment(3);
        if (!isset($this->data['id_objek_wisata']))
        {
            redirect('admin/objek_wisata');
            exit;
        }

        $this->data['columns']  = ["id_objek_wisata","nama_objek_wisata","id_jenis_objek_wisata","lokasi_objek_wisata","detail_objek_wisata","latlong_objek_wisata",];
        $this->data['data'] = $this->Objek_wisata_m->get_row(['id_objek_wisata' => $this->data['id_objek_wisata']]);
        $this->data['title']    = 'Title';
        $this->data['content']  = 'objek_wisata_detail';
        $this->template($this->data, "material-design");
    }
}
