<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Career_advice extends CI_Controller {

	public function __construct()
	{
		parent::__construct();

		$this->load->model('career_model');
	}

	public function index()
	{
		$data = $this->career_model->get_post();
		$data['incorrect_login'] = '';	
		$data['reg_success'] = '';
		$data['is_logged_in'] = $this->session->userdata('is_logged_in');

		//pagination
		$this->load->library('pagination');

		$config = array();
		$config['base_url'] =  base_url('career_advice/index');
		$config['total_rows'] = $this->db->get('article')->num_rows();
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
		$data['article'] = $this->db->get('article', $config['per_page'], $this->uri->segment(3));

		$data['main_content'] = 'career-advice/index';

		$this->load->view('includes/template', $data);
	}

	public function counsel()
	{
		$data = $this->career_model->get_counsel();
		$data['incorrect_login'] = '';	
		$data['reg_success'] = '';
		$data['msg_success'] = '';
		$data['recruit'] = 'recruiter';
		$data['is_logged_in'] = $this->session->userdata('is_logged_in');
		$data['is_recruitlogged_in'] = $this->session->userdata('is_recruitlogged_in');
		$data['main_content'] = 'career-advice/counsel';

		$this->load->view('includes/template', $data);
	}

	public function benefit()
	{
		$data = $this->career_model->get_counsel();
		$data['incorrect_login'] = '';	
		$data['reg_success'] = '';
		$data['msg_success'] = '';
		$data['recruit'] = 'recruiter';
		$data['is_logged_in'] = $this->session->userdata('is_logged_in');
		$data['is_recruitlogged_in'] = $this->session->userdata('is_recruitlogged_in');
		$data['main_content'] = 'career-advice/benefit';

		$this->load->view('includes/template', $data);
	}

	public function service()
	{
		$data = $this->career_model->get_counsel();
		$data['incorrect_login'] = '';	
		$data['reg_success'] = '';
		$data['msg_success'] = '';
		$data['recruit'] = 'recruiter';
		$data['is_logged_in'] = $this->session->userdata('is_logged_in');
		$data['is_recruitlogged_in'] = $this->session->userdata('is_recruitlogged_in');
		$data['main_content'] = 'career-advice/service';

		$this->load->view('includes/template', $data);
	}

	public function eligibility()
	{
		$data = $this->career_model->get_counsel();
		$data['incorrect_login'] = '';	
		$data['reg_success'] = '';
		$data['msg_success'] = '';
		$data['recruit'] = 'recruiter';
		$data['is_logged_in'] = $this->session->userdata('is_logged_in');
		$data['is_recruitlogged_in'] = $this->session->userdata('is_recruitlogged_in');
		$data['main_content'] = 'career-advice/eligibility';

		$this->load->view('includes/template', $data);
	}

	public function blog()
	{
		$data = $this->career_model->get_blog();
		$data['incorrect_login'] = '';	
		$data['reg_success'] = '';
		$data['recruit'] = 'recruiter';
		$data['is_logged_in'] = $this->session->userdata('is_logged_in');
		$data['is_recruitlogged_in'] = $this->session->userdata('is_recruitlogged_in');
		$data['main_content'] = 'career-advice/career-selected';

		$this->load->view('includes/template', $data);
	}

	public function comment_insert()
	{	
		//field name, error message, validation rules

		$this->form_validation->set_rules('comment_body', 'Commment', 'trim|required');
		
		if ($this->form_validation->run() == FALSE)
		{
			redirect('career_advice/blog/'.$this->input->post('blog_id'));	
		}else{
			$data = $this->career_model->get_comment_insert();

			redirect('career_advice/blog/'.$this->input->post('blog_id'));	
		}	
	}

	// SENDS EMAIL

	public function send_email()
	{
		$this->form_validation->set_rules('name', 'Name', 'trim|required');
		$this->form_validation->set_rules('email', 'Email Address', 'trim|required|valid_email');
		$this->form_validation->set_rules('phone', 'Phone', 'trim|required');
		
		if($this->form_validation->run() == FALSE)
		{
			$data = $this->career_model->get_counsel();
			$data['incorrect_login'] = '';		
			$data['reg_success'] = '';
			$data['msg_success'] = '';
			$data['recruit'] = 'recruiter';
			$data['is_logged_in'] = $this->session->userdata('is_logged_in');
			$data['is_recruitlogged_in'] = $this->session->userdata('is_recruitlogged_in');
			$data['main_content'] = 'career-advice/counsel';

			$this->load->view('includes/template', $data);
		}
		else
		{
			$name = $this->input->post('name');
			$email = $this->input->post('email');
			$phone = $this->input->post('phone');
			$subject = "Quote for EAP Service";
			$msg = "Quote for EAP Service";
			$message = $msg ." Phone number: " . $phone . " Full name: " . $name;

			// $this->load->library('email', $config);
			$this->load->library('email');
			$this->email->set_newline("\r\n");

			$this->email->from($email, $name);
			$this->email->to('info@mpsconsults.com', 'MPS Consults info');
			$this->email->subject($subject);
			$this->email->message($message);

			if($this->email->send())
			{
				$data = $this->career_model->get_counsel();
				$data['incorrect_login'] = '';'';	
				$data['reg_success'] = '';
				$data['msg_success'] = 'Quote sent';
				$data['recruit'] = 'recruiter';
				$data['is_logged_in'] = $this->session->userdata('is_logged_in');
				$data['is_recruitlogged_in'] = $this->session->userdata('is_recruitlogged_in');
				$data['main_content'] = 'career-advice/counsel';

				$this->load->view('includes/template', $data);
			}

			else

			{
				show_error($this->email->print_debugger());
			}
		}		
	}
}
