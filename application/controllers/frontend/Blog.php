<?php



defined('BASEPATH') OR exit('No direct script access allowed');

class Blog extends CI_Controller {

    public function index()
    {
        $data['content'] = "We Soon Lunching Blog Page Till Then You can Check Out Other Insurance";
        $this->load->view('frontend/template/header');
        $this->load->view('frontend/template/navbar');
        $this->load->view('frontend/blog',$data);
        $this->load->view('frontend/template/footer');
    }

}

/* End of file Blog.php */
