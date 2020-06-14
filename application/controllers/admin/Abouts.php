<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class Abouts extends CI_Controller {
    
    public function __construct()
    {
        parent::__construct();
       $this->load->model('admin/Aboutmodel');
       
    }
    
    public function index()
    {
        $data = $this->Aboutmodel->fetch();
        $this->load->view('admin/template/header');
        $this->load->view('admin/template/sidebar');
        $this->load->view('admin/template/topbar');
        $this->load->view('admin/abooutus.php',$data);
        $this->load->view('admin/template/footer');
    }
    public function upload(){
        $data['about_desc'] = $this->input->post('about'); 
        $this->Aboutmodel->upload($data); 
        $this->index();

    }

}

/* End of file Aboutus.php */
