<?php
    class Sitedesc extends CI_controller{
        public function __construct()
        {
            parent::__construct();
            $this->load->model('admin/Sitedesc_model');
        }

        public function index(){
            $getsocials['socials_data'] = $this->Sitedesc_model->fetchstoreSocialRecord();
                    $this->load->view('admin/template/header');
                    $this->load->view('admin/template/sidebar');
                    $this->load->view('admin/template/topbar');
                $this->load->view('admin/sitedesc',$getsocials);
                }

        public function galleryedit(){


                    if($this->input->post('formSubmit')){
                       $name=  $this->input->post('name');
                       $short_desc= $this->input->post('short_desc');
                 //$short_desc=$this->input->post('cdesc');
           
           if (!empty($_FILES['images']['name'])){
           
                   $File_name='media-'.strtotime(date('YmdHis'));
           
                   $config['upload_path'] = APPPATH . '../upload/sitelogo';
                   $config['file_name'] = $File_name;
                   $config['overwrite'] = TRUE;
                   $config["allowed_types"] = 'jpg|jpeg|png';
                   $config["max_size"] = 1024;
           
                   $this->load->library('upload', $config);
           
                   if(!$this->upload->do_upload('images')) {
           
                       $this->data['error'] = $this->upload->display_errors();
                     $this->session->set_flashdata('error',$this->upload->display_errors());
                   $this->load->view('admin/sitedesc/'.$this->uri->segment(4));
                   } else {
                    $dataimage_return = $this->upload->data();
                    $imageurl=base_url().'/upload/sitelogo/'.$dataimage_return['file_name'];
           
                    $insert_data= array('id'=>$this->uri->segment(4),'image' =>$imageurl);
                  $file_id = $this->Sitedesc_model->updte_course_img($insert_data);
                     }
                     }
                    $insert_data= array('id'=>$this->uri->segment(4),'name' =>$name,'short_desc'=>$short_desc);
           
                       $file_id = $this->Sitedesc_model->updte_course($insert_data);
                       if($file_id)
                       {
                          $this->session->set_flashdata('success','Gallery Successfully Updte');
                           
                        redirect($this->uri->uri_string());
                       }else{
                           $this->session->set_flashdata('error','Something went wrong when saving the file, please try again.');
                        
                        redirect($this->uri->uri_string());
                       }
           
           
                   }else{
           
                       if($this->uri->segment(4)){
           $getcourseData['coursedt'] = $this->Sitedesc_model->fetchCourses($this->uri->segment(4));
               $this->load->view('admin/sitedesc',$getcourseData);
           
                   }else{
                       $this->session->set_flashdata('error','Something went wrong. Please try again');
                     redirect(base_url()."admin/sitedesc");
                   }
           
           
                          }
           
               }
    

    }

?>
