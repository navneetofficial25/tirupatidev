<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Contactdatamodel extends CI_Model{
    function __construct() {
    }

/*   public function fetchcontact_api() {
        //$deleteid='1';
        //$this->db->where('delete_status',$deleteid);
        $this->db->select('*');
        $this->db->from('contactus');
        $query = $this->db->get();
        return $query->result();


        //return $getuser = $this->db->select('*')->from('tbl_subject')->get()->result();
    }*/
    public function fetchcontact_api() {
        //$deleteid='1';
        //$this->db->where('delete_status',$deleteid);
        $this->db->select('insurance_type.*,contactus.*');
        $this->db->from('contactus');
        $this->db->join('insurance_type','insurance_type.id=contactus.ins','left');
        $query = $this->db->get();
        return $query->result();


        //return $getuser = $this->db->select('*')->from('tbl_subject')->get()->result();
    }

    public function deletecontactdata($data)
    {
        $explodData = explode(',',$data);
        $this->db->where_in('id',$explodData);
        $getDeleteStatus = $this->db->delete('contactus');
        if($getDeleteStatus == 1)
        {
            return array('message'=>'yes');
      }else{
        return array('message'=>'no');
      }
      }
     
     }
?>