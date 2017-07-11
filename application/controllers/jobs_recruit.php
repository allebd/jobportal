<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Jobs_recruit extends CI_Controller {

	public function __construct()
	{
		parent::__construct();

		$this->is_recruitlogged_in();
		$this->load->model('jobs_recruit_model');
		$this->load->model('filter_model');
	}

	public function index()
	{
		$data = $this->jobs_recruit_model->get_post();
		$data['incorrect_login'] = '';	
		$data['reg_success'] = '';
		$data['is_recruitlogged_in'] = $this->session->userdata('is_recruitlogged_in');
		$data['recruit'] = 'recruiter';
		$data['error'] = '';
		$data['skills'] = $this->db->get('skills');
		$data['year_options'] = $this->filter_model->year_options();
		$data['gender_options'] = $this->filter_model->gender_options();
		$data['skill_options'] = $this->filter_model->skill_options();
		$data['location_options'] = $this->filter_model->location_options();
		$data['no_of_emp_options'] = $this->filter_model->no_of_emp_options();
		$data['relocate_options'] = $this->filter_model->relocate_options();
		$data['qualification_options'] = $this->filter_model->qualification_options();
		$data['specialization_options'] = $this->filter_model->specialization_options();
		$data['industry_options'] = $this->filter_model->industry_options();
		$data['country_options'] = $this->filter_model->country_options();
		$data['salary_options'] = $this->filter_model->salary_options();
		$data['job_options'] = $this->filter_model->job_type_options();

		// //pagination
		// $this->load->library('pagination');

		// $config = array();
		// $config['base_url'] =  base_url('jobs_recruit/index');
		// $config['total_rows'] = $this->db->get('job')->num_rows();
		// $config['per_page'] = 15;
		// $config['num_links'] = 10;
		// $config['full_tag_open'] = '<ul class="pagination pull-right">';
		// $config['full_tag_close'] = '</ul>';
		// $config['next_link'] = '&gt;';
		// $config['next_tag_open'] = '<li>';
		// $config['next_tag_close'] = '</li>';
		// $config['prev_link'] = '&lt;';
		// $config['prev_tag_open'] = '<li>';
		// $config['prev_tag_close'] = '</li>';
		// $config['cur_tag_open'] = '<li class="active"><a href="#">';
		// $config['cur_tag_close'] = '</a></li>';
		// $config['num_tag_open'] = '<li>';
		// $config['num_tag_close'] = '</li>';

		// $this->pagination->initialize($config);

		// $data['jobquery'] = $this->db->get('job', $config['per_page'], $this->uri->segment(3));

		$data['main_content'] = 'job/jobrecruit';

		$this->load->view('includes/template', $data);
	}


	public function job_selected()
	{
		$data = $this->jobs_recruit_model->get_post();
		$data['incorrect_login'] = '';	
		$data['reg_success'] = '';
		$data['is_recruitlogged_in'] = $this->session->userdata('is_recruitlogged_in');
		$data['recruit'] = 'recruiter';
		$data['error'] = '';
		$data['skills'] = $this->db->get('skills');
		$data['year_options'] = $this->filter_model->year_options();
		$data['gender_options'] = $this->filter_model->gender_options();
		$data['skill_options'] = $this->filter_model->skill_options();
		$data['location_options'] = $this->filter_model->location_options();
		$data['no_of_emp_options'] = $this->filter_model->no_of_emp_options();
		$data['relocate_options'] = $this->filter_model->relocate_options();
		$data['qualification_options'] = $this->filter_model->qualification_options();
		$data['specialization_options'] = $this->filter_model->specialization_options();
		$data['industry_options'] = $this->filter_model->industry_options();
		$data['country_options'] = $this->filter_model->country_options();
		$data['salary_options'] = $this->filter_model->salary_options();
		$data['job_options'] = $this->filter_model->job_type_options();
		$data['main_content'] = 'job/jobrecruit_selected';

		$this->load->view('includes/template', $data);
	}

	public function job_suspended()
	{
		$data = $this->jobs_recruit_model->get_post();
		$data['incorrect_login'] = '';	
		$data['reg_success'] = '';
		$data['is_recruitlogged_in'] = $this->session->userdata('is_recruitlogged_in');
		$data['recruit'] = 'recruiter';
		$data['error'] = '';
		$data['skills'] = $this->db->get('skills');
		$data['year_options'] = $this->filter_model->year_options();
		$data['gender_options'] = $this->filter_model->gender_options();
		$data['skill_options'] = $this->filter_model->skill_options();
		$data['location_options'] = $this->filter_model->location_options();
		$data['no_of_emp_options'] = $this->filter_model->no_of_emp_options();
		$data['relocate_options'] = $this->filter_model->relocate_options();
		$data['qualification_options'] = $this->filter_model->qualification_options();
		$data['specialization_options'] = $this->filter_model->specialization_options();
		$data['industry_options'] = $this->filter_model->industry_options();
		$data['country_options'] = $this->filter_model->country_options();
		$data['salary_options'] = $this->filter_model->salary_options();
		$data['job_options'] = $this->filter_model->job_type_options();

		$data['main_content'] = 'job/jobrecruit';

		$this->load->view('includes/template', $data);
	}

	public function post_a_job()
	{
		$data = $this->jobs_recruit_model->get_post();
		$data['incorrect_login'] = '';	
		$data['reg_success'] = '';
		$data['error'] = '';
		$data['is_recruitlogged_in'] = $this->session->userdata('is_recruitlogged_in');
		$data['recruit'] = 'recruiter';
		$data['year_options'] = $this->filter_model->year_options();
		$data['gender_options'] = $this->filter_model->gender_options();
		$data['skill_options'] = $this->filter_model->skill_options();
		$data['location_options'] = $this->filter_model->location_options();
		$data['no_of_emp_options'] = $this->filter_model->no_of_emp_options();
		$data['relocate_options'] = $this->filter_model->relocate_options();
		$data['qualification_options'] = $this->filter_model->qualification_options();
		$data['specialization_options'] = $this->filter_model->specialization_options();
		$data['industry_options'] = $this->filter_model->industry_options();
		$data['country_options'] = $this->filter_model->country_options();
		$data['salary_options'] = $this->filter_model->salary_options();
		$data['job_options'] = $this->filter_model->job_type_options();
		$data['main_content'] = 'job/post_a_job';

		$this->load->view('includes/template', $data);
	}

	public function job_insert()
	{   
		//field name, error message, validation rules

		$this->form_validation->set_rules('company_name', 'Company Name', 'trim|required');
		$this->form_validation->set_rules('job_position', 'Job Position', 'trim|required');
		$this->form_validation->set_rules('job_desc', 'Job Description', 'trim|required');
		$this->form_validation->set_rules('job_end_date', 'Application Ending Date', 'trim|required');

		if ($this->form_validation->run() == FALSE)
		{
				//validation with errors
			$data = $this->jobs_recruit_model->get_post();
			$data['incorrect_login'] = '';	
			$data['reg_success'] = '';
			$data['error'] = '';
			$data['is_recruitlogged_in'] = $this->session->userdata('is_recruitlogged_in');
			$data['recruit'] = 'recruiter';
			$data['year_options'] = $this->filter_model->year_options();
			$data['gender_options'] = $this->filter_model->gender_options();
			$data['skill_options'] = $this->filter_model->skill_options();
			$data['location_options'] = $this->filter_model->location_options();
			$data['no_of_emp_options'] = $this->filter_model->no_of_emp_options();
			$data['relocate_options'] = $this->filter_model->relocate_options();
			$data['qualification_options'] = $this->filter_model->qualification_options();
			$data['specialization_options'] = $this->filter_model->specialization_options();
			$data['industry_options'] = $this->filter_model->industry_options();
			$data['country_options'] = $this->filter_model->country_options();
			$data['salary_options'] = $this->filter_model->salary_options();
			$data['job_options'] = $this->filter_model->job_type_options();
			$data['main_content'] = 'job/post_a_job';

			$this->load->view('includes/template', $data);
		}else{
			$config['upload_path'] = './uploads/';
			$config['allowed_types'] = 'jpg|jpeg|png';
			$config['max_size']	= '1000';
			$config['max_width']  = '4000';
			$config['max_height']  = '4000';

			$this->load->library('upload',$config);


			if (!$this->upload->do_upload() && ($this->input->post('job_position') == ''))
			{

				$data = $this->jobs_recruit_model->get_post();
				$data['incorrect_login'] = '';	
				$data['reg_success'] = '';
				$data['is_recruitlogged_in'] = $this->session->userdata('is_recruitlogged_in');	
				$data['recruit'] = 'recruiter';
				$data['error'] = $this->upload->display_errors();
				$data['year_options'] = $this->filter_model->year_options();
				$data['gender_options'] = $this->filter_model->gender_options();
				$data['skill_options'] = $this->filter_model->skill_options();
				$data['location_options'] = $this->filter_model->location_options();
				$data['no_of_emp_options'] = $this->filter_model->no_of_emp_options();
				$data['relocate_options'] = $this->filter_model->relocate_options();
				$data['qualification_options'] = $this->filter_model->qualification_options();
				$data['specialization_options'] = $this->filter_model->specialization_options();
				$data['industry_options'] = $this->filter_model->industry_options();
				$data['country_options'] = $this->filter_model->country_options();
				$data['salary_options'] = $this->filter_model->salary_options();
				$data['job_options'] = $this->filter_model->job_type_options();
				$data['main_content'] = 'job/post_a_job';

				$this->load->view('includes/template',$data);
			}else{

				$data = $this->jobs_recruit_model->get_jobs_insert();	
				
				redirect('jobs_recruit/index');
			}
		}
	}

	public function job_suspend()
	{
		$data = $this->jobs_recruit_model->get_jobs_suspend();	
		
		redirect('jobs_recruit/job_suspended/'.$this->uri->segment(3));
	}

	public function job_unsuspend()
	{
		$data = $this->jobs_recruit_model->get_jobs_unsuspend();	
		
		redirect('jobs_recruit/job_suspended/'.$this->uri->segment(3));
	}

	public function job_delete()
	{
		$data = $this->jobs_recruit_model->get_jobs_delete();	
		
		redirect('jobs_recruit/index');
	}

	public function job_similar()
	{
		$data = $this->jobs_recruit_model->get_jobs_similar();	
		
		redirect('jobs_recruit/index');
	}

	public function job_invite_apply()
	{
		$data = $this->jobs_recruit_model->get_jobs_invite_apply();	
		
		redirect('jobs_recruit/job_cv_search');
	}

	public function job_saved_search()
	{
		$data = $this->jobs_recruit_model->get_jobs_saved_search();	
		
		redirect('jobs_recruit/job_cv_search');
	}

	public function job_unsaved_search()
	{
		$data = $this->jobs_recruit_model->get_jobs_unsaved_search();	
		
		redirect('jobs_recruit/job_candidates_saved_search');
	}

	public function job_edit()
	{
		$data = $this->jobs_recruit_model->get_post();
		$data['incorrect_login'] = '';	
		$data['reg_success'] = '';
		$data['is_recruitlogged_in'] = $this->session->userdata('is_recruitlogged_in');
		$data['recruit'] = 'recruiter';
		$data['error'] = '';
		$data['year_options'] = $this->filter_model->year_options();
		$data['gender_options'] = $this->filter_model->gender_options();
		$data['skill_options'] = $this->filter_model->skill_options();
		$data['location_options'] = $this->filter_model->location_options();
		$data['no_of_emp_options'] = $this->filter_model->no_of_emp_options();
		$data['relocate_options'] = $this->filter_model->relocate_options();
		$data['qualification_options'] = $this->filter_model->qualification_options();
		$data['specialization_options'] = $this->filter_model->specialization_options();
		$data['industry_options'] = $this->filter_model->industry_options();
		$data['country_options'] = $this->filter_model->country_options();
		$data['salary_options'] = $this->filter_model->salary_options();
		$data['job_options'] = $this->filter_model->job_type_options();
		$data['main_content'] = 'job/jobrecruit_edit';

		$this->load->view('includes/template', $data);
	}

	public function job_edit_update()
	{
		$config['upload_path'] = './uploads/';
		$config['allowed_types'] = 'jpg|jpeg|png';
		$config['max_size']	= '1000';
		$config['max_width']  = '4000';
		$config['max_height']  = '4000';

		$this->load->library('upload',$config);
		
		if (!$this->upload->do_upload() && ($this->input->post('j_position') == ''))
		{

			$data = $this->jobs_recruit_model->get_post();
			$data['incorrect_login'] = '';	
			$data['reg_success'] = '';
			$data['is_recruitlogged_in'] = $this->session->userdata('is_recruitlogged_in');	
			$data['recruit'] = 'recruiter';
			$data['error'] = $this->upload->display_errors();
			$data['year_options'] = $this->filter_model->year_options();
			$data['gender_options'] = $this->filter_model->gender_options();
			$data['skill_options'] = $this->filter_model->skill_options();
			$data['location_options'] = $this->filter_model->location_options();
			$data['no_of_emp_options'] = $this->filter_model->no_of_emp_options();
			$data['relocate_options'] = $this->filter_model->relocate_options();
			$data['qualification_options'] = $this->filter_model->qualification_options();
			$data['specialization_options'] = $this->filter_model->specialization_options();
			$data['industry_options'] = $this->filter_model->industry_options();
			$data['country_options'] = $this->filter_model->country_options();
			$data['salary_options'] = $this->filter_model->salary_options();
			$data['job_options'] = $this->filter_model->job_type_options();
			$data['main_content'] = 'job/post_a_job';

			$this->load->view('includes/template',$data);
		}else{

			$data = $this->jobs_recruit_model->get_jobs_edit_update();	
			
			redirect('jobs_recruit/index');
		}
	}

	public function job_candidates()
	{
		$data = $this->jobs_recruit_model->get_post();
		$data['incorrect_login'] = '';	
		$data['reg_success'] = '';
		$data['is_recruitlogged_in'] = $this->session->userdata('is_recruitlogged_in');
		$data['recruit'] = 'recruiter';
		$data['error'] = '';
		$data['skills'] = $this->db->get('skills');
		$data['year_options'] = $this->filter_model->year_options();
		$data['gender_options'] = $this->filter_model->gender_options();
		$data['skill_options'] = $this->filter_model->skill_options();
		$data['location_options'] = $this->filter_model->location_options();
		$data['no_of_emp_options'] = $this->filter_model->no_of_emp_options();
		$data['relocate_options'] = $this->filter_model->relocate_options();
		$data['qualification_options'] = $this->filter_model->qualification_options();
		$data['specialization_options'] = $this->filter_model->specialization_options();
		$data['industry_options'] = $this->filter_model->industry_options();
		$data['country_options'] = $this->filter_model->country_options();
		$data['salary_options'] = $this->filter_model->salary_options();
		$data['job_options'] = $this->filter_model->job_type_options();
		$data['main_content'] = 'job/jobrecruit_candidates';

		$this->load->view('includes/template', $data);
	}

	public function job_shortlisted()
	{
		$data = $this->jobs_recruit_model->get_post();
		$data['incorrect_login'] = '';	
		$data['reg_success'] = '';
		$data['is_recruitlogged_in'] = $this->session->userdata('is_recruitlogged_in');
		$data['recruit'] = 'recruiter';
		$data['error'] = '';
		$data['skills'] = $this->db->get('skills');
		$data['year_options'] = $this->filter_model->year_options();
		$data['gender_options'] = $this->filter_model->gender_options();
		$data['skill_options'] = $this->filter_model->skill_options();
		$data['location_options'] = $this->filter_model->location_options();
		$data['no_of_emp_options'] = $this->filter_model->no_of_emp_options();
		$data['relocate_options'] = $this->filter_model->relocate_options();
		$data['qualification_options'] = $this->filter_model->qualification_options();
		$data['specialization_options'] = $this->filter_model->specialization_options();
		$data['industry_options'] = $this->filter_model->industry_options();
		$data['country_options'] = $this->filter_model->country_options();
		$data['salary_options'] = $this->filter_model->salary_options();
		$data['job_options'] = $this->filter_model->job_type_options();
		$data['main_content'] = 'job/jobrecruit_shortlist';

		$this->load->view('includes/template', $data);
	}

	public function job_cv_search()
	{
		$data = $this->jobs_recruit_model->get_post();
		$data['title'] = 'Candidates Profiles - MPS Consults';
		$data['page_title'] = 'Candidate Search';
		$data['incorrect_login'] = '';	
		$data['reg_success'] = '';
		$data['is_recruitlogged_in'] = $this->session->userdata('is_recruitlogged_in');
		$data['recruit'] = 'recruiter';
		$data['error'] = '';
		$data['skills'] = $this->db->get('skills');
		$data['year_options'] = $this->filter_model->year_options();
		$data['gender_options'] = $this->filter_model->gender_options();
		$data['skill_options'] = $this->filter_model->skill_options();
		$data['location_options'] = $this->filter_model->location_options();
		$data['no_of_emp_options'] = $this->filter_model->no_of_emp_options();
		$data['relocate_options'] = $this->filter_model->relocate_options();
		$data['qualification_options'] = $this->filter_model->qualification_options();
		$data['specialization_options'] = $this->filter_model->specialization_options();
		$data['industry_options'] = $this->filter_model->industry_options();
		$data['country_options'] = $this->filter_model->country_options();
		$data['salary_options'] = $this->filter_model->salary_options();
		$data['job_options'] = $this->filter_model->job_type_options();

		//pagination
		$this->load->library('pagination');

		$config = array();
		$config['base_url'] =  base_url('jobs_recruit/job_cv_search');
		$config['total_rows'] = $this->db->get('users')->num_rows();
		$config['per_page'] = 15;
		$config['num_links'] = 10;
		$config['full_tag_open'] = '<ul class="pagination pull-right">';
		$config['full_tag_close'] = '</ul>';
		$config['next_link'] = '&gt;';
		$config['next_tag_open'] = '<li>';
		$config['next_tag_close'] = '</li>';
		$config['prev_link'] = '&lt;';
		$config['prev_tag_open'] = '<li>';
		$config['prev_tag_close'] = '</li>';
		$config['cur_tag_open'] = '<li class="active"><a href="#">';
		$config['cur_tag_close'] = '</a></li>';
		$config['num_tag_open'] = '<li>';
		$config['num_tag_close'] = '</li>';

		$this->pagination->initialize($config);

		$data['candidatesearchquery'] = $this->db->get('users', $config['per_page'], $this->uri->segment(3));

		$data['main_content'] = 'job/cv_search';

		$this->load->view('includes/template', $data);
	}

	public function candidate_search()
	{
		$data = $this->jobs_recruit_model->search_all();	
		$data['incorrect_login'] = '';	
		$data['reg_success'] = '';
		$data['is_recruitlogged_in'] = $this->session->userdata('is_recruitlogged_in');
		$data['recruit'] = 'recruiter';
		$data['error'] = '';
		$data['is_logged_in'] = $this->session->userdata('is_logged_in');
		$data['year_options'] = $this->filter_model->year_options();
		$data['gender_options'] = $this->filter_model->gender_options();
		$data['skill_options'] = $this->filter_model->skill_options();
		$data['location_options'] = $this->filter_model->location_options();
		$data['relocate_options'] = $this->filter_model->relocate_options();
		$data['qualification_options'] = $this->filter_model->qualification_options();
		$data['specialization_options'] = $this->filter_model->specialization_options();
		$data['industry_options'] = $this->filter_model->industry_options();
		$data['country_options'] = $this->filter_model->country_options();
		$data['salary_options'] = $this->filter_model->salary_options();
		$data['job_options'] = $this->filter_model->job_type_options();

		$data['main_content'] = 'job/cv_searching';

		$this->load->view('includes/template', $data);
	}


	public function job_candidates_cv_downloaded()
	{
		$data = $this->jobs_recruit_model->get_post();	
		$data['incorrect_login'] = '';	
		$data['reg_success'] = '';
		$data['is_recruitlogged_in'] = $this->session->userdata('is_recruitlogged_in');
		$data['recruit'] = 'recruiter';
		$data['error'] = '';
		$data['is_logged_in'] = $this->session->userdata('is_logged_in');
		$data['year_options'] = $this->filter_model->year_options();
		$data['gender_options'] = $this->filter_model->gender_options();
		$data['skill_options'] = $this->filter_model->skill_options();
		$data['location_options'] = $this->filter_model->location_options();
		$data['relocate_options'] = $this->filter_model->relocate_options();
		$data['qualification_options'] = $this->filter_model->qualification_options();
		$data['specialization_options'] = $this->filter_model->specialization_options();
		$data['industry_options'] = $this->filter_model->industry_options();
		$data['country_options'] = $this->filter_model->country_options();
		$data['salary_options'] = $this->filter_model->salary_options();
		$data['job_options'] = $this->filter_model->job_type_options();

		$data['main_content'] = 'job/cv_downloaded';

		$this->load->view('includes/template', $data);
	}

	public function job_candidates_saved_search()
	{
		$data = $this->jobs_recruit_model->get_post();	
		$data['incorrect_login'] = '';	
		$data['reg_success'] = '';
		$data['is_recruitlogged_in'] = $this->session->userdata('is_recruitlogged_in');
		$data['recruit'] = 'recruiter';
		$data['error'] = '';
		$data['is_logged_in'] = $this->session->userdata('is_logged_in');
		$data['year_options'] = $this->filter_model->year_options();
		$data['gender_options'] = $this->filter_model->gender_options();
		$data['skill_options'] = $this->filter_model->skill_options();
		$data['location_options'] = $this->filter_model->location_options();
		$data['relocate_options'] = $this->filter_model->relocate_options();
		$data['qualification_options'] = $this->filter_model->qualification_options();
		$data['specialization_options'] = $this->filter_model->specialization_options();
		$data['industry_options'] = $this->filter_model->industry_options();
		$data['country_options'] = $this->filter_model->country_options();
		$data['salary_options'] = $this->filter_model->salary_options();
		$data['job_options'] = $this->filter_model->job_type_options();

		$data['main_content'] = 'job/saved_search';

		$this->load->view('includes/template', $data);
	}

	public function job_candidates_cv_download()
	{
		$data = $this->jobs_recruit_model->get_job_candidates_cv_download();	
	}

	public function job_shortlist()
	{
		$data = $this->jobs_recruit_model->get_job_shortlist();	
		$this->db->where('application_id',$this->uri->segment(3));
		$short = $this->db->get('application');
		foreach($short->result() as $row)
		{
			$jobid = $row->job_id;
		redirect('jobs_recruit/job_shortlisted/'.$jobid);
		}
	}

	public function job_unshortlisted()
	{
		$data = $this->jobs_recruit_model->get_job_unshortlisted();	
		$this->db->where('application_id',$this->uri->segment(3));
		$short = $this->db->get('application');
		foreach($short->result() as $row)
		{
			$jobid = $row->job_id;
		redirect('jobs_recruit/job_shortlisted/'.$jobid);
		}
	}

	public function is_recruitlogged_in()
	{
		$is_recruitlogged_in = $this->session->userdata('is_recruitlogged_in');

		if(!isset($is_recruitlogged_in) || $is_recruitlogged_in != true)
		{
			redirect('recruiter/index');
		}
	}
}
