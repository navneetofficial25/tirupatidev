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
    $this->form_validation->set_rules('pname', '', 'required');
    $this->form_validation->set_rules('services', '', 'required');
    $this->form_validation->set_rules('mob', '', 'required');
    if ($this->form_validation->run()){ 
                
      //  $this->input->post('formSubmit');
        $name = $this->input->post('pname');
        $service = $this->input->post('services');
        $mob = $this->input->post('mob');
        $gradedetails=array('name'=>$name,'service'=>$service,'mob'=>$mob);
        $this->Homemodel->insert_model($gradedetails);
               $this->session->set_flashdata('success','Gallery  Successfully Add');
               redirect(base_url());
            
            }
            else{
                $this->session->set_flashdata('error','Please enter all fields');
                redirect(base_url());
            }

    }
}

?>  