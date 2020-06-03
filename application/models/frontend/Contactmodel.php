<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Contactmodel extends CI_Model {
    function contact_data($data){
      return  $this->db->insert('contactus',$data);
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