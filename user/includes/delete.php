<?php
include('db.php');
header("Content-Type: Application/json");
if($_REQUEST['prod']){
$a = $conn->prepare("SELECT thumbnail FROM products WHERE id=:id");
$a->bindValue(":id", $_REQUEST['prod']);
$a->execute();
$row  =  $a->fetch(PDO::FETCH_OBJ);
$q = $conn->prepare("DELETE FROM products WHERE id = :id");
$q->bindValue(":id", $_REQUEST['prod']);
if($q->execute()){
	//$link = "/images/products/".$row->thumbnail;
	//unlink($link);
	echo deliver_response('200',null,null);
}
}
?>