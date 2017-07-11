<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Profile_recruit_model extends CI_Model {

	public function __construct()
	{
		parent::__construct();

	}

	public function get_post()
	{
		$data['title'] = 'My profile - MPS Consults';	
		$data['page_title'] = '';	
		$this->db->where('r_username', $this->session->userdata('r_username'));
		$data['query'] = $this->db->get('employers');
		$this->db->where('recruiter_username', $this->session->userdata('r_username'));
		$data['package_type'] = $this->db->get('recruiter_plan');
		$data['toprecruit'] = $this->db->get('toprecruit');
		$this->db->where('r_username', $this->session->userdata('r_username'));
		$getest = $this->db->get('employers');
		foreach($getest->result() as $testmony)
		{
			$theuser_id = $testmony->employer_id;

		$this->db->where('username', $this->session->userdata('r_username'));
		$this->db->where('username_id', $theuser_id);
		$data['testquery'] = $this->db->get('testimony');
		}

		return $data;
	}

	public function get_recruiters_test_insert()
	{	$this->db->where('r_username', $this->session->userdata('r_username'));
		$gettest = $this->db->get('employers');
		foreach($gettest->result() as $testing)
		{
			$thesurname = $testing->org_rep_surname;
			$thefirstname = $testing->org_rep_firstname;
			$thename = $thesurname.' '.$thefirstname;
			$theid = $testing->employer_id;
			$thepicture = $testing->org_logo;
			$theorg = $testing->org_name;

		$recruiters_test_insert = array(
			'company_name' => $theorg,
			'body' => $this->input->post('body'),
			'name' => $thename,
			'photo' => $thepicture,
			'username' => $this->session->userdata('r_username'),
			'username_id' => $theid,
			'date' => date('Y-m-d')
			);

		$insert = $this->db->insert('testimony', $recruiters_test_insert);
		return $insert;
		}
	}

	public function get_recruiters_test_update()
	{
		$this->db->where('r_username', $this->session->userdata('r_username'));
		$gettest = $this->db->get('employers');
		foreach($gettest->result() as $testing)
		{
			$thesurname = $testing->org_rep_surname;
			$thefirstname = $testing->org_rep_firstname;
			$thename = $thesurname.' '.$thefirstname;
			$theid = $testing->employer_id;
			$thepicture = $testing->org_logo;
			$theorg = $testing->org_name;

		$recruiters_test_update = array(
			'company_name' => $theorg,
			'body' => $this->input->post('body'),
			'name' => $thename,
			'photo' => $thepicture,
			'username' => $this->session->userdata('r_username'),
			'username_id' => $theid,
			'date' => date('Y-m-d')
			);

		$this->db->where('username', $this->session->userdata('username'));
		$this->db->where('username_id', $theid);
		$insert = $this->db->update('testimony', $recruiters_test_update);
		return $insert;
		}
	}

	public function get_recruiters_contact_insert()
	{
		$recruiters_contact_insert = array(
			'org_name' => $this->input->post('org_name'),
			'employer_type' => $this->input->post('employer_type'),			
			'org_industry' => $this->input->post('org_industry'),
			'no_of_emp' => $this->input->post('no_of_emp'),
			'org_rep_surname' => $this->input->post('org_rep_surname'),
			'org_rep_firstname' => $this->input->post('org_rep_firstname'),
			'employer_position' => $this->input->post('employer_position'),
			'org_rep_contact_no' => $this->input->post('org_rep_contact_no'),
			'org_address' => $this->input->post('org_address'),
			'org_location' => $this->input->post('org_location'),
			'email' => $this->input->post('email'),
			'org_website' => $this->input->post('org_website')			
			);

		$this->db->where('r_username', $this->session->userdata('r_username'));
		$insert = $this->db->update('employers', $recruiters_contact_insert);
		return $insert;
	}

	public function get_recruiters_password_insert()
	{
		$recruiters_password_insert = array(
			'password' => md5($this->input->post('password'))		
			);

		$this->db->where('r_username', $this->session->userdata('r_username'));
		$insert = $this->db->update('employers', $recruiters_password_insert);
		return $insert;
	}


	public function get_recruiters_desc_insert()
	{	
		$file_data = $this->upload->data();
		if($file_data['file_name'] == '')
		{
			$dlogo = $this->input->post('org_logo');
		}else if($file_data['file_name'] != '')
		{
			$dlogo = $file_data['file_name'];
		}

		$recruiters_desc_insert = array(
			'org_logo' =>  $dlogo,
			'org_description' => $this->input->post('org_description')			
			);

		$this->db->where('r_username', $this->session->userdata('r_username'));
		$insert = $this->db->update('employers', $recruiters_desc_insert);
		return $insert;
	}

	public function get_recruiters_optout()
	{	
		$this->db->where('recruiter_username', $this->session->userdata('r_username'));
		$delete = $this->db->delete('recruiter_plan');
		return $delete;
	}

} 
