<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Healthmodel extends CI_Model {
    
    function health_insert($datas){
        $this->db->insert('health_insurance',$datas);
        return true;
    }

}?>