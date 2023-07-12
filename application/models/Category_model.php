<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Category_model extends CI_Model {
	public function create($formArray){
		$this->db->insert('categories',$formArray);
	}
	public function update($id,$formArray){
		$this->db->where('id', $id);
		$this->db->update('categories',$formArray);
	}public function delete($id){
		$this->db->where('id', $id);
		$this->db->delete('categories');
	}

	public function getCategories($params=[])
	{
		if(!empty($params['queryStrings'])){
			$this->db->like('name', $params['queryStrings']);

		}
		$result=$this->db->get('categories')-> result_array();

		// echo '<pre>';
		// print_r($result);
		// echo '</pre>';
		// exit;
		return $result;
		
	}
	public function getCategoriesFront($params=[])
	{
		if(!empty($params['queryStrings'])){
			$this->db->like('name', $params['queryStrings']);

		}
		$this->db->where('categories.status', 1);
		$result=$this->db->get('categories')-> result_array();

		// echo '<pre>';
		// print_r($result);
		// echo '</pre>';
		// exit;
		return $result;
		
	}
	
	public function getCategory($id){
		$this->db->where('id', $id);
		$category=$this->db->get('categories')->row_array();
		//SELECT * FROM categories WHERE id={id}
		return $category;
	}

}

/* End of file Category_model.php */
/* Location: ./application/models/Category_model.php */