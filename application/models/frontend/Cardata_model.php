<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Cardata_model extends CI_Model {
    function data_insert($data){
        $this->db->insert('car_details',$data);
    }

}