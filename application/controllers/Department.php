<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Department extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Admin_model');
	}

	public function index()
	{
		
	}
	public function IT()
	{
		$this->load->model('Admin_model');
		$params['depatment_name']='Information Technology';
		$Department=$this->Admin_model->getDepartments($params);
		$params['department_id']=$Department['id'];
		$staff_in_department=$this->Admin_model->getstaffInDepartment($params);
		$data['department']=$Department;
		$data['staff_in_department']=$staff_in_department;
		$this->load->view('front/Department', $data, FALSE);
	}

}

/* End of file Department.php */
/* Location: ./application/controllers/Department.php */