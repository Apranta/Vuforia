<?php defined('BASEPATH') || exit('No direct script allowed');

class Testimoni_m extends MY_Model
{
	public function __construct()
	{
		parent::__construct();
		$this->data['table_name']  = 'testimoni';
		$this->data['primary_key'] = 'id_testimoni';
	}
}

