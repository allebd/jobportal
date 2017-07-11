<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Packages_model extends CI_Model {

	public function __construct()
	{
		parent::__construct();

	}

	public function get_post()
	{
		$data['title'] = 'MPS Consults | Recruiters - Packages';
		$this->db->where('r_username', $this->session->userdata('r_username'));
		$data['query'] = $this->db->get('employers');	
		$data['packages'] = $this->db->get('packages');	
		$data['location'] = $this->db->get('states');
		$data['industry'] = $this->db->get('industry');
		$data['job_type'] = $this->db->get('job_type');
		$data['salary'] = $this->db->get('salary');
		$data['highest_education'] = $this->db->get('highest_education');
		$data['specialization'] = $this->db->get('specialization');
		$data['year_experience'] = $this->db->get('year_experience');

		$data['page_title'] = 'Recruiter Packages';
		return $data;
	}
	
} 
