
<div class="sub-nav navbar-collapse">
    <div class="container-fluid">
        <ul class="nav navbar-nav">
            <li><a class="active" href="special-shops">Special Shop</a></li>
            <li><a  href="products">Products</a></li>
            <li><a  href="services">Services</a></li>
        </ul>
    </div>
    <!--.container-->
</div>
<!--.sub-nav -->

<div id="alerts-container">


</div>


<div class="container">

    <div id="jssor_1" style="position: relative; margin: 0 auto; top: 0px; left: 0px; width: 1300px; height: 500px; overflow: hidden; visibility: hidden;">
        <!-- Loading Screen -->
        <div data-u="loading" style="position: absolute; top: 0px; left: 0px;">
            <div style="filter: alpha(opacity=70); opacity: 0.7; position: absolute; display: block; top: 0px; left: 0px; width: 100%; height: 100%;"></div>
            <div style="position:absolute;display:block;background:url('images/slider/loading.gif') no-repeat center center;top:0px;left:0px;width:100%;height:100%;"></div>
        </div>
        <div data-u="slides" style="cursor: default; position: relative; top: 0px; left: 0px; width: 1300px; height: 500px; overflow: hidden;">
            <a data-u="any" href="econkredit.com" style="display:none">Promoting Locally Made Goods </a>
            <?php
            $q3 = $conn->prepare("SELECT * FROM sliders WHERE type='shop' ");
            $q3->execute();

            while($read = $q3->fetch(PDO::FETCH_OBJ)){

                ?>
                <div data-p="225.00" style="display: none;">
                    <a href="register.php"><img data-u="image" src="images/sliders/<?php echo $read->image;?>" /></a>
                </div>
            <?php } ?>
        </div>
        <!-- Bullet Navigator -->
        <div data-u="navigator" class="jssorb05" style="bottom:16px;right:16px;" data-autocenter="1">
            <!-- bullet navigator item prototype -->
            <div data-u="prototype" style="width:16px;height:16px;"></div>
        </div>
        <!-- Arrow Navigator -->
        <span data-u="arrowleft" class="jssora22l" style="top:0px;left:12px;width:40px;height:58px;" data-autocenter="2"></span>
        <span data-u="arrowright" class="jssora22r" style="top:0px;right:12px;width:40px;height:58px;" data-autocenter="2"></span>
    </div>
    <br>
    <br>
    <br>
    <br>
    <!-- #endregion Jssor Slider End -->


<div class="module row">
    <h3>Christmas is Near
<!--        <small class="pull-right"><a href="/emp/u/promo-offers.vm" style="color:#777;vertical-align:middle;">See All</a>-->
<!--        </small>-->
    </h3>

    <?php
    $q3 = $conn->prepare("SELECT * FROM products WHERE product_type = 'seller' AND product_option='christmas' AND approve = 1 ORDER BY id desc LIMIT 20 ");
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
                    <h6 class="col-xs-7 logo" style="font-weight:700;"><?php echo $read->name;?><br/>Sold by <?php $q32 = $conn->query("SELECT * FROM users WHERE id =".$read->manufacturer_id."")->fetch();echo $q32['shop'];?></h6>
                    <span class="col-xs-5 rewards">&#x20A6;<?php echo number_format($read->price);?> <br> <small><?php echo $read->points;?> EKS</small></span>
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
    $q3 = $conn->prepare("SELECT * FROM services WHERE service_type = 'seller' AND product_option='christmas' AND approve = 1 ORDER BY id desc LIMIT 4");
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
                    <h6 class="col-xs-7 logo" ><?php echo $read->name;?><br/>Sold by <?php $q32 = $conn->query("SELECT * FROM users WHERE id =".$read->manufacturer_id."")->fetch();echo $q32['shop'];?></h6>
                    <span class="col-xs-5 rewards">&#x20A6;<?php echo number_format($read->price);?> <br> <small ><?php echo $read->points;?> EKS</small></span>
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
    <?php
    $query = $conn->prepare("SELECT * FROM products  WHERE product_type='seller' AND approve = 1  ORDER BY id desc LIMIT 1");
    $query->execute();

    while ($read = $query->fetch(PDO::FETCH_OBJ)):

    ?>
    <div class="row module">
        <h3 class="greene" >SpotLight Store:<?php $q32 = $conn->query("SELECT * FROM users WHERE id =".$read->manufacturer_id."")->fetch();echo $q32['shop'];?></h3>


        <div class="store-tile bg-LandsEnd col-xs-12 col-sm-6 featured-store mb">

            <a href="javascript:void(0)" title="<?php echo $read->name;?>" id="<?php echo $read->id;?>" class="prod deal-link">
                <div class="darken"></div>

                <div class="upper-right-orange tc">
                    <?php echo $read->points; ?>EKS/&#x20A6;<?php echo $read->price?>
                </div>
                <!-- image size 998*998 -->
                <img src="images/products/1.jpg" class="img-responsive"/>

            </a>

        </div>
        <?php endwhile;?>
        <?php
        $query = $conn->prepare("SELECT * FROM products  WHERE product_type='seller'  AND approve = 1 ORDER BY id desc LIMIT 4");
        $query->execute();

        while($read = $query->fetch(PDO::FETCH_OBJ)){

            ?>
            <div class="col-xs-6 col-sm-3 products mb" id="product_1">
                <div class="product-tile">
                    <a href="javascript:void(0)" title="<?php echo $read->name;?>" id="<?php echo $read->id;?>" class="prod deal-link">
                        <div class="product-img">
                            <div class="darken"></div>

                            <div class="upper-right-orange" style="text-align:right; right:0px;">
                                <?php echo $read->price; ?>
                                <br/>
                                <hr/>
                                <?php echo $read->points;?> EKS
                            </div>
                            <img src="images/products/<?php echo $read->thumbnail;?>" class="img-responsive pr-img"/>
                        </div>
                        <div class="i_p_d"
                             data-href=" "
                             data-desc="<?php echo $read->details ?> (3-pack)"
                             data-ispscell="true"></div>
                    </a>


<!--                    <p class="product-title" style="font-size:90%;font-weight:bold;color:#555;">--><?php //echo $read->details ?><!--</p>-->
<!---->
<!--                    <p class="product-details">-->
<!--                        <span style="text-decoration:line-through; color:#999;margin-right:5px;font-size:85%">&#x20A6;--><?php //echo $read->points ?><!--</span>-->
<!--                        <span style="font-size:90%;font-weight:bold;">&#x20A6;--><?php //echo $read->points ?><!--</span>-->
<!--                        <span style="margin-left:5px; font-size:90%; color:#555;">Sold by --><?php //$q32 = $conn->query("SELECT * FROM users WHERE id =".$read->manufacturer_id."")->fetch();echo $q32['shop'];?><!-- </span>-->
<!--                    </p>-->
                </div>
            </div>


        <?php } ?>

    </div>

<div class="module row">
<h3>Other Offers You Might Like</h3>

    <?php
    $q3 = $conn->prepare("SELECT * FROM products WHERE product_type = 'merchant' AND product_option='featured' AND approve = 1 ORDER BY id desc");
    $q3->execute();

    while($read = $q3->fetch(PDO::FETCH_OBJ)){

    ?>
<div class="store-tile bg-Kellogg col-lg-2 col-md-3 col-sm-4 col-xs-6 mb mb">

    <a href="javascript:void(0)" title="<?php echo $read->name;?>" id="<?php echo $read->id;?>" class="prodMer deal-link"
       data-ocid="DnNYtQ5Xe6yEDtmAF2xm" data-brand="Kellogg" data-list="SP Flat" data-pos="1" data-package="E"
       data-points="50 Points" class="promoClick" data-pid="" data-pname="" data-pcre="" data-ppos=""
        >
        <div class="darken"></div>

        <div class="upper-right-orange-flat tc">
           <?php echo $read->points?> Eks<br/>
        </div>

        <img src="images/products/<?php echo $read->thumbnail?>" class="img-responsive"/>

    </a>

</div>
<?php } ?>




<div class="clearfix"></div>
<div class="see-more " data-target="flat-offers"><span class="pull-right caret"></span><span
        class="view-text pull-right">See More </span></div>

</div>


</div>


