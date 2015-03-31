<h3 class="about_us_title points_title"><?= $sport['name'] ?></h3>

<ul class="points" style="padding-bottom: 0px;">
    <?php foreach ($points as $point): ?>
        <li>
            <img src="/resize_image.php?file=images/points/<?= $point['image'] ?>&w=374" alt="<?= str_replace("\"", "", $point['name']); ?>" title="<?= str_replace("\"", "", $point['name']); ?>">
            <h5><?= cut_str($point['name'], 42) ?></h5>
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
                    <div class="clear"></div>
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
                <a href="/<?= $category['url'] . '/' . $sport['url'] . '/' . $point['url'] ?>/" title="<?= $point['name'] ?>" >Подробнее...</a>
            </div>
        </li>
    <?php endforeach; ?>
</ul>

<ul class="pagination">
    <?= $this->pagination->create_links() ?>
</ul>
<article>
    <p><?= $sport['text'] ?></p>
</article>

</div><!-- wrapper -->
</div><!-- content -->