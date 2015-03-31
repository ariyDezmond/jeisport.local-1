<div class="col-md-10">
    <div class="row">
        <div class="col-md-12">
            <a href="/admin/settings/subways">
                <button type="button" class="btn btn-default btn-default"><span class='glyphicon glyphicon-step-backward'></span> Назад к списку</button>
            </a>
        </div>
    </div>
    <div class="page-header">
        <h2>Редактирование станции метро</h2>
    </div>
    <?= form_open_multipart('admin/settings/subways/edit/' . $subway['id']) ?>
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
                <div class="well"><img width="30px" src="/images/subways/<?= $subway['image'] ?>"></div>
                <input name='image' type="file" class="btn-file" id="image">
                <p class="help-block">Выберите фото</p>
            </div>
            <div class="form-group">
                <label for="name">Название</label>
                <input required name='name' value="<?= $subway['name'] ?>" type="text" class="form-control" id="name" placeholder="Название">
            </div>
            <div class="checkbox">
                <label>
                    <input name='active' <?php
                    if ($subway['active'] == 'on') {
                        echo 'checked';
                    }
                    ?> type="checkbox"> Активен
                </label>
            </div>
        </div>
    </div>
    <div class="row" style="margin-top: 10px;">
        <div class="col-md-12">
            <input type='hidden' name='do' value='subwayEdit'>
            <button type="submit" class="btn btn-default">Сохранить</button>
        </div>
    </div>
    <?= form_close(); ?>
</div>
