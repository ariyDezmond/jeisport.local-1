<?php

class News_model extends CI_Model {

    public function __construct() {
        $this->load->database();
    }

    public function get_news($id = null) {
        if ($id) {
            $query = $this->db->get_where('news', array('id' => $id));
            return $query->row_array();
        }
        $this->db->order_by('active', 'desc');
        $this->db->order_by('order', 'desc');
        $this->db->order_by('date', 'desc');
        $query = $this->db->get('news');
        if (count($query->result_array()) > 0) {
            return $query->result_array();
        } else {
            return false;
        }
    }

    public function get_news_for_pagination($startFrom) {

        $this->db->order_by('order', 'desc');
        $this->db->order_by('date', 'desc');
        $query = $this->db->get_where('news', array('active' => 'on'), 2, $startFrom);
        if (count($query->result_array()) > 0) {
            return $query->result_array();
        } else {
            return false;
        }
    }

    public function get_news_for_front() {

        $this->db->order_by('order', 'desc');
        $this->db->order_by('date', 'desc');
        $query = $this->db->get_where('news', array('active' => 'on'));
        if (count($query->result_array()) > 0) {
            return $query->result_array();
        } else {
            return false;
        }
    }

    public function get3news_for_front() {
        $this->db->order_by('order', 'desc');
        $this->db->order_by('date', 'desc');
        $this->db->limit(3);
        $query = $this->db->get_where('news', array('active' => 'on'));
        if (count($query->result_array()) > 0) {
            return $query->result_array();
        } else {
            return false;
        }
    }

    public function delete_new($id) {
        $this->db->delete('news', array('id' => $id));
    }

    public function update_new($id, $image = null) {
        if (!$image) {
            $data = array(
                'name' => $this->input->post('name'),
                'title' => $this->input->post('title'),
                'desc' => $this->input->post('desc'),
                'keyw' => $this->input->post('keyw'),
                'text' => $this->input->post('text'),
                'date' => date('Y-m-d H:i:s', strtotime($this->input->post('date'))),
                'category_id' => $this->input->post('category_id'),
                'active' => $this->input->post('active')
            );
            $this->db->where('id', $id);
            $this->db->update('news', $data);
        } else {
            $data = array(
                'name' => $this->input->post('name'),
                'title' => $this->input->post('title'),
                'desc' => $this->input->post('desc'),
                'keyw' => $this->input->post('keyw'),
                'text' => $this->input->post('text'),
                'image' => $image,
                'date' => date('Y-m-d H:i:s', strtotime($this->input->post('date'))),
                'category_id' => $this->input->post('category_id'),
                'active' => $this->input->post('active')
            );

            $this->db->where('id', $id);
            $this->db->update('news', $data);
        }
    }

    public function get_new_by_url($url) {
        if ($url) {
            $query = $this->db->get_where('news', array('url' => $url));
            if ($query) {
                return $query->row_array();
            } else {
                return false;
            }
        } else {
            return false;
        }
    }

    public function get_new_by_url_for_front($url) {
        if ($url) {
            $query = $this->db->get_where('news', array('url' => $url, 'active' => 'on'));
            if ($query) {
                return $query->row_array();
            } else {
                return false;
            }
        } else {
            return false;
        }
    }

    public function set_new($image) {

        $data = array(
            'name' => $this->input->post('name'),
            'order' => 0,
            'url' => $this->input->post('url'),
            'text' => $this->input->post('text'),
            'date' => date('Y-m-d H:i:s', strtotime($this->input->post('date'))),
            'title' => $this->input->post('title'),
            'desc' => $this->input->post('desc'),
            'keyw' => $this->input->post('keyw'),
            'category_id' => $this->input->post('category'),
            'active' => $this->input->post('active'),
            'image' => $image,
        );

        return $this->db->insert('news', $data);
    }

    public function order_up($id) {
        $query = $this->db->get_where('news', array('id' => $id));
        $category = $query->row_array();
        $order = $category['order'];
        $order++;
        $data = array(
            'order' => $order,
        );

        $this->db->where('id', $id);
        $this->db->update('news', $data);
        redirect($this->agent->referrer());
    }

    public function order_down($id) {
        $query = $this->db->get_where('news', array('id' => $id));
        $category = $query->row_array();
        $order = $category['order'];
        $order--;
        $data = array(
            'order' => $order,
        );

        $this->db->where('id', $id);
        $this->db->update('news', $data);
        redirect($this->agent->referrer());
    }

}
