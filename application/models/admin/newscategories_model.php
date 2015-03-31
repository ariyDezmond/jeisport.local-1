<?php

class Newscategories_model extends CI_Model {

    public function __construct() {
        $this->load->database();
    }

    public function get_newscategories($id = null) {
        if ($id) {
            $query = $this->db->get_where('news_categories', array('id' => $id));
            return $query->row_array();
        }
        $query = $this->db->get('news_categories');
        if (count($query->result_array()) > 0) {
            return $query->result_array();
        } else {
            return false;
        }
    }

    public function get_newscategories_for_new($id = null) {
        if ($id) {
            $query = $this->db->get_where('news_categories', array('id' => $id, 'active' => 'on'));
            return $query->row_array();
        }
        $query = $this->db->get_where('news_categories', array('active' => 'on'));
        if (count($query->result_array()) > 0) {
            return $query->result_array();
        } else {
            return false;
        }
    }

    public function delete_newcategory($id) {
        $this->db->delete('news_categories', array('id' => $id));
    }

    public function update_newcategory($id) {
        $data = array(
            'name' => $this->input->post('name'),
            'active' => $this->input->post('active')
        );
        $this->db->where('id', $id);
        $this->db->update('news_categories', $data);
    }

    public function set_newcategory() {

        $data = array(
            'name' => $this->input->post('name'),
            'order' => 0,
            'active' => $this->input->post('active'),
        );

        return $this->db->insert('news_categories', $data);
    }

    public function order_up($id) {
        $query = $this->db->get_where('news_categories', array('id' => $id));
        $category = $query->row_array();
        $order = $category['order'];
        $order++;
        $data = array(
            'order' => $order,
        );

        $this->db->where('id', $id);
        $this->db->update('news_categories', $data);
        redirect($this->agent->referrer());
    }

    public function order_down($id) {
        $query = $this->db->get_where('news_categories', array('id' => $id));
        $category = $query->row_array();
        $order = $category['order'];
        $order--;
        $data = array(
            'order' => $order,
        );

        $this->db->where('id', $id);
        $this->db->update('news_categories', $data);
        redirect($this->agent->referrer());
    }

}
