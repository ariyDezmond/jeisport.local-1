<?php

class Subways extends CI_Controller {

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

    public function page($page = 'subways') {
        if (!$this->session->userdata('logged')) {
            redirect('admin/login');
        }

        $data['subways'] = $this->subways_model->get_subways();
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
        $subway = $this->subways_model->get_subways($id);
        $data['subway'] = $subway;

        if ($this->input->post('do') == 'subwayEdit') {
            $this->form_validation->set_rules('name', 'Название', 'required|trim|xss_clean');
            $this->form_validation->set_rules('active', 'Активность', 'trim|xss_clean');

            $this->form_validation->set_error_delimiters('<span class="label label-danger">', '</span>');

            if ($this->form_validation->run() == FALSE) {
                $this->load->view('admin/templates/metahead', $data);
                $this->load->view('admin/templates/navbar', $data);
                $this->load->view('admin/pages/settings/templates/left-nav', $data);
                $this->load->view('admin/pages/settings/subways/edit', $data);
                $this->load->view('admin/templates/footer', $data);
            } else {
                $config['upload_path'] = './images/subways';
                $config['allowed_types'] = 'gif|jpg|png|jpeg|JPG|JPEG';
                $config['max_size'] = '5120';
                $config['encrypt_name'] = true;

                $this->load->library('upload', $config);

                $image_data = $this->upload->data();
                if ($_FILES['image']['name'] == '') {
                    $this->subways_model->update_subway($id);
                    $arr = array(
                        'error' => '<div class="alert alert-success" role="alert"><strong>Успех! </strong>Станция метро была успешно обновлена!</div>'
                    );
                    $this->session->set_userdata($arr);
                    redirect('admin/settings/subways/edit/' . $subway['id']);
                } else {
                    if (!$this->upload->do_upload('image')) {
                        $this->session->set_userdata('error', $this->upload->display_errors('<span class="label label-danger">', '</span>'));
                        redirect('admin/settings/subways/edit/' . $blog['id']);
                    } else {
                        $blog = $this->subways_model->get_subways($id);
                        if (file_exists('images/subways/' . $subway['image'])) {
                            unlink('images/subways/' . $subway['image']);
                            $image_data = $this->upload->data();
                            $this->subways_model->update_subway($id, $image_data['file_name']);
                            $arr = array(
                                'error' => '<div class="alert alert-success" role="alert"><strong>Успех! </strong>Станция метро была успешно обновлена!</div>'
                            );
                            $this->session->set_userdata($arr);
                            redirect('admin/settings/subways/edit/' . $subway['id']);
                        } else {
                            $image_data = $this->upload->data();
                            $this->subways_model->update_subway($id, $image_data['file_name']);
                            $arr = array(
                                'error' => '<div class="alert alert-success" role="alert"><strong>Успех! </strong>Станция метро была успешно обновлена!</div>'
                            );
                            $this->session->set_userdata($arr);
                            redirect('admin/settings/subways/edit/' . $blog['id']);
                        }
                    }
                }
            }
        } else {
            $this->load->view('admin/templates/metahead', $data);
            $this->load->view('admin/templates/navbar', $data);
            $this->load->view('admin/pages/settings/templates/left-nav', $data);
            $this->load->view('admin/pages/settings/subways/edit', $data);
            $this->load->view('admin/templates/footer', $data);
        }
    }

    public function add() {
        if (!$this->session->userdata('logged')) {
            redirect('admin/login');
        }
        $data['title'] = 'Административная панель';
        if ($this->input->post('do') == 'subwayAdd') {
            $this->form_validation->set_rules('name', 'Название', 'required|trim|xss_clean');
            $this->form_validation->set_rules('active', 'Активность', 'trim|xss_clean');

            $this->form_validation->set_error_delimiters('<span class="label label-danger">', '</span>');

            if ($this->form_validation->run() == FALSE) {
                $this->load->view('admin/templates/metahead', $data);
                $this->load->view('admin/templates/navbar', $data);
                $this->load->view('admin/pages/settings/templates/left-nav', $data);
                $this->load->view('admin/pages/settings/subways/add', $data);
                $this->load->view('admin/templates/footer', $data);
            } else {
                $config['upload_path'] = './images/subways';
                $config['allowed_types'] = 'gif|jpg|png|jpeg|JPG|JPEG';
                $config['max_size'] = '5120';
                $config['encrypt_name'] = true;

                $this->load->library('upload', $config);

                $image_data = $this->upload->data();
                if (!$this->upload->do_upload('image')) {

                    $this->session->set_userdata('error', $this->upload->display_errors('<span class="label label-danger">', '</span>'));
                    redirect('admin/settings/subways/add');
                } else {
                    $image_data = $this->upload->data();
                    $this->subways_model->set_subway($image_data['file_name']);

                    $arr = array(
                        'error' => '<div class="alert alert-success" role="alert"><strong>Успех! </strong>Станция метро было успешно добавлена!</div>'
                    );
                    $this->session->set_userdata($arr);
                    redirect('admin/settings/subways/add');
                }
            }
        } else {
            $this->load->view('admin/templates/metahead', $data);
            $this->load->view('admin/templates/navbar', $data);
            $this->load->view('admin/pages/settings/templates/left-nav', $data);
            $this->load->view('admin/pages/settings/subways/add', $data);
            $this->load->view('admin/templates/footer', $data);
        }
    }

    public function delete($id) {
        if (!$this->session->userdata('logged')) {
            redirect('admin/login');
        }
        $subway = $this->subways_model->get_subways($id);
        if (count($subway) > 0) {
            if (file_exists('images/subways/' . $subway['image'])) {
                $this->subways_model->delete_subway($id);
                unlink('images/subways/' . $subway['image']);
                redirect($this->agent->referrer());
            } else {
                $this->subways_model->delete_subway($id);
                redirect($this->agent->referrer());
            }
        } else {
            die('Станции метро не существует!');
        }
    }

    public function up($id) {
        $this->subways_model->order_up($id);
    }

    public function down($id) {
        $this->subways_model->order_down($id);
    }

}
