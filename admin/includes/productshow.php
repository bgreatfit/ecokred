<?php
include('db.php');
header("Content-Type: Application/json");
if(isset($_REQUEST['prod'])){
$q = $conn->prepare("SELECT * FROM products WHERE id = :id");
$q->bindValue(":id", $_REQUEST['prod']);
if($q->execute()){
	$row = $q->fetch(PDO::FETCH_OBJ);
	$item = [
		'picture' => $row->thumbnail,
		'name' => $row->name,
		'time' => date("d F, Y",$row->timestamp),
		'price' => $row->price,
		'points' => $row->points,
		'details' => $row->details,
		'used' => $row->status,
		'timeused' => date("d F, Y",$row->used_timestamp)
	];
	echo deliver_response('200',null,$item);
}
}
if(isset($_REQUEST['ser'])){
$q = $conn->prepare("SELECT * FROM services WHERE id = :id");
$q->bindValue(":id", $_REQUEST['ser']);
if($q->execute()){
	$row = $q->fetch(PDO::FETCH_OBJ);
	$item = [
		'picture' => $row->thumbnail,
		'name' => $row->name,
		'time' => date("d F, Y",$row->timestamp),
		'price' => $row->price,
		'points' => $row->points,
		'details' => $row->details,
		'used' => $row->status,
		'timeused' => date("d F, Y",$row->used_timestamp)
	];
	echo deliver_response('200',null,$item);
}
}
?>