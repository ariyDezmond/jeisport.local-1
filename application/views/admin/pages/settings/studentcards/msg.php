<script>
    $(document).ready(function () {
        $.ajax({
            url: '/studentcards/read',
            type: "POST",
            dataType: "html",
            data: {
                id: <?= $msg['id'] ?>
            },
            success: function (response) {
                console.log('Успех');
            },
            error: function (response) {
                console.log('Ошибка');
            }
        });
    });
</script>
<div class="col-md-10">
    <div style="margin-bottom: 20px;" class="row">
        <div class="col-md-12">
            <a href="/admin/settings/studentcards">
                <button type="button" class="btn btn-default btn-default"><span class="glyphicon glyphicon-step-backward"></span> Назад к списку</button>
            </a>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <div class="panel panel-default">
                <div class="panel-heading">Имя</div>
                <div class="panel-body">
                    <?= $msg['name'] ?>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="panel panel-default">
                <div class="panel-heading">Фамилия</div>
                <div class="panel-body">
                    <?= $msg['sname'] ?>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="panel panel-default">
                <div class="panel-heading">Отчество</div>
                <div class="panel-body">
                    <?= $msg['mname'] ?>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="panel panel-default">
                <div class="panel-heading">Дата отправки</div>
                <div class="panel-body">
                    <?= $msg['date'] ?>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="panel panel-default">
                <div class="panel-heading">IP-адрес</div>
                <div class="panel-body">
                    <?= $msg['ip'] ?>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="panel panel-default">
                <div class="panel-heading">Способ оплаты/Доставки</div>
                <div class="panel-body">
                    <?php
                    if ($msg['delivery'] == 'courier') {
                        echo 'Оплата курьеру';
                    } elseif ($msg['delivery'] == 'self') {
                        echo 'Самовывоз/Онлайн';
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
</div>