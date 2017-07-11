<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class About_model extends CI_Model {

	public function __construct()
	{
		parent::__construct();

	}

	public function get_post()
	{
		$data['title'] = 'About Us - MPS Consults';
		$data['page_title'] = 'About Us';
		$data['overview'] = 'Metropolitan Professional Support (MPS) is a functionality Consultancy firm that operates on solution
							 management of Human Capital for organizations. Our success is founded on unyielding international
							  procedures and best practices combined with in-depth knowledge of organizational and strategic Human
							   Resource Management. Allocating "The right person for the right job" is a solid guarantee that can only be
							    upheld by our quality, dedication and customer service. We provide a comprehensive search platform and
							     selection service to match clients vacancies with the best candidates. ';
		$data['vision'] = 'To be recognized as a world class Human Capital functionality solution provider.';
		$data['mission'] = 'Proactive in-house business partners with core functionality of Human Capital Management.';
		$data['principle'] = "We guarantee the professional services; keep concern to our client's need and preserve what we guarantee to our stakeholders.";		
		$data['corevalues'] = "Our core value is honesty and integrity combined with enthusiasm in service delivery of exceptional results to clients.";
		$data['team'] = "Our consultants are carefully selected based on their wide knowledge and core functionality strength with
						 the ability to add value as HR Partners. Our consultants are invested in the client's needs, building
						  connections based on proper knowledge of their business process, values and objectives for right result.
						   Every client will have a unique torch point at MPS with our higher level of resourcefulness.";
		$data['members'] = $this->db->get('team');
		$this->db->where('r_username', $this->session->userdata('r_username'));
		$data['query'] = $this->db->get('employers');
		$data['board_overview'] = $this->db->get('board_overview');
		$data['board'] = $this->db->get('board');
		return $data;
	}
} 
