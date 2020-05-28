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
        $this->db->join('car_model','car_model.model_id=car_variant.model_id','left');
        $query = $this->db->get();
        return $query->result();


        //return $getuser = $this->db->select('*')->from('tbl_subject')->get()->result();
    }
/*
    public function gradenames() {
        $deleteid='1';
        $gradestatus='1';
        $multipleWhere = ['delete_status' => $deleteid, 'tbl_grades_status' => $gradestatus];
        $this->db->where($multipleWhere);
        return $getuser = $this->db->select('*')->from('tbl_grades')->get()->result();
    }

    public function gradedetails() {
        $deleteid='1';
        $this->db->where('delete_status',$deleteid);
        return $getuser = $this->db->select('*')->from('tbl_grades')->get()->result();
    }
    public function addgrades($gradedetails){

        $this->db->insert('tbl_grades',$gradedetails);
        return true;
        }
    public function updategradestatus($gradedetails,$gradeid){

        $this->db->where('tbl_grades_id',$gradeid);
        $this->db->update('tbl_grades',$gradedetails);
        return true;
        }


    public function subjectdetails() {
        //$deleteid='1';
        //$this->db->where('delete_status',$deleteid);
        $this->db->select('tbl_grades.tbl_grades_name,tbl_subject.*');
        $this->db->from('tbl_subject');
        $this->db->where('tbl_subject.delete_status',1);
        $this->db->join('tbl_grades','tbl_grades.tbl_grades_id=tbl_subject.grade_id','left');
        $query = $this->db->get();
        return $query->result();


        //return $getuser = $this->db->select('*')->from('tbl_subject')->get()->result();
    }
    public function addsubject($subjectdetails){

        $this->db->insert('tbl_subject',$subjectdetails);
        return true;
        }
    public function updatesubject($subjectdetails,$subjectid){

            $this->db->where('tbl_subject_id',$subjectid);
            $this->db->update('tbl_subject',$subjectdetails);
            return true;
            }
    public function subjectdetails() {
        //$deleteid='1';
        //$this->db->where('delete_status',$deleteid);
        $this->db->select('tbl_grades.tbl_grades_name,tbl_subject.*');
        $this->db->from('tbl_subject');
        $this->db->where('tbl_subject.delete_status',1);
        $this->db->join('tbl_grades','tbl_grades.tbl_grades_id=tbl_subject.grade_id','left');
        $query = $this->db->get();
        return $query->result();


        //return $getuser = $this->db->select('*')->from('tbl_subject')->get()->result();
    }
    public function addsubject($subjectdetails){

        $this->db->insert('tbl_subject',$subjectdetails);
        return true;
        }
    public function updatesubject($subjectdetails,$subjectid){

            $this->db->where('tbl_subject_id',$subjectid);
            $this->db->update('tbl_subject',$subjectdetails);
            return true;
            }

    public function chapterdetails() {
        //$deleteid='1';
        //$this->db->where('delete_status',$deleteid);
        $this->db->select('tbl_grades.tbl_grades_name,tbl_cha.*');
        $this->db->from('tbl_subject');
        $this->db->where('tbl_subject.delete_status',1);
        $this->db->join('tbl_grades','tbl_grades.tbl_grades_id=tbl_subject.grade_id','left');
        $query = $this->db->get();
        return $query->result();


        //return $getuser = $this->db->select('*')->from('tbl_subject')->get()->result();
    }*/
}