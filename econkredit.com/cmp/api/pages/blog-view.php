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
							<div class="col s12">
									<div class="helper">
										<h5>Recent Articles</h5>
										<?php
										$q = $conn->prepare("SELECT * FROM news ORDER BY id DESC");
										$q->execute();
										while($row = $q->fetch(PDO::FETCH_OBJ)){
										
										?>
										<div class="col s12 m4">
										  <div class="card">
											<div class="card-image waves-effect waves-block waves-light">
											  <a title="Edit this article" href="edit-blog?id=<?php echo $row->id;?>"><img class="activator" src="<?php echo $row->thumbnail;?>" height="200"></a>
											</div>
											<div class="card-content">
											<p><a title="Edit this article" href="edit-blog?id=<?php echo $row->id;?>"><?php echo $row->title;?></a></p>
											<p><?php
											 echo substr(strip_tags($row->body),0,200);
											?>...</p>
											</div>
											<div class="card-action">
												<a href="javascript:;" class="commt" head="<?php echo $row->title;?>" id="<?php echo $row->id;?>"><?php $q2 = $conn->query("SELECT * FROM comments WHERE blog = ".$row->id." ")->rowCount(); echo $q2;?> <i class="fa fa-comments"></i></a>
												<a href="javascript:;" class="delBlog" id="<?php echo $row->id;?>"><i class="fa fa-trash"></i></a>
											</div>
										  </div>
										  </div>
										  
										  <?php
										  	}?>
										<div id="modal2" class="modal modal-fixed-footer">
											<div class="modal-content">
												<h4 class="newsTitle"></h4>
												<div id="drag-and-drop-zone" class=""></div>
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