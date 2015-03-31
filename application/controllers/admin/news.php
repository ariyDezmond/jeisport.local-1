<?php

class News extends CI_Controller {

    public function __construct() {
        parent::__construct();
    }

    public function page($page = 'news') {
        if (!$this->session->userdata('logged')) {
            redirect('admin/login');
        }

        $data['news'] = $this->news_model->get_news();
        $data['title'] = 'Административная панель';
        $this->load->view('admin/templates/metahead', $data);
        $this->load->view('admin/templates/navbar', $data);
        $this->load->view('admin/pages/settings/templates/left-nav', $data);
        $this->load->view('admin/pages/settings/' . $page . '/' . $page, $data);
        $this->load->view('admin/templates/footer', $data);
    }

    public function edit($id) {
        if (!$this->session->userdata('logged')) {
            redirect('admin/login');
        }
        global $object;
        $object = 'news';
        $data['title'] = 'Административная панель';
        $new = $this->news_model->get_news($id);
        $data['new'] = $new;
        $tags = $this->main_model->get_tags($id, $object);
        $data['tags'] = $tags;

        $newcategories = $this->newscategories_model->get_newscategories_for_new();
        $data['newcategories'] = $newcategories;

        if ($this->input->post('do') == 'newEdit') {
            $this->form_validation->set_rules('name', 'Заголовок', 'required|trim|xss_clean');
            $this->form_validation->set_rules('category', 'Категория', 'trim|xss_clean');
            $this->form_validation->set_rules('title', 'Мета title', 'trim|xss_clean');
            $this->form_validation->set_rules('desc', 'Мета description', 'trim|xss_clean');
            $this->form_validation->set_rules('keyw', 'Мета keywords', 'trim|xss_clean');
            $this->form_validation->set_rules('date', 'Дата публикации', 'trim|xss_clean');

            $this->form_validation->set_error_delimiters('<span class="label label-danger">', '</span>');

            if ($this->form_validation->run() == FALSE) {
                $this->load->view('admin/templates/metahead', $data);
                $this->load->view('admin/templates/navbar', $data);
                $this->load->view('admin/pages/settings/templates/left-nav', $data);
                $this->load->view('admin/pages/settings/news/edit', $data);
                $this->load->view('admin/templates/footer', $data);
            } else {
                $config['upload_path'] = './images/news';
                $config['allowed_types'] = 'gif|jpg|png|jpeg|JPG|JPEG';
                $config['max_size'] = '5120';
                $config['encrypt_name'] = true;

                $this->load->library('upload', $config);

                $image_data = $this->upload->data();
                if ($_FILES['image']['name'] == '') {
                    if ($this->input->post('tags')) {
                        foreach ($this->input->post('tags') as $tag) {
                            $this->main_model->set_tag($tag, $id, $object);
                        }
                    }
                    $this->news_model->update_new($id);
                    $arr = array(
                        'error' => '<div class="alert alert-success" role="alert"><strong>Успех! </strong>Новость была успешно обновлена!</div>'
                    );
                    $this->session->set_userdata($arr);
                    redirect('admin/settings/news/edit/' . $new['id']);
                } else {
                    if (!$this->upload->do_upload('image')) {
                        $this->session->set_userdata('error', $this->upload->display_errors('<span class="label label-danger">', '</span>'));
                        redirect('admin/settings/news/edit/' . $new['id']);
                    } else {
                        $new = $this->news_model->get_news($id);
                        if (file_exists('images/news/' . $new['image'])) {
                            unlink('images/news/' . $new['image']);
                            if ($this->input->post('tags')) {
                                foreach ($this->input->post('tags') as $tag) {
                                    $this->main_model->set_tag($tag, $id, $object);
                                }
                            }
                            $image_data = $this->upload->data();
                            $this->news_model->update_new($id, $image_data['file_name']);
                            $arr = array(
                                'error' => '<div class="alert alert-success" role="alert"><strong>Успех! </strong>Новость была успешно обновлена!</div>'
                            );
                            $this->session->set_userdata($arr);
                            redirect('admin/settings/news/edit/' . $new['id']);
                        } else {
                            if ($this->input->post('tags')) {
                                foreach ($this->input->post('tags') as $tag) {
                                    $this->main_model->set_tag($tag, $id, $object);
                                }
                            }
                            $image_data = $this->upload->data();
                            $this->news_model->update_new($id, $image_data['file_name']);
                            $arr = array(
                                'error' => '<div class="alert alert-success" role="alert"><strong>Успех! </strong>Новость была успешно обновлена!</div>'
                            );
                            $this->session->set_userdata($arr);
                            redirect('admin/settings/news/edit/' . $new['id']);
                        }
                    }
                }
            }
        } else {
            $this->load->view('admin/templates/metahead', $data);
            $this->load->view('admin/templates/navbar', $data);
            $this->load->view('admin/pages/settings/templates/left-nav', $data);
            $this->load->view('admin/pages/settings/news/edit', $data);
            $this->load->view('admin/templates/footer', $data);
        }
    }

    public function add() {
        if (!$this->session->userdata('logged')) {
            redirect('admin/login');
        }
        $data['title'] = 'Административная панель';
        $newcategories = $this->newscategories_model->get_newscategories_for_new();
        $data['newcategories'] = $newcategories;

        if ($this->input->post('do') == 'newAdd') {
            $this->form_validation->set_rules('name', 'Заголовок', 'required|trim|xss_clean');
            $this->form_validation->set_rules('category', 'Категория', 'trim|xss_clean');
            $this->form_validation->set_rules('url', 'ЧПУ', 'required|trim|xss_clean|callback_check_url');
            $this->form_validation->set_rules('title', 'Мета title', 'trim|xss_clean');
            $this->form_validation->set_rules('desc', 'Мета description', 'trim|xss_clean');
            $this->form_validation->set_rules('keyw', 'Мета keywords', 'trim|xss_clean');
            $this->form_validation->set_rules('date', 'Дата публикации', 'trim|xss_clean');

            $this->form_validation->set_error_delimiters('<span class="label label-danger">', '</span>');

            if ($this->form_validation->run() == FALSE) {
                $this->load->view('admin/templates/metahead', $data);
                $this->load->view('admin/templates/navbar', $data);
                $this->load->view('admin/pages/settings/templates/left-nav', $data);
                $this->load->view('admin/pages/settings/news/add', $data);
                $this->load->view('admin/templates/footer', $data);
            } else {
                $config['upload_path'] = './images/news';
                $config['allowed_types'] = 'gif|jpg|png|jpeg|JPG|JPEG';
                $config['max_size'] = '5120';
                $config['encrypt_name'] = true;

                $this->load->library('upload', $config);

                $image_data = $this->upload->data();
                if (!$this->upload->do_upload('image')) {

                    $this->session->set_userdata('error', $this->upload->display_errors('<span class="label label-danger">', '</span>'));
                    redirect('admin/settings/news/add');
                } else {
                    $image_data = $this->upload->data();
                    $this->news_model->set_new($image_data['file_name']);

                    $arr = array(
                        'error' => '<div class="alert alert-success" role="alert"><strong>Успех! </strong>Новость успешно добавлена!</div>'
                    );
                    $this->session->set_userdata($arr);
                    redirect('admin/settings/news/add');
                }
            }
        } else {
            $this->load->view('admin/templates/metahead', $data);
            $this->load->view('admin/templates/navbar', $data);
            $this->load->view('admin/pages/settings/templates/left-nav', $data);
            $this->load->view('admin/pages/settings/news/add', $data);
            $this->load->view('admin/templates/footer', $data);
        }
    }

    public function check_url($url) {
        if ($this->news_model->get_new_by_url($url)) {
            $this->form_validation->set_message('check_url', 'Такой ЧПУ уже занят!');
            return FALSE;
        } else {
            return TRUE;
        }
    }

    public function delete($id) {
        if (!$this->session->userdata('logged')) {
            redirect('admin/login');
        }
        $new = $this->news_model->get_news($id);
        if (count($new) > 0) {
            if (file_exists('images/news/' . $new['image'])) {
                $this->news_model->delete_new($id);
                unlink('images/news/' . $new['image']);
                redirect($this->agent->referrer());
            } else {
                $this->news_model->delete_new($id);
                redirect($this->agent->referrer());
            }
        } else {
            die('Новости не существует!');
        }
    }

    public function up($id) {
        $this->news_model->order_up($id);
    }

    public function down($id) {
        $this->news_model->order_down($id);
    }

}
