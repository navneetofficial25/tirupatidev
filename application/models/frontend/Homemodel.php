<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Homemodel extends CI_Model{
    function __construct() {
    }

public function fetchstoreSocialRecord(){
$this->db->select('*')->from('houdinv_social_links');
 $getSearchsocial = $this->db->get()->result();
        return $getSearchsocial;
 }
 public function fetchaddinventory_api(){

    return $getSlider = $this->db->select('*')->from('brandlogo')->get()->result();

}
}
