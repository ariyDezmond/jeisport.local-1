<a href='/admin/categories/add'><button type="button" style='margin-bottom:20px;' class="btn btn-default btn-default">Добавить</button></a>
<table class="table table-bordered">
    <tr>
        <td width="30px">#</td>
        <td width="30%">Название</td>
        <td width="30%">ЧПУ</td>
        <td>Миниатюра</td>
        <td>Активен</td>
        <td>Порядок</td>
        <td width="30px">Редактировать</td>
        <td width="30px">Удалить</td>
    </tr>
    <?php
    if (is_array($categories)) {
        foreach ($categories as $category):
            ?>
            <tr>
                <td class="id" width="30px"><?= $category['id'] ?></td>
                <td width="30%"><?= $category['name'] ?></td>
                <td width="30%"><?= $category['url'] ?></td>
                <td width="20px" bgcolor='gray'><img width="50px" src='/images/categories/<?= $category['image'] ?>'></td>
                <td width="30px"><?php
                    if ($category['active'] == 'on') {
                        echo '<span style="-webkit-user-select: none;" class="label label-success active">да</span>';
                    } else {
                        echo '<span style="-webkit-user-select: none;" class="label label-danger active">нет</span>';
                    }
                    ?></td>
                <td><a href='/admin/categories/up/<?= $category['id'] ?>'><span class="glyphicon glyphicon-arrow-up"></span></a><a href='/admin/categories/down/<?= $category['id'] ?>'><span class="glyphicon glyphicon-arrow-down"></span></a> (<?= $category['order'] ?>)</td>
                <td width="30px"><a href='/admin/categories/edit/<?= $category['id'] ?>'><span class="glyphicon glyphicon-edit"></span></a></td>
                <td width="30px"><a href='/admin/categories/delete/<?= $category['id'] ?>'><span class="glyphicon glyphicon-remove"></span></a></td>
            </tr>
            <?php
        endforeach;
    } else {
        echo '<div class="alert alert-danger" role="alert"><strong>Oops! </strong>Категорий не найдено</div>';
    }
    ?>
</table>
