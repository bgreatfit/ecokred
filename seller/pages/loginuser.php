<?php

session_start();
ob_start();

$_SESSION['fname'] = $_REQUEST['fname'];
$_SESSION['lname'] = $_REQUEST['fname'];
$_SESSION['email'] = $_REQUEST['email'];
$_SESSION['account'] = $_REQUEST['account'];
$_SESSION['verify'] = $_REQUEST['verify'];
//session_destroy();
//exit(header("location:econkredit/home"));
echo "1";
