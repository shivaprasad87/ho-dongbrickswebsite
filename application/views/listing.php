<!--Listing Start -->
<section id="listing1" class="listing1 padding_top">
  <div class="container">
    <div class="row">
      <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="row">
          <div class="col-md-9">
            <h2 class="uppercase">PROPERTY LISTINGS</h2>
            <p class="heading_space">We have Properties in these Areas View a list of Featured Properties.</p>
          </div>
          <div class="col-md-3">
          <form class="callus">
            <div class="single-query">
              <div class="intro property-page"> Properties Showing (<?= isset($total) ? $total : 0 ?>) </div>
            </div>
            </form>
          </div>
        </div>
        <div class="row">
          <?php 
          $i=1;
          if(count($properties)>0)
          {
          foreach ($properties as $property) { ?>
          <div class="col-sm-4">
            <div class="property_item heading_space">
              <div class="image">
                <a href="<?=site_url(url_title($property->city_name)."/".( url_title($property->area) )."/$property->slug/")?>"><img src="<?= base_url('uploads/'.$property->slug.'/'.$property->image) ?>" alt="latest property" class="img-responsive"></a>
                <div class="price clearfix"> 
                  <span class="tag pull-right">
                    <?php
                    if($this->properties_model->hasPriceRequest($property->id)){
                        ?>
                        Price On Request
                        <?php
                    }else{
                      echo "Rs. ".  (($row = $this->properties_model->getPropertyParam(array('property_id' => $property->id),
                  'property_flat_types', null,
                  'MIN(total) as amount')) != null) ? number_format_short($row->amount) : 0 
             ." - ".  (($row = $this->properties_model->getPropertyParam(array('property_id' => $property->id),
                  'property_flat_types', null,
                  'MAX(total) as amount')) != null) ? number_format_short($row->amount) : 0 ."</span>";
                 } ?>
                </div>
                <span class="tag_t"><?php
                if($property->possession_date!='0000-00-00')
                {
                    $date1 = date("Y-m-d");
                    $date2 = date("Y-m-d", strtotime($property->possession_date)); 
                    if($date1 > $date2)
                        echo "Ready";
                    else
                echo  date('M, Y', strtotime($property->possession_date));
                }
                else 
                echo "Ready"; 
                ?></span> 
                <span class="tag_l">Featured</span>
              </div>
              <div class="proerty_content">
                <div class="proerty_text">
                  <h3 class="captlize"><a href="#."><?= $property->title ?></a></h3>
                  <p><?php echo $property->area.", ".$property->city_name; ?></p>
                </div>
                <div class="property_meta transparent"> 
                  <?php
                  if (($flatTypes = $this->properties_model->getPropertyFlatType(null, $property->id)) != null) {
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

                  <span><i class="icon-bed" ></i><?php echo $bhk; $bhk='';/*.' '.$propType['name']*/ ?></span> 
                  <span><i class="icon-select-an-objecto-tool"></i><?= $property->prop_type ?></span> 
               
                </div>
                
                <div class="property_meta transparent">

                  <span><i class="icon-icons100"></i><?= $property->builder ?></span>   
                  <span><i class="icon-icons228"></i><?php
                                                    if($property->possession_date!='0000-00-00')
                                                    echo  date('M, Y', strtotime($property->possession_date));
                                                    else 
                                                    echo "Ready"; ?>
                  </span>
                  <!-- <span><i class="icon-garage"></i>1 Garage</span> -->
                 
                </div>
                <div class="property_meta transparent">
                <span><i class="icon-calendar2"></i>Rera:<?=$property->rera_number?$property->rera_number:'-'?></span> 
              </div>
                <div class="favroute clearfix">
                   <a href="<?=site_url(url_title($property->city_name)."/".( url_title($property->area) )."/$property->slug/")?>"><p class="pull-md-left">Know More&nbsp; <i class="icon-arrow-right3"></i></p></a>
                  <ul class="pull-right">
                  
                    <li><a href="#<?=$i?>" class="share_expender" data-toggle="collapse"><i class="icon-share3"></i></a></li>
                  </ul>
                </div>
                <div class="toggle_share collapse" id="<?=$i++?>">
                  <ul>
                    <li><a href="https://www.facebook.com/sharer/sharer.php?u=<?=site_url(url_title($property->city_name)."/".( url_title($property->area) )."/$property->slug/")?>" class="facebook"><i class="icon-facebook-1"></i> Facebook</a></li>
                    <li><a href="https://twitter.com/share?url=<?=site_url(url_title($property->city_name)."/".( url_title($property->area) )."/$property->slug/")?> " class="twitter"><i class="icon-twitter-1"></i> Twitter</a></li>
                    <li><a href="https://www.linkedin.com/shareArticle?mini=true&amp;url=<?=site_url(url_title($property->city_name)."/".( url_title($property->area) )."/$property->slug/")?>" class="vimo"><i class="icon-vimeo3"></i> LinkedIn</a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div> 
        <?php }
        }
        else{
          echo "No Property Found";
        } ?>
        </div>
        <div class="padding_bottom text-center">
          <!-- <ul class="pager">
            <li><a href="#">1</a></li>
            <li class="active"><a href="#">2</a></li>
            <li><a href="#">3</a></li>
          </ul> -->
          <?= isset($pagination) && $pagination ? $pagination : '' ?>
        </div>
      </div>
   <!--    <aside class="col-md-4 col-xs-12">
        <div class="property-query-area clearfix">
          <div class="col-md-12">
            <h3 class="text-uppercase bottom20 top15">Advanced Search</h3>
          </div>
          <form class="callus" action="<?=site_url('listing')?>" method="post">
            <div class="single-query form-group col-sm-12">
              <input type="text" class="keyword-input" placeholder="Keyword (e.g. 'office')">
            </div>
            <div class="single-query form-group col-sm-12">
              <div class="intro">
                <select name="city" id="city">
                <option selected="" value="">City</option>
                <?php
                foreach ($cities as $cit) {
                  echo "<option value='".$cit->id."'>".$cit->name."</option>";
                }
                ?>
              </select>
              </div>
            </div>
             <div class="single-query form-group col-sm-12">
              <div class="intro">
                <select name="location">
                <option selected="" value="">Location</option>
                <?php
                foreach ($locations as $loc) {
                  echo "<option value='".$loc->id."'>".$loc->name."</option>";
                }
                ?>
              </select>
              </div>
            </div>
            <div class="single-query form-group col-sm-12">
              <div class="intro">
                <select name="property_type">
                <option class="active" value="">Property Type</option>
               <?php
                foreach ($property_types as $property_types) {
                  echo "<option value='".$property_types->id."'>".$property_types->name."</option>";
                }
                ?>
              </select>
              </div>
            </div>
            <div class="single-query form-group col-sm-12">
              <div class="intro">
                <select name="property_status_id" >
                <option class="active" value="">Property Status</option>
                <?php
                foreach ($property_status as $property_status) {
                  echo "<option value='".$property_status->id."'>".$property_status->name."</option>";
                }
                ?>
              </select>
              </div>
            </div>
            <div class="search-2 col-sm-12">
              <div class="row">
                <div class="col-sm-6">
                  <div class="single-query form-group">
                    <div class="intro">
                      <select name="bhk">
                    <option value="0"class="active">Min BHK</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                  </select>
                    </div>
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="single-query form-group">
                    <div class="intro">
                     <select name="baths">
                    <option value="0" class="active">Min Baths</option>
                   <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                  </select>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-sm-12">
              <div class="row">
                <div class="col-sm-6">
                  <div class="single-query form-group">
                    <input type="text" class="keyword-input" placeholder="Min Area (sq ft)">
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="single-query form-group">
                    <input type="text" class="keyword-input" placeholder="Max Area (sq ft)">
                  </div>
                </div>
              </div>
            </div>
            <div class="col-sm-12 bottom10">
              <div class="single-query-slider">
                <label><strong>Price Range:</strong></label>
                <div class="price text-right">
                  <span>rs</span>
                  <div class="leftLabel"></div>
                  <span> to rs</span>
                  <div class="rightLabel"></div>
                </div>
                <div data-range_min="0" data-range_max="1500000" data-cur_min="0" data-cur_max="1500000" class="nstSlider">
                  <div class="bar"></div>
                  <div class="leftGrip"></div>
                  <div class="rightGrip"></div>
                </div>
              </div>
            </div>
            <div class="col-sm-12 form-group">
              <button type="submit" class="btn-blue border_radius">Search</button>
            </div>
          </form>
          <div class="col-sm-12">
            <div class="group-button-search">
              <a data-toggle="collapse" href=".html" class="more-filter bottom15">
                <i class="fa fa-plus text-1" aria-hidden="true"></i><i class="fa fa-minus text-2 hide" aria-hidden="true"></i>
                <div class="text-1">Show more search options</div>
                <div class="text-2 hide">less more search options</div>
              </a>
            </div>
          </div>
          <div class="search-propertie-filters collapse">
            <div class="container-2">
              <div class="row">
                <div class="col-sm-6 col-xs-6">
                  <div class="search-form-group white">
                    <input type="checkbox" name="check-box" />
                    <span>Rap music</span>
                  </div>
                </div>
                <div class="col-sm-6 col-xs-6">
                  <div class="search-form-group white">
                    <input type="checkbox" name="check-box" />
                    <span>Rap music</span>
                  </div>
                </div>
                <div class="col-sm-6 col-xs-6">
                  <div class="search-form-group white">
                    <input type="checkbox" name="check-box" />
                    <span>Rap music</span>
                  </div>
                </div>
                <div class="col-sm-6 col-xs-6">
                  <div class="search-form-group white">
                    <input type="checkbox" name="check-box" />
                    <span>Rap music</span>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-6 col-xs-6">
                  <div class="search-form-group white">
                    <input type="checkbox" name="check-box" />
                    <span>Rap music</span>
                  </div>
                </div>
                <div class="col-sm-6 col-xs-6">
                  <div class="search-form-group white">
                    <input type="checkbox" name="check-box" />
                    <span>Rap music</span>
                  </div>
                </div>
                <div class="col-sm-6 col-xs-6">
                  <div class="search-form-group white">
                    <input type="checkbox" name="check-box" />
                    <span>Rap music</span>
                  </div>
                </div>
                <div class="col-sm-6 col-xs-6">
                  <div class="search-form-group white">
                    <input type="checkbox" name="check-box" />
                    <span>Rap music</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12">
            <h3 class="bottom40 margin40">Featured Properties</h3>
          </div>
        </div>
        <div class="row bottom20">
          <div class="col-md-4 col-sm-4 col-xs-6 p-image">
            <img src="images/f-p-1.png" alt="image"/>
          </div>
          <div class="col-md-8 col-sm-8 col-xs-6">
            <div class="feature-p-text">
              <h4>Historic Town House</h4>
              <p class="bottom15">Lorem Ipsum, Banglore</p>
              <a href="#.">$128,600</a>
            </div>
          </div>
        </div>
        <div class="row bottom20">
          <div class="col-md-4 col-sm-4 col-xs-6 p-image">
            <img src="images/f-p-1.png" alt="image"/>
          </div>
          <div class="col-md-8 col-sm-8 col-xs-6">
            <div class="feature-p-text">
              <h4>Historic Town House</h4>
              <p class="bottom15">Lorem Ipsum, Banglore</p>
              <a href="#.">$128,600</a>
            </div>
          </div>
        </div>
        <div class="row bottom20">
          <div class="col-md-4 col-sm-4 col-xs-6 p-image">
            <img src="images/f-p-1.png" alt="image"/>
          </div>
          <div class="col-md-8 col-sm-8 col-xs-6">
            <div class="feature-p-text">
              <h4>Historic Town House</h4>
              <p class="bottom15">Lorem Ipsum, Banglore</p>
              <a href="#.">$128,600</a>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12">
            <h3 class="margin40 bottom20">Featured Properties</h3>
          </div>
          <div class="col-md-12">
            <div id="agent-2-slider" class="owl-carousel">
              <div class="item">
                <div class="property_item heading_space">
                  <div class="image">
                    <a href="#"><img src="images/slider-list2.jpg" alt="listin" class="img-responsive"></a>
                    <div class="feature"><span class="tag-2">For Rent</span></div>
                    <div class="price clearfix"><span class="tag pull-right">Rs 68 Lacs- <small>Family Home</small></span></div>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="property_item heading_space">
                  <div class="image">
                    <a href="#"><img src="images/slider-list2.jpg" alt="listin" class="img-responsive"></a>
                    <div class="feature"><span class="tag-2">For Rent</span></div>
                    <div class="price clearfix"><span class="tag pull-right">Rs 68 Lacs- <small>Family Home</small></span></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </aside> -->
    </div>
  </div>
</section>

<!-- Floating Form -->
<div class="floating-box hidden-sm">
  
<div class="floating-form float-inner" id="contact_form">
  <div class="contact-opener ">Speak to Our Expert!</div>
      <div class="floating-form-heading">Speak to Our Expert!</div>
      <div id="contact_results"></div>
      <form action="<?=base_url('sendmail');?>" method="post">
          <div id="contact_body">
              <div class="logo_cont text-center">
                  <img style="display: inline-block;" src="https://propsolutionservices.com/assets/images/logo.png" alt="Propsolution">
              </div>
              <div class="alert alert-danger" role="alert" id="error_message" style="display:none;">...</div>
              <div class="alert alert-success" role="alert" id="success_message" style="display:none;">...</div>
              <label><span>Name <span class="required">*</span></span>
                  <input type="text" class="form-control" id="username" name="name" required="">
              </label>
              <label><span>Email <span class="required">*</span></span>
                  <input type="email" name="email" class="form-control" id="email" required="">
              </label>
              <label><span>Phone <span class="required">*</span></span>
                  <input type="tel" class="form-control" id="phone" name="phone" required="">
              </label>
              <label><span>Message<span class="required">*</span></span>
                  <input type="text" class="form-control" id="Message" name="message" required="">
              </label>
            
              <label>
                  <span>&nbsp;</span>
                  <button type="submit" class="btn btn-success">Connect Me</button>
              </label>


          </div>
      </form>
  </div>
</div>
</div>
<div class="clearfix"></div>
<!-- Listing end -->