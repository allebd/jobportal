<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Jobs extends CI_Controller {

	public function __construct()
	{
		parent::__construct();

		$this->load->model('jobs_model');
		$this->load->model('filter_model');
	}

	public function index()
	{
		$data = $this->jobs_model->get_post();
		$data['incorrect_login'] = '';	
		$data['reg_success'] = '';
		$data['is_logged_in'] = $this->session->userdata('is_logged_in');
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
		$config['base_url'] =  base_url('jobs/index');
		$this->db->where('suspend', 0);
		$config['total_rows'] = $this->db->get('job')->num_rows();
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

		$this->db->where('suspend', 0);
		$this->db->where('job_end_date_conv >', strtotime('now'));
		$data['jobviewquery'] = $this->db->get('job', $config['per_page'], $this->uri->segment(3));

		$data['main_content'] = 'job/jobs';

		$this->load->view('includes/template', $data);
	}

	public function application()
	{
		$data = $this->jobs_model->get_post();
		$data['incorrect_login'] = '';	
		$data['reg_success'] = '';
		$data['is_logged_in'] = $this->session->userdata('is_logged_in');
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
		$data['main_content'] = 'job/application';

		$this->load->view('includes/template', $data);
	}

	public function apply()
	{
		$data = $this->jobs_model->get_apply();		
		redirect('jobs/application');
	}

	public function job_search()
	{
		$data = $this->jobs_model->job_search_all();	
		$data['incorrect_login'] = '';	
		$data['reg_success'] = '';
		$data['is_logged_in'] = $this->session->userdata('is_logged_in');
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
		$data['main_content'] = 'job/search';

		$this->load->view('includes/template', $data);
	}

	public function job_selected()
	{
		$data = $this->jobs_model->get_post();	
		$data['incorrect_login'] = '';	
		$data['reg_success'] = '';
		$data['is_logged_in'] = $this->session->userdata('is_logged_in');
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
		$data['main_content'] = 'job/jobs_selected';

		$this->load->view('includes/template', $data);
	}

	public function job_search_by_specialization()
	{	
		$data = $this->jobs_model->get_job_search_by_specialization();	
		$data['incorrect_login'] = '';	
		$data['reg_success'] = '';
		$data['is_logged_in'] = $this->session->userdata('is_logged_in');
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
		$data['main_content'] = 'job/search';

		$this->load->view('includes/template', $data);
	}

	public function job_search_by_location()
	{
		$data = $this->jobs_model->get_job_search_by_location();	
		$data['incorrect_login'] = '';	
		$data['reg_success'] = '';
		$data['is_logged_in'] = $this->session->userdata('is_logged_in');
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
		$data['main_content'] = 'job/search';

		$this->load->view('includes/template', $data);
	}

	public function job_search_by_industry()
	{
		$data = $this->jobs_model->get_job_search_by_industry();	
		$data['incorrect_login'] = '';	
		$data['reg_success'] = '';
		$data['is_logged_in'] = $this->session->userdata('is_logged_in');
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
		$data['main_content'] = 'job/search';

		$this->load->view('includes/template', $data);
	}
}

