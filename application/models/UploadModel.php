<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class UploadModel extends CI_Model
{
  public function SaveRecipieFileInDB($title,$descr,$filename,$ftype)
  {
      $cmd="insert into studymaterial(title,description,filename,filetype) values('$title','$descr','$filename','$ftype')";
      $r=$this->db->query($cmd);
      return $r;
  }
  public function ShowAllFilesFromDB()  
  {
    $cmd="select *from studymaterial order by uploaddt desc";
    $r=$this->db->query($cmd);
    $res=$r->result();
    return $res;
  }
  public function SaveRecipieDetailInDB($rname,$category,$ingre,$descr,$vlink,$MyFileName)
  {
    $cmd="insert into recipiedetail(rname,category,description,ingredients,picname,videolink) values('$rname','$category','$descr','$ingre','$MyFileName','$vlink')";
    $r=$this->db->query($cmd);
    return $r;
  }
  public function ShowRecepieDetailsFromDB()  
  {
    $cmd="select *from recipiedetail order by addedon desc";
    $r=$this->db->query($cmd);
    $res=$r->result();
    return $res;
  }
}
?>