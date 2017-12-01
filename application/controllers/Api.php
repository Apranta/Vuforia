<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Api extends MY_Controller {
    
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Berita_m');
    }
	public function index()
	{
        $data = $this->Berita_m->get();
        echo json_encode($data);
	}
}
