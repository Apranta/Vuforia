<?php defined('BASEPATH') || exit('No direct script allowed');

class Jenis_admin_m extends MY_Model
{
	public function __construct()
	{
		parent::__construct();
		$this->data['table_name']  = 'jenis_admin';
		$this->data['primary_key'] = 'id_jenis_admin';
	}
}

