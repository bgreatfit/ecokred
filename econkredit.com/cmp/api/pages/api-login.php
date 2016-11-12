<?php
header("content-type: application/json; charset=UTF-8");
	
	
include('../include/db.php');


if($_REQUEST['email'] AND $_REQUEST['password']){
$pass = securePwd($_REQUEST['password']);
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