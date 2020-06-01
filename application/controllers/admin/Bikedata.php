<?php
    class Bikedata extends CI_controller{

        public function __construct()
        {
            parent::__construct();
            $this->load->model('admin/BikedataModel');
        }
              
        public function index(){
            $this->load->view('admin/template/header');
            $this->load->view('admin/template/sidebar');
            $this->load->view('admin/template/topbar');
            $this->load->view('admin/bikedata');
        }
        
        public function addinventory_api(){

            $getPurchaseData = $this->BikedataModel->fetchinventory_api();
    
            //print_r($getPurchaseData);
    
            foreach ($getPurchaseData as $key => $value) { 
//                $short_desc_vl=$lst_desc.'<a class="edit" href="'.base_url().'admin/brands/galleryedit/'.$value->id.'" data-toggle="tooltip" data-original-title="Edit">Read More</a>';
    
                $arrya_json[] = array('<input type="checkbox" class="childSupplierCheck" data-id="'.$value->id.'">',$value->registration_no,$value->brand_name,$value->model_name,$value->variant_name,$value->fuel_type,$value->registration_year,$value->policy_expire,$value->prev_policy,$value->prev_insurer,'<a class="edit" href="'.base_url().'admin/brands/galleryedit/'.$value->id.'" data-toggle="tooltip" data-original-title="Edit"><i class="fa fa-edit"></i></a>&nbsp;&nbsp;
               <a class="delete_sliders" data-id="'.$value->id.'"  style="color: red;cursor: pointer;" data-toggle="tooltip" data-original-title="Delete"><i class="fa fa-trash" aria-hidden="true"></i></a>' );
                }
                 echo json_encode(array('data'=>$arrya_json));
            }
            
            public function deletebikedetail(){ 
    
                    if($this->input->post('deletesliderId'))
                {
                  $this->form_validation->set_rules('deletesliderId','text','required');
                  if($this->form_validation->run() == true)
                  {
                    $getDeleteStatus = $this->BikedataModel->deletebikedata($this->input->post('deletesliderId'));
                    if($getDeleteStatus['message'] == 'yes')
                    {
                      $this->session->set_flashdata('success','Gallery  deleted successfully');
                      redirect(base_url()."admin/bikedata");
                    }
                    else
                    {
                      $this->session->set_flashdata('error','Something went wrong. Please try again');
                    redirect(base_url()."admin/bikedata");
                      
                    }
                  }
                  else
                  {
                    $this->session->set_flashdata('error','Something went wrong. Please try again');
                    redirect(base_url()."admin/bikedata");
    
                  }
                }
              }

  
    }

?>