<?php
include("header.php")

?>

<?php
if(isset($_POST["submit"]))
{
  require("config.php");
  $comm = mysqli_query($con,"insert into subscribe(email) values('".$_POST['email']."')");
  if($comm)
  {
    echo "<script>alert('Successfully Submit')</script>";
  }
  else
  {
    echo "<script>alert('NO')</script>";
    //echo mysqli_error($con);
  }
}
?>


<!-- https://www.templatemonster.com/demo/46213.html#gref -->
    
    <div class="main-content">
      <div id="sliderpro1" class="slider-pro main-slider">
        <div class="sp-slides">
          <div class="sp-slide"> <img class="sp-image" src="assets/media/main-slider/1.jpg"
					data-src="assets/media/main-slider/1.jpg"
					data-retina="assets/media/main-slider/1.jpg" alt="img"/>
            <div class="item-wrap sp-layer  sp-padding" data-horizontal="700" data-vertical="1"
					data-show-transition="left" data-hide-transition="up" data-show-delay="400" data-hide-delay="200">
              <div class="main-slider__inner text-center">
                <div class="main-slider__title" >PURE WATER</div>
                <div class="main-slider__subtitle ">ALL OVER THE HOUSE</div>
                <a class="main-slider__btn btn btn-warning btn-effect" href="contact.php">CONTACT US</a> </div>
            </div>
          </div>
          <div class="sp-slide"> <img class="sp-image" src="assets/media/main-slider/2.jpg"
					data-src="assets/media/main-slider/2.jpg"
					data-retina="assets/media/main-slider/2.jpg" alt="img"/>
            <div class="item-wrap sp-layer  sp-padding" data-horizontal="200" data-vertical="30"
					data-show-transition="left" data-hide-transition="up" data-show-delay="400" data-hide-delay="200">
              <div class="main-slider__inner">
                <div class="main-slider__title" >OUR FILTERS</div>
                <div class="main-slider__subtitle ">MAKE YOUR WATER CLEAN</div>
                <a class="main-slider__btn btn btn-warning btn-effect" href="contact.php">CONTACT US</a> </div>
            </div>
          </div>
        </div>
      </div>
      
      <!-- end main-slider -->
      
      
      <section class="section-default">
        <div class="container">
          <div class="row">
            <div class="col-xs-12">
              <div class="wrap-title">
                <h2 class="ui-title-block">Most <strong>Popular Products</strong></h2>
                <div class="ui-subtitle-block ui-subtitle-block_mod-b">Premium Quality Products with Large Sales and Service Network</div>
              </div>
              <div class="posts-wrap">
                <article class="post post_mod-a clearfix wow zoomIn" data-wow-duration="2s">
                  <div class="entry-media">
                    <div class="entry-thumbnail"> <a href="javascript:void(0);" ><img class="img-responsive" src="assets/media/posts/250x250/1.jpg" width="250" height="250" alt="Foto"/></a> </div>
                    <div class="entry-hover">
                      <!-- <div class="box-comments"> <a href="javascript:void(0);"><i class="icon stroke icon-Message"></i>25</a> <a href="javascript:void(0);"><i class="icon stroke icon-User"></i>65</a> </div> -->
                       </div>
                  </div>
                  <div class="entry-main">
                    <!-- <div class="entry-meta"> <span class="entry-autor"> <span>By </span> <a class="post-link" href="javascript:void(0);">ANS niversity</a> </span> <span class="entry-date"><a href="javascript:void(0);">Dec 16, 2015</a></span> </div> -->
                    <h3 class="entry-title ui-title-inner decor decor_mod-b"><a href="javascript:void(0);">Pureit ultima 10 L RO + UV Water Purifier (Black)</a></h3>
                    <div class="entry-content">
                      <p>•  Type: Electrical & Storage<br>
• Purifying Technology: RO + UV<br>
• Total Capacity: 10 L

</p>
                    </div>
                  </div>
                </article>
                <!-- end post -->
                <article class="post post_mod-a clearfix wow zoomIn" data-wow-duration="2s" data-wow-delay=".5s">
                  <div class="entry-media">
                    <div class="entry-thumbnail"> <a href="javascript:void(0);" ><img class="img-responsive" src="assets/media/posts/250x250/2.jpg" width="250" height="250" alt="Foto"/></a> </div>
                    <div class="entry-hover">
                      <!-- <div class="box-comments"> <a href="javascript:void(0);"><i class="icon stroke icon-Message"></i>25</a> <a href="javascript:void(0);"><i class="icon stroke icon-User"></i>65</a> </div> -->
                       </div>
                  </div>
                  <div class="entry-main">
                    <!-- <div class="entry-meta"> <span class="entry-autor"> <span>By </span> <a class="post-link" href="javascript:void(0);">John Milton</a> </span> <span class="entry-date"><a href="javascript:void(0);">Dec 16, 2015</a></span> </div> -->
                    <h3 class="entry-title ui-title-inner decor decor_mod-b"><a href="javascript:void(0);">AQUA SWIFT CONTROLLER </a></h3>
                    <div class="entry-content">
                      <p>•  Technology: RO+UF+UV<br>
• Storage Capacity: 15 Litre(s)<br>
• Flow Rate: 12 to 15 litres per hour
</p>
                    </div>
                  </div>
                </article>
                <!-- end post -->
                <article class="post post_mod-a clearfix wow zoomIn" data-wow-duration="2s" data-wow-delay="1s">
                  <div class="entry-media">
                    <div class="entry-thumbnail"> <a href="javascript:void(0);" ><img class="img-responsive" src="assets/media/posts/250x250/3.jpg" width="250" height="250" alt="Foto"/></a> </div>
                    <div class="entry-hover">
                      <!-- <div class="box-comments"> <a href="javascript:void(0);"><i class="icon stroke icon-Message"></i>25</a> <a href="javascript:void(0);"><i class="icon stroke icon-User"></i>65</a> </div> -->
                       </div>
                  </div>
                  <div class="entry-main">
                    <!-- <div class="entry-meta"> <span class="entry-autor"> <span>By </span> <a class="post-link" href="javascript:void(0);">ANS niversity</a> </span> <span class="entry-date"><a href="javascript:void(0);">Dec 16, 2015</a></span> </div> -->
                    <h3 class="entry-title ui-title-inner decor decor_mod-b"><a href="javascript:void(0);">Elite Camry White</a></h3>
                    <div class="entry-content">
                      <p>
• High Purification<br>
• Detachable Storage Tank<br>
• World's Top Quality Certifications Available
</p>
                    </div>
                  </div>
                </article>
                <!-- end post -->
                <article class="post post_mod-a clearfix wow zoomIn" data-wow-duration="2s" data-wow-delay="1.5s">
                  <div class="entry-media">
                    <div class="entry-thumbnail"> <a href="javascript:void(0);" ><img class="img-responsive" src="assets/media/posts/250x250/4.jpg" width="250" height="250" alt="Foto"/></a> </div>
                    <div class="entry-hover">
                    <!--   <div class="box-comments"> <a href="javascript:void(0);"><i class="icon stroke icon-Message"></i>25</a> <a href="javascript:void(0);"><i class="icon stroke icon-User"></i>65</a> </div> -->
                       </div>
                  </div>
                  <div class="entry-main">
                    <!-- <div class="entry-meta"> <span class="entry-autor"> <span>By </span> <a class="post-link" href="javascript:void(0);">John Milton</a> </span> <span class="entry-date"><a href="javascript:void(0);">Dec 16, 2015</a></span> </div> -->
                    <h3 class="entry-title ui-title-inner decor decor_mod-b"><a href="javascript:void(0);">Elite kentGrand+</a></h3>
                    <div class="entry-content">
                      <p>•  Save Water Technology || •  High Storage<br>
• Mineral ROTM <br>
• RO + UV / UF 
</p>
                    </div>
                  </div>
                </article>
                <!-- end post --> 
              </div>
              <!-- end posts-wrap --> 
            </div>
            <!-- end col --> 
          </div>
          <!-- end row --> 
        </div>
        <!-- end container --> 
      </section>
      <!-- end section-default -->
      
      
      
      <section class="section-default">
        <div class="container">
          <div class="row">
            <div class="col-xs-12">
              <div class="wrap-title">
                <h2 class="ui-title-block">Spare Parts Of <strong>Water Filter</strong></h2>
                <div class="ui-subtitle-block ui-subtitle-block_mod-b">Premium Quality Spare-Parts with Large Sales and Service Network</div>
              </div>
              <div class="posts-wrap">
                <article class="post post_mod-b clearfix wow zoomIn" data-wow-duration="2s">
                  <div class="entry-media">
                    <div class="entry-thumbnail"> <a href="javascript:void(0);" ><img class="img-responsive" src="assets/media/posts/370x220/1.jpg" width="370" height="220" alt="Foto"/></a> </div>
                  </div>
                  <div class="entry-main">
                    <!-- <div class="entry-meta decor decor_mod-a"> <span class="entry-autor"> <span>By </span> <a class="post-link" href="javascript:void(0);">University of LIMS</a> </span> <span class="entry-links entry-time_mod-a"><i class="icon stroke icon-Agenda"></i>August 25, 2015</span> </div> -->
                    <h3 class="entry-title ui-title-inner"><a href="javascript:void(0);">COMPACT MEMBRANE SYSTEM</a></h3>
                    <div class="entry-content">
                      <p>•Chemical compatibility with all acids & bases<br>
• Low fouling/easy cleaning surface<br>

• Extermely high process rates
</p>
                    </div>
                    <div class="entry-footer"></div>
                  </div>
                </article>
                <!-- end post -->
                
                <article class="post post_mod-b clearfix wow zoomIn" data-wow-duration="2s" data-wow-delay=".5s">
                  <div class="entry-media">
                    <div class="entry-thumbnail"> <a href="javascript:void(0);" ><img class="img-responsive" src="assets/media/posts/370x220/2.jpg" width="370" height="220" alt="Foto"/></a> </div>
                  </div>
                  <div class="entry-main">
                    <!-- <div class="entry-meta decor decor_mod-a"> <span class="entry-autor"> <span>By </span> <a class="post-link" href="javascript:void(0);">University of LIMS</a> </span> <span class="entry-links entry-time_mod-a"><i class="icon stroke icon-Agenda"></i>August 25, 2015</span> </div> -->
                    <h3 class="entry-title ui-title-inner"><a href="javascript:void(0);">RO BOOSTER PUMP</a></h3>
                    <div class="entry-content">
                      <p>• Purification Capacity:12L/hr<br>

• Purification Stage: 4 Stage<br>

• Reverse Osmosis Water Purifier
</p>
                    </div>
                    <div class="entry-footer"></div>
                  </div>
                </article>
                <!-- end post -->
                
                <article class="post post_mod-b clearfix wow zoomIn" data-wow-duration="2s" data-wow-delay="1s">
                  <div class="entry-media">
                    <div class="entry-thumbnail"> <a href="javascript:void(0);" ><img class="img-responsive" src="assets/media/posts/370x220/3.jpg" width="370" height="220" alt="Foto"/></a> </div>
                  </div>
                  <div class="entry-main">
                    <!-- <div class="entry-meta decor decor_mod-a"> <span class="entry-autor"> <span>By </span> <a class="post-link" href="javascript:void(0);">University of LIMS</a> </span> <span class="entry-links entry-time_mod-a"><i class="icon stroke icon-Agenda"></i>August 25, 2015</span> </div> -->
                    <h3 class="entry-title ui-title-inner"><a href="javascript:void(0);">Ro Service Inline Filter set</a></h3>
                    <div class="entry-content">
                      <p>• 100% Quality Sediment Filter<br>
• Complete Inline CARTRIDGE SET for Water Filter<br>
• Accurate Price Calculation
</p>
                    </div>
                    <div class="entry-footer"></div>
                  </div>
                </article>
                <!-- end post --> 
              </div>
              <!-- end posts-wrap --> 
            </div>
            <!-- end col --> 
          </div>
          <!-- end row --> 
        </div>
        <!-- end container --> 
      </section>
      <!-- end section-default -->
      
      <section class="section-video wow fadeInUp" data-wow-duration="2s">
        <div class="container">
          <div class="row">
            <div class="col-xs-12">
              <div class="video-block"> <a class="video-block__link" href="https://www.youtube.com/watch?v=3sMrFipfkVk" rel="prettyPhoto"><i class="icon stroke icon-Play"></i></a>
                <h2 class="video-block__title">Best Water Purifier Brands</h2>
                <div class="video-block__subtitle">Offers modern & innovative water purifiers</div>
              </div>
            </div>
            <!-- end col --> 
          </div>
          <!-- end row --> 
        </div>
        <!-- end container --> 
      </section>
      <!-- end section-video -->
      
      <section class="section-subscribe wow fadeInUp" data-wow-duration="2s">
        <div class="subscribe">
          <div class="container">
            <div class="row">
              <div class="col-sm-6">
                <div class="subscribe__icon-wrap"> <i class="icon_bg stroke icon-Imbox"></i><i class="icon stroke icon-Imbox"></i> </div>
                <div class="subscribe__inner">
                  <h2 class="subscribe__title">STAY UPDATED WITH BAGGA ENTERPRISES</h2>
                  <!-- <div class="subscribe__description"></div> -->
                </div>
              </div>
              <!-- end col -->
              <div class="col-sm-6">
                <form class="subscribe__form" method="post">
                  <input class="subscribe__input form-control" name="email" id="email" type="text" placeholder="Your Email address ...">
                  <button class="subscribe__btn btn btn-success btn-effect" type="submit" name="submit">SUBSCRIBE</button>
                </form>
              </div>
              <!-- end col --> 
            </div>
            <!-- end row --> 
          </div>
          <!-- end container --> 
        </div>
      </section>
      <!-- end section-subscribe -->
      
      
      
      <div class="container">
        <div class="row">
          <div class="col-xs-12">
            <section class="section_mod-b text-center wow fadeInUp" data-wow-duration="2s">
              <h2 class="ui-title-block">For <strong>Bagga Enterprises </strong>Product Service, Repair, Installation & AMC related queries
You can reach us Via Phone, Chat, Email or Call <!-- <strong>Absolutely FREE.</strong> --></h2>
              <!-- <div class="ui-subtitle-block ui-subtitle-block_mod-c">Fusce eleifend donec apien sed phase lusa pellentesque lacus vamus lorem arcu semper duiac rasorn are vamus etiam ind arcu morbi justo mauris tempus pharetra.</div> -->
              <a class="btn btn-primary btn-effect" href="contact.php">Contact Now</a> </section>
            <!-- end section-default --> 
          </div>
          <!-- end col --> 
        </div>
        <!-- end row --> 
      </div>
      <!-- end container --> 
      
    </div>
    <!-- end main-content -->
    
<?php
include("footer.php");
?>
