<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Contact extends CI_Controller {

	public function __construct()
	{
		parent::__construct();

		$this->load->model('contact_model');
	}

	public function index()
	{
		$data = $this->contact_model->get_post();
		$data['incorrect_login'] = '';	
		$data['reg_success'] = '';
		$data['msg_success'] = '';
		$data['is_logged_in'] = $this->session->userdata('is_logged_in');
		$data['main_content'] = 'contact/index';

		$this->load->view('includes/template', $data);
	}

	// SENDS EMAIL

	public function send_email()
	{
		$this->form_validation->set_rules('name', 'Name', 'trim|required');
		$this->form_validation->set_rules('email', 'Email Address', 'trim|required|valid_email');
		$this->form_validation->set_rules('subject', 'Subject', 'trim|required');
		$this->form_validation->set_rules('message', 'Message', 'trim|required');
		
		if($this->form_validation->run() == FALSE)
		{
			$data = $this->contact_model->get_post();
			$data['incorrect_login'] = '';	
			$data['reg_success'] = '';
			$data['msg_success'] = '';
			$data['is_logged_in'] = $this->session->userdata('is_logged_in');
			$data['main_content'] = 'contact/index';

			$this->load->view('includes/template', $data);
		}
		else
		{
			$name = $this->input->post('name');
			$email = $this->input->post('email');
			$subject = $this->input->post('subject');
			$message = $this->input->post('message');

			// $config = Array(
			// 	'protocol' => 'smtp',
			// 	'smtp_host' => 'ssl://smtp.googlemail.com',
			// 	'smtp_port' => 465,
			// 	'smtp_user' => 'delebella@gmail.com',
			// 	'smtp_pass' => 'ibukunoluwa1'
			// );

			// $this->load->library('email', $config);
			$this->load->library('email');
			$this->email->set_newline("\r\n");

			$this->email->from($email, $name);
			$this->email->to('info@mpsconsults.com', 'MPS Consults info');
			$this->email->subject($subject);
			$this->email->message($message);

			// How to attach files

			// $path = $this->config->item('server_root');
			// $file = $path . '/ci_day3/attachments/yourInfo.txt';

			// $this->email->attach($file);

			if($this->email->send())
			{
				$data = $this->contact_model->get_post();
				$data['incorrect_login'] = '';	
				$data['reg_success'] = '';
				$data['msg_success'] = 'Message sent';
				$data['is_logged_in'] = $this->session->userdata('is_logged_in');
				$data['main_content'] = 'contact/index';

				$this->load->view('includes/template', $data);
			}

			else

			{
				show_error($this->email->print_debugger());
			}
		}		
	}
}
