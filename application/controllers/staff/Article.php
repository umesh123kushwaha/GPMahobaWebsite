<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Article extends CI_Controller {
	
	public function __construct(){
		parent::__construct();
		
		$staff = $this->session->userdata('staff');
		if (empty($staff)) {

			$this->session->set_flashdata('msg', 'Your Session has been expried');
			redirect(base_url().'staff/login/index');
			# code...
		}

	}


	public function index($page=1)
	{
		// print_r($_GET);
		$this->load->model('Article_model');
		$this->load->library('pagination');
		$this->load->helper('text');
		$queryString= $this->input->get('q');
		$params['queryStrings']=$queryString;
		
		$config['base_url'] = base_url('staff/article/index');
		$config['total_rows'] = $this->Article_model->getArticlesCount($params);
		$config['per_page'] = 5;
		$config['use_page_numbers'] = true;
		// $config['uri_segment'] = 3;
		// $config['num_links'] = 3;
		$config['full_tag_open'] = '<ul class="pagination"> ';
		$config['full_tag_close'] = '</ul>';
		$config['num_tag_open'] = '<li class="page-item">';
		$config['num_tag_close'] = '</li>';
		
		$config['first_link'] = 'First';
		$config['first_tag_open'] = '<li class="page-item">';
		$config['first_tag1_close'] = '</li>';
		$config['last_link'] = 'Last';
		$config['last_tag1_open'] = '<li class="page-item">';
		$config['last_tag_close'] = '</li>';
		$config['next_link'] = 'Next';
		$config['next_tag_open'] = '<li class="page-item">';
		$config['next_tag1_close'] = '</li>';
		$config['prev_link'] = 'Previous';
		$config['prev_tag_open'] = '<li class="page-item">';
		$config['prev_tag1_close'] = '</li>';
		$config['cur_tag_open'] = '<li class="page-item"><li class="active page-item"><a href="#" class="page-link">';
		$config['cur_tag_close'] = '<span class="sr-only"></span></a></li></li>';
		$config['attributes']= array('class' =>'page-link'  );
		
		$this->pagination->initialize($config);
		
		$pagination_links= $this->pagination->create_links();
			// $queryString= $this->input->get('q');
		// $params['queryStrings']=$queryString;
		$params['offset']=$config['per_page'];
		$params['limit']=($page*$config['per_page'])-$config['per_page'];
		// print_r($params);exit;
		$articles= $this->Article_model->getArticles($params);
		$data['articles']=$articles;
		$data['pagination_links']=$pagination_links;
		$data['queryString']=$queryString;
		$data['params']=$params;
		$data['mainModule']='article';
		$data['subModule']='viewArticle';
		// print_r($categories);exit;

		$this->load->view('staff/article/list',$data);
	}
	public function create()
	{
		$this->load->helper('common_helper');
	

 		$config['upload_path']          = './assests/uploads/articles/';
        $config['allowed_types']        = 'gif|jpg|png';
        $config['encrypt_name']   		= true;
        // $config['max_size']             = 100;
        // $config['max_width']            = 1024;
        // $config['max_height']           = 768;

        $this->load->library('upload', $config);
		$this->load->model('Category_model');
		$this->load->model('Article_model');
		$categories= $this->Category_model->getCategories();
		$data['categories']=$categories;
		$this->load->library('form_validation');
		$this->form_validation->set_error_delimiters('<p class="invalid-feedback">','</p>');
		$this->form_validation->set_rules('category_id', 'Category', 'trim|required');
		$this->form_validation->set_rules('title', 'Title', 'trim|required|min_length[5]');
		$this->form_validation->set_rules('author', 'Author', 'trim|required');
		if ($this->form_validation->run() == TRUE) 
		{
			//code after form validated
			if (!empty($_FILES['image']['name'])) {
				# if user select a file 
				 if ( $this->upload->do_upload('image'))
                {
                        $data= $this->upload->data();
						// echo "<pre>";
						// print_r($img);
						// echo "</pre>";exit;


						// Image Resiging Part
						resize($config['upload_path'].$data['file_name'],$config['upload_path'].'thumb_front/'.$data['file_name'],1120,800);
						resize($config['upload_path'].$data['file_name'],$config['upload_path'].'thumb_admin/'.$data['file_name'],300,250);


                        // $this->load->view('upload_success', $data);
                	$formArray['image']=$data['file_name'];
                	$formArray['category']=$this->input->post('category_id');
                	$formArray['description']=$this->input->post('description');
                	$formArray['author']=$this->input->post('author');
                	$formArray['title']=$this->input->post('title');
					$formArray['status']=$this->input->post('status');
					$formArray['created_at']=date('Y-m-d H:i:s');
					$this->Article_model->addArticle($formArray);
					$this->session->set_flashdata('success','Article added successfully.');
					redirect(base_url().'staff/article/index');
                }
                else
                {
                       
                    $error =  $this->upload->display_errors('<p class="invalid-feedback">','</p>');
                    $data['errorImageUpload']=$error;					
                    $this->load->view('staff/article/create', $data);
                }
			}
			 else {
				# code...
					$formArray['category']=$this->input->post('category_id');
                	$formArray['description']=$this->input->post('description');
                	$formArray['author']=$this->input->post('author');
                	$formArray['title']=$this->input->post('title');
					$formArray['status']=$this->input->post('status');
					$formArray['created_at']=date('Y-m-d H:i:s');
					$this->Article_model->addArticle($formArray);
					$this->session->set_flashdata('success','Article added successfully.');
					redirect(base_url().'staff/article/index');
			}

		} else {
			# code after any error occur.
			$data['mainModule']='article';
			$data['subModule']='addArticle';
			$this->load->view('staff/article/create',$data);

		}
		
	}
	public function edit($id)

	{
		$this->load->helper('common_helper');
		$config['upload_path']          = './assests/uploads/articles/';
        $config['allowed_types']        = 'gif|jpg|png';
        $config['encrypt_name']   		= true;
        // $config['max_size']             = 100;
        // $config['max_width']            = 1024;
        // $config['max_height']           = 768;

        $this->load->library('upload', $config);
		$this->load->library('form_validation');
		$this->load->model('Category_model');
		$this->load->model('Article_model');
		$categories= $this->Category_model->getCategories();



		$data['categories']=$categories;
		
		$article= $this->Article_model->getArticle($id);
		$categories= $this->Category_model->getCategories();
		$data['categories']=$categories;
		$data['article']=$article;
		
		// print_r($article);
		if (empty($article)) {
			
			$this->session->set_flashdata('error', 'Article Not found');
			redirect('staff/article/index');
		}
		$this->form_validation->set_error_delimiters('<p class="invalid-feedback">','</p>');
		$this->form_validation->set_rules('category_id', 'Category', 'trim|required');
		$this->form_validation->set_rules('title', 'Title', 'trim|required|min_length[5]');
		$this->form_validation->set_rules('author', 'Author', 'trim|required');
		if ($this->form_validation->run() == True)
		 {
		 	if (!empty($_FILES['image']['name']))
		 	 {
				# if user select a file 
				 if ( $this->upload->do_upload('image'))
                {
                        $data= $this->upload->data();
						// echo "<pre>";
						// print_r($img);
						// echo "</pre>";exit;


						// Image Resiging Part
						resize($config['upload_path'].$data['file_name'],$config['upload_path'].'thumb_front/'.$data['file_name'],1120,800);
						resize($config['upload_path'].$data['file_name'],$config['upload_path'].'thumb_admin/'.$data['file_name'],300,250);



                        // $this->load->view('upload_success', $data);
                	$formArray['image']=$data['file_name'];
                	$formArray['category']=$this->input->post('category_id');
                	$formArray['description']=$this->input->post('description');
                	$formArray['author']=$this->input->post('author');
                	$formArray['title']=$this->input->post('title');
					$formArray['status']=$this->input->post('status');
					$formArray['updated_at']=date('Y-m-d H:i:s');
					$this->Article_model->updateArticle($id,$formArray);
					
					
					
					//delete  old file 
					if (file_exists('./assests/uploads/articles/'.$article['image'])) {
						unlink('./assests/uploads/articles/'.$article['image']);
					}
					if (file_exists('./assests/uploads/articles/thumb_front/'.$article['image'])) {
						unlink('./assests/uploads/articles/thumb_front/'.$article['image']);
					}
					if (file_exists('./assests/uploads/articles/thumb__admin/'.$article['image'])) {
						unlink('./assests/uploads/articles/thumb_admin/'.$article['image']);
					}
					
					$this->session->set_flashdata('success','Article Updated successfully.');
					
					redirect(base_url().'staff/article/index');
					
                }
	                else
	                {
	                       
	                    $error =  $this->upload->display_errors('<p class="invalid-feedback">','</p>');
	                    $data['errorImageUpload']=$error;					
	                    $this->load->view('staff/article/edit',$data);
	                }
				}
			 else {
				# code...
					$formArray['category']=$this->input->post('category_id');
                	$formArray['description']=$this->input->post('description');
                	$formArray['author']=$this->input->post('author');
                	$formArray['title']=$this->input->post('title');
					$formArray['status']=$this->input->post('status');
					$formArray['updated_at']=date('Y-m-d H:i:s');
					$this->Article_model->updateArticle($id,$formArray);
					$this->session->set_flashdata('success','Article Updated successfully.');
					redirect(base_url().'staff/article/index');
					
			}
		}
		else
		{
			
			$data['mainModule']='article';
			$data['subModule']='addArticle';
			$this->load->view('staff/article/edit',$data);
		}

	}
	public function delete($id)
	{
		

		$this->load->model('Article_model');
		$article=$this->Article_model->getArticle($id);
		if(empty($article)){
			$this->session->set_flashdata('error','Oops ! Category Not found!!');
			redirect(base_url().'staff/article/index');
		} 

		$this->Article_model->deleteArticle($id);

		if (file_exists('./assests/uploads/articles/'.$article['image']))
		 {
			unlink('./assests/uploads/articles/'.$article['image']);
		}
		if (file_exists('./assests/uploads/articles/thumb_staff/'.$article['image']))
		 {
			unlink('./assests/uploads/articles/thumb_staff/'.$article['image']);
		}
		if (file_exists('./assests/uploads/articles/thumb_front/'.$article['image']))
		 {
			unlink('./assests/uploads/articles/thumb_front/'.$article['image']);
		}
		

		$this->session->set_flashdata('success','Article delted successfully.');
		
		redirect(base_url().'staff/article/index');

		//$this->load->view('staff/category/delete');
	}

	//Upload image summernote
	public function upload_image(){
		if(isset($_FILES["image"]["name"])){
			$config['upload_path'] = './assests/uploads/articles/images/';
			//echo $config['upload_path'];
			$config['allowed_types'] = 'jpg|jpeg|png|gif';
			 $this->load->library('upload');
			$this->upload->initialize($config);
			if(!$this->upload->do_upload('image')){
				$this->upload->display_errors();
				return FALSE;
			}else{
				$data = $this->upload->data();
		        //Compress Image
		        $config['image_library']='gd2';
		        $config['source_image']='./assests/uploads/articles/images/'.$data['file_name'];
		        $config['create_thumb']= FALSE;
	            $config['maintain_ratio']= TRUE;
	            $config['quality']= '60%';
	            $config['width']= 800;
	            $config['height']= 800;
	            $config['new_image']= './assests/uploads/articles/images/'.$data['file_name'];
	            $this->load->library('image_lib', $config);
	            $this->image_lib->resize();
				echo base_url().'assests/uploads/articles/images/'.$data['file_name'];
			}
		}
	}

	//Delete image summernote
	public function delete_image(){
		$src = $this->input->post('src');
		$file_name = str_replace(base_url(), '', $src);
		if(unlink($file_name)){
	        echo 'File Delete Successfully';
	    }
	}

	
	

}

/* End of file Article.php */
/* Location: ./application/controllers/staff/Article.php */