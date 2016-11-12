
<div class="container">


    <div id="signin-form" class="col-md-6 login-form-validation">
        <h2 class="register">Register &amp; Start Earning!</h2>


        <form id="regForm" name="registration" action="" class="login-base-form form-horizontal" method="POST">
				<div class="form-group reg-info">
				</div>
				<div class="form-group">
					<p><label id="emailLabel" for="email">First Name</label></p>
					<input type="text" id="email" name="fname" class="req  form-control validate-login" value=""
						   tabindex="1" data-validate="email"/>
				</div>
				<div class="form-group">
					<p><label id="emailLabel" for="email">Last Name</label></p>
					<input type="text" id="email" name="lname" class="req  form-control validate-login" value=""
						   tabindex="1" data-validate="email"/>
				</div>
			
            <div class="form-group">
                <label for="sel1">Account Type</label>
                <select class="form-control" id="sel1" name="account">
                    <option value="1">Seller</option>
                    <option value="1">User</option>
                </select>
            </div>
            <div class="form-group">
                <p><label id="emailLabel" for="email">Email Adress</label></p>
                <input type="email" id="email" name="email" class="req  form-control validate-login" value=""
                       tabindex="1" data-validate="email"/>
            </div>
            <div class="form-group">
                <p><label id="passwordLabel" for="password">Password</label></p>
                <input type="password" id="password" name="password" class="form-control validate-login" tabindex="2"
                       data-validate="password"/>
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary btn-block btn-reg btn-lg" style="border-radius:0px !important;">Register</button>
            </div>


        </form>
    </div>


</div>
<script>
$("#regForm").submit(function(e){
	e.preventDefault();
	$(".btn-reg").prop("disabled", true).html("<i class='fa fa-repeat fa-spin'></i> Processing...");
	var data = $(this).serialize();
	var url = "user/includes/register.php";
	$.getJSON(url,data,function(res){
		if(res.status === 200){
			$(".btn-reg").prop("disabled", false).html("Register");
			$(".reg-info").fadeIn("slow").html("<div class='alert alert-info'>"+res.message+"<button class='close' data-dismiss='alert'>&times;</button></div>");
			$("#regForm")[0].reset();
		}else{
			$(".btn-reg").prop("disabled", false).html("Register");
			$(".reg-info").fadeIn("slow").html("<div class='alert alert-warning'>"+res.message+"<button class='close' data-dismiss='alert'>&times;</button></div>");
		}
	});
});
</script>