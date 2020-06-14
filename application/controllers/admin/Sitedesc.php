<?php
    class Sitedesc extends CI_controller{
        public function __construct()
        {
            parent::__construct();
            if(! $this->session->userdata('vendorAuth')){
            redirect('login');}
            $this->load->model('admin/Sitedesc_model');
        }

        public function index()
        {
          //  $aboutusData['Sitetitle'] ="Aboutus -";
             $aboutusData['aboutus'] = $this->Sitedesc_model->fetchaboutus();
             $this->load->view('admin/template/header');
             $this->load->view('admin/template/sidebar');
             $this->load->view('admin/template/topbar');
            $this->load->view('admin/sitedesc',$aboutusData);
            $this->load->view('admin/template/footer');
        }
    
        public function slidereditsve(){
    
             if($this->input->post('formSubmit')){
                $title=  $this->input->post('name');
          $short_desc=$this->input->post('cdesc');
    
    if (!empty($_FILES['images']['name'])){
    
            $File_name='image-'.strtotime(date('YmdHis'));
    
            $config['upload_path'] = APPPATH . '../upload/sitelogo';
            $config['file_name'] = $File_name;
            $config['overwrite'] = TRUE;
            $config["allowed_types"] = 'jpg|jpeg|png';
            $config["max_size"] = 1024;
    
            $this->load->library('upload', $config);
    
            if(!$this->upload->do_upload('images')) {
    
                $this->data['error'] = $this->upload->display_errors();
              $this->session->set_flashdata('error',$this->upload->display_errors());
             $this->session->set_flashdata('error','Something went wrong when saving the file, please try again.');
                 redirect('admin/sitedesc');
            } else {
             $dataimage_return = $this->upload->data();
    
             $insert_data= array('logo' =>$dataimage_return['file_name']);
           $file_id = $this->Sitedesc_model->updte_aboutus_img($insert_data);
              }
              }
    
             $insert_data= array('heading' =>$title,'description' =>$short_desc);
    
                $file_id = $this->Sitedesc_model->updte_aboutus($insert_data);
                if($file_id)
                {
                   $this->session->set_flashdata('success','About US Successfully Updte');
                    redirect('admin/sitedesc');
                }else{
                    $this->session->set_flashdata('error','Something went wrong when saving the file, please try again.');
                 redirect('admin/sitedesc');
                }
    
    
            }else{
                   $this->session->set_flashdata('error','Something went wrong when saving the file, please try again.');
                 redirect('admin/sitedesc');
                   }
    
        }







    }

?>
