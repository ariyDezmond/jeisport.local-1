<div class="row">
    <div class="col-md-12">
        <a href="/admin/points">
            <button type="button" class="btn btn-default btn-default"><span class='glyphicon glyphicon-step-backward'></span> Назад к списку</button>
        </a>
    </div>
</div>
<div class="page-header">
    <h2>Редактирование спортивной точки</h2>
</div>
<?= form_open_multipart('admin/points/edit/' . $point['id']) ?>
<div class="row" style="margin-bottom: 10px;">
    <div class="col-md-2">
        <button type="submit" class="btn btn-default">Сохранить</button>
    </div>
    <div class="col-md-2">
        <a target="_blank" href="/<?= $category['url'] ?>/<?= $sport['url'] ?>/<?= $point['url'] ?>/" class="btn btn-default">Перейти на спорт. точку</a>
    </div>
    <div class="col-md-2">
        <a href="/admin/points/delete/<?= $point['id'] ?>/" class="btn btn-default remove_point">Удалить</a>
    </div>
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
<div class="row">
    <div class="col-md-6">
        <div class="form-group">
            <label for="name">Название</label>
            <input name='name' value='<?= $point['name'] ?>' type="text" class="form-control" id="name" placeholder="Название">
        </div>
        <div class="form-group">
            <label for="url">ЧПУ</label>
            <input name='url' value="<?= $point['url'] ?>" type="text" class="form-control" id="url" placeholder="Чпу">
        </div>
        <div class="form-group">
            <label for="url">Вид спорта</label>
            <?php
            $data = 'class="form-control"';
            echo form_dropdown('sport', $sports, $selected, $data);
            ?>
        </div>
        <div class="form-group">
            <label for="contacts">Адрес</label>
            <input name='contacts' value="<?= $point['contacts'] ?>" type="text" class="form-control" id="contacts" placeholder="Москва, ул. Сельскохозяйственная, влад. 26">
        </div>
        <div class="form-group">
            <label for="phone">Телефон</label>
            <input name='phone' value="<?= $point['phone'] ?>" type="text" class="form-control" id="phone" placeholder="">
        </div>
        <div class="form-group">
            <label for="email">E-mail</label>
            <input name='email' value="<?= $point['email'] ?>" type="email" class="form-control" id="email" placeholder="">
        </div>
        <div class="form-group">
            <label for="admemail">E-mail администратора</label>
            <input name='admemail' value="<?= $point['admemail'] ?>" type="email" class="form-control" id="admemail" placeholder="">
            <p class="help-block">На него будут приходить уведомления</p>
        </div>
        <div class="form-group">
            <label for="site">Сайт</label>
            <input name='site' value="<?= $point['site'] ?>" type="text" class="form-control" id="site" placeholder="www.site.com">
        </div>
        <div class="form-group">
            <label for="graphite">График работы</label>
            <input name='graphite' value="<?= $point['graphite'] ?>" type="text" class="form-control" id="graphite" placeholder="6:00 - 23:00 - Пн-Сб">
        </div>
        <div class="form-group">
            <label for="youtube">Ключ видео с youtube</label>
            <input name='youtube' value="<?= $point['youtube'] ?>" type="text" class="form-control" id="youtube" placeholder="v5NfMbQn8jA">
        </div>
        <div class="form-group">
            <label for="price_month">Цена за 1 месяц</label>
            <input name='price_month' value="<?= $point['price_month'] ?>" type="text" class="form-control" id="price_month" placeholder="35 000 руб.">
        </div>
        <div class="form-group">
            <label for="price_6months">Цена за 6 месяцев</label>
            <input name='price_6months' value="<?= $point['price_6months'] ?>" type="text" class="form-control" id="price_6months" placeholder="55 000 руб.">
        </div>
        <div class="form-group">
            <label for="price_year">Цена за год</label>
            <input name='price_year' value="<?= $point['price_year'] ?>" type="text" class="form-control" id="price_year" placeholder="65 000 руб.">
        </div>
        <div class="form-group">
            <label for="image">Главное изображение</label><br/>
            <div class="well"><img width="200px" style="border: 1px solid black; background-color: grey;" src="/images/points/<?= $point['image'] ?>"></div>
            <input name='image' type="file" class="btn-file" id="image">
            <p class="help-block">Выберите главное фото для спортивной точки</p>
        </div>
        <input type='hidden' name='do' value='pointEdit'>
    </div>
    <div class="col-md-6">
        <div class="col-md-12">
            <div class="form-group">
                <label for="title">Мета title</label>
                <input name='title' value="<?= $point['title'] ?>" type="text" class="form-control" id="title" placeholder="">
            </div>
            <div class="form-group">
                <label for="desc">Мета description</label>
                <textarea name='desc' rows="5" class="form-control" id="desc" placeholder=""><?= $point['desc'] ?></textarea>
            </div>
            <div class="form-group">
                <label for="keyw">Мета keywords</label>
                <textarea name='keyw' rows="3" class="form-control" id="keyw" placeholder=""><?= $point['keyw'] ?></textarea>
            </div>
            <div class="checkbox">
                <label>
                    <input name='active' <?php
                    if ($point['active'] == 'on') {
                        echo 'checked';
                    }
                    ?> type="checkbox"> Активен
                </label>
            </div>
            <div class="checkbox">
                <label>
                    <input name='payed' <?php
                    if ($point['payed'] == 'on') {
                        echo 'checked';
                    }
                    ?> type="checkbox"> Оплачен
                </label>
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label for="payedf">Оплачен с:</label>
                <div class='input-group date' id='payedf'>
                    <input name="payedf" id="payedf" type='text' value="<?= date('d.m.Y H:i', strtotime($point['payedf'])) ?>" class="form-control" />
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
                <label for="payedt">По:</label>
                <div class='input-group date' id='payedt'>
                    <input name="payedt" id="payedt" type='text' value="<?= date('d.m.Y H:i', strtotime($point['payedt'])) ?>" class="form-control" />
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
            <div class="form-group">
                <label for="subway1_id">Первая станция метро</label>
                <select name="subway1_id" class="form-control" id="subway1_id">
                    <option value="0" selected>Нет</option>
                    <?php foreach ($subways as $subway): ?>
                        <option <?php
                        if ($subway['id'] == $point['subway1_id']) {
                            echo 'selected';
                        }
                        ?> value="<?= $subway['id'] ?>"><?= $subway['name'] ?></option>
                        <?php endforeach; ?>
                </select>
            </div>
        </div>
        <div class="col-md-3">
            <label for="time1">Время</label>
            <div class="input-group">
                <input name='time1' value="<?= $point['time1'] ?>" type="text" class="form-control" id="time1" placeholder="">
                <span class="input-group-addon">мин</span>
            </div>
        </div>
        <div class="col-md-9">
            <div class="form-group">
                <label for="subway2_id">Вторая станция метро</label>
                <select name="subway2_id" class="form-control" id="subway2_id">
                    <option value="0" selected>Нет</option>
                    <?php foreach ($subways as $subway): ?>
                        <option <?php
                        if ($subway['id'] == $point['subway2_id']) {
                            echo 'selected';
                        }
                        ?> value="<?= $subway['id'] ?>"><?= $subway['name'] ?></option>
                        <?php endforeach; ?>
                </select>
            </div>
        </div>
        <div class="col-md-3">
            <label for="time2">Время</label>
            <div class="input-group">
                <input name='time2' value="<?= $point['time2'] ?>" type="text" class="form-control" id="time2" placeholder="">
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
                    var point = new YMaps.GeoPoint(<?= $point['coords'] ?>);
                    map.enableScrollZoom();
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
                    placemark.name = "<?= $point['name'] ?>";
                    map.addOverlay(placemark);
                })
        </script>
        <div class="map">
            <div id="map-canvas"></div>
        </div>
        <input id="coords" type="hidden" name="coords" value="<?= $point['coords'] ?>">
    </div>
</div>
<script>
    $(document).ready(function () {
        var url = '/admin/points/images_upload/' + '<?= $point['id'] ?>';
        $("#upload_image").imageUpload(url, {
            uploadButtonText: "Добавить",
            previewImageSize: 150,
            onSuccess: function (response) {
                //.alert(response);
                $.ajax(
                        {
                            url: '/admin/points/get_images_for_point/' + '<?= $point['id'] ?>',
                            type: 'POST',
                            data: {
                            },
                            error: function () {
                                console.log('Ошибка');
                            },
                            success: function (data) {
                                $('.images_group').html(data)
                                image_del_click_subscription();
                            }
                        });
            }
        });
        $.ajax(
                {
                    url: '/admin/points/get_images_for_point/' + '<?= $point['id'] ?>',
                    type: 'POST',
                    data: {
                    },
                    error: function () {
                        console.log('Ошибка');
                    },
                    success: function (data) {
                        $('.images_group').html(data)
                        image_del_click_subscription();
                    }
                });

        var url = '/admin/points/images_hall_upload/' + '<?= $point['id'] ?>';
        $("#upload_hall_image").imageHallsUpload(url, {
            uploadButtonText: "Добавить",
            previewImageSize: 150,
            onSuccess: function (response) {
                //alert(response);
                $.ajax(
                        {
                            url: '/admin/points/get_halls_for_point/' + '<?= $point['id'] ?>',
                            type: 'POST',
                            data: {
                            },
                            error: function () {
                                console.log('Ошибка');
                            },
                            success: function (data) {
                                $('.halls_group').html(data)
                                hall_del_click_subscription();
                            }
                        });
            }
        });
        $.ajax(
                {
                    url: '/admin/points/get_halls_for_point/' + '<?= $point['id'] ?>',
                    type: 'POST',
                    data: {
                    },
                    error: function () {
                        console.log('Ошибка');
                    },
                    success: function (data) {
                        $('.halls_group').html(data)
                        hall_del_click_subscription();
                    }
                });

        var url = '/admin/points/images_trener_upload/' + '<?= $point['id'] ?>';
        $("#upload_trener_image").imageTrenersUpload(url, {
            uploadButtonText: "Добавить",
            previewImageSize: 150,
            onSuccess: function (response) {
                $.ajax(
                        {
                            url: '/admin/points/get_treners_for_point/' + '<?= $point['id'] ?>',
                            type: 'POST',
                            data: {
                            },
                            error: function () {
                                console.log('Ошибка');
                            },
                            success: function (data) {
                                $('.treners_group').html(data)
                                trener_del_click_subscription();
                            }
                        });
            }
        });
        $.ajax(
                {
                    url: '/admin/points/get_treners_for_point/' + '<?= $point['id'] ?>',
                    type: 'POST',
                    data: {
                    },
                    error: function () {
                        console.log('Ошибка');
                    },
                    success: function (data) {
                        $('.treners_group').html(data)
                        trener_del_click_subscription();
                    }
                });

    });
</script>
<label for="text">Миниатюры для спортивной точки</label>
<div class="alert alert-info" role="alert">
    <div id="upload_image"></div>
</div>
<div class="images_group"></div>

<label for="text">Тренировочные залы для данной спортивной точки</label>
<div class="alert alert-info" role="alert">
    <div id="upload_hall_image"></div>
</div>
<div class="halls_group"></div>

<label for="text">Тренера для данной спортивной точки</label>
<div class="alert alert-info" role="alert">
    <div id="upload_trener_image"></div>
</div>
<div class="treners_group"></div>

<div class="row">
    <div class="col-md-12">
        <div class="form-group">
            <label for="text">Текст на странице</label>
            <textarea name="text" id="text" rows="30">
                <?= $point['text'] ?>
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