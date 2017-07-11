<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Career_model extends CI_Model {

	public function __construct()
	{
		parent::__construct();

	}

	public function get_post()
	{
		$data['title'] = 'Career Hub - MPS Consults';
		$data['page_title'] = 'Career Hub';
		$this->db->where('username', $this->session->userdata('username'));
		$data['query'] = $this->db->get('users');
		$this->db->order_by("date", "desc");
		$data['article'] = $this->db->get('article');		

		return $data;
	}

	public function get_counsel()
	{
		$data['title'] = 'Counseling - MPS Consults';
		$data['page_title'] = 'Counseling';
		$this->db->where('r_username', $this->session->userdata('r_username'));
		$data['query'] = $this->db->get('employers');
		$data['counselone'] = "Our counseling services are designed to support employees on a wide range of emotional and mental health issues as appropriate to the workplace through the Employee Assistance Program (EAP). Our primary counseling model used by our counseling unit is 'Solution-Focused Brief Therapy' which revolves around discovery of solutions in preference to analysis of problems. This method concentrates on helping individuals identify their skills, strengths and available resources needed towards having a feasible solution. This includes confidential help with personal, family, and work-related problems through consultation and referral for concerns such as:";
		$data['counselthree'] = "of when employees should seek counseling are when they're having difficulties at work, diminishing concentration, sleeplessness, persistent migraine or when your level of pain becomes uncomfortable.";
		$data['counselfour'] = "Our EAP endeavours to provide responsive solution, giving premium service provided to employer, employees, human resources staff, managers, supervisors, and family within an organisation. We partner with you to design and implement the most effective Employee Assistance programme to ensure that individuals receive efficient, valuable quality services in a timely manner.";
		$data['counselfive'] = "We partner with reputable EAP organisations and our counselors are well trained with substantial years of experience designing, implementing and operating a wide range of EAP in organizational settings: product and service oriented, large and small, private, public and non-profit.";
		$data['counselsix'] = "Our strengths is positioned with our highly experienced, certified EAP staff and high class service delivery system so that your organization receives the optimum EAP service available. We have a thorough international working knowledge of effective behavioural health treatment programs in the country.";
		$data['counselseven'] = "Companies who offer this program make services available free of charge to employees and their legal dependents. There are prepaid designated numbers of visits given to an employee. Once the prepaid visits are used up, the cost of additional visits of services may be not covered under the employers EAP plan. Therefore, they are the responsibility of the employee. In these cases, the EAP professional will discuss available options with the employee before continuing additional services or providing a referral to other services.";
		$data['counseleight'] = "A team of certified professionals in Behavioural Health Services, mental health, clinical dependency counselors, and social workers staff the program.";
		$data['counselnine'] = "All services are confidential. EAP staff will not share any information regarding a person’s involvement with the EAP without that person's knowledge and consent, excluding in exceptional cases where required by law. If employees are concerned about the requirements, they are urged to talk with the counselor about the exceptions.";
		$data['counselten'] = "We can work together to find your EAP service. When your organisation has retained the services of our company, we will work with you to create EAP package that meets the needs of the company and its employees.";
		return $data;
	}

	public function get_blog()
	{
		$data['title'] = 'Career Hub - MPS Consults';
		$data['page_title'] = 'Career Hub';
		$this->db->where('username', $this->session->userdata('username'));
		$data['query'] = $this->db->get('users');
		$this->db->where('id', $this->uri->segment(3));
		$data['article'] = $this->db->get('article');
		$this->db->order_by("date", "desc");
		$this->db->where_not_in('id', $this->uri->segment(3));
		$data['articled'] = $this->db->get('article', 2);
		$this->db->select('*');		
		$this->db->from('article');
		$this->db->where('id', $this->uri->segment(3));
		$this->db->join('comment', 'comment.title = article.title');
		$data['mycomment']= $this->db->get();
		$this->db->select('counter');		
		$this->db->from('article');
		$this->db->where('id', $this->uri->segment(3));
		$thecounter = $this->db->get();
		foreach($thecounter->result() as $from){
			$thecounter = $from->counter + 1;

			$article_update = array(
				'counter' => $thecounter
			);

		$this->db->where('id', $this->uri->segment(3));
		$insert = $this->db->update('article', $article_update);
		}
		return $data;
	}


	public function get_comment_insert()
	{	
		if($this->input->post('comment_author') == '')
		{
			$dpost = 'Anonymous';
		}else{
			$dpost = $this->input->post('comment_author');
		}

		$comment_insert = array(
			'title' => $this->input->post('title'),
			'comment_author' => $dpost,
			'comment_body' => $this->input->post('comment_body')
			);

		$insert = $this->db->insert('comment', $comment_insert);
		return $insert;
	}
} 
