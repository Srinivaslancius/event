	<footer class="colophon site-info" style="padding-top:0px; padding-bottom:20px">
				<div class="colophon wigetized">
					<div class="background-footer"></div>
					<div class="container">
						<div class="noo-footer-bottom">
							<div class="widget widget_noo_infomation">
								<ul class="noo-infomation">
									<li>
										<span class="fa fa-map-marker infomation-left"></span>
										<address>Off Al Wahda Road, West Bay PO Box 22178 | Doha, Qatar  </address>
									</li>
									<li class="info-phone">
										<span class="fa fa-phone infomation-left"></span>
										<span>+974 77273826</span>
									</li>
									<li class="info-mail">
										<span class="fa fa-envelope-o infomation-left"></span>
										<span>tangoclubqatar@gmail.com</span>
									</li>
								</ul>
							</div>
							<div class="row" style="padding-top:1px">
								<div class="widget commerce widget_top_rated_products">
									<h4 class="widget-title">Our Partners</h4>
									
									<div class="col-md-3 col-sm-3">
										<center><img src="images/logos/1.jpg" alt="logo"/></center>
									</div>
									<div class="col-md-3 col-sm-3">
										<center><img src="images/logos/2.jpg" alt="logo"/></center>
									</div>
									<div class="col-md-3 col-sm-3">
										<center><img src="images/logos/3.jpg" alt="logo"/></center>
									</div>
									<div class="col-md-3 col-sm-3">
										<center><img src="images/logos/4.jpg" alt="logo"/></center>
									</div>										
                                    
								</div>
							</div>
							<div class="widget widget_noo_social"style="margin-bottom:-35px">
								<div class="noo_social">
									<div class="social-all">
										<span class="footer-social" >
											<span class="social-name">
												Follow on facebook
											</span>
											<a href="https://www.facebook.com/TangoinQatar" class="fa fa-facebook" target="_blank"></a>
										</span>
										<span class="footer-social">
											<span class="social-name">
												Follow on twitter
											</span>
											<a href="https://twitter.com/TangoClubQatar" class="fa fa-twitter" target="blank"></a>
										</span>
										<span class="footer-social">
											<span class="social-name">
												Follow on instagram
											</span>
											<a href="https://www.instagram.com/tangoinqatar/" class="fa fa-instagram" target="blank"></a>
										</span>
									</div>
								</div>
							</div>
						</div>
					</div>  
				</div>  
			</footer>  
		</div>



		<script type='text/javascript' src='js/code.jquery.com/jquery-1.11.3.min.js'></script>
		<script type='text/javascript' src='js/jquery-migrate.min.js'></script>
		<script type='text/javascript' src='js/jquery.themepunch.tools.min.js'></script>
		<script type='text/javascript' src='js/jquery.themepunch.revolution.min.js'></script>
		<script type='text/javascript' src='js/modernizr-2.7.1.min.js'></script>
		<script type='text/javascript' src='js/imagesloaded.pkgd.min.js'></script>
		<script type='text/javascript' src='js/jquery.carouFredSel-6.2.1.js'></script>
		<script type='text/javascript' src='js/jquery.touchSwipe.min.js'></script>
		<script type='text/javascript' src='js/bootstrap.min.js'></script>
		<script type='text/javascript' src='js/hoverIntent-r7.min.js'></script>
		<script type='text/javascript' src='js/superfish-1.7.4.min.js'></script>
		<script type='text/javascript' src='js/main.js'></script>
		<script type='text/javascript' src='js/mediaelement-and-player.js'></script>
		<script type='text/javascript' src='js/player.js'></script>
		<script type='text/javascript' src='js/jquery.plugin.min.js'></script>
		<script type='text/javascript' src='js/jquery.countdown.min.js'></script>
		<script type='text/javascript' src='js/jquery.parallax.js'></script>
		<script type='text/javascript' src='js/owl.carousel.min.js'></script>

		<script type="text/javascript">
            var $height_w   = jQuery(window).height();
	        jQuery('.noo-countdown').css('height',$height_w+'px');
	        jQuery(window).resize(function(){
                var $height_w = jQuery(window).height();
                jQuery('.noo-countdown').css('height',$height_w+'px');
	        });
            jQuery(function () {
                jQuery('.full-background li:first-child').show();
                var myVar = '';
                clearInterval(myVar);
                myVar = setInterval(function(){
                    jQuery('.full-background li:first-child').appendTo('.full-background');
                },3500);
	            
	                                
	            austDay = new Date(2016, 5 - 1,  31);
	            jQuery('#defaultCountdown').countdown({until: austDay});
	            jQuery('#year').text(austDay.getFullYear());
            });

        </script>
	</body>

</html>