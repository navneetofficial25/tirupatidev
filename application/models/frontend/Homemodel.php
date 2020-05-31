<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Homemodel extends CI_Model{
    function __construct() {
    }

 public function fetchaddinventory_api(){

    return $getSlider = $this->db->select('*')->from('brandlogo')->get()->result();

}
public function fetchaboutus(){
      
    return $getSlider = $this->db->select('*')->from('site_setting')->get()->result();
}
public function insert_model($gradedetails){
    $getInsertData = $this->db->insert('call_back',$gradedetails);
           return true;
}

function fetchins(){

    $response = array();
    
    // Select record
    $this->db->select('*');
    $q = $this->db->get('insurance_type');
    $response = $q->result_array();

    return $response;
}

}
