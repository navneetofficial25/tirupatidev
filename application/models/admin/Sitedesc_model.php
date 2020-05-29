<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Sitedesc_model extends CI_Model{
  function __construct()
  {

  }
  public function fetchaboutus(){
      
      return $getSlider = $this->db->select('*')->from('site_setting')->get()->result();
     
  
  
  }
  
  public function insert_slider($vlues){
      
     $getInsertData= $this->db->insert('site_setting',$vlues);   
          if($getInsertData == 1)
          {
               return true;
          }
          else
          {
              return false;
          } 
      
      
  }
  
   public function updte_aboutus($vl){      
      
       
       $getInsertData= $this->db->update('site_setting',$vl);   
          if($getInsertData == 1)
          {
               return true;
          }
          else
          {
              return false;
          } 
      
    }
  
   public function updte_aboutus_img($vl){      
      
      
       $getInsertData= $this->db->update('site_setting',$vl);   
          if($getInsertData == 1)
          {
               return true;
          }
          else
          {
              return false;
          } 
      
    }
  
}
?>