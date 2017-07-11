<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Contact_model extends CI_Model {

	public function __construct()
	{
		parent::__construct();

	}

	public function get_post()
	{
		$data['title'] = 'Contact Us - MPS Consults';
		$data['page_title'] = 'Contact Us';
		$this->db->where('username', $this->session->userdata('username'));
		$data['query'] = $this->db->get('users');
		return $data;
	}
} 
