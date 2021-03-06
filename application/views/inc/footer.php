<!-- Footer sticky-footer
	================================================== -->
	<div id="footer" class="">
	  <div class="bg-overlay">
		<!-- Main -->
		<div class="container">
			<div class="row mb-40">
				
				<div class="col-md-5 col-xs-12 ">
					<div class="row">
						<div class="col-md-6 col-xs-6 ">
							<h4>Quick Links</h4>
							<ul class="footer-links">
								<li><a href="<?=base_url();?>">Home</a></li>
								<li><a href="<?=base_url('about');?>">About Us</a></li>
								<li><a href="<?=base_url('careers');?>">Careers</a></li>
								<li><a href="<?=base_url('blog');?>">Blogs</a></li>
								<li><a href="<?=base_url('contact');?>">Contact</a></li>
							
							</ul>
						</div>
						<div class="col-md-6 col-xs-6 ">
							<h4>Popular</h4>
							<ul class="footer-links">
								<li><a href="#">New Launches</a></li>
								<li><a href="#">Affordable </a></li>
								<li><a href="#">Ready To Move In</a></li>
								<li><a href="#">Luxury</a></li>
								<li><a href="#">Commercial </a></li>
								
							</ul>
						</div>
					</div>
					
					<div class="clearfix"></div>
				</div>		


				<div class="col-md-4 col-sm-6 col-xs-12">
					<h4>Address</h4>
					<div class="text-widget">
						<i class="fa fa-map-marker" aria-hidden="true"></i>: <span>Lorem Ipsum Lorem Ipsum</span> <br>
						<i class="fa fa-phone" aria-hidden="true"></i>: <span><a href="tel:<?= $social_links->mobile ?>"> <?= $social_links->mobile ?></a>  </span><br>
						<i class="fa fa-mail-reply-all" aria-hidden="true"></i>: <span><a href="mailto:<?= $social_links->email ?>"><?= $social_links->email ?></a></span><br>
					</div>

					

				</div>

					<div class="col-md-3  col-sm-6 col-xs-12 ">
						<h4 class="text-center">Connect With Us</h4>
						<div class="text-widget">
							<form action="<?= base_url('home/sendEmail') ?>" name="" method="POST" id="elqform2">
								
								<ul>
									<li class="form-control">	
										<input type="text" placeholder="Name*" id="" required="" name="name*"></li>

									<li class="form-control">
								
								<input type="tel" placeholder="Phone Number*" id="" required="" name="phone">
							</li>

								<!-- <li class="form-control">
									<input type="email" placeholder="Email ID*" required="" name="email" id="fcemail" autocomplete="off" class="emailcheck">
								</li> -->

								<li style="margin-top:13px !Important;">
									<center><div class="btn btn-submit" onclick="document.getElementById('elqform2').submit();">Request Callback</div></center>
								</li>
							</ul>
						</form>

						</div>

						

					</div>

				<div class="clearflix"></div>


			</div>

			 <div class="row mb-40">
				<div class="col-md-3 col-xs-12 ">
					<h5>Top Builders In Bangalore</h5>
					<ul class="footer-links">
						<?php
                $data = $this->home_model->where_order_by(array('status' => 1,'line'=>1),array('priority'=>'asc'), 'property_type');
                if(count($data)>0)
                {
                foreach ($data as $data) {

                    if($data['city']=='')
                                    {
                echo " <li>
                 <a href=".base_url('listing')."?place=".$data['search_key']." target='_blank'>".$data['name']."</a></li>";
                                    }
                    else
                    {
                        echo " <li> <a href=".base_url('city/').$data['city']."?place=".$data['search_key']." target='_blank'>".$data['name']."</a></li>";
                    }
             
                             } 
                         }
                    else
                    {
                    	?>
                    	<li><a href="#">Prestige Group</a></li>
						<li><a href="#">Brigade Group</a></li>
						<li><a href="#">Godrej Properties</a></li>
						<li><a href="#">Sobha Limited</a></li>
						<li><a href="#">Purvankara</a></li>
						<li><a href="#">Mahindra Life Spaces</a></li>
                    	<?php
                    }
                ?>
              
					
					</ul>
				</div>

				<div class="col-md-3 col-xs-12 ">
					<h5>Top Builders In Pune</h5>
					<ul class="footer-links">
						<?php
                 $data = $this->home_model->where_order_by(array('status' => 1,'line'=>2),array('priority'=>'asc'), 'property_type');
                if(count($data)>0)
                {
                foreach ($data as $data) {

                    if($data['city']=='')
                                    {
                echo " <li>
                 <a href=".base_url('listing')."?place=".$data['search_key']." target='_blank'>".$data['name']."</a></li>";
                                    }
                    else
                    {
                        echo " <li> <a href=".base_url('city/').$data['city']."?place=".$data['search_key']." target='_blank'>".$data['name']."</a></li>";
                    }
             
                             }
                         }
                             else
                             {
                             	?>
						<li><a href="#">Kolte Patil Developers</a></li>
						<li><a href="#">Vilas Javdekar</a></li>
						<li><a href="#">Kohinoor Group Construction</a></li>
						<li><a href="#">Shapoorji Pallonji</a></li>
						<li><a href="#">Kalpataru Group</a></li>
						<li><a href="#">Lodha Group</a></li>
						<?php
					}
					?>
					
					</ul>
				</div>

				<div class="col-md-3 col-xs-12 ">
					<h5>Featured Properties (Bangalore)</h5>
					<ul class="footer-links">
						<?php
                   $data = $this->home_model->where_order_by(array('status' => 1,'line'=>3),array('priority'=>'asc'), 'property_type');
                   if(count($data)>0)
                {
                foreach ($data as $data) {

                    if($data['city']=='')
                                    {
                echo " <li>
                 <a href=".base_url('listing')."?place=".$data['search_key']." target='_blank'>".$data['name']."</a></li>";
                                    }
                    else
                    {
                        echo " <li> <a href=".base_url('city/').$data['city']."?place=".$data['search_key']." target='_blank'>".$data['name']."</a></li>";
                    }
             
                             }
                         }
                             else
                             {
                             ?>
						<li><a href="#">2 BHK Apartments </a></li>
						<li><a href="#">3 BHK Apartments </a></li>
						<li><a href="#">4 BHK Apartments </a></li>
						<li><a href="#"> Villas Properties </a></li>
						<li><a href="#">Commercial & Office Spaces </a></li>
						<li><a href="#">Plotted Development</a></li>
						<?php
					}
					?>
					
					</ul>
				</div>

				<div class="col-md-3 col-xs-12">
					<h5>Featured Properties (Pune)</h5>
					<ul class="footer-links">
						<?php
                   $data = $this->home_model->where_order_by(array('status' => 1,'line'=>4),array('priority'=>'asc'), 'property_type');
                   if(count($data)>0)
                {
                foreach ($data as $data) {

                    if($data['city']=='')
                                    {
                echo " <li>
                 <a href=".base_url('listing')."?place=".$data['search_key']." target='_blank'>".$data['name']."</a></li>";
                                    }
                    else
                    {
                        echo " <li> <a href=".base_url('city/').$data['city']."?place=".$data['search_key']." target='_blank'>".$data['name']."</a></li>";
                    }
             
                             }
                         }
                             else
                             {
                             ?>
						<li><a href="#">2 BHK Apartments </a></li>
						<li><a href="#">3 BHK Apartments </a></li>
						<li><a href="#">4 BHK Apartments </a></li>
						<li><a href="#"> Villas Properties </a></li>
						<li><a href="#">Commercial & Office Spaces </a></li>
						<li><a href="#">Plotted Development</a></li>
						<?php
					}
					?>
					
					</ul>
				</div>
			</div>

			<div class="row mb-40">
				<div class="col-md-3 col-xs-12 ">
					<h5>Locality ( Bangalore )</h5>
					<ul class="footer-links">
						<?php
                   $data = $this->home_model->where_order_by(array('status' => 1,'line'=>5),array('priority'=>'asc'), 'property_type');
                   if(count($data)>0)
                {
                foreach ($data as $data) {

                    if($data['city']=='')
                                    {
                echo " <li>
                 <a href=".base_url('listing')."?place=".$data['search_key']." target='_blank'>".$data['name']."</a></li>";
                                    }
                    else
                    {
                        echo " <li> <a href=".base_url('city/').$data['city']."?place=".$data['search_key']." target='_blank'>".$data['name']."</a></li>";
                    }
             
                             }
                         }
                             else
                             {
                             ?>
						<li><a href="#">Properties in Whitefield</a></li>
						<li><a href="#">Properties in Kanakapura Road</a></li>
						<li><a href="#">Properties in Sarjapura Road</a></li>
						<li><a href="#">Properties in Hennur Road</a></li>
						<li><a href="#">Properties in K.R Puram</a></li>
						<li><a href="#">Properties in Yashwantpur</a></li>
						<li><a href="#">Properties in Yelahanka</a></li>
						<?php
					}
					?>
					
					</ul>
				</div>

				<div class="col-md-3 col-xs-12 ">
					<h5>Locality ( Pune )</h5>
					<ul class="footer-links">
						<?php
                   $data = $this->home_model->where_order_by(array('status' => 1,'line'=>5),array('priority'=>'asc'), 'property_type');
                   if(count($data)>0)
                {
                foreach ($data as $data) {

                    if($data['city']=='')
                                    {
                echo " <li>
                 <a href=".base_url('listing')."?place=".$data['search_key']." target='_blank'>".$data['name']."</a></li>";
                                    }
                    else
                    {
                        echo " <li> <a href=".base_url('city/').$data['city']."?place=".$data['search_key']." target='_blank'>".$data['name']."</a></li>";
                    }
             
                             }
                         }
                             else
                             {
                             	?>

						<li><a href="#">Properties in Hinjewadi </a></li>
						<li><a href="#">Properties in Wakad</a></li>
						<li><a href="#">Properties in Baner</a></li>
						<li><a href="#">Properties in Kharadi</a></li>
						<li><a href="#">Properties in Wagholi</a></li>
						<li><a href="#">Properties in Balewadi</a></li>
						<li><a href="#">Properties in Pimpri-Chinchwad</a></li>
						<?php
                             }
                             ?>
					
					</ul>
				</div>

				
				<div class="col-md-6 col-xs-12">
					<center>
						<img class="footer-logo" src="<?=base_url('assets/');?>images/Holding-bricks.png" alt="">
					
					<p><ul class="social-icons rounded margin-top-20 text-center">
						
						<li><a class="facebook" href="<?= $social_links->facebook ?>" target="_blank"><i class="icon-facebook"></i></a></li>
						<li><a class="instagram" href="<?= $social_links->instagram ?>" target="_blank"><i class="icon-instagram"></i></a></li>
						
						<li><a class="twitter" href="<?= $social_links->twitter ?>" target="_blank"><i class="icon-twitter"></i></a></li>
						<li><a class="linkedin" href="<?= $social_links->linked_in ?>" target="_blank"><i class="icon-linkedin"></i></a></li>
					
						<li><a class="whatsapp" href="https://api.whatsapp.com/send?phone=+91<?= $social_links->whatsapp ?>&text=HI I'm Intrested"><i class="icon-whatsapp"></i></a></li>
						<li><a class="pinterest" href="#"><i class="icon-pinterest"></i></a></li>
					
					</ul></p>
				</center>
				</div>
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
						<h1><a href="tel:<?= $social_links->mobile ?>"> <?= $social_links->mobile ?></a> </h1>
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

<script type="text/javascript" src="<?=base_url('assets/');?>js/jquery-2.1.4.js"></script>
<script type="text/javascript" src="<?=base_url('assets/');?>js/bootstrap.min.js"></script>
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