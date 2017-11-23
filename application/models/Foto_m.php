<?php defined('BASEPATH') || exit('No direct script allowed');

class Foto_m extends MY_Model
{
	public function __construct()
	{
		parent::__construct();
		$this->data['table_name']  = 'foto';
		$this->data['primary_key'] = 'id_foto';
	}
}

