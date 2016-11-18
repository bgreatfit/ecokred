<?php
include('db.php');
header('Content-Type: Application/json');
if(isset($_REQUEST['cat'])){
    $category = $_REQUEST['cat'];
    $visible = $_REQUEST['visible'];
    $a = $conn->prepare("I");
    $a->bindValue(":shop", $shop);
    $a->bindValue(":option ", $option );
    $a->bindValue(":id", $id);
    if ($a->execute()) {
        echo deliver_response('200', null, null);
    } else {
        echo deliver_response('501', 'Could not update', null);
    }
}
else {
    echo deliver_response('502', 'Required fields are missing..', null);
}


}