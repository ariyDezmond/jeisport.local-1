<div class="col-md-10">
    <div class="row">
        <div class="col-md-12">
            <a href="/admin/settings/banners">
                <button type="button" class="btn btn-default btn-default"><span class='glyphicon glyphicon-step-backward'></span> Назад к списку</button>
            </a>
        </div>
    </div>
    <div class="page-header">
        <h2>Добавление рекламного баннера</h2>
    </div>
    <?= form_open_multipart('admin/settings/banners/add') ?>
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
                    <input name='active' type="checkbox"> Активен
                </label>
            </div>
            <div class="form-group">
                <label for="image">Изображение</label>
                <input required name='image' type="file" class="btn-file" id="image">
                <p class="help-block">Выберите фото</p>
            </div>
            <div class="form-group">
                <label for="url">Ссылка</label>
                <input required name='url' value="<?= set_value('url') ?>" type="url" class="form-control" id="url" placeholder="Ссылка на баннере">
            </div>
            <div class="form-group">
                <label for="pos">Позиция</label>
                <select name="pos" class="form-control" id="pos" required>
                    <!--<option value="" disabled style="display: none;">Выберите вид спорта...</option>-->
                    <option value="main">На главной</option>
                    <option value="news">На странице "Новости"</option>
                    <option value="blog">На странице "Блог"</option>
                </select>
            </div>
            <script>
                $(document).on('click', '.radio_clicks_pay', function () {
                    $('#max_shows').val('');
                    $('#max_clicks').val('');
                    $('#max_clicks').show();
                    $('#max_shows').hide();
                });
                $(document).on('click', '.radio_shows_pay', function () {
                    $('#max_shows').val('');
                    $('#max_clicks').val('');
                    $('#max_shows').show();
                    $('#max_clicks').hide();
                });
            </script>
            <div class="form-group">
                <div class="radio_clicks_pay">
                    <input type="radio" name="payment" checked="" id="payment_clicks">
                    <label for="payment_clicks">Оплата за количество кликов</label>
                </div>
                <div class="radio_shows_pay">
                    <input type="radio" name="payment" id="payment_shows">
                    <label for="payment_shows">Оплата за количество показов</label>
                </div>
                <input name='max_clicks' value="<?= set_value('max_clicks') ?>" type="number" class="form-control" id="max_clicks" placeholder="Введите количество кликов">
                <input name='max_shows' value="<?= set_value('max_shows') ?>" type="number" class="form-control" style="display: none;" id="max_shows" placeholder="Введите количество показов">
            </div>
        </div>
    </div>
    <div class="row" style="margin-top: 10px;">
        <div class="col-md-12">
            <input type='hidden' name='do' value='bannerAdd'>
            <button type="submit" class="btn btn-default">Добавить</button>
        </div>
    </div>
    <?= form_close(); ?>
</div>
