<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class Refermodel extends CI_Model {

    public function fetch_referId(){
      return $this->db->get('referandearn')->result_array();
        
    }
    public function fetch_user($id){
     return  $this->db->where('refer_id', $id)->get('admin_refer')->result_array();
        
    }

}

/* End of file Refermodel.php */
