<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Brandsmodel extends CI_Model{
  function __construct()
  {

  }

  public function fetchaddinventory_api(){

    return $getSlider = $this->db->select('*')->from('brandlogo')->get()->result();

}
public function updte_course_img($vl){

    $this->db->where('id',$vl['id']);
     $getInsertData= $this->db->update('brandlogo',$vl);
        if($getInsertData == 1)
        {
             return true;
        }
        else
        {
            return false;
        }

  }
  public function updte_course($vl){

    $this->db->where('id',$vl['id']);
     $getInsertData= $this->db->update('brandlogo',$vl);
        if($getInsertData == 1)
        {
             return true;
        }
        else
        {
            return false;
        }

  }
  public function fetchCourses($dt){
    return $getSlider = $this->db->select('*')->from('brandlogo')->where('id',$dt)->get()->result();


 }
 public function insert_course($vlues){

  $getInsertData= $this->db->insert('brandlogo',$vlues);
       if($getInsertData == 1)
       {
            return true;
       }
       else
       {
           return false;
       }
}

public function deleteData($data)
{   
    $q= $this->db->query("DELETE c.*
    FROM brandlogo c
    WHERE c.id = $data ");
    
    return $q;
  }

}
?>