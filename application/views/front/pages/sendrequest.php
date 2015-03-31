<div class="modal-content">
    <h3>Заявка на подбор клуба</h3>
    <?php
    if ($this->session->userdata('error')) {
        echo $this->session->userdata('error');
    }
    $this->session->unset_userdata('error');
    ?>
    <form action="javascript:" method="post">
        <span>Все поля обязательны для заполнения!</span>
        <input <?php
        if (strpos(validation_errors(), '"Имя"')) {
            echo 'style="border-color:red;"';
        }
        ?> name="name" value="<?= set_value('name') ?>" type="text" placeholder="Имя">
        <input <?php
        if (strpos(validation_errors(), '"Возраст"')) {
            echo 'style="border-color:red;"';
        }
        ?> name="age" value="<?= set_value('age') ?>" type="text" placeholder="Возраст">
        <input <?php
        if (strpos(validation_errors(), '"Пол"')) {
            echo 'style="border-color:red;"';
        }
        ?> name="sex" value="<?= set_value('sex') ?>" type="text" placeholder="Пол">
        <input <?php
        if (strpos(validation_errors(), '"Вес"')) {
            echo 'style="border-color:red;"';
        }
        ?> name="weight" value="<?= set_value('weight') ?>" type="text" placeholder="Вес">
        <input <?php
        if (strpos(validation_errors(), '"Какими видами спорта хотели бы заниматься"')) {
            echo 'style="border-color:red;"';
        }
        ?> name="sports" value="<?= set_value('sports') ?>" type="text" placeholder="Какими видами спорта хотели бы заниматься">
        <input <?php
        if (strpos(validation_errors(), '"Ближайшее метро"')) {
            echo 'style="border-color:red;"';
        }
        ?> name="subway" value="<?= set_value('subway') ?>" type="text" placeholder="Ближайшее метро">
        <input <?php
        if (strpos(validation_errors(), '"Противопоказания от врача"')) {
            echo 'style="border-color:red;"';
        }
        ?> name="contrains" value="<?= set_value('contrains') ?>" type="text" placeholder="Противопоказания от врача">
        <input <?php
        if (strpos(validation_errors(), '"Сколько готовы платить в месяц"')) {
            echo 'style="border-color:red;"';
        }
        ?> name="canpay" value="<?= set_value('canpay') ?>" type="text" placeholder="Сколько готовы платить в месяц">
        <input <?php
        if (strpos(validation_errors(), '"E-mail"')) {
            echo 'style="border-color:red;"';
        }
        ?> name="email" value="<?= set_value('email') ?>" type="text" placeholder="E-mail">
        <input <?php
        if (strpos(validation_errors(), '"Телефон"')) {
            echo 'style="border-color:red;"';
        }
        ?> name="phone" value="<?= set_value('name') ?>" type="text" placeholder="Телефон">
        <input type="hidden" name="do" value="sendrequest">
        <input id='send_request_btn' type="button" value="Отправить" onclick="javascript:sendbid()">
        <div id="send_request_img" style="text-align: center; display: none;"><img src="/img/loading2.gif"></div>
    </form>
    <p>Вся информция остается конфиденциальной и не передается третьим лицам</p>
</div>