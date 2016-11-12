<?php
$w = $conn->prepare("SELECT * FROM users WHERE verify = :uv");
$w->bindValue(':uv', $_SESSION['verify']);
$w->execute();
$read = $w->fetch();
?>
 
<section id="content_wrapper">
 
<!--<header id="topbar" class="alt">
<div class="topbar-left">
<ol class="breadcrumb">
<li class="breadcrumb-icon">
<a href="index-2.html">
<span class="fa fa-home"></span>
</a>
</li>
<li class="breadcrumb-link">
<a href="index-2.html">Home</a>
</li>
<li class="breadcrumb-current-item">Dashboard</li>
</ol>
</div>
</header>-->
 
 
<section id="content" class="table-layout animated fadeIn">
 
<div class="chute chute-center">
 
<div class="row">
<?php if($_SESSION['account'] == 'user'){?>
<div class="col-sm-6 col-xl-3">
<div class="panel panel-tile info-block info-block-bg-success">
<div class="panel-body">
<div class="row">
  
<div class="col-xs-5 ph10 text-center ">
<i class="fa fa-money"></i>
</div>
<div class="col-xs-7 pl35 prn text-center">
<h2 class="earnings">
    <?php
        
        echo $read['earnings'];
    ?>
    </h2>
<h6>Current Earnings</h6>
</div>
<div class="col-sm-12">
<div class="info-block-stat">
<span>Earnings as at today</span>
<span class="earnings"><?php echo $read['earnings'];?></span>
</div>
</div>
</div>
</div>
</div>
</div>
<?php }else{?>
<div class="col-sm-6 col-xl-3">
<div class="panel panel-tile info-block info-block-bg-success">
<div class="panel-body">
<div class="row">
  
<div class="col-xs-5 ph10 text-center ">
<i class="fa fa-cloud-upload"></i>
</div>
<div class="col-xs-7 pl35 prn text-center">
<h2 class="earnings">
    <?php
        $u = $conn->prepare("SELECT * FROM products WHERE manufacturer_id = :uv");
        $u->bindValue(':uv', $read['id']);
        $u->execute();
        echo $u->rowCount();
    ?>
    </h2>
<h6>Total Products</h6>
</div>
<div class="col-sm-12">
<div class="info-block-stat">
<span>Products as at today</span>
<span class="earnings"><?php echo $u->rowCount();?></span>
</div>
</div>
</div>
</div>
</div>
</div>
<?php }?>
<div class="col-sm-6 col-xl-3">
<div class="panel panel-tile info-block info-block-bg-system">
<div class="panel-body">
<div class="row">
<div class="col-xs-5 ph10 text-center">
<i class="imoon imoon-users2"></i>
</div>
<div class="col-xs-7 pl35 text-center">
<h2 class="">0</h2>
<h6 class="text-muted"><?php echo $read['fname']." ".$read['lname'];?></h6>
</div>
<div class="col-sm-12">
<div class="info-block-stat">
<span>Member - <?php echo date("d M, y", $read['timestamp']);?></span>
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
				$q12 = $conn->prepare("UPDATE users SET email=:email, password=:pass WHERE id = :id");
					$q12->bindValue(':email', $email);
					$q12->bindValue(':id', $read['id']);
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
            <input type="email" value="<?php if(isset($read['email'])){ echo $read['email'];}?>" placeholder="" name="email" class="form-control">
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
 
