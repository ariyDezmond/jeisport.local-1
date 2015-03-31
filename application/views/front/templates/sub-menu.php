<nav>
    <div class="wrapper">
        <ul>
            <li><a href="/">Главная</a></li>
            <li><a href="/about/">О нас</a></li>
            <li><a href="/contacts/">Контакты</a></li>
            <li><a href="#">Интернет магазин</a></li>
            <li><a href="#">Реклама</a></li>
            <li><a href="/forum/">Форум</a></li>
        </ul>
        <div class="search">
            <span>Поиск по сайту</span>
            <input class="search-input" id="search-input" type="text" value="<?php
            if ($this->uri->segment(1) == 'search') {
                if ($this->uri->segment(2))
                    echo urldecode($this->uri->segment(2));
            }
            ?>">
            <input class="search-button" id="search-button" type="button" value="Искать">
        </div>
    </div>
</nav>