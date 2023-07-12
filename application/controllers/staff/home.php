<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct(){
		parent::__construct();

		$staff = $this->session->userdata('staff');
		
		if (empty($staff)) {

			$this->session->set_flashdata('msg', 'Your Session has been expried');
			redirect(base_url().'login/index');
			# code...
		}

	}

	public function index()
	{
		$staff = $this->session->userdata('staff');
		$this->load->view('staff/dashboard');
	}

}

/* End of file home.php */
/* Location: ./application/controllers/admin/home.php */
?>