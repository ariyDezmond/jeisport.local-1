<div class="col-md-9">
    <a href='/admin/settings/news-categories/add'><button type="button" style='margin-bottom:20px;' class="btn btn-default btn-default">Добавить</button></a>
    <?php
    if (!is_array($ncategories)) {
        echo '<div class="alert alert-danger" role="alert"><strong>Oops! </strong>Категорий для новостей не найдено!</div>';
    } else {
        ?>
        <table class="table table-bordered">
            <tr>
                <td width="30px">#</td>
                <td width="50%">Название</td>
                <td>Активен</td>
                <td>Порядок</td>
                <td width="30px">Редактировать</td>
                <td width="30px">Удалить</td>
            </tr>
            <?php
            foreach ($ncategories as $ncategory):
                ?>
                <tr>
                    <td class="id" width="30px"><?= $ncategory['id'] ?></td>
                    <td width="30%"><?= $ncategory['name'] ?></td>
                    <td width="30px"><?php
                        if ($ncategory['active'] == 'on') {
                            echo '<span style="-webkit-user-select: none;" class="label label-success active">да</span>';
                        } else {
                            echo '<span style="-webkit-user-select: none;" class="label label-danger active">нет</span>';
                        }
                        ?></td>
                    <td><a href='/admin/settings/news-categories/up/<?= $ncategory['id'] ?>'><span class="glyphicon glyphicon-arrow-up"></span></a><a href='/admin/settings/news-categories/down/<?= $ncategory['id'] ?>'><span class="glyphicon glyphicon-arrow-down"></span></a> (<?= $ncategory['order'] ?>)</td>
                    <td width="30px"><a href='/admin/settings/news-categories/edit/<?= $ncategory['id'] ?>'><span class="glyphicon glyphicon-edit"></span></a></td>
                    <td width="30px"><a href='/admin/settings/news-categories/delete/<?= $ncategory['id'] ?>'><span class="glyphicon glyphicon-remove"></span></a></td>
                </tr>
                <?php
            endforeach;
        }
        ?>
    </table>
</div>