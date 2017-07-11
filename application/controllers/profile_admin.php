<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Profile_admin extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		
		$this->is_adminlogged_in();
		$this->load->model('profile_admin_model');
		$this->load->model('filter_model');
	}

	public function admin_area()
	{
		$data = $this->profile_admin_model->get_post();
		$data['incorrect_login'] = '';	
		$data['reg_success'] = '';
		$data['is_adminlogged_in'] = $this->session->userdata('is_adminlogged_in');	
		$data['admin'] = 'admin';
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

		$data['main_content'] = 'profile/admin_dashboard';

		$this->load->view('includes/template',$data);
	}

	public function manage_admins()
	{
		$data = $this->profile_admin_model->get_post();
		$data['incorrect_login'] = '';	
		$data['reg_success'] = '';
		$data['is_adminlogged_in'] = $this->session->userdata('is_adminlogged_in');	
		$data['admin'] = 'admin';
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

		$data['main_content'] = 'profile/manage_admins';

		$this->load->view('includes/template',$data);
	}

	public function manage_disabled_admins()
	{
		$data = $this->profile_admin_model->get_post();
		$data['incorrect_login'] = '';	
		$data['reg_success'] = '';
		$data['is_adminlogged_in'] = $this->session->userdata('is_adminlogged_in');	
		$data['admin'] = 'admin';
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

		$data['main_content'] = 'profile/manage_disabled_admins';

		$this->load->view('includes/template',$data);
	}

	public function manage_presets()
	{
		$data = $this->profile_admin_model->get_post();
		$data['incorrect_login'] = '';	
		$data['reg_success'] = '';
		$data['is_adminlogged_in'] = $this->session->userdata('is_adminlogged_in');	
		$data['admin'] = 'admin';
		$data['error'] = '';
		
		$data['main_content'] = 'profile/manage_presets';

		$this->load->view('includes/template',$data);
	}

	public function manage_spec()
	{
		$data = $this->profile_admin_model->get_post();
		$data['incorrect_login'] = '';	
		$data['reg_success'] = '';
		$data['is_adminlogged_in'] = $this->session->userdata('is_adminlogged_in');	
		$data['admin'] = 'admin';
		$data['error'] = '';
	
		$data['main_content'] = 'profile/manage_spec';

		$this->load->view('includes/template',$data);
	}

	public function manage_industry()
	{
		$data = $this->profile_admin_model->get_post();
		$data['incorrect_login'] = '';	
		$data['reg_success'] = '';
		$data['is_adminlogged_in'] = $this->session->userdata('is_adminlogged_in');	
		$data['admin'] = 'admin';
		$data['error'] = '';
		
		$data['main_content'] = 'profile/manage_industry';

		$this->load->view('includes/template',$data);
	}

	public function manage_skills()
	{
		$data = $this->profile_admin_model->get_post();
		$data['incorrect_login'] = '';	
		$data['reg_success'] = '';
		$data['is_adminlogged_in'] = $this->session->userdata('is_adminlogged_in');	
		$data['admin'] = 'admin';
		$data['error'] = '';
	
		$data['main_content'] = 'profile/manage_skills';

		$this->load->view('includes/template',$data);
	}

	public function manage_jobtype()
	{
		$data = $this->profile_admin_model->get_post();
		$data['incorrect_login'] = '';	
		$data['reg_success'] = '';
		$data['is_adminlogged_in'] = $this->session->userdata('is_adminlogged_in');	
		$data['admin'] = 'admin';
		$data['error'] = '';
		
		$data['main_content'] = 'profile/manage_jobtype';

		$this->load->view('includes/template',$data);
	}

	public function manage_education()
	{
		$data = $this->profile_admin_model->get_post();
		$data['incorrect_login'] = '';	
		$data['reg_success'] = '';
		$data['is_adminlogged_in'] = $this->session->userdata('is_adminlogged_in');	
		$data['admin'] = 'admin';
		$data['error'] = '';		

		$data['main_content'] = 'profile/manage_education';

		$this->load->view('includes/template',$data);
	}

	public function manage_salary()
	{
		$data = $this->profile_admin_model->get_post();
		$data['incorrect_login'] = '';	
		$data['reg_success'] = '';
		$data['is_adminlogged_in'] = $this->session->userdata('is_adminlogged_in');	
		$data['admin'] = 'admin';
		$data['error'] = '';

		$data['main_content'] = 'profile/manage_salary';

		$this->load->view('includes/template',$data);
	}

	public function manage_employees()
	{
		$data = $this->profile_admin_model->get_post();
		$data['incorrect_login'] = '';	
		$data['reg_success'] = '';
		$data['is_adminlogged_in'] = $this->session->userdata('is_adminlogged_in');	
		$data['admin'] = 'admin';
		$data['error'] = '';

		$data['main_content'] = 'profile/manage_no_of_emp';

		$this->load->view('includes/template',$data);
	}

	public function manage_experience()
	{
		$data = $this->profile_admin_model->get_post();
		$data['incorrect_login'] = '';	
		$data['reg_success'] = '';
		$data['is_adminlogged_in'] = $this->session->userdata('is_adminlogged_in');	
		$data['admin'] = 'admin';
		$data['error'] = '';

		$data['main_content'] = 'profile/manage_years_of_exp';

		$this->load->view('includes/template',$data);
	}

	public function manage_candidates()
	{
		$data = $this->profile_admin_model->get_post();
		$data['incorrect_login'] = '';	
		$data['reg_success'] = '';
		$data['is_adminlogged_in'] = $this->session->userdata('is_adminlogged_in');	
		$data['admin'] = 'admin';
		$data['error'] = '';

		$data['main_content'] = 'profile/manage_candidates';

		$this->load->view('includes/template',$data);
	}

	public function manage_candidates_new()
	{
		$data = $this->profile_admin_model->get_post();
		$data['incorrect_login'] = '';	
		$data['reg_success'] = '';
		$data['is_adminlogged_in'] = $this->session->userdata('is_adminlogged_in');	
		$data['admin'] = 'admin';
		$data['error'] = '';

		$data['main_content'] = 'profile/manage_candidates_new';

		$this->load->view('includes/template',$data);
	}

	public function manage_jobs()
	{
		$data = $this->profile_admin_model->get_post();
		$data['incorrect_login'] = '';	
		$data['reg_success'] = '';
		$data['is_adminlogged_in'] = $this->session->userdata('is_adminlogged_in');	
		$data['admin'] = 'admin';
		$data['error'] = '';

		$data['main_content'] = 'profile/manage_jobs';

		$this->load->view('includes/template',$data);
	}

	public function manage_applicantservices()
	{
		$data = $this->profile_admin_model->get_post();
		$data['incorrect_login'] = '';	
		$data['reg_success'] = '';
		$data['is_adminlogged_in'] = $this->session->userdata('is_adminlogged_in');	
		$data['admin'] = 'admin';
		$data['error'] = '';
		
		$data['main_content'] = 'profile/manage_applicantservices';

		$this->load->view('includes/template',$data);
	}

	public function manage_social()
	{
		$data = $this->profile_admin_model->get_post();
		$data['incorrect_login'] = '';	
		$data['reg_success'] = '';
		$data['is_adminlogged_in'] = $this->session->userdata('is_adminlogged_in');	
		$data['admin'] = 'admin';
		$data['error'] = '';
		
		$data['main_content'] = 'profile/manage_social';

		$this->load->view('includes/template',$data);
	}

	public function manage_contact()
	{
		$data = $this->profile_admin_model->get_post();
		$data['incorrect_login'] = '';	
		$data['reg_success'] = '';
		$data['is_adminlogged_in'] = $this->session->userdata('is_adminlogged_in');	
		$data['admin'] = 'admin';
		$data['error'] = '';
		
		$data['main_content'] = 'profile/manage_contact';

		$this->load->view('includes/template',$data);
	}

	public function training_applicants()
	{
		$data = $this->profile_admin_model->get_post();
		$data['incorrect_login'] = '';	
		$data['reg_success'] = '';
		$data['is_adminlogged_in'] = $this->session->userdata('is_adminlogged_in');	
		$data['admin'] = 'admin';
		$data['error'] = '';

		$data['main_content'] = 'profile/manage_training_applicants';

		$this->load->view('includes/template',$data);
	}

	public function manage_interviewprep()
	{
		$data = $this->profile_admin_model->get_post();
		$data['incorrect_login'] = '';	
		$data['reg_success'] = '';
		$data['is_adminlogged_in'] = $this->session->userdata('is_adminlogged_in');	
		$data['admin'] = 'admin';
		$data['error'] = '';
		
		$data['main_content'] = 'profile/manage_interviewprep';

		$this->load->view('includes/template',$data);
	}

	public function candidate_profile()
	{
		$data = $this->profile_admin_model->get_post();
		$data['incorrect_login'] = '';	
		$data['reg_success'] = '';
		$data['is_adminlogged_in'] = $this->session->userdata('is_adminlogged_in');	
		$data['admin'] = 'admin';
		$data['error'] = '';

		$data['main_content'] = 'profile/candidate_profile';

		$this->load->view('includes/template',$data);
	}

	public function recruiter_profile()
	{
		$data = $this->profile_admin_model->get_post();
		$data['incorrect_login'] = '';	
		$data['reg_success'] = '';
		$data['is_adminlogged_in'] = $this->session->userdata('is_adminlogged_in');	
		$data['admin'] = 'admin';
		$data['error'] = '';

		$data['main_content'] = 'profile/recruiter_profile';

		$this->load->view('includes/template',$data);
	}

	public function manage_recruiters()
	{
		$data = $this->profile_admin_model->get_post();
		$data['incorrect_login'] = '';	
		$data['reg_success'] = '';
		$data['is_adminlogged_in'] = $this->session->userdata('is_adminlogged_in');	
		$data['admin'] = 'admin';
		$data['error'] = '';
		
		$data['main_content'] = 'profile/manage_recruiters';

		$this->load->view('includes/template',$data);
	}

	public function recruiter_plan()
	{
		$data = $this->profile_admin_model->get_post();
		$data['incorrect_login'] = '';	
		$data['reg_success'] = '';
		$data['is_adminlogged_in'] = $this->session->userdata('is_adminlogged_in');	
		$data['admin'] = 'admin';
		$data['error'] = '';
		
		$data['main_content'] = 'profile/manage_recruiters_plan';

		$this->load->view('includes/template',$data);
	}

	public function recruiter_plan_insert()
	{
		$data = $this->profile_admin_model->get_recruiter_plan_insert();	
		
		redirect('profile_admin/manage_recruiters');
	}

	public function recruiter_verify()
	{
		$data = $this->profile_admin_model->get_recruiter_verify();	
		
		redirect('profile_admin/manage_recruiters');
	}

	public function manage_slide()
	{
		$data = $this->profile_admin_model->get_post();
		$data['incorrect_login'] = '';	
		$data['reg_success'] = '';
		$data['is_adminlogged_in'] = $this->session->userdata('is_adminlogged_in');	
		$data['admin'] = 'admin';
		$data['error'] = '';

		$data['main_content'] = 'profile/manage_slide';

		$this->load->view('includes/template',$data);
	}

	public function manage_articles()
	{
		$data = $this->profile_admin_model->get_post();
		$data['incorrect_login'] = '';	
		$data['reg_success'] = '';
		$data['is_adminlogged_in'] = $this->session->userdata('is_adminlogged_in');	
		$data['admin'] = 'admin';
		$data['error'] = '';

		$data['main_content'] = 'profile/manage_articles';

		$this->load->view('includes/template',$data);
	}

	public function welcome_message()
	{
		$data = $this->profile_admin_model->get_post();
		$data['incorrect_login'] = '';	
		$data['reg_success'] = '';
		$data['is_adminlogged_in'] = $this->session->userdata('is_adminlogged_in');	
		$data['admin'] = 'admin';
		$data['error'] = '';

		$data['main_content'] = 'profile/welcome_message';

		$this->load->view('includes/template',$data);
	}

	public function password_reset()
	{
		$data = $this->profile_admin_model->get_post();
		$data['incorrect_login'] = '';	
		$data['reg_success'] = '';
		$data['is_adminlogged_in'] = $this->session->userdata('is_adminlogged_in');	
		$data['admin'] = 'admin';
		$data['error'] = '';

		$data['main_content'] = 'profile/password_reset';

		$this->load->view('includes/template',$data);
	}

	public function privacyandterms()
	{
		$data = $this->profile_admin_model->get_post();
		$data['incorrect_login'] = '';	
		$data['reg_success'] = '';
		$data['is_adminlogged_in'] = $this->session->userdata('is_adminlogged_in');	
		$data['admin'] = 'admin';
		$data['error'] = '';

		$data['main_content'] = 'profile/privacyandterms';

		$this->load->view('includes/template',$data);
	}

	// View Comments of articles
	public function comment()
	{
		$data = $this->profile_admin_model->get_post();
		$data['incorrect_login'] = '';	
		$data['reg_success'] = '';
		$data['is_adminlogged_in'] = $this->session->userdata('is_adminlogged_in');	
		$data['admin'] = 'admin';
		$data['error'] = '';

		$data['main_content'] = 'profile/view_comment';

		$this->load->view('includes/template',$data);
	}

	public function manage_testimonies()
	{
		$data = $this->profile_admin_model->get_post();
		$data['incorrect_login'] = '';	
		$data['reg_success'] = '';
		$data['is_adminlogged_in'] = $this->session->userdata('is_adminlogged_in');	
		$data['admin'] = 'admin';
		$data['error'] = '';

		$data['main_content'] = 'profile/manage_testimonies';

		$this->load->view('includes/template',$data);
	}

	public function manage_stats()
	{
		$data = $this->profile_admin_model->get_post();
		$data['incorrect_login'] = '';	
		$data['reg_success'] = '';
		$data['is_adminlogged_in'] = $this->session->userdata('is_adminlogged_in');	
		$data['admin'] = 'admin';
		$data['error'] = '';

		$data['main_content'] = 'profile/manage_stats';

		$this->load->view('includes/template',$data);
	}

	public function manage_toprecruit()
	{
		$data = $this->profile_admin_model->get_post();
		$data['incorrect_login'] = '';	
		$data['reg_success'] = '';
		$data['is_adminlogged_in'] = $this->session->userdata('is_adminlogged_in');	
		$data['admin'] = 'admin';
		$data['error'] = '';

		$data['main_content'] = 'profile/manage_toprecruit';

		$this->load->view('includes/template',$data);
	}

	public function manage_team()
	{
		$data = $this->profile_admin_model->get_post();
		$data['incorrect_login'] = '';	
		$data['reg_success'] = '';
		$data['is_adminlogged_in'] = $this->session->userdata('is_adminlogged_in');	
		$data['admin'] = 'admin';
		$data['error'] = '';
		
		$data['main_content'] = 'profile/manage_team';

		$this->load->view('includes/template',$data);
	}

	public function manage_board()
	{
		$data = $this->profile_admin_model->get_post();
		$data['incorrect_login'] = '';	
		$data['reg_success'] = '';
		$data['is_adminlogged_in'] = $this->session->userdata('is_adminlogged_in');	
		$data['admin'] = 'admin';
		$data['error'] = '';
		
		$data['main_content'] = 'profile/manage_board';

		$this->load->view('includes/template',$data);
	}

	public function manage_careers()
	{
		$data = $this->profile_admin_model->get_post();
		$data['incorrect_login'] = '';	
		$data['reg_success'] = '';
		$data['is_adminlogged_in'] = $this->session->userdata('is_adminlogged_in');	
		$data['admin'] = 'admin';
		$data['error'] = '';
		
		$data['main_content'] = 'profile/manage_careers';

		$this->load->view('includes/template',$data);
	}

	public function manage_trainings()
	{
		$data = $this->profile_admin_model->get_post();
		$data['incorrect_login'] = '';	
		$data['reg_success'] = '';
		$data['is_adminlogged_in'] = $this->session->userdata('is_adminlogged_in');	
		$data['admin'] = 'admin';
		$data['error'] = '';
		
		$data['main_content'] = 'profile/manage_trainings';

		$this->load->view('includes/template',$data);
	}

	public function careers_candidates()
	{
		$data = $this->profile_admin_model->get_post();
		$data['incorrect_login'] = '';	
		$data['reg_success'] = '';
		$data['is_adminlogged_in'] = $this->session->userdata('is_adminlogged_in');	
		$data['admin'] = 'admin';
		$data['error'] = '';

		$data['main_content'] = 'profile/careers_candidates';

		$this->load->view('includes/template',$data);
	}

	public function manage_package()
	{
		$data = $this->profile_admin_model->get_post();
		$data['incorrect_login'] = '';	
		$data['reg_success'] = '';
		$data['is_adminlogged_in'] = $this->session->userdata('is_adminlogged_in');	
		$data['admin'] = 'admin';
		$data['error'] = '';
		
		$data['main_content'] = 'profile/manage_package';

		$this->load->view('includes/template',$data);
	}

	public function admin_account_insert()
	{
		$data = $this->profile_admin_model->get_admin_account_insert();	
		
		redirect('profile_admin/admin_area');
	}

	public function admins_insert()
	{
		$data = $this->profile_admin_model->get_admins_insert();	
		
		redirect('profile_admin/manage_admins');
	}
	
	public function admin_password_insert()
	{
		$this->form_validation->set_rules('admin_password', 'Password', 'trim|required|min_length[4]|max_length[32]');
		$this->form_validation->set_rules('admin_password2', 'Password Confirmation', 'trim|required|matches[admin_password]');

		if ($this->form_validation->run() == FALSE)
		{
			$data = $this->profile_admin_model->get_post();
			$data['incorrect_login'] = '';	
			$data['reg_success'] = '';
			$data['is_adminlogged_in'] = $this->session->userdata('is_adminlogged_in');	
			$data['admin'] = 'admin';
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

			$data['main_content'] = 'profile/admin_dashboard';

			$this->load->view('includes/template',$data);
		}else{
			$data = $this->profile_admin_model->get_admin_password_insert();			
			
			redirect('profile_admin/admin_area');
		}
	}

	// Manage Specialization
	public function spec_insert()
	{
		$data = $this->profile_admin_model->get_spec_insert();	
		
		redirect('profile_admin/manage_spec');
	}

	public function spec_edit()
	{
		$data = $this->profile_admin_model->get_post();
		$data['incorrect_login'] = '';	
		$data['reg_success'] = '';
		$data['is_adminlogged_in'] = $this->session->userdata('is_adminlogged_in');	
		$data['admin'] = 'admin';
		$data['error'] = '';	
		
		$data['main_content'] = 'profile/manage_spec_edit';

		$this->load->view('includes/template',$data);
	}

	public function spec_edit_update()
	{
		$data = $this->profile_admin_model->get_spec_edit_update();	
		
		redirect('profile_admin/manage_spec');
	}

	public function spec_delete()
	{
		$data = $this->profile_admin_model->get_spec_delete();	
		
		redirect('profile_admin/manage_spec');
	}

	// Manage Industry
	public function industry_insert()
	{
		$data = $this->profile_admin_model->get_industry_insert();	
		
		redirect('profile_admin/manage_industry');
	}

	public function industry_edit()
	{
		$data = $this->profile_admin_model->get_post();
		$data['incorrect_login'] = '';	
		$data['reg_success'] = '';
		$data['is_adminlogged_in'] = $this->session->userdata('is_adminlogged_in');	
		$data['admin'] = 'admin';
		$data['error'] = '';	
		
		$data['main_content'] = 'profile/manage_industry_edit';

		$this->load->view('includes/template',$data);
	}

	public function industry_edit_update()
	{
		$data = $this->profile_admin_model->get_industry_edit_update();	
		
		redirect('profile_admin/manage_industry');
	}

	public function industry_delete()
	{
		$data = $this->profile_admin_model->get_industry_delete();	
		
		redirect('profile_admin/manage_industry');
	}	

	// Manage Skills
	public function skills_insert()
	{
		$data = $this->profile_admin_model->get_skills_insert();	
		
		redirect('profile_admin/manage_skills');
	}

	public function skills_edit()
	{
		$data = $this->profile_admin_model->get_post();
		$data['incorrect_login'] = '';	
		$data['reg_success'] = '';
		$data['is_adminlogged_in'] = $this->session->userdata('is_adminlogged_in');	
		$data['admin'] = 'admin';
		$data['error'] = '';	
		
		$data['main_content'] = 'profile/manage_skills_edit';

		$this->load->view('includes/template',$data);
	}

	public function skills_edit_update()
	{
		$data = $this->profile_admin_model->get_skills_edit_update();	
		
		redirect('profile_admin/manage_skills');
	}

	public function skills_delete()
	{
		$data = $this->profile_admin_model->get_skills_delete();	
		
		redirect('profile_admin/manage_skills');
	}

	// Manage Jobtype
	public function jobtype_insert()
	{
		$data = $this->profile_admin_model->get_jobtype_insert();	
		
		redirect('profile_admin/manage_jobtype');
	}

	public function jobtype_edit()
	{
		$data = $this->profile_admin_model->get_post();
		$data['incorrect_login'] = '';	
		$data['reg_success'] = '';
		$data['is_adminlogged_in'] = $this->session->userdata('is_adminlogged_in');	
		$data['admin'] = 'admin';
		$data['error'] = '';	
		
		$data['main_content'] = 'profile/manage_jobtype_edit';

		$this->load->view('includes/template',$data);
	}

	public function jobtype_edit_update()
	{
		$data = $this->profile_admin_model->get_jobtype_edit_update();	
		
		redirect('profile_admin/manage_jobtype');
	}

	public function jobtype_delete()
	{
		$data = $this->profile_admin_model->get_jobtype_delete();	
		
		redirect('profile_admin/manage_jobtype');
	}

	// Manage Education Levels
	public function education_insert()
	{
		$data = $this->profile_admin_model->get_education_insert();	
		
		redirect('profile_admin/manage_education');
	}

	public function education_edit()
	{
		$data = $this->profile_admin_model->get_post();
		$data['incorrect_login'] = '';	
		$data['reg_success'] = '';
		$data['is_adminlogged_in'] = $this->session->userdata('is_adminlogged_in');	
		$data['admin'] = 'admin';
		$data['error'] = '';	
		
		$data['main_content'] = 'profile/manage_education_edit';

		$this->load->view('includes/template',$data);
	}

	public function education_edit_update()
	{
		$data = $this->profile_admin_model->get_education_edit_update();	
		
		redirect('profile_admin/manage_education');
	}

	public function education_delete()
	{
		$data = $this->profile_admin_model->get_education_delete();	
		
		redirect('profile_admin/manage_education');
	}

	// Manage Salary Levels
	public function salary_insert()
	{
		$data = $this->profile_admin_model->get_salary_insert();	
		
		redirect('profile_admin/manage_salary');
	}

	public function salary_edit()
	{
		$data = $this->profile_admin_model->get_post();
		$data['incorrect_login'] = '';	
		$data['reg_success'] = '';
		$data['is_adminlogged_in'] = $this->session->userdata('is_adminlogged_in');	
		$data['admin'] = 'admin';
		$data['error'] = '';	
		
		$data['main_content'] = 'profile/manage_salary_edit';

		$this->load->view('includes/template',$data);
	}

	public function salary_edit_update()
	{
		$data = $this->profile_admin_model->get_salary_edit_update();	
		
		redirect('profile_admin/manage_salary');
	}

	public function salary_delete()
	{
		$data = $this->profile_admin_model->get_salary_delete();	
		
		redirect('profile_admin/manage_salary');
	}

	// Manage Recruiters Number of Employees 
	public function no_of_emp_insert()
	{
		$data = $this->profile_admin_model->get_no_of_emp_insert();	
		
		redirect('profile_admin/manage_employees');
	}

	public function no_of_emp_edit()
	{
		$data = $this->profile_admin_model->get_post();
		$data['incorrect_login'] = '';	
		$data['reg_success'] = '';
		$data['is_adminlogged_in'] = $this->session->userdata('is_adminlogged_in');	
		$data['admin'] = 'admin';
		$data['error'] = '';	
		
		$data['main_content'] = 'profile/manage_no_of_emp_edit';

		$this->load->view('includes/template',$data);
	}

	public function no_of_emp_edit_update()
	{
		$data = $this->profile_admin_model->get_no_of_emp_edit_update();	
		
		redirect('profile_admin/manage_employees');
	}

	public function no_of_emp_delete()
	{
		$data = $this->profile_admin_model->get_no_of_emp_delete();	
		
		redirect('profile_admin/manage_employees');
	}

	// Manage Years of Experience
	public function years_of_exp_insert()
	{
		$data = $this->profile_admin_model->get_years_of_exp_insert();	
		
		redirect('profile_admin/manage_experience');
	}

	public function years_of_exp_edit()
	{
		$data = $this->profile_admin_model->get_post();
		$data['incorrect_login'] = '';	
		$data['reg_success'] = '';
		$data['is_adminlogged_in'] = $this->session->userdata('is_adminlogged_in');	
		$data['admin'] = 'admin';
		$data['error'] = '';	
		
		$data['main_content'] = 'profile/manage_years_of_exp_edit';

		$this->load->view('includes/template',$data);
	}

	public function years_of_exp_edit_update()
	{
		$data = $this->profile_admin_model->get_years_of_exp_edit_update();	
		
		redirect('profile_admin/manage_experience');
	}

	public function years_of_exp_delete()
	{
		$data = $this->profile_admin_model->get_years_of_exp_delete();	
		
		redirect('profile_admin/manage_experience');
	}

	// Manage Interview Prepping
	public function intprep_delete()
	{
		$data = $this->profile_admin_model->get_intprep_delete();	
		
		redirect('profile_admin/manage_interviewprep');
	}	

	// Manage Applicant services
	public function createcv_edit()
	{
		$data = $this->profile_admin_model->get_post();
		$data['incorrect_login'] = '';	
		$data['reg_success'] = '';
		$data['is_adminlogged_in'] = $this->session->userdata('is_adminlogged_in');	
		$data['admin'] = 'admin';
		$data['error'] = '';	
		
		$data['main_content'] = 'profile/createcv_edit';

		$this->load->view('includes/template',$data);
	}

	public function createcv_edit_update()
	{
		$data = $this->profile_admin_model->get_createcv_edit_update();	
		
		redirect('profile_admin/manage_applicantservices');
	}


	public function prep_edit()
	{
		$data = $this->profile_admin_model->get_post();
		$data['incorrect_login'] = '';	
		$data['reg_success'] = '';
		$data['is_adminlogged_in'] = $this->session->userdata('is_adminlogged_in');	
		$data['admin'] = 'admin';
		$data['error'] = '';	
		
		$data['main_content'] = 'profile/prep_edit';

		$this->load->view('includes/template',$data);
	}

	public function prep_edit_update()
	{
		$data = $this->profile_admin_model->get_prep_edit_update();	
		
		redirect('profile_admin/manage_applicantservices');
	}

	// Manage Contact
	public function contact_local_edit()
	{
		$data = $this->profile_admin_model->get_post();
		$data['incorrect_login'] = '';	
		$data['reg_success'] = '';
		$data['is_adminlogged_in'] = $this->session->userdata('is_adminlogged_in');	
		$data['admin'] = 'admin';
		$data['error'] = '';	
		
		$data['main_content'] = 'profile/manage_contact_local_edit';

		$this->load->view('includes/template',$data);
	}

	public function local_edit_update()
	{
		$data = $this->profile_admin_model->get_local_edit_update();	
		
		redirect('profile_admin/manage_contact');
	}

	public function contact_inter_edit()
	{
		$data = $this->profile_admin_model->get_post();
		$data['incorrect_login'] = '';	
		$data['reg_success'] = '';
		$data['is_adminlogged_in'] = $this->session->userdata('is_adminlogged_in');	
		$data['admin'] = 'admin';
		$data['error'] = '';	
		
		$data['main_content'] = 'profile/manage_contact_inter_edit';

		$this->load->view('includes/template',$data);
	}

	public function inter_edit_update()
	{
		$data = $this->profile_admin_model->get_inter_edit_update();	
		
		redirect('profile_admin/manage_contact');
	}

	public function contact_add_edit()
	{
		$data = $this->profile_admin_model->get_post();
		$data['incorrect_login'] = '';	
		$data['reg_success'] = '';
		$data['is_adminlogged_in'] = $this->session->userdata('is_adminlogged_in');	
		$data['admin'] = 'admin';
		$data['error'] = '';	
		
		$data['main_content'] = 'profile/manage_contact_add_edit';

		$this->load->view('includes/template',$data);
	}

	public function add_edit_update()
	{
		$data = $this->profile_admin_model->get_add_edit_update();	
		
		redirect('profile_admin/manage_contact');
	}

	// Manage Social
	public function facebook_edit()
	{
		$data = $this->profile_admin_model->get_post();
		$data['incorrect_login'] = '';	
		$data['reg_success'] = '';
		$data['is_adminlogged_in'] = $this->session->userdata('is_adminlogged_in');	
		$data['admin'] = 'admin';
		$data['error'] = '';	
		
		$data['main_content'] = 'profile/facebook_edit';

		$this->load->view('includes/template',$data);
	}

	public function facebook_edit_update()
	{
		$data = $this->profile_admin_model->get_facebook_edit_update();	
		
		redirect('profile_admin/manage_social');
	}

	public function twitter_edit()
	{
		$data = $this->profile_admin_model->get_post();
		$data['incorrect_login'] = '';	
		$data['reg_success'] = '';
		$data['is_adminlogged_in'] = $this->session->userdata('is_adminlogged_in');	
		$data['admin'] = 'admin';
		$data['error'] = '';	
		
		$data['main_content'] = 'profile/twitter_edit';

		$this->load->view('includes/template',$data);
	}

	public function twitter_edit_update()
	{
		$data = $this->profile_admin_model->get_twitter_edit_update();	
		
		redirect('profile_admin/manage_social');
	}

	public function google_edit()
	{
		$data = $this->profile_admin_model->get_post();
		$data['incorrect_login'] = '';	
		$data['reg_success'] = '';
		$data['is_adminlogged_in'] = $this->session->userdata('is_adminlogged_in');	
		$data['admin'] = 'admin';
		$data['error'] = '';	
		
		$data['main_content'] = 'profile/google_edit';

		$this->load->view('includes/template',$data);
	}

	public function google_edit_update()
	{
		$data = $this->profile_admin_model->get_google_edit_update();	
		
		redirect('profile_admin/manage_social');
	}

	public function linkedin_edit()
	{
		$data = $this->profile_admin_model->get_post();
		$data['incorrect_login'] = '';	
		$data['reg_success'] = '';
		$data['is_adminlogged_in'] = $this->session->userdata('is_adminlogged_in');	
		$data['admin'] = 'admin';
		$data['error'] = '';	
		
		$data['main_content'] = 'profile/linkedin_edit';

		$this->load->view('includes/template',$data);
	}

	public function linkedin_edit_update()
	{
		$data = $this->profile_admin_model->get_linkedin_edit_update();	
		
		redirect('profile_admin/manage_social');
	}

	public function skype_edit()
	{
		$data = $this->profile_admin_model->get_post();
		$data['incorrect_login'] = '';	
		$data['reg_success'] = '';
		$data['is_adminlogged_in'] = $this->session->userdata('is_adminlogged_in');	
		$data['admin'] = 'admin';
		$data['error'] = '';	
		
		$data['main_content'] = 'profile/skype_edit';

		$this->load->view('includes/template',$data);
	}

	public function skype_edit_update()
	{
		$data = $this->profile_admin_model->get_skype_edit_update();	
		
		redirect('profile_admin/manage_social');
	}

	// Manage Admin enable, disable and delete
	public function admin_disable()
	{
		$data = $this->profile_admin_model->get_admin_disable();	
		
		redirect('profile_admin/manage_admins');
	}

	public function admin_enable()
	{
		$data = $this->profile_admin_model->get_admin_enable();	
		
		redirect('profile_admin/manage_disabled_admins');
	}

	public function admin_delete()
	{
		$data = $this->profile_admin_model->get_admin_delete();	
		
		redirect('profile_admin/manage_admins');
	}

	public function admin_disable_delete()
	{
		$data = $this->profile_admin_model->get_admin_disable_delete();	
		
		redirect('profile_admin/manage_disabled_admins');
	}

	public function candidate_delete()
	{
		$data = $this->profile_admin_model->get_candidate_delete();	
		
		redirect('profile_admin/manage_candidates');
	}

	public function job_delete()
	{
		$data = $this->profile_admin_model->get_job_delete();	
		
		redirect('profile_admin/manage_jobs');
	}

	public function recruiter_delete()
	{
		$data = $this->profile_admin_model->get_recruiter_delete();	
		
		redirect('profile_admin/manage_recruiters');
	}

	public function candidate_search()
	{
		$data = $this->profile_admin_model->get_candidate_search();	
		$data['incorrect_login'] = '';	
		$data['reg_success'] = '';
		$data['is_adminlogged_in'] = $this->session->userdata('is_adminlogged_in');	
		$data['admin'] = 'admin';
		$data['error'] = '';

		$data['main_content'] = 'profile/manage_candidates_search';

		$this->load->view('includes/template',$data);
	}

	public function job_search()
	{
		$data = $this->profile_admin_model->get_job_search();	
		$data['incorrect_login'] = '';	
		$data['reg_success'] = '';
		$data['is_adminlogged_in'] = $this->session->userdata('is_adminlogged_in');	
		$data['admin'] = 'admin';
		$data['error'] = '';

		$data['main_content'] = 'profile/manage_jobs_search';

		$this->load->view('includes/template',$data);
	}

	public function recruiter_search()
	{
		$data = $this->profile_admin_model->get_recruiter_search();	
		$data['incorrect_login'] = '';	
		$data['reg_success'] = '';
		$data['is_adminlogged_in'] = $this->session->userdata('is_adminlogged_in');	
		$data['admin'] = 'admin';
		$data['error'] = '';

		$data['main_content'] = 'profile/manage_recruiters_search';

		$this->load->view('includes/template',$data);
	}

	public function careers_candidate_search()
	{
		$data = $this->profile_admin_model->get_careers_candidate_search();	
		$data['incorrect_login'] = '';	
		$data['reg_success'] = '';
		$data['is_adminlogged_in'] = $this->session->userdata('is_adminlogged_in');	
		$data['admin'] = 'admin';
		$data['error'] = '';

		$data['main_content'] = 'profile/careers_candidates_search';

		$this->load->view('includes/template',$data);
	}

	// Manage Slide Show
	public function slide_insert()
	{	
		$config['upload_path'] = './uploads/';
		$config['allowed_types'] = 'jpg|jpeg|png';
		$config['max_size']	= '2000';
		$config['max_width']  = '1500';
		$config['max_height']  = '600';

		$this->load->library('upload',$config);
		
		if (!$this->upload->do_upload())
		{

			$data = $this->profile_admin_model->get_post();
			$data['incorrect_login'] = '';	
			$data['reg_success'] = '';
			$data['is_adminlogged_in'] = $this->session->userdata('is_adminlogged_in');	
			$data['admin'] = 'admin';
			$data['error'] = $this->upload->display_errors();

			$data['main_content'] = 'profile/manage_slide';

			$this->load->view('includes/template',$data);
		}else{

			$data = $this->profile_admin_model->get_slide_insert();	
		
			redirect('profile_admin/manage_slide');
		}
	}

	public function slide_edit()
	{
		$data = $this->profile_admin_model->get_post();
		$data['incorrect_login'] = '';	
		$data['reg_success'] = '';
		$data['is_adminlogged_in'] = $this->session->userdata('is_adminlogged_in');	
		$data['admin'] = 'admin';
		$data['error'] = '';	
		
		$data['main_content'] = 'profile/manage_slide_edit';

		$this->load->view('includes/template',$data);
	}

	public function slide_edit_update()
	{
		$config['upload_path'] = './uploads/';
		$config['allowed_types'] = 'jpg|jpeg|png';
		$config['max_size']	= '2000';
		$config['max_width']  = '1500';
		$config['max_height']  = '600';

		$this->load->library('upload',$config);
		
		$checkpic = $this->input->post('picture');
		if (!$this->upload->do_upload() && (!isset($checkpic)))
		{

			$data = $this->profile_admin_model->get_post();
			$data['incorrect_login'] = '';	
			$data['reg_success'] = '';
			$data['is_adminlogged_in'] = $this->session->userdata('is_adminlogged_in');	
			$data['admin'] = 'admin';
			$data['error'] = $this->upload->display_errors();

			$data['main_content'] = 'profile/manage_slide';

			$this->load->view('includes/template',$data);
		}else{
			$data = $this->profile_admin_model->get_slide_edit_update();		
		
			redirect('profile_admin/manage_slide');
		}
	}

	public function slide_delete()
	{
		$data = $this->profile_admin_model->get_slide_delete();	
		
		redirect('profile_admin/manage_slide');
	}

	// Manage Articles
	public function articles_insert()
	{	
		$config['upload_path'] = './uploads/';
		$config['allowed_types'] = 'jpg|jpeg|png';
		$config['max_size']	= '2000';
		$config['max_width']  = '1024';
		$config['max_height']  = '768';

		$this->load->library('upload',$config);
		
		if (!$this->upload->do_upload() && ($this->input->post('title') == ''))
		{

			$data = $this->profile_admin_model->get_post();
			$data['incorrect_login'] = '';	
			$data['reg_success'] = '';
			$data['is_adminlogged_in'] = $this->session->userdata('is_adminlogged_in');	
			$data['admin'] = 'admin';
			$data['error'] = $this->upload->display_errors();

			$data['main_content'] = 'profile/manage_articles';

			$this->load->view('includes/template',$data);
		}else if (!$this->upload->do_upload() && ($this->input->post('title') != '')){

			$data = $this->profile_admin_model->get_article_insert();	
		
			redirect('profile_admin/manage_articles');
		}else if ($this->upload->do_upload() && ($this->input->post('title') != '')){

			$data = $this->profile_admin_model->get_article_insert();	
		
			redirect('profile_admin/manage_articles');
		}else if ($this->upload->do_upload() && ($this->input->post('title') == '')){

			$data = $this->profile_admin_model->get_article_insert();	
		
			redirect('profile_admin/manage_articles');
		}
	}

	public function article_edit()
	{
		$data = $this->profile_admin_model->get_post();
		$data['incorrect_login'] = '';	
		$data['reg_success'] = '';
		$data['is_adminlogged_in'] = $this->session->userdata('is_adminlogged_in');	
		$data['admin'] = 'admin';
		$data['error'] = '';	
		
		$data['main_content'] = 'profile/manage_articles_edit';

		$this->load->view('includes/template',$data);
	}

	public function article_edit_update()
	{
		$config['upload_path'] = './uploads/';
		$config['allowed_types'] = 'jpg|jpeg|png';
		$config['max_size']	= '2000';
		$config['max_width']  = '1024';
		$config['max_height']  = '768';

		$this->load->library('upload',$config);
		
		if (!$this->upload->do_upload() && (!isset($checkcover)) && ($this->input->post('title') == ''))
		{

			$data = $this->profile_admin_model->get_post();
			$data['incorrect_login'] = '';	
			$data['reg_success'] = '';
			$data['is_adminlogged_in'] = $this->session->userdata('is_adminlogged_in');	
			$data['admin'] = 'admin';
			$data['error'] = $this->upload->display_errors();

			$data['main_content'] = 'profile/manage_articles';

			$this->load->view('includes/template',$data);
		}else if (!$this->upload->do_upload() && ($this->input->post('title') != '')){

			$data = $this->profile_admin_model->get_article_edit_update();		
		
			redirect('profile_admin/manage_articles');
		}else if ($this->upload->do_upload() && ($this->input->post('title') != '')){

			$data = $this->profile_admin_model->get_article_edit_update();		
		
			redirect('profile_admin/manage_articles');
		}else if ($this->upload->do_upload() && ($this->input->post('title') == '')){

			$data = $this->profile_admin_model->get_article_edit_update();		
		
			redirect('profile_admin/manage_articles');
		}
	}

	public function article_delete()
	{
		$data = $this->profile_admin_model->get_article_delete();	
		
		redirect('profile_admin/manage_articles');
	}	

	// Delete Comments
	public function comment_delete()
	{
		$data = $this->profile_admin_model->get_comment_delete();	
		
		redirect('profile_admin/manage_articles');
	}

	// Manage Testimonies
	public function testimony_insert()
	{	
		$config['upload_path'] = './uploads/';
		$config['allowed_types'] = 'jpg|jpeg|png';
		$config['max_size']	= '2000';
		$config['max_width']  = '1024';
		$config['max_height']  = '768';

		$this->load->library('upload',$config);
		
		if (!$this->upload->do_upload() && ($this->input->post('name') == ''))
		{

			$data = $this->profile_admin_model->get_post();
			$data['incorrect_login'] = '';	
			$data['reg_success'] = '';
			$data['is_adminlogged_in'] = $this->session->userdata('is_adminlogged_in');	
			$data['admin'] = 'admin';
			$data['error'] = $this->upload->display_errors();

			$data['main_content'] = 'profile/manage_testimonies';

			$this->load->view('includes/template',$data);
		}else if (!$this->upload->do_upload() && ($this->input->post('name') != '')){

			$data = $this->profile_admin_model->get_testimony_insert();	
		
			redirect('profile_admin/manage_testimonies');
		}else if ($this->upload->do_upload() && ($this->input->post('name') != '')){

			$data = $this->profile_admin_model->get_testimony_insert();	
		
			redirect('profile_admin/manage_testimonies');
		}else if ($this->upload->do_upload() && ($this->input->post('name') == '')){

			$data = $this->profile_admin_model->get_testimony_insert();	
		
			redirect('profile_admin/manage_testimonies');
		}
	}

	public function testimony_edit()
	{
		$data = $this->profile_admin_model->get_post();
		$data['incorrect_login'] = '';	
		$data['reg_success'] = '';
		$data['is_adminlogged_in'] = $this->session->userdata('is_adminlogged_in');	
		$data['admin'] = 'admin';
		$data['error'] = '';	
		
		$data['main_content'] = 'profile/manage_testimonies_edit';

		$this->load->view('includes/template',$data);
	}

	public function testimony_edit_update()
	{
		$config['upload_path'] = './uploads/';
		$config['allowed_types'] = 'jpg|jpeg|png';
		$config['max_size']	= '2000';
		$config['max_width']  = '1024';
		$config['max_height']  = '768';

		$this->load->library('upload',$config);
		
		if (!$this->upload->do_upload() && ($this->input->post('name') == ''))
		{

			$data = $this->profile_admin_model->get_post();
			$data['incorrect_login'] = '';	
			$data['reg_success'] = '';
			$data['is_adminlogged_in'] = $this->session->userdata('is_adminlogged_in');	
			$data['admin'] = 'admin';
			$data['error'] = $this->upload->display_errors();

			$data['main_content'] = 'profile/manage_testimonies';

			$this->load->view('includes/template',$data);
		}else if (!$this->upload->do_upload() && ($this->input->post('name') != '')){

			$data = $this->profile_admin_model->get_testimony_edit_update();		
		
			redirect('profile_admin/manage_testimonies');
		}else if ($this->upload->do_upload() && ($this->input->post('name') != '')){

			$data = $this->profile_admin_model->get_testimony_edit_update();		
		
			redirect('profile_admin/manage_testimonies');
		}else if ($this->upload->do_upload() && ($this->input->post('name') == '')){

			$data = $this->profile_admin_model->get_testimony_edit_update();		
		
			redirect('profile_admin/manage_testimonies');
		}
	}

	public function testimony_delete()
	{
		$data = $this->profile_admin_model->get_testimony_delete();	
		
		redirect('profile_admin/manage_testimonies');
	}


	// Manage Top Recruiters
	public function toprecruit_insert()
	{	
		$config['upload_path'] = './uploads/';
		$config['allowed_types'] = 'jpg|jpeg|png';
		$config['max_size']	= '2000';
		$config['max_width']  = '1024';
		$config['max_height']  = '768';

		$this->load->library('upload',$config);
		
		if (!$this->upload->do_upload() && ($this->input->post('name') == ''))
		{

			$data = $this->profile_admin_model->get_post();
			$data['incorrect_login'] = '';	
			$data['reg_success'] = '';
			$data['is_adminlogged_in'] = $this->session->userdata('is_adminlogged_in');	
			$data['admin'] = 'admin';
			$data['error'] = $this->upload->display_errors();

			$data['main_content'] = 'profile/manage_toprecruit';

			$this->load->view('includes/template',$data);
		}else if (!$this->upload->do_upload() && ($this->input->post('name') != '')){

			$data = $this->profile_admin_model->get_toprecruit_insert();	
		
			redirect('profile_admin/manage_toprecruit');
		}else if ($this->upload->do_upload() && ($this->input->post('name') != '')){

			$data = $this->profile_admin_model->get_toprecruit_insert();	
		
			redirect('profile_admin/manage_toprecruit');
		}else if ($this->upload->do_upload() && ($this->input->post('name') == '')){

			$data = $this->profile_admin_model->get_toprecruit_insert();	
		
			redirect('profile_admin/manage_toprecruit');
		}
	}

	public function toprecruit_edit()
	{
		$data = $this->profile_admin_model->get_post();
		$data['incorrect_login'] = '';	
		$data['reg_success'] = '';
		$data['is_adminlogged_in'] = $this->session->userdata('is_adminlogged_in');	
		$data['admin'] = 'admin';
		$data['error'] = '';	
		
		$data['main_content'] = 'profile/manage_toprecruit_edit';

		$this->load->view('includes/template',$data);
	}

	public function toprecruit_edit_update()
	{
		$config['upload_path'] = './uploads/';
		$config['allowed_types'] = 'jpg|jpeg|png';
		$config['max_size']	= '2000';
		$config['max_width']  = '1024';
		$config['max_height']  = '768';

		$this->load->library('upload',$config);
		
		if (!$this->upload->do_upload() && ($this->input->post('name') == ''))
		{

			$data = $this->profile_admin_model->get_post();
			$data['incorrect_login'] = '';	
			$data['reg_success'] = '';
			$data['is_adminlogged_in'] = $this->session->userdata('is_adminlogged_in');	
			$data['admin'] = 'admin';
			$data['error'] = $this->upload->display_errors();

			$data['main_content'] = 'profile/manage_toprecruit';

			$this->load->view('includes/template',$data);
		}else if (!$this->upload->do_upload() && ($this->input->post('name') != '')){

			$data = $this->profile_admin_model->get_toprecruit_edit_update();		
		
			redirect('profile_admin/manage_toprecruit');
		}else if ($this->upload->do_upload() && ($this->input->post('name') != '')){

			$data = $this->profile_admin_model->get_toprecruit_edit_update();		
		
			redirect('profile_admin/manage_toprecruit');
		}else if ($this->upload->do_upload() && ($this->input->post('name') == '')){

			$data = $this->profile_admin_model->get_toprecruit_edit_update();		
		
			redirect('profile_admin/manage_toprecruit');
		}
	}

	public function toprecruit_delete()
	{
		$data = $this->profile_admin_model->get_toprecruit_delete();	
		
		redirect('profile_admin/manage_toprecruit');
	}

	public function candidates_cv_download()
	{
		$data = $this->profile_admin_model->get_candidates_cv_download();	
	}

	public function careers_candidates_cv_download()
	{
		$data = $this->profile_admin_model->get_careers_candidates_cv_download();	
	}

	// Manage Team
	public function team_insert()
	{	
		$config['upload_path'] = './uploads/';
		$config['allowed_types'] = 'jpg|jpeg|png';
		$config['max_size']	= '2000';
		$config['max_width']  = '1024';
		$config['max_height']  = '768';

		$this->load->library('upload',$config);
		
		if (!$this->upload->do_upload() && ($this->input->post('name') == ''))
		{

			$data = $this->profile_admin_model->get_post();
			$data['incorrect_login'] = '';	
			$data['reg_success'] = '';
			$data['is_adminlogged_in'] = $this->session->userdata('is_adminlogged_in');	
			$data['admin'] = 'admin';
			$data['error'] = $this->upload->display_errors();

			$data['main_content'] = 'profile/manage_team';

			$this->load->view('includes/template',$data);
		}else if (!$this->upload->do_upload() && ($this->input->post('name') != '')){

			$data = $this->profile_admin_model->get_team_insert();	
		
			redirect('profile_admin/manage_team');
		}else if ($this->upload->do_upload() && ($this->input->post('name') != '')){

			$data = $this->profile_admin_model->get_team_insert();	
		
			redirect('profile_admin/manage_team');
		}else if ($this->upload->do_upload() && ($this->input->post('name') == '')){

			$data = $this->profile_admin_model->get_team_insert();	
		
			redirect('profile_admin/manage_team');
		}
	}

	public function team_edit()
	{
		$data = $this->profile_admin_model->get_post();
		$data['incorrect_login'] = '';	
		$data['reg_success'] = '';
		$data['is_adminlogged_in'] = $this->session->userdata('is_adminlogged_in');	
		$data['admin'] = 'admin';
		$data['error'] = '';	
		
		$data['main_content'] = 'profile/manage_team_edit';

		$this->load->view('includes/template',$data);
	}

	public function team_edit_update()
	{
		$config['upload_path'] = './uploads/';
		$config['allowed_types'] = 'jpg|jpeg|png';
		$config['max_size']	= '2000';
		$config['max_width']  = '1024';
		$config['max_height']  = '768';

		$this->load->library('upload',$config);
		
		if (!$this->upload->do_upload() && ($this->input->post('name') == ''))
		{

			$data = $this->profile_admin_model->get_post();
			$data['incorrect_login'] = '';	
			$data['reg_success'] = '';
			$data['is_adminlogged_in'] = $this->session->userdata('is_adminlogged_in');	
			$data['admin'] = 'admin';
			$data['error'] = $this->upload->display_errors();

			$data['main_content'] = 'profile/manage_team';

			$this->load->view('includes/template',$data);
		}else if (!$this->upload->do_upload() && ($this->input->post('name') != '')){

			$data = $this->profile_admin_model->get_team_edit_update();		
		
			redirect('profile_admin/manage_team');
		}else if ($this->upload->do_upload() && ($this->input->post('name') != '')){

			$data = $this->profile_admin_model->get_team_edit_update();		
		
			redirect('profile_admin/manage_team');
		}else if ($this->upload->do_upload() && ($this->input->post('name') == '')){

			$data = $this->profile_admin_model->get_team_edit_update();		
		
			redirect('profile_admin/manage_team');
		}
	}

	public function team_delete()
	{
		$data = $this->profile_admin_model->get_team_delete();	
		
		redirect('profile_admin/manage_team');
	}	

	// Manage Board
	public function board_insert()
	{	
		$config['upload_path'] = './uploads/';
		$config['allowed_types'] = 'jpg|jpeg|png';
		$config['max_size']	= '2000';
		$config['max_width']  = '1024';
		$config['max_height']  = '768';

		$this->load->library('upload',$config);
		
		if (!$this->upload->do_upload() && ($this->input->post('name') == ''))
		{

			$data = $this->profile_admin_model->get_post();
			$data['incorrect_login'] = '';	
			$data['reg_success'] = '';
			$data['is_adminlogged_in'] = $this->session->userdata('is_adminlogged_in');	
			$data['admin'] = 'admin';
			$data['error'] = $this->upload->display_errors();

			$data['main_content'] = 'profile/manage_board';

			$this->load->view('includes/template',$data);
		}else if (!$this->upload->do_upload() && ($this->input->post('name') != '')){

			$data = $this->profile_admin_model->get_board_insert();	
		
			redirect('profile_admin/manage_board');
		}else if ($this->upload->do_upload() && ($this->input->post('name') != '')){

			$data = $this->profile_admin_model->get_board_insert();	
		
			redirect('profile_admin/manage_board');
		}else if ($this->upload->do_upload() && ($this->input->post('name') == '')){

			$data = $this->profile_admin_model->get_board_insert();	
		
			redirect('profile_admin/manage_board');
		}
	}

	public function board_edit()
	{
		$data = $this->profile_admin_model->get_post();
		$data['incorrect_login'] = '';	
		$data['reg_success'] = '';
		$data['is_adminlogged_in'] = $this->session->userdata('is_adminlogged_in');	
		$data['admin'] = 'admin';
		$data['error'] = '';	
		
		$data['main_content'] = 'profile/manage_board_edit';

		$this->load->view('includes/template',$data);
	}

	public function board_edit_update()
	{
		$config['upload_path'] = './uploads/';
		$config['allowed_types'] = 'jpg|jpeg|png';
		$config['max_size']	= '2000';
		$config['max_width']  = '1024';
		$config['max_height']  = '768';

		$this->load->library('upload',$config);
		
		if (!$this->upload->do_upload() && ($this->input->post('name') == ''))
		{

			$data = $this->profile_admin_model->get_post();
			$data['incorrect_login'] = '';	
			$data['reg_success'] = '';
			$data['is_adminlogged_in'] = $this->session->userdata('is_adminlogged_in');	
			$data['admin'] = 'admin';
			$data['error'] = $this->upload->display_errors();

			$data['main_content'] = 'profile/manage_board';

			$this->load->view('includes/template',$data);
		}else if (!$this->upload->do_upload() && ($this->input->post('name') != '')){

			$data = $this->profile_admin_model->get_board_edit_update();		
		
			redirect('profile_admin/manage_board');
		}else if ($this->upload->do_upload() && ($this->input->post('name') != '')){

			$data = $this->profile_admin_model->get_board_edit_update();		
		
			redirect('profile_admin/manage_board');
		}else if ($this->upload->do_upload() && ($this->input->post('name') == '')){

			$data = $this->profile_admin_model->get_board_edit_update();		
		
			redirect('profile_admin/manage_board');
		}
	}

	public function board_delete()
	{
		$data = $this->profile_admin_model->get_board_delete();	
		
		redirect('profile_admin/manage_board');
	}	

	// Manage Board Overview
	public function board_overview_insert()
	{
		$data = $this->profile_admin_model->get_board_overview_insert();	
		
		redirect('profile_admin/manage_board');
	}

	// Manage Careers
	public function careers_insert()
	{
		$data = $this->profile_admin_model->get_careers_insert();	
		
		redirect('profile_admin/manage_careers');
	}

	public function careers_edit()
	{
		$data = $this->profile_admin_model->get_post();
		$data['incorrect_login'] = '';	
		$data['reg_success'] = '';
		$data['is_adminlogged_in'] = $this->session->userdata('is_adminlogged_in');	
		$data['admin'] = 'admin';
		$data['error'] = '';	
		
		$data['main_content'] = 'profile/manage_careers_edit';

		$this->load->view('includes/template',$data);
	}

	public function careers_edit_update()
	{
		$data = $this->profile_admin_model->get_careers_edit_update();	
		
		redirect('profile_admin/manage_careers');
	}

	public function careers_delete()
	{
		$data = $this->profile_admin_model->get_careers_delete();	
		
		redirect('profile_admin/manage_careers');
	}

	// Manage Trainins Overview
	public function trainings_overview_insert()
	{
		$data = $this->profile_admin_model->get_trainings_overview_insert();	
		
		redirect('profile_admin/manage_trainings');
	}

	// Manage Trainings
	public function trainings_insert()
	{	
		$config['upload_path'] = './uploads/';
		$config['allowed_types'] = 'jpg|jpeg|png';
		$config['max_size']	= '4000';
		$config['max_width']  = '4000';
		$config['max_height']  = '4000';

		$this->load->library('upload',$config);
		
		if (!$this->upload->do_upload() && ($this->input->post('title') == ''))
		{

			$data = $this->profile_admin_model->get_post();
			$data['incorrect_login'] = '';	
			$data['reg_success'] = '';
			$data['is_adminlogged_in'] = $this->session->userdata('is_adminlogged_in');	
			$data['admin'] = 'admin';
			$data['error'] = $this->upload->display_errors();

			$data['main_content'] = 'profile/manage_trainings';

			$this->load->view('includes/template',$data);
		}else if (!$this->upload->do_upload() && ($this->input->post('title') != '')){

			$data = $this->profile_admin_model->get_trainings_insert();	
		
			redirect('profile_admin/manage_trainings');
		}else if ($this->upload->do_upload() && ($this->input->post('title') != '')){

			$data = $this->profile_admin_model->get_trainings_insert();	
		
			redirect('profile_admin/manage_trainings');
		}else if ($this->upload->do_upload() && ($this->input->post('title') == '')){

			$data = $this->profile_admin_model->get_trainings_insert();	
		
			redirect('profile_admin/manage_trainings');
		}
	}

	public function trainings_edit()
	{
		$data = $this->profile_admin_model->get_post();
		$data['incorrect_login'] = '';	
		$data['reg_success'] = '';
		$data['is_adminlogged_in'] = $this->session->userdata('is_adminlogged_in');	
		$data['admin'] = 'admin';
		$data['error'] = '';	
		
		$data['main_content'] = 'profile/manage_trainings_edit';

		$this->load->view('includes/template',$data);
	}

	public function trainings_edit_update()
	{
		$config['upload_path'] = './uploads/';
		$config['allowed_types'] = 'jpg|jpeg|png';
		$config['max_size']	= '4000';
		$config['max_width']  = '4000';
		$config['max_height']  = '4000';

		$this->load->library('upload',$config);
		
		if (!$this->upload->do_upload() && ($this->input->post('title') == ''))
		{

			$data = $this->profile_admin_model->get_post();
			$data['incorrect_login'] = '';	
			$data['reg_success'] = '';
			$data['is_adminlogged_in'] = $this->session->userdata('is_adminlogged_in');	
			$data['admin'] = 'admin';
			$data['error'] = $this->upload->display_errors();

			$data['main_content'] = 'profile/manage_trainings';

			$this->load->view('includes/template',$data);
		}else if (!$this->upload->do_upload() && ($this->input->post('title') != '')){

			$data = $this->profile_admin_model->get_trainings_edit_update();	
		
			redirect('profile_admin/manage_trainings');
		}else if ($this->upload->do_upload() && ($this->input->post('title') != '')){

			$data = $this->profile_admin_model->get_trainings_edit_update();	
		
			redirect('profile_admin/manage_trainings');
		}else if ($this->upload->do_upload() && ($this->input->post('title') == '')){

			$data = $this->profile_admin_model->get_trainings_edit_update();	
		
			redirect('profile_admin/manage_trainings');
		}		
	}

	public function training_download()
	{
		$data = $this->profile_admin_model->get_post();
		$data['incorrect_login'] = '';	
		$data['reg_success'] = '';
		$data['is_adminlogged_in'] = $this->session->userdata('is_adminlogged_in');	
		$data['admin'] = 'admin';
		$data['error'] = '';	
		
		$data['main_content'] = 'profile/manage_trainings_download';

		$this->load->view('includes/template',$data);
	}

	public function trainings_edit_download_update()
	{
		$config['upload_path'] = './uploads/';
		$config['allowed_types'] = 'txt|doc|docx|pdf';
		$config['max_size']	= '4000';
		$config['max_width']  = '4000';
		$config['max_height']  = '4000';

		$this->load->library('upload',$config);
		
		$checkdoc = $this->input->post('docone');
		if (!$this->upload->do_upload() && (!isset($checkdoc)))
		{

			$data = $this->profile_admin_model->get_post();
			$data['incorrect_login'] = '';	
			$data['reg_success'] = '';
			$data['is_adminlogged_in'] = $this->session->userdata('is_adminlogged_in');	
			$data['admin'] = 'admin';
			$data['error'] = $this->upload->display_errors();

			$data['main_content'] = 'profile/manage_trainings';

			$this->load->view('includes/template',$data);
		}else{

			$data = $this->profile_admin_model->get_trainings_edit_download_update();	
		
			redirect('profile_admin/manage_trainings');
		}		
	}

	public function trainings_delete()
	{
		$data = $this->profile_admin_model->get_trainings_delete();	
		
		redirect('profile_admin/manage_trainings');
	}

	public function training_applicants_delete()
	{
		$data = $this->profile_admin_model->get_training_applicants_delete();	
		
		redirect('profile_admin/manage_trainings');
	}

	// Manage Packages
	public function package_insert()
	{
		$data = $this->profile_admin_model->get_package_insert();	
		
		redirect('profile_admin/manage_package');
	}

	public function package_edit()
	{
		$data = $this->profile_admin_model->get_post();
		$data['incorrect_login'] = '';	
		$data['reg_success'] = '';
		$data['is_adminlogged_in'] = $this->session->userdata('is_adminlogged_in');	
		$data['admin'] = 'admin';
		$data['error'] = '';	
		
		$data['main_content'] = 'profile/manage_package_edit';

		$this->load->view('includes/template',$data);
	}

	public function package_edit_update()
	{
		$data = $this->profile_admin_model->get_package_edit_update();	
		
		redirect('profile_admin/manage_package');
	}

	public function package_delete()
	{
		$data = $this->profile_admin_model->get_package_delete();	
		
		redirect('profile_admin/manage_package');
	}

	// Manage Password Reset Message
	public function password_reset_edit()
	{
		$data = $this->profile_admin_model->get_post();
		$data['incorrect_login'] = '';	
		$data['reg_success'] = '';
		$data['is_adminlogged_in'] = $this->session->userdata('is_adminlogged_in');	
		$data['admin'] = 'admin';
		$data['error'] = '';	
		
		$data['main_content'] = 'profile/password_reset_edit';

		$this->load->view('includes/template',$data);
	}

	public function password_reset_update()
	{
		$data = $this->profile_admin_model->get_password_reset_edit_update();	
		
		redirect('profile_admin/password_reset');
	}

	// Manage Privacy, Terms and conditions
	public function privacyandterms_edit()
	{
		$data = $this->profile_admin_model->get_post();
		$data['incorrect_login'] = '';	
		$data['reg_success'] = '';
		$data['is_adminlogged_in'] = $this->session->userdata('is_adminlogged_in');	
		$data['admin'] = 'admin';
		$data['error'] = '';	
		
		$data['main_content'] = 'profile/privacyandterms_edit';

		$this->load->view('includes/template',$data);
	}

	public function privacyandterms_update()
	{
		$config['upload_path'] = './uploads/';
		$config['allowed_types'] = 'txt|doc|docx|pdf';
		$config['max_size']	= '4000';
		$config['max_width']  = '4000';
		$config['max_height']  = '4000';

		$this->load->library('upload',$config);
		
		$checkdoc = $this->input->post('upload');
		if (!$this->upload->do_upload() && (!isset($checkdoc)))
		{

			$data = $this->profile_admin_model->get_post();
			$data['incorrect_login'] = '';	
			$data['reg_success'] = '';
			$data['is_adminlogged_in'] = $this->session->userdata('is_adminlogged_in');	
			$data['admin'] = 'admin';
			$data['error'] = $this->upload->display_errors();

			$data['main_content'] = 'profile/privacyandterms';

			$this->load->view('includes/template',$data);
		}else{

			$data = $this->profile_admin_model->get_privacyandterms_edit_update();	
			
			redirect('profile_admin/privacyandterms');
		}
	}

	// Manage Welcome Message
	public function welcome_message_edit()
	{
		$data = $this->profile_admin_model->get_post();
		$data['incorrect_login'] = '';	
		$data['reg_success'] = '';
		$data['is_adminlogged_in'] = $this->session->userdata('is_adminlogged_in');	
		$data['admin'] = 'admin';
		$data['error'] = '';	
		
		$data['main_content'] = 'profile/welcome_message_edit';

		$this->load->view('includes/template',$data);
	}

	public function welcome_message_update()
	{
		$data = $this->profile_admin_model->get_welcome_message_edit_update();	
		
		redirect('profile_admin/welcome_message');
	}


	// Check if Admin is logged in
	public function is_adminlogged_in()
	{
		$is_adminlogged_in = $this->session->userdata('is_adminlogged_in');

		if(!isset($is_adminlogged_in) || $is_adminlogged_in != true)
		{
			redirect('mpsconsults_admin/index');
		}
	}

}
