<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class NotificationModel extends CI_Model{
 public function SaveNotificationInDB($message)
 {
     $cmd="insert into notification(message) values('$message')";
     $r=$this->db->query($cmd);
     return $r;
 }
 public function GetTop5Notification()
 {
     $cmd="Select *from notification order by notificationid desc limit 5";
     $r=$this->db->query($cmd);
     $record=$r->result();
     return $record;
 }
 public function GetAllNotification()
 {
     $cmd="Select *from notification order by notificationid desc";
     $r=$this->db->query($cmd);
     $record=$r->result();
     return $record;
 }
 public function DeleteNotificationFromDB($nid)
 {
    $cmd="delete from notification where notificationid='$nid'";
    $r=$this->db->query($cmd);
    return $r;
 }
}
?>