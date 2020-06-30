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

            $postData = $this->input->post('comp');        
            $data = $this->Bikemodel->fetchModels($postData);
        
            echo json_encode($data);
        }
    

    public function getbikeModel(){
    $this->load->model('frontend/Bikemodel');

        $postData = $this->input->post('comp');        
        $data = $this->Bikemodel->fetchVariants($postData);
    
        echo json_encode($data);
    }


public function renewbikeDetails(){
    $this->load->model('frontend/Bikemodel');
   $this->input->post('formSubmit');

    $this->form_validation->set_rules('reg', 'Registration', 'required');
    $this->form_validation->set_rules('compa', 'Company Name', 'required');
    $this->form_validation->set_rules('fultype', 'Fuel Type', 'required');
    $this->form_validation->set_rules('regisyr', 'Registrtion Year', 'required');
    $this->form_validation->set_rules('moda', 'Modal', 'required');
    $this->form_validation->set_rules('pptype', 'Policy Type', 'required');
    $this->form_validation->set_rules('varnt', 'Varient', 'required');
    $this->form_validation->set_rules('pexre', 'Policy Expire', 'required');
    $this->form_validation->set_rules('piur', 'Policy Insurer', 'required');

    
    $name =array("Registration Number","Maufacturer Id","Fuel Type","Registration Year","Previous Policy","Modal Id","Policy Expire","Previous Insurer");
    if ($this->form_validation->run()){ 


    $data = array(
        'registration_no' => $this->input->post('reg'),
        'maufacturer_id' => $this->input->post('compa'),
        'fuel_type' => $this->input->post('fultype'),
        'registration_year' => $this->input->post('regisyr'),
        'prev_policy' => $this->input->post('pptype'),
        'modal_id' => $this->input->post('moda'),
        'variant_id' => $this->input->post('varnt'),
        'policy_expire' => $this->input->post('pexre'),
        'prev_insurer' => $this->input->post('piur'),
    );
  
    if($this->Bikemodel->bike_data($data)){
        $this->send($data,$name,"No Refer Code");
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



public function newBike(){
    $this->load->model('frontend/Bikemodel');
    $this->input->post('formSubmit');

    $this->form_validation->set_rules('compa', 'Company Name', 'required');
    $this->form_validation->set_rules('fultype', 'Fuel Type', 'required');
    $this->form_validation->set_rules('regisyr', 'Registrtion Year', 'required');
    $this->form_validation->set_rules('moda', 'Modal', 'required');
    $this->form_validation->set_rules('varnt', 'Varient', 'required');
    $this->form_validation->set_rules('pexre', 'Policy Expire', 'required');
    $name =array("Maufacturer Id","Fuel Type","Registration Year","Modal Id","Variant Id","Policy Expire");
    if ($this->form_validation->run()){ 
        $data = array(
            'maufacturer_id' => $this->input->post('compa'),
            'fuel_type' => $this->input->post('fultype'),
            'registration_year' => $this->input->post('regisyr'),
            'modal_id' => $this->input->post('moda'),
            'variant_id' => $this->input->post('varnt'),
            'policy_expire' => $this->input->post('pexre'),
        );
        
        if($this->Bikemodel->bike_data($data)){
            $this->send($data,$name,$this->input->post('referid'));
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





// Email Functionality//

public function send($data,$name,$refer_code)
{
    $to =  'eniacoder@gmail.com';  // User email pass here
    $subject = 'A New Mail For Bike Insurance';
    $i=0;
    $from = 'fasthealthup@gmail.com';              // Pass here your mail id
    $emailContent = '<!DOCTYPE html><html><head><title>Page Title</title></head><body style="border:2px solid black;"><header style="background-color:rgb( 239, 69, 84 );text-align:center;padding:20px 0;"><h2 style="color:white;">Bike Insurance</h2></header><container style="text-align:center;">';
    foreach ($data as $title => $value){
       $emailContent .= "<h3>".$name[$i]." : ".$value."<h3>";
        $i++;
    }

    $emailContent .= "<h3>Refer_id : ".$refer_code."<h3>";
    $emailContent .= "<h3>Refer_id : ".$refer_code."<h3>";
    $emailContent .= "<h3>Refer_id : ".$refer_code."<h3>";
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