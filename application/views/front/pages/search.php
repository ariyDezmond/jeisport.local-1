<div class="content">
    <div class="wrapper">

        <ul class="breadcrumbs">
            <li><a href="/">Главная</a></li>
            <li><a href="/search/">Поиск</a></li>
        </ul><!-- breadcrumbs -->

        <h3 class="about_us_title">Поиск</h3>

        <div class="search_block">
            <div class="search_block_in">
                <span>Поиск по сайту</span>
                <input  name="search" value="<?php
                if ($this->uri->segment(2))
                    echo urldecode($this->uri->segment(2));
                ?>"  id="search-input2" type="text" placeholder="" value="">
            </div>

            <div class="search_block_in">
                <span>Где искать?</span>
                <label for="select-1">
                    <i></i>
                    <select id="select-1" placeholder="категория" value="категория">
                        <option value="category">категория 1</option>
                        <option value="category">категория 2</option>
                        <option value="category">категория 3</option>
                        <option value="category">категория 4</option>
                        <option value="category">категория 5</option>
                    </select>
                </label>
            </div>

            <input type="button"  id="search-button2" value="Найти">
        </div>

        <div class="result">
            <?php if (isset($res)): ?>
                <span>Всего найдено: <?= count($res) ?> записей</span>
            <?php endif; ?>
            <?php
            if (isset($res)):
                foreach ($res as $r):
                    $sport = $this->sports_model->get_sport_for_point($r['sport_id']);
                    $category = $this->categories_model->get_category_for_point($sport['category_id']);
                    ?>
                    <div class="result_item">
                        <a style="text-decoration: none;" href="/<?= $category['url'] ?>/<?= $sport['url'] ?>/<?= $r['url'] ?>">
                            <h6><?= $r['name'] ?></h6>
                        </a>
                        <p>
                            <?php
                            $s = urldecode($this->uri->segment(2));
                            $pos = stripos($r['text'], $s);
                            $str = mb_strimwidth(strip_tags($r['text']), 0, 250, "");

                            //$str = preg_replace('/([^\w]|)' . $s . '([^\w]|)/i', '<span style="font-weight:bold;">$0</span>', $str);
                            ?>
                            <?= $str ?>
                        </p>
                    </div>
                    <?php
                endforeach;
            else:
                ?>
                <div class="result_item">
                    <p>Нет результатов</p>
                </div>
            <?php endif; ?>
            <div class="pagination">
<!--                <a href="#" class="prev">Предыдущая</a>
                <ul>
                    <li><a href="#">1</a></li>
                    <li><a href="#">2</a></li>
                    <li><a href="#">3</a></li>
                    <li><a href="#">4</a></li>
                    <li><a href="#">5</a></li>
                    <li><a href="#">6</a></li>
                    <li><a href="#">7</a></li>
                    <li><a href="#">8</a></li>
                    <li><a href="#">9</a></li>
                </ul><div></div>
                <a href="#" class="next">Следующая</a>
            </div>-->
        </div>

    </div><!-- wrapper -->
</div><!-- content -->