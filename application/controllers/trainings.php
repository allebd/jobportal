<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Trainings extends CI_Controller {

	public function __construct()
	{
		parent::__construct();

		$this->load->model('trainings_model');
	}

	public function index()
	{
		$data = $this->trainings_model->get_post();
		$data['incorrect_login'] = '';	
		$data['reg_success'] = '';
		$data['error'] = '';
		$data['is_logged_in'] = $this->session->userdata('is_logged_in');

		//pagination
		$this->load->library('pagination');

		$config = array();
		$config['base_url'] =  base_url('trainings/index');
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

		$data['main_content'] = 'trainings/index';

		$this->load->view('includes/template', $data);
	}

	public function selected()
	{
		$data = $this->trainings_model->get_post();
		$data['incorrect_login'] = '';	
		$data['reg_success'] = '';
		$data['error'] = '';
		$data['is_logged_in'] = $this->session->userdata('is_logged_in');
		$data['main_content'] = 'trainings/selected';

		$this->load->view('includes/template', $data);
	}

	public function pay_success()
	{
		$data = $this->trainings_model->get_post();
		$data['incorrect_login'] = '';	
		$data['reg_success'] = '';
		$data['error'] = '';
		$data['is_logged_in'] = $this->session->userdata('is_logged_in');
		$data['main_content'] = 'trainings/pay_success';

		$this->load->view('includes/template', $data);
	}

	public function pay_failure()
	{
		$data = $this->trainings_model->get_post();
		$data['incorrect_login'] = '';	
		$data['reg_success'] = '';
		$data['error'] = '';
		$data['is_logged_in'] = $this->session->userdata('is_logged_in');
		$data['main_content'] = 'trainings/pay_failure';

		$this->load->view('includes/template', $data);
	}

	public function apply()
	{
		$data = $this->trainings_model->get_post();
		$data['incorrect_login'] = '';	
		$data['reg_success'] = '';
		$data['error'] = '';
		$data['is_logged_in'] = $this->session->userdata('is_logged_in');
		$data['main_content'] = 'trainings/apply';

		$this->load->view('includes/template', $data);
	}


	public function pay()
	{
		//field name, error message, validation rules

			$this->form_validation->set_rules('name', 'Name', 'trim|required');
			$this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');

			if ($this->form_validation->run() == FALSE)
			{
					$data = $this->trainings_model->get_post();
					$data['incorrect_login'] = '';	
					$data['reg_success'] = '';
					$data['error'] = 'Message not sent';
					$data['is_logged_in'] = $this->session->userdata('is_logged_in');
					$data['main_content'] = 'trainings/index';

					$this->load->view('includes/template', $data);
			}
			else
			{
				$data = $this->trainings_model->get_pay();
				$data['incorrect_login'] = '';	
				$data['reg_success'] = '';
				$data['error'] = '';
				$data['is_logged_in'] = $this->session->userdata('is_logged_in');
				$data['main_content'] = 'trainings/pay';

				$this->load->view('includes/template', $data);
			}
	}

	public function download()
	{
		$data = $this->trainings_model->get_training_download();	
	}
}
