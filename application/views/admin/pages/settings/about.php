<div class="col-md-9">
    <a href='/admin/settings/about/edit'><button type="button" style='margin-bottom:20px;' class="btn btn-default btn-default">Изменить</button></a>
    <div class="row">
        <div class='col-md-12'>
            <?php
            if (!$about['text']) {
                echo '<div class="alert alert-danger" role="alert"><strong>Oops! </strong>Текста нет!</div>';
            } else {
                echo $about['text'];
            }
            ?>
        </div>
    </div>
</div>