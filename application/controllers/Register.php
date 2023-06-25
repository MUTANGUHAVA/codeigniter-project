<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller {

    public function index() {
        $this->load->view('Auth/register');
    }

    public function register_user() {
        
              $data = array(
                'name' => $this->input->post('name'),
                'email' => $this->input->post('email'),
                'password' => password_hash($this->input->post('password'), PASSWORD_BCRYPT)
              );
          
              $this->load->model('User_model');
              $this->User_model->create($data);
          
              redirect('Login/loginpage');
            }
          
            
          
          }



