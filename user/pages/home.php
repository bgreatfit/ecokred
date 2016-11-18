<?php
if($_SESSION['account'] == 'user'){
$w = $conn->prepare("SELECT * FROM users WHERE verify = :uv");
$w->bindValue(':uv', $_SESSION['verify']);
$w->execute();
$read = $w->fetch();
?>
 
<section id="content_wrapper">

    <header id="topbar" class="alt">
        <div class="topbar-left">
            <ol class="breadcrumb">
                <li class="breadcrumb-icon">
                    <a href="http://econkredit.com">
                        <span class="fa fa-home"></span>
                    </a>
                </li>
                <li class="breadcrumb-link">
                    <a href="http://econkredit.com">Back To Site</a>
                </li>
            </ol>
        </div>
    </header>
 
 
<section id="content" class="table-layout animated fadeIn">
 
<div class="chute chute-center">
 
<div class="row">

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

<div class="row">

<div class="col-md-7 mb10 col-sm-6 col-xs-12">

    <form id="earnForm" class="form" action="includes/earnings.php" method="POST">
        <div class="form-group earn-info">
            <?php if(isset($_GET['success']) AND ($_GET['success'] == "true")){?>
            <div class='alert alert-success'>
                <i class='fa fa-check'></i> Congratulations <button class='close' data-dismiss='alert'>&times;</button>
            </div>
            <?php }else if(isset($_GET['success']) AND ($_GET['success'] == "false")){?>
            <div class='alert alert-warning'>
                <i class='fa fa-exclamation-triangle'></i> An error occurred! Your code might have been used.
                <button class='close' data-dismiss='alert'>&times;</button>
            </div>
            <?php }?>
        </div>
        <div class="form-group">
            <label class="control-label">Product Code</label>
            <input type="text" class="form-control" name="code" placeholder="Product Code" required>
            <input type="hidden" value="<?php echo $read['id'];?>" name="user">
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-block btn-primary btn-lg" style="width:100%"><i class="fa fa-thumbs-up"></i> Earn Points</button>
        </div>
    </form> 

</div>
 
<div class="col-md-5 col-xs-12 col-sm-6 hidden-xs">
	<div class="mw400 ml70 " style="height:200px;margin-top:10px;overflow-y:scroll;overflow-x:auto">
	
	<?php 
	$p = $conn->prepare("SELECT * FROM products WHERE used_by = :uv ORDER BY used_timestamp DESC");
    $p->bindValue(":uv", $read['id']);
    $p->execute();
    while($row = $p->fetch()){
        ?>
<div class="mb20 fs13">
<div class="media">
<div class="media-left">
<img src="../images/products/<?php echo $row['thumbnail'];?>" width="50" class="media-object img-thumbnail img-rounded">
</div>
<div class="media-body">
<h6 class="media-heading ml2 mb7 fs16 fw600"><?php echo $row['name'];?> <br><small class="text-info" style="font-size:10px;"><?php echo timeAgo($row['used_timestamp']);?></small></h6>
<p><?php if($row['status'] == 0){?><span class="" style=""><?php echo $row['product_code'];?></span><?php }else{?><span class="text-warning" style="text-decoration:line-through"><?php echo $row['product_code'];?></span><?php }?> / <small class="">₦<?php echo number_format($row['price']);?></small> / <small class="text-info"><?php echo number_format($row['points']);?> pts</small></p>    
</div>
</div>
</div>
<hr/>	
	<?php }?>
</div>



</div>
</div>
</div>
</div>
</div>
 
</div>
</div>
</div>
 
</section>
</section>
<?php }else{
	exit(header("location:/"));
}?>
