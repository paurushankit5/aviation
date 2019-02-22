<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <title>@yield('title')</title>
  <meta name="keywords" content="@yield('meta_keywords')">
  <meta name="description" content="@yield('meta_description')">

  
  <!-- mobile responsive meta -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  
  <!-- Slick Carousel -->
  <link rel="stylesheet" href="{{ asset('front/plugins/slick/slick.css') }}">
  <link rel="stylesheet" href="{{ asset('front/plugins/slick/slick-theme.css') }}">
  <!-- FancyBox -->
  <link rel="stylesheet" href="{{ asset('front/plugins/fancybox/jquery.fancybox.min.css') }}">
  
  <!-- Stylesheets -->
  <link href="{{ asset('front/css/style.css') }}" rel="stylesheet">
  
  <!--Favicon-->
  <link rel="shortcut icon" href="{{ asset('front/images/favicon.ico') }}" type="image/x-icon">
  <link rel="icon" href="{{ asset('front/images/favicon.ico') }}" type="image/x-icon">

</head>


<body>
  <div class="page-wrapper">
    <!-- Preloader -->
    <!-- <div class="preloader"></div> -->
    <!-- Preloader -->

  

<!--header top-->
<!-- <div class="header-top">
      <div class="container clearfix">
            <div class="top-left">
                  <h6>Opening Hours : Saturday to Tuesday - 8am to 10pm</h6>
            </div>
            <div class="top-right">
                  <ul class="social-links">
                        <li>
                              <a href="#">
                                    <i class="fa fa-facebook" aria-hidden="true"></i>
                              </a>
                        </li>
                        <li>
                              <a href="#">
                                    <i class="fa fa-twitter" aria-hidden="true"></i>
                              </a>
                        </li>
                        <li>
                              <a href="#">
                                    <i class="fa fa-google-plus" aria-hidden="true"></i>
                              </a>
                        </li>
                        <li>
                              <a href="#">
                                    <i class="fa fa-instagram" aria-hidden="true"></i>
                              </a>
                        </li>
                        <li>
                              <a href="#">
                                    <i class="fa fa-pinterest-p" aria-hidden="true"></i>
                              </a>
                        </li>
                  </ul>
            </div>
      </div>
</div> -->
<!--header top-->

<!--Header Upper-->
<section class="header-uper">
      <div class="container clearfix">
            <div class="logo">
                  <figure>
                        <a href="/">
                              <!-- <img src="{{ asset('front/images/logo.png') }}" alt="" width="130"> -->
                              <span class="span-1">Blue Hadal Aviation Dreams</span>
                        </a>
                  </figure>
            </div>
            <div class="right-side">
                  <ul class="contact-info">
                        <li class="item">
                              <div class="icon-box">
                                    <i class="fa fa-envelope-o"></i>
                              </div>
                              <strong>Email</strong>
                              <br>
                              <a href="mailto:bluehadaldehradun@gmail.com">
                                    <span>bluehadaldehradun@gmail.com</span>
                              </a>
                        </li>
                        <li class="item">
                              <div class="icon-box">
                                    <i class="fa fa-phone"></i>
                              </div>
                              <strong>Call Us Now</strong>
                              <br>
                              <span>+91-8394012943</span>
                              <br>
                              <span>+91-9412017116</span>
                        </li>
                        <li class="item">
                              <div class="icon-box">
                                    <i class="fa fa-map-marker"></i>
                              </div>
                              <strong>City</strong>
                              <br>
                              <span>Dehradun</span>
                        </li>
                  </ul>
                  <!-- <div class="link-btn">
                        <a href="#" class="btn-style-one">Appoinment</a>
                  </div> -->
            </div>
      </div>
</section>
<!--Header Upper-->


<!--Main Header-->
<nav class="navbar navbar-default">
      <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"
                        aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                  </button>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                  <ul class="nav navbar-nav">
                        <li>
                              <a href="/">Home</a>
                        </li>
                        <li>
                              <a href="/services">Services</a>
                        </li>
                        <li>
                              <a href="/about-us">About Us</a>
                        </li>                        
                        <li>
                              <a href="/gallery">Gallery</a>
                        </li>
                        <li>
                              <a href="/testimonials">Testimonials</a>
                        </li>
                        <li>
                              <a href="/contact-us">Contact US</a>
                        </li>
                        <!-- <li class="dropdown">
                              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown
                                    <span class="caret"></span>
                              </a>
                              <ul class="dropdown-menu">
                                    <li>
                                          <a href="#">Action</a>
                                    </li>
                                    <li>
                                          <a href="#">Another action</a>
                                    </li>
                                    <li>
                                          <a href="#">Something else here</a>
                                    </li>
                                    <li role="separator" class="divider"></li>
                                    <li>
                                          <a href="#">Separated link</a>
                                    </li>
                                    <li role="separator" class="divider"></li>
                                    <li>
                                          <a href="#">One more separated link</a>
                                    </li>
                              </ul>
                        </li> -->
                  </ul>
            </div>
            <!-- /.navbar-collapse -->
      </div>
      <!-- /.container-fluid -->
</nav>

@yield('content')

<footer class="footer-main">
  <div class="footer-top">
    <div class="container">
      <div class="row">
        <div class="col-md-4 col-sm-6 col-xs-12">
          <div class="about-widget">
            <!-- <div class="footer-logo">
              <figure>
                <a href="index.html">
                  <img src="{{ asset('front/images/logo-2.png') }}" alt="">
                </a>
              </figure>
            </div> -->
            <p>Ground Floor, Ghanshala Dental Care,</p>
            <p> Chakrata Road,Near Ballupur Chowk </p>
            <ul class="location-link">
              <li class="item">
                <i class="fa fa-map-marker"></i>
                <p>Dehradun, Uttarakhand, India- 248001</p>
              </li>
              <li class="item">
                <i class="fa fa-envelope-o" aria-hidden="true"></i>
                <a href="#">
                  <p>bluehadaldehradun@gmail.com</p>
                </a>
              </li>
              <li class="item">
                <i class="fa fa-phone" aria-hidden="true"></i>
                <p>+91-8394012943</p>
                <p>+91-9412017116</p>
              </li>
            </ul>
            <!-- <ul class="list-inline social-icons">
              <li><a href="#"><i class="fa fa-facebook"></i></a></li>
              <li><a href="#"><i class="fa fa-twitter"></i></a></li>
              <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
              <li><a href="#"><i class="fa fa-vimeo"></i></a></li>
            </ul> -->
          </div>
        </div>
        <div class="col-md-4 col-sm-6 col-xs-12">
          <h6>Services</h6>
          <ul class="menu-link">
            <li>
              <a href="/services#diploma-courses">
                <i class="fa fa-angle-right" aria-hidden="true"></i>Diploma Courses</a>
            </li>
            <li>
              <a href="/services#pg-diploma">
                <i class="fa fa-angle-right" aria-hidden="true"></i>PG Diploma Courses</a>
            </li>
            <li>
              <a href="/services#certification-courses">
                <i class="fa fa-angle-right" aria-hidden="true"></i>Certification Courses</a>
            </li>
            <li>
              <a href="/services#expert-advice">
                <i class="fa fa-angle-right" aria-hidden="true"></i>Expert Advice</a>
            </li>
          </ul>
        </div>
        <div class="col-md-4 col-sm-6 col-xs-12">
          <h6>Custom Links</h6>
          <ul class="menu-link">
            <li>
              <a href="/">
                <i class="fa fa-angle-right" aria-hidden="true"></i>Home</a>
            </li>
            <li>
              <a href="/about-us">
                <i class="fa fa-angle-right" aria-hidden="true"></i>About Us</a>
            </li>
            <li>
              <a href="/gallery">
                <i class="fa fa-angle-right" aria-hidden="true"></i>Gallery</a>
            </li>
            <li>
              <a href="/testimonials">
                <i class="fa fa-angle-right" aria-hidden="true"></i>Testimonials</a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <div class="footer-bottom">
    <div class="container clearfix">
      <div class="copyright-text">
        <p>&copy; Copyright 2019. All Rights Reserved by
          <a href="" target="_blank">Digital Bharat</a>
        </p>
      </div>
      <ul class="footer-bottom-link">
        <li>
          <a href="/">Home</a>
        </li>
        <li>
          <a href="/about-us">About</a>
        </li>
        <li>
          <a href="/contact-us">Contact</a>
        </li>
      </ul>
    </div>
  </div>
</footer>
<!--End footer-main-->

</div>
<!--End pagewrapper-->


<!--Scroll to top-->
<div class="scroll-to-top scroll-to-target" data-target=".header-top">
  <span class="icon fa fa-angle-up"></span>
</div>

<script src="{{ asset('front/plugins/jquery.js') }}"></script>
<script src="{{ asset('front/plugins/bootstrap.min.js') }}"></script>
<script src="{{ asset('front/plugins/bootstrap-select.min.js') }}"></script>
<!-- Slick Slider -->
<script src="{{ asset('front/plugins/slick/slick.min.js') }}"></script>
<!-- FancyBox -->
<script src="{{ asset('front/plugins/fancybox/jquery.fancybox.min.js') }}"></script>
<!-- Google Map -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCC72vZw-6tGqFyRhhg5CkF2fqfILn2Tsw"></script>
<script src="{{ asset('front/plugins/google-map/gmap.js') }}"></script>

<script src="{{ asset('front/plugins/validate.js') }}"></script>
<script src="{{ asset('front/plugins/wow.js') }}"></script>
<script src="{{ asset('front/plugins/jquery-ui.js') }}"></script>
<script src="{{ asset('front/plugins/timePicker.js') }}"></script>
<script src="{{ asset('front/js/script.js') }}"></script>
</body>

</html>

