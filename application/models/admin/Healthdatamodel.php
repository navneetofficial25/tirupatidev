<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Healthdatamodel extends CI_Model{
    function __construct() {
    }


    public function fetchaddinventory_api(){

        return $getSlider = $this->db->select('*')->from('health_insurance')->get()->result();
    
    }
    public function deletemod($data)
    {
        $explodData = explode(',',$data);
        $this->db->where_in('id',$explodData);
        $getDeleteStatus = $this->db->delete('health_insurance');
        if($getDeleteStatus == 1)
        {
            return array('message'=>'yes');
      }else{
        return array('message'=>'no');
      }
      }

 }
 ?>
