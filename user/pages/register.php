<!DOCTYPE html>
<html>

<head>
 
<meta charset="utf-8">
<title>Econkredit</title>
<meta name="keywords" content="HTML5, Bootstrap 3, Admin Template, UI Theme"/>
<meta name="description" content="Alliance - A Responsive HTML5 Admin UI Framework">
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
 
<section id="content" class="">
 
<div class="allcp-form theme-primary mw400" id="register">
<div class="bg-default mw600 text-center mb20 br3 pt15 pb40" style="background:#fff">
<img src="./assets/img/econkredit.png" alt=""/>
</div>
<div class="panel panel-success">
<div class="panel-heading pn">
<span class="panel-title">
Registration form
</span>
</div>
 
<form method="post" action="includes/register.php" id="registerForm">
<div class="panel-body pn">
    <div class="form-group reg-info">
    
    </div>
<div class="section row mh10m">
<div class="col-md-6 ph10">
<label for="firstname" class="field prepend-icon">
<input type="text" name="fname" id="firstname" class="gui-input" placeholder="First name...">
<span class="field-icon">
<i class="fa fa-user"></i>
</span>
</label>
</div>
 
<div class="col-md-6 ph10">
<label for="lastname" class="field prepend-icon">
<input type="text" name="lname" id="lastname" class="gui-input" placeholder="Last name...">
<span class="field-icon">
<i class="fa fa-user"></i>
</span>
</label>
</div>
 
</div>
 
<div class="section">
<label for="email" class="field prepend-icon">
<input type="email" name="email" id="email" class="gui-input" placeholder="Email address">
<span class="field-icon">
<i class="fa fa-envelope"></i>
</span>
</label>
</div>
 
<div class="section">
<label class="field select">
<select id="country" name="account">
<option value="">Select Account Type</option>
<option value="2">User</option>
<option value="1">Manufacturer</option>
</select>
<i class="arrow"></i>
</label>
</div>
 
<div class="section">
<label for="password" class="field prepend-icon">
<input type="password" name="password" id="password" class="gui-input" placeholder="Create a password">
<span class="field-icon">
<i class="fa fa-lock"></i>
</span>
</label>
</div>
 
<div class="section">
    <p class="text-muted">
        By submitting this form, you agree to the terms and conditions guiding this site
    </p>
</div>
<div class="form-group">
<button type="submit" class="btn btn-bordered btn-block btn-warning">I Accept - Create Account
</button>
</div>
 
</div>
 
<div class="panel-footer">
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
        $("#registerForm").submit(function(e){
            e.preventDefault();
            var data = $(this).serialize();
            var url = $(this).attr("action");
            $.getJSON(url,data,function(resp){
                if(resp.status == 200){
                    $("#registerForm")[0].reset();
                    $('.reg-info').fadeIn("slow").html("<div class='alert alert-success'><i class='fa fa-check'></i> "+resp.message+"<button class='close' data-dismiss='alert'>&times;</button></div>");
                }else{
                    
                    $('.reg-info').fadeIn("slow").html("<div class='alert alert-warning'><i class='fa fa-exclamation-triangle'></i> "+resp.message+"<button class='close' data-dismiss='alert'>&times;</button></div>");
                }
            });
        });
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
        });*/
    });
</script>
 
</body>
</html>
