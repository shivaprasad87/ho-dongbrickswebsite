

		<div class="clearfix"></div>
		<!-- Header Container / End -->

		<div id="myCarousel" class="carousel slide" data-ride="carousel">

				<!-- Wrapper for slides -->
			<div class="carousel-inner">
			
				<!-- Slide -->
				<?php $desk = 0;
				foreach ($sliders as $slider) {
					$img=array();
					$img=explode('.', $slider->image);
				
				?>

				<div class="item active">
					<img src="<?= base_url('uploads/sliders/' .  $slider->image) ?>" alt="" style="width:100%;">
					<div class="carousel-caption">
					
					</div>
				</div>
			
				<?php $desk++;
				
					} ?>
		
			</div>
		
		
			<!-- <a class="left carousel-control" href="#myCarousel" data-slide="prev">
				<span class="glyphicon glyphicon-chevron-left " aria-hidden="true"></span>
			<span class="sr-only">Previous</span>
			</a>
			<a class="right carousel-control" href="#myCarousel" data-slide="next">
			<span class="glyphicon glyphicon-chevron-right " aria-hidden="true"></span>
			<span class="sr-only">Next</span>
			</a> -->
	  </div>


		<!-- Slider
		================================================== -->
		<!-- <div class="fullwidth-home-slider margin-bottom-0">

			
			<?php $desk = 0;
        foreach ($sliders as $slider) {
            $img=array();
            $img=explode('.', $slider->image);
           
        ?>
			<div data-background-image="<?= base_url('uploads/sliders/' .  $slider->image) ?>" class="item">
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<div class="home-slider-container">

								
								<div class="home-slider-desc">
									
									<div class="home-slider-price">
									
									</div>

									<div class="home-slider-title">
										<h3><a href=""> </a></h3>
									
									</div>

								</div>
								
								
							</div>
						</div>
					</div>
				</div>
			</div>
			<?php $desk++;
        
            } ?>
			
		
		</div> -->

		

		<div class="container bestdeals">
			<div class="row section2">
				<div class="col-sm-12 text-center">
				<h1>Best Deals In Your City</h1>
				</div>
				<div class="clearfix"></div>
				<div class="sppb-row">
					<!-- <div class="bg-line" style="">
						<ul class="nav-gallery nav-tabs mytab " role="tablist" style="">
							<a href="#Residential" aria-controls="settings" role="tab" data-toggle="tab" aria-expanded="false" class="">
								<li role="presentation" class="citytab active">
									Residential
								
								</li>
							</a>
							<a href="#Commertial" aria-controls="profile" role="tab" data-toggle="tab" aria-expanded="true">
								<li role="presentation" class="citytab">
									Commertial
								
								</li>
							</a>
							<a href="#Plotted" aria-controls="profile" role="tab" data-toggle="tab" aria-expanded="true">
								<li role="presentation" class="citytab">
									Plotted Development
								
								</li>
							</a>
						</ul>
					</div>  --> 
					<div class="tab-content delay-09s animated wow animated" style="visibility: visible; animation-name: fadeInDown;">

						<div role="tabpanel" class="tab-pane fade active in" id="Residential">
						
							<div class="">
								<?php
        foreach ($bestdeal_properties as $property) { 
          ?>
								<div class="col-lg-4 col-xs-12">
									<div class="property-list ">
									<div class="prop-city-status">
										<?=$property->city_name ?>
									</div>
									<div class="property-status">
										*Avail Special Offers*
									</div>
										
											<a target="_blank" href="<?= site_url(url_title($property->city_name)."/".( url_title($property->area) )."/$property->slug") ?>" style="text-decoration: none;">
											<div class="property-img" style="background-image: url(<?= base_url('uploads/' . $property->slug . '/' . $property->image) ?>)">
											
											</div>
											
											</a><div class="propertylist-details"><a target="_blank" href="" style="text-decoration: none;">
											
												<h4><?= $property->title ?></h4>
												<div class="down"></div>
												</a>
												<div class="" style="">
													<a target="_blank" href="" style="text-decoration: none;">
														<p class=""><i class="fa fa-rupee"></i> <?php
                           $flatTypes = $this->properties_model->getPropertyFlatType(null,$property->id);
                           $flatTypes = json_decode( json_encode($flatTypes), true);
                            $row = $this->properties_model->getPropertyParam(array('property_id' => $property->id, 'flat_type_id' => $flatTypes[0]['flat_type_id']), 'property_flat_types', null, 'MIN(total) as amount');
                            echo number_format_short($row->amount) ? number_format_short($row->amount) : 0 ;
                             
                            ?> /-</p>
														<!-- <p class=""><i class="fa fa-building"></i><?=$property->bedrooms;?></p> -->
														<p class=""><b><i class="fa fa-map-marker"></i></b> : <?= $property->location?></p>
														
													</a>
										</div>
										<div class="clearfix"></div>
											<!-- <div class="sharethis-inline-share-buttons"></div>-->
										<a target="_blank" href="<?= site_url(url_title($property->city_name)."/".( url_title($property->area) )."/$property->slug") ?>" class="btn btn-primary btn-block" style="border-radius: 0">Know More</a>
									</div>
									</div>
								</div>
						         <?php
      }
      ?>
			
			
							</div>

						</div>

						

						<div role="tabpanel" class="tab-pane fade  " id="Commertial">

							<div class="">
							<div class="col-lg-4 col-xs-12">
								<div class="property-list ">
									<div class="list-city">
										Bangalore                    </div>
										<a target="_blank" href="" style="text-decoration: none;">
										<div class="property-img" style="background-image: url(<?=base_url('assets/');?>images/listing-03.jpg)">
										
										</div>
										<div class="property-status">
											*Avail Special Offers*
										</div>
										</a><div class="propertylist-details"><a target="_blank" href="" style="text-decoration: none;">
										
											<h4>Brigade Eldorado-Jasper</h4>
											<div class="down"></div>
											</a>
											<div class="" style="">
												<a target="_blank" href="" style="text-decoration: none;">
													<p class=""><i class="fa fa-rupee"></i> 33.37L /-</p>
													<p class=""><i class="fa fa-building"></i>2 BHK Apartments</p>
													<p class=""><b><i class="fa fa-map-marker"></i></b> : Bagalur</p>
													
												</a>
									</div>
									<div class="clearfix"></div>
										<!-- <div class="sharethis-inline-share-buttons"></div>-->
									<a target="_blank" href="" class="btn btn-primary btn-block" style="border-radius: 0">Know More</a>
								</div>
							    </div>
							</div>
							<div class="col-lg-4 col-xs-12">
									<div class="property-list">
										<div class="list-city">
											Pune                    </div>
										<a target="_blank" href="" style="text-decoration: none;">
											<div class="property-img" style="background-image: url(<?=base_url('assets/');?>images/listing-01.jpg)"></div>
											<div class="property-status">
												*Avail Special Offers*
											</div>
											</a
											><div class="propertylist-details"><a target="_blank" href="" style="text-decoration: none;">
											
												<h4>Shapoorji Codename Tornado</h4>
												<div class="down"></div>
												</a><div class="" style="">
													<a target="_blank" href="" style="text-decoration: none;">
														<p class=""><i class="fa fa-rupee"></i> 44.37L /-</p>
														<p class=""><i class="fa fa-building"></i>4 BHK Apartments</p>
														<p class=""><b><i class="fa fa-map-marker"></i></b> : Bagalur</p>
												
																	</a>
										</div>
										<div class="clearfix"></div>
											<!--  <div class="sharethis-inline-share-buttons"></div>-->
										<a target="_blank" href="" class="btn btn-primary btn-block" style="border-radius: 0">Know More</a>
									</div>
								    </div>
							</div>
							<div class="col-lg-4 col-xs-12">
								<div class="property-list">
									<div class="list-city">
										Bangalore                    </div>
									<a target="_blank" href="" style="text-decoration: none;">
										<div class="property-img" style="background-image: url(<?=base_url('assets/');?>images/listing-02.jpg)"></div>
										<div class="property-status">
											*Avail Special Offers*
										</div>
										</a>
										<div class="propertylist-details"><a target="_blank" href="" style="text-decoration: none;">
										
											<h4>Prestige Primrose Hills</h4>
											<div class="down"></div>
											</a><div class="" style=""><a target="_blank" href="" style="text-decoration: none;">
												<p class=""><i class="fa fa-rupee"></i> 28.37L /-</p>
													<p class=""><i class="fa fa-building"></i>4 BHK Apartments</p>
													<p class=""><b><i class="fa fa-map-marker"></i></b> : Bagalur</p>
										
																</a>
									</div>
									<div class="clearfix"></div>
								<!--  <div class="sharethis-inline-share-buttons"></div>-->
									<a target="_blank" href="" class="btn btn-primary btn-block" style="border-radius: 0">Know More</a>
								</div>
								</div>
							</div>
									
						</div>
						
						
						</div>

						<div role="tabpanel" class="tab-pane fade  " id="Plotted">

							<div class="">
								<div class="col-lg-4 col-xs-12">
						<div class="property-list ">
							<div class="list-city">
								Bangalore                    </div>
								<a target="_blank" href="" style="text-decoration: none;">
								<div class="property-img" style="background-image: url(<?=base_url('assets/');?>images/listing-03.jpg)">
								
								</div>
								<div class="property-status">
									*Avail Special Offers*
								</div>
								</a><div class="propertylist-details"><a target="_blank" href="" style="text-decoration: none;">
								
									<h4>Brigade Eldorado-Jasper</h4>
									<div class="down"></div>
									</a>
									<div class="" style="">
										<a target="_blank" href="" style="text-decoration: none;">
											<p class=""><i class="fa fa-rupee"></i> 33.37L /-</p>
											<p class=""><i class="fa fa-building"></i>2 BHK Apartments</p>
											<p class=""><b><i class="fa fa-map-marker"></i></b> : Bagalur</p>
											
										</a>
							</div>
							<div class="clearfix"></div>
								<!-- <div class="sharethis-inline-share-buttons"></div>-->
							<a target="_blank" href="" class="btn btn-primary btn-block" style="border-radius: 0">Know More</a>
						</div>
					</div>
							</div>
								
						
			                </div>
						
						
						</div>


					</div>

				</div>
			
			</div>
		</div>


		<div class="container bestdeals">
			<div class="row section2">
				<div class="col-sm-12 text-center">
				   <h1>Featured Properties In Your City</h1>
				</div>
					<div class="clearfix"></div>
					<div class="sppb-row">
						<!-- <div class="City-line" style="">
						
							<ul class="nav-gallery nav-tabs mytab " role="tablist" style="">
								<a href="#Pune" aria-controls="settings" role="tab" data-toggle="tab" aria-expanded="false" class="">
									<li role="presentation" class="citytab active">
										Pune
									
									</li>
								</a>
								<a href="#Bangalore" aria-controls="profile" role="tab" data-toggle="tab" aria-expanded="true">
									<li role="presentation" class="citytab">
										Bangalore
									
									</li>
								</a>
								
							</ul>
						</div>   -->
						<div class="tab-content delay-09s animated wow animated"
							style="visibility: visible; animation-name: fadeInDown;">

							<div role="tabpanel" class="tab-pane fade active in" id="Pune">
							
								<div class="carousel-launch">
									<?php
									$i=0;
 
             foreach ($properties as $property) {

              ?>
									<div class="card border-0 work-container work-grid position-relative d-block">

										<div class="card-body p-0">
											<a href="<?= site_url(url_title($property->city_name)."/".( url_title($property->area) )."/$property->slug") ?>">
												<img src="<?= base_url('uploads/' . $property->slug . '/' . $property->image) ?>" class="img-fluid" alt="prestige-fairfield">
											</a>
											<div class="content bg-white p-3 pull-center">
												
												<h5 class="mb-0"><a href="#"><?= $property->title ?> </a></h5>
												<h6 class="text-muted tag mb-0">
													<a href="#">

														<p class="subtitle"><?= $property->location . ', ' . $property->city_name ?></p>
													</a>
												
												</h6>
												
												<div class="post-meta d-flex justify-content-between mt-3">
													<div class="row">
														<div class="col-lg-6 col-xs-6">
															<a href="<?= site_url(url_title($property->city_name)."/".( url_title($property->area) )."/$property->slug") ?>" class="btn btn-sm btn-info">Price on request </a>
														</div>
														<div class="col-lg-6 col-xs-6">
															<a href="<?= site_url(url_title($property->city_name)."/".( url_title($property->area) )."/$property->slug") ?>" class="btn btn-sm btn-info">Know More </a>
														</div>
													</div>
												
												</div>
												
											</div>
											
			<!-- 							
											<div class="campaign-status">
											<div class="pricing"><p>Price</p></div>
			</div> -->

											<div class="read_more pstatus text-center rounded-circle">
												<span class="statusl" style="background-color: #0499c1"><?= $property->issue_date;?> </span>
											</div>
										</div>
									</div>

									<?php } ?>

 
								</div>

							</div>


							<div role="tabpanel" class="tab-pane fade  " id="Bangalore">

							
								<div class="carousel-launch">
									<?php
									$i=0;

             	print_r($properties);	
             foreach ($properties as $property) {

              ?>
									<div class="card border-0 work-container work-grid position-relative d-block">

										<div class="card-body p-0">
											<a href="<?= site_url(url_title($property->city_name)."/".( url_title($property->area) )."/$property->slug") ?>">
												<img src="<?= base_url('uploads/' . $property->slug . '/' . $property->image) ?>" class="img-fluid" alt="prestige-fairfield">
											</a>
											<div class="content bg-white p-3 pull-center">
												
												<h5 class="mb-0"><a href="#"><?= $property->title ?> </a></h5>
												<h6 class="text-muted tag mb-0">
													<a href="#">

														<p class="subtitle"><?= $property->location . ', ' . $property->city_name ?></p>
													</a>
												
												</h6>
												
												<div class="post-meta d-flex justify-content-between mt-3">
													<div class="row">
														<div class="col-lg-6 col-xs-6">
															<a href="<?= site_url(url_title($property->city_name)."/".( url_title($property->area) )."/$property->slug") ?>" class="btn btn-sm btn-info">Price on request </a>
														</div>
														<div class="col-lg-6 col-xs-6">
															<a href="<?= site_url(url_title($property->city_name)."/".( url_title($property->area) )."/$property->slug") ?>" class="btn btn-sm btn-info">Know More </a>
														</div>
													</div>
												
												</div>
												
											</div>
											
			<!-- 							
											<div class="campaign-status">
											<div class="pricing"><p>Price</p></div>
			</div> -->

											<div class="read_more pstatus text-center rounded-circle">
												<span class="statusl" style="background-color: #0499c1"><?= $property->issue_date;?> </span>
											</div>
										</div>
									</div>

									<?php } ?>

									 
								</div>
				
							
							</div>

							
						</div>


					</div>

			</div>
			
		</div>


			<section class="fullwidth  margin-top-105 margin-bottom-0 padding-bottom-80 padding-top-95" data-background-color="#f7f7f7" style="background: rgb(247, 247, 247);">

				<!-- Box Headline -->
				<h3 class="headline-box">What Our Clients Say</h3>

				<div class="container">
					<div class="col-md-12">
						<div class="testimonials-subtitle">We collect reviews from our customers so you can get an honest opinion of what an apartment is really like!</div>
					</div>

					<br>
					<div class="listing-carousel">	
						<?php  
			          if(count($testimonials)>0)
			          {
			          foreach ($testimonials as $testimonial) { 
			          ?>
						<div class="col-lg-12">
							<div class="testimonial-box">
								<div class="testimonial">
									<div class="testimonial-content myspan"><?=$testimonial->comment?></div>
								</div>
								<div class="testimonial-author">
									<img src="<?= base_url('uploads/testimonials/' . $testimonial->image) ?>" alt="">
									<h4><?= $testimonial->name ?> <span> <?=$testimonial->job_desc?></span></h4>
								</div>
							</div>
						</div>
						<?php }
				        }

				         ?>

					</div>
				</div>

			</section>

			<!-- Flip banner -->
			<a href="" class="flip-banner parallax-home" data-background="<?=base_url('assets/')?>images/single-property-03.jpg" data-img-width="2500" data-img-height="1600" >
				<div class="flip-banner-content" style="color:rgb(219 18 57)">
					<h2 class="flip-visible">We help people and homes find each other</h2>
					<h2 class="flip-hidden">Browse Properties <i class="sl sl-icon-arrow-right"></i></h2>
				</div>
			</a>
			<!-- Flip banner / End -->

		<div class="hidden-xs">

			<div class="item" id="clicktocallFormTrigger"> 
				<a href="tel:<?= $social_links->mobile ?>" class="lb clickme">
					<span class="link">Click to call</span>
					<span class="icon"><img src="https://cdn.brigadegroup.com/assets/<?=base_url('assets/');?>images/click-to-call.png" alt="Click To Call"></span>
				</a>
			</div>

			<a id="enquire" class="fancybox" data-toggle="modal" data-target="#enquire-data">
				<div id="enquire-button" title="Enquire Now"><span class="icon-enquire"></span>Enquire Now</div>
			</a>

			<div class="widget-follow">
				<a href="https://api.whatsapp.com/send?phone=<?= $social_links->whatsapp ?>, HI I'm Intrested" id="follow-button" title="Follow Us">
					<span class=""><i class="fa fa-whatsapp" aria-hidden="true"></i></span><!-- Follow Us -->
				</a>

			</div>
		</div>

</div>