<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Assignment extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$staff = $this->session->userdata('staff');
		
		if (empty($staff)) {

			$this->session->set_flashdata('msg', 'Your Session has been expried');
			redirect(base_url().'login/index');
			# code...
		}
		$this->load->library('form_validation');
		
		$this->load->model('Staff_model');
	}

	public function index($page=1)
	{
		
		$this->load->library('pagination');
		$this->load->helper('text');
		$queryString= $this->input->get('q');
		$params['queryStrings']=$queryString;
		
		$config['base_url'] = base_url('staff/assignment/index');
		$config['total_rows'] = $this->Staff_model->getAssignmentCount($params);
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
			// $queryString= $this->input->get('q');
		// $params['queryStrings']=$queryString;
		$params['offset']=$config['per_page'];
		$params['limit']=($page*$config['per_page'])-$config['per_page'];
		// print_r($params);exit;
		$assignments=$this->Staff_model->getAssignments($params);
		$data['assignments']=$assignments;
		$data['pagination_links']=$pagination_links;
		$data['queryString']=$queryString;
		$data['params']=$params;
		$data['mainModule']='assignment';
		$data['subModule']='checkassigment';
		// print_r($categories);exit;

		$this->load->view('staff/assignment/assignmentlist',$data);
			
	}
	public function upload_assignment()
	{
		$branches=$this->Staff_model->getbranches();
		$config['upload_path'] = './assests/uploads/assignment/';
		$config['allowed_types'] = 'pdf|jpg|docx|doc';
		$config['max_size']  = '1000';
		// $config['max_width']  = '1024';
		// $config['max_height']  = '768';
		
		$this->load->library('upload', $config);
		
		$userdata= $this->session->userdata('staff');
		$data['branches']=$branches;
		$this->form_validation->set_error_delimiters('<p class="invalid-feedback">','</p>');
		$this->form_validation->set_rules('title', 'Title', 'trim|required');
		// $this->form_validation->set_rules('discription', 'Discription', 'trim|required');
		if (empty($_FILES['file']['name']))
		{
		    $this->form_validation->set_rules('file', 'File', 'required');
		}
		$this->form_validation->set_rules('branch', 'Branch', 'trim|required');
		$this->form_validation->set_rules('semester', 'Semester', 'trim|required');
		$this->form_validation->set_rules('subject', 'Subject', 'trim|required');
		
		if ($this->form_validation->run() == true) 
		{
			# code...
			if ( ! $this->upload->do_upload('file'))
			{
				 $error =  $this->upload->display_errors('<p class="invalid-feedback">','</p>');
                 $data['errorImageUpload']=$error;	
                 print_r($error);exit;				
                 $this->load->view('staff/assignment/upload_assignment', $data);
			}
			else
			{
				$data = $this->upload->data();
				$formData['title']=$this->input->post('title');
				$formData['description']=$this->input->post('discription');
				$formData['subject']= $this->input->post('subject');
				$formData['branch']= $this->input->post('branch');
				$formData['semester']= $this->input->post('semester');
				$formData['file']= $data['file_name'];
				$formData['uploaded_by']= $userdata['staff_name'];
				$formData['created_at']= date('Y-m-d H-i-s');
				$this->Staff_model->save_assignment($formData);
				$this->session->set_flashdata('success', 'Record Inserted Successfully');
				redirect('staff/assignment/index','refresh');
				// echo "success";
				// print_r($data);exit;

			}
		} 
		else 
		{
			# code...
			$this->load->view('staff/assignment/upload_assignment',$data);
		}
		
	}
	public function edit_assignment($id)
	{
		# code...
		$assignmentData=$this->Staff_model->getAssignment($id);
		$data['assignment']=$assignmentData;

		$branches=$this->Staff_model->getbranches();
		$config['upload_path'] = './assests/uploads/assignment/';
		$config['allowed_types'] = 'pdf|jpg|docx|doc';
		$config['max_size']  = '1000';
		// $config['max_width']  = '1024';
		// $config['max_height']  = '768';
		
		$this->load->library('upload', $config);
		
		$userdata= $this->session->userdata('staff');
		$data['branches']=$branches;
		$this->form_validation->set_error_delimiters('<p class="invalid-feedback">','</p>');
		$this->form_validation->set_rules('title', 'Title', 'trim|required');
		$this->form_validation->set_rules('discription', 'Discription', 'trim|required');
		if (empty($_FILES['file']['name']))
		{
		    $this->form_validation->set_rules('file', 'File', 'required');
		}
		$this->form_validation->set_rules('course', 'course', 'trim|required');
		$this->form_validation->set_rules('semester', 'Semester', 'trim|required');
		$this->form_validation->set_rules('subject', 'Subject', 'trim|required');
		
		if ($this->form_validation->run() == true) 
		{
			# code...
			if (!empty($_FILES['file']['name'])) {
				# code...
				if ( ! $this->upload->do_upload('file'))
				{
					 $error =  $this->upload->display_errors('<p class="invalid-feedback">','</p>');
	                 $data['errorImageUpload']=$error;	
	              			
	                 $this->load->view('staff/assignment/edit_assignment', $data);
				}
				else
				{
					$data = $this->upload->data();
					$formData['title']=$this->input->post('title');
					$formData['description']=$this->input->post('discription');
					$formData['subject']= $this->input->post('subject');
					$formData['branch']= $this->input->post('course');
					$formData['semester']= $this->input->post('semester');
					$formData['file']= $data['file_name'];
					$formData['uploaded_by']= $userdata['staff_name'];
					$formData['created_at']= date('Y-m-d H-i-s');
					$this->Staff_model->update_assignment($formData,$id);
					
					//delete old file
					if (file_exists('./assests/uploads/assignment/'.$assignmentData['file'])) {
						# code...
						unlink('./assests/uploads/assignment/'.$assignmentData['file']);
						



					}
					$this->session->set_flashdata('success', 'Record Updated Successfully');
					redirect('staff/assignment/index','refresh');
					// echo "success";
					// print_r($data);exit;

				}


			} else
			 {
				# code...
					$formData['title']=$this->input->post('title');
					$formData['description']=$this->input->post('discription');
					$formData['subject']= $this->input->post('subject');
					$formData['branch']= $this->input->post('course');
					$formData['semester']= $this->input->post('semester');
					
					$formData['uploaded_by']= $userdata['staff_name'];
					$formData['created_at']= date('Y-m-d H-i-s');
					$this->Staff_model->update_assignment($formData,$id);
					$this->session->set_flashdata('success', 'Record Updated Successfully');
					redirect('staff/assignment/index','refresh');


			}
			
			
		} 
		else 
		{
			# code...
			$this->load->view('staff/assignment/edit_assignment',$data);
		}

	}
	public function delete_assignment()
	{
		$assignment_id= $this->input->get('assignment_id');
		$assignment=$this->Staff_model->getAssignment($assignment_id);
		// print_r($assignment);exit;
		if (empty($assignment)) {
			# code...
			$this->session->set_flashdata('error', 'Data Not Found');
			redirect('staff/assignment/index','refresh');
		}
		$this->Staff_model->delete_assignment($assignment_id);
		if (file_exists('./assests/uploads/assignment/'.$assignment['file'])) 
		{
			# code...
			unlink('./assests/uploads/assignment/'.$assignment['file']);
		
		}
		$this->session->set_flashdata('success', 'Record deleted Successfully');
		redirect('staff/assignment','refresh');

		# code...
	}

}

/* End of file Assignment.php */
/* Location: ./application/controllers/staff/Assignment.php */