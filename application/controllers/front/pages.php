<?php

mb_internal_encoding("UTF-8");

function mb_ucfirst($text) {
    return mb_strtoupper(mb_substr($text, 0, 1)) . mb_substr($text, 1);
}

class Pages extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->form_validation->set_message('required', 'Поле "%s" обязательно для заполения');
        $this->form_validation->set_message('valid_email', 'Поле "%s" должно содержать валидный E-mail адрес');
    }

    public function getVideo($video_id) {
        $data['video'] = $video = $this->videoblog_model->get_blogs($video_id);
        $this->load->view('front/templates/videoblog', $data);
    }

    public function update_banner_views() {
        $id = $this->input->post('id');
        $banner = $this->banners_model->get_banners($id);
        if ($banner['payment'] == 'shows' && ($banner['max_shows'] - $banner['views']) <= 1) {
            $this->banners_model->set_banner_status($id);
        }
        $this->banners_model->update_banner_views($id);
    }

    public function view($page = 'home') {
        $categories = $this->categories_model->get_categories_for_front();
        $data['categories'] = $categories;
        
        $data['is_browser'] = $this->agent->is_browser();
        
        if ($this->input->get('sid') != '') {
            $this->session->set_userdata('phpbb_sid', $this->input->get('sid'));
        }

        if (!file_exists(APPPATH . '/views/front/pages/' . $page . '.php')) {
            $this->output->set_status_header('404');
            $this->load->view('front/pages/404', $data);
        }

        $vblogs = $this->videoblog_model->get_blogs();
        $data['videoblogs'] = array_chunk($vblogs, 4);

        if ($page == 'home') {
            $banner = $this->banners_model->get_banner_for_front('main');
        }
        $data['title'] = 'Спортивные клубы Москвы, спортклуб в Москве — лучшие спортклубы: каталог (Москва)';
        $data['metadesc'] = 'На нашем сайте Вы найдете лучшие спортивные клубы Москвы на любой вкус. Каталог спортклубов в городе Москве. Цены.';
        $data['metakeyw'] = 'спортивные клубы, спортклубы, лучший спортклуб, спортклубы Москва, спортивные клубы Москва, каталог, цены, отзывы';

        $subways = $this->subways_model->get_subways_for_point();
        $data['subways'] = $subways;

        $first_category = $this->categories_model->get_first_category();
        $sports = $this->sports_model->get_sports_for_category_front($first_category[0]['id']);
        $data['sports'] = $sports;

        $data['news'] = $this->news_model->get3news_for_front();
        $data['posts'] = $this->blogs_model->get3posts_for_front();
        $maintext = $this->main_model->get_maintext();

        $data['maintext'] = $maintext['text'];
        if ($page == 'about') {
            $data['about_text'] = $this->main_model->get_about();
        }
        $data['banner'] = $this->banners_model->get_banner_for_front('main');

        $this->load->view('front/templates/metahead', $data);
        $this->load->view('front/templates/header', $data);
        $this->load->view('front/templates/sub-menu', $data);
        $this->load->view('front/pages/' . $page, $data);
        $this->load->view('front/templates/footer', $data);
    }

    public function bannerClicksCount($id) {
        $banner = $this->banners_model->get_banner_by_id_for_front($id);
        if (($banner['max_clicks'] - $banner['clicks']) <= 1) {
            $this->banners_model->set_banner_status($id);
        }
        if ($banner['payment'] == 'clicks' && $banner['clicks'] < $banner['max_clicks']) {
            $this->banners_model->incClicks($banner['id']);
        }
        redirect($banner['url']);
        exit();
    }

    public function sports($category) {
        $categories = $this->categories_model->get_categories_for_front();
        $data['categories'] = $categories;

        $category = $this->categories_model->get_category_by_url_for_front($category);
        $subways = $this->subways_model->get_subways_for_point();
        $data['subways'] = $subways;
        if (!$category) {
            $this->output->set_status_header('404');
            $this->load->view('front/pages/404', $data);
        } else {
            $sports = $this->sports_model->get_sports_for_category_front($category['id']);
            $data['sports'] = $sports;
            if (!$sports) {
                $this->output->set_status_header('404');
                $this->load->view('front/pages/404', $data);
            } else {
                $data['title'] = $category['name'];
                $data['stitle'] = '';
                $data['category'] = $category;

                $this->load->view('front/templates/metahead', $data);
                $this->load->view('front/templates/header', $data);
                $this->load->view('front/templates/sub-menu', $data);
                $this->load->view('front/templates/filters', $data);
                $this->load->view('front/templates/breadcrumbs', $data);
                $this->load->view('front/pages/sports', $data);
                $this->load->view('front/templates/footer', $data);
            }
        }
    }

    public function points($category, $sport, $page = false) {
        $categories = $this->categories_model->get_categories_for_front();
        $data['categories'] = $categories;
        $subways = $this->subways_model->get_subways_for_point();
        $data['subways'] = $subways;

        $sport = $this->sports_model->get_sport_by_url($sport);
        if (!$sport) {
            $this->output->set_status_header('404');
            $this->load->view('front/pages/404', $data);
        } else {
            $points = $this->points_model->get_points_for_front($sport['id']);
            if (!$points) {
                $this->output->set_status_header('404');
                $this->load->view('front/pages/404', $data);
            } else {
                $this->load->library('pagination');

                $config['base_url'] = "/$category/{$sport['url']}/";
                $config['total_rows'] = count($this->points_model->get_points_for_front($sport['id']));
                $config['per_page'] = 10;
                $config['num_links'] = 4;
                $config['uri_segment'] = 3;

                $config['full_tag_open'] = '';
                $config['full_tag_close'] = '';

                $config['prev_link'] = 'Предыдущая';
                $config['prev_tag_open'] = '<li class="first_child">';
                $config['prev_tag_close'] = '</li>';

                $config['next_link'] = 'Следующая';
                $config['next_tag_open'] = '<li class="last_child">';
                $config['next_tag_close'] = '</li>';

                $config['cur_tag_open'] = '<li class="active">';
                $config['cur_tag_close'] = '</li>';

                $config['num_tag_open'] = '<li>';
                $config['num_tag_close'] = '</li>';

                $config['first_link'] = 'Начало';
                $config['first_tag_open'] = '<li class="first_child">';
                $config['first_tag_close'] = '</li>';

                $config['last_link'] = 'Конец';
                $config['last_tag_open'] = '<li class="last_child">';
                $config['last_tag_close'] = '</li>';

                $this->pagination->initialize($config);

                if ($page) {
                    $startFrom = $page;
                } else {
                    $startFrom = 0;
                }
                $points = $this->points_model->get_points_for_pagination($sport['id'], $startFrom);
                $data['points'] = $points;

                $category = $this->categories_model->get_category_by_url_for_front($category);
                if (!$category) {
                    $this->output->set_status_header('404');
                    $this->load->view('front/pages/404', $data);
                } else {
                    $data['stitle'] = $sport['name'];
                    $data['category'] = $category;

                    $data['sport'] = $sport;

                    $sports = $this->sports_model->get_sports_for_category_front($category['id']);
                    $data['sports'] = $sports;

                    $this->load->view('front/templates/metahead', $data);
                    $this->load->view('front/templates/header', $data);
                    $this->load->view('front/templates/sub-menu', $data);
                    $this->load->view('front/templates/filters', $data);
                    $this->load->view('front/templates/breadcrumbs', $data);
                    $this->load->view('front/pages/points', $data);
                    $this->load->view('front/templates/footer', $data);
                }
            }
        }
    }

    public function point($category, $sport, $point) {
        $categories = $this->categories_model->get_categories_for_front();
        $data['categories'] = $categories;
        $point = $this->points_model->get_point_by_url_for_front($point);
        $sport = $this->sports_model->get_sport_by_url_for_front($sport);
        $category = $this->categories_model->get_category_by_url_for_front($category);
        $subways = $this->subways_model->get_subways_for_point();
        $data['subways'] = $subways;

        $data['stitle'] = $point['name'];
        $data['category'] = $category;
        $data['sport'] = $sport;
//        $point['name'] = htmlspecialchars(stripslashes($point['name']));
        $data['point'] = $point;

        $data['subway1'] = $this->points_model->get_subway_for_point_front($point['subway1_id']);
        $data['subway2'] = $this->points_model->get_subway_for_point_front($point['subway2_id']);

        $data['halls'] = $this->points_model->get_halls_for_point_for_front($point['id']);

        $treners = $this->points_model->get_treners_for_point_for_front($point['id']);
        $data['treners'] = array_chunk($treners, 4);
        $data['images'] = $this->points_model->get_images_for_point_for_front($point['id']);

        $sports = $this->sports_model->get_sports_for_category_front($category['id']);
        $data['sports'] = $sports;
        if (!$point):
            $this->output->set_status_header('404');
            $this->load->view('front/pages/404', $data);
        else:
            $this->load->view('front/templates/metahead', $data);
            $this->load->view('front/templates/header', $data);
            $this->load->view('front/templates/sub-menu', $data);
            $this->load->view('front/templates/filters', $data);
            $this->load->view('front/pages/point', $data);
            $this->load->view('front/templates/footer', $data);
        endif;
    }

    public function news($new = null, $page = null) {
        $data['is_browser'] = $this->agent->is_browser();
        $categories = $this->categories_model->get_categories_for_front();
        $data['categories'] = $categories;

        $new = $this->news_model->get_new_by_url_for_front($new);
        if (!$new) {
            $data['title'] = 'Новости';
            $data['banner'] = $this->banners_model->get_banner_for_front('news');

            $this->load->library('pagination');

            $config['base_url'] = '/news/';
            $config['total_rows'] = count($this->news_model->get_news_for_front());
            $config['per_page'] = 2;
            $config['uri_segment'] = 2;

            $config['full_tag_open'] = '';
            $config['full_tag_close'] = '';

            $config['first_link'] = 'Начало';
            $config['first_tag_open'] = '<li class="start">';
            $config['first_tag_close'] = '</li>';

            $config['last_link'] = 'Конец';
            $config['last_tag_open'] = '<li class="finish">';
            $config['last_tag_close'] = '</li>';

            $config['prev_link'] = 'Предыдущая';
            $config['prev_tag_open'] = '<li class="first_child">';
            $config['prev_tag_close'] = '</li>';

            $config['next_link'] = 'Следующая';
            $config['next_tag_open'] = '<li class="last_child">';
            $config['next_tag_close'] = '</li>';

            $config['cur_tag_open'] = '<li class="active">';
            $config['cur_tag_close'] = '</li>';

            $config['num_tag_open'] = '<li>';
            $config['num_tag_close'] = '</li>';

            $this->pagination->initialize($config);

            if ($page) {
                $startFrom = $page;
            } else {
                $startFrom = 0;
            }
            $data['news'] = $this->news_model->get_news_for_pagination($startFrom);
            $data['tags'] = $this->main_model->get_tags(null, 'news');
            $data['newsCategories'] = $this->newscategories_model->get_newscategories();

            $this->load->view('front/templates/metahead', $data);
            $this->load->view('front/templates/header', $data);
            $this->load->view('front/templates/sub-menu', $data);
            $this->load->view('front/pages/news', $data);
            $this->load->view('front/templates/footer', $data);
        } else {
            $data['title'] = mb_ucfirst($new['name']);
            $data['new'] = $new;

            $this->load->view('front/templates/metahead', $data);
            $this->load->view('front/templates/header', $data);
            $this->load->view('front/templates/sub-menu', $data);
            $this->load->view('front/pages/new', $data);
            $this->load->view('front/templates/footer', $data);
        }
    }

    public function incnewviews() {
        if ($this->input->post('id')) {
            $id = $this->input->post('id');
            $this->front_model->update_new_views($id);
        }
    }

    public function incblogviews() {
        if ($this->input->post('id')) {
            $id = $this->input->post('id');
            $this->front_model->update_blog_views($id);
        }
    }

    public function incviews() {
        $id = $this->input->post('id');
        $this->banners_model->update_banner_views($id);
    }

    public function blog($blog = false, $page = false) {
        $data['is_browser'] = $this->agent->is_browser();
        $categories = $this->categories_model->get_categories_for_front();
        $data['categories'] = $categories;

        $blog = $this->blogs_model->get_blog_by_url_for_front($blog);
        if (!$blog) {
            $data['title'] = 'Блог';

            $this->load->library('pagination');

            $config['base_url'] = '/blog/';
            $config['total_rows'] = count($this->blogs_model->get_blogs_for_front());
            $config['per_page'] = 5;
            $config['uri_segment'] = 2;

            $config['full_tag_open'] = '';
            $config['full_tag_close'] = '';

            $config['prev_link'] = 'Предыдущая';
            $config['prev_tag_open'] = '<li class="first_child">';
            $config['prev_tag_close'] = '</li>';

            $config['next_link'] = 'Следующая';
            $config['next_tag_open'] = '<li class="last_child">';
            $config['next_tag_close'] = '</li>';

            $config['cur_tag_open'] = '<li class="active">';
            $config['cur_tag_close'] = '</li>';

            $config['num_tag_open'] = '<li>';
            $config['num_tag_close'] = '</li>';

            $this->pagination->initialize($config);

            if ($page) {
                $startFrom = $page;
            } else {
                $startFrom = 0;
            }

            $data['posts'] = $this->blogs_model->get_blogs_for_pagination($startFrom);
            $data['tags'] = $this->main_model->get_tags(null, 'blog');

            $data['banner'] = $this->banners_model->get_banner_for_front('blog');

            $this->load->view('front/templates/metahead', $data);
            $this->load->view('front/templates/header', $data);
            $this->load->view('front/templates/sub-menu', $data);
            $this->load->view('front/pages/posts', $data);
            $this->load->view('front/templates/footer', $data);
        } else {
            $data['title'] = mb_ucfirst($blog['name']);
            $data['blog'] = $blog;

            $this->load->view('front/templates/metahead', $data);
            $this->load->view('front/templates/header', $data);
            $this->load->view('front/templates/sub-menu', $data);
            $this->load->view('front/pages/blog', $data);
            $this->load->view('front/templates/footer', $data);
        }
    }

    public function _mail_encode($text, $encoding) {
        $result = "=?" . $encoding . "?b?" . base64_encode($text) . "?=";
        return $result;
    }

    public function find_point() {
        if ($this->input->post()) {
            $data['stitle'] = 'Поиск спортивного клуба';

            $data['categories'] = $categories = $this->categories_model->get_categories_for_front();
            $data['subways'] = $subways = $this->subways_model->get_subways_for_point();
            $data['category_id'] = $category_id = $this->input->post('category');
            $data['sport_id'] = $sport_id = $this->input->post('sport');

            $data['category'] = $this->categories_model->get_categories($category_id);
            $data['sport'] = $this->sports_model->get_sports($category_id);

            $data['subway_name'] = $subway_name = $this->input->post('subway');
            $data['sports'] = $sports = $this->sports_model->get_sports_for_category_front($category_id);
            $data['searched_points'] = $result_arr = $this->points_model->get_searched_points_for_front($sport_id, $subway_name);
            $this->load->view('front/templates/metahead', $data);
            $this->load->view('front/templates/header', $data);
            $this->load->view('front/templates/sub-menu', $data);
            $this->load->view('front/pages/search_points_results', $data);
            $this->load->view('front/templates/footer', $data);
        } else {
            redirect('/');
        }
    }

    public function sendrequest($action = null) {
        if (!$action) {
            $this->load->view('front/pages/sendrequest');
        } elseif ($action == 'save') {
            if ($this->input->post('do') == 'sendrequest') {
                $this->form_validation->set_rules('name', 'Имя', 'trim|required|xss_clean');
                $this->form_validation->set_rules('age', 'Возраст', 'trim|required|xss_clean');
                $this->form_validation->set_rules('sex', 'Пол', 'trim|required|xss_clean');
                $this->form_validation->set_rules('weight', 'Вес', 'trim|required|xss_clean');
                $this->form_validation->set_rules('sports', 'Какими видами спорта хотели бы заниматься', 'trim|required|xss_clean');
                $this->form_validation->set_rules('subway', 'Ближайшее метро', 'trim|required|xss_clean');
                $this->form_validation->set_rules('contrains', 'Противопоказания от врача', 'trim|required|xss_clean');
                $this->form_validation->set_rules('canpay', 'Сколько готовы платить в месяц', 'trim|required|xss_clean');
                $this->form_validation->set_rules('email', 'E-mail', 'trim|required|valid_email|xss_clean');
                $this->form_validation->set_rules('phone', 'Телефон', 'trim|required|xss_clean');

                $this->form_validation->set_error_delimiters('<p style="color:red;">', '</p>');

                if ($this->form_validation->run() == FALSE) {
                    $this->load->view('front/pages/sendrequest');
                } else {
                    $arr = array(
                        'error' => '<div class="form-item" style="color:green; font-weight:bold;padding: 10px 30px; margin-top: 150px;"><strong>Спасибо! </strong>Ваша заявка была успешно отправлена! Ожидайте, в скором времени наш менеджер свяжется с вами</div>'
                    );
                    echo $arr['error'];
                    $this->front_model->set_request();

                    $admin_email = $this->main_model->get_adm_email();
                    $admin_email = $admin_email['email'];


                    if (valid_email($admin_email)) {
                        $config = array(
                            'protocol' => 'smtp',
                            'smtp_host' => 'ssl://smtp.googlemail.com',
                            'smtp_port' => 465,
                            'smtp_user' => 'officialakniet@gmail.com',
                            'smtp_pass' => 'googstud321',
                            'mailtype' => 'html',
                            'charset' => 'utf-8'
                        );
                        $this->load->library('email');
                        $this->email->initialize($config);

                        $this->email->set_newline("\r\n");
                        $this->email->from('support@jeisport.ru', 'Сайт ' . str_ireplace('http://', '', substr(base_url(), 0, -1)));
                        $this->email->to($admin_email);
                        $this->email->subject('Заявка на подбор клуба на сайте ' . str_ireplace('http://', '', substr(base_url(), 0, -1)));
                        $this->email->message(
                                'Имя: ' . $this->input->post('name') . '<br/>' .
                                'Телефон: ' . $this->input->post('phone') . '<br/>' .
                                'Возраст: ' . $this->input->post('age') . '<br/>' .
                                'Пол: ' . $this->input->post('sex') . '<br/>' .
                                'Вес: ' . $this->input->post('weight') . '<br/>' .
                                'Какими видами спорта хотели бы заниматься: ' . $this->input->post('sports') . '<br/>' .
                                'Ближайшее метро: ' . $this->input->post('subway') . '<br/>' .
                                'Противопоказания от врача: ' . $this->input->post('contrains') . '<br/>' .
                                'Сколько готовы платить в месяц: ' . $this->input->post('canpay') . '<br/>' .
                                'E-mail: ' . $this->input->post('email') . '<br/>' .
                                'Дата отправки: ' . date('d.m.Y H:i:s') . '<br/>' .
                                'IP-адрес: ' . $this->input->ip_address()
                        );
                        $this->email->send();
                    }
                }
            } else {
                echo 'Неверный post запрос';
            }
        } else {
            echo 'Ошибка при отправке формы';
        }
    }

    public function getStudentTicket($action = null) {
        if (!$action) {
            $this->load->view('front/pages/sendStudentTicket');
        } elseif ($action == 'save') {
            if ($this->input->post('do') == 'sendsbs') {
                $this->form_validation->set_rules('name', 'Имя', 'trim|required|xss_clean');
                $this->form_validation->set_rules('sname', 'Фамилия', 'trim|required|xss_clean');
                $this->form_validation->set_rules('mname', 'Отчество', 'trim|required|xss_clean');
                $this->form_validation->set_rules('univer', 'Место учебы', 'trim|required|xss_clean');
                $this->form_validation->set_rules('contacts', 'Контакты', 'trim|required|xss_clean');
                $this->form_validation->set_rules('delivery', 'Доставка', 'trim|xss_clean');

                $this->form_validation->set_error_delimiters('<p style="color:red;">', '</p>');

                if ($this->form_validation->run() == FALSE) {
//                    echo $_COOKIE['ordered'];
//                    setcookie('ordered', 'true', time() + 10);
                    $this->load->view('front/pages/sendStudentTicket');
                } else {
                    if (!isset($_COOKIE['ordered'])) {
                        setcookie('ordered', 'true', time() + 300);
                        $arr = array(
                            'error' => '<div class="form-item" style="color:green; font-weight:bold;padding: 10px 30px; margin-top: 30px; text-align: center;"><strong>Спасибо! </strong>Ваша заявка была успешно отправлена! Ожидайте, в скором времени наш менеджер свяжется с вами</div>'
                        );
                        echo $arr['error'];
                        $this->front_model->set_sbs();

                        if ($this->input->post('delivery') == 'courier') {
                            $delivery = 'При доставке курьеру';
                        } elseif ('self') {
                            $delivery = 'Онлайн (заберу сам(а))';
                        } else {
                            $delivery = 'Не указано';
                        }
                        $date = date('d.m.Y H:i:s');
                        $site = str_ireplace('http://', '', substr(base_url(), 0, -1));
                        $text = "Новая заявка СБС";
                        //                            . " Имя: " . $this->input->post('name')
                        //                            . " Фамилия: " . $this->input->post('sname')
                        //                            . " Отчество: " . $this->input->post('mname')
                        //                            . " Место учебы: " . $this->input->post('univer')
                        //                            . " Контакты: " . $this->input->post('contacts')
                        //                            . " Оплата: " . $delivery
                        //                            . " Дата отправки: " . $date
                        //                            . " IP-адрес: " . $this->input->ip_address();

                        $admin_email = $this->main_model->get_adm_email();
                        $admin_email = $admin_email['email'];

                        if (valid_email($admin_email)) {
                            $config = array(
                                'protocol' => 'smtp',
                                'smtp_host' => 'ssl://smtp.googlemail.com',
                                'smtp_port' => 465,
                                'smtp_user' => 'officialakniet@gmail.com',
                                'smtp_pass' => 'googstud321',
                                'mailtype' => 'html',
                                'charset' => 'utf-8');
                            $this->load->library('email');
                            $this->email->initialize($config);

                            $this->email->set_newline("\r\n");
                            $this->email->from('support@jeisport.ru', 'Сайт ' . str_ireplace('http://', '', substr(base_url(), 0, -1)));
                            $this->email->to($admin_email);
                            $this->email->subject('Новая заявка на покупку студенческого билета на сайте ' . str_ireplace('http://', '', substr(base_url(), 0, -1)));
                            $this->email->message(
                                    'Имя: ' . $this->input->post('name') . '<br/>' .
                                    'Фамилия: ' . $this->input->post('sname') . '<br/>' .
                                    'Отчество: ' . $this->input->post('mname') . '<br/>' .
                                    'Место учебы: ' . $this->input->post('univer') . '<br/>' .
                                    'Контакты: ' . $this->input->post('contacts') . '<br/>' .
                                    'Оплата: ' . $delivery . ' <br/>' .
                                    'Дата отправки: ' . date('d.m.Y H:i:s') .
                                    '<br/>' .
                                    'IP-адрес: ' . $this->input->ip_address()
                            );
                            $this->email->send();
                        }
//                        file_get_contents("http://sms.ru/sms/send?api_id=e82bd4ca-841a-6504-b1ca-7d57d5d17590&to=+996554709700&text=" . urlencode($text));
                    } else {
                        $arr = array(
                            'error' => '<div class="form-item" style="color:red; font-weight:bold;padding: 10px 30px; margin-top: 30px; text-align: center;">Подождите 5 мин и отправьте заявку снова.</div>'
                        );
                        echo $arr['error'];
                    }
                }
            } else {
                echo 'Неверный post запрос';
            }
        } else {
            echo 'Ошибка при отправке формы';
        }
    }

    public function send_backcall_from_point($action = null) {
        if (!$action) {
            $this->load->view('front/pages/sendbackcall');
        } elseif ($action == 'save') {
            if ($this->input->post('do') == 'sendbackcall') {
                $this->form_validation->set_rules('name', 'Имя', 'trim|required|xss_clean');
                $this->form_validation->set_rules('phone', 'Телефон', 'trim|required|xss_clean');

                $this->form_validation->set_error_delimiters('<p style="color:red;">', '</p>');

                if ($this->form_validation->run() == FALSE) {
                    $this->load->view('front/pages/sendbackcall');
                } else {
                    $arr = array(
                        'error' => '<div class="form-item" style="color:green; font-weight:bold;padding: 10px 30px; margin-top: 30px; text-align: center;"><strong>Спасибо! </strong>Ваша заявка была успешно отправлена! Ожидайте, в скором времени наш менеджер свяжется с вами</div>'
                    );
                    echo $arr['error'];
                    $this->front_model->set_backcall();
                    $point_url = $this->input->post('point_url');
                    preg_match('/([_a-z0-9-]+)\/$/i', $point_url, $matches);
                    $point = $this->points_model->get_point_by_url_for_front($matches[1]);
                    $point_email = $point['admemail'];

                    $admin_email = $this->main_model->get_adm_email();
                    $admin_email = $admin_email['email'];


                    if (valid_email($point_email)) {
                        $config = array(
                            'protocol' => 'smtp',
                            'smtp_host' => 'ssl://smtp.googlemail.com',
                            'smtp_port' => 465,
                            'smtp_user' => 'officialakniet@gmail.com',
                            'smtp_pass' => 'googstud321',
                            'mailtype' => 'html', 'charset' => 'utf-8'
                        );
                        $this->load->library('email');
                        $this->email->initialize($config);

                        $this->email->set_newline("\r\n");
                        $this->email->from('support@jeisport.ru', 'Заявка на звонок с сайта ' . str_ireplace('http://', '', substr(base_url(), 0, -1)));
                        $this->email->to($point_email);
                        $this->email->cc($admin_email);
                        $this->email->subject('Новый заказ на обратный звонок');
                        $this->email->message(
                                'Имя: ' . $this->input->post('name') . '<br/>' .
                                'Телефон: ' . $this->input->post('phone') . '<br/>' .
                                'Ссылка на спорт. точку: <a href="' . str_ireplace('http://', '', substr(base_url(), 0, -1)) . $this->input->post('point_url') . '">' . str_ireplace('http://', '', substr(base_url(), 0, -1)) . $this->input->post('point_url') . '</a><br/>' .
                                'Дата отправки: ' . date('d.m.Y H:i:s') . '<br/>' .
                                'IP-адрес: ' . $this->input->ip_address()
                        );
                        $this->email->send();
                    }
                }
            } else {
                echo 'Неверный post запрос';
            }
        } else {
            echo 'Ошибка при отправке формы';
        }
    }

    public function contacts() {
        if (!file_exists(APPPATH . '/views/front/pages/contacts.php')) {
            $this->output->set_status_header('404');
            $this->load->view('front/pages/404', $data);
        }

        if ($this->input->post('do') == 'sendfeedback') {
            $this->form_validation->set_rules('name', 'Имя', 'trim|required|xss_clean');
            $this->form_validation->set_rules('email', 'E-mail', 'trim|valid_email|required|xss_clean');
            $this->form_validation->set_rules('phone', 'Телефон', 'trim|required|xss_clean');
            $this->form_validation->set_rules('theme', 'Тема сообщения', 'trim|required|xss_clean');
            $this->form_validation->set_rules('msg', 'Сообщение', 'trim|required|xss_clean');
            $this->form_validation->set_error_delimiters('<p style="color:red;margin-left:15px;">', '</p>');
            if ($this->form_validation->run() == FALSE) {
                $categories = $this->categories_model->get_categories_for_front();

                $data['title'] = 'Контакты Jeisport - Самая обширная база спортивных клубов Москвы!';
                $data['categories'] = $categories;

                $this->load->view('front/templates/metahead', $data);
                $this->load->view('front/templates/header', $data);
                $this->load->view('front/templates/sub-menu', $data);
                $this->load->view('front/pages/contacts', $data);
                $this->load->view('front/templates/footer', $data);
            } else {
                $arr = array(
                    'error' => '<div class="form-item" style="color:green; font-weight:bold;padding: 10px 30px;"><strong>Спасибо! </strong>Ваше сообщение было успешно отправлено! Ожидайте, в скором времени наш менеджер ответит вам</div>'
                );
                $this->session->set_userdata($arr);
                $this->front_model->save_feedback();

                $admin_email = $this->main_model->get_adm_email();
                $admin_email = $admin_email['email'];


                if (valid_email($admin_email)) {
                    $config = array(
                        'protocol' => "smtp",
                        'smtp_host' => "ssl://smtp.googlemail.com",
                        'smtp_port' => 465,
                        'smtp_user' => "officialakniet@gmail.com", 'smtp_pass' => "googstud321", 'mailtype' => "html",
                        'charset' => "utf-8"
                    );
                    $this->load->library('email');
                    $this->email->initialize($config);

                    $this->email->set_newline("\r\n");
                    $this->email->from('support@jeisport.ru', 'Сайт ' . str_ireplace('http://', '', substr(base_url(), 0, -1)));
                    $this->email->to($admin_email);
                    $this->email->subject('Новое сообщение с сайта ' . str_ireplace('http://', '', substr(base_url(), 0, -1)));
                    $this->email->message(
                            'Имя: ' . $this->input->post('name') . '<br/>' .
                            'E-mail: ' . $this->input->post('email') . '<br/>' .
                            'Телефон: ' . $this->input->post('phone') . '<br/>' .
                            'Тема сообщения: ' . $this->input->post('theme') . '<br/>' .
                            'Сообщение: ' . $this->input->post('msg') . '<br/>' .
                            'Дата отправки: ' . date('d.m.Y H:i:s') . '<br/>' .
                            'IP-адрес: ' . $this->input->ip_address()
                    );
                    $this->email->send();
                }

                redirect('contacts');
            }
        } else {
            $categories = $this->categories_model->get_categories_for_front();
            $data['title'] = 'Контакты Jeisport - Самая обширная база спортивных клубов Москвы!'

            ;
            $data['categories'] = $categories;

            $this->load->view('front/templates/metahead', $data);
            $this->load->view('front/templates/header', $data);
            $this->load->view('front/templates/sub-menu', $data);

            $this->load->view('front/pages/contacts', $data);
            $this->load->view('front/templates/footer', $data);
        }
    }

    public function trener($id) {
        $trener = $this->points_model->get_trener_for_point($id);
        $data['point'] = $this->input->post('point');
        $data['trener'] = $trener;
        $this->load->view('front/pages/trener', $data);
    }

    public function get_sports_by_category() {
        $category = $this->input->post('category');
        $sports = $this->sports_model->get_ordered_sports($category);
        foreach ($sports as $sport) {
            echo '<option value="' . $sport ['id'] . '">' . $sport ['name'] . '</option>';
        }
    }

}
