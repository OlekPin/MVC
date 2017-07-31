
<?php include ROOT .'/views/layouts/header.php'?>
<section>
    <div class="container">
        <div class="row">
            <div class="col-sm-3">
                <div class="left-sidebar">
                    <h2>Каталог</h2>
                    <div class="panel-group category-products">
                        <div class="panel panel-default">
                            <?php foreach ($categories as $category): ?>
                                <div class="panel-heading">
                                    <h4 class="panel-title"><a href="/category/<?php echo $category['id'];?>"
                                            class="<?php if ($categoryId == $category['id']) echo 'active';?>">
                                            <?php echo $category['title'];?>
                                        </a>
                                    </h4>
                                </div>
                            <?php endforeach;?>
                        </div>
                    </div>

                </div>
            </div>

            <div class="col-sm-9 padding-right">
                <div class="features_items"><!--features_items-->
                    <h2 class="title text-center">Последние товары</h2>

                    <?php foreach ($categoryProducts as $categoryProduct):?>
                        <div class="col-sm-4">
                            <div class="product-image-wrapper">
                                <div class="single-products">
                                    <div class="productinfo text-center">
                                        <img src="/template/images/home/product1.jpg" alt="" />
                                        <h2>$<?php echo $categoryProduct['price']; ?></h2>
                                        <p>
                                            <a href="product/<?php echo $categoryProduct['id']; ?>">
                                                <?php echo $categoryProduct['name']; ?>
                                            </a>
                                        </p>
                                        <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>В корзину</a>
                                    </div>
                                    <?php if ($categoryProduct['is_new']):?>
                                        <img src="/template/images/home/new.png" class="new" alt=""/>
                                    <?php endif;?>
                                </div>
                            </div>
                        </div>
                    <?php endforeach;?>
                    <?php echo $pagination->get()?>

                </div><!--features_items-->
            </div>
        </div>
    </div>
</section>

<?php include ROOT .'/views/layouts/footer.php'?>
