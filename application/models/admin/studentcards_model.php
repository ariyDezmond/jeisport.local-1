<?php

class Studentcards_model extends CI_Model {

    public function __construct() {
        $this->load->database();
    }

    public function get_msgs($id = null) {
        if ($id) {
            $query = $this->db->get_where('studentcards', array('id' => $id));
            return $query->row_array();
        }
        $this->db->order_by('read', 'desc');
        $this->db->order_by('id', 'desc');
        $query = $this->db->get('studentcards');
        if (count($query->result_array()) > 0) {
            return $query->result_array();
        } else {
            return false;
        }
    }

    public function get_unread_msgs() {
        $query = $this->db->get_where('studentcards', array('read' => '0'));
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
        $this->db->update('studentcards', $data);
    }

    public function studentcard_delete($id) {
        $this->db->delete('studentcards', array('id' => $id));
    }

}
