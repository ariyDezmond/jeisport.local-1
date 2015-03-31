<div class="row">
    <div class="col-md-12">
        <a href="/admin/sports">
            <button type="button" class="btn btn-default btn-default"><span class='glyphicon glyphicon-step-backward'></span> Назад к списку</button>
        </a>
    </div>
</div>
<div class="page-header">
    <h2>Редактирование вида спорта</h2>
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
<?= form_open_multipart('admin/sports/edit/' . $sport['id']) ?>
<div class="row">
    <div class="col-md-6">
        <div class="form-group">
            <label for="name">Название</label>
            <input name='name' value="<?= $sport['name'] ?>" type="text" class="form-control" id="name" placeholder="Название">
        </div>
        <div class="form-group">
            <label for="url">ЧПУ</label>
            <input name='url' value="<?= $sport['url'] ?>" type="text" class="form-control" id="url" placeholder="Чпу">
        </div>
        <div class="form-group">
            <label for="url">Категория</label>
            <?php
            $data = 'class="form-control"';
            echo form_dropdown('category', $categories, $selected, $data);
            ?>
        </div>
        <div class="form-group">
            <label for="image">Миниатюра</label><br/>
            <div class="well"><img width="200px" style="border: 1px solid black; background-color: grey;" src="/images/sports/<?= $sport['image'] ?>"></div>
            <input name='image' type="file" class="btn-file" id="image">
            <p class="help-block">Выберите миниатюру для вида спорта</p>
        </div>
        <div class="checkbox">
            <label>
                <input name='active' <?php
                if ($sport['active'] == 'on') {
                    echo 'checked';
                }
                ?> type="checkbox"> Активен
            </label>
        </div>
        <input type='hidden' name='do' value='sportEdit'>
    </div>
    <div class="col-md-6">
        <div class="form-group">
            <label for="title">Мета title</label>
            <input name='title' value="<?= $sport['title'] ?>" type="text" class="form-control" id="title" placeholder="">
        </div>
        <div class="form-group">
            <label for="desc">Мета description</label>
            <textarea name='desc' rows="5" class="form-control" id="desc" placeholder=""><?= $sport['desc'] ?></textarea>
        </div>
        <div class="form-group">
            <label for="keyw">Мета keywords</label>
            <textarea name='keyw' rows="3" class="form-control" id="keyw" placeholder=""><?= $sport['keyw'] ?></textarea>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        <div class="form-group">
            <label for="text">Текст на странице</label>
            <textarea name="text" id="text" rows="30">
                <?= $sport['text'] ?>
            </textarea>
        </div>
        <script>
            CKEDITOR.replace('text');
        </script>
    </div>
</div>
<div class="row" style="margin-top: 10px;">
    <div class="col-md-12">
        <button type="submit" class="btn btn-default">Сохранить</button>
    </div>
</div>
<?= form_close(); ?>