<?php

class Banners extends CI_Controller {

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

    public function page($page = 'banners') {
        if (!$this->session->userdata('logged')) {
            redirect('admin/login');
        }

        $data['banners'] = $this->banners_model->get_banners();
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
        $banner = $this->banners_model->get_banners($id);
        $data['banner'] = $banner;

        if ($this->input->post('do') == 'bannerEdit') {
            $this->form_validation->set_rules('url', 'Ссылка', 'required|trim|xss_clean');
            $this->form_validation->set_rules('active', 'Активность', 'trim|xss_clean');

            $this->form_validation->set_error_delimiters('<span class="label label-danger">', '</span>');

            if ($this->form_validation->run() == FALSE) {
                $this->load->view('admin/templates/metahead', $data);
                $this->load->view('admin/templates/navbar', $data);
                $this->load->view('admin/pages/settings/templates/left-nav', $data);
                $this->load->view('admin/pages/settings/banners/edit', $data);
                $this->load->view('admin/templates/footer', $data);
            } else {
                if ($this->input->post('payment') == 'shows' && ($this->input->post('max_shows') > $banner['views'])) {
                    $status = 'on';
                } elseif ($this->input->post('payment') == 'clicks' && ($this->input->post('max_clicks') > $banner['clicks'])) {
                    $status = 'on';
                } else {
                    $status = 0;
                }
                $config['upload_path'] = './images/banners';
                $config['allowed_types'] = 'gif|jpg|png|jpeg|JPG|JPEG';
                $config['max_size'] = '5120';
                $config['encrypt_name'] = true;

                $this->load->library('upload', $config);

                $image_data = $this->upload->data();
                if ($_FILES['image']['name'] == '') {
                    $this->banners_model->update_banner($id, '', $status);
                    $arr = array(
                        'error' => '<div class="alert alert-success" role="alert"><strong>Успех! </strong>Запись была успешно обновлена!</div>'
                    );
                    $this->session->set_userdata($arr);
                    redirect('admin/settings/banners/edit/' . $banner['id']);
                } else {
                    if (!$this->upload->do_upload('image')) {
                        $this->session->set_userdata('error', $this->upload->display_errors('<span class="label label-danger">', '</span>'));
                        redirect('admin/settings/banners/edit/' . $blog['id']);
                    } else {
                        $blog = $this->banners_model->get_banners($id);
                        if (file_exists('images/banners/' . $banner['image'])) {
                            unlink('images/banners/' . $banner['image']);
                            $image_data = $this->upload->data();
                            $this->banners_model->update_banner($id, $image_data['file_name'], $status);
                            $arr = array(
                                'error' => '<div class="alert alert-success" role="alert"><strong>Успех! </strong>Запись была успешно обновлена!</div>'
                            );
                            $this->session->set_userdata($arr);
                            redirect('admin/settings/banners/edit/' . $banner['id']);
                        } else {
                            $image_data = $this->upload->data();
                            $this->banners_model->update_banner($id, $image_data['file_name'], $status);
                            $arr = array(
                                'error' => '<div class="alert alert-success" role="alert"><strong>Успех! </strong>Запись была успешно обновлена!</div>'
                            );
                            $this->session->set_userdata($arr);
                            redirect('admin/settings/banners/edit/' . $blog['id']);
                        }
                    }
                }
            }
        } else {
            $this->load->view('admin/templates/metahead', $data);
            $this->load->view('admin/templates/navbar', $data);
            $this->load->view('admin/pages/settings/templates/left-nav', $data);
            $this->load->view('admin/pages/settings/banners/edit', $data);
            $this->load->view('admin/templates/footer', $data);
        }
    }

    public function add() {
        if (!$this->session->userdata('logged')) {
            redirect('admin/login');
        }
        $data['title'] = 'Административная панель';
        if ($this->input->post('do') == 'bannerAdd') {
            $this->form_validation->set_rules('url', 'Ссылка', 'required|trim|xss_clean');
            $this->form_validation->set_rules('active', 'Активность', 'trim|xss_clean');
            $this->form_validation->set_rules('status', '', 'trim|xss_clean');
            $this->form_validation->set_rules('payment', '', 'trim|xss_clean');
            $this->form_validation->set_rules('max_clicks', 'Количество кликов', 'trim|xss_clean|callback_empty_check[max_shows]|callback_int_check');
            $this->form_validation->set_rules('max_shows', 'Количество показов', 'trim|xss_clean|callback_int_check');

            $this->form_validation->set_error_delimiters('<span class="label label-danger">', '</span>');

            if ($this->form_validation->run() == FALSE) {
                $this->load->view('admin/templates/metahead', $data);
                $this->load->view('admin/templates/navbar', $data);
                $this->load->view('admin/pages/settings/templates/left-nav', $data);
                $this->load->view('admin/pages/settings/banners/add', $data);
                $this->load->view('admin/templates/footer', $data);
            } else {
                $config['upload_path'] = './images/banners';
                $config['allowed_types'] = 'gif|jpg|png|jpeg|JPG|JPEG';
                $config['max_size'] = '5120';
                $config['encrypt_name'] = true;

                $this->load->library('upload', $config);

                $image_data = $this->upload->data();
                if (!$this->upload->do_upload('image')) {

                    $this->session->set_userdata('error', $this->upload->display_errors('<span class="label label-danger">', '</span>'));
                    redirect('admin/settings/banners/add');
                } else {
                    $image_data = $this->upload->data();
                    $this->banners_model->set_banner($image_data['file_name']);

                    $arr = array(
                        'error' => '<div class="alert alert-success" role="alert"><strong>Успех! </strong>Запись было успешно добавлена!</div>'
                    );
                    $this->session->set_userdata($arr);
                    redirect('admin/settings/banners/add');
                }
            }
        } else {
            $this->load->view('admin/templates/metahead', $data);
            $this->load->view('admin/templates/navbar', $data);
            $this->load->view('admin/pages/settings/templates/left-nav', $data);
            $this->load->view('admin/pages/settings/banners/add', $data);
            $this->load->view('admin/templates/footer', $data);
        }
    }

    public function delete($id) {
        if (!$this->session->userdata('logged')) {
            redirect('admin/login');
        }
        $banner = $this->banners_model->get_banners($id);
        if (count($banner) > 0) {
            if (file_exists('images/banners/' . $banner['image'])) {
                $this->banners_model->delete_banner($id);
                unlink('images/banners/' . $banner['image']);
                redirect($this->agent->referrer());
            } else {
                $this->banners_model->delete_banner($id);
                redirect($this->agent->referrer());
            }
        } else {
            die('Станции метро не существует!');
        }
    }

    public function delete_clicks($id) {
        $this->banners_model->delete_clicks($id);
        redirect($this->agent->referrer());
    }

    public function delete_views($id) {
        $this->banners_model->delete_views($id);
        redirect($this->agent->referrer());
    }

    public function up($id) {
        $this->banners_model->order_up($id);
    }

    public function down($id) {
        $this->banners_model->order_down($id);
    }

}
