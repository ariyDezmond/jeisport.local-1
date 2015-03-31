<div class="col-md-9">
    <a href='/admin/settings/maintext/edit'><button type="button" style='margin-bottom:20px;' class="btn btn-default btn-default">Изменить</button></a>
    <div class="row">
        <div class='col-md-12'>
            <?php
            if (!$maintext['text']) {
                echo '<div class="alert alert-danger" role="alert"><strong>Oops! </strong>Текста на главной нет!</div>';
            } else {
                echo $maintext['text'];
            }
            ?>
        </div>
    </div>
</div>