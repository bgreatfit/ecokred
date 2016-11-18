
<div class="sub-nav navbar-collapse">
    <div class="container-fluid">
        <ul class="nav navbar-nav">
            <li><a href="/special-shops" class="active">Hot Products</a></li>
<!--            <li><a href="#">Refer a Friend</a></li>-->
        </ul>
    </div>
    <!--.container-->
</div>
<!--.sub-nav -->

<div class="container">
<div id="cat-deals" class="module row">
        <h3 class="greene">Hot Deals</h3>

        <?php
        $q3 = $conn->prepare("SELECT * FROM products WHERE product_type = 'seller' AND approve = 1 AND product_option='promo' ORDER BY id desc LIMIT 20 ");
        $q3->execute();

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
                        <h6 class="col-xs-7 logo" style="font-weight:600;"><?php echo $read->name;?><br/>Sold by <?php $q32 = $conn->query("SELECT * FROM users WHERE id =".$read->manufacturer_id."")->fetch();echo $q32['shop'];?></h6>
                        <span class="col-xs-5 rewards">&#x20A6;<?php echo number_format($read->price);?> <br> <small style="font-weight:700;"><?php echo $read->points;?> EKS</small></span>
                        <p class="product-title"><?php //echo substr($read->details,0);?></p>
                    </div>
                </div>
            </div>
        <?php }?>
        <div class="clearfix"></div>
        <?php if($q3->rowCount() == 20){?>
            <div class="" data-target="favorite-stores"><span class="pull-right caret"></span><span
                    class="view-text pull-right"><a href="products"> See More </a></span></div><?php }?>
        <?php
        $q3 = $conn->prepare("SELECT * FROM services WHERE service_type = 'seller' AND approve = 1 AND service_option='promo' ORDER BY id  desc LIMIT 20");
        $q3->execute();

        while($read = $q3->fetch(PDO::FETCH_OBJ)){

            ?>

            <div class="col-xs-6 col-sm-6 col-md-3 deals mb" id="deal_2" data-set="local">
                <div class="product-tile">
                    <a href="javascript:void(0)" title="<?php echo $read->name;?>" id="<?php echo $read->id;?>" class="ser deal-link">
                        <div class="product-img">
                            <div class="darken"></div>
                            <img src="images/services/<?php echo $read->thumbnail;?>" class="img-responsive pr-img">
                        </div>
                    </a>
                    <div class="hp-deal-banner Groupon">
                        <h6 class="col-xs-7 logo" style="font-weight:700;"><?php echo $read->name;?><br/>Sold by <?php $q32 = $conn->query("SELECT * FROM users WHERE id =".$read->manufacturer_id."")->fetch();echo $q32['shop'];?></h6>
                        <span class="col-xs-5 rewards">&#x20A6;<?php echo number_format($read->price);?> <br> <small style="font-weight:700;"><?php echo $read->points;?> EKS</small></span>
                        <p class="product-title"><?php //echo substr($read->details,0);?></p>
                    </div>
                </div>
            </div>
        <?php }?>
        <div class="clearfix"></div>
        <?php if($q3->rowCount() == 4){?>
            <div class="" data-target="favorite-stores"><span class="pull-right caret"></span><span
                    class="view-text pull-right"><a href="services"> See More </a></span></div><?php }?>

    </div>







</div>

