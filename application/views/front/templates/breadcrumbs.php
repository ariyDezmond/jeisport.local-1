<div class="content">
    <div class="wrapper">

        <ul class="breadcrumbs">
            <li><a href="/">Главная</a></li>
            <?php if ($stitle): ?>
                <li><a href="/<?= $category['url'] ?>"><?= $category['name'] ?></a></li>
            <?php else: ?>
                <li><a href=""><?= $category['name'] ?></a></li>
            <?php endif; ?>
            <?php if ($stitle): ?>
                <li><a href=""><?= $stitle ?></a></li>
            <?php endif; ?>
        </ul><!-- breadcrumbs -->


<!--
        <div class="container">
            <div class="main-container">
                <div class="breadcrumbs">
                    <ul>
                        <li><span><a href="/">Главная</a></span></li>
                        <?php if ($stitle): ?>
                            <li><span><a href="/<?= $category['url'] ?>"><?= $category['name'] ?></a></span></li>
                        <?php else: ?>
                            <li><span><?= $category['name'] ?></span></li>
                        <?php endif; ?>
                        <?php if ($stitle): ?>
                            <li><span><?= $stitle ?></span></li>
                        <?php endif; ?>
                    </ul>
                </div>-->