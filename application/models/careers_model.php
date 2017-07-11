<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Careers_model extends CI_Model {

	public function __construct()
	{
		parent::__construct();

	}

	public function get_post()
	{
		$data['title'] = 'Careers - MPS Consults';
		$data['page_title'] = 'Careers';
		$this->db->where('username', $this->session->userdata('username'));
		$data['query'] = $this->db->get('users');
		$data['careerone'] = "MPS's success is built on engaging in talented and highly proficient people within their particular discipline as the driving force behind our business. We offer employees great working environment and opportunity for expedited growth and development across various parts of the business. Our management structure allows for free ideas and interaction flow of among employees of various skills and knowledge. Intermittently, employees may be required to work with different business units to deliver on projects and organisational involvement.";
		$data['careertwo'] = "This helps our employee creates an avenue for personal development, and professional growth. We have built a culture that values teamwork, collaboration and dialogue and a workplace where people know they will learn, that they are valued, and that they will make an impact.";
		$data['careerthree'] = "The work you do will have a direct effect on business and the community. At MPS, you will make an impact. We are looking for world-class individuals to helps us appreciate our ambitious plan for growth and success. ";
		$data['mpscareers'] = $this->db->get('mpscareers');
		$data['states'] = $this->db->get('states');
		$this->db->where('id', $this->uri->segment(3));
		$data['mpscareersapply'] = $this->db->get('mpscareers');
		return $data;
	}

	public function get_careers_apply()
	{
		$data['title'] = 'Careers - MPS Consults';
		$data['page_title'] = 'Careers';
		$this->db->where('username', $this->session->userdata('username'));
		$data['query'] = $this->db->get('users');
		$data['careerone'] = "MPS's success is built on engaging in talented and highly proficient people within their particular discipline as the driving force behind our business. We offer employees great working environment and opportunity for expedited growth and development across various parts of the business. Our management structure allows for free ideas and interaction flow of among employees of various skills and knowledge. Intermittently, employees may be required to work with different business units to deliver on projects and organisational involvement.";
		$data['careertwo'] = "This helps our employee creates an avenue for personal development, and professional growth. We have built a culture that values teamwork, collaboration and dialogue and a workplace where people know they will learn, that they are valued, and that they will make an impact.";
		$data['careerthree'] = "The work you do will have a direct effect on business and the community. At MPS, you will make an impact. We are looking for world-class individuals to helps us appreciate our ambitious plan for growth and success. ";
		$data['mpscareers'] = $this->db->get('mpscareers');
		$data['states'] = $this->db->get('states');
		$this->db->where('id', $this->uri->segment(3));
		$data['mpscareersapply'] = $this->db->get('mpscareers');

		$file_data = $this->upload->data();
		$careers_insert = array(
			'mpscareers_id' => $this->input->post('mpscareers_id'),
			'name' => $this->input->post('name'),
			'email' => $this->input->post('email'),
			'address' => $this->input->post('address'),
			'city' => $this->input->post('city'),
			'state' => $this->input->post('state'),
			'phone' => $this->input->post('phone'),
			'cv_upload' => $file_data['file_name']
			);

		$data['insert'] = $this->db->insert('careers', $careers_insert);
		return $data;
	}
} 
