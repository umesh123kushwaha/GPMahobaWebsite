<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class FeedbackModel extends CI_Model{
  public function SaveFeedbackInDB($topic,$message)
  {
      $uid=$_SESSION["userid"];
      $cmd="Insert into userfeedback(user_id,topic,message) values('$uid','$topic','$message')";
      $res=$this->db->query($cmd);
      return $res;
  }
  public function GetAllFeedbackFromDB()
  {
    $cmd="select f.feedback_id,f.topic,f.message,f.feedbact_dt,r.name from userfeedback f,registration r where r.enrolment_no=f.user_id";
    $r=$this->db->query($cmd);
    $res=$r->result();
    return $res;
  }
}