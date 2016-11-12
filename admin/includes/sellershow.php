<?php
include('db.php');
header("Content-Type: Application/json");
if($_REQUEST['id']){
    $q = $conn->prepare("SELECT shop FROM users WHERE id = :id");
    $q->bindValue(":id", $_REQUEST['id']);
    if($q->execute()){
        $row = $q->fetch(PDO::FETCH_OBJ);
        $item = [
            'shop' => $row->shop
        ];
        echo deliver_response('200',null,$item);
    }
}
?>