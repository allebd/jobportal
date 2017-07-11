<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct()
	{
		parent::__construct();

		$this->load->model('home_model');
		$this->load->model('filter_model');
		$this->load->model('validate_model');
	}

	public function index()
	{
		//Incorrect login details
		$data = $this->home_model->get_post();	
		$data['incorrect_login'] = 'Invalid Username or Password';
		$data['reg_success'] = '';
		$data['query'] = '';	
		$data['is_logged_in'] = '';
		$data['thehome'] = 'thehome';
		$data['page_title'] = 'Applicants';
		$data['year_options'] = $this->filter_model->year_options();
		$data['location_options'] = $this->filter_model->location_options();
		$data['qualification_options'] = $this->filter_model->qualification_options();
		$data['industry_options'] = $this->filter_model->industry_options();
		$data['country_options'] = $this->filter_model->country_options();
		$data['salary_options'] = $this->filter_model->salary_options();
		$data['job_options'] = $this->filter_model->job_type_options();
		$data['main_content'] = 'home/sign-in';
		
		$this->load->view('includes/template', $data);
	}

	public function signin()
	{
		//login details
		$data = $this->home_model->get_post();	
		$data['incorrect_login'] = '';
		$data['reg_success'] = '';
		$data['query'] = '';	
		$data['is_logged_in'] = '';
		$data['thehome'] = 'thehome';
		$data['page_title'] = 'Applicants';
		$data['year_options'] = $this->filter_model->year_options();
		$data['location_options'] = $this->filter_model->location_options();
		$data['qualification_options'] = $this->filter_model->qualification_options();
		$data['industry_options'] = $this->filter_model->industry_options();
		$data['country_options'] = $this->filter_model->country_options();
		$data['salary_options'] = $this->filter_model->salary_options();
		$data['job_options'] = $this->filter_model->job_type_options();
		$data['main_content'] = 'home/sign-in';
		
		$this->load->view('includes/template', $data);
	}

	public function forgotpassword()
	{
		//Forgot login details
		$data = $this->home_model->get_post();	
		$data['incorrect_login'] = '';
		$data['reg_success'] = '';
		$data['query'] = '';	
		$data['is_logged_in'] = '';
		$data['thehome'] = 'thehome';
		$data['page_title'] = 'Applicants';
		$data['year_options'] = $this->filter_model->year_options();
		$data['location_options'] = $this->filter_model->location_options();
		$data['qualification_options'] = $this->filter_model->qualification_options();
		$data['industry_options'] = $this->filter_model->industry_options();
		$data['country_options'] = $this->filter_model->country_options();
		$data['salary_options'] = $this->filter_model->salary_options();
		$data['job_options'] = $this->filter_model->job_type_options();
		$data['main_content'] = 'home/forgotpassword';
		
		$this->load->view('includes/template', $data);
	}

	public function invalid_email()
	{
		//Forgot login details incorrect
		$data = $this->home_model->get_post();	
		$data['incorrect_login'] = 'Email not found.';
		$data['reg_success'] = '';
		$data['query'] = '';	
		$data['is_logged_in'] = '';
		$data['thehome'] = 'thehome';
		$data['page_title'] = 'Applicants';
		$data['year_options'] = $this->filter_model->year_options();
		$data['location_options'] = $this->filter_model->location_options();
		$data['qualification_options'] = $this->filter_model->qualification_options();
		$data['industry_options'] = $this->filter_model->industry_options();
		$data['country_options'] = $this->filter_model->country_options();
		$data['salary_options'] = $this->filter_model->salary_options();
		$data['job_options'] = $this->filter_model->job_type_options();
		$data['main_content'] = 'home/forgotpassword';
		
		$this->load->view('includes/template', $data);
	}

	public function valid_email()
	{
		//Forgot login details correct
		$data = $this->home_model->get_post();	
		$data['incorrect_login'] = '';
		$data['reg_success'] = 'Password has been reset';
		$data['query'] = '';	
		$data['is_logged_in'] = '';
		$data['thehome'] = 'thehome';
		$data['page_title'] = 'Applicants';
		$data['year_options'] = $this->filter_model->year_options();
		$data['location_options'] = $this->filter_model->location_options();
		$data['qualification_options'] = $this->filter_model->qualification_options();
		$data['industry_options'] = $this->filter_model->industry_options();
		$data['country_options'] = $this->filter_model->country_options();
		$data['salary_options'] = $this->filter_model->salary_options();
		$data['job_options'] = $this->filter_model->job_type_options();
		$data['main_content'] = 'home/sign-in';
		
		$this->load->view('includes/template', $data);
	}

	public function validate_password()
	{
		$query = $this->validate_model->validate_email();

		if($query) // if user's credentials validated...
		{
			$password = rand(10000,99999);
			$thepassword = md5($password);
			$email = $this->input->post('email');

			$forgot_data = array(
				'password' => $thepassword
			);

			$this->db->where('email', $email);
			$updatepass = $this->db->update('users', $forgot_data);	

			$this->db->where('account_type','applicant');
			$welcome = $this->db->get('password_reset');
			foreach($welcome->result() as $wrows)
			{
				$subject = $wrows->subject;
				$message = $wrows->reset_message. "\n\n***New Login Detail***\n\n Password: ".$password."\n\n" .$wrows->signature;

				$this->load->library('email');
				$this->email->set_newline("\r\n");

				$this->email->from('info@mpsconsults.com', 'MPS Consults');
				$this->email->to($email);
				$this->email->subject($subject);
				$this->email->message($message);
				
				$sending = $this->email->send();

			}

			redirect('login/valid_email');
		}

		else
		{
			$this->invalid_email();
		}
		
	}

	public function validate_credentials()
	{
		$query = $this->validate_model->validate();

		if($query) // if user's credentials validated...
		{
			$this->db->select('username');		
			$this->db->from('users');
			$this->db->where('email', $this->input->post('username'));
			$this->db->or_where('username', $this->input->post('username'));
			$theusername = $this->db->get();
			foreach($theusername->result() as $from){
				$from->username;
		
			$data = array(
					'username' => $from->username,
					'is_logged_in' => true
				);
			}

			$this->session->set_userdata($data);
			redirect('profile/candidates_area');
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
		$data = $this->home_model->get_post();	
		$data['incorrect_login'] = '';
		$data['reg_success'] = '';
		$data['query'] = '';	
		$data['is_logged_in'] = '';
		$data['thehome'] = 'thehome';
		$data['page_title'] = 'Applicants';
		$data['year_options'] = $this->filter_model->year_options();
		$data['location_options'] = $this->filter_model->location_options();
		$data['qualification_options'] = $this->filter_model->qualification_options();
		$data['industry_options'] = $this->filter_model->industry_options();
		$data['country_options'] = $this->filter_model->country_options();
		$data['salary_options'] = $this->filter_model->salary_options();
		$data['job_options'] = $this->filter_model->job_type_options();
		$data['main_content'] = 'home/register';
				
		$this->load->view('includes/template', $data);				
	}

	public function register()
	{
		//field name, error message, validation rules

		$this->form_validation->set_rules('firstname', 'First Name', 'trim|required');
		$this->form_validation->set_rules('surname', 'Last Name', 'trim|required');
		$this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email|is_unique[users.email]');

		$this->form_validation->set_rules('username', 'Username', 'trim|required|min_length[4]|is_unique[users.username]');
		$this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[4]|max_length[32]');
		$this->form_validation->set_rules('password2', 'Password Confirmation', 'trim|required|matches[password]');
		$this->form_validation->set_message('is_unique', 'Already in use!');		

		if ($this->form_validation->run() == FALSE)
		{
				//validation with errors
				$data = $this->home_model->get_post();	
				$data['incorrect_login'] = '';
				$data['reg_success'] = '';
				$data['query'] = '';	
				$data['is_logged_in'] = '';
				$data['thehome'] = 'thehome';
				$data['page_title'] = 'Applicants';
				$data['year_options'] = $this->filter_model->year_options();
				$data['location_options'] = $this->filter_model->location_options();
				$data['qualification_options'] = $this->filter_model->qualification_options();
				$data['industry_options'] = $this->filter_model->industry_options();
				$data['country_options'] = $this->filter_model->country_options();
				$data['salary_options'] = $this->filter_model->salary_options();
				$data['job_options'] = $this->filter_model->job_type_options();
				$data['main_content'] = 'home/register';
				
				$this->load->view('includes/template', $data);
		}
		else
		{	
			//validation without errors
			if($query = $this->validate_model->create_candidate())
			{ 
				//registration successful
				$data = $this->home_model->get_post();	
				$data['incorrect_login'] = '';
				$data['query'] = '';	
				$data['is_logged_in'] = '';
				$data['reg_success'] = 'Registration successful';
				$data['thehome'] = 'thehome';
				$data['page_title'] = 'Applicants';
				$data['year_options'] = $this->filter_model->year_options();
				$data['location_options'] = $this->filter_model->location_options();
				$data['qualification_options'] = $this->filter_model->qualification_options();
				$data['industry_options'] = $this->filter_model->industry_options();
				$data['country_options'] = $this->filter_model->country_options();
				$data['salary_options'] = $this->filter_model->salary_options();
				$data['job_options'] = $this->filter_model->job_type_options();
				$data['main_content'] = 'home/sign-in';
				
				$this->load->view('includes/template', $data);
			}
			else{
				//registration not successful
				$data = $this->home_model->get_post();	
				$data['incorrect_login'] = '';
				$data['query'] = '';	
				$data['is_logged_in'] = '';
				$data['reg_success'] = 'Registration not successful';
				$data['thehome'] = 'thehome';
				$data['page_title'] = 'Applicants';
				$data['year_options'] = $this->filter_model->year_options();
				$data['location_options'] = $this->filter_model->location_options();
				$data['qualification_options'] = $this->filter_model->qualification_options();
				$data['industry_options'] = $this->filter_model->industry_options();
				$data['country_options'] = $this->filter_model->country_options();
				$data['salary_options'] = $this->filter_model->salary_options();
				$data['job_options'] = $this->filter_model->job_type_options();
				$data['main_content'] = 'home/register';
				
				$this->load->view('includes/template', $data);
			}
		}
	}

} 