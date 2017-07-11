<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Jobs_model extends CI_Model {

	public function __construct()
	{
		parent::__construct();

	}

	// Jobs title
	public function get_post()
	{
		$data['title'] = 'Jobs - MPS Consults';
		$data['page_title'] = 'Jobs';
		$this->db->where('username', $this->session->userdata('username'));
		$data['query'] = $this->db->get('users');		
		$this->db->select('*');		
		$this->db->from('application');
		$this->db->where('candidate_username', $this->session->userdata('username'));
		$this->db->join('job', 'job.job_id = application.job_id');
		$data['jobapplyquery'] = $this->db->get();	
		$this->db->where('candidate_username', $this->session->userdata('username'));
		$data['candidatejobquery'] = $this->db->get('application');	
		$this->db->where('suspend', 0);
		$this->db->where('job_end_date_conv >', strtotime('now'));
		$this->db->order_by("job_id", "desc"); 
		$data['jobviewquery'] = $this->db->get('job');	
		$this->db->where('job_id', $this->uri->segment(3));
		$this->db->where('suspend', 0);
		$this->db->order_by("job_id", "desc"); 
		$data['jobselectquery'] = $this->db->get('job');	
		$data['location'] = $this->db->get('states');
		$data['industry'] = $this->db->get('industry');
		$data['job_type'] = $this->db->get('job_type');
		$data['salary'] = $this->db->get('salary');
		$data['highest_education'] = $this->db->get('highest_education');
		$data['specialization'] = $this->db->get('specialization');
		$data['year_experience'] = $this->db->get('year_experience');

		return $data;
	}

	// Apply Jobs
	public function get_apply()
	{
		$candidates_apply_insert = array(
			'candidate_username' =>  $this->session->userdata('username'),
			'job_id' => $this->uri->segment(3)
			);

		$insert = $this->db->insert('application', $candidates_apply_insert);
		return $insert;
	}

	// Search all jobs
	function job_search_all() {
		if($this->input->post('areas_of_special') != '')
		{	
			$this->db->like('area_of_special', $this->input->post('areas_of_special'));
			$this->db->or_like('company_industry', $this->input->post('areas_of_special'));
			$this->db->or_like('job_skills', $this->input->post('areas_of_special'));
			$this->db->or_like('job_location', $this->input->post('areas_of_special'));
			$this->db->or_like('job_position', $this->input->post('areas_of_special'));
			$this->db->or_like('company_name', $this->input->post('areas_of_special'));
		}		
		if($this->input->post('work_exp') != '')
		{
			$this->db->like('work_exp', $this->input->post('work_exp'));
		}
		if($this->input->post('education_qualification') != '')
		{
			$this->db->like('education_qualification', $this->input->post('education_qualification'));
		}
		if($this->input->post('company_industry') != '')
		{
			$this->db->like('company_industry', $this->input->post('company_industry'));
		}
		if($this->input->post('job_type') != '')
		{
			$this->db->like('job_type', $this->input->post('job_type'));
		}
		if($this->input->post('area_of_special') != '')
		{
			$this->db->like('area_of_special', $this->input->post('area_of_special'));
		}
		if($this->input->post('salary_level') != '')
		{
			$this->db->like('salary_level', $this->input->post('salary_level'));
		}
		if($this->input->post('job_location') != '')
		{
			$this->db->like('job_location', $this->input->post('job_location'));
		}	
		$this->db->like('suspend', 0);
		$this->db->where('job_end_date_conv >', strtotime('now'));
		$this->db->order_by("job_id", "desc");
		$data['jobsearchquery'] = $this->db->get('job');	
		$data['title'] = 'Jobs - MPS Consults';
		$data['page_title'] = 'Jobs';		
		$this->db->where('username', $this->session->userdata('username'));
		$data['query'] = $this->db->get('users');
		$this->db->where('candidate_username', $this->session->userdata('username'));
		$data['candidatejobquery'] = $this->db->get('application');	
		$data['location'] = $this->db->get('states');
		$data['industry'] = $this->db->get('industry');
		$data['job_type'] = $this->db->get('job_type');
		$data['salary'] = $this->db->get('salary');
		$data['highest_education'] = $this->db->get('highest_education');
		$data['specialization'] = $this->db->get('specialization');
		$data['year_experience'] = $this->db->get('year_experience');
			
		return $data;		
	}

	// Search by specialization
	function get_job_search_by_specialization() {
		$this->db->select('*');		
		$this->db->from('specialization');
		$this->db->where('id', $this->uri->segment(3));
		$this->db->where('suspend', 0);
		$this->db->where('job_end_date_conv >', strtotime('now'));
		$this->db->order_by("job_id", "desc");
		$this->db->join('job', 'job.area_of_special = specialization.name');
		$data['jobsearchquery'] = $this->db->get();	
		$data['title'] = 'Jobs - MPS Consults';
		$data['page_title'] = 'Jobs';		
		$this->db->where('username', $this->session->userdata('username'));
		$data['query'] = $this->db->get('users');	
		$this->db->where('candidate_username', $this->session->userdata('username'));
		$data['candidatejobquery'] = $this->db->get('application');
		$data['location'] = $this->db->get('states');
		$data['industry'] = $this->db->get('industry');
		$data['job_type'] = $this->db->get('job_type');
		$data['salary'] = $this->db->get('salary');
		$data['highest_education'] = $this->db->get('highest_education');
		$data['specialization'] = $this->db->get('specialization');
		$data['year_experience'] = $this->db->get('year_experience');			
			
		return $data;		
	}

	// Search by location
	function get_job_search_by_location() {
		$this->db->select('*');		
		$this->db->from('states');
		$this->db->where('id', $this->uri->segment(3));
		$this->db->where('suspend', 0);
		$this->db->where('job_end_date_conv >', strtotime('now'));
		$this->db->order_by("job_id", "desc");
		$this->db->join('job', 'job.job_location = states.name');
		$data['jobsearchquery'] = $this->db->get('');	
		$data['title'] = 'Jobs - MPS Consults';
		$data['page_title'] = 'Jobs';		
		$this->db->where('username', $this->session->userdata('username'));
		$data['query'] = $this->db->get('users');	
		$this->db->where('candidate_username', $this->session->userdata('username'));
		$data['candidatejobquery'] = $this->db->get('application');
		$data['location'] = $this->db->get('states');
		$data['industry'] = $this->db->get('industry');
		$data['job_type'] = $this->db->get('job_type');
		$data['salary'] = $this->db->get('salary');
		$data['highest_education'] = $this->db->get('highest_education');
		$data['specialization'] = $this->db->get('specialization');
		$data['year_experience'] = $this->db->get('year_experience');			
			
		return $data;		
	}

		// Search by industry
	function get_job_search_by_industry() {
		$this->db->select('*');		
		$this->db->from('industry');
		$this->db->where('id', $this->uri->segment(3));
		$this->db->where('suspend', 0);
		$this->db->where('job_end_date_conv >', strtotime('now'));
		$this->db->order_by("job_id", "desc");
		$this->db->join('job', 'job.company_industry = industry.name');
		$data['jobsearchquery'] = $this->db->get('');		
		$data['title'] = 'Jobs - MPS Consults';
		$data['page_title'] = 'Jobs';		
		$this->db->where('username', $this->session->userdata('username'));
		$data['query'] = $this->db->get('users');	
		$this->db->where('candidate_username', $this->session->userdata('username'));
		$data['candidatejobquery'] = $this->db->get('application');
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
