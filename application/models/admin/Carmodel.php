<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Carmodel extends CI_Model {

	public function __construct() {
		parent::__construct();
    }
    public function fetchaddinventory_api(){

        return $getSlider = $this->db->select('*')->from('car_brand')->get()->result();
    
    }
/*    public function fetchmodelinventory_api(){

        return $getSlider = $this->db->select('*')->from('car_model')->get()->result();
    
    }*/
        public function fetchmodelinventory_api() {
        //$deleteid='1';
        //$this->db->where('delete_status',$deleteid);
        $this->db->select('car_brand.*,car_model.*');
        $this->db->from('car_model');
        $this->db->join('car_brand','car_brand.id=car_model.brand_id','left');
        $query = $this->db->get();
        return $query->result();


        //return $getuser = $this->db->select('*')->from('tbl_subject')->get()->result();
    }
    public function fetchvariantinventory_api() {
        //$deleteid='1';
        //$this->db->where('delete_status',$deleteid);
        $this->db->select('car_model.model_name,car_variant.*,car_brand.brand_name');
        $this->db->from('car_variant');
        $this->db->join('car_model','car_model.id=car_variant.model_id','left');
        $this->db->join('car_brand','car_brand.id=car_variant.brand_id','left');
        $query = $this->db->get();
        return $query->result();


        //return $getuser = $this->db->select('*')->from('tbl_subject')->get()->result();
    }
    public function insert_brand($gradedetails){
        $getInsertData = $this->db->insert('car_brand',$gradedetails);
               return true;
    }
    public function insert_model($gradedetails){
        $getInsertData = $this->db->insert('car_model',$gradedetails);
               return true;
    }
    
    
    public function insert_variant($gradedetails){
        $getInsertData = $this->db->insert('car_variant',$gradedetails);
               return true;
    }
    public function deleteData($data)
    {
       $q= $this->db->query("DELETE a.*,b.*,c.*
        FROM car_brand a
        LEFT JOIN car_model b
        ON b.brand_id = a.id
        LEFT JOIN car_variant c
        ON c.brand_id = b.brand_id
        WHERE a.id = $data ");

return $q;

        
      }

      public function deletemod($data)
  {
    $q= $this->db->query("DELETE b.*,c.*
    FROM car_model b
    LEFT JOIN car_variant c
    ON c.model_id = b.id
    WHERE b.id = $data ");

return $q;

    }
    public function deletevar($data)
    {   
        $q= $this->db->query("DELETE c.*
        FROM car_variant c
        WHERE c.id = $data ");
        
        return $q;
      }
      function fetchComp(){

        $response = array();
        
        // Select record
        $this->db->select('*');
        $q = $this->db->get('car_brand');
        $response = $q->result_array();

        return $response;
    }
    // Get City departments
    function fetchModels($postData){
        $response = array();
        
        // Select record
        $this->db->select('id,model_name');
        $this->db->where('brand_id', $postData['comp']);
        $q = $this->db->get('car_model');
        $response = $q->result_array();

        return $response;
    }
}
?>
