
<div class="sub-nav navbar-collapse">
    <div class="container-fluid">
        <ul class="nav navbar-nav">
            <li><a href="special-shops">Special Shop</a></li>
            <li><a class="active" href="products">Products</a></li>
            <li><a   href="services">Services</a></li>
        </ul>
    </div>
    <!--.container-->
</div>
<div class="container">


    <div id="main-container" class="container">


        <div class="pagination col-md-12 col-xs-12 row">
            <div class="pull-left">
                <br>
                <br>
                <br>
                <br>
                <h3>Product Deals</h3>

            </div>

            <div class="pull-right" style="margin-top:20px;">
                <div class="dropdown"><h4 class="dropdown-toggle" id="dropdownMenu1" data-toggle="dropdown">
                        Sort by: <span id="sortParam">
                <span>Latest</span>
            </span> <span class="caret"></span>
                    </h4>

                    <ul class="dropdown-menu" id="sort-dropdown" role="menu">
                        <li class="dropdown-submenu activeItem" role="presentation">
                            <a role="menuitem" href="/local-deals" tabindex="-1" data-id="1">
                                <span>Latest</span>
                            </a>
                        </li>
                        <li class="dropdown-submenu" role="presentation">
                            <a role="menuitem" href="/local-deals?sort=2" tabindex="-1" data-id="2">
                                <span>Ending Soon</span>
                            </a>
                        </li>
                        <li class="dropdown-submenu" role="presentation">
                            <a role="menuitem" href="/local-deals?sort=4" tabindex="-1" data-id="4">
                                <span>Highest Points</span>
                            </a>
                        </li>
                        <li class="dropdown-submenu" role="presentation">
                            <a role="menuitem" href="/local-deals?sort=5" tabindex="-1" data-id="5">
                                <span>Lowest Price</span>
                            </a>
                        </li>
                    </ul><!--.dropdown-menu--></div>
            </div><!--.pull-right-->

            <div class="row product-images clear">
                <div id="navigation-column" class="col-md-3 row cat-menu">
                    <div class="col-md-9 col-xs-4">

                        <p style="font-family: 'LLBrownWeb-Regular',Verdana,sans-serif" class="heading">Category</p>
                        <ul class="list-unstyled">
                            <?php
                            $q3 = $conn->prepare("SELECT * FROM product_cats");
                            $q3->execute();

                            while($read = $q3->fetch(PDO::FETCH_OBJ)){

                                ?>
                                <li style="font-family: 'LLBrownWeb-Regular',Verdana,sans-serif"><a style="<?php if(isset($_GET['cat']) AND $_GET['cat']== $read->id)echo 'color:#009426;font-weight:bold'?>" href="products?cat=<?php echo $read->id?>" data-id="1" data-href="/local-deals?cat=1"><?php echo $read->product_cat_title?></a></li>
                            <?php } ?>
                        </ul>

                    </div>
                </div>

                <div class="module row"><div id="ps-loading-bk" style=" display: none;"></div>
                    <div id="ps-loading-img" style="display: none;"><img src="/img/ajax_loader.gif?v=c5fd16e"></div>
                    <?php
                    if(!isset($_GET['cat']) || empty($_GET['cat']) || intval($_GET['cat']==0)) {
                        $q3 = $conn->prepare("SELECT * FROM products WHERE product_type='seller' AND approve=1 ORDER BY id desc");
                    }
                    else{
                        $cid =secureTxt($_GET['cat']);
                        $q3 = $conn->prepare("SELECT products.id,products.name,products.points,products.thumbnail,products.price,products.details ,product_cats.product_cat_title FROM products LEFT JOIN product_cats ON products.product_cat_id=product_cats.id WHERE product_type='seller' AND product_cat_id=:cid  AND approve = 1 ORDER BY id desc");
                        $q3->bindValue(':cid',$cid);
                        $cat_name =   "<p class='heading'>Category</p>";
                    }
                    $q3->execute();
                    if($q3->rowCount() == 0) echo "<p class='heading ' style='text-align: center'> Sorry, No deals available for display</p>";

                    while($read = $q3->fetch(PDO::FETCH_OBJ)){

                        ?>
                        <div class="col-xs-6 col-sm-6 col-md-3 deals mb" id="deal_2" data-set="local">
                            <div class="product-tile">
                                <a href="javascript:void(0)" title="<?php echo $read->name;?>" id="<?php echo $read->id;?>" class="prod deal-link">
                                    <div class="product-img">
                                        <div class="darken"></div>
                                        <img src="images/products/<?php echo $read->thumbnail;?>" class="img-responsive pr-img">
                                    </div>
                                </a>
                                <div class="hp-deal-banner Groupon">
                                    <h6 class="col-xs-7 logo"><?php echo $read->name;?><br/>Sold by <?php $q32 = $conn->query("SELECT * FROM users WHERE id =".$read->manufacturer_id."")->fetch();echo $q32['shop'];?></h6>
                                    <span class="col-xs-5 rewards">&#x20A6;<?php echo number_format($read->price);?> <br> <small><?php echo $read->points;?> EKS</small></span>
                                    <p class="product-title"><?php //echo substr($read->details,0);?></p>
                                </div>
                            </div>
                        </div>
                    <?php } ?>

                </div>
                <div class="clearfix"></div>

                <p id="show-more" class="tc">
                    <a href="">Show more</a>
                </p>

            </div><!-- .product-images -->
        </div>

    </div>

</div>
