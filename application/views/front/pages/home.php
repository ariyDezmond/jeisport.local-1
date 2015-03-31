<div class="content">
    <div class="wrapper">

        <div class="main_banner">
            <video autoplay="" loop="" muted="" class="bgvideo" id="bgvideo"><source src="video/video.mp4" type="video/mp4"></video>

            <div class="clear"></div><!-- clear -->

            <div class="main_banner_inner">

                <h1 style="padding-top: 40px;">Самая обширная база спортивных клубов Москвы!</h1>
                <div class="banner_form">
                    <h2>Подбери себе  спортивный клуб:</h2>

                    <form action="/find_point/" method="post">
                        <div class="input-text">
                            <span>Выберите категорию</span>
                            <label for="">
                                <i class="select_open_1"></i>
                                <select name="category" id="select-1" placeholder="категория" value="категория">
                                    <?php
                                    foreach ($categories as $cat):
                                        ?>
                                        <option value="<?= $cat['id'] ?>"><?= $cat['name'] ?></option>
                                        <?php
                                    endforeach;
                                    ?>
                                </select>
                            </label>
                        </div>
                        <div class="input-text">
                            <span>Выберите вид спорта</span>
                            <label for="">
                                <i class="select_open_2"></i>
                                <select name="sport" id="select-2" placeholder="подкатегория" value="подкатегория">
                                    <?php
                                    foreach ($sports as $cat):
                                        ?>
                                        <option value="<?= $cat['id'] ?>"><?= $cat['name'] ?></option>
                                        <?php
                                    endforeach;
                                    ?>
                                </select>
                            </label>
                        </div>
                        <div class="input-text input-text-3">
                            <span>Выберите станцию метро</span>
                            <label for="">
                                <!--<i class="select_open_3"></i>-->
                                <input type="text" name="subway" id="select-3" placeholder="начните набирать..." value="">
                            </label>
                        </div>
                        <div class="input-submit">
                            <input type="submit" value="Применить">
                            <input type="submit" class="reset_btn" value="Сбросить">
                        </div>
                    </form>
                    <div class="clear"></div><!-- clear -->
                    <div class="btn_wrapper">
                        <p class="btn_title">Отправьте нам заявку и мы подберем лучшее решение для Вас</p>
                        <a href="#" data-modal-id="#modal3" class="send_btn modal-open send_request">Отправить заявку</a><!-- send_btn -->
                        <p>После подбора наш менеджер свяжется с Вами</p>
                    </div>

                </div><!-- banner_form -->
            </div><!-- main_banner_inner -->

        </div><!-- main_banner -->

        <div class="categories">
            <h4>Категории Jeisport</h4>
            <ul>
                <!-- li -->
                <?php if ($categories): ?>
                    <?php foreach ($categories as $category): ?>
                        <li style="background: url(/images/categories/<?= $category['image2'] ?>) 0 0 no-repeat;">
                            <div class="visible_block">
                                <h6><?= $category['name'] ?></h6>
                            </div>
                            <div class="hidden_block">
                                <a href="<?= '/' . $category['url'] ?>/"><img src="/images/categories/<?= $category['image3'] ?>" alt=""></a>
                            </div>
                        </li>
                    <?php endforeach; ?>
                    <?php
                else: echo 'Категорий в базе не найдено!';
                endif;
                ?>
                <!-- /li -->
            </ul>
        </div><!-- /categories -->
        <?php if ($banner): ?>
            <div class="banner">
                <a rel="nofollow" target="_blank" href="/banners/<?= $banner['id'] ?>"><img src="/images/banners/<?= $banner['image'] ?>" height="90" width="1000" alt=""></a>
            </div><!-- banner -->
            <?php if ($is_browser): ?>
                <script>
                    $(document).ready(function () {
                        $.post('/update_banner_views/', {id:<?= $banner['id'] ?>})
                    })
                </script>
            <?php endif; ?>
        <?php endif; ?>
        <h3 class="block-title">Видео блог от Jeisport</h3><!-- title -->
        <div class="flexslider">
            <div class="flex-viewport" style="overflow: hidden; position: relative;"><ul class="slides" style="width: 800%; -webkit-transition-duration: 0s; transition-duration: 0s; -webkit-transform: translate3d(-1000px, 0px, 0px); transform: translate3d(-1000px, 0px, 0px);">
                    <?php foreach ($videoblogs as $vb): ?>
                        <li class="clone" aria-hidden="true" style="width: 1000px; float: left; display: block;">
                            <?php for ($i = 0; $i < 4; $i++): ?>
                                <?php if (isset($vb[$i])): ?>
                                    <div class="video_block">
                                        <a href="/videoblog/<?= $vb[$i]['id'] ?>" class="img_link"><img src="http://img.youtube.com/vi/<?= $vb[$i]['youtube'] ?>/0.jpg" alt="" draggable="false"></a>
                                        <a href="/videoblog/<?= $vb[$i]['id'] ?>" class="title_link"><?= $vb[$i]['name'] ?></a>
                                    </div>
                                <?php endif; ?>
                            <?php endfor; ?>
                        </li>
                    <?php endforeach; ?>
                </ul>
            </div>
            <ol class="flex-control-nav flex-control-paging">
                <li>
                    <a class="flex-active">1</a>
                </li>
                <li>
                    <a class="">2</a>
                </li>
            </ol>
            <ul class="flex-direction-nav">
                <li><a class="flex-prev" href="#">Previous</a></li>
                <li><a class="flex-next" href="#">Next</a></li>
            </ul></div><!-- slider -->
        <section>

            <div class="news">
                <h4><a href="/news/">Новости Jeisport</a></h4>
                <?php if ($news): ?>
                    <?php foreach ($news as $new): ?>
                        <!-- block_item -->
                        <div class="block_item">
                            <a href="/news/<?= $new['url'] ?>" class="block_img_wrapper">
                                <img src="/resize_image.php?file=images/news/<?= $new['image'] ?>&h=125" alt="<?= $new['name'] ?>">
                            </a>
                            <div class="block_item_content">
                                <h5><a href="/news/<?= $new['url'] ?>"><?= $new['name'] ?></a></h5>
                                <p><?= mb_strimwidth(strip_tags($new['text']), 0, 150, "..."); ?></p>
                                <div class="info_block">
                                    <a href="/news/<?= $new['url'] ?>" class="views"><?= $new['views'] ?></a>
                                    <a href="/news/<?= $new['url'] ?>" class="comments">12</a>
                                    <span><?= date('d.m.Y H:i', strtotime($new['date'])) ?></span>
                                </div><!-- info_block -->
                            </div><!-- block_item_content -->
                        </div>
                    <?php endforeach; ?>
                    <?php
                else: echo 'Новостей в базе не найдено!';
                endif;
                ?>
                <!-- /block_item -->

            </div><!-- news -->

            <div class="blog">
                <h4><a href="/blog/">Блог Jeisport</a></h4>

                <!-- block_item -->
                <?php if ($posts): ?>
                    <?php foreach ($posts as $post): ?>
                        <div class="block_item">
                            <a href="/blog/<?= $post['url'] ?>" class="block_img_wrapper">
                                <img src="/resize_image.php?file=images/blog/<?= $post['image'] ?>&h=125" alt="<?= $post['name'] ?>">
                            </a>
                            <div class="block_item_content">
                                <h5><a href="/blog/<?= $post['url'] ?>"><?= $post['name'] ?></a></h5>
                                <p><?= mb_strimwidth(strip_tags($post['text']), 0, 150, "..."); ?></p>
                                <div class="info_block">
                                    <a href="/blog/<?= $post['url'] ?>" class="views"><?= $post['views'] ?></a>
                                    <a href="/blog/<?= $post['url'] ?>" class="comments">12</a>
                                    <span><?= date('d.m.Y H:i', strtotime($post['date'])) ?></span>
                                </div><!-- info_block -->
                            </div><!-- block_item_content -->
                        </div>
                    <?php endforeach; ?>
                    <?php
                else: echo 'Постов в базе не найдено!';
                endif;
                ?>
                <!-- /block_item -->

            </div><!-- blog -->
        </section>
        <?php if ($maintext): ?>
            <article>
                <p><?= $maintext ?></p>
            </article>
        <?php endif; ?>
    </div><!-- wrapper -->
</div>