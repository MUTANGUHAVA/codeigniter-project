<?php 
class Login extends CI_Controller {
    

    public function loginpage() {
        $this->load->view('Auth/login');
    }

    public function login2() {
        $this->load->model('User_model');


       $name = $this->input->get('name');
		$email = $this->input->get('email');
		$password = $this->input->get('password');

       
		$user = $this->User_model->get_user_by_credentials($email);

		if ($user && $user['name'] == $name && password_verify($password, $user['password'])) {
			redirect('Auth/welcome');

			
           } else {
			
			redirect('Auth/wrong');
			
			
		}
	}
}

