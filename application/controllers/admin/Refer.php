<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class Refer extends CI_Controller {
    
    public function __construct()
    {
        parent::__construct();
        $this->load->model('admin/refermodel');
    }
    
    public function index()
    {
        $data['fetch_refer'] = $this->refermodel->fetch_referId();
        $this->load->view('admin/template/header');
        $this->load->view('admin/template/sidebar');
        $this->load->view('admin/template/topbar');
        $this->load->view('admin/refer',$data);
    }

}

/* End of file Refer.php */
