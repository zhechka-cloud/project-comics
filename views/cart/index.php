<?php include ROOT . '/views/layouts/header.php'; ?>

<section>
    <div class="container">
        <div class="row">
            <div class="col-sm-3">
                <div class="left-sidebar">
                    <h2>Каталог</h2>
                     <div class="panel-group category-products">
                        <p>Видавці</p>
                        <?php foreach ($publisher as $publisherItem): ?>
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a href="/publisher/<?php echo $publisherItem['id'];?>">
                                            <?php echo $publisherItem['name'];?>
                                        </a>
                                    </h4>
                                </div>
                            </div>
                        <?php endforeach; ?>
                        <br>
                        <p>Персонажі</p>
                        <?php foreach ($character as $characterItem): ?>
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a href="/character/<?php echo $characterItem['id'];?>">
                                            <?php echo $characterItem['name'];?>
                                        </a>
                                    </h4>
                                </div>
                            </div>
                        <?php endforeach; ?>
                        <br>
                        <p>Мови</p>
                        <?php foreach ($language as $languageItem): ?>
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a href="/language/<?php echo $languageItem['id'];?>">
                                            <?php echo $languageItem['name'];?>
                                        </a>
                                    </h4>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>

            <div class="col-sm-9 padding-right">
                <div class="features_items">
                    <h2 class="title text-center">Кошик</h2>
                    
                    <?php if ($comicsInCart): ?>
                        <p>Ви обрали такі товари:</p>
                        <table class="table-bordered table-striped table">
                            <tr>
                                <th>Назва</th>
                                <th>Вартість, грн</th>
                                <th>Кількість, шт</th>
                                <th>Видалити</th>
                            </tr>
                            <?php foreach ($comics as $comics): ?>
                                <tr>
                                    <td>
                                        <a href="/comics/<?php echo $comics['id'];?>">
                                            <?php echo $comics['name'];?>
                                        </a>
                                    </td>
                                    <td><?php echo $comics['price'];?></td>
                                    <td><?php echo $comicsInCart[$comics['id']];?></td> 
                                    <td>
                                        <a href="/cart/delete/<?php echo $comics['id'];?>">
                                            <i class="fa fa-times"></i>
                                        </a>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                                <tr>
                                    <td colspan="4">Загальна вартість, грн:</td>
                                    <td><?php echo $totalPrice;?></td>
                                </tr>
                            
                        </table>
                        
                        <a class="btn btn-default checkout" href="/cart/checkout"><i class="fa fa-shopping-cart"></i> Оформити замовлення</a>
                    <?php else: ?>
                        <p>Кошик пустий</p>
                        
                        <a class="btn btn-default checkout" href="/"><i class="fa fa-shopping-cart"></i> Повернутись до покупок</a>
                    <?php endif; ?>

                </div>

                
                
            </div>
        </div>
    </div>
</section>

<?php include ROOT . '/views/layouts/footer.php'; ?>