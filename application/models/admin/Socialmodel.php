<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Socialmodel extends CI_Model{
    function __construct() {
    }


public function save_sociallink($data){

$getInsertData = $this->db->update('houdinv_social_links',$data);
            if($getInsertData == 1)
            {
                 return true;
            }
            else
            {
                return false;
            }

}


public function fetchstoreSocialRecord(){
$this->db->select('*')->from('houdinv_social_links');
 $getSearchsocial = $this->db->get()->result();
        return $getSearchsocial;
 }
}
