<div class="col-md-2">
    <div class="list-group">
        <a href="/admin/settings/feedback" class="list-group-item <?php
        if ($this->uri->segment(3) == 'feedback') {
            echo 'active';
        }
        ?>">Обратная связь <span style="background-color:green;" class="badge"><?= $this->feedback_model->get_unread_msgs(); ?></span></a>
        <a href="/admin/settings/backcall" class="list-group-item <?php
        if ($this->uri->segment(3) == 'backcall') {
            echo 'active';
        }
        ?>">Заявки на обратный звонок</a>
        <a href="/admin/settings/studentcards" class="list-group-item <?php
        if ($this->uri->segment(3) == 'studentcards') {
            echo 'active';
        }
        ?>">Заявки на покупку студ. билета</a>
        <a href="/admin/settings/blog" class="list-group-item <?php
        if ($this->uri->segment(3) == 'blog') {
            echo 'active';
        }
        ?>">Блог</a>
        <a href="/admin/settings/news-categories" class="list-group-item <?php
        if ($this->uri->segment(3) == 'news-categories') {
            echo 'active';
        }
        ?>">Категории новостей</a>
        <a href="/admin/settings/news" class="list-group-item <?php
        if ($this->uri->segment(3) == 'news') {
            echo 'active';
        }
        ?>">Новости</a>
        <a href="/admin/settings/subways" class="list-group-item <?php
        if ($this->uri->segment(3) == 'subways') {
            echo 'active';
        }
        ?>">Станции метро</a>
        <a href="/admin/settings/banners" class="list-group-item <?php
        if ($this->uri->segment(3) == 'banners') {
            echo 'active';
        }
        ?>">Баннеры</a>
        <a href="/admin/settings/videoblog" class="list-group-item <?php
        if ($this->uri->segment(3) == 'videoblog') {
            echo 'active';
        }
        ?>">Видео блог</a>
        <a href="/admin/settings/maintext" class="list-group-item <?php
        if ($this->uri->segment(3) == 'maintext') {
            echo 'active';
        }
        ?>">Текст на главной</a>
        <a href="/admin/settings/about" class="list-group-item <?php
           if ($this->uri->segment(3) == 'about') {
               echo 'active';
           }
           ?>">Текст "О нас"</a>
        <!--        <a href="#" class="list-group-item">Porta ac consectetur ac</a>
                <a href="#" class="list-group-item">Vestibulum at eros</a>-->
    </div>
</div>