<h3>Тренер Фитнес-клуба <br> "<?= $point ?>"</h3>
<div class="trainer_block">
    <img style="max-width: 220px;" src="/images/points/treners/<?= $trener['image'] ?>" alt="<?= $trener['name'] ?>">
    <h5><?= $trener['sname'] ?> <?= $trener['name'] ?></h5>
    <?php if ($trener['pph']): ?>
        <h5>Цена за час: <?= $trener['pph'] ?></h5>
    <?php endif; ?>
    <?php if ($trener['ppm']): ?>
        <h5>Цена за месяц: <?= $trener['ppm'] ?></h5>
    <?php endif; ?>
    <div class="clear"></div>
    <?php if ($trener['text']): ?>
        <h6>Квалификация:</h6>
        <span><?= $trener['text'] ?></span>
    <?php endif; ?>
    <div class="clear"></div>
</div>