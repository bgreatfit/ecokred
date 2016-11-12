<!DOCTYPE html>

<html lang="en" ng-app="MyPointsApp">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">


    <meta property="fb:app_id" content="215187277353"/>
    <meta property="og:site_name" content="MyPoints.com"/>
    <meta property="og:title" content="MyPoints: Your Daily Rewards Program"/>
    <meta property="og:description"
          content="MyPoints is the pioneer and leader of online shopping rewards. Through simple online purchases from hundreds of retailers, members earn reward Points from every transaction made."/>


    <base href="/">
    <link rel="shortcut icon" href="/favicon.ico">
    <title>Shop Product Deals</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/bootstrap-drawer.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/style.css" rel="stylesheet">
    <link href="css/brown-font.css" rel="stylesheet">
    <link href="css/tiles.css" rel="stylesheet">


    <link href="css/style3.css" rel="stylesheet" type="text/css">
    <link href="css/style-products.css" rel="stylesheet" type="text/css">


    <style id="xfb">body {
            display: none !important;
        }</style>
    <script>if (self === top) {
            var xfb = document.getElementById("xfb");
            xfb.parentNode.removeChild(xfb);
        } else {
            top.location = self.location;
        }</script>


    <script src="js/jquery-1.11.0.min.js"></script>
    <script src="js/mainmenu/bootstrap.min.js"></script>
    <script src="js/drawer.min.js"></script>
    <script src="js/main.js"></script>
    <script src="/js/typeahead.min.js"></script>


    <script type="text/javascript" language="JavaScript">

        var io_install_flash = false; // do not install Flash
        var io_install_stm = false; // do not install ActiveX
        var io_exclude_stm = 12;    // exclude Active X on XP and higher
        var io_flash_needs_update_handler = "";    //configure parameters for network latency

        var fp_bbout_element_id = "fpBlackBox";
        var io_bbout_element_id = "ioBlackBox";

    </script>


    <script src="//cdnjs.cloudflare.com/ajax/libs/angular.js/1.5.0/angular.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/angular.js/1.5.0/angular-sanitize.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/angular.js/1.5.0/angular-resource.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/angular.js/1.5.0/angular-animate.min.js"></script>

    <script src="js/app.js"></script>
    <script src="js/MemberInfoService.js"></script>
    <script src="js/UrlService.js"></script>
    <script src="js/UtilService.js"></script>
    <script src="js/GTMService.js"></script>
    <script src="js/SearchRoutingService.js"></script>
    <script src="js/HeaderController.js"></script>


    <script>
        var dataLayer = [
            {
                'Member Type': 'Non-Member'
            }
        ];
    </script>


    <script type="text/javascript">
        app && app.value("ContextConfig", {
            isIntegration: false,
            silo: "s6",
            requireLoginCaptcha: false
        });
    </script>


    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>


<!-- Google Tag Manager -->
<noscript>
    <iframe src="//www.googletagmanager.com/ns.html?id=GTM-T88B2T"
            height="0" width="0" style="display:none;visibility:hidden"></iframe>
</noscript>
<script>(function (w, d, s, l, i) {
        w[l] = w[l] || [];
        w[l].push({'gtm.start': new Date().getTime(), event: 'gtm.js'});
        var f = d.getElementsByTagName(s)[0],
            j = d.createElement(s), dl = l != 'dataLayer' ? '&l=' + l : '';
        j.async = true;
        j.src =
            '//www.googletagmanager.com/gtm.js?id=' + i + dl;
        f.parentNode.insertBefore(j, f);
    })(window, document, 'script', 'dataLayer', 'GTM-T88B2T');</script>
<!-- End Google Tag Manager -->


<div class="header navbar navbar-fixed-top" id="main-header" role="navigation" ng-controller="HeaderController">
    <div class="container-fluid">
        <div class="navbar-header">
            <a href="/" id="logo" class="navbar-left pull-left hide-on-focus"><h1>MyPoints</h1></a>
            <button type="button" class="navbar-toggle pull-left hide-on-focus" data-toggle="collapse"
                    data-target=".navbar-collapse">
                <span class="sr-only">Menu</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>

            <form class="navbar-form search navbar-left pull-left hidden-md hidden-lg"
                  ng-submit="searchHandler.handleSearch()" role="search">
                <i class="glyphicon glyphicon-search glyph-flip"></i>
                <input type="text" class="typeahead" placeholder="Search" id="main-search-collapse" name="kw"
                       autocomplete="off" required="true" ng-model="searchHandler.kw"/><!--IMPORTANT #main-search is used in js dont change -->
                <input type="submit" value="Submit" class="invisible_btn"/>
                <a class="clear-text" data-target="#main-search-collapse">&times;</a>
            </form>


            <ul class="nav navbar-nav navbar-left pull-right hidden-md hidden-lg">
                <li style="float:right;"><a class="navbar-right pull-right nav-join bannerNonAuthLanding"
                                            href="https://www.mypoints.com/emp/u/signup.do" data-toggle="modal"
                                            data-target="#joinModal">Join Now</a></li>
                <li style="float:right;"><a class="navbar-right pull-right"
                                            href="https://www.mypoints.com/emp/u/login.do?rloc=%2Femp%2Fu%2Fshop-by-product.vm%3F"
                                            class="loginModal" data-onok="/emp/u/shop-by-product.vm?">Sign In</a></li>
            </ul>
        </div>
        <!--.navbar-header-->
        <div class="navbar-collapse collapse">
            <ul class="nav navbar-nav navbar-left hide-on-focus">
                <li class="dropdown active">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Shop <span
                            class="caret hidden-md hidden-lg"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="/emp/u/shop.vm">Featured</a></li>
                        <li><a href="/emp/u/shop-by-store.vm">By Store</a></li>
                        <li><a href="/emp/u/shop-by-product.vm">Product Deals</a></li>
                    </ul>
                </li>
                <li class="dropdown ">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Deals <span
                            class="caret hidden-md hidden-lg"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="/emp/u/local-deals.vm">Local</a></li>
                        <li><a href="/emp/u/deals.vm">Goods</a></li>
                        <li><a href="/emp/u/travel-deals.vm">Travel</a></li>
                    </ul>
                </li>
                <li class="dropdown ">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Coupons <span
                            class="caret hidden-md hidden-lg"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="/emp/u/coupon-codes.vm">Coupon Codes</a></li>
                        <li><a href="/emp/u/grocery-coupons.vm">Grocery Coupons</a></li>
                    </ul>
                </li>
                <li><a href="/emp/u/videos.vm">Videos</a></li>
                <li><a href="/emp/u/games.vm">Games</a></li>
                <li class="dropdown ">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">More <span
                            class="caret hidden-md hidden-lg"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="/emp/u/surveys.vm">Surveys</a></li>
                        <li><a href="/emp/u/member/download-mobile-app.vm">Download Mobile App</a></li>
                        <li><a href="/emp/u/shopping-extension/install.vm">Download Score!</a></li>
                        <li><a href="/emp/u/mysearch.vm">Search and Earn</a></li>
                        <li><a href="/emp/u/editProfile.do?view=raf">Refer-a-Friend</a></li>
                        <li><a href="/emp/u/store-promotions.vm">In-Store Promotions</a></li>
                    </ul>
                </li>
                <li class="divider hidden-md hidden-lg"></li>
                <li class="hidden-md hidden-lg redeem "><a href="/emp/u/rewards.vm">Redeem Points</a></li>
                <li class="divider hidden-md hidden-lg"></li>
                <li class="hidden-md hidden-lg">
                    <a href="http://help.mypoints.com" target="_blank">Help</a>
                </li>
                <li class="hidden-xs hidden-md hidden-lg"><a
                        href="https://www.mypoints.com/emp/u/login.do?rloc=%2Femp%2Fu%2Fshop-by-product.vm%3F"
                        class="loginModal" data-onok="/emp/u/shop-by-product.vm?">Sign In</a></li>
                <li class="hidden-sm hidden-md hidden-lg"><a
                        href="https://www.mypoints.com/emp/u/login.do?rloc=%2Femp%2Fu%2Fshop-by-product.vm%3F">Sign
                        In</a></li>
                <li class="hidden-md hidden-lg"><a class="bannerNonAuthLanding"
                                                   href="https://www.mypoints.com/emp/u/signup.do">Join Now</a></li>
            </ul>

            <form class="navbar-form search navbar-left hidden-sm hidden-xs" ng-submit="searchHandler.handleSearch()"
                  role="search">
                <i class="glyphicon glyphicon-search glyph-flip"></i>
                <input type="text" class="typeahead" placeholder="Search" id="main-search" name="kw" autocomplete="off"
                       required="true" ng-model="searchHandler.kw"/><!--IMPORTANT #main-search is used in js dont change -->
                <input type="submit" value="Submit" class="invisible_btn"/>
                <a class="clear-text" data-target="#main-search">&times;</a>
            </form>

            <ul class="nav navbar-nav navbar-right hidden-sm hidden-xs">
                <li><a href="https://www.mypoints.com/emp/u/login.do?rloc=%2Femp%2Fu%2Fshop-by-product.vm%3F"
                       class="loginModal" data-onok="/emp/u/shop-by-product.vm?">Sign In</a></li>
                <li class="nav-join"><a class="bannerNonAuthLanding" href="https://www.mypoints.com/emp/u/signup.do">Join
                        Now</a></li>
                <li class="nav-rewards"><a href="/emp/u/rewards.vm" title="Redeem Points"><span class="redeem tc">Redeem <span
                                class="redeem-points">Points</span></span></a></li>
            </ul>
        </div>
        <!--.collapse navbar-collapse-->

    </div>
    <!--.container-fluid-->
</div>
<!--.header-->


<div class="sub-nav navbar-collapse">
    <div class="container-fluid">
        <ul class="nav navbar-nav">
            <li><a href="/emp/u/shop.vm">Featured</a></li>
            <li><a href="/emp/u/shop-by-store.vm">By Store</a></li>
            <li><a href="/emp/u/shop-by-product.vm" class="active">Product Deals</a></li>
        </ul>
    </div>
    <!--.container-->
</div>
<!--.sub-nav -->

<div id="alerts-container">


</div>


<div class="container">


<h3>Product Deals</h3>


<div id="memberPicksModal" class="modal fade" role="dialog" aria-hidden="true">
    <div class="modal-dialog mp-modal-dialog">
        <div class="modal-content mp-modal-content">
            <div class="dark_bg"></div>

            <div class="modal-header">
                <h3>What's a Member Pick?</h3>
                <a class="close modal-close" data-dismiss="modal" aria-hidden="true">&times;</a>

                <div class="clearfix"></div>
            </div>
            <!-- .modal-header-->

            <div class="modal-body">
                Members in our expert shopping community find great new products and hot new deals to share with the
                MyPoints community.
            </div>
            <!-- .modal-body-->

            <div class="modal-footer">
                <button type="button" class="btn btn-primary btn-xs tc" data-dismiss="modal">Got it</button>
            </div>
            <!-- .modal-footer-->
        </div>
    </div>
</div>

<div class="all-product-items col-xs-12">
<div id="ps-loading-bk" style=" display: none;"></div>
<div id="ps-loading-img" style="display: none;"><img src="/md5/9e/9e0373c2b4410c49439dfd822c5fd16e_ajax_loader.gif"/>
</div>


<div class="col-lg-3 col-sm-4 col-xs-6 products mb" id="product_1">
    <div class="product-tile">
        <a href="javascript:void(0)" class="product-link">


            <div class="product-img">
                <div class="darken"></div>

                <div class="upper-right-orange" style="text-align:right; right:0px;">
                    Earn 14,099 PTS
                </div>
                <img
                    src="https://testwpmp.imgix.net/http%3A%2F%2Fwww.officedepot.com%2Fpictures%2Fus%2Fod%2Fsk%2Flg%2F458049_sk_lg.jpg?w=400&h=300&fit=fill&bg=ffffff&s=a5195c24b5e7dff3f9cf42e05184254f"
                    class="img-responsive pr-img"/>
            </div>
            <div class="i_p_d"
                 data-href="/emp/u/a.do?afsrc=1&cell=R_7pToCKbXgOM6TP6a4a&src=NMID_432347038756083663&src=PG_SHOP_BY_PRODUCT&src=PVID_185daebdf1a6d34567a1818ae28fc97a&src=MOD_PRODUCTS&src=PSID_73445478&cturi=http%3A%2F%2Fr.popshops.com%2Fr%2Fj%257CTXJTaXZmQ09Rc3lyR8JDV94Wg5kAfIApPAyLlRJ8yHl528yS6nrvq54h8AFkzPF2bvSiD_ihTyknVJNTdcyxHxL8Iip-x48CAdOF3rl2VOtq_VhbhFBgd4idUH2I0fvxX93yNmjeppd1lhxH8eU-C0siKEvb649fLDvlMXV2RGI5wu19Xr6FZICbzvlqGMiPW-aFJxSb6jQLiGbmlA3XyEQAsFlVY6ZsqEdu7eG5enHbCXDtDp_Ijmsw8K8CuGbMSXfouyAnttiptSL4%3D%2F%24%28vid%29%2F"
                 data-desc="Samsung 75&quot; Class 1080p 120Hz 3D LED HDTV - UN75F6400AFXZA"
                 data-img="https://testwpmp.imgix.net/http%3A%2F%2Fwww.officedepot.com%2Fpictures%2Fus%2Fod%2Fsk%2Flg%2F458049_sk_lg.jpg?w=400&h=300&fit=fill&bg=ffffff&s=a5195c24b5e7dff3f9cf42e05184254f"
                 data-ispscell="true"></div>
        </a>


        <p class="product-title" style="font-size:90%;font-weight:bold;color:#555;">Samsung 75" Class 1080p 120Hz 3D LED
            HDTV - UN75F6400AFXZA</p>

        <p class="product-details">
            <span style="font-size:90%;font-weight:bold;">$4,699.99</span>
            <span style="margin-left:5px; font-size:90%; color:#555;">Office Depot&reg; and OfficeMax&reg; </span>
        </p>
    </div>
    <img src="/md5/9a/9a913d3d3f0f6f8bed26bc6b30e213dc_bottom-arrow-e0e0e0.png" class="arr_pointer" id="arr_1">
</div>


<div class="col-lg-3 col-sm-4 col-xs-6 products mb" id="product_2">
    <div class="product-tile">
        <a href="javascript:void(0)" class="product-link">


            <div class="product-img">
                <div class="darken"></div>

                <div class="upper-right-orange" style="text-align:right; right:0px;">
                    Earn 10,399 PTS
                </div>
                <img
                    src="https://testwpmp.imgix.net/http%3A%2F%2Fi5.walmartimages.com%2Fasr%2Fb607b0df-86be-4f45-88b8-887a0128c957_1.df77ac29579a7bf238ef4031430d7c4c.jpeg%3FodnHeight%3D450%26odnWidth%3D450%26odnBg%3Dffffff?w=400&h=300&fit=fill&bg=ffffff&s=96b8f752ae703263873fdd59d720ac9a"
                    class="img-responsive pr-img"/>
            </div>
            <div class="i_p_d"
                 data-href="/emp/u/a.do?afsrc=1&cell=UwwF9c0mcxFTIZYQcp3n&src=NMID_432347038756083663&src=PG_SHOP_BY_PRODUCT&src=PVID_185daebdf1a6d34567a1818ae28fc97a&src=MOD_PRODUCTS&src=PSID_186682350&cturi=http%3A%2F%2Fr.popshops.com%2Fr%2Fj%257Cdk1TMHpuT0ZFYXd6mGuSeiSnWBvq3VbrBzas-FqOrpT3NX2SwTBImSP1ArWT3l15NzGrWHXxwtxzs0SHuSqKvbtLdN3AMcidfbhZ3BN4rvIFC-nQoewsVp3kRRuh_nyDrt_bZh6-dYawKPNhUbw3cNSzo1ziuwB6Nc9n-EYHEVkbMtRjURlwulYa8DEPmYjtVIuCgaw08H8L4Cq2CrzXxy5psj1FG3Ahaic28yWB-0bDJdM9Nxq0_R6couHtkgWzy-DjNcJyCOQFjhRb%3D%2F%24%28vid%29%2F"
                 data-desc="LG 60&quot; Class 1080p Smart LED Hdtv - 60LF6100"
                 data-img="https://testwpmp.imgix.net/http%3A%2F%2Fi5.walmartimages.com%2Fasr%2Fb607b0df-86be-4f45-88b8-887a0128c957_1.df77ac29579a7bf238ef4031430d7c4c.jpeg%3FodnHeight%3D450%26odnWidth%3D450%26odnBg%3Dffffff?w=400&h=300&fit=fill&bg=ffffff&s=96b8f752ae703263873fdd59d720ac9a"
                 data-ispscell="true"></div>
        </a>


        <p class="product-title" style="font-size:90%;font-weight:bold;color:#555;">LG 60" Class 1080p Smart LED Hdtv -
            60LF6100</p>

        <p class="product-details">
            <span style="font-size:90%;font-weight:bold;">$1,299.89</span>
            <span style="margin-left:5px; font-size:90%; color:#555;">Walmart </span>
        </p>
    </div>
    <img src="/md5/9a/9a913d3d3f0f6f8bed26bc6b30e213dc_bottom-arrow-e0e0e0.png" class="arr_pointer" id="arr_2">
</div>


<div class="col-lg-3 col-sm-4 col-xs-6 products mb" id="product_3">
    <div class="product-tile">
        <a href="javascript:void(0)" class="product-link">


            <div class="product-img">
                <div class="darken"></div>

                <div class="upper-right-orange" style="text-align:right; right:0px;">
                    Earn 24,746 PTS
                </div>
                <img
                    src="https://testwpmp.imgix.net/http%3A%2F%2Fwww.officedepot.com%2Fpictures%2Fus%2Fod%2Fsk%2Flg%2F888995_sk_lg.jpg?w=400&h=300&fit=fill&bg=ffffff&s=cfb7236f64c15f3c4669901d3af5c331"
                    class="img-responsive pr-img"/>
            </div>
            <div class="i_p_d"
                 data-href="/emp/u/a.do?afsrc=1&cell=R_7pToCKbXgOM6TP6a4a&src=NMID_432347038756083663&src=PG_SHOP_BY_PRODUCT&src=PVID_185daebdf1a6d34567a1818ae28fc97a&src=MOD_PRODUCTS&src=PSID_154483569&cturi=http%3A%2F%2Fr.popshops.com%2Fr%2Fj%257CRno4OEI4ZDQzSGhishMkkJ6q1pHLFMLa_mfQi9Wz_JqfxWVTnRYfg8e41xpGn8k_TSru77FA8TtpKM9wFWIdrHmFYjqwC-S4an7GyP79-uYoJ-6yEnGddfo5ZW8t449Zs0sADWQHZc3m8qRHR3_XBChvIz7eD-d_OCxoVSPdbZIFcnI-4Lv35A_663W5fR2GnHD4xa7V-zmNfHjtMEtc8ShfLdDvIsYbfKE1Eztc7YVF0mQq2lfiUT2YY65TfhlOVFGovhhqca0PjN5f%3D%2F%24%28vid%29%2F"
                 data-desc="V801 80IN LED MON 19X10 WLS OPS-DRD"
                 data-img="https://testwpmp.imgix.net/http%3A%2F%2Fwww.officedepot.com%2Fpictures%2Fus%2Fod%2Fsk%2Flg%2F888995_sk_lg.jpg?w=400&h=300&fit=fill&bg=ffffff&s=cfb7236f64c15f3c4669901d3af5c331"
                 data-ispscell="true"></div>
        </a>


        <p class="product-title" style="font-size:90%;font-weight:bold;color:#555;">V801 80IN LED MON 19X10 WLS
            OPS-DRD</p>

        <p class="product-details">
            <span style="font-size:90%;font-weight:bold;">$8,248.99</span>
            <span style="margin-left:5px; font-size:90%; color:#555;">Office Depot&reg; and OfficeMax&reg; </span>
        </p>
    </div>
    <img src="/md5/9a/9a913d3d3f0f6f8bed26bc6b30e213dc_bottom-arrow-e0e0e0.png" class="arr_pointer" id="arr_3">
</div>


<div class="col-lg-3 col-sm-4 col-xs-6 products mb" id="product_4">
    <div class="product-tile">
        <a href="javascript:void(0)" class="product-link">


            <div class="product-img">
                <div class="darken"></div>

                <div class="upper-right-orange" style="text-align:right; right:0px;">
                    Earn 2,720 PTS
                </div>
                <img
                    src="https://testwpmp.imgix.net/http%3A%2F%2Fi5.walmartimages.com%2Fasr%2F2a8a37d6-9d39-4a83-94f8-6b73ff9f2d38_1.8ba9582bf7039fc3b3c77e40dafb3e35.jpeg%3FodnHeight%3D450%26odnWidth%3D450%26odnBg%3Dffffff?w=400&h=300&fit=fill&bg=ffffff&s=1c035a348e85c9ed17abda2d3931cf64"
                    class="img-responsive pr-img"/>
            </div>
            <div class="i_p_d"
                 data-href="/emp/u/a.do?afsrc=1&cell=UwwF9c0mcxFTIZYQcp3n&src=NMID_432347038756083663&src=PG_SHOP_BY_PRODUCT&src=PVID_185daebdf1a6d34567a1818ae28fc97a&src=MOD_PRODUCTS&src=PSID_154413690&cturi=http%3A%2F%2Fr.popshops.com%2Fr%2Fj%257CYjYwYWJZc2lUODdvB3-8k-ts2WK3TDVgqSZuwZWoB_28ZM5l-UHsY5_tT4w49-0j5FR3MWoxFQVHrJlYTaBExYMmpuN5VMZ0-gBLI7bYheIxIWVjPuJPWzcL2wzqQNpyMQcJ-Uhs1wpv3mM-Kl3y29an6JdB3nuxtZAeyUiOEblYzxr6rs04MohSMz6RDpfaYYqCesKKGlBAEExW0CDabT4YLf6oT4sspsTXEcyqhiDYYsmWz2jQnE13uqPWUri660ui8QHnJGuLwOsE%3D%2F%24%28vid%29%2F"
                 data-desc="Sansui LE3216D 32in D-led Lcd Tv/dvd Combo Mntr 720p Hdtv Hair Line Black"
                 data-img="https://testwpmp.imgix.net/http%3A%2F%2Fi5.walmartimages.com%2Fasr%2F2a8a37d6-9d39-4a83-94f8-6b73ff9f2d38_1.8ba9582bf7039fc3b3c77e40dafb3e35.jpeg%3FodnHeight%3D450%26odnWidth%3D450%26odnBg%3Dffffff?w=400&h=300&fit=fill&bg=ffffff&s=1c035a348e85c9ed17abda2d3931cf64"
                 data-ispscell="true"></div>
        </a>


        <p class="product-title" style="font-size:90%;font-weight:bold;color:#555;">Sansui LE3216D 32in D-led Lcd Tv/dvd
            Combo Mntr 720p Hdtv Hair Line Black</p>

        <p class="product-details">
            <span style="font-size:90%;font-weight:bold;">$340.00</span>
            <span style="margin-left:5px; font-size:90%; color:#555;">Walmart </span>
        </p>
    </div>
    <img src="/md5/9a/9a913d3d3f0f6f8bed26bc6b30e213dc_bottom-arrow-e0e0e0.png" class="arr_pointer" id="arr_4">
</div>


<div class="col-lg-3 col-sm-4 col-xs-6 products mb" id="product_5">
    <div class="product-tile">
        <a href="javascript:void(0)" class="product-link">


            <div class="product-img">
                <div class="darken"></div>

                <div class="upper-right-orange" style="text-align:right; right:0px;">
                    Earn 10,079 PTS
                </div>
                <img
                    src="https://testwpmp.imgix.net/http%3A%2F%2Fi5.walmartimages.com%2Fasr%2F11c60513-8b0e-4808-8ca1-64b9866d0915_1.12dd64803f007aeaf3c2367de92bb27a.jpeg%3FodnHeight%3D450%26odnWidth%3D450%26odnBg%3Dffffff?w=400&h=300&fit=fill&bg=ffffff&s=d8658cd9df61f2d463b6591773a6e822"
                    class="img-responsive pr-img"/>
            </div>
            <div class="i_p_d"
                 data-href="/emp/u/a.do?afsrc=1&cell=UwwF9c0mcxFTIZYQcp3n&src=NMID_432347038756083663&src=PG_SHOP_BY_PRODUCT&src=PVID_185daebdf1a6d34567a1818ae28fc97a&src=MOD_PRODUCTS&src=PSID_26967242&cturi=http%3A%2F%2Fr.popshops.com%2Fr%2Fj%257CM0YzR0xrVlBheVZX3fTOTYcKgr3VrZzmAjRvMr2es2ZX0Zz0F1dwQmD2-v-U6X1BmiTgT1WgEm8S3nQKQRm55gVZ9x3sxDuSXqpYTrcXI5HKFUqKsPQOsAYE02Yw60ADkMhxT7aPwZUEM2MOfdp9lWRu7Nv7ix_q8aheCFxqZzbIwjaqYTclZjpiNqnKTRn03l5PPohzPpuVuk2Yf-pJECP7sXe6Y4SMJ15YqRMNgL5jSqKFCo45f-1SIWJLfiGHC9tqD1TpWpX17HXN%3D%2F%24%28vid%29%2F"
                 data-desc="Peerless Wind Rated Concrete Ceiling Tilt Mount"
                 data-img="https://testwpmp.imgix.net/http%3A%2F%2Fi5.walmartimages.com%2Fasr%2F11c60513-8b0e-4808-8ca1-64b9866d0915_1.12dd64803f007aeaf3c2367de92bb27a.jpeg%3FodnHeight%3D450%26odnWidth%3D450%26odnBg%3Dffffff?w=400&h=300&fit=fill&bg=ffffff&s=d8658cd9df61f2d463b6591773a6e822"
                 data-ispscell="true"></div>
        </a>


        <p class="product-title" style="font-size:90%;font-weight:bold;color:#555;">Peerless Wind Rated Concrete Ceiling
            Tilt Mount</p>

        <p class="product-details">
            <span style="font-size:90%;font-weight:bold;">$1,259.99</span>
            <span style="margin-left:5px; font-size:90%; color:#555;">Walmart </span>
        </p>
    </div>
    <img src="/md5/9a/9a913d3d3f0f6f8bed26bc6b30e213dc_bottom-arrow-e0e0e0.png" class="arr_pointer" id="arr_5">
</div>


<div class="col-lg-3 col-sm-4 col-xs-6 products mb" id="product_6">
    <div class="product-tile">
        <a href="javascript:void(0)" class="product-link">


            <div class="product-img">
                <div class="darken"></div>

                <img
                    src="https://testwpmp.imgix.net/http%3A%2F%2Fwww.homedepot.com%2Fcatalog%2FproductImages%2F1000%2F65%2F65b5fdae-efec-4016-99c8-86284d3e848c_1000.jpg?w=400&h=300&fit=fill&bg=ffffff&s=d7965418373c7bc6a0717a15b8ea2e36"
                    class="img-responsive pr-img"/>
            </div>
            <div class="i_p_d" data-href="" data-desc="Samsung UN75J6300 75&quot; Class 1080p Smart LED HDTV"
                 data-img="https://testwpmp.imgix.net/http%3A%2F%2Fwww.homedepot.com%2Fcatalog%2FproductImages%2F1000%2F65%2F65b5fdae-efec-4016-99c8-86284d3e848c_1000.jpg?w=400&h=300&fit=fill&bg=ffffff&s=d7965418373c7bc6a0717a15b8ea2e36"
                 data-ispscell=""></div>
        </a>


        <p class="product-title" style="font-size:90%;font-weight:bold;color:#555;">Samsung UN75J6300 75" Class 1080p
            Smart LED HDTV</p>

        <p class="product-details">
            <span style="font-size:90%;font-weight:bold;">From $2,509.99 at 2 Stores</span>
        </p>
    </div>
    <img src="/md5/9a/9a913d3d3f0f6f8bed26bc6b30e213dc_bottom-arrow-e0e0e0.png" class="arr_pointer" id="arr_6">
</div>


<div class="col-lg-3 col-sm-4 col-xs-6 products mb" id="product_7">
    <div class="product-tile">
        <a href="javascript:void(0)" class="product-link">


            <div class="product-img">
                <div class="darken"></div>

                <img
                    src="https://testwpmp.imgix.net/http%3A%2F%2Fimages.qvc.com%2Fis%2Fimage%2Fe%2F62%2Fe264062.001%3F%24uslarge%24?w=400&h=300&fit=fill&bg=ffffff&s=e945c4c782920b0c16eb8ce5e2a26a92"
                    class="img-responsive pr-img"/>
            </div>
            <div class="i_p_d" data-href=""
                 data-desc="Naxa 22&quot; Class 1080p LED HDTV with Built-in DVDPlayer, Tuner"
                 data-img="https://testwpmp.imgix.net/http%3A%2F%2Fimages.qvc.com%2Fis%2Fimage%2Fe%2F62%2Fe264062.001%3F%24uslarge%24?w=400&h=300&fit=fill&bg=ffffff&s=e945c4c782920b0c16eb8ce5e2a26a92"
                 data-ispscell=""></div>
        </a>


        <p class="product-title" style="font-size:90%;font-weight:bold;color:#555;">Naxa 22" Class 1080p LED HDTV with
            Built-in DVDPlayer, Tuner</p>

        <p class="product-details">
            <span style="font-size:90%;font-weight:bold;">From $159.99 at 2 Stores</span>
        </p>
    </div>
    <img src="/md5/9a/9a913d3d3f0f6f8bed26bc6b30e213dc_bottom-arrow-e0e0e0.png" class="arr_pointer" id="arr_7">
</div>


<div class="col-lg-3 col-sm-4 col-xs-6 products mb" id="product_8">
    <div class="product-tile">
        <a href="javascript:void(0)" class="product-link">


            <div class="product-img">
                <div class="darken"></div>

                <div class="upper-right-orange" style="text-align:right; right:0px;">
                    Earn 17,592 PTS
                </div>
                <img
                    src="https://testwpmp.imgix.net/https%3A%2F%2Fi5.walmartimages.com%2Fasr%2F79a43412-dbf4-4a25-8121-1e9d1590d2cc_1.5da5cd6008aed5f2c7e69be076198948.jpeg%3FodnHeight%3D450%26odnWidth%3D450%26odnBg%3Dffffff?w=400&h=300&fit=fill&bg=ffffff&s=abe0bdbf6c9e10c47a99494e2a436f38"
                    class="img-responsive pr-img"/>
            </div>
            <div class="i_p_d"
                 data-href="/emp/u/a.do?afsrc=1&cell=UwwF9c0mcxFTIZYQcp3n&src=NMID_432347038756083663&src=PG_SHOP_BY_PRODUCT&src=PVID_185daebdf1a6d34567a1818ae28fc97a&src=MOD_PRODUCTS&src=PSID_109664258&cturi=http%3A%2F%2Fr.popshops.com%2Fr%2Fj%257CTmpFcjBaMnhhdXRQNh-uK7GWOvinKfmw2FZ-VxqN0M5CtNpwHbL6AMdiS1u-n2_sLjXhUaV_tu9iogAZdt8fSaA8LG9cE4U2algbZiE7i6wljEZ38y-LClX8NBHzwLPnjSyXLjvYIN-q63bvouY7BtOz1HXk1U8AF10pz6WDa_ttjX7jKEtJIvtnpdYwuKQb0EjiOk2PVKA4KTaaCoAmwLBM4SyJw5pTTArwv-6cuFT70Ac7oHyDoDwbcIkXvbKXkoc5zXLL4kIgoSTX%3D%2F%24%28vid%29%2F"
                 data-desc="Sharp 70&quot; THX 4K Ultra HD LED HDTV, Smart, 3D"
                 data-img="https://testwpmp.imgix.net/https%3A%2F%2Fi5.walmartimages.com%2Fasr%2F79a43412-dbf4-4a25-8121-1e9d1590d2cc_1.5da5cd6008aed5f2c7e69be076198948.jpeg%3FodnHeight%3D450%26odnWidth%3D450%26odnBg%3Dffffff?w=400&h=300&fit=fill&bg=ffffff&s=abe0bdbf6c9e10c47a99494e2a436f38"
                 data-ispscell="true"></div>
        </a>


        <p class="product-title" style="font-size:90%;font-weight:bold;color:#555;">Sharp 70" THX 4K Ultra HD LED HDTV,
            Smart, 3D</p>

        <p class="product-details">
            <span style="font-size:90%;font-weight:bold;">$2,199.00</span>
            <span style="margin-left:5px; font-size:90%; color:#555;">Walmart </span>
        </p>
    </div>
    <img src="/md5/9a/9a913d3d3f0f6f8bed26bc6b30e213dc_bottom-arrow-e0e0e0.png" class="arr_pointer" id="arr_8">
</div>


<div class="col-lg-3 col-sm-4 col-xs-6 products mb" id="product_9">
    <div class="product-tile">
        <a href="javascript:void(0)" class="product-link">


            <div class="product-img">
                <div class="darken"></div>

                <div class="upper-right-orange" style="text-align:right; right:0px;">
                    Earn 2,699 PTS
                </div>
                <img
                    src="https://testwpmp.imgix.net/http%3A%2F%2Fwww.officedepot.com%2Fpictures%2Fus%2Fod%2Fsk%2Flg%2F534659_sk_lg.jpg?w=400&h=300&fit=fill&bg=ffffff&s=c8c888a214a89dd5dce12613463e83eb"
                    class="img-responsive pr-img"/>
            </div>
            <div class="i_p_d"
                 data-href="/emp/u/a.do?afsrc=1&cell=R_7pToCKbXgOM6TP6a4a&src=NMID_432347038756083663&src=PG_SHOP_BY_PRODUCT&src=PVID_185daebdf1a6d34567a1818ae28fc97a&src=MOD_PRODUCTS&src=PSID_189916231&cturi=http%3A%2F%2Fr.popshops.com%2Fr%2Fj%257Cc09qa2xlTGJrdmxz8Yvahh2z96OJ_stu0RLqVcjMIX7yd9qBe1Av8vWZL2kUZrHTiPinONchjWSikMaV_u2qFwGtnN16DAMK-U4PE0PwuN-VKM4aEMII8pfxxzx2-sYeiVMMSyM2w6DKUgFY6SXQ2ZJP0UYQqwuNvrP-AEu9rDqsKX1qdlyB3rsOtT7cYSqmqY2JHxf5Lc5ArxvImx0fCMQIlWC56vkiK_csj6k8LssgEk_nqpCX5K_za3N1utBubiDOCzvB4OqdPfTh%3D%2F%24%28vid%29%2F"
                 data-desc="UN50J5200AFXZA 50&quot; (49.5&quot; Measured Diagonally) J5200 Series LED Smart TV with Full HD 1080P Wide Color Enhancer Full Web Browser Mobile Screen Mirroring and"
                 data-img="https://testwpmp.imgix.net/http%3A%2F%2Fwww.officedepot.com%2Fpictures%2Fus%2Fod%2Fsk%2Flg%2F534659_sk_lg.jpg?w=400&h=300&fit=fill&bg=ffffff&s=c8c888a214a89dd5dce12613463e83eb"
                 data-ispscell="true"></div>
        </a>


        <p class="product-title" style="font-size:90%;font-weight:bold;color:#555;">UN50J5200AFXZA 50" (49.5" Measured
            Diagonally) J5200 Series LED Smart TV with Full HD 1080P Wide Color Enhancer Full Web Browser Mobile Screen
            Mirroring and</p>

        <p class="product-details">
            <span style="font-size:90%;font-weight:bold;">$899.99</span>
            <span style="margin-left:5px; font-size:90%; color:#555;">Office Depot&reg; and OfficeMax&reg; </span>
        </p>
    </div>
    <img src="/md5/9a/9a913d3d3f0f6f8bed26bc6b30e213dc_bottom-arrow-e0e0e0.png" class="arr_pointer" id="arr_9">
</div>


<div class="col-lg-3 col-sm-4 col-xs-6 products mb" id="product_10">
    <div class="product-tile">
        <a href="javascript:void(0)" class="product-link">


            <div class="product-img">
                <div class="darken"></div>

                <div class="upper-right-orange" style="text-align:right; right:0px;">
                    Earn 1,119 PTS
                </div>
                <img
                    src="https://testwpmp.imgix.net/http%3A%2F%2Fi5.walmartimages.com%2Fasr%2Fce23df7a-772a-4713-b90e-8550105d2e56_1.0e95c6107b4724de8dbca98eb3f7b536.jpeg%3FodnHeight%3D450%26odnWidth%3D450%26odnBg%3Dffffff?w=400&h=300&fit=fill&bg=ffffff&s=9be869519adec6e1bd6408a35c68a682"
                    class="img-responsive pr-img"/>
            </div>
            <div class="i_p_d"
                 data-href="/emp/u/a.do?afsrc=1&cell=UwwF9c0mcxFTIZYQcp3n&src=NMID_432347038756083663&src=PG_SHOP_BY_PRODUCT&src=PVID_185daebdf1a6d34567a1818ae28fc97a&src=MOD_PRODUCTS&src=PSID_1969298&cturi=http%3A%2F%2Fr.popshops.com%2Fr%2Fj%257CT2ZEcjBtb1R5MWJj1IPP0iDO32CMf3kPXkYfbNNvDbjANIxMBMwWEuKGJ_Assz2SjgJDW6YiCESq_IepfApxL41H6BjvAgWZ1BKUmA_0bc7kmVbgIGUa_X5IIu-1SFuKemqTEzfCotgHT-5IMwnk22YlzgS-mP6eK4zK6VYnPsjluHX2eYlgmJ1FUUsGyHsdzaOenSGbItbD_zUfmHOdaQ-d4GD8FsPPPgbYOD-nL-QtwFGsFpjsS8PieJv0FJ3gmetI5JSLdEEyDouT%3D%2F%24%28vid%29%2F"
                 data-desc="Sceptre E246BV-FHD 23.6&quot; Diag 1080P LED HDTV with 2 HDMI Ports"
                 data-img="https://testwpmp.imgix.net/http%3A%2F%2Fi5.walmartimages.com%2Fasr%2Fce23df7a-772a-4713-b90e-8550105d2e56_1.0e95c6107b4724de8dbca98eb3f7b536.jpeg%3FodnHeight%3D450%26odnWidth%3D450%26odnBg%3Dffffff?w=400&h=300&fit=fill&bg=ffffff&s=9be869519adec6e1bd6408a35c68a682"
                 data-ispscell="true"></div>
        </a>


        <p class="product-title" style="font-size:90%;font-weight:bold;color:#555;">Sceptre E246BV-FHD 23.6" Diag 1080P
            LED HDTV with 2 HDMI Ports</p>

        <p class="product-details">
            <span style="font-size:90%;font-weight:bold;">$139.99</span>
            <span style="margin-left:5px; font-size:90%; color:#555;">Walmart </span>
        </p>
    </div>
    <img src="/md5/9a/9a913d3d3f0f6f8bed26bc6b30e213dc_bottom-arrow-e0e0e0.png" class="arr_pointer" id="arr_10">
</div>


<div class="col-lg-3 col-sm-4 col-xs-6 products mb" id="product_11">
    <div class="product-tile">
        <a href="javascript:void(0)" class="product-link">


            <div class="product-img">
                <div class="darken"></div>

                <div class="upper-right-orange" style="text-align:right; right:0px;">
                    Earn 3,999 PTS
                </div>
                <img
                    src="https://testwpmp.imgix.net/https%3A%2F%2Fi5.walmartimages.com%2Fasr%2Fc51eac61-a6db-4352-bf1d-0f775667db8d_1.f86b89c14a61c361c32ba57ab6c945eb.jpeg%3FodnHeight%3D450%26odnWidth%3D450%26odnBg%3Dffffff?w=400&h=300&fit=fill&bg=ffffff&s=1f412a8e72feb3de98903dce9c8078bc"
                    class="img-responsive pr-img"/>
            </div>
            <div class="i_p_d"
                 data-href="/emp/u/a.do?afsrc=1&cell=UwwF9c0mcxFTIZYQcp3n&src=NMID_432347038756083663&src=PG_SHOP_BY_PRODUCT&src=PVID_185daebdf1a6d34567a1818ae28fc97a&src=MOD_PRODUCTS&src=PSID_211193255&cturi=http%3A%2F%2Fr.popshops.com%2Fr%2Fj%257CcUpjSXM4cE1RWk54Ak17LqFjPuv-G2q5BsYyImdWdYDjHGzt110NEaEp7SgL7QQiQ0wltZCc-69MlmUFfN3Elfoxhv6l2C9at7H62uzVOIparH82bQTULUGxAodlV6YJKjrgCrwqDDZk1nO148Ck8vunRu3-hPRQjZPTnidqRtnaknidyutXl51NuV0bbgYx2cuwwUiojbXxRpe7-N7RJVykWjXbzW1xJo-RuGPIIy27CteuKQAqI7d3gXEVswY9IHEAn9bgo5AElc7X%3D%2F%24%28vid%29%2F"
                 data-desc="LG 43&quot; Class 4K Ultra HD LED Smart TV"
                 data-img="https://testwpmp.imgix.net/https%3A%2F%2Fi5.walmartimages.com%2Fasr%2Fc51eac61-a6db-4352-bf1d-0f775667db8d_1.f86b89c14a61c361c32ba57ab6c945eb.jpeg%3FodnHeight%3D450%26odnWidth%3D450%26odnBg%3Dffffff?w=400&h=300&fit=fill&bg=ffffff&s=1f412a8e72feb3de98903dce9c8078bc"
                 data-ispscell="true"></div>
        </a>


        <p class="product-title" style="font-size:90%;font-weight:bold;color:#555;">LG 43" Class 4K Ultra HD LED Smart
            TV</p>

        <p class="product-details">
            <span style="font-size:90%;font-weight:bold;">$499.99</span>
            <span style="margin-left:5px; font-size:90%; color:#555;">Walmart </span>
        </p>
    </div>
    <img src="/md5/9a/9a913d3d3f0f6f8bed26bc6b30e213dc_bottom-arrow-e0e0e0.png" class="arr_pointer" id="arr_11">
</div>


<div class="col-lg-3 col-sm-4 col-xs-6 products mb" id="product_12">
    <div class="product-tile">
        <a href="javascript:void(0)" class="product-link">


            <div class="product-img">
                <div class="darken"></div>

                <div class="upper-right-orange" style="text-align:right; right:0px;">
                    Earn 31,999 PTS
                </div>
                <img
                    src="https://testwpmp.imgix.net/https%3A%2F%2Fi5.walmartimages.com%2Fasr%2F53804aee-9d86-4b24-8e51-d0804a57f1cb_1.f4fb8088a97d1545e7582b589d2dd3ba.jpeg%3FodnHeight%3D450%26odnWidth%3D450%26odnBg%3Dffffff?w=400&h=300&fit=fill&bg=ffffff&s=d43be2b8adb6615fb3fa63d6d208d0a4"
                    class="img-responsive pr-img"/>
            </div>
            <div class="i_p_d"
                 data-href="/emp/u/a.do?afsrc=1&cell=UwwF9c0mcxFTIZYQcp3n&src=NMID_432347038756083663&src=PG_SHOP_BY_PRODUCT&src=PVID_185daebdf1a6d34567a1818ae28fc97a&src=MOD_PRODUCTS&src=PSID_186786420&cturi=http%3A%2F%2Fr.popshops.com%2Fr%2Fj%257CVGpMc1k4blpvaWdqucNZtlK6hzXNBSmVhgMjOyhqWzaDmzypn1GAJQdqJqNIySEzCFOkCHnV3SFZosfasvioWrjRS4YnuKhauHvDrqGQ89RTpRXlWY56E1FIUksDoVPqSOof0T57Pp1UmesQBBvtfAO37rcPactcf2NlhaRz1V_IDTglJCR4xzys0fbyH_X5_-GS86AzpjQt8lQYWABM96uPeQ0dFULqCBcJ_hUfu-LIemqgG6tH2WejuJiXJLXVjKNN2P9RGRx4YHlj%3D%2F%24%28vid%29%2F"
                 data-desc="Samsung 65&quot; Class LED Flat 4K SUHD Smart TV"
                 data-img="https://testwpmp.imgix.net/https%3A%2F%2Fi5.walmartimages.com%2Fasr%2F53804aee-9d86-4b24-8e51-d0804a57f1cb_1.f4fb8088a97d1545e7582b589d2dd3ba.jpeg%3FodnHeight%3D450%26odnWidth%3D450%26odnBg%3Dffffff?w=400&h=300&fit=fill&bg=ffffff&s=d43be2b8adb6615fb3fa63d6d208d0a4"
                 data-ispscell="true"></div>
        </a>


        <p class="product-title" style="font-size:90%;font-weight:bold;color:#555;">Samsung 65" Class LED Flat 4K SUHD
            Smart TV</p>

        <p class="product-details">
            <span style="font-size:90%;font-weight:bold;">$3,999.99</span>
            <span style="margin-left:5px; font-size:90%; color:#555;">Walmart </span>
        </p>
    </div>
    <img src="/md5/9a/9a913d3d3f0f6f8bed26bc6b30e213dc_bottom-arrow-e0e0e0.png" class="arr_pointer" id="arr_12">
</div>


<div class="col-lg-3 col-sm-4 col-xs-6 products mb" id="product_13">
    <div class="product-tile">
        <a href="javascript:void(0)" class="product-link">


            <div class="product-img">
                <div class="darken"></div>

                <div class="upper-right-orange" style="text-align:right; right:0px;">
                    Earn 15,579 PTS
                </div>
                <img
                    src="https://testwpmp.imgix.net/http%3A%2F%2Fimg.bbystatic.com%2FBestBuy_US%2Fimages%2Fproducts%2F7573%2F7573095_sc.jpg?w=400&h=300&fit=fill&bg=ffffff&s=40ceb9cc51797d1710c66706fe0f6462"
                    class="img-responsive pr-img"/>
            </div>
            <div class="i_p_d"
                 data-href="/emp/u/a.do?afsrc=1&cell=lWPSh5Q4xqqKHyblYikD&src=NMID_432347038756083663&src=PG_SHOP_BY_PRODUCT&src=PVID_185daebdf1a6d34567a1818ae28fc97a&src=MOD_PRODUCTS&src=PSID_197095048&cturi=http%3A%2F%2Fr.popshops.com%2Fr%2Fj%257CQVlYaEFERWtQa1dDNC-bLJ9VFQdj7gBrJ5WT-lNl0_plqPKeFpD8UukPn8w7Z8uVvSsnMFD6wsBoDtKjlXxBetO1lYQA3lW9uVprCUZT-pULN1jVKc-2AHHYnO4fi2Z8Z9Tj7DjiB00NZVOv-wZBtNfnlIK6Wxtig10ceBBMrrQhXVOHlYIOgVg2fK-4CZ4t0cM_d_OrijVDJE_poJ9HSOFaM_0lQeiLqyxS0T45-Ps61u6iTr3xJqpC8eIf1kFook_ECJqhWUB2tCE5%3D%2F%24%28vid%29%2F"
                 data-desc="Sunbrite Tv - Pro Series - 42&quot; Class (42&quot; Diag.) - Led - Outdoor - 1080p - Hdtv - Silver"
                 data-img="https://testwpmp.imgix.net/http%3A%2F%2Fimg.bbystatic.com%2FBestBuy_US%2Fimages%2Fproducts%2F7573%2F7573095_sc.jpg?w=400&h=300&fit=fill&bg=ffffff&s=40ceb9cc51797d1710c66706fe0f6462"
                 data-ispscell="true"></div>
        </a>


        <p class="product-title" style="font-size:90%;font-weight:bold;color:#555;">Sunbrite Tv - Pro Series - 42" Class
            (42" Diag.) - Led - Outdoor - 1080p - Hdtv - Silver</p>

        <p class="product-details">
            <span style="font-size:90%;font-weight:bold;">$3,894.98</span>
            <span style="margin-left:5px; font-size:90%; color:#555;">Best Buy </span>
        </p>
    </div>
    <img src="/md5/9a/9a913d3d3f0f6f8bed26bc6b30e213dc_bottom-arrow-e0e0e0.png" class="arr_pointer" id="arr_13">
</div>


<div class="col-lg-3 col-sm-4 col-xs-6 products mb" id="product_14">
    <div class="product-tile">
        <a href="javascript:void(0)" class="product-link">


            <div class="product-img">
                <div class="darken"></div>

                <img
                    src="https://testwpmp.imgix.net/http%3A%2F%2Fi5.walmartimages.com%2Fasr%2Fe0e0feac-ab96-4b77-ba2e-14637476a563_1.a15a27ff72d7be32fee6c6ee458326a5.jpeg%3FodnHeight%3D450%26odnWidth%3D450%26odnBg%3Dffffff?w=400&h=300&fit=fill&bg=ffffff&s=bc1f3193fdd2adefb5ffa60b5af1e68c"
                    class="img-responsive pr-img"/>
            </div>
            <div class="i_p_d" data-href="" data-desc="Samsung 48&quot; Class Curved 4K Ultra HD LED Smart TV"
                 data-img="https://testwpmp.imgix.net/http%3A%2F%2Fi5.walmartimages.com%2Fasr%2Fe0e0feac-ab96-4b77-ba2e-14637476a563_1.a15a27ff72d7be32fee6c6ee458326a5.jpeg%3FodnHeight%3D450%26odnWidth%3D450%26odnBg%3Dffffff?w=400&h=300&fit=fill&bg=ffffff&s=bc1f3193fdd2adefb5ffa60b5af1e68c"
                 data-ispscell=""></div>
        </a>


        <p class="product-title" style="font-size:90%;font-weight:bold;color:#555;">Samsung 48" Class Curved 4K Ultra HD
            LED Smart TV</p>

        <p class="product-details">
            <span style="font-size:90%;font-weight:bold;">From $997.99 at 2 Stores</span>
        </p>
    </div>
    <img src="/md5/9a/9a913d3d3f0f6f8bed26bc6b30e213dc_bottom-arrow-e0e0e0.png" class="arr_pointer" id="arr_14">
</div>


<div class="col-lg-3 col-sm-4 col-xs-6 products mb" id="product_15">
    <div class="product-tile">
        <a href="javascript:void(0)" class="product-link">


            <div class="product-img">
                <div class="darken"></div>

                <div class="upper-right-orange" style="text-align:right; right:0px;">
                    Earn 784 PTS
                </div>
                <img
                    src="https://testwpmp.imgix.net/http%3A%2F%2Fi5.walmartimages.com%2Fasr%2F9532970e-02d3-4bff-afcc-0c547c15bbbd_1.3b29af406e9ec7b70e315f33af648c5d.jpeg%3FodnHeight%3D450%26odnWidth%3D450%26odnBg%3Dffffff?w=400&h=300&fit=fill&bg=ffffff&s=94736309f4117ec705c2218987fd11e2"
                    class="img-responsive pr-img"/>
            </div>
            <div class="i_p_d"
                 data-href="/emp/u/a.do?afsrc=1&cell=UwwF9c0mcxFTIZYQcp3n&src=NMID_432347038756083663&src=PG_SHOP_BY_PRODUCT&src=PVID_185daebdf1a6d34567a1818ae28fc97a&src=MOD_PRODUCTS&src=PSID_162962150&cturi=http%3A%2F%2Fr.popshops.com%2Fr%2Fj%257CUmZ1aGdKWkxnd29PXpzh97kUabJdczpfwiMS7H6vkrY8RiR5jvzRtf4OvwUq1QWOUdrqo1uqdlqW2zOCzSk84hUsF7CiiD3R3px1TOB_K0CZcuHgXRNi0H9z0bNb1KqYa15i8dIkXIecnABR1-McdsffK7XjHlUpj90vS1vHzY4kaKrTIOnndqvsB1iHWaTWPcR09aJcrpoDN3x7ITnfnmK22zVJOVaK4TyY5lWqJ7BveIMfLym9qQyIpqWqiAMbtGJne2PCTPwmWuKm%3D%2F%24%28vid%29%2F"
                 data-desc="Element Electronics ELEFW195 19-inch LED HDTV - 720p - 16:9 - 6.5 ms - 1000:1 - HDMI, DVI and VGA"
                 data-img="https://testwpmp.imgix.net/http%3A%2F%2Fi5.walmartimages.com%2Fasr%2F9532970e-02d3-4bff-afcc-0c547c15bbbd_1.3b29af406e9ec7b70e315f33af648c5d.jpeg%3FodnHeight%3D450%26odnWidth%3D450%26odnBg%3Dffffff?w=400&h=300&fit=fill&bg=ffffff&s=94736309f4117ec705c2218987fd11e2"
                 data-ispscell="true"></div>
        </a>


        <p class="product-title" style="font-size:90%;font-weight:bold;color:#555;">Element Electronics ELEFW195 19-inch
            LED HDTV - 720p - 16:9 - 6.5 ms - 1000:1 - HDMI, DVI and VGA</p>

        <p class="product-details">
            <span style="font-size:90%;font-weight:bold;">$98.00</span>
            <span style="margin-left:5px; font-size:90%; color:#555;">Walmart </span>
        </p>
    </div>
    <img src="/md5/9a/9a913d3d3f0f6f8bed26bc6b30e213dc_bottom-arrow-e0e0e0.png" class="arr_pointer" id="arr_15">
</div>


<div class="col-lg-3 col-sm-4 col-xs-6 products mb" id="product_16">
    <div class="product-tile">
        <a href="javascript:void(0)" class="product-link">


            <div class="product-img">
                <div class="darken"></div>

                <div class="upper-right-orange" style="text-align:right; right:0px;">
                    Earn 18,746 PTS
                </div>
                <img
                    src="https://testwpmp.imgix.net/http%3A%2F%2Fwww.officedepot.com%2Fpictures%2Fus%2Fod%2Fsk%2Flg%2F888983_sk_lg.jpg?w=400&h=300&fit=fill&bg=ffffff&s=7f4682aefe1574d83550cbe9d341b0e2"
                    class="img-responsive pr-img"/>
            </div>
            <div class="i_p_d"
                 data-href="/emp/u/a.do?afsrc=1&cell=R_7pToCKbXgOM6TP6a4a&src=NMID_432347038756083663&src=PG_SHOP_BY_PRODUCT&src=PVID_185daebdf1a6d34567a1818ae28fc97a&src=MOD_PRODUCTS&src=PSID_154483573&cturi=http%3A%2F%2Fr.popshops.com%2Fr%2Fj%257COXhMVE5qcElqU0dNgcb9-rrTNVHyuMI4Kp8yY41GFemWNeDgEDQEJWEpaRgIGOklO3EGrAMLlp633DCD8DRRoMUJ85wOSoP5ASEq4jAwlzUf58GT-3936m5XUcX8PVHNh6UfW_0W07I-DCbFbarY33xjdftyUsVyKaJt7GmhEL7N_iqgbU3vuG9T0w5ABnA5-c3zxD_jCOgL5mpEYZTFQlVXHVru43etSiM4tI6oAOhCmG6U3XFnr5iE9LP20zcYO2n8PDVKPfhhYXVH%3D%2F%24%28vid%29%2F"
                 data-desc="NEC MultiSync P703-DRD - 70 LED-backlit LCD flat"
                 data-img="https://testwpmp.imgix.net/http%3A%2F%2Fwww.officedepot.com%2Fpictures%2Fus%2Fod%2Fsk%2Flg%2F888983_sk_lg.jpg?w=400&h=300&fit=fill&bg=ffffff&s=7f4682aefe1574d83550cbe9d341b0e2"
                 data-ispscell="true"></div>
        </a>


        <p class="product-title" style="font-size:90%;font-weight:bold;color:#555;">NEC MultiSync P703-DRD - 70
            LED-backlit LCD flat</p>

        <p class="product-details">
            <span style="font-size:90%;font-weight:bold;">$6,248.99</span>
            <span style="margin-left:5px; font-size:90%; color:#555;">Office Depot&reg; and OfficeMax&reg; </span>
        </p>
    </div>
    <img src="/md5/9a/9a913d3d3f0f6f8bed26bc6b30e213dc_bottom-arrow-e0e0e0.png" class="arr_pointer" id="arr_16">
</div>


<div class="col-lg-3 col-sm-4 col-xs-6 products mb" id="product_17">
    <div class="product-tile">
        <a href="javascript:void(0)" class="product-link">


            <div class="product-img">
                <div class="darken"></div>

                <div class="upper-right-orange" style="text-align:right; right:0px;">
                    Earn 5,096 PTS
                </div>
                <img
                    src="https://testwpmp.imgix.net/http%3A%2F%2Fwww.officedepot.com%2Fpictures%2Fus%2Fod%2Fsk%2Flg%2F888910_sk_lg.jpg?w=400&h=300&fit=fill&bg=ffffff&s=c23f7754b2963e3ca1312e217bd9507c"
                    class="img-responsive pr-img"/>
            </div>
            <div class="i_p_d"
                 data-href="/emp/u/a.do?afsrc=1&cell=R_7pToCKbXgOM6TP6a4a&src=NMID_432347038756083663&src=PG_SHOP_BY_PRODUCT&src=PVID_185daebdf1a6d34567a1818ae28fc97a&src=MOD_PRODUCTS&src=PSID_154483570&cturi=http%3A%2F%2Fr.popshops.com%2Fr%2Fj%257CSzFJYnU4eXBseUxVX72Y-EpXguEg3WOvL2-lILqfheU1vnVtreZJD-QoPYBLej0OhpyjIl_RQxc7lOUivIXapUviZ8CQKFWJGs0LrHSWvH3cZAIGrv6nnPNx-dkIuO5An_vLnIsCQzTjD_uIX3FTbeXH9J_atu1GluNeViqDgOMb4eeZNkyKxO8hNLK3JBAN161gXsNlt8xWcoj9yM2PzsZOtecxeB4hAiYUK4hjjrW8Nac2ytd7rdxmZrB0lDtgJDfMptbioKgg8ZKs%3D%2F%24%28vid%29%2F"
                 data-desc="NEC P403-DRD 40&quot; LED Backlit Professional-Grade Large Screen Display with Integrated Digital Media Player"
                 data-img="https://testwpmp.imgix.net/http%3A%2F%2Fwww.officedepot.com%2Fpictures%2Fus%2Fod%2Fsk%2Flg%2F888910_sk_lg.jpg?w=400&h=300&fit=fill&bg=ffffff&s=c23f7754b2963e3ca1312e217bd9507c"
                 data-ispscell="true"></div>
        </a>


        <p class="product-title" style="font-size:90%;font-weight:bold;color:#555;">NEC P403-DRD 40" LED Backlit
            Professional-Grade Large Screen Display with Integrated Digital Media Player</p>

        <p class="product-details">
            <span style="font-size:90%;font-weight:bold;">$1,698.99</span>
            <span style="margin-left:5px; font-size:90%; color:#555;">Office Depot&reg; and OfficeMax&reg; </span>
        </p>
    </div>
    <img src="/md5/9a/9a913d3d3f0f6f8bed26bc6b30e213dc_bottom-arrow-e0e0e0.png" class="arr_pointer" id="arr_17">
</div>


<div class="col-lg-3 col-sm-4 col-xs-6 products mb" id="product_18">
    <div class="product-tile">
        <a href="javascript:void(0)" class="product-link">


            <div class="product-img">
                <div class="darken"></div>

                <div class="upper-right-orange" style="text-align:right; right:0px;">
                    Earn 423 PTS
                </div>
                <img
                    src="https://testwpmp.imgix.net/http%3A%2F%2Fi5.walmartimages.com%2Fasr%2Fb38e91de-2999-465a-a5ce-71ef75967348_1.370f47dda0487efae8c383aaf515e902.jpeg%3FodnHeight%3D450%26odnWidth%3D450%26odnBg%3Dffffff?w=400&h=300&fit=fill&bg=ffffff&s=eedb445abc350d742b78858bbf976965"
                    class="img-responsive pr-img"/>
            </div>
            <div class="i_p_d"
                 data-href="/emp/u/a.do?afsrc=1&cell=UwwF9c0mcxFTIZYQcp3n&src=NMID_432347038756083663&src=PG_SHOP_BY_PRODUCT&src=PVID_185daebdf1a6d34567a1818ae28fc97a&src=MOD_PRODUCTS&src=PSID_141363576&cturi=http%3A%2F%2Fr.popshops.com%2Fr%2Fj%257CTlNYVFJOeDR1Tkg3yFGIVE1nLZ7QEGfSmBGTYzAkajsr77BaFobsBK7Hw7TzamsJ7w0C_r2gzxTHH5t1wSoRQAt3aH6phCMXKvmYdjzrP2FmgI8IShgk3vC3NrLN8Zcn7HI8DVBg3gZ7NVujZOk9GixpvAjIQSdUYljiCtzT8b_lNzMW2LB-IPkvsFa5fbgdemt7Ol9CSqTE3zkvHmqj_jGiYT-IaRRNsdgLvsTdytjaA-einm0pDI37i0tIfYuVSdHx7gOy8kR5__Hr%3D%2F%24%28vid%29%2F"
                 data-desc="Arctic ORAEQ-MA007-GBA01 RED Z1 Desk Mount Monitor Arm"
                 data-img="https://testwpmp.imgix.net/http%3A%2F%2Fi5.walmartimages.com%2Fasr%2Fb38e91de-2999-465a-a5ce-71ef75967348_1.370f47dda0487efae8c383aaf515e902.jpeg%3FodnHeight%3D450%26odnWidth%3D450%26odnBg%3Dffffff?w=400&h=300&fit=fill&bg=ffffff&s=eedb445abc350d742b78858bbf976965"
                 data-ispscell="true"></div>
        </a>


        <p class="product-title" style="font-size:90%;font-weight:bold;color:#555;">Arctic ORAEQ-MA007-GBA01 RED Z1 Desk
            Mount Monitor Arm</p>

        <p class="product-details">
            <span style="font-size:90%;font-weight:bold;">$52.99</span>
            <span style="margin-left:5px; font-size:90%; color:#555;">Walmart </span>
        </p>
    </div>
    <img src="/md5/9a/9a913d3d3f0f6f8bed26bc6b30e213dc_bottom-arrow-e0e0e0.png" class="arr_pointer" id="arr_18">
</div>


<div class="col-lg-3 col-sm-4 col-xs-6 products mb" id="product_19">
    <div class="product-tile">
        <a href="javascript:void(0)" class="product-link">


            <div class="product-img">
                <div class="darken"></div>

                <div class="upper-right-orange" style="text-align:right; right:0px;">
                    Earn 5,122 PTS
                </div>
                <img
                    src="https://testwpmp.imgix.net/https%3A%2F%2Fi5.walmartimages.com%2Fasr%2Ff08d40da-adb7-465e-a46f-b0caa5869e12_1.2c28c50b126779430cc0a6c12901537c.jpeg%3FodnHeight%3D450%26odnWidth%3D450%26odnBg%3Dffffff?w=400&h=300&fit=fill&bg=ffffff&s=9a5a9b4e7a424cb47c90e67f75789bdf"
                    class="img-responsive pr-img"/>
            </div>
            <div class="i_p_d"
                 data-href="/emp/u/a.do?afsrc=1&cell=UwwF9c0mcxFTIZYQcp3n&src=NMID_432347038756083663&src=PG_SHOP_BY_PRODUCT&src=PVID_185daebdf1a6d34567a1818ae28fc97a&src=MOD_PRODUCTS&src=PSID_181385627&cturi=http%3A%2F%2Fr.popshops.com%2Fr%2Fj%257CM1oyVHRaZmN5RW90-aVfRPuYp0U2vrO8GJKLUfZVy2bwpTmMo3zcIOLQe2CfCNFqgsGz14ivfOExloBqQ6ED2_BBvIWSZMdGV27cpBDDMtHv8nFs2OtWSTBXpwIrgAr5j9hLsu1uwI7yM5WD934I-YW-g6zxkXkmqMwNnZumW68sgidoW78B674HkitDOMKLy3H2L2JiE0548P36CRtOVJECIUWxYWxOTz4m2TRy2jrbTzfRj6bpLFI8ZqU31WrNxpinjD1s5wWmMS6l%3D%2F%24%28vid%29%2F"
                 data-desc="Sansui Accu SLED5516 55&quot; LED-LCD TV - 4K UHDTV"
                 data-img="https://testwpmp.imgix.net/https%3A%2F%2Fi5.walmartimages.com%2Fasr%2Ff08d40da-adb7-465e-a46f-b0caa5869e12_1.2c28c50b126779430cc0a6c12901537c.jpeg%3FodnHeight%3D450%26odnWidth%3D450%26odnBg%3Dffffff?w=400&h=300&fit=fill&bg=ffffff&s=9a5a9b4e7a424cb47c90e67f75789bdf"
                 data-ispscell="true"></div>
        </a>


        <p class="product-title" style="font-size:90%;font-weight:bold;color:#555;">Sansui Accu SLED5516 55" LED-LCD TV
            - 4K UHDTV</p>

        <p class="product-details">
            <span style="font-size:90%;font-weight:bold;">$640.31</span>
            <span style="margin-left:5px; font-size:90%; color:#555;">Walmart </span>
        </p>
    </div>
    <img src="/md5/9a/9a913d3d3f0f6f8bed26bc6b30e213dc_bottom-arrow-e0e0e0.png" class="arr_pointer" id="arr_19">
</div>


<div class="col-lg-3 col-sm-4 col-xs-6 products mb" id="product_20">
    <div class="product-tile">
        <a href="javascript:void(0)" class="product-link">


            <div class="product-img">
                <div class="darken"></div>

                <div class="upper-right-orange" style="text-align:right; right:0px;">
                    Earn 11,439 PTS
                </div>
                <img
                    src="https://testwpmp.imgix.net/https%3A%2F%2Fi5.walmartimages.com%2Fasr%2F95c7bbfd-2a71-4693-a78e-7f8674a09418_1.135ca2743c7e43d21f0920394b656d91.jpeg%3FodnHeight%3D450%26odnWidth%3D450%26odnBg%3Dffffff?w=400&h=300&fit=fill&bg=ffffff&s=e7862696150473efd4e0493658b1707f"
                    class="img-responsive pr-img"/>
            </div>
            <div class="i_p_d"
                 data-href="/emp/u/a.do?afsrc=1&cell=UwwF9c0mcxFTIZYQcp3n&src=NMID_432347038756083663&src=PG_SHOP_BY_PRODUCT&src=PVID_185daebdf1a6d34567a1818ae28fc97a&src=MOD_PRODUCTS&src=PSID_26967215&cturi=http%3A%2F%2Fr.popshops.com%2Fr%2Fj%257CcFRjNHlIalRTWGlCcglBqvMuXNnKmNYHSFogdgnIx6sxiAE2WJPOmQHYII4rgC5AlQHOVructNQ3_dEAs_qogdaXXr_R3FGTxP49ZGzA8sLcSttOqXnDegdnOApRgNnAgzOhlOr9S4TTAPXfgbc0yHh8WsJDiaYoGMYb521BCyuJRKCyyNIrBPspW5raTMuhAmAkOvUFuE11XNxw6HfcHIyTJp8GzFVe_gdMT9FbudafJjIrkioHy67QAMGnoUY3WSUUZYJ5rrlMQa3g%3D%2F%24%28vid%29%2F"
                 data-desc="Peerless Wind Rated I-beam Tilt Mount"
                 data-img="https://testwpmp.imgix.net/https%3A%2F%2Fi5.walmartimages.com%2Fasr%2F95c7bbfd-2a71-4693-a78e-7f8674a09418_1.135ca2743c7e43d21f0920394b656d91.jpeg%3FodnHeight%3D450%26odnWidth%3D450%26odnBg%3Dffffff?w=400&h=300&fit=fill&bg=ffffff&s=e7862696150473efd4e0493658b1707f"
                 data-ispscell="true"></div>
        </a>


        <p class="product-title" style="font-size:90%;font-weight:bold;color:#555;">Peerless Wind Rated I-beam Tilt
            Mount</p>

        <p class="product-details">
            <span style="font-size:90%;font-weight:bold;">$1,429.99</span>
            <span style="margin-left:5px; font-size:90%; color:#555;">Walmart </span>
        </p>
    </div>
    <img src="/md5/9a/9a913d3d3f0f6f8bed26bc6b30e213dc_bottom-arrow-e0e0e0.png" class="arr_pointer" id="arr_20">
</div>


<div class="col-lg-3 col-sm-4 col-xs-6 products mb" id="product_21">
    <div class="product-tile">
        <a href="javascript:void(0)" class="product-link">


            <div class="product-img">
                <div class="darken"></div>

                <div class="upper-right-orange" style="text-align:right; right:0px;">
                    Earn 479 PTS
                </div>
                <img
                    src="https://testwpmp.imgix.net/http%3A%2F%2Fi5.walmartimages.com%2Fasr%2F20a76b2a-71d0-4be5-9690-6415b50c3dad_1.34e675a18f88e6e24617342f6737b689.jpeg%3FodnHeight%3D450%26odnWidth%3D450%26odnBg%3Dffffff?w=400&h=300&fit=fill&bg=ffffff&s=893c2455cd6e85cdf5ca21a89d870899"
                    class="img-responsive pr-img"/>
            </div>
            <div class="i_p_d"
                 data-href="/emp/u/a.do?afsrc=1&cell=UwwF9c0mcxFTIZYQcp3n&src=NMID_432347038756083663&src=PG_SHOP_BY_PRODUCT&src=PVID_185daebdf1a6d34567a1818ae28fc97a&src=MOD_PRODUCTS&src=PSID_27136283&cturi=http%3A%2F%2Fr.popshops.com%2Fr%2Fj%257CSTZGNTE0TEZwb0puVYLBd75OM1czaH2UISxh65Tisz8nCG10Yief_eyW5SvCVcIpGDbuoxGwLo9yxR5pECR1QGH_5r5Bv6r4530HRK2QHTKjlRjm3i3jw51UVuIA0Bmylq-ajEZjLPixhEJKiyM4B6S0qU4mSsnV0bWnpwXzOjCR6NRQJPfyPHUz_NwiKYCz3FEHPJQYgW59y1TeM9HKKVhd2CU6TGVOPN4Kr9YUyp2pFqJ4mZ1dkzSmu5hGg7L4saZy33CE4uAUAoXe%3D%2F%24%28vid%29%2F"
                 data-desc="Samsung RMC-QTD1 QWERTY Remote"
                 data-img="https://testwpmp.imgix.net/http%3A%2F%2Fi5.walmartimages.com%2Fasr%2F20a76b2a-71d0-4be5-9690-6415b50c3dad_1.34e675a18f88e6e24617342f6737b689.jpeg%3FodnHeight%3D450%26odnWidth%3D450%26odnBg%3Dffffff?w=400&h=300&fit=fill&bg=ffffff&s=893c2455cd6e85cdf5ca21a89d870899"
                 data-ispscell="true"></div>
        </a>


        <p class="product-title" style="font-size:90%;font-weight:bold;color:#555;">Samsung RMC-QTD1 QWERTY Remote</p>

        <p class="product-details">
            <span style="font-size:90%;font-weight:bold;">$59.95</span>
            <span style="margin-left:5px; font-size:90%; color:#555;">Walmart </span>
        </p>
    </div>
    <img src="/md5/9a/9a913d3d3f0f6f8bed26bc6b30e213dc_bottom-arrow-e0e0e0.png" class="arr_pointer" id="arr_21">
</div>


<div class="col-lg-3 col-sm-4 col-xs-6 products mb" id="product_22">
    <div class="product-tile">
        <a href="javascript:void(0)" class="product-link">


            <div class="product-img">
                <div class="darken"></div>

                <div class="upper-right-orange" style="text-align:right; right:0px;">
                    Earn 63,984 PTS
                </div>
                <img
                    src="https://testwpmp.imgix.net/http%3A%2F%2Fi5.walmartimages.com%2Fasr%2F8c04c03b-1d40-4455-9e66-1b2eb688ecf0_1.7c7250ed04039af3790ce2f1839028f6.jpeg%3FodnHeight%3D450%26odnWidth%3D450%26odnBg%3Dffffff?w=400&h=300&fit=fill&bg=ffffff&s=b49580504322b4e92e01dba0617c1550"
                    class="img-responsive pr-img"/>
            </div>
            <div class="i_p_d"
                 data-href="/emp/u/a.do?afsrc=1&cell=UwwF9c0mcxFTIZYQcp3n&src=NMID_432347038756083663&src=PG_SHOP_BY_PRODUCT&src=PVID_185daebdf1a6d34567a1818ae28fc97a&src=MOD_PRODUCTS&src=PSID_374398512&cturi=http%3A%2F%2Fr.popshops.com%2Fr%2Fj%257Ccnp3YXpQb24xdE9I938Z56z9V_0qIRdwHHhvCGTjskSSJyi-1jW8ORDsKwTb8ayrLyeZuYdvcsi8RH22QSI4pVFuXVMuVUSqXLbHPXyhohMRvO5Kce-Z0Drmk_SKdQ8QjYt5ehEBR__L5Dxz4n7fBvDatbbdLnOLZhkFA_J2E63pKgSFmpgbxtWUfDHqyng8Nr9A95M6Vu6CqfsLCSkU3pPN6kdJjVVGpGCijqRe3e8vqcxgo-feODy8pKPwViBvSQWOdyM5CvajbD21%3D%2F%24%28vid%29%2F"
                 data-desc="Sony - Xbr X850d Series 85&quot; Class (84.5 Diag) - Led - 2160p - Smart - 3d - 4k Ultra Hd Tv - Black"
                 data-img="https://testwpmp.imgix.net/http%3A%2F%2Fi5.walmartimages.com%2Fasr%2F8c04c03b-1d40-4455-9e66-1b2eb688ecf0_1.7c7250ed04039af3790ce2f1839028f6.jpeg%3FodnHeight%3D450%26odnWidth%3D450%26odnBg%3Dffffff?w=400&h=300&fit=fill&bg=ffffff&s=b49580504322b4e92e01dba0617c1550"
                 data-ispscell="true"></div>
        </a>


        <p class="product-title" style="font-size:90%;font-weight:bold;color:#555;">Sony - Xbr X850d Series 85" Class
            (84.5 Diag) - Led - 2160p - Smart - 3d - 4k Ultra Hd Tv - Black</p>

        <p class="product-details">
            <span style="font-size:90%;font-weight:bold;">$7,998.00</span>
            <span style="margin-left:5px; font-size:90%; color:#555;">Walmart </span>
        </p>
    </div>
    <img src="/md5/9a/9a913d3d3f0f6f8bed26bc6b30e213dc_bottom-arrow-e0e0e0.png" class="arr_pointer" id="arr_22">
</div>


<div class="col-lg-3 col-sm-4 col-xs-6 products mb" id="product_23">
    <div class="product-tile">
        <a href="javascript:void(0)" class="product-link">


            <div class="product-img">
                <div class="darken"></div>

                <div class="upper-right-orange" style="text-align:right; right:0px;">
                    Earn 13,592 PTS
                </div>
                <img
                    src="https://testwpmp.imgix.net/https%3A%2F%2Fi5.walmartimages.com%2Fasr%2F12899b31-ae07-428a-9d29-3e5a5b3c5af0_1.1e187d9ac58e8d6038cea2c1ec2754c8.jpeg%3FodnHeight%3D450%26odnWidth%3D450%26odnBg%3Dffffff?w=400&h=300&fit=fill&bg=ffffff&s=85646a302e213b645ce29397c39116cf"
                    class="img-responsive pr-img"/>
            </div>
            <div class="i_p_d"
                 data-href="/emp/u/a.do?afsrc=1&cell=UwwF9c0mcxFTIZYQcp3n&src=NMID_432347038756083663&src=PG_SHOP_BY_PRODUCT&src=PVID_185daebdf1a6d34567a1818ae28fc97a&src=MOD_PRODUCTS&src=PSID_143539308&cturi=http%3A%2F%2Fr.popshops.com%2Fr%2Fj%257CZHdwY2d2bmw0T2NDbyxBbV5vHJlJtWmbWWbAgZr_-IdtArj3oYTqfeXgRKCWgn0JeA2DZojzFe6gn542Lv5XaxwO9uvvuVaIuAoyzPpu4xsbkGuIpHSBydl_2CL69x1HcL5Q91Xb_fVmTcwDbnO-FRIrmLF0fYxcRNv3KrDh71P3Z7w8Sb9Div-6m3WPrUOXPzZrcTekkB02ZYw6x99SoBd5Vq3xLNMUzP2YxrSAjdo9TymwCF0WMmEPeJPxFBjHv1XVN4JJ9I_zb3Uw%3D%2F%24%28vid%29%2F"
                 data-desc="Samsung 55&quot; Class Smart 3D LED 1080p HDTV with3D Glasses"
                 data-img="https://testwpmp.imgix.net/https%3A%2F%2Fi5.walmartimages.com%2Fasr%2F12899b31-ae07-428a-9d29-3e5a5b3c5af0_1.1e187d9ac58e8d6038cea2c1ec2754c8.jpeg%3FodnHeight%3D450%26odnWidth%3D450%26odnBg%3Dffffff?w=400&h=300&fit=fill&bg=ffffff&s=85646a302e213b645ce29397c39116cf"
                 data-ispscell="true"></div>
        </a>


        <p class="product-title" style="font-size:90%;font-weight:bold;color:#555;">Samsung 55" Class Smart 3D LED 1080p
            HDTV with3D Glasses</p>

        <p class="product-details">
            <span style="font-size:90%;font-weight:bold;">$1,699.00</span>
            <span style="margin-left:5px; font-size:90%; color:#555;">Walmart </span>
        </p>
    </div>
    <img src="/md5/9a/9a913d3d3f0f6f8bed26bc6b30e213dc_bottom-arrow-e0e0e0.png" class="arr_pointer" id="arr_23">
</div>


<div class="col-lg-3 col-sm-4 col-xs-6 products mb" id="product_24">
    <div class="product-tile">
        <a href="javascript:void(0)" class="product-link">


            <div class="product-img">
                <div class="darken"></div>

                <div class="upper-right-orange" style="text-align:right; right:0px;">
                    Earn 599 PTS
                </div>
                <img
                    src="https://testwpmp.imgix.net/http%3A%2F%2Fwww.homedepot.com%2Fcatalog%2FproductImages%2F1000%2Fcc%2Fcc44a271-eee6-4fd0-9ab3-4a6ed4ebf578_1000.jpg?w=400&h=300&fit=fill&bg=ffffff&s=d1e915250aa66ec29d746191eede5ce1"
                    class="img-responsive pr-img"/>
            </div>
            <div class="i_p_d"
                 data-href="/emp/u/a.do?afsrc=1&cell=7oJmDwbt8HVACAne3owq&src=NMID_432347038756083663&src=PG_SHOP_BY_PRODUCT&src=PVID_185daebdf1a6d34567a1818ae28fc97a&src=MOD_PRODUCTS&src=PSID_207230219&cturi=http%3A%2F%2Fr.popshops.com%2Fr%2Fj%257COVdReDg2UDM2UWRMNjbU0L7Hv04NZGhFLaWBlCTkVkBn09G0o0VjbjZKjGgQWikTxIPX6BnGrzrBLWp6W33kB130OYy0i6qtQXjJrDkH_2ailXylwfgQXwU5rxFCI23piXCxqxDk6-D_Jc6HvtI09iv9RPeCsyVsxDAuyutXvt_rzZqdI4rUq2ijh1O2ooxNYz6VII4j1CWGUpyo0UusL16QCZ2AeDR159PMjrwVBegkgyqXKFJ5Uhf0T_MKaigGFqCGayRBy7N01X_K%3D%2F%24%28vid%29%2F"
                 data-desc="39&quot; Class 720p LED HDTV - SE39HC"
                 data-img="https://testwpmp.imgix.net/http%3A%2F%2Fwww.homedepot.com%2Fcatalog%2FproductImages%2F1000%2Fcc%2Fcc44a271-eee6-4fd0-9ab3-4a6ed4ebf578_1000.jpg?w=400&h=300&fit=fill&bg=ffffff&s=d1e915250aa66ec29d746191eede5ce1"
                 data-ispscell="true"></div>
        </a>


        <p class="product-title" style="font-size:90%;font-weight:bold;color:#555;">39" Class 720p LED HDTV - SE39HC</p>

        <p class="product-details">
            <span style="font-size:90%;font-weight:bold;">$299.99</span>
            <span style="margin-left:5px; font-size:90%; color:#555;">Home Depot </span>
        </p>
    </div>
    <img src="/md5/9a/9a913d3d3f0f6f8bed26bc6b30e213dc_bottom-arrow-e0e0e0.png" class="arr_pointer" id="arr_24">
</div>
</div>

<div style="text-align:center;">
    <button id="show-more" style="width:40%" class="btn" data-loading-text="Loading...">Show More Products</button>
</div>


<script>
    $(document).ready(function () {
        mp_shopping.carryOverSrc = "";
        mp_shopping.page_name = "PG_SHOP_BY_PRODUCT";
        mp_shopping.product_list = "All Products";

        mp_products.cat_id = "";
        mp_products.sub_cat_id = "";
        mp_products.brand = "eBay,Macys,HomeDepot,HSN,etsy,Walmart,LivingSocial,Groupon,DisneyShopping,QVC,Staples,Amazon,OfficeDepot,Kohls,Zulily,Target,JCPenney,OldNavy,BestBuy,Overstock,";
        mp_products.setProductData([
            {"imageUrl": "https://testwpmp.imgix.net/http%3A%2F%2Fwww.officedepot.com%2Fpictures%2Fus%2Fod%2Fsk%2Flg%2F458049_sk_lg.jpg?w=400&h=300&fit=fill&bg=ffffff&s=a5195c24b5e7dff3f9cf42e05184254f", "merchant": "Office Depot&reg; and OfficeMax&reg;", "offerCount": 1, "percentBack": "2.0% Back", "isPointlessAd": true, "rawImageUrl": "http://www.officedepot.com/pictures/us/od/sk/lg/458049_sk_lg.jpg", "type": "popshops", "rawproducturl": "http://r.popshops.com/r/j%7CTXJTaXZmQ09Rc3lyR8JDV94Wg5kAfIApPAyLlRJ8yHl528yS6nrvq54h8AFkzPF2bvSiD_ihTyknVJNTdcyxHxL8Iip-x48CAdOF3rl2VOtq_VhbhFBgd4idUH2I0fvxX93yNmjeppd1lhxH8eU-C0siKEvb649fLDvlMXV2RGI5wu19Xr6FZICbzvlqGMiPW-aFJxSb6jQLiGbmlA3XyEQAsFlVY6ZsqEdu7eG5enHbCXDtDp_Ijmsw8K8CuGbMSXfouyAnttiptSL4=", "variant": "product", "totalOffers": 1, "productId": 73445478, "price": "$4,699.99", "description": "Full HD 1080p The realistic detail of Full HD images invites you to enjoy a viewing experience that redefines reality. Micro DimmingAdvanced picture contrast technology controls and enhances LED screen brightness for even whiter whites and deeper blacks. Clear Motion Rate 480A Clear Motion Rate of 480 is a remarkable level of motionclarity. TVs with this CMR can display action ndash;packed movement with in ndash;depth sharpness clarity and contrast. Clear Motion Rate was developed to accurately measure how well an LCD or LED TV can depict fast ndash;moving images. Previously motion ndash;clarity was calculated by the frame refresh rate alone. But CMR offer a more complete measure by calculating 3 factors: frame refresh rate image processor speed and backlight technology. SMART TV 2.0The Samsung Smart TV finds the movies and TV shows you like ndash; and more. Navigate within the 5 Smart Hub content panels. Easily discover movies shows and social posts with less searching and more watching. Dual Core ProcessorMakes multitasking fast. Browse the web faster and quickly download Apps with this feature. Smart HubOur new interface organizes your entertainment and content into 5 convenient panels. On TV Movies and TV Shows Social Apps and a panel for your Photos Videos and Music. Full Web Browser All the benefits of Full Web Browsing right on your TV. From social sites like Facebook (R) and Twitter (R) to news weather entertainment blogs and more. Discover even more content possibilities with your Smart TV.S ndash;RecommendationDiscover what you want to watch without surfing channels just by asking your TV. It will respond to your voice and find a selection of customized content options based on your preferences. Ask the TV for recommendations while you're watching TV for example `what football games are on?` Or visit the full S ndash;Recommendation hub to find new things to watch. SMART INTERACTION 2.0 Speaking into the built ndash;in microphone on the Smart Touch Remote Control along with hand gestures* all control your TV in new and unexpected ways. Use S ndash;Recommendation with voice interaction to ask your TV to find things to watch and get program suggestions.2D AND 3D IN FULL HDExperience vivid lifelike detail and clarity in both 2D and immersing 3D.SMART CONNECTIVITYAllShareTMSamsung AllShare Play lets you and your family seamlessly share your content across your DLNA ndash;connected Samsung devices without the need for a network cables or a connecting device. Samsung Smart View (Clone View Only)Stream content playing on your TV straight to your mobile device so you never miss a second of the action. CONNECTIONSHDMI (R)High ndash;quality single ndash;cable digital audio/video interface for connecting the TV to a digital cable box satellite box DVD and Blu ndash;ray Disc (R) Player PC computers PC portable devices newgeneration tablets and devices featuring the HDMI (R) output. CEC capability permits the control of the TV and component from one remote control handset. USBConnects a variety of computer audio and video devices to the TV. USB movie capability allows the streaming of video from storage devices cameras camcorders and USB drives. Wi ndash;Fi Built ndash;inNo additional equipment is needed to connect with an existing wireless router in your home network and start accessing Samsung Apps or other Smart TV features. Component inAnalog video connection transmits HD RGB video using three RCA connections. Shared Composite in (AV)Analog video connection transmits video using one RCA connection. AUDIODolby (R) Digital Plus / Dolby (R) Pulse Optimizes the TV sound quality when viewing and listening to Internet movies Internet music and other content played back from wired or wireless mobile phones PCs and tablet devices. DTS Premium Sound #124; 5.1 trade; decoding with DTS Studio Sound trade; processing Delivers immersive 5.1 surround sound from any DTSencoded content and converts any two ndash;channel.", "calculatedPointsText": "14,099 PTS", "productUrl": "/emp/u/a.do?afsrc=1&cell=R_7pToCKbXgOM6TP6a4a&src=NMID_432347038756083663&src=PG_SHOP_BY_PRODUCT&src=PVID_185daebdf1a6d34567a1818ae28fc97a&src=MOD_PRODUCTS&src=PSID_73445478&cturi=http%3A%2F%2Fr.popshops.com%2Fr%2Fj%257CTXJTaXZmQ09Rc3lyR8JDV94Wg5kAfIApPAyLlRJ8yHl528yS6nrvq54h8AFkzPF2bvSiD_ihTyknVJNTdcyxHxL8Iip-x48CAdOF3rl2VOtq_VhbhFBgd4idUH2I0fvxX93yNmjeppd1lhxH8eU-C0siKEvb649fLDvlMXV2RGI5wu19Xr6FZICbzvlqGMiPW-aFJxSb6jQLiGbmlA3XyEQAsFlVY6ZsqEdu7eG5enHbCXDtDp_Ijmsw8K8CuGbMSXfouyAnttiptSL4%3D%2F%24%28vid%29%2F", "name": "Samsung 75\" Class 1080p 120Hz 3D LED HDTV - UN75F6400AFXZA", "brand": "OfficeDepot", "merchantId": 50145, "points": 14099, "minPrice": "$4,699.99"},
            {"imageUrl": "https://testwpmp.imgix.net/http%3A%2F%2Fi5.walmartimages.com%2Fasr%2Fb607b0df-86be-4f45-88b8-887a0128c957_1.df77ac29579a7bf238ef4031430d7c4c.jpeg%3FodnHeight%3D450%26odnWidth%3D450%26odnBg%3Dffffff?w=400&h=300&fit=fill&bg=ffffff&s=96b8f752ae703263873fdd59d720ac9a", "merchant": "Walmart", "offerCount": 1, "percentBack": "5.4% Back", "isPointlessAd": true, "rawImageUrl": "http://i5.walmartimages.com/asr/b607b0df-86be-4f45-88b8-887a0128c957_1.df77ac29579a7bf238ef4031430d7c4c.jpeg?odnHeight=450&odnWidth=450&odnBg=ffffff", "type": "popshops", "rawproducturl": "http://r.popshops.com/r/j%7Cdk1TMHpuT0ZFYXd6mGuSeiSnWBvq3VbrBzas-FqOrpT3NX2SwTBImSP1ArWT3l15NzGrWHXxwtxzs0SHuSqKvbtLdN3AMcidfbhZ3BN4rvIFC-nQoewsVp3kRRuh_nyDrt_bZh6-dYawKPNhUbw3cNSzo1ziuwB6Nc9n-EYHEVkbMtRjURlwulYa8DEPmYjtVIuCgaw08H8L4Cq2CrzXxy5psj1FG3Ahaic28yWB-0bDJdM9Nxq0_R6couHtkgWzy-DjNcJyCOQFjhRb=", "variant": "product", "totalOffers": 1, "productId": 186682350, "price": "$1,299.89", "description": "Enjoy all your favorite content on the LG 60 Class 1080p Smart LED HDTV. LG boasts exceptional picture quality that is further enhanced by the Triple XD Engine, which processes images with even greater precision. The latest Triple XD Engine enables more natural color expression, deeper contrast and more refined motion so that viewers can enjoy a more lifelike picture. Whatever you're watching, the LG Virtual Surround mode enhances the experience, delivering an expansive sound field so the action seems to come from all around you. Your favorite shows will be even better on the LG 60 Class 1080p Smart LED HDTV. Color: Black.", "calculatedPointsText": "10,399 PTS", "productUrl": "/emp/u/a.do?afsrc=1&cell=UwwF9c0mcxFTIZYQcp3n&src=NMID_432347038756083663&src=PG_SHOP_BY_PRODUCT&src=PVID_185daebdf1a6d34567a1818ae28fc97a&src=MOD_PRODUCTS&src=PSID_186682350&cturi=http%3A%2F%2Fr.popshops.com%2Fr%2Fj%257Cdk1TMHpuT0ZFYXd6mGuSeiSnWBvq3VbrBzas-FqOrpT3NX2SwTBImSP1ArWT3l15NzGrWHXxwtxzs0SHuSqKvbtLdN3AMcidfbhZ3BN4rvIFC-nQoewsVp3kRRuh_nyDrt_bZh6-dYawKPNhUbw3cNSzo1ziuwB6Nc9n-EYHEVkbMtRjURlwulYa8DEPmYjtVIuCgaw08H8L4Cq2CrzXxy5psj1FG3Ahaic28yWB-0bDJdM9Nxq0_R6couHtkgWzy-DjNcJyCOQFjhRb%3D%2F%24%28vid%29%2F", "name": "LG 60\" Class 1080p Smart LED Hdtv - 60LF6100", "brand": "Walmart", "merchantId": 50195, "points": 10399, "minPrice": "$1,299.89"},
            {"imageUrl": "https://testwpmp.imgix.net/http%3A%2F%2Fwww.officedepot.com%2Fpictures%2Fus%2Fod%2Fsk%2Flg%2F888995_sk_lg.jpg?w=400&h=300&fit=fill&bg=ffffff&s=cfb7236f64c15f3c4669901d3af5c331", "merchant": "Office Depot&reg; and OfficeMax&reg;", "offerCount": 1, "percentBack": "2.0% Back", "isPointlessAd": true, "rawImageUrl": "http://www.officedepot.com/pictures/us/od/sk/lg/888995_sk_lg.jpg", "type": "popshops", "rawproducturl": "http://r.popshops.com/r/j%7CRno4OEI4ZDQzSGhishMkkJ6q1pHLFMLa_mfQi9Wz_JqfxWVTnRYfg8e41xpGn8k_TSru77FA8TtpKM9wFWIdrHmFYjqwC-S4an7GyP79-uYoJ-6yEnGddfo5ZW8t449Zs0sADWQHZc3m8qRHR3_XBChvIz7eD-d_OCxoVSPdbZIFcnI-4Lv35A_663W5fR2GnHD4xa7V-zmNfHjtMEtc8ShfLdDvIsYbfKE1Eztc7YVF0mQq2lfiUT2YY65TfhlOVFGovhhqca0PjN5f=", "variant": "product", "totalOffers": 1, "productId": 154483569, "price": "$8,248.99", "description": "NEC MultiSync V801-DRD - 80\" - commercial use - V Series LED-backlit LCD flat panel display - 1080p (FullHD) - edge-lit - with Single Board Computer OPS-DRD", "calculatedPointsText": "24,746 PTS", "productUrl": "/emp/u/a.do?afsrc=1&cell=R_7pToCKbXgOM6TP6a4a&src=NMID_432347038756083663&src=PG_SHOP_BY_PRODUCT&src=PVID_185daebdf1a6d34567a1818ae28fc97a&src=MOD_PRODUCTS&src=PSID_154483569&cturi=http%3A%2F%2Fr.popshops.com%2Fr%2Fj%257CRno4OEI4ZDQzSGhishMkkJ6q1pHLFMLa_mfQi9Wz_JqfxWVTnRYfg8e41xpGn8k_TSru77FA8TtpKM9wFWIdrHmFYjqwC-S4an7GyP79-uYoJ-6yEnGddfo5ZW8t449Zs0sADWQHZc3m8qRHR3_XBChvIz7eD-d_OCxoVSPdbZIFcnI-4Lv35A_663W5fR2GnHD4xa7V-zmNfHjtMEtc8ShfLdDvIsYbfKE1Eztc7YVF0mQq2lfiUT2YY65TfhlOVFGovhhqca0PjN5f%3D%2F%24%28vid%29%2F", "name": "V801 80IN LED MON 19X10 WLS OPS-DRD", "brand": "OfficeDepot", "merchantId": 50145, "points": 24746, "minPrice": "$8,248.99"},
            {"imageUrl": "https://testwpmp.imgix.net/http%3A%2F%2Fi5.walmartimages.com%2Fasr%2F2a8a37d6-9d39-4a83-94f8-6b73ff9f2d38_1.8ba9582bf7039fc3b3c77e40dafb3e35.jpeg%3FodnHeight%3D450%26odnWidth%3D450%26odnBg%3Dffffff?w=400&h=300&fit=fill&bg=ffffff&s=1c035a348e85c9ed17abda2d3931cf64", "merchant": "Walmart", "offerCount": 1, "percentBack": "5.4% Back", "isPointlessAd": true, "rawImageUrl": "http://i5.walmartimages.com/asr/2a8a37d6-9d39-4a83-94f8-6b73ff9f2d38_1.8ba9582bf7039fc3b3c77e40dafb3e35.jpeg?odnHeight=450&odnWidth=450&odnBg=ffffff", "type": "popshops", "rawproducturl": "http://r.popshops.com/r/j%7CYjYwYWJZc2lUODdvB3-8k-ts2WK3TDVgqSZuwZWoB_28ZM5l-UHsY5_tT4w49-0j5FR3MWoxFQVHrJlYTaBExYMmpuN5VMZ0-gBLI7bYheIxIWVjPuJPWzcL2wzqQNpyMQcJ-Uhs1wpv3mM-Kl3y29an6JdB3nuxtZAeyUiOEblYzxr6rs04MohSMz6RDpfaYYqCesKKGlBAEExW0CDabT4YLf6oT4sspsTXEcyqhiDYYsmWz2jQnE13uqPWUri660ui8QHnJGuLwOsE=", "variant": "product", "totalOffers": 1, "productId": 154413690, "price": "$340.00", "description": "Features Integrated digital tuner with ATSC and Clear QAM 1366 x 768 native resolution Connections - 3-HDMI, component, composite, RCA L/R stereo, PC, coaxial digital audio out, 3.5mm stereo in and out DVD player supports DVD, CD-DA, CD-R/RW, DVD-R/RW, and MP3, JPEG and WMA file formats 6.5 ms response time 1,000,1 contrast ratio Brightness 230cd/m2 VESA mount pattern 100 x 200 Panel with stand - 29.56 W x 20.13 H x 7.9 D in.", "calculatedPointsText": "2,720 PTS", "productUrl": "/emp/u/a.do?afsrc=1&cell=UwwF9c0mcxFTIZYQcp3n&src=NMID_432347038756083663&src=PG_SHOP_BY_PRODUCT&src=PVID_185daebdf1a6d34567a1818ae28fc97a&src=MOD_PRODUCTS&src=PSID_154413690&cturi=http%3A%2F%2Fr.popshops.com%2Fr%2Fj%257CYjYwYWJZc2lUODdvB3-8k-ts2WK3TDVgqSZuwZWoB_28ZM5l-UHsY5_tT4w49-0j5FR3MWoxFQVHrJlYTaBExYMmpuN5VMZ0-gBLI7bYheIxIWVjPuJPWzcL2wzqQNpyMQcJ-Uhs1wpv3mM-Kl3y29an6JdB3nuxtZAeyUiOEblYzxr6rs04MohSMz6RDpfaYYqCesKKGlBAEExW0CDabT4YLf6oT4sspsTXEcyqhiDYYsmWz2jQnE13uqPWUri660ui8QHnJGuLwOsE%3D%2F%24%28vid%29%2F", "name": "Sansui LE3216D 32in D-led Lcd Tv/dvd Combo Mntr 720p Hdtv Hair Line Black", "brand": "Walmart", "merchantId": 50195, "points": 2720, "minPrice": "$340.00"},
            {"imageUrl": "https://testwpmp.imgix.net/http%3A%2F%2Fi5.walmartimages.com%2Fasr%2F11c60513-8b0e-4808-8ca1-64b9866d0915_1.12dd64803f007aeaf3c2367de92bb27a.jpeg%3FodnHeight%3D450%26odnWidth%3D450%26odnBg%3Dffffff?w=400&h=300&fit=fill&bg=ffffff&s=d8658cd9df61f2d463b6591773a6e822", "merchant": "Walmart", "offerCount": 1, "percentBack": "5.4% Back", "isPointlessAd": true, "rawImageUrl": "http://i5.walmartimages.com/asr/11c60513-8b0e-4808-8ca1-64b9866d0915_1.12dd64803f007aeaf3c2367de92bb27a.jpeg?odnHeight=450&odnWidth=450&odnBg=ffffff", "type": "popshops", "rawproducturl": "http://r.popshops.com/r/j%7CM0YzR0xrVlBheVZX3fTOTYcKgr3VrZzmAjRvMr2es2ZX0Zz0F1dwQmD2-v-U6X1BmiTgT1WgEm8S3nQKQRm55gVZ9x3sxDuSXqpYTrcXI5HKFUqKsPQOsAYE02Yw60ADkMhxT7aPwZUEM2MOfdp9lWRu7Nv7ix_q8aheCFxqZzbIwjaqYTclZjpiNqnKTRn03l5PPohzPpuVuk2Yf-pJECP7sXe6Y4SMJ15YqRMNgL5jSqKFCo45f-1SIWJLfiGHC9tqD1TpWpX17HXN=", "variant": "product", "totalOffers": 1, "productId": 26967242, "price": "$1,259.99", "description": "PE2909: Features: -Tilt mount-Corrosion resistant-Wind rated up to 90 mph, elevation 2.37 and category D-Fixed incremental tilt with angle settings at 0 degrees, 2 degrees, 5 degrees, 10 degrees or 15 degrees-Up to 8 of horizontal positioning-Hook-and-hang design for simplified installation-VESA up to 600 x 400mm-Tilt: +15 / -5-Swivel yaw: 360 degrees-Universal mounting pattern size: 17.67 H x 28.39 W-Distance from ceiling: 15.02 -Weight capacity: 200 lbs. Includes: -Includes security hardware. Color/Finish: -Finish: Powder coat. Dimensions: -Pole length: 12 -Overall dimensions: 30.75 H x 24.44 W, 71 lbs.", "calculatedPointsText": "10,079 PTS", "productUrl": "/emp/u/a.do?afsrc=1&cell=UwwF9c0mcxFTIZYQcp3n&src=NMID_432347038756083663&src=PG_SHOP_BY_PRODUCT&src=PVID_185daebdf1a6d34567a1818ae28fc97a&src=MOD_PRODUCTS&src=PSID_26967242&cturi=http%3A%2F%2Fr.popshops.com%2Fr%2Fj%257CM0YzR0xrVlBheVZX3fTOTYcKgr3VrZzmAjRvMr2es2ZX0Zz0F1dwQmD2-v-U6X1BmiTgT1WgEm8S3nQKQRm55gVZ9x3sxDuSXqpYTrcXI5HKFUqKsPQOsAYE02Yw60ADkMhxT7aPwZUEM2MOfdp9lWRu7Nv7ix_q8aheCFxqZzbIwjaqYTclZjpiNqnKTRn03l5PPohzPpuVuk2Yf-pJECP7sXe6Y4SMJ15YqRMNgL5jSqKFCo45f-1SIWJLfiGHC9tqD1TpWpX17HXN%3D%2F%24%28vid%29%2F", "name": "Peerless Wind Rated Concrete Ceiling Tilt Mount", "brand": "Walmart", "merchantId": 50195, "points": 10079, "minPrice": "$1,259.99"},
            {"price": "From $2,509.99 at 2 Stores", "imageUrl": "https://testwpmp.imgix.net/http%3A%2F%2Fwww.homedepot.com%2Fcatalog%2FproductImages%2F1000%2F65%2F65b5fdae-efec-4016-99c8-86284d3e848c_1000.jpg?w=400&h=300&fit=fill&bg=ffffff&s=d7965418373c7bc6a0717a15b8ea2e36", "description": "The Samsung 75\" Class 1080p 120Hz LED Smart HDTV in Black (UN75J6300AFXZA) offers an entertainment experience with greater clarity and a fuller spectrum of color. The resolution of a 1080P Full HD is twice the standard HDTV giving you more details when viewing, gaming and more. And you've finally got that smart TV you've wanted that opens the gateway to more movies, shows, apps, and everything else you're looking for in entertainment. Add to that the Quad Core Processor and experience truly fluid browsing and faster control. There is so much more you can unlock with this Samsung TV, you'll never want to leave your home. Size: 75\". Color: Black.", "name": "Samsung UN75J6300 75\" Class 1080p Smart LED HDTV", "offerCount": 2, "rawImageUrl": "http://www.homedepot.com/catalog/productImages/1000/65/65b5fdae-efec-4016-99c8-86284d3e848c_1000.jpg", "type": "popshops", "totalOffers": 2, "minPrice": "$2,509.99", "productId": 187806413},
            {"price": "From $159.99 at 2 Stores", "imageUrl": "https://testwpmp.imgix.net/http%3A%2F%2Fimages.qvc.com%2Fis%2Fimage%2Fe%2F62%2Fe264062.001%3F%24uslarge%24?w=400&h=300&fit=fill&bg=ffffff&s=e945c4c782920b0c16eb8ce5e2a26a92", "description": "Package deal. Get a full entertainment experience from one sleek unit with this LED HDTV and DVD player. Flaunting a 22\" diagonal widescreen LED display with Full HD 1920x1080 resolution and a 1,000:1 contrast ratio, it's the perfect device for watching can't-miss shows and screening the latest flicks on DVD. But that's not all it's perfect for. The NTD-2254's built-in SD/MMC memory card slot means you can use the HDTV to see a jumbo-sized slideshow of your digital photos. An HDMI input expands its versatility even more, allowing you to enjoy a top-quality picture while you're watching Blu-ray Discs, playing video games, and more. From Naxa. HDTV programming, where available, may require a subscription to a digital cable or satellite service. Contact your local provider for details. Not all DVD-R/-RW and DVD+R/+RW discs are compatible with all DVD-R/-RW and DVD+R/+RW players. Contact the manufacturer for further information.", "name": "Naxa 22\" Class 1080p LED HDTV with Built-in DVDPlayer, Tuner", "offerCount": 2, "rawImageUrl": "http://images.qvc.com/is/image/e/62/e264062.001?$uslarge$", "type": "popshops", "totalOffers": 2, "minPrice": "$159.99", "productId": 60230830},
            {"imageUrl": "https://testwpmp.imgix.net/https%3A%2F%2Fi5.walmartimages.com%2Fasr%2F79a43412-dbf4-4a25-8121-1e9d1590d2cc_1.5da5cd6008aed5f2c7e69be076198948.jpeg%3FodnHeight%3D450%26odnWidth%3D450%26odnBg%3Dffffff?w=400&h=300&fit=fill&bg=ffffff&s=abe0bdbf6c9e10c47a99494e2a436f38", "merchant": "Walmart", "offerCount": 1, "percentBack": "5.4% Back", "isPointlessAd": true, "rawImageUrl": "https://i5.walmartimages.com/asr/79a43412-dbf4-4a25-8121-1e9d1590d2cc_1.5da5cd6008aed5f2c7e69be076198948.jpeg?odnHeight=450&odnWidth=450&odnBg=ffffff", "type": "popshops", "rawproducturl": "http://r.popshops.com/r/j%7CTmpFcjBaMnhhdXRQNh-uK7GWOvinKfmw2FZ-VxqN0M5CtNpwHbL6AMdiS1u-n2_sLjXhUaV_tu9iogAZdt8fSaA8LG9cE4U2algbZiE7i6wljEZ38y-LClX8NBHzwLPnjSyXLjvYIN-q63bvouY7BtOz1HXk1U8AF10pz6WDa_ttjX7jKEtJIvtnpdYwuKQb0EjiOk2PVKA4KTaaCoAmwLBM4SyJw5pTTArwv-6cuFT70Ac7oHyDoDwbcIkXvbKXkoc5zXLL4kIgoSTX=", "variant": "product", "totalOffers": 1, "productId": 109664258, "price": "$2,199.00", "description": "The Sharp Aquos LC-70UD1U is a THX certified 70 TV with a native resolution of 3840 x 2160 and 4K up-scaling for lower resolution sources This TV features a 120Hz refresh rate to minimize distortion on fast-moving images As a Smart TV this model feat.", "calculatedPointsText": "17,592 PTS", "productUrl": "/emp/u/a.do?afsrc=1&cell=UwwF9c0mcxFTIZYQcp3n&src=NMID_432347038756083663&src=PG_SHOP_BY_PRODUCT&src=PVID_185daebdf1a6d34567a1818ae28fc97a&src=MOD_PRODUCTS&src=PSID_109664258&cturi=http%3A%2F%2Fr.popshops.com%2Fr%2Fj%257CTmpFcjBaMnhhdXRQNh-uK7GWOvinKfmw2FZ-VxqN0M5CtNpwHbL6AMdiS1u-n2_sLjXhUaV_tu9iogAZdt8fSaA8LG9cE4U2algbZiE7i6wljEZ38y-LClX8NBHzwLPnjSyXLjvYIN-q63bvouY7BtOz1HXk1U8AF10pz6WDa_ttjX7jKEtJIvtnpdYwuKQb0EjiOk2PVKA4KTaaCoAmwLBM4SyJw5pTTArwv-6cuFT70Ac7oHyDoDwbcIkXvbKXkoc5zXLL4kIgoSTX%3D%2F%24%28vid%29%2F", "name": "Sharp 70\" THX 4K Ultra HD LED HDTV, Smart, 3D", "brand": "Walmart", "merchantId": 50195, "points": 17592, "minPrice": "$2,199.00"},
            {"imageUrl": "https://testwpmp.imgix.net/http%3A%2F%2Fwww.officedepot.com%2Fpictures%2Fus%2Fod%2Fsk%2Flg%2F534659_sk_lg.jpg?w=400&h=300&fit=fill&bg=ffffff&s=c8c888a214a89dd5dce12613463e83eb", "merchant": "Office Depot&reg; and OfficeMax&reg;", "offerCount": 1, "percentBack": "2.0% Back", "isPointlessAd": true, "rawImageUrl": "http://www.officedepot.com/pictures/us/od/sk/lg/534659_sk_lg.jpg", "type": "popshops", "rawproducturl": "http://r.popshops.com/r/j%7Cc09qa2xlTGJrdmxz8Yvahh2z96OJ_stu0RLqVcjMIX7yd9qBe1Av8vWZL2kUZrHTiPinONchjWSikMaV_u2qFwGtnN16DAMK-U4PE0PwuN-VKM4aEMII8pfxxzx2-sYeiVMMSyM2w6DKUgFY6SXQ2ZJP0UYQqwuNvrP-AEu9rDqsKX1qdlyB3rsOtT7cYSqmqY2JHxf5Lc5ArxvImx0fCMQIlWC56vkiK_csj6k8LssgEk_nqpCX5K_za3N1utBubiDOCzvB4OqdPfTh=", "variant": "product", "totalOffers": 1, "productId": 189916231, "price": "$899.99", "description": "This J5200 Series Smart TV is loaded with features The Eco Sensor adjusts to to the brightness of the room to save energy while showing a clear picture DTS Premium Sound 51 will make you feel like you39re part of the action The screen mirroring featu.", "calculatedPointsText": "2,699 PTS", "productUrl": "/emp/u/a.do?afsrc=1&cell=R_7pToCKbXgOM6TP6a4a&src=NMID_432347038756083663&src=PG_SHOP_BY_PRODUCT&src=PVID_185daebdf1a6d34567a1818ae28fc97a&src=MOD_PRODUCTS&src=PSID_189916231&cturi=http%3A%2F%2Fr.popshops.com%2Fr%2Fj%257Cc09qa2xlTGJrdmxz8Yvahh2z96OJ_stu0RLqVcjMIX7yd9qBe1Av8vWZL2kUZrHTiPinONchjWSikMaV_u2qFwGtnN16DAMK-U4PE0PwuN-VKM4aEMII8pfxxzx2-sYeiVMMSyM2w6DKUgFY6SXQ2ZJP0UYQqwuNvrP-AEu9rDqsKX1qdlyB3rsOtT7cYSqmqY2JHxf5Lc5ArxvImx0fCMQIlWC56vkiK_csj6k8LssgEk_nqpCX5K_za3N1utBubiDOCzvB4OqdPfTh%3D%2F%24%28vid%29%2F", "name": "UN50J5200AFXZA 50\" (49.5\" Measured Diagonally) J5200 Series LED Smart TV with Full HD 1080P Wide Color Enhancer Full Web Browser Mobile Screen Mirroring and", "brand": "OfficeDepot", "merchantId": 50145, "points": 2699, "minPrice": "$899.99"},
            {"imageUrl": "https://testwpmp.imgix.net/http%3A%2F%2Fi5.walmartimages.com%2Fasr%2Fce23df7a-772a-4713-b90e-8550105d2e56_1.0e95c6107b4724de8dbca98eb3f7b536.jpeg%3FodnHeight%3D450%26odnWidth%3D450%26odnBg%3Dffffff?w=400&h=300&fit=fill&bg=ffffff&s=9be869519adec6e1bd6408a35c68a682", "merchant": "Walmart", "offerCount": 1, "percentBack": "5.4% Back", "isPointlessAd": true, "rawImageUrl": "http://i5.walmartimages.com/asr/ce23df7a-772a-4713-b90e-8550105d2e56_1.0e95c6107b4724de8dbca98eb3f7b536.jpeg?odnHeight=450&odnWidth=450&odnBg=ffffff", "type": "popshops", "rawproducturl": "http://r.popshops.com/r/j%7CT2ZEcjBtb1R5MWJj1IPP0iDO32CMf3kPXkYfbNNvDbjANIxMBMwWEuKGJ_Assz2SjgJDW6YiCESq_IepfApxL41H6BjvAgWZ1BKUmA_0bc7kmVbgIGUa_X5IIu-1SFuKemqTEzfCotgHT-5IMwnk22YlzgS-mP6eK4zK6VYnPsjluHX2eYlgmJ1FUUsGyHsdzaOenSGbItbD_zUfmHOdaQ-d4GD8FsPPPgbYOD-nL-QtwFGsFpjsS8PieJv0FJ3gmetI5JSLdEEyDouT=", "variant": "product", "totalOffers": 1, "productId": 1969298, "price": "$139.99", "description": "Lack the space for your dream HDTV? Then opt for the E246BV-FHD. This HDTV is manageably sized with a 23.6\" diagonal LED display. Yet with Full HD 1920x1080 resolution, 16.7 million colors, and a super-quick 5ms response time, it rivals the clarity and definition of one of its big brothers. Two HDMI ports allow for added peripheral support, and a USB port lets you view and hear content from your computer, smartphone, flash drive, and more. From Sceptre. With a TV that has a built-in high-definition tuner, HDTV may be received from broadcasting companies that transmit high-definition signals, or may require a subscription to a digital cable or satellite service to receive HDTV programming, where available. Contact your local cable or satellite provider for details and costs if you are interested in high-definition TV from your service provider.", "calculatedPointsText": "1,119 PTS", "productUrl": "/emp/u/a.do?afsrc=1&cell=UwwF9c0mcxFTIZYQcp3n&src=NMID_432347038756083663&src=PG_SHOP_BY_PRODUCT&src=PVID_185daebdf1a6d34567a1818ae28fc97a&src=MOD_PRODUCTS&src=PSID_1969298&cturi=http%3A%2F%2Fr.popshops.com%2Fr%2Fj%257CT2ZEcjBtb1R5MWJj1IPP0iDO32CMf3kPXkYfbNNvDbjANIxMBMwWEuKGJ_Assz2SjgJDW6YiCESq_IepfApxL41H6BjvAgWZ1BKUmA_0bc7kmVbgIGUa_X5IIu-1SFuKemqTEzfCotgHT-5IMwnk22YlzgS-mP6eK4zK6VYnPsjluHX2eYlgmJ1FUUsGyHsdzaOenSGbItbD_zUfmHOdaQ-d4GD8FsPPPgbYOD-nL-QtwFGsFpjsS8PieJv0FJ3gmetI5JSLdEEyDouT%3D%2F%24%28vid%29%2F", "name": "Sceptre E246BV-FHD 23.6\" Diag 1080P LED HDTV with 2 HDMI Ports", "brand": "Walmart", "merchantId": 50195, "points": 1119, "minPrice": "$139.99"},
            {"imageUrl": "https://testwpmp.imgix.net/https%3A%2F%2Fi5.walmartimages.com%2Fasr%2Fc51eac61-a6db-4352-bf1d-0f775667db8d_1.f86b89c14a61c361c32ba57ab6c945eb.jpeg%3FodnHeight%3D450%26odnWidth%3D450%26odnBg%3Dffffff?w=400&h=300&fit=fill&bg=ffffff&s=1f412a8e72feb3de98903dce9c8078bc", "merchant": "Walmart", "offerCount": 1, "percentBack": "5.4% Back", "isPointlessAd": true, "rawImageUrl": "https://i5.walmartimages.com/asr/c51eac61-a6db-4352-bf1d-0f775667db8d_1.f86b89c14a61c361c32ba57ab6c945eb.jpeg?odnHeight=450&odnWidth=450&odnBg=ffffff", "type": "popshops", "rawproducturl": "http://r.popshops.com/r/j%7CcUpjSXM4cE1RWk54Ak17LqFjPuv-G2q5BsYyImdWdYDjHGzt110NEaEp7SgL7QQiQ0wltZCc-69MlmUFfN3Elfoxhv6l2C9at7H62uzVOIparH82bQTULUGxAodlV6YJKjrgCrwqDDZk1nO148Ck8vunRu3-hPRQjZPTnidqRtnaknidyutXl51NuV0bbgYx2cuwwUiojbXxRpe7-N7RJVykWjXbzW1xJo-RuGPIIy27CteuKQAqI7d3gXEVswY9IHEAn9bgo5AElc7X=", "variant": "product", "totalOffers": 1, "productId": 211193255, "price": "$499.99", "description": "LG 43\" Class 4K Ultra HD LED Smart TV", "calculatedPointsText": "3,999 PTS", "productUrl": "/emp/u/a.do?afsrc=1&cell=UwwF9c0mcxFTIZYQcp3n&src=NMID_432347038756083663&src=PG_SHOP_BY_PRODUCT&src=PVID_185daebdf1a6d34567a1818ae28fc97a&src=MOD_PRODUCTS&src=PSID_211193255&cturi=http%3A%2F%2Fr.popshops.com%2Fr%2Fj%257CcUpjSXM4cE1RWk54Ak17LqFjPuv-G2q5BsYyImdWdYDjHGzt110NEaEp7SgL7QQiQ0wltZCc-69MlmUFfN3Elfoxhv6l2C9at7H62uzVOIparH82bQTULUGxAodlV6YJKjrgCrwqDDZk1nO148Ck8vunRu3-hPRQjZPTnidqRtnaknidyutXl51NuV0bbgYx2cuwwUiojbXxRpe7-N7RJVykWjXbzW1xJo-RuGPIIy27CteuKQAqI7d3gXEVswY9IHEAn9bgo5AElc7X%3D%2F%24%28vid%29%2F", "name": "LG 43\" Class 4K Ultra HD LED Smart TV", "brand": "Walmart", "merchantId": 50195, "points": 3999, "minPrice": "$499.99"},
            {"imageUrl": "https://testwpmp.imgix.net/https%3A%2F%2Fi5.walmartimages.com%2Fasr%2F53804aee-9d86-4b24-8e51-d0804a57f1cb_1.f4fb8088a97d1545e7582b589d2dd3ba.jpeg%3FodnHeight%3D450%26odnWidth%3D450%26odnBg%3Dffffff?w=400&h=300&fit=fill&bg=ffffff&s=d43be2b8adb6615fb3fa63d6d208d0a4", "merchant": "Walmart", "offerCount": 1, "percentBack": "5.4% Back", "isPointlessAd": true, "rawImageUrl": "https://i5.walmartimages.com/asr/53804aee-9d86-4b24-8e51-d0804a57f1cb_1.f4fb8088a97d1545e7582b589d2dd3ba.jpeg?odnHeight=450&odnWidth=450&odnBg=ffffff", "type": "popshops", "rawproducturl": "http://r.popshops.com/r/j%7CVGpMc1k4blpvaWdqucNZtlK6hzXNBSmVhgMjOyhqWzaDmzypn1GAJQdqJqNIySEzCFOkCHnV3SFZosfasvioWrjRS4YnuKhauHvDrqGQ89RTpRXlWY56E1FIUksDoVPqSOof0T57Pp1UmesQBBvtfAO37rcPactcf2NlhaRz1V_IDTglJCR4xzys0fbyH_X5_-GS86AzpjQt8lQYWABM96uPeQ0dFULqCBcJ_hUfu-LIemqgG6tH2WejuJiXJLXVjKNN2P9RGRx4YHlj=", "variant": "product", "totalOffers": 1, "productId": 186786420, "price": "$3,999.99", "description": "Get a year of 4K UHD Streaming Netflix (a $140+ value) with the purchase of this qualifying Samsung 4K UHD TV. (offer valid 7/5/15 - 7/18/15) Click here to submit an offer claim Redefine the TV Experience with the Samsung 65 Class 4K SUHD TV. Enjoy a home theater experience like never before with the Samsung 4K SUHD TV. See up to 64X greater color expression with Nano-crystal technology, as well as dynamic brightness and contrast, compared to conventional HD/UHD TVs. Access and play your favorite content seamlessly with Smart TV. *Conventional HD/UHD TVs refer to 8-bit color TVs Color: Silver/gray.", "calculatedPointsText": "31,999 PTS", "productUrl": "/emp/u/a.do?afsrc=1&cell=UwwF9c0mcxFTIZYQcp3n&src=NMID_432347038756083663&src=PG_SHOP_BY_PRODUCT&src=PVID_185daebdf1a6d34567a1818ae28fc97a&src=MOD_PRODUCTS&src=PSID_186786420&cturi=http%3A%2F%2Fr.popshops.com%2Fr%2Fj%257CVGpMc1k4blpvaWdqucNZtlK6hzXNBSmVhgMjOyhqWzaDmzypn1GAJQdqJqNIySEzCFOkCHnV3SFZosfasvioWrjRS4YnuKhauHvDrqGQ89RTpRXlWY56E1FIUksDoVPqSOof0T57Pp1UmesQBBvtfAO37rcPactcf2NlhaRz1V_IDTglJCR4xzys0fbyH_X5_-GS86AzpjQt8lQYWABM96uPeQ0dFULqCBcJ_hUfu-LIemqgG6tH2WejuJiXJLXVjKNN2P9RGRx4YHlj%3D%2F%24%28vid%29%2F", "name": "Samsung 65\" Class LED Flat 4K SUHD Smart TV", "brand": "Walmart", "merchantId": 50195, "points": 31999, "minPrice": "$3,999.99"},
            {"imageUrl": "https://testwpmp.imgix.net/http%3A%2F%2Fimg.bbystatic.com%2FBestBuy_US%2Fimages%2Fproducts%2F7573%2F7573095_sc.jpg?w=400&h=300&fit=fill&bg=ffffff&s=40ceb9cc51797d1710c66706fe0f6462", "merchant": "Best Buy", "offerCount": 1, "percentBack": "2.7% Back", "isPointlessAd": true, "rawImageUrl": "http://img.bbystatic.com/BestBuy_US/images/products/7573/7573095_sc.jpg", "type": "popshops", "rawproducturl": "http://r.popshops.com/r/j%7CQVlYaEFERWtQa1dDNC-bLJ9VFQdj7gBrJ5WT-lNl0_plqPKeFpD8UukPn8w7Z8uVvSsnMFD6wsBoDtKjlXxBetO1lYQA3lW9uVprCUZT-pULN1jVKc-2AHHYnO4fi2Z8Z9Tj7DjiB00NZVOv-wZBtNfnlIK6Wxtig10ceBBMrrQhXVOHlYIOgVg2fK-4CZ4t0cM_d_OrijVDJE_poJ9HSOFaM_0lQeiLqyxS0T45-Ps61u6iTr3xJqpC8eIf1kFook_ECJqhWUB2tCE5=", "variant": "product", "totalOffers": 1, "productId": 197095048, "price": "$3,894.98", "description": "SunBrite TV - Pro Series - 42\" Class (42\" Diag.) - LED - Outdoor - 1080p - HDTV - Silver", "calculatedPointsText": "15,579 PTS", "productUrl": "/emp/u/a.do?afsrc=1&cell=lWPSh5Q4xqqKHyblYikD&src=NMID_432347038756083663&src=PG_SHOP_BY_PRODUCT&src=PVID_185daebdf1a6d34567a1818ae28fc97a&src=MOD_PRODUCTS&src=PSID_197095048&cturi=http%3A%2F%2Fr.popshops.com%2Fr%2Fj%257CQVlYaEFERWtQa1dDNC-bLJ9VFQdj7gBrJ5WT-lNl0_plqPKeFpD8UukPn8w7Z8uVvSsnMFD6wsBoDtKjlXxBetO1lYQA3lW9uVprCUZT-pULN1jVKc-2AHHYnO4fi2Z8Z9Tj7DjiB00NZVOv-wZBtNfnlIK6Wxtig10ceBBMrrQhXVOHlYIOgVg2fK-4CZ4t0cM_d_OrijVDJE_poJ9HSOFaM_0lQeiLqyxS0T45-Ps61u6iTr3xJqpC8eIf1kFook_ECJqhWUB2tCE5%3D%2F%24%28vid%29%2F", "name": "Sunbrite Tv - Pro Series - 42\" Class (42\" Diag.) - Led - Outdoor - 1080p - Hdtv - Silver", "brand": "BestBuy", "merchantId": 50075, "points": 15579, "minPrice": "$3,894.98"},
            {"price": "From $997.99 at 2 Stores", "imageUrl": "https://testwpmp.imgix.net/http%3A%2F%2Fi5.walmartimages.com%2Fasr%2Fe0e0feac-ab96-4b77-ba2e-14637476a563_1.a15a27ff72d7be32fee6c6ee458326a5.jpeg%3FodnHeight%3D450%26odnWidth%3D450%26odnBg%3Dffffff?w=400&h=300&fit=fill&bg=ffffff&s=bc1f3193fdd2adefb5ffa60b5af1e68c", "description": "Get drawn deeper into the action with an immersive curved screen, and a Smart TV experience that puts your favorite content at your fingertips. With 4K UHD resolution you'll enjoy a picture with 4X the crispness of Full HD. 4K UHD - Enjoy incredible picture crispness and dramatic detail, no matter how big the screen, with 4X the resolution of full HD. Curved Panel - Get drawn into the action with our state-of-the-art curved screen that delivers an immersive picture experience with off-angle viewing, making any seat the best seat in the house. Auto Depth Enhancer - Experience a greater sense of depth on a curved screen with optimized contrast across multiple zones of the picture. PurColor - Enjoy incredible shades of color, as nature intended, with technology that accurately blends primary and secondary colors for spectacular picture performance. UHD Dimming - Experience UHD picture quality with deeper blacks, purer whites, brighter colors, and enhanced detail in every image. UHD Upscaling - Upgrade all lower resolution media to a stunning near ultra high-definition experience with enhanced detail and optimized picture quality. Motion Rate 120 - Enjoy improved fast-action moving picture resolution at Motion Rate 120 with outstanding refresh rate, processing speed and backlight technology. Smart TV - Access your favorite program choices, live TV, video on demand, apps, and social media in one easy-to-browse navigation experience. Smart View 2.0 - Watch your TV entertainment on your mobile device - or your mobile media on your TV. Briefing on TV - Have your Samsung Smart TV act as an alarm, and sync up with your other Samsung mobile devices. Use the large screen to display important items such as the time, weather, and your daily schedule. Quad-Core Processor - Enjoy a fluid browsing experience and faster control - switching between apps, streaming content, and other media effortlessly. Smart Remote Control - Take ultimate control of your Smart TV - use the touchpad to navigate quickly, perform voice commands with the built in microphone, or use the remote like a mouse and simply point and click. Product Details: See Incredible Crispness and Detail with 4X the Resolution of Full HD Experience a Greater Sense of Depth with Optimized Contrast Enjoy Incredible Shades of Color, as Nature Intended Enjoy near Ultra High-Definition Quality from All Video Sources Product Specifications: Video Screen Size - 47.6\" Measured Diagonally Resolution - 3840 x 2160 Motion Rate - 120 PurColor (Color Accuracy) - Yes UHD Upscalin - Yes Depth Enhancing Technology - Auto Depth Enhancer Audio Dolby - Dolby MS11 Sound Effect - DTS Studio Sound DTS Premium Sound - DTS Premium Sound 5.1 Sound Output (RMS) - 20W (10W x 2) Speaker Type - Down Firing + Bas", "name": "Samsung 48\" Class Curved 4K Ultra HD LED Smart TV", "offerCount": 2, "rawImageUrl": "http://i5.walmartimages.com/asr/e0e0feac-ab96-4b77-ba2e-14637476a563_1.a15a27ff72d7be32fee6c6ee458326a5.jpeg?odnHeight=450&odnWidth=450&odnBg=ffffff", "type": "popshops", "totalOffers": 2, "minPrice": "$997.99", "productId": 185445669},
            {"imageUrl": "https://testwpmp.imgix.net/http%3A%2F%2Fi5.walmartimages.com%2Fasr%2F9532970e-02d3-4bff-afcc-0c547c15bbbd_1.3b29af406e9ec7b70e315f33af648c5d.jpeg%3FodnHeight%3D450%26odnWidth%3D450%26odnBg%3Dffffff?w=400&h=300&fit=fill&bg=ffffff&s=94736309f4117ec705c2218987fd11e2", "merchant": "Walmart", "offerCount": 1, "percentBack": "5.4% Back", "isPointlessAd": true, "rawImageUrl": "http://i5.walmartimages.com/asr/9532970e-02d3-4bff-afcc-0c547c15bbbd_1.3b29af406e9ec7b70e315f33af648c5d.jpeg?odnHeight=450&odnWidth=450&odnBg=ffffff", "type": "popshops", "rawproducturl": "http://r.popshops.com/r/j%7CUmZ1aGdKWkxnd29PXpzh97kUabJdczpfwiMS7H6vkrY8RiR5jvzRtf4OvwUq1QWOUdrqo1uqdlqW2zOCzSk84hUsF7CiiD3R3px1TOB_K0CZcuHgXRNi0H9z0bNb1KqYa15i8dIkXIecnABR1-McdsffK7XjHlUpj90vS1vHzY4kaKrTIOnndqvsB1iHWaTWPcR09aJcrpoDN3x7ITnfnmK22zVJOVaK4TyY5lWqJ7BveIMfLym9qQyIpqWqiAMbtGJne2PCTPwmWuKm=", "variant": "product", "totalOffers": 1, "productId": 162962150, "price": "$98.00", "description": "The Element Electronics ELEFW195 19 inch LED HDTV features Ultra Slim frame design uses the most superior LED EDGE LIT technology for the best possible clarity. It delivers a dazzling picture quality that brings the story to life. Easily turn your TV into a computer monitor, or listen to your favorite MP3s or share JPG format photos by connecting a USB device.", "calculatedPointsText": "784 PTS", "productUrl": "/emp/u/a.do?afsrc=1&cell=UwwF9c0mcxFTIZYQcp3n&src=NMID_432347038756083663&src=PG_SHOP_BY_PRODUCT&src=PVID_185daebdf1a6d34567a1818ae28fc97a&src=MOD_PRODUCTS&src=PSID_162962150&cturi=http%3A%2F%2Fr.popshops.com%2Fr%2Fj%257CUmZ1aGdKWkxnd29PXpzh97kUabJdczpfwiMS7H6vkrY8RiR5jvzRtf4OvwUq1QWOUdrqo1uqdlqW2zOCzSk84hUsF7CiiD3R3px1TOB_K0CZcuHgXRNi0H9z0bNb1KqYa15i8dIkXIecnABR1-McdsffK7XjHlUpj90vS1vHzY4kaKrTIOnndqvsB1iHWaTWPcR09aJcrpoDN3x7ITnfnmK22zVJOVaK4TyY5lWqJ7BveIMfLym9qQyIpqWqiAMbtGJne2PCTPwmWuKm%3D%2F%24%28vid%29%2F", "name": "Element Electronics ELEFW195 19-inch LED HDTV - 720p - 16:9 - 6.5 ms - 1000:1 - HDMI, DVI and VGA", "brand": "Walmart", "merchantId": 50195, "points": 784, "minPrice": "$98.00"},
            {"imageUrl": "https://testwpmp.imgix.net/http%3A%2F%2Fwww.officedepot.com%2Fpictures%2Fus%2Fod%2Fsk%2Flg%2F888983_sk_lg.jpg?w=400&h=300&fit=fill&bg=ffffff&s=7f4682aefe1574d83550cbe9d341b0e2", "merchant": "Office Depot&reg; and OfficeMax&reg;", "offerCount": 1, "percentBack": "2.0% Back", "isPointlessAd": true, "rawImageUrl": "http://www.officedepot.com/pictures/us/od/sk/lg/888983_sk_lg.jpg", "type": "popshops", "rawproducturl": "http://r.popshops.com/r/j%7COXhMVE5qcElqU0dNgcb9-rrTNVHyuMI4Kp8yY41GFemWNeDgEDQEJWEpaRgIGOklO3EGrAMLlp633DCD8DRRoMUJ85wOSoP5ASEq4jAwlzUf58GT-3936m5XUcX8PVHNh6UfW_0W07I-DCbFbarY33xjdftyUsVyKaJt7GmhEL7N_iqgbU3vuG9T0w5ABnA5-c3zxD_jCOgL5mpEYZTFQlVXHVru43etSiM4tI6oAOhCmG6U3XFnr5iE9LP20zcYO2n8PDVKPfhhYXVH=", "variant": "product", "totalOffers": 1, "productId": 154483573, "price": "$6,248.99", "description": "NEC MultiSync P703-DRD - 70\" - commercial use - P Series LED-backlit LCD flat panel display - 1080p (FullHD) - edge-lit - with Single Board Computer OPS-DRD", "calculatedPointsText": "18,746 PTS", "productUrl": "/emp/u/a.do?afsrc=1&cell=R_7pToCKbXgOM6TP6a4a&src=NMID_432347038756083663&src=PG_SHOP_BY_PRODUCT&src=PVID_185daebdf1a6d34567a1818ae28fc97a&src=MOD_PRODUCTS&src=PSID_154483573&cturi=http%3A%2F%2Fr.popshops.com%2Fr%2Fj%257COXhMVE5qcElqU0dNgcb9-rrTNVHyuMI4Kp8yY41GFemWNeDgEDQEJWEpaRgIGOklO3EGrAMLlp633DCD8DRRoMUJ85wOSoP5ASEq4jAwlzUf58GT-3936m5XUcX8PVHNh6UfW_0W07I-DCbFbarY33xjdftyUsVyKaJt7GmhEL7N_iqgbU3vuG9T0w5ABnA5-c3zxD_jCOgL5mpEYZTFQlVXHVru43etSiM4tI6oAOhCmG6U3XFnr5iE9LP20zcYO2n8PDVKPfhhYXVH%3D%2F%24%28vid%29%2F", "name": "NEC MultiSync P703-DRD - 70 LED-backlit LCD flat", "brand": "OfficeDepot", "merchantId": 50145, "points": 18746, "minPrice": "$6,248.99"},
            {"imageUrl": "https://testwpmp.imgix.net/http%3A%2F%2Fwww.officedepot.com%2Fpictures%2Fus%2Fod%2Fsk%2Flg%2F888910_sk_lg.jpg?w=400&h=300&fit=fill&bg=ffffff&s=c23f7754b2963e3ca1312e217bd9507c", "merchant": "Office Depot&reg; and OfficeMax&reg;", "offerCount": 1, "percentBack": "2.0% Back", "isPointlessAd": true, "rawImageUrl": "http://www.officedepot.com/pictures/us/od/sk/lg/888910_sk_lg.jpg", "type": "popshops", "rawproducturl": "http://r.popshops.com/r/j%7CSzFJYnU4eXBseUxVX72Y-EpXguEg3WOvL2-lILqfheU1vnVtreZJD-QoPYBLej0OhpyjIl_RQxc7lOUivIXapUviZ8CQKFWJGs0LrHSWvH3cZAIGrv6nnPNx-dkIuO5An_vLnIsCQzTjD_uIX3FTbeXH9J_atu1GluNeViqDgOMb4eeZNkyKxO8hNLK3JBAN161gXsNlt8xWcoj9yM2PzsZOtecxeB4hAiYUK4hjjrW8Nac2ytd7rdxmZrB0lDtgJDfMptbioKgg8ZKs=", "variant": "product", "totalOffers": 1, "productId": 154483570, "price": "$1,698.99", "description": "NEC MultiSync P403-DRD - 40\" - commercial use - P Series LED-backlit LCD flat panel display - 1080p (FullHD) - edge-lit - with Single Board Computer OPS-DRD", "calculatedPointsText": "5,096 PTS", "productUrl": "/emp/u/a.do?afsrc=1&cell=R_7pToCKbXgOM6TP6a4a&src=NMID_432347038756083663&src=PG_SHOP_BY_PRODUCT&src=PVID_185daebdf1a6d34567a1818ae28fc97a&src=MOD_PRODUCTS&src=PSID_154483570&cturi=http%3A%2F%2Fr.popshops.com%2Fr%2Fj%257CSzFJYnU4eXBseUxVX72Y-EpXguEg3WOvL2-lILqfheU1vnVtreZJD-QoPYBLej0OhpyjIl_RQxc7lOUivIXapUviZ8CQKFWJGs0LrHSWvH3cZAIGrv6nnPNx-dkIuO5An_vLnIsCQzTjD_uIX3FTbeXH9J_atu1GluNeViqDgOMb4eeZNkyKxO8hNLK3JBAN161gXsNlt8xWcoj9yM2PzsZOtecxeB4hAiYUK4hjjrW8Nac2ytd7rdxmZrB0lDtgJDfMptbioKgg8ZKs%3D%2F%24%28vid%29%2F", "name": "NEC P403-DRD 40\" LED Backlit Professional-Grade Large Screen Display with Integrated Digital Media Player", "brand": "OfficeDepot", "merchantId": 50145, "points": 5096, "minPrice": "$1,698.99"},
            {"imageUrl": "https://testwpmp.imgix.net/http%3A%2F%2Fi5.walmartimages.com%2Fasr%2Fb38e91de-2999-465a-a5ce-71ef75967348_1.370f47dda0487efae8c383aaf515e902.jpeg%3FodnHeight%3D450%26odnWidth%3D450%26odnBg%3Dffffff?w=400&h=300&fit=fill&bg=ffffff&s=eedb445abc350d742b78858bbf976965", "merchant": "Walmart", "offerCount": 1, "percentBack": "5.4% Back", "isPointlessAd": true, "rawImageUrl": "http://i5.walmartimages.com/asr/b38e91de-2999-465a-a5ce-71ef75967348_1.370f47dda0487efae8c383aaf515e902.jpeg?odnHeight=450&odnWidth=450&odnBg=ffffff", "type": "popshops", "rawproducturl": "http://r.popshops.com/r/j%7CTlNYVFJOeDR1Tkg3yFGIVE1nLZ7QEGfSmBGTYzAkajsr77BaFobsBK7Hw7TzamsJ7w0C_r2gzxTHH5t1wSoRQAt3aH6phCMXKvmYdjzrP2FmgI8IShgk3vC3NrLN8Zcn7HI8DVBg3gZ7NVujZOk9GixpvAjIQSdUYljiCtzT8b_lNzMW2LB-IPkvsFa5fbgdemt7Ol9CSqTE3zkvHmqj_jGiYT-IaRRNsdgLvsTdytjaA-einm0pDI37i0tIfYuVSdHx7gOy8kR5__Hr=", "variant": "product", "totalOffers": 1, "productId": 141363576, "price": "$52.99", "description": "Z-1 RED MONITOR ARM WITH USB HUB", "calculatedPointsText": "423 PTS", "productUrl": "/emp/u/a.do?afsrc=1&cell=UwwF9c0mcxFTIZYQcp3n&src=NMID_432347038756083663&src=PG_SHOP_BY_PRODUCT&src=PVID_185daebdf1a6d34567a1818ae28fc97a&src=MOD_PRODUCTS&src=PSID_141363576&cturi=http%3A%2F%2Fr.popshops.com%2Fr%2Fj%257CTlNYVFJOeDR1Tkg3yFGIVE1nLZ7QEGfSmBGTYzAkajsr77BaFobsBK7Hw7TzamsJ7w0C_r2gzxTHH5t1wSoRQAt3aH6phCMXKvmYdjzrP2FmgI8IShgk3vC3NrLN8Zcn7HI8DVBg3gZ7NVujZOk9GixpvAjIQSdUYljiCtzT8b_lNzMW2LB-IPkvsFa5fbgdemt7Ol9CSqTE3zkvHmqj_jGiYT-IaRRNsdgLvsTdytjaA-einm0pDI37i0tIfYuVSdHx7gOy8kR5__Hr%3D%2F%24%28vid%29%2F", "name": "Arctic ORAEQ-MA007-GBA01 RED Z1 Desk Mount Monitor Arm", "brand": "Walmart", "merchantId": 50195, "points": 423, "minPrice": "$52.99"},
            {"imageUrl": "https://testwpmp.imgix.net/https%3A%2F%2Fi5.walmartimages.com%2Fasr%2Ff08d40da-adb7-465e-a46f-b0caa5869e12_1.2c28c50b126779430cc0a6c12901537c.jpeg%3FodnHeight%3D450%26odnWidth%3D450%26odnBg%3Dffffff?w=400&h=300&fit=fill&bg=ffffff&s=9a5a9b4e7a424cb47c90e67f75789bdf", "merchant": "Walmart", "offerCount": 1, "percentBack": "5.4% Back", "isPointlessAd": true, "rawImageUrl": "https://i5.walmartimages.com/asr/f08d40da-adb7-465e-a46f-b0caa5869e12_1.2c28c50b126779430cc0a6c12901537c.jpeg?odnHeight=450&odnWidth=450&odnBg=ffffff", "type": "popshops", "rawproducturl": "http://r.popshops.com/r/j%7CM1oyVHRaZmN5RW90-aVfRPuYp0U2vrO8GJKLUfZVy2bwpTmMo3zcIOLQe2CfCNFqgsGz14ivfOExloBqQ6ED2_BBvIWSZMdGV27cpBDDMtHv8nFs2OtWSTBXpwIrgAr5j9hLsu1uwI7yM5WD934I-YW-g6zxkXkmqMwNnZumW68sgidoW78B674HkitDOMKLy3H2L2JiE0548P36CRtOVJECIUWxYWxOTz4m2TRy2jrbTzfRj6bpLFI8ZqU31WrNxpinjD1s5wWmMS6l=", "variant": "product", "totalOffers": 1, "productId": 181385627, "price": "$640.31", "description": "Specifications General Product Type: LED-backlit LCD TV Power Consumption (On mode): 140 W Diagonal Size: 54.6\" Series: Accu D-LED Series Video Interface: Component, composite, HDMI HDMI Ports Qty: 4 port(s) PC Interface: VGA (HD-15) Dimensions: With stand Width: 49.3 in Depth: 10.7 in Height: 30.6 in Weight: 35.5 lbs Enclosure Color: Black Display Resolution: 3840 x 2160 Display Format: 4K UHDTV (2160p) Image Aspect Ratio: 16:9 LCD Backlight Technology: LED backlight Dynamic Contrast Ratio: 1000000:1 Brightness: 300 cd/m2 Response Time: 6.5 ms Comb Filter: 3D digital Commercial Features: Hotel mode Additional Features: Mobile High-Definition Link (MHL), Dynamic Backlight Control Stands & Mounts Stand: Included Digital TV Tuner Digital TV Tuner: ATSC, QAM Remote Control <img align=\"absmiddle\" src=\"http://images. highspeedbackbone", "calculatedPointsText": "5,122 PTS", "productUrl": "/emp/u/a.do?afsrc=1&cell=UwwF9c0mcxFTIZYQcp3n&src=NMID_432347038756083663&src=PG_SHOP_BY_PRODUCT&src=PVID_185daebdf1a6d34567a1818ae28fc97a&src=MOD_PRODUCTS&src=PSID_181385627&cturi=http%3A%2F%2Fr.popshops.com%2Fr%2Fj%257CM1oyVHRaZmN5RW90-aVfRPuYp0U2vrO8GJKLUfZVy2bwpTmMo3zcIOLQe2CfCNFqgsGz14ivfOExloBqQ6ED2_BBvIWSZMdGV27cpBDDMtHv8nFs2OtWSTBXpwIrgAr5j9hLsu1uwI7yM5WD934I-YW-g6zxkXkmqMwNnZumW68sgidoW78B674HkitDOMKLy3H2L2JiE0548P36CRtOVJECIUWxYWxOTz4m2TRy2jrbTzfRj6bpLFI8ZqU31WrNxpinjD1s5wWmMS6l%3D%2F%24%28vid%29%2F", "name": "Sansui Accu SLED5516 55\" LED-LCD TV - 4K UHDTV", "brand": "Walmart", "merchantId": 50195, "points": 5122, "minPrice": "$640.31"},
            {"imageUrl": "https://testwpmp.imgix.net/https%3A%2F%2Fi5.walmartimages.com%2Fasr%2F95c7bbfd-2a71-4693-a78e-7f8674a09418_1.135ca2743c7e43d21f0920394b656d91.jpeg%3FodnHeight%3D450%26odnWidth%3D450%26odnBg%3Dffffff?w=400&h=300&fit=fill&bg=ffffff&s=e7862696150473efd4e0493658b1707f", "merchant": "Walmart", "offerCount": 1, "percentBack": "5.4% Back", "isPointlessAd": true, "rawImageUrl": "https://i5.walmartimages.com/asr/95c7bbfd-2a71-4693-a78e-7f8674a09418_1.135ca2743c7e43d21f0920394b656d91.jpeg?odnHeight=450&odnWidth=450&odnBg=ffffff", "type": "popshops", "rawproducturl": "http://r.popshops.com/r/j%7CcFRjNHlIalRTWGlCcglBqvMuXNnKmNYHSFogdgnIx6sxiAE2WJPOmQHYII4rgC5AlQHOVructNQ3_dEAs_qogdaXXr_R3FGTxP49ZGzA8sLcSttOqXnDegdnOApRgNnAgzOhlOr9S4TTAPXfgbc0yHh8WsJDiaYoGMYb521BCyuJRKCyyNIrBPspW5raTMuhAmAkOvUFuE11XNxw6HfcHIyTJp8GzFVe_gdMT9FbudafJjIrkioHy67QAMGnoUY3WSUUZYJ5rrlMQa3g=", "variant": "product", "totalOffers": 1, "productId": 26967215, "price": "$1,429.99", "description": "PE3010: Features: -Tilt mount-Corrosion resistant-Wind rated up to 90 mph, elevation 2.37 and category D-Fixed incremental tilt with angle settings at 0 degrees to 15 degrees-Up to 8 of horizontal positioning-Hook-and-hang design for simplified installation-For 32 to 65 outdoor flat-panel display-Tilt: +15 / -5-Swivel yaw: 360 degrees-Distance from ceiling: 51.02 -Universal mounting pattern size: 28.39 x 17.67 -Weight capacity: 200 lbs. Includes: -Includes security hardware. Color/Finish: -Finish: Powder coat. Dimensions: -Pole length: 48 -Overall dimensions: 54.89 H x 30.75 W, 87 lbs.", "calculatedPointsText": "11,439 PTS", "productUrl": "/emp/u/a.do?afsrc=1&cell=UwwF9c0mcxFTIZYQcp3n&src=NMID_432347038756083663&src=PG_SHOP_BY_PRODUCT&src=PVID_185daebdf1a6d34567a1818ae28fc97a&src=MOD_PRODUCTS&src=PSID_26967215&cturi=http%3A%2F%2Fr.popshops.com%2Fr%2Fj%257CcFRjNHlIalRTWGlCcglBqvMuXNnKmNYHSFogdgnIx6sxiAE2WJPOmQHYII4rgC5AlQHOVructNQ3_dEAs_qogdaXXr_R3FGTxP49ZGzA8sLcSttOqXnDegdnOApRgNnAgzOhlOr9S4TTAPXfgbc0yHh8WsJDiaYoGMYb521BCyuJRKCyyNIrBPspW5raTMuhAmAkOvUFuE11XNxw6HfcHIyTJp8GzFVe_gdMT9FbudafJjIrkioHy67QAMGnoUY3WSUUZYJ5rrlMQa3g%3D%2F%24%28vid%29%2F", "name": "Peerless Wind Rated I-beam Tilt Mount", "brand": "Walmart", "merchantId": 50195, "points": 11439, "minPrice": "$1,429.99"},
            {"imageUrl": "https://testwpmp.imgix.net/http%3A%2F%2Fi5.walmartimages.com%2Fasr%2F20a76b2a-71d0-4be5-9690-6415b50c3dad_1.34e675a18f88e6e24617342f6737b689.jpeg%3FodnHeight%3D450%26odnWidth%3D450%26odnBg%3Dffffff?w=400&h=300&fit=fill&bg=ffffff&s=893c2455cd6e85cdf5ca21a89d870899", "merchant": "Walmart", "offerCount": 1, "percentBack": "5.4% Back", "isPointlessAd": true, "rawImageUrl": "http://i5.walmartimages.com/asr/20a76b2a-71d0-4be5-9690-6415b50c3dad_1.34e675a18f88e6e24617342f6737b689.jpeg?odnHeight=450&odnWidth=450&odnBg=ffffff", "type": "popshops", "rawproducturl": "http://r.popshops.com/r/j%7CSTZGNTE0TEZwb0puVYLBd75OM1czaH2UISxh65Tisz8nCG10Yief_eyW5SvCVcIpGDbuoxGwLo9yxR5pECR1QGH_5r5Bv6r4530HRK2QHTKjlRjm3i3jw51UVuIA0Bmylq-ajEZjLPixhEJKiyM4B6S0qU4mSsnV0bWnpwXzOjCR6NRQJPfyPHUz_NwiKYCz3FEHPJQYgW59y1TeM9HKKVhd2CU6TGVOPN4Kr9YUyp2pFqJ4mZ1dkzSmu5hGg7L4saZy33CE4uAUAoXe=", "variant": "product", "totalOffers": 1, "productId": 27136283, "price": "$59.95", "description": "Connecting to the Web via your Samsung Smart TV just got better with this innovative keyboard remote control. Samsung's RMC-QTD1 QWERTY Remote puts functionality in your hands like never before. Connect wirelessly to your favourite Internet content on your TV just like a regular remote. Then; when you're ready to surf and explore the Web; the physical QWERTY keyboard makes it easy to enter text in a quick and familiar way. Use it with your favorite Samsung Apps; and discover a new level of convenience and ease. Features Multidirectional QWERTY keyboard with LCD screen Connects to your Samsung Smart TV Hotkey: a shortcut to most popular Samsung Smart TV functions Direction Key and Optical Sensor: enables users to select points on the screen through use of an arrow keypad Text entry for your favorite Samsung Apps Easy grip; small and compact size Includes 4x AAA batteries UPC: 036725236264 Manufacturer's Part Number: RMC-QTD1AP2/ZA", "calculatedPointsText": "479 PTS", "productUrl": "/emp/u/a.do?afsrc=1&cell=UwwF9c0mcxFTIZYQcp3n&src=NMID_432347038756083663&src=PG_SHOP_BY_PRODUCT&src=PVID_185daebdf1a6d34567a1818ae28fc97a&src=MOD_PRODUCTS&src=PSID_27136283&cturi=http%3A%2F%2Fr.popshops.com%2Fr%2Fj%257CSTZGNTE0TEZwb0puVYLBd75OM1czaH2UISxh65Tisz8nCG10Yief_eyW5SvCVcIpGDbuoxGwLo9yxR5pECR1QGH_5r5Bv6r4530HRK2QHTKjlRjm3i3jw51UVuIA0Bmylq-ajEZjLPixhEJKiyM4B6S0qU4mSsnV0bWnpwXzOjCR6NRQJPfyPHUz_NwiKYCz3FEHPJQYgW59y1TeM9HKKVhd2CU6TGVOPN4Kr9YUyp2pFqJ4mZ1dkzSmu5hGg7L4saZy33CE4uAUAoXe%3D%2F%24%28vid%29%2F", "name": "Samsung RMC-QTD1 QWERTY Remote", "brand": "Walmart", "merchantId": 50195, "points": 479, "minPrice": "$59.95"},
            {"imageUrl": "https://testwpmp.imgix.net/http%3A%2F%2Fi5.walmartimages.com%2Fasr%2F8c04c03b-1d40-4455-9e66-1b2eb688ecf0_1.7c7250ed04039af3790ce2f1839028f6.jpeg%3FodnHeight%3D450%26odnWidth%3D450%26odnBg%3Dffffff?w=400&h=300&fit=fill&bg=ffffff&s=b49580504322b4e92e01dba0617c1550", "merchant": "Walmart", "offerCount": 1, "percentBack": "5.4% Back", "isPointlessAd": true, "rawImageUrl": "http://i5.walmartimages.com/asr/8c04c03b-1d40-4455-9e66-1b2eb688ecf0_1.7c7250ed04039af3790ce2f1839028f6.jpeg?odnHeight=450&odnWidth=450&odnBg=ffffff", "type": "popshops", "rawproducturl": "http://r.popshops.com/r/j%7Ccnp3YXpQb24xdE9I938Z56z9V_0qIRdwHHhvCGTjskSSJyi-1jW8ORDsKwTb8ayrLyeZuYdvcsi8RH22QSI4pVFuXVMuVUSqXLbHPXyhohMRvO5Kce-Z0Drmk_SKdQ8QjYt5ehEBR__L5Dxz4n7fBvDatbbdLnOLZhkFA_J2E63pKgSFmpgbxtWUfDHqyng8Nr9A95M6Vu6CqfsLCSkU3pPN6kdJjVVGpGCijqRe3e8vqcxgo-feODy8pKPwViBvSQWOdyM5CvajbD21=", "variant": "product", "totalOffers": 1, "productId": 374398512, "price": "$7,998.00", "description": "2160p resolution; Motionflow XR 960; Android TV, Opera browser included; 3D TV", "calculatedPointsText": "63,984 PTS", "productUrl": "/emp/u/a.do?afsrc=1&cell=UwwF9c0mcxFTIZYQcp3n&src=NMID_432347038756083663&src=PG_SHOP_BY_PRODUCT&src=PVID_185daebdf1a6d34567a1818ae28fc97a&src=MOD_PRODUCTS&src=PSID_374398512&cturi=http%3A%2F%2Fr.popshops.com%2Fr%2Fj%257Ccnp3YXpQb24xdE9I938Z56z9V_0qIRdwHHhvCGTjskSSJyi-1jW8ORDsKwTb8ayrLyeZuYdvcsi8RH22QSI4pVFuXVMuVUSqXLbHPXyhohMRvO5Kce-Z0Drmk_SKdQ8QjYt5ehEBR__L5Dxz4n7fBvDatbbdLnOLZhkFA_J2E63pKgSFmpgbxtWUfDHqyng8Nr9A95M6Vu6CqfsLCSkU3pPN6kdJjVVGpGCijqRe3e8vqcxgo-feODy8pKPwViBvSQWOdyM5CvajbD21%3D%2F%24%28vid%29%2F", "name": "Sony - Xbr X850d Series 85\" Class (84.5 Diag) - Led - 2160p - Smart - 3d - 4k Ultra Hd Tv - Black", "brand": "Walmart", "merchantId": 50195, "points": 63984, "minPrice": "$7,998.00"},
            {"imageUrl": "https://testwpmp.imgix.net/https%3A%2F%2Fi5.walmartimages.com%2Fasr%2F12899b31-ae07-428a-9d29-3e5a5b3c5af0_1.1e187d9ac58e8d6038cea2c1ec2754c8.jpeg%3FodnHeight%3D450%26odnWidth%3D450%26odnBg%3Dffffff?w=400&h=300&fit=fill&bg=ffffff&s=85646a302e213b645ce29397c39116cf", "merchant": "Walmart", "offerCount": 1, "percentBack": "5.4% Back", "isPointlessAd": true, "rawImageUrl": "https://i5.walmartimages.com/asr/12899b31-ae07-428a-9d29-3e5a5b3c5af0_1.1e187d9ac58e8d6038cea2c1ec2754c8.jpeg?odnHeight=450&odnWidth=450&odnBg=ffffff", "type": "popshops", "rawproducturl": "http://r.popshops.com/r/j%7CZHdwY2d2bmw0T2NDbyxBbV5vHJlJtWmbWWbAgZr_-IdtArj3oYTqfeXgRKCWgn0JeA2DZojzFe6gn542Lv5XaxwO9uvvuVaIuAoyzPpu4xsbkGuIpHSBydl_2CL69x1HcL5Q91Xb_fVmTcwDbnO-FRIrmLF0fYxcRNv3KrDh71P3Z7w8Sb9Div-6m3WPrUOXPzZrcTekkB02ZYw6x99SoBd5Vq3xLNMUzP2YxrSAjdo9TymwCF0WMmEPeJPxFBjHv1XVN4JJ9I_zb3Uw=", "variant": "product", "totalOffers": 1, "productId": 143539308, "price": "$1,699.00", "description": "The 55a&euro; Class 1080p 240Hz Ultra Slim 3D LED Smart Full HDTV Delivers Stunning Picture Quality Witness stunning picture quality with the Samsung 55a&euro; Class 1080p 240Hz LED Smart TV. Your favorite shows and movies come to life as Micro Dimming Pro enhances color, contrast and detail. You can also multi-task like a master as you watch your favorite TV show and browse the web with Dual Screen. The 55\" Smart LED Full HDTV lets you discover more of what you love. Not sure what to watch? Ask for suggestions based on what's popular and what you've already viewed with S Recommendations. The Samsung 3D converter transforms 2D movies, TV and games to stunning 3D at 1080p, while additional 3D glasses expand the picture to a massive 178-degree vertical view. Color: Black.", "calculatedPointsText": "13,592 PTS", "productUrl": "/emp/u/a.do?afsrc=1&cell=UwwF9c0mcxFTIZYQcp3n&src=NMID_432347038756083663&src=PG_SHOP_BY_PRODUCT&src=PVID_185daebdf1a6d34567a1818ae28fc97a&src=MOD_PRODUCTS&src=PSID_143539308&cturi=http%3A%2F%2Fr.popshops.com%2Fr%2Fj%257CZHdwY2d2bmw0T2NDbyxBbV5vHJlJtWmbWWbAgZr_-IdtArj3oYTqfeXgRKCWgn0JeA2DZojzFe6gn542Lv5XaxwO9uvvuVaIuAoyzPpu4xsbkGuIpHSBydl_2CL69x1HcL5Q91Xb_fVmTcwDbnO-FRIrmLF0fYxcRNv3KrDh71P3Z7w8Sb9Div-6m3WPrUOXPzZrcTekkB02ZYw6x99SoBd5Vq3xLNMUzP2YxrSAjdo9TymwCF0WMmEPeJPxFBjHv1XVN4JJ9I_zb3Uw%3D%2F%24%28vid%29%2F", "name": "Samsung 55\" Class Smart 3D LED 1080p HDTV with3D Glasses", "brand": "Walmart", "merchantId": 50195, "points": 13592, "minPrice": "$1,699.00"},
            {"imageUrl": "https://testwpmp.imgix.net/http%3A%2F%2Fwww.homedepot.com%2Fcatalog%2FproductImages%2F1000%2Fcc%2Fcc44a271-eee6-4fd0-9ab3-4a6ed4ebf578_1000.jpg?w=400&h=300&fit=fill&bg=ffffff&s=d1e915250aa66ec29d746191eede5ce1", "merchant": "Home Depot", "offerCount": 1, "percentBack": "1.4% Back", "isPointlessAd": true, "rawImageUrl": "http://www.homedepot.com/catalog/productImages/1000/cc/cc44a271-eee6-4fd0-9ab3-4a6ed4ebf578_1000.jpg", "type": "popshops", "rawproducturl": "http://r.popshops.com/r/j%7COVdReDg2UDM2UWRMNjbU0L7Hv04NZGhFLaWBlCTkVkBn09G0o0VjbjZKjGgQWikTxIPX6BnGrzrBLWp6W33kB130OYy0i6qtQXjJrDkH_2ailXylwfgQXwU5rxFCI23piXCxqxDk6-D_Jc6HvtI09iv9RPeCsyVsxDAuyutXvt_rzZqdI4rUq2ijh1O2ooxNYz6VII4j1CWGUpyo0UusL16QCZ2AeDR159PMjrwVBegkgyqXKFJ5Uhf0T_MKaigGFqCGayRBy7N01X_K=", "variant": "product", "totalOffers": 1, "productId": 207230219, "price": "$299.99", "description": "3D digital comb filter Composite Video Input: 1 Component Video Input: 1 VGA Input HDMI Input: 3", "calculatedPointsText": "599 PTS", "productUrl": "/emp/u/a.do?afsrc=1&cell=7oJmDwbt8HVACAne3owq&src=NMID_432347038756083663&src=PG_SHOP_BY_PRODUCT&src=PVID_185daebdf1a6d34567a1818ae28fc97a&src=MOD_PRODUCTS&src=PSID_207230219&cturi=http%3A%2F%2Fr.popshops.com%2Fr%2Fj%257COVdReDg2UDM2UWRMNjbU0L7Hv04NZGhFLaWBlCTkVkBn09G0o0VjbjZKjGgQWikTxIPX6BnGrzrBLWp6W33kB130OYy0i6qtQXjJrDkH_2ailXylwfgQXwU5rxFCI23piXCxqxDk6-D_Jc6HvtI09iv9RPeCsyVsxDAuyutXvt_rzZqdI4rUq2ijh1O2ooxNYz6VII4j1CWGUpyo0UusL16QCZ2AeDR159PMjrwVBegkgyqXKFJ5Uhf0T_MKaigGFqCGayRBy7N01X_K%3D%2F%24%28vid%29%2F", "name": "39\" Class 720p LED HDTV - SE39HC", "brand": "HomeDepot", "merchantId": 50119, "points": 599, "minPrice": "$299.99"}
        ]);
        mp_popover.setPopoverPosition(4);
        mp_popover.resizeWindow();
    });
</script>


</div>


<footer class="tc">
    <a href="/"><h1 id="footer-logo">MyPoints</h1></a>

    <p class="ninety-nine">Rewarding Our Members Since 1996</p>
    <hr/>
    <div class="container">
        <div class="row tl">
            <div class="col-xs-10 col-xs-push-2 col-md-push-0 col-md-6 col-lg-5 col-lg-push-1 col-sm-11 col-sm-push-1">
                <div class="row mb">
                    <div class="col-xs-6 col-sm-4 col-sm-push-2 col-md-6 col-md-push-0">
                        <h4>ABOUT</h4>
                        <ul>
                            <li><a href="/emp/u/how-mypoints-works.vm">How MyPoints Works</a></li>
                            <li><a href="http://help.mypoints.com">FAQs</a></li>

                            <li><a href="http://www.prodege.com/careers/" target="_blank">Careers</a></li>
                        </ul>
                    </div>

                    <div class="col-xs-6 col-sm-4 col-sm-push-2 col-md-6 col-md-push-0">
                        <h4>POLICIES</h4>
                        <ul>
                            <li>
                                <a href="/emp/u/privacy.vm">Privacy Policy</a>
                            </li>
                            <li><a href="/emp/u/terms.vm">Terms of Use</a></li>
                            <li><a href="/emp/u/shopping-extension/eula.vm">Score! Privacy Policy &amp; EULA</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-xs-10 col-xs-push-2 col-md-push-0 col-md-6 col-lg-5 col-lg-push-1 col-sm-11 col-sm-push-1">
                <div class="row">
                    <div class="col-xs-6 col-sm-4 col-sm-push-2 col-md-6 col-md-push-0">
                        <h4>PARTNERSHIPS</h4>
                        <ul>
                            <li><a href="http://www.prodege.com/contact/" target="_blank">Advertise With Us</a></li>
                            <li>
                                <a href="https://signup.cj.com/member/brandedPublisherSignUp.do?air_refmerchantid=1933569"
                                   target="_blank">Affiliates</a></li>
                        </ul>
                    </div>

                    <div class="col-xs-6 col-sm-4 col-sm-push-2 col-md-6 col-md-push-0">
                        <h4>CONTACT US</h4>
                        <ul>
                            <li>44 Montgomery Street, Suite 250</li>
                            <li>San Francisco, CA 94104</li>
                            <li><a href="/emp/u/member/transactionDetail.vm">Contact Member Services </a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--.container-->
    <p class="social">Looking for more great deals? Follow us! <br/>
        <a href="https://www.facebook.com/mypoints" target="_blank"><img
                src="/md5/da/da74a52125fed387cf855b8df1214f5a_icon-facebook.png"/></a>
        <a href="https://www.twitter.com/MyPoints" target="_blank"><img
                src="/md5/9b/9b48f3ed02483e4b3c87051490dcf0d9_icon-twitter.png"/></a>
    </p>

    <p class="copyright">&copy; 2004-2016 MyPoints.com | All Rights Reserved</p>
</footer>


<div class="modal fade login-form-validation" id="loginModal" role="dialog" aria-labelledby="loginModal"
     aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="dark_bg"></div>
            <div class="modal-header">
                <h1 id="onboarding-logo"></h1>
                <img src="/md5/86/86de02c994618586a547b25108ae992d_x-mark-24.png" class="close" data-dismiss="modal"
                     aria-hidden="true"/>
            </div>
            <div class="modal-body">
                <h3>Sign In &amp; Start Earning!</h3>


                <form id="signinForm" name="registration" action="https://www.mypoints.com/emp/u/login.do?"
                      class="login-form form-horizontal" method="POST">
                    <input id="fpBlackBox" type="hidden" name="fpBlackBox"
                           value="0400YF6d92uvKm0HcCiyOFFxUMlzFK4+HJYR2qfuC8E3WE6nmR1rkk0iDlO3JhDrtCIIB0tlXKkas1R4s/0FdxWuLjJaxznjUW9SHdXZkQaUIFEIgLZAX23/tJ7OmB0uDhG9lU99UoH2xklcNA8ixR0zS0+xbMUE8h2KlSmUU6OC8NyE+lLhUE3lwZ/0XCV447+4lfxDDBnM8UQmINsJ9VlMYEViCxsA6e7SfuSKPp7f+XIKOVTTL2g136yNzGkmK4M7jmU2L5yi9CWbK17imHctGrjEjVFMhgLyi4PvWoIpyZmpr5zlQx90s1eovP7W+WpQCv10TaNx+XTCCuhAF+nK4ryuBlCYItZJSZapFuFqeQtVPDYLihDanryG1jJH7UoiFqHfv6lgZq+NNE4xK4FhMTBnxg3zCYy967JoEZK/VjMyOQqb8HsHfXl+wW3iD3dAosTzKoxVC6fSPFFgCaMpvU/h6EFXXmXEh1yskTEl+A9i3n5BO7oQ5v8xPG8qs4/gecM7oPEAYvuyPr0t8ztVFm6jS7ShRfhI96FOpPevDWup0i8thex6e7xUN0sYF8r08f8uCcC0xOD+DPTu5VIg0CDMnwUlr/77igntszAWTJIovdg+R73clNhwlApTJ7JWmz61zhzFB1f1wfrmFi9WBDGZ3r5ybWV4FvE4uvDhMHW2GdZX3Mpj8tZTEoJvIZdBSKs0AnQH2X0OaEfyI1Pm2Yw9jt8VIAfmbQHh4nHyxhCjmkswulVPWBRQDekNcfNFqzj8ZFJeItA4lrpTmKkV78jwjs5Ca2/wBdhim9vK/UvfmLWxq6zDVHdYcifmtkxPT/SbhiQ4jA8NczN14q3ly0ETe76Xek/NxA9x3qRKbjObZRutTbZvc93pZ/WuuaUQogaK3VDujNlyFcSkqakry/IQWZNQD2UtqgxBwcdDGoLzXifX1EWSVGE7VDaOZWB8+sD1cMLQtEUWvNAyhGp9nSYTiKTomL2rFxa8Swx13b4r1zXabX6+SdxXrsYM3azZeFeMfnv/EInOqIOhcMi7n2iGwINtV/F+edppiQDvITl1wb7F7C5QsJ2LMqBxNKaSMnP+fdPF/qtzQID5S9pyqYcAvL6sxAasfF/2L1A77RGCBVWpS/i7iTvv4QX63e31WqXfNs0JT5P+xQO+Re5U6u+cSnPkjTzCzKFUSps5U3QFxZNH2aP5V6pk4tsw9s9qYHuNtGyojUd0Bav40W2nVokz24S6tYul2zEN+eiXcUEuZ4S4abMMLZJ5FTY4tsztg7zeRH/PMMEMGAac3GnF16hIYpIvTbLT95s3gp0d1Vz//OeUg9egoJ/vyqEIGfWU6HvhZykFdHVQt1Hh0KnWMQjYVuBkBC6TBUS9Xb0nzAsx41Ed8dCpzzLoFNQcP6Ef/6HwJsgsVyc5OlFhAiJSUSmCJWlROE72U392TyFwft2N7jmc5FzZtNeOXhUDPNKgIz7EWYPYsPAVfwwL0MFPCpVTwONayDTMlqk8j6bNwaWvqT7ULrOzLLtDXDy/9hs+zO9ubZp6rdz3/JO71Obl3jumUExyt3c0i65T00X32huTNHMLWjN+Wz8ZPzJ/5cOxaVTiy/ygtrJLJhr3uHenvmLV09vwl7ZsDtU0yS1pyY5gEyXz4/q0ebK6h44SiqWm"/>
                    <input id="ioBlackBox" type="hidden" name="ioBlackBox"
                           value="0400l1oURA1kJHkNf94lis1zts15tY4EpA9psIyKQW5L6LFnJ9sy/q1aTFYetNcL0bwhxjYIVQHTyIXM2hzTk7b6aOTV5e47uAYJR+BRm4sTbEImINsJ9VlMYGTX23I2zuDzEYngAz99aSNUnzToMtTKcaV5TrKFtoyvmGODXWbkrLSLP/wT3etan1A/AJTxnbeOfAHtJofzkmbIB9QxnksoWmbZIYRwZnYiBOIeMU7SprhI185O+yC2f3lLEO0Tay66NZEyiLNePemJKSIdwO9O5ZtntuUkG6NTlHAaq/FaGpFi3n5BO7oQ5k59wrPEjUWh5mNV6QxgbcnqT3LYd4+PRepnwBbZWfKc/hhn/wv/InagbUrxsSdibydD6ceMpaEv8dBcg7vmqafu2yITg/lU2KD0ay5Bj1vO2/Ec1nc2SuEaTRn0G1NCZaC1fbK9PQn1dOIYgHC/3QY1fZwSVtWNySwAqo7XEZwLdYgf2acO/aHvUSbJ+Ltz3R3+1lLYqHZErwVzaMCCExwL/FIbaq53gFbrfzJFk+CKKULPxBs5mS9NMLN3Ool+rVlzlatoq9FJIkQNgVvPfUoEMUscz7kbcnG9B+SIx5AnCkrOClWCgeJMsQ5yIoMlPEXkn+au3XwGRw6NL2GAwt9ss5KMs0PsoG2s0fO33l4+MaoU96nWx3HImSYMrQjSvQ+fB4dyDP9urBNxViwB7+SuvDNCxqNRsKyNzGkmK4M7jmU2L5yi9CWbK17imHctGrjEjVFMhgLyi4PvWoIpyZmpr5zlQx90s1eovP7W+WpQCv10TaNx+XTCCuhAF+nK4ryuBlCYItZJSZapFuFqeQtVPDYLihDanq9ZzbT/DhApJP+uJSqKjN8A6K3HjRQPNotrE1YwzZLxRONsrNmlQ0HEpvsUb5+JrwqQz2ECMnu9PHs6jytXtWZXqLz+1vlqUAr9dE2jcfl0IKh8cj1oeYoZWyHUZkZv+34xaHrehirS4o4dQl0M2yssgvNFlTlNXQdIP3kucAgS5EratbW+vVnoOUezfvN+P6R4OkroTt8BkugGXw8Uh8hD3l35Hzz4flcdl4O5igKy51W+7h4F0Bl+6I2GuOQuzhjFtTiRgfsrFBuutOYnJ3gPOiZrP2SiOWzybLfWtqZlSSY86yVFPwZRDnSn/CeUNkVFqsi4LpFJc4Z/LAAD1EWM8lXpMISOf7T7130BIPii0VbAzVM5zPuCJUUDvOkg9DiEuyx+fdZIO0PdhRirnrsUUA3pDXHzRR0J0Z3KrDBttmdQN12p8jeK6/pdx/gqwgZaj3kuO+LEJ5PWwYdM6limO5vKuxSNesXeVJAxfIU8istbI+GT144PRZZgICbdM5u3WZVNuFbI1qHYo2gdI0DH9QDjUohGlHA+k9XRlIy/sVh5I9SdQmjKB9z7gGdisy6O6hQx+1eP91mRyRCayzC7dVCs73cYjShLhJMAb335liy11neb+tSG2DGsPV7fNIzCqZP5jpiYYjudQVbwvap/BVsWuoYy2HJyl7VayARWq74UUTXTMaoe3u4OmQiu/0lE+ZKFOkdUw49IySEoBK7osS1xgSAgNXecCmtjDq3v8XnR5Y0tqtDnyVWXA0KaDxEqJXZUcNfCP2HlQULKw+IOalqnyDD1XZBD5Hib4TPilrdzeNWV2gQ="/>
                    <input type="hidden" name="action" value="login"/>
                    <input type="hidden" name="onOK" id="ovride" value="/emp/u/shop-by-product.vm?"/>

                    <div class="form-group">
                        <p><label id="emailLabel" for="email">Email Address</label></p>
                        <input type="text" id="email" name="email" class="req  form-control validate-login" value=""
                               data-validate="email"/>
                    </div>
                    <div class="form-group">
                        <p><label id="passwordLabel" for="password">Password</label></p>
                        <input type="password" id="password" name="password" class="form-control validate-login"
                               data-validate="password"/>
                    </div>


                    <div class="form-group">
                        <button type="submit" class="btn btn-primary submit-login">Sign In</button>
                        <span class="small"><a href="/emp/u/forget.do" class="small">Forgot your password?</a></span>
                    </div>
                    <div class="form-group">
                        <p><a href="#" class="small bannerNonAuthLanding d_login" aria-hidden="true">Don't have an
                                account?</a></p>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>


<div class="modal fade" id="joinModal" role="dialog" aria-labelledby="joinModal" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="dark_bg"></div>
            <div class="modal-header">
                <div class="modal-header-content">
                    <div class="pull-left" id="offer_details">
                        <img src="" id="modal-image"/>

                        <p class="ellipse"></p>
                    </div>
                    <img src="/md5/fb/fbee90620c1dcd4398cc073aaff96208_x-mark-32.png" class="close modal-close"
                         data-dismiss="modal" aria-hidden="true"/>
                </div>
                <div class="clearfix"></div>
            </div>
            <div class="modal-body">
                <div class="container tc onboarding-container">
                    <div class="regForm-fb">
                        <h1 id="onboarding-logo"></h1>

                        <h2>Rewards for all the things you already do online</h2>

                        <button class="btn facebook-btn">
                            <img src="/md5/75/7521ce5ff646a73ed76cb205a8f0710a_fb_logo.png" alt="">
                            SIGN UP WITH FACEBOOK
                        </button>
                        <p class="or-text">or</p>
                    </div>
                    <form id="regForm" action="https://www.mypoints.com/emp/u/signup.do?" method="POST"
                          autocomplete="off">
                        <div class="regForm-step-1">
                            <div class="mp-alert alert alert-danger collapse" role="alert" id="js_alert_box">
                                <p></p>
                            </div>
                            <input id="fpBlackBox" type="hidden" name="fpBlackBox"
                                   value="0400YF6d92uvKm0HcCiyOFFxUMlzFK4+HJYR2qfuC8E3WE6nmR1rkk0iDlO3JhDrtCIIB0tlXKkas1R4s/0FdxWuLjJaxznjUW9SHdXZkQaUIFEIgLZAX23/tJ7OmB0uDhG9lU99UoH2xklcNA8ixR0zS0+xbMUE8h2KlSmUU6OC8NyE+lLhUE3lwZ/0XCV447+4lfxDDBnM8UQmINsJ9VlMYEViCxsA6e7SfuSKPp7f+XIKOVTTL2g136yNzGkmK4M7jmU2L5yi9CWbK17imHctGrjEjVFMhgLyi4PvWoIpyZmpr5zlQx90s1eovP7W+WpQCv10TaNx+XTCCuhAF+nK4ryuBlCYItZJSZapFuFqeQtVPDYLihDanryG1jJH7UoiFqHfv6lgZq+NNE4xK4FhMTBnxg3zCYy967JoEZK/VjMyOQqb8HsHfXl+wW3iD3dAosTzKoxVC6fSPFFgCaMpvU/h6EFXXmXEh1yskTEl+A9i3n5BO7oQ5v8xPG8qs4/gecM7oPEAYvuyPr0t8ztVFm6jS7ShRfhI96FOpPevDWup0i8thex6e7xUN0sYF8r08f8uCcC0xOD+DPTu5VIg0CDMnwUlr/77igntszAWTJIovdg+R73clNhwlApTJ7JWmz61zhzFB1f1wfrmFi9WBDGZ3r5ybWV4FvE4uvDhMHW2GdZX3Mpj8tZTEoJvIZdBSKs0AnQH2X0OaEfyI1Pm2Yw9jt8VIAfmbQHh4nHyxhCjmkswulVPWBRQDekNcfNFqzj8ZFJeItA4lrpTmKkV78jwjs5Ca2/wBdhim9vK/UvfmLWxq6zDVHdYcifmtkxPT/SbhiQ4jA8NczN14q3ly0ETe76Xek/NxA9x3qRKbjObZRutTbZvc93pZ/WuuaUQogaK3VDujNlyFcSkqakry/IQWZNQD2UtqgxBwcdDGoLzXifX1EWSVGE7VDaOZWB8+sD1cMLQtEUWvNAyhGp9nSYTiKTomL2rFxa8Swx13b4r1zXabX6+SdxXrsYM3azZeFeMfnv/EInOqIOhcMi7n2iGwINtV/F+edppiQDvITl1wb7F7C5QsJ2LMqBxNKaSMnP+fdPF/qtzQID5S9pyqYcAvL6sxAasfF/2L1A77RGCBVWpS/i7iTvv4QX63e31WqXfNs0JT5P+xQO+Re5U6u+cSnPkjTzCzKFUSps5U3QFxZNH2aP5V6pk4tsw9s9qYHuNtGyojUd0Bav40W2nVokz24S6tYul2zEN+eiXcUEuZ4S4abMMLZJ5FTY4tsztg7zeRH/PMMEMGAac3GnF16hIYpIvTbLT95s3gp0d1Vz//OeUg9egoJ/vyqEIGfWU6HvhZykFdHVQt1Hh0KnWMQjYVuBkBC6TBUS9Xb0nzAsx41Ed8dCpzzLoFNQcP6Ef/6HwJsgsVyc5OlFhAiJSUSmCJWlROE72U392TyFwft2N7jmc5FzZtNeOXhUDPNKgIz7EWYPYsPAVfwwL0MFPCpVTwONayDTMlqk8j6bNwaWvqT7ULrOzLLtDXDy/9hs+zO9ubZp6rdz3/JO71Obl3jumUExyt3c0i65T00X32huTNHMLWjN+Wz8ZPzJ/5cOxaVTiy/ygtrJLJhr3uHenvmLV09vwl7ZsDtU0yS1pyY5gEyXz4/q0ebK6h44SiqWm"/>
                            <input id="ioBlackBox" type="hidden" name="ioBlackBox"
                                   value="0400l1oURA1kJHkNf94lis1zts15tY4EpA9psIyKQW5L6LFnJ9sy/q1aTFYetNcL0bwhxjYIVQHTyIXM2hzTk7b6aOTV5e47uAYJR+BRm4sTbEImINsJ9VlMYGTX23I2zuDzEYngAz99aSNUnzToMtTKcaV5TrKFtoyvmGODXWbkrLSLP/wT3etan1A/AJTxnbeOfAHtJofzkmbIB9QxnksoWmbZIYRwZnYiBOIeMU7SprhI185O+yC2f3lLEO0Tay66NZEyiLNePemJKSIdwO9O5ZtntuUkG6NTlHAaq/FaGpFi3n5BO7oQ5k59wrPEjUWh5mNV6QxgbcnqT3LYd4+PRepnwBbZWfKc/hhn/wv/InagbUrxsSdibydD6ceMpaEv8dBcg7vmqafu2yITg/lU2KD0ay5Bj1vO2/Ec1nc2SuEaTRn0G1NCZaC1fbK9PQn1dOIYgHC/3QY1fZwSVtWNySwAqo7XEZwLdYgf2acO/aHvUSbJ+Ltz3R3+1lLYqHZErwVzaMCCExwL/FIbaq53gFbrfzJFk+CKKULPxBs5mS9NMLN3Ool+rVlzlatoq9FJIkQNgVvPfUoEMUscz7kbcnG9B+SIx5AnCkrOClWCgeJMsQ5yIoMlPEXkn+au3XwGRw6NL2GAwt9ss5KMs0PsoG2s0fO33l4+MaoU96nWx3HImSYMrQjSvQ+fB4dyDP9urBNxViwB7+SuvDNCxqNRsKyNzGkmK4M7jmU2L5yi9CWbK17imHctGrjEjVFMhgLyi4PvWoIpyZmpr5zlQx90s1eovP7W+WpQCv10TaNx+XTCCuhAF+nK4ryuBlCYItZJSZapFuFqeQtVPDYLihDanq9ZzbT/DhApJP+uJSqKjN8A6K3HjRQPNotrE1YwzZLxRONsrNmlQ0HEpvsUb5+JrwqQz2ECMnu9PHs6jytXtWZXqLz+1vlqUAr9dE2jcfl0IKh8cj1oeYoZWyHUZkZv+34xaHrehirS4o4dQl0M2yssgvNFlTlNXQdIP3kucAgS5EratbW+vVnoOUezfvN+P6R4OkroTt8BkugGXw8Uh8hD3l35Hzz4flcdl4O5igKy51W+7h4F0Bl+6I2GuOQuzhjFtTiRgfsrFBuutOYnJ3gPOiZrP2SiOWzybLfWtqZlSSY86yVFPwZRDnSn/CeUNkVFqsi4LpFJc4Z/LAAD1EWM8lXpMISOf7T7130BIPii0VbAzVM5zPuCJUUDvOkg9DiEuyx+fdZIO0PdhRirnrsUUA3pDXHzRR0J0Z3KrDBttmdQN12p8jeK6/pdx/gqwgZaj3kuO+LEJ5PWwYdM6limO5vKuxSNesXeVJAxfIU8istbI+GT144PRZZgICbdM5u3WZVNuFbI1qHYo2gdI0DH9QDjUohGlHA+k9XRlIy/sVh5I9SdQmjKB9z7gGdisy6O6hQx+1eP91mRyRCayzC7dVCs73cYjShLhJMAb335liy11neb+tSG2DGsPV7fNIzCqZP5jpiYYjudQVbwvap/BVsWuoYy2HJyl7VayARWq74UUTXTMaoe3u4OmQiu/0lE+ZKFOkdUw49IySEoBK7osS1xgSAgNXecCmtjDq3v8XnR5Y0tqtDnyVWXA0KaDxEqJXZUcNfCP2HlQULKw+IOalqnyDD1XZBD5Hib4TPilrdzeNWV2gQ="/>


                            <input type="hidden" name="action" id="empFormAction" value="signup"/>
                            <input type="hidden" name="_mpst"
                                   value="n:939220554:1474904809823:95773c04fbacb031d95a72d03e279917316e47a6"/>
                            <input type="hidden" name="onOK" id="ovride" value="/emp/u/shop-by-product.vm?"/>
                            <input type="hidden" name="refCode" value=""/>
                            <input type="hidden" name="cell" size="30" value="wD_En79EN575UcgmGi90"/>
                            <input type="hidden" name="newLeadCode" value=""/>
                            <input type="hidden" name="timestamp" value=""/>
                            <input type="hidden" name="hash" value="">
                            <input type="hidden" name="proceed" value="Signup">


                            <input type="text" id="email" tabindex="1" name="email" class=" email-input validate "
                                   data-validate="email" placeholder="EMAIL"/><br/>
                            <input type="password" tabindex="3" class="password-input validate" placeholder="PASSWORD"
                                   id="password1" data-validate="password" name="password1"/>
                            <input type="hidden" id="password2" name="password2" value=""/><br/>
                            <br>
                            <button class="regForm-continue btn btn-primary" type="button">Continue</button>
                            <br><br>

                            <p class="mt20 login_m">Been here before?
                                <a href="https://www.mypoints.com/emp/u/login.do" class="loginModal hidden-xs"
                                   data-dismiss="modal" data-onok="">Sign In</a>
                                <a href="https://www.mypoints.com/emp/u/login.do" class="hidden-sm hidden-md hidden-lg">Sign
                                    In</a>
                            </p>

                            <p class="np-link"><a href="/emp/u/shop-by-product.vm?" target="_blank">Continue without
                                    earning Points </a></p><br>
                        </div>

                        <div class="regForm-step-2" style="display:none">
                            <h2>Step 1 of 3</h2>

                            <h3>Tell us a little bit about yourself to help us personalize your feed.</h3>

                            <div class="row">
                                <div class="col-sm-6">
                                    <label>I am</label>
                                </div>
                                <div class="col-sm-4 gender-select validate" data-validate="gender">
                                    <input type="hidden" name="genderCode" value="" id="gender-input" data-opt="true"/>
                                    <a class="male-icon"></a>
                                    <a class="female-icon"></a>
                                </div>
                            </div>
                            <!--.row -->

                            <div class="row">
                                <div class="col-sm-6">
                                    <label>My name is</label>
                                </div>
                                <div class="col-sm-6">
                                    <input type="text" tabindex="1" name="name.full" id="fullName" mypoints:req="string"
                                           class="validate col-sm-7" data-validate="name" value=""
                                           placeholder="John Doe" data-opt="true"/>
                                    <input type="hidden" name="name.first" id="firstName" value=""/>
                                    <input type="hidden" name="name.last" id="lastName" value=""/>
                                </div>
                            </div>
                            <!--.row -->

                            <div class="row">
                                <div class="col-sm-6">
                                    <label>My birthday is</label>
                                </div>

                                <div class="col-xs-2 hidden-md hidden-lg hidden-sm">&nbsp;</div>
                                <div class="col-sm-4 col-xs-8 dob">
                                    <span><input type="text" tabindex="3" id="birthDateMonth" name="birthDateMonth"
                                                 size="2" value="" maxlength="2" class="validate" data-validate="date"
                                                 placeholder="MM" onkeyup="nextInputField(this,this.value)">/</span>
                                    <span><input type="text" tabindex="4" id="birthDateDay" name="birthDateDay" size="2"
                                                 maxlength="2" value="" class="validate" data-validate="date"
                                                 placeholder="DD" onkeyup="nextInputField(this,this.value)">/</span>
                                    <span><input type="text" tabindex="5" id="birthDateYear" name="birthDateYear"
                                                 size="4" maxlength="4" value="" placeholder="YYYY" style="width: 50px;"
                                                 onkeyup="nextInputField(this,this.value)" class="validate"
                                                 data-validate="date"></span>

                                </div>
                            </div>
                            <!--.row -->

                            <div class="row">
                                <div class="col-sm-6">
                                    <label>My zipcode is</label>
                                </div>
                                <div class="col-sm-6">
                                    <input type="text" tabindex="5" name="zipcode" data-validate="zip"
                                           id="address.postalCode" class="validate col-sm-4" mypoints:req="zip" value=""
                                           size="10" placeholder="12345"/>
                                </div>
                            </div>
                            <!--.row -->

                            <p class="terms">Clicking "Join Now" indicates that you have read and agree to our <a
                                    href="/emp/u/terms.vm" target="_blank">Terms of Use</a> and <a
                                    href="/emp/u/privacy.vm" target="_blank">Privacy Policy</a>.</p>

                            <div class="row">
                                <button type="submit" value="Join Now" id="f_submit" class="btn btn-primary submit">Join
                                    Now
                                </button>
                                <br/>
                            </div>
                        </div>
                    </form>

                </div>

            </div>
        </div>
    </div>
</div>

<script type="text/javascript" src="js/modal.js" ></script>

<!-- modal favorites -->


<script language="javascript" src="js/onload.vm" type="text/javascript"></script>
<script type="text/javascript" src="js/placeholder.js"></script>


<script language="javascript" src="js/mp-shopping.js"></script>


<script>
    window.dataLayer = window.dataLayer || [];
    $("div.container").on("click", "a.promoClick", function (event) {
        event.preventDefault();
        var url = $(this).attr("href");

        dataLayer.push({
            'event': 'promotionClick',
            'promoClickLabel': $(this).data("pid") + ' > ' + $(this).data("pname") + ' > ' + $(this).data("pcre") + ' > ' + $(this).data("ppos"),
            'ecommerce': {
                'promoClick': {
                    'promotions': [
                        {
                            'id': $(this).data("pid"),
                            'name': $(this).data("pname"),
                            'creative': $(this).data("pcre"),
                            'position': $(this).data("ppos")
                        }
                    ]
                }
            },

            'eventCallback': function () {
                document.location = url;
            }
        });
    });

    $("div.container").on("click", "a.storeClick", function (event) {
        event.preventDefault();
        var url = $(this).attr("href");

        if ($(this).data("list") && ($(this).data("list") !== "" )) {
            url = url + (url.indexOf('?') === -1 ? '?' : '&') + 'pga_pal=' + $(this).data("list");
        }

        dataLayer.push({
            'event': 'storeClick',
            'ecommerce': {
                'click': {
                    'actionField': {'list': $(this).data("list"), 'action': 'click'},
                    'products': [
                        {
                            'id': $(this).data("ocid"),
                            'brand': $(this).data("brand"),
                            'position': $(this).data("pos"),
                            'Points Text': $(this).data("points"),
                            'Package': $(this).data("package")
                        }
                    ]
                }
            },

            'eventCallback': function () {
                document.location = url;
            }
        });
    });

    $("body").on("click", "a.empClick", function (event) {
        var _closestNoAuth = $(this).closest(".noAuth") || $(this).closest(".bannerNonAuthLanding");
        if ($(this).hasClass("noAuth") || (_closestNoAuth && _closestNoAuth.length > 0)) {
            return;
        }
        event.preventDefault();
        var url = $(this).attr("href");

        url = url + (url.indexOf('?') === -1 ? '?' : '&') + 'src=GA_pa_add';

        // product list
        if ($(this).data("list") && ($(this).data("list") !== "" )) {
            url = url + '&src=GA_pal_' + encodeURIComponent($(this).data("list"));
        }

        // brand
        if ($(this).data("brand") && ($(this).data("brand") !== "" )) {
            url = url + '&src=GA_pr1br_' + encodeURIComponent($(this).data("brand"));
        }

        // variant
        if ($(this).data("variant") && ($(this).data("variant") !== "" )) {
            url = url + '&src=GA_pr1va_' + encodeURIComponent($(this).data("variant"));
        }

        window.open(url, '');
    });
</script>


<div id="fb-root"></div>
<script type="text/javascript" src="js/onboarding.js" ></script>
<script type="text/javascript" src="js/login-validation.js" ></script>
<script type="text/javascript" src="js/datepicker-moment.min.js"></script>


<script type="text/javascript">
    var prefillForm = "";

    window.fbAsyncInit = function () {
        FB.init({
            appId: '215187277353',
            cookie: true,
            xfbml: true,
            version: 'v2.1'
        });
    };

    // Load the SDK asynchronously
    (function (d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s);
        js.id = id;
        js.src = "//connect.facebook.net/en_US/sdk.js";
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));

    //clear error msgs
    function clearErrors() {
        $('.error').tooltip('hide');
        $('input.error').removeClass('error');
        $('#js_alert_box').html('');
        $('#js_alert_box').hide();
    }

    function fb_connect() {
        clearErrors();
        FB.login(function (response) {
            signUpCallback(response);
        }, {scope: 'public_profile,email'});
    }


    function signUpCallback(response) {
        console.log(response);
        if (response.status === 'connected') {
            var fb_accessToken = response.authResponse.accessToken;
            FB.api('/me', {fields: 'name,email,id,gender,first_name,last_name,age_range'}, function (response) {
                console.log('Fb API response');
                console.log(response);
                var email = response.email;
                var name = response.name;
                var first_name = response.first_name;
                var last_name = response.last_name;
                var gender = response.gender;
                var fb_id = response.id;
                var age_range = response.age_range;
                console.log(age_range);
                if (age_range.min != undefined && age_range.min) {
                    if (age_range.min < 18) {
                        $('#regForm #birthDateMonth').val(1);
                        $('#regForm #birthDateDay').val(1);
                        $('#regForm #birthDateYear').val(new Date().getFullYear());
                    }
                }

                if (email != undefined && email != "") {
                    $('#regForm #email').val(email);

                    if ($('#regForm #firstName') != undefined && first_name)
                        $('#regForm #firstName').val(first_name);

                    if ($('#regForm #lastName') != undefined && last_name)
                        $('#regForm #lastName').val(last_name);

                    if ($('#regForm #fullName') != undefined && name)
                        $('#regForm #fullName').val(name);
                    else if ($('#regForm #fullName') != undefined && first_name && last_name)
                        $('#regForm #fullName').val(first_name + " " + last_name);

                    if ($('#regForm #gender-input') != undefined && gender) {
                        $('#regForm #gender-input').val(gender);
                        if (gender === 'male') {
                            $('#regForm #gender-input').val('M');
                        } else if (gender === 'female') {
                            $('#regForm #gender-input').val('F');
                        }
                    }

                    if (fb_id && fb_id != "")
                        setCookie('mp_fbId', fb_id, 2);

                    if (prefillForm == "true") {
                        $('button.facebook-btn').hide();
                        $('#js_alert_box').html('<p>Please verify the below details and click "Join MyPoints"</p>');
                        $('#js_alert_box').show();
                    } else {
                        $('#regForm').submit();
                    }
                }
                else {
                    // TODO::
                    console.log('Member has no email id with facebook account.. TBD??');
                    $('#js_alert_box').html('<p>Looks like your facebook account has not been linked with an email address <br/>Please try again or sign up with your email address below.</p>');
                    $('#js_alert_box').show();
                }
            });

        } else if (response.status === 'not_authorized') {
            $('#js_alert_box').html('<p>Looks like you did not give permissions to the MyPoints app. Please try again or sign up with your email address below.</p>');
            console.log('Looks like you did not give permissions to the MyPoints app. Please try again or sign up with your email address below.');
            $('#js_alert_box').show();
        } else {
            $('#js_alert_box').html('<p>Oh! could not sign up with Facebook. Please try again or sign up with your email address below.</p>');
            console.log('Error - Could not connect to Facebook. Please sign up with your email address.');
            $('#js_alert_box').show();
        }
    }

    function setCookie(name, value, days) {
        if (days) {
            var date = new Date();
            date.setTime(date.getTime() + (days * 24 * 60 * 60 * 1000));
            var expires = "; expires=" + date.toGMTString();
        }
        else var expires = "";
        document.cookie = name + "=" + value + expires + "; path=/emp/u";
    }

    $(document).ready(function () {
        /*Facebook connect  */
        $('button.facebook-btn').click(fb_connect);
    });
</script>


</body>
</html>
