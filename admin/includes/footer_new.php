  <!-- Info Modal -->
 <div id="infoModal" class="modal fade" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Details</h4>
      </div>
      <div class="modal-body">
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->



<footer id="content-footer">
<div class="row">
<div class="col-md-6">
<span class="footer-legal">Copyright © <?php echo date("Y");?>. All rights reserved. <a href="#">Terms of use</a> | <a href="#">Privacy Policy</a></span>
</div>
<div class="col-md-6 text-right">
<span class="footer-meta"></span>
<a href="#content" class="footer-return-top">
<span class="fa fa-angle-up"></span>
</a>
</div>
</div>
</footer>
 
</section>
 
</div>
 
 
 
<script src="./assets/js/jquery/jquery-1.11.3.min.js"></script>
<script src="./assets/js/jquery/jquery_ui/jquery-ui.min.js"></script>


  <script src="./assets/js/plugins/highcharts/highcharts.js"></script>
<script src="./assets/js/plugins/c3charts/d3.min.js"></script>
<script src="./assets/js/plugins/c3charts/c3.min.js"></script>
 
<script src="./assets/js/plugins/circles/circles.js"></script>
 
<script src="./assets/js/plugins/jvectormap/jquery.jvectormap.min.js"></script>
<script src="./assets/js/plugins/jvectormap/assets/jquery-jvectormap-us-lcc-en.js"></script>
 
<script src="./assets/js/plugins/fullcalendar/lib/moment.min.js"></script>
<script src="./assets/js/plugins/fullcalendar/fullcalendar.min.js"></script>
 
<script src="./assets/allcp/forms/js/jquery-ui-monthpicker.min.js"></script>
<script src="./assets/allcp/forms/js/jquery-ui-datepicker.min.js"></script>
 
<script src="./assets/js/plugins/magnific/jquery.magnific-popup.js"></script>

<script src="./assets/js/plugins/datatables/media/js/jquery.dataTables.js"></script>
<script src="./assets/js/plugins/datatables/extensions/TableTools/js/dataTables.tableTools.min.js"></script>
<script src="./assets/js/plugins/datatables/extensions/ColReorder/js/dataTables.colReorder.min.js"></script>
<script src="./assets/js/plugins/datatables/media/js/dataTables.bootstrap.js"></script>
 
<script src="./assets/js/utility/utility.js"></script>
<script src="./assets/js/utility/malihu-custom-scrollbar-plugin-master/jquery.mCustomScrollbar.concat.min.js"></script>
<script src="./assets/js/demo/demo.js"></script>
<script src="./assets/js/main.js"></script>
 
<script src="./assets/js/demo/widgets.js"></script>
<script src="./assets/js/demo/widgets_sidebar.js"></script>
<script src="./assets/js/bootstrap.min.js"></script>
<script src="./assets/js/pages/dashboard1.js"></script>
<script src="./dropify/js/dropify.min.js"></script>

<script>
	/*******************************************************************************************************************/
	/****************************************Dropify.js****************************************************************/
	/*******************************************************************************************************************/

	$(".dropify").dropify({

	});

	/*********************************************************************************************************************/
/***********************************************Del***********************************************************/
/*********************************************************************************************************************/

	$('.del').click(function(e){
        e.preventDefault();
		var id = $(this).attr('id');
		var url = "includes/delete.php";
		var data = {'prod': id};
		if(confirm("Are you sure you want to delete this product??")){
		$.getJSON(url,data,function(resp){
            if(resp.status == 200){
                window.location.reload();
            }else{
               alert(resp.message)                
            }
        });
		}
    });
	/**********************************************************************************************************************/
	/************************************************ Edit Sellers ******************************************************/
	/**********************************************************************************************************************/
	$('.editSeller').click(function(e){
		e.preventDefault();
		var id = $(this).attr('id');
		var url = "includes/sellershow.php";
		var data = {'id': id};
		$(".modal-body").html("");

		$.getJSON(url,data,function(resp){
			if(resp.status == 200){
				var info ='<div class="row"><div class="col-sm-7 text-left"><form id="sellerForm" method="post" action="includes/update.php">'+
					'<p>Seller<br/><input type="text"  name="seller" class="form-control" value="'+resp.data.shop+'"></p>'+
					'<input type="hidden" value="'+id+'" name="id"></p>'+
					'<p><input type="hidden" value="update-seller" name="update"></p>'+
					'<p><button type="submit" id="submit" class="btn btn-info btn-block" >Edit</button></form></p>';
				$("#infoModal").modal('show');
				$('.modal-body').html(info);
				$('#infoModal').modal('show');
				$("#sellerForm").submit(function(e){
					e.preventDefault();
					$('#submit').prop('disabled', true).html('Processing....');
					var uri = $(this).attr('action');
					var dat = $(this).serialize();
					$.getJSON(uri,dat, function(res){
						if(res.status == 200){
							location.reload(true);
						}else{
							alert(res.message);
							$('#submit').prop('disabled', false).html('Edit');

						}
					})
				})
			}else{
				alert(resp.message)
			}
		});



	});

	/**********************************************************************************************************************/
/************************************************ Edit Product******************************************************/
/**********************************************************************************************************************/

$('.edit').click(function(e){
	e.preventDefault();
	var id = $(this).attr('id');
	var url = "includes/productshow.php";
	var data = {'prod': id};
	$(".modal-body").html("");
	
	$.getJSON(url,data,function(resp){
            if(resp.status == 200){
				var info = '<div class="row"><div class="col-sm-4 mr30" ><img width="200" class="img-thumbnail img-rounded" src="../images/products/'+resp.data.picture+'"><br/><br/><p class="lead">'+resp.data.name+'</p></div>'+
				'<div class="col-sm-7 text-left"><form id="editForm" method="post" action="includes/update.php"><p>Details<br/><textarea class="form-control" name="details">'+resp.data.details+'</textarea></p>'+
				'<p>Price<br/><input type="number" min="0" name="price" class="form-control" value="'+resp.data.price+'"></p>'+
				'<p>Eks<br/><input type="number" min="0" name="points" class="form-control" value="'+resp.data.points+'"><input type="hidden" value="'+id+'" name="id"></p>'+
				'<p><input type="hidden" value="'+id+'" name="id"></p>'+
				'<p><input type="hidden" value="update-product" name="update"></p>'+
                '<p><button type="submit" id="submit" class="btn btn-info btn-block" >Edit</button></form></p>';
				$("#infoModal").modal('show');
                $('.modal-body').html(info);
				$('#infoModal').modal('show');
				$("#editForm").submit(function(e){
					e.preventDefault();
					$('#submit').prop('disabled', true).html('Processing....');
					var uri = $(this).attr('action');
					var dat = $(this).serialize();
					$.getJSON(uri,dat, function(res){
						if(res.status == 200){
							window.location.reload();
						}else{
							alert(res.message);
							$('#submit').prop('disabled', false).html('Edit');
					
						}
					})
				})
            }else{
               alert(resp.message)                
            }
    });
	
	
	
});
	/**********************************************************************************************************************/
	/************************************************ Edit Service******************************************************/
	/**********************************************************************************************************************/
	$('.editSer').click(function(e){
		e.preventDefault();
		var id = $(this).attr('id');
		var url = "includes/productshow.php";
		var data = {'ser': id};
		$(".modal-body").html("");

		$.getJSON(url,data,function(resp){
			if(resp.status == 200){
				var info = '<div class="row"><div class="col-sm-4 mr30" ><img width="200" class="img-thumbnail img-rounded" src="../images/services/' +
					''+resp.data.picture+'"><br/><br/><p class="lead">'+resp.data.name+'</p></div>'+
					'<div class="col-sm-7 text-left"><form id="editForm" method="post" action="includes/update.php"><p>Details<br/><textarea class="form-control" name="details">'+resp.data.details+'</textarea></p>'+
					'<p>Price<br/><input type="number" min="0" name="price" class="form-control" value="'+resp.data.price+'"></p>'+
					'<p>Eks<br/><input type="number" min="0" name="points" class="form-control" value="'+resp.data.points+'"><input type="hidden" value="'+id+'" name="id"></p>'+
					'<input type="hidden" value="'+id+'" name="id"></p>'+
					'<p><input type="hidden" value="update-service" name="update"></p>'+
					'<p><button type="submit" id="submit" class="btn btn-info btn-block" >Edit</button></form></p>';
				$("#infoModal").modal('show');
				$('.modal-body').html(info);
				$('#infoModal').modal('show');
				$("#editForm").submit(function(e){
					e.preventDefault();
					$('#submit').prop('disabled', true).html('Processing....');
					var uri = $(this).attr('action');
					var dat = $(this).serialize();
					$.getJSON(uri,dat, function(res){
						if(res.status == 200){
							window.location.reload();
						}else{
							alert(res.message);
							$('#submit').prop('disabled', false).html('Edit');

						}
					})
				})
			}else{
				alert(resp.message)
			}
		});



	});
	/**********************************************************************************************************************/
	/************************************************ Delete Service******************************************************/
	/**********************************************************************************************************************/
	$('.delSer').click(function(e){
		e.preventDefault();
		var id = $(this).attr('id');
		var url = "includes/delete.php";
		var data = {'ser': id};
		if(confirm("Are you sure you want to delete this service?")){
			$.getJSON(url,data,function(resp){
				if(resp.status == 200){
					window.location.reload();
				}else{
					alert(resp.message)
				}
			});
		}
	});
/**********************************************************************************************************************/
/************************************************ Approve/Disapprove Products**************************************************/
/**********************************************************************************************************************/
$('.approve').click(function(e){
	e.preventDefault();
	var id = $(this).attr('id');
	if(confirm("Are you sure you want to approve this product??")){
	$.getJSON('includes/approve.php',{'id':id}, function(resp){
		if(resp.status == 200){
			window.location.reload();
		}
	})
	}
});
$('.disapprove').click(function(e){
	e.preventDefault();
	var id = $(this).attr('id');
	if(confirm("Are you sure you want to disapprove this product??")){
	$.getJSON('includes/approve.php',{'dis':id}, function(resp){
		if(resp.status == 200){
			window.location.reload();
		}
	})
	}
})
	/**********************************************************************************************************************/
	/************************************************ Approve/Disapprove Services**************************************************/
	/**********************************************************************************************************************/
	$('.approveSer').click(function(e){
		e.preventDefault();
		var id = $(this).attr('id');
		if(confirm("Are you sure you want to approve this product??")){
			$.getJSON('includes/approve.php',{'aprvSer':id}, function(resp){
				if(resp.status == 200){
					window.location.reload();
				}
			})
		}
	});
	$('.disapproveSer').click(function(e){
		e.preventDefault();
		var id = $(this).attr('id');
		if(confirm("Are you sure you want to disapprove this product??")){
			$.getJSON('includes/approve.php',{'disSer':id}, function(resp){
				if(resp.status == 200){
					window.location.reload();
				}
			})
		}
	})
/**********************************************************************************************************************/
/************************************************ Delete Slider ***********************************************************/
/**********************************************************************************************************************/
$('.delSlider').click(function(e){
        e.preventDefault();
		var id = $(this).attr('id');
		var url = "includes/delete.php";
		var data = {'slider': id};
		if(confirm("Are you sure you want to delete this slider?")){
		$.getJSON(url,data,function(resp){
            if(resp.status == 200){
                window.location.reload();
            }else{
               alert(resp.message)                
            }
        });
		}
    });

	/**********************************************************************************************************************/
	/************************************************ Delete User ***********************************************************/
	/**********************************************************************************************************************/
	$('.delUser').click(function(e){
        e.preventDefault();
		var id = $(this).attr('id');
		var url = "includes/delete.php";
		var data = {'user': id};
		if(confirm("Are you sure you want to delete this account??")){
		$.getJSON(url,data,function(resp){
            if(resp.status == 200){
                window.location.reload();
            }else{
               alert(resp.message)                
            }
        });
		}
    });
	$("#regForm").submit(function(e){
		e.preventDefault();
		$(".btn-reg").prop("disabled", true).html("<i class='fa fa-repeat fa-spin'></i> Processing...");
		var data = $(this).serialize();
		var url = "includes/register.php";
		$.getJSON(url,data,function(res){
			if(res.status === 200){
				window.location.replace('add-seller?status=registered');
			}else{
				$(".btn-reg").prop("disabled", false).html("Add User");
				$(".reg-info").fadeIn("slow").html("<div class='alert alert-warning'><i class='fa fa-exclamation-circle'></i> "+res.message+"<button class='close' data-dismiss='alert'>&times;</button></div>");
			}
		});
	});

</script>
 
</body>
</html>
