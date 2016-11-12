<!DOCTYPE html>
<html>

<head>
 
<meta charset="utf-8">
<title>Econkredit</title>
<meta name="keywords" content=""/>
<meta name="description" content="">
<meta name="author" content="ThemeREX">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
 
<link href='https://fonts.googleapis.com/css?family=Ubuntu:400,300,300italic,400italic,500,500italic,700,700italic' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Poppins:400,300,500,600,700' rel='stylesheet' type='text/css'>
 
<link rel="stylesheet" type="text/css" href="./assets/skin/default_skin/less/theme.min.css">
 
<link rel="stylesheet" type="text/css" href="./assets/allcp/forms/css/forms.css">
 
<link rel="shortcut icon" href="./assets/img/econkredit.png">
 
<link rel="stylesheet" type="text/css" href="./assets/js/utility/malihu-custom-scrollbar-plugin-master/jquery.mCustomScrollbar.min.css">
 
<!--[if lt IE 9]>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.2/html5shiv.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body class="utility-page sb-l-c sb-r-c">
     <div class="load text-center" style="display:none;width:100%;height:100%;z-index:10000;background:rgba(255,255,255,0.9);position:fixed;">
        <div class="" style="margin:20% auto;">
            <img src="assets/img/balls.gif" >
     </div>
    </div>
 
<div id="main" class="animated fadeIn">
 
<section id="content_wrapper">
<div id="canvas-wrapper">
<canvas id="demo-canvas"></canvas>
</div>
 
<section id="content">
 
<div class="allcp-form theme-primary mw320" id="login">
<div class=" mw600 text-center mb20 br3 pt15 pb40" style="background-color:#fff">
<img src="assets/img/econkredit.png" alt=""/>
</div>
<div class="panel mw320">
<form method="post" action="" id="loginForm">
<div class="panel-body pn mv10">
<div class="form-group login-info">
 <?php
 if(isset($_POST['login'])){
	if($_REQUEST['email'] AND $_REQUEST['password']){
	$username = secureTxt($_REQUEST['email']);
	$password = securePwd($_REQUEST['password']);
    $idnt = "1";
	$q = $conn->prepare("SELECT * FROM admin WHERE username = :email AND password = :pass");
	$q->bindValue(':email', $username);
	$q->bindValue(':pass', $password);
	$q->execute();
	if($q->rowCount() > 0)
	{
		$_SESSION['admin'] = 1;
		exit(header('location:dashboard'));
		
		
	} else{ ?>
    <div class="alert alert-primary"><i class="fa fa-exclamation-triangle"></i> Run! we're watching you... <button class="close" data-dismiss="alert">&times;</button></div>
    <?php }
}else{ ?>
	<div class="alert alert-primary"> <i class="fa fa-exclamation-triangle"></i> All fields are required! <button class="close" data-dismiss="alert">&times;</button></div>
<?php
    }
 }
 
?>		
   
</div>
<div class="section">
<label for="username" class="field prepend-icon">
<input type="email" name="email" id="username" class="gui-input" placeholder="Email address">
<span class="field-icon">
<i class="fa fa-envelope"></i>
</span>
</label>
</div>
 
<div class="section">
<label for="password" class="field prepend-icon">
<input type="password" name="password" id="password" class="gui-input" placeholder="Password">
<span class="field-icon">
<i class="fa fa-lock"></i>
</span>
</label>
</div>
 

<div class="form-group">
     <button type="submit" name="login" value="1" class="btn btn-bordered btn-block btn-warning btnLogin">Log in</button>
</div>
</div>
 
</form>
</div>
 
</div>
 
</section>
 
</section>
 
</div>
 
 
 
<script src="./assets/js/jquery/jquery-1.11.3.min.js"></script>
<script src="./assets/js/jquery/jquery_ui/jquery-ui.min.js"></script>
 
<script src="./assets/js/plugins/canvasbg/canvasbg.js"></script>
 
<script src="./assets/js/utility/utility.js"></script>
<script src="./assets/js/utility/malihu-custom-scrollbar-plugin-master/jquery.mCustomScrollbar.concat.min.js"></script>
<script src="./assets/js/demo/demo.js"></script>
<script src="./assets/js/main.js"></script>
 
<script type="text/javascript">
    jQuery(document).ready(function () {

        /*"use strict";

        // Init Theme Core
        Core.init();

        // Init Demo JS
        Demo.init();

        // Init CanvasBG
        CanvasBG.init({
            Loc: {
                x: window.innerWidth / 5,
                y: window.innerHeight / 10
            }
        });*
        
        $("#loginForm").submit(function(e){
            e.preventDefault();
           var data = $(this).serialize();
            var url = "includes/login.php";
            $('.btnLogin').prop('disabled', true).html('<i class="fa fa-spin fa-cog"></i> Processing...');
            $.getJSON(url,data,function(resp){
                if(resp.status == 200){
                    var datVal = {'fname':resp.data.fname,'lname':resp.data.lname,'email':resp.data.email,'account':resp.data.account,'verify':resp.data.verify};
                    $.getJSON('pages/loginuser.php',datVal,function(res){
                        if(res == 1){
                            window.location.replace("home");
                        }
                        
                    });
                }else{
                    $('.btnLogin').prop('disabled', false).html('Log in');
                    $('.login-info').fadeIn('slow').html("<div class='alert alert-info'><i class='fa fa-exclamation-triangle'></i> "+resp.message+"<button class='close' data-dismiss='alert'>&times;</button></div>");
                }
            });
        })*/

    });
</script>
 
</body>
</html>
