<?php
include("db.php");
header(" Content-Type: Application/json ");
if($_REQUEST['account'] == 1){
	if($_REQUEST['email'] AND $_REQUEST['shop'] AND $_REQUEST['phone'] AND $_REQUEST['account'] AND $_REQUEST['password'])
{
$time = time();
$pass = securePwd($_REQUEST['password']);
$email = secureTxt($_REQUEST['email']);
$shop = secureTxt($_REQUEST['shop']);
$account = secureTxt($_REQUEST['account']);
$add = secureTxt($_REQUEST['shopadd']);
$city = secureTxt($_REQUEST['city']);
$phone = secureTxt($_REQUEST['phone']);
$verify = md5($time);

$q2 = $conn->prepare("SELECT * FROM users WHERE email = :email");
$q2->bindParam(':email', $email);
$q2->execute();
if ($q2->rowCount() > 0) {
	echo deliver_response('401', 'Email already exist!', null);
}else{

	$q = $conn->prepare("INSERT INTO users (shop,email,password,verify,account,phone,timestamp,address,city,option_id) VALUES (:shop,:email,:pass,:ver,:acc,:ph,:time,:add,:city,1)");
	$q->bindParam(':shop', $shop);
	$q->bindParam(':email', $email);
	$q->bindParam(':pass', $pass);
	$q->bindParam(':ver', $verify);
	$q->bindParam(':acc', $account);
	$q->bindParam(':time', $time);
	$q->bindParam(':add', $add);
	$q->bindParam(':city', $city);
	$q->bindParam(':ph', $phone);
	if($q->execute())
		{
			echo deliver_response('200','Account successfully created, kindly login!',null);
		}

}

}else{
    echo deliver_response('401','All fields are required!',null);
}
}else{
if($_REQUEST['email'] AND $_REQUEST['lname'] AND $_REQUEST['fname'] AND $_REQUEST['phone'] AND $_REQUEST['account'] AND $_REQUEST['password'])
{
$time = time();
$pass = securePwd($_REQUEST['password']);
$email = secureTxt($_REQUEST['email']);
$fname = secureTxt($_REQUEST['fname']);
$lname = secureTxt($_REQUEST['lname']);
$account = secureTxt($_REQUEST['account']);
$phone = secureTxt($_REQUEST['phone']);
$verify = md5($time);

$q2 = $conn->prepare("SELECT * FROM users WHERE email = :email");
$q2->bindParam(':email', $email);
$q2->execute();
if ($q2->rowCount() > 0) {
	echo deliver_response('401', 'Email already exist!', null);
}else{

	$q = $conn->prepare("INSERT INTO users (lname,fname,email,password,verify,account,phone,timestamp) VALUES (:lname,:fname,:email,:pass,:ver,:acc,:ph,:time)");
	$q->bindParam(':lname', $lname);
	$q->bindParam(':fname', $fname);
	$q->bindParam(':email', $email);
	$q->bindParam(':pass', $pass);
	$q->bindParam(':ver', $verify);
	$q->bindParam(':acc', $account);
	$q->bindParam(':time', $time);
	$q->bindParam(':ph', $phone);
	if($q->execute())
		{
			echo deliver_response('200','Account successfully created, kindly login!',null);
		}

}

}else{
    echo deliver_response('401','All fields are required!',null);
}
}

?>
