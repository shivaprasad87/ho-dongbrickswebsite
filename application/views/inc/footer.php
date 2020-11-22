<!-- Footer
	================================================== -->
	<div id="footer" class="sticky-footer">
		<!-- Main -->
		<div class="container">
			<div class="row">
				<div class="col-md-5 col-sm-6">
					<img class="footer-logo" src="images/Holding-bricks.png" alt="">
					<br><br>
					<p>Morbi convallis bibendum urna ut viverra. Maecenas quis consequat libero, a feugiat eros. Nunc ut lacinia tortor morbi ultricies laoreet ullamcorper phasellus semper.</p>
				</div>

				<div class="col-md-4 col-sm-6 ">
					<h4>Helpful Links</h4>
					<ul class="footer-links">
						<li><a href="#">Login</a></li>
						<li><a href="#">Sign Up</a></li>
						<li><a href="#">My Account</a></li>
						<li><a href="#">Add Property</a></li>
						<li><a href="#">Pricing</a></li>
						<li><a href="#">Privacy Policy</a></li>
					</ul>

					<ul class="footer-links">
						<li><a href="#">FAQ</a></li>
						<li><a href="#">Blog</a></li>
						<li><a href="#">Our Agents</a></li>
						<li><a href="#">How It Works</a></li>
						<li><a href="#">Contact</a></li>
					</ul>
					<div class="clearfix"></div>
				</div>		

				<div class="col-md-3  col-sm-12">
					<h4>Contact Us</h4>
					<div class="text-widget">
						<span>Lorem Ipsum Lorem Ipsum</span> <br>
						Phone: <span><?= $social_links->mobile ?> </span><br>
						E-Mail:<span> <a href="mailto:<?= $social_links->email ?>"><?= $social_links->email ?></a> </span><br>
					</div>

					<ul class="social-icons margin-top-20">
						<li><a class="facebook" href="<?= $social_links->facebook ?>"><i class="icon-facebook"></i></a></li>
						<li><a class="twitter" href="<?= $social_links->twitter ?>"><i class="icon-twitter"></i></a></li>
						<li><a class="instagram" href="<?= $social_links->instagram ?>"><i class="icon-instagram"></i></a></li>
						<li><a class="linkedin" href="<?= $social_links->linked_in ?>"><i class="icon-linkedin"></i></a></li>
					</ul>

				</div>

			</div>
						
		

		</div>
		<div class="footer">
			<div class="row " style="position: relative;" >
				<div class="copyrights" style="position: absolute;"><center>© <?=date('Y')?>. All Rights Reserved.</center></div>
				<div class="col-md-8 col-xs-6 copyrightstext" >
					<div class="upcoming-msg" style="">
						
					</div>
				</div>
				<div class="col-md-4 col-xs-6 copyrightstext1" >
					<div class="check-out" style="">
					
					</div>
				</div>
			</div>
		</div>

	</div>
	<!-- Footer / End -->

</div>
	<div class="modal Home-pupup fade in" tabindex="-1" role="dialog" id="enquire-data" style="opacity: 1;">
		<!-- data-backdrop="static" data-keyboard="false" -->
	<div class="modal-dialog" role="document">
		<div class="modal-content">
		
			<div class="modal-body text-center needhelp_form-modal" style="margin: auto;">
				<i class="fa fa-user" aria-hidden="true"></i>
			<h5>Having Any Doubt ??</h5>
			
				<div class="needhelp_form_list">
					<center>
						<h1>+91 1234567</h1>
					</center>
				
				</div>
			</div>
		</div><!-- /.modal-content -->
	</div><!-- /.modal-dialog -->


	</div>


<!-- Back To Top Button -->
<div id="backtotop"><a href="#"></a></div>


<!-- Scripts
================================================== -->
<script type="text/javascript" src="<?=base_url('assets/');?>js/bootstrap.min.js"></script>
<script type="text/javascript" src="<?=base_url('assets/');?>js/jquery-2.1.4.js"></script>
 <!-- <script type="text/javascript" src="<?=base_url('assets/');?>js/jquery-3.4.1.min.js"></script>  -->
<!--<script type="text/javascript" src="<?=base_url('assets/');?>js/jquery-migrate-3.1.0.min.js"></script> -->
<script type="text/javascript" src="<?=base_url('assets/');?>js/chosen.min.js"></script>
<script type="text/javascript" src="<?=base_url('assets/');?>js/magnific-popup.min.js"></script>
<script type="text/javascript" src="<?=base_url('assets/');?>js/owl.carousel.min.js"></script>
<!-- <script type="text/javascript" src="<?=base_url('assets/');?>js/rangeSlider.js"></script> -->
<script type="text/javascript" src="<?=base_url('assets/');?>js/sticky-kit.min.js"></script>
<script type="text/javascript" src="<?=base_url('assets/');?>js/slick.min.js"></script>
<script type="text/javascript" src="<?=base_url('assets/');?>js/masonry.min.js"></script>
<script type="text/javascript" src="<?=base_url('assets/');?>js/mmenu.min.js"></script>
<script type="text/javascript" src="<?=base_url('assets/');?>js/tooltips.min.js"></script>

<script src="<?=base_url('assets/');?>js/jquery.fancybox.js"></script>
<script type="text/javascript" src="<?=base_url('assets/');?>js/custom.js"></script>
<script type="" src="<?=base_url('assets/');?>js/lightgallery.js"></script>

<script>
	$(document).ready(function(){
		$('.lightgallery').lightGallery(); 
	});
</script>

</div>

</body>
</html>