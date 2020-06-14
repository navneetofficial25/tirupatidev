<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ReferandEarnmodel extends CI_Model {
    function refercode_insert($data){
        return  $this->db->insert('referandearn',$data);
    }

    function signup($data){
        return  $this->db->insert('referandearn',$data);
    }
    
    function fetchModeldata(){
        $response = array();
        $this->db->select('*');
        $q = $this->db->get('referandearn');
        $response = $q->result_array();
        return $response;
    }

    function update_bank($data,$email){
        $this->db->where('email',$email);
        return $this->db->update('referandearn',$data);
    }
}
?>