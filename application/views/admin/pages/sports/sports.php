<a href='/admin/sports/add'><button type="button" style='margin-bottom:20px;' class="btn btn-default btn-default">Добавить</button></a>
<table class="table table-bordered">
    <tr>
        <td width="20px">#</td>
        <td>Название</td>
        <td>ЧПУ</td>
        <td>Миниатюра</td>
        <td width="25%">
            <select class="form-control" id='order_by_category'>
                <option value="" disabled selected style="display: none;">Категория</option>
                <option value="all">Все</option>
                <?php foreach ($categories as $category): ?>
                    <option <?php
                    if ($category['id'] == $cat) {
                        echo 'selected';
                    }
                    ?> value="<?= $category['id'] ?>"><?= $category['name'] ?></option>
                    <?php endforeach; ?>
            </select>
        </td>
        <td>Активен</td>
        <td>Порядок</td>
        <td>Редактировать</td>
        <td>Удалить</td>
    </tr>
    <?php
    if (is_array($sports)) {
        foreach ($sports as $sport):
            ?>
            <tr>
                <td width="30px"><?= $sport['id'] ?></td>
                <td width="30%"><?= $sport['name'] ?></td>
                <td width="30%"><?php
                    $query = $this->db->get_where('categories', array('id' => $sport['category_id']));
                    $categories = $query->row_array();
                    if ($categories) {
                        echo $categories['url'] . '/<b>' . $sport['url'] . '/</b>';
                    } else {
                        echo '<div style="color:red;">Нет категории</div>';
                    }
                    ?></td>
                <td width="20px"><img width="200px" style='border: 1px solid #ddd; border-radius: 4px; padding: 4px;' src='/images/sports/<?= $sport['image'] ?>'></td>
                <td><?php
                    $query = $this->db->get_where('categories', array('id' => $sport['category_id']));
                    $categories = $query->row_array();
                    if ($categories) {
                        echo $categories['name'];
                    } else {
                        echo '<div style="color:red;">Нет категории</div>';
                    }
                    ?></td>
                <td width="30px"><?php
                    if ($sport['active'] == 'on') {
                        echo '<span style="-webkit-user-select: none;" class="label label-success active">да</span>';
                    } else {
                        echo '<span style="-webkit-user-select: none;" class="label label-danger active">нет</span>';
                    }
                    ?></td>
                <td><a href='/admin/sports/up/<?= $sport['id'] ?>'><span class="glyphicon glyphicon-arrow-up"></span></a><a href='/admin/sports/down/<?= $sport['id'] ?>'><span class="glyphicon glyphicon-arrow-down"></span></a> (<?= $sport['order'] ?>)</td>
                <td width="30px"><a href='/admin/sports/edit/<?= $sport['id'] ?>'><span class="glyphicon glyphicon-edit"></span></a></td>
                <td width="30px"><a href='/admin/sports/delete/<?= $sport['id'] ?>'><span class="glyphicon glyphicon-remove"></span></a></td>
            </tr>
            <?php
        endforeach;
    } else {
        echo '<div class="alert alert-danger" role="alert"><strong>Oops! </strong>Видов спорта еще никто не добавлял!</div>';
    }
    ?>
</table>
