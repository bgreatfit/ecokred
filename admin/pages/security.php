<?php
$w = $conn->prepare("SELECT * FROM admin");
$w->execute();
$read = $w->fetch();
?>
 
<section id="content_wrapper">
 
<header id="topbar" class="alt">
<div class="topbar-left">
<ol class="breadcrumb">
<li class="breadcrumb-icon">
<a href="home">
<span class="fa fa-home"></span>
</a>
</li>
<li class="breadcrumb-link">
<a href="home">Home</a>
</li>
<li class="breadcrumb-current-item">Security</li>
</ol>
</div>
</header>
 
 
<section id="content" class="table-layout animated fadeIn">
 
<div class="chute chute-center">
 
<div class="row">
<div class="col-sm-6 col-xl-3">
<div class="panel panel-tile info-block info-block-bg-info">
<div class="panel-body">
<div class="row">

<div class="col-xs-5 ph10 text-center">
<i class="imoon imoon-users2"></i>
</div>
<div class="col-xs-7 pl35 text-center">
<h2 class=""><?php 
$q2 =  $conn->query("SELECT * FROM users")->rowCount();
echo $q2;
?></h2>
<h6>Total Users</h6>
</div>
<div class="col-sm-12">
<div class="info-block-stat">
<span>Current Users - <?php 
$q3 =  $conn->query("SELECT * FROM users")->rowCount();
echo $q3;
?></span>
<span class=""></span>
</div>
</div>
</div>
</div>
</div>
</div>

<div class="col-sm-6 col-xl-3">
<div class="panel panel-tile info-block info-block-bg-system">
<div class="panel-body">
<div class="row">

<div class="col-xs-5 ph10 text-center">
<i class="fa fa-cloud-upload"></i>
</div>
<div class="col-xs-7 pl35 text-center">
<h2 class=""><?php 
$q =  $conn->query("SELECT * FROM products")->rowCount();
echo $q;
?></h2>
<h6 class="text-muted">Total Products</h6>
</div>
<div class="col-sm-12">
<div class="info-block-stat">
<span>Current Products - <?php 
$q =  $conn->query("SELECT * FROM products")->rowCount();
echo $q;
?></span>
<span class=""></span>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="allcp-panels mt40 fade-onload">
<div class="row">
 
<div class="col-md-12 allcp-grid">
 
<div class="panel mbn pt25" data-panel-title="false">
 
<div class="panel-body mt40 pn">
<div class="col-md-12 text-left"><h5>Security And Password</h5></div>
<div class="row">

<div class="col-md-7 mb10 col-sm-6 col-xs-12">

    <form id="productForm" class="form" action="" method="POST" enctype="multipart/form-data">
        <div class="form-group earn-info">
			<?php 
			if(isset($_POST['submit'])){
				//var_dump($_FILES);
				if($_POST['email'] AND $_POST['pass'] AND $_POST['cpass']){
				$email = secureTxt($_POST['email']);
				$pass = securePwd($_POST['pass']);
				$cpass = securePwd($_POST['cpass']);
				if($pass === $cpass){
				$q12 = $conn->prepare("UPDATE admin SET username=:email, password=:pass");
					$q12->bindValue(':email', $email);
					$q12->bindValue(':pass', $pass);
					if($q12->execute()){
						exit(header('location:security?success=true'));
						}
					}else{ ?>
					<div class='alert alert-warning'>
                <i class='fa fa-exclamation-triangle'></i> Password does not match...
                <button class='close' data-dismiss='alert'>&times;</button>
            </div>
				<?php 
					}
				}
				else{
				?>
				<div class='alert alert-warning'>
                <i class='fa fa-exclamation-triangle'></i> All fields are required...
                <button class='close' data-dismiss='alert'>&times;</button>
            </div>
			<?php }
			}
			?>
		
            <?php if(isset($_GET['success']) AND ($_GET['success'] == "true")){?>
            <div class='alert alert-success'>
                <i class='fa fa-check'></i> Login details updated! <button class='close' data-dismiss='alert'>&times;</button>
            </div>
            <?php }?>
        </div>
		<div class="form-group">
            <label class="control-label">Email</label>
            <input type="email" value="<?php if(isset($read['username'])){ echo $read['username'];}?>" placeholder="" name="email" class="form-control">
        </div>
		<div class="form-group">
            <label class="control-label">Password</label>
            <input type="password" value="<?php if(isset($_POST['pass'])){ echo $_POST['pass'];}?>" placeholder="Password" name="pass" class="form-control">
        </div>
		<div class="form-group">
            <label class="control-label">Confirm Password</label>
            <input type="password" value="<?php if(isset($_POST['cpass'])){ echo $_POST['cpass'];}?>" placeholder="Confirm Password" name="cpass" class="form-control">
        </div>
		<div class="form-group">
            <button type="submit" name="submit" value="1" class="btn btn-block btn-info btn-lg" style="width:100%"><i class="fa fa-lock"></i> Update</button>
        </div>
    </form> 

</div>
 
<div class="col-md-5 col-xs-12 col-sm-6 hidden-xs">

</div>
</div>
</div>
</div>
</div>
 
</div>
</div>
</div>
 
</section>
 
