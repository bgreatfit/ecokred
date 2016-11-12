<!DOCTYPE html>

<html lang="en" ng-app="MyPointsApp">


<meta http-equiv="content-type" content="text/html;charset=UTF-8"/>
<!-- /Added by HTTrack -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">


    <meta property="fb:app_id" content="215187277353"/>
    <meta property="og:site_name" content="Econkredit.com"/>
    <meta property="og:title" content="MyPoints: Your Daily Rewards Program"/>
    <meta property="og:description"
          content="Earn Points by shopping online, playing games, taking surveys, reading emails, and referring friends. Points can be redeemed for gift cards, gas cards, travel opportunities, or cash."/>

    <!--    <meta name="google-site-verification" content="9Ed_m6qoz-m1-7CQsfuqnfwJP_N-9ExNRuK6BWSTZ6c"/>-->

    <base>
    <link rel="shortcut icon" href="images/favicon1.png">
    <title>EconKredit: Your Daily Rewards Program</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/bootstrap-drawer.min.css" rel="stylesheet">
    <link href="css/style_joo.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/reward.css" rel="stylesheet" type="text/css">
    <link href="css/style.css" rel="stylesheet">
    <link href="css/brown-font.css" rel="stylesheet">
    <link href="css/tiles.css" rel="stylesheet">
    <link href="css/javascript.css" rel="stylesheet">


    <link href="css/style1.css" rel="stylesheet" type="text/css">
    <link href="css/style2.css" rel="stylesheet" type="text/css">


    <link href="css/store-tile-extended.css" rel="stylesheet" type="text/css">
    <script src="js/jquery-1.11.3.min.js"></script>
    <script src="js/mainmenu/bootstrap.min.js"></script>
    <script src="js/drawer.min.js"></script>
    <script src="js/main.js"></script>
    <script src="js/typeahead.min.js"></script>



    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>


<!-- Google Tag Manager -->
<noscript><iframe src="//www.googletagmanager.com/ns.html?id=GTM-T88B2T"
                  height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
        new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
        j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
        '//www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-T88B2T');</script>
<!-- End Google Tag Manager -->






<div class="header navbar navbar-fixed-top" id="main-header" role="navigation" ng-controller="HeaderController">
    <div class="container-fluid">
        <div class="navbar-header">
            <a href="http://econkredit.com" id="logo" class="navbar-left pull-left hide-on-focus"><h1>EconKredit</h1></a>
            <button type="button" class="navbar-toggle pull-left hide-on-focus" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Menu</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>

            <form class="navbar-form search navbar-left pull-left hidden-md hidden-lg"  ng-submit="searchHandler.handleSearch()" role="search">
                <i class="glyphicon glyphicon-search glyph-flip"></i>
                <input type="text" class="typeahead" placeholder="Search" id="main-search-collapse" name="kw" autocomplete="off" required="true" ng-model="searchHandler.kw" /><!--IMPORTANT #main-search is used in js dont change -->
                <input type="submit" value="Submit" class="invisible_btn"/>
                <a class="clear-text" data-target="#main-search-collapse">&times;</a>
            </form>


            <ul class="nav navbar-nav navbar-left pull-right hidden-md hidden-lg">
                <li style="float:right;"><a class="navbar-right pull-right nav-join bannerNonAuthLanding" href="register.php" data-toggle="modal" data-target="#joinModal">Join Now</a></li>
                <li style="float:right;"><a class="navbar-right pull-right" href="register.php" class="loginModal" data-onok="#" >Sign In</a></li>
            </ul>
        </div><!--.navbar-header-->
        <div class="navbar-collapse collapse">
            <ul class="nav navbar-nav navbar-left hide-on-focus">
                <li class="dropdown">
                    <a href="/special-shops.php" class="dropdown-toggle" data-toggle="dropdown">Shop <span class="caret hidden-md hidden-lg"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="/special-shops.php">Special Shops</a></li>
                        <li><a href="/products.php">Products</a></li>
                    </ul>
                </li>
                <li class="dropdown ">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Hot Promos<span class="caret hidden-md hidden-lg"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="/hot-products.php">Hot Products</a></li>
                        <li><a href="/refer-a-friend.php">Refer-a-Friend</a></li>
                    </ul>
                </li>
                <li class="dropdown ">
                    <a href="services.php" class="dropdown-toggle" data-toggle="dropdown">Services <span class="caret hidden-md hidden-lg"></span></a>

                </li>
                <li class="dropdown ">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Rewards<span class="caret hidden-md hidden-lg"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="/products-reward.php">Products Reward</a></li>
                        <li><a href="/services-reward.php">Services Reward</a></li>
                    </ul>
                </li>
                <li class="dropdown ">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Our Partners <span class="caret hidden-md hidden-lg"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="/where-earn.php">Where To Earn Points</a></li>
                        <li><a href="/where-redeem.php">Where To Redeem Points</a></li>
                    </ul>
                </li>

                <li	class="hidden-md hidden-lg">
                    <a href="#" target="_blank">Help</a>
                </li>
                <li class="hidden-xs hidden-md hidden-lg"><a href="login.php" class="loginModal" data-onok="">Sign In</a></li>
                <li class="hidden-sm hidden-md hidden-lg"><a href="login.php">Sign In</a></li>
                <li class="hidden-md hidden-lg"><a class="bannerNonAuthLanding" href="register.php">Join Now</a></li>
            </ul>

            <form class="navbar-form search navbar-left hidden-sm hidden-xs" ng-submit="searchHandler.handleSearch()" role="search">
                <i class="glyphicon glyphicon-search glyph-flip"></i>
                <input type="text" class="typeahead" placeholder="Search" id="main-search" name="kw" autocomplete="off" required="true" ng-model="searchHandler.kw" /><!--IMPORTANT #main-search is used in js dont change -->
                <input type="submit" value="Submit" class="invisible_btn"/>
                <a class="clear-text" data-target="#main-search">&times;</a>
            </form>

            <ul class="nav navbar-nav navbar-right hidden-sm hidden-xs">
                <li><a href="login.php" class="loginModal" data-onok="">Sign In</a></li>
                <li class="nav-join"><a class="bannerNonAuthLanding" href="register.php">Join Now</a></li>
            </ul>
        </div><!--.collapse navbar-collapse-->

    </div><!--.container-fluid-->
</div><!--.header-->




<div id="alerts-container">





</div>



<div class="container">

<div id="RewardsController" ng-controller="RewardsController" ng-init="setSrcParams({pageName:'PG_REDEEM_ALL_BRANDS',transactionType:'redeem',moduleName:'MOD_REWARDS_LIST'})">

<div ng-if="!selectedReward && !successResponse" id="catalog-container" class="has-inner-drawer">
 <div class="catalog-right">
        <div class="rewards_loader" ng-show="rewardsLoading"></div>
        <h2 ng-cloak ng-if="!rewardsLoading && rewardsList.length > 0">Rewards ({{rewardsList.length}})</h2>
        <a ng-cloak ng-if="!rewardsLoading" id="drawer-control" href="#catalog-drawer" data-toggle="drawer" href="#catalog-drawer" aria-foldedopen="false" aria-controls="catalog-drawer" class="btn btn-primary btn-lg visible-xs visible-sm">Filters</a>
        <div class="clearfix"></div>
        <p ng-if="!rewardsLoading && rewardsList.length <= 0" ng-cloak>There are no gift cards that meet your search criteria</p>
        <div id="rewards-container" ng-if="!rewardsLoading" ng-cloak>
            <div class="rewards row" ng-cloak>
                <div ng-if="rewardsList.length > 0" class="col-lg-3 col-md-4 col-sm-4 col-xs-6 rewardsListItem {{(!memberInfo.isKnown)? 'disabled' : ''}}" ng-repeat="_reward in rewardsList track by _reward.name" ng-click="handleRewardClick(_reward, $event)">
                    <div class="listItem">
                        <div class="catalog-image">
                            <div class="catalog-item" ng-attr-style="filter:: progid:DXImageTransform.Microsoft.gradient(GradientType=0,startColorstr='{{_reward.cd.TC}}', endColorstr='{{_reward.cd.BC}}');
												background-image:-webkit-linear-gradient(top, {{_reward.cd.TC}}, {{_reward.cd.BC}});
												background-image:-ms-linear-gradient(top, {{_reward.cd.TC}}, {{_reward.cd.BC}});
												background-image:-o-linear-gradient(top, {{_reward.cd.TC}}, {{_reward.cd.BC}});
												background-image:linear-gradient(to bottom, {{_reward.cd.TC}}, {{_reward.cd.BC}});
												background-repeat: repeat-x;">
                                <img class="img-responsive" ng-src="{{_reward.displayImageURL}}" />
                            </div>
                        </div>
                        <div class="m_desc" >
                            <p class="m_name small" ng-bind-html="_reward.displayname"></p>
                            <p class="m_lpts" >Starting from {{_reward.l_pts | number}} Points</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
</div>

<footer class="tc">
    <a href="http://www.econkredit.com/"><h1 id="footer-logo">EconKredit</h1></a>

    <p class="ninety-nine">Rewarding Our Members Since 2016</p>
    <hr/>
    <div class="container">
        <div class="row tl">
            <div class="col-xs-10 col-xs-push-2 col-md-push-0 col-md-6 col-lg-5 col-lg-push-1 col-sm-11 col-sm-push-1">
                <div class="row mb">
                    <div class="col-xs-6 col-sm-4 col-sm-push-2 col-md-6 col-md-push-0">
                        <h4>ABOUT</h4>
                        <ul>
                            <li><a href="how-mypoints-works.html">How EconKredit Works</a></li>
                            <li><a href="http://help.mypoints.com/">FAQs</a></li>

                            <li><a href="http://www.prodege.com/careers/" target="_blank">Careers</a></li>
                        </ul>
                    </div>

                    <div class="col-xs-6 col-sm-4 col-sm-push-2 col-md-6 col-md-push-0">
                        <h4>POLICIES</h4>
                        <ul>
                            <li>
                                <a href="privacy.html">Privacy Policy</a>
                            </li>
                            <li><a href="terms.html">Terms of Use</a></li>
                            <li><a href="shopping-extension/eula.html">Score! Privacy Policy &amp; EULA</a></li>
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
                            <li>9, Allen Avenue</li>
                            <li>Ikeja, Lagos</li>
                            <li><a href="login.html">Contact Member Services </a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--.container-->
    <p class="social">Looking for more great deals? Follow us! <br/>
        <a href="https://www.facebook.com/econkredit" target="_blank"><img
                src="images/icon/icon-facebook.png"/></a>
        <a href="https://www.twitter.com/econkredit" target="_blank"><img
                src="images/icon/icon-twitter.png"/></a>
    </p>

    <p class="copyright">&copy; 2016 EconKredit.com | All Rights Reserved</p>
</footer>





<script language="javascript" src="js/onload.vm" type="text/javascript"></script>
<script language="javascript"  type="text/javascript src="js/placeholder.js"></div>


<script language="javascript" src="js/mp-shopping-deals.js" type="text/javascript"></script>


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
<script type="text/javascript" src="js/onboarding.js"></script>
<script type="text/javascript" src="js/login-validation.js"></script>
<script type="text/javascript" src="js/datepicker-moment.min.js"></script>




<!-- animations -->

<script src="js/mainmenu/bootstrap.min.js"></script>

<!-- Start JavaScript -->

<script src="js/animations/js/animations.min.js" type="text/javascript"></script>
<script src="js/animations/js/smoothscroll.js" type="text/javascript"></script>

<!-- slide panel -->


<script type="text/javascript" language="JavaScript" src="js/g/io/static_wdp.js"></script>
<script type="text/javascript" language="JavaScript" src="iojs/latest/dyn_wdp.js"></script>

<!-- mega menu -->
<!-- jQuery library -->
<script src="js/animations/js/animations.min.js" type="text/javascript"></script>
<script src="js/animations/js/smoothscroll.js" type="text/javascript"></script>

<!-- slide panel -->




<!-- mega menu -->


<!-- Start JavaScript -->

<script src="js/custom.js"></script> <!-- Custom Js file for javascript in html -->

<script src="js/jquery.easing.1.3.min.js"></script> <!-- jQuery Easing -->
<script src="js/jquery-ui/jquery.ui.core.js"></script> <!-- jQuery Ui Core-->
<script src="js/jquery-ui/jquery.ui.widget.js"></script> <!-- jQuery Ui Widget -->
<script src="js/jquery-ui/jquery.ui.accordion.js"></script> <!-- jQuery Ui accordion-->
<script src="js/jquery-cookie.js"></script> <!-- jQuery cookie -->
<script src="js/ddsmoothmenu.js"></script> <!-- Nav Menu ddsmoothmenu -->
<script src="js/jquery.flexslider.js"></script> <!-- Flex Slider  -->
<script src="js/colortip.js"></script> <!-- Colortip Tooltip Plugin  -->
<script src="js/tytabs.js"></script> <!-- jQuery Plugin tytabs  -->
<script src="js/jquery.ui.totop.js"></script> <!-- UItoTop plugin  -->
<script src="js/carousel.js"></script> <!-- jQuery Carousel  -->
<script src="js/jquery.isotope.min.js"></script> <!-- Isotope Filtering  -->
<script src="js/twitter/jquery.tweet.js"></script> <!-- jQuery Tweets -->
<script src="js/jflickrfeed.min.js"></script> <!-- jQuery Flickr -->
<script src="js/social-options.js"></script> <!-- social options , twitter, flickr.. -->
<script src="js/doubletaptogo.js"></script> <!-- Touch-friendly Script  -->
<script src="js/fancybox/jquery.fancybox.js"></script> <!-- jQuery FancyBox -->
<script src="js/jquery.sticky.js"></script> <!-- jQuery Sticky -->
<script src="js/custom.js"></script> <!-- Custom Js file for javascript in html -->



</body>
</html>
