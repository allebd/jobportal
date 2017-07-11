<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class About extends CI_Controller {

	public function __construct()
	{
		parent::__construct();

		$this->load->model('about_model');
	}

	public function index()
	{
		$data = $this->about_model->get_post();
		$data['incorrect_login'] = '';	
		$data['reg_success'] = '';
		$data['recruit'] = 'recruiter';
		$data['is_logged_in'] = $this->session->userdata('is_logged_in');
		$data['is_recruitlogged_in'] = $this->session->userdata('is_recruitlogged_in');
		$data['main_content'] = 'about/index';

		$this->load->view('includes/template', $data);
	}

	public function our_team()
	{
		$data = $this->about_model->get_post();
		$data['incorrect_login'] = '';	
		$data['reg_success'] = '';
		$data['recruit'] = 'recruiter';
		$data['is_logged_in'] = $this->session->userdata('is_logged_in');
		$data['is_recruitlogged_in'] = $this->session->userdata('is_recruitlogged_in');
		$data['main_content'] = 'about/our_team';
		
		$this->load->view('includes/template', $data);
	}

	public function board_of_directors()
	{
		$data = $this->about_model->get_post();
		$data['incorrect_login'] = '';	
		$data['reg_success'] = '';
		$data['recruit'] = 'recruiter';
		$data['is_logged_in'] = $this->session->userdata('is_logged_in');
		$data['is_recruitlogged_in'] = $this->session->userdata('is_recruitlogged_in');
		$data['main_content'] = 'about/board_of_directors';
		
		$this->load->view('includes/template', $data);
	}
}

