<?php
    class Refer extends CI_controller{
        public function __construct()
    {
        parent::__construct();
   //     $this->load->model('frontend/Homemodel');
    }

        public function index(){
       //     $getsocials['brandslogo'] = $this->Homemodel->fetchaddinventory_api();
            $this->load->view('frontend/template/header');
            $this->load->view('frontend/template/navbar');
            $this->load->view('frontend/refer');
            $this->load->view('frontend/template/footer');
        }

        public function ref_gen(){
            $this->load->model('frontend/ReferandEarnmodel');
            $this->input->post('formSubmit');
            $data = array(
                'email' => $this->input->post('email'),
                'referid' => "X112222",
            );
            if($this->ReferandEarnmodel->refercode_insert($data)){
                echo "<h6 class='text-success text-center'>Successfully Submited</h6>";
            }
            else{
                echo "<h6 class='text-danger text-center'>Error In Submission</h6>";
            }
            echo $this->ReferandEarnmodel->fetchModeldata()[0];
            
        }

    }

?>  