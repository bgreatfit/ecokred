
				<div class="main-content">
					<!-- end: SPANEL CONFIGURATION MODAL FORM -->
						<div class="container">
						<!-- start: PAGE HEADER -->
						<!-- start: TOOLBAR -->
						<?php
									$id = secureTxt($_GET['id']);
									$q3 = $conn->prepare("SELECT * FROM gallery WHERE id = :id");
									$q3->bindValue(":id",$id);
									$q3->execute();
									$pass = $q3->fetch(PDO::FETCH_OBJ);
									?>
						<div class="toolbar row">
							<div class="col-sm-6 hidden-xs">
								<div class="page-header">
									<h1><?php echo $pass->title;?></h1>
								</div>
							</div>
						</div>
						<!-- end: TOOLBAR -->
						<!-- end: PAGE HEADER -->
						<!-- start: BREADCRUMB -->
						
						<!-- end: BREADCRUMB -->
						<!-- start: PAGE CONTENT -->
						<div class="row">
							<div class="col s12" style="min-height:400px !important">
								<!-- start: EXPORT DATA TABLE PANEL  -->
								<div class="panel panel-white">
									<div class="panel-heading">
										<h4 class="panel-title"></h4>
										<div class="panel-tools">
										
								        </div>
									</div>
									
									<div class="panel-body">
										<div class="row">
										<div class="col-md-8 space20">
											<?php
												$q4 = $conn->prepare("SELECT * FROM pictures WHERE gal_id = :id");
												$q4->bindValue(":id", $id);
												$q4->execute();
												while($row = $q4->fetch(PDO::FETCH_OBJ)){
											?>
											<div class="col s12 m4 no-gutter" >
											<img class="materialboxed" height="200" width="100%" src="<?php echo $row->pic;?>">
											<p><a href="javascript:;" class="picDel btn" id="<?php echo $row->id;?>" title="Delete"><i class="fa fa-trash"></i></a></p>
											<br/>
											</div>
											<?php
												}
											?>
										</div>
									</div>
								</div>
								<!-- end: EXPORT DATA TABLE PANEL -->
							</div>
						</div>
						<!-- end: PAGE CONTENT-->
					</div>
					<div class="subviews">
						<div style="display:none" id="drag-and-drop-zone" class="dropzone"></div>
					</div>
				</div>
				<!-- end: PAGE -->
			</div>
			<!-- end: MAIN CONTAINER -->
			