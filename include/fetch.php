<?php
include("db.php");
header("Content-Type: Application/json");
if(isset($_REQUEST['id'])){
	$q = $conn->prepare("SELECT * FROM products WHERE id = :id");
$q->bindValue(":id", $_REQUEST['id']);
if($q->execute()){
	$row = $q->fetch(PDO::FETCH_OBJ);
	$read = $conn->query("SELECT * FROM users WHERE id=".$row->manufacturer_id."")->fetch();
	$item = [
		'picture' => $row->thumbnail,
		'name' => $row->name,
		'time' => date("d F, Y",$row->timestamp),
		'price' => number_format($row->price),
		'points' => $row->points,
		'details' => substr($row->details,0,100),
		'seller' => $read['shop'],
		'sellerphone' => $read['phone'],
		'selleradd' => $read['address'],
		'sellercity' => $read['city'],
		'used' => $row->status,
		'timeused' => date("d F, Y",$row->used_timestamp)
	];
	echo deliver_response('200',null,$item);
}
}
else if (isset($_REQUEST['ser'])) {
		$q = $conn->prepare("SELECT * FROM services WHERE id = :id");
		$q->bindValue(":id", $_REQUEST['ser']);
		if ($q->execute()) {
			$row = $q->fetch(PDO::FETCH_OBJ);
			$read = $conn->query("SELECT * FROM users WHERE id=" . $row->manufacturer_id . "")->fetch();
			$item = [
				'picture' => $row->thumbnail,
				'name' => $row->name,
				'time' => date("d F, Y", $row->timestamp),
				'price' => number_format($row->price),
				'points' => $row->points,
				'details' => substr($row->details, 0, 100),
				'seller' => $read['shop'],
				'sellerphone' => $read['phone'],
				'selleradd' => $read['address'],
				'sellercity' => $read['city'],
				'used' => $row->status,
				'timeused' => date("d F, Y", $row->used_timestamp)
			];
			echo deliver_response('200', null, $item);
		}

}
else if (isset($_REQUEST['merSer'])) {
		$q = $conn->prepare("SELECT * FROM services WHERE id = :id");
		$q->bindValue(":id", $_REQUEST['merSer']);
		if ($q->execute()) {
			$row = $q->fetch(PDO::FETCH_OBJ);
			$read = $conn->query("SELECT * FROM users WHERE id=" . $row->manufacturer_id . "")->fetch();
			$item = [
				'picture' => $row->thumbnail,
				'name' => $row->name,
				'time' => date("d F, Y", $row->timestamp),
				'points' => $row->points,
				'details' => substr($row->details, 0, 100),
			];
			echo deliver_response('200', null, $item);
		}

}
else if (isset($_REQUEST['merProd'])) {
		$q = $conn->prepare("SELECT * FROM products WHERE id = :id");
		$q->bindValue(":id", $_REQUEST['merProd']);
		if ($q->execute()) {
			$row = $q->fetch(PDO::FETCH_OBJ);
			$read = $conn->query("SELECT * FROM users WHERE id=" . $row->manufacturer_id . "")->fetch();
			$item = [
				'picture' => $row->thumbnail,
				'name' => $row->name,
				'time' => date("d F, Y", $row->timestamp),
				'points' => $row->points,
				'details' => substr($row->details, 0, 100),
			];
			echo deliver_response('200', null, $item);
		}

}
?>