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
        $this->db->select('car_brand.brand_name,car_model.*');
        $this->db->from('car_model');
        $this->db->join('car_brand','car_brand.id=car_model.id','left');
        $query = $this->db->get();
        return $query->result();


        //return $getuser = $this->db->select('*')->from('tbl_subject')->get()->result();
    }
    public function fetchvariantinventory_api() {
        //$deleteid='1';
        //$this->db->where('delete_status',$deleteid);
        $this->db->select('car_model.model_name,car_variant.*');
        $this->db->from('car_variant');
        $this->db->join('car_model','car_model.id=car_variant.id','left');
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
        $explodData = explode(',',$data);
        $this->db->where_in('id',$explodData);
        $getDeleteStatus = $this->db->delete('car_brand');
        if($getDeleteStatus == 1)
        {
            return array('message'=>'yes');
      }else{
        return array('message'=>'no');
      }
      }

      public function deletemod($data)
  {
      $explodData = explode(',',$data);
      $this->db->where_in('id',$explodData);
      $getDeleteStatus = $this->db->delete('car_model');
      if($getDeleteStatus == 1)
      {
          return array('message'=>'yes');
    }else{
      return array('message'=>'no');
    }
    }
    public function deletevar($data)
    {
        $explodData = explode(',',$data);
        $this->db->where_in('id',$explodData);
        $getDeleteStatus = $this->db->delete('car_variant');
        if($getDeleteStatus == 1)
        {
            return array('message'=>'yes');
      }else{
        return array('message'=>'no');
      }
      }
}