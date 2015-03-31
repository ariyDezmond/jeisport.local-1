      <!-- Static navbar -->
      <div class="navbar navbar-default" role="navigation">
        <div class="container-fluid">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="/admin/"><?= str_ireplace('http://', '', substr(base_url(), 0, -1)); ?></a>
          </div>
          <div class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
                <li <?php if(strpos(current_url(), 'admin/main')){ echo "class=\"active\""; } ?> ><a href="/admin/main">Главная</a></li>
              <li <?php if(strpos(current_url(), 'admin/categories')){ echo "class=\"active\""; } ?> ><a href="/admin/categories">Категории</a></li>
              <?php if($this->categories_model->get_categories()): ?>
              <li <?php if(strpos(current_url(), 'admin/sports')){ echo "class=\"active\""; } ?> ><a href="/admin/sports">Виды спорта</a></li>
              <?php endif; ?>
              
              <?php if($this->categories_model->get_categories() && $this->sports_model->get_sports()): ?>
              <li <?php if(strpos(current_url(), 'admin/points')){ echo "class=\"active\""; } ?>><a href="/admin/points">Спортивные точки</a></li>
              <?php endif; ?>
              <li <?php if(strpos(current_url(), 'admin/settings')){ echo "class=\"active\""; } ?>><a href="/admin/settings">Настройки <span style="background-color:green;" class="badge"><?= $this->feedback_model->get_unread_msgs(); ?></span></a></li>   
<!--              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Настройки <span class="caret"></span></a>
                <ul class="dropdown-menu" role="menu">
                  <li><a href="/admin/blog">Блог</a></li>
                  <li><a href="/admin/news">Новости</a></li>
                  <li><a href="/admin/video-blog">Видео блог</a></li>
                  <li class="divider"></li>
                  <li class="dropdown-header">Nav header</li>
                  <li><a href="#">Separated link</a></li>
                  <li><a href="#">One more separated link</a></li>
                </ul>
              </li>-->
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li <?php if($this->uri->segment(2) == 'requests'){ echo 'class="active"'; } ?>>
                    <a href="/admin/requests">Заявки <span style="background-color:green;" class="badge"><?= $this->admins_model->get_unread_requests(); ?></span></a>
                </li>
              <li><a href="/" target="_blank">Перейти на сайт <span class='glyphicon glyphicon-new-window'></span></a></li>
              <li><a href="<?='/admin/logout'?>">Выход</a></li>
            </ul>
          </div><!--/.nav-collapse -->
        </div><!--/.container-fluid -->
      </div>