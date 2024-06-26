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
                <div class="features_items"><!--features_items-->
                    <h2 class="title text-center">Останні товари</h2>
                    
                    <?php foreach ($latestComics as $comics): ?>
                        <div class="col-sm-4">
                            <div class="product-image-wrapper">
                                <div class="single-products">
                                    <div class="productinfo text-center">
                                        <img src="<?php echo Comics::getImage($comics['id']); ?>" alt="" height="250px"/>
                                        <h2><?php echo $comics['price'];?> грн</h2>
                                        <p>
                                            <a href="/comics/<?php echo $comics['id'];?>">
                                                <?php echo $comics['name'];?>
                                            </a>
                                        </p>
                                        
                                        <a href="#" data-id="<?php echo $comics['id'];?>"
                                           class="btn btn-default add-to-cart">
                                            <i class="fa fa-shopping-cart"></i>В кошик
                                        </a>
                                    </div>
                                    <?php if ($comics['is_new']): ?>
                                        <img src="coursework/template/images/home/new.png" class="new" alt=""  />
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                    <?php endforeach;?>                   

                </div><!--features_items-->


            </div>
        </div>
    </div>
</section>

<?php include ROOT . '/views/layouts/footer.php'; ?>