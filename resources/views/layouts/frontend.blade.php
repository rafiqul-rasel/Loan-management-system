<!DOCTYPE html>
<html lang="zxx">
<head>
    <!-- Meta Tag -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name='copyright' content=''>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Title Tag  -->
    <title>Travelia &minus; Travel Agency & Tour Booking Template</title>
    <!-- Favicon -->
    <link rel="icon" type="image/png" href="images/favicon.png">
    <!-- Web Font -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900" rel="stylesheet">

    <!-- StyleSheet -->
    <link rel="stylesheet" href="{{asset('frontend/css/nice-select.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/datepicker.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/jquery-ui.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/jquery.fancybox.min.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/magnific-popup.min.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/font-awesome.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/icofont.min.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/owl-carousel.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/slicknav.min.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/animate.css')}}">

    <!-- Travelia StyleSheet -->
    <link rel="stylesheet" href="{{asset('frontend/css/reset.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/style.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/responsive.css')}}">

    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body class="js">

<!-- Header Area -->
<header id="site-header" class="site-header ">
    <!-- Start Topbar -->
    <div class="topbar">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-12">
                    <!-- Text -->
                    <p> <i class="icofont-clock-time"></i>Opening Time:  Mon -Fri: 9:00-19:00</p>
                    <!--/ End Text -->
                </div>
                <div class="col-lg-6 col-md-6 col-12">
                    <!-- Social -->
                    <ul class="social">
                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa fa-reddit"></i></a></li>
                        <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                    </ul>
                    <!--/ End Social -->
                </div>
            </div>
        </div>
    </div>
    <!--/ End Topbar -->
    <!-- Middle Header -->
    <div class="middle-header">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-3 col-12">
                    <!-- Logo -->
                    <div class="logo">
                        <a href="{{route('homepage')}}"><img src="{{asset('frontend/images/dark-logo.png')}}" alt="logo"></a>
                    </div>
                    <!--/ End Logo -->
                    <div class="mobile-nav"></div>
                </div>
                <div class="col-lg-9 col-md-9 col-12">
                    <!-- Header Widget -->
                    <div class="header-widget">
                        <!-- Single Widget -->
                        <div class="single-widget">
                            <i class="icofont-location-pin"></i>
                            <p>424 Jania Alba United States</p>
                            <p>Hellown Plaza, 350 England</p>
                        </div>
                        <!--/ End Single Widget -->
                        <!-- Single Widget -->
                        <div class="single-widget">
                            <i class="icofont-phone"></i>
                            <p>+334 4245-12453</p>
                            <p>+557 8990-12453</p>
                        </div>
                        <!--/ End Single Widget -->
                        <!-- Single Widget -->
                        <div class="single-widget">
                            <i class="icofont-ui-email"></i>
                            <p><a href="mailto:info@mywebmail.com">info@mywebmail.com</a></p>
                            <p><a href="mailto:info@mywebmail.com">support@mywebmail.com</a></p>
                        </div>
                        <!--/ End Single Widget -->
                    </div>
                    <!--/ End Header Widget -->
                </div>
            </div>
        </div>
    </div>
    <!-- End Middle Header -->
    <!-- Header Bottom -->
    <div class="header-bottom">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <!-- Main Menu -->
                    <div class="main-menu">
                        <nav class="navigation">
                            <ul class="nav menu">
                                <li class="active"><a href="{{route('homepage')}}">Home</a></li>
                                <li><a href="{{route('about')}}">About Us</a></li>
                                <li><a href="{{route('contact')}}">Contact Us</a></li>
                                <li><a href="{{route('login')}}">Login</a></li>
                            </ul>
                        </nav>
                    </div>
                    <!--/ End Main Menu -->
                    <!-- Search Form -->
                    <div class="search-form">
                        <form class="form" action="#">
                            <input id="s" placeholder="search..." type="text">
                            <button type="submit" id="searchsubmit">
                                <i class="fa fa-search"></i>
                            </button>
                        </form>
                    </div>
                    <!--/ End Search Form -->
                </div>
            </div>
        </div>
    </div>
    <!--/ End Header Bottom -->
</header>
<!--/ End Header Area -->

@yield('content')
<!-- Start Clients -->
<div id="clients" class="clients section">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="clients-slider">
                    <!-- Single Clients -->
                    <div class="single-clients">
                        <a href="#" target="_blank"><img src="{{asset('frontend/images/client1.png')}}" alt="#"></a>
                    </div>
                    <!--/ End Single Clients -->
                    <!-- Single Clients -->
                    <div class="single-clients active">
                        <a href="#" target="_blank"><img src="{{asset('frontend/images/client2.png')}}" alt="#"></a>
                    </div>
                    <!--/ End Single Clients -->
                    <!-- Single Clients -->
                    <div class="single-clients">
                        <a href="#" target="_blank"><img src="{{asset('frontend/images/client3.png')}}" alt="#"></a>
                    </div>
                    <!--/ End Single Clients -->
                    <!-- Single Clients -->
                    <div class="single-clients">
                        <a href="#" target="_blank"><img src="{{asset('frontend/images/client4.png')}}" alt="#"></a>
                    </div>
                    <!--/ End Single Clients -->
                    <!-- Single Clients -->
                    <div class="single-clients">
                        <a href="#" target="_blank"><img src="{{asset('frontend/images/client5.png')}}" alt="#"></a>
                    </div>
                    <!--/ End Single Clients -->
                    <!-- Single Clients -->
                    <div class="single-clients">
                        <a href="#" target="_blank"><img src="{{asset('frontend/images/client6.png')}}" alt="#"></a>
                    </div>
                    <!--/ End Single Clients -->
                </div>
            </div>
        </div>
    </div>
</div>
<!--/ End Clients -->

<!-- Footer -->
<footer class="footer">
    <!-- Footer Top -->
    <div class="footer-top">
        <div class="container">
            <div class="row">
                <!-- Single Widget -->
                <div class="col-lg-3 col-md-6 col-12">
                    <div class="single-widget about">
                        <img src="{{asset('frontend/images/light-logo.png')}}" alt="#">
                        <p>Please Subscribe our newslatter for get regular updrete.</p>
                        <div class="newslatter-form">
                            <div class="form">
                                <input type="email" placeholder="Enter your email">
                                <button type="text" value="send" >Subscribe</button>
                            </div>
                        </div>
                    </div>
                </div>
                <!--/ End Single Widget -->
                <!-- Single Widget -->
                <div class="col-lg-3 col-md-6 col-12">
                    <div class="single-widget">
                        <h2>Quick Link</h2>
                        <ul>
                            <li><a href="#">About Company</a></li>
                            <li><a href="#">Destination</a></li>
                            <li><a href="#">Tour Story</a></li>
                            <li><a href="#">Hotel & Resort</a></li>
                            <li><a href="#">Disclaimer</a></li>
                        </ul>
                    </div>
                </div>
                <!--/ End Single Widget -->
                <!-- Single Widget -->
                <div class="col-lg-3 col-md-6 col-12">
                    <div class="single-widget">
                        <h2>Some Info</h2>
                        <ul>
                            <li><a href="#">About Company</a></li>
                            <li><a href="#">Destination</a></li>
                            <li><a href="#">Tour Story</a></li>
                            <li><a href="#">Hotel & Resort</a></li>
                            <li><a href="#">Disclaimer</a></li>
                        </ul>
                    </div>
                </div>
                <!--/ End Single Widget -->
                <!-- Single Widget -->
                <div class="col-lg-3 col-md-6 col-12">
                    <div class="single-widget contact-info">
                        <h2>Contact Information</h2>
                        <ul class="contact-inner">
                            <li><p><span>Location:</span>Lakshmipur-sadar, shamgonj,mondoltoli</p></li>
                            <li><p><span>Email:</span>ingo@travelia.com</p></li>
                            <li><p><span>Phone:</span>+0987-6545-3212</p></li>

                        </ul>
                        <!-- Social -->
                        <ul class="social">
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                            <li><a href="#"><i class="fa fa-youtube"></i></a></li>
                        </ul>
                        <!--/ End Social -->
                    </div>
                </div>
                <!--/ End Single Widget -->
            </div>
        </div>
    </div>
    <!--/ End Footer Top -->
    <!-- Footer Bottom -->
    <div class="footer-bottom">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="bottom-inner">
                        <div class="row">
                            <div class="col-12">
                                <!-- Copyright -->
                                <div class="copyright">
                                    <p>Copyright &#9400; 2022 &copy; <a href="#">Loan Management</a> All Right Reserved. </p>
                                </div>
                                <!--/ End Copyright -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--/ End Footer Bottom -->
</footer>
<!--/ End footer -->

<!-- Jquery -->
<script src="{{asset('frontend/js/jquery.min.js')}}"></script>
<script src="{{asset('frontend/js/jquery-migrate-3.0.0.js')}}"></script>
<script src="{{asset('frontend/js/jquery-ui.min.js')}}"></script>
<!-- Popper JS -->
<script src="{{asset('frontend/js/popper.min.js')}}"></script>
<!-- Bootstrap JS -->
<script src="{{asset('frontend/js/bootstrap.min.js')}}"></script>
<!-- Bootstrap Datepicker JS -->
<script src="{{asset('frontend/js/bootstrap-datepicker.js')}}"></script>
<!-- Steller JS -->
<script src="{{asset('frontend/js/steller.js')}}"></script>
<!-- Fancybox JS -->
<script src="{{asset('frontend/js/facnybox.min.js')}}"></script>
<!-- Slicknav JS -->
<script src="{{asset('frontend/js/slicknav.min.js')}}"></script>
<!-- Niceselect JS -->
<script src="{{asset('frontend/js/niceselect.js')}}"></script>
<!-- Owl Carousel JS -->
<script src="{{asset('frontend/js/owl-carousel.js')}}"></script>
<!-- Magnific Popup JS -->
<script src="{{asset('frontend/js/magnific-popup.js')}}"></script>
<!-- Waypoints JS -->
<script src="{{asset('frontend/js/waypoints.min.js')}}"></script>
<!-- Wow Min JS -->
<script src="{{asset('frontend/js/wow.min.js')}}"></script>
<!-- Jquery Counterup JS -->
<script src="{{asset('frontend/js/jquery-counterup.min.js')}}"></script>
<!-- ScrollUp JS -->
<script src="{{asset('frontend/js/scrollup.js')}}"></script>
<!-- Easing JS -->
<script src="{{asset('frontend/js/easing.js')}}"></script>
<!-- Active JS -->
<script src="{{asset('frontend/js/active.js')}}"></script>
</body>
</html>
