<?php

class Videoblog_model extends CI_Model {

    public function __construct() {
        $this->load->database();
    }

    public function get_blogs($id = null) {
        if ($id) {
            $query = $this->db->get_where('videoblog', array('id' => $id));
            return $query->row_array();
        }
        $this->db->order_by('order', 'desc');
        $query = $this->db->get('videoblog');
        if (count($query->result_array()) > 0) {
            return $query->result_array();
        } else {
            return false;
        }
    }

    public function get_blogs_for_front($id = null) {
        if ($id) {
            $query = $this->db->get_where('videoblog', array('id' => $id, 'active' => 'on'));
            return $query->row_array();
        }
        $this->db->order_by('order', 'desc');
        $query = $this->db->get_where('videoblog', array('active' => 'on'));
        if (count($query->result_array()) > 0) {
            return $query->result_array();
        } else {
            return false;
        }
    }

    public function get3posts_for_front() {
        $this->db->order_by('order', 'desc');
        $this->db->limit(3);
        $query = $this->db->get_where('videoblog', array('active' => 'on'));
        if (count($query->result_array()) > 0) {
            return $query->result_array();
        } else {
            return false;
        }
    }

    public function delete_blog($id) {
        $this->db->delete('videoblog', array('id' => $id));
    }

    public function update_blog($id) {
        $data = array(
            'name' => $this->input->post('name'),
            'text' => $this->input->post('text'),
            'date' => $this->input->post('date'),
            'youtube' => $this->input->post('youtube'),
            'date' => date('Y-m-d H:i:s', strtotime($this->input->post('date'))),
            'active' => $this->input->post('active')
        );
        $this->db->where('id', $id);
        $this->db->update('videoblog', $data);
    }

    public function set_blog() {

        $data = array(
            'name' => $this->input->post('name'),
            'text' => $this->input->post('text'),
            'youtube' => $this->input->post('youtube'),
            'date' => date('Y-m-d H:i:s'),
            'date' => $this->input->post('date'),
            'active' => $this->input->post('active'),
            'order' => 0,
        );

        return $this->db->insert('videoblog', $data);
    }

    public function get_blog_by_url($url) {
        if ($url) {
            $query = $this->db->get_where('videoblog', array('url' => $url));
            if ($query) {
                return $query->row_array();
            } else {
                return false;
            }
        } else {
            return false;
        }
    }

    public function get_blog_by_url_for_front($url) {
        if ($url) {
            $query = $this->db->get_where('videoblog', array('url' => $url, 'active' => 'on'));
            if ($query) {
                return $query->row_array();
            } else {
                return false;
            }
        } else {
            return false;
        }
    }

    public function order_up($id) {
        $query = $this->db->get_where('videoblog', array('id' => $id));
        $category = $query->row_array();
        $order = $category['order'];
        $order++;
        $data = array(
            'order' => $order,
        );

        $this->db->where('id', $id);
        $this->db->update('videoblog', $data);
        redirect($this->agent->referrer());
    }

    public function order_down($id) {
        $query = $this->db->get_where('videoblog', array('id' => $id));
        $category = $query->row_array();
        $order = $category['order'];
        $order--;
        $data = array(
            'order' => $order,
        );

        $this->db->where('id', $id);
        $this->db->update('videoblog', $data);
        redirect($this->agent->referrer());
    }

}
