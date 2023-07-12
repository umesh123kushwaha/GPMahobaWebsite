<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function index()
	{
		
		$this->load->library('form_validation');
		$this->load->view('admin/admlogin');	
	}
	public function adm_athenticate()
	{

		$this->load->library('form_validation');
		$this->load->model('Admin_model','AM');
		$this->form_validation->set_error_delimiters('<p class="invalid-feedback">','</p>');
		$this->form_validation->set_rules('userid', 'User Id', 'trim|required');
		$this->form_validation->set_rules('pwd', 'Password', 'trim|required');
		if ($this->form_validation->run() == TRUE) {
			$uid=$this->input->post("userid");
			$pass=$this->input->post("pwd");
			$utype=$this->input->post('usrtype');
			
			$result=$this->AM->CheckLoginInfo($uid,$pass,$utype);
			if($result!=0)
			{
				$_SESSION["userdata"]=$uid;
				$_SESSION["utype"]=$utype;
				redirect(base_url()."admin");
			}
			else
			{
				$this->session->set_flashdata("msg","Invalid User Id or Password.");
				redirect(base_url('admin/login'));
				
			}


		} else {
			# code...
			$this->load->view('admin/admlogin');
		}
	}

}

/* End of file login.php */
/* Location: ./application/controllers/admin/login.php */