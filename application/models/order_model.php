<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Order_model extends CI_Model {
    
    public function getOrders(){
        $query = $this->db->get('orders');
        return $query->result();
        
    }
    public function insert($data){

        return $this->db->insert('orders', $data);
    }

    

}
