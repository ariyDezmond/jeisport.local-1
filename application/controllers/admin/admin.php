<?php

class Admin extends CI_Controller {

    public function __construct() {
        parent::__construct();
    }

    public function index() {
        $this->load->helper('url');

        if (!$this->session->userdata('logged')) {
            redirect('admin/login');
        } else {
            redirect('admin/main');
        }
    }

    public function login() {
        if ($this->session->userdata('logged')) {
            redirect('admin/main');
        }

        if ($this->input->post('login')) {

            $this->form_validation->set_rules('login', 'Логин', 'required');
            $this->form_validation->set_rules('pass', 'Пароль', 'required');

            $this->form_validation->set_error_delimiters('<div class="alert alert-danger" role="alert">', '</div>');

            if ($this->admins_model->get_user()) {
                $this->session->set_userdata('logged', true);
            } else {
                $arr = array(
                    'error' => '<div class="alert alert-danger" role="alert"><strong>Ошибка! </strong>Неверный логин и/или пароль!</div>'
                );
                $this->session->set_userdata($arr);
            }
        }
        if ($this->form_validation->run() == FALSE) {
            $this->load->view('admin/pages/login');
        } else {
            redirect('admin/main');
        }
    }

    public function view($page = 'main') {
        if ($page != 'login' && !$this->session->userdata('logged')) {
            redirect('admin/login');
        }
        
        $data['adm_email'] = $this->main_model->get_adm_email();
        $data['title'] = 'Административная панель';
        $this->load->view('admin/templates/metahead', $data);
        $this->load->view('admin/templates/navbar', $data);
        $this->load->view('admin/pages/' . $page, $data);
        $this->load->view('admin/templates/footer', $data);
    }

    public function requests($request = null) {
        if (!$this->session->userdata('logged')) {
            redirect('admin/login');
        }
        if (!$request) {
            if (!file_exists(APPPATH . '/views/admin/pages/requests/requests.php')) {
                show_404();
            }
            $data['title'] = 'Административная панель';
            $requests = $this->front_model->get_requests();
            $data['requests'] = $requests;
            $data['email'] = $this->admins_model->get_email();

            $this->load->view('admin/templates/metahead', $data);
            $this->load->view('admin/templates/navbar', $data);
            $this->load->view('admin/pages/requests/requests', $data);
            $this->load->view('admin/templates/footer', $data);
        } else {
            if (!file_exists(APPPATH . '/views/admin/pages/requests/request.php')) {
                show_404();
            }
            $data['title'] = 'Административная панель';
            $data['request'] = $this->front_model->get_requests($request);
            $requests = $this->front_model->get_requests();
            $data['requests'] = $requests;

            $this->load->view('admin/templates/metahead', $data);
            $this->load->view('admin/templates/navbar', $data);
            $this->load->view('admin/pages/requests/request', $data);
            $this->load->view('admin/templates/footer', $data);
        }
    }

    public function requestsdel($id) {
        $this->admins_model->request_delete($id);
        redirect('admin/requests');
    }

    public function setreadrequest() {
        if (!$this->session->userdata('logged')) {
            redirect('admin/login');
        }
        if ($this->input->post('id')) {
            $id = $this->input->post('id');
            $this->admins_model->update_request_read($id);
        }
    }

    public function savemail() {
        if (!$this->session->userdata('logged')) {
            redirect('admin/login');
        }
        if ($this->input->post('email')) {
            $email = $this->input->post('email');
            $this->admins_model->save_email();
        }
    }

    public function logout() {
        $this->session->unset_userdata('logged');
        redirect('admin/login');
    }

}
