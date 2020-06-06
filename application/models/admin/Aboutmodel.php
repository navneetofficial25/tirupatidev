<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class Aboutmodel extends CI_Model {

    public function upload($data){
        $this->db->where('about_id',1);
        $this->db->update('about-us',$data);
        return true;
    }
    public function fetch(){
      return  $this->db->get('about-us')->row_array();
    }

}

/* End of file Aboutmodel.php */


?>