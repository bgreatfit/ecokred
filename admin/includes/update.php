<?php
include('db.php');
header("Content-type: Application/json");
switch ($_REQUEST['update']){
    
    case 'update-seller':
        if ($_REQUEST['seller'] AND $_REQUEST['id']) {
            $option = secureTxt($_REQUEST['seller_option']);
            $shop = secureTxt($_REQUEST['seller']);
            $id = secureTxt($_REQUEST['id']);
            if(empty($option)){
                $a = $conn->query("SELECT seller_option FROM users WHERE id=$id");
                $record= $a->fetch(PDO::FETCH_ASSOC);
                $option = $record['seller_option'];
            }
            $a = $conn->prepare("UPDATE users SET shop=:shop,seller_option=:option  WHERE id=:id");
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
    break;
    case 'update-product':
        if ($_REQUEST['points'] AND $_REQUEST['id']) {
            $price = secureTxt($_REQUEST['price']);
            $det = secureTxt($_REQUEST['details']);
            $pts = secureTxt($_REQUEST['points']);
            $featured = secureTxt($_REQUEST['featured']);
            $id = secureTxt($_REQUEST['id']);
            $option = secureTxt($_REQUEST['product_option']);
            if(empty($option)){
                $a = $conn->query("SELECT product_option,featured-image FROM products WHERE id=$id");
                $record= $a->fetch(PDO::FETCH_ASSOC);
                $option = $record['product_option'];
                $featured = $record['featured-image'];
            }
            $a = $conn->prepare("UPDATE products SET points=:pts, price=:price, details=:det ,product_option=:option,featured_image=:img WHERE id=:id");
            $a->bindValue(":pts", $pts);
            $a->bindValue(":price", $price);
            $a->bindValue(":det", $det);
            $a->bindValue(":option", $option );
            $a->bindValue(":img", $featured );
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
        if ($_REQUEST['points'] AND $_REQUEST['id']) {
            $price = secureTxt($_REQUEST['price']);
            $det = secureTxt($_REQUEST['details']);
            $pts = secureTxt($_REQUEST['points']);
            $option = secureTxt($_REQUEST['service_option']);
            $id = secureTxt($_REQUEST['id']);
            if(empty($option)){
                $a = $conn->query("SELECT service_option FROM services WHERE id=$id");
                $record= $a->fetch(PDO::FETCH_ASSOC);
                $option = $record['service_option'];
            }
            $a = $conn->prepare("UPDATE services SET points=:pts, price=:price, details=:det,service_option=:option WHERE id=:id");
            $a->bindValue(":pts", $pts);
            $a->bindValue(":price", $price);
            $a->bindValue(":det", $det);
            $a->bindValue(":option", $option);
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