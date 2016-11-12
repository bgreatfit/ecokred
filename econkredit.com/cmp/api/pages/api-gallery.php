<?php

include('../include/db.php');

header("content-Type:Application/json");

if(isset($_REQUEST['all'])){
	$data = array();
	$q = $conn->query("SELECT * FROM gallery ORDER BY id DESC");
	while($row = $q->fetch(PDO::FETCH_OBJ)){
		$q2 = $conn->query("SELECT * FROM pictures WHERE gal_id = ".$row->id." ORDER BY id DESC");
		$q22 = $q2->rowCount();
		$read = $q2->fetch();
		$comm = [
			'id' => $row->id,
			'title' => $row->title,
			'time' => date("d F, Y",$row->timestamp),
			'num' => $q22,
			'thumbnail' => $read['pic']
		];
		array_push($data, $comm);
	}
	echo deliver_response('200','',$data);
}else if(isset($_REQUEST['gallery'])){
	$data = array();
	$q = $conn->prepare("SELECT * FROM pictures WHERE gal_id = :gid");
	$q->bindValue(":gid", $_REQUEST['gallery']);
	$q->execute();
	while($row = $q->fetch(PDO::FETCH_OBJ)){
		$comm = [
			'id' => $row->id,
			'pic' => $row->pic,
			'time' => date("d F, Y",$row->timestamp)
		];
		array_push($data, $comm);
	}
	echo deliver_response('200','',$data);
}
?>