<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">


    <meta property="fb:app_id" content="215187277353"/>
    <meta property="og:site_name" content="Econkredit.com"/>
    <meta property="og:title" content="EconKredit: Your Daily Rewards Program"/>
    <meta property="og:description" content="Earn Points by shopping online, playing games, taking surveys, reading emails, and referring friends. Points can be redeemed for gift cards, gas cards, travel opportunities, or cash."/>

<!--    <meta name="google-site-verification" content="9Ed_m6qoz-m1-7CQsfuqnfwJP_N-9ExNRuK6BWSTZ6c"/>-->

    <base>
    <link rel="shortcut icon" href="images/favicon1.png">
    <title>EconKredit: Your Daily Rewards Program</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/bootstrap-drawer.min.css" rel="stylesheet">
    <link href="css/style_joo.css" rel="stylesheet">
    <link href="css/font-awesome/css/font-awesome.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->

    <link href="css/tiles.css" rel="stylesheet">
    <link href="css/javascript.css" rel="stylesheet">


    <link href="css/style2.css" rel="stylesheet" type="text/css">
    <link href="css/font.css" rel="stylesheet" type="text/css">

    <link href="css/store-tile-extended.css" rel="stylesheet" type="text/css">
	<link href="slick/slick.css" rel="stylesheet">
	<link href="slick/slick-theme.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

    <!-- jssor slider style -->
    <style>
        /* jssor slider bullet navigator skin 05 css */
        /*
        .jssorb05 div           (normal)
        .jssorb05 div:hover     (normal mouseover)
        .jssorb05 .av           (active)
        .jssorb05 .av:hover     (active mouseover)
        .jssorb05 .dn           (mousedown)
        */
        .jssorb05 {
            position: absolute;
        }
        .jssorb05 div, .jssorb05 div:hover, .jssorb05 .av {
            position: absolute;
            /* size of bullet elment */
            width: 16px;
            height: 16px;
            background: url('images/b05.png') no-repeat;
            overflow: hidden;
            cursor: pointer;
        }
        .jssorb05 div { background-position: -7px -7px; }
        .jssorb05 div:hover, .jssorb05 .av:hover { background-position: -37px -7px; }
        .jssorb05 .av { background-position: -67px -7px; }
        .jssorb05 .dn, .jssorb05 .dn:hover { background-position: -97px -7px; }

        /* jssor slider arrow navigator skin 22 css */
        /*
        .jssora22l                  (normal)
        .jssora22r                  (normal)
        .jssora22l:hover            (normal mouseover)
        .jssora22r:hover            (normal mouseover)
        .jssora22l.jssora22ldn      (mousedown)
        .jssora22r.jssora22rdn      (mousedown)
        */
        .jssora22l, .jssora22r {
            display: block;
            position: absolute;
            /* size of arrow element */
            width: 40px;
            height: 58px;
            cursor: pointer;
            background: url('images/a22.png') center center no-repeat;
            overflow: hidden;
        }
        .jssora22l { background-position: -10px -31px; }
        .jssora22r { background-position: -70px -31px; }
        .jssora22l:hover { background-position: -130px -31px; }
        .jssora22r:hover { background-position: -190px -31px; }
        .jssora22l.jssora22ldn { background-position: -250px -31px; }
        .jssora22r.jssora22rdn { background-position: -310px -31px; }
    </style>
    <!-- vanilla javascripts -->
    <script src="js/jquery.js"></script>
    <script src="js/mainmenu/bootstrap.min.js"></script


<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body style="">

<div class="header navbar navbar-fixed-top" id="main-header" role="navigation" >
    <div class="container">
        <div class="navbar-header">
            <a href="http://econkredit.com" id="logo" class="navbar-left pull-left hide-on-focus"><h1>EconKredit</h1></a>
            <button type="button" class="navbar-toggle pull-left hide-on-focus" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Menu</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>

           
            <ul class="nav navbar-nav navbar-left pull-right hidden-md hidden-lg">
                <li style="float:right;"><a class="navbar-right pull-right nav-join bannerNonAuthLanding" href="register" data-toggle="modal" data-target="#joinModal">Join Now</a></li>
                <li style="float:right;"><a class="navbar-right pull-right" href="login" class="loginModal" data-onok="#" >Sign In</a></li>
            </ul>
        </div><!--.navbar-header-->
        <div class="navbar-collapse collapse">
            <ul class="nav navbar-nav navbar-left hide-on-focus">
                <li class="dropdown  <?php if($_GET['page']=='products' || $_GET['page']=='special-shops' ||  $_GET['page']=='services'){echo 'active';}?>">
                    <a class="dropdown-toggle" href="special-shops"  data-toggle="dropdown">Shop <span class="caret hidden-md hidden-lg"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="special-shops">Special Shops</a></li>
                        <li><a href="products">Products</a></li>
                        <li><a href="products">Services</a></li>
                    </ul>
                </li>
                <li class="dropdown <?php if($_GET['page']=='hot-products' || $_GET['page']=='refer-a-friend'){echo 'active';}?>">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Hot Promos<span class="caret hidden-md hidden-lg"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="hot-products">Hot Products</a></li>
                    </ul>
                </li>
                <li class="dropdown <?php if($_GET['page']=='product-rewards' || $_GET['page']=='service-rewards'){echo 'active';}?>">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Rewards<span class="caret hidden-md hidden-lg"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="product-rewards">Products Reward</a></li>
                        <li><a href="service-rewards">Services Reward</a></li>
                    </ul>
                </li>
                <li class="dropdown ">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Our Partners <span class="caret hidden-md hidden-lg"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="where-earn">Where To Earn Points</a></li>
                        <li><a href="where-redeem">Where To Redeem Points</a></li>
                    </ul>
                </li>

                <li	class="hidden-md hidden-lg">
                    <a href="#" target="_blank">Help</a>
                </li>
                <li class="hidden-xs hidden-md hidden-lg"><a href="login" class="loginModal" data-onok="">Sign In</a></li>
                <li class="hidden-sm hidden-md hidden-lg"><a href="login">Sign In</a></li>
                <li class="hidden-md hidden-lg"><a class="bannerNonAuthLanding" href="register">Join Now</a></li>
            </ul>

            <form class="navbar-form search navbar-left hidden-sm hidden-xs" ng-submit="searchHandler.handleSearch()" role="search">
                <i class="glyphicon glyphicon-search glyph-flip"></i>
                <input type="text" class="typeahead" placeholder="Search" id="main-search" name="kw" autocomplete="off" required="true" ng-model="searchHandler.kw" /><!--IMPORTANT #main-search is used in js dont change -->
                <input type="submit" value="Submit" class="invisible_btn"/>
                <a class="clear-text" data-target="#main-search">&times;</a>
            </form>

            <ul class="nav navbar-nav navbar-right hidden-sm hidden-xs">
                <li><a href="login" class="loginModal" data-onok="">Sign In</a></li>
                <li class="nav-join"><a class="bannerNonAuthLanding" href="register">Join Now</a></li>
            </ul>
        </div><!--.collapse navbar-collapse-->

    </div><!--.container-fluid-->
</div><!--.header-->