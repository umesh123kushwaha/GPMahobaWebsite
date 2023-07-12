<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Attendance extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$userdata=$this->session->userdata('userdata');
		if (empty($userdata)) {
			# code...
			$this->session->set_flashdata('msg', 'Your Session Time Out ! Please Login Again');
			redirect(base_url('login'),'refresh');
		}
	}

	public function index()
	{
		$this->load->view('students/stdattendance');
	}
	public function student_view_attendance()
	{
		# code...
		$this->load->view('students/stdviewattendancedata');
	}

}

/* End of file Attendance.php */
/* Location: ./application/controllers/students/Attendance.php */