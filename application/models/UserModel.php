<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class UserModel extends CI_Model
{
   public function SaveRegistrationInDB($userdata) 
   {
     $this->db->insert('registration', $userdata);
     $res=$this->db->insert_id();
      return $res;
   }
   public function SaveLoginInfoInDB($usrname,$pass,$usr,$rid)
   {
      $cmd="Insert into login(usrname,pass,utype,rid) values('$usrname','$pass','$usr','$rid')";  
      // For IT=> USER, For Estudy & Exam=> STUDENT
      
      $res=$this->db->query($cmd);
      return $res;
   }
   public function GetCurrentEnrolmentNo()
   {
      $cmd="SELECT max(enrolment_no) as eno from registration";
      $res=$this->db->query($cmd);
      $r=$res->row();
      return $r->eno;
   }
   public function CheckLoginInfo($userid,$pass,$utype)
   {
      // To get encrypted passsword from database table and decrypt it
      // echo $userid;
      // echo $utype;
      // echo $pass;
      // exit;
      if ($utype==2) {
         # code...
         $this->db->where('usrname', $userid);
         $this->db->where('utype', $utype);
         $result= $this->db->get('login')->row_array();
         // print_r($result);
         // echo "<br> Umesh";
         // echo "<br>";
         // echo $pass.'<br>';
         // echo password_hash($pass, PASSWORD_DEFAULT).'<br>';exit;
         
         if (password_verify($pass, $result['pass'])==true) {
            
            $this->db->where('id', $result['rid']);
            $userdata=$this->db->get('staffs')->row_array();
            // print_r($userdata);exit;

            return $userdata;
         }

         
      }
     elseif ($utype==4) {
           # code...
         $cmd="Select pass ,rid from login where usrname='$userid' and utype='$utype'";
         $r=$this->db->query($cmd);
         $res=$r->row();
         $epass=$res->pass;
         $urid=$res->rid;
         // Start: Decryption
         $this->load->library("encryption");
         $encr['cipher']='aes-256';
         $encr['mode']='ctr';
         $encr['key']='<a 32-character random string>';
         $this->encryption->initialize($encr);
           $dpass=$this->encryption->decrypt($epass);
         //End: Decryption
           
         if(strcmp($pass,$dpass)==0){
            $this->db->where('id', $urid);
             $userdata=$this->db->get('registration')->row_array();
             return $userdata;

         }
     }
           
      else
          return 0;
   }
   public function GetUserPicAndNamefromDB($uid)
   {
      $cmd="Select name,gender,picname from registration where id='$uid'";
      $res=$this->db->query($cmd);
      $r=$res->row();
      return $r;
   }
   public function UpdatePasswordInDB($oldpass,$newpass)
   {
      $userid=$_SESSION["userid"];
      // To get encrypted passsword from database table and decrypt it
      $cmd="Select pass from login where userid='$userid'";
      $r=$this->db->query($cmd);
      $res=$r->row();
      $epass=$res->pass;
      // Start: Decryption
      $this->load->library("encryption");
      $encr['cipher']='aes-256';
      $encr['mode']='ctr';
      $encr['key']='<a 32-character random string>';
      $this->encryption->initialize($encr);
      $dpass=$this->encryption->decrypt($epass);
      if(strcmp($oldpass,$dpass)==0)
      {
           $newEpass=$this->encryption->encrypt($newpass);
           $res=$this->db->query("Update login set pass='$newEpass' where userid='$userid'");
           return $res;
      } 
      else
      {
         return false;
      }
   }
   public function GetProfileOfSingleUser($uid)
   {
      // To get encrypted passsword from database table and decrypt it
      $cmd="Select *from registration where enrolment_no='$uid'";
      $r=$this->db->query($cmd);
      $res=$r->row();
      return $res;
   }
   public function SaveProfileInDB($name,$gender,$dob,$quali,$email,$mob,$city,$address,$picname)
   {
      $uid=$_SESSION["userid"];
      if(strlen($picname)>0)
         $cmd="Update registration set name='$name',gender='$gender',dob='$dob',qualification='$quali',emailid='$email',mobno='$mob',city='$city',address='$address',picname='$picname' where enrolment_no='$uid'";
      else
         $cmd="Update registration set name='$name',gender='$gender',dob='$dob', qualification='$quali',emailid='$email',mobno='$mob',city='$city',address='$address' where enrolment_no='$uid'";
      $r=$this->db->query($cmd);
      return $r;
   }
   public function GetAllUsers()
   {
      $cmd="Select *from registration order by reg_dt desc";
      $r=$this->db->query($cmd);
      $res=$r->result();
      return $res;
   }
   public function DeleteUserFromDB($uid)
   {
      // TO delete record from feedback table
      $cmd="delete from userfeedback where user_id='$uid'"; 
      $res=$this->db->query($cmd);
      // TO delete record from login table
      $cmd="delete from login where userid='$uid'"; 
      $res=$this->db->query($cmd);
      // Also perform deletion from tables- dquestion danswer, testresult
      // TO delete record from feedback table
      $cmd="delete from registration where enrolment_no='$uid'"; 
      $res=$this->db->query($cmd);
      return $res;
   } 
   public function UpdateAdminPasswordInDB($oldpass,$newpass)
   {
      $userid=$_SESSION["adminid"];
      // To get encrypted passsword from database table and decrypt it
      $cmd="Select pass from login where userid='$userid'";
      $r=$this->db->query($cmd);
      $res=$r->row();
      $epass=$res->pass;
      // Start: Decryption
      $this->load->library("encryption");
      $encr['cipher']='aes-256';
      $encr['mode']='ctr';
      $encr['key']='<a 32-character random string>';
      $this->encryption->initialize($encr);
      $dpass=$this->encryption->decrypt($epass);
      if(strcmp($oldpass,$dpass)==0)
      {
           $newEpass=$this->encryption->encrypt($newpass);
           $res=$this->db->query("Update login set pass='$newEpass' where userid='$userid'");
           return $res;
      } 
      else
      {
         return false;
      }
   }
}

?>