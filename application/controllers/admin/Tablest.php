<?php
    class Tablest extends CI_controller{

        public function index(){
            $this->load->view('admin/template/header');
            $this->load->view('admin/template/sidebar');
            $this->load->view('admin/template/topbar');
            $this->load->view('admin/tabless');
        }
        public function tableadd(){
            $this->load->view('admin/tableadd');
        }
        public function addinventory_api(){
            $getPurchaseData = $this->Tablestmodel->fetchaddinventory_api();
    
            //print_r($getPurchaseData);
    
            foreach ($getPurchaseData as $key => $value) {
    
                $image=$value->img;
                 $json_image= json_decode($image);
                 $image_url= $image;
    
                 $short_desc=$value->dis;
    
           //$lst_desc=$this->word_limiter($short_desc, 4)."...";
           $lst_desc=$short_desc;
                $short_desc_vl=$lst_desc;
    
                $arrya_json[] = array('<input type="checkbox" class="childSupplierCheck" data-id="'.$value->id.'">','<img class="zoom" src="'.$image_url.'">',$value->name,$value->post,$short_desc,'<a class="edit" href="'.base_url().'testimonials/testimonialsedit/'.$value->id.'" data-toggle="tooltip" data-original-title="Edit"><i class="fa fa-edit"></i></a>&nbsp;&nbsp;
               <a class="delete_sliders" data-id="'.$value->id.'"  style="color: red;cursor: pointer;" data-toggle="tooltip" data-original-title="Delete"><i class="fa fa-trash" aria-hidden="true"></i></a>' );
                }
                 echo json_encode(array('data'=>$arrya_json));
    
            }
    }

?>