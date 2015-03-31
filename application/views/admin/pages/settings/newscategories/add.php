<div class="col-md-10">
    <div class="row">
        <div class="col-md-12">
            <a href="/admin/settings/news-categories">
                <button type="button" class="btn btn-default btn-default"><span class='glyphicon glyphicon-step-backward'></span> Назад к списку</button>
            </a>
        </div>
    </div>
    <div class="page-header">
        <h2>Добавление категории для новостей</h2>
    </div>
    <?= form_open_multipart('admin/settings/news-categories/add') ?>
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
                <input required name='name' value="<?= set_value('name') ?>" type="text" class="form-control" id="name" placeholder="Название">
            </div>
            <div class="checkbox">
                <label>
                    <input name='active' type="checkbox"> Активен
                </label>
            </div>
        </div>
    </div>
    <div class="row" style="margin-top: 10px;">
        <div class="col-md-12">
            <input type='hidden' name='do' value='newcategoryAdd'>
            <button type="submit" class="btn btn-default">Добавить</button>
        </div>
    </div>
    <?= form_close(); ?>
</div>
