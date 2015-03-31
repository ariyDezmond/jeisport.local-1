<?php

class Subways_model extends CI_Model {

    public function __construct() {
        $this->load->database();
    }

    public function order_up($id) {
        $query = $this->db->get_where('subways', array('id' => $id));
        $category = $query->row_array();
        $order = $category['order'];
        $order++;
        $data = array(
            'order' => $order,
        );

        $this->db->where('id', $id);
        $this->db->update('subways', $data);
        redirect($this->agent->referrer());
    }

    public function order_down($id) {
        $query = $this->db->get_where('subways', array('id' => $id));
        $category = $query->row_array();
        $order = $category['order'];
        $order--;
        $data = array(
            'order' => $order,
        );

        $this->db->where('id', $id);
        $this->db->update('subways', $data);
        redirect($this->agent->referrer());
    }

    public function get_subways($id = null) {
        if ($id) {
            $query = $this->db->get_where('subways', array('id' => $id));
            return $query->row_array();
        }
        $this->db->order_by('order', 'desc');
        $query = $this->db->get('subways');
        if (count($query->result_array()) > 0) {
            return $query->result_array();
        } else {
            return false;
        }
    }

    public function get_subways_for_point($id = null) {
        if ($id) {
            $query = $this->db->get_where('subways', array('id' => $id, 'active' => 'on'));
            return $query->row_array();
        }
        $this->db->order_by('order', 'desc');
        $this->db->order_by('name', 'asc');
        $query = $this->db->get_where('subways', array('active' => 'on'));
        if (count($query->result_array()) > 0) {
            return $query->result_array();
        } else {
            return false;
        }
    }

    public function set_subway($image) {

        $data = array(
            'image' => $image,
            'name' => $this->input->post('name'),
            'order' => $this->input->post('order'),
            'active' => $this->input->post('active'),
            'order' => 0
        );

        return $this->db->insert('subways', $data);
    }

    public function delete_subway($id) {
        $this->db->delete('subways', array('id' => $id));
    }

    public function update_subway($id, $image = null) {
        if (!$image) {
            $data = array(
                'name' => $this->input->post('name'),
                'order' => $this->input->post('order'),
                'active' => $this->input->post('active')
            );
            $this->db->where('id', $id);
            $this->db->update('subways', $data);
        } else {
            $data = array(
                'image' => $image,
                'name' => $this->input->post('name'),
                'order' => $this->input->post('order'),
                'active' => $this->input->post('active')
            );

            $this->db->where('id', $id);
            $this->db->update('subways', $data);
        }
    }

}
