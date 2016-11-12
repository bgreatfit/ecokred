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
				                <i class="material-icons">pages</i> New Gallery
				            </h4>

				            <p></p>
				        </div>
				    </div>
				</div>
                
                
                <!-- #### -->
                <!-- Body -->
                <!-- #### -->
				<section id="apps_crud_form" class="panel">
					<div class="crud-app">
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
								<div class="col s12" style="margin:100px auto;padding:20px">
								<?php
								if(isset($_POST['submit'])){
									//var_dump($_FILES);
									if($_POST['title']){
										$time = time();
										$title = secureTxt($_POST['title']);
										$q = $conn->prepare("INSERT INTO gallery (title,timestamp) VALUES(:title,:time)");	
										$q->bindValue(":title", $title);
										$q->bindValue(":time", $time);
										if($q->execute()){ ?>
								<div class="alert" style="background:teal; padding:10px; color:#fff; margin:10px auto">
								<i class="fa fa-check"></i> Gallery created!
								</div>	
										
								<?php											
									}
								}else{
								?>
								<div class="alert" style="background:#f76534; padding:10px; color:#fff; margin:10px auto">
								<i class="fa fa-exclamation-triangle"></i> No title provided!
								</div>
								<?php	}									
								}
								?>
										<div class=" row">
											<div class="input-field col s12">
												<input placeholder="Title" name="title" id="title" type="text" class="">
												<label for="title" >Title</label>
											</div>
										</div>
											
										<!--<div class="row">
												<div id="drag-and-drop-zone" class="dropzone">
												</div>
										</div>-->
										<div class="row no-gutter">
												<button type="submit" name="submit" value="1" class="btn" style="margin:0px 10px;width:98%;color:#fff">
													Create
												</button>
										</div>
									
								</div>
							</div>
						</form>
					</div>
				</section>
            </div>
			<div id="modal1" class="modal modal-fixed-footer">
				<div class="modal-content">
					<h4 class="galleryName"></h4>
					<div id="drag-and-drop-zone" class="dropzone"></div>
				</div>
				<div class="modal-footer">
					<a href="#!" class=" modal-action modal-close waves-effect waves-green btn-flat">Done</a>
				</div>
			</div>
			</div>
       