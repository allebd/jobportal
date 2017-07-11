<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Training extends CI_Controller {

	public function __construct()
	{
		parent::__construct();

		$this->load->model('training_model');
	}

	public function index()
	{
		$data = $this->training_model->get_post();
		$data['incorrect_login'] = '';	
		$data['reg_success'] = '';
		$data['error'] = '';
		$data['is_recruitlogged_in'] = $this->session->userdata('is_recruitlogged_in');
		$data['recruit'] = 'recruiter';

		//pagination
		$this->load->library('pagination');

		$config = array();
		$config['base_url'] =  base_url('training/index');
		$config['total_rows'] = $this->db->get('trainings')->num_rows();
		$config['per_page'] = 12;
		$config['num_links'] = 10;
		$config['full_tag_open'] = '<ul class="pagination pull-right">';
		$config['full_tag_close'] = '</ul>';
		$config['next_link'] = '&gt;';
		$config['next_tag_open'] = '<li>';
		$config['next_tag_close'] = '</li>';
		$config['prev_link'] = '&lt;';
		$config['prev_tag_open'] = '<li>';
		$config['prev_tag_close'] = '</li>';
		$config['cur_tag_open'] = '<li class="active"><a href="#">';
		$config['cur_tag_close'] = '</a></li>';
		$config['num_tag_open'] = '<li>';
		$config['num_tag_close'] = '</li>';

		$this->pagination->initialize($config);

		$this->db->order_by("date", "desc");
		$data['trainings'] = $this->db->get('trainings', $config['per_page'], $this->uri->segment(3));

		$data['main_content'] = 'training/index';

		$this->load->view('includes/template', $data);
	}

	public function selected()
	{
		$data = $this->training_model->get_post();
		$data['incorrect_login'] = '';	
		$data['reg_success'] = '';
		$data['error'] = '';
		$data['is_recruitlogged_in'] = $this->session->userdata('is_recruitlogged_in');
		$data['recruit'] = 'recruiter';
		$data['main_content'] = 'training/selected';

		$this->load->view('includes/template', $data);
	}

	public function pay_success()
	{
		$data = $this->training_model->get_post();
		$data['incorrect_login'] = '';	
		$data['reg_success'] = '';
		$data['is_recruitlogged_in'] = $this->session->userdata('is_recruitlogged_in');
		$data['recruit'] = 'recruiter';
		$data['main_content'] = 'training/pay_success';

		$this->load->view('includes/template', $data);
	}

	public function pay_failure()
	{
		$data = $this->training_model->get_post();
		$data['incorrect_login'] = '';	
		$data['reg_success'] = '';
		$data['error'] = '';
		$data['is_recruitlogged_in'] = $this->session->userdata('is_recruitlogged_in');
		$data['recruit'] = 'recruiter';
		$data['main_content'] = 'training/pay_failure';

		$this->load->view('includes/template', $data);
	}

	public function apply()
	{
		$data = $this->training_model->get_post();
		$data['incorrect_login'] = '';	
		$data['reg_success'] = '';
		$data['error'] = '';
		$data['is_recruitlogged_in'] = $this->session->userdata('is_recruitlogged_in');
		$data['recruit'] = 'recruiter';
		$data['main_content'] = 'training/apply';

		$this->load->view('includes/template', $data);
	}


	public function pay()
	{
		//field name, error message, validation rules

			$this->form_validation->set_rules('name', 'Name', 'trim|required');
			$this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');

			if ($this->form_validation->run() == FALSE)
			{
					$data = $this->training_model->get_post();
					$data['incorrect_login'] = '';	
					$data['reg_success'] = '';
					$data['error'] = 'Message not sent';
					$data['is_recruitlogged_in'] = $this->session->userdata('is_recruitlogged_in');
					$data['recruit'] = 'recruiter';
					$data['main_content'] = 'training/index';

					$this->load->view('includes/template', $data);
			}
			else
			{
				$data = $this->training_model->get_pay();
				$data['incorrect_login'] = '';	
				$data['reg_success'] = '';
				$data['error'] = '';
				$data['is_recruitlogged_in'] = $this->session->userdata('is_recruitlogged_in');
				$data['recruit'] = 'recruiter';
				$data['main_content'] = 'training/pay';

				$this->load->view('includes/template', $data);
			}
	}

	public function download()
	{
		$data = $this->training_model->get_training_download();	
	}
}
