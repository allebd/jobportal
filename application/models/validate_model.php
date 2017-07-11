<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Validate_model extends CI_Model {

	public function __construct()
	{
		parent::__construct();

	}

	public function validate()
	{
		$this->db->where('email', $this->input->post('username'));
		$this->db->where('password', md5($this->input->post('password')));
		$this->db->or_where('username', $this->input->post('username'));
		$this->db->where('password', md5($this->input->post('password')));
		$query = $this->db->get('users');

		if($query->num_rows == 1)
		{
			return true;
		}
	}


	public function validate_email()
	{
		$this->db->where('email', $this->input->post('email'));
		$query = $this->db->get('users');

		if($query->num_rows == 1)
		{
			return true;
		}
	}

	public function r_validate_email()
	{
		$this->db->where('email', $this->input->post('email'));
		$query = $this->db->get('employers');

		if($query->num_rows == 1)
		{
			return true;
		}
	}

	public function r_validate()
	{
		$this->db->where('email', $this->input->post('r_username'));
		$this->db->where('password', md5($this->input->post('password')));
		$this->db->or_where('r_username', $this->input->post('r_username'));
		$this->db->where('password', md5($this->input->post('password')));
		$query = $this->db->get('employers');

		if($query->num_rows == 1)
		{
			return true;
		}
	}

	public function a_validate()
	{
		$this->db->where('admin_username', $this->input->post('admin_username'));
		$this->db->where('admin_password', md5($this->input->post('admin_password')));
		$query = $this->db->get('admin');

		if($query->num_rows == 1)
		{
			return true;
		}
	}

	public function create_candidate()
	{
			$fname = $this->input->post('firstname');
			$sname = $this->input->post('surname');
			$username = $this->input->post('username');
			$password = $this->input->post('password');
			$email = $this->input->post('email');

			$this->db->where('account_type','applicant');
			$welcome = $this->db->get('welcome_message');
			foreach($welcome->result() as $wrows)
			{
			$subject = $wrows->subject;
			$message = $wrows->welcome_message. "\n\n***Login Details***\n\n Username: ".$username."\n Password: ".$password."\n\n" .$wrows->signature;

			$this->load->library('email');
			$this->email->set_newline("\r\n");

			$this->email->from('info@mpsconsults.com', 'MPS Consults');
			$this->email->to($email, $fname);
			$this->email->subject($subject);
			$this->email->message($message);
			
			$create['sending'] = $this->email->send();
			}

			//For mps registration alert
			$thesubject = 'New Applicant';
			$themessage = "Dear MPS, \n\nA new applicant has registered, below is the applicant's details: \n\n Name: ".$sname." ".$fname."\nEmail: ".$email."\n\n Thanks, \n Admin";

			$this->load->library('email');
			$this->email->set_newline("\r\n");

			$this->email->from('ennybells@hotmail.com', 'MPS Consults Administrator');
			$this->email->to('info@mpsconsults.com');
			$this->email->subject($thesubject);
			$this->email->message($themessage);
			
			$create['thesending'] = $this->email->send();
			//End of mps registration alert

			$new_candidate_insert_data = array(
				'firstname' => $this->input->post('firstname'),
				'surname' => $this->input->post('surname'),
				'email' => $this->input->post('email'),
				'username' => $this->input->post('username'),
				'password' => md5($this->input->post('password')),
				'profile_photo' => 'profile-pic.jpg'
			);

			$create['insert'] = $this->db->insert('users', $new_candidate_insert_data);			
		return $create;
	}

	public function create_recruiter()
	{	
			$fname = $this->input->post('org_rep_firstname');
			$sname = $this->input->post('org_rep_surname');
			$employer = $this->input->post('employer_type');
			$orgname = $this->input->post('org_name');
			$username = $this->input->post('r_username');
			$password = $this->input->post('password');
			$email = $this->input->post('email');

			$this->db->where('account_type','recruiter');
			$awelcome = $this->db->get('welcome_message');
			foreach($awelcome->result() as $arrows)
			{
			$subject = $arrows->subject;
			$message = $arrows->welcome_message. "\n\n***Login Details***\n\n Username: ".$username."\n Password: ".$password."\n\n" .$arrows->signature;

			$this->load->library('email');
			$this->email->set_newline("\r\n");

			$this->email->from('info@mpsconsults.com', 'MPS Consults');
			$this->email->to($email);
			$this->email->subject($subject);
			$this->email->message($message);
			
			$create['sending'] = $this->email->send();
			}

			//For mps registration alert
			$thesubject = 'New Recruiter';
			$themessage = "Dear MPS, \n\nA new recruiter has registered, below is the recruiter's details: \n\n  Organization Name: ".$orgname."\n  Employer Type: ".$employer."\n  Name: ".$sname." ".$fname."\n  Email: ".$email."\n\n Thanks, \n Admin";

			$this->load->library('email');
			$this->email->set_newline("\r\n");

			$this->email->from('ennybells@hotmail.com', 'MPS Consults Administrator');
			$this->email->to('info@mpsconsults.com');
			$this->email->subject($thesubject);
			$this->email->message($themessage);
			
			$create['thesending'] = $this->email->send();
			//End of mps registration alert

			$new_recruiter_insert_data = array(
				'org_rep_firstname' => $this->input->post('org_rep_firstname'),
				'org_rep_surname' => $this->input->post('org_rep_surname'),
				'org_name' => $this->input->post('org_name'),
				'employer_type' => $this->input->post('employer_type'),
				'email' => $this->input->post('email'),
				'r_username' => $this->input->post('r_username'),
				'password' => md5($this->input->post('password')),
				'status' => 'N'
				);

			$create['insert'] = $this->db->insert('employers', $new_recruiter_insert_data);					
		return $create;			
	}
}