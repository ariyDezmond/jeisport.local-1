<?php

class Main_model extends CI_Model {

    public function __construct() {
        $this->load->database();
    }

    public function get_maintext() {
        $query = $this->db->get('maintext');
        return $query->row_array();
    }

    public function update_maintext() {
        $data = array(
            'text' => $this->input->post('text')
        );
        $this->db->update('maintext', $data);
    }

    public function get_about() {
        $query = $this->db->get('about');
        return $query->row_array();
    }

    public function update_about() {
        $data = array(
            'text' => $this->input->post('text')
        );
        $this->db->update('about', $data);
    }

    public function get_adm_email() {
        $query = $this->db->get('email');
        return $query->row_array();
    }

    public function update_adm_email($email) {
        $data = array(
            'email' => $email
        );
        $this->db->update('email', $data);
    }

    public function set_tag($tag, $page_id, $object) {
        $tag = addslashes(strip_tags($tag));
        $page_id = addslashes(strip_tags($page_id));
        $object = addslashes(strip_tags($object));
        if ($object && $tag && is_numeric($page_id)) {
            $data = array(
                'name' => $tag,
                'object' => $object,
                'page_id' => $page_id
            );
            $this->db->insert('tags', $data);
        }
    }

    public function get_tags($page_id = null, $object) {
        if ($page_id) {
            $query = $this->db->get_where('tags', array('page_id' => $page_id, 'object' => $object));
            return $query->result_array();
        } else {
            $query = $this->db->get_where('tags', array('object' => $object));
            return $query->result_array();
        }
    }

    public function delete_tag($id) {
        $this->db->delete('tags', array('id' => $id));
    }

}
