<?php
include("db.php");
header(" Content-Type: Application/json ");

	if($_REQUEST['email'] AND $_REQUEST['shop'] AND $_REQUEST['phone'] AND $_REQUEST['password'] AND $_REQUEST['option'])
	{
		$time = time();
		$pass = securePwd($_REQUEST['password']);
		$email = secureTxt($_REQUEST['email']);
		$shop = secureTxt($_REQUEST['shop']);
		$option = secureTxt($_REQUEST['option']);
		$add = secureTxt($_REQUEST['shopadd']);
		$city = secureTxt($_REQUEST['city']);
		$phone = secureTxt($_REQUEST['phone']);
		$verify = md5($time);

		$q2 = $conn->prepare("SELECT * FROM users WHERE email = :email");
		$q2->bindParam(':email', $email);
		$q2->execute();
		if ($q2->rowCount() > 0) {
			echo deliver_response('401', 'Email already exist!', null);
		}else{

			$q = $conn->prepare("INSERT INTO users (shop,email,password,verify,account,phone,timestamp,address,city,option_id) VALUES (:shop,:email,:pass,:ver,1,:ph,:time,:add,:city,:option)");
			$q->bindParam(':shop', $shop);
			$q->bindParam(':email', $email);
			$q->bindParam(':pass', $pass);
			$q->bindParam(':ver', $verify);
			$q->bindParam(':option', $option);
			$q->bindParam(':time', $time);
			$q->bindParam(':add', $add);
			$q->bindParam(':city', $city);
			$q->bindParam(':ph', $phone);
			if($q->execute())
			{
				echo deliver_response('200','Seller successfully created!',null);
			}

		}

	}else{
		echo deliver_response('401','All fields are required!',null);
	}
