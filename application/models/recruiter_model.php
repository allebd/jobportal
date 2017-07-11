<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Recruiter_model extends CI_Model {

	public function __construct()
	{
		parent::__construct();

	}

	public function get_post()
	{
		$data['title'] = 'MPS Consults | Recruiters';
		$data['location'] = $this->db->get('states');
		$data['industry'] = $this->db->get('industry');
		$data['job_type'] = $this->db->get('job_type');
		$data['salary'] = $this->db->get('salary');
		$data['highest_education'] = $this->db->get('highest_education');
		$data['specialization'] = $this->db->get('specialization');
		$data['year_experience'] = $this->db->get('year_experience');
		$data['recruiter'] = $this->db->get('employers');
		$data['toprecruit'] = $this->db->get('toprecruit');
		$this->db->where('name', 'Terms');
		$data['terms'] = $this->db->get('mps_extra');
		$this->db->where('name', 'Privacy');
		$data['privacy'] = $this->db->get('mps_extra');
		$this->db->where('username', $this->session->userdata('username'));
		$data['query'] = $this->db->get('users');

		$data['page_title'] = '';
		return $data;
	}
	
	public function get_all()
	{
		$data['title'] = 'MPS Consults | Recruiters';
		$data['location'] = $this->db->get('states');
		$data['industry'] = $this->db->get('industry');
		$data['job_type'] = $this->db->get('job_type');
		$data['salary'] = $this->db->get('salary');
		$data['highest_education'] = $this->db->get('highest_education');
		$data['specialization'] = $this->db->get('specialization');
		$data['year_experience'] = $this->db->get('year_experience');
		$data['recruiter'] = $this->db->get('employers');
		$data['toprecruit'] = $this->db->get('toprecruit');
		$this->db->where('name', 'Terms');
		$data['terms'] = $this->db->get('mps_extra');
		$this->db->where('name', 'Privacy');
		$data['privacy'] = $this->db->get('mps_extra');
		$this->db->where('username', $this->session->userdata('username'));
		$data['query'] = $this->db->get('users');

		$data['page_title'] = 'All Recruiters';
		return $data;
	}

	public function get_terms_download()
	{	
		$thepath = base_url().'uploads/'.$this->uri->segment(3);
		$data = file_get_contents($thepath); // Read the file's contents
		$name = $this->uri->segment(3);

		return force_download($name, $data);				
	}
} 
