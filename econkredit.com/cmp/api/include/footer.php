
        <!-- ###### -->
        <!-- Footer -->
        <!-- ###### -->
        <footer class="page-footer">
         

            <div class="footer-copyright">
                <div class="container">
                    © <?php echo date("Y");?> Blw Campus Ministry, All rights reserved.
                </div>
            </div>
        </footer>


        <!-- ################## -->
        <!-- Global javascripts -->
        <!-- ################## -->
        <script src="bower_components/jquery/dist/jquery.js" type="text/javascript"></script>
        <script src="bower_components/Materialize/dist/js/materialize.js" type="text/javascript"></script>
        <script src="bower_components/code-prettify/src/prettify.js" type="text/javascript"></script>
        <script src="js/admin.js" type="text/javascript"></script>
        <!-- ################ -->
        <!-- Util javascripts -->
        <!-- ################ -->
        <script src="js/utils.js" type="text/javascript"></script>
        <script src="js/colors.js" type="text/javascript"></script>
        <!-- ################ -->
        <!-- Page javascripts -->
        <!-- ################ -->
        <script src="bower_components/amcharts3/amcharts/amcharts.js" type="text/javascript"></script>
        <script src="bower_components/amcharts3/amcharts/serial.js" type="text/javascript"></script>
        <script src="bower_components/amcharts3/amcharts/gauge.js" type="text/javascript"></script>
        <script src="bower_components/amcharts3/amcharts/themes/light.js" type="text/javascript"></script>
        <script src="bower_components/slimscroll/jquery.slimscroll.js" type="text/javascript"></script>
        <script src="dropify/js/dropify.min.js" type="text/javascript"></script>
        <script src="dropzone/downloads/dropzone.min.js" type="text/javascript"></script>
        <script src="tinymce/tinymce.min.js" type="text/javascript"></script>
        <script src="js/pages/dashboard.js" type="text/javascript"></script>
		<script>
		
		/**********************************************************************************************/
		/************************************ TinyMCE ************************************************/
		/**********************************************************************************************/
		
		tinymce.init({
        selector: '#textarea1',  // change this value according to your HTML
        theme:'modern',
        plugins: [
		    "advlist autolink link image lists charmap print preview hr anchor pagebreak spellchecker",
		    "searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking",
		    "save table contextmenu directionality emoticons template paste textcolor"
		    ],
		toolbar: "insertfile undo redo | styleselect | bold | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image | print preview media fullpage | forecolor backcolor emoticons",
            /*style_formats: [
		    {title: 'Bold text', inline: 'b'},
		    {title: 'Red text', inline: 'span', styles: {color: '#ff0000'}},
		    {title: 'Red header', block: 'h1', styles: {color: '#ff0000'}},
		    {title: 'Example 1', inline: 'span', classes: 'example1'},
		    {title: 'Example 2', inline: 'span', classes: 'example2'},
		    {title: 'Table styles'},
		    {title: 'Table row 1', selector: 'tr', classes: 'tablerow1'}
		    ],*/
        setup: function(editor){
            editor.on("change", function(){
            editor.save();
            })
          }
        });
						
		/**********************************************************************************************/
		/************************************ Dropify ************************************************/
		/**********************************************************************************************/
		
		$('.dropify').dropify({
			messages: {
                'default': 'Drag and drop blog image here or click',
				'replace': 'Drag and drop or click to replace image',
                'remove': 'Remove',
                'error': 'Ooops, something wrong appended.'
                },
            error: {
                'fileSize': 'The file size is too big (1M max).'
                }
		});
		
		/**********************************************************************************************/
		/************************************ Dropzone ************************************************/
		/**********************************************************************************************/
		
		
		Dropzone.autoDiscover = false;
		if ($('#drag-and-drop-zone').length) {
			var myDropzone = new Dropzone("div#drag-and-drop-zone", { url: "include/upload.php",  acceptedFiles:"image/png,image/jpg,image/jpeg", paramName: "file", maxFilesize: 2});
		}
		
		//Dropzone.autoDiscover = false;
		if ($('#upload-zone').length) {
		  $("div#upload-zone").dropzone({ url: "include/sliders.php",  acceptedFiles:"image/png,image/jpg,image/jpeg", paramName: "slider", maxFilesize: 2});
		  // other code here
		}
	
		
		/**********************************************************************************************/
		/************************************ AddPhoto ************************************************/
		/**********************************************************************************************/
		
		$('.addPhoto').click(function(e){
			var id = $(this).attr('id');
			console.log(id);
			myDropzone.on('sending', function(file, xhr, formData){
					formData.append('gallery', id);
			})
			$('#modal1').openModal({
				complete: function(){
					myDropzone.removeAllFiles();
				}
			});
			
		});
		
		$('.slidDel').click(function(e){
			e.preventDefault();
			var id = $(this).attr('id');
			console.log(id);
			if(confirm("Are you sure you want to delete??")){
				$.getJSON('./include/delete.php',{'slide':id},function(resp){
					if(resp.status == 200){
						window.location.reload();
					}
				})
				//alert("Yes!");
			}
		});
		
		$('.picDel').click(function(e){
			e.preventDefault();
			var id = $(this).attr('id');
			console.log(id);
			if(confirm("Are you sure you want to delete??")){
				$.getJSON('./include/delete.php',{'pic':id},function(resp){
					if(resp.status == 200){
						window.location.reload();
					}
				})
				//alert("Yes!");
			}
		});
		
		$('.delBlog').click(function(e){
			e.preventDefault();
			var id = $(this).attr('id');
			console.log(id);
			if(confirm("Are you sure you want to delete??")){
				$.getJSON('./include/delete.php',{'blog':id},function(resp){
					if(resp.status == 200){
						window.location.reload();
					}
				})
				//alert("Yes!");
			}
		});
		
		$('.delGal').click(function(e){
			e.preventDefault();
			var id = $(this).attr('id');
			console.log(id);
			if(confirm("Are you sure you want to delete??")){
				$.getJSON('./include/delete.php',{'id':id},function(resp){
					if(resp.status == 200){
						window.location.reload();
					}
				})
				//alert("Yes!");
			}
		});
		
		$('.commt').click(function(e){
			e.preventDefault();
			var id = $(this).attr('id');
			var title = $(this).attr('head');
			$.getJSON('./include/comment.php',{'id':id}, function(resp){
				if(resp.status == 200){
					var com = '<div class="card"><div class="card-content"><h6>'+resp.data.length+' Comments for "'+title+'"</h6></div></div>';
					resp.data.forEach(function(key){
						com += '<div class="card"><div class="card-content"><p>'+
						'<a title="" href="javasrcipt:;">'+key.name+'</a><span style="float:right">'+key.time+'</span></p>'+
						'<p>'+key.comment+'</p></div></div>';
					})
					$('.modal-content').html(com);
				}
			});
			$('#modal2').openModal();
		})
		
		</script>        
    </body>
</html>