<div id="content" class="site-content account-page">
			<div class="breadcrumb">
				<div class="container">
					<ul>
						<li><a href="home">Home</a></li>
						<li><span class="current">Login / Register</span></li>
					</ul>
				</div><!-- .container -->
			</div><!-- .breadcrumb -->

			<div class="container">
				<div class="row">
					<div class="col-md-6">
						<div class="signin">
							<h2 class="heading-title">Sign in</h2>

							<!--
							<div class="social-signin">
								<a href="#" target="_blank" class="button facebook"><i class="fa fa-facebook"></i> SIGN IN WITH FACEBOOK</a>
								<a href="#" target="_blank" class="button twitter"><i class="fa fa-twitter"></i> SIGN IN WITH TWITTER</a>
							</div>
							-->

							<form id="loginForm" method="post" action="includes/login.php">
								<div class="login-info">
								</div>
								<div class="input-field">
									<label for="s-email">Email Address *</label>
									<input id="s-email" class="input-text" autofocus type="email" name="email" placeholder="Your email" required>
								</div>

								<div class="input-field">
									<label for="pass">Password *</label>
									<input id="pass" class="input-text" type="password" name="pass" placeholder="Password" required>
								</div>

								<div class="input-field">
									<div class="checkbox">
										<input type="checkbox" value="yes" id="remember" name="remember">
										<label for="remember">Remember me!</label>
									</div>
									<a href="#" class="fogot">Forgot your password?</a>
								</div>

								<div class="input-field">
									<input type="submit" value="Login now" class="button bold yellow">
								</div>
							</form>
						</div><!-- .signin -->
					</div>

					<div class="col-md-6">
						<div class="register">
							<h2 class="heading-title">Create a new account</h2>
	<form id="signupForm" action="includes/signup.php" method="post">
					<div class="signup-info">
					</div>
					<div class="row">
									<div class="col-md-6 col-sm-6">
										<div class="input-field">
											<label for="first-name">First name *</label>
											<input name="fname" type="text" placeholder="First name" class="input-text" id="first-name" required>
										</div><!-- .input-field -->
									</div>

									<div class="col-md-6 col-sm-6">
										<div class="input-field">
											<label for="last-name">Last name *</label>
											<input type="text" name="lname" placeholder="Last name" class="input-text" id="last-name" required>
										</div><!-- .input-field -->
									</div>
								</div>
										<div class="input-field">
											<label for="email">Email adress *</label>
											<input name="email" type="email" placeholder="Email Address" class="input-text" id="email" required>
										</div><!-- .input-field -->
									<div class="input-field">
											<label for="phone">Phone number *</label>
											<input type="number" min="0" name="phone" placeholder="Phone Number" class="input-text" id="phone" required>
										</div><!-- .input-field -->
								<div class="input-field">
									<label for="address">Address *</label>
									<input type="text" name="address" placeholder="Street address" class="input-text" id="address" required>
								</div><!-- .input-field -->

								<div class="input-field">
									<label for="town">Town / City *</label>
									<input type="text" name="town" class="input-text" placeholder="Town / City" id="town" required>
								</div><!-- .input-field -->

								<div class="input-field">
									<label for="state">State / Country</label>
									<input type="text" name="country" placeholder="State / Country" class="input-text" id="state">
								</div><!-- .input-field -->
									<div class="input-field">
									<label for="state">Password</label>
									<input type="password" name="pass" placeholder="Password" required class="input-text" id="state">
								</div><!-- .input-field -->

						<div class="input-field">
									<input type="submit" value="Sign up" class="button bold yellow">
								</div>
							</form>

						</div><!-- .register -->
					</div>
				</div><!-- .row -->
			</div><!-- .container -->
		</div><!-- .site-content -->
