<?php
header("Access-Control-Allow-Origin: *");
	header("content-type: application/json; charset=UTF-8");
	header("Pragma-directive: no-cache");
	header("Cache-directive: no-cache");
	header("Cache-control: no-cache");
	header("Pragma: no-cache");
	header("Expires: 0");
include('../include/db.php');
header("Content-Type:Application/json");
if($_REQUEST['email'] AND $_REQUEST['password'] AND $_REQUEST['name']){
$pass = securePwd($_REQUEST['password']);
$email = secureTxt($_REQUEST['email']);
$name = secureTxt($_REQUEST['name']);
$time = time();
$q = $conn->prepare("INSERT INTO users(name,email,password,timestamp) VALUES(:name,:email,:pass,:time)");
$q->bindValue(":name", $name);
$q->bindValue(":email", $email);
$q->bindValue(":pass", $pass);
$q->bindValue(":time", $time);
if($q->execute()){
echo deliver_response('200','Account successfully created!',null);
}
}else{
echo deliver_response('400','All fields are required!',null);

}

?>