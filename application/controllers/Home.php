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
            $this->load->view('frontend/template/footer');

        }
        
        public function callmodel(){
    $this->form_validation->set_rules('pname', 'Name', 'required');
    $this->form_validation->set_rules('services', 'Serives', 'required');
    $this->form_validation->set_rules('mob', 'Phone', 'required|regex_match[/^[0-9]{10}$/]');
    if ($this->form_validation->run()){ 
                
      //  $this->input->post('formSubmit');
        $name = $this->input->post('pname');
        $service = $this->input->post('services');
        $mob = $this->input->post('mob');
        $gradedetails=array('name'=>$name,'service'=>$service,'mob'=>$mob);
    
        if($this->Homemodel->insert_model($gradedetails)){
            $array = array(
                'error' => false,
                'success' => '<div class="alert alert-success">Thank you for Contact Us</div>'
            );
        }else{
            $array = array(
                'error' => true
            );
        }
        }
    else{
         $array = array(
            'error'   => true,
            'pname' => form_error('pname'),
            'services' => form_error('services'),
            'mob' => form_error('mob'),
           );
           
        }
        echo json_encode($array);

    }
}

?>  