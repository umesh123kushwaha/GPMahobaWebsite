<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ForgotModel extends CI_Model{
public function CheckBasicDetail($email,$mob)
{
    $cmd="Select *from registration where emailid='$email' and mobno='$mob'";
    $r=$this->db->query($cmd);
    $res=$r->row();
    return $res;
}
public function SetNewPasswordInDB($email,$pass)
{
    // Start: Get Value of Primary key column from DB
    $cmd="Select enrolment_no from registration where emailid='$email'";
    $r=$this->db->query($cmd);
    $res=$r->row();
    $uid=$res->enrolment_no;
    // End: Get Value of Primary key column from DB
    $cmd="Update login set pass='$pass' where userid='$uid'";
    $r=$this->db->query($cmd);
    return $r;
}
}
?>