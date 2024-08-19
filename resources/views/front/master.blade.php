<!doctype html>
<html class="no-js" lang="zxx">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    {{--  --}}
    <link rel="apple-touch-icon" sizes="180x180" href="{{asset('favicon/apple-touch-icon.png')}}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{asset('favicon/favicon-32x32.png')}}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('favicon/favicon-16x16.png')}}">
    <link rel="manifest" href="{{asset('favicon/site.webmanifest')}}">
    {{--  --}}
    <!--Title-->
    <title>DCLK - Church HTML5 Template</title>
    <!-- CSS -->
    <!-- Bootstrap -->
    <link rel="stylesheet" href="{{asset('theme/css/bootstrap.min.css')}}">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{asset('theme/css/font-awesome.min.css')}}">
    <!-- Simple Line Icons -->
    <link rel="stylesheet" href="{{asset('theme/css/simple-line-icons.min.css')}}">
    <!-- Themify Icons -->
    <link rel="stylesheet" href="{{asset('theme/css/themify-icons.css')}}">
    <!-- Owl Slider -->
    <link rel="stylesheet" href="{{asset('theme/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('theme/css/owl.theme.default.min.css')}}">
    <!-- Magnific Popup -->
    <link rel="stylesheet" href="{{asset('theme/css/magnific-popup.css')}}">
    <!-- Revolution Slider -->
    <link rel="stylesheet" type="text/css" href="{{asset('theme/rs-plugin/fonts/pe-icon-7-stroke/css/pe-icon-7-stroke.css')}}">
    <!-- REVOLUTION STYLE SHEETS -->
    <link rel="stylesheet" type="text/css" href="{{asset('theme/rs-plugin/css/settings.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('theme/rs-plugin/css/main-slider/rs6.css')}}">
    <!-- Color Panel -->
    <link href="{{asset('theme/css/color_panel.css')}}" rel="stylesheet" type="text/css" />
    <!-- Color Panel -->
    <link href="{{asset('theme/css/color_panel.css')}}" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="{{asset('theme/css/color-schemes/red.css')}}" id="changeable-colors">
    <!-- Main Style -->
    <link rel="stylesheet" href="{{asset('theme/css/style.css')}}" class="main-style">
    <style>
      #rev_slider_6_1_wrapper .tp-loader.spinner1 {
        background-color: #FFFFFF !important;
      }
    </style>
    <style>
      .rs-layer.Concept-Content a,
      .rs-layer.Concept-Content a:visited {
        color: #fff !important;
        border-bottom: 1px solid #fff !important;
        font-weight: 700 !important
      }

      .rs-layer.Concept-Content a:hover {
        border-bottom: 1px solid transparent !important
      }

      .rs-layer.Concept-Content-Dark a,
      .rs-layer.Concept-Content-Dark a:visited {
        color: #000 !important;
        border-bottom: 1px solid #000 !important;
        font-weight: 700 !important
      }

      .rs-layer.Concept-Content-Dark a:hover {
        border-bottom: 1px solid transparent !important
      }

      @media only screen and (max-width:575px) {
        rs-layer.res-slide-btn {
          padding: 7px 16px !important;
          font-size: 13px !important
        }
      }

      #rev_slider_1_1_wrapper .zeus.tparrows {
        cursor: pointer;
        min-width: 60px;
        min-height: 60px;
        position: absolute;
        display: block;
        z-index: 1000;
        border-radius: 50%;
        overflow: hidden;
        background: rgba(0, 0, 0, 0.38)
      }

      #rev_slider_1_1_wrapper .zeus.tparrows:before {
        font-family: 'revicons';
        font-size: 17px;
        color: #ffffff;
        display: block;
        line-height: 60px;
        text-align: center;
        z-index: 2;
        position: relative
      }

      #rev_slider_1_1_wrapper .zeus.tparrows.tp-leftarrow:before {
        content: '\e824'
      }

      #rev_slider_1_1_wrapper .zeus.tparrows.tp-rightarrow:before {
        content: '\e825'
      }

      #rev_slider_1_1_wrapper .zeus .tp-title-wrap {
        background: rgba(0, 0, 0, 0.5);
        width: 100%;
        height: 100%;
        top: 0px;
        left: 0px;
        position: absolute;
        opacity: 0;
        transform: scale(0);
        -webkit-transform: scale(0);
        transition: all 0.3s;
        -webkit-transition: all 0.3s;
        -moz-transition: all 0.3s;
        border-radius: 50%
      }

      #rev_slider_1_1_wrapper .zeus .tp-arr-imgholder {
        width: 100%;
        height: 100%;
        position: absolute;
        top: 0px;
        left: 0px;
        background-position: center center;
        background-size: cover;
        border-radius: 50%;
        transform: translatex(-100%);
        -webkit-transform: translatex(-100%);
        transition: all 0.3s;
        -webkit-transition: all 0.3s;
        -moz-transition: all 0.3s
      }

      #rev_slider_1_1_wrapper .zeus.tp-rightarrow .tp-arr-imgholder {
        transform: translatex(100%);
        -webkit-transform: translatex(100%)
      }

      #rev_slider_1_1_wrapper .zeus.tparrows.rs-touchhover .tp-arr-imgholder {
        transform: translatex(0);
        -webkit-transform: translatex(0);
        opacity: 1
      }

      #rev_slider_1_1_wrapper .zeus.tparrows.rs-touchhover .tp-title-wrap {
        transform: scale(1);
        -webkit-transform: scale(1);
        opacity: 1
      }

      #rev_slider_1_1[data-slideactive="rs-1"] .zeus.tparrows {
        min-width: 60px !important;
        min-height: 60px !important;
        background: rgba(0, 0, 0, 0.38) !important
      }

      #rev_slider_1_1[data-slideactive="rs-1"] .zeus.tparrows:before {
        line-height: 60px !important;
        font-size: 17px !important
      }

      #rev_slider_1_1[data-slideactive="rs-2"] .zeus.tparrows {
        min-width: 60px !important;
        min-height: 60px !important;
        background: rgba(0, 0, 0, 0.38) !important
      }

      #rev_slider_1_1[data-slideactive="rs-2"] .zeus.tparrows:before {
        line-height: 60px !important;
        color: #ffffff !important;
        font-size: 17px !important
      }

      #rev_slider_1_1[data-slideactive="rs-3"] .zeus.tparrows {
        min-width: 60px !important;
        min-height: 60px !important;
        background: rgba(0, 0, 0, 0.38) !important
      }

      #rev_slider_1_1[data-slideactive="rs-3"] .zeus.tparrows:before {
        line-height: 60px !important;
        font-size: 17px !important
      }
    </style>
  </head>
  <!--Body Start-->
  <body data-res-from="1025">
    <!--Page Loader-->
    <div class="page-loader"></div>
    <!--Zmm Wrapper-->
    <div class="zmm-wrapper">
      <a href="#" class="zmm-close close"></a>
      <div class="zmm-inner bg-white typo-dark">
        <div class="text-center mobile-logo-part margin-bottom-30">
          <a href="index.html" class="img-before">
            <img src="{{asset('theme/images/logo-dark.png')}}" class="img-fluid changeable-dark" width="170" height="51" alt="Logo">
          </a>
        </div>
        <div class="zmm-main-nav"></div>
        <div class="search-form-wrapper margin-top-30">
          <form class="search-form" role="search">
            <div class="input-group add-on">
              <input class="form-control" placeholder="Search for.." name="srch-term" type="text">
              <div class="input-group-btn">
                <button class="btn btn-default search-btn" type="submit">
                  <i class="ti-arrow-right"></i>
                </button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
    <!-- Overlay Search -->
    <div class="overlay-search text-center hide">
      <a href="#" class="close close-light overlay-search-close"></a>
      <div class="search-form-wrapper">
        <form class="navbar-form search-form sliding-search-form" role="search">
          <div class="input-group add-on">
            <input class="form-control" placeholder="Search for.." name="srch-term" type="text">
            <div class="input-group-btn">
              <button class="btn btn-default search-btn" type="submit">
                <i class="ti-arrow-right"></i>
              </button>
            </div>
          </div>
        </form>
      </div>
    </div>
     {{--  --}}
     @yield('content')
     {{--  --}}
    <!-- Footer -->
    <footer id="footer" class="footer footer-1 footer-bg-img" data-bg="images/bg/footer-bg.jpg')}}">
      <!--Footer Widgets Columns Posibilities 4-->
      <div class="footer-widgets">
        <div class="footer-middle-wrap footer-overlay-dark">
          <div class="color-overlay"></div>
          <div class="container">
            <div class="row">
              <div class="col-lg-3 widget text-widget">
                <div class="widget-title">
                  <!-- Title -->
                  <h3 class="title typo-white">About DCLK</h3>
                </div>
                <!-- Text -->
                <div class="widget-text margin-bottom-30">
                  <p>DCLK Church WordPress Theme is professionaly designed for non-profit church, modern church, prayer group, Christian, charity, non-profit organization. Grab it soon!</p>
                </div>
                <div class="social-icons">
                  <a href="#" class="social-fb">
                    <span class="ti-facebook"></span>
                  </a>
                  <a href="#" class="social-twitter">
                    <span class="ti-twitter"></span>
                  </a>
                  <a href="#" class="social-instagram">
                    <span class="ti-instagram"></span>
                  </a>

                  <a href="#" class="social-youtube">
                    <span class="ti-youtube"></span>
                  </a>
                </div>
              </div>
              <!-- Col -->
              <div class="col-lg-3 widget text-widget">
                <div class="widget-title">
                  <!-- Title -->
                  <h3 class="title typo-white">Quick Links</h3>
                </div>
                <!-- Text -->
                <div class="menu-quick-links">
                  <ul class="menu">
                    <li class="menu-item">
                      <a href="#">Who We Are?</a>
                    </li>
                    <li class="menu-item">
                      <a href="#">Support and FAQ’s</a>
                    </li>
                    <li class="menu-item">
                      <a href="#">Payments</a>
                    </li>
                    <li class="menu-item">
                      <a href="#">Donations Terms</a>
                    </li>
                    <li class="menu-item">
                      <a href="#">Volunteer</a>
                    </li>
                  </ul>
                </div>
              </div>
              <!-- Col -->
              <div class="col-lg-3 widget recent-posts">
                <div class="widget-title">
                  <!-- Title -->
                  <h3 class="title typo-white">Latest News</h3>
                </div>
                <nav>
                  <ul class="footer-list-posts">
                    <!-- List Items -->
                    <li>
                      <div class="side-image">
                        <a href="blog-single.html">
                          <img width="80" height="80" src="{{asset('theme/images/blog/thumb/blog_thumb1-80x80.jpg')}}" class="img-responsive wp-post-image" alt="Blog">
                        </a>
                      </div>
                      <div class="side-item-text">
                        <a href="blog-single.html">Giving Back – Uganda Training Centers</a>
                        <span class="post-date d-block">Oct 21, 2019</span>
                      </div>
                    </li>
                    <li>
                      <div class="side-image">
                        <a href="blog-single.html">
                          <img width="80" height="80" src="{{asset('theme/images/blog/thumb/blog_thumb2-80x80.jpg')}}" class="img-responsive wp-post-image" alt="Blog">
                        </a>
                      </div>
                      <div class="side-item-text">
                        <a href="blog-single.html">Spirit Of The Lord Is, From The New Life</a>
                        <span class="post-date d-block">Oct 21, 2019</span>
                      </div>
                    </li>
                  </ul>
                </nav>
              </div>
              <!-- Col -->
              <div class="col-lg-3 widget contact-info-widget">
                <div class="widget-title">
                  <!-- Title -->
                  <h3 class="title typo-white">Newsletter</h3>
                </div>
                <p>Sign up for our weekly newsletter to stay updated on all news and events at DCLK Church. Email updates on new product Announcements, Gift Ideas, Special Promotions and More.</p>
                <div class="mailchimp-widget-wrap">
                  <!-- subscribe form -->
                  <form id="subscribe-form-1" class="subscribe-form" action="inc/function.php">
                    <div class="input-group add-on">
                      <input type="text" class="form-control" name="mcemail" autocomplete="off" id="mcemail-1" placeholder="Email Address">
                      <div class="input-group-btn">
                        <button class="btn btn-default subscribe-btn" type="submit">Sign Up</button>
                      </div>
                    </div>
                    <p class="subscribe-status-msg hide"></p>
                  </form>
                </div>
              </div>
              <!-- Col -->
            </div>
          </div>
        </div>
      </div>
      <!--Footer Copyright Columns Posibilities 4-->
      <div class="footer-copyright">
        <div class="footer-bottom-wrap pad-tb-20 typo-white">
          <div class="container">
            <div class="row">
              <div class="col-md-12">
                <ul class="footer-bottom-items pull-left">
                  <li class="nav-item">
                    <div class="nav-item-inner"> Copyrights © <script>
                        document.write(new Date().getFullYear())
                      </script>
                      <a href="#"> Delivence Church Lower Kabete All Rights Reserved</a> | Powered by <a href="https://github.com/rcc-dcc">DCLK Media</a>
                    </div>
                  </li>
                </ul>
                <ul class="footer-bottom-items footer-menu pull-right">
                  <li class="nav-item">
                    <a href="#">Privacy</a>
                  </li>
                  <li class="nav-item">
                    <a href="#">Sermons</a>
                  </li>
                  <li class="nav-item">
                    <a href="#">Contact Us</a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </footer>
    <!-- Footer -->
    <!-- Color Switcher -->
    <div id="theme-panel" class="close-theme-panel">
      <!--Panel Button -->
      <a class="panel-button">
        <i class="fa  fa-life-ring"></i>
      </a>
      <div class="segment">
        <h4 class="condensed semibold uppercase no-margin no-padding">Color Switcher</h4>
      </div>
      <!-- Colors -->
      <div class="segment">
        <a title="blue" class="switcher blue-bg"></a>
        <a title="asphalt" class="switcher asphalt-bg"></a>
        <a title="green" class="switcher green-bg"></a>
        <a title="orange" class="switcher orange-bg"></a>
        <a title="purple" class="switcher purple-bg"></a>
        <a title="red" class="switcher red-bg"></a>
        <a title="s-green" class="switcher s-green-bg"></a>
        <a title="s-blue" class="switcher s-blue-bg"></a>
        <a title="gray" class="switcher gray-bg"></a>
        <a title="p-green" class="switcher p-green-bg"></a>
      </div>
    </div>
    <!-- End Color Switcher -->
    <!-- jQuery Lib -->
    <script src="{{asset('theme/js/jquery.min.js')}}"></script>
    <!-- Bootstrap Js -->
    <script src="{{asset('theme/js/bootstrap.bundle.min.js')}}"></script>
    <!-- Easing Js -->
    <script src="{{asset('theme/js/jquery.easing.min.js')}}"></script>
    <!-- Carousel Js Code -->
    <script src="{{asset('theme/js/owl.carousel.min.js')}}"></script>
    <!-- Paroller Js -->
    <script src="{{asset('theme/js/jquery.paroller.min.js')}}"></script>
    <!-- Isotope Js -->
    <script src="{{asset('theme/js/isotope.pkgd.min.js')}}"></script>
    <!-- Magnific Popup Js -->
    <script src="{{asset('theme/js/jquery.magnific-popup.min.js')}}"></script>
    <!-- Validator Js -->
    <script src="{{asset('theme/js/validator.min.js')}}"></script>
    <!-- Smart Resize Js -->
    <script src="{{asset('theme/js/smartresize.min.js')}}"></script>
    <!-- Appear Js -->
    <script src="{{asset('theme/js/jquery.appear.min.js')}}"></script>
    <!-- Theme Custom Js -->
    <script src="{{asset('theme/js/custom.js')}}"></script>
    <!-- REVOLUTION JS FILES -->
    <script src="{{asset('theme/rs-plugin/js/jquery.themepunch.tools.min.js')}}"></script>
    <script src="{{asset('theme/rs-plugin/js/jquery.themepunch.revolution.min.js')}}"></script>
    <!-- SLIDER REVOLUTION 5.0 EXTENSIONS  (Load Extensions only on Local File Systems !  The following part can be removed on Server for On Demand Loading) -->
    <script src="{{asset('theme/rs-plugin/js/main-slider/rbtools.min.js')}}"></script>
    <script src="{{asset('theme/rs-plugin/js/main-slider/rs6.min.js')}}"></script>
    <script src="{{asset('theme/rs-plugin/js/main-slider/home-1.js')}}"></script>
    <!-- Color -->
    <script src="{{asset('theme/js/color-panel.js')}}"></script>
  </body>
  <!-- Body End -->
  <!-- Body End -->
</html>
