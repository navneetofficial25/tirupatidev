<?php
    class About extends CI_controller{
        public function __construct()
    {
        parent::__construct();
        $this->load->model('admin/Aboutmodel');
    }

        public function index(){
            $data = $this->Aboutmodel->fetch();
            $this->load->view('frontend/template/header');
            $this->load->view('frontend/template/navbar');
            $this->load->view('frontend/about',$data);
            $this->load->view('frontend/template/footer');
        }

    }

?>  