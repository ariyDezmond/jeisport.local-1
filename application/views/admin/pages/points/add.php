<div class="row">
    <div class="col-md-12">
        <a href="/admin/points">
            <button type="button" class="btn btn-default btn-default"><span class='glyphicon glyphicon-step-backward'></span> Назад к списку</button>
        </a>
    </div>
</div>
<div class="page-header">
    <h2>Добавление спортивной точки</h2>
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
<?= form_open_multipart('admin/points/add') ?>
<div class="row">
    <div class="col-md-6">
        <div class="form-group">
            <label for="name">Название</label>
            <input name='name' value="<?= set_value('name') ?>" class="form-control name" type="text" class="form-control" id="name" placeholder="Название" >
        </div>
        <div class="form-group">
            <label for="url">ЧПУ</label>
            <input name='url' value="<?= set_value('url') ?>" class="form-control name_translit" type="text" class="form-control" id="url" placeholder="Чпу" >
        </div>
        <div class="form-group">
            <label for="sport">Вид спорта</label>
            <select name="sport" class="form-control" id="sport" >
                <option value="" disabled style="display: none;">Выберите вид спорта...</option>
                <?php foreach ($sports as $sport): ?>
                    <option value="<?= $sport['id'] ?>"><?= $sport['name'] ?></option>
                <?php endforeach; ?>
            </select>
        </div>
        <div class="form-group">
            <label for="contacts">Адрес</label>
            <input name='contacts' value="<?= set_value('contacts') ?>" type="text" class="form-control" id="contacts" placeholder="Москва, ул. Сельскохозяйственная, влад. 26">
        </div>
        <div class="form-group">
            <label for="phone">Телефон</label>
            <input name='phone' value="<?= set_value('phone') ?>" type="text" class="form-control" id="phone" placeholder="">
        </div>
        <div class="form-group">
            <label for="email">E-mail</label>
            <input name='email' value="<?= set_value('email') ?>" type="email" class="form-control" id="email" placeholder="">
        </div>
        <div class="form-group">
            <label for="admemail">E-mail администратора</label>
            <input name='admemail' value="<?= set_value('admemail') ?>" type="email" class="form-control" id="admemail" placeholder="">
            <p class="help-block">На него будут приходить уведомления</p>
        </div>
        <div class="form-group">
            <label for="site">Сайт</label>
            <input name='site' value="<?= set_value('site') ?>" type="text" class="form-control" id="site" placeholder="www.site.com">
        </div>
        <div class="form-group">
            <label for="graphite">График работы</label>
            <input  name='graphite' value="<?= set_value('graphite') ?>" type="text" class="form-control" id="graphite" placeholder="6:00 - 23:00 - Пн-Сб">
        </div>
        <div class="form-group">
            <label for="youtube">Ключ видео с youtube</label>
            <input name='youtube' value="<?= set_value('youtube') ?>" type="text" class="form-control" id="youtube" placeholder="v5NfMbQn8jA">
        </div>
        <!--        <div class="form-group">
                    <label for="pricelist">Прайс лист</label><br/>
                    <input name='pricelist' type="file" class="btn-file" id="pricelist" >
                </div>-->
        <div class="form-group">
            <label for="price_month">Цена за 1 месяц</label>
            <input name='price_month' value="<?= set_value('price_month') ?>" type="text" class="form-control" id="price_month" placeholder="35 000 руб.">
        </div>
        <div class="form-group">
            <label for="price_6months">Цена за 6 месяцев</label>
            <input name='price_6months' value="<?= set_value('price_6months') ?>" type="text" class="form-control" id="price_6months" placeholder="55 000 руб.">
        </div>
        <div class="form-group">
            <label for="price_year">Цена за год</label>
            <input name='price_year' value="<?= set_value('price_year') ?>" type="text" class="form-control" id="price_year" placeholder="65 000 руб.">
        </div>
        <div class="form-group">
            <label for="image">Главное изображение</label><br/>
            <input name='image' type="file" class="btn-file" id="image" >
            <p class="help-block">Выберите главное фото для спортивной точки</p>
        </div>
        <input type='hidden' name='do' value='pointAdd'>
    </div>
    <div class="col-md-6">
        <div class="col-md-12">
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
            <div class="checkbox">
                <label>
                    <input name='payed' type="checkbox"> Оплачен
                </label>
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label for="date">Оплачен с:</label>
                <div class='input-group date' id='payedf'>
                    <input name="payedf" id="payedf" type='text' value="<?= set_value('payedf') ?>" class="form-control" />
                    <span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>
                </div>
            </div>
            <script type="text/javascript">
                $(function () {
                    $('#payedf').datetimepicker();
                });
            </script>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label for="date">По:</label>
                <div class='input-group date' id='payedt'>
                    <input name="payedt" id="payedt" type='text' value="<?= set_value('payedt') ?>" class="form-control" />
                    <span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>
                </div>
            </div>
            <script type="text/javascript">
                $(function () {
                    $('#payedt').datetimepicker();
                });
            </script>
        </div>
        <div class="col-md-9">
            <label for="subway1_id">Первая станция метро</label>
        </div>
        <div class="col-md-3">
            <label for="time1">Время</label>
        </div>
        <div class="col-md-9">
            <div class="form-group">
                <select name="subway1_id" class="form-control" id="subway1_id">
                    <option value="" disabled style="display: none;" selected>Выберите первую станцию метро...</option>
                    <option value="0">Нет</option>
                    <?php if (!$subways): ?>
                        <option value="" disabled>Добавьте станции метро</option>
                    <?php endif; ?>
                    <?php foreach ($subways as $subway): ?>
                        <option value="<?= $subway['id'] ?>"><?= $subway['name'] ?></option>
                    <?php endforeach; ?>
                </select>
            </div>
        </div>
        <div class="col-md-3">
            <div class="input-group">
                <input name='time1' value="<?= set_value('time1') ?>" type="text" class="form-control" id="time1" placeholder="">
                <span class="input-group-addon">мин</span>
            </div>
        </div>
        <div class="col-md-9">
            <label for="subway2_id">Вторая станция метро</label>
        </div>
        <div class="col-md-3">
            <label for="time2">Время</label>
        </div>
        <div class="col-md-9">
            <div class="form-group">
                <select name="subway2_id" class="form-control" id="subway2_id">
                    <option value="" disabled style="display: none;" selected>Выберите вторую станцию метро...</option>
                    <option value="0">Нет</option>
                    <?php if (!$subways): ?>
                        <option value="" disabled>Добавьте станции метро</option>
                    <?php endif; ?>
                    <?php foreach ($subways as $subway): ?>
                        <option value="<?= $subway['id'] ?>"><?= $subway['name'] ?></option>
                    <?php endforeach; ?>
                </select>
            </div>
        </div>
        <div class="col-md-3">
            <div class="input-group">
                <input name='time2' value="<?= set_value('time2') ?>" type="text" class="form-control" id="time2" placeholder="">
                <span class="input-group-addon">мин</span>
            </div>
        </div>
        <script src="http://api-maps.yandex.ru/1.1/index.xml" type="text/javascript"></script>
        <script type="text/javascript">
                // Создает обработчик события window.onLoad
                YMaps.jQuery(function () {
                    // Создает экземпляр карты и привязывает его к созданному контейнеру
                    var map = new YMaps.Map(YMaps.jQuery("#map-canvas")[0]);

                    // Устанавливает начальные параметры отображения карты: центр карты и коэффициент масштабирования
                    var point = new YMaps.GeoPoint(37.619752, 55.74722);
                    map.setCenter(point, 10);
                    map.addControl(new YMaps.TypeControl());
                    map.addControl(new YMaps.ToolBar());
                    map.addControl(new YMaps.Zoom());
                    map.addControl(new YMaps.ScaleLine());

                    var placemark = new YMaps.Placemark(point, {draggable: true});
                    YMaps.Events.observe(placemark, placemark.Events.DragEnd, function (obj) {
                        var prev = obj.getGeoPoint().copy();
                        $('#coords').val(prev);
                    });
                    map.addOverlay(placemark);
                })
        </script>
        <div class="map">
            <div id="map-canvas"></div>
        </div>
        <input id="coords" type="hidden" name="coords" value="37.619752, 55.74722">
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        <div class="form-group">
            <label for="text">Описание спортивной точки</label>
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
        <button type="submit" class="btn btn-default">Сохранить</button>
    </div>
</div>
<?= form_close(); ?>