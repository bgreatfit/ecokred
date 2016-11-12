<?php
if(isset($_SESSION['loggedIn'])){
	exit(header("location:home"));
}
?>
<!DOCTYPE html>
<html>
<head>
        <meta charset="utf-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

        <title>CM App Admin | Login</title>
        <meta name="author" content="Blw Campus Ministry">
        
        <!-- ##### -->
        <!-- Fonts -->
        <!-- ##### -->
        <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" />
        <!-- ################## -->
        <!-- Global stylesheets -->
        <!-- ################## -->
        <link href="bower_components/Materialize/dist/css/materialize.css" rel="stylesheet" type="text/css" />
        <link href="bower_components/font-awesome/css/font-awesome.css" rel="stylesheet" type="text/css" />
        <link href="css/login.css" rel="stylesheet" type="text/css" />
        <!-- ################# -->
        <!-- Theme stylesheets -->
        <!-- ################# -->
        <link href="css/themes/light.css" id="ssThemeColor" rel="stylesheet" type="text/css" />
        <link href="css/themes/main/materialize-red.css" id="ssMainColor" rel="stylesheet" type="text/css" />
        <link href="css/themes/alternative/red.css" id="ssAlternativeColor" rel="stylesheet" type="text/css" />
        <!-- ################ -->
        <!-- Util stylesheets -->
        <!-- ################ -->
        <!--<link href="css/theme-switcher.css" rel="stylesheet" type="text/css" />-->
        <!-- ##### -->
        <!-- Icons -->
        <!-- ##### --
        <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">-->
    </head>

    <body>
        <div id="theme-gradient"></div>
        
        <!-- ####### -->
        <!-- Content -->
        <!-- ####### -->
        <main>
            <div class="login-wrapper">
				<form action="" method="post">
					<div class="panel panel-bordered z-depth-1">
						<div class="panel-header">
							<h5>
								Sign In to <b class="main-text">CMA</b>
							</h5>
						</div>

						<div class="panel-body">
						<div class="row no-gutter margin-bottom-0">
								<div class="input-field col s12">
									
						<?php 
                            if(isset($_POST['submit'])){
                                $email = secureTxt($_POST['email']);
                                $pwd = securePwd($_POST['password']);
                                $q = $conn->prepare("SELECT * FROM admin WHERE email = :email AND password = :pwd");
                                $q->bindValue(":email", $email);
                                $q->bindValue(":pwd", $pwd);
                                $q->execute();
                                if($q->rowCount() > 0){
                                    $row = $q->fetch();
                                    $_SESSION['loggedIn'] = true;
                                    $_SESSION['id'] = $row['id'];
                                    exit(header("location:home"));
                                }else{?>
                        
                        <div class="alert alert-warning" style="background:#f5f434;padding:10px;margin:10px auto;">
							<i class="fa fa-exclamation-triangle"></i> User not recognized! 
						</div>     
                        
                                <?php }
                            }
                        ?></div>
							</div>
							<div class="row no-gutter margin-bottom-0">
								<div class="input-field col s12">
									<input type="email" value="<?php if(isset($_POST['email'])){ echo $_POST['email'];}?>" name="email" id="login" required>
									<label for="login">Email address</label>
								</div>
							</div>
							<div class="row no-gutter margin-bottom-0">
								<div class="input-field col s12">
									<input type="password" name="password" value="<?php if(isset($_POST['password'])){ echo $_POST['password'];}?>" id="password" required>
									<label for="password">Password</label>
								</div>
							</div>

							<div class="remember-forgot-wrapper">
								<p class="remember-me">
									<input type="checkbox" name="remember" id="remember">
									<label for="remember">Remember me</label>
								</p>
							</div>
						</div>

						<div class="panel-footer">
							<div class="right-align">
								<button type="submit" name="submit" value="1" class="btn-flat waves-effect">
									LOG IN
								</button>
							</div>
						</div>
					</div>
				</form>
            </div>
        </main>


        <!-- ################## -->
        <!-- Global javascripts -->
        <!-- ################## -->
        <script src="bower_components/jquery/dist/jquery.js" type="text/javascript"></script>
        <script src="bower_components/Materialize/dist/js/materialize.js" type="text/javascript"></script>
        <!-- ################ -->
        <!-- Util javascripts -->
        <!-- ################ -->
        <script src="js/utils.js" type="text/javascript"></script>
        <script src="js/colors.js" type="text/javascript"></script>
        <!--<script src="js/theme-switcher.js" type="text/javascript"></script>-->
        
    </body>
</html>