<div class="row">
    <div class="col-md-12">
        <a href="/admin/sports">
            <button type="button" class="btn btn-default btn-default"><span class='glyphicon glyphicon-step-backward'></span> Назад к списку</button>
        </a>
    </div>
</div>
<div class="page-header">
    <h2>Добавление нового вида спорта</h2>
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
<?= form_open_multipart('admin/sports/add') ?>
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
            <label for="url">Категория</label>
            <select name="category" class="form-control" id="url" required>
                <option value="" disabled style="display: none;">Выберите категорию...</option>
                <?php foreach ($categories as $category): ?>
                <option value="<?= $category['id'] ?>"><?= $category['name'] ?></option>>
                <?php endforeach; ?>
            </select>
        </div>
        <div class="form-group">
            <label for="image">Миниатюра</label>
            <input name='image' type="file" id="image" required>
            <p class="help-block">Выберите миниатюру для категории</p>
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