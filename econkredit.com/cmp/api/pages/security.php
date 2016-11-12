<!-- start: MAIN CONTAINER -->
			<div class="main-container inner">
				<!-- start: PAGE -->
				<div class="main-content">
					<!-- end: SPANEL CONFIGURATION MODAL FORM -->
						<div class="container">
						<!-- start: PAGE HEADER -->
						<!-- start: TOOLBAR -->
						<div class="toolbar row">
							<div class="col-sm-6 hidden-xs">
								<div class="page-header">
									<h1>Security</h1>
								</div>
							</div>
						</div>
						<!-- end: TOOLBAR -->
						<!-- end: PAGE HEADER -->
						<!-- start: BREADCRUMB -->
						
						<!-- end: BREADCRUMB -->
						<!-- start: PAGE CONTENT -->
						<div class="row">
							<div class="col s12">
								<!-- start: EXPORT DATA TABLE PANEL  -->
								<div class="panel panel-white">
									<div class="panel-heading">
										<h4 class="panel-title"></h4>
										<div class="panel-tools">
										
								        </div>
									</div>
									<?php 
									$q3 = $conn->prepare("SELECT * FROM admin WHERE id = :id");
									$q3->bindValue(":id",$_SESSION['id']);
									$q3->execute();
									$pass = $q3->fetch(PDO::FETCH_OBJ);
									?>
									<div class="panel-body">
										<div class="row">
										<div class="col-md-8 space20">
											<form class="" method="POST" action="">
												<div class="form-group pwd-info">
													<?php
														if(isset($_POST['submit'])){
															if($_POST['email'] AND $_POST['npass'] AND $_POST['cpass']){
															if($_POST['npass'] == $_POST['cpass']){
																$pass = securePwd($_POST['npass']);
																$aid = $_SESSION['id'];
																$email = secureTxt($_POST['email']);
																
																$q4 = $conn->prepare("UPDATE admin SET email = :email, password = :pass WHERE id = :id");
																$q4->bindValue(":email", $email);
																$q4->bindValue(":pass", $pass);
																$q4->bindValue(":id", $aid);
																if($q4->execute()){
																	exit(header("location:security?updated=true"));
																	}																
															}else{
													?>
													<div class="alert alert-danger" style="padding:20px; ">
													<i class="fa fa-exclamation-triangle"></i> Password does not match! 
													</div>
													<?php
													}
														}else{ ?>
													<div class="alert alert-danger" style="padding:20px; ">
													<i class="fa fa-exclamation-triangle"></i> All fields are required! 
													</div>
														<?php }
														} else if(isset($_GET['updated']) AND ($_GET['updated'] == 'true')){?>
													
													<div class="alert alert-success" style="padding:20px; ">
													<i class="fa fa-check"></i> Login details updated! 
													</div>			
													
														<?php }
													?>
													
												</div>
												<div class="form-group">
												<label class="control-label">Email</label>
												<input type="email"  value="<?php echo $pass->email;?>" placeholder="Email address" class="form-control input-lg" name="email">
												</div>
												<div class="form-group">
												<label class="control-label">New Password</label>
												<input type="password"  value="<?php if(isset($_POST['npass'])){echo $_POST['npass'];}?>" placeholder="Password" class="form-control input-lg" name="npass">
												</div>
												<div class="form-group">
												<label class="control-label">Confirm Password</label>
												<input type="password"  value="<?php if(isset($_POST['cpass'])){echo $_POST['cpass'];}?>" placeholder="Confirm password" class="form-control input-lg" name="cpass">
												</div>
												<div class="form-group">
													<button class="btn btn-big btn-large" type="submit" name="submit" value="1" style="border-radius:0px"><i class="fa fa-lock"></i> Change</button>
												</div>
											</form>
											</div>
											
										</div>
									</div>
								</div>
								<!-- end: EXPORT DATA TABLE PANEL -->
							</div>
						</div>
						<!-- end: PAGE CONTENT-->
					</div>
					<div class="subviews">
						<div class="subviews-container"></div>
					</div>
				</div>
				<!-- end: PAGE -->
			</div>
			<!-- end: MAIN CONTAINER -->
			