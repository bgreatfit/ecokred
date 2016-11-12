
        <!-- ####### -->
        <!-- Content -->
        <!-- ####### -->
        <main>
            <div class="main-content no-gutter">
                <!-- #### -->
                <!-- Body -->
                <!-- #### -->
				<section id="dashboard" class="container">
					<!-- ########### -->
					<!-- Stats panel -->
					<!-- ########### -->
				
					

						<!-- ########### -->
						<!-- Card panels -->
						<!-- ########### -->
					
					<div class="row">
						<div class="col s12 m4">
							<div class="card teal lighten-2">
								<div class="card-content">
									<span class="card-title">Users</span>
									<h2 style="text-align:center">
									<?php
									$q1 = $conn->query("SELECT * FROM users")->rowCount();
									echo $q1;
									?>
									</h2>
								</div>
								
							</div>
						</div>
						<div class="col s12 m4">
							<div class="card blue-grey lighten-1">
								<div class="card-content">
									<span class="card-title">Total Comments</span>
									<h2 style="text-align:center">
									<?php
									$q2 = $conn->query("SELECT * FROM comments")->rowCount();
									echo $q2;
									?>
									</h2>
								</div>
								
							</div>
						</div>
						<div class="col s12 m4">
							<div class="card blue-grey darken-1">
								<div class="card-content">
									<span class="card-title">Gallery</span>
									<h2 style="text-align:center">
									<?php
									$q3 = $conn->query("SELECT * FROM gallery")->rowCount();
									echo $q3;
									?>
									</h2>
								</div>
								
							</div>
						</div>
						</div>

						<!-- ########### -->
						<!-- Card reveal -->
						<!-- ########### -->
						<div class="row">
						<div class="col s12 m4">
							<div class="card teal lighten-2">
								<div class="card-content">
									<span class="card-title">News</span>
									<h2 style="text-align:center">
									<?php
									$q4 = $conn->query("SELECT * FROM news")->rowCount();
									echo $q4;
									?>
									</h2>
								</div>
								
							</div>
						</div>
						
						</div>
					</div>
				</section>
            </div>
        </main>

