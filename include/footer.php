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
     </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->


<footer class="tc">
    <a href="http://www.econkredit.com/"><h1 id="footer-logo">EconKredit</h1></a>

    <!--<p class="ninety-nine">Rewarding Our Members Since 2016</p>-->
    <hr/>
    <div class="container">
        <div class="col-xs-12">
		<div class="col-xs-4 col-sm-6 col-md-3 " style="overflow:hidden">
                        <h6>ABOUT</h6>
                        <ul>
                            <li><a href="#">How EconKredit Works</a></li>
                            <li><a href="#">FAQs</a></li>

                            <li><a href="#" target="_blank">Careers</a></li>
                        </ul>
                    </div>
            <div class="col-xs-4 col-sm-6 col-md-3" style="overflow:hidden">
                <div class="">


                    <div class="">
                        <h6>POLICIES</h6>
                        <ul>
                            <li>
                                <a href="#">Privacy Policy</a>
                            </li>
                            <li><a href="#">Terms of Use</a></li>
                            <li><a href="#">Score! Privacy Policy &amp; EULA</a></li>
                        </ul>
                    </div>
                </div>
            </div>
			<div class="col-xs-4 col-sm-6 col-md-3" style="overflow:hidden">
                        <h6>PARTNERSHIPS</h6>
                        <ul>
                            <li><a href="http://www.prodege.com/contact/" target="_blank">Advertise With Us</a></li>
                            <li>
                                <a href="#"
                                   target="_blank">Affiliates</a></li>
                        </ul>
                    </div>
            <div class="col-xs-12 col-sm-6 col-md-3" style="overflow:hidden">
                <div class="">
                    <div class="">
                        <h6>CONTACT US</h6>
                        <ul>
                            <li>9, Allen Avenue</li>
                            <li>Ikeja, Lagos</li>
                            <li><a href="#">Contact Member Services </a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--.container-->
    <p class="social">Looking for more great deals? Follow us! <br/>
        <a href="https://www.facebook.com/econkredit" target="_blank"><img
                src="images/icon/icon-facebook.png"/></a>
        <a href="https://www.twitter.com/econkredit" target="_blank"><img
                src="images/icon/icon-twitter.png"/></a>
    </p>

    <p class="copyright">&copy; <?php echo date("Y");?> EconKredit.com | All Rights Reserved</p>
</footer>


<!-- vanilla javascripts -->

  <script src="js/drawer.min.js"></script>

  <script src="js/main.js"></script>

  <script src="js/typeahead.min.js"></script>

<!-- mega menu -->
<script src="js/jquery.easing.1.3.min.js"></script> <!-- jQuery Easing -->
  <script>
      $('.owl-carousel').slick(
          {
              dots: false,
              adaptiveHeight: true,
              infinite: true,
              speed: 300,
              slidesToShow: 5,
              slidesToScroll: 4,

          });
  </script>
  
  <script>
      $('.prod').click(function(e){
          $('.modal-title').html("");
          $('.modal-body').html("");
          var id = $(this).attr('id');
          var title = $(this).attr('title');
          $.getJSON('include/fetch.php',{'id':id},function(resp){
              if(resp.status == 200){
                  $('#infoModal').modal('show');
                  $('.modal-title').html(title);
                  var info = '<div class="row"><div class="col-md-4" style="margin-right:10px"><img src="images/products/'+resp.data.picture+'" class=""></div>'+
                      '<div class="col-md-3 text-center"><h4><i class="fa fa-info-circle"></i> Seller-Info</h4><p>'+resp.data.seller+'<br/>'+
                      ''+resp.data.selleradd+' '+resp.data.sellercity+'<br/>'+resp.data.sellerphone+'</p></div>'+
                      '<div class="col-md-4 text-center"><h4><i class="fa fa-info-circle"></i> Description</h4><p>'+resp.data.details+'</p>'+
                      '</div><div class="col-md-12 text-center"><a class="btn btn-success">Buy</a><h3>₦'+resp.data.price+'/'+resp.data.points+'eks</h3></div>';
                  $('.modal-body').html(info);

              }
          });

      });
      $('.ser').click(function(e){
          $('.modal-title').html("");
          $('.modal-body').html("");
          var id = $(this).attr('id');
          var title = $(this).attr('title');
          $.getJSON('include/fetch.php',{'ser':id},function(resp){
              if(resp.status == 200){
                  $('#infoModal').modal('show');
                  $('.modal-title').html(title);
                  var info = '<div class="row"><div class="col-md-4" style="margin-right:10px"><img src="images/services/'+resp.data.picture+'" class=""></div>'+
                      '<div class="col-md-3 text-center"><h4><i class="fa fa-info-circle"></i> Seller-Info</h4><p>'+resp.data.seller+'<br/>'+
                      ''+resp.data.selleradd+' '+resp.data.sellercity+'<br/>'+resp.data.sellerphone+'</p></div>'+
                      '<div class="col-md-4 text-center"><h4><i class="fa fa-info-circle"></i> Description</h4><p>'+resp.data.details+'</p>'+
                      '</div><div class="col-md-12 text-center"><a class="btn btn-success">Buy</a><h3>₦'+resp.data.price+'/'+resp.data.points+'eks</h3></div>';
                  $('.modal-body').html(info);

              }
          });

      });
      $('.merProd').click(function(e){
          $('.modal-title').html("");
          $('.modal-body').html("");
          var id = $(this).attr('id');
          var title = $(this).attr('title');
          $.getJSON('include/fetch.php',{'merProd':id},function(resp){
              if(resp.status == 200){
                  $('#infoModal').modal('show');
                  $('.modal-title').html(title);
                  var info = '<div class="row"><div class="col-md-4" style="margin-right:10px"><img src="images/products/'+resp.data.picture+'" class=""></div>'+
                      '<div class="col-md-4 text-center"><h4><i class="fa fa-info-circle"></i> Description</h4><p>'+resp.data.details+'</p>'+
                      '</div><div class="col-md-12 text-center"><a class="btn btn-success">Redeem</a><h3>'+resp.data.points+'eks</h3></div>';
                  $('.modal-body').html(info);

              }
          });

      });
      $('.merSer').click(function(e){
          $('.modal-title').html("");
          $('.modal-body').html("");
          var id = $(this).attr('id');
          var title = $(this).attr('title');
          $.getJSON('include/fetch.php',{'merSer':id},function(resp){
              if(resp.status == 200){
                  $('#infoModal').modal('show');
                  $('.modal-title').html(title);
                  var info = '<div class="row"><div class="col-md-4" style="margin-right:10px"><img src="images/services/'+resp.data.picture+'" class=""></div>'+
                      '<div class="col-md-4 text-center"><h4><i class="fa fa-info-circle"></i> Description</h4><p>'+resp.data.details+'</p>'+
                      '</div><div class="col-md-12 text-center"><a class="btn btn-success">Redeem</a><h3>'+resp.data.points+'eks</h3></div>';
                  $('.modal-body').html(info);

              }
          });

      });
  </script>
  <script src="js/jssor.slider-21.1.5.mini.js" type="text/javascript"></script>
  <script type="text/javascript">
      jQuery(document).ready(function ($) {

          var jssor_1_SlideoTransitions = [
              [{b:-1,d:1,o:-1},{b:0,d:1000,o:1}],
              [{b:1900,d:2000,x:-379,e:{x:7}}],
              [{b:1900,d:2000,x:-379,e:{x:7}}],
              [{b:-1,d:1,o:-1,r:288,sX:9,sY:9},{b:1000,d:900,x:-1400,y:-660,o:1,r:-288,sX:-9,sY:-9,e:{r:6}},{b:1900,d:1600,x:-200,o:-1,e:{x:16}}]
          ];

          var jssor_1_options = {
              $AutoPlay: true,
              $SlideDuration: 800,
              $SlideEasing: $Jease$.$OutQuint,
              $CaptionSliderOptions: {
                  $Class: $JssorCaptionSlideo$,
                  $Transitions: jssor_1_SlideoTransitions
              },
              $ArrowNavigatorOptions: {
                  $Class: $JssorArrowNavigator$
              },
              $BulletNavigatorOptions: {
                  $Class: $JssorBulletNavigator$
              }
          };

          var jssor_1_slider = new $JssorSlider$("jssor_1", jssor_1_options);

          //responsive code begin
          //you can remove responsive code if you don't want the slider scales while window resizing
          function ScaleSlider() {
              var refSize = jssor_1_slider.$Elmt.parentNode.clientWidth;
              if (refSize) {
                  refSize = Math.min(refSize, 1920);
                  jssor_1_slider.$ScaleWidth(refSize);
              }
              else {
                  window.setTimeout(ScaleSlider, 30);
              }
          }
          ScaleSlider();
          $(window).bind("load", ScaleSlider);
          $(window).bind("resize", ScaleSlider);
          $(window).bind("orientationchange", ScaleSlider);
          //responsive code end
      });

  </script>

</body>
</html>