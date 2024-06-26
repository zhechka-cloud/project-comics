<?php include ROOT . '/views/layouts/header.php'; ?>

<section>
    <div class="container">
        <div class="row">
            <div class="col-sm-3">
                <div class="left-sidebar">
                    <h2>Каталог</h2>
                     <div class="panel-group category-products">
                        <p>Видавці</p>
                        <?php foreach ($publishers as $publisherItem): ?>
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
                <div class="product-details"><!--product-details-->
                    <div class="row">
                        <div class="col-sm-5">
                            <div class="view-product">
                                <img src="<?php echo Comics::getImage($comics['id']); ?>" alt="" />
                            </div>
                        </div>
                        <div class="col-sm-7">
                            <div class="product-information"><!--/product-information-->

                                <?php if ($comics['is_new']): ?>
                                    <img src="/template/images/product-details/new.jpg" class="newarrival" alt="" />
                                <?php endif; ?>

                                <h2><?php echo $comics['name']; ?></h2>
                                <p>Формат: <?php echo $comics['format']; ?></p>
                                <p>Перепліт: <?php echo $comics['cover_type']; ?></p>
                                <p>Рік випуску: <?php echo $comics['release_date']; ?></p>
                                
                                <span>
                                    <span><?php echo $comics['price']; ?> грн</span>
                                    <a href="#" data-id="<?php echo $comics['id']; ?>"
                                       class="btn btn-default add-to-cart">
                                        <i class="fa fa-shopping-cart"></i>В кошик
                                    </a>
                                </span>
                            </div><!--/product-information-->
                        </div>
                    </div>
                    <div class="row">                                
                        <div class="col-sm-12">
                            <br/>
                            <h5>Опис товара</h5>
                            <?php echo $comics['description']; ?>
                        </div>
                    </div>
                </div><!--/product-details-->

            </div>
        </div>
    </div>
</section>

<?php include ROOT . '/views/layouts/footer.php'; ?>