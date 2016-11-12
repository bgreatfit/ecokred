<?php
include ('db.php');
header("Content-type: Application/json");
if($_REQUEST['email'] AND $_REQUEST['password'])
{	$username = secureTxt($_REQUEST['email']);
	$password = securePwd($_REQUEST['password']);
    $idnt = "1";
	$q = $conn->prepare("SELECT * FROM users WHERE email = :email AND password = :pass");
	$q->bindValue(':email', $username);
	$q->bindValue(':pass', $password);
	$q->execute();
	if($q->rowCount() > 0)
	{
		$row = $q->fetch();
        $data = array(
            'fname' => $row['fname'],
            'lname' => $row['lname'],
            'shop' => $row['shop'],
            'email' => $row['email'],
            'phone' => $row['phone'],
            'account' => ($row['account'] == 1) ? 'manufacturer' : 'user',
            'verify' => $row['verify']
        );
		echo deliver_response('200','',$data);
		
	} else{
        echo deliver_response('401','Error: User not recognized.',null);
    }
}else{
    echo deliver_response('401','All fields are required!',null);
}
		
?>
