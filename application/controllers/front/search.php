<?php

mb_internal_encoding("UTF-8");

function mb_ucfirst($text) {
    return mb_strtoupper(mb_substr($text, 0, 1)) . mb_substr($text, 1);
}

class Search extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->form_validation->set_message('required', 'Поле "%s" обязательно для заполения');
        $this->form_validation->set_message('valid_email', 'Поле "%s" должно содержать валидный E-mail адрес');
    }

    public function index() {
        if (!file_exists(APPPATH . '/views/front/pages/search.php')) {
            $this->output->set_status_header('404');
            $this->load->view('front/pages/404', $data);
        }
        $categories = $this->categories_model->get_categories_for_front();
        $data['title'] = 'Поиск по сайту Jeisport';
        $data['categories'] = $categories;

        $this->load->view('front/templates/metahead', $data);
        $this->load->view('front/templates/header', $data);
        $this->load->view('front/templates/sub-menu', $data);
        $this->load->view('front/pages/search', $data);
        $this->load->view('front/templates/footer', $data);
    }

    public function query($q) {
        $q = urldecode($q);
        $categories = $this->categories_model->get_categories_for_front();
        $data['title'] = 'Результаты поиска: ' . urldecode($q);
        $data['categories'] = $categories;

        $res = $this->search_model->get($q);
        if ($res) {
            $data['res'] = $res;
        }

        header("Content-type:text/html;charset=utf-8");
        
        $this->load->view('front/templates/metahead', $data);
        $this->load->view('front/templates/header', $data);
        $this->load->view('front/templates/sub-menu', $data);
        $this->load->view('front/pages/search', $data);
        $this->load->view('front/templates/footer', $data);
    }

}
