<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Quiz extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$staff = $this->session->userdata('staff');
		
		if (empty($staff)) {

			$this->session->set_flashdata('msg', 'Your Session has been expried');
			redirect(base_url().'login/index');
			
		}

		
		$this->load->model('staff_model');
		$this->load->model('quiz_model');
		$this->load->library('form_validation');
	}

	public function index($page=1)
	{
		// print_r($_GET);
		
		$this->load->library('pagination');
		$this->load->helper('text');
		$queryString= $this->input->get('q');
		$params['queryStrings']=$queryString;
		
		$config['base_url'] = base_url('staff/quiz/index');
		$config['total_rows'] = $this->quiz_model->getquizcount($params);
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
		$quiz_data=$this->quiz_model->get_quizes($params);
		$data['quiz_data']=$quiz_data;
		$data['queryString']=$queryString;
		$data['pagination_links']=$pagination_links;

		$this->load->view('staff/quiz/quizlist',$data);
		
	}
	public function new_quiz()
	{
		# code...
		$config['upload_path']          = './assests/uploads/quiz/';
        $config['allowed_types']        = 'gif|jpg|png';
        $config['encrypt_name']   		= true;
        // $config['max_size']             = 100;
        // $config['max_width']            = 1024;
        // $config['max_height']           = 768;
        $this->load->library('upload', $config);
		$branches=$this->staff_model->getbranches();
		$data['branches']=$branches;
		
		
		$this->form_validation->set_error_delimiters('<p class="invalid-feedback">','</p>');
		$this->form_validation->set_rules('title', 'Title', 'trim|required');
		$this->form_validation->set_rules('branch', 'branch', 'trim|required');
		$this->form_validation->set_rules('semester', 'Semester', 'trim|required');
		$this->form_validation->set_rules('subject', 'subject', 'trim|required');
		$this->form_validation->set_rules('topic', 'Topic', 'trim|required');
		$this->form_validation->set_rules('total_question', 'total question', 'trim|required');
		$this->form_validation->set_rules('duration', 'Duration ', 'trim|required');
		if ($this->form_validation->run() ==  TRUE) {


			$user = $this->session->userdata('admin');
			if (!empty($_FILES['image']['name']))
			 {

				 if ( ! $this->upload->do_upload('image')){
				 	$error =  $this->upload->display_errors('<p class="invalid-feedback">','</p>');
				 	 $data['errorImageUpload']=$error;					
                    	$this->load->view('staff/quiz/new_quiz', $data);

				 }
				 else
				 {
				 	$data = $this->upload->data();
					$formData['image']=$data['file_name'];
					$formData['title']=$this->input->post('title');
					$formData['description'] =$this->input->post('description');
					$formData['branch'] =$this->input->post('branch');
					$formData['semester'] =$this->input->post('semester');
					$formData['topic'] =$this->input->post('topic');
					$formData['subject'] =$this->input->post('subject');
					$formData['duration'] =$this->input->post('duration');
					$formData['total_question'] =$this->input->post('total_question');
					
					$formData['created_at']=date('Y-m-d H:i:s');
					
					// print_r($formData);
					// print_r($subjects);
					$this->quiz_model->new_quiz_save($formData);
					$this->session->set_flashdata('success', 'Recored inserted Successfully');
					
					redirect('staff/quiz/','refresh');
						 	
				 }
				
				# code...
			} 
			else
			{
				$formData['title']=$this->input->post('title');
				$formData['description'] =$this->input->post('description');
				$formData['branch'] =$this->input->post('branch');
				$formData['subject'] =$this->input->post('subject');
				$formData['topic'] =$this->input->post('topic');
				$formData['semester'] =$this->input->post('semester');
				
				$formData['duration'] =$this->input->post('duration');
				$formData['total_question'] =$this->input->post('total_question');
				$formData['created_at']=date('Y-m-d H:i:s');

				// print_r($formData);
				// print_r($subjects);
				$this->quiz_model->new_quiz_save($formData);
				$this->session->set_flashdata('success', 'Recored inserted Successfully');
				
					redirect('staff/quiz/','refresh');
			}
		} else {
			# code...
			$data['main_Module']='new_quiz';
			$data['sub_Module']='quiz';
			$this->load->view('staff/quiz/new_quiz',$data);
		}

		
	}
	public function edit_quiz($id)
	{
		# code...
		$data['quiz_data']=$this->quiz_model->get_quiz($id);
		$config['upload_path']          = './assests/uploads/quiz/';
        $config['allowed_types']        = 'gif|jpg|png';
        $config['encrypt_name']   		= true;
        // $config['max_size']             = 100;
        // $config['max_width']            = 1024;
        // $config['max_height']           = 768;
        $this->load->library('upload', $config);
		$branches=$this->staff_model->getbranches();
		$data['branches']=$branches;
		
		
		$this->form_validation->set_error_delimiters('<p class="invalid-feedback">','</p>');
		$this->form_validation->set_rules('title', 'Title', 'trim|required');
		$this->form_validation->set_rules('branch', 'branch', 'trim|required');
		$this->form_validation->set_rules('semester', 'Semester', 'trim|required');
		$this->form_validation->set_rules('subject', 'subject', 'trim|required');
		$this->form_validation->set_rules('topic', 'Topic', 'trim|required');
		$this->form_validation->set_rules('total_question', 'total question', 'trim|required');
		$this->form_validation->set_rules('duration', 'Duration ', 'trim|required');
		if ($this->form_validation->run() ==  TRUE) {


			$user = $this->session->userdata('admin');
			if (!empty($_FILES['image']['name']))
			 {

				 if ( ! $this->upload->do_upload('image')){
				 	$error =  $this->upload->display_errors('<p class="invalid-feedback">','</p>');
				 	 $data['errorImageUpload']=$error;					
                    	$this->load->view('staff/quiz/new_quiz', $data);

				 }
				 else
				 {
				 	$data = $this->upload->data();
					$formData['image']=$data['file_name'];
					$formData['title']=$this->input->post('title');
					$formData['description'] =$this->input->post('description');
					$formData['branch'] =$this->input->post('branch');
					$formData['semester'] =$this->input->post('semester');
					$formData['topic'] =$this->input->post('topic');
					$formData['subject'] =$this->input->post('subject');
					$formData['duration'] =$this->input->post('duration');
					$formData['total_question'] =$this->input->post('total_question');
					$formData['status'] =$this->input->post('status');
					
					$formData['updated_at']=date('Y-m-d H:i:s');
					
					// print_r($formData);
					// print_r($subjects);
					$this->quiz_model->quiz_update($formData,$id);
					$this->session->set_flashdata('success', 'Recored Updated Successfully');
					
					redirect('staff/quiz/','refresh');
						 	
				 }
				
				# code...
			} 
			else
			{
				$formData['title']=$this->input->post('title');
				$formData['description'] =$this->input->post('description');
				$formData['branch'] =$this->input->post('branch');
				$formData['subject'] =$this->input->post('subject');
				$formData['topic'] =$this->input->post('topic');
				$formData['semester'] =$this->input->post('semester');
				$formData['topic'] =$this->input->post('topic');
				$formData['duration'] =$this->input->post('duration');
				$formData['total_question'] =$this->input->post('total_question');
				$formData['status'] =$this->input->post('status');
				$formData['updated_at']=date('Y-m-d H:i:s');

				// print_r($formData);
				// print_r($subjects);
				$this->quiz_model->quiz_update($formData,$id);
				$this->session->set_flashdata('success', 'Recored updated Successfully');
				
					redirect('staff/quiz/','refresh');
			}
		} else {
			# code...
			$data['main_Module']='new_quiz';
			$data['sub_Module']='quiz';
			$this->load->view('staff/quiz/edit_quiz',$data);
		}


	}
	public function getsubjects()
	{
		# code...
		$branch_Id=$this->input->post('branch');
		$semester=$this->input->post('semester');
		$subjects= $this->staff_model->getsubjects($branch_Id,$semester);
		$data['subjects']=$subjects;
		$subjectsstrings=$this->load->view('staff/quiz/select-subjects', $data, true);
		$response['subjects']=$subjectsstrings;
		echo json_encode($response);
		
	}
	public function delete_quiz($id)
	{
		# code...
		$this->load->model('quiz_model');
		$quiz=$this->quiz_model->get_quiz($id);
		if(empty($quiz)){
			$this->session->set_flashdata('error','Oops ! Category Not found!!');
			redirect(base_url().'staff/quiz/index');
		} 

		$this->quiz_model->delete_quiz($id);

		if (file_exists('./assests/uploads/quiz/'.$quiz['image']))
		 {
			unlink('./assests/uploads/quiz/'.$quiz['image']);
		}
		
		

		$this->session->set_flashdata('success','quiz delted successfully.');
		
		redirect(base_url().'staff/quiz/index');
	}

}

/* End of file Quiz.php */
/* Location: ./application/controllers/staff/Quiz.php */