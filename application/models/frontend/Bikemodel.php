<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Bikemodel extends CI_Model {

    // Get cities
    function fetchComp(){

        $response = array();
        
        // Select record
        $this->db->select('*');
        $q = $this->db->get('bike_brand');
        $response = $q->result_array();

        return $response;
    }
    function fetchModeldata(){
        $response = array();
        
        // Select record
        $this->db->select('*');
        $q = $this->db->get('bike_model');
        $response = $q->result_array();

        return $response;
    }

    // Get City departments
    function fetchModels($postData){
        $response = $this->db->query("SELECT id FROM bike_brand WHERE brand_name = '$postData'");
        $id =  $response->result_array();
        $id =  $id[0]['id']; 
        $response = $this->db->query("SELECT model_name FROM bike_model WHERE brand_id = '$id'");
        return $response->result_array();

    }

    // Get Department user
    function fetchVariants($postData){
        $response = $this->db->query("SELECT id FROM bike_model WHERE model_name = '$postData'");
        $id =  $response->result_array();
        $id =  $id[0]['id']; 
        $response = $this->db->query("SELECT variant_name FROM bike_variant WHERE model_id = '$id'");
        return $response->result_array();
    }
    function bike_data($data){
        return $this->db->insert('bike_insurance',$data);
         
    }


}