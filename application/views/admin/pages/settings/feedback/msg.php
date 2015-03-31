<script>
    $(document).ready(function () {
        $.ajax({
            url: '/feedback/read',
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
            <a href="/admin/settings/feedback">
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
                <div class="panel-heading">E-mail</div>
                <div class="panel-body">
                    <a href="mailto:<?= $msg['email'] ?>"><?= $msg['email'] ?></a>
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
                <div class="panel-heading">Телефон</div>
                <div class="panel-body">
                    <?= $msg['phone'] ?>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="panel panel-default">
                <div class="panel-heading">Тема</div>
                <div class="panel-body">
                    <?= $msg['theme'] ?>
                </div>
            </div>
        </div>
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">Сообщение</div>
                <div class="panel-body">
                    <?= $msg['msg'] ?>
                </div>
            </div>
        </div>
    </div>
</div>