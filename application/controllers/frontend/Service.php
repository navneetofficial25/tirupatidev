<?php



defined('BASEPATH') OR exit('No direct script access allowed');

class Service extends CI_Controller {

    public function index()
    {
        $data['content'] = "We Soon Lunching Service Page Till Then You can Check Out Other Insurance";
        $this->load->view('frontend/template/header');
        $this->load->view('frontend/template/navbar');
        $this->load->view('frontend/service',$data);
        $this->load->view('frontend/template/footer');
    }

}

/* End of file Service.php */
