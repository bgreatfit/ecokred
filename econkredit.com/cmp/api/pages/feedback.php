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
									<h1>FeedBack Database</h1>
								</div>
							</div>
						</div>
						<!-- end: TOOLBAR -->
						<!-- end: PAGE HEADER -->
						<!-- start: BREADCRUMB -->
						<div class="row">
							<div class="col-md-12">
								<ol class="breadcrumb">
									<li>
										<a href="home">
											Dashboard
										</a>
									</li>
									<li class="active">
										feedback
									</li>
								</ol>
							</div>
						</div>
						<!-- end: BREADCRUMB -->
						<!-- start: PAGE CONTENT -->
						<div class="row">
							<div class="col-md-12">
								<!-- start: EXPORT DATA TABLE PANEL  -->
								<div class="panel panel-white">
									<div class="panel-heading">
										<h4 class="panel-title">Feedback <span class="text-bold">Form</span> Info</h4>
										<div class="panel-tools">
											<div class="dropdown">
												<a data-toggle="dropdown" class="btn btn-xs dropdown-toggle btn-transparent-grey">
													<i class="fa fa-cog"></i>
												</a>
												<ul class="dropdown-menu dropdown-light pull-right" role="menu">
													<li>
														<a class="panel-collapse collapses" href="#"><i class="fa fa-angle-up"></i> <span>Collapse</span> </a>
													</li>
													<!--<li>
														<a class="panel-refresh" href="#">
															<i class="fa fa-refresh"></i> <span>Refresh</span>
														</a>
													</li>-->
													<li>
														<a class="panel-expand" href="#">
															<i class="fa fa-expand"></i> <span>Fullscreen</span>
														</a>
													</li>
												</ul>
											</div>
								        </div>
									</div>
									<div class="panel-body">
										<div class="row">
											<div class="col-md-12 space20">
											<div class="pull-left">
											<?php
												$uid = secureTxt($_GET['user']);
												$q2 = $conn->prepare("SELECT * FROM users WHERE id=:id");
												$q2->bindValue(":id",$uid);
												$q2->execute();
												$user = $q2->fetch(PDO::FETCH_OBJ);
												$userCode = json_decode($user->user, false);
											?>
											Returned By:<br/>
											<?php
												echo "<b>".$userCode->surname." ".$userCode->firstname."</b><br/>";
												echo $userCode->phone." | ".$userCode->zone." | ".$userCode->chapter."<br/>";
												
											?>
											</div>
												
												<div class="btn-group pull-right">
													<button data-toggle="dropdown" class="btn btn-green dropdown-toggle">
														Export <i class="fa fa-angle-down"></i>
													</button>
													<ul class="dropdown-menu dropdown-light pull-right">
														<li>
															<a href="#" class="export-pdf" data-table="#sample-table-2" data-ignoreColumn ="3,4">
																Save as PDF
															</a>
														</li>
														<li>
															<a href="#" class="export-png" data-table="#sample-table-2" data-ignoreColumn ="3,4">
																Save as PNG
															</a>
														</li>
														<li>
															<a href="#" class="export-csv" data-table="#sample-table-2" data-ignoreColumn ="3,4">
																Save as CSV
															</a>
														</li>
														<li>
															<a href="#" class="export-txt" data-table="#sample-table-2" data-ignoreColumn ="3,4">
																Save as TXT
															</a>
														</li>
														<li>
															<a href="#" class="export-xml" data-table="#sample-table-2" data-ignoreColumn ="3,4">
																Save as XML
															</a>
														</li>
														<li>
															<a href="#" class="export-sql" data-table="#sample-table-2" data-ignoreColumn ="3,4">
																Save as SQL
															</a>
														</li>
														<li>
															<a href="#" class="export-json" data-table="#sample-table-2" data-ignoreColumn ="3,4">
																Save as JSON
															</a>
														</li>
														<li>
															<a href="#" class="export-excel" data-table="#sample-table-2" data-ignoreColumn ="3,4">
																Export to Excel
															</a>
														</li>
														<li>
															<a href="#" class="export-doc" data-table="#sample-table-2" data-ignoreColumn ="3,4">
																Export to Word
															</a>
														</li>
														<li>
															<a href="#" class="export-powerpoint" data-table="#sample-table-2" data-ignoreColumn ="3,4">
																Export to PowerPoint
															</a>
														</li>
													</ul>
												</div>
											</div>
										</div>
										<div class="table-responsive">
											<table class="table table-striped table-hover" id="sample-table-2">
												<thead>
													<tr>
														<th>Full Name</th>
														<th>Address</th>
														<th>Phone Number</th>
														<th>Email Address</th>
														<th>Dept/level</th>
														<th>Comment</th>
														<th>Dist. Point</th>
														<th>One/One</th>
														<th>Received</th>
														<th>Pay(Self)</th>
														<th>Pay(friend)</th>
														<th>Prison</th>
														<th>Hospital</th>
														<th>Hotel</th>
														<th>School</th>
														<th>Copies</th>
														<th>Member</th>
														<th>Fellowship</th>
													</tr>
												</thead>
												<tbody>
                                                    <?php
													$id = secureTxt($_GET['id']);
                                                    $q = $conn->prepare("SELECT * FROM feedback WHERE id= :id ");
													$q->bindValue(":id", $id);
                                                    $q->execute();
													$row = $q->fetch(PDO::FETCH_OBJ);
													$arr = json_decode($row->feedback, false);
													foreach($arr as $info){                                                      
                                                    ?>
													<tr>
														<td><?php echo $info->surname." ".$info->firstname;?></td>
														<td><?php echo $info->address; ?></td>
														<td><?php echo $info->phone; ?></td>
														<td><?php echo $info->email; ?></td>
														<td><?php echo $info->dept; ?></td>
														<td><?php echo $info->comment; ?></td>														
														<td><?php echo $info->distribution; ?></td>														
														<td><?php echo $info->oneonone; ?></td>														
														<td><?php echo $info->receivedror; ?></td>														
														<td><?php echo $info->payforself; ?></td>														
														<td><?php echo $info->payforfriend; ?></td>														
														<td><?php echo $info->sponsorprison; ?></td>														
														<td><?php echo $info->sponsorhospital; ?></td>														
														<td><?php echo $info->sponsorhotel; ?></td>														
														<td><?php echo $info->sponsorschool; ?></td>														
														<td><?php echo number_format((int)$info->copies); ?></td>														
														<td><?php echo $info->fellowshipmember; ?></td>														
														<td><?php echo $info->fellowship; ?></td>														
													</tr>
                                                    <?php }?>
													
												</tbody>
											</table>
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
			