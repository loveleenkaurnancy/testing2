<?php
session_start();
@$id=$_SESSION['userid'];
?>


<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from html.templines.com/academica/home-1.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 23 May 2017 17:29:06 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimal-ui">
<title>Bagga Enterprises </title>
<link href="favicon2.jpg" type="image/x-icon" rel="shortcut icon">
<link href="assets/css/master.css" rel="stylesheet">
<!-- SWITCHER -->
<link href="assets/plugins/switcher/css/switcher.css" rel="stylesheet" id="switcher-css" media="all">
<link href="assets/plugins/switcher/css/color1.css" rel="alternate stylesheet" title="color1" media="all">
<link href="assets/plugins/switcher/css/color2.css" rel="alternate stylesheet" title="color2" media="all">
<link href="assets/plugins/switcher/css/color3.css" rel="alternate stylesheet" title="color3" media="all">
<link href="assets/plugins/switcher/css/color4.css" rel="alternate stylesheet" title="color4" media="all">
<link href="assets/plugins/switcher/css/color5.css" rel="alternate stylesheet" title="color5" media="all">



<script src="assets/plugins/jquery/jquery-1.11.3.min.js"></script>
</head>

<body>

<!-- Loader -->
<div id="page-preloader"><span class="spinner"></span></div>
<!-- Loader end -->

<div class="layout-theme animated-css"  data-header="sticky" data-header-top="200"> 
  
  <!-- Start Switcher -->
  <div class="switcher-wrapper">
    <div class="demo_changer">
      <div class="demo-icon customBgColor"><i class="fa fa-cog fa-spin fa-2x"></i></div>
      <div class="form_holder">
        <div class="row">
          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="predefined_styles">
              <div class="skin-theme-switcher">
                <h4>Color</h4>
                <a href="javascript:void(0);" data-switchcolor="color1" class="styleswitch" style="background-color:#fe5656;"> </a> <a href="javascript:void(0);" data-switchcolor="color2" class="styleswitch" style="background-color:#4fb0fd;"> </a> <a href="javascript:void(0);" data-switchcolor="color3" class="styleswitch" style="background-color:#ffc73c;"> </a> <a href="javascript:void(0);" data-switchcolor="color4" class="styleswitch" style="background-color:#ff8300;"> </a> <a href="javascript:void(0);" data-switchcolor="color5" class="styleswitch" style="background-color:#02cc8b;"> </a> </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- End Switcher -->
  
  <div id="wrapper"> 
    
    <!-- HEADER -->
    <header class="header">
      <div class="top-header">
        <div class="container">
          <div class="row">
            <div class="col-xs-12">
              <div class="top-header__contacts"><i class="icon stroke icon-Phone2"></i>+91-98771-12411</div>
              <div class="top-header__contacts"><i class="icon stroke icon-Mail"></i><a href="mailto:Info@academica.com">baggaenterprises@gmail.com</a></div>
              <div class="top-header__link">
                <button class="btn-header btn-effect">House of Purity</button>
                <span>Protect your Family with <b>The Most Certified RO Purifier</b></span> </div>
              <div class="header-login">
              <?php
              if($id=="")
              {?>
                            <a class="header-login__item" href="login.php">
                              <i class="icon stroke icon-User">
                              </i>Log In
                            </a>
                            <a class="header-login__item" href="registration.php">Register</a>

              <?php
              }else
              {
              ?>
                           <a class="header-login__item" href="logout.php">Logout</a>
                            
              <?php
              }?>
               <!--  <a class="header-login__item" href="login.php">
                  <i class="icon stroke icon-User">
                  </i>Log In
                </a>
                <a class="header-login__item" href="registration.php">Register</a> -->
              </div>
            </div>
            <!-- end col  --> 
          </div>
          <!-- end row  --> 
        </div>
        <!-- end container  --> 
      </div>
      <!-- end top-header  -->
      
      <div class="container">
        <div class="row">
          <div class="col-xs-12">  <a class="header-logo" href="javascript:void(0);"><img class="header-logo__img" src="assets/img/logo.jpg" height="50" width="195" alt="Logo"></a>

            <div class="header-inner">
              <div class="header-search">
                <div class="navbar-search">
                  <form id="search-global-form">
                    <div class="input-group">
                      <input type="text" placeholder="Type your search..." class="form-control" autocomplete="off" name="s" id="search" value="">
                      <span class="input-group-btn">
                      <button type="reset" class="btn search-close" id="search-close"><i class="fa fa-times"></i></button>
                      </span> </div>
                  </form>
                </div>
              </div>

                <nav class="navbar yamm">
                <div class="navbar-header hidden-md  hidden-lg  hidden-sm ">
                  <button type="button" data-toggle="collapse" data-target="#navbar-collapse-1" class="navbar-toggle"><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
                </div>
                <div id="navbar-collapse-1" class="navbar-collapse collapse">
                  <ul class="nav navbar-nav">
                    <li class="dropdown"><a href="index.php">Home<!-- <span class="nav-subtitle">OUR World</span> --></a>

                    </li>
                    <li class="dropdown"> <a href="#">Water Purifiers<!-- <span class="nav-subtitle">What We Offers</span> --></a>
                      <ul role="menu" class="dropdown-menu">
                        <li><a href="instructors.php?id=1">RO Water Purifiers</a></li>

                        <li><a href="instructors.php?id=2">UV Water Purifiers</a></li>

                       
                      </ul>
                    </li>
                    <li class="dropdown"> <a href="javascript:void(0);">Spare Part<!-- <span class="nav-subtitle">Information</span> --></a>
                      <ul role="menu" class="dropdown-menu">
                        <li><a href="instructors.php?id=10">Membrane</a> </li>
                        <li><a href="instructors.php?id=8">Pump</a> </li>
                        <li><a href="instructors.php?id=3">Adopter</a> </li>
                        <li><a href="instructors.php?id=4">UV Chambers</a> </li>
                          <li><a href="instructors.php?id=5">Uv Choke</a> </li>
                          <li><a href="instructors.php?id=6">Uv Tube</a> </li>
                          <li><a href="instructors.php?id=7">Ro Sv</a> </li>
                          <li><a href="instructors.php?id=9">Membrane Housing</a> </li>
                          <li><a href="instructors.php?id=11">Inline Filter</a> </li>
                          <li><a href="instructors.php?id=12">Body</a> </li>

                      </ul>
                    </li>

                    <!--<li><a href="contact.html">Services<!-- <span class="nav-subtitle">say us hi</span> </a></li>-->

                    <li><a href="about.php">About<!-- <span class="nav-subtitle">say us hi</span> --></a></li>


                    <li><a href="contact.php">Contact<!-- <span class="nav-subtitle">say us hi</span> --></a></li>
                  </ul>
                </div>
              </nav>
              <!--end navbar --> 
              
            </div>
            <!-- end header-inner --> 
          </div>
          <!-- end col  --> 
        </div>
        <!-- end row  --> 
      </div>
      <!-- end container--> 
    </header>
    <!-- end header -->