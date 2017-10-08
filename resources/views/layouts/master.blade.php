<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <!-- TITLE -->
    <title>The Lotus Hotel</title>

    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="format-detection" content="telephone=no">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <link rel="shortcut icon" href="images/favicon.png"/>

    <!-- GOOGLE FONT -->
    <link href='http://fonts.googleapis.com/css?family=Hind:400,300,500,600%7cMontserrat:400,700' rel='stylesheet' type='text/css'>

    <!-- CSS LIBRARY -->
    <link rel="stylesheet" type="text/css" href="{{asset('css/lib/font-awesome.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/lib/font-lotusicon.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/lib/bootstrap.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/lib/owl.carousel.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/lib/jquery-ui.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/lib/magnific-popup.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/lib/settings.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/lib/bootstrap-select.min.css')}}">
    <link rel="stylesheet" href="{{asset('bower_components/font-awesome/css/font-awesome.min.css')}}">

    <!-- MAIN STYLE -->
    <link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}">
    
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
                        <span><i class="lotus-icon-cloud"></i> 26 °C</span>
                        <span><i class="lotus-icon-location"></i>  92 Quang Trung, Hai Chau, Da Nang, Viet Nam</span>
                        <span><i class="lotus-icon-phone"></i>  0916-790-052</span>
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
                                <li><a href="#">VN</a></li>
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
                        <a href="#"><img src="images/logo-header.png" alt=""></a>
                    </div>
                    <!-- END / HEADER LOGO -->
                    
                    <!-- HEADER MENU -->
                    <nav class="header_menu">
                        <ul class="menu">
                            <li>
                                <a href="index.html">Home</a>
                            </li>
                            <li><a href="about.html">About</a></li>                            
                            <li>
                                <a href="#">Room <span class="fa fa-caret-down"></span></a>
                                <ul class="sub-menu">
                                    <li><a href="room-1.html">Standard Room</a></li>
                                    <li><a href="#">Couple Room</a></li>
                                    <li><a href="room-2.html">Deluxe Room</a></li>
                                    <li><a href="room-3.html">Family Room</a></li>
                                    <li><a href="room-4.html">Luxury Room</a></li>
                                </ul>
                            </li>
                            <li><a href="contact.html">Contact</a></li>
                        </ul>
                    </nav>
                    <!-- END / HEADER MENU -->
                </div>
            </div>
            <!-- END / HEADER LOGO & MENU -->

        </header>
        <!-- END / HEADER -->
        
        <!-- SUB BANNER -->
        <section class="section-sub-banner bg-9">

            <div class="sub-banner">
                <div class="container">
                    <div class="text text-center">
                        @yield('header')
                    </div>
                </div>
            </div>

        </section>
        <!-- END / SUB BANNER -->
        
        <!-- SHORT CODE -->
        <section class="section-shortcode">
            <div class="container">
                <div class="shortcode">

                    <div class="heading-has-sub text-center">
                        @yield('content')
                    </div>
                </div>
            </div>
        </section>
        <!-- END / SHORT CODE -->
        
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
    <script type="text/javascript" src="js/lib/jquery-1.11.0.min.js"></script>
    <script type="text/javascript" src="js/lib/jquery-ui.min.js"></script>
    <script type="text/javascript" src="js/lib/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/lib/bootstrap-select.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&amp;signed_in=true"></script>
    <script type="text/javascript" src="js/lib/isotope.pkgd.min.js"></script>
    <script type="text/javascript" src="js/lib/jquery.themepunch.revolution.min.js"></script>
    <script type="text/javascript" src="js/lib/jquery.themepunch.tools.min.js"></script>
    <script type="text/javascript" src="js/lib/owl.carousel.js"></script>
    <script type="text/javascript" src="js/lib/jquery.appear.min.js"></script>
    <script type="text/javascript" src="js/lib/jquery.jquery.countTo.js"></script>
    <script type="text/javascript" src="js/lib/jquery.countdown.min.js"></script>
    <script type="text/javascript" src="js/lib/jquery.parallax-1.1.3.js"></script>
    <script type="text/javascript" src="js/lib/jquery.magnific-popup.min.js"></script>
    <script type="text/javascript" src="js/lib/SmoothScroll.js"></script>
    <script type="text/javascript" src="js/scripts.js"></script>
</body>
</html>