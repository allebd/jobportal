<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Profile_model extends CI_Model {

	public function __construct()
	{
		parent::__construct();

	}

	public function get_post()
	{
		$data['title'] = 'My profile - MPS Consults';	
		$data['page_title'] = '';	
		$data['skills'] = $this->db->get('skills');
		$this->db->where('username', $this->session->userdata('username'));
		$data['query'] = $this->db->get('users');
		$this->db->where('username', $this->session->userdata('username'));
		$data['workquery']= $this->db->get('work_experience');
		$this->db->where('work_id', $this->uri->segment(3));
		$data['workeditquery']= $this->db->get('work_experience');
		$this->db->where('username', $this->session->userdata('username'));
		$data['eduquery']= $this->db->get('education_history');
		$this->db->where('education_id', $this->uri->segment(3));
		$data['edueditquery']= $this->db->get('education_history');
		$this->db->where('username', $this->session->userdata('username'));
		$data['certquery']= $this->db->get('certification');
		$this->db->where('certificate_id', $this->uri->segment(3));
		$data['certeditquery']= $this->db->get('certification');
		$this->db->where('username', $this->session->userdata('username'));
		$getest = $this->db->get('users');
		foreach($getest->result() as $testmony)
		{
			$theuser_id = $testmony->user_id;

		$this->db->where('username', $this->session->userdata('username'));
		$this->db->where('username_id', $theuser_id);
		$data['testquery'] = $this->db->get('testimony');
		}

		return $data;
	}

	public function get_candidates_contact_insert()
	{
		$candidates_contact_insert = array(
			'firstname' => $this->input->post('firstname'),
			'surname' => $this->input->post('surname'),
			'email' => $this->input->post('email'),
			'mobile_number' => $this->input->post('mobile_number'),
			'contact_address' => $this->input->post('contact_address'),
			'location' => $this->input->post('location'),
			'gender' => $this->input->post('gender'),
			'dob' => $this->input->post('dob'),
			'language' => $this->input->post('language')
			);

		$this->db->where('username', $this->session->userdata('username'));
		$insert = $this->db->update('users', $candidates_contact_insert);
		return $insert;
	}

	public function get_password_insert()
	{
		$password_insert = array(
			'password' => md5($this->input->post('password'))		
			);

		$this->db->where('username', $this->session->userdata('username'));
		$insert = $this->db->update('users', $password_insert);
		return $insert;
	}

	public function get_candidates_test_insert()
	{	$this->db->where('username', $this->session->userdata('username'));
		$gettest = $this->db->get('users');
		foreach($gettest->result() as $testing)
		{
			$thesurname = $testing->surname;
			$thefirstname = $testing->firstname;
			$thename = $thesurname.' '.$thefirstname;
			$theid = $testing->user_id;
			if($testing->profile_photo == 'profile-pic.jpg')
			{
				$thepicture = '';
			}else{
			$thepicture = $testing->profile_photo;
			}		

		$candidates_test_insert = array(
			'company_name' => $this->input->post('company_name'),
			'body' => $this->input->post('body'),
			'name' => $thename,
			'photo' => $thepicture,
			'username' => $this->session->userdata('username'),
			'username_id' => $theid,
			'date' => date('Y-m-d')
			);

		$insert = $this->db->insert('testimony', $candidates_test_insert);
		return $insert;
		}
	}

	public function get_candidates_test_update()
	{
		$this->db->where('username', $this->session->userdata('username'));
		$gettest = $this->db->get('users');
		foreach($gettest->result() as $testing)
		{
			$thesurname = $testing->surname;
			$thefirstname = $testing->firstname;
			$thename = $thesurname.' '.$thefirstname;
			$theid = $testing->user_id;
			if($testing->profile_photo == 'profile-pic.jpg')
			{
				$thepicture = '';
			}else{
			$thepicture = $testing->profile_photo;
			}	
		

		$candidates_test_update = array(
			'company_name' => $this->input->post('company_name'),
			'body' => $this->input->post('body'),
			'name' => $thename,
			'photo' => $thepicture,
			'username' => $this->session->userdata('username'),
			'username_id' => $theid,
			'date' => date('Y-m-d')
			);

		$this->db->where('username', $this->session->userdata('username'));
		$this->db->where('username_id', $theid);
		$insert = $this->db->update('testimony', $candidates_test_update);
		return $insert;
		}
	}

	public function get_candidates_career_insert()
	{
		$theskill = $this->input->post('skill');
		$theskill = str_replace('[', '', $theskill);
		$theskill = str_replace(']', '', $theskill);
		$theskill = str_replace('"', '', $theskill);

		$candidates_career_insert = array(
			'desired_job_type' => $this->input->post('desired_job_type'),
			'years_of_exp' => $this->input->post('years_of_exp'),
			'area_of_special' => $this->input->post('area_of_special'),
			'relocate' => $this->input->post('relocate'),
			'c_work_industry' => $this->input->post('c_work_industry'),
			'most_r_employer' => $this->input->post('most_r_employer'),
			'highest_education' => $this->input->post('highest_education'),
			'skill' => $theskill,
			'expected_salary' => $this->input->post('expected_salary')
			);

		$this->db->where('username', $this->session->userdata('username'));
		$insert = $this->db->update('users', $candidates_career_insert);
		return $insert;
	}

	public function get_candidates_work_record_insert()
	{
		$candidates_career_insert = array(
			'username' =>  $this->session->userdata('username'),
			'work_name' => $this->input->post('work_name'),
			'work_from' => $this->input->post('work_from'),
			'work_to' => $this->input->post('work_to'),
			'work_type' => $this->input->post('work_type'),
			'work_position' => $this->input->post('work_position'),
			'work_industry' => $this->input->post('work_industry'),
			'work_description' => $this->input->post('work_description')
			);

		$insert = $this->db->insert('work_experience', $candidates_career_insert);
		return $insert;
	}

	public function get_candidates_work_edit_update()
	{
		$work_id = $_POST['work_id'];
		$candidates_career_update = array(
			'username' =>  $this->session->userdata('username'),
			'work_name' => $this->input->post('wname'),
			'work_from' => $this->input->post('w_from'),
			'work_to' => $this->input->post('w_to'),
			'work_type' => $this->input->post('w_type'),
			'work_position' => $this->input->post('w_position'),
			'work_industry' => $this->input->post('w_industry'),
			'work_description' => $this->input->post('w_description')
			);

		$this->db->where('work_id', $work_id); 
		$update = $this->db->update('work_experience', $candidates_career_update);
		return $update;
	}
	
	public function get_candidates_work_delete()
	{
		$this->db->where('work_id', $this->uri->segment(3));
		$data['query']= $this->db->delete('work_experience');
		return $data;
	}

	public function get_candidates_edu_record_insert()
	{
		$candidates_edu_insert = array(
			'username' =>  $this->session->userdata('username'),
			'education_name' => $this->input->post('education_name'),
			'education_type' => $this->input->post('education_type'),
			'degree_class' => $this->input->post('degree_class'),
			'degree_obtained' => $this->input->post('degree_obtained'),
			'degree_from' => $this->input->post('degree_from'),
			'degree_to' => $this->input->post('degree_to')
			);

		$insert = $this->db->insert('education_history', $candidates_edu_insert);
		return $insert;
	}

	public function get_candidates_edu_edit_update()
	{
		$edu_id = $_POST['edu_id'];
		$candidates_edu_update = array(
			'username' =>  $this->session->userdata('username'),
			'education_name' => $this->input->post('e_name'),
			'education_type' => $this->input->post('e_type'),
			'degree_class' => $this->input->post('d_class'),
			'degree_obtained' => $this->input->post('d_obtained'),
			'degree_from' => $this->input->post('d_from'),
			'degree_to' => $this->input->post('d_to')
			);

		$this->db->where('education_id', $edu_id); 
		$update = $this->db->update('education_history', $candidates_edu_update);
		return $update;
	}
	
	public function get_candidates_edu_delete()
	{
		$this->db->where('education_id', $this->uri->segment(3));
		$data['query']= $this->db->delete('education_history');
		return $data;
	}

	public function get_candidates_cert_record_insert()
	{
		$candidates_cert_insert = array(
			'username' =>  $this->session->userdata('username'),
			'certificate_title' => $this->input->post('certificate_title'),
			'certificate_date' => $this->input->post('certificate_date')
			);

		$insert = $this->db->insert('certification', $candidates_cert_insert);
		return $insert;
	}

	public function get_candidates_cert_edit_update()
	{
		$cert_id = $_POST['cert_id'];
		$candidates_cert_update = array(
			'username' =>  $this->session->userdata('username'),
			'certificate_title' => $this->input->post('c_title'),
			'certificate_date' => $this->input->post('c_date')
			);

		$this->db->where('certificate_id', $cert_id); 
		$update = $this->db->update('certification', $candidates_cert_update);
		return $update;
	}
	
	public function get_candidates_cert_delete()
	{
		$this->db->where('certificate_id', $this->uri->segment(3));
		$data['query']= $this->db->delete('certification');
		return $data;
	}

	public function get_candidates_cv_record_insert()
	{	
		$file_data = $this->upload->data();
		$candidates_cv_insert = array(
			'cv_upload' =>  $file_data['file_name'],
			'cv_upload_time' => date('Y-m-d')		
			);

		$this->db->where('username', $this->session->userdata('username'));
		$insert = $this->db->update('users', $candidates_cv_insert);
		return $insert;
	}

	public function get_candidates_pic_insert()
	{	
		$file_data = $this->upload->data();
		$candidates_pic_insert = array(
			'profile_photo' =>  $file_data['file_name']
			);

		$this->db->where('username', $this->session->userdata('username'));
		$insert = $this->db->update('users', $candidates_pic_insert);
		return $insert;
	}

	public function get_candidates_cv_download()
	{	
		$thepath = base_url().'uploads/'.$this->uri->segment(3);
		$data = file_get_contents($thepath); // Read the file's contents
		$name = $this->uri->segment(3);

		return force_download($name, $data);				
	}

} 
