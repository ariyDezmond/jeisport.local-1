<div class="col-md-10">
    <div class="row">
        <div class="col-md-12">
            <a href="/admin/settings/maintext">
                <button type="button" class="btn btn-default btn-default"><span class='glyphicon glyphicon-step-backward'></span> Назад</button>
            </a>
        </div>
    </div>
    <div class="page-header">
        <h2>Редактирование текста на главной странице</h2>
    </div>
    <?= form_open_multipart('admin/settings/maintext/edit') ?>
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
        <div class="col-md-12">
            <div class="form-group">
                <label for="text">Текст поста</label>
                <textarea name="text" id="text" rows="30">
                    <?= $maintext['text'] ?>
                </textarea>
            </div>
            <script>
                CKEDITOR.replace('text');
            </script>
        </div>
    </div>
    <div class="row" style="margin-top: 10px;">
        <div class="col-md-12">
            <input type='hidden' name='do' value='maintextEdit'>
            <button type="submit" class="btn btn-default">Сохранить</button>
        </div>
    </div>
    <?= form_close(); ?>
</div>
