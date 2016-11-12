<?php
include('db.php');
header("Content-type: Application/json"); 
if(isset($_REQUEST['id'])){
	$id = secureTxt($_REQUEST['id']);
	$a = $conn->prepare("UPDATE products SET approve = 1 WHERE id=:id");
	$a->bindValue(":id", $id);
	if($a->execute()){
		echo deliver_response('200',null,null);
	}else{
		echo deliver_response('501','Could not update',null);
	}	
}else if(isset($_REQUEST['dis'])){
	$id = secureTxt($_REQUEST['dis']);
	$a = $conn->prepare("UPDATE products SET approve = 0 WHERE id=:id");
	$a->bindValue(":id", $id);
	if($a->execute()){
		echo deliver_response('200',null,null);
	}else{
		echo deliver_response('501','Could not update',null);
	}	
}
else if(isset($_REQUEST['aprvSer'])){
	$id = secureTxt($_REQUEST['aprvSer']);
	$a = $conn->prepare("UPDATE services SET approve = 1 WHERE id=:id");
	$a->bindValue(":id", $id);
	if($a->execute()){
		echo deliver_response('200',null,null);
	}else{
		echo deliver_response('501','Could not update',null);
	}
}
else if(isset($_REQUEST['disSer'])){
	$id = secureTxt($_REQUEST['disSer']);
	$a = $conn->prepare("UPDATE services SET approve = 0 WHERE id=:id");
	$a->bindValue(":id", $id);
	if($a->execute()){
		echo deliver_response('200',null,null);
	}else{
		echo deliver_response('501','Could not update',null);
	}
}
?>