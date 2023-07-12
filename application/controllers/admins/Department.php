<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Department extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		
		$this->load->model('Admin_model');
	}

	public function index()
	{
		$queryString=$this->input->get('q');
		$this->load->helper('text');
		$params['queryStrings']=$queryString;
		$departmentdata=$this->Admin_model->getdepartments($params);
		$staff_in_department=$this->Admin_model->getstaffInDepartment($params);
		$department_slider=$this->Admin_model->getdepartmentslider($params);
		
		
		$data['departmentdata']=$departmentdata;
		$data['department_slider']=$department_slider;
		$data['staff_in_department']=$staff_in_department;
		$data['queryString']=$queryString;
		$this->load->view('admin/departmentlist', $data);
		
	}
	public function create_new_department()
	{
		// code...
		$config['upload_path'] = './assests/uploads/department';
		$config['allowed_types'] = 'gif|jpg|png';
		
		
		$this->load->library('upload', $config);
		$this->load->library('form_validation');
		$this->form_validation->set_error_delimiters('<p class="invalid-feedback">','</p>');
		$this->form_validation->set_rules('department_name', 'Department Name', 'trim|required');
		if (empty($_FILES['image']['name'])) {
			// code...
			$this->form_validation->set_rules('image', 'Image', 'trim|required');
		}
		if ($this->form_validation->run() == TRUE) {
			# code...
			if ( $this->upload->do_upload('image'))
			{
				$data =  $this->upload->data();
				$formData['department_name']=$this->input->post('department_name');
				$formData['about']=$this->input->post('about');
				$formData['vision']=$this->input->post('vision');
				$formData['mission']=$this->input->post('mission');
				$formData['department_pic']=$data['file_name'];
				$formData['created_at']=date('Y-m-d_H-i');
				$this->Admin_model->create_new_department($formData);
				$this->session->set_flashdata('success', 'Record Inseted Successfully');
				redirect(base_url().'admins/department');
				
			}
			else
			{
				$error =  $this->upload->display_errors();
				$data['errorImageUpload']=$error;
				$this->load->view('admin/create_department', $data);
				
			}

		} else {
			# code...
			$data['mainModule']='department';
			$data['subModule']='create_new_department';
			$this->load->view('admin/create_department', $data);
		}
		
		
	}
	public function edit_department($id)
	{
		// code...
		$config['upload_path'] = './assests/uploads/department';
		$config['allowed_types'] = 'gif|jpg|png';
		$department_id=$this->input->get('id');
		$params['id']=$id;
		$department=$this->Admin_model->getdepartments($params);
		$data['department']=$department;
		
		$this->load->library('upload', $config);
		$this->load->library('form_validation');
		$this->form_validation->set_error_delimiters('<p class="invalid-feedback">','</p>');
		$this->form_validation->set_rules('department_name', 'Department Name', 'trim|required');
		
		if ($this->form_validation->run() == TRUE) {
			# code...
			if (!empty($_FILES['image']['name'])) {
				// code...
				if ( $this->upload->do_upload('image'))
				{
					$data =  $this->upload->data();
					$formData['department_name']=$this->input->post('department_name');
					
					$formData['department_pic']=$data['file_name'];
					$formData['about']=$this->input->post('about');
					$formData['vision']=$this->input->post('vision');
					$formData['mission']=$this->input->post('mission');
					$formData['updated_at']=date('Y-m-d_H-i');
					$this->Admin_model->update_department($formData,$params);
					if (file_exists('./assests/uploads/department/'.$department['department_pic'])) {
						// code...
						
						unlink('./assests/uploads/department/'.$department['department_pic']);
					}
					$this->session->set_flashdata('success', 'Record Updated Successfully');
					redirect(base_url().'admins/department');
					
				}
				else
				{
					$error =  $this->upload->display_errors();
					$data['errorImageUpload']=$error;
					$this->load->view('admin/editdepartment', $data);
					
				}

			}
			 else
			{
				// code...
				$formData['department_name']=$this->input->post('department_name');
				$formData['vision']=$this->input->post('about');
				$formData['vision']=$this->input->post('vision');
				$formData['mission']=$this->input->post('mission');
				$params['id']=$this->input->post('department_id');
				$formData['updated_at']=date('Y-m-d_H-i');
				$this->Admin_model->update_department($formData,$params);
				// echo $this->db->last_query();exit;
				
				$this->session->set_flashdata('success', 'Record Updated Successfully');
				redirect(base_url().'admins/department');
			}
			
			

		} else {
			# code...
			$data['mainModule']='department';
			$data['subModule']='edit_department';
			$this->load->view('admin/editdepartment', $data);
		}
		
		
	}
	public function department_upload_image()
	{
		// code...
		if(isset($_FILES["image"]["name"]))
		{
			$config['upload_path'] = './assests/uploads/department/';
				//echo $config['upload_path'];
			$config['allowed_types'] = 'jpg|jpeg|png|gif';
			$this->load->library('upload');
			$this->upload->initialize($config);
			if(!$this->upload->do_upload('image'))
			{
				$this->upload->display_errors();
				return FALSE;
			}
			else
			{
				$data = $this->upload->data();
				        //Compress Image
				$config['image_library']='gd2';
				$config['source_image']='./assests/uploads/department/'.$data['file_name'];
				$config['create_thumb']= FALSE;
		        $config['maintain_ratio']= TRUE;
		        $config['quality']= '60%';
		        $config['width']= 800;
		        $config['height']= 800;
		        $config['new_image']= './assests/uploads/department/'.$data['file_name'];
		        $this->load->library('image_lib', $config);
		        $this->image_lib->resize();
				echo base_url().'assests/uploads/department/'.$data['file_name'];
			}
		}

	}
	//Delete image summernote
	public function department_delete_image(){
		$src = $this->input->post('src');
		$file_name = str_replace(base_url(), '', $src);
		if(unlink($file_name)){
	        echo 'File Delete Successfully';
	    }
	}
	public function deletedepartment($id)
	{
		// code...
		$params['id']=$id;
		$department=$this->Admin_model->getdepartments($params);
		
		if (!empty($department)) {
			// code...
			$this->Admin_model->deletedepartment($params);
			if (file_exists('./assests/uploads/department/'.$department['department_pic'])) {
				// code...

				unlink('./assests/uploads/department/'.$department['department_pic']);
				
				$this->session->set_flashdata('success', 'Record Deleted Successfully');
				redirect(base_url('admins/department'));
			}
		} else {
			// code...
			$this->session->set_flashdata('error', 'Oops !! Record Not found.');
			redirect(base_url('admins/department'));
		}
		
	}
	public function add_staff_in_department()
	{
		// code...
		$staffs=$this->Admin_model->getstaffdata();
		$departments= $this->Admin_model->getdepartments();
		$staff_type= $this->Admin_model->getstafftype();
		$data['staffs']=$staffs;
		$data['departments']=$departments;
		$data['staff_type']=$staff_type;
		$this->load->library('form_validation');
		$this->form_validation->set_error_delimiters('<p class="invalid-feedback">','</p>');
		$this->form_validation->set_rules('staff_id', 'staff', 'trim|required');
		$this->form_validation->set_rules('department_id', 'Department', 'trim|required');
		if ($this->form_validation->run() == TRUE) {
			# code...
			$formData['staff_id']=$this->input->post('staff_id');
			$formData['department_id']=$this->input->post('department_id');
			$formData['staff_type']=$this->input->post('staff_type');
			$this->Admin_model->add_staff_in_department($formData);
			$this->session->set_flashdata('success', 'Record Inserted Successfully');
			redirect(base_url('admins/department'));

		} else {
			# code...
			$this->load->view('admin/staff_in_department', $data);
		}
	}
	public function edit_staff_in_department($id)
	{
		// code...
		$staffs=$this->Admin_model->getstaffdata();
		$departments= $this->Admin_model->getdepartments();
		$staff_type= $this->Admin_model->getstafftype();
		$params['id']=$id;
		$staff_in_department=$this->Admin_model->getstaffInDepartment($params);
		$data['staff_in_department']=$staff_in_department;
		$data['staffs']=$staffs;
		$data['departments']=$departments;
		$data['staff_type']=$staff_type;
		$this->load->library('form_validation');
		$this->form_validation->set_error_delimiters('<p class="invalid-feedback">','</p>');
		$this->form_validation->set_rules('staff_id', 'staff', 'trim|required');
		$this->form_validation->set_rules('department_id', 'Department', 'trim|required');
		if ($this->form_validation->run() == TRUE) {
			# code...
			$formData['staff_id']=$this->input->post('staff_id');
			$formData['department_id']=$this->input->post('department_id');
			$formData['staff_type']=$this->input->post('staff_type');
			$this->Admin_model->update_staff_in_department($formData,$id);
			$this->session->set_flashdata('success', 'Record Updated Successfully');
			redirect(base_url('admins/department'));

		} else {
			# code...
			$this->load->view('admin/edit_staff_in_department', $data);
		}
	}
	public function deletestaffindepartment($id)
	{
		// code...
		$params['id']=$id;
		$staff_in_department=$this->Admin_model->getstaffInDepartment($params);
		if (!empty($staff_in_department)) {
			// code...
			$this->Admin_model->deletestaffindepartment($params);
			$this->session->set_flashdata('success', 'Record Deleted Successfully');
			redirect(base_url().'admins/department');
		} else {
			// code...
			$this->session->set_flashdata('error', 'Oops !! Record Not found');
			redirect(base_url().'admins/department');
		}
		
	}
	public function department_slider()
	{
		// code...
		$config['upload_path'] = './assests/uploads/department/slider/';
		$config['allowed_types'] = 'gif|jpg|png';
		
		
		$this->load->library('upload', $config);
		$this->load->library('form_validation');
		$data['departments']=$this->Admin_model->getdepartments();
		$this->form_validation->set_error_delimiters('<p class="invalid-feedback">','</p>');
		$this->form_validation->set_rules('department_id', 'Department Name', 'trim|required');
		$this->form_validation->set_rules('title', 'Title', 'trim|required');
		if (empty($_FILES['image']['name'])) {
			// code...
			$this->form_validation->set_rules('image', 'Image', 'trim|required');
		}
		if ($this->form_validation->run() == TRUE) {
			# code...
			if ( $this->upload->do_upload('image'))
			{
				$data =  $this->upload->data();
				$formData['department_id']=$this->input->post('department_id');
				$formData['title']=$this->input->post('title');
				$formData['description']=$this->input->post('description');
				
				$formData['slider_img']=$data['file_name'];
				//$formData['created_at']=date('Y-m-d_H-i');
				$this->Admin_model->add_slider_image($formData);
				$this->session->set_flashdata('success', 'Record Inseted Successfully');
				redirect(base_url().'admins/department');
				
			}
			else
			{
				$error =  $this->upload->display_errors();
				$data['errorImageUpload']=$error;
				$this->load->view('admin/department_slider', $data);
				
			}

		} else {
			# code...
			$data['mainModule']='department';
			$data['subModule']='department_slider';
			$this->load->view('admin/department_slider', $data);
		}
		
		

	}
	public function deletedepartmentslider($id)
	{
		// code...
		$params['id']=$id;
		$slider= $this->Admin_model->getdepartmentslider($params);
		if (!empty($slider)) {
			// code...
			$this->Admin_model->deletedepartmentslider($params);
			if (file_exists('./assests/uploads/department/slider/'.$slider['slider_img'])) {
				// code...
				unlink('./assests/uploads/department/slider/'.$slider['slider_img']);
			}
			$this->session->set_flashdata('success', 'Record Deleted Successfully');
			redirect(base_url().'admins/department');
		}
		else{
			$this->session->set_flashdata('error', 'Oops! This Reocord Not found');
				redirect(base_url().'admins/department');
		}
		
	}
	


}

/* End of file Department.php */
/* Location: ./application/controllers/admin/Department.php */