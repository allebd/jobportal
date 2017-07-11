<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Upload extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('profile_model');
		$this->load->model('filter_model');
	}

	function index()
	{
		$data = $this->profile_model->get_post();
		$data['incorrect_login'] = '';	
		$data['reg_success'] = '';
		$data['error'] = '';
		$data['is_logged_in'] = $this->session->userdata('is_logged_in');
		$data['year_options'] = $this->filter_model->year_options();
		$data['gender_options'] = $this->filter_model->gender_options();
		$data['skill_options'] = $this->filter_model->skill_options();
		$data['location_options'] = $this->filter_model->location_options();
		$data['relocate_options'] = $this->filter_model->relocate_options();
		$data['qualification_options'] = $this->filter_model->qualification_options();
		$data['specialization_options'] = $this->filter_model->specialization_options();
		$data['industry_options'] = $this->filter_model->industry_options();
		$data['country_options'] = $this->filter_model->country_options();
		$data['salary_options'] = $this->filter_model->salary_options();
		$data['job_options'] = $this->filter_model->job_type_options();

		$data['main_content'] = 'profile/candidate';

		$this->load->view('includes/template',$data);
	}

	function do_upload()
	{
		$config['upload_path'] = './uploads/';
		$config['allowed_types'] = 'pdf|doc|docx|txt';
		$config['max_size']	= '1000';
		// $config['max_width']  = '1024';
		// $config['max_height']  = '768';

		$this->load->library('upload',$config);
		
		if (!$this->upload->do_upload())
		{
			$data = $this->profile_model->get_post();
			$data['incorrect_login'] = '';	
			$data['reg_success'] = '';
			$data['error'] = $this->upload->display_errors();
			$data['is_logged_in'] = $this->session->userdata('is_logged_in');
			$data['year_options'] = $this->filter_model->year_options();
			$data['gender_options'] = $this->filter_model->gender_options();
			$data['skill_options'] = $this->filter_model->skill_options();
			$data['location_options'] = $this->filter_model->location_options();
			$data['relocate_options'] = $this->filter_model->relocate_options();
			$data['qualification_options'] = $this->filter_model->qualification_options();
			$data['specialization_options'] = $this->filter_model->specialization_options();
			$data['industry_options'] = $this->filter_model->industry_options();
			$data['country_options'] = $this->filter_model->country_options();
			$data['salary_options'] = $this->filter_model->salary_options();
			$data['job_options'] = $this->filter_model->job_type_options();

			$data['main_content'] = 'profile/candidate';

			$this->load->view('includes/template',$data);
	
			}
		else
		{
			// $data['img'] = base_url().'upload/'.$file_data['file_name'];
			$data = $this->profile_model-> get_candidates_cv_record_insert();

			redirect('upload/index');	
		}
	}

	function do_upload_pic()
	{
		$config['upload_path'] = './uploads/';
		$config['allowed_types'] = 'jpg|jpeg|png';
		$config['max_size']	= '4000';
		$config['max_width']  = '1024';
		$config['max_height']  = '768';

		$this->load->library('upload',$config);
		
		if (!$this->upload->do_upload())
		{
			$data = $this->profile_model->get_post();
			$data['incorrect_login'] = '';	
			$data['reg_success'] = '';
			$data['error'] = $this->upload->display_errors();
			$data['is_logged_in'] = $this->session->userdata('is_logged_in');
			$data['year_options'] = $this->filter_model->year_options();
			$data['gender_options'] = $this->filter_model->gender_options();
			$data['skill_options'] = $this->filter_model->skill_options();
			$data['location_options'] = $this->filter_model->location_options();
			$data['relocate_options'] = $this->filter_model->relocate_options();
			$data['qualification_options'] = $this->filter_model->qualification_options();
			$data['specialization_options'] = $this->filter_model->specialization_options();
			$data['industry_options'] = $this->filter_model->industry_options();
			$data['country_options'] = $this->filter_model->country_options();
			$data['salary_options'] = $this->filter_model->salary_options();
			$data['job_options'] = $this->filter_model->job_type_options();

			$data['main_content'] = 'profile/candidate';

			$this->load->view('includes/template',$data);
	
			}
		else
		{
			// $data['img'] = base_url().'upload/'.$file_data['fi                                                           le_name'];
			$data = $this->profile_model-> get_candidates_pic_insert();

			redirect('upload/index');	
		}
	}
}
