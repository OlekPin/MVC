
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
                                    <h4 class="panel-title"><a href="category/<?php echo $category['id'];?>"><?php echo $category['title'];?></a></h4>
                                </div>
                            <?php endforeach;?>
                        </div>
                    </div>

                </div>
            </div>



            </div>
        </div>
    </div>
</section>

<?php include ROOT .'/views/layouts/footer.php'?>
