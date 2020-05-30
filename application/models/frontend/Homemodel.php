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
}
