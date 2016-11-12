<div id="jssor_1" style="position: relative; margin: 0 auto; top: 0px; left: 0px; width: 1300px; height: 500px; overflow: hidden; visibility: hidden;">
    <!-- Loading Screen -->
    <div data-u="loading" style="position: absolute; top: 0px; left: 0px;">
        <div style="filter: alpha(opacity=70); opacity: 0.7; position: absolute; display: block; top: 0px; left: 0px; width: 100%; height: 100%;"></div>
        <div style="position:absolute;display:block;background:url('images/slider/loading.gif') no-repeat center center;top:0px;left:0px;width:100%;height:100%;"></div>
    </div>
    <div data-u="slides" style="cursor: default; position: relative; top: 0px; left: 0px; width: 1300px; height: 500px; overflow: hidden;">
        <a data-u="any" href="econkredit.com" style="display:none">Promoting Locally Made Goods </a>
        <?php
        $q3 = $conn->prepare("SELECT * FROM sliders WHERE type='home' ");
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
<!-- #endregion Jssor Slider End -->
<div id="wrap" class="boxed">

<div class="container">

<div id="cat-deals" class="module row">
    <h3 class="greene">Earn Points</h3>

<?php
$q3 = $conn->prepare("SELECT * FROM products WHERE product_type = 'seller' AND approve = 1 LIMIT 4");
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
                <h6 class="col-xs-7 logo"><?php echo $read->name;?><br/>Sold by <?php $q32 = $conn->query("SELECT * FROM users WHERE id =".$read->manufacturer_id."")->fetch();echo $q32['shop'];?></h6>
                <span class="col-xs-5 rewards">&#x20A6;<?php echo number_format($read->price);?> <br> <small><?php echo $read->points;?> EKS</small></span>
                <p class="product-title"><?php //echo substr($read->details,0);?></p>
            </div>
        </div>
    </div>
<?php }?>
    <?php
    $q3 = $conn->prepare("SELECT * FROM services WHERE service_type = 'seller' AND approve = 1 LIMIT 4");
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
                    <h6 class="col-xs-7 logo"><?php echo $read->name;?><br/>Sold by <?php $q32 = $conn->query("SELECT * FROM users WHERE id =".$read->manufacturer_id."")->fetch();echo $q32['shop'];?></h6>
                    <span class="col-xs-5 rewards">&#x20A6;<?php echo number_format($read->price);?> <br> <small><?php echo $read->points;?> EKS</small></span>
                    <p class="product-title"><?php //echo substr($read->details,0);?></p>
                </div>
            </div>
        </div>
    <?php }?>
    <?php if($q3->rowCount() == 8){?>
        <div class="" data-target="favorite-stores"><span class="pull-right caret"></span><span
                class="view-text pull-right"><a href="products"> See More </a></span></div><?php }?>
    <div class="" data-target="favorite-stores"><span class="pull-right caret"></span><span
            class="view-text pull-right"><a href="products"> See More </a></span></div>
</div>

<div class="module row">
    <h3 class="greene">Buy These Products With Eks

    </h3>

    <?php
    $q3 = $conn->prepare("SELECT * FROM products  WHERE product_type = 'merchant' AND approve = 1 LIMIT 3");
    $q3->execute();

    while($read = $q3->fetch(PDO::FETCH_OBJ)){

        ?>
    <div class="mb col-md-4 col-sm-6 col-xs-12 store-tile-extended">
        <a href="javascript:void(0)" title="<?php echo $read->name;?>" id="<?php echo $read->id;?>" class="merProd product-link"?>"
           class="storeClick" data-ocid="" data-brand="Symantec" data-list="HP Promo" data-pos="1"
           data-package="" data-points="5 Points per dollar">
            <div class="store-tile bg-Symantec col-xs-6 " style="padding: 0;">
                <span class="icon-tag-sprite icon-tag"></span>

                <div class="darken"></div>
                <img src="images/products/<?php echo $read->thumbnail;?>" class="img-responsive"/>
            </div>

            <div class="col-xs-6 store-tile-text">
                <p>
                    <span class="promo-pts"> <?php echo $read->points;?> EKS/&#x20A6;</span>
                </p>

                <p class="offer-text">
                    <?php echo $read->details;?>
                </p>
            </div>
        </a>
    </div>
    <?php }?>
    <?php if($q3->rowCount() == 4){?>
    <div class="clearfix"></div>
    <div class="see-more " data-target="favorite-stores"><span class="pull-right caret"></span><span
            class="view-text pull-right">See More </span></div>
</div>
    <?php }?>

</div>

<div class="module row">
<h3 class="greene" >Use Your Eks For These Services  </h3>
    <div class="all-product-items col-md-9 col-xs-12 mb"><div id="ps-loading-bk" style=" display: none;"></div>
        <div id="ps-loading-img" style="display: none;"><img src="/img/ajax_loader.gif?v=c5fd16e"></div>
        <?php
        $q3 = $conn->prepare("SELECT * FROM services WHERE  service_type = 'merchant' AND approve = 1 LIMIT 4");
        $q3->execute();


        while($read = $q3->fetch(PDO::FETCH_OBJ)){

            ?>
            <div class="col-md-4 col-xs-6 deals mb" id="deal_1" data-set="local">
                <div class="product-tile">
                    <a href="javascript:void(0)" title="<?php echo $read->name;?>" id="<?php echo $read->id;?>" class="merSer product-link">


                        <div class="product-img">
                            <div class="darken"></div>

                            <div class="upper-right-orange" style="text-align:right; right:0px;">
                                Earn <?php echo $read->points;?> EKS
                            </div>
                            <img
                                src="images/services/<?php echo $read->thumbnail;?>"
                                class="img-responsive pr-img"/>
                        </div>

                    </a>



                    <p class="product-details">
                    </p>
                </div>

            </div>
        <?php } ?>

    </div>

<div class="clearfix"></div>
<div class="see-more " data-target="favorite-stores"><span class="pull-right caret"></span><span
            class="view-text pull-right">See More </span></div>
</div>
    <?php
    $query = $conn->prepare("SELECT * FROM products INNER JOIN users ON products.manufacturer_id= users.id WHERE option_id = 3 AND approve = 1 LIMIT 1");
    $query->execute();

 $read = $query->fetch(PDO::FETCH_ASSOC);

    ?>
<div class="row module">
    <h3 class="greene" >SpotLight Store:<?php echo $read['shop']; ?></h3>


    <div class="store-tile bg-LandsEnd col-xs-12 col-sm-6 featured-store mb">

        <a href="">
            <div class="darken"></div>

            <div class="upper-right-orange tc">
                <?php echo $read['points']; ?>EKS/&#x20A6;
            </div>
            <!-- image size 998*998 -->
            <img src="images/products/1.jpg" class="img-responsive"/>

        </a>

    </div>
<?php
    $query = $conn->prepare("SELECT products.id,products.points,products.thumbnail,products.details,users.shop FROM products INNER JOIN users ON products.manufacturer_id= users.id WHERE users.option_id = 2 AND approve = 1 LIMIT 4 OFFSET 1
");
    $query->execute();

    while($read = $query->fetch(PDO::FETCH_OBJ)){

    ?>
    <div class="col-xs-6 col-sm-3 products mb" id="product_1">
        <div class="product-tile">
            <a href="" target="_blank">
            <div class="product-img">
                    <div class="darken"></div>

                    <div class="upper-right-orange" style="text-align:right; right:0px;">
                        Save 47%
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


            <p class="product-title" style="font-size:90%;font-weight:bold;color:#555;"><?php echo $read->details ?></p>

            <p class="product-details">
                <span style="text-decoration:line-through; color:#999;margin-right:5px;font-size:85%">&#x20A6;<?php echo $read->points ?></span>
                <span style="font-size:90%;font-weight:bold;">&#x20A6;<?php echo $read->points ?></span>
                <span style="margin-left:5px; font-size:90%; color:#555;">Sold by <?php echo $read->shop ?> </span>
            </p>
        </div>
    </div>


   <?php } ?>

</div>
<hr class="">
<br/>
<br/>
<br/>
<div class="featured-clients clearfix bottom-2">
<h3 class="greene" >Our Partners </h3>
<br/>
<br/>

        <div class="owl-carousel" >
			<div class="columns three col-md-4 item"> 
			<a href="#">
			<img src="images/brands/ikeja.jpg" style="width:100%" alt="">
			</a>
			</div>
			<div class="columns three col-md-4 item"> <a href="#"><img src="images/brands/jumia.jpg" alt=""></a></div><!-- End slide -->
			<div class="columns three col-md-4 item"> <a href="#"><img src="images/brands/konga.jpg" alt=""></a></div><!-- End slide -->
			<div class="columns three col-md-4 item"> <a href="#"><img src="images/brands/biggs.jpg" alt=""></a></div><!-- End slide -->
			<div class="columns three col-md-4 item"> <a href="#"><img src="images/brands/sheraton.jpg" alt=""></a></div><!-- End slide -->
			<div class="columns three col-md-4 item"> <a href="#"><img src="images/brands/shoprite.jpg" alt=""></a></div><!-- End slide -->
			<div class="columns three col-md-4 item"> <a href="#"><img src="images/brands/domino1.jpg" alt=""></a></div><!-- End slide -->

        </div>

    <!-- End slidewrap -->
	<script src="slick/slick.min.js"></script>
<script>
$('.owl-carousel').slick(
{
 dots: false,
adaptiveHeight: true,
  infinite: true,
  speed: 300,
  slidesToShow: 5,
  slidesToScroll: 4,

});
</script>
    <script src="js/jssor.slider-21.1.5.mini.js" type="text/javascript"></script>
    <script type="text/javascript">
        jQuery(document).ready(function ($) {

            var jssor_1_SlideoTransitions = [
                [{b:-1,d:1,o:-1},{b:0,d:1000,o:1}],
                [{b:1900,d:2000,x:-379,e:{x:7}}],
                [{b:1900,d:2000,x:-379,e:{x:7}}],
                [{b:-1,d:1,o:-1,r:288,sX:9,sY:9},{b:1000,d:900,x:-1400,y:-660,o:1,r:-288,sX:-9,sY:-9,e:{r:6}},{b:1900,d:1600,x:-200,o:-1,e:{x:16}}]
            ];

            var jssor_1_options = {
                $AutoPlay: true,
                $SlideDuration: 800,
                $SlideEasing: $Jease$.$OutQuint,
                $CaptionSliderOptions: {
                    $Class: $JssorCaptionSlideo$,
                    $Transitions: jssor_1_SlideoTransitions
                },
                $ArrowNavigatorOptions: {
                    $Class: $JssorArrowNavigator$
                },
                $BulletNavigatorOptions: {
                    $Class: $JssorBulletNavigator$
                }
            };

            var jssor_1_slider = new $JssorSlider$("jssor_1", jssor_1_options);

            //responsive code begin
            //you can remove responsive code if you don't want the slider scales while window resizing
            function ScaleSlider() {
                var refSize = jssor_1_slider.$Elmt.parentNode.clientWidth;
                if (refSize) {
                    refSize = Math.min(refSize, 1920);
                    jssor_1_slider.$ScaleWidth(refSize);
                }
                else {
                    window.setTimeout(ScaleSlider, 30);
                }
            }
            ScaleSlider();
            $(window).bind("load", ScaleSlider);
            $(window).bind("resize", ScaleSlider);
            $(window).bind("orientationchange", ScaleSlider);
            //responsive code end
        });

    </script>
</div>

</div>



