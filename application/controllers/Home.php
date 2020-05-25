<?php
    class Home extends CI_controller{
        public function __construct()
    {
        parent::__construct();
        $this->load->model('frontend/Homemodel');
    }

        public function index(){
            $getsocials['socials_data'] = $this->Homemodel->fetchstoreSocialRecord();
            $getsocials['brandslogo'] = $this->Homemodel->fetchaddinventory_api();
            $this->load->view('frontend/template/header');
            $this->load->view('frontend/home',$getsocials);
        }

    }

?>