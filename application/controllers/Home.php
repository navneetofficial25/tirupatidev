<?php
    class Home extends CI_controller{
        public function __construct()
    {
        parent::__construct();
        $this->load->model('frontend/Homemodel');
    }

        public function index(){
            $getsocials['brandslogo'] = $this->Homemodel->fetchaddinventory_api();
            $getsocials['company'] = $this->Homemodel->fetchins();
            $this->load->view('frontend/template/header');
            $this->load->view('frontend/template/navbar');
            $this->load->view('frontend/home',$getsocials);
        }
        
        public function callmodel(){

                
      //  $this->input->post('formSubmit');
        $name = $this->input->post('pname');
        $service = $this->input->post('services');
        $mob = $this->input->post('mob');
        $gradedetails=array('name'=>$name,'service'=>$service,'mob'=>$mob);
        $this->Homemodel->insert_model($gradedetails);
        redirect(base_url());
            
            }

    }

?>  