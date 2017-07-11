<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Terms_model extends CI_Model {

	public function __construct()
	{
		parent::__construct();

	}

	public function get_terms_download()
	{	
		$thepath = base_url().'uploads/'.$this->uri->segment(3);
		$data = file_get_contents($thepath); // Read the file's contents
		$name = $this->uri->segment(3);

		return force_download($name, $data);				
	}

} 
