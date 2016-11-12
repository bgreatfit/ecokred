<?php
session_start();
ob_start();

$host = 'localhost';
$user = 'econkred_cmp';
$pwd = '&#CouaJ(5W.9';

$db = 'econkred_cmp';

$conn = new PDO("mysql:host=$host;dbname=$db", $user, $pwd);

function secureTxt($txt) {
    $txt = htmlentities($txt);
    $txt = stripslashes($txt);
    return $txt;
}

function securePwd($pwd) {
    $pwd = sha1($pwd);
    $pwd = htmlentities($pwd);
    $pwd = stripslashes($pwd);
    return $pwd;
}

function deliver_response ($status, $status_message, $data) {
  $response = array('status' => $status, 'message' => $status_message, 'data' => $data);
  return json_encode($response);

}

//getting current date and time
date_default_timezone_set("Africa/Lagos");
	$d = date("d-m-Y");
	$t = date("h:i A");
	$date = $d.' | '.$t;
	$now =  time();


function timeAgo($time_ago){
$cur_time   = time();
$time_elapsed   = $cur_time - $time_ago;
$seconds  = $time_elapsed ;
$minutes  = round($time_elapsed / 60 );
$hours    = round($time_elapsed / 3600);
$days     = round($time_elapsed / 86400 );
$weeks    = round($time_elapsed / 604800);
$months   = round($time_elapsed / 2600640 );
$years    = round($time_elapsed / 31207680 );
// Seconds
if($seconds <= 60){
  echo $seconds." seconds ago";
}
//Minutes
else if($minutes <=60){
  if($minutes==1){
    echo "one minute ago";
  }
  else{
    echo $minutes." minutes ago";
  }
}
//Hours
else if($hours <=24){
  if($hours==1){
    echo "an hour ago";
  }else{
    echo $hours ." hours ago";
  }
}
//Days
else if($days <= 7){
  if($days==1){
    echo "yesterday";
  }else{
    echo $days ." days ago";
  }
}
//Weeks
else if($weeks <= 4.3){
  if($weeks==1){
    echo "a week ago";
  }else{
    echo $weeks ." weeks ago";
  }
}
//Months
else if($months <=12){
  if($months==1){
    echo "a month ago";
  }else{
    echo $months ." months ago";
  }
}
//Years
else{
  if($years==1){
    echo "one year ago";
  }else{
    echo $years ." years ago";
  }
}
}

$path = basename($_SERVER['PHP_SELF'], '.php');

function limit_words($string, $word_limit)
{
    $words = explode(" ",$string);
    return implode(" ",array_splice($words,0,$word_limit));
}
