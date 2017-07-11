<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Terms extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('terms_model');
	}

	public function index()
	{
		$data = $this->terms_model->get_terms_download();	
	}

}
