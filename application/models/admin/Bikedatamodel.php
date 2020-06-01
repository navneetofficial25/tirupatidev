<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class BikedataModel extends CI_Model{
    function __construct() {
    }


      
  /*  public function fetchinventory_api(){

        return $getSlider = $this->db->select('*')->from('bike_insurance')->get()->result();
    
    }*/
    /*public function fetchinventory_api() {
        //$deleteid='1';
        //$this->db->where('delete_status',$deleteid);
        $this->db->select('*');
        $this->db->from('bike_insurance');
        $query = $this->db->get();
        return $query->result();


        //return $getuser = $this->db->select('*')->from('tbl_subject')->get()->result();
    }*/
    public function fetchinventory_api() {
      //$deleteid='1';
      //$this->db->where('delete_status',$deleteid);
      $this->db->select('bike_brand.*,bike_insurance.*,bike_model.*,bike_variant.*');
      $this->db->from('bike_insurance');
      $this->db->join('bike_brand','bike_brand.id=bike_insurance.maufacturer_id','left');
      $this->db->join('bike_model','bike_model.id=bike_insurance.modal_id','left');
      $this->db->join('bike_variant','bike_variant.id=bike_insurance.variant_id','left');
      $query = $this->db->get();
      return $query->result();


      //return $getuser = $this->db->select('*')->from('tbl_subject')->get()->result();
  }

    public function deletebikedata($data)
    {
        $explodData = explode(',',$data);
        $this->db->where_in('id',$explodData);
        $getDeleteStatus = $this->db->delete('bike_insurance');
        if($getDeleteStatus == 1)
        {
            return array('message'=>'yes');
      }else{
        return array('message'=>'no');
      }
      }
}
?>