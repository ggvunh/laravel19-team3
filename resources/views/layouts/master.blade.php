<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <!-- TITLE -->
    <title>Home Lotus Hotel</title>

    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="format-detection" content="telephone=no">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <link rel="shortcut icon" href="{{asset('images/favicon.png')}}"/>

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
                        @if(Auth::guest())<a href="{{ route('login') }}">Login</a>
                          
                        @else
                            <a href="{{ route('user/profile', Auth::User()->id) }}">{{Auth::user()->first_name}} {{ Auth::user()->last_name}}</a>
                            <a href="{{ route('logout') }}"
                                             onclick="event.preventDefault();
                                                      document.getElementById('logout-form').submit();">
                                             Logout
                                        </a><a href="{!!url('/review')!!}">PAYMENT</a>
                                        <form id="logout-form" action="{{   route('logout') }}" method="POST" style="display: none;">
                                             {{ csrf_field() }}
                            </form></li>
                        @endif    
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

                        <div class="header_right float-right">
                            <span class="login-register">
                            <a href="{{ route('report') }}">REPORT</a></span>
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
                        <a href="{{asset('/')}}"><img src="{!!asset('images/logo-header.png')!!}" alt=""></a>
                    </div>
                    <!-- END / HEADER LOGO -->
                    
                    <!-- HEADER MENU -->
                    <nav class="header_menu">
                            <ul class="menu">
                                <li class="current-menu-item">
                                    <a href="{!!url('/')!!}">Home <span class=""></span></a>
                                </li>
                                <li><a href="{{asset('about')}}">About</a></li>                           
                                <li>
                                        <a href="{!!url('/')!!}">Room <span class="fa fa-caret-down"></span></a>
                                    <ul class="sub-menu">
                                        @include('layouts.menu')                                 
                                    </ul>
                                </li>
                                <li><a href="{{asset('contact')}}">Contact</a></li>
                                <li>

                                </li>
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
            @yield('banner')

        </section>
        <!-- END / BANNER SLIDER -->

        <!-- CHECK AVAILABILITY -->
        <section class="section-check-availability">
            <div class="container">
                @yield('search_date')
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
        @section('about')

        @show
        <!-- END / ABOUT -->
       
        <!-- OUR BEST -->
        <section class="section-our-best bg-white">
            <div class="container">
                @yield('outbest')
            </div>
        </section>
        <!-- END / OUR BEST -->
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
                                        <a href="{{url('/')}}"><img src="{{asset('images/logo-footer.png')}}" alt=""></a>
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