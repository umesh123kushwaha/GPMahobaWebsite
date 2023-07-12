<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$params['status']=1;
		$data['principal']=$this->Admin_model->getprincipaldata($params);
		$this->load->view('front/home',$data);
	}
	public function about()
	{
			$this->load->view('front/about');
	}
	public function courses()
	{
		// code...
		$this->load->view('front/courses');
	}
	public function contactus()
	{
			$this->load->view('front/contactus');
	}
	public function hostels()
	{
		// code...
		$this->load->view('front/hostels');
	}
	public function gallary()
	{
		// code...
		$this->load->model('Admin_model');
		$gallary=$this->Admin_model->getGallaryImages();
		$data['gallarydata']=$gallary;
		$this->load->view('front/gallary', $data);
	}
	public function department($value)
	{
		// code...
		
	    $string=base64_decode($value);

	   
		$this->load->model('Admin_model');
		$params['department_name']=$string;
		$Department=$this->Admin_model->getDepartments($params);
		
		
		
		$params['department_id']=$Department['id'];
		$staff_in_department=$this->Admin_model->getstaffInDepartment($params);
		$slider=$this->Admin_model->getdepartmentslider($params);
		$data['department_slider']=$slider;
		$data['department']=$Department;
		$data['staff_in_department']=$staff_in_department;
		$this->load->view('front/Department', $data, FALSE);
	}
}
