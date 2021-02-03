<div class="clearfix"></div>
<!-- Header Container / End -->


<!-- Titlebar
================================================== -->
<div class="parallax titlebar"
data-background="<?=base_url('assets/')?>images/listings-parallax.jpg"
data-color="#333333"
data-color-opacity="0.7"
data-img-width="800"
data-img-height="505">

<div id="titlebar">
	<div class="container">
		<div class="row">
			<div class="col-md-12">

				<h2>About Us</h2>
				<span></span>
				
				<!-- Breadcrumbs -->
				<nav id="breadcrumbs">
					<ul>
						<li><a href="#">Home</a></li>
						<li>About</li>
					</ul>
				</nav>

			</div>
		</div>
	</div>
</div>
</div>

<section class="fullwidth border-bottom margin-top-0 margin-bottom-0 padding-top-0 padding-bottom-50" data-background-color="#ffffff" style="background: rgb(255, 255, 255);">
<h1 class="pull-center">About Us</h1>
  <!-- Content -->
  <div class="container">
    <div class="row">

      <div class="col-md-4">
        <!-- Icon Box -->
        <div class="icon-box-1 alternative">

          <div class="icon-container">
            <i class="im im-icon-Checked-User"></i>
          </div>

           <?php
                    if (($option = $this->aboutUs_model->getOption('client_title')) != null) {
                        ?>
                        <h3><?= $option ?></h2><br>
                        <?php
                    }
                    ?>
          <p><?= $this->aboutUs_model->getOption('client_content') ?></p>
        </div>
      </div>

      <div class="col-md-4">
        <!-- Icon Box -->
        <div class="icon-box-1 alternative">

          <div class="icon-container">
            <i class="im im-icon-Checked-User"></i>
          </div>

          <?php
                    if (($option = $this->aboutUs_model->getOption('client_title_2')) != null) {
                        ?>
                        <h3><?= $option ?></h2><br>
                        <?php
                    }
                    ?>
          <p><?= $this->aboutUs_model->getOption('client_content_2') ?></p>
        </div>
      </div>


      <div class="col-md-4">
        <!-- Icon Box -->
        <div class="icon-box-1 alternative">

          <div class="icon-container">
            <i class="im im-icon-Checked-User"></i>
          </div>

             <?php
                    if (($option = $this->aboutUs_model->getOption('client_title_3')) != null) {
                        ?>
                        <h3><?= $option ?></h2><br>
                        <?php
                    }
                    ?>
           <p><?= $this->aboutUs_model->getOption('client_content_3') ?></p>
        </div>
      </div>


    </div>
  </div>

</section>
<!-- Counters Container -->
<div class="parallax margin-top-0" data-background="<?=base_url('assets/')?>images/listings-parallax.jpg"
		data-color="#252529" data-color-opacity="0.85" data-img-width="800" data-img-height="505">

		<!-- Counters -->
		<div id="counters">
			<div class="container">

				<div class="row">

					<div class="counter-boxes-inside-parallax">

						<div class="col-md-3 col-sm-6">
							<div class="counter-box">
								<div class="counter-box-icon">
									<i class="im im-icon-Home-2"></i>
									<span class="counter">942 </span>
									<p>Properties </p>
								</div>
							</div>
						</div>

						<div class="col-md-3 col-sm-6">
							<div class="counter-box">
								<div class="counter-box-icon">
									<i class="im im-icon-Money-2"></i>
									<span class="counter">50 </span>
									<p>Amenities</p>
								</div>
							</div>
						</div>

						<div class="col-md-3 col-sm-6">
							<div class="counter-box">
								<div class="counter-box-icon">
									<i class="im im-icon-Business-ManWoman"></i>
									<span class="counter">100 </span>
									<p>Profits</p>
								</div>
							</div>
						</div>

						<div class="col-md-3 col-sm-6">
							<div class="counter-box last">
								<div class="counter-box-icon">
									<i class="im im-icon-Suitcase"></i>
									<span class="counter">163</span>
									<p>Amenities</p>
								</div>
							</div>
						</div>

					</div>

				</div>

			</div>
		</div>
		<!-- Counters / End -->

		<!-- Flip banner -->
		<a href="" class="flip-banner parallax-home" data-color="#274abb" data-color-opacity="0.9" data-img-width="2500" data-img-height="1600">
			<div class="flip-banner-content">
				<h2 class="flip-visible">We help people and homes find each other</h2>
				<h2 class="flip-hidden">Browse Properties <i class="sl sl-icon-arrow-right"></i></h2>
			</div>
		</a>
		<!-- Flip banner / End -->

	</div>
	<!-- Counters Container / End -->


	<!-- Parallax -->
	<div class="parallax" data-background="<?=base_url('assets/')?>images/listings-parallax.jpg"
		data-color="#36383e" data-color-opacity="0.7" data-img-width="800" data-img-height="505">

		<!-- Infobox -->
		<div class="text-content white-font">
			<div class="container">

				<div class="row">
					<div class="col-lg-6 col-sm-8">
						<h2><?= $this->aboutUs_model->getOption('first_title') ?></h2>
						<p><?= $this->aboutUs_model->getOption('first_content') ?> </p>
						<a href="<?=base_url('listing');?>" class="button margin-top-25">Get Started</a>
					</div>
				</div>

			</div>
		</div>

		<!-- Infobox / End -->

	</div>
	<!-- Parallax / End -->


