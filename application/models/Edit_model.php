<?php
class Edit_model extends CI_Model {
    public function get_users() {
        $query = $this->db->get('orders');
        return $query->result();
    }

    public function get_user($id) {
        $query = $this->db->get_where('orders', array('id' => $id));
        return $query->row();
    }

    
    

    public function update_user($id, $data) {
        $this->db->where('id', $id);
        return $this->db->update('orders', $data);
    }

    public function delete_user($id) {
        return $this->db->delete('orders', array('id' => $id));
    }
}