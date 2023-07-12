<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class EnquiryModel extends CI_Model{
  public function SaveEnquiryInDB($name,$email,$mob,$msg)
  {
      $cmd="insert into enquiry(name,emailid,mobno,message) values('$name','$email','$mob','$msg')";
      $res=$this->db->query($cmd);
      return $res;
  }
  public function GetAllEnquiries()
  {
      $cmd="Select *from enquiry order by enquiry_dt desc";
      $r=$this->db->query($cmd);
      $res=$r->result();
      return $res;
  }
}

?>