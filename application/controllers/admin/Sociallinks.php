<?php
    class Sociallinks extends CI_controller{
        public function __construct()
    {
        parent::__construct();
        $this->load->model('Socialmodel');
    }

        public function index(){
    $getsocials['socials_data'] = $this->Socialmodel->fetchstoreSocialRecord();
            $this->load->view('admin/template/header');
            $this->load->view('admin/template/sidebar');
            $this->load->view('admin/template/topbar');
        $this->load->view('admin/sociallinks',$getsocials);
            $this->load->view('admin/template/footer');
        }

    }

?>
