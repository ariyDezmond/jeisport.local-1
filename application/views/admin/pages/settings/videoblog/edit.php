<div class="col-md-10">
    <div class="row">
        <div class="col-md-12">
            <a href="/admin/settings/videoblog">
                <button type="button" class="btn btn-default btn-default"><span class='glyphicon glyphicon-step-backward'></span> Назад к списку</button>
            </a>
        </div>
    </div>
    <div class="page-header">
        <h2>Редактирование поста в блоге</h2>
    </div>
    <?= form_open_multipart('admin/settings/videoblog/edit/' . $blog['id']) ?>
    <div class="row" style="margin-bottom: 5px;">
        <div class="col-md-12">
            <?= validation_errors(); ?>
            <?php
            if ($this->session->userdata('error')) {
                echo $this->session->userdata('error');
            }
            $this->session->unset_userdata('error');
            ?>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                <label for="name">Название</label>
                <input name='name' value="<?= $blog['name'] ?>" type="text" class="form-control" id="name" placeholder="Название">
            </div>
            <div class="form-group">
                <label for="youtube">Ключ видео с YouTube</label>
                <input name='youtube' value="<?= $blog['youtube'] ?>" type="text" class="form-control" id="youtube" placeholder="bkE906J4CDo" required>
            </div>
            <div class="form-group">
                <label for="date">Дата публикаци</label>
                <div class='input-group date' id='datetimepicker1'>
                    <input name="date" id="date" type='text' value="<?= date('d.m.Y h:i', strtotime($blog['date'])) ?>" class="form-control" />
                    <span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>
                </div>
            </div>
            <script type="text/javascript">
                $(function () {
                    $('#datetimepicker1').datetimepicker();
                });
            </script>
        </div>
        <div class="col-md-6">
            <div class="checkbox">
                <label>
                    <input name='active' <?php
                    if ($blog['active'] == 'on') {
                        echo 'checked';
                    }
                    ?> type="checkbox"> Активен
                </label>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="form-group">
                <label for="text">Текст поста</label>
                <textarea name="text" id="text" rows="30">
                    <?= $blog['text'] ?>
                </textarea>
            </div>
            <script>
                CKEDITOR.replace('text');
            </script>
        </div>
    </div>
    <div class="row" style="margin-top: 10px;">
        <div class="col-md-12">
            <input type='hidden' name='do' value='videoblogEdit'>
            <button type="submit" class="btn btn-default">Сохранить</button>
        </div>
    </div>
    <?= form_close(); ?>
</div>
