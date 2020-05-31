<?php
    class Insurance extends CI_controller{
        public function __construct()
    {
        parent::__construct();

    }

//car insurance
        public function carInsurance(){
        $this->load->model('frontend/Carmodel');
        
            $data['company'] = $this->Carmodel->fetchComp();
        
            $this->load->view('frontend/template/header');
            $this->load->view('frontend/template/navbar');
            $this->load->view('frontend/carinsurance',$data);
        }
        public function getCompany(){
        $this->load->model('frontend/Carmodel');

            $postData = $this->input->post();        
            $data = $this->Carmodel->fetchModels($postData);
        
            echo json_encode($data);
        }

        public function getModel(){
        $this->load->model('frontend/Carmodel');

            $postData = $this->input->post();        
            $data = $this->Carmodel->fetchVariants($postData);
        
            echo json_encode($data);
        }


    public function renewDetails(){
        $this->load->model('frontend/Insurance_model');
        $this->input->post('formSubmit');


        $data = array(
            'registration_no' => $this->input->post('regno'),
            'maufacturer_id' => $this->input->post('comp'),
            'fuel_type' => $this->input->post('type'),
            'registration_year' => $this->input->post('regyr'),
            'prev_policy' => $this->input->post('ptype'),
            'modal_id' => $this->input->post('modal'),
            'variant_id' => $this->input->post('vari'),
            'policy_expire' => $this->input->post('pexpire'),
            'prev_insurer' => $this->input->post('pinsur'),
        );

        $this->Insurance_model->car_data($data);
        redirect(base_url().'frontend/insurance/carinsurance');
        //$this->load->view('frontend/carinsurance');
    }

//healthinsurance
    public function healthInsurance(){
            $this->load->view('frontend/healthinsurance');
        }

    public function healthData(){
        
        $this->load->model('frontend/Insurance_model');
        $this->input->post('formSubmit');
        $this->form_validation->set_rules('contact1', '', 'required');
        $this->form_validation->set_rules('contact2', '', 'required');

        if ($this->form_validation->run()){ 

    //    $check1 = $this->input->post('contact1');
    //    $check2 = $this->input->post('contact2');

        $datas = array(
            'adults_num' => $this->input->post('anum'),
            'kid_num' => $this->input->post('knum'),
            'mob' => $this->input->post('mob'),
            'email' => $this->input->post('email'),
            'f_dob' => $this->input->post('fdob'),
            's_dob' => $this->input->post('sdob')
        );
        
        $this->Insurance_model->health_insert($datas);
        $this->load->view('frontend/healthinsurance');
//        redirect(base_url().'frontend/insurance/healthinsurance');

    }
    else{
        $this->load->view('frontend/healthinsurance');
    }
 }




// Bike insurance


public function bikeInsurance(){
    $this->load->model('frontend/Bikemodel');
    
        $data['company'] = $this->Bikemodel->fetchComp();
    
        $this->load->view('frontend/template/header');
        $this->load->view('frontend/template/navbar');
        $this->load->view('frontend/bikeinsurance',$data);
    }
    public function getbikeCompany(){
        $this->load->model('frontend/Bikemodel');

            $postData = $this->input->post();        
            $data = $this->Bikemodel->fetchModels($postData);
        
            echo json_encode($data);
        }
    

    public function getbikeModel(){
    $this->load->model('frontend/Bikemodel');

        $postData = $this->input->post();        
        $data = $this->Bikemodel->fetchVariants($postData);
    
        echo json_encode($data);
    }


public function renewbikeDetails(){
    $this->load->model('frontend/Insurance_model');
    $this->input->post('formSubmit');


    $data = array(
        'registration_no' => $this->input->post('regno'),
        'maufacturer_id' => $this->input->post('comp'),
        'fuel_type' => $this->input->post('type'),
        'registration_year' => $this->input->post('regyr'),
        'prev_policy' => $this->input->post('ptype'),
        'modal_id' => $this->input->post('modal'),
        'variant_id' => $this->input->post('vari'),
        'policy_expire' => $this->input->post('pexpire'),
        'prev_insurer' => $this->input->post('pinsur'),
    );

    $this->Insurance_model->bike_data($data);
    redirect(base_url().'frontend/insurance/bikeinsurance');
    //$this->load->view('frontend/carinsurance');
}

}
?>