<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class UserdataModel extends CI_Model{
    function __construct() {
    }


    public function fetchaddinventory_api(){

        return $getSlider = $this->db->select('*')->from('health_insurance')->get()->result();
    
    }
    public function deletemod($data)
    {
        $explodData = explode(',',$data);
        $this->db->where_in('id',$explodData);
        $getDeleteStatus = $this->db->delete('health_insurance');
        if($getDeleteStatus == 1)
        {
            return array('message'=>'yes');
      }else{
        return array('message'=>'no');
      }
      }

      
  /*  public function fetchinventory_api(){

        return $getSlider = $this->db->select('*')->from('car_insurance')->get()->result();
    
    }*/
    public function fetchinventory_api() {
        //$deleteid='1';
        //$this->db->where('delete_status',$deleteid);
        $this->db->select('*');
        $this->db->from('car_insurance');
        $this->db->join('car_brand','car_brand.id=car_insurance.id','left');
        $this->db->join('car_model','car_model.id=car_insurance.id','left');
        $this->db->join('car_variant','car_variant.id=car_insurance.id','left');
        $query = $this->db->get();
        return $query->result();


        //return $getuser = $this->db->select('*')->from('tbl_subject')->get()->result();
    }
    public function deletecardata($data)
    {
        $explodData = explode(',',$data);
        $this->db->where_in('id',$explodData);
        $getDeleteStatus = $this->db->delete('car_insurance');
        if($getDeleteStatus == 1)
        {
            return array('message'=>'yes');
      }else{
        return array('message'=>'no');
      }
      }
}
