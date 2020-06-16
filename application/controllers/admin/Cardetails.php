<?php
    class Cardetails extends CI_controller{

        public function __construct()
        {
          
            parent::__construct();
            if(! $this->session->userdata('vendorAuth')){
            redirect('login');}
        }

        public function index(){
            $this->load->view('admin/template/header');
            $this->load->view('admin/template/sidebar');
            $this->load->view('admin/template/topbar');
            $this->load->view('admin/carbrand');
            $this->load->view('admin/template/footer');
        }

        public function addinventory_api(){
            $this->load->model('admin/Carmodel');

            $getPurchaseData = $this->Carmodel->fetchaddinventory_api();
    
            //print_r($getPurchaseData);
    
            foreach ($getPurchaseData as $key => $value) { 
//                $short_desc_vl=$lst_desc.'<a class="edit" href="'.base_url().'admin/brands/galleryedit/'.$value->id.'" data-toggle="tooltip" data-original-title="Edit">Read More</a>';
    
                $arrya_json[] = array($value->brand_name,'<a class="edit" href="'.base_url().'admin/brands/galleryedit/'.$value->id.'" data-toggle="tooltip" data-original-title="Edit"><i class="fa fa-edit"></i></a>&nbsp;&nbsp;
               <a class="delete_sliders" data-id="'.$value->id.'"  style="color: red;cursor: pointer;" data-toggle="tooltip" data-original-title="Delete"><i class="fa fa-trash" aria-hidden="true"></i></a>' );
                }
                 echo json_encode(array('data'=>$arrya_json));
    
    
            }



            public function addcompany(){
            $this->load->model('admin/Carmodel');

                
      //  $this->input->post('formSubmit');
        $brand_name = $this->input->post('bname');
        $gradedetails=array('brand_name'=>$brand_name);
        $this->Carmodel->insert_brand($gradedetails);

            }

            public function deletegallery(){
            $this->load->model('admin/Carmodel');


                if($this->input->post('deletesliderId'))
            {
              $this->form_validation->set_rules('deletesliderId','text','required');
              if($this->form_validation->run() == true)
              {
                $getDeleteStatus = $this->Carmodel->deleteData($this->input->post('deletesliderId'));
                if($getDeleteStatus['message'] == 'yes')
                {
                  $this->session->set_flashdata('success','Gallery  deleted successfully');
                  redirect(base_url()."admin/cardetails");
                }
                else
                {
                  $this->session->set_flashdata('success','Gallery  deleted successfully');
                redirect(base_url()."admin/cardetails");
                  
                }
              }
              else
              {
                $this->session->set_flashdata('error','Something went wrong. Please try again');
                redirect(base_url()."admin/cardetails");

              }
            }
          }

            public function model(){
            $this->load->model('admin/Carmodel');

            $data['company'] = $this->Carmodel->fetchComp();

              $this->load->view('admin/template/header');
              $this->load->view('admin/template/sidebar');
              $this->load->view('admin/template/topbar');
              $this->load->view('admin/carmodel',$data);
              $this->load->view('admin/template/footer');
          }

          public function addmodel(){
            $this->load->model('admin/Carmodel');

                
      //  $this->input->post('formSubmit');
        $model_name = $this->input->post('mname');
        $brand_id = $this->input->post('companies');
        $gradedetails=array('model_name'=>$model_name,'brand_id'=>$brand_id);
        $this->Carmodel->insert_model($gradedetails);
        

            }



          public function modeladdinventory_api(){
            $this->load->model('admin/Carmodel');

            $getPurchaseData = $this->Carmodel->fetchmodelinventory_api();
    
            //print_r($getPurchaseData);
    
            foreach ($getPurchaseData as $key => $value) { 
//                $short_desc_vl=$lst_desc.'<a class="edit" href="'.base_url().'admin/brands/galleryedit/'.$value->id.'" data-toggle="tooltip" data-original-title="Edit">Read More</a>';
    
                $arrya_json[] = array($value->model_name,$value->brand_name,'<a class="edit" href="'.base_url().'admin/brands/galleryedit/'.$value->id.'" data-toggle="tooltip" data-original-title="Edit"><i class="fa fa-edit"></i></a>&nbsp;&nbsp;
               <a class="delete_sliders" data-id="'.$value->id.'"  style="color: red;cursor: pointer;" data-toggle="tooltip" data-original-title="Delete"><i class="fa fa-trash" aria-hidden="true"></i></a>' );
                }
                 echo json_encode(array('data'=>$arrya_json));
            }

            
            public function deletemodel(){
                $this->load->model('admin/Carmodel');
    
    
                    if($this->input->post('deletesliderId'))
                {
                  $this->form_validation->set_rules('deletesliderId','text','required');
                  if($this->form_validation->run() == true)
                  {
                    $getDeleteStatus = $this->Carmodel->deletemod($this->input->post('deletesliderId'));
                    if($getDeleteStatus['message'] == 'yes')
                    {
                      $this->session->set_flashdata('success','Gallery  deleted successfully');
                      redirect(base_url()."admin/cardetails/model");
                    }
                    else
                    {
                      $this->session->set_flashdata('error','Something went wrong. Please try again');
                    redirect(base_url()."admin/cardetails/model");
                      
                    }
                  }
                  else
                  {
                    $this->session->set_flashdata('error','Something went wrong. Please try again');
                    redirect(base_url()."admin/cardetails/model");
    
                  }
                }
              }

            public function variant(){
            $this->load->model('admin/Carmodel');
            $data['company'] = $this->Carmodel->fetchComp();

              $this->load->view('admin/template/header');
              $this->load->view('admin/template/sidebar');
              $this->load->view('admin/template/topbar');
              $this->load->view('admin/carvariant',$data);
              $this->load->view('admin/template/footer');
          }
          
          public function addvariant(){
            $this->load->model('admin/Carmodel');

                
      //  $this->input->post('formSubmit');
        $variant_name = $this->input->post('vname');
        $brand_id = $this->input->post('comp');
        $model_id = $this->input->post('modals');
        $gradedetails=array('variant_name'=>$variant_name,'model_id'=>$model_id,'brand_id'=>$brand_id);
        $this->Carmodel->insert_variant($gradedetails);
        redirect(base_url()."admin/cardetails/variant");

            }

          public function variantaddinventory_api(){
            $this->load->model('admin/Carmodel');
            $getPurchaseData = $this->Carmodel->fetchvariantinventory_api();
    
            //print_r($getPurchaseData);
    
            foreach ($getPurchaseData as $key => $value) { 
//                $short_desc_vl=$lst_desc.'<a class="edit" href="'.base_url().'admin/brands/galleryedit/'.$value->id.'" data-toggle="tooltip" data-original-title="Edit">Read More</a>';
    
                $arrya_json[] = array($value->variant_name,$value->model_name,$value->brand_name,'<a class="edit" href="'.base_url().'admin/brands/galleryedit/'.$value->id.'" data-toggle="tooltip" data-original-title="Edit"><i class="fa fa-edit"></i></a>&nbsp;&nbsp;
               <a class="delete_sliders" data-id="'.$value->id.'"  style="color: red;cursor: pointer;" data-toggle="tooltip" data-original-title="Delete"><i class="fa fa-trash" aria-hidden="true"></i></a>' );
                }
                 echo json_encode(array('data'=>$arrya_json));
            }
            public function deletevariant(){
                $this->load->model('admin/Carmodel');
    
    
                    if($this->input->post('deletesliderId'))
                {
                  $this->form_validation->set_rules('deletesliderId','text','required');
                  if($this->form_validation->run() == true)
                  {
                    $getDeleteStatus = $this->Carmodel->deletevar($this->input->post('deletesliderId'));
                    if($getDeleteStatus['message'] == 'yes')
                    {
                      $this->session->set_flashdata('success','Gallery  deleted successfully');
                      redirect(base_url()."admin/cardetails/variant");
                    }
                    else
                    {
                      $this->session->set_flashdata('error','Something went wrong. Please try again');
                    redirect(base_url()."admin/cardetails/variant");
                      
                    }
                  }
                  else
                  {
                    $this->session->set_flashdata('error','Something went wrong. Please try again');
                    redirect(base_url()."admin/cardetails/variant");
    
                  }
                }
              }
              
        public function getCompany(){
          $this->load->model('admin/Carmodel');
  
              $postData = $this->input->post();        
              $data = $this->Carmodel->fetchModels($postData);
          
              echo json_encode($data);
          }

    }

?>