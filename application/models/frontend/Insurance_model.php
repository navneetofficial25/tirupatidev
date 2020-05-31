<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Insurance_model extends CI_Model {
    function car_data($data){
        $this->db->insert('car_insurance',$data);
    }
    function health_insert($datas){
        $this->db->insert('health_insurance',$datas);
        return true;
    }
    function bike_data($data){
        $this->db->insert('bike_insurance',$data);
    }

}