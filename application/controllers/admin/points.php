<?php

class Points extends CI_Controller {

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

    public function view($page = 'points', $firstPage = 0) {
        if (!$this->session->userdata('logged')) {
            redirect('admin/login');
        }

        if (!file_exists(APPPATH . '/views/admin/pages/points/' . $page . '.php')) {
            show_404();
        }

        $data['title'] = 'Административная панель';
        $data['cat'] = '';
        $data['sports'] = $this->sports_model->get_sports();

        $this->load->library('pagination');
        $config['base_url'] = "/admin/points/";
        $config['total_rows'] = $data['count_all'] = count($this->points_model->get_points());
        $config['per_page'] = 50;
        $config['num_links'] = 10;
        $config['uri_segment'] = 3;

        $config['full_tag_open'] = '<nav><ul class="pagination">';
        $config['full_tag_close'] = '</ul></nav>';

        $config['prev_link'] = '<span aria-hidden="true">&laquo;</span>';
        $config['prev_tag_open'] = '<li>';
        $config['prev_tag_close'] = '</li>';

        $config['next_link'] = '<span aria-hidden="true">&raquo;</span>';
        $config['next_tag_open'] = '<li>';
        $config['next_tag_close'] = '</li>';

        $config['cur_tag_open'] = '<li class="active"><a>';
        $config['cur_tag_close'] = '</a></li>';

        $config['num_tag_open'] = '<li>';
        $config['num_tag_close'] = '</li>';

        $config['first_link'] = '<span aria-hidden="true">&laquo;&laquo;</span>';
        $config['first_tag_open'] = '<li>';
        $config['first_tag_close'] = '</li>';

        $config['last_link'] = '<span aria-hidden="true">&raquo;&raquo;</span>';
        $config['last_tag_open'] = '<li>';
        $config['last_tag_close'] = '</li>';

        $this->pagination->initialize($config);

        if ($firstPage != 0) {
            $startFrom = $firstPage;
        } else {
            $startFrom = 0;
        }

        $data['points'] = $this->points_model->get_points_for_pagintaion_admin($startFrom);

        $this->load->view('admin/templates/metahead', $data);
        $this->load->view('admin/templates/navbar', $data);
        $this->load->view('admin/pages/points/' . $page, $data);
        $this->load->view('admin/templates/footer', $data);
    }

    public function up($id) {
        $this->points_model->order_up($id);
    }

    public function down($id) {
        $this->points_model->order_down($id);
    }

    public function add() {
        if (!$this->session->userdata('logged')) {
            redirect('admin/login');
        }

        if (!$this->sports_model->get_sports()) {
            redirect('admin/sports');
        }

        $subways = $this->subways_model->get_subways_for_point();
        $data['subways'] = $subways;

        $sports = $this->sports_model->get_sports();
        $data['sports'] = $sports;

        if ($this->input->post('do') == 'pointAdd') {
            $this->form_validation->set_rules('name', 'Название', 'trim|required|xss_clean');
            $this->form_validation->set_rules('youtube', 'Видео с youtube', 'trim|xss_clean');
            $this->form_validation->set_rules('url', 'ЧПУ', 'trim|required|xss_clean|callback_check_url');
            $this->form_validation->set_rules('graphite', 'График работы', 'trim|xss_clean');
            $this->form_validation->set_rules('sport', 'Вид спорта', 'trim|required|xss_clean');
            $this->form_validation->set_rules('contacts', 'Контактная информация', 'trim|xss_clean');
            $this->form_validation->set_rules('phone', 'Телефон', 'trim|xss_clean');
            $this->form_validation->set_rules('email', 'E-mail', 'trim|xss_clean');
            $this->form_validation->set_rules('admemail', 'E-mail администратора', 'trim|xss_clean');
            $this->form_validation->set_rules('site', 'Сайт', 'trim|xss_clean');
            $this->form_validation->set_rules('subway1_id', 'Первая станция метро', 'trim|xss_clean');
            $this->form_validation->set_rules('time1', 'Время до первой станции метро', 'trim|xss_clean');
            $this->form_validation->set_rules('subway2_id', 'Вторая станция метро', 'trim|xss_clean');
            $this->form_validation->set_rules('time2', 'Время до второй станции метро', 'trim|xss_clean');
            $this->form_validation->set_rules('title', 'Мета title', 'trim|xss_clean');
            $this->form_validation->set_rules('desc', 'Мета description', 'trim|xss_clean');
            $this->form_validation->set_rules('keyw', 'Мета keywords', 'trim|xss_clean');
            $this->form_validation->set_rules('payedf', 'Оплачен с', 'trim|xss_clean');
            $this->form_validation->set_rules('payedt', 'Оплачен по', 'trim|xss_clean');
            $this->form_validation->set_rules('price_month', 'Цена за 1 месяц', 'trim|xss_clean');
            $this->form_validation->set_rules('price_6months', 'Цена за 6 месяцев', 'trim|xss_clean');
            $this->form_validation->set_rules('price_year', 'Цена за год', 'trim|xss_clean');
        }
        $data['title'] = 'Добавление спортивной точки';

        $this->form_validation->set_error_delimiters('<span class="label label-danger">', '</span>');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('admin/templates/metahead', $data);
            $this->load->view('admin/templates/navbar', $data);
            $this->load->view('admin/pages/points/add', $data);
            $this->load->view('admin/templates/footer', $data);
        } else {
//            print_r($_FILES);
            $config['upload_path'] = './images/points';
            $config['allowed_types'] = 'gif|jpg|png|jpeg|JPG|JPEG|DOCX|docx|DOC|doc|XLSX|xls';
            $config['max_size'] = '5120';
            $config['encrypt_name'] = true;
            $this->load->library('upload', $config);

            if (!$this->upload->do_upload('image')) {

                $this->session->set_userdata('error', $this->upload->display_errors('<span class="label label-danger">', '</span>'));
                redirect('admin/points/add');
            } else {
                $image_data = $this->upload->data();
            }
            $insert_id = $this->points_model->set_point($image_data['file_name']);

            $arr = array(
                'error' => '<div class="alert alert-success" role="alert"><strong>Успех! </strong>Спортивная точка была успешно добавлена!</div>'
            );
            $this->session->set_userdata($arr);
            redirect('admin/points/edit/' . $insert_id);
        }
    }

    public function check_url($url) {
        str_replace(array(")", "("), '', $url);
        $url = $this->points_model->get_point_by_url($url);
        if ($url)
            $url = $url['url'];
//        echo $this->input->post('url');
        if ($url == $this->input->post('url')) {
            return true;
        } else {
            if ($this->points_model->get_point_by_url($url)) {
                $this->form_validation->set_message('check_url', 'Такой ЧПУ уже занят!');
                return FALSE;
            } else {
                return TRUE;
            }
        }
    }

    public function edit($id) {
        if (!$this->session->userdata('logged')) {
            redirect('admin/login');
        }
        $data['title'] = 'Редактирование спортивной точки';
        $point = $this->points_model->get_points($id);
        foreach ($point as $k => $v) {
            $point[$k] = htmlspecialchars(stripslashes($v));
        }

        $data['point'] = $point;

        $sports = $this->sports_model->get_sports();
        foreach ($sports as $sport) {
            $arr[$sport['id']] = $sport['name'];
        }
        $selected = $this->points_model->get_sport_for_point($id);
        if (count($selected)) {
            $data['selected'] = $selected['sport_id'];
        }

        $data['sport'] = $sport = $this->sports_model->get_sports($point['sport_id']);
        $data['category'] = $category = $this->categories_model->get_categories($sport['category_id']);

        $data['sports'] = $arr;

        $subways = $this->subways_model->get_subways_for_point();
        $data['subways'] = $subways;

        $pimages = $this->points_model->get_images_for_point($id);
        $phalls = $this->points_model->get_halls_for_point($id);
        $ptreners = $this->points_model->get_treners_for_point($id);

        if ($this->input->post('do') == 'pointEdit') {
            $this->form_validation->set_rules('name', 'Название', 'trim|required|xss_clean');
            $this->form_validation->set_rules('youtube', 'Видео с youtube', 'trim|xss_clean');
            $this->form_validation->set_rules('url', 'ЧПУ', 'trim|required|xss_clean|callback_check_url');
            $this->form_validation->set_rules('sport', 'Вид спорта', 'trim|required|xss_clean');
            $this->form_validation->set_rules('graphite', 'График работы', 'trim|xss_clean');
            $this->form_validation->set_rules('contacts', 'Контактная информация', 'trim|xss_clean');
            $this->form_validation->set_rules('phone', 'Телефон', 'trim|xss_clean');
            $this->form_validation->set_rules('email', 'E-mail', 'trim|xss_clean');
            $this->form_validation->set_rules('admemail', 'E-mail администратора', 'trim|xss_clean');
            $this->form_validation->set_rules('site', 'Сайт', 'trim|xss_clean');
            $this->form_validation->set_rules('subway1_id', 'Первая станция метро', 'trim|xss_clean');
            $this->form_validation->set_rules('time1', 'Время до первой станции метро', 'trim|xss_clean');
            $this->form_validation->set_rules('subway2_id', 'Вторая станция метро', 'trim|xss_clean');
            $this->form_validation->set_rules('time2', 'Время до второй станции метро', 'trim|xss_clean');
            $this->form_validation->set_rules('title', 'Мета title', 'trim|xss_clean');
            $this->form_validation->set_rules('desc', 'Мета description', 'trim|xss_clean');
            $this->form_validation->set_rules('keyw', 'Мета keywords', 'trim|xss_clean');
            $this->form_validation->set_rules('payedf', 'Оплачен с', 'trim|xss_clean');
            $this->form_validation->set_rules('payedt', 'Оплачен по', 'trim|xss_clean');
            $this->form_validation->set_rules('price_month', 'Цена за 1 месяц', 'trim|xss_clean');
            $this->form_validation->set_rules('price_6months', 'Цена за 6 месяцев', 'trim|xss_clean');
            $this->form_validation->set_rules('price_year', 'Цена за год', 'trim|xss_clean');

            $this->form_validation->set_error_delimiters('<span class="label label-danger">', '</span>');

            if ($this->form_validation->run() == FALSE) {
                $sports = $this->sports_model->get_sports();
                foreach ($sports as $sport) {
                    $arr[$sport['id']] = $sport['name'];
                }
                $selected = $this->points_model->get_sport_for_point($id);

                $this->load->view('admin/templates/metahead', $data);
                $this->load->view('admin/templates/navbar', $data);
                $this->load->view('admin/pages/points/edit', $data);
                $this->load->view('admin/templates/footer', $data);
            } else {
                $config['upload_path'] = './images/points';
                $config['allowed_types'] = 'gif|jpg|png|jpeg|JPG|JPEG';
                $config['max_size'] = '5120';
                $config['encrypt_name'] = true;

                $this->load->library('upload', $config);

                $image_data = $this->upload->data();
                if ($_FILES['image']['name'] == '') {
                    $this->points_model->update_point($id);
                    $arr = array(
                        'error' => '<div class="alert alert-success" role="alert"><strong>Успех! </strong>Спортивная точка была успешно обновлена!</div>'
                    );
                    $this->session->set_userdata($arr);
                    redirect('admin/points/edit/' . $point['id']);
                } else {
                    if (!$this->upload->do_upload('image')) {
                        $this->session->set_userdata('error', $this->upload->display_errors('<span class="label label-danger">', '</span>'));
                        redirect('admin/points/edit/' . $point['id']);
                    } else {
                        $point = $this->points_model->get_points($id);
                        if (file_exists('images/points/' . $point['image'])) {
                            unlink('images/points/' . $point['image']);
                            $image_data = $this->upload->data();
                            $this->points_model->update_point($id, $image_data['file_name']);
                            $arr = array(
                                'error' => '<div class="alert alert-success" role="alert"><strong>Успех! </strong>Спортивная точка была успешно обновлена!</div>'
                            );
                            $this->session->set_userdata($arr);
                            redirect('admin/points/edit/' . $point['id']);
                        } else {
                            $image_data = $this->upload->data();
                            $this->points_model->update_point($id, $image_data['file_name']);
                            $arr = array(
                                'error' => '<div class="alert alert-success" role="alert"><strong>Успех! </strong>Спортивная точка была успешно обновлена!</div>'
                            );
                            $this->session->set_userdata($arr);
                            redirect('admin/points/edit/' . $point['id']);
                        }
                    }
                }
            }
        } else {
            if (count($point) > 0) {
                $data['selected'] = $selected['sport_id'];
                $data['sports'] = $arr;
                $data['pimages'] = $pimages;
                $data['phalls'] = $phalls;
                $data['ptreners'] = $ptreners;

                $this->load->view('admin/templates/metahead', $data);
                $this->load->view('admin/templates/navbar', $data);
                $this->load->view('admin/pages/points/edit', $data);
                $this->load->view('admin/templates/footer', $data);
            } else {
                $error['error'] = '<div class="alert alert-danger" role="alert"><strong>Oops! </strong>Спортивная точка не найдена!</div>';
                $this->load->view('admin/templates/metahead', $data);
                $this->load->view('admin/templates/navbar', $data);
                $this->load->view('admin/pages/points/error_page', $error);
                $this->load->view('admin/templates/footer', $data);
            }
        }
    }

    public function delete($id) {
        if (!$this->session->userdata('logged')) {
            redirect('admin/login');
        }
        $point = $this->points_model->get_points($id);
        if (count($point) > 0) {
            if (file_exists('images/points/' . $point['image'])) {
                $this->points_model->delete_point($id);
                unlink('images/points/' . $point['image']);
                $point_images = $this->points_model->get_images_for_point($id);
                $point_halls = $this->points_model->get_halls_for_point($id);
                $point_treners = $this->points_model->get_treners_for_point($id);
                foreach ($point_images as $img) {
                    if (file_exists('images/points/images/' . $img['image'])) {
                        unlink('images/points/images/' . $img['image']);
                        $this->points_model->delete_images_for_point($id);
                    } else {
                        die('Картинок не найдено');
                    }
                }
                foreach ($point_halls as $hall) {
                    if (file_exists('images/points/halls/' . $hall['image'])) {
                        unlink('images/points/halls/' . $hall['image']);
                        $this->points_model->delete_halls_for_point($id);
                    } else {
                        die('Залов не найдено');
                    }
                }
                foreach ($point_treners as $trener) {
                    if (file_exists('images/points/treners/' . $trener['image'])) {
                        unlink('images/points/treners/' . $trener['image']);
                        $this->points_model->delete_treners_for_point($id);
                    } else {
                        die('Тренеров не найдено');
                    }
                }
                redirect('admin/points');
            } else {
                $this->points_model->delete_point($id);
                redirect('admin/points');
            }
        } else {
            die('Такого вида спорта не существует!');
        }
    }

    public function order($sport) {
        if (!$this->session->userdata('logged')) {
            redirect('admin/login');
        }
        if ($sport == 'all') {
            redirect('admin/points');
        }
        $data['count_all'] = count($this->points_model->get_points());
        $data['sports'] = $this->sports_model->get_sports();
        $points = $this->points_model->get_ordered_points($sport);

        $data['cat'] = $sport;
        $data['title'] = 'Административная панель';
        $data['points'] = $points;
        $data['sports'] = $this->sports_model->get_sports();

        $this->load->view('admin/templates/metahead', $data);
        $this->load->view('admin/templates/navbar', $data);
        $this->load->view('admin/pages/points/points', $data);
        $this->load->view('admin/templates/footer', $data);
    }

    public function image_delete() {
        if (!$this->session->userdata('logged')) {
            alert('Авторизуйтесь!');
            die();
        }
        $id = $this->input->post('id');
        $image = $this->points_model->get_point_image($id);
        if (count($image) > 0) {
            if (file_exists('images/points/images/' . $image['image'])) {
                $this->points_model->delete_image($id);
                unlink('images/points/images/' . $image['image']);
            } else {
                $this->points_model->delete_image($id);
            }
        } else {
            die('Такой картинки не существует!');
        }
    }

    public function images_upload($point_id) {
        if (!$this->session->userdata('logged')) {
            redirect('admin/login');
        }
        if (!($_FILES)) {
            die("Не выбрано ни одной картинки!");
        }
        if ($_FILES['file']['name']) {
            foreach ($_FILES['file']['name'] as $k => $f) {
                if (!$_FILES['file']['error'][$k]) {
                    $blacklist = array(".php", ".phtml", ".php3", ".php4", ".html", ".htm", ".asp", ".aspx");
                    foreach ($blacklist as $item)
                        if (preg_match("/$item\$/i", $_FILES['file']['name'][$k]))
                            die("Недопустимый формат файла");
                    if (is_uploaded_file($_FILES['file']['tmp_name'][$k])) {
                        $namef = time() . "_" . md5(uniqid()) . "." . preg_replace("/.*?\./", '', $_FILES['file']['name'][$k]);
                        ;
                        $uploadfile = "images/points/images/" . $namef;
                        if (!move_uploaded_file($_FILES['file']['tmp_name'][$k], $uploadfile)) {
                            die("Error");
                        } else {
                            $image = $namef;
                            $this->points_model->images_insert($image, $point_id);
                            echo 'Файл "' . $_FILES['file']['name'][$k] . '" успешно загружен
';
                        }
                    }
                }
            }
        }
    }

    public function get_images_for_point($id) {
        $pimages = $this->points_model->get_images_for_point($id);

        if (!$pimages) {
            echo '<div class="alert alert-danger" role="alert">Миниатюр не найдено!</div>';
        }
        ?>
        <div class="row images">
            <?php
            foreach ($pimages as $pimage):
                ?>
                <div id="image_<?= $pimage['id'] ?>" style="width:200px;" class="col-xs-6 col-md-3">
                    <a class="thumbnail">
                        <button id="<?= $pimage['id'] ?>" type="button" class="close image_del">
                            <span aria-hidden="true">&times;</span>
                            <span class="sr-only">Close</span>
                        </button>
                        <img class="img-rounded" src="/images/points/images/<?= $pimage['image'] ?>" alt="...">
                    </a>
                </div>
                <?php
            endforeach;
            ?>
        </div>
        <?php
    }

    public function get4treners() {
        
    }

    public function hall_delete() {
        if (!$this->session->userdata('logged')) {
            die('Авторизуйтесь!');
            die();
        }
        $id = $this->input->post('id');
        $hall = $this->points_model->get_hall_for_point($id);
        if (count($hall) > 0) {
            if (file_exists('images/points/halls/' . $hall['image'])) {
                $this->points_model->delete_hall($id);
                unlink('images/points/halls/' . $hall['image']);
            } else {
                $this->points_model->delete_hall($id);
            }
        } else {
            die('Такого спорт. зала не существует!');
        }
    }

    public function images_hall_upload($point_id) {
        if (!$this->session->userdata('logged')) {
            redirect('admin/login');
        }
        if (!($_FILES)) {
            die("Не выбрано ни одной картинки!");
        }
        if ($_FILES['file']['name']) {
            foreach ($_FILES['file']['name'] as $k => $f) {
                if (!$_FILES['file']['error'][$k]) {
                    $blacklist = array(".php", ".phtml", ".php3", ".php4", ".html", ".htm", ".asp", ".aspx");
                    foreach ($blacklist as $item)
                        if (preg_match("/$item\$/i", $_FILES['file']['name'][$k]))
                            die("Недопустимый формат файла");
                    if (is_uploaded_file($_FILES['file']['tmp_name'][$k])) {
                        $namef = time() . "_" . md5(uniqid()) . "." . preg_replace("/.*?\./", '', $_FILES['file']['name'][$k]);
                        ;
                        $uploadfile = "images/points/halls/" . $namef;
                        if (!move_uploaded_file($_FILES['file']['tmp_name'][$k], $uploadfile)) {
                            die("Error");
                        } else {
                            $image = $namef;
                            $this->points_model->halls_insert($image, $point_id);
                            echo 'Файл "' . $_FILES['file']['name'][$k] . '" успешно загружен
';
                        }
                    }
                }
            }
        }
    }

    public function get_halls_for_point($id) {
        $phalls = $this->points_model->get_halls_for_point($id);
        if (!$phalls) {
            echo '<div class="alert alert-danger" role="alert">Тренеровочных залов не найдено!</div>';
        }
        ?>
        <div class="row halls">
            <?php foreach ($phalls as $key => $phall): ?>
                <div class="col-sm-6 col-md-4" <?php
                if ($key % 3 == 0) {
                    echo 'style="clear:both;"';
                }
                ?>>
                    <div class="thumbnail">
                        <button id="<?= $phall['id'] ?>" type="button" class="close hall_del">
                            <span aria-hidden="true">&times;</span>
                            <span class="sr-only">Close</span>
                        </button>
                        <img src="/images/points/halls/<?= $phall['image'] ?>" width="350" height="240" alt="...">
                        <div class="caption">
                            <h3 class="hall_name"><?php
                                if (!$phall['name']) {
                                    if ($phall['description'] == '') {
                                        echo '<input type="text" class="form-control" placeholder="Название">';
                                    }
                                } else {
                                    echo $phall['name'];
                                }
                                ?></h3>
                            <p class="hall_description"><?php
                                if (!$phall['description']) {
                                    if ($phall['name'] == '') {
                                        echo '<textarea class="form-control" rows="5" placeholder="Описание спорт. зала"></textarea>';
                                    }
                                } else {
                                    echo $phall['description'];
                                }
                                ?></p>
                            <p>
                                <a href="javascript:" class="btn btn-primary hall_save" role="button">Сохранить</a> 
                                <a href="javascript:" class="btn btn-default hall_edit" role="button">Редактировать</a>
                            </p>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
        <?php
    }

    public function trener_delete() {
        if (!$this->session->userdata('logged')) {
            die('Авторизуйтесь!');
            die();
        }
        $id = $this->input->post('id');
        $trener = $this->points_model->get_trener_for_point($id);
        if (count($trener) > 0) {
            if (file_exists('images/points/treners/' . $trener['image'])) {
                $this->points_model->delete_trener($id);
                unlink('images/points/treners/' . $trener['image']);
            } else {
                $this->points_model->delete_trener($id);
            }
        } else {
            die('Такого тренера не существует!');
        }
    }

    public function images_trener_upload($point_id) {
        if (!$this->session->userdata('logged')) {
            redirect('admin/login');
        }
        if (!($_FILES)) {
            die("Не выбрано ни одной картинки!");
        }
        if ($_FILES['file']['name']) {
            foreach ($_FILES['file']['name'] as $k => $f) {
                if (!$_FILES['file']['error'][$k]) {
                    $blacklist = array(".php", ".phtml", ".php3", ".php4", ".html", ".htm", ".asp", ".aspx");
                    foreach ($blacklist as $item)
                        if (preg_match("/$item\$/i", $_FILES['file']['name'][$k]))
                            die("Недопустимый формат файла");
                    if (is_uploaded_file($_FILES['file']['tmp_name'][$k])) {
                        $namef = time() . "_" . md5(uniqid()) . "." . preg_replace("/.*?\./", '', $_FILES['file']['name'][$k]);
                        ;
                        $uploadfile = "images/points/treners/" . $namef;
                        if (!move_uploaded_file($_FILES['file']['tmp_name'][$k], $uploadfile)) {
                            die("Error");
                        } else {
                            $image = $namef;
                            $this->points_model->treners_insert($image, $point_id);
                            echo 'Файл "' . $_FILES['file']['name'][$k] . '" успешно загружен
';
                        }
                    }
                }
            }
        }
    }

    public function get_treners_for_point($id) {
        $ptreners = $this->points_model->get_treners_for_point($id);
        if (!$ptreners) {
            echo '<div class="alert alert-danger" role="alert">Тренеров не найдено!</div>';
        }
        ?>
        <div class="row halls">
            <?php foreach ($ptreners as $key => $ptrener): ?>
                <div class="col-sm-6 col-md-4" <?php
                if ($key % 3 == 0) {
                    echo 'style="clear:both;"';
                }
                ?> >
                    <div class="thumbnail">
                        <button id="<?= $ptrener['id'] ?>" type="button" class="close trener_del">
                            <span aria-hidden="true">&times;</span>
                            <span class="sr-only">Close</span>
                        </button>
                        <img src="/images/points/treners/<?= $ptrener['image'] ?>" width="350" height="240" alt="...">
                        <div class="caption">
                            <h3 class="trener_name" style="float: left; margin-right: 5px;"><?php
                                if (!$ptrener['name']) {
                                    if (!$ptrener['sname'] && !$ptrener['text'] && !$ptrener['pph'] && !$ptrener['ppm'])
                                        echo '<input type="text" class="form-control" placeholder="Имя">';
                                } else {
                                    echo $ptrener['name'];
                                }
                                ?></h3>
                            <h3 class="trener_sname"><?php
                                if (!$ptrener['sname']) {
                                    if (!$ptrener['name'] && !$ptrener['text'] && !$ptrener['pph'] && !$ptrener['ppm'])
                                        echo '<input type="text" class="form-control" placeholder="Фамилия">';
                                } else {
                                    echo $ptrener['sname'];
                                }
                                ?></h3>
                            <h3 class="trener_pph" style="clear: both;"><?php
                                if (!$ptrener['pph']) {
                                    if (!$ptrener['name'] && !$ptrener['sname'] && !$ptrener['text'] && !$ptrener['ppm'])
                                        echo '<input type="text" class="form-control" placeholder="Цена за час">';
                                } else {
                                    echo $ptrener['pph'];
                                }
                                ?></h3>
                            <h3 class="trener_ppm"><?php
                                if (!$ptrener['ppm']) {
                                    if (!$ptrener['name'] && !$ptrener['sname'] && !$ptrener['text'] && !$ptrener['pph'])
                                        echo '<input type="text" class="form-control" placeholder="Цена за месяц">';
                                } else {
                                    echo $ptrener['ppm'];
                                }
                                ?></h3>
                            <p class="trener_description"><?php
                                if (!$this->br2nl($ptrener['text'])) {
                                    if (!$ptrener['name'] && !$ptrener['sname'] && !$ptrener['pph'] && !$ptrener['ppm'])
                                        echo '<textarea class="form-control" rows="5" placeholder="Описание тренера"></textarea>';
                                } else {
                                    echo $this->br2nl($ptrener['text']);
                                }
                                ?></p>
                            <p>
                                <a href="javascript:" class="btn btn-primary trener_save" role="button">Сохранить</a> 
                                <a href="javascript:" class="btn btn-default trener_edit" role="button">Редактировать</a>
                            </p>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
        <?php
    }

    public function hall_data_save() {
        $this->points_model->hall_data_save();
    }

    public function trener_data_save() {
        $this->points_model->trener_data_save();
    }

    public function br2nl($string) {
        $string = str_replace('<br />|<br/>|<br>', '\r\n', $string);
        return $string;
    }

}
