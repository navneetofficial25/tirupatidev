<?php
    class Welcome extends CI_controller{

        public function index(){
            $this->load->view('template/header');
            $this->load->view('template/sidebar');
            $this->load->view('template/topbar');
            $this->load->view('dashboard');
            $this->load->view('template/footer');
        }

    }

?>