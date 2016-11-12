
<div class="sub-nav navbar-collapse">
    <div class="container-fluid">
        <ul class="nav navbar-nav">
            <li><a href="/special-shops" class="active">Hot Products</a></li>
            <li><a href="#">Refer a Friend</a></li>
        </ul>
    </div>
    <!--.container-->
</div>
<!--.sub-nav -->

<div id="alerts-container">


</div>

<br>
<br>
<br>
<br>
<div class="container">


    <h3>Hot Product Deals</h3>
    <br>
    <br>
    <br>

    <div class="all-product-items col-xs-12">
        <div id="ps-loading-bk" style=" display: none;"></div>
        <div id="ps-loading-img" style="display: none;"><img src="/md5/9e/9e0373c2b4410c49439dfd822c5fd16e_ajax_loader.gif"/>
        </div>
        <?php
        $q3 = $conn->prepare("SELECT * FROM products WHERE product_type='seller' AND points >400 AND approve=1 ");
        $q3->execute();

        while($read = $q3->fetch(PDO::FETCH_OBJ)){

            ?>

            <div class="col-lg-3 col-sm-4 col-xs-6 products mb" id="product_1">

                <div class="product-tile">
                    <a href="javascript:void(0)" title="<?php echo $read->name;?>" id="<?php echo $read->id;?>" class="prod product-link">


                        <div class="product-img">
                            <div class="darken"></div>

                            <div class="upper-right-orange" style="text-align:right; right:0px;">
                                Earn <?php echo $read->points;?> EKS
                            </div>
                            <img
                                src="images/products/<?php echo $read->thumbnail;?>"
                                class="img-responsive pr-img"/>
                        </div>

                    </a>


                    <p class="product-title" style="font-size:90%;font-weight:bold;color:#555;"><?php echo $read->details;?></p>

                    <p class="product-details">
                        <span style="font-size:90%;font-weight:bold;">from &#x20A6;<?php echo $read->price;?></span>
                        <span style="margin-left:5px; font-size:90%; color:#555;"><?php echo $read->details;?></span>
                    </p>
                </div>
            </div>
        <?php }?>


    </div>

    <div style="text-align:center;">
        <button id="show-more"  class="btn" data-loading-text="Loading...">Show More Products</button>
    </div>




</div>

