<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contact extends CI_Controller{

    
    public function contactdb() {

        $this->load->database();
        $this->load->view('Auth/contactus');
        
         $data= [
            'name'=>$this->input->post('name'),
            'email'=>$this->input->post('email'),
            'message'=>$this->input->post('message'),
        ];

        $this->load->model('Contact_model');
            $this->Contact_model->insert1($data);
           
           
                
            
    }
   
    public function message() {

    $this->load->view('Auth/success');


     }

    



}


