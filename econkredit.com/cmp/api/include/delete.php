<?php
include("db.php");
header("Content-Type: Application/json");
if(isset($_REQUEST['id'])){
$data = array();
$q = $conn->prepare("DELETE FROM gallery WHERE id = :id");
$q->bindValue(":id", $_REQUEST['id']);
if($q->execute()){
	$q2 = $conn->prepare("DELETE FROM pictures WHERE gal_id = :id");
	$q2->bindValue(":id", $_REQUEST['id']);
	if($q2->execute()){
		echo deliver_response('200',null,null);
	}
}
} else if(isset($_REQUEST['pic'])){
	$q2 = $conn->prepare("DELETE FROM pictures WHERE id = :id");
	$q2->bindValue(":id", $_REQUEST['pic']);
	if($q2->execute()){
		echo deliver_response('200',null,null);
	}
} else if(isset($_REQUEST['blog'])){
	$q2 = $conn->prepare("DELETE FROM news WHERE id = :id");
	$q2->bindValue(":id", $_REQUEST['blog']);
	if($q2->execute()){
		echo deliver_response('200',null,null);
	}
} else if(isset($_REQUEST['slide'])){
	$q2 = $conn->prepare("DELETE FROM sliders WHERE id = :id");
	$q2->bindValue(":id", $_REQUEST['slide']);
	if($q2->execute()){
		echo deliver_response('200',null,null);
	}
}
?>