<?php

class Newscategories extends CI_Controller {

    public function __construct() {
        parent::__construct();
    }

    public function page($page = 'newscategories') {
        if (!$this->session->userdata('logged')) {
            redirect('admin/login');
        }

        $data['ncategories'] = $this->newscategories_model->get_newscategories();
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
        $data['title'] = 'Административная панель';
        $newcategory = $this->newscategories_model->get_newscategories($id);
        $data['newcategory'] = $newcategory;
        if ($this->input->post('do') == 'newcategoryEdit') {
            $this->form_validation->set_rules('name', 'Заголовок', 'required|trim|xss_clean');

            $this->form_validation->set_error_delimiters('<span class="label label-danger">', '</span>');

            if ($this->form_validation->run() == FALSE) {
                $this->load->view('admin/templates/metahead', $data);
                $this->load->view('admin/templates/navbar', $data);
                $this->load->view('admin/pages/settings/templates/left-nav', $data);
                $this->load->view('admin/pages/settings/newscategories/edit', $data);
                $this->load->view('admin/templates/footer', $data);
            } else {
                $this->newscategories_model->update_newcategory($id);
                $arr = array(
                    'error' => '<div class="alert alert-success" role="alert"><strong>Успех! </strong>Категория новости была успешно обновлена!</div>'
                );
                $this->session->set_userdata($arr);
                redirect('admin/settings/news-categories/edit/' . $newcategory['id']);
            }
        } else {
            $this->load->view('admin/templates/metahead', $data);
            $this->load->view('admin/templates/navbar', $data);
            $this->load->view('admin/pages/settings/templates/left-nav', $data);
            $this->load->view('admin/pages/settings/newscategories/edit', $data);
            $this->load->view('admin/templates/footer', $data);
        }
    }

    public function add() {
        if (!$this->session->userdata('logged')) {
            redirect('admin/login');
        }
        $data['title'] = 'Административная панель';
        if ($this->input->post('do') == 'newcategoryAdd') {
            $this->form_validation->set_rules('name', 'Заголовок', 'required|trim|xss_clean');

            $this->form_validation->set_error_delimiters('<span class="label label-danger">', '</span>');

            if ($this->form_validation->run() == FALSE) {
                $this->load->view('admin/templates/metahead', $data);
                $this->load->view('admin/templates/navbar', $data);
                $this->load->view('admin/pages/settings/templates/left-nav', $data);
                $this->load->view('admin/pages/settings/newscategories/add', $data);
                $this->load->view('admin/templates/footer', $data);
            } else {
                $this->newscategories_model->set_newcategory();
                $arr = array(
                    'error' => '<div class="alert alert-success" role="alert"><strong>Успех! </strong>Категория новости успешно добавлена!</div>'
                );
                $this->session->set_userdata($arr);
                redirect('admin/settings/news-categories/add');
            }
        } else {
            $this->load->view('admin/templates/metahead', $data);
            $this->load->view('admin/templates/navbar', $data);
            $this->load->view('admin/pages/settings/templates/left-nav', $data);
            $this->load->view('admin/pages/settings/newscategories/add', $data);
            $this->load->view('admin/templates/footer', $data);
        }
    }

    public function delete($id) {
        if (!$this->session->userdata('logged')) {
            redirect('admin/login');
        }
        $new = $this->newscategories_model->get_newscategories($id);
        if (count($new) > 0) {
            $this->newscategories_model->delete_newcategory($id);
            redirect($this->agent->referrer());
        } else {
            die('Категории для новости не существует!');
        }
    }

    public function up($id) {
        $this->newscategories_model->order_up($id);
    }

    public function down($id) {
        $this->newscategories_model->order_down($id);
    }

}
