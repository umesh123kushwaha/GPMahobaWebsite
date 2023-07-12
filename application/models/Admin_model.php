<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_model extends CI_Model {
	public function getByUsername($username){
		$this->db->where('username',$username);
		$admin = $this->db->get('adm_login')->row_array();
		return $admin;
	}
	public function CheckLoginInfo($userid,$pass,$utype)
   {

      // To get encrypted passsword from database table and decrypt it
      // echo $userid;
      // echo $utype;
       echo password_hash($pass, PASSWORD_DEFAULT).'<br>';


     // $cmd="Select password from admins where userid='$userid'";
    //   $r=$this->db->query($cmd);
    //   $res=$r->row();
    //   $epass=$res->password;
     
    //   // Start: Decryption
    //   $this->load->library("encryption");
    //   $encr['cipher']='aes-256';
    //   $encr['mode']='ctr';
    //   $encr['key']='<a 32-character random string>';
    //   $this->encryption->initialize($encr);
		  // $dpass=$this->encryption->decrypt($epass);
    //   //End: Decryption
      $this->db->where('username', $userid);
      $this->db->where('utype', $utype);
      $result= $this->db->get('admins')->row_array();
      echo $result['password'];

      if (password_verify($pass, $result['password'])==true) {
            
           

            return 1;
         }
         else{
            return 0;
         }

        
      
   }
   public function addprincipal($data)
   {
   	# code...
   	$this->db->insert('principal', $data);
    $prid=	$this->db->insert_id();
    return$prid;
   }
    public function addstaff($data)
   {
      # code...

      $this->db->insert('staffs', $data);

    $prid=  $this->db->insert_id();
    return$prid;
   }
   
   public function adddatainlogin($data)
   {
   	# code...

   	$this->db->insert('login', $data);
   }
   public function getprincipaldata($params=array())
   {
   	# code...
      if (isset($params['status'])) {
         $this->db->where('status', $params['status']);
         $result=$this->db->get('principal')->row_array();
         return $result;
         // code...
      }
   $result=	$this->db->get('principal')->result_array();
   return$result;
   }
    public function getstaffdata($value=array())
   {
      # code...
   $result= $this->db->get('staffs')->result_array();
   return$result;
   }
   public function getstaff($id)
   {
      $this->db->where('id', $id);
      $staffdata=$this->db->get('staffs')->row_array();
      return $staffdata;
   }
   public function updatestaff($staffdata, $id)
   {
      # code...
      $this->db->where('id', $id);
      $this->db->update('staffs', $staffdata);
      return 1;
   }
   public function deletestaff($id)
   {
      # code...
      $this->db->where('id', $id);
      if ( $this->db->delete('staffs')) 
      {
         $this->db->where('rid', $id);
         $this->db->delete('login');
         # code...
         return true;
      } 
      else 
      {
         # code...
         return false;
      }
   }
   public function addgallary($params=array())
   {
      // code...
      $this->db->insert('gallary', $params);
   }
   
    public function deleteimageformgallary($id)
   {
      // code...
      $this->db->where('id', $id);
      $this->db->delete('gallary');
   }
   
   public function getGallaryImages()
   {
      // code...
     $result= $this->db->get('gallary')->result_array();
     return $result;
   }
   public function create_new_department($formData=array())
   {
      // code...
      $this->db->insert('department', $formData);
   }
   public function getdepartments($params=array())
   {
      // code...
      if (isset($params['id'])) {
         // code...
         $this->db->where('id', $params['id']);
         $result=$this->db->get('department')->row_array();
         return $result;
      }
      if (isset($params['department_name'])) {
         // code...
         $this->db->where('department_name', $params['department_name']);
         $result=$this->db->get('department')->row_array();
         
         return $result;
      }
     $result= $this->db->get('department')->result_array();
     return $result;
   }
   public function update_department($formData,$params)
   {
      // code...
      $this->db->where('id', $params['id']);
      $this->db->update('department', $formData);
   }
   public function getstafftype()
   {
      $result=$this->db->get('staff_type')->result_array();
      return $result;
   }
   public function deletedepartment($params=array())
   {
      // code...
      if (isset($params['id'])) {
         // code...
         $this->db->where('id', $params['id']);
         $this->db->delete('department');
      }
   }
   public function add_staff_in_department($formData)
   {
      // code...
      $this->db->insert('staff_in_department', $formData);
   }
   public function getstaffInDepartment($params=array())
   {
      // code...
      if (isset($params['id'])) {
         // code...
         $this->db->where('id', $params['id']);
         $result=$this->db->get('staff_in_department')->row_array();
         return $result;
      }
      if (isset($params['department_id'])) {
         // code...
         $this->db->where('department_id', $params['department_id']);
      }
      $this->db->select('staff_in_department.*,department.department_name as department_name,staffs.staff_name as staff_name,staffs.staff_pic as staff_pic,staffs.staff_about as staff_about, staff_type.staff_type as staff_type');
      $this->db->join('department', 'department.id = staff_in_department.department_id', 'left');
      $this->db->join('staffs', 'staffs.id = staff_in_department.staff_id', 'left');
      $this->db->join('staff_type', 'staff_type.id = staff_in_department.staff_type', 'left');
     $result= $this->db->get('staff_in_department')->result_array();
     return $result;

   }
   public function update_staff_in_department($formData,$id)
   {
      // code...
      $this->db->where('id', $id);
      $this->db->update('staff_in_department', $formData);
   }
   public function deletestaffindepartment($params=array())
   {
      // code...
      if (isset($params['id'])) {
         // code...
         $this->db->where('id', $params['id']);
         $this->db->delete('staff_in_department');
      }
   }
   public function add_slider_image($formData)
   {
      // code...
      $this->db->insert('department_slider_images', $formData);
   }
   public function getdepartmentslider($params=array())
   {
      // code...
      if (isset($params['id'])) {
         // code...
         $this->db->where('id', $params['id']);
         $result=$this->db->get('department_slider_images')->row_array();
         return $result;
      }
      if (isset($params['department_id'])) {
         // code...
         $this->db->where('department_id', $params['department_id']);
      }
      $this->db->select('department_slider_images.*,department.department_name as department_name');
      $this->db->join('department', 'department.id = department_slider_images.department_id', 'left');
      $result=$this->db->get('department_slider_images')->result_array();
      return $result;
   }
   public function deletedepartmentslider($params=array())
   {
      // code...
      if (isset($params['id'])) {
         $this->db->where('id', $params['id']);
         $this->db->delete('department_slider_images');
      }
   }
      
     



	

}

/* End of file Admin_model.php */
/* Location: ./application/models/Admin_model.php */