<div class="col-md-9">
    <a href='/admin/settings/videoblog/add'><button type="button" style='margin-bottom:20px;' class="btn btn-default btn-default">Добавить</button></a>
    <?php
    if (!is_array($videoblogs)) {
        echo '<div class="alert alert-danger" role="alert"><strong>Oops! </strong>Постов в видео блог еще никто не добавлял!</div>';
    } else {
        foreach ($videoblogs as $videoblog):
            ?>
            <div class="row">
                <div class="col-md-3">
                    <img width="200" src="http://img.youtube.com/vi/<?= $videoblog['youtube'] ?>/0.jpg">
                </div>
                <div class="col-md-6">
                    <b><?= $videoblog['name'] ?></b>
                </div>
                <div class="col-md-3">
                    <span style="float:right;">
                        <a href="/admin/settings/videoblog/up/<?= $videoblog['id'] ?>"><span class="glyphicon glyphicon-arrow-up"></span></a><a href="/admin/settings/videoblog/down/<?= $videoblog['id'] ?>"><span class="glyphicon glyphicon-arrow-down"></span></a>(<?= $videoblog['order'] ?>)
                        <?php
                        if ($videoblog['active'] == 'on') {
                            echo '<span style="-webkit-user-select: none;" class="label label-success">да</span>';
                        } else {
                            echo '<span style="-webkit-user-select: none;" class="label label-danger">нет</span>';
                        }
                        ?>
                        <a href="/admin/settings/videoblog/edit/<?= $videoblog['id'] ?>"><span class="glyphicon glyphicon-edit"></span></a>
                        <a href="/admin/settings/videoblog/delete/<?= $videoblog['id'] ?>"><span class="glyphicon glyphicon-trash"></span></a>
                    </span>
                </div>
                <div class="col-md-9" style="float:right;">
                    <span class="glyphicon glyphicon-eye-open"></span><span style="margin-left: 10px;"><?= $videoblog['views'] ?></span>
                    <span class="glyphicon glyphicon-comment"></span><span style="margin-left: 10px;">12</span>
                    <span class="glyphicon glyphicon-time"></span><span style="margin-left: 10px;"><?= $videoblog['date'] ?></span>
                </div>
                <br><hr>
            </div>
            <?php
        endforeach;
    }
    ?>
</div>