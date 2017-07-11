<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Job_model extends CI_Model {

	public function __construct()
	{
		parent::__construct();

	}

	// Jobs title
	public function get_post()
	{
		$data['title'] = 'Jobs - MPS Consults';
		$this->db->where('employer_id', $this->uri->segment(3));
		$dtitle = $this->db->get('employers');
		foreach($dtitle->result() as $trow)
		{
			$data['page_title'] = $trow->org_name. ' Jobs';
		}
		$this->db->where('username', $this->session->userdata('username'));
		$data['query'] = $this->db->get('users');		
		$this->db->select('*');		
		$this->db->from('application');
		$this->db->where('candidate_username', $this->session->userdata('username'));
		$this->db->join('job', 'job.job_id = application.job_id');
		$data['jobapplyquery'] = $this->db->get();	
		$this->db->select('*');		
		$this->db->from('employers');
		$this->db->where('employer_id', $this->uri->segment(3));
		$this->db->join('job', 'job.employer_user = employers.r_username');
		$data['jobviewquery'] = $this->db->get();	
		$data['location'] = $this->db->get('states');
		$data['industry'] = $this->db->get('industry');
		$data['job_type'] = $this->db->get('job_type');
		$data['salary'] = $this->db->get('salary');
		$data['highest_education'] = $this->db->get('highest_education');
		$data['specialization'] = $this->db->get('specialization');
		$data['year_experience'] = $this->db->get('year_experience');

		return $data;
	}
} 
