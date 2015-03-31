<?php

class Backcall_model extends CI_Model {

    public function __construct() {
        $this->load->database();
    }

    public function get_msgs($id = null) {
        if ($id) {
            $query = $this->db->get_where('backcalls', array('id' => $id));
            return $query->row_array();
        }
        $query = $this->db->get('backcalls');
        if (count($query->result_array()) > 0) {
            return $query->result_array();
        } else {
            return false;
        }
    }

    public function get_unread_msgs() {
        $query = $this->db->get_where('backcalls', array('read' => '0'));
        if (count($query->result_array()) > 0) {
            return count($query->result_array());
        } else {
            return false;
        }
    }

    public function update_backcall_read($id) {
        $data = array(
            'read' => 'on'
        );
        $this->db->where('id', $id);
        $this->db->update('backcalls', $data);
    }

    public function backcall_delete($id) {
        $this->db->delete('backcalls', array('id' => $id));
    }

}
