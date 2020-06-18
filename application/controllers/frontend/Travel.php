<?php



defined('BASEPATH') OR exit('No direct script access allowed');

class Travel extends CI_Controller {

    public function index()
    {
        $data['content'] = "We Soon Lunching Travel Insurance Till Then You can Check Out Other Insurance";
        $this->load->view('frontend/template/header');
        $this->load->view('frontend/template/navbar');
        $this->load->view('frontend/travel',$data);
        $this->load->view('frontend/template/footer');
    }

}

/* End of file Travel.php */
