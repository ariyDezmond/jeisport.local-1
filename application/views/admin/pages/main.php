<!-- Main component for a primary marketing message or call to action -->
<div class="jumbotron">
    <h1>Добро пожаловать!</h1>
    <p>Вы находитесь в административной части сайта: <?= str_ireplace('http://', '', substr(base_url(), 0, -1)); ?>, отсюда вы сможете управлять вашим сайтом.</p>
    <label for="url">Email администратора</label>
    <div class="input-group" style="width: 50%;">
        <span class="input-group-addon">@</span>
        <input type="text" placeholder="E-mail" class="form-control" value="<?= $adm_email['email'] ?>">
        <span class="input-group-btn">
            <button id="adm_email_save" class="btn btn-default" type="button">Сохранить</button>
        </span>
    </div>
    <br>
    <p>Начните с добавление <?= anchor('admin/categories', 'категорий') ?></p>
    <p>По всем вопросам и найденным ошибкам обращайтесь: protected.for@gmail.com, в теме укажите название вашего сайта.</p>
</div>