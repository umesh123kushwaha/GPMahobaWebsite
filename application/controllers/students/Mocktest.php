<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mocktest extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$userdata=$this->session->userdata('userdata');
		if (empty($userdata)) {
			# code...
			$this->session->set_flashdata('msg', 'Your Session Time Out ! Please Login Again');
			$this->session->set_flashdata('msg', 'Your Session Time Out Please Login Again!');
			redirect(base_url('login'),'refresh');
		}
		$this->load->model('Mocktest_model');
		$this->load->model('Questions_model');
	}

	public function Mocktest_instructions()
	{
		$mocktest_id= $this->input->get('mocktest_id');
		$mocktest=$this->Mocktest_model->getMocktest($mocktest_id);
		$data['mocktest']=$mocktest;
		$this->load->view('students/instructions', $data, FALSE);
		
	}
	public function startExam($page=1)
	{
		$mocktest_id=$this->input->post('mocktest_id');
		$mocktest=$this->Mocktest_model->getMocktest($mocktest_id);
		$params['mocktest_id']=$mocktest_id;
		$total_row= $this->Mocktest_model->countQuestionsInMocktest($params);
		$allquestions=$this->Mocktest_model->getQuestionsInMocktest($params);
		$subjects=$this->Mocktest_model->getSubjectInMocktest($params);
		$params['offset']=1;
		$params['limit']=$page*1-1;
		
		

		$questions= $this->Mocktest_model->getQuestionsInMocktest($params);

		$nextpage=$page+1;

		$data['question']=$questions;
		$data['subjects']=$subjects;
		$data['mocktest']=$mocktest;
		$data['nextpage']=$nextpage;
		$data['allquestions']=$allquestions;
		$questionstrings=$this->load->view('students/questions', $data, true);
		$data['mocktestquestion']=$questionstrings;


		$this->load->view('students/startExam',$data);
		# code...
	}
	public function getquestions()
	{
		$mocktest_id=$this->input->post('mocktest_id');
		$subject_id=$this->input->post('subject_id');
		$page=$this->input->post('page');
		$params['mocktest_id']=$mocktest_id;
		
		
		$total_row= $this->Mocktest_model->countQuestionsInMocktest($params);
		$params['offset']=1;
		$params['limit']=$page*1-1;
		$params['subject_id']=$subject_id;

		$questions= $this->Mocktest_model->getQuestionsInMocktest($params);
		$data['question']=$questions;
		$data['nextpage']=$page+1;
		
		$questionstrings=$this->load->view('students/questions', $data, true);
		$response['questions']=$questionstrings;
			echo json_encode($response) ;

		# code...
	}

}

/* End of file Mocktest.php */
/* Location: ./application/controllers/students/Mocktest.php */