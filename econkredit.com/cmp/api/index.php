<?php
include ('include/db.php');
if($_GET['page'] != ''){
    $pages = array("home","login","security", "edit-blog","slider-view","slider-new","blog-new","blog-view","edit-gallery","gallery-view","gallery-new","logout");
        if(in_array($_GET['page'], $pages)){
            $page = $_GET['page'];
        }else{
            $page="404";
        }
    }else{
    $page="blog-new";
}


if($page == "login"){
    require('pages/'.$page.'.php');
}else if($page == "404"){
	require('pages/'.$page.'.php');
}else{
include('include/header.php');
require('pages/'.$page.'.php');
include('include/footer.php');  
}


  