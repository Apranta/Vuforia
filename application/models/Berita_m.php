<?php defined('BASEPATH') || exit('No direct script allowed');

class Berita_m extends MY_Model
{
	public function __construct()
	{
		parent::__construct();
		$this->data['table_name']  = 'berita';
		$this->data['primary_key'] = 'id_berita';
	}
}

