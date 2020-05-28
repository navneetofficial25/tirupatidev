<?php
    class Carinsurance extends CI_controller{
        public function __construct()
    {
        parent::__construct();
    }

 /*       public function index(){
            $getsocials['brandnames'] = $this->Carmodel->fetchaddinventory_api();
            $getsocials['brandmodels'] = $this->Carmodel->fetchmodelinventory_api();
            $getsocials['brandsvariant'] = $this->Carmodel->fetchvariantinventory_api();
            $this->load->view('frontend/template/header');
            $this->load->view('frontend/template/navbar');
            $this->load->view('frontend/carinsurance',$getsocials);
         //   print_r($getsocials);
        }*/

        public function index(){
        $this->load->model('frontend/Carmodel');
        
            // get cities
            $data['company'] = $this->Carmodel->fetchComp();
        
            $this->load->view('frontend/template/header');
            $this->load->view('frontend/template/navbar');
            // load view
            $this->load->view('frontend/carinsurance',$data);
        }
        public function getCompany(){
        $this->load->model('frontend/Carmodel');
        // POST data

            $postData = $this->input->post();        
            // get data
            $data = $this->Carmodel->fetchModels($postData);
        
            echo json_encode($data);
        }
        public function getModel(){
        $this->load->model('frontend/Carmodel');

            // POST data
            $postData = $this->input->post();        
            // get data
            $data = $this->Carmodel->fetchVariants($postData);
        
            echo json_encode($data);
        }

    public function renewDetails(){
        $this->load->model('frontend/Cardata_model');
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

        $this->Cardata_model->data_insert($data);
        redirect(base_url().'frontend/carinsurance');
        //$this->load->view('frontend/carinsurance');
    }
    
    }
?>