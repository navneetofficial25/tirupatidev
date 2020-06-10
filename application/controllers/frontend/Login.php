<?php
    class Login extends CI_controller{
        public function __construct()
    {
        parent::__construct();
   //     $this->load->model('frontend/Homemodel');
    }

        public function index(){
       //     $getsocials['brandslogo'] = $this->Homemodel->fetchaddinventory_api();
            $this->load->view('frontend/template/header');
            $this->load->view('frontend/template/navbar');
            $this->load->view('frontend/login');
            $this->load->view('frontend/template/footer');
        }

        public function login(){
            $this->load->model('frontend/ReferandEarnmodel');
            $model_data=$this->ReferandEarnmodel->fetchModeldata();
            $login_success=0;
            $user_data = array(
                'email' => $this->input->post('email'),
                'password' => $this->input->post('password'),
            );
            foreach ($model_data as $key => $value) {
                if($value['email']==$user_data['email'] && $value['Password']==$user_data['password'])
                {
                    session_start();
                    $_SESSION["referid"]=$value["referid"];
                    $login_success=1;
                    break;
                }
            }
            if($login_success==1){
                echo "<script>window.location.href='../refer';</script>";
            }
            else{
                echo "<script>alert('wrong username password');window.location.href=''</script>";
            }
            

             
        }

        public function signup(){
            $this->load->model('frontend/ReferandEarnmodel');
            $this->input->post('formSubmit');
            $data = array(
                'email' => $this->input->post('email'),
                'password' => $this->input->post('password'),
                'referid' => "X112222",
            );
            if($this->ReferandEarnmodel->signup($data)){
                echo "<h6 class='text-success text-center'>Successfully Submited</h6>";
            }
            else{
                echo "<h6 class='text-danger text-center'>Error In Submission</h6>";
            }
        }


    }

?>  