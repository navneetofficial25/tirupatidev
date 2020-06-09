<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ReferandEarnmodel extends CI_Model {
    function refercode_insert($data){
        return  $this->db->insert('referandearn',$data);
    }
    
    function fetchModeldata(){
        $response = array();
        // Select record
        $this->db->select('*');
        $q = $this->db->get('referandearn');
        $response = $q->result_array();

        return $response;
    }
}
?>