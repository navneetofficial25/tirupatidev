<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Callbackdatamodel extends CI_Model{
    function __construct() {
    }

 /*     public function fetchcall_api() {
        //$deleteid='1';
        //$this->db->where('delete_status',$deleteid);
        $this->db->select('*');
        $this->db->from('call_back');
        $query = $this->db->get();
        return $query->result();


        //return $getuser = $this->db->select('*')->from('tbl_subject')->get()->result();
    }*/
    public function fetchcall_api() {
      //$deleteid='1';
      //$this->db->where('delete_status',$deleteid);
      $this->db->select('insurance_type.*,call_back.*');
      $this->db->from('call_back');
      $this->db->join('insurance_type','insurance_type.id=call_back.service','left');
      $query = $this->db->get();
      return $query->result();


      //return $getuser = $this->db->select('*')->from('tbl_subject')->get()->result();
  }

    public function deletecalldata($data)
    {
        $explodData = explode(',',$data);
        $this->db->where_in('id',$explodData);
        $getDeleteStatus = $this->db->delete('call_back');
        if($getDeleteStatus == 1)
        {
            return array('message'=>'yes');
      }else{
        return array('message'=>'no');
      }
      }
}
?>