<?php
if((isset($_GET['okay']))){
	$okay = $_GET['okay'];
}
else if(!isset($_GET['okay'])){
	$okay =null;
}
$_SESSION['checkout']= $_GET['page'].'?='.$okay;
?>
<?php if(!isset($_SESSION['shop']) AND !isset($_SESSION['user']) )
{

	header('location:/login');
}
	?>

<div class="container" style="margin:40px auto">
<div class="col-xs-12">
<div class="row">
<?php
if(isset($_GET['okay'])){
	$prod = $conn->prepare("SELECT * FROM products WHERE id=".$_GET['okay']."");
	$prod->execute();
	$row = $prod->fetch(PDO::FETCH_OBJ);

?>
<div class="col-md-5">
<img src="images/products/<?php echo $row->thumbnail;?>" width="500" class="img-thumbnail">
<br/>
<br/>
<h3><?php echo $row->name;?></h3>
<p><?php echo $row->details;?></p>
</div>
<div class="col-md-offset-2 col-md-5">

<div class="show" style="">
<div class="panel panel-default">
<div class="panel-heading">Delivery Information</div>
<div class="panel-body">
<div width="200">
<form id="deliveryForm" method="Post" action="">
<div class="form-group delivery-info">

</div>
<div class="form-group"><label class="control-label">Name</label>
<input type="text" name="fname" placeholder="Your Full Name " class="form-control"></div>
<div class="form-group"><label class="control-label">Phone Number</label>
<input type="number" min="0" name="phone" placeholder="Phone number" class="form-control"></div>

<div class="form-group"><label class="control-label">Email address</label>
<input type="email" name="email" placeholder="Email address" class="form-control">
<input type="hidden" name="product" value="<?php echo $row->id; ?>">
</div>
<div class="form-group"><label class="control-label">Address</label>
<input type="text" name="add" placeholder="your location" class="form-control"></div>

<div class="form-group"><label class="control-label">Quantity</label>
<input type="number" min="1" name="qty" placeholder="Product quantity" class="form-control"></div>
<div class="form-group">
<button type="submit" id="deliveryBtn" style="border-radius:0px" class="btn btn-block btn-default">Submit</button>
</div>
</form>
</div>
</div>
</div>

</div>
<h3>₦<?php echo number_format($row->price).'/'.$row->points.'eks';?></h3>
</div>  
<?php }else if(isset($_GET['redeemp'])){
	$prod = $conn->prepare("SELECT * FROM products WHERE id=".$_GET['redeemp']."");
	$prod->execute();
	$row = $prod->fetch(PDO::FETCH_OBJ);

?>
<div class="col-md-5">
<img src="images/products/<?php echo $row->thumbnail;?>" width="500" class="img-thumbnail">
<br/>
<br/>
</div>
<div class="col-md-offset-2 col-md-5">
<h3><?php echo $row->name;?></h3>
<p><?php echo $row->details;?></p>
<h3><?php echo number_format($row->points).'eks';?></h3>
<br/>
<br/>
<div class="show" style="">
<div class="panel panel-default">
<div class="panel-heading">Eks Wallet Address <a href="javascript:;" class="pull-right" data-toggle="tooltip" data-placement="right" title="Locate this on your user dashboard."><i class="zmdi zmdi-help-outline"></i></a></div>
<div class="panel-body">
	<div width="200">
	<form id="eksForm" method="Post" action="">
	<div class="form-group eks-info"></div>
	<div class="form-group"><label class="control-label"></label>
	<input type="hidden" value="<?php echo $row->id;?>" name="product">
	<input type="text" name="id" placeholder="Insert your wallet address" class="form-control">
	</div>
	<div class="form-group">
	<button type="submit" id="eksBtn" style="border-radius:0px" class="btn btn-block btn-default">₦ Pay</button>
	</div>
	</form>
	</div>
	</div>
	</div>
</div>

</div>
<?php }else if(isset($_GET['redeems'])){
		$prod = $conn->prepare("SELECT * FROM services WHERE id=".$_GET['redeems']."");
	$prod->execute();
	$row = $prod->fetch(PDO::FETCH_OBJ);

?>
<div class="col-md-5">
<img src="images/services/<?php echo $row->thumbnail;?>" width="500" class="img-thumbnail">
<br/>
<br/>

</div>
<div class="col-md-offset-2 col-md-5">
<h3><?php echo $row->name;?></h3>
<p><?php echo $row->details;?></p>
<h3><?php echo number_format($row->points).'eks';?></h3>
<br/>
<br/>
<div class="show" style="">
<div class="panel panel-default">
<div class="panel-heading">Eks Wallet Address <a href="javascript:;" class="pull-right" data-toggle="tooltip" data-placement="right" title="Locate this on your user dashboard."><i class="zmdi zmdi-help-outline"></i></a></div>
<div class="panel-body">
	<div width="200">
	<form id="eksForm" method="Post" action="">
	<div class="form-group eks-info"></div>
	<div class="form-group"><label class="control-label"></label>
	<input type="hidden" value="<?php echo $row->id;?>" name="service">
	<input type="text" name="id" placeholder="Insert your wallet address" class="form-control">
	</div>
	<div class="form-group">
	<button type="submit" id="eksBtn" style="border-radius:0px" class="btn btn-block btn-default">₦ Pay</button>
	</div>
	</form>
	</div>
	</div>
	</div>
</div>
</div>
<?php }?>
</div>
</div>
</div>
<?php
if((isset($_GET['okay']))){
	$okay = $_GET['okay'];
}
else if(!isset($_GET['okay'])){
	$okay =null;
}
$_SESSION['checkout']= $_GET['page'].'?='.$okay;
?>
<script>
$('#eksForm').submit(function(e){
		e.preventDefault();
		$('#eksBtn').prop('disabled', true).html('Processing...');
		var data = $(this).serialize();
		var url = "include/transaction.php"
		$.post(url,data,function(resp){
			if(resp.status == 200){
				$(".eks-info").html("<div class='alert alert-success'>"+resp.message+"</div>");
				$('#eksBtn').prop('disabled', false).html('₦ Pay');
			}else{
				$(".eks-info").html("<div class='alert alert-warning'>"+resp.message+"</div>");
				$('#eksBtn').prop('disabled', false).html('₦ Pay');
			}
		},'json')
	});
	
	
	$('#deliveryForm').submit(function(e){
		e.preventDefault();
		$('#deliveryBtn').prop('disabled', true).html('Processing...');
		var data = $(this).serialize();
		var url = "include/delivery.php"
		$.post(url,data,function(resp){
			if(resp.status == 200){
				$('#deliveryForm')[0].reset();
				$(".delivery-info").html("<div class='alert alert-success'>"+resp.message+"</div>");
				$('#deliveryBtn').prop('disabled', false).html('Submit');
			}else{
				$(".delivery-info").html("<div class='alert alert-warning'>"+resp.message+"</div>");
				$('#deliveryBtn').prop('disabled', false).html('Submit');
			}
		},'json')
	});

</script>