<?php
    class Welcome extends CI_controller{

        public function index(){
            $this->load->view('admin/template/header');
            $this->load->view('admin/template/sidebar');
            $this->load->view('admin/template/topbar');
            $this->load->view('admin/dashboard');
            $this->load->view('admin/template/footer');
        }

    }

?>