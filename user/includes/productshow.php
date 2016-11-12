<?php
include('db.php');
header("Content-Type: Application/json");
if($_REQUEST['prod']){
$q = $conn->prepare("SELECT * FROM products WHERE id = :id");
$q->bindValue(":id", $_REQUEST['prod']);
if($q->execute()){
	$row = $q->fetch(PDO::FETCH_OBJ);
	$item = [
		'picture' => $row->thumbnail,
		'name' => $row->name,
		'time' => date("d F, Y",$row->timestamp),
		'price' => number_format($row->price),
		'code' => $row->product_code,
		'points' => $row->points,
		'details' => $row->details,
		'used' => $row->status,
		'timeused' => date("d F, Y",$row->used_timestamp)
	];
	echo deliver_response('200',null,$item);
}
}
?>