  <!-- Info Modal -->
 <div id="infoModal" class="modal fade" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title"></h4>
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
/***********************************************EarningForm***********************************************************/
/*********************************************************************************************************************/

	$('#earnForm').submit(function(e){
        e.preventDefault();
        var data = $(this).serialize();
        var url = $(this).attr('action');
        $.getJSON(url,data,function(resp){
            if(resp.status == 200){
                window.location.replace("home?success=true");
            }else{
               window.location.replace("home?success=false");                
            }
        });
    });
	
/**********************************************************************************************************************/
/************************************************ Delete Product ******************************************************/
/**********************************************************************************************************************/

$('.btnDel').click(function(e){
	e.preventDefault();
	if(confirm("Are you sure you want to delete??")){
		var id = $(this).attr('id');
		$.getJSON('./includes/delete.php',{'prod':id},function(resp){
		if(resp.status == 200){
		window.location.reload();
		}
		})
		//alert($(this).attr('id'));
	}
});

/**********************************************************************************************************************/
/************************************************ Prod Info ***********************************************************/
/**********************************************************************************************************************/


/**********************************************************************************************************************/
/************************************************ Used Info ***********************************************************/
/**********************************************************************************************************************/


</script>
 
</body>
</html>
