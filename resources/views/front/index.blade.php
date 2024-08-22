@extends('front.master')

@section('content')
<!-- Main wrapper-->
<div class="page-wrapper">
    <div class="page-wrapper-inner">
      <header>
        <!--Mobile Header-->
        <div class="mobile-header bg-white typo-dark">
          <div class="mobile-header-inner">
            <div class="sticky-outer">
              <div class="sticky-head">
                <div class="basic-container clearfix">
                  <ul class="nav mobile-header-items pull-left">
                    <li class="nav-item">
                      <a href="#" class="zmm-toggle img-before">
                        <i class="ti-menu"></i>
                      </a>
                    </li>
                  </ul>
                  <ul class="nav mobile-header-items pull-center">
                    <li>
                      <a href="{{url('/')}}" class="img-before">
                        <img src="{{asset('uploads/logo.png')}}" class="img-fluid changeable-dark" style="height:65px" alt="Deliverance Church Lower Kabete">
                      </a>
                    </li>
                  </ul>
                  <ul class="nav mobile-header-items pull-right">
                    <li class="nav-item">
                      <a href="#" class="img-before overlay-search-switch">
                        <i class="icon-magnifier icons"></i>
                      </a>
                    </li>
                  </ul>
                </div>
                <!-- .basic-container -->
              </div>
              <!-- .sticky-head -->
            </div>
            <!-- .sticky-outer -->
          </div>
          <!-- .mobile-header-inner -->
        </div>
        <!-- .mobile-header -->
        <!--Header-->
        <div class="header-inner header-1 header-absolute">
          <!--Topbar-->
          <div class="topbar relative">
            <div class="basic-container clearfix">
              <ul class="nav topbar-items pull-left">
                <li class="nav-item">
                  <ul class="nav header-info">
                    <li>
                      <div class="header-address typo-white">
                        <span class="ti-location-pin"></span> RIverside, Wangige, Off Gitaru Road, Opp Royal Kings School
                      </div>
                    </li>
                  </ul>
                </li>
              </ul>
              <ul class="nav topbar-items pull-right">
                <li class="nav-item">
                  <div class="social-icons typo-white">
                    <a href="https://www.facebook.com/Royalcelebrationcenter" class="social-fb">
                      <span class="ti-facebook"></span>
                    </a>
                    <a href="#" class="social-twitter">
                      <span class="ti-twitter"></span>
                    </a>
                    <a href="https://www.instagram.com/dclowerkabete/" class="social-instagram">
                      <span class="ti-instagram"></span>
                    </a>

                    <a href="https://www.youtube.com/@dclowerkabete" class="social-youtube">
                      <span class="ti-youtube"></span>
                    </a>

                  </div>
                </li>
                <li>
                  <a href="#" class="full-view-switch text-center">
                    <i class="ti-search typo-white"></i>
                  </a>
                </li>
              </ul>
            </div>
            <!--Search-->
            <div class="full-view-wrapper hide">
              <a href="#" class="close full-view-close"></a>
              <form class="navbar-form search-form" role="search">
                <div class="input-group">
                  <input class="form-control" placeholder="Search hit enter.." name="srch-term" type="text">
                </div>
              </form>
            </div>
          </div>
          <!--Topbar-->
          <!--Sticky part-->
          <div class="sticky-outer">
            <div class="sticky-head">
              <!--Navbar-->
              <nav class="navbar nav-shadow">
                <div class="basic-container clearfix">
                  <div class="">
                    <!--Overlay Menu Switch-->
                    <ul class="nav navbar-items pull-left">
                      <li class="list-item">
                        <a href="{{url('/')}}" class="logo-general">
                          <img src="{{asset('uploads/logo.png')}}" class="img-fluid changeable-light" style="height:70px;" alt="Logo" />
                        </a>
                        <a href="{{url('/')}}" class="logo-sticky">
                          <img src="{{asset('uploads/logo.png')}}" class="img-fluid changeable-dark" style="height:70px;" alt="Logo" />
                        </a>
                      </li>
                    </ul>
                    <!-- Menu -->
                    <ul class="nav navbar-items pull-right">
                      <!--List Item-->
                      <li class="list-item">
                        <ul class="nav navbar-main menu-white">
                          <li class="active">
                            <a href="{{url('/')}}">Home</a>
                          </li>

                          <li>
                              <a href="contact-us.html">Sermons</a>
                          </li>

                          <li class="active">
                              <a href="#">Location</a>
                          </li>

                          <li class="dropdown dropdown-sub">
                              <a href="#">About Us</a>
                              <ul class="dropdown-menu">
                                <li>
                                  <a href="#">Who We Are</a>
                                </li>
                                <li>
                                  <a href="#">Statement of Faith</a>
                                </li>
                                <li>
                                  <a href="#">About Our Ministries</a>
                                </li>
                                <li>
                                  <a href="#">Governance </a>
                                </li>
                              </ul>
                          </li>

                          <li class="dropdown dropdown-sub">
                              <a href="#">Lets Connect</a>
                              <ul class="dropdown-menu">
                                <li class="dropdown">
                                  <a href="#">Join Us</a>
                                </li>
                                <li class="dropdown">
                                  <a href="#">Need Fresh Start</a>
                                </li>
                              </ul>
                          </li>

                          <li class="dropdown dropdown-sub">
                            <a href="#">Give</a>
                            <ul class="dropdown-menu">
                              <li>
                                <a href="#">PayBill Number</a>
                              </li>
                              <li>
                                  <a href="#">Give Online</a>
                                </li>
                            </ul>
                          </li>

                        </ul>
                      </li>
                      <!--List Item End-->
                      <!--List Item-->
                      <li class="list-item">
                        <div class="header-navbar-text-1">
                          <a href="#" class="h-donate-btn">Giving</a>
                        </div>
                      </li>
                      <!--List Item End-->
                    </ul>
                    <!-- Menu -->
                  </div>
                </div>
              </nav>
            </div>
            <!--sticky-head-->
          </div>
          <!--sticky-outer-->
        </div>
      </header>
      <!-- header -->
      <!-- Revolution Slider Section -->
      <p class="rs-p-wp-fix"></p>
      <rs-module-wrap id="rev_slider_1_1_wrapper" data-alias="DCLK-home-1" data-source="gallery" style="visibility:hidden;background:#000000;padding:0;margin:0px auto;margin-top:0;margin-bottom:0;">
        <rs-module id="rev_slider_1_1" style="" data-version="6.5.31">
          <rs-slides>
            <rs-slide style="position: absolute;" data-key="rs-1" data-title="Web Show" data-thumb="{{asset('theme/rs-plugin/assets/zmain-slider-1-1536x864-100x100.jpg')}}" data-anim="adpr:false;e:slidingoverlay;ms:2000;" data-in="o:1;x:(100%);" data-out="a:false;">
              <img src="{{asset('theme/rs-plugin/assets/dummy.png')}}" alt="Non Profit Wordpress Theme" title="zmain-slider-1.jpg')}}" width="1536" height="864" class="rev-slidebg tp-rs-img rs-lazyload" data-lazyload="{{asset('theme/rs-plugin/assets/zmain-slider-1-1536x864.jpg')}}" data-parallax="5" data-no-retina>
              <!--							-->
              <h1 id="slider-1-slide-1-layer-2" class="rs-layer Concept-Title" data-type="text" data-color="#ffffff||rgba(255, 255, 255, 1)||rgba(255, 255, 255, 1)||rgba(255, 255, 255, 1)" data-rsp_ch="on" data-xy="x:c;y:m;yo:10px,-26px,-10px,-33px;" data-text="w:normal,nowrap,nowrap,normal;s:54,50,45,30;l:52,55,50,40;ls:3px;fw:700;a:center;" data-dim="w:754px,699px,auto,400px;" data-padding="b:10;" data-frame_0="sX:2;sY:2;" data-frame_0_mask="u:t;" data-frame_1="e:power2.out;st:2110;sp:1270;sR:2110;" data-frame_1_mask="u:t;" data-frame_999="x:left;e:power3.in;st:w;sp:1000;sR:5620;" data-frame_999_reverse="x:true;" style="z-index:10;font-family:'Poppins';text-transform:uppercase;">Welcome to <br> Deliverence Church Lower Kabete </h1>
              <!--							-->
              {{-- <rs-layer id="slider-1-slide-1-layer-4" class="Concept-SubTitle" data-type="text" data-color="" data-rsp_ch="on" data-xy="x:c;y:m;yo:-42px,-83px,-64px,-71px;" data-text="w:normal,nowrap,nowrap,nowrap;s:21,20,20,15;l:21,25,20,20;fw:700;a:center,left,left,left;" data-dim="w:408px,auto,auto,auto;" data-padding="b:10;" data-frame_0="o:1;" data-frame_0_chars="d:5;y:100%;o:0;rZ:-35deg;" data-frame_0_mask="u:t;" data-frame_1="st:640;sp:1200;sR:640;" data-frame_1_chars="e:power4.inOut;d:10;rZ:0deg;" data-frame_1_mask="u:t;" data-frame_999="x:left;e:power3.in;st:w;sp:1000;sR:4960;" data-frame_999_reverse="x:true;" style="z-index:11;font-family:'Open Sans';text-transform:uppercase; color:#ffffff !important">Royal Celebration Center</rs-layer> --}}
              <!--							-->
              {{-- <rs-layer id="slider-1-slide-1-layer-14" data-type="text" data-rsp_ch="on" data-xy="x:c;y:m,t,t,t;yo:78px,286px,271px,233px;" data-text="w:normal;s:18,18,16,15;l:31,30,30,27;a:center;" data-dim="w:806px,805px,689px,388px;h:auto,auto,auto,89px;" data-frame_0="y:100%;" data-frame_0_mask="u:t;" data-frame_1="st:2680;sp:1360;sR:2680;" data-frame_1_mask="u:t;" data-frame_999="o:0;st:w;sR:4960;" style="z-index:9;font-family:'Open Sans';"> Royal Celebration Center </rs-layer> --}}
              <!--							-->
              <rs-layer id="slider-1-slide-1-layer-16" class="res-slide-btn pop rev-btn" data-type="button" data-color="rgba(255,255,255,1)" data-xy="x:c;y:m;yo:162px,130px,128px,117px;" data-text="s:16,16,14,14;l:17;fw:500;a:center;" data-rsp_bd="off" data-padding="t:15,15,10,10;r:35,35,25,25;b:15,15,10,10;l:35,35,25,25;" data-border="bor:3px,3px,3px,3px;" data-frame_0="rX:-70deg;oZ:-50;" data-frame_1="oZ:-50;e:power4.inOut;st:3160;sp:1750;" data-frame_999="o:0;st:w;sR:4640;" data-frame_hover="bgc:#000;boc:#000;bor:3px,3px,3px,3px;bos:solid;oX:50;oY:50;sp:0;" style="z-index:8;font-family:'Poppins';cursor:pointer;outline:none;box-shadow:none;box-sizing:border-box;-moz-box-sizing:border-box;-webkit-box-sizing:border-box;">Sermons <span class="ti-book"></span> </rs-layer>
              <!--							-->
              <rs-layer id="slider-1-slide-1-layer-21" data-type="image" data-rsp_ch="on" data-xy="x:c;yo:228px,95px,91px,90px;" data-text="w:normal;s:20,16,12,7;l:0,20,15,9;" data-dim="w:67px,60px,56px,45px;h:67px,60px,56px,45px;" data-frame_0="x:100%;" data-frame_0_mask="u:t;" data-frame_1="st:210;sp:1000;sR:210;" data-frame_1_mask="u:t;" data-frame_999="o:0;st:w;sR:7790;" style="z-index:12;">
                <img src="{{asset('theme/rs-plugin/assets/dummy.png')}}" alt="Non Profit Wordpress Theme" class="tp-rs-img rs-lazyload" width="80" height="80" data-lazyload="{{asset('theme/rs-plugin/assets/dove.png')}}" data-no-retina>
              </rs-layer>
              <!---->
            </rs-slide>
          </rs-slides>
          <rs-static-layers>
            <!--					-->
          </rs-static-layers>
        </rs-module>
        <script></script>
        <script>
          if (typeof revslider_showDoubleJqueryError === "undefined") {
            function revslider_showDoubleJqueryError(sliderID) {
              console.log("You have some jquery.js library include that comes after the Slider Revolution files js inclusion.");
              console.log("To fix this, you can:");
              console.log("1. Set 'Module General Options' -> 'Advanced' -> 'jQuery & OutPut Filters' -> 'Put JS to Body' to on");
              console.log("2. Find the double jQuery.js inclusion and remove it");
              return "Double Included jQuery Library";
            }
          }
        </script>
      </rs-module-wrap>
      <!-- Revolution Slider Section End -->
      <!-- Page Content -->
      <div class="content-wrapper pad-none">
        <div class="content-inner">
          <!-- Events Section -->
          <section class="events-section pad-tb-0 broken-top-50 pt-sm-5 pt-xl-0 pad-bottom-md-none">
            <div class="container">
              <!-- Row -->
              <div class="row">
                <!--Events Main Slider-->
                <div class="owl-carousel events-main-wrapper events-style-1" data-loop="1" data-nav="0" data-dots="1" data-autoplay="0" data-autoplaypause="1" data-autoplaytime="5000" data-smartspeed="1000" data-margin="30" data-items="2" data-items-tab="1" data-items-mob="1">
                  <!--Item-->
                  <div class="item">
                    <!--Events Inner-->
                    <div class="events-inner">
                      <div class="events-item">
                        <div class="media">
                          <div class="event-date me-4">Jan 3 <span class="event-time">8.00 am</span>
                          </div>
                          <div class="media-body">
                            <!-- Ministries Content -->
                            <div class="event-content">
                              <div class="event-title">
                                <h5>
                                  <a href="event-details.html">Our Sponsorship Meetup Will Be Held Again</a>
                                </h5>
                              </div>
                              <div class="read-more">
                                <a href="event-details.html">Event Details</a>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <!--Events Inner Ends-->
                  </div>
                  <!--Item Ends-->
                  <!--Item-->
                  <div class="item">
                    <!--Events Inner-->
                    <div class="events-inner">
                      <div class="events-item">
                        <div class="media">
                          <div class="event-date me-4">Feb 12 <span class="event-time">7.00 am</span>
                          </div>
                          <div class="media-body">
                            <!-- Ministries Content -->
                            <div class="event-content">
                              <div class="event-title">
                                <h5>
                                  <a href="event-details.html">Event: Reflect The Community And Serving</a>
                                </h5>
                              </div>
                              <div class="read-more">
                                <a href="event-details.html">Event Details</a>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <!--Events Inner Ends-->
                  </div>
                  <!--Item Ends-->
                  <!--Item-->
                  <div class="item">
                    <!--Events Inner-->
                    <div class="events-inner">
                      <div class="events-item">
                        <div class="media">
                          <div class="event-date me-4">Mar 3 <span class="event-time">6.00 am</span>
                          </div>
                          <div class="media-body">
                            <!-- Ministries Content -->
                            <div class="event-content">
                              <div class="event-title">
                                <h5>
                                  <a href="event-details.html">New Families During National Adoption Month</a>
                                </h5>
                              </div>
                              <div class="read-more">
                                <a href="event-details.html">Event Details</a>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <!--Events Inner Ends-->
                  </div>
                  <!--Item Ends-->
                  <!--Item-->
                  <div class="item">
                    <!--Events Inner-->
                    <div class="events-inner">
                      <div class="events-item">
                        <div class="media">
                          <div class="event-date me-4">Apr 18 <span class="event-time">12.00 pm</span>
                          </div>
                          <div class="media-body">
                            <!-- Ministries Content -->
                            <div class="event-content">
                              <div class="event-title">
                                <h5>
                                  <a href="event-details.html">Event: Lord is Sufficient for all of our needs</a>
                                </h5>
                              </div>
                              <div class="read-more">
                                <a href="event-details.html">Event Details</a>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <!--Events Inner Ends-->
                  </div>
                  <!--Item Ends-->
                </div>
                <!--Events Owl Slider-->
              </div>
              <!-- Row -->
            </div>
            <!-- Container -->
          </section>
          <!-- Events Section End -->
          <!-- About Section -->
          <section id="section-about" class="section-about pad-top-90">
            <div class="container">
              <!-- Row -->
              <div class="row">
                <!-- Col -->
                <div class="col-xl-6 align-self-center">
                  <!-- about wrap -->
                  <div class="about-wrap relative">
                    <div class="about-wrap-inner">
                      <!-- about details -->
                      <div class="about-wrap-details">
                        <!-- about button -->
                        <div class="text-center">
                          <div class="about-img module-border-wrap">
                            <img src="{{url('/')}}/uploads/407438200_742613091237569_7945510447755972781_n.jpg" class="about-image module" alt="about-img">
                          </div>
                          <!-- .col -->
                        </div>
                      </div>
                      <!-- about details End-->
                    </div>
                  </div>
                  <!-- about wrap end -->
                </div>
                <!-- .col -->
                <!-- Col -->
                <div class="col-xl-6 px-3 ps-xl-0">
                  <div class="title-wrap margin-bottom-30">
                    <div class="section-title">
                      <span class="sub-title theme-color text-uppercase">The Royal Celebration Center</span>
                      <h2 class="section-title margin-top-5">Welcome to DCLK where everybody is somebody and Christ is lord</h2>
                      <span class="border-bottom"></span>
                    </div>
                    <div class="pad-top-15">
                      <p class="margin-bottom-20">
                        Welcome to Deliverance Church Lower Kabete, where every individual matters, and Christ reigns supreme. Here, we celebrate each person's unique value and the lordship of Jesus Christ in our lives.
                      </p>
                      <p class="styled-text">Theme of the Year:</p>
                    </div>
                  </div>

                  <div class="button-section margin-top-35">
                    <a class="btn btn-default" href="about-us.html" title="Learn More">Learn More</a>
                  </div>
                </div>
                <!-- Col -->
              </div>
              <!-- Row -->
            </div>
            <!-- Container -->
          </section>
          <!-- About Section End -->
          <!-- Get a Quote Section -->
          <section id="get-quote-section" class="get-quote-section section-bg-img" data-bg="{{asset('theme/images/bg/bg-1.jpg')}}" style="border: 4px solid #d4af37">
            <div class="container">
              <!-- Row -->
              <div class="row text-center">
                <!-- Col -->
                <div class="col-md-12">
                  <div class="get-quote-1">
                    <!-- video wrap -->
                    <div class="video-wrap wrap-stretch relative margin-bottom-50">
                      <!-- video details -->
                      <div class="video-wrap-details">
                        <!-- video button -->
                        <div class="video-play-btn text-center">
                          <div class="video-icon">
                            <a class="popup-youtube box-shadow1" href="https://www.youtube.com/watch?v=e1l1-LWTcBs">
                              <i class="ti-video-camera"></i>
                            </a>
                          </div>
                        </div>
                      </div>
                      <!-- video details End-->
                    </div>
                    <!-- video wrap end -->
                    <div class="title-wrap mb-0">
                      <div class="section-title typo-white margin-bottom-40">
                        <h2 class="title mb-3">“Pray! And listen to God! You can do this alone, but find somebody to do it with you”</h2>
                        <span class="dancing-text">Real Story Cross Journey from Anna Hampton</span>
                      </div>
                      <div class="get-quote-btn">
                        <a class="btn btn-default" href="donate-now.html" title="Donate Online">Watch</a>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- Col -->
              </div>
              <!-- Row -->
            </div>
            <!-- Container -->
          </section>
          <!-- Get a Quote Section End -->
          <!-- Ministries Section -->
          <section id="ministries-section" class="ministries-section pad-top-95 pad-bottom-70">
            <div class="container">
              <!-- Row -->
              <div class="row">
                <div class="offset-md-2 col-md-8">
                  <div class="title-wrap text-center">
                    <div class="section-title">
                      <span class="sub-title theme-color text-uppercase">Ministries</span>
                      <h2 class="section-title margin-top-5">Our Ministries</h2>
                      <span class="border-bottom center"></span>
                    </div>
                  </div>
                </div>
                <!--Ministries Main Slider-->
                <div class="owl-carousel ministries-main-wrapper" data-loop="1" data-nav="1" data-dots="0" data-autoplay="0" data-autoplaypause="1" data-autoplaytime="5000" data-smartspeed="1000" data-margin="30" data-items="3" data-items-tab="2" data-items-mob="1">
                  <!--Item-->
                  <div class="item">
                    <div class="ministries-box-style-2">
                      <!-- Ministries Inner -->
                      <div class="ministries-inner">
                        <div class="ministries-thumb">
                          <img class="img-fluid squared w-100" src="{{asset('theme/images/ministries/childrens_ministry.jpg')}}" width="360" height="240" alt="Agricultural Processing">
                        </div>
                        <!-- Ministries Content -->
                        <div class="ministries-content pad-30">
                          <div class="ministries-title margin-bottom-15">
                            <h4>
                              <a href="childrens-ministry.html" class="ministries-link">Children's Ministry</a>
                            </h4>
                          </div>
                          <div class="ministries-desc">
                            <p>Children’s ministry is the most important ministry in our church. This ministry helps kids learn about the Lord</p>
                          </div>
                          <div class="ministries-link margin-top-20">
                            <a target="_blank" href="childrens-ministry.html" class="link">Read More</a>
                          </div>
                        </div>
                      </div>
                      <!-- Ministries Inner Ends -->
                    </div>
                  </div>
                  <!--Item Ends-->
                  <!--Item-->
                  <div class="item">
                    <div class="ministries-box-style-2">
                      <!-- Ministries Inner -->
                      <div class="ministries-inner">
                        <div class="ministries-thumb">
                          <img class="img-fluid squared w-100" src="{{asset('theme/images/ministries/women_ministry.jpg')}}" width="360" height="240" alt="Agricultural Processing">
                        </div>
                        <!-- Ministries Content -->
                        <div class="ministries-content pad-30">
                          <div class="ministries-title margin-bottom-15">
                            <h4>
                              <a href="womens-ministry.html" class="ministries-link">Womens Ministry</a>
                            </h4>
                          </div>
                          <div class="ministries-desc">
                            <p>A Women’s ministry includes hosting Bible studies, services, support group, and gathering events. The goal of this women’s</p>
                          </div>
                          <div class="ministries-link margin-top-20">
                            <a target="_blank" href="womens-ministry.html" class="link">Read More</a>
                          </div>
                        </div>
                      </div>
                      <!-- Ministries Inner Ends -->
                    </div>
                  </div>
                  <!--Item Ends-->
                  <!--Item-->
                  <div class="item">
                    <div class="ministries-box-style-2">
                      <!-- Ministries Inner -->
                      <div class="ministries-inner">
                        <div class="ministries-thumb">
                          <img class="img-fluid squared w-100" src="{{asset('theme/images/ministries/global_ministry.jpg')}}" width="360" height="240" alt="Agricultural Processing">
                        </div>
                        <!-- Ministries Content -->
                        <div class="ministries-content pad-30">
                          <div class="ministries-title margin-bottom-15">
                            <h4>
                              <a href="global-ministry.html" class="ministries-link">Global Ministry</a>
                            </h4>
                          </div>
                          <div class="ministries-desc">
                            <p>We are very grateful for our part in the work of Global Ministries and the opportunity to be</p>
                          </div>
                          <div class="ministries-link margin-top-20">
                            <a target="_blank" href="global-ministry.html" class="link">Read More</a>
                          </div>
                        </div>
                      </div>
                      <!-- Ministries Inner Ends -->
                    </div>
                  </div>
                  <!--Item Ends-->
                  <!--Item-->
                  <div class="item">
                    <div class="ministries-box-style-2">
                      <!-- Ministries Inner -->
                      <div class="ministries-inner">
                        <div class="ministries-thumb">
                          <img class="img-fluid squared w-100" src="{{asset('theme/images/ministries/music_ministry.jpg')}}" width="360" height="240" alt="Agricultural Processing">
                        </div>
                        <!-- Ministries Content -->
                        <div class="ministries-content pad-30">
                          <div class="ministries-title margin-bottom-15">
                            <h4>
                              <a href="music-ministry.html" class="ministries-link">Men Ministry</a>
                            </h4>
                          </div>
                          <div class="ministries-desc">
                            <p>Music is something we get exposed to from childhood through adulthood. From the pattering sounds from raindrops</p>
                          </div>
                          <div class="ministries-link margin-top-20">
                            <a target="_blank" href="music-ministry.html" class="link">Read More</a>
                          </div>
                        </div>
                      </div>
                      <!-- Ministries Inner Ends -->
                    </div>
                  </div>
                  <!--Item Ends-->
                    <!--Item-->
                    <div class="item">
                        <div class="ministries-box-style-2">
                            <!-- Ministries Inner -->
                            <div class="ministries-inner">
                            <div class="ministries-thumb">
                                <img class="img-fluid squared w-100" src="{{asset('theme/images/ministries/music_ministry.jpg')}}" width="360" height="240" alt="Agricultural Processing">
                            </div>
                            <!-- Ministries Content -->
                            <div class="ministries-content pad-30">
                                <div class="ministries-title margin-bottom-15">
                                <h4>
                                    <a href="music-ministry.html" class="ministries-link">Media Ministry</a>
                                </h4>
                                </div>
                                <div class="ministries-desc">
                                <p>Music is something we get exposed to from childhood through adulthood. From the pattering sounds from raindrops</p>
                                </div>
                                <div class="ministries-link margin-top-20">
                                <a target="_blank" href="music-ministry.html" class="link">Read More</a>
                                </div>
                            </div>
                            </div>
                            <!-- Ministries Inner Ends -->
                        </div>
                    </div>
                    <!--Item Ends-->
                </div>
                <!--Ministries Owl Slider-->
              </div>
              <!-- Row -->
            </div>
            <!-- Container -->
          </section>
          <!-- Ministries Section End -->
          <!-- Contact Section -->
          <section class="contact-form-section typo-white section-bg-img o-visible pad-top-80 pad-bottom-160" data-bg="{{asset('uploads/2024-06-23-modified.jpg')}}">
            <div class="shape-bottom" data-negative="false">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 100" preserveAspectRatio="none">
                <path class="shape-fill" opacity="0.33" d="M473,67.3c-203.9,88.3-263.1-34-320.3,0C66,119.1,0,59.7,0,59.7V0h1000v59.7 c0,0-62.1,26.1-94.9,29.3c-32.8,3.3-62.8-12.3-75.8-22.1C806,49.6,745.3,8.7,694.9,4.7S492.4,59,473,67.3z"></path>
                <path class="shape-fill" opacity="0.66" d="M734,67.3c-45.5,0-77.2-23.2-129.1-39.1c-28.6-8.7-150.3-10.1-254,39.1 s-91.7-34.4-149.2,0C115.7,118.3,0,39.8,0,39.8V0h1000v36.5c0,0-28.2-18.5-92.1-18.5C810.2,18.1,775.7,67.3,734,67.3z"></path>
                <path class="shape-fill" d="M766.1,28.9c-200-57.5-266,65.5-395.1,19.5C242,1.8,242,5.4,184.8,20.6C128,35.8,132.3,44.9,89.9,52.5C28.6,63.7,0,0,0,0 h1000c0,0-9.9,40.9-83.6,48.1S829.6,47,766.1,28.9z"></path>
              </svg>
            </div>
            <div class="container">
              <div class="row">
                <!-- col -->
                <div class="col-xl-4 pe-xl-4 pb-5 pb-xl-0">
                  <div class="flip-box broken-top-115 verticalMove">
                    <div class="flip-box-inner imghvr-flip-3d-horz" >
                      <div class="flip-box-front" style="border: 4px solid #d4af37">
                        <div class="flip-box-icon margin-bottom-40">
                          <span class="text-center flip-icon-middle ti-headphone-alt"></span>
                        </div>
                        <h3 class="flip-box-title margin-bottom-30">Reach Out</h3>
                        <div class="flip-content">
                          <p>Riverside, Wangige, Off Gitaru Road.</p>
                          <p>
                            <a href="tel:+254 (720) 000 000">+254 (720) 000 000</a>
                          </p>
                          <p>
                            <a href="mailto:info@royalcelebrationcenter.org">info@royalcelebrationcenter.org</a>
                          </p>
                        </div>
                      </div>
                      <div class="flip-box-back">
                        <h3 class="flip-box-title">Reach Out</h3>
                        <div class="flip-content">
                          <p>Riverside, Wangige, Off Gitaru Road.</p>
                          <p>
                            <a href="tel:+254 (720) 000 000">+254 (720) 000 000</a>
                          </p>
                          <p>
                            <a href="mailto:info@royalcelebrationcenter.org">info@royalcelebrationcenter.org</a>
                          </p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- col -->
                <div class="col-xl-8 ps-xl-4">
                  <div class="section-title-wrapper">
                    <div class="title-wrap mb-0">
                      <div class="section-title">
                        <span class="sub-title theme-colors text-uppercase  ti-location-pin"> </span>
                        <h2 class="section-title margin-top-5">Deliverance Church Lower Kabete Royal Celebration Center</h2>
                        <span class="border-bottom"></span>
                      </div>
                      {{-- <div class="pad-top-15">
                        <p class="margin-bottom-10">Feel free to Contact Us. DCLK Church WP Theme comes with sermons, ministries, events, testimonies, staff members, church locations shortcodes to enhance your website.</p>
                      </div> --}}
                    </div>
                    <div class="button-section margin-top-25">
                      <a class="btn btn-default" href="https://g.co/kgs/eeDwjEX" title="Learn More"> <span class="ti-location-pin"> </span> Follow Pin</a>
                    </div>
                  </div>
                </div>
                <!-- .col -->
              </div>
            </div>
          </section>
          <!-- Contact Form Section End -->
          <!-- Sermons Section -->
        @include('front.sermons')
          <!-- Sermons Section End -->
        </div>
      </div>
    </div>
    <!-- .page-wrapper-inner -->
  </div>
  <!--page-wrapper-->
@endsection
