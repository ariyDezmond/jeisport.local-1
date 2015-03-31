<table class="table table-bordered">
    <?php
    if (is_array($requests)) {
        ?>
        <tr>
            <td width="30px">#</td>
            <td width="25%">Имя</td>
            <td width="25%">E-mail</td>
            <td width="25%">Телефон</td>
            <td width="25%">Дата</td>
            <td width="25%">IP-адрес</td>
            <td width="30px">Прочитана</td>
            <td width="30px">Подробнее</td>
            <td width="30px">Удалить</td>
        </tr>
        <?php
        foreach ($requests as $request):
            ?>
            <tr>
                <td class="id"><?= $request['id'] ?></td>
                <td><?= $request['name'] ?></td>
                <td><?= $request['email'] ?></td>
                <td><?= $request['phone'] ?></td>
                <td><?= $request['date'] ?></td>
                <td><?= $request['ip'] ?></td>
                <td><?php
                    if ($request['read'] == 'on') {
                        echo '<span style="-webkit-user-select: none;" class="label label-success active">да</span>';
                    } else {
                        echo '<span style="-webkit-user-select: none;" class="label label-danger active">нет</span>';
                    }
                    ?></td>
                <td><a href="/admin/requests/<?= $request['id'] ?>"><span class="glyphicon glyphicon-share"></span></a></td>
                <td><a href="/admin/requests/delete/<?= $request['id'] ?>"><span class="glyphicon glyphicon-trash"></span></a></td>
            </tr>
            <?php
        endforeach;
    } else {
        echo '<div class="alert alert-danger" role="alert"><strong>Oops! </strong>Заявок с сайта нет!</div>';
    }
    ?>
</table>
