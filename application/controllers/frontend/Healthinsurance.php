<?php
    class Healthinsurance extends CI_controller{
        public function __construct()
    {
        parent::__construct();

    }


//healthinsurance
    public function index(){
        
        $this->load->view('frontend/template/header');
        $this->load->view('frontend/template/navbar');
            $this->load->view('frontend/healthinsurance');
            $this->load->view('frontend/template/footer');
        }

    public function healthData(){
        
        $this->load->model('frontend/Healthmodel');
        $this->input->post('formSubmit');
        $this->form_validation->set_rules('anum', '', 'required');
        $this->form_validation->set_rules('knum', '', 'required');
        $this->form_validation->set_rules('mob', '', 'required');
        $this->form_validation->set_rules('mail', '', 'required');
        $this->form_validation->set_rules('fdob', '', 'required');
        $this->form_validation->set_rules('contact1', '', 'required');
        $this->form_validation->set_rules('contact2', '', 'required');

        if ($this->form_validation->run()){ 

    //    $check1 = $this->input->post('contact1');
    //    $check2 = $this->input->post('contact2');

        $datas = array(
            'adults_num' => $this->input->post('anum'),
            'kid_num' => $this->input->post('knum'),
            'mob' => $this->input->post('mob'),
            'email' => $this->input->post('mail'),
            'f_dob' => $this->input->post('fdob'),
            's_dob' => $this->input->post('sdob')
        );
        
        $this->Healthmodel->health_insert($datas);
               $this->session->set_flashdata('success','Gallery  Successfully Add');
               $this->load->view('frontend/healthinsurance');
//        redirect(base_url().'frontend/insurance/healthinsurance');

    }
    else{
                $this->session->set_flashdata('error','Please enter all fields');
                $this->load->view('frontend/healthinsurance');
    }
 }
}
?>