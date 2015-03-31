<?php

class Search_model extends CI_Model {

    public function __construct() {
        $this->load->database();
    }

    public function set_request() {
        date_default_timezone_set('Asia/Bishkek');
        $data = array(
            'name' => $this->input->post('name'),
            'age' => $this->input->post('age'),
            'sex' => $this->input->post('sex'),
            'weight' => $this->input->post('weight'),
            'sports' => nl2br($this->input->post('sports')),
            'subway' => $this->input->post('subway'),
            'contrains' => nl2br($this->input->post('contrains')),
            'canpay' => $this->input->post('canpay'),
            'email' => $this->input->post('email'),
            'date' => date('d.m.Y H:i:s'),
            'phone' => $this->input->post('phone'),
            'ip' => $this->input->ip_address(),
            'read' => 0
        );

        return $this->db->insert('requests', $data);
    }

    protected function search_query($query) {
        $query_search = '';
        $arraywords = explode(' ', $query);
        foreach ($arraywords as $key => $value) {
            if (isset($arraywords[$key - 1]))
                $query_search .= ' OR ';
            $query_search .= '`name` LIKE "%' . $value . '%" OR `text` LIKE "%' . $value . '%"';
        }
        $query = "SELECT * FROM points WHERE $query_search";
        return $query;
    }

    public function get($q) {

        $query = $this->db->query($this->search_query($q));
        if (count($query->result_array()) > 0) {
            return $query->result_array();
        } else {
            return false;
        }
    }

    public function update_new_views($id) {

        if ($id) {
            $query = $this->db->get_where('news', array('id' => $id));
            $new = $query->row_array();
        }

        $views = $new['views'] + 1;

        $data = array(
            'views' => $views
        );
        $this->db->where('id', $id);
        $this->db->update('news', $data);
    }

    public function update_blog_views($id) {

        if ($id) {
            $query = $this->db->get_where('blog', array('id' => $id));
            $new = $query->row_array();
        }

        $views = $new['views'] + 1;

        $data = array(
            'views' => $views
        );
        $this->db->where('id', $id);
        $this->db->update('blog', $data);
    }

    public function save_feedback() {
        date_default_timezone_set('Asia/Bishkek');
        $data = array(
            'name' => $this->input->post('name'),
            'email' => $this->input->post('email'),
            'theme' => $this->input->post('theme'),
            'msg' => nl2br($this->input->post('msg')),
            'date' => date('d.m.Y H:i:s'),
            'phone' => $this->input->post('phone'),
            'ip' => $this->input->ip_address(),
            'read' => 0
        );

        return $this->db->insert('feedback', $data);
    }

}
