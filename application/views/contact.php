<div class="clearfix"></div>
<!-- Header Container / End -->


<!-- Content
================================================== -->

<!-- Map Container -->
<div class="contact-map margin-bottom-55">

  <!-- Google Maps -->
  <div class="google-map-container">
    <div id="propertyMap" data-latitude="40.7427837" data-longitude="-73.11445617675781"></div>
    <a href="#" id="streetView">Street View</a>
  </div>
  <!-- Google Maps / End -->

  <!-- Office -->
  <div class="address-box-container">
    <div class="address-container" data-background-image="images/our-office.jpg">
      <div class="office-address">
        <h3>Our Office</h3>
        <ul>
          <li>Bangalore</li>
          <li>India</li>
          <li>Phone <?= $social_links->mobile ?> </li>
        </ul>
      </div>
    </div>
  </div>
  <!-- Office / End -->

</div>
<div class="clearfix"></div>
<!-- Map Container / End -->


<!-- Container / Start -->
<div class="container">

  <div class="row">

    <!-- Contact Details -->
    <div class="col-md-4">

      <h4 class="headline margin-bottom-30">Find Us There</h4>

      <!-- Contact Details -->
      <div class="sidebar-textbox">
        <p>Collaboratively administrate turnkey channels whereas virtual e-tailers. Objectively seize scalable metrics whereas proactive e-services.</p>

        <ul class="contact-details">
          <li><i class="im im-icon-Phone-2"></i> <strong>Phone:</strong> <span><a href="tel:<?= $social_links->mobile ?>"><?= $social_links->mobile ?></a></span></li>
        
          <li><i class="im im-icon-Globe"></i> <strong>Web:</strong> <span><a href="#">www.example.com</a></span></li>
          <li><i class="im im-icon-Envelope"></i> <strong>E-Mail:</strong> <span><a href="mailto:<?= $social_links->email ?>"><?= $social_links->email ?></a></span></li>
        </ul>
      </div>

    </div>

    <!-- Contact Form -->
    <div class="col-md-8">

      <section id="contact">
        <h4 class="headline margin-bottom-35">Contact Form</h4>

        <div id="contact-message"></div> 

          <form method="post" action="<?=base_url('contact');?>" name="contactform" id="contactform" autocomplete="on">

          <div class="row">
            <div class="col-md-6">
              <div>
                <input name="name" type="text" id="name" placeholder="Your Name" required="required" />
              </div>
            </div>

            <div class="col-md-6">
              <div>
                <input name="email" type="email" id="email" placeholder="Email Address" pattern="^[A-Za-z0-9](([_\.\-]?[a-zA-Z0-9]+)*)@([A-Za-z0-9]+)(([\.\-]?[a-zA-Z0-9]+)*)\.([A-Za-z]{2,})$" required="required" />
              </div>
            </div>
          </div>

          <div>
            <input name="phone" type="tel" id="phone" placeholder="Subject" required="required" />
          </div>

          <div>
            <textarea name="message" cols="40" rows="3" id="comments" placeholder="Message" spellcheck="true" required="required"></textarea>
          </div>

          <input type="submit" class="submit button" id="submit" value="Submit Message" />

          </form>
      </section>
    </div>
    <!-- Contact Form / End -->

  </div>

</div>