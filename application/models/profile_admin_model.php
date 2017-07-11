<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Profile_admin_model extends CI_Model {

	public function __construct()
	{
		parent::__construct();
	}

	public function get_post()
	{
		$data['title'] = 'Admin profile - MPS Consults';	
		$data['page_title'] = 'Administrator';	
		$this->db->where('admin_username', $this->session->userdata('admin_username'));
		$data['query'] = $this->db->get('admin');		
		$this->db->where_not_in('admin_username', $this->session->userdata('admin_username'));
		$data['adminquery'] = $this->db->get('admin');
		$data['admindisabledquery'] = $this->db->get('admin_disable');
		$this->db->order_by("name", "asc");
		$data['industry'] = $this->db->get('industry');
		$this->db->order_by("name", "asc");
		$data['job_type'] = $this->db->get('job_type');
		$this->db->order_by("name", "asc");
		$data['skills'] = $this->db->get('skills');
		$this->db->order_by("name", "asc");
		$data['highest_education'] = $this->db->get('highest_education');
		$this->db->order_by("name", "asc");
		$data['specialization'] = $this->db->get('specialization');
		$data['salary'] = $this->db->get('salary');
		$data['no_of_emp'] = $this->db->get('no_of_emp');
		$this->db->order_by("name", "asc");
		$data['year_experience'] = $this->db->get('year_experience');
		$data['article'] = $this->db->get('article');
		$data['slide'] = $this->db->get('slide');
		$data['testimony'] = $this->db->get('testimony');
		$data['toprecruit'] = $this->db->get('toprecruit');
		$data['team'] = $this->db->get('team');
		$data['board'] = $this->db->get('board');
		$data['mpscareers'] = $this->db->get('mpscareers');
		$data['trainings'] = $this->db->get('trainings');
		$data['trainings_overview'] = $this->db->get('trainings_overview');
		$data['board_overview'] = $this->db->get('board_overview');
		$data['careers'] = $this->db->get('careers');
		$data['package'] = $this->db->get('packages');
		$data['welcomemsg'] = $this->db->get('welcome_message');
		$data['passwordmsg'] = $this->db->get('password_reset');
		$data['privacyandterms'] = $this->db->get('mps_extra');
		$this->db->where('name', 'createcv');
		$data['createcv'] = $this->db->get('applicantservices');
		$this->db->where('name', 'prep');
		$data['prep'] = $this->db->get('applicantservices');
		$this->db->where('name', 'local_phone');
		$data['contact_local'] = $this->db->get('contact');
		$this->db->where('name', 'inter_phone');
		$data['contact_inter'] = $this->db->get('contact');
		$this->db->where('name', 'address');
		$data['contact_add'] = $this->db->get('contact');
		$this->db->where('name', 'facebook');
		$data['facebook'] = $this->db->get('social');
		$this->db->where('name', 'google');
		$data['google'] = $this->db->get('social');
		$this->db->where('name', 'twitter');
		$data['twitter'] = $this->db->get('social');
		$this->db->where('name', 'linkedin');
		$data['linkedin'] = $this->db->get('social');
		$this->db->where('name', 'skype');
		$data['skype'] = $this->db->get('social');
		$this->db->where('id', $this->uri->segment(3));
		$data['specialization_edit'] = $this->db->get('specialization');
		$this->db->where('id', $this->uri->segment(3));
		$data['industry_edit'] = $this->db->get('industry');
		$this->db->where('id', $this->uri->segment(3));
		$data['job_type_edit'] = $this->db->get('job_type');
		$this->db->where('id', $this->uri->segment(3));
		$data['skills_edit'] = $this->db->get('skills');
		$this->db->where('id', $this->uri->segment(3));
		$data['highest_education_edit'] = $this->db->get('highest_education');
		$this->db->where('id', $this->uri->segment(3));
		$data['salary_edit'] = $this->db->get('salary');
		$this->db->where('id', $this->uri->segment(3));
		$data['no_of_emp_edit'] = $this->db->get('no_of_emp');
		$this->db->where('id', $this->uri->segment(3));
		$data['year_experience_edit'] = $this->db->get('year_experience');
		$this->db->where('id', $this->uri->segment(3));
		$this->db->where('name','createcv');
		$data['createcv_edit'] = $this->db->get('applicantservices');
		$this->db->where('contact_id', $this->uri->segment(3));
		$this->db->where('name', 'local_phone');
		$data['local_edit'] = $this->db->get('contact');
		$this->db->where('contact_id', $this->uri->segment(3));
		$this->db->where('name', 'inter_phone');
		$data['inter_edit'] = $this->db->get('contact');
		$this->db->where('contact_id', $this->uri->segment(3));
		$this->db->where('name', 'address');
		$data['add_edit'] = $this->db->get('contact');
		$this->db->where('id', $this->uri->segment(3));
		$this->db->where('name', 'facebook');
		$data['facebook_edit'] = $this->db->get('social');
		$this->db->where('id', $this->uri->segment(3));
		$this->db->where('name', 'google');
		$data['google_edit'] = $this->db->get('social');
		$this->db->where('id', $this->uri->segment(3));
		$this->db->where('name', 'twitter');
		$data['twitter_edit'] = $this->db->get('social');
		$this->db->where('id', $this->uri->segment(3));
		$this->db->where('name', 'linkedin');
		$data['linkedin_edit'] = $this->db->get('social');
		$this->db->where('id', $this->uri->segment(3));
		$this->db->where('name', 'skype');
		$data['skype_edit'] = $this->db->get('social');
		$this->db->where('id', $this->uri->segment(3));
		$this->db->where('name','prep');
		$data['prep_edit'] = $this->db->get('applicantservices');
		$this->db->where('id', $this->uri->segment(3));
		$data['article_edit'] = $this->db->get('article');
		$this->db->where('slide_id', $this->uri->segment(3));
		$data['slide_edit'] = $this->db->get('slide');
		$this->db->where('id', $this->uri->segment(3));
		$data['testimony_edit'] = $this->db->get('testimony');
		$this->db->where('employer_id', $this->uri->segment(3));
		$data['recruiters_plan'] = $this->db->get('employers');
		$this->db->where('id', $this->uri->segment(3));
		$data['team_edit'] = $this->db->get('team');
		$this->db->where('id', $this->uri->segment(3));
		$data['board_edit'] = $this->db->get('board');
		$this->db->where('id', $this->uri->segment(3));
		$data['mpscareers_edit'] = $this->db->get('mpscareers');
		$this->db->where('t_id', $this->uri->segment(3));
		$data['trainings_edit'] = $this->db->get('trainings');
		$this->db->order_by("user_id", "desc");
		$data['candidatesearchquery'] = $this->db->get('users');
		$this->db->order_by("user_id", "desc");
		$data['candidatesearchnewquery'] = $this->db->get('users',10);
		$data['jobsearchquery'] = $this->db->get('job');
		$this->db->order_by("employer_id", "desc");
		$data['recruitersearchquery'] = $this->db->get('employers');
		$this->db->where('mpscareers_id', $this->uri->segment(3));
		$data['careerscandidatesearchquery'] = $this->db->get('careers');
		$this->db->where('package_id', $this->uri->segment(3));
		$data['package_edit'] = $this->db->get('packages');
		$this->db->where('welcome_id', $this->uri->segment(3));
		$data['welcomemsg_edit'] = $this->db->get('welcome_message');
		$this->db->where('welcome_id', $this->uri->segment(3));
		$data['passwordmsg_edit'] = $this->db->get('password_reset');
		$this->db->where('extra_id', $this->uri->segment(3));
		$data['privacyandterms_edit'] = $this->db->get('mps_extra');
		$this->db->where('id', $this->uri->segment(3));
		$data['toprecruit_edit'] = $this->db->get('toprecruit');
		$this->db->where('user_id', $this->uri->segment(3));
		$data['dquery'] = $this->db->get('users');
		$this->db->select('*');		
		$this->db->from('users');
		$this->db->where('user_id', $this->uri->segment(3));
		$this->db->join('work_experience', 'work_experience.username = users.username');
		$data['workquery']= $this->db->get();
		$this->db->select('*');		
		$this->db->from('users');
		$this->db->where('user_id', $this->uri->segment(3));
		$this->db->join('education_history', 'education_history.username = users.username');
		$data['eduquery']= $this->db->get();
		$this->db->select('*');		
		$this->db->from('users');
		$this->db->where('user_id', $this->uri->segment(3));
		$this->db->join('certification', 'certification.username = users.username');
		$data['certquery']= $this->db->get();
		$this->db->where('employer_id', $this->uri->segment(3));
		$data['rquery'] = $this->db->get('employers');
		$this->db->select('*');		
		$this->db->from('users');
		$this->db->join('interviewprep', 'interviewprep.username = users.username');
		$data['intprep']= $this->db->get();
		$this->db->select('*');		
		$this->db->from('trainings');
		$this->db->where('t_id', $this->uri->segment(3));
		$this->db->join('trainers', 'trainers.title = trainings.title');
		$data['training_applicants']= $this->db->get();
		$this->db->select('*');		
		$this->db->from('article');
		$this->db->where('id', $this->uri->segment(3));
		$this->db->join('comment', 'comment.title = article.title');
		$data['commentquery']= $this->db->get();
		
		return $data;
	}

	public function get_admin_account_insert()
	{
		$admin_account_insert = array(
			'admin_surname' => $this->input->post('admin_surname'),
			'admin_firstname' => $this->input->post('admin_firstname')
			);

		$this->db->where('admin_username', $this->session->userdata('admin_username'));
		$insert = $this->db->update('admin', $admin_account_insert);
		return $insert;
	}

	public function get_admins_insert()
	{
		$admin_account_insert = array(
			'admin_surname' => $this->input->post('admin_surname'),
			'admin_firstname' => $this->input->post('admin_firstname'),
			'admin_username' => $this->input->post('admin_username'),
			'admin_password' => md5($this->input->post('admin_password'))	
			);

		$insert = $this->db->insert('admin', $admin_account_insert);
		return $insert;
	}

	public function get_admin_password_insert()
	{
		$admin_password_insert = array(
			'admin_password' => md5($this->input->post('admin_password'))		
			);

		$this->db->where('admin_username', $this->session->userdata('admin_username'));
		$insert = $this->db->update('admin', $admin_password_insert);
		return $insert;
	}

	public function get_recruiters_descpix_insert()
	{	
		$file_data = $this->upload->data();
		
		$recruiters_desc_insert = array(
			'org_logo' =>  $file_data['file_name'],
			'org_description' => $this->input->post('org_description')			
			);

		$this->db->where('r_username', $this->session->userdata('r_username'));
		$insert = $this->db->update('employers', $recruiters_desc_insert);
		return $insert;
	}

	// Manage Admin enable, disable, and delete
	public function get_admin_delete()
	{	
		$this->db->where('admin_id', $this->uri->segment(3));
		$delete = $this->db->delete('admin');
		return $delete;
	}

	public function get_admin_disable_delete()
	{	
		$this->db->where('admin_id', $this->uri->segment(3));
		$delete = $this->db->delete('admin_disable');
		return $delete;
	}

	public function get_admin_disable()
	{	
		$this->db->where('admin_id', $this->uri->segment(3));
		$adminselect = $this->db->get('admin');
		foreach ($adminselect->result() as $select) {
			$sname = $select->admin_surname;
			$fname = $select->admin_firstname;
			$uname = $select->admin_username;
			$pass = $select->admin_password;
		}

		$insert = array(
			'admin_surname' => $sname,
			'admin_firstname' => $fname,
			'admin_username' => $uname,
			'admin_password' => $pass
			);

		$data['insert'] = $this->db->insert('admin_disable',$insert);

		$this->db->where('admin_id', $this->uri->segment(3));
		$data['delete'] = $this->db->delete('admin');
		return $data;
	}

	public function get_admin_enable()
	{	
		$this->db->where('admin_id', $this->uri->segment(3));
		$adminselect = $this->db->get('admin_disable');
		foreach ($adminselect->result() as $select) {
			$sname = $select->admin_surname;
			$fname = $select->admin_firstname;
			$uname = $select->admin_username;
			$pass = $select->admin_password;
		}

		$insert = array(
			'admin_surname' => $sname,
			'admin_firstname' => $fname,
			'admin_username' => $uname,
			'admin_password' => $pass
			);

		$data['insert'] = $this->db->insert('admin',$insert);

		$this->db->where('admin_id', $this->uri->segment(3));
		$data['delete'] = $this->db->delete('admin_disable');
		return $data;
	}

	// Manage Specialization
	public function get_spec_insert()
	{
		$spec_insert = array(
			'name' => $this->input->post('name')
			);

		$insert = $this->db->insert('specialization', $spec_insert);
		return $insert;
	}

	public function get_spec_edit_update()
	{
		$spec_update = array(
			'name' => $this->input->post('name')
			);

		$this->db->where('id', $this->input->post('id'));
		$update = $this->db->update('specialization', $spec_update);
		return $update;
	}

	public function get_spec_delete()
	{	
		$this->db->where('id', $this->uri->segment(3));
		$delete = $this->db->delete('specialization');
		return $delete;
	}

	// Manage Industry
	public function get_industry_insert()
	{
		$industry_insert = array(
			'name' => $this->input->post('name')
			);

		$insert = $this->db->insert('industry', $industry_insert);
		return $insert;
	}

	public function get_industry_edit_update()
	{
		$industry_update = array(
			'name' => $this->input->post('name')
			);

		$this->db->where('id', $this->input->post('id'));
		$update = $this->db->update('industry', $industry_update);
		return $update;
	}

	public function get_industry_delete()
	{	
		$this->db->where('id', $this->uri->segment(3));
		$delete = $this->db->delete('industry');
		return $delete;
	}

	// Manage Skills
	public function get_skills_insert()
	{
		$skills_insert = array(
			'name' => $this->input->post('name')
			);

		$insert = $this->db->insert('skills', $skills_insert);
		return $insert;
	}

	public function get_skills_edit_update()
	{
		$skills_update = array(
			'name' => $this->input->post('name')
			);

		$this->db->where('id', $this->input->post('id'));
		$update = $this->db->update('skills', $skills_update);
		return $update;
	}

	public function get_skills_delete()
	{	
		$this->db->where('id', $this->uri->segment(3));
		$delete = $this->db->delete('skills');
		return $delete;
	}

	// Manage Job Type
	public function get_jobtype_insert()
	{
		$jobtype_insert = array(
			'name' => $this->input->post('name')
			);

		$insert = $this->db->insert('job_type', $jobtype_insert);
		return $insert;
	}

	public function get_jobtype_edit_update()
	{
		$jobtype_update = array(
			'name' => $this->input->post('name')
			);

		$this->db->where('id', $this->input->post('id'));
		$update = $this->db->update('job_type', $jobtype_update);
		return $update;
	}

	public function get_jobtype_delete()
	{	
		$this->db->where('id', $this->uri->segment(3));
		$delete = $this->db->delete('job_type');
		return $delete;
	}

	// Manage Education Levels
	public function get_education_insert()
	{
		$education_insert = array(
			'name' => $this->input->post('name')
			);

		$insert = $this->db->insert('highest_education', $education_insert);
		return $insert;
	}

	public function get_education_edit_update()
	{
		$education_update = array(
			'name' => $this->input->post('name')
			);

		$this->db->where('id', $this->input->post('id'));
		$update = $this->db->update('highest_education', $education_update);
		return $update;
	}

	public function get_education_delete()
	{	
		$this->db->where('id', $this->uri->segment(3));
		$delete = $this->db->delete('highest_education');
		return $delete;
	}


	// Manage Salary Levels
	public function get_salary_insert()
	{
		$salary_insert = array(
			'name' => $this->input->post('name')
			);

		$insert = $this->db->insert('salary', $salary_insert);
		return $insert;
	}

	public function get_salary_edit_update()
	{
		$salary_update = array(
			'name' => $this->input->post('name')
			);

		$this->db->where('id', $this->input->post('id'));
		$update = $this->db->update('salary', $salary_update);
		return $update;
	}

	public function get_salary_delete()
	{	
		$this->db->where('id', $this->uri->segment(3));
		$delete = $this->db->delete('salary');
		return $delete;
	}

	// Manage Recruiters Number of Employees 
	public function get_no_of_emp_insert()
	{
		$no_of_emp_insert = array(
			'name' => $this->input->post('name')
			);

		$insert = $this->db->insert('no_of_emp', $no_of_emp_insert);
		return $insert;
	}

	public function get_no_of_emp_edit_update()
	{
		$no_of_emp_update = array(
			'name' => $this->input->post('name')
			);

		$this->db->where('id', $this->input->post('id'));
		$update = $this->db->update('no_of_emp', $no_of_emp_update);
		return $update;
	}

	public function get_no_of_emp_delete()
	{	
		$this->db->where('id', $this->uri->segment(3));
		$delete = $this->db->delete('no_of_emp');
		return $delete;
	}

	// Manage Years of Experience
	public function get_years_of_exp_insert()
	{
		$years_of_exp_insert = array(
			'name' => $this->input->post('name')
			);

		$insert = $this->db->insert('year_experience', $years_of_exp_insert);
		return $insert;
	}

	public function get_years_of_exp_edit_update()
	{
		$years_of_exp_update = array(
			'name' => $this->input->post('name')
			);

		$this->db->where('id', $this->input->post('id'));
		$update = $this->db->update('year_experience', $years_of_exp_update);
		return $update;
	}

	public function get_years_of_exp_delete()
	{	
		$this->db->where('id', $this->uri->segment(3));
		$delete = $this->db->delete('year_experience');
		return $delete;
	}

	public function get_candidate_delete()
	{	
		$this->db->where('user_id', $this->uri->segment(3));
		$delete = $this->db->delete('users');
		return $delete;
	}

	public function get_job_delete()
	{	
		$this->db->where('job_id', $this->uri->segment(3));
		$delete = $this->db->delete('job');
		return $delete;
	}

	public function get_recruiter_delete()
	{	
		$this->db->where('employer_id', $this->uri->segment(3));
		$delete = $this->db->delete('employers');
		return $delete;
	}

	public function get_candidate_search()
	{	
		if($this->input->post('search') != '')
		{	
			$this->db->like('firstname', $this->input->post('search'));
			$this->db->or_like('surname', $this->input->post('search'));
		}
		$data['candidatesearchingquery'] = $this->db->get('users');	
		$data['title'] = 'Admin profile - MPS Consults';	
		$data['page_title'] = 'Administrator';	
		$this->db->where('admin_username', $this->session->userdata('admin_username'));
		$data['query'] = $this->db->get('admin');		
		$this->db->where_not_in('admin_username', $this->session->userdata('admin_username'));
		$data['adminquery'] = $this->db->get('admin');
		$data['admindisabledquery'] = $this->db->get('admin_disable');

		return $data;	
	}

	public function get_job_search()
	{	
		if($this->input->post('search') != '')
		{	
			$this->db->like('company_name', $this->input->post('search'));
			$this->db->or_like('company_industry', $this->input->post('search'));
			$this->db->or_like('job_position', $this->input->post('search'));
			$this->db->or_like('area_of_special', $this->input->post('search'));
			$this->db->or_like('work_exp', $this->input->post('search'));
			$this->db->or_like('job_gender', $this->input->post('search'));
			$this->db->or_like('salary_level', $this->input->post('search'));
			$this->db->or_like('job_location', $this->input->post('search'));
			$this->db->or_like('job_country', $this->input->post('search'));
			$this->db->or_like('education_qualification', $this->input->post('search'));
			$this->db->or_like('job_skills', $this->input->post('search'));
			$this->db->or_like('job_type', $this->input->post('search'));
		}
		$data['jobsearchingquery'] = $this->db->get('job');	
		$data['title'] = 'Admin profile - MPS Consults';	
		$data['page_title'] = 'Administrator';	
		$this->db->where('admin_username', $this->session->userdata('admin_username'));
		$data['query'] = $this->db->get('admin');		
		$this->db->where_not_in('admin_username', $this->session->userdata('admin_username'));
		$data['adminquery'] = $this->db->get('admin');
		$data['admindisabledquery'] = $this->db->get('admin_disable');

		return $data;	
	}

	public function get_recruiter_search()
	{	
		if($this->input->post('search') != '')
		{	
			$this->db->like('org_rep_surname', $this->input->post('search'));
			$this->db->or_like('org_rep_firstname', $this->input->post('search'));
			$this->db->or_like('org_name', $this->input->post('search'));
		}
		$data['recruitersearchingquery'] = $this->db->get('employers');	
		$data['title'] = 'Admin profile - MPS Consults';	
		$data['page_title'] = 'Administrator';	
		$this->db->where('admin_username', $this->session->userdata('admin_username'));
		$data['query'] = $this->db->get('admin');		
		$this->db->where_not_in('admin_username', $this->session->userdata('admin_username'));
		$data['adminquery'] = $this->db->get('admin');
		$data['admindisabledquery'] = $this->db->get('admin_disable');

		return $data;	
	}

	public function get_careers_candidate_search()
	{	
		if($this->input->post('search') != '')
		{	
			$this->db->like('name', $this->input->post('search'));
		}
		$data['careerscandidatesearchingquery'] = $this->db->get('careers');	
		$data['title'] = 'Admin profile - MPS Consults';	
		$data['page_title'] = 'Administrator';	
		$this->db->where('admin_username', $this->session->userdata('admin_username'));
		$data['query'] = $this->db->get('admin');		
		$this->db->where_not_in('admin_username', $this->session->userdata('admin_username'));
		$data['adminquery'] = $this->db->get('admin');
		$data['admindisabledquery'] = $this->db->get('admin_disable');

		return $data;	
	}

	// Manage Slide Show
	public function get_slide_insert()
	{
		$file_data = $this->upload->data();

		$slide_insert = array(
			'name' => $this->input->post('name'),
			'main_header' => $this->input->post('main_header'),
			'sub_header' => $this->input->post('sub_header'),
			'url' => $this->input->post('url'),
			'picture' => $file_data['file_name']
			);

		$insert = $this->db->insert('slide', $slide_insert);
		return $insert;
	}

	public function get_slide_edit_update()
	{	
		$file_data = $this->upload->data();
		$slide_id = $_POST['slide_id'];

		if($file_data['file_name'] == '')
		{
			$dphoto = $this->input->post('picture');
		}else if($file_data['file_name'] != '')
		{
			$dphoto = $file_data['file_name'];
		}

		$slide_update = array(
			'name' => $this->input->post('name'),
			'main_header' => $this->input->post('main_header'),
			'sub_header' => $this->input->post('sub_header'),
			'url' => $this->input->post('url'),
			'picture' => $dphoto
			);

		$this->db->where('slide_id', $this->input->post('slide_id'));
		$update = $this->db->update('slide', $slide_update);
		return $update;
	}

	public function get_slide_delete()
	{	
		$this->db->where('slide_id', $this->uri->segment(3));
		$delete = $this->db->delete('slide');
		return $delete;
	}

	// Manage Articles
	public function get_article_insert()
	{
		$file_data = $this->upload->data();

		$article_insert = array(
			'title' => $this->input->post('title'),
			'author' => $this->input->post('author'),
			'body' => $this->input->post('body'),
			'date' => date('Y-m-d'),
			'cover_photo' => $file_data['file_name']
			);

		$insert = $this->db->insert('article', $article_insert);
		return $insert;
	}

	public function get_article_edit_update()
	{	
		$file_data = $this->upload->data();
		$id = $_POST['id'];

		if($file_data['file_name'] == '')
		{
			$dphoto = $this->input->post('cover_photo');
		}else if($file_data['file_name'] != '')
		{
			$dphoto = $file_data['file_name'];
		}

		$article_update = array(
			'title' => $this->input->post('title'),
			'author' => $this->input->post('author'),
			'body' => $this->input->post('body'),
			'date' => date('Y-m-d'),
			'cover_photo' => $dphoto
			);

		$this->db->where('id', $this->input->post('id'));
		$update = $this->db->update('article', $article_update);
		return $update;
	}

	public function get_article_delete()
	{	
		$this->db->where('id', $this->uri->segment(3));
		$delete = $this->db->delete('article');
		return $delete;
	}

	public function get_comment_delete()
	{	
		$this->db->where('blog_id', $this->uri->segment(3));
		$delete = $this->db->delete('comment');
		return $delete;
	}

	// Manage Applicants services
	public function get_createcv_edit_update()
	{
		$createcv_update = array(
			'price' => $this->input->post('price')
			);

		$this->db->where('id', $this->input->post('id'));
		$update = $this->db->update('applicantservices', $createcv_update);
		return $update;
	}

	public function get_prep_edit_update()
	{
		$prep_update = array(
			'price' => $this->input->post('price')
			);

		$this->db->where('id', $this->input->post('id'));
		$update = $this->db->update('applicantservices', $prep_update);
		return $update;
	}

	public function get_local_edit_update()
	{
		$local_update = array(
			'description' => $this->input->post('description')
			);

		$this->db->where('contact_id', $this->input->post('contact_id'));
		$update = $this->db->update('contact', $local_update);
		return $update;
	}

	public function get_inter_edit_update()
	{
		$inter_update = array(
			'description' => $this->input->post('description')
			);

		$this->db->where('contact_id', $this->input->post('contact_id'));
		$update = $this->db->update('contact', $inter_update);
		return $update;
	}

	public function get_add_edit_update()
	{
		$add_update = array(
			'description' => $this->input->post('description')
			);

		$this->db->where('contact_id', $this->input->post('contact_id'));
		$update = $this->db->update('contact', $add_update);
		return $update;
	}

	public function get_facebook_edit_update()
	{
		$facebook_update = array(
			'link' => $this->input->post('link')
			);

		$this->db->where('id', $this->input->post('id'));
		$update = $this->db->update('social', $facebook_update);
		return $update;
	}

	public function get_twitter_edit_update()
	{
		$twitter_update = array(
			'link' => $this->input->post('link')
			);

		$this->db->where('id', $this->input->post('id'));
		$update = $this->db->update('social', $twitter_update);
		return $update;
	}

	public function get_google_edit_update()
	{
		$google_update = array(
			'link' => $this->input->post('link')
			);

		$this->db->where('id', $this->input->post('id'));
		$update = $this->db->update('social', $google_update);
		return $update;
	}

	public function get_linkedin_edit_update()
	{
		$linkedin_update = array(
			'link' => $this->input->post('link')
			);

		$this->db->where('id', $this->input->post('id'));
		$update = $this->db->update('social', $linkedin_update);
		return $update;
	}

	public function get_skype_edit_update()
	{
		$skype_update = array(
			'link' => $this->input->post('link')
			);

		$this->db->where('id', $this->input->post('id'));
		$update = $this->db->update('social', $skype_update);
		return $update;
	}

	// Manage Interview Prepping
	public function get_intprep_delete()
	{	
		$this->db->where('id', $this->uri->segment(3));
		$delete = $this->db->delete('interviewprep');
		return $delete;
	}

	// Manage Testimony
	public function get_testimony_insert()
	{
		$file_data = $this->upload->data();
		if($this->input->post('homedisplay') == TRUE)
		{
			$display = 1;
		}else if($this->input->post('homedisplay') == FALSE)
		{
			$display = 0;
		}

		$testimony_insert = array(
			'name' => $this->input->post('name'),
			'company_name' => $this->input->post('company'),
			'body' => $this->input->post('testimony'),
			'date' => date('Y-m-d'),
			'photo' => $file_data['file_name'],
			'homedisplay' => $display
			);

		$insert = $this->db->insert('testimony', $testimony_insert);
		return $insert;
	}

	public function get_testimony_edit_update()
	{	
		$file_data = $this->upload->data();
		$id = $_POST['id'];

		if($file_data['file_name'] == '')
		{
			$dphoto = $this->input->post('photo');
		}else if($file_data['file_name'] != '')
		{
			$dphoto = $file_data['file_name'];
		}

		if($this->input->post('homedisplay') == TRUE)
		{
			$display = 1;
		}else if($this->input->post('homedisplay') == FALSE)
		{
			$display = 0;
		}

		$testimony_update = array(
			'name' => $this->input->post('name'),
			'company_name' => $this->input->post('company'),
			'body' => $this->input->post('testimony'),
			'date' => date('Y-m-d'),
			'photo' => $dphoto,
			'homedisplay' => $display
			);

		$this->db->where('id', $this->input->post('id'));
		$update = $this->db->update('testimony', $testimony_update);
		return $update;
	}

	public function get_testimony_delete()
	{	
		$this->db->where('id', $this->uri->segment(3));
		$delete = $this->db->delete('testimony');
		return $delete;
	}

	// Manage toprecruit
	public function get_toprecruit_insert()
	{
		$file_data = $this->upload->data();

		$toprecruit_insert = array(
			'name' => $this->input->post('name'),
			'photo' => $file_data['file_name']
			);

		$insert = $this->db->insert('toprecruit', $toprecruit_insert);
		return $insert;
	}

	public function get_toprecruit_edit_update()
	{	
		$file_data = $this->upload->data();
		$id = $_POST['id'];

		if($file_data['file_name'] == '')
		{
			$dphoto = $this->input->post('photo');
		}else if($file_data['file_name'] != '')
		{
			$dphoto = $file_data['file_name'];
		}

		$toprecruit_update = array(
			'name' => $this->input->post('name'),
			'photo' => $dphoto
			);

		$this->db->where('id', $this->input->post('id'));
		$update = $this->db->update('toprecruit', $toprecruit_update);
		return $update;
	}

	public function get_toprecruit_delete()
	{	
		$this->db->where('id', $this->uri->segment(3));
		$delete = $this->db->delete('toprecruit');
		return $delete;
	}

	// Manage Package plan
	public function get_recruiter_plan_insert()
	{
		$this->db->where('package_plan', $this->input->post('recruiter_plan'));
		$package = $this->db->get('packages');
		foreach($package->result() as $row){
			$posting = $row->job_posting;
			$downloads = $row->cv_downloads;
		}
		if($this->input->post('recruiter_plan') == 'Hourly Plan'){
			$i = 0;
			$m = 1;
		}else if($this->input->post('recruiter_plan') == 'Daily Plan'){
			$i = 1;
			$m = 0;
		}else if($this->input->post('recruiter_plan') == 'Weekly Plan'){
			$i = 7;
			$m = 0;
		}else if($this->input->post('recruiter_plan') == 'Monthly Plan'){
			$i = 31;
			$m = 0;
		}else if($this->input->post('recruiter_plan') == 'Yearly Plan'){
			$i = 366;
			$m = 0;
		}
		date_default_timezone_set("Africa/Lagos");
		$recruiter_plan_insert = array(
			'recruiter_username' => $this->input->post('name'),
			'recruiter_plan' => $this->input->post('recruiter_plan'),
			'valid_date' => date("Y-m-d",mktime(0,0,0,date('m'),date('d')+$i,date('Y'))),			
			'valid_time' => date("H:i",mktime(date('H')+$m)),
			'posting' => $posting,
			'downloads' => $downloads
			);

		$insert = $this->db->insert('recruiter_plan', $recruiter_plan_insert);
		return $insert;
	}

	// Manage Team
	public function get_team_insert()
	{
		$file_data = $this->upload->data();

		$team_insert = array(
			'name' => $this->input->post('name'),
			'position' => $this->input->post('position'),
			'team_picture' => $file_data['file_name']
			);

		$insert = $this->db->insert('team', $team_insert);
		return $insert;
	}

	public function get_team_edit_update()
	{	
		$file_data = $this->upload->data();
		$id = $_POST['id'];

		if($file_data['file_name'] == '')
		{
			$dphoto = $this->input->post('team_picture');
		}else if($file_data['file_name'] != '')
		{
			$dphoto = $file_data['file_name'];
		}

		$team_update = array(
			'name' => $this->input->post('name'),
			'position' => $this->input->post('position'),
			'team_picture' => $dphoto
			);

		$this->db->where('id', $this->input->post('id'));
		$update = $this->db->update('team', $team_update);
		return $update;
	}

	public function get_team_delete()
	{	
		$this->db->where('id', $this->uri->segment(3));
		$delete = $this->db->delete('team');
		return $delete;
	}

	// Manage Board
	public function get_board_insert()
	{
		$file_data = $this->upload->data();

		$board_insert = array(
			'name' => $this->input->post('name'),
			'position' => $this->input->post('position'),
			'about' => $this->input->post('about'),
			'board_photo' => $file_data['file_name']
			);

		$insert = $this->db->insert('board', $board_insert);
		return $insert;
	}

	public function get_board_edit_update()
	{	
		$file_data = $this->upload->data();
		$id = $_POST['id'];

		if($file_data['file_name'] == '')
		{
			$dphoto = $this->input->post('board_photo');
		}else if($file_data['file_name'] != '')
		{
			$dphoto = $file_data['file_name'];
		}

		$board_update = array(
			'name' => $this->input->post('name'),
			'position' => $this->input->post('position'),
			'about' => $this->input->post('about'),
			'board_photo' => $dphoto
			);

		$this->db->where('id', $this->input->post('id'));
		$update = $this->db->update('board', $board_update);
		return $update;
	}

	public function get_board_delete()
	{	
		$this->db->where('id', $this->uri->segment(3));
		$delete = $this->db->delete('board');
		return $delete;
	}

	// Manage Board Overview
	public function get_board_overview_insert()
	{	
		$board_update = array(
			'board_overview' => $this->input->post('board_overview')
			);

		$this->db->where('id', $this->input->post('id'));
		$update = $this->db->update('board_overview', $board_update);
		return $update;
	}

	// Manage Careers
	public function get_careers_insert()
	{
		$careers_insert = array(
			'name' => $this->input->post('name'),
			'summary' => $this->input->post('summary'),
			'qualification' => $this->input->post('qualify')
			);

		$insert = $this->db->insert('mpscareers', $careers_insert);
		return $insert;
	}

	public function get_careers_edit_update()
	{	
		$careers_update = array(
			'name' => $this->input->post('name'),
			'summary' => $this->input->post('summary'),
			'qualification' => $this->input->post('qualification')
			);

		$this->db->where('id', $this->input->post('id'));
		$update = $this->db->update('mpscareers', $careers_update);
		return $update;
	}

	public function get_careers_delete()
	{	
		$this->db->where('id', $this->uri->segment(3));
		$delete['mpscareers'] = $this->db->delete('mpscareers');
		$this->db->where('mpscareers_id', $this->uri->segment(3));
		$delete['careers'] = $this->db->delete('careers');
		return $delete;
	}

	// Manage Trainings Overview
	public function get_trainings_overview_insert()
	{	
		$trainings_update = array(
			'trainings_overview' => $this->input->post('trainings_overview')
			);

		$this->db->where('t_id', $this->input->post('t_id'));
		$update = $this->db->update('trainings_overview', $trainings_update);
		return $update;
	}

	// Manage Trainings
	public function get_trainings_insert()
	{	
		$file_data = $this->upload->data();
		$trainings_insert = array(
			'title' => $this->input->post('title'),
			'date' => $this->input->post('date'),
			'price' => $this->input->post('price'),
			'summary' => $this->input->post('summary'),
			'details' => $this->input->post('details'),
			'photo' => $file_data['file_name']
			);

		$insert = $this->db->insert('trainings', $trainings_insert);
		return $insert;
	}

	public function get_trainings_edit_update()
	{	
		$file_data = $this->upload->data();
		if($file_data['file_name'] == '')
		{
			$dphoto = $this->input->post('photo');
		}else if($file_data['file_name'] != '')
		{
			$dphoto = $file_data['file_name'];
		}

		$trainings_update = array(
			'title' => $this->input->post('title'),
			'date' => $this->input->post('date'),
			'price' => $this->input->post('price'),
			'summary' => $this->input->post('summary'),
			'details' => $this->input->post('details'),
			'photo' => $dphoto
			);

		$this->db->where('t_id', $this->input->post('t_id'));
		$update = $this->db->update('trainings', $trainings_update);
		return $update;
	}

	public function get_trainings_edit_download_update()
	{	
		$file_data = $this->upload->data();
		if($file_data['file_name'] == '')
		{
			$docone = $this->input->post('docone');
		}else if($file_data['file_name'] != '')
		{
			$docone = $file_data['file_name'];
		}

		$trainings_download_update = array(
			'docone' => $docone
			);

		$this->db->where('t_id', $this->input->post('t_id'));
		$update = $this->db->update('trainings', $trainings_download_update);
		return $update;
	}

	public function get_trainings_delete()
	{	
		$this->db->where('t_id', $this->uri->segment(3));
		$delete = $this->db->delete('trainings');
		return $delete;
	}

	public function get_training_applicants_delete()
	{	
		$this->db->where('id', $this->uri->segment(3));
		$delete = $this->db->delete('trainers');
		return $delete;
	}

	// Manage Packages
	public function get_package_insert()
	{
		$package_insert = array(
			'package_plan' => $this->input->post('package_plan'),
			'job_posting' => $this->input->post('job_posting'),
			'premium_upgrade' => $this->input->post('premium_upgrade'),
			'typical_applications' => $this->input->post('typical_applications'),
			'applications_share' => $this->input->post('applications_share'),
			'premium_position' => $this->input->post('premium_position'),
			'cv_search_access' => $this->input->post('cv_search_access'),
			'cv_downloads' => $this->input->post('cv_downloads'),
			'email_alerts' => $this->input->post('email_alerts'),
			'logo_in_job_search' => $this->input->post('logo_in_job_search'),
			'logo_in_job_adverts' => $this->input->post('logo_in_job_adverts'),
			'recruiter_directory' => $this->input->post('recruiter_directory'),
			'prices_package' => $this->input->post('prices_package'),
			);

		$insert = $this->db->insert('packages', $package_insert);
		return $insert;
	}

	public function get_package_edit_update()
	{
		$package_update = array(
			'package_plan' => $this->input->post('package_plan'),
			'job_posting' => $this->input->post('job_posting'),
			'premium_upgrade' => $this->input->post('premium_upgrade'),
			'typical_applications' => $this->input->post('typical_applications'),
			'applications_share' => $this->input->post('applications_share'),
			'premium_position' => $this->input->post('premium_position'),
			'cv_search_access' => $this->input->post('cv_search_access'),
			'cv_downloads' => $this->input->post('cv_downloads'),
			'email_alerts' => $this->input->post('email_alerts'),
			'logo_in_job_search' => $this->input->post('logo_in_job_search'),
			'logo_in_job_adverts' => $this->input->post('logo_in_job_adverts'),
			'recruiter_directory' => $this->input->post('recruiter_directory'),
			'prices_package' => $this->input->post('prices_package'),
			);
		$this->db->where('package_id', $this->input->post('id'));
		$update = $this->db->update('packages', $package_update);
		return $update;
	}

	public function get_package_delete()
	{	
		$this->db->where('package_id', $this->uri->segment(3));
		$delete = $this->db->delete('packages');
		return $delete;
	}

	public function get_recruiter_verify()
	{
		$status_update = array(
			'status' => 'Y'
			);

		$this->db->where('employer_id', $this->uri->segment(3));
		$update = $this->db->update('employers', $status_update);
		return $update;
	}

	//Get Welcome Message
	public function get_welcome_message_edit_update()
	{
		$welcome_update = array(
			'subject' => $this->input->post('subject'),
			'welcome_message' => $this->input->post('welcome_message'),
			'signature' => $this->input->post('signature')
			);

		$this->db->where('welcome_id', $this->input->post('welcome_id'));
		$update = $this->db->update('welcome_message', $welcome_update);
		return $update;
	}

	//Get Password Reset Message
	public function get_password_reset_edit_update()
	{
		$password_update = array(
			'subject' => $this->input->post('subject'),
			'reset_message' => $this->input->post('reset_message'),
			'signature' => $this->input->post('signature')
			);

		$this->db->where('welcome_id', $this->input->post('welcome_id'));
		$update = $this->db->update('password_reset', $password_update);
		return $update;
	}

	//Get Privacy, Terms and Conditions 
	public function get_privacyandterms_edit_update()
	{
		$file_data = $this->upload->data();
		$id = $_POST['extra_id'];

		if($file_data['file_name'] == '')
		{
			$dphoto = $this->input->post('upload');
		}else if($file_data['file_name'] != '')
		{
			$dphoto = $file_data['file_name'];
		}

		$privacy_update = array(
			'upload' => $dphoto
			);

		$this->db->where('extra_id', $this->input->post('extra_id'));
		$update = $this->db->update('mps_extra', $privacy_update);
		return $update;
	}

	//Get Candidates CV
	public function get_candidates_cv_download()
	{	
		$thepath = base_url().'uploads/'.$this->uri->segment(3);
		$data = file_get_contents($thepath); // Read the file's contents
		$name = $this->uri->segment(3);

		return force_download($name, $data);				
	}

	//Get MPS Candidates CV
	public function get_careers_candidates_cv_download()
	{	
		$thepath = base_url().'uploads/'.$this->uri->segment(3);
		$data = file_get_contents($thepath); // Read the file's contents
		$name = $this->uri->segment(3);

		return force_download($name, $data);				
	}
} 
