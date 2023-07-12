<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Deshboard extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$userdata=$this->session->userdata('userdata');
		if (empty($userdata)) {
			$this->session->set_flashdata('msg', 'Your Session Time Out ! Please Login Again');
			# code...
			redirect(base_url('login'),'refresh');
		}
	}

	public function index()
	{
		$userdata=$this->session->userdata('userdata');
		$this->load->view('students/deshboard',$userdata);
	}

}

/* End of file Deshboard.php */
/* Location: ./application/controllers/students/Deshboard.php */