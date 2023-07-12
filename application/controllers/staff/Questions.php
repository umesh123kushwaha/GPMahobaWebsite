<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Questions extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$staff = $this->session->userdata('staff');
		
		if (empty($staff)) {

			$this->session->set_flashdata('msg', 'Your Session has been expried');
			redirect(base_url().'login/index');
			# code...
		}
		$this->load->model('Questions_model');
		$this->load->model('Subjects_model');
		$this->load->model('Quiz_model');
		//$this->load->model('Mocktest_model');
	}

	public function index()
	{
		$q= '';//$this->input->post('q');
		$quiz_id=$this->input->get('quiz_id');
		$params['quiz_id']=$quiz_id;
		$data['quiz_id']=$quiz_id;

		$questions= $this->Questions_model->getQuestions($params);
		// echo $this->db->last_query();exit;
		$data['questions']=$questions;
		$data['queryString']=$q;


		$this->load->view('staff/questions/questions', $data);
	}

	public function add_new_question()
	{
		$quiz_id=$this->input->get('quiz_id');
		
		

		
		$data['quiz_id']=$quiz_id;

		$this->load->library('form_validation');
		$this->form_validation->set_error_delimiters('<p class="invalid-feedback">','</p>');

		$this->form_validation->set_rules('question', 'Question ', 'trim|required|min_length[5]');
		$this->form_validation->set_rules('option_a', 'Option ', 'trim|required');
		$this->form_validation->set_rules('option_b', 'Option ', 'trim|required');
		$this->form_validation->set_rules('option_c', 'Option ', 'trim|required');
		$this->form_validation->set_rules('option_d', 'Option ', 'trim|required');
		$this->form_validation->set_rules('answer', 'Currect Answer ', 'trim|required');
		

		if ($this->form_validation->run() ==  TRUE) {

			$formData['question']= $this->input->post('question');
			$formData['option_a']= $this->input->post('option_a');
			$formData['option_b']= $this->input->post('option_b');
			$formData['option_c']= $this->input->post('option_c');
			$formData['option_d']= $this->input->post('option_d');
			$formData['correct_ans']= $this->input->post('answer');
			
			$formData['ans_description']= $this->input->post('ans_description');
			$formData['created_at']= date('Y-m-d H-i-s');
			$formData['quiz_id']=$this->input->post('quiz_id');
			$question_no=1;
			$params['quiz_id']=$formData['quiz_id'];
			$status=1;
			while ($status!=0) {
				$params['question_no']=$question_no;
				// code...
				$getQuestion=$this->Questions_model->getQuestion($params);

				if (empty($getQuestion)	) {
						
						$status=0;
				} else {
					// code...
					$question_no++;
				}
				
			}
			// echo "$question_no";exit;
			$formData['question_no']=$question_no;
			$this->Questions_model->createNewQuestion($formData);
			$this->session->set_flashdata('success', 'Record Inserted Successfully');
			redirect('staff/questions?quiz_id='.$formData['quiz_id'],'refresh');

			# code...
		} else {
			# code...
			$this->load->view('staff/questions/newquestion', $data);
		}
		
		
	}

	public function edit_question()
	{
		$quiz_id=$this->input->get('quiz_id');
		$qid=$this->input->get('qid');
		$question=$this->Questions_model->getQuestion($qid);
		


		$data['question']=$question;
		$data['quiz_id']=$quiz_id;
		$data['qid']=$qid;
		

		$this->load->library('form_validation');

		
		$this->form_validation->set_error_delimiters('<p class="invalid-feedback">','</p>');

		$this->form_validation->set_rules('question', 'Question ', 'trim|required|min_length[5]');
		$this->form_validation->set_rules('option_a', 'Option ', 'trim|required');
		$this->form_validation->set_rules('option_b', 'Option ', 'trim|required');
		$this->form_validation->set_rules('option_c', 'Option ', 'trim|required');
		$this->form_validation->set_rules('option_d', 'Option ', 'trim|required');
		$this->form_validation->set_rules('answer', 'Currect Answer ', 'trim|required');
		

		if ($this->form_validation->run() ==  TRUE) {

			$formData['question']= $this->input->post('question');
			$formData['option_a']= $this->input->post('option_a');
			$formData['option_b']= $this->input->post('option_b');
			$formData['option_c']= $this->input->post('option_c');
			$formData['option_d']= $this->input->post('option_d');
			$formData['correct_ans']= $this->input->post('answer');
			
			$formData['ans_description']= $this->input->post('ans_description');
			$formData['updated_at']= date('Y-m-d H-i-s');
			$this->Questions_model->updateQuestion($qid,$formData);
			$this->session->set_flashdata('success', 'Record Updated Successfully');

			redirect('staff/questions/index?quiz_id='.$quiz_id,'refresh');

			# code...
		} else {
			# code...
			$this->load->view('staff/questions/editquestion', $data);
		}
	}

	public function upload_image(){
		if(isset($_FILES["image"]["name"])){
			$config['upload_path'] = './assests/uploads/questions/';
			//echo $config['upload_path'];
			$config['allowed_types'] = 'jpg|jpeg|png|gif';
			 $this->load->library('upload');
			$this->upload->initialize($config);
			if(!$this->upload->do_upload('image')){
				$this->upload->display_errors();
				return FALSE;
			}else{
				$data = $this->upload->data();
				// print_r($data) ;exit;
		        //Compress Image
		        $config['image_library']='gd2';
		        $config['source_image']='./assests/uploads/questions/'.$data['file_name'];
		        $config['create_thumb']= FALSE;
	            $config['maintain_ratio']= TRUE;
	            $config['quality']= '60%';
	            $config['width']= 800;
	            $config['height']= 800;
	            $config['new_image']= './assests/uploads/questions/'.$data['file_name'];
	            $this->load->library('image_lib', $config);
	            $this->image_lib->resize();
				echo base_url().'assests/uploads/questions/'.$data['file_name'];
			}
		}
	}

	//Delete image summernote
	public function delete_image(){
		$src = $this->input->post('src');
		$file_name = str_replace(base_url(), '', $src);
		if(unlink($file_name)){
	        echo 'File Delete Successfully';
	    }
	}
	public function delete_question()
	{
		$qid=$this->input->get('qid');
		$quiz_id=$this->input->get('quiz_id');
		$status=$this->Questions_model->getQuestion($qid);
		if (empty($status)) {
			$this->session->set_flashdata('error', 'Unable to delete question');
			redirect('staff/questions/index?quiz_id='.$quiz_id,'refresh');

		} else {
			# code...
			$this->Questions_model->delete_question($qid);
			$this->session->set_flashdata('success', 'Question Deleted Successfully');
			redirect('staff/questions/index?quiz_id='.$quiz_id,'refresh');
		}
		
		
	}

	

}

//Upload image summernote
	

/* End of file Questions.php */
/* Location: ./application/controllers/Questions.php */