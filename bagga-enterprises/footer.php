    
<?php
if(isset($_POST["submit2"]))
{
  require("config.php");
  $comm = mysqli_query($con,"insert into contact(name, email, message) values('".$_POST['name']."','".$_POST['email']."','".$_POST['message']."')");
  if($comm)
  {
    echo "<script>alert('Successfully Submit')</script>";
  }
  else
  {
    echo "<script>alert('NO')</script>";
    //echo mysql_error($con);
  }
}
?>



    <footer class="footer wow fadeInUp" data-wow-duration="2s">
      <div class="container">
        <div class="footer-inner border-decor_top">
          <div class="row">
            <div class="col-lg-3 col-sm-3">
              <section class="footer-section">
                <h3 class="footer-title">ABOUT US</h3>
                <!-- <a href="javascript:void(0);"><img class="footer-logo img-responsive" src="assets/img/logo.jpg" height="50" width="195" alt="Logo"></a> -->
                <!-- <div class="footer-info">Bagga Enterprises has reached a great place by manufacturing and supplying quality combinations of Water Solution Products for industrial as well as household purpose. </div> -->
                <div class="footer-contacts footer-contacts_mod-a"> <i class="icon stroke icon-Pointer"></i>
                  <address class="footer-contacts__inner">
                  19, Hoshiarpur Rd <br> Baba Balak Nath Mandir Market<br> KotKishan Chand, Kishanpura <br>Jalandhar, Punjab 144004
                  </address>
                </div>
                <div class="footer-contacts"> <i class="icon stroke icon-Phone2"></i> <span class="footer-contacts__inner">Call us<br> 098771-12411<br>099140-81969</span> </div>
                <div class="footer-contacts"> <i class="icon stroke icon-Mail"></i> <a class="footer-contacts__inner" href="mailto:baggaenterprises@gmail.com">baggaenterprises@gmail.com</a> </div>
              </section>
              <!-- end footer-section --> 
            </div>
            <!-- end col -->
            
            <div class="col-lg-2 col-sm-3">
              <section class="footer-section">
                <h3 class="footer-title">USEFUL LINKS</h3>
                <ul class="footer-list list-unstyled">
                  <li class="footer-list__item"><a class="footer-list__link" href="index.php">Home</a></li>
                  <li class="footer-list__item"><a class="footer-list__link" href="instructors.php?id=1">RO Water Purifiers</a></li>
                  <li class="footer-list__item"><a class="footer-list__link" href="instructors.php?id=2">UV Water Purifiers</a></li>
                  <li class="footer-list__item"><a class="footer-list__link" href="about.php">About</a></li>
                  <li class="footer-list__item"><a class="footer-list__link" href="contact.php">Contact</a></li>
                  <!-- <li class="footer-list__item"><a class="footer-list__link" href="javascript:void(0);">Support & FAQ’s</a></li>
                  <li class="footer-list__item"><a class="footer-list__link" href="javascript:void(0);">Terms & Conditions</a></li>
                  <li class="footer-list__item"><a class="footer-list__link" href="javascript:void(0);">Privacy Policy</a></li> -->
                </ul>
              </section>
              <!-- end footer-section --> 
            </div>
            <!-- end col -->
            
            <div class="col-lg-3 col-sm-3">
              <section class="footer-section">
                <h3 class="footer-title">BAGGA ENTERPRISES</h3>
                Bagga Enterprises has reached a great place by manufacturing and supplying quality combinations of Water Solution Products for industrial as well as household purpose. The wide varieties of our products unified Domestic RO System, Industrial RO System and Water Filtration System are recommended greatly in the general markets.
<!--                 <div class="tweets">
                  <div class="tweets__text">What is the enemy of #creativity?</div>
                  <div><a href="javascript:void(0);">http://enva.to/hVl5G</a></div>
                  <span class="tweets__time">9 hours ago</span> </div>
                <div class="tweets">
                  <div class="tweets__text">An agile framework can produce the type of lean marketing essential for the digital age <a href="javascript:void(0);">@aholmes360 #IMDS15</a></div>
                  <span class="tweets__time">9 hours ago</span> </div>
                <a class="tweets__link" href="javascript:void(0);">Follow @Academica</a> </section>
 -->              <!-- end footer-section --> 
            </div>
            <!-- end col -->
            
            <div class="col-lg-4 col-sm-3">
              <section class="footer-section">
                <h3 class="footer-title">QUICK CONTACT</h3>
                <form class="form" method="post">
                  <div class="form-group">
                    <input class="form-control" name="name" id="name" type="text" placeholder="Your Name">
                    <input class="form-control" name="email" id="email" type="email" placeholder="Email address">
                    <textarea class="form-control" rows="7" name="message" id="message" placeholder="Message"></textarea>
                    <button class="btn btn-primary btn-effect" type="submit" name="submit2">SEND MESSSAGE</button>
                  </div>
                </form>
              </section>
              <!-- end footer-section --> 
            </div>
            <!-- end col --> 
          </div>
          <!-- end row --> 
        </div>
        <!-- end footer-inner -->
        
        <div class="row">
          <div class="col-xs-12">
            <div class="footer-bottom">
              <div class="copyright">Copyright © 2017 <a href="javascript:void(0);">Bagga Enterprises</a>, |  Created by <a href="javascript:void(0);">Anku</a></div>
              <ul class="social-links list-unstyled">
                <li><a class="icon fa fa-facebook" href="javascript:void(0);"></a></li>
                <li><a class="icon fa fa-twitter" href="javascript:void(0);"></a></li>
                <li><a class="icon fa fa-google-plus" href="javascript:void(0);"></a></li>
                <li><a class="icon fa fa-instagram" href="javascript:void(0);"></a></li>
                <li><a class="icon fa fa-linkedin" href="javascript:void(0);"></a></li>
                <li><a class="icon fa fa-youtube-play" href="javascript:void(0);"></a></li>
              </ul>
            </div>
            <!-- end footer-bottom --> 
          </div>
          <!-- end col --> 
        </div>
        <!-- end row --> 
      </div>
      <!-- end container --> 
    </footer>
  </div>
  <!-- end wrapper --> 
</div>
<!-- end layout-theme --> 

<!-- SCRIPTS --> 
<script src="assets/js/jquery-migrate-1.2.1.js"></script>
<script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script> 
<script src="assets/js/modernizr.custom.js"></script> 
<script src="assets/js/waypoints.min.js"></script> 
<script src="../../cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script> 

<!--THEME--> 
<script  src="assets/plugins/sliderpro/js/jquery.sliderPro.min.js"></script> 
<script src="assets/plugins/owl-carousel/owl.carousel.min.js"></script> 
<script src="assets/plugins/isotope/jquery.isotope.min.js"></script> 
<script src="assets/plugins/prettyphoto/js/jquery.prettyPhoto.js"></script> 
<script src="assets/plugins/datetimepicker/jquery.datetimepicker.js"></script> 
<script src="assets/plugins/jelect/jquery.jelect.js"></script> 
<script src="assets/plugins/rendro-easy-pie-chart/dist/jquery.easypiechart.min.js"></script> 
<script src="assets/js/cssua.min.js"></script> 
<script src="assets/js/wow.min.js"></script> 
<script src="assets/js/custom.min.js"></script> 

<!--COLOR SWITCHER --> 
<script src="assets/plugins/switcher/js/bootstrap-select.js"></script> 
<script src="assets/plugins/switcher/js/dmss.js"></script>
</body>

<!-- Mirrored from html.templines.com/academica/home-1.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 23 May 2017 17:29:35 GMT -->
</html>