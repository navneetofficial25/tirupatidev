<?php
    class Bikeinsurance extends CI_controller{
        public function __construct()
    {
        parent::__construct();

    }

public function index(){
    $this->load->model('frontend/Bikemodel');
    
        $data['company'] = $this->Bikemodel->fetchComp();
    
        $this->load->view('frontend/template/header');
        $this->load->view('frontend/template/navbar');
        $this->load->view('frontend/bikeinsurance',$data);
        $this->load->view('frontend/template/footer');
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
    $this->load->model('frontend/Bikemodel');
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

    $this->Bikemodel->bike_data($data);
    redirect(base_url().'frontend/bikeinsurance');
    //$this->load->view('frontend/carinsurance');
}

}
?>