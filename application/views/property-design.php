<?php 
$property->gallery = json_decode(json_encode($property->gallery),true);
$gallery_images = array();
foreach($property->gallery as $gallery) {
  array_push($gallery_images, $gallery['image']);
} 
if (($images = $this->properties_model->getWhere(array('property_id' => $property->id),
                                                'property_desktop_banners')) != null ) {
    if(($m_images = $this->properties_model->getWhere(array('property_id' => $property->id),
        'property_mobile_banners')) != null)
    {

    $images = json_decode( json_encode($images), true);
    $m_images = json_decode( json_encode($m_images), true);
    $total_images =array_merge($images);
  //  print_r($m_images);die;

    $ban=0;
    $side_image='';
    //print_r($total_images);die;
    foreach ($total_images as $image) {
          array_push($gallery_images, $images[$ban]['banner_path']);
          array_push($gallery_images, $m_images[$ban]['mobile_banner_path']);
          
       
      }
    }
  }  
         $this->load->view('inc/head2'); $this->load->view('inc/header');

?>
<div class="reserveserenityforever_info fixed">
  <div class=container>
  
    <div class="reserveserenityforever_list">
      <div class="serenepark_info">
        <div class="serenepark_img">
        <img src="<?=base_url('assets/')?>images/logo-02.png" alt="">
         </div>
        <div class="serenepark_cont">
          <h6><?= $property->title ? $property->title : '' ?></h6>
          <p><?= $property->location . ', ' . $property->city_name ?></p>
        </div>
      </div>
      <div class="clearflix"></div>
      <div class="reserveserenityforever_left">
        <div class="show_interior_exterior_info">
          <ul></ul>
        </div>
        
        <div class="reserveserenityforever_video demo-gallery">
					<!-- <a  href="#myVideo" style="background-image: url('images//popular-location-01.jpg');">
					</a>-->

					<ul class="lightgallery" class="list-unstyled row">
						<li data-src="<?=base_url('assets/')?>images/popular-location-01.jpg" >
							<a><img class="img-responsive" src="<?=base_url('assets/')?>images/popular-location-01.jpg"></a>
						</li>
					</ul>
				</div>
      
      </div>
      <div class="reserveserenityforever_right">
        <div class="show_interior_exterior_info">
          <ul></ul>
        </div>
        <div class="show_interior_exterior_list">
          <div class="show_interior_exterior_listinner demo-gallery showall_list">
            
              
              
            <ul class="lightgallery" class="list-unstyled row">
            
              <li data-src="<?=base_url('assets/')?>images/popular-location-01.jpg" >
                <a><img class="img-responsive" src="<?=base_url('assets/')?>images/popular-location-01.jpg"></a>
              
              </li>
              <li data-src="<?=base_url('assets/')?>images/popular-location-02.jpg">
                <a><img class="img-responsive" src="<?=base_url('assets/')?>images/popular-location-02.jpg"></a>
            </li>
            <li data-src="<?=base_url('assets/')?>images/popular-location-03.jpg">
              <a><img class="img-responsive" src="<?=base_url('assets/')?>images/popular-location-03.jpg"></a>
            </li>
            <li data-src="<?=base_url('assets/')?>images/popular-location-04.jpg">
              <a><img class="img-responsive" src="<?=base_url('assets/')?>images/popular-location-04.jpg"></a>
            </li>
            
            
            </ul>
          </div>
        </div>
      </div>
    </div>
    
  </div>
</div>
<div class="container ">
  <div class="highlights">
    <ul>
      <li>
        <p>Starting Price</p><?php echo "Rs. ".  (($row = $this->properties_model->getPropertyParam(array('property_id' => $property->id),
                  'property_flat_types', null,
                  'MIN(total) as amount')) != null) ? number_format_short($row->amount) : 0 
             ." - ".  (($row = $this->properties_model->getPropertyParam(array('property_id' => $property->id),
                  'property_flat_types', null,
                  'MAX(total) as amount')) != null) ? number_format_short($row->amount) : 0 ;?>*</h6>
      </li>
      <?php
          if (($flatTypes = $this->properties_model->getPropertyFlatType(null,
                                                        $property->id)) != null) {
              $bhk='';
              $i=0;
              foreach ($flatTypes as $flatType) {
                  if($i==0)
                      $bhk.=$flatType->flat_type;
                  else
                  $bhk.=', '.$flatType->flat_type;
              $i++;
              }
          } 
          $propType   = $this->properties_model->getPropertyType(['id'=>$property->property_type_id]);
          ?>
      <li>
        <p>Configurations</p>
        <h6><?php echo $bhk; $bhk=''; ?></h6>
      </li>
      <li>
        <p>Possession Time</p>
        <h6><?php
            if($property->possession_date!='0000-00-00')
            echo  date('M, Y', strtotime($property->possession_date));
            else 
            echo "Ready"; ?></h6>
      </li>
    
    </ul>
  </div>

</div>

<div class="container property-details ">
<div class="row">
  <div class="col-lg-8 ">
    <div class="div-shadow">
      <div class="col-pad">
        <div class="property-banner">
          <img src="<?=base_url('assets/')?>images/popular-location-04.jpg" class="img-responsive">
          <div class="prop-status">
            Under Construction
          </div>
        </div>
      </div>

      <div class="property-title1 mt-10">
        <p><?= $property->title ? $property->title : '' ?></p>
        <h1></h1>
        <span><?= $property->location . ', ' . $property->city_name ?></span>
        <p class="font9">RERA : <br> <?=$property->rera_number?$property->rera_number:'Not Updated'?></p>
      </div>
      <hr>
      <div class=" mt-10">
        <div class="project_price_details_info">
          <div class="row">
            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
              <p>SBA</p><h6> 5649 sqft</h6>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
              <p>No. Of Units</p><h6> <?=$property->units?> Units</h6>
            </div>
              
            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
              <p>No. Of Floors</p><h6><?=$property->floors?> Floors</h6>
            </div>

            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
              <p>No. Of Towers</p><h6> <?=$property->towers?> Towers</h6>
            </div>

            
          </div>
        </div>
      
      </div>
      <div class="projectoverview_info  mt-10">
        <h6>Project Overview:</h6>
        <?= $property->description?$property->description:''; ?>
        <!-- <a href="#" class="show-more-button">Show More <i class="fa fa-angle-down"></i></a> -->
        <center><div class="btn btn-info" data-toggle="modal" data-target="#main-pop">Download Brochure</div></center>
      </div>
    </div>

<!--     <div class="div_info mt-10" id="Offers">
      <div class="row">
        <div class="col-md-12">
          <div class="individualproject_title">
    
            <h5 itemprop="name"><?= $property->title ? $property->title : '' ?> Special Offers</h5>
            
          </div>
    
      
    
          <div class=" specification_list">
            <div class="col-md-6">
              <ul class="list-4 color">
                <li>Lorem ipsum dolor sit amet</li>
                <li>Consectetur adipiscing elit</li>
                <li>Integer molestie lorem at massa</li>
                
              </ul>


            </div>
            <div class="col-md-6">
              <ul class="list-4 color">
                
                <li>Lorem ipsum dolor sit amet</li>
                <li>Consectetur adipiscing elit</li>
                <li>Integer molestie lorem at massa</li>
                
              </ul>
            </div>
          
          </div>
          <center class="mt-10"><div class="btn btn-offer" data-toggle="modal" data-target="#">Talk To Us</div></center>
    
        </div>
      </div>
    </div> -->

    <div class="div_info mt-10" id="Amenities">
      <span class="hashtag_top"> &nbsp; </span>
      
      <div class="individualproject_title">
      
          
        <h5 itemprop="name"><?= $property->title ? $property->title : '' ?> Amenities</h5>
      
      </div>
      <div class="amenities_list" id="content-1">
        <ul>
          <li>
            <div class="amenities_img">
               <div class="amenities childrensPlayArea" data-name="Children's Play Area"></div>
            </div>
            <div class="amenities_cont">Children's Play Area</div>
          </li>
          
          <li><div class="amenities_img"><div class="amenities communityHall" data-name="Multipurpose Hall"></div></div><div class="amenities_cont">Multipurpose Hall</div></li>
          
          <li><div class="amenities_img"><div class="amenities joggingTrack" data-name="Jogging Track"></div></div><div class="amenities_cont">Jogging Track</div></li>
          
          <li><div class="amenities_img"><div class="amenities gymnasium" data-name="Gymnasium"></div></div><div class="amenities_cont">Gymnasium</div></li>
          
          <li><div class="amenities_img"><div class="amenities internet" data-name="Internet"></div></div><div class="amenities_cont">Internet</div></li>
          
          <li><div class="amenities_img"><div class="amenities library" data-name="Library"></div></div><div class="amenities_cont">Library</div></li>
          
          <li><div class="amenities_img"><div class="amenities lift" data-name="Lift"></div></div><div class="amenities_cont">Lift</div></li>
          
          <li><div class="amenities_img"><div class="amenities security" data-name="Security"></div></div><div class="amenities_cont">Security</div></li>
          
          <li><div class="amenities_img"><div class="amenities swimmingPool" data-name="Swimming Pool"></div></div><div class="amenities_cont">Swimming Pool</div></li>
          
          <li><div class="amenities_img"><div class="amenities gasLine" data-name="Gas Line"></div></div><div class="amenities_cont">Gas Line</div></li>
          
          <li><div class="amenities_img"><div class="amenities intercom" data-name="Intercom"></div></div><div class="amenities_cont">Intercom</div></li>
          
          <li><div class="amenities_img"><div class="amenities powerBackup" data-name="Power Backup"></div></div><div class="amenities_cont">Power Backup</div></li>
          
          <li><div class="amenities_img"><div class="amenities washingMarea" data-name="Washing Machine Area"></div></div><div class="amenities_cont">Washing Machine Area</div></li>
          
          <li><div class="amenities_img"><div class="amenities gatedCommunity" data-name="Gated Community"></div></div><div class="amenities_cont">Gated Community</div></li>
          
          <li><div class="amenities_img"><div class="amenities parking" data-name="Parking"></div></div><div class="amenities_cont">Parking</div></li>
          
          <li><div class="amenities_img"><div class="amenities utilityStores" data-name="Utility Stores"></div></div><div class="amenities_cont">Utility Stores</div></li>
          
          <li><div class="amenities_img"><div class="amenities basketball" data-name="Basketball"></div></div><div class="amenities_cont">Basketball</div></li>
          
          <li><div class="amenities_img"><div class="amenities cricket" data-name="Cricket"></div></div><div class="amenities_cont">Cricket</div></li>
          
          <li><div class="amenities_img"><div class="amenities badminton" data-name="Badminton"></div></div><div class="amenities_cont">Badminton</div></li>
          
          <li><div class="amenities_img"><div class="amenities squash" data-name="Squash"></div></div><div class="amenities_cont">Squash</div></li>
          
          <li><div class="amenities_img"><div class="amenities spa" data-name="Spa"></div></div><div class="amenities_cont">Spa</div></li>
          
          <li><div class="amenities_img"><div class="amenities tennis" data-name="Tennis"></div></div><div class="amenities_cont">Tennis</div></li>
        
        </ul>
      </div>
      </div>

    <div class="div_info mt-10" id="Gallery">
      <span class="hashtag_top"> &nbsp; </span>
      
      <div class="individualproject_title">
      
        <a class="link" href="" title="" target="_blank" itemprop="url">
          
        <h5 itemprop="name"><?= $property->title ? $property->title : '' ?> Gallery</h5>
        </a>
      </div>

      <div class="sppb-row">

        <ul class="nav-gallery nav-tabs mytab" role="tablist"
          style="margin-top: 20px; margin-bottom: 35px;">
  
          <li role="presentation" class="active">
            <a href="#General" aria-controls="settings" role="tab"
              data-toggle="tab" aria-expanded="false">Elevation
            </a>
          </li>
  
          
  
          <li role="presentation" class="">
            <a href="#floorplan" aria-controls="profile" role="tab"
              data-toggle="tab" aria-expanded="true"> Floorplan
            </a>
          </li>
          
  
          <li role="presentation" class="">
            <a href="#Masterplan" aria-controls="profile" role="tab"
              data-toggle="tab" aria-expanded="true">Masterplan
            </a>
          </li>
  
        </ul>
  
        <div class="tab-content delay-09s animated wow animated"
          style="visibility: visible; animation-name: fadeInDown;">
  
          <div role="tabpanel" class="tab-pane fade active in" id="General">
          
            <div class="row general bottom40">
            <div class="demo-gallery">
              <ul class="lightgallery" class="list-unstyled row">
                <li class="col-xs-6 col-sm-4 col-md-6 col-lg-6" data-src="<?=base_url('assets/')?>images/listing-03.jpg"  >
                  <a href="">
                    <img class="img-responsive" src="<?=base_url('assets/')?>images/listing-03.jpg">
                  </a>
                </li>
                <li class="col-xs-6 col-sm-4 col-md-6 col-lg-6" data-src="<?=base_url('assets/')?>images/listing-02.jpg" >
                  <a href="">
                    <img class="img-responsive" src="<?=base_url('assets/')?>images/listing-02.jpg">
                  </a>
                </li>
                <li class="col-xs-6 col-sm-4 col-md-6 col-lg-6" data-src="<?=base_url('assets/')?>images/listing-01.jpg" >
                  <a href="">
                    <img class="img-responsive" src="<?=base_url('assets/')?>images/listing-01.jpg">
                  </a>
                </li>
                <li class="col-xs-6 col-sm-4 col-md-6 col-lg-6" data-src="<?=base_url('assets/')?>images/listing-03.jpg"  >
                  <a href="">
                    <img class="img-responsive" src="<?=base_url('assets/')?>images/listing-03.jpg">
                  </a>
                </li>
                <li class="col-xs-6 col-sm-4 col-md-6 col-lg-6" data-src="<?=base_url('assets/')?>images/listing-02.jpg" >
                  <a href="">
                    <img class="img-responsive" src="<?=base_url('assets/')?>images/listing-02.jpg">
                  </a>
                </li>
                <li class="col-xs-6 col-sm-4 col-md-6 col-lg-6" data-src="<?=base_url('assets/')?>images/listing-01.jpg" >
                  <a href="">
                    <img class="img-responsive" src="<?=base_url('assets/')?>images/listing-01.jpg">
                  </a>
                </li>
              
              </ul>
            </div>
           
          </div>
  
          </div>
  
          <div role="tabpanel" class="tab-pane fade  " id="Masterplan">
  
            <div class="row masterplan bottom40">
            <div class="demo-gallery">
              <ul class="lightgallery" class="list-unstyled row">
                <li class="col-xs-12 col-sm-4 col-md-6 col-lg-12" data-src="<?=base_url('assets/')?>images/Gallery/masterplan.jpg"  >
                  <a href="">
                    <img class="img-responsive" src="<?=base_url('assets/')?>images/Gallery/masterplan.jpg">
                  </a>
                </li>
                
              
              </ul>
            </div>
            </div>
            
          </div>
  
  
          <div role="tabpanel" class="tab-pane fade  " id="floorplan">
  
            <div class="row general bottom40">
            <div class="demo-gallery">
              <ul class="lightgallery" class="list-unstyled row">
                <li class="col-xs-6 col-sm-4 col-md-6 col-lg-6" data-src="<?=base_url('assets/')?>images/Gallery/Floor/f1.jpg"  >
                  <a href="">
                    <img class="img-responsive" src="<?=base_url('assets/')?>images/Gallery/Floor/f1.jpg">
                  </a>
                </li>
                <li class="col-xs-6 col-sm-4 col-md-6 col-lg-6" data-src="<?=base_url('assets/')?>images/Gallery/Floor/f2.jpg" >
                  <a href="">
                    <img class="img-responsive" src="<?=base_url('assets/')?>images/Gallery/Floor/f2.jpg">
                  </a>
                </li>
                <li class="col-xs-6 col-sm-4 col-md-6 col-lg-6" data-src="<?=base_url('assets/')?>images/Gallery/Floor/f3.jpg" >
                  <a href="">
                    <img class="img-responsive" src="<?=base_url('assets/')?>images/Gallery/Floor/f3.jpg">
                  </a>
                </li>
                <li class="col-xs-6 col-sm-4 col-md-6 col-lg-6" data-src="<?=base_url('assets/')?>images/Gallery/Floor/f4.jpg"  >
                  <a href="">
                    <img class="img-responsive" src="<?=base_url('assets/')?>images/Gallery/Floor/f4.jpg">
                  </a>
                </li>
                <li class="col-xs-6 col-sm-4 col-md-6 col-lg-6" data-src="<?=base_url('assets/')?>images/Gallery/Floor/f5.jpg" >
                  <a href="">
                    <img class="img-responsive" src="<?=base_url('assets/')?>images/Gallery/Floor/f5.jpg">
                  </a>
                </li>
                <li class="col-xs-6 col-sm-4 col-md-6 col-lg-6" data-src="<?=base_url('assets/')?>images/Gallery/Floor/f6.jpg" >
                  <a href="">
                    <img class="img-responsive" src="<?=base_url('assets/')?>images/Gallery/Floor/f6.jpg">
                  </a>
                </li>
              
              </ul>
            </div>
            </div>
            
          
          </div>
  
  
          </div>
  
  
        </div>

        
    </div>

    <div class="row div_info mt-10" id="Specification">
      <div class="individualproject_title">
      
        <a class="link" href="" title="" target="_blank" itemprop="url">
          
        <h5 itemprop="name"><?= $property->title ? $property->title : '' ?> Specification</h5>
        </a>
      </div>
  
      <div class="col-md-12 Specification">
      
        <!-- Toggles Container -->
        <div class="style-2">
          <?php
          if (($specifications = $this->properties_model->getPropertySpecification($property->id)) != null) 
          {           
            foreach ($specifications as $k => $specification) {
              if (($items = $this->properties_model->getPropertySpecification($property->id,
                                                                $specification->id)) != null) {
          ?>
          <div class="toggle-wrap">
            <span class="trigger "><a href="#"><?= $specification->name ?><i class="sl sl-icon-plus"></i></a></span>
            <div class="toggle-container">
              <p><?php
                    $s=1;
                foreach (explode(',', $items) as $item) {
                    ?>
                                            <?= $s.". ".$item ."<br />"?>

                                                <?php
                    $s++;
                }
                ?></p>
            </div>
          </div>
         
          <?php
}
 }
}
          ?>
  
          <!-- <div class="toggle-wrap">
            <span class="trigger"><a href="#">Flooring<i class="sl sl-icon-plus"></i></a></span>
            <div class="toggle-container">
              <p><ul><li>Living, Dining, Kitchen &amp; Bedrooms- Vitrified tiles – Varmora / AGL or equivalent brand</li>
                <li>Toilet flooring  - Anti skid Ceramic tiles – Varmora / AGL or equivalent brand </li>
                <li>Toilet dadoing up to 7 feet- ceramic glazed tiles – Varmora / AGL or equivalent brand</li>
                <li>Kitchen dadoing above the counter to height of 2 feet- ceramic glazed tiles – 
                  Varmora/AGL or equivalent brand (only supply)</li>
                <li>Balcony -   Anti skid Ceramic tiles – Varmora / AGL or equivalent brand</li>
                <li>Common Area- Anti skid Ceramic tiles – flooring and skirting</li></ul></p>
            </div>
          </div>
          <div class="toggle-wrap">
            <span class="trigger "><a href="#">Toilet<i class="sl sl-icon-plus"></i></a></span>
            <div class="toggle-container">
              <p><ul><li>Sanitary fittings - American standard or equivalent brand -  Wall hung EWC, wash   basin</li>
                <li>CP fittings - Jaquar or equivalent make – Shower spout, Diverter, Shower head, Pillar cock,concealed cistern, Flush plate, angle value, health faucet</li>
                <li>Provision for geyser and Exhaust fan in toilets.</li></ul></p>
            </div>
          </div>
  
          <div class="toggle-wrap">
            <span class="trigger"><a href="#">Kitchen<i class="sl sl-icon-plus"></i></a></span>
            <div class="toggle-container">
              <p><ul><li>Granite top &amp; single bowl Futura / Jayna sink with drain board or equivalent brand to be provided (only supply)
              </li>
              <li>Provision for Chimney in kitchen.</li>
              <li>Provision for Water purifier
              </li></ul></p>
            </div>
          </div>
          <div class="toggle-wrap">
            <span class="trigger "><a href="#">Windows<i class="sl sl-icon-plus"></i></a></span>
            <div class="toggle-container">
              <p><ul><li>2 Track UPVC windows with glazed shutters and mosquito mesh 
                Kommerling or equivalent brand 
               
               </li></ul></p>
            </div>
          </div>

          <div class="toggle-wrap">
            <span class="trigger"><a href="#">Doors<i class="sl sl-icon-plus"></i></a></span>
            <div class="toggle-container">
              <p><ul><li>Main Door -Tata steel or equivalent brand -Super Quality steel door &amp; frame                        
              </li>                      
              <li>Internal doors - Tata steel or equivalent brand </li>
              <li>Toilet doors - FRP door</li>
              <li>Balcony doors - Kommerling or equivalent brand- 2 Track UPVC glazed shutter with mosquito mesh</li>
              <li>Common door - Fire rated steel doors for fire exit</li></ul></p>
            </div>
          </div>

          <div class="toggle-wrap">
            <span class="trigger "><a href="#">Electrical<i class="sl sl-icon-plus"></i></a></span>
            <div class="toggle-container">
              <p><ul><li>Modular switches of Schneider or Equivalent Brand
              </li>
              <li> ELCB and MCB with independent EB meter of approved brand</li>
              <li>Good quality concealed copper wiring of approved brand</li>
              <li>Provision for Washing Machine point.</li></ul></p>
            </div>
          </div>
  
        
          <div class="toggle-wrap">
            <span class="trigger"><a href="#">Elevator<i class="sl sl-icon-plus"></i></a></span>
            <div class="toggle-container">
              <p><ul><li>Schindler / Johnson lifts or equivalent brand
            
              </li></ul></p>
            </div>
          </div>
          <div class="toggle-wrap">
            <span class="trigger"><a href="#"> Water Supply  <i class="sl sl-icon-plus"></i></a></span>
            <div class="toggle-container">
              <p><ul><li>Bore well water supply / Municipal water supply if available
              </li>
              </ul></p>
            </div>
          </div>

          <div class="toggle-wrap">
            <span class="trigger "><a href="#"> Power Backup <i class="sl sl-icon-plus"></i></a></span>
            <div class="toggle-container">
              <p><ul><li>Power backup for common areas, lift lobbies and
                0.5 KW power backup for each flat through limiter switch
                
                </li></ul></p>
            </div>
          </div>
   -->
  
        </div>
        <!-- Toggles Container / End -->
      </div>
    
    </div>

    
             <?php
              if($property->walkthrough)
              {
              ?>
    <div class="div_info mt-10" id="Video">
      
        <!-- Video -->
        <div class="individualproject_title ">
      
          
            
          <h5 itemprop="name"><?= $property->title ? $property->title : '' ?> Walkthrough Video</h5>
          
        </div>
        
        <div class="responsive-iframe">
          
          <iframe width="560" height="315" src="https://www.youtube.com/embed/<?= getYoutubeVideoId($property->walkthrough) ?>?rel=0&amp;showinfo=0" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen=""></iframe>
        </div>
    
    </div>
            <?php
                                        }

    if($property->map)
    {
      ?>

    <div class="div_info mt-10" id="Location">
      <div class="property-description">
  
        <div class="individualproject_title">
      
          
            
          <h5 itemprop="name"><?= $property->title ? $property->title : '' ?> Location  Map</h5>
          
        </div>
  
          <div id="propertyMap-container">
            <div id="propertyMap" data-latitude="40.7427837" data-longitude="-73.11445617675781" style="position: relative; overflow: hidden;"><div style="height: 100%; width: 100%; position: absolute; top: 0px; left: 0px; background-color: rgb(229, 227, 223);"><div class="gm-err-container"><div class="gm-err-content"><div class="gm-err-icon"><img src="<?= base_url(" uploads/$property->slug/map/$property->map") ?>" draggable="false" style="user-select: none;"></div><div class="gm-err-title">Oops! Something went wrong.</div><div class="gm-err-message">This page didn't load Google Maps correctly. See the JavaScript console for technical details.</div></div></div></div></div>
            <a href="#" id="streetView">Street View</a>
          </div>
      </div>
    </div>
                             <?php 
    }                                           
?>

      <div class="div_info mt-10" id="Location-Advantages">
        <div class="row">
          <div class="col-md-12">
            <div class="individualproject_title">
      
              <h5 itemprop="name"><?= $property->title ? $property->title : '' ?> Location Advantage</h5>
              
            </div>
      
        
      
            <div class=" specification_list">
              
      
              <div class="col-md-6">
                <ul class="list-3 color">
                  <li>Lorem ipsum dolor sit amet <span>10 min</span></li>
                  <li>Consectetur adipiscing elit <span>10 min</span></li>
                  <li>Integer molestie lorem at massa <span>10 min</span></li>
                  <li>Facilisis in pretium nisl aliquet <span>10 min</span></li>
                  <li>Lorem ipsum dolor sit amet <span>10 min</span></li>
                
                </ul>
              </div>
      
              <div class="col-md-6">
                <ul class="list-3 color">
                  <li>Lorem ipsum dolor sit amet <span>10 min</span></li>
                  <li>Consectetur adipiscing elit <span>10 min</span></li>
                  <li>Integer molestie lorem at massa <span>10 min</span></li>
                  <li>Facilisis in pretium nisl aliquet <span>10 min</span></li>
                  <li>Lorem ipsum dolor sit amet <span>10 min</span></li>
                </ul>
              </div>
            </div>
      
          </div>
        </div>
      </div>

      <div class="div_info mt-10" id="About_project">
        <div class="individualproject_title">
      
          
          <h5 itemprop="name">About The Builder</h5>
          <div class="project-logo mt-10"><img src="<?= base_url().'uploads/builders/'.$property->builder_image?>" class="img-responsive">
            <p><?=$property->builder?></p>
          </div>
        
        </div>
        
         <?=$property->builder_description?>
        
      </div>

      <div class="div_info mt-10" id="FAQ">
        <div class="FAQ-title">
        
          <h5 itemprop="name">FAQ's</h5>
          
        </div>
        <div class="panel-group" id="accordion">
          
          <div class="panel panel-default">
            <div class="panel-heading">
              <h4 class="panel-title">
                <a class="accordion-toggle text-left" data-toggle="collapse" data-parent="#accordion" href="#collapseNine">Is account registration required?</a>
              </h4>
            </div>
            <div id="collapseNine" class="panel-collapse collapse in">
              <div class="panel-body">
                Account registration at <strong>PrepBootstrap</strong> is only required if you will be selling or buying themes. 
                This ensures a valid communication channel for all parties involved in any transactions. 
              </div>
            </div>
          </div>
          <div class="panel panel-default">
            <div class="panel-heading">
              <h4 class="panel-title">
                <a class="accordion-toggle text-left collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTen">Is account registration required?</a>
              </h4>
            </div>
            <div id="collapseTen" class="panel-collapse collapse">
              <div class="panel-body">
                Account registration at <strong>PrepBootstrap</strong> is only required if you will be selling or buying themes. 
                This ensures a valid communication channel for all parties involved in any transactions. 
              </div>
            </div>
          </div>
          <div class="panel panel-default">
            <div class="panel-heading">
              <h4 class="panel-title">
                <a class="accordion-toggle text-left collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseEleven">Is account registration required?</a>
              </h4>
            </div>
            <div id="collapseEleven" class="panel-collapse collapse">
              <div class="panel-body">
                Account registration at <strong>PrepBootstrap</strong> is only required if you will be selling or buying themes. 
                This ensures a valid communication channel for all parties involved in any transactions. </strong>
              </div>
            </div>
          </div>

          <div class="panel panel-default">
            <div class="panel-heading">
              <h4 class="panel-title">
                <a class="accordion-toggle text-left collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwelve">Is account registration required?</a>
              </h4>
            </div>
            <div id="collapseTwelve" class="panel-collapse collapse">
              <div class="panel-body">
                Account registration at <strong>PrepBootstrap</strong> is only required if you will be selling or buying themes. 
                This ensures a valid communication channel for all parties involved in any transactions. </strong>
              </div>
            </div>
          </div>
      
          
        
          
        </div>
      </div>
      

  </div>

  
  

  <div class="col-lg-4">
    <div id="sideform" class="needhelp_form sideform ">
      <div class="needhelp_form_close  mt-10">

        </div><h5>Need help in your house search?</h5>
        
        <style type="text/css">.g-recaptcha{transform:scale(.77);-webkit-transform:scale(.77);transform-origin:0 0;-webkit-transform-origin:0 0}.needhelp_form h5{margin:0}.needhelp_form .needhelp_form_list .submit_btn{margin-top:0}.needhelp_form .needhelp_form_list ul li input{height:28px}.needhelp_form .needhelp_form_list ul li input[type=checkbox]{height:12px}.needhelp_form .needhelp_form_list ul li{margin:0 0 5px}</style>
        
        <div class="needhelp_form_list">
          
          <form action="" name="WebForm-1498709213622" method="POST" id="elqform2">
              <div class="throwerror" style="color:red;font-size:15px;padding-bottom:18px;"></div>
              <ul>
                <li class="form-sec"> 
                  <input type="text" placeholder="Name*" id="" required="" name="Name*"></li>
                <li class="form-sec">
              
              <input type="tel" placeholder="Phone Number*" id="" required="" name="phone*">
            </li>
              <li class="form-sec">
                <input type="email" placeholder="Email ID*" required="" name="emailAddress" id="fcemail" autocomplete="off" class="emailcheck">
              </li>
              <li style="margin-top:20px !Important;">
                <center><div class="btn btn-submit" data-toggle="modal" data-target="#main-pop">Enquire Now</div></center>
              </li>
            </ul>
          </form>
          <div class="mb-40">
            <div class="offers-wrap lead-offer no-bg-style"> 
              <div class="spl-img va-top  bg-img-default bg-img-contain"  style=" background-image:url('<?=base_url('assets/')?>images/cashback.png')">
              </div>  
              <div class="spl-txt-wrap va-middle"> 
                <div class="spl-title va-top">Assured Callback in 5 mins</div> 
                <ul class="va-top reset-ul offer-ul"> 
                  <li class="offer">Get an assured callback in 5 mins from sales expert (9 AM - 6 PM IST)</li> 
                </ul> 
                </div>      
            </div>
            <div class="offers-wrap lead-offer no-bg-style">
              <div class="spl-img va-top  bg-img-default bg-img-contain"  style=" background-image:url('<?=base_url('assets/')?>images/offer.png')"> 
              </div>                 
              <div class="spl-txt-wrap va-middle"> 
                <div class="spl-title va-top">Authorised Channel Partner</div>
                <ul class="va-top reset-ul offer-ul"> 
                  <li class="offer">Holding Bricks is an authorised channel partner for this project</li>
                </ul> 
                </div>            
            </div>
          </div>  
        </div>
      </div>
      
      <!-- Widget -->
      <div class="widget margin-top-20 margin-bottom-30">
        <h3 class="">Projects Nearby :</h3>
        <div class="underline margin-bottom-35"></div>

        <div class="outer" id="scroll-nearby">
            <!-- Item -->
            <div class="item">
              <div class="listing-item compact">

                <a href="#" class="listing-img-container">

                  <div class="listing-badges">
                    <span class="featured">Best Deals</span>
                    <span>For Sale</span>
                  </div>

                  <div class="listing-img-content">
                    <span class="listing-compact-title">Eagle Apartments <i>Sarjapur road</i></span>

                    <!-- <ul class="listing-hidden-content">
                      <li>Area <span></span></li>
                      
                      <li>Price <span>1 Cr</span></li>
                    </ul> -->
                  </div>

                  <img src="<?=base_url('assets/')?>images/listing-01.jpg" alt="">
                </a>

              </div>
            </div>
            <!-- Item / End -->

            <!-- Item -->
            <div class="item">
              <div class="listing-item compact">

                <a href="#" class="listing-img-container">

                  <div class="listing-badges">
                    <span class="featured">Best Deals</span>
                    <span>For Sale</span>
                  </div>

                  <div class="listing-img-content">
                    <span class="listing-compact-title">Eagle Apartments <i>Sarjapur road</i></span>

                    <!-- <ul class="listing-hidden-content">
                      <li>Area <span></span></li>
                      
                      <li>Price <span>1 Cr</span></li>
                    </ul> -->
                  </div>

                  <img src="<?=base_url('assets/')?>images/listing-01.jpg" alt="">
                </a>

              </div>
            </div>
            <!-- Item / End -->

          <!-- Item -->
          <div class="item">
            <div class="listing-item compact">

              <a href="#" class="listing-img-container">

                <div class="listing-badges">
                  <span class="featured">Best Deals</span>
                  <span>For Sale</span>
                </div>

                <div class="listing-img-content">
                  <span class="listing-compact-title">Eagle Apartments <i>Sarjapur road</i></span>

                  <!-- <ul class="listing-hidden-content">
                    <li>Area <span></span></li>
                    
                    <li>Price <span>1 Cr</span></li>
                  </ul> -->
                </div>

                <img src="<?=base_url('assets/')?>images/listing-01.jpg" alt="">
              </a>

            </div>
          </div>
          <!-- Item / End -->

         
        </div>
        <center>
            <button class="btn btn-view"><a style="color: white;">See More</a></button>
          </center>
      </div>
      <!-- Widget / End -->

      <!-- Widget -->
      <div class="widget margin-top-20 margin-bottom-30">
        <h3 class="">Best Deals In Your City :</h3>
        <div class="underline-widget margin-bottom-35"></div>

        <div class="outer" id="scroll-bestdeals">
          <!-- Item -->
          <div class="item">
            <div class="listing-item compact">

              <a href="#" class="listing-img-container">

                <div class="listing-badges">
                  <span class="featured">Best Deals</span>
                  <span>For Sale</span>
                </div>

                <div class="listing-img-content">
                  <span class="listing-compact-title">Eagle Apartments <i>Sarjapur road</i></span>

                  <!-- <ul class="listing-hidden-content">
                    <li>Area <span></span></li>
                    
                    <li>Price <span>1 Cr</span></li>
                  </ul> -->
                </div>

                <img src="<?=base_url('assets/')?>images/listing-01.jpg" alt="">
              </a>

            </div>
          </div>
          <!-- Item / End -->

          <!-- Item -->
          <div class="item">
            <div class="listing-item compact">

              <a href="#" class="listing-img-container">

                <div class="listing-badges">
                  <span class="featured">Best Deals</span>
                  <span>For Sale</span>
                </div>

                <div class="listing-img-content">
                  <span class="listing-compact-title">Eagle Apartments <i>Sarjapur road</i></span>

                  <!-- <ul class="listing-hidden-content">
                    <li>Area <span></span></li>
                    
                    <li>Price <span>1 Cr</span></li>
                  </ul> -->
                </div>

                <img src="<?=base_url('assets/')?>images/listing-01.jpg" alt="">
              </a>

            </div>
          </div>
          <!-- Item / End -->

        <!-- Item -->
        <div class="item">
          <div class="listing-item compact">

            <a href="#" class="listing-img-container">

              <div class="listing-badges">
                <span class="featured">Best Deals</span>
                <span>For Sale</span>
              </div>

              <div class="listing-img-content">
                <span class="listing-compact-title">Eagle Apartments <i>Sarjapur road</i></span>

                <!-- <ul class="listing-hidden-content">
                  <li>Area <span></span></li>
                  
                  <li>Price <span>1 Cr</span></li>
                </ul> -->
              </div>

              <img src="<?=base_url('assets/')?>images/listing-01.jpg" alt="">
            </a>

          </div>
        </div>
        <!-- Item / End -->

         
        </div>
        <center>
            <button class="btn btn-view"><a style="color: white;">See More</a></button>
          </center>
      </div>
      <!-- Widget / End -->

      <!-- Widget -->
      <div class="widget margin-top-20 margin-bottom-30">
        <h3 class="">Latest Blogs :</h3>
        <div class="underline-blog margin-bottom-35"></div>

        <div class="outer" id="scroll-Blogs">
          <!-- Item -->
          <div class="item">
            
            <div class="listing-item compact">

              <a href="#" class="listing-img-container">

              
                <div class="listing-img-content">
                  <span class="listing-compact-title">Blog Heading </span>

                  <!-- <ul class="listing-hidden-content">
                    <li>Area <span></span></li>
                    
                    <li>Price <span>1 Cr</span></li>
                  </ul> -->
                </div>

                <img src="<?=base_url('assets/')?>images/listing-01.jpg" alt="">
              </a>

            </div>
          </div>
          <!-- Item / End -->

          <div class="item">
            
            <div class="listing-item compact">

              <a href="#" class="listing-img-container">

              
                <div class="listing-img-content">
                  <span class="listing-compact-title">Blog Heading </span>

                  <!-- <ul class="listing-hidden-content">
                    <li>Area <span></span></li>
                    
                    <li>Price <span>1 Cr</span></li>
                  </ul> -->
                </div>

                <img src="<?=base_url('assets/')?>images/listing-01.jpg" alt="">
              </a>

            </div>
          </div>
          <div class="item">
            
            <div class="listing-item compact">

              <a href="#" class="listing-img-container">

              
                <div class="listing-img-content">
                  <span class="listing-compact-title">Blog Heading </span>

                  <!-- <ul class="listing-hidden-content">
                    <li>Area <span></span></li>
                    
                    <li>Price <span>1 Cr</span></li>
                  </ul> -->
                </div>

                <img src="<?=base_url('assets/')?>images/listing-01.jpg" alt="">
              </a>

            </div>
          </div>

         
        </div>
        <center>
            <button class="btn btn-view"><a style="color: white;">See More</a></button>
          </center>
      </div>
      <!-- Widget / End -->
        
        </div>
    </div>
</div>
<!-- Flip banner -->
<a href="" class="flip-banner parallax-home" data-background="images/single-property-03.jpg"  data-img-width="2500" data-img-height="1600">
  <div class="flip-banner-content" style="color:rgb(219 18 57)">
    <h2 class="flip-visible">We help people and homes find each other</h2>
    <h2 class="flip-hidden">Browse Properties <i class="sl sl-icon-arrow-right"></i></h2>
  </div>
</a>
<!-- Flip banner / End -->


<div class="modal Home-pupup fade in" tabindex="-1" role="dialog" id="main-pop" style="opacity: 1;">
  <!-- data-backdrop="static" data-keyboard="false" -->
<div class="modal-dialog" role="document">
    <div class="modal-content">
      
    <div class="modal-body text-center needhelp_form-modal" style="margin: auto;">
    <li class="left_col"><img class="text-center modal-logo" src="<?=base_url('assets/')?>images/Holding-bricks.png"></li>  
    <li class="right_col"><h5>Project Name Brochure</h5></li>
    
      <div class="needhelp_form_list">
          
        <form action="" name="WebForm-1498709213622" method="POST" id="elqform2">
            <div class="throwerror" style="color:red;font-size:15px;padding-bottom:18px;"></div>
            <ul>
              <li class="form-sec"> 
                <input type="text" placeholder="Name*" id="" required="" name="Name*"></li>
              
          
              <li class="form-sec">
            
            <input type="tel" placeholder="Phone Number*" id="" required="" name="phone*">
          </li>
            <li class="form-sec">
              <input type="email" placeholder="Email ID*" required="" name="emailAddress" id="fcemail" autocomplete="off" class="emailcheck">
            </li>

            <li style="margin-top:20px!important">
            <center><div class="btn btn-submit" data-toggle="modal" data-target="#main-pop">Download</div></center>
          </li>
          </ul>
        </form>
      </div>
        </div>
    </div><!-- /.modal-content -->
</div><!-- /.modal-dialog -->
</div>


<?php $this->load->view('inc/footer'); ?>

<script>
	$(document).ready(function(){
		$('.lightgallery').lightGallery(); 
	});
</script>