<div class="category-menu">
    <div class="wrapper">
        <form action="/find_point/" method="post">
            <div class="input-text">
                <span>Выберите категорию</span>
                <label for="">
                    <i></i>
                    <select name="category" id="select-1" placeholder="категория" value="категория">
                        <?php
                        foreach ($categories as $cat):
                            ?>
                            <option <?php
                            if ($cat['id'] == $sports[0]['category_id'])
                                echo 'selected';
                            ?> value="<?= $cat['id'] ?>"><?= $cat['name'] ?></option>
                                <?php
                            endforeach;
                            ?>
                    </select>
                </label>
            </div>
            <div class="input-text">
                <span>Выберите вид спорта</span>
                <label for="">
                    <i></i>
                    <select name="sport" id="select-2" placeholder="подкатегория" value="подкатегория">
                        <!--<option value="" disabled style="display: none;">Выберите категорию...</option>-->
                        <?php foreach ($sports as $cat): ?>
                            <option value="<?= $cat['id'] ?>"><?= $cat['name'] ?></option>
                        <?php endforeach; ?>
                    </select>
                </label>
            </div>
            <div class="input-text input-text-3">
                <span>Выберите станцию метро</span>
                <label for="">
                    <input type="text" name="subway" id="select-3" placeholder="начните набирать..." value="">
                </label>
            </div>
            <div class="input-submit">
                <input type="submit" value="Применить">
                <input type="submit" class="reset_btn" value="Сбросить">
            </div>
        </form>
    </div>
</div>