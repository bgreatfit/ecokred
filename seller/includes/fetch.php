<?php
if($_REQUEST['uvid']){
include('db.php');
    header("Content-type: Application/json");
        
$f = $conn->prepare("SELECT * FROM users WHERE verify = :v");
$f->bindValue(":v",$_REQUEST['uvid']);
    if($f->execute()){
        $row = $f->fetch();
        $item = $row['earnings'];
        $item2 = $row['fname']." ".$row['lname'];
       
        $data = array(
            'points' => $item,
            'name' => $item2,
            );
        echo deliver_response('200','',$data);
    }
}
?>