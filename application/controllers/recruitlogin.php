<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Recruitlogin extends CI_Controller {

	public function __construct()
	{
		parent::__construct();

		$this->load->model('recruiter_model');
		$this->load->model('filter_model');
		$this->load->model('validate_model');
	}

	public function index()
	{
		//Incorrect login details
		$data = $this->recruiter_model->get_post();	
		$data['incorrect_login'] = 'Invalid Username or Password';
		$data['reg_success'] = '';
		$data['query'] = '';	
		$data['is_recruitlogged_in'] = '';		
		$data['recruit'] = 'recruiter';
		$data['is_logged_in'] = '';
		$data['thehome'] = 'thehome';
		$data['page_title'] = 'Recruiters';
		$data['year_options'] = $this->filter_model->year_options();
		$data['location_options'] = $this->filter_model->location_options();
		$data['qualification_options'] = $this->filter_model->qualification_options();
		$data['industry_options'] = $this->filter_model->industry_options();
		$data['country_options'] = $this->filter_model->country_options();
		$data['salary_options'] = $this->filter_model->salary_options();
		$data['job_options'] = $this->filter_model->job_type_options();
		$data['main_content'] = 'recruiter/sign-in';
		
		$this->load->view('includes/template', $data);
	}

	public function verify()
	{
		//Verified login details
		$data = $this->recruiter_model->get_post();	
		$data['incorrect_login'] = 'Your account is being verified';
		$data['reg_success'] = '';
		$data['query'] = '';	
		$data['is_recruitlogged_in'] = '';		
		$data['recruit'] = 'recruiter';
		$data['is_logged_in'] = '';
		$data['thehome'] = 'thehome';
		$data['page_title'] = 'Recruiters';
		$data['year_options'] = $this->filter_model->year_options();
		$data['location_options'] = $this->filter_model->location_options();
		$data['qualification_options'] = $this->filter_model->qualification_options();
		$data['industry_options'] = $this->filter_model->industry_options();
		$data['country_options'] = $this->filter_model->country_options();
		$data['salary_options'] = $this->filter_model->salary_options();
		$data['job_options'] = $this->filter_model->job_type_options();
		$data['main_content'] = 'recruiter/sign-in';
		
		$this->load->view('includes/template', $data);
	}

	public function signin()
	{
		//login details
		$data = $this->recruiter_model->get_post();	
		$data['incorrect_login'] = '';
		$data['reg_success'] = '';
		$data['query'] = '';	
		$data['is_recruitlogged_in'] = '';		
		$data['recruit'] = 'recruiter';
		$data['is_logged_in'] = '';
		$data['thehome'] = 'thehome';
		$data['page_title'] = 'Recruiters';
		$data['year_options'] = $this->filter_model->year_options();
		$data['location_options'] = $this->filter_model->location_options();
		$data['qualification_options'] = $this->filter_model->qualification_options();
		$data['industry_options'] = $this->filter_model->industry_options();
		$data['country_options'] = $this->filter_model->country_options();
		$data['salary_options'] = $this->filter_model->salary_options();
		$data['job_options'] = $this->filter_model->job_type_options();
		$data['main_content'] = 'recruiter/sign-in';
		
		$this->load->view('includes/template', $data);
	}

	public function valid_email()
	{
		//login details
		$data = $this->recruiter_model->get_post();	
		$data['incorrect_login'] = '';
		$data['reg_success'] = 'Password has been reset';
		$data['query'] = '';	
		$data['is_recruitlogged_in'] = '';		
		$data['recruit'] = 'recruiter';
		$data['is_logged_in'] = '';
		$data['thehome'] = 'thehome';
		$data['page_title'] = 'Recruiters';
		$data['year_options'] = $this->filter_model->year_options();
		$data['location_options'] = $this->filter_model->location_options();
		$data['qualification_options'] = $this->filter_model->qualification_options();
		$data['industry_options'] = $this->filter_model->industry_options();
		$data['country_options'] = $this->filter_model->country_options();
		$data['salary_options'] = $this->filter_model->salary_options();
		$data['job_options'] = $this->filter_model->job_type_options();
		$data['main_content'] = 'recruiter/sign-in';
		
		$this->load->view('includes/template', $data);
	}

	public function forgotpassword()
	{
		//Forgot login details
		$data = $this->recruiter_model->get_post();	
		$data['incorrect_login'] = '';
		$data['reg_success'] = '';
		$data['query'] = '';	
		$data['is_recruitlogged_in'] = '';		
		$data['recruit'] = 'recruiter';
		$data['is_logged_in'] = '';
		$data['thehome'] = 'thehome';
		$data['page_title'] = 'Recruiters';
		$data['year_options'] = $this->filter_model->year_options();
		$data['location_options'] = $this->filter_model->location_options();
		$data['qualification_options'] = $this->filter_model->qualification_options();
		$data['industry_options'] = $this->filter_model->industry_options();
		$data['country_options'] = $this->filter_model->country_options();
		$data['salary_options'] = $this->filter_model->salary_options();
		$data['job_options'] = $this->filter_model->job_type_options();
		$data['main_content'] = 'recruiter/forgotpassword';
		
		$this->load->view('includes/template', $data);
	}

	public function invalid_email()
	{
		//Forgot login details incorrect
		$data = $this->recruiter_model->get_post();	
		$data['incorrect_login'] = 'Email not found.';
		$data['reg_success'] = '';
		$data['query'] = '';	
		$data['is_recruitlogged_in'] = '';		
		$data['recruit'] = 'recruiter';
		$data['is_logged_in'] = '';
		$data['thehome'] = 'thehome';
		$data['page_title'] = 'Recruiters';
		$data['year_options'] = $this->filter_model->year_options();
		$data['location_options'] = $this->filter_model->location_options();
		$data['qualification_options'] = $this->filter_model->qualification_options();
		$data['industry_options'] = $this->filter_model->industry_options();
		$data['country_options'] = $this->filter_model->country_options();
		$data['salary_options'] = $this->filter_model->salary_options();
		$data['job_options'] = $this->filter_model->job_type_options();
		$data['main_content'] = 'recruiter/forgotpassword';
		
		$this->load->view('includes/template', $data);
	}

	public function validate_password()
	{
		$query = $this->validate_model->r_validate_email();

		if($query) // if recruiter's credentials validated...
		{			
			$password = rand(10000,99999);
			$thepassword = md5($password);
			$email = $this->input->post('email');

			$forgot_data = array(
				'password' => $thepassword
			);

			$this->db->where('email', $email);
			$updatepass = $this->db->update('employers', $forgot_data);	

			$this->db->where('account_type','recruiter');
			$awelcome = $this->db->get('password_reset');
			foreach($awelcome->result() as $arrows)
			{
				$subject = $arrows->subject;
				$message = $arrows->reset_message. "\n\n***Login Detail***\n\n Password: ".$password."\n\n" .$arrows->signature;

				$this->load->library('email');
				$this->email->set_newline("\r\n");

				$this->email->from('info@mpsconsults.com', 'MPS Consults');
				$this->email->to($email);
				$this->email->subject($subject);
				$this->email->message($message);
				
				$sending = $this->email->send();

			}

			redirect('recruitlogin/valid_email');
		}

		else
		{
			$this->invalid_email();
		}
		
	}

	public function validate_credentials()
	{
		$query = $this->validate_model->r_validate();

		if($query) // if recruiter's credentials validated...
		{
			
			$this->db->select('*');		
			$this->db->from('employers');
			$this->db->where('email', $this->input->post('r_username'));
			$this->db->or_where('r_username', $this->input->post('r_username'));
			$theusername = $this->db->get();
			foreach($theusername->result() as $from)
			{
				$from->r_username;
				$thestatus = $from->status;

				if($thestatus == 'N')
				{
						redirect('recruitlogin/verify');
				}else{		
						$data = array(
								'r_username' => $from->r_username,
								'is_recruitlogged_in' => true
							);

						$this->session->set_userdata($data);
						redirect('profile_recruit/recruiters_area');
					}
				// $this->session->set_userdata($data);
				// redirect('profile_recruit/recruiters_area');
			}

		}

		else
		{
			$this->index();
		}
		
	}

	public function logout()
	{
		$this->session->sess_destroy();
		redirect('home/index');				
	}

	public function registration()
	{
		$data = $this->recruiter_model->get_post();	
		$data['incorrect_login'] = '';
		$data['reg_success'] = '';
		$data['query'] = '';	
		$data['is_recruitlogged_in'] = '';		
		$data['recruit'] = 'recruiter';
		$data['is_logged_in'] = '';
		$data['thehome'] = 'thehome';
		$data['page_title'] = 'Recruiters';
		$data['year_options'] = $this->filter_model->year_options();
		$data['location_options'] = $this->filter_model->location_options();
		$data['qualification_options'] = $this->filter_model->qualification_options();
		$data['industry_options'] = $this->filter_model->industry_options();
		$data['country_options'] = $this->filter_model->country_options();
		$data['salary_options'] = $this->filter_model->salary_options();
		$data['job_options'] = $this->filter_model->job_type_options();
		$data['main_content'] = 'recruiter/register';
				
		$this->load->view('includes/template', $data);
	}

	public function register()
	{
		//field name, error message, validation rules

		$this->form_validation->set_rules('org_rep_firstname', 'First Name', 'trim|required');
		$this->form_validation->set_rules('org_rep_surname', 'Last Name', 'trim|required');
		$this->form_validation->set_rules('org_name', 'Organization Name', 'trim|required');
		$this->form_validation->set_rules('employer_type', 'Organizatiion Type', 'trim|required');
		$this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email|is_unique[employers.email]');
		$this->form_validation->set_rules('r_username', 'Username', 'trim|required|min_length[4]|is_unique[employers.r_username]');
		$this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[4]|max_length[32]');
		$this->form_validation->set_rules('password2', 'Password Confirmation', 'trim|required|matches[password]');
		$this->form_validation->set_message('is_unique', 'Already in use!');

		if ($this->form_validation->run() == FALSE)
		{
				//validation with errors
				$data = $this->recruiter_model->get_post();	
				$data['incorrect_login'] = '';
				$data['reg_success'] = '';
				$data['query'] = '';	
				$data['is_recruitlogged_in'] = '';		
				$data['recruit'] = 'recruiter';
				$data['is_logged_in'] = '';
				$data['thehome'] = 'thehome';
				$data['page_title'] = 'Recruiters';
				$data['year_options'] = $this->filter_model->year_options();
				$data['location_options'] = $this->filter_model->location_options();
				$data['qualification_options'] = $this->filter_model->qualification_options();
				$data['industry_options'] = $this->filter_model->industry_options();
				$data['country_options'] = $this->filter_model->country_options();
				$data['salary_options'] = $this->filter_model->salary_options();
				$data['job_options'] = $this->filter_model->job_type_options();
				$data['main_content'] = 'recruiter/register';
				
				$this->load->view('includes/template', $data);
		}
		else
		{	
			//validation without errors
			if($query = $this->validate_model->create_recruiter())
			{ 
				//registration successful
				$data = $this->recruiter_model->get_post();	
				$data['incorrect_login'] = '';
				$data['query'] = '';	
				$data['is_logged_in'] = '';
				$data['is_recruitlogged_in'] = '';		
				$data['recruit'] = 'recruiter';
				$data['reg_success'] = 'Registration successful';
				$data['thehome'] = 'thehome';
				$data['page_title'] = 'Recruiters';
				$data['year_options'] = $this->filter_model->year_options();
				$data['location_options'] = $this->filter_model->location_options();
				$data['qualification_options'] = $this->filter_model->qualification_options();
				$data['industry_options'] = $this->filter_model->industry_options();
				$data['country_options'] = $this->filter_model->country_options();
				$data['salary_options'] = $this->filter_model->salary_options();
				$data['job_options'] = $this->filter_model->job_type_options();
				$data['main_content'] = 'recruiter/sign-in';
				
				$this->load->view('includes/template', $data);
			}
			else{
				//registration not successful
				$data = $this->recruiter_model->get_post();	
				$data['incorrect_login'] = '';
				$data['query'] = '';	
				$data['is_logged_in'] = '';
				$data['is_recruitlogged_in'] = '';		
				$data['recruit'] = 'recruiter';
				$data['reg_success'] = 'Registration not successful';
				$data['thehome'] = 'thehome';
				$data['page_title'] = 'Recruiters';
				$data['year_options'] = $this->filter_model->year_options();
				$data['location_options'] = $this->filter_model->location_options();
				$data['qualification_options'] = $this->filter_model->qualification_options();
				$data['industry_options'] = $this->filter_model->industry_options();
				$data['country_options'] = $this->filter_model->country_options();
				$data['salary_options'] = $this->filter_model->salary_options();
				$data['job_options'] = $this->filter_model->job_type_options();
				$data['main_content'] = 'recruiter/register';
				
				$this->load->view('includes/template', $data);
			}
		}
	}

} 