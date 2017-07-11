<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Services extends CI_Controller {

	public function __construct()
	{
		parent::__construct();

		$this->load->model('services_model');
	}

	public function index()
	{
		$data = $this->services_model->get_post();
		$data['incorrect_login'] = '';	
		$data['reg_success'] = '';
		$data['recruit'] = 'recruiter';
		$data['is_logged_in'] = $this->session->userdata('is_logged_in');
		$data['is_recruitlogged_in'] = $this->session->userdata('is_recruitlogged_in');
		$data['main_content'] = 'services/index';

		$this->load->view('includes/template', $data);
	}

	public function strategic_human_resource_management()
	{
		$data = $this->services_model->get_post();
		$data['incorrect_login'] = '';	
		$data['reg_success'] = '';
		$data['recruit'] = 'recruiter';
		$data['is_logged_in'] = $this->session->userdata('is_logged_in');
		$data['is_recruitlogged_in'] = $this->session->userdata('is_recruitlogged_in');
		$data['main_content'] = 'services/strategic_human_resource_management';
		
		$this->load->view('includes/template', $data);
	}

	public function staffing_solutions()
	{
		$data = $this->services_model->get_post();
		$data['incorrect_login'] = '';	
		$data['reg_success'] = '';
		$data['recruit'] = 'recruiter';
		$data['is_logged_in'] = $this->session->userdata('is_logged_in');
		$data['is_recruitlogged_in'] = $this->session->userdata('is_recruitlogged_in');
		$data['main_content'] = 'services/staffing_solutions';
		
		$this->load->view('includes/template', $data);
	}

	public function training_and_development()
	{
		$data = $this->services_model->get_post();
		$data['incorrect_login'] = '';	
		$data['reg_success'] = '';
		$data['recruit'] = 'recruiter';
		$data['is_logged_in'] = $this->session->userdata('is_logged_in');
		$data['is_recruitlogged_in'] = $this->session->userdata('is_recruitlogged_in');
		$data['main_content'] = 'services/training_and_development';
		
		$this->load->view('includes/template', $data);
	}

	public function employee_reward_management_system()
	{
		$data = $this->services_model->get_post();
		$data['incorrect_login'] = '';	
		$data['reg_success'] = '';
		$data['recruit'] = 'recruiter';
		$data['is_logged_in'] = $this->session->userdata('is_logged_in');
		$data['is_recruitlogged_in'] = $this->session->userdata('is_recruitlogged_in');
		$data['main_content'] = 'services/employee_reward_management_system';
		
		$this->load->view('includes/template', $data);
	}

	public function contingency_workforce_outsourcing()
	{
		$data = $this->services_model->get_post();
		$data['incorrect_login'] = '';	
		$data['reg_success'] = '';
		$data['recruit'] = 'recruiter';
		$data['is_logged_in'] = $this->session->userdata('is_logged_in');
		$data['is_recruitlogged_in'] = $this->session->userdata('is_recruitlogged_in');
		$data['main_content'] = 'services/contingency_workforce_outsourcing';
		
		$this->load->view('includes/template', $data);
	}
}

