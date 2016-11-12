<?php 
if(!isset($_SESSION['id'])){
    exit(header("location:login"));
}?>
<!DOCTYPE html>
<html>
<head>
        <meta charset="utf-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

        <title>Campus Ministry App | Admin</title>
        <meta name="author" content="Blw Campus Ministry">
        
        <!-- ##### -->
        <!-- Fonts -->
        <!-- ##### -->
        <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" />
        <!-- ################## -->
        <!-- Global stylesheets -->
        <!-- ################## -->
        <link href="bower_components/Materialize/dist/css/materialize.css" rel="stylesheet" type="text/css" />
        <link href="bower_components/font-awesome/css/font-awesome.css" rel="stylesheet" type="text/css" />
        <link href="bower_components/code-prettify/src/prettify.css" rel="stylesheet" type="text/css" />
        <link href="css/admin.css" rel="stylesheet" type="text/css" />
        <!-- ################# -->
        <!-- Theme stylesheets -->
        <!-- ################# -->
        <link href="css/themes/light.css" id="ssThemeColor" rel="stylesheet" type="text/css" />
        <link href="css/themes/main/materialize-red.css" id="ssMainColor" rel="stylesheet" type="text/css" />
        <link href="css/themes/alternative/red.css" id="ssAlternativeColor" rel="stylesheet" type="text/css" />
     
        <!-- ################ -->
        <!-- Page stylesheets -->
        <!-- ################ -->
        <link href="css/pages/dashboard.css" rel="stylesheet" type="text/css" />
        <link href="dropify/css/dropify.min.css" rel="stylesheet" type="text/css" />
        <link href="dropzone/downloads/css/dropzone.css" rel="stylesheet" type="text/css" />
        
		<!-- ##### -->
        <!-- Icons -->
        <!-- ##### -->
        <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
    </head>

    <body>
        <!-- #### -->
        <!-- Menu -->
        <!-- #### -->
        <div id="nav-content">
            <nav>
                <div class="container">
                <div class="row">
                    <div class="col s12">
                        <!-- ############ -->
                        <!-- Desktop Menu -->
                        <!-- ############ -->
                        <div class="nav-wrapper">
                            <a href="home" class="brand-logo">
                                <!--<img src="img/logo.png"/>-->
                                <span class="valign">
                                    <b class="main-text">CM App</b> Admin
                                </span>
                            </a>

                            <!-- Desktop -->
                            <ul class="right hide-on-med-and-down">
                                <li class="<?php if($page == "home"){echo "active";}?>"><a href="home">Dashboard</a></li>

								<li class="<?php if($page == "blog-view" || $page == "blog-new" || $page == "edit-blog"){echo "active";}?>">
                                    <a class="dropdown-button" href="#!" data-activates="dropdown-css" data-constrainwidth="false" data-beloworigin="true">
                                        News<i class="material-icons dropdown-icon right">arrow_drop_down</i>
                                    </a>
                                </li>

                                <li class="<?php if($page == "slider-new" || $page == "slider-view"){echo "active";}?>">
                                    <a class="dropdown-button" href="#!" data-activates="dropdown-components" data-constrainwidth="false" data-beloworigin="true">
                                        Sliders<i class="material-icons dropdown-icon right">arrow_drop_down</i>
                                    </a>
                                </li>

                                <li class="<?php if($page == "gallery-new" || $page == "gallery-view" || $page == "edit-gallery"){echo "active";}?>">
                                    <a class="dropdown-button" href="#!" data-activates="dropdown-javascript" data-constrainwidth="false" data-beloworigin="true">
                                        Gallery<i class="material-icons dropdown-icon right">arrow_drop_down</i>
                                    </a>
                                </li>

                                

                                <li class="profile <?php if($page == "security"){echo "active";}?>">
                                    <a class="dropdown-button" href="#!" data-activates="dropdown-profile" data-constrainwidth="false" data-beloworigin="true" data-alignment="right">
                                        <div class="valign-wrapper">
                                            <img src="img/av.png" alt="My profile" class="circle responsive-img margin-right-10">
                                            Admin
                                            <i class="material-icons dropdown-icon right">arrow_drop_down</i>
                                        </div>
                                    </a>
                                </li>
                            </ul>

                            <!-- Dropdowns -->
                            <ul id="dropdown-css" class="dropdown-content">
                                <li ><a href="blog-view">News View</a></li>
                                <li ><a href="blog-new">New Article</a></li>
                            </ul>
                            <ul id="dropdown-components" class="dropdown-content">
                                <li ><a href="slider-view">Sliders</a></li>
                                <li ><a href="slider-new">New Slider</a></li>
                                
                            </ul>
                            <ul id="dropdown-javascript" class="dropdown-content">
                                <li ><a href="gallery-view">Gallery</a></li>
                                <li ><a href="gallery-new">New Gallery</a></li>
                            </ul>
                            
                            <ul id="dropdown-profile" class="dropdown-content">
                                <li ><a href="security">Security</a></li>
                                <li><a href="logout">Logout</a></li>
                            </ul>

                            <!-- Mobile -->
                            <a href="#" data-activates="mobile-demo" class="button-collapse">
                                <i class="material-icons">menu</i>
                            </a>
                        </div>


                        <!-- ########### -->
                        <!-- Mobile Menu -->
                        <!-- ########### -->
                        <ul class="side-nav" id="mobile-demo">
                            <li class="logo">
                                
                                <p>
                                    <b class="main-text">CM App</b> Admin
                                </p>
                            </li>

                            <li>
                                <a href="home" class="waves-effect">Dashboard</a>
                            </li>

                            <li class="padding-0">
                                <ul class="collapsible collapsible-accordion">
                                    <li class="bold">
                                        <a class="collapsible-header waves-effect">News</a>
                                        <div class="collapsible-body">
                                            <ul>
                                                <li><a href="blog-view">News View</a></li>
                                                <li><a href="blog-new">New Article</a></li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li class="bold">
                                        <a class="collapsible-header waves-effect">Sliders</a>
                                        <div class="collapsible-body">
                                            <ul>
                                                <li><a href="slider-view">Sliders</a></li>
                                                <li><a href="slider-new">New Slider</a></li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li class="bold">
                                        <a class="collapsible-header waves-effect">Gallery</a>
                                        <div class="collapsible-body">
                                            <ul>
                                                <li><a href="gallery-view">Gallery</a></li>
                                                <li><a href="gallery-new">New Gallery</a></li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li class="bold">
                                        <a class="collapsible-header waves-effect">Admin</a>
                                        <div class="collapsible-body">
                                            <ul>
                                                <li><a href="security">Security</a></li>
                                                <li><a href="logout">Logout</a></li>
                                                
                                            </ul>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
                </div>
            </nav>
        </div>

