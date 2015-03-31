<div class="col-md-10">
    <div class="row">
        <div class="col-md-12">
            <a href="/admin/settings/news">
                <button type="button" class="btn btn-default btn-default"><span class='glyphicon glyphicon-step-backward'></span> Назад к списку</button>
            </a>
        </div>
    </div>
    <div class="page-header">
        <h2>Редактирование новости</h2>
    </div>
    <?= form_open_multipart('admin/settings/news/edit/' . $new['id']) ?>
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
                <div class="well"><img width="200px" style="border: 1px solid black; background-color: grey;" src="/images/news/<?= $new['image'] ?>"></div>
                <input name='image' type="file" class="btn-file" id="image">
                <p class="help-block">Выберите главное фото для спортивной точки</p>
            </div>
            <div class="form-group">
                <label for="name">Название</label>
                <input name='name' value="<?= $new['name'] ?>" type="text" class="form-control" id="name" placeholder="Название">
            </div>
            <div class="form-group">
                <label for="url">ЧПУ</label>
                <input disabled name='url' value="<?= $new['url'] ?>" type="text" class="form-control" id="url" placeholder="Чпу">
            </div>

            <div class="form-group">
                <label for="date">Дата публикаци</label>
                <div class='input-group date' id='datetimepicker1'>
                    <input name="date" id="date" type='text' value="<?= date('d.m.Y H:i', strtotime($new['date'])) ?>" class="form-control" />
                    <span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>
                </div>
            </div>
            <script type="text/javascript">
                $(function () {
                    $('#datetimepicker1').datetimepicker();
                });
            </script>
            <div class="form-group">
                <label for="category_id">Категория</label>
                <select name="category_id" class="form-control" id="category_id">
                    <option value="0" selected>Нет</option>
                    <?php foreach ($newcategories as $newcategory): ?>
                        <option <?php
                        if ($newcategory['id'] == $new['category_id']) {
                            echo 'selected';
                        }
                        ?> value="<?= $newcategory['id'] ?>"><?= $newcategory['name'] ?></option>
                        <?php endforeach; ?>
                </select>
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label for="title">Мета title</label>
                <input name='title' value="<?= $new['title'] ?>" type="text" class="form-control" id="title" placeholder="">
            </div>
            <div class="form-group">
                <label for="desc">Мета description</label>
                <textarea name='desc' rows="5" class="form-control" id="desc" placeholder=""><?= $new['desc'] ?></textarea>
            </div>
            <div class="form-group">
                <label for="keyw">Мета keywords</label>
                <textarea name='keyw' rows="3" class="form-control" id="keyw" placeholder=""><?= $new['keyw'] ?></textarea>
            </div>
            <div class="form-group">
                <label style="display: block;">Теги</label>
                <div class='tags'>
                    <?php foreach ($tags as $tag): ?>
                        <div class="input-group tag" style="margin-top: 10px; width:50%">
                            <input type="text" maxlength="10" tag="<?= $tag['id'] ?>" value="<?= $tag['name'] ?>" class="form-control" disabled required>
                            <span class="input-group-btn del_ex_tag">
                                <button class="btn btn-danger" title="Удалить">
                                    <span class="glyphicon glyphicon-remove"></span>
                                </button>
                            </span>
                        </div>
                    <?php endforeach; ?>
                </div>
                <a href="#" id="add_tag_field" style="margin-top:10px;" class="btn btn-primary"><span class="glyphicon glyphicon-plus"></span></a>
                <p class="help-block">В каждое поле по одному тегу</p>
            </div>
            <div class="checkbox">
                <label>
                    <input name='active' <?php
                    if ($new['active'] == 'on') {
                        echo 'checked';
                    }
                    ?> type="checkbox"> Активен
                </label>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="form-group">
                <label for="text">Текст новости</label>
                <textarea name="text" id="text" rows="30">
                    <?= $new['text'] ?>
                </textarea>
            </div>
            <script>
                CKEDITOR.replace('text');
            </script>
        </div>
    </div>
    <div class="row" style="margin-top: 10px;">
        <div class="col-md-12">
            <input type='hidden' name='do' value='newEdit'>
            <button type="submit" class="btn btn-default">Сохранить</button>
        </div>
    </div>
    <?= form_close(); ?>
</div>
