<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home_model extends CI_Model {

	public function __construct()
	{
		parent::__construct();

	}

	public function get_post()
	{
		$data['title'] = 'MPS Consults | Core functionality at its best.';
		$this->db->order_by("name", "asc");
		$data['location'] = $this->db->get('states');
		$this->db->order_by("name", "asc");
		$data['locationone'] = $this->db->get('states', 10);
		$this->db->order_by("name", "asc");
		$data['locationtwo'] = $this->db->get('states', 10, 10);
		$this->db->order_by("name", "asc");
		$data['locationthree'] = $this->db->get('states', 10, 20);
		$this->db->order_by("name", "asc");
		$data['locationfour'] = $this->db->get('states', 10, 30);
		$this->db->order_by("name", "asc");
		$data['industry'] = $this->db->get('industry');
		$this->db->order_by("name", "asc");
		$data['industryone'] = $this->db->get('industry', 21);
		$this->db->order_by("name", "asc");
		$data['industrytwo'] = $this->db->get('industry', 21, 21);
		$this->db->order_by("name", "asc");
		$data['industrythree'] = $this->db->get('industry', 21, 42);
		$this->db->order_by("name", "asc");
		$data['industryfour'] = $this->db->get('industry', 21, 63);
		$data['job_type'] = $this->db->get('job_type');
		$data['salary'] = $this->db->get('salary');
		$data['toprecruit'] = $this->db->get('toprecruit');
		$this->db->where('name', 'Terms');
		$data['terms'] = $this->db->get('mps_extra');
		$this->db->where('name', 'Privacy');
		$data['privacy'] = $this->db->get('mps_extra');
		$data['highest_education'] = $this->db->get('highest_education');
		$this->db->order_by("name", "asc");
		$data['specialization'] = $this->db->get('specialization');
		$this->db->order_by("name", "asc");
		$data['specializationone'] = $this->db->get('specialization', 10);
		$this->db->order_by("name", "asc");
		$data['specializationtwo'] = $this->db->get('specialization', 10, 10);
		$this->db->order_by("name", "asc");
		$data['specializationthree'] = $this->db->get('specialization', 10, 20);
		$data['year_experience'] = $this->db->get('year_experience');
		$this->db->where('homedisplay', 1);
		$data['testimony'] = $this->db->get('testimony');
		$this->db->order_by("job_post_date", "desc"); 
		$this->db->where('suspend', 0);
		$this->db->where('job_end_date_conv >', strtotime('now'));
		$data['f_jobs'] = $this->db->get("job",15);
		$this->db->order_by("date", "desc"); 
		$data['article'] = $this->db->get('article', 4);
		$this->db->order_by("counter", "desc"); 
		$data['darticle'] = $this->db->get('article', 4);

		$data['page_title'] = '';
		return $data;
	}

	public function get_terms_download()
	{	
		$thepath = base_url().'uploads/'.$this->uri->segment(3);
		$data = file_get_contents($thepath); // Read the file's contents
		$name = $this->uri->segment(3);

		return force_download($name, $data);				
	}	
} 
