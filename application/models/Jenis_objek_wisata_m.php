<?php defined('BASEPATH') || exit('No direct script allowed');

class Jenis_objek_wisata_m extends MY_Model
{
	public function __construct()
	{
		parent::__construct();
		$this->data['table_name']  = 'jenis_objek_wisata';
		$this->data['primary_key'] = 'id_jenis_objek_wisata';
	}
}

