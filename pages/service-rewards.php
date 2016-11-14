
<div class="sub-nav navbar-collapse">
    <div class="container-fluid">
        <ul class="nav navbar-nav">
            <li><a href="product-rewards">Product Rewards</a></li>
            <li><a  class="active" href="service-rewards">Service Rewards</a></li>
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
                <h3>Service Rewards</h3>

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
                            $q3 = $conn->prepare("SELECT * FROM service_cats");
                            $q3->execute();

                            while($read = $q3->fetch(PDO::FETCH_OBJ)){

                                ?>
                                <li style="font-family: 'LLBrownWeb-Regular',Verdana,sans-serif"><a style="<?php if(isset($_GET['cat']) AND $_GET['cat']== $read->id)echo 'color:#009426;font-weight:bold'?>" href="service-rewards?cat=<?php echo $read->id?>" data-id="1" data-href="/local-deals?cat=1"><?php echo $read->service_cat_title?></a></li>
                            <?php } ?>
                        </ul>

                    </div>
                </div>

                <div class="all-product-items col-md-9 col-xs-12 mb"><div id="ps-loading-bk" style=" display: none;"></div>
                    <div id="ps-loading-img" style="display: none;"><img src="/img/ajax_loader.gif?v=c5fd16e"></div>
                    <?php
                    if(!isset($_GET['cat']) || empty($_GET['cat']) || intval($_GET['cat']==0)) {
                        $q3 = $conn->prepare("SELECT * FROM services WHERE service_type='merchant' AND approve=1 ORDER BY id desc");
                    }
                    else{
                        $cid =secureTxt($_GET['cat']);
                        $q3 = $conn->prepare("SELECT services.id,services.name,services.points,services.thumbnail,services.price,services.details ,service_cats.service_cat_title FROM services LEFT JOIN service_cats ON services.service_cat_id=service_cats.id WHERE service_type='merchant' AND service_cat_id=:cid  AND approve = 1 ORDER BY id desc");
                        $q3->bindValue(':cid',$cid);
                        $cat_name =   "<p class='heading'>Category</p>";
                    }
                    $q3->execute();
                    if($q3->rowCount() == 0) echo "<p class='heading ' style='text-align: center'> Sorry, No rewards available for display</p>";

                    while($read = $q3->fetch(PDO::FETCH_OBJ)){

                        ?>
                        <div class="col-md-4 col-xs-6 deals mb" id="deal_1" data-set="local">
                            <div class="product-tile">
                                <a href="javascript:void(0)" title="<?php echo $read->name;?>" id="<?php echo $read->id;?>" class="merSer product-link">


                                    <div class="product-img">
                                        <div class="darken"></div>

                                        <div class="upper-right-orange" style="text-align:right; right:0px;">
                                            For <?php echo $read->points;?> EKS
                                        </div>
                                        <img
                                            src="images/services/<?php echo $read->thumbnail;?>"
                                            class="img-responsive pr-img"/>
                                    </div>

                                </a>


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
