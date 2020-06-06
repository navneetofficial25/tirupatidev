<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Bikemodel extends CI_Model {

	public function __construct() {
		parent::__construct();
    }
    public function fetchaddinventory_api(){

        return $getSlider = $this->db->select('*')->from('bike_brand')->get()->result();
    
    }
/*    public function fetchmodelinventory_api(){

        return $getSlider = $this->db->select('*')->from('bike_model')->get()->result();
    
    }*/
        public function fetchmodelinventory_api() {
        //$deleteid='1';
        //$this->db->where('delete_status',$deleteid);
        $this->db->select('bike_brand.*,bike_model.*');
        $this->db->from('bike_model');
        $this->db->join('bike_brand','bike_brand.id=bike_model.brand_id','left');
        $query = $this->db->get();
        return $query->result();


        //return $getuser = $this->db->select('*')->from('tbl_subject')->get()->result();
    }
    public function fetchvariantinventory_api() {
        //$deleteid='1';
        //$this->db->where('delete_status',$deleteid);
        $this->db->select('bike_model.model_name,bike_variant.*,bike_brand.brand_name');
        $this->db->from('bike_variant');
        $this->db->join('bike_model','bike_model.id=bike_variant.model_id','left');
        $this->db->join('bike_brand','bike_brand.id=bike_variant.brand_id','left');
        $query = $this->db->get();
        return $query->result();


        //return $getuser = $this->db->select('*')->from('tbl_subject')->get()->result();
    }
    public function insert_brand($gradedetails){
        $getInsertData = $this->db->insert('bike_brand',$gradedetails);
               return true;
    }
    public function insert_model($gradedetails){
        $getInsertData = $this->db->insert('bike_model',$gradedetails);
               return true;
    }
    
    
    public function insert_variant($gradedetails){
        $getInsertData = $this->db->insert('bike_variant',$gradedetails);
               return true;
    }
    public function deleteData($data)
    {
       $q= $this->db->query("DELETE a.*,b.*,c.*
        FROM bike_brand a
        LEFT JOIN bike_model b
        ON b.brand_id = a.id
        LEFT JOIN bike_variant c
        ON c.brand_id = b.brand_id
        WHERE a.id = $data ");

return $q;

        
      }

      public function deletemod($data)
  {
    $q= $this->db->query("DELETE b.*,c.*
    FROM bike_model b
    LEFT JOIN bike_variant c
    ON c.model_id = b.id
    WHERE b.id = $data ");

return $q;

    }
    public function deletevar($data)
    {
       
    $q= $this->db->query("DELETE c.*
    FROM bike_variant c
    WHERE c.id = $data ");

return $q;
      }

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
    function bike_data($data){
        $this->db->insert('bike_insurance',$data);
    }
}
?>