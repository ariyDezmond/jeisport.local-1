<script>
    $(document).ready(function () {
        $('#emailsave').click(function () {
            $.ajax({
                url: '/studentcards/savemail',
                type: "POST",
                dataType: "html",
                data: {
                    email: $(this).parent().parent().find('input').val()
                },
                success: function (response) {
                    console.log('Успех');
                },
                error: function (response) {
                    console.log('Ошибка');
                }
            });
        });
    });
</script>
<div class="col-md-10">
    <table class="table table-bordered">
        <?php
        if (is_array($msgs)) {
            ?>
            <tr>
                <td width="30px">#</td>
                <td width="25%">Имя</td>
                <td width="25%">Фамилия</td>
                <td width="25%">Отчество</td>
                <td width="25%">Доставка/Оплата</td>
                <td width="25%">Дата</td>
                <td width="25%">IP-адрес</td>
                <td width="30px">Прочитано</td>
                <td width="30px">Подробнее</td>
                <td width="30px">Удалить</td>
            </tr>
            <?php
            foreach ($msgs as $msg):
                ?>
                <tr>
                    <td class="id"><?= $msg['id'] ?></td>
                    <td><?= $msg['name'] ?></td>
                    <td><?= $msg['sname'] ?></td>
                    <td><?= $msg['mname'] ?></td>
                    <td><?php
                        if ($msg['delivery'] == 'courier') {
                            echo 'Оплата курьеру';
                        } elseif ($msg['delivery'] == 'self') {
                            echo 'Самовывоз/Онлайн';
                        }
                        ?></td>
                    <td><?= $msg['date'] ?></td>
                    <td><?= $msg['ip'] ?></td>
                    <td><?php
                        if ($msg['read'] == 'on') {
                            echo '<span style="-webkit-user-select: none;" class="label label-success active">да</span>';
                        } else {
                            echo '<span style="-webkit-user-select: none;" class="label label-danger active">нет</span>';
                        }
                        ?></td>
                    <td><a href="/admin/settings/studentcards/<?= $msg['id'] ?>"><span class="glyphicon glyphicon-share"></span></a></td>
                    <td><a href="/admin/settings/studentcards/delete/<?= $msg['id'] ?>"><span class="glyphicon glyphicon-trash"></span></a></td>
                </tr>
                <?php
            endforeach;
        } else {
            echo '<div class="alert alert-danger" role="alert"><strong>Oops! </strong>Сообщений с сайта нет!</div>';
        }
        ?>
    </table>
</div>
