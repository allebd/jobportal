<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Policy extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('policy_model');
	}

	public function index()
	{
		$data = $this->policy_model->get_policy_download();	
	}

}
