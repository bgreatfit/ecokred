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

if(isset($_REQUEST['email'])){
$email = secureTxt($_REQUEST['email']);
$q = $conn->prepare("SELECT * FROM users WHERE email = :email AND password = :pass");
$q->bindValue(":email", $email);
$q->bindValue(":pass", $pass);
if($q->execute()){
$row = $q->fetch(PDO::FETCH_OBJ);
$data = array(
	'name' => $row->name,
	'email' => $row->email,
	'id' => $row->id
);
echo deliver_response('200',null,$data);
}else{
echo deliver_response('401','User not recognized!',null);
}

}else{
echo deliver_response('400','All fields are required!',null);

}

?>