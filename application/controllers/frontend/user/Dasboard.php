<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class Dasboard extends CI_Controller {

    public function index()
    {
        $this->load->view('frontend/template/header.php');
        $this->load->view('frontend/template/navbar.php');
        $this->load->view('frontend/user/dasboard.php');
        $this->load->view('frontend/template/footer.php');
    }

}

/* End of file Dasboard.php */
