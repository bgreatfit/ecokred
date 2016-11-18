<?php
include('db.php');
header("Content-type: Application/json");
switch ($_REQUEST['update']){
    
    case 'update-product':
        if ($_REQUEST['points'] AND $_REQUEST['price'] AND $_REQUEST['id']) {
            $price = secureTxt($_REQUEST['price']);
            $det = secureTxt($_REQUEST['details']);
            $pts = secureTxt($_REQUEST['points']);
            $id = secureTxt($_REQUEST['id']);
            $a = $conn->prepare("UPDATE products SET points=:pts, price=:price, details=:det WHERE id=:id");
            $a->bindValue(":pts", $pts);
            $a->bindValue(":price", $price);
            $a->bindValue(":det", $det);
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
    break;
    case 'update-service':
        if ($_REQUEST['points'] AND $_REQUEST['price'] AND $_REQUEST['id']) {
            $price = secureTxt($_REQUEST['price']);
            $det = secureTxt($_REQUEST['details']);
            $pts = secureTxt($_REQUEST['points']);
            $id = secureTxt($_REQUEST['id']);
            $a = $conn->prepare("UPDATE services SET points=:pts, price=:price, details=:det WHERE id=:id");
            $a->bindValue(":pts", $pts);
            $a->bindValue(":price", $price);
            $a->bindValue(":det", $det);
            $a->bindValue(":id", $id);
            if ($a->execute()) {
                echo deliver_response('200', null, null);
            } else {
                echo deliver_response('501', 'Could not update', null);
            }
        } else {
            echo deliver_response('502', 'Required fields are missing..', null);
        }
    break;
}


?>