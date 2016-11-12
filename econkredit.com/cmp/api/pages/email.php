<?php
//include('../include/db.php');
header("Content-Type:Application/json");

if(isset($_REQUEST['from'])){
	$message = $_REQUEST['message'];
    $from = $_REQUEST['from']; 
    $to = 'contact@cmapp.com'; 
    $subject = $_REQUEST['subject'];
	$name = $_REQUEST['name'];
        		
    $body = "<html>
			<head>
			<style>
			p{
				font-size:18px;
			}
			</style>
			</head>
			<body>
			<h3>Hello Admin,</h3>
			<p>You have a message from $name.<br/>
			a user of the Campus Ministry App.</p>
			<p>
			<blockquote>
			$message
			</blockquote>
			</p>
			</body>
			</html>";
if (mail ($to, $subject, $body, $from)) { 
	    echo deliver_response('200',null,null);
	}
}
?>