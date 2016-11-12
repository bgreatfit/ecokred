<?php
include('db.php');
header("content-Type:Application/json");
if($_FILES['file']['name']){
	//echo $_REQUEST['gallery'];
$time = time();
$target_dir ="../uploads/gallery/";
$target_file = $target_dir .$time.basename($_FILES["file"]["name"]);
//$type = $_FILES['file']['type'];
$name = $time.basename($_FILES["file"]["name"]); 

$file = "http://econkredit.com/econkredit.com/cmp/api/uploads/gallery/".$name;
if(move_uploaded_file($_FILES['file']['tmp_name'], $target_file)){
	$q = $conn->prepare("INSERT INTO pictures(pic,gal_id,timestamp) VALUES(:pic,:gal,:time)");
	$q->bindValue(':pic', $file);										
	$q->bindValue(':gal', $_REQUEST['gallery']);										
	$q->bindValue(':time', $time);	
	if($q->execute()){
		echo deliver_response('200','',null);
	}
}
//$thumb = base64_encode(file_get_contents($_FILES['file']['tmp_name']));
//$image = "data:".$type.";base64,".$thumb."";
									
} 
?>