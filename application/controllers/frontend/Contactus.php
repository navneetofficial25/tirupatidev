<?php
    class Contactus extends CI_controller{
        public function __construct()
    {
        parent::__construct();
    }

        public function index(){
            $this->load->model('frontend/Contactmodel');
                $data['company'] = $this->Contactmodel->fetchins();
                $this->load->view('frontend/template/header');
            $this->load->view('frontend/template/navbar');
            $this->load->view('frontend/contactus',$data);
            $this->load->view('frontend/template/footer');
}


public function contactDetails(){
    $this->load->model('frontend/Contactmodel');
    $this->input->post('formSubmit');


    $data = array(
        'name' => $this->input->post('name'),
        'email' => $this->input->post('email'),
        'tel' => $this->input->post('tel'),
        'ins_pack' => $this->input->post('pack'),
        'ins' => $this->input->post('comp'),
        'text' => $this->input->post('text')
        );

    $this->Contactmodel->contact_data($data);
    redirect(base_url().'frontend/contactus');
    //$this->load->view('frontend/carinsurance');
}


    }

?>  