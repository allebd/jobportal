<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Jobs_recruit_model extends CI_Model {

	public function __construct()
	{
		parent::__construct();

	}

	// Jobs title
	public function get_post()
	{
		$data['title'] = 'Jobs - MPS Consults';
		$data['page_title'] = 'Jobs';
		$this->db->where('r_username', $this->session->userdata('r_username'));
		$data['query'] = $this->db->get('employers');
		$this->db->select('*');		
		$this->db->from('application');
		$this->db->where('job_id', $this->uri->segment(3));
		$this->db->join('users', 'users.username = application.candidate_username');
		$data['jobcandidatequery'] = $this->db->get();
		$this->db->select('*');		
		$this->db->from('application');
		$this->db->where('job_id', $this->uri->segment(3));
		$this->db->where('choose', 1);
		$this->db->join('users', 'users.username = application.candidate_username');
		$data['jobshortlistquery'] = $this->db->get();
		$this->db->where('employer_user', $this->session->userdata('r_username'));
		// $this->db->where('suspend', 0);
		$this->db->order_by("job_id", "desc");
		$data['jobquery'] = $this->db->get('job');
		$this->db->where('employer_user', $this->session->userdata('r_username'));
		$this->db->where('job_id', $this->uri->segment(3));
		$this->db->where('suspend', 0);
		$data['jobrecruitselectquery'] = $this->db->get('job');
		$this->db->where('employer_user', $this->session->userdata('r_username'));
		$this->db->where('suspend', 1);
		$this->db->order_by("job_id", "desc");
		$data['jobsuspendquery'] = $this->db->get('job');
		$this->db->where('job_id', $this->uri->segment(3));
		$data['jobeditquery'] = $this->db->get('job');
		$data['candidatesearchquery'] = $this->db->get('users');		
		$data['location'] = $this->db->get('states');
		$data['industry'] = $this->db->get('industry');
		$data['job_type'] = $this->db->get('job_type');
		$data['salary'] = $this->db->get('salary');
		$data['highest_education'] = $this->db->get('highest_education');
		$data['specialization'] = $this->db->get('specialization');
		$data['year_experience'] = $this->db->get('year_experience');		
		$data['skills'] = $this->db->get('skills');
		$this->db->where('username', $this->session->userdata('r_username'));
		$data['invited_apply'] = $this->db->get('invite_apply');
		$this->db->where('saved_username', $this->session->userdata('r_username'));
		$data['save_search'] = $this->db->get('saved_search');
		$this->db->select('*');		
		$this->db->from('downloaded_profile');
		$this->db->where('download_username', $this->session->userdata('r_username'));
		$this->db->join('users', 'users.user_id = downloaded_profile.candidate_id');
		$data['candidatedownloadquery'] = $this->db->get();
		$this->db->select('*');		
		$this->db->from('saved_search');
		$this->db->where('saved_username', $this->session->userdata('r_username'));
		$this->db->join('users', 'users.user_id = saved_search.candidate_id');
		$data['candidatesavesquery'] = $this->db->get();

		return $data;
	}

	
	public function get_jobs_insert()
	{	
		$theskill = $this->input->post('job_skills');
		$theskill = str_replace('[', '', $theskill);
		$theskill = str_replace(']', '', $theskill);
		$theskill = str_replace('"', '', $theskill);

		$file_data = $this->upload->data();
		if($file_data['file_name'] == '')
		{
			$dlogo = $this->input->post('company_logo');
		}else if($file_data['file_name'] != '')
		{
			$dlogo = $file_data['file_name'];
		}

		$this->db->where('r_username', $this->session->userdata('r_username'));
		$theemployers = $this->db->get('employers');
		foreach($theemployers->result() as $emprows)
		{	
			$fname = $emprows->org_rep_firstname;
			$sname = $emprows->org_rep_surname;
			$companyname = $this->input->post('company_name');
			$jobposition = $this->input->post('job_position');
			$joblocation = $this->input->post('job_location');

			//For mps registration alert
			$thesubject = 'New Job Posting';
			$themessage = "Dear MPS, \n\nA new job has been posted by ".$sname." ".$fname.", below is the job's details: \n\n Company Name: ".$companyname."\nJob Position: ".$jobposition."\nJob Location: ".$joblocation."\n\n Thanks, \n Admin";

			$this->load->library('email');
			$this->email->set_newline("\r\n");

			$this->email->from('ennybells@hotmail.com', 'MPS Consults Administrator');
			$this->email->to('info@mpsconsults.com');
			$this->email->subject($thesubject);
			$this->email->message($themessage);
			
			$insert['thesending'] = $this->email->send();
			//End of mps registration alert
		}
		
		$jobs_insert = array(
			'employer_user' =>  $this->session->userdata('r_username'),
			'company_logo' => $dlogo,
			'company_name' => $this->input->post('company_name'),
			'company_industry' => $this->input->post('company_industry'),	
			'job_position' => $this->input->post('job_position'),
			'job_desc' => $this->input->post('job_desc'),			
			'work_exp' => $this->input->post('work_exp'),
			'area_of_special' => $this->input->post('area_of_special'),
			'job_skills' => $theskill,
			'job_type' => $this->input->post('job_type'),
			'education_qualification' => $this->input->post('education_qualification'),
			'job_gender' => $this->input->post('job_gender'),
			'salary_level' => $this->input->post('salary_level'),
			'job_location' => $this->input->post('job_location'),			
			'job_country' => $this->input->post('job_country'),
			'no_of_slot' => $this->input->post('no_of_slot'),
			'job_start_date' => $this->input->post('job_start_date'),
			'job_end_date' => $this->input->post('job_end_date'),
			'job_end_date_conv' => strtotime($this->input->post('job_end_date')),
			'job_post_date' => date('Y-m-d'),
			'anonymous' => $this->input->post('anonymous')			
		);
		
		$insert['jobinsert'] = $this->db->insert('job', $jobs_insert);

		$this->db->select('posting');		
		$this->db->from('recruiter_plan');
		$this->db->where('recruiter_username',$this->session->userdata('r_username'));
		$thecounter = $this->db->get();
		foreach($thecounter->result() as $rom){
			$thecounter = $rom->posting - 1;

			$counting_update = array('posting' => $thecounter);

		$this->db->where('recruiter_username',$this->session->userdata('r_username'));
		$insert['r_plan'] = $this->db->update('recruiter_plan', $counting_update);
		}
		return $insert;
	}


	// Job Update

	public function get_jobs_edit_update()
	{	
		$theskill = $this->input->post('j_skills');
		$theskill = str_replace('[', '', $theskill);
		$theskill = str_replace(']', '', $theskill);
		$theskill = str_replace('"', '', $theskill);

		$file_data = $this->upload->data();
		$job_id = $_POST['j_id'];

		if($file_data['file_name'] == '')
		{
			$dlogo = $this->input->post('company_logo');
		}else if($file_data['file_name'] != '')
		{
			$dlogo = $file_data['file_name'];
		}

		$job_edit_update = array(
			'employer_user' =>  $this->session->userdata('r_username'),
			'company_logo' => $dlogo,
			'company_name' => $this->input->post('c_name'),
			'company_industry' => $this->input->post('c_industry'),	
			'job_position' => $this->input->post('j_position'),
			'job_desc' => $this->input->post('j_desc'),			
			'work_exp' => $this->input->post('w_exp'),
			'area_of_special' => $this->input->post('area_of_spec'),
			'job_skills' => $theskill,
			'job_type' => $this->input->post('j_type'),
			'education_qualification' => $this->input->post('e_qualification'),
			'job_gender' => $this->input->post('j_gender'),
			'salary_level' => $this->input->post('s_level'),
			'job_location' => $this->input->post('j_location'),			
			'job_country' => $this->input->post('j_country'),
			'no_of_slot' => $this->input->post('no_f_slot'),
			'job_start_date' => $this->input->post('j_start_date'),
			'job_end_date' => $this->input->post('j_end_date'),
			'job_end_date_conv' => strtotime($this->input->post('j_end_date')),
			'job_post_date' => date('Y-m-d'),			
			'anonymous' => $this->input->post('anonymous')		
			);
		
		$this->db->where('job_id', $job_id); 
		$insert = $this->db->update('job', $job_edit_update);
		return $insert;
	}

	//Suspend Job
	public function get_jobs_suspend()
	{	
		$job_suspend_update = array(
			'Suspend' =>  1
			);

		$this->db->where('job_id', $this->uri->segment(3)); 
		$update = $this->db->update('job', $job_suspend_update);
		return $update;
	}

	//Unsuspend Job
	public function get_jobs_unsuspend()
	{	
		$job_unsuspend_update = array(
			'Suspend' =>  0
			);

		$this->db->where('job_id', $this->uri->segment(3)); 
		$update = $this->db->update('job', $job_unsuspend_update);
		return $update;
	}

	// Delete Job

	public function get_jobs_delete()
	{
		$this->db->where('job_id', $this->uri->segment(3));
		$data['query']= $this->db->delete('job');
		return $data;
	}


	// Post Similar Job

	public function get_jobs_similar()
	{
		$this->db->where('job_id', $this->uri->segment(3));
		$similar = $this->db->get('job');
		foreach($similar->result() as $srow)
		{
			$dlogo = $srow->company_logo;
			$c_name = $srow->company_name;
			$c_industry = $srow->company_industry;
			$j_position = $srow->job_position;
			$j_desc = $srow->job_desc; 		
			$w_exp = $srow->work_exp;
			$area_of_spec = $srow->area_of_special;
			$theskill = $srow->job_skills;
			$j_type = $srow->job_type;
			$e_qualification = $srow->education_qualification;
			$j_gender = $srow->job_gender;
			$s_level = $srow->salary_level;
			$j_location = $srow->job_location;		
			$j_country = $srow->job_country;
			$no_f_slot = $srow->no_of_slot;
			$j_start_date = $srow->job_start_date;
			$j_end_date = $srow->job_end_date;
			$anonymous = $srow->anonymous;

			$this->db->where('r_username', $this->session->userdata('r_username'));
			$theemployers = $this->db->get('employers');
			foreach($theemployers->result() as $emprows)
			{	
				$fname = $emprows->org_rep_firstname;
				$sname = $emprows->org_rep_surname;
				$companyname = $srow->company_name;
				$jobposition = $srow->job_position;
				$joblocation = $srow->job_location;

				//For mps registration alert
				$thesubject = 'New Job Posting';
				$themessage = "Dear MPS, \n\nA new job has been posted by ".$sname." ".$fname.", below is the job's details: \n\n Company Name: ".$companyname."\nJob Position: ".$jobposition."\nJob Location: ".$joblocation."\n\n Thanks, \n Admin";

				$this->load->library('email');
				$this->email->set_newline("\r\n");

				$this->email->from('ennybells@hotmail.com', 'MPS Consults Administrator');
				$this->email->to('info@mpsconsults.com');
				$this->email->subject($thesubject);
				$this->email->message($themessage);
				
				$insert['thesending'] = $this->email->send();
				//End of mps registration alert
			}

			$job_similar_insert = array(
			'employer_user' =>  $this->session->userdata('r_username'),
			'company_logo' => $dlogo,
			'company_name' => $c_name,
			'company_industry' => $c_industry,	
			'job_position' => $j_position,
			'job_desc' => $j_desc,			
			'work_exp' => $w_exp,
			'area_of_special' => $area_of_spec,
			'job_skills' => $theskill,
			'job_type' => $j_type,
			'education_qualification' => $e_qualification,
			'job_gender' => $j_gender,
			'salary_level' => $s_level,
			'job_location' => $j_location,			
			'job_country' => $j_country,
			'no_of_slot' => $no_f_slot,
			'job_start_date' => $j_start_date,
			'job_end_date' => $j_end_date,
			'job_post_date' => date('Y-m-d'),
			'job_end_date_conv' => strtotime($j_end_date),			
			'anonymous' => $anonymous		
			);
		
		$insert = $this->db->insert('job', $job_similar_insert);
		return $insert;
		}
	}

	//Shortlist Job Candidate
	public function get_job_shortlist()
	{	
		$job_shortlist_update = array(
			'choose' =>  1
			);

		$this->db->where('application_id', $this->uri->segment(3)); 
		$update = $this->db->update('application', $job_shortlist_update);
		return $update;
	}


	//Unshortlisted Job Candidate
	public function get_job_unshortlisted()
	{	
		$job_shortlist_update = array(
			'choose' =>  0
			);

		$this->db->where('application_id', $this->uri->segment(3)); 
		$update = $this->db->update('application', $job_shortlist_update);
		return $update;
	}


	//Get Candidates Invite to Apply
	public function get_jobs_invite_apply()
	{			
			$invite_apply = array(
				'username' =>  $this->session->userdata('r_username'),
				'candidate_id' => $this->uri->segment(3)
				); 
			$invited_apply = $this->db->insert('invite_apply', $invite_apply);

			return $invited_apply;
	}

	//Get Candidates Saved Search
	public function get_jobs_saved_search()
	{			
			$saved_search = array(
				'saved_username' =>  $this->session->userdata('r_username'),
				'candidate_id' => $this->uri->segment(3)
				); 
			$saved_searchy = $this->db->insert('saved_search', $saved_search);

			return $saved_searchy;
	}


	//Get Candidates Unsaved Search
	public function get_jobs_unsaved_search()
	{			
			$this->db->where('saved_username',$this->session->userdata('r_username'));
			$this->db->where('candidate_id', $this->uri->segment(3));
			$unsaved_searchy = $this->db->delete('saved_search');

			return $unsaved_searchy;
	}

	//Get Candidates CV
	public function get_job_candidates_cv_download()
	{	
		$this->db->where('download_username',$this->session->userdata('r_username'));
		$this->db->where('candidate_id',$this->uri->segment(4));
		$check_download = $this->db->get('downloaded_profile');
		if($check_download->num_rows() < 1)
		{
			$downloaded_profile = array(
				'download_username' =>  $this->session->userdata('r_username'),
				'candidate_id' => $this->uri->segment(4)
				); 
			$data['download_insert'] = $this->db->insert('downloaded_profile', $downloaded_profile);
		}

		$this->db->select('downloads');		
		$this->db->from('recruiter_plan');
		$this->db->where('recruiter_username',$this->session->userdata('r_username'));
		$thecounter = $this->db->get();
		foreach($thecounter->result() as $rom){
			$thecounter = $rom->downloads - 1;

			$counting_update = array('downloads' => $thecounter);

		$this->db->where('recruiter_username',$this->session->userdata('r_username'));
		$data['r_download'] = $this->db->update('recruiter_plan', $counting_update);
		}

		$thepath = base_url().'uploads/'.$this->uri->segment(3);
		$data = file_get_contents($thepath); // Read the file's contents
		$name = $this->uri->segment(3);

		return force_download($name, $data);				
	}

	// Search all jobs
	public function search_all() {
		if($this->input->post('areas_of_special') != '')
		{	
			$this->db->like('area_of_special', $this->input->post('areas_of_special'));
			$this->db->or_like('gender', $this->input->post('areas_of_special'));
			$this->db->or_like('skill', $this->input->post('areas_of_special'));
		}		
		if($this->input->post('work_exp') != '')
		{
			$this->db->like('years_of_exp', $this->input->post('work_exp'));
		}
		if($this->input->post('education_qualification') != '')
		{
			$this->db->like('highest_education', $this->input->post('education_qualification'));
		}
		if($this->input->post('company_industry') != '')
		{
			$this->db->like('c_work_industry', $this->input->post('company_industry'));
		}
		if($this->input->post('job_type') != '')
		{
			$this->db->like('desired_job_type', $this->input->post('job_type'));
		}
		if($this->input->post('area_of_special') != '')
		{
			$this->db->like('area_of_special', $this->input->post('area_of_special'));
		}
		if($this->input->post('salary_level') != '')
		{
			$this->db->like('expected_salary', $this->input->post('salary_level'));
		}
		if($this->input->post('job_location') != '')
		{
			$this->db->like('location', $this->input->post('job_location'));
		}	

		$data['candidatesearchingquery'] = $this->db->get('users');	
		$data['title'] = 'Candidates Profiles - MPS Consults';
		$data['page_title'] = 'Candidate Search';		
		$this->db->where('r_username', $this->session->userdata('r_username'));
		$data['query'] = $this->db->get('employers');
		$data['candidatesearchquery'] = $this->db->get('users');	
		$data['location'] = $this->db->get('states');
		$data['industry'] = $this->db->get('industry');
		$data['job_type'] = $this->db->get('job_type');
		$data['salary'] = $this->db->get('salary');
		$data['highest_education'] = $this->db->get('highest_education');
		$data['specialization'] = $this->db->get('specialization');
		$data['year_experience'] = $this->db->get('year_experience');
		$this->db->where('username', $this->session->userdata('r_username'));
		$data['invited_apply'] = $this->db->get('invite_apply');
		$this->db->where('username', $this->session->userdata('r_username'));
		$data['save_search'] = $this->db->get('saved_search');

		return $data;		
	}
}
	