<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Student_model extends CI_Model {

	public function student_leave_save($data)
	{
		# code...
		$this->db->insert('student_leave', $data);
		return  $this->db->insert_id();
	}
	public function get_student_leave_report($data= array())
	{
		# code...
		if(isset($data['student_id']))
		{
			$this->db->where('student_id', $data['student_id']);
		}
		$result=$this->db->get('student_leave')->resut_array();
		return $resut;
	}

}

/* End of file Student_model.php */
/* Location: ./application/models/Student_model.php */