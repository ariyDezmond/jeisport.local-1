<div class="col-md-9">
    <a href='/admin/settings/blog/add'><button type="button" style='margin-bottom:20px;' class="btn btn-default btn-default">Добавить</button></a>
    <?php
    if (!is_array($blogs)) {
        echo '<div class="alert alert-danger" role="alert"><strong>Oops! </strong>Постов в блог еще никто не добавлял!</div>';
    } else {
        foreach ($blogs as $blog):
            ?>
            <div class="row">
                <div class="col-md-3">
                    <img width="200" src="/images/blog/<?= $blog['image'] ?>">
                </div>
                <div class="col-md-6">
                    <b><?= $blog['name'] ?></b>
                </div>
                <div class="col-md-3">
                    <span style="float:right;">
                        <a href="/admin/settings/blog/up/<?= $blog['id'] ?>"><span class="glyphicon glyphicon-arrow-up"></span></a><a href="/admin/settings/blog/down/<?= $blog['id'] ?>"><span class="glyphicon glyphicon-arrow-down"></span></a>(<?= $blog['order'] ?>)
                        <?php
                        if ($blog['active'] == 'on') {
                            echo '<span style="-webkit-user-select: none;" class="label label-success">да</span>';
                        } else {
                            echo '<span style="-webkit-user-select: none;" class="label label-danger">нет</span>';
                        }
                        ?>
                        <a href="/admin/settings/blog/edit/<?= $blog['id'] ?>"><span class="glyphicon glyphicon-edit"></span></a>
                        <a href="/admin/settings/blog/delete/<?= $blog['id'] ?>"><span class="glyphicon glyphicon-trash"></span></a>
                    </span>
                </div>
                <div class="col-md-9">
                    <p><?= 'ЧПУ: <i>' . $blog['url'] . '</i>' ?></p>
                </div>
                <div class="col-md-9">
                    <p><?= mb_strimwidth(strip_tags($blog['text']), 0, 300, "..."); ?></p>
                </div>
                <div class="col-md-9" style="float:right;">
                    <span class="glyphicon glyphicon-eye-open"></span><span style="margin-left: 10px;"><?= $blog['views'] ?></span>
                    <span class="glyphicon glyphicon-comment"></span><span style="margin-left: 10px;">12</span>
                    <span class="glyphicon glyphicon-time"></span><span style="margin-left: 10px;"><?= date('d.m.Y H:i', strtotime($blog['date'])) ?></span>
                </div>
                <br><hr>
            </div>
            <?php
        endforeach;
    }
    ?>
</div>