<?php defined('BASEPATH') || exit('No direct script allowed');

class Objek_wisata_m extends MY_Model
{
	public function __construct()
	{
		parent::__construct();
		$this->data['table_name']  = 'objek_wisata';
		$this->data['primary_key'] = 'id_objek_wisata';
	}
}

