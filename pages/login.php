<?php
//if(isset($_SESSION['account']) AND ($_SESSION['account'] == 'user')){
//	exit(header('location:user/home'));
//}else if(isset($_SESSION['account']) AND ($_SESSION['account'] == 'manufacturer')){
//	exit(header('location:seller/dashboard'));
//}
//?>
<?php if(isset($_SESSION['shop']) || isset($_SESSION['user'])){
    $checkout = $_SESSION['checkout'];
    header('location:'.$checkout);
}

?>
<div class="container" style="min-height:500px;">


    <div id="signin-form" class="col-md-6 login-form-validation" style="margin-top:60px">
        <h2>Sign In &amp; Start Earning!</h2>


        <form id="logForm" name="registration" action=""
              class="login-base-form form-horizontal" method="POST">
            <div class="form-group log-info">
				
			</div>
			<div class="form-group">
                <p><label id="emailLabel" for="email">Email Address</label></p>
                <input type="email" id="email" name="email" class="req  form-control validate-login" value=""
                       tabindex="1" data-validate="email"/>
            </div>
            <div class="form-group">
                <p><label id="passwordLabel" for="password">Password</label></p>
                <input type="password" id="password" name="password" class="form-control validate-login" tabindex="2"
                       data-validate="password"/>
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary  btn-block btn-lg btn-log" style="border-radius:0px">Sign in</button>
            </div>
            <div class="form-group">
                <p><a href="">Forgot your password?</a><span class="login" >Don`t have an account?  <a href="register">Sign Up</a></span></p>
            </div>

        </form>
    </div>


</div>
<script>
$("#logForm").submit(function(e){
	e.preventDefault();
	$(".btn-log").prop("disabled", true).html("<i class='fa fa-repeat fa-spin'></i> Processing...");
	var data = $(this).serialize();
	var url = "user/includes/login.php";
	$.getJSON(url,data,function(resp){
		if(resp.status == 200){
			 var datVal = {'shop':resp.data.shop,'fname':resp.data.fname,'lname':resp.data.lname,'email':resp.data.email,'phone':resp.data.phone,'account':resp.data.account,'verify':resp.data.verify};
                    $.getJSON('user/pages/loginuser.php',datVal,function(res){
                        if(res == 1){
                            window.location.replace("login");
                        }else{
							window.location.replace("login");
						}
					});
		}else{
			$(".btn-log").prop("disabled", false).html("Sign in");
			$(".log-info").fadeIn("slow").html("<div class='alert alert-warning'>"+resp.message+"<button class='close' data-dismiss='alert'>&times;</button></div>");
		}
	});
});
</script>