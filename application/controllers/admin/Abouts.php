<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class Abouts extends CI_Controller {

    public function index()
    {
        $this->load->view('admin/template/header');
        $this->load->view('admin/template/sidebar');
        $this->load->view('admin/template/topbar');
        $this->load->view('admin/abooutus.php');
    }

}

/* End of file Aboutus.php */