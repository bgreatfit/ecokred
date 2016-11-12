   <?php
	$id = (isset($_GET['id'])) ? secureTxt($_GET['id']): "";
	$q = $conn->prepare("SELECT * FROM news WHERE id = ".$id."");
	$q->execute();
	$read = $q->fetch(PDO::FETCH_OBJ);
   ?>
   
   <!-- ####### -->
        <!-- Content -->
        <!-- ####### -->
       <div class="main-content">
            <div class="container">
                <!-- ###### -->
                <!-- Header -->
                <!-- ###### -->
				<div class="row">
				    <div class="col s12">
				        <div class="page-header">
				            <h4 style="color:#ea454b">
				                Edit News Article
				            </h4>

				            <p>Edit your news article below.</p>
				        </div>
				    </div>
				</div>
                
                
                <!-- #### -->
                <!-- Body -->
                <!-- #### -->
				<section id="apps_crud_form" class="panel">
					<div class="crud-app" style="padding:20px">
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
								<div class="col s12 m8">
								<?php
								if(isset($_POST['submit'])){
									//var_dump($_FILES);
									if($_POST['title'] AND $_POST['blog']){
										//$image = $_FILES['files']['name'];
										$type = ($_FILES['files']['name']) ? $_FILES['files']['type'] : "";//pathinfo($image, PATHINFO_EXTENSION);
										$news = $_POST['blog'];
										$title = $_POST['title'];
										$time = time();
										$thumb = ($_FILES['files']['name']) ? base64_encode(file_get_contents($_FILES['files']['tmp_name'])) : "";
										$image = ($_FILES['files']['name']) ? "data:".$type.";base64,".$thumb."" : $_POST['pix'] ;
										$q = $conn->prepare("UPDATE news SET title=:title, body=:news, thumbnail=:thumb WHERE id = :id");	
										$q->bindValue(":title",$title);
										$q->bindValue(":news",$news);
										$q->bindValue(":thumb",$image);
										$q->bindValue(":id",$id);
										if($q->execute()){ 
											exit(header("location:edit-blog?id=".$id."&update=true"));
										}
									
									}else{
								?>
								<div class="alert" style="background:#f76534; padding:10px; color:#fff; margin:10px auto">
								<i class="fa fa-exclamation-triangle"></i> Some fields cannot be empty!
								</div>
								<?php	}									
								}else if(isset($_GET['update'])){
								?>
								<div class="alert" style="background:#56A0A0; padding:10px; color:#fff; margin:10px auto">
								<i class="fa fa-check"></i> Blog article updated!
								</div>	
								<?php }?>
									<div class=" row no-gutter">
												<div class="input-field col s12">
													<input placeholder="Title" name="title" value="<?php echo $read->title;?>" id="title" type="text" class="">
													<label for="title" >Title <sup style="color:red">*</sup></label>
												</div>
											</div>
											
										<div class=" row no-gutter ">
												<div class="input-fileupload col s12" style="">
													<input type="file" class="dropify" name="files" data-max-file-size="200K" data-default-file=""/>
													<input type="hidden" name="pix" value="<?php echo $read->thumbnail;?>"/>
												</div>
											</div>
											
											
											<div class=" row no-gutter">
												<div class="input-field col s12">
													<textarea id="textarea1" name="blog" style="height:200px !important" placeholder="write inside here..." class=""><?php echo $read->body;?></textarea>
													<label for="textarea1"></label>
												</div>
											</div>
										
										

										<div class="row ">
												<!--<button type="reset" class="btn-flat waves-effect">
													RESET
												</button>-->
												<button type="submit" name="submit" value="1" class="btn-flat btn-large waves-effect" style="width:100%;color:#fff">
													Edit
												</button>
										</div>
									
								</div>

								<div class="col s12 m4">
									<div class="helper">
										<h5></h5>
										
										  <div class="card">
											<div class="card-image waves-effect waves-block waves-light">
											  <a title="Edit this article" href="edit-blog?id=<?php echo $read->id;?>"><img class="activator" src="<?php echo $read->thumbnail;?>" height="200"></a>
											</div>
											<div class="card-content">
											<p><a title="Edit this article" href="edit-blog?id=<?php echo $read->id;?>"><?php echo $read->title;?></a></p>
											<p><?php
											 echo substr(strip_tags($read->body),0,700);
											?>...</p>
											</div>
										  </div>
										
										
										
									</div>
								</div>
							</div>
						</form>
					</div>
				</section>
            </div>
            </div>
      