<?php

session_start();
ob_start();
if($_REQUEST['account'] == 'manufacturer'){
$_SESSION['shop'] = $_REQUEST['shop'];
$_SESSION['email'] = $_REQUEST['email'];
$_SESSION['phone'] = $_REQUEST['phone'];
$_SESSION['account'] = $_REQUEST['account'];
$_SESSION['verify'] = $_REQUEST['verify'];

if($_SESSION['account'] == 'manufacturer'){
	echo "1";	
}	
}else{
$_SESSION['fname'] = $_REQUEST['fname'];
$_SESSION['lname'] = $_REQUEST['fname'];
$_SESSION['user'] = 1;
$_SESSION['email'] = $_REQUEST['email'];
$_SESSION['phone'] = $_REQUEST['phone'];
$_SESSION['account'] = $_REQUEST['account'];
$_SESSION['verify'] = $_REQUEST['verify'];

if($_SESSION['account'] == 'user'){
	echo "2";
}	
}
