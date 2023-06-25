<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contact_model extends CI_Model {

    public function insert1($data){

        return $this->db->insert('contact', $data);
    }
}