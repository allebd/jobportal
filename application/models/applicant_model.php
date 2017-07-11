<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Applicant_model extends CI_Model {

	public function __construct()
	{
		parent::__construct();

	}

	// Create CV
	public function get_createcv()
	{
		$data['title'] = 'Create CV - MPS Consults';
		$data['page_title'] = 'Create CV';
		$this->db->where('username', $this->session->userdata('username'));
		$data['query'] = $this->db->get('users');
		$this->db->where('name', 'createcv');	
		$data['createcv'] = $this->db->get('applicantservices');

		return $data;
	}

	// Interview Prepping
	public function get_interview()
	{
		$data['title'] = 'Interview Prepping - MPS Consults';
		$data['page_title'] = 'Interview Prepping';
		$this->db->where('username', $this->session->userdata('username'));
		$data['query'] = $this->db->get('users');	

		return $data;
	}

	// Interview Prepping Pay
	public function get_interviewpay()
	{	
		$data['title'] = 'Interview Prepping - MPS Consults';
		$data['page_title'] = 'Interview Prepping';
		$this->db->where('username', $this->session->userdata('username'));
		$data['query'] = $this->db->get('users');	
		$this->db->where('name', 'prep');	
		$data['interview'] = $this->db->get('applicantservices');

		$interview_insert = array(
			'username' =>  $this->session->userdata('username'),
			'topic' => $this->input->post('topic'),
			'date' => date('Y-m-d')
			);

		$data['insert'] = $this->db->insert('interviewprep', $interview_insert);
		return $data;
	}
} 
