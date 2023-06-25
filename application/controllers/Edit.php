<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Edit extends CI_Controller {
    public function view() {
        $this->load->model('Edit_model');
        $data['orders'] = $this->Edit_model->get_users();
        $this->load->view('Auth/viewOrder', $data);
    }


   

    public function Edit_data($id) {
        $this->load->model('Edit_model');
        $data['row'] = $this->Edit_model->get_user($id);
        $this->load->view('Auth/edits', $data);
    }

    public function save() {
       
        $id = $this->input->post('id');
        $data = array(
            'name' => $this->input->post('name'),
            'email' => $this->input->post('email'),
            'phone' => $this->input->post('phone'),
            'order_details' => $this->input->post('order_details')

        );
        $this->load->model('Edit_model');
        $this->Edit_model->update_user($id, $data);
        redirect('Edit/view');
    }
    public function delete($id) {
        $this->load->model('Edit_model');
        $this->Edit_model->delete_user($id);
        redirect('Edit/view');
    }
}
