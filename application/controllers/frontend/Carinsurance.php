<?php
    class Carinsurance extends CI_controller{
        public function __construct()
    {
        parent::__construct();

    }

//car insurance
        public function index(){
        $this->load->model('frontend/Carmodel');
        
            $data['company'] = $this->Carmodel->fetchComp();
        
            $this->load->view('frontend/template/header');
            $this->load->view('frontend/template/navbar');
            $this->load->view('frontend/carinsurance',$data);
            $this->load->view('frontend/template/footer');
        }
        public function getCompany(){
        $this->load->model('frontend/Carmodel');

            $postData = $this->input->post('comp');        
            $data = $this->Carmodel->fetchModels($postData);
            echo json_encode($data);
        }

        public function getModel(){
        $this->load->model('frontend/Carmodel');
        $postData = $this->input->post('comp');        
        $data = $this->Carmodel->fetchVariants($postData);
        echo json_encode($data);
        }


    public function renewDetails(){
        $this->load->model('frontend/Carmodel');
        $this->input->post('formSubmit');


        $this->form_validation->set_rules('registraion', 'Registration', 'required');
        $this->form_validation->set_rules('company', 'Company Name', 'required');
        $this->form_validation->set_rules('fuel_type', 'Fuel Type', 'required');
        $this->form_validation->set_rules('regyr', 'Registrtion Year', 'required');
        $this->form_validation->set_rules('modl', 'Modal', 'required');
        $this->form_validation->set_rules('ptypes', 'Policy Type', 'required');
        $this->form_validation->set_rules('vari', 'Varient', 'required');
        $this->form_validation->set_rules('policy_expire', 'Policy Expire', 'required');
        $this->form_validation->set_rules('pinsur', 'Policy Insurer', 'required');

        if ($this->form_validation->run()){ 
        $data = array(
            'registration_no' => $this->input->post('registraion'),
            'maufacturer_id' => $this->input->post('company'),
            'fuel_type' => $this->input->post('fuel_type'),
            'registration_year' => $this->input->post('regyr'),
            'prev_policy' => $this->input->post('ptypes'),
            'modal_id' => $this->input->post('modl'),
            'variant_id' => $this->input->post('vari'),
            'policy_expire' => $this->input->post('policy_expire'),
            'prev_insurer' => $this->input->post('pinsur'),
        );
            if($this->Carmodel->car_data($data)){
                echo "<h6 class='text-success text-center'>Successfully Submited</h6>";
            }
            else{
                echo "<h6 class='text-danger text-center'>Error In Submission</h6>";
            }
         
              
    }
    else{
               
        echo "<h6 class='text-danger text-center'>PLease Fill All Fields</h6>";
               
    }
    }
    public function newCar(){
        $this->load->model('frontend/Carmodel');
        $this->input->post('formSubmit');
        $this->form_validation->set_rules('company', 'Company Name', 'required');
        $this->form_validation->set_rules('fuel_type', 'Fuel Type', 'required');
        $this->form_validation->set_rules('regyr', 'Registrtion Year', 'required');
        $this->form_validation->set_rules('modal', 'Modal', 'required');
        $this->form_validation->set_rules('vari', 'Varient', 'required');
        $this->form_validation->set_rules('policy_expire', 'Policy Expire', 'required');
        if ($this->form_validation->run()){ 
            $data = array(
                'maufacturer_id' => $this->input->post('company'),
                'fuel_type' => $this->input->post('fuel_type'),
                'registration_year' => $this->input->post('regyr'),
                'modal_id' => $this->input->post('modal'),
                'variant_id' => $this->input->post('vari'),
                'policy_expire' => $this->input->post('policy_expire'),
            );
            
            if($this->Carmodel->car_data($data)){
                echo "<h6 class='text-success text-center'>Successfully Submited</h6>";
            }
            else{
                echo "<h6 class='text-danger text-center'>Error In Submission</h6>";
            }
         
              
    }
    else{
               
        echo validation_errors();
               
    }
    }
}
?>