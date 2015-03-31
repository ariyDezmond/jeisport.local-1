<body>
    <script>
        (function (cash) {
            $(window).load(function () {

                $('.modal-open').on('click', function () {
                    var modal_id = $(this).data('modal-id');
                    $(modal_id).fadeIn();
                    return false;
                });
<?php if (!$this->session->userdata('phpbb_username') && !$this->session->userdata('phpbb_userpassword')): ?>
                    $('.modal-open2').on('click', function () {
                        var modal_id = $(this).data('modal-id');
                        $(modal_id).fadeIn();
                        return false;
                    });
<?php endif; ?>
                $('.modal-wrapper .bg, .modal-wrapper .close-modal').on('click', function () {
                    $(this).parents('.modal-wrapper').fadeOut();
                    return false;
                });

                $('.plagination').click(function (event) {
                    $('html,body').animate({scrollTop: $($(this).attr('href')).offset().top + "px"}, 1000);
                    event.preventDefault();
                });

                // $('[data-tooltip]').hover(function(){ var t = $(this).data('tooltip');$(this).data('tooltip',$(this).html());$(this).html(t);}, function(){var t = $(this).data('tooltip');$(this).data('tooltip',$(this).html());$(this).html(t);});

            });
        })(jQuery);
    </script>

    <?php if (!$this->session->userdata('phpbb_username') && !$this->session->userdata('phpbb_userpassword')): ?>
        <a href="#" data-modal-id="#modal1" class="enter modal-open2"><img src="/img/social/icon_enter.png" alt="">Вход</a>
        <a href="/getStudentTicket/" data-modal-id="#modal2" class="ticket modal-open" style="top: 263px;"><img src="/img/social/icon_sbs.png" alt=""><span>СБС</span><i>Студенческий билет спортсмена</i></a>
    <?php else: ?>
        <a href="javascript:" data-modal-id="#modal1" class="enter modal-open2" style="width: auto; top: 220px; cursor: default;">Добро пожаловать, <?= $this->session->userdata('phpbb_username') ?>!</a>
        <a class="enter enter2" href="/forumlogin/logout">Выход</a>
        <a href="#" data-modal-id="#modal2" class="ticket modal-open"><img src="/img/social/icon_sbs.png" alt=""><span>СБС</span><i>Студенческий билет спортсмена</i></a>
        <!--<span style="text-decoration: underline;" onclick="window.location = '/forumlogin/login1'">Перейти в форум</span>-->
    <?php endif; ?>


    <!-- registration / enter -->

    <div id="modal1" class="modal-wrapper">
        <div class="bg"></div>
        <div class="modal modal-enter">
            <div class="modal-title"><a href="#" class="close-modal"></a></div>


            <div class="modal-content">
                <?php if (!$this->session->userdata('phpbb_username') && !$this->session->userdata('phpbb_userpassword')): ?>
                    <h3>Вход или регистрация</h3>
                    <div class="registration-block">
                        <form method="post" action="/forum/ucp.php?mode=register&sid=9tq6r0t2gd34g38a68f0t01f3gf68a54">
                            <span>Регистрация</span>
                            <input type="text" name="username" placeholder="Логин">
                            <input type="text" name="email" placeholder="E-mail" />
                            <input type="password" name="new_password" placeholder="Пароль">
                            <input type="password" name="password_confirm" placeholder="Повторите пароль">
                            <input type="hidden" name="redirect" value="/forum/" />
                            <input type="hidden" name="login" value="external" />
                            <input type="hidden" name="from_external" value="external" />
                            <input type="hidden" name="tz" value="Asia/Bishkek" />
                            <input type="hidden" name="lang" value="ru" />
                            <input type="hidden" name="creation_time" value="<?= time() ?>" />
                            <input type="hidden" name="submit" value="1" />
                            <input type="submit" value="Регистрация">
                        </form>
                    </div>
                    <div class="enter-block">
                        <form method="get" action="/forumlogin/login">
                            <span>Авторизация</span>
                            <a href="#" class="fc_icon"></a><a href="#" class="tw_icon"></a>
                            <input type="text" name="username" placeholder="Логин или e-mail">
                            <input type="password" name="password" placeholder="Пароль">
                            <input type="hidden" name="redirect" value="/" />
                            <input type="hidden" name="login" value="external" />
                            <input type="submit" value="Войти">
                        </form>
                    </div>
                    <div class="clear"></div>
                    <p>Вся информция остается конфиденциальной и не передается третьим лицам</p>
                <?php endif; ?>
            </div>
        </div>
    </div>

    <div id="modal2" class="modal-wrapper">
        <div class="bg"></div>
        <div class="modal modal-registration">
            <div class="modal-title"><a href="#" class="close-modal close-modal2"></a></div>
            <div class="modal-content">
                <h3>Получи скидку в спортивные клубы Москвы!</h3>
                <ul>
                    <li><img src="/img/popup_img/img_1.png" alt=""></li>
                    <li><img src="/img/popup_img/img_2.png" alt=""></li>
                    <li><img src="/img/popup_img/img_3.png" alt=""></li>
                    <li><img src="/img/popup_img/Untitled-4.png" alt=""></li>
                </ul>
                <p>Устали однообразно курсировать между домом и работой? Решили разбавить этот тандем яркой ноткой, занявшись своим телом и здоровьем, ведь «в здоровом теле – здоровый дух»? А может, вы ищете спортивные секции для детей, поскольку осенью снижается физическая активность, столь необходимая для полноценного развития ребенка? Тогда самое время сесть поудобнее и изучить самую актуальную и подробную информацию про спортивные клубы Москвы! </p>
                <div class="ticket_block">
                    <div class="cost">
                        <p>Стоимость 200 руб.</p>
                        <span>Доставка по Москве 350 рублей.</span>
                    </div>
                    <div class="ticket_form">
                        <div id="sbs_res"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="modal3" class="modal-wrapper">
        <div class="bg"></div>
        <div class="modal modal-questionnaire">
            <div class="modal-title"><a href="#" class="close-modal"></a></div>
            <div id="request_res"></div>
        </div>
    </div>

    <?php if (is_string($this->uri->segment(3))): ?>
        <div id="modal5" class="modal-wrapper">
            <div class="bg"></div>
            <div class="modal modal-callback">
                <div class="modal-title"><a href="#" class="close-modal"></a></div>
                <div class="modal-content">
                    <h3>Введите телефон и имя и наш менеджер  свяжется с Вами!</h3>
                    <div id="backcall_form"></div>
                    <div class="callback_bottom"></div>
                </div>
            </div>
        </div>

        <div id="modal6" class="modal-wrapper">
            <div class="bg"></div>
            <div class="modal modal-trainer" style="height: auto;">
                <div class="modal-title"><a href="#" class="close-modal"></a></div>
                <div class="modal-content">
                    <div class="trener_popup"></div>
                </div>
            </div>

        </div>

    <?php endif; ?>

    <header id="header">
        <div class="header_wrapper">
            <div class="logo">
                <a href="/"><img src="/img/logo.png" height="66" width="193" title="Логотип jeisport"></a>
            </div><!-- logo -->
            <ul>
                <li><a alt="Перейти на главную" title="Перейти на главную" href="/">Главная</a></li>
                <?php
                foreach ($categories as $category):
                    if ($category['active'] == 'on'):
                        ?>
                        <li>
                            <a alt="Перейти <?= lcfirst($category['name']) ?>" title="Перейти <?= $category['name'] ?>" style="background-image: #00a68e url(/images/categories/<?= $category['image'] ?>) center 22px no-repeat;" href="<?= '/' . $category['url'] ?>/"><?= $category['name'] ?></a>
                        </li>
                        <?php
                    endif;
                endforeach;
                ?>
            </ul><!-- navigation -->
        </div><!-- header wrapper -->
    </header><!-- header -->