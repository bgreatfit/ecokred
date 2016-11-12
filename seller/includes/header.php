<?php 
if(!$_SESSION['shop']){
    exit(header("location:/"));
}
?>
<!DOCTYPE html>
<html>
<head>
 
<meta charset="utf-8">
<title>Econkredit</title>
<meta name="keywords" content=""/>
<meta name="description" content="">
<meta name="author" content="ThemeREX">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
 
<link href='https://fonts.googleapis.com/css?family=Ubuntu:400,300,300italic,400italic,500,500italic,700,700italic' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Poppins:400,300,500,600,700' rel='stylesheet' type='text/css'>
 
<link rel="stylesheet" type="text/css" href="./assets/fonts/icomoon/icomoon.css">
 
<link rel="stylesheet" type="text/css" href="./assets/js/plugins/fullcalendar/fullcalendar.min.css">
<link rel="stylesheet" type="text/css" href="./assets/js/plugins/magnific/magnific-popup.css">
 
<link rel="stylesheet" type="text/css" href="./assets/js/plugins/c3charts/c3.min.css">
<link rel="stylesheet" type="text/css" href="./assets/js/utility/malihu-custom-scrollbar-plugin-master/jquery.mCustomScrollbar.min.css">
 
 
<link rel="stylesheet" type="text/css" href="./assets/skin/default_skin/less/theme.min.css">
 
<link rel="stylesheet" type="text/css" href="./assets/allcp/forms/css/forms.css">
<link rel="stylesheet" type="text/css" href="./dropify/css/dropify.min.css">
 
<link rel="shortcut icon" href="assets/img/econkredit.png">
<link rel="stylesheet" type="text/css" href="./assets/js/bootstrap.min.css">

<!--[if lt IE 9]>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.2/html5shiv.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body class="dashboard-page with-customizer">
 
 <div class="load text-center" style="display:none;width:100%;height:100%;z-index:10000;background:rgba(255,255,255,0.8);position:fixed;">
        <div class="" style="margin:20% auto;">
            <img src="assets/img/balls.gif" >
     </div>
    </div>
<div id="main">
 

 
<aside id="sidebar_left" class="nano nano-light affix">
 
<div class="sidebar-left-content nano-content">
 
<header class="sidebar-header">
 
<div class="sidebar-widget author-widget">
<div class="media text-center" style="padding-left:25px !important">
<a class="media-left profile-online" href="#">
<img src="assets/img/econkredit.png" class="img-responsive" alt="">
</a>
</div>
</div>
</header>
 
 
<ul class="nav sidebar-menu">
<li class="<?php if($page == 'dashboard'){ echo "active";}?>">
<a href="dashboard">
<span class="sidebar-title">Dashboards</span>
<span class="sb-menu-icon fa fa-home"></span>
</a>
</li>
<li class="<?php if($page == 'product'){ echo "active";}?>">
<a href="product">
<span class="sidebar-title">Products</span>
    <span class="sb-menu-icon fa fa-list-ul"></span>
</a>
</li>
<li class="<?php if($page == 'service'){ echo "active";}?>">
<a href="service">
<span class="sidebar-title">Services</span>
    <span class="sb-menu-icon fa fa-list-ul"></span></a>
</li>
<li class="<?php if($page == 'security'){ echo "active";}?>">
<a class="" href="security">
<span class="sidebar-title">Security</span>
<span class="sb-menu-icon fa fa-lock"></span>
</a>
</li>
<!--<li>
<a href="basic-calendar.html">
<span class="sidebar-title">Calendar</span>
<span class="sb-menu-icon fa fa-calendar"></span>
</a>
</li>
<li>
<a class="accordion-toggle" href="#">
<span class="sidebar-title">Forms</span>
<span class="caret"></span>
<span class="sb-menu-icon fa fa-list-ul"></span>
</a>
<ul class="nav sub-nav">
<li>
<a href="forms-elements.html">
Elements
</a>
</li>
<li>
<a href="forms-widgets.html">
Widgets
</a>
</li>
<li>
<a href="forms-layouts.html">
Layouts
</a>
</li>
<li>
<a href="forms-wizard.html">
Wizard
</a>
</li>
<li>
<a href="forms-validation.html">
Validation
</a>
</li>
</ul>
</li>-->
<li class="<?php if($page == 'logout'){ echo "active";}?>">
<a href="logout">
<span class="sidebar-title">logout</span>
<span class="sb-menu-icon fa fa-sign-out"></span>
</a>
</li>
</ul>
 
</div>
 
</aside>