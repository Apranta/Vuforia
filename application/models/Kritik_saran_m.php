<?php defined('BASEPATH') || exit('No direct script allowed');

class Kritik_saran_m extends MY_Model
{
	public function __construct()
	{
		parent::__construct();
		$this->data['table_name']  = 'kritik_saran';
		$this->data['primary_key'] = 'id_kritik_saran';
	}
}

