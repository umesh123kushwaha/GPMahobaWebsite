
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Category extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$staff = $this->session->userdata('staff');
		if (empty($staff)) {

			$this->session->set_flashdata('msg', 'Your Session has been expried');
			redirect(base_url().'staff/login/index');
			# code...
		}

	}


	public function index()
	{
		$this->load->model('Category_model');
		$queryString= $this->input->get('q');
		$params['queryStrings']=$queryString;
		$categories= $this->Category_model->getCategories($params);
		$data['categories']=$categories;
		$data['queryString']=$queryString;

		$data['mainModule']='category';
		$data['subModule']='viewCategory';
		// print_r($categories);exit;
		$this->load->view('staff/category/list',$data);
	}
	//This Method will create category
	public function create(){
		$this->load->helper('common_helper');
	

 		$config['upload_path']          = './assests/uploads/category/';
        $config['allowed_types']        = 'gif|jpg|png';
        $config['encrypt_name']   		= true;
        // $config['max_size']             = 100;
        // $config['max_width']            = 1024;
        // $config['max_height']           = 768;

        $this->load->library('upload', $config);
		$this->load->model('Category_model');
		$this->load->library('form_validation');
		$this->form_validation->set_error_delimiters('<p class="invalid-feedback">','</p>');
		$this->form_validation->set_rules('name', 'Name', 'trim|required');
		if ($this->form_validation->run() == True) {
			//will save category in database
			// print_r($_FILES);exit;
			if (!empty($_FILES['image']['name'])) {
				# if user select a file 
				 if ( $this->upload->do_upload('image'))
                {
                        $data= $this->upload->data();
						// echo "<pre>";
						// print_r($img);
						// echo "</pre>";exit;


						// Image Resiging Part
						resize($config['upload_path'].$data['file_name'],$config['upload_path'].'thumb/'.$data['file_name'],300,200);


                        // $this->load->view('upload_success', $data);
                	$formArray['image']=$data['file_name'];
                	$formArray['name']=$this->input->post('name');
					$formArray['status']=$this->input->post('status');
					$formArray['created_at']=date('Y-m-d H:i:s');
					$this->Category_model->create($formArray);
					$this->session->set_flashdata('success','Category added successfully.');
					redirect(base_url().'staff/category/index');
                }
                else
                {
                       
                    $error =  $this->upload->display_errors('<p class="invalid-feedback">','</p>');
                    $data['errorImageUpload']=$error;					
                    $this->load->view('staff/category/create', $data);
                }
			}
			 else {
				# code...
				$formArray['name']=$this->input->post('name');
				$formArray['status']=$this->input->post('status');
				$formArray['created_at']=date('Y-m-d H:i:s');
				$this->Category_model->create($formArray);
				$this->session->set_flashdata('success','Category added successfully.');
				redirect(base_url().'staff/category/index');
			}
			
			
		} else {
			# code...
			$data['mainModule']='category';
			$data['subModule']='addCategory';
			$this->load->view('staff/category/create', $data);
		}
		

		

	}
	//this Method will edit category
	public function edit($id){
		$this->load->model('Category_model');
		$category=$this->Category_model->getCategory($id);
		if(empty($category)){
			$this->session->set_flashdata('error','Oops ! Category Not found!!');
			redirect(base_url().'staff/category/index');
		} 
		$this->load->helper('common_helper');
	

 		$config['upload_path']          = './assests/uploads/category/';
        $config['allowed_types']        = 'gif|jpg|png';
        $config['encrypt_name']   		= true;
        // $config['max_size']             = 100;
        // $config['max_width']            = 1024;
        // $config['max_height']           = 768;

        $this->load->library('upload', $config);
		
		$this->load->library('form_validation');
		$this->form_validation->set_error_delimiters('<p class="invalid-feedback">','</p>');
		$this->form_validation->set_rules('name', 'Name', 'trim|required');
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
						resize($config['upload_path'].$data['file_name'],$config['upload_path'].'thumb/'.$data['file_name'],300,200);


                        // $this->load->view('upload_success', $data);
                	$formArray['image']=$data['file_name'];
                	$formArray['name']=$this->input->post('name');
					$formArray['status']=$this->input->post('status');
					$formArray['updated_at']=date('Y-m-d H:i:s');
					$this->Category_model->update($id,$formArray);
					$this->session->set_flashdata('success','Category Updated successfully.');
					//delete  old file 
					if (file_exists('./assests/uploads/category/'.$category['image'])) {
						unlink('./assests/uploads/category/'.$category['image']);
					}
					if (file_exists('./assests/uploads/category/thumb/'.$category['image'])) {
						unlink('./assests/uploads/category/thumb/'.$category['image']);
					}
					
					redirect(base_url().'staff/category/index');
                }
                else
                {
                       
                    $error =  $this->upload->display_errors('<p class="invalid-feedback">','</p>');
                    $data['errorImageUpload']=$error;					
                    $this->load->view('staff/category/edit',$data);
                }
			}
			 else {
				# code...
				$formArray['name']=$this->input->post('name');
				$formArray['status']=$this->input->post('status');
				$formArray['updated_at']=date('Y-m-d H:i:s');
				$this->Category_model->update($id,$formArray);
				$this->session->set_flashdata('success','Category updated successfully.');
				redirect(base_url().'staff/category/index');
			}
			


			
        } else 
        {
			# code...

			 $data['category']=$category;
			$this->load->view('staff/category/edit',$data);
		}
		

		
	}
	//this Method will delete category
	public function delete($id){

		$this->load->model('Category_model');
		$category=$this->Category_model->getCategory($id);
		if(empty($category)){
			$this->session->set_flashdata('error','Oops ! Category Not found!!');
			redirect(base_url().'staff/category/index');
		} 

		$this->Category_model->delete($id);

		if (file_exists('./assests/uploads/category/'.$category['image']))
		 {
			unlink('./assests/uploads/category/'.$category['image']);
		}
		if (file_exists('./assests/uploads/category/thumb/'.$category['image']))
		 {
			unlink('./assests/uploads/category/thumb/'.$category['image']);
		}

		$this->session->set_flashdata('success','Category deleted successfully.');
		
		redirect(base_url().'staff/category/index');

		//$this->load->view('staff/category/delete');
		
	}


}


/* End of file Category.php */
/* Location: ./application/controllers/staff/Category.php */