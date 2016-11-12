<?php
include ('includes/db.php');
if($_GET['page'] != ''){
    $pages = array("home","single-product","security","contact","logout");
        if(in_array($_GET['page'], $pages)){
            $page = $_GET['page'];
        }else{
            $page="404";
        }
    }else{
    $page="home";
}

if($page == "login"){
    require('pages/'.$page.'.php');
    }
    else if($page == "register"){
    require('pages/'.$page.'.php');
    }else{
         include('includes/header.php');
 require('pages/'.$page.'.php');
include('includes/footer.php');  

    }



?>
