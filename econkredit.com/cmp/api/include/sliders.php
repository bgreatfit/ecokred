<?php
include('db.php');
header("content-Type:Application/json");
if($_FILES['slider']['name']){
	//echo $_REQUEST['gallery'];
$time = time();
$target_dir ="../uploads/sliders/";
$target_file = $target_dir .$time.basename($_FILES["slider"]["name"]);
//$type = $_FILES['file']['type'];
$name = $time.basename($_FILES["slider"]["name"]); 

$file = "http://econkredit.com/econkredit.com/cmp/api/uploads/sliders/".$name;
if(move_uploaded_file($_FILES['slider']['tmp_name'], $target_file)){
	$q = $conn->prepare("INSERT INTO sliders(img,timestamp) VALUES(:pic,:time)");
	$q->bindValue(':pic', $file);										
	$q->bindValue(':time', $time);	
	if($q->execute()){
		echo deliver_response('200','',null);
	}
}
//$thumb = base64_encode(file_get_contents($_FILES['file']['tmp_name']));
//$image = "data:".$type.";base64,".$thumb."";
									
}
?>