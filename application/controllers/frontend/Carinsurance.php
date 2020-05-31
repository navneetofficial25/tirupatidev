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
        $this->load->model('frontend/Carmodel');
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

        $this->Carmodel->car_data($data);
        redirect(base_url().'frontend/carinsurance');
    }

}
?>