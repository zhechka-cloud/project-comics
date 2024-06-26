<?php include ROOT . '/views/layouts/header_admin.php'; ?>

<section>
    <div class="container">
        <div class="row">

            <br/>

            <div class="breadcrumbs">
                <ol class="breadcrumb">
                    <li><a href="/admin">Адмінпанель</a></li>
                    <li><a href="/admin/comics">Керування товарами</a></li>
                    <li class="active">Редагувати товар</li>
                </ol>
            </div>


            <h4>Редагувати товар #<?php echo $id; ?></h4>

            <br/>

            <div class="col-lg-4">
                <div class="login-form">
                    <form action="#" method="post" enctype="multipart/form-data">

                        <p>Назва комікса</p>
                        <input type="text" name="name" placeholder="" value="<?php echo $comics['name']; ?>">

                        <p>Перепліт</p>
                        <input type="text" name="cover_type" placeholder="" value="<?php echo $comics['cover_type']; ?>">

                        <p>Формат</p>
                        <input type="text" name="format" placeholder="" value="<?php echo $comics['format']; ?>">

                        <p>Вартість, грн</p>
                        <input type="text" name="price" placeholder="" value="<?php echo $comics['price']; ?>">

                        <p>Кількість сторінок</p>
                        <input type="text" name="pages" placeholder="" value="<?php echo $comics['pages']; ?>">

                        <p>Кількість</p>
                        <input type="text" name="count" placeholder="" value="<?php echo $comics['count']; ?>">

                        <p>Дата публикації</p>
                        <input type="text" name="release_date" placeholder="" value="<?php echo $comics['release_date']; ?>">

                        <p>Видавець</p>
                        <select name="publisher_id">
                            <?php if (is_array($publishersList)): ?>
                                <?php foreach ($publishersList as $publisher): ?>
                                    <option value="<?php echo $publisher['id']; ?>">
                                        <?php echo $publisher['name']; ?>
                                    </option>
                                <?php endforeach; ?>
                            <?php endif; ?>
                        </select>

                        <br/><br/>

                        <p>Мова</p>
                        <select name="language_id">
                            <?php if (is_array($languagesList)): ?>
                                <?php foreach ($languagesList as $language): ?>
                                    <option value="<?php echo $language['id']; ?>">
                                        <?php echo $language['name']; ?>
                                    </option>
                                <?php endforeach; ?>
                            <?php endif; ?>
                        </select>

                        <br/><br/>

                        <p>Персонаж</p>
                        <select name="character_id">
                            <?php if (is_array($charactersList)): ?>
                                <?php foreach ($charactersList as $character): ?>
                                    <option value="<?php echo $character['id']; ?>">
                                        <?php echo $character['name']; ?>
                                    </option>
                                <?php endforeach; ?>
                            <?php endif; ?>
                        </select>  

                        <br/><br/>

                        <p>Зображення товара</p>
                        <img src="<?php echo Comics::getImage($comics['id']); ?>" width="200" alt="" />
                        <input type="file" name="image" placeholder="" value="<?php echo $comics['image']; ?>">

                        <p>Детальний опис</p>
                        <textarea name="description"><?php echo $comics['description']; ?></textarea>
                        
                        <br/><br/>

                        <p>Новинка</p>
                        <select name="is_new">
                            <option value="1" <?php if ($comics['is_new'] == 1) echo ' selected="selected"'; ?>>Так</option>
                            <option value="0" <?php if ($comics['is_new'] == 0) echo ' selected="selected"'; ?>>Ні</option>
                        </select>
                        
                        <br/><br/>

                        <p>Рекомендовані</p>
                        <select name="is_recomended">
                            <option value="1" <?php if ($comics['is_recomended'] == 1) echo ' selected="selected"'; ?>>Так</option>
                            <option value="0" <?php if ($comics['is_recomended'] == 0) echo ' selected="selected"'; ?>>Ні</option>
                        </select>
                        
                        <br/><br/>
                        
                        <input type="submit" name="submit" class="btn btn-default" value="Зберегти">
                        
                        <br/><br/>
                        
                    </form>
                </div>
            </div>

        </div>
    </div>
</section>

<?php include ROOT . '/views/layouts/footer_admin.php'; ?>

