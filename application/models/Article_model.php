<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Article_model extends CI_Model {

	public function getArticle($id){
		$this->db->where('id', $id);
		$article=$this->db->get('articles')->row_array();
		return $article;

		

	}

	public function getArticleFront($id){
		$this->db->select('articles.*, categories.name as category_name');
		

		$this->db->join('categories', 'categories.id = articles.category', 'left');
		$this->db->where('articles.id', $id);
		$article=$this->db->get('articles')->row_array();

		return $article;

		

	}

	
	public function getArticlesCount($params= array()){
		if(isset($params['queryStrings'])){
			$this->db->or_like('title', trim($params['queryStrings']));
			$this->db->or_like('author', trim($params['queryStrings']));

		}
		$count=$this->db->count_all_results('articles');
		// echo $count;exit;
		return $count;
		

	}
	

	public function getArticles($params= array()){

		if (isset($params['offset']) && isset($params['limit'])) {
			# code...
			$this->db->limit($params['offset'],$params['limit']);
		}

		

		if(isset($params['queryStrings'])){
			$this->db->or_like('title', trim($params['queryStrings']));
			$this->db->or_like('author', trim($params['queryStrings']));

		}
		$result=$this->db->get('articles')-> result_array();
		// echo $this->db->last_query('articles');

		// echo '<pre>'; 
		// print_r($result);
		// echo '</pre>';
		// exit;
		return $result;
		

	}
	public function getArticlesFront($params= array()){

		if (isset($params['offset']) && isset($params['limit'])) {
			# code...
			$this->db->limit($params['offset'],$params['limit']);
		}

		

		if(isset($params['queryStrings'])){
			$this->db->or_like('title', trim($params['queryStrings']));
			$this->db->or_like('author', trim($params['queryStrings']));

		}
		$this->db->select('articles.*, categories.name as category_name');
		$this->db->where('articles.status', 1);
		$this->db->order_by('articles.created_at', 'desc');

		$this->db->join('categories', 'categories.id = articles.category', 'left');

		$query=$this->db->get('articles');
		$articles=$query->result_array();
		
		// echo $this->db->last_query('articles');

		// echo '<pre>';
		// print_r($query);
		// echo '</pre>';
		// exit;
		return $articles;
		

	}
	

	public function addArticle($formArray){
		$this->db->insert('articles',$formArray);
	}
	public function updateArticle($id,$formArray){
		$this->db->where('id', $id);
		$this->db->update('articles',$formArray);
	}public function deleteArticle($id){
		$this->db->where('id', $id);
		$this->db->delete('articles');
	}


}

/* End of file Article_model.php */
/* Location: ./application/models/Article_model.php */