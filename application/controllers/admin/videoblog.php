<?php

class Videoblog extends CI_Controller {

    public function __construct() {
        parent::__construct();
    }

    public function view($page = 'settings') {
        if (!$this->session->userdata('logged')) {
            redirect('admin/login');
        }

        if (!file_exists(APPPATH . '/views/admin/pages/settings/' . $page . '.php')) {
            show_404();
        }
        $data['title'] = 'Административная панель';
        $this->load->view('admin/templates/metahead', $data);
        $this->load->view('admin/templates/navbar', $data);
        $this->load->view('admin/pages/settings/templates/left-nav', $data);
        $this->load->view('admin/pages/settings/' . $page, $data);
        $this->load->view('admin/templates/footer', $data);
    }

    public function page($page = 'videoblog') {
        if (!$this->session->userdata('logged')) {
            redirect('admin/login');
        }

        $data['videoblogs'] = $this->videoblog_model->get_blogs();
        $data['title'] = 'Блог - административная панель';
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
        global $object; $object = 'blog';
        $data['title'] = 'Административная панель';
        $blog = $this->videoblog_model->get_blogs($id);
        $data['blog'] = $blog;
        $tags = $this->main_model->get_tags($id);
        $data['tags'] = $tags;
        if ($this->input->post('do') == 'blogEdit') {
            $this->form_validation->set_rules('name', 'Заголовок', 'required|trim|xss_clean');
            $this->form_validation->set_rules('title', 'Мета title', 'trim|xss_clean');
            $this->form_validation->set_rules('desc', 'Мета description', 'trim|xss_clean');
            $this->form_validation->set_rules('keyw', 'Мета keywords', 'trim|xss_clean');
            $this->form_validation->set_rules('date', 'Дата публикации', 'trim|xss_clean');

            $this->form_validation->set_error_delimiters('<span class="label label-danger">', '</span>');

            if ($this->form_validation->run() == FALSE) {
                $this->load->view('admin/templates/metahead', $data);
                $this->load->view('admin/templates/navbar', $data);
                $this->load->view('admin/pages/settings/templates/left-nav', $data);
                $this->load->view('admin/pages/settings/blog/edit', $data);
                $this->load->view('admin/templates/footer', $data);
            } else {
                $config['upload_path'] = './images/blog';
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
                    $this->videoblog_model->update_blog($id);
                    $arr = array(
                        'error' => '<div class="alert alert-success" role="alert"><strong>Успех! </strong>Пост был успешно обновлен!</div>'
                    );
                    $this->session->set_userdata($arr);
                    redirect('admin/settings/blog/edit/' . $blog['id']);
                } else {
                    if (!$this->upload->do_upload('image')) {
                        $this->session->set_userdata('error', $this->upload->display_errors('<span class="label label-danger">', '</span>'));
                        redirect('admin/settings/blog/edit/' . $blog['id']);
                    } else {
                        $blog = $this->videoblog_model->get_blogs($id);
                        if (file_exists('images/blog/' . $blog['image'])) {
                            unlink('images/blog/' . $blog['image']);
                            if ($this->input->post('tags')) {
                                foreach ($this->input->post('tags') as $tag) {
                                    $this->main_model->set_tag($tag, $id, $object);
                                }
                            }
                            $image_data = $this->upload->data();
                            $this->videoblog_model->update_blog($id, $image_data['file_name']);
                            $arr = array(
                                'error' => '<div class="alert alert-success" role="alert"><strong>Успех! </strong>Пост был успешно обновлен!</div>'
                            );
                            $this->session->set_userdata($arr);
                            redirect('admin/settings/blog/edit/' . $blog['id']);
                        } else {
                            if ($this->input->post('tags')) {
                                foreach ($this->input->post('tags') as $tag) {
                                    $this->videoblog_model->set_tag($tag, $id, $object);
                                }
                            }
                            $image_data = $this->upload->data();
                            $this->videoblog_model->update_blog($id, $image_data['file_name']);
                            $arr = array(
                                'error' => '<div class="alert alert-success" role="alert"><strong>Успех! </strong>Пост был успешно обновлен!</div>'
                            );
                            $this->session->set_userdata($arr);
                            redirect('admin/settings/blog/edit/' . $blog['id']);
                        }
                    }
                }
            }
        } else {
            $this->load->view('admin/templates/metahead', $data);
            $this->load->view('admin/templates/navbar', $data);
            $this->load->view('admin/pages/settings/templates/left-nav', $data);
            $this->load->view('admin/pages/settings/blog/edit', $data);
            $this->load->view('admin/templates/footer', $data);
        }
    }

    public function check_url($url) {
        if ($this->videoblog_model->get_blog_by_url($url)) {
            $this->form_validation->set_message('check_url', 'Такой ЧПУ уже занят!');
            return FALSE;
        } else {
            return TRUE;
        }
    }

    public function add() {
        if (!$this->session->userdata('logged')) {
            redirect('admin/login');
        }
        $data['title'] = 'Административная панель';
        if ($this->input->post('do') == 'blogAdd') {
            $this->form_validation->set_rules('name', 'Заголовок', 'required|trim|xss_clean');
            $this->form_validation->set_rules('url', 'ЧПУ', 'required|trim|xss_clean|callback_check_url');
            $this->form_validation->set_rules('title', 'Мета title', 'trim|trim|xss_clean');
            $this->form_validation->set_rules('desc', 'Мета description', 'trim|xss_clean');
            $this->form_validation->set_rules('keyw', 'Мета keywords', 'trim|xss_clean');
            $this->form_validation->set_rules('date', 'Дата публикации', 'trim|xss_clean');

            $this->form_validation->set_error_delimiters('<span class="label label-danger">', '</span>');

            if ($this->form_validation->run() == FALSE) {
                $this->load->view('admin/templates/metahead', $data);
                $this->load->view('admin/templates/navbar', $data);
                $this->load->view('admin/pages/settings/templates/left-nav', $data);
                $this->load->view('admin/pages/settings/blog/add', $data);
                $this->load->view('admin/templates/footer', $data);
            } else {
                $config['upload_path'] = './images/blog';
                $config['allowed_types'] = 'gif|jpg|png|jpeg|JPG|JPEG';
                $config['max_size'] = '5120';
                $config['encrypt_name'] = true;

                $this->load->library('upload', $config);

                $image_data = $this->upload->data();
                if (!$this->upload->do_upload('image')) {

                    $this->session->set_userdata('error', $this->upload->display_errors('<span class="label label-danger">', '</span>'));
                    redirect('admin/settings/blog/add');
                } else {
                    $image_data = $this->upload->data();
                    $this->videoblog_model->set_blog($image_data['file_name']);

                    $arr = array(
                        'error' => '<div class="alert alert-success" role="alert"><strong>Успех! </strong>Пост был успешно добавлен!</div>'
                    );
                    $this->session->set_userdata($arr);
                    redirect('admin/settings/blog/add');
                }
            }
        } else {
            $this->load->view('admin/templates/metahead', $data);
            $this->load->view('admin/templates/navbar', $data);
            $this->load->view('admin/pages/settings/templates/left-nav', $data);
            $this->load->view('admin/pages/settings/blog/add', $data);
            $this->load->view('admin/templates/footer', $data);
        }
    }

    public function delete($id) {
        if (!$this->session->userdata('logged')) {
            redirect('admin/login');
        }
        $blog = $this->videoblog_model->get_blogs($id);
        if (count($blog) > 0) {
            if (file_exists('images/blog/' . $blog['image'])) {
                $this->videoblog_model->delete_blog($id);
                unlink('images/blog/' . $blog['image']);
                redirect($this->agent->referrer());
            } else {
                $this->videoblog_model->delete_blog($id);
                redirect($this->agent->referrer());
            }
        } else {
            die('Поста не существует!');
        }
    }

    public function up($id) {
        $this->videoblog_model->order_up($id);
    }

    public function down($id) {
        $this->videoblog_model->order_down($id);
    }

}
