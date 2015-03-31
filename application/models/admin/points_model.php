<?php

class Points_model extends CI_Model {

    public function __construct() {
        $this->load->database();
    }

    public function order_up($id) {
        $query = $this->db->get_where('points', array('id' => $id));
        $point = $query->row_array();
        $order = $point['order'];
        $order++;
        $data = array(
            'order' => $order,
        );

        $this->db->where('id', $id);
        $this->db->update('points', $data);
        redirect($this->agent->referrer());
    }

    public function order_down($id) {
        $query = $this->db->get_where('points', array('id' => $id));
        $point = $query->row_array();
        $order = $point['order'];
        $order--;
        $data = array(
            'order' => $order,
        );

        $this->db->where('id', $id);
        $this->db->update('points', $data);
        redirect($this->agent->referrer());
    }

    public function get_points($id = null) {
        if ($id) {
            $query = $this->db->get_where('points', array('id' => $id));
            return $query->row_array();
        }
        $this->db->order_by('order', 'desc');
        $this->db->order_by('id', 'asc');
        $query = $this->db->get('points');
        if (count($query->result_array()) > 0) {
            return $query->result_array();
        } else {
            return false;
        }
    }

    public function get_points_for_front($sport_id) {
        $this->db->order_by('order', 'desc');
        $this->db->order_by('id', 'asc');
        $query = $this->db->get_where('points', array('sport_id' => $sport_id, 'active' => 'on'));
        if (count($query->result_array()) > 0) {
            return $query->result_array();
        } else {
            return false;
        }
    }

    public function get_points_for_pagintaion_admin($startFrom) {
        $this->db->order_by('order', 'desc');
        $this->db->order_by('id', 'asc');
        $query = $this->db->get('points', 50, $startFrom);
        if (count($query->result_array()) > 0) {
            return $query->result_array();
        } else {
            return false;
        }
    }

    public function get_points_for_pagination($sport_id, $startFrom) {

        $this->db->order_by('order', 'desc');
        $query = $this->db->get_where('points', array('active' => 'on', 'sport_id' => $sport_id), 10, $startFrom);
        if (count($query->result_array()) > 0) {
            return $query->result_array();
        } else {
            return false;
        }
    }

    public function get_searched_points_for_front($sport_id, $subway_name) {
        $Squery = $this->db->get_where('subways', array('name' => $subway_name));
        $subway = $Squery->row_array();
        $this->db->order_by('name', 'asc');
        $this->db->or_where("subway1_id = {$subway['id']}");
        $this->db->where('sport_id', $sport_id);
        $query = $this->db->get('points');
        return $query->result_array();
    }

    public function get_point_by_url_for_front($url) {
        $query = $this->db->get_where('points', array('url' => $url, 'active' => 'on'));
        if (count($query->row_array()) > 0) {
            return $query->row_array();
        } else {
            return false;
        }
    }

    public function get_subway_for_point_front($subway = null) {
        if ($subway) {
            $query = $this->db->get_where('subways', array('id' => $subway, 'active' => 'on'));
            if (count($query->row_array()) > 0) {
                return $query->row_array();
            } else {
                return false;
            }
        } else {
            return false;
        }
    }

    public function get_ordered_points($sport) {
        $this->db->order_by('order', 'desc');
        $query = $this->db->get_where('points', array('sport_id' => $sport));
        if (count($query->result_array()) > 0) {
            return $query->result_array();
        } else {
            return false;
        }
    }

    public function get_point_by_url($url) {
        if ($url) {
            $query = $this->db->get_where('points', array('url' => $url));
            if ($query) {
                return $query->row_array();
            } else {
                return false;
            }
        } else {
            return false;
        }
    }

    public function get_sport_for_point($id) {
        $query = $this->db->get_where('points', array('id' => $id));
        return $query->row_array();
    }

    public function get_images_for_point($id) {
        $query = $this->db->get_where('points_images', array('point_id' => $id));
        return $query->result_array();
    }

    public function get_halls_for_point($id) {
        $query = $this->db->get_where('points_halls', array('point_id' => $id));
        return $query->result_array();
    }

    public function get_halls_for_point_for_front($point_id) {
        $query = $this->db->get_where('points_halls', array('point_id' => $point_id));
        if ($query) {
            return $query->result_array();
        } else {
            return false;
        }
    }

    public function get_treners_for_point_for_front($point_id) {
        $query = $this->db->get_where('points_treners', array('point_id' => $point_id));
        if ($query) {
            return $query->result_array();
        } else {
            return false;
        }
    }

    public function get_images_for_point_for_front($point_id) {
        $query = $this->db->get_where('points_images', array('point_id' => $point_id));
        if ($query) {
            return $query->result_array();
        } else {
            return false;
        }
    }

    public function get_treners_for_point($id) {
        $query = $this->db->get_where('points_treners', array('point_id' => $id));
        return $query->result_array();
    }

    public function delete_images_for_point($id) {
        $this->db->delete('points_images', array('point_id' => $id));
    }

    public function delete_halls_for_point($id) {
        $this->db->delete('points_halls', array('point_id' => $id));
    }

    public function delete_treners_for_point($id) {
        $this->db->delete('points_treners', array('point_id' => $id));
    }

    public function set_point($image) {
        if ($this->input->post('payedf'))
            $payedf = $this->input->post('payedf');
        else
            $payedf = date('d.m.Y H:i');
        if ($this->input->post('payedt'))
            $payedt = $this->input->post('payedt');
        else
            $payedt = date('d.m.Y H:i');

        $data = array(
            'name' => $this->input->post('name'),
            'youtube' => $this->input->post('youtube'),
            'order' => 0,
            'header' => $this->input->post('header'),
            'url' => str_replace(array(')', '('), array('', ''), $this->input->post('url')),
            'graphite' => $this->input->post('graphite'),
            'image' => $image,
//            'price_list' => $pricelist,
            'sport_id' => $this->input->post('sport'),
            'subway1_id' => $this->input->post('subway1_id'),
            'subway2_id' => $this->input->post('subway2_id'),
            'time1' => $this->input->post('time1'),
            'time2' => $this->input->post('time2'),
            'contacts' => $this->input->post('contacts'),
            'phone' => $this->input->post('phone'),
            'email' => $this->input->post('email'),
            'admemail' => $this->input->post('admemail'),
            'site' => $this->input->post('site'),
            'title' => $this->input->post('title'),
            'desc' => $this->input->post('desc'),
            'keyw' => $this->input->post('keyw'),
            'text' => $this->input->post('text'),
            'active' => $this->input->post('active'),
            'payed' => $this->input->post('payed'),
            'payedf' => $payedf,
            'payedt' => $payedt,
            'price_month' => $this->input->post('price_month'),
            'price_6months' => $this->input->post('price_6months'),
            'price_year' => $this->input->post('price_year'),
            'coords' => $this->input->post('coords')
        );

        $this->db->insert('points', $data);
        return $this->db->insert_id();
    }

    public function delete_point($id) {
        $this->db->delete('points', array('id' => $id));
    }

    public function update_point($id, $image = null) {
        if (!$image) {
            $data = array(
                'name' => $this->input->post('name'),
                'youtube' => $this->input->post('youtube'),
                'url' => $this->input->post('url'),
                'title' => $this->input->post('title'),
                'desc' => $this->input->post('desc'),
                'keyw' => $this->input->post('keyw'),
                'contacts' => $this->input->post('contacts'),
                'phone' => $this->input->post('phone'),
                'email' => $this->input->post('email'),
                'admemail' => $this->input->post('admemail'),
                'site' => $this->input->post('site'),
                'text' => $this->input->post('text'),
                'subway1_id' => $this->input->post('subway1_id'),
                'subway2_id' => $this->input->post('subway2_id'),
                'time1' => $this->input->post('time1'),
                'time2' => $this->input->post('time2'),
                'sport_id' => $this->input->post('sport'),
                'active' => $this->input->post('active'),
                'payed' => $this->input->post('payed'),
                'payedf' => $this->input->post('payedf'),
                'payedt' => $this->input->post('payedt'),
                'graphite' => $this->input->post('graphite'),
                'price_month' => $this->input->post('price_month'),
                'price_6months' => $this->input->post('price_6months'),
                'price_year' => $this->input->post('price_year'),
                'coords' => $this->input->post('coords')
            );
            $this->db->where('id', $id);
            $this->db->update('points', $data);
        } else {
            $data = array(
                'name' => $this->input->post('name'),
                'youtube' => $this->input->post('youtube'),
                'url' => $this->input->post('url'),
                'title' => $this->input->post('title'),
                'desc' => $this->input->post('desc'),
                'keyw' => $this->input->post('keyw'),
                'image' => $image,
                'contacts' => $this->input->post('contacts'),
                'phone' => $this->input->post('phone'),
                'email' => $this->input->post('email'),
                'admemail' => $this->input->post('admemail'),
                'site' => $this->input->post('site'),
                'text' => $this->input->post('text'),
                'sport_id' => $this->input->post('sport'),
                'active' => $this->input->post('active'),
                'payed' => $this->input->post('payed'),
                'payedf' => $this->input->post('payedf'),
                'payedt' => $this->input->post('payedt'),
                'graphite' => $this->input->post('graphite'),
                'price_month' => $this->input->post('price_month'),
                'price_6months' => $this->input->post('price_6months'),
                'price_year' => $this->input->post('price_year'),
                'coords' => mb_substr(mb_substr($this->input->post('coords'), 1, mb_strlen($this->input->post('coords'), 'utf-8'), 'utf-8'), 0, -1)
            );

            $this->db->where('id', $id);
            $this->db->update('points', $data);
        }
    }

    public function delete_image($id) {
        $this->db->delete('points_images', array('id' => $id));
    }

    public function get_point_image($id) {
        $query = $this->db->get_where('points_images', array('id' => $id));
        return $query->row_array();
    }

    public function delete_trener($id) {
        $this->db->delete('points_treners', array('id' => $id));
    }

    public function get_trener_for_point($id) {
        $query = $this->db->get_where('points_treners', array('id' => $id));
        return $query->row_array();
    }

    public function delete_hall($id) {
        $this->db->delete('points_halls', array('id' => $id));
    }

    public function get_hall_for_point($id) {
        $query = $this->db->get_where('points_halls', array('id' => $id));
        return $query->row_array();
    }

    public function images_insert($image, $point_id) {
        $data = array(
            'image' => $image,
            'order' => 0,
            'point_id' => $point_id
        );

        return $this->db->insert('points_images', $data);
    }

    public function halls_insert($image, $point_id) {
        $data = array(
            'name' => '',
            'image' => $image,
            'description' => '',
            'order' => 0,
            'point_id' => $point_id
        );

        return $this->db->insert('points_halls', $data);
    }

    public function treners_insert($image, $point_id) {
        $data = array(
            'name' => '',
            'sname' => '',
            'image' => $image,
            'text' => '',
            'point_id' => $point_id
        );

        return $this->db->insert('points_treners', $data);
    }

    public function hall_data_save() {
        $hall_id = $this->input->post('hall_id');
        $hall_name = $this->input->post('hall_name');
        $hall_desc = $this->input->post('hall_desc');

        $data = array(
            'name' => $hall_name,
            'description' => $hall_desc,
            'order' => 0
        );

        $this->db->where('id', $hall_id);
        $this->db->update('points_halls', $data);
    }

    public function trener_data_save() {
        $trener_id = $this->input->post('trener_id');
        $trener_name = $this->input->post('trener_name');
        $trener_sname = $this->input->post('trener_sname');
        $trener_pph = $this->input->post('trener_pph');
        $trener_ppm = $this->input->post('trener_ppm');
        $trener_desc = $this->input->post('trener_desc');
        $trener_desc = nl2br($trener_desc);

        $data = array(
            'name' => $trener_name,
            'sname' => $trener_sname,
            'order' => 0,
            'pph' => $trener_pph,
            'ppm' => $trener_ppm,
            'text' => $trener_desc,
        );

        $this->db->where('id', $trener_id);
        $this->db->update('points_treners', $data);
    }

}
