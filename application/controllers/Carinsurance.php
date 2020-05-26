<?php
    class Carinsurance extends CI_controller{
        public function __construct()
    {
        parent::__construct();
//        $this->load->model('frontend/Homemodel');
    }

        public function index(){
//            $getsocials['brandslogo'] = $this->Homemodel->fetchaddinventory_api();
            $this->load->view('frontend/template/header');
            $this->load->view('frontend/template/navbar');
            $this->load->view('frontend/carinsurance');
            $this->load->view('frontend/template/footer');
        }

    }

?>