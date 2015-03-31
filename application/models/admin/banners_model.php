<?php

class Banners_model extends CI_Model {

    public function __construct() {
        $this->load->database();
    }

    public function order_up($id) {
        $query = $this->db->get_where('banners', array('id' => $id));
        $category = $query->row_array();
        $order = $category['order'];
        $order++;
        $data = array(
            'order' => $order,
        );

        $this->db->where('id', $id);
        $this->db->update('banners', $data);
        redirect($this->agent->referrer());
    }

    public function order_down($id) {
        $query = $this->db->get_where('banners', array('id' => $id));
        $category = $query->row_array();
        $order = $category['order'];
        $order--;
        $data = array(
            'order' => $order,
        );

        $this->db->where('id', $id);
        $this->db->update('banners', $data);
        redirect($this->agent->referrer());
    }

    public function get_banners($id = null) {
        if ($id) {
            $query = $this->db->get_where('banners', array('id' => $id));
            return $query->row_array();
        }
        $this->db->order_by('order', 'desc');
        $query = $this->db->get('banners');
        if (count($query->result_array()) > 0) {
            return $query->result_array();
        } else {
            return false;
        }
    }

    public function get_banner_for_front($pos) {
        if ($pos) {
            $this->db->order_by('RAND ()');
            $query = $this->db->query("SELECT * FROM banners WHERE ((views < max_shows and payment = 'shows') or (clicks < max_clicks and payment = 'clicks')) AND active = 'on' AND status = 'on' AND pos = '$pos' ORDER BY RAND()");
            return $query->row_array();
        }
    }

    public function get_banner_by_id_for_front($id) {
        if ($id) {
            $query = $this->db->get_where('banners', array('id' => $id, 'active' => 'on'));
            return $query->row_array();
        }
    }

    public function incClicks($id) {
        $query = $this->db->get_where('banners', array('id' => $id, 'active' => 'on'));
        $banner = $query->row_array();
        $clicks = $banner['clicks'] + 1;
        $data = array(
            'clicks' => $clicks
        );
        $this->db->where('id', $id);
        $this->db->update('banners', $data);
    }

    public function set_banner($image) {

        $data = array(
            'image' => $image,
            'url' => $this->input->post('url'),
            'pos' => $this->input->post('pos'),
            'order' => $this->input->post('order'),
            'active' => $this->input->post('active'),
            'max_clicks' => $this->input->post('max_clicks'),
            'max_shows' => $this->input->post('max_shows'),
            'payment' => $this->input->post('payment'),
            'order' => 0
        );



        return $this->db->insert('banners', $data);
    }

    public function delete_banner($id) {
        $this->db->delete('banners', array
            ('id' => $id));
    }

    public function delete_clicks($id) {
        $data = array(
            'clicks' => 0
        );
        $this->db->where('id', $id);
        $this->db->update('banners', $data);
    }

    public function delete_views($id) {
        $data = array(
            'views' => 0
        );
        $this->db->where('id', $id);
        $this->db->update('banners', $data);
    }

    public function update_banner($id, $image = null, $status = 0) {
        if (!$image) {
            $data = array(
                'url' => $this->input->post('url'),
                'pos' => $this->input->post('pos'),
                'order' => $this->input->post('order'),
                'max_clicks' => $this->input->post('max_clicks'),
                'max_shows' => $this->input->post('max_shows'),
                'payment' => $this->input->post('payment'),
                'status' => $status,
                'active' => $this->input->post('active')
            );
            $this->db->where('id', $id);
            $this->db->update('banners', $data);
        } else {
            $data = array(
                'image' => $image,
                'url' => $this->input->post('url'),
                'pos' => $this->input->post('pos'),
                'order' => $this->input->post('order'),
                'max_clicks' => $this->input->post('max_clicks'),
                'max_shows' => $this->input->post('max_shows'),
                'payment' => $this->input->post('payment[]'),
                'status' => $status,
                'active' => $this->input->post('active'));

            $this->db->where('id', $id);
            $this->db->update('banners', $data);
        }
    }

    public function update_banner_views($id) {

        if ($id) {
            $query = $this->db->get_where('banners', array('id' => $id));
            $new = $query->row_array();
        }

        $views = $new['views'] + 1;

        $data = array(
            'views' => $views
        );
        $this->db->where('id', $id);
        $this->db->update('banners', $data);
    }

    public function set_banner_status($id) {
        $data = array(
            'status' => 0
        );
        $this->db->where('id', $id);
        $this->db->update('banners', $data);
    }

}
