<?php
    class Cardetails extends CI_controller{

        public function __construct()
        {
            parent::__construct();
            $this->load->model('admin/Carmodel');
        }

        public function index(){
            $this->load->view('admin/template/header');
            $this->load->view('admin/template/sidebar');
            $this->load->view('admin/template/topbar');
            $this->load->view('admin/carbrand');
        }

        public function addinventory_api(){
            $getPurchaseData = $this->Carmodel->fetchaddinventory_api();
    
            //print_r($getPurchaseData);
    
            foreach ($getPurchaseData as $key => $value) { 
//                $short_desc_vl=$lst_desc.'<a class="edit" href="'.base_url().'admin/brands/galleryedit/'.$value->id.'" data-toggle="tooltip" data-original-title="Edit">Read More</a>';
    
                $arrya_json[] = array('<input type="checkbox" class="childSupplierCheck" data-id="'.$value->id.'">',$value->brand_name,'<a class="edit" href="'.base_url().'admin/brands/galleryedit/'.$value->id.'" data-toggle="tooltip" data-original-title="Edit"><i class="fa fa-edit"></i></a>&nbsp;&nbsp;
               <a class="delete_sliders" data-id="'.$value->id.'"  style="color: red;cursor: pointer;" data-toggle="tooltip" data-original-title="Delete"><i class="fa fa-trash" aria-hidden="true"></i></a>' );
                }
                 echo json_encode(array('data'=>$arrya_json));
    
    
            }



            public function addcompany(){
                
      //  $this->input->post('formSubmit');
        $brand_name = $this->input->post('bname');
        $gradedetails=array('brand_name'=>$brand_name);
        $this->Carmodel->insert_brand($gradedetails);

            }






            public function model(){
              $this->load->view('admin/template/header');
              $this->load->view('admin/template/sidebar');
              $this->load->view('admin/template/topbar');
              $this->load->view('admin/carmodel');
          }
          public function modeladdinventory_api(){
            $getPurchaseData = $this->Carmodel->fetchmodelinventory_api();
    
            //print_r($getPurchaseData);
    
            foreach ($getPurchaseData as $key => $value) { 
//                $short_desc_vl=$lst_desc.'<a class="edit" href="'.base_url().'admin/brands/galleryedit/'.$value->id.'" data-toggle="tooltip" data-original-title="Edit">Read More</a>';
    
                $arrya_json[] = array('<input type="checkbox" class="childSupplierCheck" data-id="'.$value->id.'">',$value->model_name,$value->brand_name,'<a class="edit" href="'.base_url().'admin/brands/galleryedit/'.$value->id.'" data-toggle="tooltip" data-original-title="Edit"><i class="fa fa-edit"></i></a>&nbsp;&nbsp;
               <a class="delete_sliders" data-id="'.$value->id.'"  style="color: red;cursor: pointer;" data-toggle="tooltip" data-original-title="Delete"><i class="fa fa-trash" aria-hidden="true"></i></a>' );
                }
                 echo json_encode(array('data'=>$arrya_json));
            }

            public function variant(){
              $this->load->view('admin/template/header');
              $this->load->view('admin/template/sidebar');
              $this->load->view('admin/template/topbar');
              $this->load->view('admin/carvariant');
          }
          public function variantaddinventory_api(){
            $getPurchaseData = $this->Carmodel->fetchvariantinventory_api();
    
            //print_r($getPurchaseData);
    
            foreach ($getPurchaseData as $key => $value) { 
//                $short_desc_vl=$lst_desc.'<a class="edit" href="'.base_url().'admin/brands/galleryedit/'.$value->id.'" data-toggle="tooltip" data-original-title="Edit">Read More</a>';
    
                $arrya_json[] = array('<input type="checkbox" class="childSupplierCheck" data-id="'.$value->id.'">',$value->variant_name,$value->model_name,'<a class="edit" href="'.base_url().'admin/brands/galleryedit/'.$value->id.'" data-toggle="tooltip" data-original-title="Edit"><i class="fa fa-edit"></i></a>&nbsp;&nbsp;
               <a class="delete_sliders" data-id="'.$value->id.'"  style="color: red;cursor: pointer;" data-toggle="tooltip" data-original-title="Delete"><i class="fa fa-trash" aria-hidden="true"></i></a>' );
                }
                 echo json_encode(array('data'=>$arrya_json));
            }

    }

?>