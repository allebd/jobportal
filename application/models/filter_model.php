<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

// This filter is used by select statements

class Filter_model extends CI_Model {

	public function __construct()
	{
		parent::__construct();

	}

	public function location_options()
	{
		$rows = $this->db->select('name')
				->from('states')
				->get()->result();

		$location_options = array('' => '' );
		foreach ($rows as $row) {
					$location_options[$row->name] = $row->name;
				}

		return $location_options;
	}

	public function no_of_emp_options()
	{
		$rows = $this->db->select('name')
				->from('no_of_emp')
				->get()->result();

		$no_of_emp_options = array('' => '' );
		foreach ($rows as $row) {
					$no_of_emp_options[$row->name] = $row->name;
				}

		return $no_of_emp_options;
	}

	public function year_options()
	{
		$rows = $this->db->select('name')
				->from('year_experience')
				->get()->result();

		$year_options = array('' => '' );
		foreach ($rows as $row) {
					$year_options[$row->name] = $row->name;
				}

		return $year_options;
	}

	public function industry_options()
	{
		$rows = $this->db->select('name')
				->from('industry')
				->get()->result();

		$industry_options = array('' => '' );
		foreach ($rows as $row) {
					$industry_options[$row->name] = $row->name;
				}

		return $industry_options;
	}

	public function country_options()
	{
		$rows = $this->db->select('name')
				->from('countries')
				->get()->result();

		$country_options = array('' => '' );
		foreach ($rows as $row) {
					$country_options[$row->name] = $row->name;
				}

		return $country_options;
	}

	public function job_type_options()
	{
		$rows = $this->db->select('name')
				->from('job_type')
				->get()->result();

		$job_options = array('' => '' );
		foreach ($rows as $row) {
					$job_options[$row->name] = $row->name;
				}

		return $job_options;
	}

	public function salary_options()
	{
		$rows = $this->db->select('name')
				->from('salary')
				->get()->result();

		$salary_options = array('' => '' );
		foreach ($rows as $row) {
					$salary_options[$row->name] = $row->name;
				}

		return $salary_options;
	}

	public function qualification_options()
	{
		$rows = $this->db->select('name')
				->from('highest_education')
				->get()->result();

		$qualification_options = array('' => '' );
		foreach ($rows as $row) {
					$qualification_options[$row->name] = $row->name;
				}

		return $qualification_options;
	}

	public function specialization_options()
	{
		$rows = $this->db->select('name')
				->from('specialization')
				->get()->result();

		$qualification_options = array('' => '' );
		foreach ($rows as $row) {
					$specialization_options[$row->name] = $row->name;
				}

		return $specialization_options;
	}

	public function gender_options()
	{
		$rows = $this->db->select('name')
				->from('gender')
				->get()->result();

		$gender_options = array('' => '' );
		foreach ($rows as $row) {
					$gender_options[$row->name] = $row->name;
				}

		return $gender_options;
	}

	public function relocate_options()
	{
		$rows = $this->db->select('name')
				->from('relocate')
				->get()->result();

		$relocate_options = array('' => '' );
		foreach ($rows as $row) {
					$relocate_options[$row->name] = $row->name;
				}

		return $relocate_options;
	}

	public function skill_options()
	{
		$rows = $this->db->select('name')
				->from('skills')
				->get()->result();

		$skill_options = array('' => '' );
		foreach ($rows as $row) {
					$skill_options[$row->name] = $row->name;
				}

		return $skill_options;
	}
}