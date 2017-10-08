<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <!-- TITLE -->
    <title>Home Lotus Hotel</title>

    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="format-detection" content="telephone=no">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <link rel="shortcut icon" href="images/favicon.png"/>

    <!-- GOOGLE FONT -->
    <link href='http://fonts.googleapis.com/css?family=Hind:400,300,500,600%7cMontserrat:400,700' rel='stylesheet' type='text/css'>

    <!-- CSS LIBRARY -->
    <link rel="stylesheet" type="text/css" href="{!!asset('css/lib/font-awesome.min.css')!!}">
    <link rel="stylesheet" type="text/css" href="{!!asset('css/lib/font-lotusicon.css')!!}">
    <link rel="stylesheet" type="text/css" href="{!!asset('css/lib/bootstrap.min.css')!!}">
    <link rel="stylesheet" type="text/css" href="{!!asset('css/lib/owl.carousel.css')!!}">
    <link rel="stylesheet" type="text/css" href="{!!asset('css/lib/jquery-ui.min.css')!!}">
    <link rel="stylesheet" type="text/css" href="{!!asset('css/lib/magnific-popup.css')!!}">
    <link rel="stylesheet" type="text/css" href="{!!asset('css/lib/settings.css')!!}">
    <link rel="stylesheet" type="text/css" href="{!!asset('css/lib/bootstrap-select.min.css')!!}">

    <!-- MAIN STYLE -->
    <link rel="stylesheet" type="text/css" href="{!!asset('css/style.css')!!}">
    
    <!--[if lt IE 9]>
        <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
    <![endif]-->
</head>

<!--[if IE 7]> <body class="ie7 lt-ie8 lt-ie9 lt-ie10"> <![endif]-->
<!--[if IE 8]> <body class="ie8 lt-ie9 lt-ie10"> <![endif]-->
<!--[if IE 9]> <body class="ie9 lt-ie10"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <body> <!--<![endif]-->
    
    <!-- PRELOADER -->
    <div id="preloader">
        <span class="preloader-dot"></span>
    </div>
    <!-- END / PRELOADER -->
    <!-- PAGE WRAP -->
    <div id="page-wrap">
        <!-- HEADER -->
        <header id="header">           
            <!-- HEADER TOP -->
            <div class="header_top">
                <div class="container">
                    <div class="header_left float-left">
                        <span><i class="lotus-icon-location"></i> 92 Quang Trung, Hai Chau, Da Nang, Viet Nam</span>
                        <span><i class="lotus-icon-phone"></i> 0916-790-052</span>
                    </div>
                    <div class="header_right float-right">
                        <span class="login-register">
                            <a href="login.html">Login</a>
                            <a href="register.html">register</a>
                        </span>
                        <div class="dropdown currency">
                            <span>USD <i class="fa fa"></i></span>
                            <ul>
                                <li class="active"><a href="#">USD</a></li>
                                <li><a href="#">VND</a></li>
                            </ul>
                        </div>
                        <div class="dropdown language">
                            <span>ENG</span>
                            <ul>
                                <li class="active"><a href="#">ENG</a></li>
                                <li><a href="#">VND</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END / HEADER TOP -->           
            <!-- HEADER LOGO & MENU -->
            <div class="header_content" id="header_content">
                <div class="container">
                    <!-- HEADER LOGO -->
                    <div class="header_logo">
                        <a href="#"><img src="{!!asset('images/logo-header.png')!!}" alt=""></a>
                    </div>
                    <!-- END / HEADER LOGO -->
                    
                    <!-- HEADER MENU -->
                    <nav class="header_menu">
                            <ul class="menu">
                                <li class="current-menu-item">
                                    <a href="#">Home <span class=""></span></a>
                                </li>
                                <li><a href="#">About</a></li>                           
                                <li>
                                        <a href="#">Room <span class="fa fa-caret-down"></span></a>
                                    <ul class="sub-menu">
                                        @yield('menu')                                   
                                    </ul>
                                </li>
                                <li><a href="about.html">Contact</a></li>
                            </ul>                          
                    </nav>
                    <!-- END / HEADER MENU -->

                    <!-- MENU BAR -->
                    <span class="menu-bars">
                        <span></span>
                    </span>
                    <!-- END / MENU BAR -->

                </div>
            </div>
            <!-- END / HEADER LOGO & MENU -->

        </header>
        <!-- END / HEADER -->
        
        <!-- BANNER SLIDER -->
        <section class="section-slider">
            <h1 class="element-invisible">Slider</h1>
            <div id="slider-revolution">
                <ul>
                    <li data-transition="fade">
                        <img src="{!!asset('images/slider/img-1.jpg')!!}" data-bgposition="left center" data-duration="14000" data-bgpositionend="right center" alt="">
                        
                        <div class="tp-caption sft fadeout slider-caption-sub slider-caption-1" data-x="center" data-y="100" data-speed="700" data-start="1500" data-easing="easeOutBack">
                         <img src="{!!asset('images/slider/hom1-slide1.png')!!}" alt="icons">
                        </div>

                        <div class="tp-caption sft fadeout slider-caption-sub slider-caption-1" data-x="center" data-y="240" data-speed="700" data-start="1500" data-easing="easeOutBack">
                         WELCOME TO
                        </div>

                        <div class="tp-caption sfb fadeout slider-caption slider-caption-sub-1" data-x="center" data-y="280" data-speed="700" data-easing="easeOutBack"  data-start="2000">THE LOTUS HOTEL</div>
                        
                        <a href="#" class="tp-caption sfb fadeout awe-btn awe-btn-12 awe-btn-slider" data-x="center" data-y="380" data-easing="easeOutBack" data-speed="700" data-start="2200">VIEW NOW</a>
                    </li> 

                    <li data-transition="fade">
                        <img src="{!!asset('images/slider/img-4.jpg')!!}" data-bgposition="left center" data-duration="14000" data-bgpositionend="right center" alt="">
                        
                        <div class="tp-caption sft fadeout slider-caption-sub slider-caption-1" data-x="center" data-y="100" data-speed="700" data-start="1500" data-easing="easeOutBack">
                         <img src="{!!asset('images/slider/hom1-slide1.png')!!}" alt="icons">
                        </div>

                        <div class="tp-caption sft fadeout slider-caption-sub slider-caption-1" data-x="center" data-y="240" data-speed="700" data-start="1500" data-easing="easeOutBack">
                         WELCOME TO
                        </div>

                        <div class="tp-caption sfb fadeout slider-caption slider-caption-sub-1" data-x="center" data-y="280" data-speed="700" data-easing="easeOutBack"  data-start="2000">THE LOTUS HOTEL</div>
                        
                        <a href="#" class="tp-caption sfb fadeout awe-btn awe-btn-12 awe-btn-slider" data-x="center" data-y="380" data-easing="easeOutBack" data-speed="700" data-start="2200">VIEW NOW</a>
                        
                    </li> 

                </ul>
            </div>

        </section>
        <!-- END / BANNER SLIDER -->

        <!-- CHECK AVAILABILITY -->
        <section class="section-check-availability">
            <div class="container">
                <div class="check-availability">
                    <div class="row">
                        <div class="col-lg-12">
                            <form id="ajax-form-search-room" action="search_step_2.php" method="post">
                                <div class="availability-form">
                                    <input type="text" name="arrive" class="awe-calendar from" placeholder="Arrival Date">
                                    <input type="text" name="departure" class="awe-calendar to" placeholder="Departure Date"> 
                                   <select class="awe-select" name="adults">
                                        <option>Person</option>
                                        <option>1</option>
                                        <option>2</option>
                                        <option>3</option>
                                    </select>                           
                                    <div class="vailability-submit">
                                        <button class="awe-btn awe-btn-13">FIND ROOM</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- END / CHECK AVAILABILITY -->

        <!-- ACCOMD ODATIONS -->
        <section class="section-accomd awe-parallax">
            <div class="container">
                <div class="accomd-modations bg-white">
                    <div class="row">
                        @yield('content-index')
                    </div>
                </div>
            </div>

        </section>
        <!-- END / ACCOMD ODATIONS -->

        <!-- ABOUT -->
        <section class="section-home-about bg-white">
            <div class="container">
                <div class="home-about">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="img">
                                <a href="#"><img src="{!!asset('images/home/about/img-1.jpg')!!}" alt=""></a>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="text">
                                <h2 class="heading">ABOUT US</h2>
                                <span class="box-border"></span>
                                <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source</p>
                                <a href="#" class="awe-btn awe-btn-default">READ MORE</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- END / ABOUT -->
        <!-- FOOTER -->
        <footer id="footer">
            <!-- FOOTER TOP -->
            <div class="footer_center">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12 col-lg-5">
                            <div class="widget widget_logo">
                                <div class="widget-logo">
                                    <div class="img">
                                        <a href="#"><img src="images/logo-footer.png" alt=""></a>
                                    </div>
                                    <div class="text">
                                        <p><i class="lotus-icon-location"></i> 92 Quang Trung, Hai Chau, Da Nang, Viet Nam</p>
                                        <p><i class="lotus-icon-phone"></i> 0916-790-052</p>
                                        <p><i class="fa fa-envelope-o"></i> <a href="mailto:hello@thelotushotel.com">hello@thelotushotel.com</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <!-- END / FOOTER CENTER -->
            <!-- FOOTER BOTTOM -->
            <div class="footer_bottom">
                <div class="container">
                    <p>&copy; Laravel-PHP19 Design Hotel Booking All rights reserved.</p>
                </div>
            </div>
            <!-- END / FOOTER BOTTOM -->

        </footer>
        <!-- END / FOOTER -->

    </div>
    <!-- END / PAGE WRAP -->


    <!-- LOAD JQUERY -->
    <script type="text/javascript" src="{!!asset('js/lib/jquery-1.11.0.min.js')!!}"></script>
    <script type="text/javascript" src="{!!asset('js/lib/jquery-ui.min.js')!!}"></script>
    <script type="text/javascript" src="{!!asset('js/lib/bootstrap.min.js')!!}"></script>
    <script type="text/javascript" src="{!!asset('js/lib/bootstrap-select.js')!!}"></script>
    <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&amp;signed_in=true"></script>
    <script type="text/javascript" src="{!!asset('js/lib/isotope.pkgd.min.js')!!}"></script>
    <script type="text/javascript" src="{!!asset('js/lib/jquery.themepunch.revolution.min.js')!!}"></script>
    <script type="text/javascript" src="{!!asset('js/lib/jquery.themepunch.tools.min.js')!!}"></script>
    <script type="text/javascript" src="{!!asset('js/lib/owl.carousel.js')!!}"></script>
    <script type="text/javascript" src="{!!asset('js/lib/jquery.appear.min.js')!!}"></script>
    <script type="text/javascript" src="{!!asset('s/lib/jquery.countTo.js')!!}"></script>
    <script type="text/javascript" src="{!!asset('js/lib/jquery.countdown.min.js')!!}"></script>
    <script type="text/javascript" src="{!!asset('js/lib/jquery.parallax-1.1.3.js')!!}"></script>
    <script type="text/javascript" src="{!!asset('js/lib/jquery.magnific-popup.min.js')!!}"></script>
    <script type="text/javascript" src="{!!asset('js/lib/SmoothScroll.js')!!}"></script>
    <!-- validate -->
    <script type="text/javascript" src="{!!asset('js/lib/jquery.form.min.js')!!}"></script>
    <script type="text/javascript" src="{!!asset('js/lib/jquery.validate.min.js')!!}"></script>
    <!-- Custom jQuery -->
    <script type="text/javascript" src="{!!asset('js/scripts.js')!!}"></script>
</body>
</html>