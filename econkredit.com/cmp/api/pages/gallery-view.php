   <!-- ####### -->
        <!-- Content -->
        <!-- ####### -->
        <main>
            <div class="main-content">
                <!-- ###### -->
                <!-- Header -->
                <!-- ###### -->
				              
                
                <!-- #### -->
                <!-- Body -->
                <!-- #### -->
				<section id="apps_crud_form" class="container">
					<div class="crud-app">
						<div class="fixed-action-btn">
							<!--<a class="btn-floating btn-large tooltipped" data-tooltip="Go Home" data-position="top" data-delay="50" href="home">
								<i class="large material-icons">undo</i>
							</a>-->
							<button class="btn-floating btn-large white tooltipped scrollToTop" data-tooltip="Scroll to top" data-position="top" data-delay="50">
								<i class="large material-icons">keyboard_arrow_up</i>
							</button>
						</div>
						<div class="row">
							<div class="col s12" style="min-height:400px !important">
									<div class="helper">
										<h5>Recent Galleries</h5>
										<?php
										$q = $conn->prepare("SELECT * FROM gallery ORDER BY id DESC LIMIT 5");
										$q->execute();
										while($row = $q->fetch(PDO::FETCH_OBJ)){
										
										?>
										  <div class="col s12 m4">
										  <div class="card">
											<div class="card-content">
											<p>
											<a title="Edit this article" href="edit-gallery?id=<?php echo $row->id;?>"><?php echo $row->title;?></a>
											<span style="float:right">
											<a href="javascript:;" id="<?php echo $row->id;?>" class="addPhoto" title="Add Photos" style="color:skyblue">
											<i class="fa fa-plus-circle"></i>
											</a>
											&nbsp;&nbsp;
											<a href="javascript:;" id="<?php echo $row->id;?>" class="delGal" title="Delete">
											<i class="fa fa-trash"></i>
											</a>
											</span>
											</p>
											<p></p>
											</div>
										  </div>
										  </div>
										  
										<?php }?>
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
								</div>
							</div>
					</div>
				</section>
            </div>
        </main>