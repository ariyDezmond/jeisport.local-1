<div class="col-md-9">
    <a href='/admin/settings/subways/add'><button type="button" style='margin-bottom:20px;' class="btn btn-default btn-default">Добавить</button></a>
    <?php
    if (!is_array($subways)) {
        echo '<div class="alert alert-danger" role="alert"><strong>Oops! </strong>Станций метро в базе не найдено!</div>';
    } else {
        ?>
        <table class="table table-bordered">
            <tr>
                <td width="30px">#</td>
                <td width="50%">Название</td>
                <td>Миниатюра</td>
                <td>Активен</td>
                <td>Порядок</td>
                <td width="30px">Редактировать</td>
                <td width="30px">Удалить</td>
            </tr>
            <?php
            foreach ($subways as $subway):
                ?>
                <tr>
                    <td class="id" width="30px"><?= $subway['id'] ?></td>
                    <td width="30%"><?= $subway['name'] ?></td>
                    <td width="20px"><img width="20px" src='/images/subways/<?= $subway['image'] ?>'></td>
                    <td width="30px"><?php
                        if ($subway['active'] == 'on') {
                            echo '<span style="-webkit-user-select: none;" class="label label-success active">да</span>';
                        } else {
                            echo '<span style="-webkit-user-select: none;" class="label label-danger active">нет</span>';
                        }
                        ?></td>
                    <td><a href='/admin/settings/subways/up/<?= $subway['id'] ?>'><span class="glyphicon glyphicon-arrow-up"></span></a><a href='/admin/settings/subways/down/<?= $subway['id'] ?>'><span class="glyphicon glyphicon-arrow-down"></span></a> (<?= $subway['order'] ?>)</td>
                    <td width="30px"><a href='/admin/settings/subways/edit/<?= $subway['id'] ?>'><span class="glyphicon glyphicon-edit"></span></a></td>
                    <td width="30px"><a href='/admin/settings/subways/delete/<?= $subway['id'] ?>'><span class="glyphicon glyphicon-remove"></span></a></td>
                </tr>
                <?php
            endforeach;
        }
        ?>
    </table>
</div>