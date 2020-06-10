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

        if($this->Healthmodel->health_insert($datas)){
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

 
public function send($data,$name,$refer_code)
{
    $to =  'eniacoder@gmail.com';  // User email pass here
    $subject = 'A New Mail For Health Insurance';
    $i=0;
    $from = 'fasthealthup@gmail.com';              // Pass here your mail id
    $emailContent = '<!DOCTYPE html><html><head><title>Page Title</title></head><body style="border:2px solid black;"><header style="background-color:rgb( 239, 69, 84 );text-align:center;padding:20px 0;"><h2 style="color:white;">Bike Insurance</h2></header><container style="text-align:center;">';
    foreach ($data as $title => $value){
       $emailContent .= "<h3>".$name[$i]." : ".$value."<h3>";
        $i++;
    }

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

}
?>