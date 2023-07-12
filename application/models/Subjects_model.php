<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Subjects_model extends CI_Model {

	public function addSubject($formData)
	{
		$this->db->insert('gpm_subjects',$formData);
	}
	

	public function getSubject($id)
	{
		$this->db->where('id', $id);
		$subject=$this->db->get('gpm_subjects')->row_array();
		return $subject;
	}
	public function updateSubject($id,$formData)
	{
		$this->db->where('id', $id);
		$this->db->update('gpm_subjects', $formData);
	}
	
	public function getSubjects()
	{
		
		$subjects=$this->db->get('subjects')->result_array();
		return $subjects;
	}
	public function delete($id)
	{
		$this->db->where('id', $id);
		
		$this->db->delete('gpm_subjects');
	}
	

}

/* End of file Subjects_model.php */
/* Location: ./application/models/Subjects_model.php */