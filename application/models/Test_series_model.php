<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Test_series_model extends CI_Model {
	public function createTestseries($formData)
	{
		$this->db->trans_start();
			$this->db->insert('testseries', $formData);
			
            
		$this->db->trans_complete();
		# code...
	}
	public function getTestserieses($params= array())
	{
		if (isset($params['offset']) && isset($params['limit'])) {
			# code...
			$this->db->limit($params['offset'],$params['limit']);
		}

		

		if(isset($params['queryStrings'])){
			$this->db->or_like('title', trim($params['queryStrings']));
			$this->db->or_like('author', trim($params['queryStrings']));

		}
		$testserieses=$this->db->get('testseries')->result_array();
		return$testserieses;
	}

	public function getMocktestInTestseries( $testseries_id, $mocktest_id='')
	{
		
		if (!empty($moctest_id)) {
				$this->db->where('mocktest_in_testseries.mocktest_id', $mocktest_id);
				
			# code...
		}
	
		$mocktest_in_testseries=$this->db->get('mocktest_in_testseries')->result_array();
		return$mocktest_in_testseries;
	}

	

	public function getTestseries($id)
	{
		$this->db->where('id', $id);
		$testseries=$this->db->get('testseries')->row_array();
		return$testseries;
	}

	public function getTestSeiresCount($params=array())
	{
		
		if (isset($params['queryStryings'])) {
			$this->db->or_like('title', trim($params['queryStryings']));
			$this->db->or_like('exam', trim($params['queryStryings']));
			# code...
		}
		$count=$this->db->count_all_results('testseries');
		return$count;
	}

	

	public function updateTestseires($id,$formData)
	{
		$this->db->where('id', $id);
		$this->db->update('testseries',$formData);
		

		
	}

	public function deleteTestseires($id)
	{
		$this->db->where('id', $id);
		
		$this->db->delete('testseries');
		
		
	}
	

	

}

/* End of file Test_seriese_model.php */
/* Location: ./application/models/Test_seriese_model.php */