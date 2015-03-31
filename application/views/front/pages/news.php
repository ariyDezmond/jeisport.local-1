<div class="content">
    <div class="wrapper">
        <ul class="breadcrumbs">
            <li><a href="/">Главная</a></li>
            <li><a href="/news/">Новости</a></li>
        </ul><!-- breadcrumbs -->

        <div class="clear"></div>

        <h3 class="block-title comments_title">Новости Jeisport</h3><!-- title -->

        <!--        <div class="search_block news_block">
                    <div class="search_block_in news_block_in">
                        <span>Выберите категорию новостей</span>
                        <label for="select-1">
                            <i></i>
                            <select id="select_category" placeholder="категория" value="категория">
        <?php foreach ($newsCategories as $car): ?>
                                                                                            <option value="<?= $car['id'] ?>"><?= $car['name'] ?></option>
        <?php endforeach; ?>
                            </select>
                        </label>
                    </div>
                </div>-->

        <div class="news_content">
            <div class="news_left_side news">
                <?php if ($news): ?>
                    <?php foreach ($news as $new): ?>
                        <!-- block_item -->
                        <div class="block_item">
                            <a href="/news/<?= $new['url'] ?>/" class="block_img_wrapper"><img src="/images/news/<?= $new['image'] ?>" alt="<?= $new['name'] ?>"></a>
                            <div class="block_item_content">
                                <h5><a href="/news/<?= $new['url'] ?>/"><?= $new['name'] ?></a></h5>
                                <p><?= mb_strimwidth(strip_tags($new['text']), 0, 150, "..."); ?></p>
                                <div class="info_block">
                                    <a href="/news/<?= $new['url'] ?>/" class="views"><?= $new['views'] ?></a>
                                    <a href="/news/<?= $new['url'] ?>/" class="comments">12</a>
                                    <span><?= date('d.m.Y h:i', strtotime($new['date'])) ?></span>
                                </div><!-- info_block -->
                            </div><!-- block_item_content -->
                        </div>
                        <!-- /block_item -->
                    <?php endforeach; ?>
                    <?php
                else: echo 'Новостей в базе не найдено!';
                endif;
                ?>

            </div>
            <div class="news_right_side">
                <?php if (isset($banner['id'])): ?>
                    <div class="news_banner">
                        <a rel="nofollow" target="_blank" href="/banners/<?= $banner['id'] ?>"><img src="/images/banners/<?= $banner['image'] ?>" alt=""></a>
                        <span>реклама</span>
                    </div>
                    <?php if ($is_browser): ?>
                        <script>
                            $(document).ready(function () {
                                $.post('/update_banner_views/', {id:<?= $banner['id'] ?>})
                            })
                        </script>
                    <?php endif; ?>
                <?php endif; ?>
                <!--                <h3 class="block-title news_title">Теги</h3> title 
                                <div class="tags">
                <?php foreach ($tags as $tag): ?>
                                                    <a href="/news/tag/<?= $tag['id'] ?>" class="tag_item_<?= rand(1, 9) ?>">&laquo;<?= $tag['name'] ?>&raquo;</a>
                <?php endforeach; ?>
                                </div>-->
            </div>
        </div>
        <div class="clear"></div>
        <ul class="pagination">
            <?= $this->pagination->create_links() ?>
        </ul>
    </div><!-- wrapper -->
</div><!-- content -->