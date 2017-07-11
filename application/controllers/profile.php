<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Profile extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->is_logged_in();
		$this->load->model('profile_model');
		$this->load->model('filter_model');
	}

	public function candidates_area()
	{
		$data = $this->profile_model->get_post();
		$data['incorrect_login'] = '';	
		$data['reg_success'] = '';
		$data['error'] = '';
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

		$data['main_content'] = 'profile/candidate';

		$this->load->view('includes/template',$data);
	}

	public function password_insert()
	{
		$this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[4]|max_length[32]');
		$this->form_validation->set_rules('password2', 'Password Confirmation', 'trim|required|matches[password]');

		if ($this->form_validation->run() == FALSE)
		{
			$data = $this->profile_model->get_post();
			$data['incorrect_login'] = '';	
			$data['reg_success'] = '';
			$data['error'] = '';
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

			$data['main_content'] = 'profile/candidate';

			$this->load->view('includes/template',$data);
		}else{
			$data = $this->profile_model->get_password_insert();			
			
			redirect('profile/candidates_area');
		}
	}

	public function candidates_career_edit()
	{
		$data = $this->profile_model->get_post();
		$data['incorrect_login'] = '';	
		$data['reg_success'] = '';
		$data['error'] = '';
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

		$data['main_content'] = 'profile/candidate_career_edit';

		$this->load->view('includes/template',$data);
	}

	public function candidates_contact_insert()
	{
		$data = $this->profile_model->get_candidates_contact_insert();	
		
		redirect('profile/candidates_area');
	}

	public function candidates_test_insert()
	{
		$data = $this->profile_model->get_candidates_test_insert();	
		
		redirect('profile/candidates_area');
	}

	public function candidates_test_update()
	{
		$data = $this->profile_model->get_candidates_test_update();	
		
		redirect('profile/candidates_area');
	}

	public function candidates_career_insert()
	{
		$data = $this->profile_model->get_candidates_career_insert();	
		
		redirect('profile/candidates_area');
	}

	public function candidates_work_record_insert()
	{
		$this->form_validation->set_rules('work_name', 'Company Name', 'trim|required');
		if($this->form_validation->run() == FALSE)
		{
			redirect('profile/candidates_area');
		}else{
		$data = $this->profile_model->get_candidates_work_record_insert();	
		}
		
		redirect('profile/candidates_area');
	}

	public function candidates_work_edit_update()
	{
		$data = $this->profile_model->get_candidates_work_edit_update();	
		redirect('profile/candidates_area');
	}

	public function candidates_work_delete()
	{
		$data = $this->profile_model->get_candidates_work_delete();	
		
		redirect('profile/candidates_area');
	}

	public function candidates_work_edit()
	{
		$data = $this->profile_model->get_post();
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

		$data['main_content'] = 'profile/candidate_edit';

		$this->load->view('includes/template',$data);
	}

	public function candidates_edu_record_insert()
	{
		$this->form_validation->set_rules('education_name', 'Institution', 'trim|required');
		if($this->form_validation->run() == FALSE)
		{
			redirect('profile/candidates_area');
		}else{
		$data = $this->profile_model->get_candidates_edu_record_insert();	
		}
		
		redirect('profile/candidates_area');
	}

	public function candidates_edu_edit_update()
	{
		$data = $this->profile_model->get_candidates_edu_edit_update();	
		redirect('profile/candidates_area');
	}

	public function candidates_edu_delete()
	{
		$data = $this->profile_model->get_candidates_edu_delete();	
		
		redirect('profile/candidates_area');
	}

	public function candidates_edu_edit()
	{
		$data = $this->profile_model->get_post();
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

		$data['main_content'] = 'profile/candidate_edit_edu';

		$this->load->view('includes/template',$data);
	}

	public function candidates_cert_record_insert()
	{
		$this->form_validation->set_rules('certificate_title', 'Certificate title', 'trim|required');
		if($this->form_validation->run() == FALSE)
		{
			redirect('profile/candidates_area');
		}else{
		$data = $this->profile_model->get_candidates_cert_record_insert();	
		}
		
		redirect('profile/candidates_area');
	}

	public function candidates_cert_edit_update()
	{
		$data = $this->profile_model->get_candidates_cert_edit_update();	
		redirect('profile/candidates_area');
	}

	public function candidates_cert_delete()
	{
		$data = $this->profile_model->get_candidates_cert_delete();	
		
		redirect('profile/candidates_area');
	}

	public function candidates_cert_edit()
	{
		$data = $this->profile_model->get_post();
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

		$data['main_content'] = 'profile/candidate_edit_cert';

		$this->load->view('includes/template',$data);
	}

	public function candidates_cv_download()
	{
		$data = $this->profile_model->get_candidates_cv_download();	
	}

	public function is_logged_in()
	{
		$is_logged_in = $this->session->userdata('is_logged_in');

		if(!isset($is_logged_in) || $is_logged_in != true)
		{
			redirect('home/index_slider');
		}
	}

}
