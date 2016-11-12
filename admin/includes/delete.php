<?php
include('db.php');
header("Content-Type: Application/json");
if (isset($_REQUEST['prod'])) {
    $q = $conn->prepare("DELETE FROM products WHERE id = :id");
    $q->bindValue(":id", $_REQUEST['prod']);
    if ($q->execute()) {
        echo deliver_response('200', null, null);
    } else {
        echo deliver_response('500', 'Unable to delete', null);
    }
} else if (isset($_REQUEST['ser'])) {
    $q = $conn->prepare("DELETE FROM services WHERE id = :id");
    $q->bindValue(":id", $_REQUEST['ser']);
    if ($q->execute()) {
        echo deliver_response('200', null, null);
    } else {
        echo deliver_response('500', 'Unable to delete', null);
    }
} else if (isset($_REQUEST['user'])) {
    $q = $conn->prepare("DELETE FROM users WHERE id = :id");
    $q->bindValue(":id", $_REQUEST['user']);
    if ($q->execute()) {
        echo deliver_response('200', null, null);
    } else {
        echo deliver_response('500', 'Unable to delete', null);
    }
} else if (isset($_REQUEST['slider'])) {
    $q = $conn->prepare("DELETE FROM sliders WHERE id = :id");
    $q->bindValue(":id", $_REQUEST['slider']);
    if ($q->execute()) {
        echo deliver_response('200', null, null);
    } else {
        echo deliver_response('500', 'Unable to delete', null);
    }
}
?>