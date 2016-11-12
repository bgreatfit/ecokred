<?php
include("db.php");
header(" Content-Type: Application/json ");
if($_REQUEST['email'] AND $_REQUEST['lname'] AND $_REQUEST['fname'] AND $_REQUEST['account'] AND $_REQUEST['password'])
{
    $time = time();
    $pass = securePwd($_REQUEST['password']);
    $email = secureTxt($_REQUEST['email']);
    $fname = secureTxt($_REQUEST['fname']);
    $lname = secureTxt($_REQUEST['lname']);
    $account = secureTxt($_REQUEST['account']);
    $verify = md5($time);

    $q2 = $conn->prepare("SELECT * FROM users WHERE email = :email");
    $q2->bindParam(':email', $email);
    $q2->execute();
    if ($q2->rowCount() > 0) {
        echo deliver_response('401', 'Email already exist!', null);
    }else{

        $q = $conn->prepare("INSERT INTO users (fname,lname,email,password,verify,account,timestamp) VALUES (:fname,:lname,:email,:pass,:ver,1,:time)");
        $q->bindParam(':fname', $fname);
        $q->bindParam(':lname', $lname);
        $q->bindParam(':email', $email);
        $q->bindParam(':pass', $pass);
        $q->bindParam(':ver', $verify);
        $q->bindParam(':time', $time);
        if($q->execute())
        {
            echo deliver_response('200','Account successfully created, kindly login!',null);
        }

    }

}else{
    echo deliver_response('401','All fields are required!',null);
}
?>
