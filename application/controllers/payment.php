<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Payment extends CI_Controller {

	public function __construct()
	{
		parent::__construct();

		$this->is_recruitlogged_in();
		$this->load->model('payment_model');
	}

	public function index()
	{
		$data = $this->payment_model->get_post();
		$data['incorrect_login'] = '';	
		$data['reg_success'] = '';
		$data['recruit'] = 'Recruiter';
		$data['is_logged_in'] = '';
		$data['is_recruitlogged_in'] = $this->session->userdata('is_recruitlogged_in');
		
		$data['main_content'] = 'packages/payment';

		$this->load->view('includes/template', $data);
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
