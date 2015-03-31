<div class="content">
    <div class="wrapper">

        <ul class="breadcrumbs">
            <li><a href="/">Главная</a></li>
            <li><a href="/contacts/">Контакты</a></li>
        </ul><!-- breadcrumbs -->
        <div class="clear"></div>

        <h3 class="about_us_title contacts_title">Контакты</h3>

        <div class="location">
            <p>
                Российская Федерация, г. Москва<br>
                ул. Домская, дом 14, корпус 2<br>
                Ближайшее метро м. Шабаловское<br>
                Контактные телефоны:<br>
                Городской: +7(495) 669 56 83<br>
                Мобильный: +7(925) 421 21 28<br>
                График работы: <br>
                Понедельник - Пятница с 9.00 до 18.00<br>
                Выходные дни: Суббота - Воскресенье<br>
            </p>
        </div>

        <div class="about_us_form">
            <form method="POST" action="/contacts/" id="contacts">
                <?php
                if ($this->session->userdata('error')) {
                    echo $this->session->userdata('error');
                }
                $this->session->unset_userdata('error');
                ?>
                <h5>Вы можете отправить нам сообщение  в форме обратной связи</h5>

                <label for="name">Ваше имя</label>
                <input <?php
                if (strpos(validation_errors(), '"Имя"')) {
                    echo 'style="border-color:red;"';
                }
                ?> name="name" value="<?= set_value('name') ?>" id="name" type="text" placeholder="">

                <label for="email">Ваш e-mail</label>
                <input <?php
                if (strpos(validation_errors(), '"E-mail"')) {
                    echo 'style="border-color:red;"';
                }
                ?> name="email" value="<?= set_value('email') ?>" id="email" type="text" placeholder="">

                <label for="phone">Ваш телефон</label>
                <input <?php
                if (strpos(validation_errors(), '"Телефон"')) {
                    echo 'style="border-color:red;"';
                }
                ?> name="phone" value="<?= set_value('phone') ?>" id="phone" type="text" placeholder="">

                <label for="theme">Тема</label>
                <input <?php
                if (strpos(validation_errors(), '"Тема сообщения"')) {
                    echo 'style="border-color:red;"';
                }
                ?> name="theme" value="<?= set_value('theme') ?>" id="theme" type="text" placeholder="">

                <label for="msg">Текст сообщения</label>
                <textarea <?php
                if (strpos(validation_errors(), '"Сообщение"')) {
                    echo 'style="border-color:red;"';
                }
                ?> name="msg" id="msg" cols="30" rows="10"><?= set_value('msg') ?></textarea>
                <input type="hidden" name="do" value="sendfeedback">
                <input type="button" value="Отправить" onclick="$('#contacts').submit()">
            </form>
        </div>
        <div class="clear"></div>
        <h3 class="block-title">Карта города</h3>

        <div class="map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d35927.6332220147!2d37.62529134682288!3d55.75021429662227!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sru!2s!4v1422458205308" width="820" height="362" frameborder="0" style="border:0"></iframe>
        </div>

    </div><!-- wrapper -->
</div><!-- content -->