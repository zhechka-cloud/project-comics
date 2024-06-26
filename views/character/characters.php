<?php include ROOT . '/views/layouts/header.php'; ?>

<section>
    <div class="container">
        <div class="row">
            <div class="col-sm-3">
                <div class="left-sidebar">
                    <h2>Каталог</h2>
                    <div class="panel-group category-products">
                        <?php foreach ($characters as $characterItem): ?>
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a href="/character/<?php echo $characterItem['id']; ?>"
                                           class="<?php if ($charactersId == $characterItem['id']) echo 'active'; ?>">                                                                                    
                                               <?php echo $characterItem['name']; ?>
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

                    <?php foreach ($characterComics as $comics): ?>
                        <div class="col-sm-4">
                            <div class="product-image-wrapper">
                                <div class="single-products">
                                    <div class="productinfo text-center">
                                        <img src="<?php echo Comics::getImage($comics['id']); ?>" alt="" height="250px" />
                                        <h2><?php echo $comics['price']; ?> грн</h2>
                                        <p>
                                            <a href="/comics/<?php echo $comics['id']; ?>">
                                                <?php echo $comics['name']; ?>
                                            </a>
                                        </p>
                                        <a href="/cart/add/<?php echo $comics['id']; ?>" class="btn btn-default add-to-cart" data-id="<?php echo $comics['id']; ?>"><i class="fa fa-shopping-cart"></i>В кошик</a>
                                    </div>
                                    <?php if ($comics['is_new']): ?>
                                        <img src="/template/images/home/new.png" class="new" alt="" />
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>                              

                </div><!--features_items-->
                
                
                <?php echo $pagination->get(); ?>

            </div>
        </div>
    </div>
</section>

<?php include ROOT . '/views/layouts/footer.php'; ?>