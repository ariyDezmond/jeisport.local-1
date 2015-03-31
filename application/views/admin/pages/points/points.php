<a href='/admin/points/add'><button type="button" style='margin-bottom:20px;' class="btn btn-default btn-default">Добавить</button></a>
<div class="well">Всего записей в базе данных: <?= $count_all ?></div>

<?php if (is_numeric($this->uri->segment(3)) || (!$this->uri->segment(3))): ?>
    <?= $this->pagination->create_links() ?>
<?php endif; ?>
<table class="table table-bordered">
    <tr>
        <td width="20px">#</td>
        <td>Название</td>
        <td>ЧПУ</td>
        <td>Главное фото</td>
        <td width="25%">
            <select class="form-control" id='order_by_sport'>
                <option value="" disabled selected style="display: none;">Вид спорта</option>
                <option value="all">Все</option>
                <?php foreach ($sports as $sport): ?>
                    <option <?php
                    if ($sport['id'] == $cat) {
                        echo 'selected';
                    }
                    ?> value="<?= $sport['id'] ?>"><?= $sport['name'] ?></option>
                    <?php endforeach; ?>
            </select>
        </td>
        <td>Активен</td>
        <td>Оплачен</td>
        <td>Порядок</td>
        <td>Редактировать</td>
        <td>Удалить</td>
    </tr>
    <?php
    if (is_array($points)) {
        foreach ($points as $point):
            ?>
            <tr>
                <td width="30px"><?= $point['id'] ?></td>
                <td width="30%"><?= cut_str($point['name'], 50) ?></td>
                <td width="30%">/<?= cut_str($point['url'], 25) ?>/</td>
                <td width="20px"><img width="150px" style='border: 1px solid #ddd; border-radius: 4px; padding: 4px;' src='/images/points/<?= $point['image'] ?>'></td>
                <td><?php
                    $query = $this->db->get_where('sports', array('id' => $point['sport_id']));
                    $sports = $query->row_array();
                    if ($sports) {
                        echo $sports['name'];
                    } else {
                        echo '<div style="color:red;">Нет вида спорта</div>';
                    }
                    ?></td>
                <td width="30px"><?php
                    if ($point['active'] == 'on') {
                        echo '<span style="-webkit-user-select: none;" class="label label-success active">да</span>';
                    } else {
                        echo '<span style="-webkit-user-select: none;" class="label label-danger active">нет</span>';
                    }
                    ?></td>
                <td width="30px"><?php
                    if ($point['payed'] == 'on') {
                        echo '<span style="-webkit-user-select: none;" class="label label-success active">да</span>';
                    } else {
                        echo '<span style="-webkit-user-select: none;" class="label label-danger active">нет</span>';
                    }
                    ?></td>
                <td><a href='/admin/points/up/<?= $point['id'] ?>'><span class="glyphicon glyphicon-arrow-up"></span></a><a href='/admin/points/down/<?= $point['id'] ?>'><span class="glyphicon glyphicon-arrow-down"></span></a> (<?= $point['order'] ?>)</td>
                <td width="30px"><a href='/admin/points/edit/<?= $point['id'] ?>'><span class="glyphicon glyphicon-edit"></span></a></td>
                <td width="30px"><a href='/admin/points/delete/<?= $point['id'] ?>'><span class="glyphicon glyphicon-remove"></span></a></td>
            </tr>
            <?php
        endforeach;
    } else {
        echo '<div class="alert alert-danger" role="alert"><strong>Oops! </strong>Спортивных точек в базе не обнаружено!</div>';
    }
    ?>
</table>
<?php if (is_numeric($this->uri->segment(3)) || (!$this->uri->segment(3))): ?>
    <?= $this->pagination->create_links() ?>
<?php endif; ?>
