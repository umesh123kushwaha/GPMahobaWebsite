<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Questions_model extends CI_Model {

	public function createNewQuestion($formData )
	{
		$this->db->insert('questions', $formData);
		$question_id=  $this->db->insert_id();
		if ($question_id) {
			# code...
			return 1;
		} else {
			# code...
			return 0;
		}
		
	}


	public function updateQuestion($qid,$formData )
	{
		$this->db->where('id', $qid);
		$this->db->update('questions', $formData);
	}

	public function getQuestion($params=array())
	{
		if (isset($params['id'])) {
			
			$this->db->where('id', $id);
		}
		if (isset($params['quiz_id'])) {
			// code...
			$this->db->where('quiz_id', $params['quiz_id']);
		}
		if (isset($params['question_no'])) {
			// code...
			$this->db->where('question_no', $params['question_no']);
		}
		
		$question=$this->db->get('questions')->row_array();
		return $question;
	}
	public function delete_question($id)
	{
		# code...
		$this->db->where('id', $id);
		$this->db->delete('questions');
	}

	


	


	public function getQuestions($params= array())
	{

		if (isset($params['offset']) && isset($params['limit'])) {
			# code...
			$this->db->limit($params['offset'],$params['limit']);
		}

		

		if(isset($params['queryStrings'])){
			$this->db->or_like('subject', trim($params['queryStrings']));
			$this->db->or_like('id', trim($params['queryStrings']));

		}
		if (isset($params['quiz_id'])) {
			# code...
			$this->db->where('quiz_id', $params['quiz_id']);
		}
		$this->db->select('questions.*, gpm_quiz.subject as subject_name');
		$this->db->order_by('questions.question_no', 'asc');
		$this->db->join('gpm_quiz', 'gpm_quiz.id = questions.quiz_id', 'left');

		$result=$this->db->get('questions')-> result_array();

		return $result;
	}
	
	public function getQuestionCount($params=array())
	{
		// code...
		if (isset($params['quiz_id'])) {
			// code...
			$this->db->where('quiz_id', $params['quiz_id']);
		}
		$count=$this->db->count_all_results('questions');
		return $count;
	}
	public function saveUserAns($params=array())
	{
		// code...
		$this->db->where('quiz_id', $params['quiz_id']);
		$this->db->where('question_id', $params['question_id']);
		$this->db->where('user_id', $params['user_id']);

		$userData=$this->db->get('userans')->row_array(); 
		if (!empty($userData)) {
			// code...
			$params['updated_at']=date('Y-m-d H-i-s');
			$this->db->where('quiz_id', $params['quiz_id']);
		$this->db->where('question_id', $params['question_id']);
		$this->db->where('user_id', $params['user_id']);
			$this->db->update('userans', $params);
		} else {
			// code...
			$params['created_at']=date('Y-m-d H-i-s');
			$this->db->insert('userans', $params);
		}
		
		
	}
	public function getUserAns($params=array())
	{
		// code...
		if (isset($params['quiz_id'])&&isset($params['user_id'])&&isset($params['question_no'])) {
			// code...
			$this->db->where('quiz_id', $params['quiz_id']);
			$this->db->where('user_id', $params['user_id']);
			$this->db->where('question_no', $params['question_no']);
			$result=$this->db->get('userans')->row_array();
		}
		else{
			$this->db->where('userans.quiz_id', $params['quiz_id']);
			$this->db->where('user_id', $params['user_id']);
			$this->db->select('userans.*,questions.correct_ans as correct_ans');
			$this->db->join('questions', 'userans.question_id = questions.id', 'left');
			
			$result=$this->db->get('userans')->result_array();
		}
		
		return $result;
		
	}
	public function save_quiz_result($params=array())
	{
		// code...
		$this->db->where('quiz_id', $params['quiz_id']);
		$this->db->where('user_id', $params['user_id']);
		$result=$this->db->get('student_quiz_result')->row_array();
		if (!empty($result)) {
			// code...
			$this->db->where('quiz_id', $params['quiz_id']);
			$this->db->where('user_id', $params['user_id']);
			$this->db->update('student_quiz_result', $params);

		}
		else{
			$this->db->insert('student_quiz_result', $params);
		}

	}
	public function getQuizResult($params=array())
	{
		// code...
		$this->db->where('user_id', $params['user_id']);
		$this->db->select('student_quiz_result.*,gpm_quiz.title as quiz_title,gpm_quiz.topic as topic_name,subjects.subject_name as subject_name,gpm_courses.branch_name as branch_name,semester.semester_name as semester_name,student_quiz_result.created_at as created_at,student_quiz_result.updated_at as updated_at');
		$this->db->join('gpm_quiz', 'student_quiz_result.quiz_id = 	gpm_quiz.id', 'left');
		$this->db->join('semester', 'gpm_quiz.semester = 	semester.id', 'left');
		$this->db->join('gpm_courses', 'gpm_quiz.branch = 	gpm_courses.id', 'left');
		$this->db->join('subjects', 'gpm_quiz.subject = 	subjects.id', 'left');
		$result=$this->db->get('student_quiz_result')->result_array();
		// echo "<pre>";
		// print_r($result);
		// echo "</pre>";

		// exit;
		return $result;
	}
	

	

}
	

/* End of file Questions_model.php */
/* Location: ./application/models/Questions_model.php */