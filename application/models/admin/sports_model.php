<?php

class Sports_model extends CI_Model {

    public function __construct() {
        $this->load->database();
    }

    public function order_up($id) {
        $query = $this->db->get_where('sports', array('id' => $id));
        $category = $query->row_array();
        $order = $category['order'];
        $order++;
        $data = array(
            'order' => $order,
        );

        $this->db->where('id', $id);
        $this->db->update('sports', $data);
        redirect($this->agent->referrer());
    }

    public function order_down($id) {
        $query = $this->db->get_where('sports', array('id' => $id));
        $category = $query->row_array();
        $order = $category['order'];
        $order--;
        $data = array(
            'order' => $order,
        );

        $this->db->where('id', $id);
        $this->db->update('sports', $data);
        redirect($this->agent->referrer());
    }

    public function get_sports($id = null) {
        if ($id) {
            $query = $this->db->get_where('sports', array('id' => $id));
            return $query->row_array();
        }
        $this->db->order_by('order', 'desc');
        $this->db->order_by('name', 'asc');
        $query = $this->db->get('sports');
        if (count($query->result_array()) > 0) {
            return $query->result_array();
        } else {
            return false;
        }
    }

    public function get_sport_for_point($id) {
        if ($id) {
            $query = $this->db->get_where('sports', array('id' => $id));
            return $query->row_array();
        }
    }

    public function get_sports_for_category_front($id = null) {
        $this->db->order_by('order', 'desc');
        $query = $this->db->get_where('sports', array('category_id' => $id, 'active' => 'on'));
        if (count($query->result_array()) > 0) {
            return $query->result_array();
        } else {
            return false;
        }
    }

    public function get_sport_by_url_for_front($url) {
        $query = $this->db->get_where('sports', array('url' => $url, 'active' => 'on'));
        if (count($query->row_array()) > 0) {
            return $query->row_array();
        } else {
            return false;
        }
    }

    public function get_ordered_sports($category) {
        $this->db->order_by('order', 'desc');
        $query = $this->db->get_where('sports', array('category_id' => $category));
        if (count($query->result_array()) > 0) {
            return $query->result_array();
        } else {
            return false;
        }
    }

    public function get_sport_by_url($url) {
        if ($url) {
            $query = $this->db->get_where('sports', array('url' => $url));
            if ($query) {
                return $query->row_array();
            } else {
                return false;
            }
        } else {
            return false;
        }
    }

    public function get_category_for_sport($id) {
        $query = $this->db->get_where('sports', array('id' => $id));
        return $query->row_array();
    }

    public function set_sport($image) {

        $data = array(
            'name' => $this->input->post('name'),
            'url' => $this->input->post('url'),
            'image' => $image,
            'category_id' => $this->input->post('category'),
            'title' => $this->input->post('title'),
            'desc' => $this->input->post('desc'),
            'keyw' => $this->input->post('keyw'),
            'text' => $this->input->post('text'),
            'active' => $this->input->post('active')
        );

        return $this->db->insert('sports', $data);
    }

    public function delete_sport($id) {
        $this->db->delete('sports', array('id' => $id));
    }

    public function update_sport($id, $image = null) {
        if (!$image) {
            $data = array(
                'name' => $this->input->post('name'),
                'url' => $this->input->post('url'),
                'title' => $this->input->post('title'),
                'desc' => $this->input->post('desc'),
                'keyw' => $this->input->post('keyw'),
                'text' => $this->input->post('text'),
                'category_id' => $this->input->post('category'),
                'active' => $this->input->post('active')
            );
            $this->db->where('id', $id);
            $this->db->update('sports', $data);
        } else {
            $data = array(
                'name' => $this->input->post('name'),
                'url' => $this->input->post('url'),
                'image' => $image,
                'title' => $this->input->post('title'),
                'desc' => $this->input->post('desc'),
                'keyw' => $this->input->post('keyw'),
                'text' => $this->input->post('text'),
                'category_id' => $this->input->post('category'),
                'active' => $this->input->post('active')
            );

            $this->db->where('id', $id);
            $this->db->update('sports', $data);
        }
    }

}
