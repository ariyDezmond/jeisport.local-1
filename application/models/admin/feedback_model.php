<?php

class Feedback_model extends CI_Model {

    public function __construct() {
        $this->load->database();
    }

    public function get_msgs($id = null) {
        if ($id) {
            $query = $this->db->get_where('feedback', array('id' => $id));
            return $query->row_array();
        }
        $query = $this->db->get('feedback');
        if (count($query->result_array()) > 0) {
            return $query->result_array();
        } else {
            return false;
        }
    }

    public function get_unread_msgs() {
        $query = $this->db->get_where('feedback', array('read' => '0'));
        if (count($query->result_array()) > 0) {
            return count($query->result_array());
        } else {
            return false;
        }
    }

    public function update_feedback_read($id) {
        $data = array(
            'read' => 'on'
        );
        $this->db->where('id', $id);
        $this->db->update('feedback', $data);
    }

    public function feedback_delete($id) {
        $this->db->delete('feedback', array('id' => $id));
    }

}
