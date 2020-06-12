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
                    $_SESSION["email"]=$value["email"];
                    $_SESSION["name"]=$value["name"];
                    $_SESSION["ref_count"]=$value["ref_count"];
                    $_SESSION["earn"]=$value["earn"];
                    $_SESSION["referid"]=$value["referid"];
                    $login_success=1;
                    break;
                }
            }
            if($login_success==1){
                echo "<script>window.location.href='/insurance/';</script>";
            }
            else{
                echo "<script>alert('wrong username password');window.location.href='/insurance/'</script>";
            }
            

             
        }

        public function signup(){
            $this->load->model('frontend/ReferandEarnmodel');
            $this->input->post('formSubmit');
            if($this->input->post('password')!=$this->input->post('cpassword')){
                echo "<script>alert('Password is not matching');window.location.href='/insurance'</script>";
                return 0;
            }
            $data = array(
                'email' => $this->input->post('email'),
                'name' => $this->input->post('name'),
                'password' => $this->input->post('password'),
                'referid' => uniqid(),
                'earn' => 0,
                'ref_count' => 0
            );
            if($this->ReferandEarnmodel->signup($data)){
                echo "<script>window.location.href='../login';</script>";
            }
            else{
                echo "<script>alert('wrong username password');window.location.href=''</script>";
            }
        }


    }

?>  