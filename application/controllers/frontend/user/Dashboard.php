<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

        
        public function __construct()
        {
            parent::__construct();
            $this->load->model('admin/refermodel');
            
        }
        
    public function index()
    {
        $data['history'] = $this->refermodel->fetch_user($_SESSION["referid"]);
        $this->load->view('frontend/template/header.php');
        $this->load->view('frontend/template/navbar.php');
        $this->load->view('frontend/user/dashboard.php',$data);
        $this->load->view('frontend/template/footer.php');
    }

}

/* End of file Dasboard.php */
