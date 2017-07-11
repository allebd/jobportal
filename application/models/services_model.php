<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Services_model extends CI_Model {

	public function __construct()
	{
		parent::__construct();

	}

	public function get_post()
	{
		$data['title'] = 'Services - MPS Consults';
		$data['page_title'] = 'Services';
		$this->db->where('r_username', $this->session->userdata('r_username'));
		$data['query'] = $this->db->get('employers');
		$data['overviewone'] = 'There is no alternative for knowledge and experience. In recruiting, professionals are often faced with
								 challenges in the execution of recruitment or in the search of career advancement. Our advanced, industry
								  specific CV search engine helps you find for the best candidate in no time. MPS is a beneficial organization
								   in the consulting world to turn to when organisations require HR solutions. Unlike many other recruitment
								    consulting organizations, our pride is employing and utilizing candidates and turning them into
								     professionals, through advance practices.';
		
		$data['serviceone'] = 'Organizations build their strength on the quality of input from its employees. Independently, HR plays an increasingly significant part in businesses today. Strategic human resource management is an approach to the management of human resources that provides a strategic framework to support long-term business goals and outcomes. At MPS, our methodology is to provide analytical solutions to businesses with long-term employee issues, organisation structure, quality, culture, values, commitment, change management and matching resources to function successfully. ';
		$data['servicetwoa'] = "Your business needs are constantly changing. We get it. For this reason, we provide customized staffing solutions to suit - flex staff, contract staff, temporary staff, temp-to-hire staff, and project staff. Fluctuating and temporary projects don't always justify the hiring of short-term or frequent staff. MPS staffing solutions delivers experienced unofficial on-call staff - whether you need them tomorrow or next month, for a few hours, one day or one week. We have you protected for sick leaves, maternity, offshore trainings or meetings, vacations and special projects. Each casual staff will have been interviewed, screened and reference examined.";
		$data['servicetwob'] = 'Meet Your Needs Talented, Qualified Casual Staff';
		
		$data['servicethreea'] = 'Advanced training solutions for advanced organisations...';
		$data['servicethreeb'] = 'MPS provides learning and development solutions for organisations, employees and individuals. Our programmes are innovative, effective and are designed to support personal development and organisational growth. We not only offer training courses and development programmes but we can also help you with projects such as designing competency frameworks, training plans, training needs analysis, training department set up and training consulting.';
		$data['servicethreec'] = 'We offer our clients training interventions that will help them develop their "HUMAN" resources to remain competitive in the marketplace. We focus on interventions that will develop employees for their current jobs and preparing employees for future roles and responsibilities. MPS offers a wide range of training and consultancy services as well as assessment and international accredited certification. In partnership with reputable international training bodies, we organize for all industries, which include:';
		
		$data['servicefive'] = "Balancing the mix of conditional work, consultants, and independent contractors is crucial to meeting the specification of the modern ever-changing business world. Competing on an international stage requires employee's versatility. MPS collaborates with you to produce workforce strategies and personalized solutions so you can improve your use of conditional work to fulfil the needs of your business. Our solutions leverage strategic Vendor Management System (VMS) capabilities selected and tailored to meet your unique needs and offer the flexibility to adapt to market fluctuations. MPS brings managers, vendors and contingent workers together to get the right person, at the right time, at a competitive price.";
		$data['process_overview'] = 'MPS is aware no two projects are identical, thus we aim to provide unique solutions tailored to the
									 requirements of the project objectives at hand. Our search process guarantees we find the best business
									  process strategy and significant talent for your business across our professional areas.';

		return $data;
	}
} 
