<?php

class Sports extends CI_Controller {

    public function __construct() {
        parent::__construct();
    }

    public function index() {
        if (!$this->session->userdata('logged')) {
            redirect('admin/login');
        } else {
            redirect('admin/main');
        }
    }

    public function view($page = 'sports') {
        if (!$this->session->userdata('logged')) {
            redirect('admin/login');
        }

        if (!file_exists(APPPATH . '/views/admin/pages/sports/' . $page . '.php')) {
            show_404();
        }
        $sports = $this->sports_model->get_sports();

        $data['title'] = 'Административная панель';
        $data['sports'] = $sports;
        $data['categories'] = $this->categories_model->get_categories();
        $data['cat'] = '';

        $this->load->view('admin/templates/metahead', $data);
        $this->load->view('admin/templates/navbar', $data);
        $this->load->view('admin/pages/sports/' . $page, $data);
        $this->load->view('admin/templates/footer', $data);
    }

    public function up($id) {
        $this->sports_model->order_up($id);
    }

    public function down($id) {
        $this->sports_model->order_down($id);
    }

    public function add() {
        if (!$this->session->userdata('logged')) {
            redirect('admin/login');
        }

        if (!$this->categories_model->get_categories()) {
            redirect('admin/categories');
        }

        $this->form_validation->set_rules('name', 'Название', 'trim|required|xss_clean');
        $this->form_validation->set_rules('url', 'ЧПУ', 'trim|xss_clean|required|callback_check_url');
        $this->form_validation->set_rules('title', 'Мета title', 'trim|xss_clean');
        $this->form_validation->set_rules('desc', 'Мета description', 'trim|xss_clean');
        $this->form_validation->set_rules('keyw', 'Мета keywords', 'trim|xss_clean');

        $data['title'] = 'Добавление вида спорта';

        $this->form_validation->set_error_delimiters('<span class="label label-danger">', '</span>');

        if ($this->form_validation->run() == FALSE) {
            $categories = $this->categories_model->get_categories();
            $data['categories'] = $categories;
            $this->load->view('admin/templates/metahead', $data);
            $this->load->view('admin/templates/navbar', $data);
            $this->load->view('admin/pages/sports/add', $data);
            $this->load->view('admin/templates/footer', $data);
        } else {
            $config['upload_path'] = './images/sports';
            $config['allowed_types'] = 'gif|jpg|png|jpeg|JPG|JPEG';
            $config['max_size'] = '5120';
            $config['encrypt_name'] = true;

            $this->load->library('upload', $config);

            if (!$this->upload->do_upload('image')) {

                $this->session->set_userdata('error', $this->upload->display_errors('<span class="label label-danger">', '</span>'));
                redirect('admin/sports/add');
            } else {
                $image_data = $this->upload->data();
                $this->sports_model->set_sport($image_data['file_name']);

                $arr = array(
                    'error' => '<div class="alert alert-success" role="alert"><strong>Успех! </strong>Вид спорта был успешно добавлен!</div>'
                );
                $this->session->set_userdata($arr);
                redirect('admin/sports/add');
            }
        }
    }

    public function check_url($url) {
        if ($this->sports_model->get_sport_by_url($url)) {
            $this->form_validation->set_message('check_url', 'Такой ЧПУ уже занят!');
            return FALSE;
        } else {
            return TRUE;
        }
    }

    public function edit($id) {
        if (!$this->session->userdata('logged')) {
            redirect('admin/login');
        }
        $data['title'] = 'Редактирование вида спорта';
        $sport = $this->sports_model->get_sports($id);
        foreach ($sport as $k => $v) {
            $sport[$k] = htmlspecialchars(stripslashes($v));
        }
        $data['sport'] = $sport;
        if ($this->input->post('do') == 'sportEdit') {
            $this->form_validation->set_rules('name', 'Название', 'required|trim|xss_clean');
            $this->form_validation->set_rules('url', 'ЧПУ', 'required|trim|xss_clean');
            $this->form_validation->set_rules('title', 'Мета title', 'trim|xss_clean');
            $this->form_validation->set_rules('desc', 'Мета description', 'trim|xss_clean');
            $this->form_validation->set_rules('keyw', 'Мета keywords', 'trim|xss_clean');

            $this->form_validation->set_error_delimiters('<span class="label label-danger">', '</span>');

            if ($this->form_validation->run() == FALSE) {
                $categories = $this->categories_model->get_categories();
                foreach ($categories as $category) {
                    $arr[$category['id']] = $category['name'];
                }
                $selected = $this->sports_model->get_category_for_sport($id);
                $data['selected'] = $selected['category_id'];

                $data['categories'] = $arr;
                $this->load->view('admin/templates/metahead', $data);
                $this->load->view('admin/templates/navbar', $data);
                $this->load->view('admin/pages/sports/edit', $data);
                $this->load->view('admin/templates/footer', $data);
            } else {
                $config['upload_path'] = './images/sports';
                $config['allowed_types'] = 'gif|jpg|png|jpeg|JPG|JPEG';
                $config['max_size'] = '5120';
                $config['encrypt_name'] = true;

                $this->load->library('upload', $config);

                $image_data = $this->upload->data();
                if ($_FILES['image']['name'] == '') {
                    $this->sports_model->update_sport($id);
                    $arr = array(
                        'error' => '<div class="alert alert-success" role="alert"><strong>Успех! </strong>Вид спорта был успешно изменен!</div>'
                    );
                    $this->session->set_userdata($arr);
                    redirect('admin/sports/edit/' . $sport['id']);
                } else {
                    if (!$this->upload->do_upload('image')) {
                        $this->session->set_userdata('error', $this->upload->display_errors('<span class="label label-danger">', '</span>'));
                        redirect('admin/sports/edit/' . $sport['id']);
                    } else {
                        $category = $this->sports_model->get_sports($id);
                        if (file_exists('images/sports/' . $sport['image'])) {
                            unlink('images/sports/' . $sport['image']);
                            $image_data = $this->upload->data();
                            $this->sports_model->update_sport($id, $image_data['file_name']);
                            $arr = array(
                                'error' => '<div class="alert alert-success" role="alert"><strong>Успех! </strong>Вид спорта был успешно изменен!</div>'
                            );
                            $this->session->set_userdata($arr);
                            redirect('admin/sports/edit/' . $sport['id']);
                        }
                    }
                }
            }
        } else {
            if (count($sport) > 0) {
                $categories = $this->categories_model->get_categories();
                foreach ($categories as $category) {
                    $arr[$category['id']] = $category['name'];
                }
                $selected = $this->sports_model->get_category_for_sport($id);
                $data['selected'] = $selected['category_id'];

                $data['categories'] = $arr;
                $this->load->view('admin/templates/metahead', $data);
                $this->load->view('admin/templates/navbar', $data);
                $this->load->view('admin/pages/sports/edit', $data);
                $this->load->view('admin/templates/footer', $data);
            } else {
                $error['error'] = '<div class="alert alert-danger" role="alert"><strong>Oops! </strong>Такого вида спорта не найдено!</div>';
                $this->load->view('admin/templates/metahead', $data);
                $this->load->view('admin/templates/navbar', $data);
                $this->load->view('admin/pages/sports/error_page', $error);
                $this->load->view('admin/templates/footer', $data);
            }
        }
    }

    public function delete($id) {
        if (!$this->session->userdata('logged')) {
            redirect('admin/login');
        }
        $sport = $this->sports_model->get_sports($id);
        if (count($sport) > 0) {
            if (file_exists('images/sports/' . $sport['image'])) {
                $this->sports_model->delete_sport($id);
                unlink('images/sports/' . $sport['image']);
                redirect($this->agent->referrer());
            } else {
                $this->sports_model->delete_sport($id);
                redirect($this->agent->referrer());
            }
        } else {
            die('Такого вида спорта не существует!');
        }
    }

    public function order($category) {
        if (!$this->session->userdata('logged')) {
            redirect('admin/login');
        }
        if ($category == 'all') {
            redirect('admin/sports');
        }
        $sports = $this->sports_model->get_ordered_sports($category);

        $data['title'] = 'Административная панель';
        $data['sports'] = $sports;
        $data['cat'] = $category;
        $data['categories'] = $this->categories_model->get_categories();

        $this->load->view('admin/templates/metahead', $data);
        $this->load->view('admin/templates/navbar', $data);
        $this->load->view('admin/pages/sports/sports', $data);
        $this->load->view('admin/templates/footer', $data);
    }

}
