<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Registration extends CI_Controller {

	public function index()
	{
		$this->load->helper('form');
		$this->load->helper('captcha');
		$res=$this->CreateCaptcha();

		$_SESSION["code"]=$res['word'];
		$this->load->view('front/register',$res);
	}
	public function SaveRegistration()
	{
		$original_code=$_SESSION["code"];
		$user_code=$this->input->post("Captcha");
		$msg="";
		if(strcmp($original_code,$user_code)==0)
		{
			 // Reading value of all fieldds...
			 $name=$this->input->post("Name");
			 $gender=$this->input->post("Gender");
			 $dob=$this->input->post("DOB");
			 $doa=$this->input->post("DOA");
			 $quali=$this->input->post("Qualification");
			 $branch=$this->input->post("branch");
			 $email=$this->input->post("EmailId");
			 $mob=$this->input->post("MobNo");
			 $city=$this->input->post("City");
			 $address=$this->input->post("Address");
			 $pass=$this->input->post("Pass");
			 $usr=$this->input->post('usrtype');
			 $usrname=$this->input->post('usrname');
			 $file=$_FILES["UserPic"];
			 $MyFileName="";

		if(strlen($file['name'])>0)
		  {
			 //Start: File upload code
			 $picname=$file["name"];
			 $config['upload_path'] = './assests/UserPics/';
             $config['allowed_types'] = 'gif|jpg|png|jpeg';
             $config['max_size']     = '1024';  // Size in KB
             $config['max_width'] = '1000';
			 $config['max_height'] = '1000';
			 $config['file_name']=$name."_".rand(1000,9999)."_".$picname;
			 $this->load->library("upload",$config);
			 $filestatus=$this->upload->do_upload('UserPic');
			 if($filestatus==true)  // Pass NAME OF INPUT TYPE FILE
			 {
				// $data = array('upload_data' => $this->upload->data());
				$MyFileName=$this->upload->data('file_name');
			 }
			 else
			 {
				$error = array('error' => $this->upload->display_errors());
				$msg=$error;
			 }
			}
			 //End: File upload code
			 if(strlen($msg)==0)
			 {
				 //Start: Database code...
					$this->load->model("UserModel","UM");
					$userdata['name']=$name;
					$userdata['gender']=$gender;
					$userdata['dob']=$dob;
					$userdata['doa']=$doa;
					$userdata['branch']=$branch;
					$userdata['quali']=$quali;
					$userdata['email']=$email;
					$userdata['mob']=$mob;
					$userdata['city']=$city;
					$userdata['address']=$address;
					$userdata['MyFileName']=$MyFileName;
					$result=$this->UM->SaveRegistrationInDB($userdata);
					if(!empty($result))
					{
					  // Start: Passsword Encryption
						$this->load->library("encryption");
						$encr['cipher']='aes-256';
						$encr['mode']='ctr';
						$encr['key']='<a 32-character random string>';
						$this->encryption->initialize($encr);
						$epass=$this->encryption->encrypt($pass);
					  // End: Password Encryption
					  // Start: For Online Exam only
						echo $usr;
						echo$usrname;
						$r=$this->UM->SaveLoginInfoInDB($usrname,$epass,$usr,$result);
					  // End: For Online Exam only
					 // $r=$this->UM->SaveLoginInfoInDB($email,$epass);// For Estudy & IT
					 $msg="Congratulations! you are registered successfully. Your User Id: $usrname and Password is: $pass";
					}
					else
					  $msg="Sorry! due to some technial issue; we are unable to regiter your account.";
				 // End: Database Code...
			 }
		}
		else
		{
			$msg="Invalid captcha code.";
		}
		$this->session->set_flashdata("res",$msg);
		redirect(base_url()."Registration");
	}
	public function GetNewCaptcha()
	{
		$this->load->helper('captcha');
		$res=$this->CreateCaptcha();
		$_SESSION["code"]=$res['word'];
		echo $res['image'];
	}
	function CreateCaptcha()
	{
		$vals = array(
			'word'          => '',
			'img_path'      => './assests/captcha/',
			'img_url'       => base_url().'assests/captcha',
			'font_path'     => base_url().'system/fonts/texb.ttf',
			'img_width'     => '135',
			'img_height'    => 30,
			'word_length'   => 8,
            'font_size'     => 35,
			'img_id'        => 'ImgCaptcha',
			'pool'          => '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ',
	
			// White background and border, black text and red grid
			
	);

	
	$cap = create_captcha($vals);
	//$cap['word'] will contain captcha code and $cap['image'] will contain img tag of captcha
	
	return $cap;
	}


}


/* End of file Registration.php */
/* Location: ./application/controllers/Registration.php */