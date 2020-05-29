<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Sitedesc_model extends CI_Model{
  function __construct()
  {

  }
  public function fetchstoreSocialRecord(){
    $this->db->select('*')->from('site_setting');
     $getSearchsocial = $this->db->get()->result();
            return $getSearchsocial;
     }
     public function updte_course_img($vl){

        $this->db->where('id',$vl['id']);
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
      public function updte_course($vl){

        $this->db->where('id',$vl['id']);
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