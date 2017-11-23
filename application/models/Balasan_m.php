<?php defined('BASEPATH') || exit('No direct script allowed');

class Balasan_m extends MY_Model
{
	public function __construct()
	{
		parent::__construct();
		$this->data['table_name']  = 'balasan';
		$this->data['primary_key'] = 'id_balasan';
	}
}

