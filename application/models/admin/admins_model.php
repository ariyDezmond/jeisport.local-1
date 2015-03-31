<?php

class Admins_model extends CI_Model {

    public function __construct() {
        $this->load->database();
    }

    public function get_user() {
        $query = $this->db->get_where('admins', array('login' => $this->input->post('login'), 'pass' => $this->input->post('pass')));
        if ($query->row_array()) {
            return true;
        } else {
            return false;
        };
    }

    public function get_unread_requests() {
        $query = $this->db->get_where('requests', array('read' => '0'));
        if (count($query->result_array()) > 0) {
            return count($query->result_array());
        } else {
            return false;
        }
    }

    public function request_delete($id) {
        $this->db->delete('requests', array('id' => $id));
    }

    public function update_request_read($id) {
        $data = array(
            'read' => 'on'
        );
        $this->db->where('id', $id);
        $this->db->update('requests', $data);
    }

    public function save_email() {
        $data = array(
            'email' => $this->input->post('email')
        );
        $this->db->update('email', $data);
    }

    public function get_email() {
        $query = $this->db->get('email');
        if (count($query->row_array()) > 0) {
            return $query->row_array();
        } else {
            return false;
        }
    }

}
