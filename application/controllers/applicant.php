<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Applicant extends CI_Controller {

	public function __construct()
	{
		parent::__construct();

		$this->load->model('applicant_model');
		$this->load->model('filter_model');
	}

	public function createcv()
	{
		$data = $this->applicant_model->get_createcv();
		$data['incorrect_login'] = '';	
		$data['reg_success'] = '';
		$data['is_logged_in'] = $this->session->userdata('is_logged_in');

		$data['main_content'] = 'applicant/createcv';

		$this->load->view('includes/template', $data);
	}

	public function createcv_success()
	{
		$data = $this->applicant_model->get_createcv();
		$data['incorrect_login'] = '';	
		$data['reg_success'] = '';
		$data['is_logged_in'] = $this->session->userdata('is_logged_in');

		$data['main_content'] = 'applicant/createcv_success';

		$this->load->view('includes/template', $data);
	}

	public function createcv_failure()
	{
		$data = $this->applicant_model->get_createcv();
		$data['incorrect_login'] = '';	
		$data['reg_success'] = '';
		$data['is_logged_in'] = $this->session->userdata('is_logged_in');

		$data['main_content'] = 'applicant/createcv_failure';

		$this->load->view('includes/template', $data);
	}

	public function interview()
	{
		$data = $this->applicant_model->get_interview();
		$data['incorrect_login'] = '';	
		$data['reg_success'] = '';
		$data['is_logged_in'] = $this->session->userdata('is_logged_in');
		$data['main_content'] = 'applicant/interview';

		$this->load->view('includes/template', $data);
	}


	public function interview_success()
	{
		$data = $this->applicant_model->get_interview();
		$data['incorrect_login'] = '';	
		$data['reg_success'] = '';
		$data['is_logged_in'] = $this->session->userdata('is_logged_in');
		$data['main_content'] = 'applicant/interview_success';

		$this->load->view('includes/template', $data);
	}

	public function interview_failure()
	{
		$data = $this->applicant_model->get_interview();
		$data['incorrect_login'] = '';	
		$data['reg_success'] = '';
		$data['is_logged_in'] = $this->session->userdata('is_logged_in');
		$data['main_content'] = 'applicant/interview_failure';

		$this->load->view('includes/template', $data);
	}

	public function interviewpay()
	{	
		$this->form_validation->set_rules('topic', 'Topic', 'trim|required');

		if ($this->form_validation->run() == FALSE)
		{
			$data = $this->applicant_model->get_interview();
			$data['incorrect_login'] = '';	
			$data['reg_success'] = '';
			$data['is_logged_in'] = $this->session->userdata('is_logged_in');
			$data['main_content'] = 'applicant/interview';

			$this->load->view('includes/template', $data);
		}else{

			$data = $this->applicant_model->get_interviewpay();
			$data['incorrect_login'] = '';	
			$data['reg_success'] = '';
			$data['is_logged_in'] = $this->session->userdata('is_logged_in');

			$data['main_content'] = 'applicant/interviewpay';

			$this->load->view('includes/template', $data);
		}
	}
	
}

