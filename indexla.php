<?php
include ('include/db.php');
if($_GET['page'] != ''){
    $pages = array("home","login","register", "single-product","single","contact","logout","special-shops","products","hot-products","services","product-rewards","where-earn","service-rewards","script","where-redeem");
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
