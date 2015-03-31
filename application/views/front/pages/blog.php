<script>
    $(document).ready(function () {
        $.ajax({
            url: '/blog/views',
            type: "POST",
            dataType: "html",
            data: {
                id: <?= $blog['id'] ?>
            },
            success: function (response) {
                console.log('Успех');
            },
            error: function (response) {
                console.log('Ошибка');
            }
        });
    });
</script>
<div class="content">
    <div class="wrapper">

        <ul class="breadcrumbs">
            <li><a href="/">Главная</a></li>
            <li><a href="/blog/">Блог</a></li>
            <li><a href="/blog/<?= $blog['url'] ?>"><?= $blog['name'] ?></a></li>
        </ul><!-- breadcrumbs -->
        <div class="clear"></div>

        <h3 class="about_us_title"><?= $blog['name'] ?></h3>

        <div class="info_block about_us_info_block">
            <a href="#" class="views"><?= $blog['views'] ?></a>
            <a href="#" class="comments">12</a>
            <span><?= date('d.m.Y h:i', strtotime($blog['date'])) ?></span>
        </div><!-- info_block -->

        <div class="about_us_block">
            <img style="max-width: 300px;" src="/images/blog/<?= $blog['image'] ?>" alt="<?= $blog['name'] ?>">
            <?= $blog['text'] ?>
        </div>

        <div class="about_us_social_icon social_in_blog_news">
            <a href="#" class="icon_item_1"></a>
            <a href="#" class="icon_item_2"></a>
            <a href="#" class="icon_item_3"></a>
            <a href="#" class="icon_item_4"></a>
            <a href="#" class="icon_item_5"></a>
            <a href="#" class="icon_item_6"></a>
            <a href="#" class="icon_item_7"></a>
        </div>
        <div class="clear"></div>
        <h3 class="block-title comments_title">Отзывы и комментарии</h3><!-- title -->

        <div id="disqus_thread"></div>
        <script type="text/javascript">
            /* * * CONFIGURATION VARIABLES: EDIT BEFORE PASTING INTO YOUR WEBPAGE * * */
            var disqus_shortname = 'jeisport-sport'; // required: replace example with your forum shortname

            /* * * DON'T EDIT BELOW THIS LINE * * */
            (function () {
                var dsq = document.createElement('script');
                dsq.type = 'text/javascript';
                dsq.async = true;
                dsq.src = 'http://' + disqus_shortname + '.disqus.com/embed.js';
                (document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(dsq);
            })();
        </script>
        <noscript>Please enable JavaScript to view the comments.</a></noscript>


        <!--        <a href="" class="comments_in_presentation">22 Комментария</a>
                <div class="comments_in_blog_news">
                    <div class="comments">
                        <h6>Дмитрий</h6>
                        <p>В этом виде спорта практически не существует каких-то возрастных ограничений. Вы можете привести в секцию ребенка или прийти сами даже со своими  родителями<a href="">Ответить</a></p>
                    </div>
                    <div class="comments">
                        <h6>Дмитрий</h6>
                        <p>В этом виде спорта практически не существует каких-то возрастных ограничений. Вы можете привести в секцию ребенка или прийти сами даже со своими  родителями<a href="">Ответить</a></p>
                    </div>
                    <div class="comments">
                        <h6>Дмитрий</h6>
                        <p>В этом виде спорта практически не существует каких-то возрастных ограничений. Вы можете привести в секцию ребенка или прийти сами даже со своими  родителями<a href="">Ответить</a></p>
                    </div>
                    <div class="comments">
                        <h6>Дмитрий</h6>
                        <p>В этом виде спорта практически не существует каких-то возрастных ограничений. Вы можете привести в секцию ребенка или прийти сами даже со своими  родителями<a href="">Ответить</a></p>
                    </div>
                    <div class="comments">
                        <h6>Дмитрий</h6>
                        <p>В этом виде спорта практически не существует каких-то возрастных ограничений. Вы можете привести в секцию ребенка или прийти сами даже со своими  родителями<a href="">Ответить</a></p>
                    </div>
                    <div class="add_comment">
                        <h6>Добавьте новый комментарий</h6>
                        <p>В этом виде спорта практически не существует каких-то возрастных ограничений. Вы можете привести в секцию ребенка или прийти сами даже со своими  родителями. </p>
                        <input type="button" value="Добавить">
                    </div>
                </div>-->
    </div><!-- wrapper -->
</div>