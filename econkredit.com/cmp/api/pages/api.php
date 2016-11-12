<?php
header("content-type: application/json; charset=UTF-8");

include('../include/db.php');


if(isset($_REQUEST['data'])){
$dat = array();
$q = $conn->prepare("SELECT * FROM news ORDER BY id DESC");
if($q->execute()){
$row = $q->fetch(PDO::FETCH_OBJ);
$q2 = $conn->prepare("SELECT * FROM sliders ORDER BY id DESC LIMIT 3");
$q2->execute();
while($read = $q2->fetch(PDO::FETCH_OBJ)){
	$item = [
		'pic' => stripslashes($read->img)
	];
	array_push($dat, $item);
}
$val =[
	'id' => $row->id,
	'title' => $row->title,
	'body' => strip_tags($row->body),
	'thumbnail' => stripslashes($row->thumbnail),
	'time' => $row->timestamp,
	'sliders' => $dat
];
echo deliver_response('200','',$val);	
	}
}else if(isset($_REQUEST['blog'])){

$q = $conn->prepare("SELECT * FROM news WHERE id=:id");
$q->bindValue(':id', $_REQUEST['blog']);
if($q->execute()){
$row = $q->fetch(PDO::FETCH_OBJ);
$q2 = $conn->prepare("SELECT * FROM comments WHERE blog = :bid ORDER BY id DESC");
$q2->bindValue(':bid', $_REQUEST['blog']);
$q2->execute();
$data = array();
while($read = $q2->fetch(PDO::FETCH_OBJ)){
	$comment = [
		'name' => $read->name,
		'comment' => $read->comment,
		'time' => date("d F, Y", $read->timestamp)
	];
	//$com = json_decode($comment);
	array_push($data, $comment);
}

$val =[
	'id' => $row->id,
	'title' => $row->title,
	'body' => strip_tags($row->body),
	'thumbnail' => $row->thumbnail,
	'time' => date("d F, Y", $row->timestamp),
	'comments' => $data
];
}
echo deliver_response('200','',$val);	

}else if(isset($_REQUEST['comment'])){
	$time = time();
	$q = $conn->prepare("INSERT INTO comments(name,comment,blog,timestamp) VALUES(:name,:com,:bid,:time)");
	$q->bindValue(":name", $_REQUEST['name']);
	$q->bindValue(":com", $_REQUEST['comment']);
	$q->bindValue(":bid", $_REQUEST['bId']);
	$q->bindValue(":time", $time);
	$com = array();
	if($q->execute()){
		$q1 = $conn->prepare("SELECT * FROM comments WHERE blog =:bid ORDER BY id DESC");
		$q1->bindValue(":bid", $_REQUEST['bId']);
		$q1->execute();
		while($row = $q1->fetch(PDO::FETCH_OBJ)){
			$cnt = [
				'name' => $row->name,
				'comment' => $row->comment,
				'time' => date("d F, Y",$row->timestamp)
			];
			array_push($com, $cnt);
		}
	}
	echo deliver_response('200','',$com);
}else{

$q = $conn->prepare("SELECT * FROM news ORDER BY id DESC");
$q->execute();
$data = array();
while($row = $q->fetch(PDO::FETCH_OBJ)){
$val =[
	'id' => $row->id,
	'title' => $row->title,
	'body' => strip_tags($row->body),
	'thumbnail' => $row->thumbnail,
	'time' => $row->timestamp
];
array_push($data, $val);
}
echo deliver_response('200','',$data);

}
?>