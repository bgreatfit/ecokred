<?php
include ('include/db.php');
if($_GET['page'] != ''){
    $pages = array("home","login","register", "single-product","single","contact","checkout","logout","special-shops","products","hot-promos","services","product-rewards","service-rewards","where-earn");
        if(in_array($_GET['page'], $pages)){
            $page = $_GET['page'];
        }else{
            $page="404";
        }
    }else{
    $page="home";
}

include('include/header.php');
require('pages/'.$page.'.php');
include('include/footer.php');
