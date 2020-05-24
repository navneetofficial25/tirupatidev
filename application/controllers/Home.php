<?php
    class Home extends CI_controller{

        public function index(){
            $this->load->view('frontend/template/header');
            $this->load->view('frontend/home');
        }

    }

?>