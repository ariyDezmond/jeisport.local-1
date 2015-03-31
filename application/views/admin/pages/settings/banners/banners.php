<div class="col-md-9">
    <a href='/admin/settings/banners/add'><button type="button" style='margin-bottom:20px;' class="btn btn-default btn-default">Добавить</button></a>
    <?php
    if (!is_array($banners)) {
        echo '<div class="alert alert-danger" role="alert"><strong>Oops! </strong>Записей в базе не найдено!</div>';
    } else {
        ?>
        <table class="table table-bordered">
            <tr>
                <td width="30px">#</td>
                <td width="50%">Ссылка</td>
                <td width="50%">Позиция</td>
                <td width="50%">Кликов</td>
                <td width="50%">Показов</td>
                <td>Миниатюра</td>
                <td>Активен</td>
                <td>Статус</td>
                <td>Порядок</td>
                <td width="30px">Править</td>
                <td width="30px">Удалить</td>
            </tr>
            <?php
            foreach ($banners as $banner):
                ?>
                <tr>
                    <td class="id" width="30px"><?= $banner['id'] ?></td>
                    <td width="30%"><?= mb_strimwidth(strip_tags($banner['url']), 0, 20, "..."); ?></td>
                    <td width="30px"><?php
                        if ($banner['pos'] == 'main') {
                            echo 'На главной';
                        } elseif ($banner['pos'] == 'news') {
                            echo 'На странице "Новости"';
                        } elseif ($banner['pos'] == 'blog') {
                            echo 'На странице "Блог"';
                        } else {
                            echo 'Позиция не задана';
                        }
                        ?></td>
                    <td><?= $banner['clicks'] ?></td>
                    <td><?= $banner['views'] ?></td>
                    <td width="20px"><img width="100px" src='/images/banners/<?= $banner['image'] ?>'></td>
                    <td width="30px"><?php
                        if ($banner['active'] == 'on') {
                            echo '<span style="-webkit-user-select: none;" class="label label-success active">да</span>';
                        } else {
                            echo '<span style="-webkit-user-select: none;" class="label label-danger active">нет</span>';
                        }
                        ?></td>
                    <td width="30px"><?php
                        if ($banner['status'] == 'on') {
                            echo '<span style="-webkit-user-select: none;" class="label label-success active">показывается</span>';
                        } else {
                            echo '<span style="-webkit-user-select: none;" class="label label-danger active">остановлен</span>';
                        }
                        ?></td>
                    <td><a href='/admin/settings/banners/up/<?= $banner['id'] ?>'><span class="glyphicon glyphicon-arrow-up"></span></a><a href='/admin/settings/banners/down/<?= $banner['id'] ?>'><span class="glyphicon glyphicon-arrow-down"></span></a> (<?= $banner['order'] ?>)</td>
                    <td width="30px"><a href='/admin/settings/banners/edit/<?= $banner['id'] ?>'><span class="glyphicon glyphicon-edit"></span></a></td>
                    <td width="30px"><a href='/admin/settings/banners/delete/<?= $banner['id'] ?>'><span class="glyphicon glyphicon-remove"></span></a></td>
                </tr>
                <?php
            endforeach;
        }
        ?>
    </table>
</div>