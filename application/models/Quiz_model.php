<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Quiz_model extends CI_Model {
	public function new_quiz_save($formdata)
	{
		# code...
		$this->db->insert('gpm_quiz', $formdata);
	}
	public function quiz_update($formdata,$id)
	{
		# code...
		$this->db->where('id', $id);
		$this->db->update('gpm_quiz', $formdata);
	}
	public function delete_quiz($id)
	{
		# code...
		$this->db->where('id', $id);
		$this->db->delete('gpm_quiz');
	}
	public function  get_quiz_topic($subject_id)
	{
		# code...
		$this->db->where('subject', $subject_id);
		$topics=$this->db->get('gpm_quiz')->result_array();
		return $topics;
	}
	

	public function get_quizes($params=array())
	{
		# code...
		if (isset($params['offset']) && isset($params['limit'])) {
			# code...
			$this->db->limit($params['offset'],$params['limit']);
		}

		

		if(isset($params['queryStrings'])){
			$this->db->or_like('subjects', trim($params['queryStrings']));
			$this->db->or_like('branch', trim($params['queryStrings']));

		}
		if (isset($params['subject'])&&isset($params['topic'])) {
			$this->db->where('subject', $params['subject']);
			$this->db->where('topic', $params['topic']);
			# code...
		}
		if (isset($params['quiz_id'])) {
			// code...
			$this->db->where('gpm_quiz.id', $params['quiz_id']);
		}
		$this->db->select('gpm_quiz.*, gpm_courses.branch_name as branch_name, subjects.subject_name as subject_name');
		$this->db->join('gpm_courses', 'gpm_courses.id = gpm_quiz.branch', 'left');
		$this->db->join('subjects', 'subjects.id = gpm_quiz.subject', 'left');
		if (isset($params['quiz_id'])) {
			// code...
			$data=$this->db->get('gpm_quiz')->row_array();

		} else {
			// code...
			$data=$this->db->get('gpm_quiz')->result_array();
		}
		
		
		// print_r($data);
		// echo  $this->db->last_query();exit;
		return $data;
	}
	public function get_quiz($id)
	{
		# code...
		$this->db->where('id', $id);	
		$data=$this->db->get('gpm_quiz')->row_array();
		return $data;
	}
	public function getquizcount($params=array( ))
	{
		# code...
		if(isset($params['queryStrings'])){
			$this->db->or_like('title', trim($params['queryStrings']));
			$this->db->or_like('author', trim($params['queryStrings']));

		}
		
		$count=$this->db->count_all_results('gpm_quiz');
		// echo $count;exit;
		return $count;
		

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
	

}

/* End of file Quiz_model.php */
/* Location: ./application/models/Quiz_model.php */