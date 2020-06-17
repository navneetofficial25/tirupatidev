<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class Refer extends CI_Controller {
    
    public function __construct()
    {
        parent::__construct();
        $this->load->model('admin/refermodel');
    }
    
    public function index()
    {
        $data['fetch_refer'] = $this->refermodel->fetch_referId();
        $this->load->view('admin/template/header');
        $this->load->view('admin/template/sidebar');
        $this->load->view('admin/template/topbar');
        $this->load->view('admin/refer',$data);
        $this->load->view('admin/template/footer');
    }


public function insert_data(){
    $this->load->model('admin/refermodel');
    $this->input->post('formSubmit');
    $this->form_validation->set_rules('refer_id', 'Refrence ID', 'required');
    $this->form_validation->set_rules('rname', 'Refrence Name', 'required');
    $this->form_validation->set_rules('money', 'Money', 'required');
    // $this->form_validation->set_rules('itpye', 'Isurance Type', 'required');
    // $this->form_validation->set_rules('ptype', 'Money', 'required');
    // $this->form_validation->set_rules('tpremium', 'Money', 'required');
    // $this->form_validation->set_rules('ppaid', 'Money', 'required');
    
    if ($this->form_validation->run()){ 
        $data = array(
            'refer_id' => $this->input->post('refer_id'),
            'reference' => $this->input->post('rname'),
            'money' => $this->input->post('money'),
            'insurance_type' => $this->input->post('itype'),
            'policy_type' => $this->input->post('ptype'),
            'total_premium' => $this->input->post('tpremium'),
            'premium_paid' => $this->input->post('ppaid'),
            'date' => date("Y-m-d h:i:s"),
        );
        if($this->refermodel->insert($data)){
            $this->session->set_flashdata('admin_error','Updated Successful'); 
            redirect(base_url().'admin/refer');
        }
        else{
            $this->session->set_flashdata('admin_error','Error In Updating Please Try Again'); 
            redirect(base_url().'admin/refer');
        }    
    }
    else{
        $this->session->set_flashdata('admin_error','Please Fill all fields'); 
        redirect(base_url().'admin/refer'); 
    }
  }
}

/* End of file Refer.php */
