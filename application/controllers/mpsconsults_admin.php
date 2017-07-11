<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Mpsconsults_admin extends CI_Controller {

	public function __construct()
	{
		parent::__construct();

		$this->load->model('admin_model');
		$this->load->model('filter_model');
		$this->load->model('validate_model');
	}

	public function index()
	{
		$data = $this->admin_model->get_post();	
		$data['incorrect_login'] = '';
		$data['reg_success'] = '';
		$data['query'] = '';
		$data['is_adminlogged_in'] = '';	
		$data['admin'] = 'admin';
		$data['year_options'] = $this->filter_model->year_options();
		$data['location_options'] = $this->filter_model->location_options();
		$data['qualification_options'] = $this->filter_model->qualification_options();
		$data['industry_options'] = $this->filter_model->industry_options();
		$data['country_options'] = $this->filter_model->country_options();
		$data['salary_options'] = $this->filter_model->salary_options();
		$data['job_options'] = $this->filter_model->job_type_options();
		$data['main_content'] = 'admin/index';
		
		$this->load->view('includes/template', $data);
	}

	public function signin()
	{
		//login details error
		$data = $this->admin_model->get_post();	
		$data['incorrect_login'] = 'Incorrect Username or Password';
		$data['reg_success'] = '';
		$data['query'] = '';	
		$data['is_adminlogged_in'] = '';	
		$data['admin'] = 'admin';
		$data['year_options'] = $this->filter_model->year_options();
		$data['location_options'] = $this->filter_model->location_options();
		$data['qualification_options'] = $this->filter_model->qualification_options();
		$data['industry_options'] = $this->filter_model->industry_options();
		$data['country_options'] = $this->filter_model->country_options();
		$data['salary_options'] = $this->filter_model->salary_options();
		$data['job_options'] = $this->filter_model->job_type_options();
		$data['main_content'] = 'admin/index';
		
		$this->load->view('includes/template', $data);
	}

	public function validate_credentials()
	{
		$query = $this->validate_model->a_validate();

		if($query) // if admin's credentials validated...
		{
				
			$data = array(
					'admin_username' => $this->input->post('admin_username'),
					'is_adminlogged_in' => true
				);
		
			$this->session->set_userdata($data);
			redirect('profile_admin/admin_area');
		}
		else
		{
			$this->signin();
		}
		
	}

	public function logout()
	{
		$this->session->sess_destroy();
		redirect('mpsconsults_admin/index');				
	}

} 