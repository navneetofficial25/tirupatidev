<?php
    class Brands extends CI_controller{

        public function __construct()
        {
            parent::__construct();
            if(! $this->session->userdata('vendorAuth')){
            redirect('login');}
            $this->load->model('admin/Brandsmodel');
        }

        public function index(){
            $this->load->view('admin/template/header');
            $this->load->view('admin/template/sidebar');
            $this->load->view('admin/template/topbar');
            $this->load->view('admin/brands');
            $this->load->view('admin/template/footer');
        }

        public function addinventory_api(){
            $getPurchaseData = $this->Brandsmodel->fetchaddinventory_api();
    
            //print_r($getPurchaseData);
    
            foreach ($getPurchaseData as $key => $value) {
    
                $image=$value->image;
                 $json_image= json_decode($image);
                 $image_url= $image;
    
    
                 $short_desc=$value->short_desc;
                 //$lst_desc=$this->word_limiter($short_desc, 4)."...";
                 $lst_desc=$short_desc;
    
                $short_desc_vl=$lst_desc.'<a class="edit" href="'.base_url().'admin/brands/galleryedit/'.$value->id.'" data-toggle="tooltip" data-original-title="Edit">Read More</a>';
    
                $arrya_json[] = array('<img class="zoom" src="'.$image_url.'">',$value->title,$value->short_desc,'<a class="edit" href="'.base_url().'admin/brands/galleryedit/'.$value->id.'" data-toggle="tooltip" data-original-title="Edit"><i class="fa fa-edit"></i></a>&nbsp;&nbsp;
               <a class="delete_sliders" data-id="'.$value->id.'"  style="color: red;cursor: pointer;" data-toggle="tooltip" data-original-title="Delete"><i class="fa fa-trash" aria-hidden="true"></i></a>' );
                }
                 echo json_encode(array('data'=>$arrya_json));
    
    
            }
            public function galleryedit(){


                if($this->input->post('formSubmit')){
                   $title=  $this->input->post('ctitle');
                   $short_desc= $this->input->post('short_desc');
             //$short_desc=$this->input->post('cdesc');
       
       if (!empty($_FILES['images']['name'])){
       
               $File_name='media-'.strtotime(date('YmdHis'));
       
               $config['upload_path'] = APPPATH . '../upload/brands';
               $config['file_name'] = $File_name;
               $config['overwrite'] = TRUE;
               $config["allowed_types"] = 'jpg|jpeg|png';
               $config["max_size"] = 1024;
       
               $this->load->library('upload', $config);
       
               if(!$this->upload->do_upload('images')) {
       
                   $this->data['error'] = $this->upload->display_errors();
                 $this->session->set_flashdata('error',$this->upload->display_errors());
               $this->load->view('admin/brandsedit/'.$this->uri->segment(4));
               } else {
                $dataimage_return = $this->upload->data();
                $imageurl=base_url().'/upload/brands/'.$dataimage_return['file_name'];
       
                $insert_data= array('id'=>$this->uri->segment(4),'image' =>$imageurl,'update_date'=>strtotime(date('YmdHis')));
              $file_id = $this->Brandsmodel->updte_course_img($insert_data);
                 }
                 }
                $insert_data= array('id'=>$this->uri->segment(4),'title' =>$title,'short_desc'=>$short_desc,'update_date'=>strtotime(date('YmdHis')));
       
                   $file_id = $this->Brandsmodel->updte_course($insert_data);
                   if($file_id)
                   {
                      $this->session->set_flashdata('success','Gallery Successfully Updte');
                       redirect('admin/brands');
                   }else{
                       $this->session->set_flashdata('error','Something went wrong when saving the file, please try again.');
                    redirect('admin/brands');
                   }
       
       
               }else{
       
                   if($this->uri->segment(4)){
       $getcourseData['coursedt'] = $this->Brandsmodel->fetchCourses($this->uri->segment(4));
           $this->load->view('admin/brandsedit',$getcourseData);
       
               }else{
                   $this->session->set_flashdata('error','Something went wrong. Please try again');
                 redirect(base_url()."admin/brands");
               }
       
       
                      }
       
           }

 public function galleryadd()
    {
         if($this->input->post('formSubmit')){

if (empty($_FILES['images']['name']))
{   $this->form_validation->set_rules('ctitle', 'Images', 'required');


    $this->form_validation->set_rules('images', 'Images', 'required');
    $this->load->view('admin/brandsadd');
        }else{

      $title=  $this->input->post('ctitle');
      //$short_desc=$this->input->post('cdesc');

      $short_desc = $this->input->post('short_desc');

        $File_name='media-'.strtotime(date('YmdHis'));

        $config['upload_path'] = APPPATH . '../upload/brands';
        $config['file_name'] = $File_name;
        $config['overwrite'] = TRUE;
        $config["allowed_types"] = 'jpg|jpeg|png';
        $config["max_size"] = 1024;
        /**
 * $config["max_width"] = 400;
 *         $config["max_height"] = 400;
 *         $config['$min_width'] = 200;
 *         $config['min_height'] = 100;
 */
        $this->load->library('upload', $config);

        if(!$this->upload->do_upload('images')) {

            $this->data['error'] = $this->upload->display_errors();
          $this->session->set_flashdata('error',$this->upload->display_errors());
        $this->load->view('admin/brandsadd');
        } else {
         $dataimage_return = $this->upload->data();
         $imageurl=base_url().'upload/brands/'.$dataimage_return['file_name'];

         $insert_data= array('image' =>$imageurl,'title' =>$title,'short_desc'=>$short_desc,'update_date'=>strtotime(date('YmdHis')));

            $file_id = $this->Brandsmodel->insert_course($insert_data);
            if($file_id)
            {
               $this->session->set_flashdata('success','Gallery  Successfully Add');
                redirect('admin/brands');
            }else{
                $this->session->set_flashdata('error','Something went wrong when saving the file, please try again.');
             redirect('admin/brands/galleryadd');
            }
                 }
        }
        }else{

        $this->load->view('admin/brandsadd'); }

    }
   public function deletegallery(){

          if($this->input->post('deletesliderId'))
      {
        $this->form_validation->set_rules('deletesliderId','text','required');
        if($this->form_validation->run() == true)
        {
          $getDeleteStatus = $this->Brandsmodel->deleteData($this->input->post('deletesliderId'));
          if($getDeleteStatus['message'] == 'yes')
          {
            $this->session->set_flashdata('success','Gallery  deleted successfully');
            redirect(base_url()."admin/brands");
          }
          else
          {
            $this->session->set_flashdata('success','Deleted successfully');
            redirect(base_url()."admin/brands");
          }
        }
        else
        {
          $this->session->set_flashdata('error','Something went wrong. Please try again');
          redirect(base_url()."admin/brands");
        }
      }
    }
    }

?>