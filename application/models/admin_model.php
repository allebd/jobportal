<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin_model extends CI_Model {

	public function __construct()
	{
		parent::__construct();

	}

	public function get_post()
	{
		$data['title'] = 'Admin | MPS Consults';
		$data['query'] = $this->db->get('admin');

		$data['page_title'] = '';
		return $data;
	}
	
} 
