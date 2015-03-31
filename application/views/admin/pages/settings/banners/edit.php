<div class="col-md-10">
    <div class="row">
        <div class="col-md-12">
            <a href="/admin/settings/banners">
                <button type="button" class="btn btn-default btn-default"><span class='glyphicon glyphicon-step-backward'></span> Назад к списку</button>
            </a>
        </div>
    </div>
    <div class="page-header">
        <h2>Редактирование рекламного баннера</h2>
    </div>
    <?= form_open_multipart('admin/settings/banners/edit/' . $banner['id']) ?>
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
            <div class="checkbox">
                <label>
                    <input name='active' <?php
                    if ($banner['active'] == 'on') {
                        echo 'checked';
                    }
                    ?> type="checkbox"> Активен
                </label>
            </div>
            <div class="form-group">
                <label for="image">Изображение</label><br/>
                <div class="well"><img width="150px" src="/images/banners/<?= $banner['image'] ?>"></div>
                <input name='image' type="file" class="btn-file" id="image">
                <p class="help-block">Выберите фото</p>
            </div>
            <div class="form-group">
                <label for="url">Ссылка</label>
                <input required name='url' value="<?= $banner['url'] ?>" type="url" class="form-control" id="url" placeholder="Ссылка на баннере">
            </div>
            <div class="form-group">
                <label for="pos">Позиция</label>
                <select name="pos" class="form-control" id="pos" required>
                    <!--<option value="" disabled style="display: none;">Выберите вид спорта...</option>-->
                    <option value="main" <?php if ($banner['pos'] == 'main'): ?>selected<?php endif ?>>На главной</option>
                    <option value="news" <?php if ($banner['pos'] == 'news'): ?>selected<?php endif ?>>На странице "Новости"</option>
                    <option value="blog" <?php if ($banner['pos'] == 'blog'): ?>selected<?php endif ?>>На странице "Блог"</option>
                </select>
            </div>
            <script>
                $(document).on('click', '.radio_clicks_pay', function () {
//                    $('#max_shows').val('');
//                    $('#max_clicks').val('');
                    $('#max_clicks').show();
                    $('#max_shows').hide();
                });
                $(document).on('click', '.radio_shows_pay', function () {
//                    $('#max_shows').val('');
//                    $('#max_clicks').val('');
                    $('#max_shows').show();
                    $('#max_clicks').hide();
                });
            </script>
            <div class="form-group">
                <div class="radio_clicks_pay">
                    <input type="radio" name="payment" value="clicks" <?php if ($banner['payment'] == 'clicks') echo 'checked' ?> id="payment_clicks">
                    <label for="payment_clicks">Оплата за количество кликов</label>
                </div>
                <div class="radio_shows_pay">
                    <input type="radio" name="payment" value="shows" <?php if ($banner['payment'] == 'shows') echo 'checked' ?> id="payment_shows">
                    <label for="payment_shows">Оплата за количество показов</label>
                </div>
                <input name='max_clicks' value="<?= $banner['max_clicks'] ?>" type="number" class="form-control" style="<?php if ($banner['payment'] == 'shows') echo 'display:none;' ?>" id="max_clicks" placeholder="Введите количество кликов">
                <input name='max_shows' value="<?= $banner['max_shows'] ?>" type="number" class="form-control" style="<?php if ($banner['payment'] == 'clicks') echo 'display:none;' ?>" id="max_shows" placeholder="Введите количество показов">
            </div>
        </div>
        <div class="col-md-6">
            <div class="panel panel-default">
                <div class="panel-heading">Статус</div>
                <div class="panel-body">
                    <?php
                    if ($banner['status'] == 'on') {
                        echo '<span style="-webkit-user-select: none;" class="label label-success active">показывается</span>';
                    } else {
                        echo '<span style="-webkit-user-select: none;" class="label label-danger active">остановлен</span>';
                    }
                    ?></div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="panel panel-default">
                <div class="panel-heading">Кликов <a href='/admin/banners/delete_clicks/<?= $banner['id'] ?>'><span style='cursor: pointer;' class="glyphicon glyphicon-trash"></span></a></div>
                <div class="panel-body"><?= $banner['clicks'] ?></div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="panel panel-default">
                <div class="panel-heading">Показов <a href='/admin/banners/delete_views/<?= $banner['id'] ?>'><span style='cursor: pointer;' class="glyphicon glyphicon-trash"></span></a></div>
                <div class="panel-body"><?= $banner['views'] ?></div>
            </div>
        </div>
    </div>
    <div class="row" style="margin-top: 10px;">
        <div class="col-md-12">
            <input type='hidden' name='do' value='bannerEdit'>
            <button type="submit" class="btn btn-default">Сохранить</button>
        </div>
    </div>
    <?= form_close(); ?>
</div>