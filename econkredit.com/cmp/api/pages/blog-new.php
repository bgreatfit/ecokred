   <!-- ####### -->
        <!-- Content -->
        <!-- ####### -->
        <main>
            <div class="main-content inner">
            <div class="container">
                <!-- ###### -->
                <!-- Header -->
                <!-- ###### -->
				<div class="row">
				    <div class="col s12">
				        <div class="page-header">
				            <h1>
				                <i class="material-icons">pages</i> New Blog Article
				            </h1>

				            <p>Write your new article below.</p>
				        </div>
				    </div>
				</div>
                
                
                <!-- #### -->
                <!-- Body -->
                <!-- #### -->
				<section id="apps_crud_form" class="">
					<div class="">
						<div class="fixed-action-btn">
							<!--<a class="btn-floating btn-large tooltipped" data-tooltip="Go Home" data-position="top" data-delay="50" href="home">
								<i class="large material-icons">undo</i>
							</a>-->
							<button class="btn-floating btn-large white tooltipped scrollToTop" data-tooltip="Scroll to top" data-position="top" data-delay="50">
								<i class="large material-icons">keyboard_arrow_up</i>
							</button>
						</div>
			
						<form method="POST" action="" enctype="multipart/form-data">
							<div class="row">
								<div class="col s12">
								<div class="panel panel-white" style="padding:20px;">
								<?php
								if(isset($_POST['submit'])){
									//var_dump($_FILES);
									if($_FILES['files']['name'] AND $_POST['title'] AND $_POST['blog']){
										$image = $_FILES['files']['name'];
										$type = $_FILES['files']['type'];//pathinfo($image, PATHINFO_EXTENSION);
										$news = $_POST['blog'];
										$title = $_POST['title'];
										$time = time();
										$thumb = base64_encode(file_get_contents($_FILES['files']['tmp_name']));
										$image = "data:".$type.";base64,".$thumb."";
										//echo '<img src="'.$image.'" alt="">';
										$q = $conn->prepare("INSERT INTO news (title,body,thumbnail,timestamp) VALUES(:title,:news,:thumb,:time)");	
										$q->bindValue(":title",$title);
										$q->bindValue(":news",$news);
										$q->bindValue(":thumb",$image);
										$q->bindValue(":time",$time);
										if($q->execute()){ ?>
								<div class="alert" style="background:#56A0A0; padding:10px; color:#fff; margin:10px auto">
								<i class="fa fa-check"></i> Blog article created!
								</div>	
										
								<?php											
										}
								?>
								
								
								<?php
								
									}else{
								?>
								<div class="alert" style="background:#f76534; padding:10px; color:#fff; margin:10px auto">
								<i class="fa fa-exclamation-triangle"></i> All fields are required!
								</div>
								<?php	}									
								}
								?>
									<div class=" row no-gutter">
												<div class="input-field col s12">
													<input placeholder="Title" name="title" id="title" type="text" class="">
													<label for="title" >Title</label>
												</div>
											</div>
											
										<div class=" row no-gutter ">
												<div class="input-fileupload col s12" style="">
													<input type="file" class="dropify" name="files" data-max-file-size="200K" data-default-file=""/>
												</div>
											</div>
											
											
											<div class=" row no-gutter">
												<div class="input-field col s12">
													<textarea id="textarea1" name="blog" style="min-height:200px !important" placeholder="write inside here..." class="materialize-textarea"><?php if(isset($_POST['blog'])){ echo $_POST['blog'];}?></textarea>
													<label for="textarea1"></label>
												</div>
											</div>
										
										

										<div class="row no-gutter">
												<!--<button type="reset" class="btn-flat waves-effect">
													RESET
												</button>-->
												<button type="submit" name="submit" value="1" class="btn-flat btn-large waves-effect" style="width:100%;color:#fff">
													Create
												</button>
										</div>
									</div>
									
								</div>
							</div>
						</form>
					</div>
				</section>
            </div>
            </div>
        </main>