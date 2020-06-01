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
    if($this->send($data)){
    $this->Bikemodel->bike_data($data);
    redirect(base_url().'frontend/bikeinsurance');
    }else{

    }
}

// Email Functionality//

public function send($data)
{
    $to =  'eniacoder@gmail.com';  // User email pass here
    $subject = 'A New Mail For Bike Insurance';

    $from = 'fasthealthup@gmail.com';              // Pass here your mail id

    $emailContent = '<!DOCTYPE html><html><head><title>Page Title</title></head><body style="border:2px solid black;"><header style="background-color:rgb( 239, 69, 84 );text-align:center;padding:20px 0;"><h2 style="color:white;">Car Insurance</h2></header><container style="text-align:center;">';
    $emailContent .= "<h3>Registration Number :".$data['registration_no']."<h3>";
    $emailContent .= "<h3>Maufacturer Id :".$data['maufacturer_id']."<h3>";
    $emailContent .= "<h3>Fuel Type :".$data['fuel_type']."<h3>";
    $emailContent .= "<h3>Registration Year :".$data['registration_year']."<h3>";
    $emailContent .= "<h3>Previous Policy :".$data['prev_policy']."<h3>"; 
    $emailContent .= "<h3>Modal Id :".$data['modal_id']."<h3>"; 
    $emailContent .= "<h3>Policy Expire:".$data['policy_expire']."<h3>";
    $emailContent .= "<h3>Previous Insurer:".$data['prev_insurer']."<h3>";
    $emailContent .= '</container><footer style="height:50px;background-color:black"></footer></body></html>';
                


    $config['protocol']    = 'smtp';
    $config['smtp_host']    = 'ssl://smtp.googlemail.com';
    $config['smtp_port']    = '465';
    $config['smtp_timeout'] = '60';
    $config['smtp_user']    = 'fasthealthup@gmail.com';    //Important
    $config['smtp_pass']    = '@navneet1';  //Important
    $config['charset']    = 'utf-8';
    $config['newline']    = "\r\n";
    $config['mailtype'] = 'html'; // or html
    $config['validation'] = TRUE; // bool whether to validate email or not 
    
    $this->email->initialize($config);
    $this->email->set_mailtype("html");
    $this->email->from($from);
    $this->email->to($to);
    $this->email->subject($subject);
    $this->email->message($emailContent);
        if($this->email->send()){
            return True;
        }
        else{
            return False;
        }
    


}

//
}
?>