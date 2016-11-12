<?php
include("db.php");
header("Content-Type:Application/json");
if($_REQUEST['code'] AND $_REQUEST['user']){
    $q = $conn->prepare("SELECT * FROM products WHERE product_code = :code AND status = 0  ");
    $q->bindParam(":code", $_REQUEST['code']);
    $q->execute();
    if($q->rowCount() > 0){
        $row = $q->fetch();
        $newValue = "1";
        $time = time();
        $q1 = $conn->prepare("UPDATE products SET status=:nV, used_by = :pid, used_timestamp = :tmp WHERE product_code = :code");
        $q1->bindParam(":nV", $newValue);
        $q1->bindParam(":tmp", $time);
        $q1->bindParam(":pid", $_REQUEST['user']);
        $q1->bindParam(":code", $_REQUEST['code']);
        if($q1->execute()){
            $q2=$conn->prepare("SELECT * FROM users WHERE id = :id");
            $q2->bindParam(":id", $_REQUEST['user']);
            if($q2->execute()){
                $read = $q2->fetch();
                $old = (int)$read['earnings'];
                $newEarn = (int)$read['earnings'] + (int)$row['points'];
                $q3 = $conn->prepare("UPDATE users SET earnings = :earn WHERE id = :id");
                $q3->bindParam(":id", $_REQUEST['user']);
                $q3->bindParam(":earn", $newEarn);
                if($q3->execute()){
                   $data = array(
                        'points' => $newEarn
                    );
                    echo deliver_response("200","Congratulations!", $data);  
                }
            }
            
        }
    }else{
        echo deliver_response("401"," Error: code might have been used or does not exist.", null);
    }
}else{
    echo deliver_response("401"," Fatal Error: could not resolve request.", null);
}
?>