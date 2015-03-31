<div class="col-md-10">
    <div class="row">
        <div class="col-md-12">
            <a href="/admin/settings/news">
                <button type="button" class="btn btn-default btn-default"><span class='glyphicon glyphicon-step-backward'></span> Назад к списку</button>
            </a>
        </div>
    </div>
    <div class="page-header">
        <h2>Добавление новости</h2>
    </div>
    <?= form_open_multipart('admin/settings/news/add') ?>
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
    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                <label for="image">Изображение</label><br/>
                <input name='image' type="file" class="btn-file" id="image" required>
                <p class="help-block">Выберите фото</p>
            </div>
            <div class="form-group">
                <label for="name">Название</label>
                <input name='name' value="<?= set_value('name') ?>" type="text" class="form-control name" id="name" placeholder="Название" required>
            </div>
            <div class="form-group">
                <label for="url">ЧПУ</label>
                <input name='url' value="<?= set_value('url') ?>" type="text" class="form-control name_translit" id="url" placeholder="Чпу" required>
            </div>

            <div class="form-group">
                <label for="date">Дата публикаци</label>
                <div class='input-group date' id='datetimepicker1'>
                    <input name="date" id="date" type='text' value="<?= set_value('date') ?>" class="form-control" required />
                    <span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>
                </div>
            </div>
            <div class="form-group">
                <label for="url">Категория</label>
                <select name="category_id" class="form-control" id="category_id">
                    <option value="0" selected>Нет</option>
                    <?php foreach ($newcategories as $newcategory): ?>
                        <option value="<?= $newcategory['id'] ?>"><?= $newcategory['name'] ?></option>
                        <?php endforeach; ?>
                </select>
            </div>
            <script type="text/javascript">
                $(function () {
                    $('#datetimepicker1').datetimepicker();
                });
            </script>
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
            <div class="checkbox">
                <label>
                    <input name='active' type="checkbox"> Активен
                </label>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="form-group">
                <label for="text">Текст поста</label>
                <textarea name="text" id="text" rows="30">
                    <?= set_value('text') ?>
                </textarea>
            </div>
            <script>
                CKEDITOR.replace('text');
            </script>
        </div>
    </div>
    <div class="row" style="margin-top: 10px;">
        <div class="col-md-12">
            <input type='hidden' name='do' value='newAdd'>
            <button type="submit" class="btn btn-default">Сохранить</button>
        </div>
    </div>
    <?= form_close(); ?>
</div>
