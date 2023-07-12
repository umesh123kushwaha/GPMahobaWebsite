<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Gallary extends CI_Controller {

	public function index()
	{
		
	}
	public function addGallaryImage()
	{
		// code...
		$this->load->helper('common_helper');
	

 		$config['upload_path']          = './assests/uploads/gallary/';
        $config['allowed_types']        = 'gif|jpg|png';
        $config['encrypt_name']   		= true;
        // $config['max_size']             = 100;
        // $config['max_width']            = 1024;
        // $config['max_height']           = 768;

        $this->load->library('upload', $config);
		$this->load->model('Admin_model');
		$this->load->library('form_validation');
		$this->form_validation->set_error_delimiters('<p class="invalid-feedback">','</p>');
		$this->form_validation->set_rules('Title', 'Title', 'trim|required');
		
		if (empty($_FILES['image']['name']))
		{
		    $this->form_validation->set_rules('image', 'Image', 'required');
		}
		
		
		if ($this->form_validation->run() == TRUE) {
			# code...
			if (!empty($_FILES['image']['name'])) {
				# if user select a file 
				 if ( $this->upload->do_upload('image'))
                {
                        $data= $this->upload->data();
						// echo "<pre>";
						// print_r($data);
						// echo "</pre>";exit;


						// Image Resiging Part
						


                        // $this->load->view('upload_success', $data);
                	$formArray['image']=$data['file_name'];
                	$formArray['title']=$this->input->post('pfname');
                	
					$formArray['created_at']=date('Y-m-d H:i:s');
					$this->Admin_model->addgallary($formArray);
					
					$this->session->set_flashdata('success','Image Added   successfully.');
					redirect(base_url().'admin/gallary');
                }
                else
                {
                       
                    $error =  $this->upload->display_errors('<p class="invalid-feedback">','</p>');
                    $data['errorImageUpload']=$error;					
                    $this->load->view('admin/addGallaryImage', $data);
                }
			}


		} else {
			# code...
			$data['mainModule']='principal';
			$data['subModule']='addprincipal';
			$this->load->view('admin/addGallaryImage',$data);
		}
	}

}

/* End of file Gallary.php */
/* Location: ./application/controllers/admin/Gallary.php */