<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Staff_model extends CI_Model {

	public function getbranches()
	{
		# code...
		$result=$this->db->get('gpm_courses')->result_array();
		// print_r($result);exit;
		 return $result;

	}
	public function getsubjects($branch,$semester)
	{
		# code...
		$this->db->where('course_id', $branch);
		$this->db->where('semester', $semester);
		$this->db->select('subjects_in_courses.*,subjects.subject_name as subject_name');
		$this->db->join('subjects', 'subjects_in_courses.subject_id = subjects.id', 'left');
		$subjects= $this->db->get('subjects_in_courses')->result_array();
		return $subjects;

	}
	public function save_assignment($formData)
	{
		# code...
		$this->db->insert('assignment', $formData);
	}
	public function update_assignment($formData,$id)
	{
		# code...
		$this->db->where('id', $id);
		$this->db->update('assignment', $formData);
	}
	public function delete_assignment($id)
	{
		# code...
		$this->db->where('id', $id);
		$this->db->delete('assignment');
	}
	public function getAssignments($params=array())
	{
		# code...
		if (isset($params['offset']) && isset($params['limit'])) 
		{
			# code...
			$this->db->limit($params['offset'],$params['limit']);
		}

		

		if(isset($params['queryStrings']))
		{
			$this->db->or_like('title', trim($params['queryStrings']));
			$this->db->or_like('branch', trim($params['queryStrings']));

		}
		$this->db->select('assignment.*, gpm_courses.branch_name as branch_name');
		$this->db->join('gpm_courses', 'gpm_courses.id = assignment.branch', 'left');
		$result=$this->db->get('assignment')->result_array();
		return $result;
	}
	public function getAssignment($id)
	{
		$this->db->where('id', $id);
		$result= $this->db->get('assignment')->row_array();
		return $result;
	}
	public function getAssignmentCount($params= array())
	{
		if(isset($params['queryStrings'])){
			$this->db->or_like('title', trim($params['queryStrings']));
			
			$this->db->or_like('branch', trim($params['queryStrings']));

		}
		$count=$this->db->count_all_results('assignment');
		// echo $count;exit;
		return $count;

		# codddde...
	}
	

}

/* End of file Staff_model.php */
/* Location: ./application/models/Staff_model.php */