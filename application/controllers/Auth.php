<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

	
	public function index()
	{
		$this->load->view('Auth/homepage');
		
		

	}

	public function register(){
		$this->load->view('Auth/register');
	}


	public function welcome(){
		$this->load->view('Auth/home');
	}

	



	
	
    public function menu() {
        $this->load->view('Auth/menu');
    }

	
	
	

	public function aboutus() {
        $this->load->view('Auth/aboutus');
    }
	

	public function wrong() {
        $this->load->view('Auth/wrong');
    }

	
	public function od() {
        $this->load->view('Auth/order1');
    }

	


	public function logout()
{
    
    $this->load->view('Auth/logout');
}

        


}



