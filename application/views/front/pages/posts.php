<div class="content">
    <div class="wrapper">
        <ul class="breadcrumbs">
            <li><a href="/">Главная</a></li>
            <li><a href="/blog/">Блог</a></li>
        </ul><!-- breadcrumbs -->

        <div class="clear"></div>

        <h3 class="block-title comments_title">Блог Jeisport</h3><!-- title -->

        <div class="news_content">
            <div class="news_left_side news">
                <?php if ($posts): ?>
                    <?php foreach ($posts as $e): ?>
                        <!-- block_item -->
                        <div class="block_item">
                            <a href="/blog/<?= $e['url'] ?>/" class="block_img_wrapper"><img src="/images/blog/<?= $e['image'] ?>" alt="<?= $e['name'] ?>"></a>
                            <div class="block_item_content">
                                <h5><a href="/blog/<?= $e['url'] ?>/"><?= $e['name'] ?></a></h5>
                                <p><?= mb_strimwidth(strip_tags($e['text']), 0, 150, "..."); ?></p>
                                <div class="info_block">
                                    <a href="/blog/<?= $e['url'] ?>/" class="views"><?= $e['views'] ?></a>
                                    <a href="/blog/<?= $e['url'] ?>/" class="comments">12</a>
                                    <span><?= date('d.m.Y h:i', strtotime($e['date'])) ?></span>
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
                        <a  rel="nofollow" target="_blank" href="/banners/<?= $banner['id'] ?>"><img width="240" src="/images/banners/<?= $banner['image'] ?>" alt=""></a>
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
                                                            <a href="/blog/tag/<?= $tag['id'] ?>" class="tag_item_<?= rand(1, 9) ?>">&laquo;<?= $tag['name'] ?>&raquo;</a>
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