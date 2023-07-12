<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
	public function __construct()
	{

		parent::__construct();
		$userdata=$this->session->userdata('userdata');
		$utype=$this->session->userdata('utype');
		if(empty($userdata) && $utype!=5){
			$this->session->set_flashdata('msg', 'Your Session Time Out');
			redirect('admlogin','refresh');


		}
		$this->load->model('Admin_model');
	}

	public function index()
	{
		
			$this->load->view('admin/deshboard');

	}
	public function addprincipal()
	{
		$this->load->helper('common_helper');
	

 		$config['upload_path']          = './assests/uploads/principal/';
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
                	$formArray['email']=$this->input->post('email');
                	$formArray['mobno']=$this->input->post('mobno');
                	$formArray['principal_messages']=$this->input->post('principal_message');
					$formArray['joining_date']=$this->input->post('jdate');
					$formArray['leave_date']=$this->input->post('leave_date');
					$formArray['created_at']=date('Y-m-d H:i:s');
					$prid=$this->Admin_model->addprincipal($formArray);
					$principal_data['rid']= $prid;
					$principal_data['usrname']= $this->input->post('username');
					$principal_data['utype']= $this->input->post('usertype');
					// $principal_data['email']= $this->input->post('email');
					// $principal_data['mobno']= $this->input->post('mobno');
					$principal_data['pass']= password_hash($this->input->post('password'), PASSWORD_DEFAULT);
					$this->Admin_model->adddatainlogin($principal_data);
					$this->session->set_flashdata('success','Principal Registration  successfully.');
					redirect(base_url().'admin/principal');
                }
                else
                {
                       
                    $error =  $this->upload->display_errors('<p class="invalid-feedback">','</p>');
                    $data['errorImageUpload']=$error;					
                    $this->load->view('admin/addprincipal', $data);
                }
			}


		} else {
			# code...
			$data['mainModule']='principal';
			$data['subModule']='addprincipal';
			$this->load->view('admin/addprincipal',$data);
		}
	}
	
	public function principal()
	{
		# code...
		$this->load->model('Admin_model');
		$this->load->library('pagination');
		$this->load->helper('text');

		$queryString='';
		$config['base_url'] = base_url('admin/principal');
		$config['total_rows'] = '';//$this->Article_model->getArticlesCount($params);
		$config['per_page'] = 5;
		$config['use_page_numbers'] = true;
		// $config['uri_segment'] = 3;
		// $config['num_links'] = 3;
		$config['full_tag_open'] = '<ul class="pagination"> ';
		$config['full_tag_close'] = '</ul>';
		$config['num_tag_open'] = '<li class="page-item">';
		$config['num_tag_close'] = '</li>';
		
		$config['first_link'] = 'First';
		$config['first_tag_open'] = '<li class="page-item">';
		$config['first_tag1_close'] = '</li>';
		$config['last_link'] = 'Last';
		$config['last_tag1_open'] = '<li class="page-item">';
		$config['last_tag_close'] = '</li>';
		$config['next_link'] = 'Next';
		$config['next_tag_open'] = '<li class="page-item">';
		$config['next_tag1_close'] = '</li>';
		$config['prev_link'] = 'Previous';
		$config['prev_tag_open'] = '<li class="page-item">';
		$config['prev_tag1_close'] = '</li>';
		$config['cur_tag_open'] = '<li class="page-item"><li class="active page-item"><a href="#" class="page-link">';
		$config['cur_tag_close'] = '<span class="sr-only"></span></a></li></li>';
		$config['attributes']= array('class' =>'page-link'  );
		
		$this->pagination->initialize($config);
		
		$pagination_links= $this->pagination->create_links();
		$principal_data=$this->Admin_model->getprincipaldata();
		$data['principal']=$principal_data;
		$data['queryString']=$queryString;
		$data['pagination_links']=$pagination_links;
		$this->load->view('admin/principallist', $data);
	}
	
	public function addStaff($value='')
	{
		# code...

		$this->load->helper('common_helper');
	

 		$config['upload_path']          = './assests/uploads/staff/';
        $config['allowed_types']        = 'gif|jpg|jpeg|png';
        $config['encrypt_name']   		= true;
        // $config['max_size']             = 100;
        // $config['max_width']            = 1024;
        // $config['max_height']           = 768;

        $this->load->library('upload', $config);
		$this->load->model('Admin_model');
		$this->load->library('form_validation');
		$this->form_validation->set_error_delimiters('<p class="invalid-feedback">','</p>');
		$this->form_validation->set_rules('sfname', 'Staff Full Name', 'trim|required');
		$this->form_validation->set_rules('gender', 'Gender', 'trim|required');
		if (empty($_FILES['image']['name']))
		{
		    $this->form_validation->set_rules('image', 'Image', 'required');
		}
		//$this->form_validation->set_rules('image', 'Image', 'trim|required');
		$this->form_validation->set_rules('qualification', 'Qualification', 'trim|required');
		$this->form_validation->set_rules('username', 'username', 'trim|required');
		$this->form_validation->set_rules('mobno', 'Mobile Number', 'trim|required');
		$this->form_validation->set_rules('jdate', 'Joining  Date', 'trim|required');
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
                	$formArray['staff_pic']=$data['file_name'];
                	$formArray['staff_name']=$this->input->post('sfname');
                	$formArray['gender']=$this->input->post('gender');
                	$formArray['qualification']=$this->input->post('qualification');
                	$formArray['staff_about']=$this->input->post('staff_about');
					$formArray['joining_date']=$this->input->post('jdate');
					$formArray['mobno']=$this->input->post('mobno');
					$formArray['email']=$this->input->post('email');
					$formArray['leave_date']=$this->input->post('leave_date');
					$formArray['created_at']=date('Y-m-d H:i:s');
					if($formArray['leave_date']=='present'){
						$formArray['status']=1;
					}
					$prid=$this->Admin_model->addstaff($formArray);
					$staff_data['rid']= $prid;
					$staff_data['usrname']= $this->input->post('username');
					$staff_data['utype']= $this->input->post('usertype');
					// $staff_data['email']= $this->input->post('email');
					// $staff_data['mobno']= $this->input->post('mobno');
					$staff_data['pass']= password_hash($this->input->post('pwd'), PASSWORD_DEFAULT);
					$this->Admin_model->adddatainlogin($staff_data);
					$this->session->set_flashdata('success','Staff Registration  successfully.');
					redirect(base_url().'admin/staffs');
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
			$data['mainModule']='staff'; 
			$data['subModule']='addStaff';
			$this->load->view('admin/addstaff',$data);
		}
	}
	public function staffs($value='')
	{
		# code...

		# code...
		$this->load->model('Admin_model');
		$this->load->library('pagination');
		$this->load->helper('text');

		$queryString='';
		$config['base_url'] = base_url('admin/staffs');
		$config['total_rows'] = '';//$this->Article_model->getArticlesCount($params);
		$config['per_page'] = 5;
		$config['use_page_numbers'] = true;
		// $config['uri_segment'] = 3;
		// $config['num_links'] = 3;
		$config['full_tag_open'] = '<ul class="pagination"> ';
		$config['full_tag_close'] = '</ul>';
		$config['num_tag_open'] = '<li class="page-item">';
		$config['num_tag_close'] = '</li>';
		
		$config['first_link'] = 'First';
		$config['first_tag_open'] = '<li class="page-item">';
		$config['first_tag1_close'] = '</li>';
		$config['last_link'] = 'Last';
		$config['last_tag1_open'] = '<li class="page-item">';
		$config['last_tag_close'] = '</li>';
		$config['next_link'] = 'Next';
		$config['next_tag_open'] = '<li class="page-item">';
		$config['next_tag1_close'] = '</li>';
		$config['prev_link'] = 'Previous';
		$config['prev_tag_open'] = '<li class="page-item">';
		$config['prev_tag1_close'] = '</li>';
		$config['cur_tag_open'] = '<li class="page-item"><li class="active page-item"><a href="#" class="page-link">';
		$config['cur_tag_close'] = '<span class="sr-only"></span></a></li></li>';
		$config['attributes']= array('class' =>'page-link'  );
		
		$this->pagination->initialize($config);
		
		$pagination_links= $this->pagination->create_links();
		$staff_data=$this->Admin_model->getstaffdata();
		$data['staffs']=$staff_data;
		$data['queryString']=$queryString;
		$data['pagination_links']=$pagination_links;
		$this->load->view('admin/stafflist', $data);
	}
	public function edit_staff($id)
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
		$staff=$this->Admin_model->getstaff($id);
		$data['staff']=$staff;
		$this->load->library('form_validation');
		$this->form_validation->set_error_delimiters('<p class="invalid-feedback">','</p>');
		$this->form_validation->set_rules('sfname', 'Staff Full Name', 'trim|required');
		$this->form_validation->set_rules('gender', 'Gender', 'trim|required');
		
		//$this->form_validation->set_rules('image', 'Image', 'trim|required');
		$this->form_validation->set_rules('qualification', 'Qualification', 'trim|required');
		
		$this->form_validation->set_rules('mobno', 'Mobile Number', 'trim|required');
		$this->form_validation->set_rules('jdate', 'Joining  Date', 'trim|required');
		$this->form_validation->set_rules('leave_date', 'Leaving Date', 'trim|required');
		
			
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
                	$formArray['staff_pic']=$data['file_name'];
                	$formArray['staff_name']=$this->input->post('sfname');
                	$formArray['gender']=$this->input->post('gender');
                	$formArray['qualification']=$this->input->post('qualification');
                	$formArray['staff_about']=$this->input->post('staff_about');
					$formArray['joining_date']=$this->input->post('jdate');
					$formArray['mobno']=$this->input->post('mobno');
					$formArray['leave_date']=$this->input->post('leave_date');
					$formArray['updated_at']=date('Y-m-d H:i:s');
					if($formArray['leave_date']=='present'){
						$formArray['status']=1;
					}
					$status=$this->Admin_model->updatestaff($formArray);
					if ($status==1) {
						# code...
						$this->session->set_flashdata('success','Staff Record Updated successfully.');
						redirect(base_url().'admin/staffs');
					} else {
						# code...
						$this->session->set_flashdata('error','Something Went Wrong.');
						redirect(base_url().'admin/edit_staff/'.$id);
					}
                }
                else
                {
                       
                    $error =  $this->upload->display_errors('<p class="invalid-feedback">','</p>');
                    $data['errorImageUpload']=$error;					
                    $this->load->view('admin/editstaff', $data);
                }
			}
			else
			{
				  
					$formArray['staff_name']=$this->input->post('sfname');
                	$formArray['gender']=$this->input->post('gender');
                	$formArray['qualification']=$this->input->post('qualification');
                	$formArray['staff_about']=$this->input->post('staff_about');
					$formArray['joining_date']=$this->input->post('jdate');
					$formArray['mobno']=$this->input->post('mobno');
					$formArray['leave_date']=$this->input->post('leave_date');
					$formArray['updated_at']=date('Y-m-d H:i:s');
					if($formArray['leave_date']=='present'){
						$formArray['status']=1;
					}
					else{
						$formArray['status']=0;
					}
					$status=$this->Admin_model->updatestaff($formArray,$id);
					if ($status==1) {
						# code...
						$this->session->set_flashdata('success','Staff Record Updated successfully.');
						redirect(base_url().'admin/staffs');
					} else {
						# code...
						$this->session->set_flashdata('error','Something Went Wrong.');
						redirect(base_url().'admin/edit_staff');
					}
					

			}


		} else {
			# code...
		
			$data['mainModule']='staff'; 
			$data['subModule']='addStaff';
			$this->load->view('admin/editstaff',$data);
		}
	}
	public function deletestaff($id)
	{
		# code...
		$this->load->model('Admin_model');
		$this->Admin_model->deletestaff($id);
		
		$this->session->set_flashdata('success', 'Record Deleted successfully');
		redirect(base_url().'admin/staffs','refresh');

	}
	public function addGallaryImage()
	{
		// code...
		$this->load->helper('common_helper');
	

 		$config['upload_path']          = './assests/uploads/gallary/';
        $config['allowed_types']        = 'gif|jpg|png';
        $config['encrypt_name']   		= true;
        // $config['max_size']             = 100;
        // $config['max_width']            = 1024;
        // $config['max_height']           = 768;

        $this->load->library('upload', $config);
		$this->load->model('Admin_model');
		$this->load->library('form_validation');
		$this->form_validation->set_error_delimiters('<p class="invalid-feedback">','</p>');
		$this->form_validation->set_rules('title', 'Title', 'trim|required');
		
		if (empty($_FILES['image']['name']))
		{
		    $this->form_validation->set_rules('image', 'Image', 'required');
		}
		
		
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
                	$formArray['image']=$data['file_name'];
                	$formArray['title']=$this->input->post('title');
                	
					$formArray['created_at']=date('Y-m-d H:i:s');
					$this->Admin_model->addgallary($formArray);
					
					$this->session->set_flashdata('success','Image Added   successfully.');
					redirect(base_url().'admin/gallary');
                }
                else
                {
                       
                    $error =  $this->upload->display_errors('<p class="invalid-feedback">','</p>');
                    $data['errorImageUpload']=$error;					
                    $this->load->view('admin/addgallary', $data);
                }
			}


		} else {
			# code...
			$data['mainModule']='gallary';
			$data['subModule']='addgallary';
			$this->load->view('admin/addgallary',$data);
		}
	}
	public function gallary()
	{
		// code...
		$queryString=$this->input->get('q');
		$data['queryString']=$queryString;
		$gallerydata=$this->Admin_model->getGallaryImages();
		$data['gallarydata']=$gallerydata;
		$this->load->view('admin/gallarylist', $data);
	}
	public function deletegallaryimage($id)
	{
		// code...
		$this->Admin_model->deleteimageformgallary($id);
		$this->session->set_flashdata('success','Image Deleted   successfully.');
		redirect(base_url().'admin/gallary');

	}
	public function logout()
	{
		$this->session->unset_userdata('userdata');
		$this->session->unset_userdata('utype');
		redirect('admlogin','refresh');
		# code...
	}


}


/* End of file Admin.php */
/* Location: ./application/controllers/Admin.php */