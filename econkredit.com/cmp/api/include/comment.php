<?php
include("db.php");
header("Content-Type: Application/json");
if(isset($_REQUEST['id'])){
$data = array();
$q = $conn->prepare("SELECT * FROM comments WHERE blog = :id ORDER BY id DESC");
$q->bindValue(":id", $_REQUEST['id']);
$q->execute();
while($row = $q->fetch(PDO::FETCH_OBJ)){
	$val = [
		'name' => $row->name,
		'comment' => $row->comment,
		'time' => date("d F, Y", $row->timestamp)
	];
	array_push($data, $val);
}
echo deliver_response('200',null,$data);
}
?>