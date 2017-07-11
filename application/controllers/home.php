<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct()
	{
		parent::__construct();

		$this->load->model('home_model');
	}

	public function index()
	{
		$data = $this->home_model->get_post();
		$data['incorrect_login'] = '';	
		$data['reg_success'] = '';	
		$data['query'] = '';
		$data['is_logged_in'] = '';
		$data['candidate'] = 'candidate';
		$data['thehome'] = 'thehome';

		$data['main_content'] = 'home/home';

		$this->load->view('includes/template', $data);
	}

	public function index_slider()
	{
		$data = $this->home_model->get_post();
		$data['incorrect_login'] = '';	
		$data['reg_success'] = '';
		$data['query'] = '';
		$data['is_logged_in'] = '';	
		$data['thehome'] = 'thehome';
		
		$data['main_content'] = 'home/homepage-slider';
		
		$this->load->view('includes/template', $data);
	}

	public function terms_download()
	{
		$data = $this->home_model->get_terms_download();	
	}

}
