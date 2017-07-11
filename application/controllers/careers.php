<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Careers extends CI_Controller {

	public function __construct()
	{
		parent::__construct();

		$this->load->model('careers_model');
	}

	public function index()
	{
		$data = $this->careers_model->get_post();
		$data['incorrect_login'] = '';	
		$data['reg_success'] = '';
		$data['error'] = '';
		$data['is_logged_in'] = $this->session->userdata('is_logged_in');
		$data['main_content'] = 'careers/index';

		$this->load->view('includes/template', $data);
	}

	public function apply()
	{
		$data = $this->careers_model->get_post();
		$data['incorrect_login'] = '';	
		$data['reg_success'] = '';
		$data['error'] = '';
		$data['is_logged_in'] = $this->session->userdata('is_logged_in');
		$data['main_content'] = 'careers/apply';

		$this->load->view('includes/template', $data);
	}

	public function sendcareers_email()
	{
			//field name, error message, validation rules

			$this->form_validation->set_rules('name', 'Name', 'trim|required');
			$this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
			$this->form_validation->set_rules('address', 'Address', 'trim|required');
			$this->form_validation->set_rules('phone', 'Contact number', 'trim|required');

			if ($this->form_validation->run() == FALSE)
			{
					$data = $this->careers_model->get_post();
					$data['incorrect_login'] = '';	
					$data['reg_success'] = '';
					$data['error'] = 'Message not sent';
					$data['is_logged_in'] = $this->session->userdata('is_logged_in');
					$data['main_content'] = 'careers/index';

					$this->load->view('includes/template', $data);
			}
			else
			{
					$config['upload_path'] = './uploads/';
					$config['allowed_types'] = 'docx|doc|pdf|txt';
					$config['max_size']	= '2000';
					$config['max_width']  = '1024';
					$config['max_height']  = '768';

					$this->load->library('upload',$config);
					
					if (!$this->upload->do_upload())
					{

						$data = $this->careers_model->get_post();
						$data['incorrect_login'] = '';	
						$data['reg_success'] = '';
						$data['is_logged_in'] = $this->session->userdata('is_logged_in');
						$data['error'] = $this->upload->display_errors();
						
						$data['main_content'] = 'careers/index';

						$this->load->view('includes/template',$data);
					}else if ($this->upload->do_upload()){
						
						$data = $this->careers_model->get_careers_apply();

						// $name = $this->input->post('name');
						// $email = $this->input->post('email');
						// $subject = 'Careers at MPS';
						// $state = $this->input->post('state');
						// $msg = $this->input->post('phone');
						// $message = 'by '.$name.' ('.$msg.') in '.$state;
									
						// $this->load->library('email', $config);
						// $this->load->library('email');
						// $this->email->set_newline("\r\n");

						// $this->email->from($email, $name);
						// $this->email->to('careers@mpsconsults.com', 'MPS Consults Careers');
						// $this->email->subject($subject);
						// $this->email->message($message);

						//How to attach files

						// $path = $this->config->item('server_root');
						// $file = $path . '/ci_day3/attachments/yourInfo.txt';

						// $this->email->attach($file);

						$data['incorrect_login'] = '';	
						$data['reg_success'] = '';
						$data['msg_success'] = 'Message Sent.';
						$data['error'] = '';
						$data['is_logged_in'] = $this->session->userdata('is_logged_in');
						$data['main_content'] = 'careers/index';

						$this->load->view('includes/template', $data);
					}

					// else
					// {
					// 	show_error($this->email->print_debugger());
					// }
				
			}
	}
}
