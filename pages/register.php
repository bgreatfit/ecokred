<?php
//if(isset($_SESSION['account']) AND ($_SESSION['account'] == 'user')){
//	exit(header('location:user/home'));
//}else if(isset($_SESSION['account']) AND ($_SESSION['account'] == 'manufacturer')){
//	exit(header('location:seller/home'));
//}
//?>
<div class="container">


    <div id="signin-form" class="col-md-6 login-form-validation">
        <h2 class="register">Register &amp; Start Earning!</h2>


        <form id="regForm" name="registration" action="" class="login-base-form form-horizontal" method="POST">
				<div class="form-group reg-info">
				<?php if(isset($_GET['status']) AND ($_GET['status'] == 'registered')){?>
				<div class='alert alert-warning'><i class='fa fa-check'></i> Account successfully created, login<button class='close' data-dismiss='alert'>&times;</button></div>
					
				<?php }?>
				</div>
				<div class="form-group">
                <label for="sell">Account Type</label>
                <select class="form-control input-lg" id="sell" name="account">
                    <option value=""></option>
                    <option value="1">Seller</option>
                    <option value="2">User</option>
                </select>
            </div>
			<div class="cool">
				
			</div>			
            
            <div class="form-group">
                <p><label id="emailLabel" for="email">Email Adress</label></p>
                <input type="email" id="email" name="email" class="req  form-control input-lg validate-login" value=""
                       tabindex="1" data-validate="email"/>
            </div>
			<div class="form-group">
                <p><label id="emailLabel" for="phone">Phone Number</label></p>
                <input type="number" min="0" id="phone" name="phone" class="req  form-control input-lg validate-login" value=""
                       tabindex="1" data-validate="phone"/>
            </div>
            <div class="form-group">
                <p><label id="passwordLabel" for="password">Password</label></p>
                <input type="password" id="password" name="password" class="form-control input-lg validate-login" tabindex="2"
                       data-validate="password"/>
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary btn-block btn-reg btn-lg" style="border-radius:0px !important;">Register</button>
            </div>


        </form>
    </div>


</div>
<script>
$('#sell').on('change', function(e){
	if($(this).val() == '1'){
		var inp = '<div class="form-group"><p><label id="passwordLabel" for="shopname">Shop Name</label></p>'+
                '<input type="text" id="shopname" name="shop" class="form-control input-lg validate-login" tabindex="2" data-validate="password"/></div>'+
				'<div class="form-group"><p><label id="passwordLabel" for="shopadd">Shop Address</label></p>'+
                '<input type="text" id="shopadd" name="shopadd" class="form-control input-lg validate-login" tabindex="2" data-validate="password"/></div>'+
				'<div class="form-group"><p><label id="passwordLabel" for="shopcity">City</label></p>'+
                '<input type="text" id="shopcity" name="city" class="form-control input-lg validate-login" tabindex="2" data-validate="password"/></div>';
		$(".cool").fadeOut('slow');
		$(".cool").fadeIn('slow').html(inp);
	}else{
		var input = '<div class="form-group"><p><label id="emailLabel" for="email">First Name</label></p>'+
					'<input type="text" id="email" name="fname" class="req  form-control input-lg validate-login" value="" tabindex="1" data-validate="email"/>'+
					'</div><div class="form-group"><p><label id="emailLabel" for="email">Last Name</label></p>'+
					'<input type="text" id="email" name="lname" class="req  form-control input-lg validate-login" value="" tabindex="1" data-validate="email"/></div>';
		$(".cool").fadeOut('slow');
		$(".cool").fadeIn('slow').html(input);
	}
})
$("#regForm").submit(function(e){
	e.preventDefault();
	$(".btn-reg").prop("disabled", true).html("<i class='fa fa-repeat fa-spin'></i> Processing...");
	var data = $(this).serialize();
	var url = "user/includes/register.php";
	$.getJSON(url,data,function(res){
		if(res.status === 200){
			window.location.replace('register?status=registered');			
		}else{
			$(".btn-reg").prop("disabled", false).html("Register");
			$(".reg-info").fadeIn("slow").html("<div class='alert alert-warning'><i class='fa fa-exclamation-circle'></i> "+res.message+"<button class='close' data-dismiss='alert'>&times;</button></div>");
		}
	});
});
</script>