<?php

class Categories extends CI_Controller {

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

    public function view($page = 'categories') {

        if (!$this->session->userdata('logged')) {
            redirect('admin/login');
        }

        if (!file_exists(APPPATH . '/views/admin/pages/categories/' . $page . '.php')) {
            show_404();
        }

        $categories = $this->categories_model->get_categories();

        $data['title'] = 'Административная панель';

        $data['categories'] = $categories;
        $this->load->view('admin/templates/metahead', $data);
        $this->load->view('admin/templates/navbar', $data);
        $this->load->view('admin/pages/categories/' . $page, $data);
        $this->load->view('admin/templates/footer', $data);
    }

    public function up($id) {
        $this->categories_model->order_up($id);
    }

    public function down($id) {
        $this->categories_model->order_down($id);
    }

    public function add() {
        if (!$this->session->userdata('logged')) {
            redirect('admin/login');
        }

        $this->form_validation->set_rules('name', 'Название', 'trim|required|xss_clean');
        $this->form_validation->set_rules('h1', 'Заголовок', 'trim|required|xss_clean');
        $this->form_validation->set_rules('h2', 'Заголовок 2', 'trim|required|xss_clean');
        $this->form_validation->set_rules('url', 'ЧПУ', 'trim|required|callback_check_url');
        $this->form_validation->set_rules('title', 'Мета title', 'trim');
        $this->form_validation->set_rules('desc', 'Мета description', 'trim');
        $this->form_validation->set_rules('keyw', 'Мета keywords', 'trim');

        $data['title'] = 'Добавление категории';

        $this->form_validation->set_error_delimiters('<span class="label label-danger">', '</span>');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('admin/templates/metahead', $data);
            $this->load->view('admin/templates/navbar', $data);
            $this->load->view('admin/pages/categories/add', $data);
            $this->load->view('admin/templates/footer', $data);
        } else {
            $config['upload_path'] = './images/categories';
            $config['allowed_types'] = 'gif|jpg|png|jpeg|JPG|JPEG';
            $config['max_size'] = '5120';
            $config['encrypt_name'] = true;

            $this->load->library('upload', $config);

            if (!$this->upload->do_upload('image')) {
                $this->session->set_userdata('error', $this->upload->display_errors('<span class="label label-danger">', '</span>'));
                redirect('admin/categories/add');
            } else {
                $image_data = $this->upload->data();
            }

            if (!$this->upload->do_upload('image2')) {
                $this->session->set_userdata('error', $this->upload->display_errors('<span class="label label-danger">', '</span>'));
                redirect('admin/categories/add');
            } else {
                $image2_data = $this->upload->data();
            }

            if (!$this->upload->do_upload('image3')) {
                $this->session->set_userdata('error', $this->upload->display_errors('<span class="label label-danger">', '</span>'));
                redirect('admin/categories/add');
            } else {
                $image3_data = $this->upload->data();
            }
            $this->categories_model->set_category($image_data['file_name'], $image2_data['file_name'], $image3_data['file_name']);
            $arr = array(
                'error' => '<div class="alert alert-success" role="alert"><strong>Успех! </strong>Категория была успешно добавлена!</div>'
            );

            $this->session->set_userdata($arr);
            redirect('admin/categories/add');
        }
    }

    public function check_url($url) {
        if ($this->categories_model->get_category_by_url($url)) {
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
        $data['title'] = 'Редактирование категории';
        $category = $this->categories_model->get_categories($id);
        foreach ($category as $k => $v) {
            $category[$k] = htmlspecialchars(stripslashes($v));
        }
        $data['category'] = $category;
        if ($this->input->post('do') == 'categoryEdit') {
            $this->form_validation->set_rules('name', 'Название', 'required');
            $this->form_validation->set_rules('url', 'ЧПУ', 'required');
            $this->form_validation->set_rules('h1', 'Заголовок', 'trim|required|xss_clean');
            $this->form_validation->set_rules('h2', 'Заголовок 2', 'trim|required|xss_clean');
            $this->form_validation->set_rules('title', 'Мета title', 'trim');
            $this->form_validation->set_rules('desc', 'Мета description', 'trim');
            $this->form_validation->set_rules('keyw', 'Мета keywords', 'trim');

            $this->form_validation->set_error_delimiters('<span class="label label-danger">', '</span>');

            if ($this->form_validation->run() == FALSE) {
                $this->load->view('admin/templates/metahead', $data);
                $this->load->view('admin/templates/navbar', $data);
                $this->load->view('admin/pages/categories/edit', $data);
                $this->load->view('admin/templates/footer', $data);
            } else {
                $config['upload_path'] = './images/categories';
                $config['allowed_types'] = 'gif|jpg|png|jpeg|JPG|JPEG';
                $config['max_size'] = '5120';
                $config['encrypt_name'] = true;

                $this->load->library('upload', $config);

                $category = $this->categories_model->get_categories($id);

                if (!$_FILES['image']['name'] && !$_FILES['image2']['name'] && !$_FILES['image3']['name']) {
                    $this->categories_model->update_category($id);
                    $arr = array(
                        'error' => '<div class="alert alert-success" role="alert"><strong>Успех! </strong>Категория была успешно изменена!</div>'
                    );
                    $this->session->set_userdata($arr);
                    redirect('admin/categories/edit/' . $category['id']);
                } else {
                    $flag = false;
                    if ($_FILES['image']['name']) {
                        if (!$this->upload->do_upload('image')) {
                            $this->session->set_userdata('error', $this->upload->display_errors('<span class="label label-danger">', '</span>'));
                            redirect('admin/categories/add');
                        } else {
                            $flag = true;
                            if (file_exists('images/categories/' . $category['image'])) {
                                unlink('images/categories/' . $category['image']);
                            }
                            $image_data = $this->upload->data();
                            $image_data = $image_data['file_name'];
                        }
                    } else {
                        $image_data = $category['image'];
                    }
                    if ($_FILES['image2']['name']) {
                        if ($_FILES['image2']['name']) {
                            if (!$this->upload->do_upload('image2')) {
                                $this->session->set_userdata('error', $this->upload->display_errors('<span class="label label-danger">', '</span>'));
                                redirect('admin/categories/add');
                            } else {
                                $flag = true;
                                if (file_exists('images/categories/' . $category['image2'])) {
                                    unlink('images/categories/' . $category['image2']);
                                }
                                $image2_data = $this->upload->data();
                                $image2_data = $image2_data['file_name'];
                            }
                        }
                    } else {
                        $image2_data = $category['image2'];
                    }
                    if ($_FILES['image3']['name']) {
                        if ($_FILES['image3']['name']) {
                            if (!$this->upload->do_upload('image3')) {
                                $this->session->set_userdata('error', $this->upload->display_errors('<span class="label label-danger">', '</span>'));
                                redirect('admin/categories/add');
                            } else {
                                $flag = true;
                                if (file_exists('images/categories/' . $category['image3'])) {
                                    unlink('images/categories/' . $category['image3']);
                                }
                                $image3_data = $this->upload->data();
                                $image3_data = $image3_data['file_name'];
                            }
                        }
                    } else {
                        $image3_data = $category['image3'];
                    }

                    if ($flag) {
                        $arr = array(
                            'error' => '<div class="alert alert-success" role="alert"><strong>Успех! </strong>Категория была успешно изменена!</div>'
                        );
                        $this->session->set_userdata($arr);
                        $this->categories_model->update_category($id, $image_data, $image2_data, $image3_data);
                        redirect('admin/categories/edit/' . $category['id']);
                    }
                }
            }
        } else {
            if (count($category) > 0) {
                $this->load->view('admin/templates/metahead', $data);
                $this->load->view('admin/templates/navbar', $data);
                $this->load->view('admin/pages/categories/edit', $data);
                $this->load->view('admin/templates/footer', $data);
            } else {
                $error['error'] = '<div class="alert alert-danger" role="alert"><strong>Oops! </strong>Такой категории не найдено!</div>';
                $this->load->view('admin/templates/metahead', $data);
                $this->load->view('admin/templates/navbar', $data);
                $this->load->view('admin/pages/categories/error_page', $error);
                $this->load->view('admin/templates/footer', $data);
            }
        }
    }

    public function delete($id) {
        if (!$this->session->userdata('logged')) {
            redirect('admin/login');
        }
        $category = $this->categories_model->get_categories($id);
        if (count($category) > 0) {
            if (file_exists('images/categories/' . $category['image'])) {
                unlink('images/categories/' . $category['image']);
            }
            if (file_exists('images/categories/' . $category['image2'])) {
                unlink('images/categories/' . $category['image2']);
            }
            if (file_exists('images/categories/' . $category['image3'])) {
                unlink('images/categories/' . $category['image3']);
            }
            $this->categories_model->delete_category($id);
            redirect('admin/categories');
        } else {
            die('Такой категории не существует!');
        }
    }

}
