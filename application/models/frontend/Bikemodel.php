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
        $response = array();
        
        // Select record
        $this->db->select('id,model_name');
        $this->db->where('brand_id', $postData['comp']);
        $q = $this->db->get('bike_model');
        $response = $q->result_array();

        return $response;
    }

    // Get Department user
    function fetchVariants($postData){
        $response = array();
        
        // Select record
        $this->db->select('id,variant_name');
        $this->db->where('model_id', $postData['modal']);
        $q = $this->db->get('bike_variant');
        $response = $q->result_array();

        return $response;
    }

}