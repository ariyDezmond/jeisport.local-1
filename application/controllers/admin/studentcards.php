<?php

class Studentcards extends CI_Controller {

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

    public function page($page = 'feedback', $msg = null) {
        if (!$this->session->userdata('logged')) {
            redirect('admin/login');
        }
        if (!$msg) {
            $data['msgs'] = $this->studentcards_model->get_msgs();
            $data['title'] = 'Заявки на покупку студенческого билета';
            $this->load->view('admin/templates/metahead', $data);
            $this->load->view('admin/templates/navbar', $data);
            $this->load->view('admin/pages/settings/templates/left-nav', $data);
            $this->load->view('admin/pages/settings/' . $page . '/' . $page, $data);
            $this->load->view('admin/templates/footer', $data);
        } else {
            $data['msg'] = $this->studentcards_model->get_msgs($msg);
            $data['title'] = 'Заявки на покупку студенческого билета';
            $this->load->view('admin/templates/metahead', $data);
            $this->load->view('admin/templates/navbar', $data);
            $this->load->view('admin/pages/settings/templates/left-nav', $data);
            $this->load->view('admin/pages/settings/' . $page . '/msg', $data);
            $this->load->view('admin/templates/footer', $data);
        }
    }

    public function setread() {
        if (!$this->session->userdata('logged')) {
            redirect('admin/login');
        }
        
        if ($this->input->post('id')) {
            $id = $this->input->post('id');
            $this->studentcards_model->update_feedback_read($id);
        }
    }
    
    public function delete($id) {
        $this->studentcards_model->studentcard_delete($id);
        redirect('admin/settings/studentcards');
    }

}
