<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		//Do your magic here
		
	}

	public function index()
	{	
		$admin = $this->session->userdata('userdata');
		
		$utype=$this->session->userdata('utype');
		// echo "$utype"; exit;
		if(!empty($admin)&& $utype==4)
		{
		  redirect(base_url().'students/deshboard');
		}
		if(!empty($admin)&& $utype==3)
		{
		  redirect(base_url().'staff/deshboard');
		}
		
		if (!empty($admin)&& $utype==5) {

			
			redirect(base_url().'admin');
			# code...
		}
		
		$this->load->library('form_validation');
		$this->load->view('login');
	}
	public function authenticate(){
		$this->load->library('form_validation');
		$this->load->model('Admin_model');
		$this->form_validation->set_rules('usrtype','User Type','trim|required');
		$this->form_validation->set_rules('userid','User Id','trim|required');
		$this->form_validation->set_rules('pwd','Password','trim|required');
		if ($this->form_validation->run() == true) {
			$uid=$this->input->post("userid");
			$pass=$this->input->post("pwd");
			$utype=$this->input->post('usrtype');
			$this->load->model("UserModel","UM");
			$result=$this->UM->CheckLoginInfo($uid,$pass,$utype);
			if($result!=0)
			{
				// echo "umesh";exit;

				
				$_SESSION["utype"]=$utype;
				if ($utype==2) {
					$this->session->set_userdata('staff',$result);
					$_SESSION['userdata']=$result;
					redirect(base_url()."staff/home",'refresh');
				}

				elseif ($utype==4) {
					$_SESSION["userdata"]=$result;
					redirect(base_url()."students/Deshboard");
				}
			}
			else
			{
				$this->session->set_flashdata("msg","Invalid User Id or Password.");
				redirect(base_url()."Login");
				
			}

			
		} else {
			$this->load->view('login');
		
	}
}
	function logout(){
		$this->session->unset_userdata('userdata');
		$this->session->unset_userdata('utype');
		redirect(base_url());
	}

}

/* End of file login.php */
/* Location: ./application/controllers/admin/login.php */