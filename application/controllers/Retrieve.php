<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Retrieve extends CI_Controller {
    public function view() {
        
        $this->load->model('order_model');
        $array['orders'] = $this->order_model->getOrders();
        $this->load->view('auth/viewOrder', $array);
		
        
		
    }


    

}

