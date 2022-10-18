@extends('layouts.frontend')
@section('content')
    <!-- Breadcrumb -->
    <div class="breadcrumbs overlay" data-stellar-background-ratio="0.7">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="content">
                        <h2>About Us</h2>
                        <ul class="list">
                            <li><a href="{{route('homepage')}}">Home</a></li>
                            <li><a href="#">Pages</a></li>
                            <li><a href="{{route('about')}}">About Us</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--/ End Breadcrumb -->

    <!-- About Us -->
    <section class="about section">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-12 col-sm-12">
                    <div class="about-content">
                        <h3>Welcome To <span>Loan Management System</span></h3>
                        <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. sed ut perspiciatis unde sunt in culpa qui officia deserunt mollit anim id est laborum.  sed ut perspiciatis unde omnis iste natus error sit voluptatem Excepteu .Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia desepa qui officia deserunt mollit anim id est laborum. sed ut perspiciatis Excepteur sint occaecat cupidatat non proident, suaficia deserunt mollit anisint occaecat cupidatat non prunt mollit anim id est laborum. sed ut perspiciatis unde sunt in culpa qui officia deserunt mollit anim id est laborum.  sed ut perspiciatis unde omnis iste natus error</p>
                        <p>sunt in culpa qui officiccaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. sed ut perspiciatis unde sunt in culpa qui officia deserunt mollitm id est laborum. sed ut perspi. sunt in culpa qui officia deserunt mollit anim id est laborum. sed ut perspiciatis Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. sed ut perspi.</p>
                        <div class="button">
                            <a href="blog.html" class="btn">Our Blog</a>
                            <a href="contact.html" class="btn primary">Contact Us</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12">
                    <div class="about-img overlay">
                        <div class="button">
                            <a href="https://www.youtube.com/watch?v=45ETZ1xvHS0" class="video video-popup mfp-iframe"><i class="fa fa-play"></i></a>
                        </div>
                        <img src="{{asset('frontend/images/about.jpg')}}" alt="#">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End About Us -->

    <!-- Counter -->
    <section id="counter" class="counter overlay section" data-stellar-background-ratio="0.5">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-12">
                    <!-- Single Count -->
                    <div class="single-count">
                        <i class="icofont-ui-user-group"></i>
                        <h2><span class="number">250</span> Loan Apply</h2>
                    </div>
                    <!--/ End Single Count -->
                </div>
                <div class="col-lg-3 col-md-6 col-12">
                    <!-- Single Count -->
                    <div class="single-count">
                        <i class="icofont-airplane-alt"></i>
                        <h2><span class="number">550</span> Registration</h2>
                    </div>
                    <!--/ End Single Count -->
                </div>
                <div class="col-lg-3 col-md-6 col-12">
                    <!-- Single Count -->
                    <div class="single-count">
                        <i class="icofont-island"></i>
                        <h2><span class="number">232</span> Loan</h2>
                    </div>
                    <!--/ End Single Count -->
                </div>
                <div class="col-lg-3 col-md-6 col-12">
              <!-- Single Count -->
                    <div class="single-count">
                        <i class="icofont-island"></i>
                        <h2><span class="number">232</span> Watting</h2>
                    </div>
                    <!--/ End Single Count -->
                </div>
            </div>
        </div>
    </section>
    <!--/ End Counter -->

    <!-- Start Team -->
    <section id="team" class="team section">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="title-line center">
                        <h2>Our <span>Experties</span></h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6 col-12">
                    <!-- Single Team -->
                    <div class="single-team">
                        <!-- Team Head -->
                        <div class="t-head overlay">
                            <img src="{{asset('frontend/images/team/team1.jpg')}}" alt="#">
                            <div class="t-hover">
                                <!-- Team Content -->
                                <div class="content">
                                    <h2><span>Support</span>Jenife Paoli</h2>
                                    <p>Integer varius pharetra laoreet. Fusce nec tortor efficitur, eleifend neque sit amet, commodo dolor Nam iaculis</p>
                                </div>
                                <!--/ End Content -->
                                <!-- Team Social -->
                                <ul class="t-social">
                                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fa fa-behance"></i></a></li>
                                    <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                                </ul>
                                <!-- /End Team Social -->
                            </div>
                        </div>
                    </div>
                    <!-- End Single Team -->
                </div>
                <div class="col-lg-4 col-md-6 col-12">
                    <!-- Single Team -->
                    <div class="single-team">
                        <!-- Team Head -->
                        <div class="t-head overlay">
                            <img src="{{asset('frontend/images/team/team2.jpg')}}" alt="#">
                            <div class="t-hover">
                                <!-- Team Content -->
                                <div class="content">
                                    <h2><span>Support</span>Jenife Paoli</h2>
                                    <p>Integer varius pharetra laoreet. Fusce nec tortor efficitur, eleifend neque sit amet, commodo dolor Nam iaculis</p>
                                </div>
                                <!--/ End Content -->
                                <!-- Team Social -->
                                <ul class="t-social">
                                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fa fa-behance"></i></a></li>
                                    <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                                </ul>
                                <!-- /End Team Social -->
                            </div>
                        </div>
                    </div>
                    <!-- End Single Team -->
                </div>
                <div class="col-lg-4 col-md-6 col-12">
                    <!-- Single Team -->
                    <div class="single-team">
                        <!-- Team Head -->
                        <div class="t-head overlay">
                            <img src="{{asset('frontend/images/team/team3.jpg')}}" alt="#">
                            <div class="t-hover">
                                <!-- Team Content -->
                                <div class="content">
                                    <h2><span>Support</span>Jenife Paoli</h2>
                                    <p>Integer varius pharetra laoreet. Fusce nec tortor efficitur, eleifend neque sit amet, commodo dolor Nam iaculis</p>
                                </div>
                                <!--/ End Content -->
                                <!-- Team Social -->
                                <ul class="t-social">
                                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fa fa-behance"></i></a></li>
                                    <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                                </ul>
                                <!-- /End Team Social -->
                            </div>
                        </div>
                    </div>
                    <!-- End Single Team -->
                </div>
            </div>
        </div>
    </section>
    <!--/ End Team -->

    <!-- Call To Action -->
    <section id="cta-style" class="cta-style" data-stellar-background-ratio="0.5">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="cta-text">
                        <h2><span>Let's go with us</span>Loan Management System</h2>
                        <p>Necessitatibus enim corrupti ullam voluptatum provident deserunt natus reprehenderit, inventore, tempore aut neque cupiditate, aspernatur! Quibusdam aliquid dolor a culpa, officiis quisquam.</p>
                        <div class="button">
                            <a href="contact.html" class="btn">Book your trip</a>
                            <a href="contact.html" class="btn primary">Contact Us</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--/ End Call To Action -->

@endsection
