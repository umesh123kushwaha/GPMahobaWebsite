<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class StdQuiz extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Subjects_model');
		$this->load->model('Quiz_model');
		$this->load->model('Questions_model');
	}

	public function index()
	{
		$subjects=$this->Subjects_model->getSubjects();
		$data['Subjects']=$subjects;


		$this->load->view('students/stdQuizFile', $data);
		
	}
	public function student_get_topic()
	{
		$subject_id=$this->input->post('subject');

		# code...
		$topics=$this->Quiz_model->get_quiz_topic($subject_id);
		$data['topics']=$topics;
		$topicstring=$this->load->view('students/select_topic', $data, true);
		$response['topics']=$topicstring;
		echo json_encode($response);
	}
	public function student_quiz_instruction(){
		$quiz_id= $this->input->get('quiz');
		$params['quiz_id']=$quiz_id;
		$quiz=$this->Quiz_model->get_quizes($params);
		$data['quiz']=$quiz;
		$this->load->view('students/instructions', $data);

	}
	public function student_quizes(){
		$subject_id=$this->input->post('subject');
		$topic=$this->input->post('topic');
		$params['topic']=$topic;
		$params['subject']=$subject_id;
		$quizes=$this->Quiz_model->get_quizes($params);
		$data['quizes']=$quizes;
		echo $this->db->last_query();
		$this->load->view('students/student_quizes', $data);
	}
	public function startExam()
	{
		// code...
		$userdata=$this->session->userdata('userdata');
		$user_id= $userdata['id'];
		$quiz_id=$this->input->post('quiz_id');
		$question_no=1;
		$params['quiz_id']=$quiz_id;
		$params['question_no']=$question_no;
		$questions=$this->Questions_model->getQuestion($params);
		// echo $this->db->last_query();
		// print_r($questions); exit;
		$params['user_id']=$user_id;
		$total_question= $this->Questions_model->getQuestionCount($params);
		$quiz=$this->Quiz_model->get_quizes($params);
		$userans=$this->Questions_model->getUserAns($params);
		$data['total_question']=$total_question;
		$data['question_no']=$question_no;
		$data['questions']=$questions;
		$data['userans']=$userans;
		$data['quiz']=$quiz;
		$questionstrings=$this->load->view('students/questions', $data, true);
		

		$data['questionstrings']=$questionstrings;
		$this->load->view('students/startExam', $data);



	}
	public function getquestions()
	{
		$userdata=$this->session->userdata('userdata');
		$user_id= $userdata['id'];
		$question_no=$this->input->post('question_no');
		$quiz_id=$this->input->post('quiz_id');
		
		$params['quiz_id']=$quiz_id;
		$total_question= $this->Questions_model->getQuestionCount($params);
		$params['question_no']=$question_no;
		$params['user_id']=$user_id;
		$questions=$this->Questions_model->getQuestion($params);
		$userans=$this->Questions_model->getUserAns($params);
		$data['total_question']=$total_question;
		$data['question_no']=$question_no;
		$data['questions']=$questions;
		$data['userans']=$userans;
		$questionstrings=$this->load->view('students/questions', $data, true);
		$response['questions']=$questionstrings;
			echo json_encode($response) ;

		# code...
	}
	public function userAns_save()
	{
		// code...
		$userdata=$this->session->userdata('userdata');
		$user_id= $userdata['id'];
		$question_no=$this->input->post('qno');
		$qid=$this->input->post('qid');
		$quiz_id=$this->input->post('quiz_id');
		
		$userAns =$this->input->post('option');
		
		$params['user_id']=$user_id;
		$params['question_no']=$question_no;
		$params['question_id']=$qid;
		$params['quiz_id']=$quiz_id;
		$params['user_ans']=$userAns;

		$this->Questions_model->saveUserAns($params);
	}
	public function student_save_result()
	{
		// code...
		$userdata=$this->session->userdata('userdata');
		$user_id= $userdata['id'];
		$quiz_id=$this->input->post('quiz_id');
		$userAns =$this->input->post('option');
		if (!empty($userAns)) {
			// code...
			$this->userAns_save();
		}
		$params['user_id']=$user_id;
		$params['quiz_id']=$quiz_id;
		$studentAns=$this->Questions_model->getUserAns($params);
		$total_no=$this->Questions_model->getQuestionCount($params);
		
		$score=0;
		foreach ($studentAns as $ans) {
			// code...
			if ($ans['user_ans']==$ans['correct_ans']) {
				// code...
				$score++;
			}
		}
		$params['obtain_marks']=$score;
		$params['total_marks']=$total_no;
		$this->Questions_model->save_quiz_result($params);
		$data['score']=$score;
		$data['total_no']=$total_no;



		
		$this->load->view('students/student_thanks', $data);
	}
	public function student_quiz_result()
	{
		// code...
		$userdata=$this->session->userdata('userdata');
		$user_id= $userdata['id'];
		$params['user_id']=$user_id;
		$sqr=$this->Questions_model->getQuizResult($params);
		$data['student_results']=$sqr;
		$this->load->view('students/studentresultsummery', $data	);
	}
	public function student_quiz_result_details()
	{
		// code...
		$userdata=$this->session->userdata('userdata');
		$user_id= $userdata['id'];
		$quiz_id=$this->input->get('quiz_id');
		$params['user_id']=$user_id;
		$params['quiz_id']=$quiz_id;
		$result=$this->Questions_model->getUserAns($params);
		$this->load->view('students/student_restult_details', $data);

	}


}

/* End of file StdQuiz.php */
/* Location: ./application/controllers/students/StdQuiz.php */