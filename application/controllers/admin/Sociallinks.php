<?php
    class Sociallinks extends CI_controller{
        public function __construct()
    {
        parent::__construct();
        if(! $this->session->userdata('vendorAuth')){
        redirect('login');}
        $this->load->model('admin/Socialmodel');
    }

        public function index(){
    $getsocials['socials_data'] = $this->Socialmodel->fetchstoreSocialRecord();
            $this->load->view('admin/template/header');
            $this->load->view('admin/template/sidebar');
            $this->load->view('admin/template/topbar');
        $this->load->view('admin/sociallinks',$getsocials);
            $this->load->view('admin/template/footer');
        }
        public function storesocial_frm(){
            if( $this->input->post()){
            $postData_policies = $this->input->post();
             $twitter_url=$postData_policies['twitter_url'];
             $facebook_url=$postData_policies['facebook_url'];
            // $google_url=$postData_policies['google_url'];
             $youtube_url=$postData_policies['youtube_url'];
             $instagram_url=$postData_policies['instagram_url'];
              $pinterest_url=$postData_policies['pinterest_url'];
               $linkedin_url=$postData_policies['linkedin_url'];
    
            //from below array code 'google_url'=>$google_url,
    
               $insert_data= array('twitter_url' =>$twitter_url,'facebook_url' =>$facebook_url,'youtube_url'=>$youtube_url,'instagram_url'=>$instagram_url,'pinterest_url'=>$pinterest_url,'linkedin_url'=>$linkedin_url,'date_time'=>strtotime(date('YmdHis')));
                    $file_id = $this->Socialmodel->save_sociallink($insert_data);
                    if($file_id)
                    {$this->session->set_flashdata('success','Social Successfully Update');
    
                     redirect("admin/sociallinks", 'refresh');
                    }else{
                        $this->session->set_flashdata('error','Something went wrong when saving the Social, please try again.');
                    }
                }else{
                    $this->session->set_flashdata('error','Something went wrong when saving the Social, please try again.');
                    redirect("admin/sociallinks", 'refresh');
    
                }
          }
    

    }

?>
