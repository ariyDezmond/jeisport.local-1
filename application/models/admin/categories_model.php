<?php

class Categories_model extends CI_Model {

    public function __construct() {
        $this->load->database();
    }

    public function order_up($id) {
        $query = $this->db->get_where('categories', array('id' => $id));
        $category = $query->row_array();
        $order = $category['order'];
        $order++;
        $data = array(
            'order' => $order,
        );

        $this->db->where('id', $id);
        $this->db->update('categories', $data);
        redirect('admin/categories');
    }

    public function order_down($id) {
        $query = $this->db->get_where('categories', array('id' => $id));
        $category = $query->row_array();
        $order = $category['order'];
        $order--;
        $data = array(
            'order' => $order,
        );

        $this->db->where('id', $id);
        $this->db->update('categories', $data);
        redirect('admin/categories');
    }

    public function get_categories($id = null) {
        if ($id) {
            $query = $this->db->get_where('categories', array('id' => $id));

            return $query->row_array();
        }
        $this->db->order_by('order', 'desc');
        $query = $this->db->get('categories');
        if (count($query->result_array()) > 0) {
            return $query->result_array();
        } else {
            return false;
        }
    }

    public function get_first_category() {
        $this->db->order_by('order', 'desc');
        $query = $this->db->get('categories');
        if (count($query->result_array()) > 0) {
            return $query->result_array();
        } else {
            return false;
        }
    }

    public function get_category_for_point($id) {
        if ($id) {
            $query = $this->db->get_where('categories', array('id' => $id));
            return $query->row_array();
        }
    }

    public function get_categories_for_front($id = null) {
        if ($id) {
            $query = $this->db->get_where('categories', array('id' => $id, 'active' => 'on'));

            return $query->row_array();
        }
        $this->db->order_by('order', 'desc');
        $query = $this->db->get_where('categories', array('active' => 'on'));
        if (count($query->result_array()) > 0) {
            return $query->result_array();
        } else {
            return false;
        }
    }

    public function get_category_by_url($url) {
        if ($url) {
            $query = $this->db->get_where('categories', array('url' => $url));
            if ($query) {
                return $query->row_array();
            } else {
                return false;
            }
        } else {
            return false;
        }
    }

    public function get_category_by_url_for_front($url) {
        if ($url) {
            $query = $this->db->get_where('categories', array('url' => $url, 'active' => 'on'));
            if ($query) {
                return $query->row_array();
            } else {
                return false;
            }
        } else {
            return false;
        }
    }

    public function set_category($image, $image2, $image3) {

        $data = array(
            'name' => $this->input->post('name'),
            'h1' => $this->input->post('h1'),
            'h2' => $this->input->post('h2'),
            'url' => $this->input->post('url'),
            'image' => $image,
            'image2' => $image2,
            'image3' => $image3,
            'title' => $this->input->post('title'),
            'desc' => $this->input->post('desc'),
            'keyw' => $this->input->post('keyw'),
            'text' => $this->input->post('text'),
            'active' => $this->input->post('active')
        );

        return $this->db->insert('categories', $data);
    }

    public function delete_category($id) {
        $this->db->delete('categories', array('id' => $id));
    }

    public function update_category($id, $image = null, $image2 = null, $image3 = null) {
        if (!$image && !$image2 && !$image3) {
            $data = array(
                'name' => $this->input->post('name'),
                'url' => $this->input->post('url'),
                'h1' => $this->input->post('h1'),
                'h2' => $this->input->post('h2'),
                'title' => $this->input->post('title'),
                'desc' => $this->input->post('desc'),
                'keyw' => $this->input->post('keyw'),
                'text' => $this->input->post('text'),
                'active' => $this->input->post('active')
            );
            $this->db->where('id', $id);
            $this->db->update('categories', $data);
        } else {
            $data = array(
                'name' => $this->input->post('name'),
                'url' => $this->input->post('url'),
                'h1' => $this->input->post('h1'),
                'image' => $image,
                'image2' => $image2,
                'image3' => $image3,
                'title' => $this->input->post('title'),
                'desc' => $this->input->post('desc'),
                'keyw' => $this->input->post('keyw'),
                'text' => $this->input->post('text'),
                'active' => $this->input->post('active')
            );

            $this->db->where('id', $id);
            $this->db->update('categories', $data);
        }
    }

    public function get_sports_for_category($id) {
        $query = $this->db->get_where('sports', array('category_id' => $id));
        return $query->result_array();
    }

}
