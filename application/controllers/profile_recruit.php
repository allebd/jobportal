<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Profile_recruit extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		
		$this->is_recruitlogged_in();
		$this->load->model('profile_recruit_model');
		$this->load->model('filter_model');
	}

	public function recruiters_area()
	{
		$data = $this->profile_recruit_model->get_post();
		$data['incorrect_login'] = '';	
		$data['reg_success'] = '';
		$data['is_recruitlogged_in'] = $this->session->userdata('is_recruitlogged_in');	
		$data['recruit'] = 'recruiter';
		$data['error'] = '';
		$data['year_options'] = $this->filter_model->year_options();
		$data['gender_options'] = $this->filter_model->gender_options();
		$data['skill_options'] = $this->filter_model->skill_options();
		$data['location_options'] = $this->filter_model->location_options();
		$data['no_of_emp_options'] = $this->filter_model->no_of_emp_options();
		$data['relocate_options'] = $this->filter_model->relocate_options();
		$data['qualification_options'] = $this->filter_model->qualification_options();
		$data['specialization_options'] = $this->filter_model->specialization_options();
		$data['industry_options'] = $this->filter_model->industry_options();
		$data['country_options'] = $this->filter_model->country_options();
		$data['salary_options'] = $this->filter_model->salary_options();
		$data['job_options'] = $this->filter_model->job_type_options();

		$data['main_content'] = 'profile/recruiter_dashboard';

		$this->load->view('includes/template',$data);
	}

	
	public function pay_success()
	{
		$data = $this->profile_recruit_model->get_post();
		$data['incorrect_login'] = '';	
		$data['reg_success'] = '';
		$data['is_recruitlogged_in'] = $this->session->userdata('is_recruitlogged_in');	
		$data['recruit'] = 'recruiter';
		$data['error'] = '';
		$data['year_options'] = $this->filter_model->year_options();
		$data['gender_options'] = $this->filter_model->gender_options();
		$data['skill_options'] = $this->filter_model->skill_options();
		$data['location_options'] = $this->filter_model->location_options();
		$data['no_of_emp_options'] = $this->filter_model->no_of_emp_options();
		$data['relocate_options'] = $this->filter_model->relocate_options();
		$data['qualification_options'] = $this->filter_model->qualification_options();
		$data['specialization_options'] = $this->filter_model->specialization_options();
		$data['industry_options'] = $this->filter_model->industry_options();
		$data['country_options'] = $this->filter_model->country_options();
		$data['salary_options'] = $this->filter_model->salary_options();
		$data['job_options'] = $this->filter_model->job_type_options();
		
		$data['main_content'] = 'packages/pay_success';

		$this->load->view('includes/template', $data);
	}

	public function pay_failure()
	{
		$data = $this->profile_recruit_model->get_post();
		$data['incorrect_login'] = '';	
		$data['reg_success'] = '';
		$data['is_recruitlogged_in'] = $this->session->userdata('is_recruitlogged_in');	
		$data['recruit'] = 'recruiter';
		$data['error'] = '';
		$data['year_options'] = $this->filter_model->year_options();
		$data['gender_options'] = $this->filter_model->gender_options();
		$data['skill_options'] = $this->filter_model->skill_options();
		$data['location_options'] = $this->filter_model->location_options();
		$data['no_of_emp_options'] = $this->filter_model->no_of_emp_options();
		$data['relocate_options'] = $this->filter_model->relocate_options();
		$data['qualification_options'] = $this->filter_model->qualification_options();
		$data['specialization_options'] = $this->filter_model->specialization_options();
		$data['industry_options'] = $this->filter_model->industry_options();
		$data['country_options'] = $this->filter_model->country_options();
		$data['salary_options'] = $this->filter_model->salary_options();
		$data['job_options'] = $this->filter_model->job_type_options();
		
		$data['main_content'] = 'packages/pay_failure';

		$this->load->view('includes/template', $data);
	}


	public function recruiters()
	{
		$data = $this->profile_recruit_model->get_post();
		$data['incorrect_login'] = '';	
		$data['reg_success'] = '';
		$data['is_recruitlogged_in'] = $this->session->userdata('is_recruitlogged_in');	
		$data['recruit'] = 'recruiter';
		$data['error'] = '';
		$data['year_options'] = $this->filter_model->year_options();
		$data['gender_options'] = $this->filter_model->gender_options();
		$data['skill_options'] = $this->filter_model->skill_options();
		$data['location_options'] = $this->filter_model->location_options();
		$data['no_of_emp_options'] = $this->filter_model->no_of_emp_options();
		$data['relocate_options'] = $this->filter_model->relocate_options();
		$data['qualification_options'] = $this->filter_model->qualification_options();
		$data['specialization_options'] = $this->filter_model->specialization_options();
		$data['industry_options'] = $this->filter_model->industry_options();
		$data['country_options'] = $this->filter_model->country_options();
		$data['salary_options'] = $this->filter_model->salary_options();
		$data['job_options'] = $this->filter_model->job_type_options();

		$data['main_content'] = 'profile/recruiter';

		$this->load->view('includes/template',$data);
	}

	public function recruiters_account()
	{
		$data = $this->profile_recruit_model->get_post();
		$data['incorrect_login'] = '';	
		$data['reg_success'] = '';
		$data['is_recruitlogged_in'] = $this->session->userdata('is_recruitlogged_in');	
		$data['recruit'] = 'recruiter';
		$data['error'] = '';
		$data['year_options'] = $this->filter_model->year_options();
		$data['gender_options'] = $this->filter_model->gender_options();
		$data['skill_options'] = $this->filter_model->skill_options();
		$data['location_options'] = $this->filter_model->location_options();
		$data['no_of_emp_options'] = $this->filter_model->no_of_emp_options();
		$data['relocate_options'] = $this->filter_model->relocate_options();
		$data['qualification_options'] = $this->filter_model->qualification_options();
		$data['specialization_options'] = $this->filter_model->specialization_options();
		$data['industry_options'] = $this->filter_model->industry_options();
		$data['country_options'] = $this->filter_model->country_options();
		$data['salary_options'] = $this->filter_model->salary_options();
		$data['job_options'] = $this->filter_model->job_type_options();

		$data['main_content'] = 'profile/recruiter_account';

		$this->load->view('includes/template',$data);
	}

	public function recruiters_test_insert()
	{
		$data = $this->profile_recruit_model->get_recruiters_test_insert();	
		
		redirect('profile_recruit/recruiters');
	}

	public function recruiters_test_update()
	{
		$data = $this->profile_recruit_model->get_recruiters_test_update();	
		
		redirect('profile_recruit/recruiters');
	}

	public function recruiters_contact_insert()
	{
		$data = $this->profile_recruit_model->get_recruiters_contact_insert();	
		
		redirect('profile_recruit/recruiters');
	}

	public function recruiters_password_insert()
	{
		$this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[4]|max_length[32]');
		$this->form_validation->set_rules('password2', 'Password Confirmation', 'trim|required|matches[password]');

		if ($this->form_validation->run() == FALSE)
		{
			$data = $this->profile_recruit_model->get_post();
			$data['incorrect_login'] = '';	
			$data['reg_success'] = '';
			$data['is_recruitlogged_in'] = $this->session->userdata('is_recruitlogged_in');	
			$data['recruit'] = 'recruiter';
			$data['error'] = '';
			$data['year_options'] = $this->filter_model->year_options();
			$data['gender_options'] = $this->filter_model->gender_options();
			$data['skill_options'] = $this->filter_model->skill_options();
			$data['location_options'] = $this->filter_model->location_options();
			$data['no_of_emp_options'] = $this->filter_model->no_of_emp_options();
			$data['relocate_options'] = $this->filter_model->relocate_options();
			$data['qualification_options'] = $this->filter_model->qualification_options();
			$data['specialization_options'] = $this->filter_model->specialization_options();
			$data['industry_options'] = $this->filter_model->industry_options();
			$data['country_options'] = $this->filter_model->country_options();
			$data['salary_options'] = $this->filter_model->salary_options();
			$data['job_options'] = $this->filter_model->job_type_options();

			$data['main_content'] = 'profile/recruiter_account';

			$this->load->view('includes/template',$data);
		}else{
			$data = $this->profile_recruit_model->get_recruiters_password_insert();			
			
			redirect('profile_recruit/recruiters');
		}
	}

	public function recruiters_desc_insert()
	{	
		$config['upload_path'] = './uploads/';
		$config['allowed_types'] = 'jpg|jpeg|png';
		$config['max_size']	= '1000';
		$config['max_width']  = '1024';
		$config['max_height']  = '768';

		$this->load->library('upload',$config);
		
		if (!$this->upload->do_upload() && ($this->input->post('org_description') == ''))
		{

			$data = $this->profile_recruit_model->get_post();
			$data['incorrect_login'] = '';	
			$data['reg_success'] = '';
			$data['is_recruitlogged_in'] = $this->session->userdata('is_recruitlogged_in');	
			$data['recruit'] = 'recruiter';
			$data['error'] = $this->upload->display_errors();
			$data['year_options'] = $this->filter_model->year_options();
			$data['gender_options'] = $this->filter_model->gender_options();
			$data['skill_options'] = $this->filter_model->skill_options();
			$data['location_options'] = $this->filter_model->location_options();
			$data['no_of_emp_options'] = $this->filter_model->no_of_emp_options();
			$data['relocate_options'] = $this->filter_model->relocate_options();
			$data['qualification_options'] = $this->filter_model->qualification_options();
			$data['specialization_options'] = $this->filter_model->specialization_options();
			$data['industry_options'] = $this->filter_model->industry_options();
			$data['country_options'] = $this->filter_model->country_options();
			$data['salary_options'] = $this->filter_model->salary_options();
			$data['job_options'] = $this->filter_model->job_type_options();

			$data['main_content'] = 'profile/recruiter';

			$this->load->view('includes/template',$data);
		}else{

			$data = $this->profile_recruit_model->get_recruiters_desc_insert();	
		
			redirect('profile_recruit/recruiters');
		}
	}
	
	public function recruiters_optout()
	{
		$data = $this->profile_recruit_model->get_recruiters_optout();	
		
		redirect('profile_recruit/recruiters_area');
	}

	public function is_recruitlogged_in()
	{
		$is_recruitlogged_in = $this->session->userdata('is_recruitlogged_in');

		if(!isset($is_recruitlogged_in) || $is_recruitlogged_in != true)
		{
			redirect('recruiter/index');
		}
	}

}
