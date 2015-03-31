<script>
    $(document).ready(function () {
        $.ajax({
            url: '/request/read',
            type: "POST",
            dataType: "html",
            data: {
                id: <?= $request['id'] ?>
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
<div style="margin-bottom: 20px;" class="row">
    <div class="col-md-12">
        <a href="/admin/requests">
            <button type="button" class="btn btn-default btn-default"><span class="glyphicon glyphicon-step-backward"></span> Назад к списку</button>
        </a>
    </div>
</div>
<div class="row">
    <div class="col-md-6">
        <div class="panel panel-default">
            <div class="panel-heading">Имя</div>
            <div class="panel-body">
                <?= $request['name'] ?>
            </div>
        </div>
    </div>
    <div class="col-md-6">
        <div class="panel panel-default">
            <div class="panel-heading">E-mail</div>
            <div class="panel-body">
                <a href="mailto:<?= $request['email'] ?>"><?= $request['email'] ?></a>
            </div>
        </div>
    </div>
    <div class="col-md-6">
        <div class="panel panel-default">
            <div class="panel-heading">Дата отправки</div>
            <div class="panel-body">
                <?= $request['date'] ?>
            </div>
        </div>
    </div>
    <div class="col-md-6">
        <div class="panel panel-default">
            <div class="panel-heading">IP-адрес</div>
            <div class="panel-body">
                <?= $request['ip'] ?>
            </div>
        </div>
    </div>
    <div class="col-md-6">
        <div class="panel panel-default">
            <div class="panel-heading">Возраст</div>
            <div class="panel-body">
                <?= $request['age'] ?>
            </div>
        </div>
    </div>
    <div class="col-md-6">
        <div class="panel panel-default">
            <div class="panel-heading">Пол</div>
            <div class="panel-body">
                <?= $request['sex'] ?>
            </div>
        </div>
    </div>
    <div class="col-md-6">
        <div class="panel panel-default">
            <div class="panel-heading">Противопоказания от врача</div>
            <div class="panel-body">
                <?= $request['contrains'] ?>
            </div>
        </div>
    </div>
    <div class="col-md-6">
        <div class="panel panel-default">
            <div class="panel-heading">Какими видами спорта хотели бы заниматься</div>
            <div class="panel-body">
                <?= $request['sports'] ?>
            </div>
        </div>
    </div>
    <div class="col-md-6">
        <div class="panel panel-default">
            <div class="panel-heading">Вес</div>
            <div class="panel-body">
                <?= $request['weight'] ?>
            </div>
        </div>
    </div>
    <div class="col-md-6">
        <div class="panel panel-default">
            <div class="panel-heading">Ближайшее метро</div>
            <div class="panel-body">
                <?= $request['subway'] ?>
            </div>
        </div>
    </div>
    <div class="col-md-6">
        <div class="panel panel-default">
            <div class="panel-heading">Сколько готовы платить в месяц</div>
            <div class="panel-body">
                <?= $request['canpay'] ?>
            </div>
        </div>
    </div>
    <div class="col-md-6">
        <div class="panel panel-default">
            <div class="panel-heading">Телефон</div>
            <div class="panel-body">
                <?= $request['phone'] ?>
            </div>
        </div>
    </div>
</div>