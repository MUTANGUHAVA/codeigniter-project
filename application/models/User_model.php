<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_model extends CI_Model {

    public function create($data) {
        return $this->db->insert('users', $data);
    }

    public function get_user_by_credentials($email) {
        $query = $this->db->get_where('users', array('email' => $email));
        return $query->row_array();
    }

}


      
      