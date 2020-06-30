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
    $this->form_validation->set_rules('name', 'Name', 'required');
    $this->form_validation->set_rules('mail', 'Email', 'required');
    $this->form_validation->set_rules('tel', 'Phone', 'required|regex_match[/^[0-9]{10}$/]');
    $this->form_validation->set_rules('pack', 'Insurance Pack', 'required');
    $this->form_validation->set_rules('comp', 'Company', 'required');
    $this->form_validation->set_rules('text', 'Requirement', 'required');

    if ($this->form_validation->run()){ 

    $data = array(
        'name' => $this->input->post('name'),
        'email' => $this->input->post('mail'),
        'tel' => $this->input->post('tel'),
        'ins_pack' => $this->input->post('pack'),
        'ins' => $this->input->post('comp'),
        'text' => $this->input->post('text')
        );
    
        if($this->Contactmodel->contact_data($data)){
        $array = array(
            'error'   => false,
            'success' => 'Our Team Will Soon Contact You'
           );
            }else{
                    $array = array(
                    'error'   => true,
           );
    }
          
}
else{
    $array = array(
        'error'   => true,
        'name' => form_error('name'),
        'mail' => form_error('mail'),
        'tel' => form_error('tel'),
        'pack' => form_error('pack'),
        'comp' => form_error('comp'),
        'text' => form_error('text'),
       );
}
        echo json_encode($array);

    }
}

?>  