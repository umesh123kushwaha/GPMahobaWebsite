<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Staff extends CI_Controller {

	public function index()
	{
		echo "Welcome staff";
	}
	public function addStaff($value='')
	{
		# code...

		$this->load->helper('common_helper');
	

 		$config['upload_path']          = './assests/uploads/staff/';
        $config['allowed_types']        = 'gif|jpg|png';
        $config['encrypt_name']   		= true;
        // $config['max_size']             = 100;
        // $config['max_width']            = 1024;
        // $config['max_height']           = 768;

        $this->load->library('upload', $config);
		$this->load->model('Admin_model');
		$this->load->library('form_validation');
		$this->form_validation->set_error_delimiters('<p class="invalid-feedback">','</p>');
		$this->form_validation->set_rules('pfname', 'Principal Full Name', 'trim|required');
		$this->form_validation->set_rules('gender', 'Gender', 'trim|required');
		if (empty($_FILES['image']['name']))
		{
		    $this->form_validation->set_rules('image', 'Image', 'required');
		}
		//$this->form_validation->set_rules('image', 'Image', 'trim|required');
		$this->form_validation->set_rules('qualification', 'Qualification', 'trim|required');
		$this->form_validation->set_rules('username', 'username', 'trim|required');
		$this->form_validation->set_rules('leave_date', 'Leaving Date', 'trim|required');
		$this->form_validation->set_rules('email', 'Email', 'trim|required');
		$this->form_validation->set_rules('pwd', 'Password', 'trim|required');
		$this->form_validation->set_rules('cpwd', 'Confirm Password', 'trim|required');
		if ($this->form_validation->run() == TRUE) {
			# code...
			if (!empty($_FILES['image']['name'])) {
				# if user select a file 
				 if ( $this->upload->do_upload('image'))
                {
                        $data= $this->upload->data();
						// echo "<pre>";
						// print_r($data);
						// echo "</pre>";exit;


						// Image Resiging Part
						


                        // $this->load->view('upload_success', $data);
                	$formArray['principal_pic']=$data['file_name'];
                	$formArray['principal_name']=$this->input->post('pfname');
                	$formArray['gender']=$this->input->post('gender');
                	$formArray['qualification']=$this->input->post('qualification');
                	$formArray['principal_messages']=$this->input->post('principal_message');
					$formArray['joining_date']=$this->input->post('jdate');
					$formArray['leave_date']=$this->input->post('leave_date');
					$formArray['created_at']=date('Y-m-d H:i:s');
					$prid=$this->Admin_model->addprincipal($formArray);
					$principal_data['rid']= $prid;
					$principal_data['usrname']= $this->input->post('username');
					$principal_data['utype']= $this->input->post('usertype');
					$principal_data['email']= $this->input->post('email');
					$principal_data['mobno']= $this->input->post('mobno');
					$principal_data['pass']= password_hash($this->input->post('password'), PASSWORD_DEFAULT);
					$this->Admin_model->adddatainlogin($principal_data);
					$this->session->set_flashdata('success','Principal Registration  successfully.');
					redirect(base_url().'admin/principal');
                }
                else
                {
                       
                    $error =  $this->upload->display_errors('<p class="invalid-feedback">','</p>');
                    $data['errorImageUpload']=$error;					
                    $this->load->view('admin/addstaff', $data);
                }
			}


		} else {
			# code...
			$data['mainModule']='principal'; 
			$data['subModule']='addprincipal';
			$this->load->view('admin/addstaff',$data);
		}
	}

}

/* End of file Staff.php */
/* Location: ./application/controllers/admin/Staff.php */