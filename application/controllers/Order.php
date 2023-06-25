<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Order extends CI_Controller {

    public function order1() {
        $this->load->view('Auth/order');
    }
    
    public function placeOrder() {
    
        $this->load->database();

        $this->load->library('form_validation');
        
        $this->form_validation->set_rules('name', 'name', 'required');
        $this->form_validation->set_rules('email', 'your email', 'required');
        $this->form_validation->set_rules('phone', 'phone number', 'required');
        $this->form_validation->set_rules('order_details', 'your order', 'required');

        if($this->form_validation->run())
        {
            $data= [
                'name'=>$this->input->post('name'),
                'email'=>$this->input->post('email'),
                'phone'=>$this->input->post('phone'),
                'order_details'=>$this->input->post('order_details'),
            ];

            $this->load->model('order_model');
            $this->order_model->insert($data);
            redirect(base_url('Auth/od'));
    
        }

        else{
            $this->order1();
        }
        
        
        
    }
    
	

    
    
}
