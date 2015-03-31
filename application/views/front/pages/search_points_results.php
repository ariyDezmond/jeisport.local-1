<!--<pre>
<?php print_r($searched_points); ?>
</pre>-->
<div class="content">
    <div class="wrapper">

        <ul class="breadcrumbs">
            <li><a href="/">Главная</a></li>
            <li><a href="/">Поиск спортивных клубов</a></li>
        </ul><!-- breadcrumbs -->

        <div class="clear"></div>

        <div class="category-menu category-menu2">
            <form action="/find_point/" method="post">
                <div class="input-text">
                    <span>Выберите категорию</span>
                    <label for="">
                        <i></i>
                        <select name="category" id="select-1" placeholder="категория" value="категория">
                            <?php
                            foreach ($categories as $cat):
                                ?>
                                <option <?php if ($cat['id'] == $category_id): ?>selected=""<?php endif; ?>value="<?= $cat['id'] ?>"><?= $cat['name'] ?></option>
                                <?php
                            endforeach;
                            ?>
                        </select>
                    </label>
                </div>
                <div class="input-text">
                    <span>Выберите вид спорта</span>
                    <label for="">
                        <i></i>
                        <select name="sport" id="select-2" placeholder="подкатегория" value="подкатегория">
                            <?php
                            foreach ($sports as $cat):
                                ?>
                                <option <?php if ($cat['id'] == $sport_id): ?>selected=""<?php endif; ?> value="<?= $cat['id'] ?>"><?= $cat['name'] ?></option>
                                <?php
                            endforeach;
                            ?>
                        </select>
                    </label>
                </div>
                <div class="input-text input-text-3">
                    <span>Выберите станцию метро</span>
                    <label for="">
                        <input name="subway" id="select-3" placeholder="начните набирать..." value="<?= $subway_name ?>">
                    </label>
                </div>
                <div class="input-submit">
                    <input type="submit" value="Применить">
                    <input type="submit" class="reset_btn" value="Сбросить">
                </div>
            </form>
        </div>

        <ul class="points">
            <?php
            if ($searched_points):
                ?>
                <?php foreach ($searched_points as $point): ?>
                    <li>
                        <img src="/images/points/<?= $point['image'] ?>" alt="<?= $point['name'] ?>">
                        <h5><?= $point['name'] ?></h5>
                        <div class="points_wrapper">
                            <?php
                            $subway1 = $this->points_model->get_subway_for_point_front($point['subway1_id']);
                            $subway1_img = $subway1['image'];
                            $subway1 = $subway1['name'];
                            if ($subway1):
                                ?>
                                <img src="/images/subways/<?= $subway1_img ?>" style="width: 19px; height: 18px; float:left; margin-right: 2px;">
                                <span class="metro1"><?php
                                    if ($subway1) {
                                        echo $subway1 . ' ' . $point['time1'] . ' мин';
                                    }
                                    ?></span>
                                <?php
                            else:
                                echo '<img src="/img/sample_icons/metro1.png" style="width: 19px; height: 18px; float:left; margin-right: 2px;"><span class="metro1">Нет</span>';
                            endif;
                            $subway2 = $this->points_model->get_subway_for_point_front($point['subway2_id']);
                            $subway2_img = $subway2['image'];
                            $subway2 = $subway2['name'];
                            if ($subway2):
                                ?>
                                <img src="/images/subways/<?= $subway2_img ?>" style="width: 19px; height: 18px; float:left; margin-right: 2px;">
                                <span class="metro2"><?php
                                    if ($subway2) {
                                        echo $subway2 . ' ' . $point['time2'] . ' мин';
                                    }
                                    ?></span>
                                <div class='clear'></div>
                                <?php
                            else:
                                echo '<img src="/img/sample_icons/metro2.png" style="width: 19px; height: 18px; float:left; margin-right: 2px;"><span class="metro2">Нет</span><div class="clear"></div>';
                            endif;
                            ?>
                            <?php
                            if ($point['contacts']):
                                ?>
                                <p>Адрес: <?= $point['contacts'] ?></p>
                                <?php
                            endif;
                            if ($point['phone']):
                                ?>
                                <p>Телефон: <?= $point['phone'] ?></p>
                                <?php
                            endif;
                            if ($point['email']):
                                ?>
                                <p>E-mail: <?= $point['email'] ?></p>
                                <?php
                            endif;
                            if ($point['site']):
                                ?>
                                <p>Сайт: <?= $point['site'] ?></p>
                                <?php
                            endif;
                            if ($point['graphite']):
                                ?>
                                <p>График работы: <?= $point['graphite'] ?></p>
                            <?php endif; ?>
                            <?php
                            $sport = $this->sports_model->get_sports($point['sport_id']);
                            $category = $this->categories_model->get_categories($sport['category_id']);
                            ?>
                            <input style='bottom:12px;' type="button" value="Подробнее..." onclick="window.location = '/<?= $category['url'] . '/' . $sport['url'] . '/' . $point['url'] ?>/'">
                        </div>
                    </li>
                <?php endforeach; ?>
            <?php else: ?>
                <p>Спортивных клубов по данном запросу не найдено</p>
            <?php endif; ?>

        </ul>

    </div><!-- wrapper -->
</div>