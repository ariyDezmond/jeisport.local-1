<div class="col-md-9">
    <a href='/admin/settings/news/add'><button type="button" style='margin-bottom:20px;' class="btn btn-default btn-default">Добавить</button></a>
    <?php
    if (!is_array($news)) {
        echo '<div class="alert alert-danger" role="alert"><strong>Oops! </strong>Новостей еще никто не добавлял!</div>';
    } else {
        foreach ($news as $new):
            ?>
            <div class="row">
                <div class="col-md-3">
                    <img width="200" src="/images/news/<?= $new['image'] ?>">
                </div>
                <div class="col-md-6">
                    <b><?= $new['name'] ?></b>
                </div>
                <div class="col-md-3">
                    <span style="float:right;">
                        <a href="/admin/settings/news/up/<?= $new['id'] ?>"><span class="glyphicon glyphicon-arrow-up"></span></a><a href="/admin/settings/news/down/<?= $new['id'] ?>"><span class="glyphicon glyphicon-arrow-down"></span></a>(<?= $new['order'] ?>)
                        <?php
                        if ($new['active'] == 'on') {
                            echo '<span style="-webkit-user-select: none;" class="label label-success">да</span>';
                        } else {
                            echo '<span style="-webkit-user-select: none;" class="label label-danger">нет</span>';
                        }
                        ?>
                        <a href="/admin/settings/news/edit/<?= $new['id'] ?>"><span class="glyphicon glyphicon-edit"></span></a>
                        <a href="/admin/settings/news/delete/<?= $new['id'] ?>"><span class="glyphicon glyphicon-trash"></span></a>
                    </span>
                </div>
                <div class="col-md-9">
                    <p><?= 'ЧПУ: <i>' . $new['url'] . '</i>' ?></p>
                </div>
                <div class="col-md-9">
                    <p><?= mb_strimwidth(strip_tags($new['text']), 0, 300, "..."); ?></p>
                </div>
                <div class="col-md-9" style="float:right;">
                    <span class="glyphicon glyphicon-eye-open"></span><span style="margin-left: 10px;">160</span>
                    <span class="glyphicon glyphicon-comment"></span><span style="margin-left: 10px;">12</span>
                    <span class="glyphicon glyphicon-time"></span><span style="margin-left: 10px;"><?= date('d.m.Y H:i', strtotime($new['date'])) ?></span>
                </div>
                <br><hr>
            </div>
            <?php
        endforeach;
    }
    ?>
</div>