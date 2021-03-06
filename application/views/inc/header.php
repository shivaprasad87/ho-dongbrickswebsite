<body>

<!-- Wrapper -->
<div id="wrapper">

  <!-- Header Container
  ================================================== -->
   <header id="header-container">

      <!-- Topbar   $this->uri->segment(1)==''-->

      <div id="top-bar">
      <?php
        
       if($this->uri->segment(1)=='' ? 'current' : '') 
       {
        ?>
      
        <div class="container hidden-xs">
            <div class="corner-right">
              <h1><span></span> <br> </h1>
            </div>
                  <div class="right-corner-badges">
                    <span class="featured">
                    <ul class="social-icons">
                      <li><a class="facebook" href="<?= $social_links->facebook ?>" target="_blank"><i class="icon-facebook"></i></a></li>
                      <li><a class="twitter" href="<?= $social_links->twitter ?>" target="_blank"><i class="icon-twitter"></i></a></li>
                      <li><a class="instagram" href="<?= $social_links->instagram ?>" target="_blank"><i class="icon-instagram"></i></a></li>
                      <li><a class="linkedin" href="<?= $social_links->linked_in ?>" target="_blank"><i class="icon-linkedin"></i></a></li>
                    </ul>
                              </span>
                    
                  </div>

        </div>
     
      <div class="clearfix"></div>
       <?php
      }
       else {
        
               ?>
           
              <div class="container">

                <!-- Left Side Content -->
                <div class="left-side">

                  <!-- Top bar -->
                  <ul class="top-bar-menu">
                    <li><i class="fa fa-phone"></i><a href="tel:<?= $social_links->mobile ?>"> <?= $social_links->mobile ?></a> </li>
                    <li><i class="fa fa-envelope"></i><a href="mailto:<?= $social_links->email ?>"><?= $social_links->email ?></a></li>
                  
                  </ul>

                </div>
                <!-- Left Side Content / End -->


                <!-- Left Side Content -->
                <div class="right-side">

                  <!-- Social Icons -->
                  <ul class="social-icons">
                    <li><a class="facebook" target="_blank" href="<?= $social_links->facebook ?>"><i class="icon-facebook"></i></a></li>
                    <li><a class="twitter" target="_blank" href="<?= $social_links->twitter ?>"><i class="icon-twitter"></i></a></li> 
                    <li><a class="linkedin" target="_blank" href="<?= $social_links->linked_in ?>"><i class="icon-linkedin"></i></a></li>
                    <li><a class="instagram" target="_blank" href="<?= $social_links->instagram ?>"><i class="icon-instagram"></i></a></li>
                  </ul>

                </div>
                <!-- Left Side Content / End -->

              </div>
              <div class="clearfix"></div>
           
          <?php
     }
     ?>

     
      </div>
      <!-- Topbar / End -->


      <!-- Header -->
      <div id="header">
        <div class="container">
          
          <!-- Left Side Content -->
          <div class="left-side">
            
            <!-- Logo -->
            <div id="logo">
              <a href="<?=base_url();?>"><img src="<?=base_url('assets/');?>images/Holding-bricks.png" alt=""></a>
            </div>


            <!-- Mobile Navigation -->
            <div class="mmenu-trigger">
              <button class="hamburger hamburger--collapse" type="button">
                <span class="hamburger-box">
                  <span class="hamburger-inner"></span>
                </span>
              </button>
            </div>


          
            
          </div>
          <!-- Left Side Content / End -->

          <!-- Right Side Content / End -->
          <div class="right-side">
          
            <div class="header-widget">
              <nav id="navigation" class="style-1">
                <ul id="responsive">
      
                  <li><a class="<?=$this->uri->segment(1)=='' ? 'current' : '' ?>" href="<?=base_url();?>">Home</a>
                    
                  </li>
      
                  <li><a class="<?=$this->uri->segment(1)=='about' ? 'current' : '' ?>" href="<?=base_url('about');?>">About Us</a>
                    
                  </li>

                  <li><a class="<?=$this->uri->segment(1)=='listing' ? 'current' : '' ?>" href="<?=base_url('listing');?>">Listing</a>
                  <li><a href="#">Location</a>
                    <ul>
                    <li><a href="<?= site_url('listing') ?>">All Cities</a></li>
                    <?php foreach ($cities as $city) { ?>            
                    <li class="<?= $this->session->userdata('city') == $city->name ? 'active' : '' ?>"><a href="<?= site_url('city/'.$city->url_name) ?>"><?= htmlentities(ucfirst($city->name)) ?></a></li>
                        <?php } ?>
                    </ul>
                  </li>
      
                
                  <li><a  class="<?=$this->uri->segment(1)=='contact' ? 'current' : '' ?>" href="<?=base_url('contact');?>">Contact Us</a>
                    
                  </li>
      
                </ul>
              </nav>
            </div>
            
          </div>
          <!-- Right Side Content / End -->

        </div>
      </div>
      <!-- Header / End -->

    </header>