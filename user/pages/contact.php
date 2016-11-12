		<div id="content" class="site-content contact-page">
			<div class="breadcrumb">
				<div class="container">
					<ul>
						<li><a href="home">Home</a></li>
						<li><span class="current">Contact Us</span></li>
					</ul>
				</div><!-- .container -->
			</div><!-- .breadcrumb -->

			<div class="google-map">

			</div><!-- .google-map -->

			<div class="container">
				<div class="row">
					<div class="col-md-8">
						<h2 class="heading-title">LEAVE A MESSAGE!</h2>
						<form action="" method="post">
						<div class="form-group">
						<?php
						if(isset($_POST['send'])){?>
						<?php

$name = $_POST['name']; // form field
$message = $_POST['message']; // form field
$phone = $_POST['phone']; // form field
$email = $_POST['email'];

$to = "info@basbonline.com"; //enter the email address of the contact your sending to
$subject = "Contact Message"; // subject of your email

$message = "<html><body style='background: #F2F2F2; font-family: calibri, san-serif;'>
<style>
p {
  font-weight: lighter;
  margin: 0px;
  font-size: 17px;
  color: #2675CE;
  margin-bottom: 20px;
}
li {
  font-weight: lighter;
  margin: 0px;
  font-size: 17px;
  color: #2675CE;
  margin-bottom: 10px;
  text-align: justify;
}
a, span {
  text-decoration: none;
  color: #2675CE;
}
</style>
    <div style='max-width: 700px; margin: 0 auto;'>
        <center>
        <img src='http://basbonline.com/images/logo.png' style='height: 100px !important; margin: 20px 0; display: block !important' />
        <div style='padding: 40px 30px; background: #fff; border-radius: 5px; '>

<h1 style='color: #2675CE;'>You have a contact message from your website</h1>


            <p style='color: #2675CE; font-size: 22px;'><span><b>$name</b></span> wrote:</p>
            <p>
$message
            </p>
            <p style='color: #2675CE; font-size: 22px;'><span><b>Contact Info</b></span></p>
            <p>
              <table style='width: 50%; text-align: center;'>
<tr>
<td><span><b>Phone Number:</b></span></td>
<td>$phone</td>
</tr>
<tr>
<td><span><b>Email Address:</b></span></td>
<td>$email</td>
</tr>
              </table>
            </p><br>
            <p>
<a href='http://basbonline.com' style='background: #2675CE; padding: 15px; margin-top: 20px; color: #fff; border-radius: 4px; text-decoration: none; font-size: 18px;'><b>View Website</b></a>
            </p>


        </div>
        <p style='color: #2675CE; font-size: 15px; margin: 15px;'>&copy; 2015 <a href='http://basbonline.org'>Basbo Online</a>. All Rights Reserved.</p>
</center>
    </div>
</body></html>";

// Always set content-type when sending HTML email
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

// More headers
$headers .= 'From: Basbonline' . "\r\n";
$headers .= 'Cc: info@basbonline.com' . "\r\n";


if (mail($to,$subject,$message,$headers)) {
	?>
<div class="alert alert-success">
Thank you for contacting us. We'll get back to you shortly.
</div>
	<?php
}else{
	?>
<div class="alert alert-danger">
An error occurred. Please try again later.
</div>
	<?php
}

 ?>

						<?php
						}
						?>
						</div>
							<div class="row">
								<div class="col-md-4 col-sm-4">
									<div class="input-field">
										<input class="input-text" type="text" name="name" placeholder="Your name *" required>
									</div>
								</div>

								<div class="col-md-4 col-sm-4">
									<div class="input-field">
										<input class="input-text" type="email" name="email" placeholder="Your email *" required>
									</div>
								</div>

								<div class="col-md-4 col-sm-4">
									<div class="input-field">
										<input class="input-text" type="text" name="phone" placeholder="Your phone">
									</div>
								</div>
							</div>

							<div class="input-field">
								<textarea name="message" placeholder="Your message *" cols="30" rows="8" required></textarea>
							</div>

							<div class="input-field">
								<input type="submit" name="send" value="Send message" class="button bold yellow">
							</div>
						</form>
					</div>

					<div class="col-md-4">
						<h2 class="heading-title">Contact information</h2>
						<div class="contact-info">
							<p><strong>ADD</strong>  262 Milacina Mrest Street, Behansed, Paris, France<br>
							<strong>TEL</strong>  (+84) 3 888 888<br>
							<strong>MAIL</strong>  contact@lenashop.com<br>
							<strong>OPEN</strong> Mon - Sat: 9:00 - 18:00</p>
							<div class="social">
								<ul>
									<li><a href="#" target="_blank"><i class="fa fa-twitter"></i></a></li>
									<li><a href="#" target="_blank"><i class="fa fa-pinterest"></i></a></li>
									<li><a href="#" target="_blank"><i class="fa fa-facebook-square"></i></a></li>
									<li><a href="#" target="_blank"><i class="fa fa-behance"></i></a></li>
									<li><a href="#" target="_blank"><i class="fa fa-dribbble"></i></a></li>
								</ul>
							</div>
						</div>
					</div>
				</div><!-- .row -->
			</div><!-- .container -->
		</div><!-- .site-content -->
