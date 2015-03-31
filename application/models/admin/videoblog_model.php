<?php

class Videoblog_model extends CI_Model {

    public function __construct() {
        $this->load->database();
    }

    public function get_blogs($id = null) {
        if ($id) {
            $query = $this->db->get_where('blog', array('id' => $id));
            return $query->row_array();
        }
        $this->db->order_by('order', 'desc');
        $query = $this->db->get('blog');
        if (count($query->result_array()) > 0) {
            return $query->result_array();
        } else {
            return false;
        }
    }

    public function get3posts_for_front() {
        $this->db->order_by('order', 'desc');
        $this->db->limit(3);
        $query = $this->db->get_where('blog', array('active' => 'on'));
        if (count($query->result_array()) > 0) {
            return $query->result_array();
        } else {
            return false;
        }
    }

    public function delete_blog($id) {
        $this->db->delete('blog', array('id' => $id));
    }

    public function update_blog($id, $image = null) {
        if (!$image) {
            $data = array(
                'name' => $this->input->post('name'),
                'title' => $this->input->post('title'),
                'desc' => $this->input->post('desc'),
                'keyw' => $this->input->post('keyw'),
                'text' => $this->input->post('text'),
                'date' => $this->input->post('date'),
                'active' => $this->input->post('active')
            );
            $this->db->where('id', $id);
            $this->db->update('blog', $data);
        } else {
            $data = array(
                'name' => $this->input->post('name'),
                'url' => $this->input->post('url'),
                'title' => $this->input->post('title'),
                'desc' => $this->input->post('desc'),
                'keyw' => $this->input->post('keyw'),
                'text' => $this->input->post('text'),
                'image' => $image,
                'date' => $this->input->post('date'),
                'active' => $this->input->post('active')
            );

            $this->db->where('id', $id);
            $this->db->update('blog', $data);
        }
    }

    public function set_blog($image) {

        $data = array(
            'name' => $this->input->post('name'),
            'order' => 0,
            'url' => $this->input->post('url'),
            'text' => $this->input->post('text'),
            'date' => $this->input->post('date'),
            'title' => $this->input->post('title'),
            'desc' => $this->input->post('desc'),
            'keyw' => $this->input->post('keyw'),
            'active' => $this->input->post('active'),
            'image' => $image,
        );

        return $this->db->insert('blog', $data);
    }

    public function get_blog_by_url($url) {
        if ($url) {
            $query = $this->db->get_where('blog', array('url' => $url));
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
            $query = $this->db->get_where('blog', array('url' => $url, 'active' => 'on'));
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
        $query = $this->db->get_where('blog', array('id' => $id));
        $category = $query->row_array();
        $order = $category['order'];
        $order++;
        $data = array(
            'order' => $order,
        );

        $this->db->where('id', $id);
        $this->db->update('blog', $data);
        redirect($this->agent->referrer());
    }

    public function order_down($id) {
        $query = $this->db->get_where('blog', array('id' => $id));
        $category = $query->row_array();
        $order = $category['order'];
        $order--;
        $data = array(
            'order' => $order,
        );

        $this->db->where('id', $id);
        $this->db->update('blog', $data);
        redirect($this->agent->referrer());
    }

}
