<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Training_model extends CI_Model {

	public function __construct()
	{
		parent::__construct();

	}

	public function get_post()
	{
		$data['title'] = 'Trainings - MPS Consults';
		$data['page_title'] = 'Trainings';
		$this->db->where('r_username', $this->session->userdata('r_username'));
		$data['query'] = $this->db->get('employers');
		$this->db->order_by("date", "desc");
		$data['trainings'] = $this->db->get('trainings',3);
		$data['trainin'] = $this->db->get('trainings');
		$this->db->where('t_id', $this->uri->segment(3));
		$data['training'] = $this->db->get('trainings');
		$this->db->order_by("date", "desc");
		$this->db->where_not_in('t_id', $this->uri->segment(3));
		$data['trained'] = $this->db->get('trainings', 2);
		$this->db->where('t_id', $this->uri->segment(3));
		$data['apply'] = $this->db->get('trainings');
		$this->db->order_by("id", "desc"); 
		$data['train'] = $this->db->get('trainers',1);
		$data['trainings_overview'] = $this->db->get('trainings_overview');

		return $data;
	}

	public function get_pay()
	{	
		$pay_insert = array(
			'title' => $this->input->post('title'),
			'name' => $this->input->post('name'),
			'email' => $this->input->post('email'),
			'phone' => $this->input->post('phone')
			);

		$data['insert'] = $this->db->insert('trainers', $pay_insert);

		$data['title'] = 'Trainings - MPS Consults';
		$data['page_title'] = 'Trainings';
		$this->db->where('r_username', $this->session->userdata('r_username'));
		$data['query'] = $this->db->get('employers');
		$data['trainings'] = $this->db->get('trainings');
		$this->db->where('t_id', $this->input->post('id'));
		$data['apply'] = $this->db->get('trainings');
		$this->db->order_by("id", "desc"); 
		$data['train'] = $this->db->get('trainers',1);
		
		return $data;
	}

	public function get_training_download()
	{	
		$thepath = base_url().'uploads/'.$this->uri->segment(3);
		$data = file_get_contents($thepath); // Read the file's contents
		$name = $this->uri->segment(3);

		return force_download($name, $data);				
	}
} 
