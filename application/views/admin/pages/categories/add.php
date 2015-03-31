<div class="row">
    <div class="col-md-12">
        <a href="/admin/categories">
            <button type="button" class="btn btn-default btn-default"><span class='glyphicon glyphicon-step-backward'></span> Назад к списку</button>
        </a>
    </div>
</div>
<div class="page-header">
    <h2>Добавление новой категории</h2>
</div>
<div class="row" style="margin-bottom: 5px;">
    <div class="col-md-12">
        <?= validation_errors(); ?>
        <?php
        if ($this->session->userdata('error')) {
            echo $this->session->userdata('error');
        }
        $this->session->unset_userdata('error');
        ?>
    </div>
</div>
<?= form_open_multipart('admin/categories/add') ?>
<div class="row">
    <div class="col-md-6">
        <div class="form-group">
            <label for="name">Название</label>
            <input name='name' value="<?= set_value('name') ?>" type="text" class="form-control name" id="name" placeholder="Название" required>
        </div>
        <div class="form-group">
            <label for="url">ЧПУ</label>
            <input name='url' value="<?= set_value('url') ?>" type="text" class="form-control name_translit" id="url" placeholder="Чпу" required>
        </div>
        <div class="form-group">
            <label for="h1">Заголовок</label>
            <input name='h1' value="<?= set_value('h1') ?>" type="text" class="form-control" id="h1" placeholder="Тег H1" required>
        </div>
        <div class="form-group">
            <label for="h2">Заголовок 2</label>
            <input name='h2' value="<?= set_value('h2') ?>" type="text" class="form-control" id="h2" placeholder="Тег H2" required>
        </div>
        <div class="form-group">
            <label for="image">Миниатюра</label>
            <input name='image' type="file" id="image" required>
            <p class="help-block">Выберите миниатюру для категории</p>
        </div>
        <div class="form-group">
            <label for="image2">Изображение</label>
            <input name='image2' type="file" id="image2" required>
            <p class="help-block">Выберите изображение для категории</p>
        </div>
        <div class="form-group">
            <label for="image3">Изображение при наведении</label>
            <input name='image3' type="file" id="image3" required>
            <p class="help-block">Выберите изображение которое будет использоваться при наведении</p>
        </div>
        <div class="checkbox">
            <label>
                <input name='active' type="checkbox"> Активен
            </label>
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group">
            <label for="title">Мета title</label>
            <input name='title' value="<?= set_value('title') ?>" type="text" class="form-control" id="title" placeholder="">
        </div>
        <div class="form-group">
            <label for="desc">Мета description</label>
            <textarea name='desc' rows="5" class="form-control" id="desc" placeholder=""><?= set_value('desc') ?></textarea>
        </div>
        <div class="form-group">
            <label for="keyw">Мета keywords</label>
            <textarea name='keyw' rows="3" class="form-control" id="keyw" placeholder=""><?= set_value('keyw') ?></textarea>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        <div class="form-group">
            <label for="text">Текст на странице</label>
            <textarea name="text" id="text" rows="30">

            </textarea>
        </div>
        <script>
            CKEDITOR.replace('text');
        </script>
    </div>
</div>
<div class="row" style="margin-top: 10px;">
    <div class="col-md-12">
        <button type="submit" class="btn btn-default">Добавить</button>
    </div>
</div>
<?= form_close(); ?>