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
        global $object;
        $object = 'videoblog';
        $data['title'] = 'Административная панель';
        $blog = $this->videoblog_model->get_blogs($id);
        $data['blog'] = $blog;
        if ($this->input->post('do') == 'videoblogEdit') {
            $this->form_validation->set_rules('name', 'Заголовок', 'required|trim|xss_clean');
            $this->form_validation->set_rules('youtube', 'YouTube', 'required|trim|xss_clean');
            $this->form_validation->set_rules('date', 'Дата публикации', 'trim|xss_clean');

            $this->form_validation->set_error_delimiters('<span class="label label-danger">', '</span>');

            if ($this->form_validation->run() == FALSE) {
                $this->load->view('admin/templates/metahead', $data);
                $this->load->view('admin/templates/navbar', $data);
                $this->load->view('admin/pages/settings/templates/left-nav', $data);
                $this->load->view('admin/pages/settings/videoblog/edit', $data);
                $this->load->view('admin/templates/footer', $data);
            } else {
                $this->videoblog_model->update_blog($id);
                $arr = array(
                    'error' => '<div class="alert alert-success" role="alert"><strong>Успех! </strong>Пост был успешно обновлен!</div>'
                );
                $this->session->set_userdata($arr);
                redirect('admin/settings/videoblog/edit/' . $blog['id']);
            }
        } else {
            $this->load->view('admin/templates/metahead', $data);
            $this->load->view('admin/templates/navbar', $data);
            $this->load->view('admin/pages/settings/templates/left-nav', $data);
            $this->load->view('admin/pages/settings/videoblog/edit', $data);
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
        if ($this->input->post('do') == 'videoblogAdd') {
            $this->form_validation->set_rules('name', 'Заголовок', 'required|trim|xss_clean');
            $this->form_validation->set_rules('youtube', 'YouTube', 'required|trim|xss_clean');
            $this->form_validation->set_rules('date', 'Дата публикации', 'trim|xss_clean');

            $this->form_validation->set_error_delimiters('<span class="label label-danger">', '</span>');

            if ($this->form_validation->run() == FALSE) {
                $this->load->view('admin/templates/metahead', $data);
                $this->load->view('admin/templates/navbar', $data);
                $this->load->view('admin/pages/settings/templates/left-nav', $data);
                $this->load->view('admin/pages/settings/videoblog/add', $data);
                $this->load->view('admin/templates/footer', $data);
            } else {
                $this->videoblog_model->set_blog();

                $arr = array(
                    'error' => '<div class="alert alert-success" role="alert"><strong>Успех! </strong>Пост был успешно добавлен!</div>'
                );
                $this->session->set_userdata($arr);
                redirect('admin/settings/videoblog/add');
            }
        } else {
            $this->load->view('admin/templates/metahead', $data);
            $this->load->view('admin/templates/navbar', $data);
            $this->load->view('admin/pages/settings/templates/left-nav', $data);
            $this->load->view('admin/pages/settings/videoblog/add', $data);
            $this->load->view('admin/templates/footer', $data);
        }
    }

    public function delete($id) {
        if (!$this->session->userdata('logged')) {
            redirect('admin/login');
        }
        $blog = $this->videoblog_model->get_blogs($id);
        if (count($blog) > 0) {
            $this->videoblog_model->delete_blog($id);
            redirect($this->agent->referrer());
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
