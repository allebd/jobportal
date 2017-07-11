<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Recruiter extends CI_Controller {

	public function __construct()
	{
		parent::__construct();

		$this->load->model('recruiter_model');
		$this->load->model('filter_model');
	}

	public function index()
	{
		$data = $this->recruiter_model->get_post();
		$data['incorrect_login'] = '';	
		$data['reg_success'] = '';	
		$data['query'] = '';
		$data['recruit'] = 'recruiter';
		$data['is_recruitlogged_in'] = '';
		$data['is_logged_in'] = '';
		$data['thehome'] = 'thehome';
		
		$data['main_content'] = 'recruiter/sign-in';

		$this->load->view('includes/template', $data);
	}

	public function all()
	{
		$data = $this->recruiter_model->get_all();
		$data['incorrect_login'] = '';	
		$data['reg_success'] = '';
		$data['is_recruitlogged_in'] = '';
		$data['is_logged_in'] = $this->session->userdata('is_logged_in');
		$data['thehome'] = 'thehome';
		$data['year_options'] = $this->filter_model->year_options();
		$data['gender_options'] = $this->filter_model->gender_options();
		$data['skill_options'] = $this->filter_model->skill_options();
		$data['location_options'] = $this->filter_model->location_options();
		$data['relocate_options'] = $this->filter_model->relocate_options();
		$data['qualification_options'] = $this->filter_model->qualification_options();
		$data['specialization_options'] = $this->filter_model->specialization_options();
		$data['industry_options'] = $this->filter_model->industry_options();
		$data['country_options'] = $this->filter_model->country_options();
		$data['salary_options'] = $this->filter_model->salary_options();
		$data['job_options'] = $this->filter_model->job_type_options();

		//pagination
		$this->load->library('pagination');

		$config = array();
		$config['base_url'] =  base_url('recruiter/all');
		$config['total_rows'] = $this->db->get('employers')->num_rows();
		$config['per_page'] = 15;
		$config['num_links'] = 10;
		$config['full_tag_open'] = '<ul class="pagination pull-right">';
		$config['full_tag_close'] = '</ul>';
		$config['next_link'] = '&gt;';
		$config['next_tag_open'] = '<li>';
		$config['next_tag_close'] = '</li>';
		$config['prev_link'] = '&lt;';
		$config['prev_tag_open'] = '<li>';
		$config['prev_tag_close'] = '</li>';
		$config['cur_tag_open'] = '<li class="active"><a href="#">';
		$config['cur_tag_close'] = '</a></li>';
		$config['num_tag_open'] = '<li>';
		$config['num_tag_close'] = '</li>';

		$this->pagination->initialize($config);

		$data['recruiter'] = $this->db->get('employers', $config['per_page'], $this->uri->segment(3));
		
		$data['main_content'] = 'recruiter/allrecruiters';

		$this->load->view('includes/template', $data);
	}

	public function terms_download()
	{
		$data = $this->recruiter_model->get_terms_download();	
	}
}
