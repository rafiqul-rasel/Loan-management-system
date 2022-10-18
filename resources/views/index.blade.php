@extends('layouts.frontend')
@section('content')
    <!-- Hero Area Slider -->
    <section id="hero-area" class="hero-area overlay">
        <!-- Slider Area -->
        <div class="slider-active">
            <div class="single-slider overlay" style="background-image:url('{{asset("frontend/images/slider/bg-2.jpg")}}')">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="hero-inner">
                                <!-- Welcome Text -->
                                <div class="welcome-text">
                                    <h1>Digital Loan  <span> Management System!</span></h1>
                                    <p>
                                        <span><i class="icofont-airplane"></i>Loan 350 Apply</span>
                                        <span><i class="icofont-location-pin"></i>More Than 10,000 Reg</span>
                                        <span><i class="icofont-verification-check"></i>Best Loan guarantee</span>
                                    </p>
                                    <!-- Button -->
                                    <div class="button">
                                        <a href="" class="btn">Apply Loan</a>
                                        <a href="contact.html" class="btn primary">Contact Us</a>
                                    </div>
                                    <!--/ End Button -->
                                </div>
                                <!--/ End Welcome Text -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="single-slider overlay" style="background-image:url('{{asset("frontend/images/slider/bg-3.jpg")}}')">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="hero-inner">
                                <!-- Welcome Text -->
                                <div class="welcome-text">
                                    <h1>Let's Discover <span>Loan Management System!</span></h1>
                                    <p>
                                        <span><i class="icofont-airplane"></i>Over 350 Loan Approved</span>
                                        <span><i class="icofont-location-pin"></i>More Than 10,000 Apply</span>
                                        <span><i class="icofont-verification-check"></i>Best Price guarantee</span>
                                    </p>
                                    <!-- Button -->
                                    <div class="button">
                                        <a href="trip-3-column.html" class="btn">Approve</a>
                                        <a href="contact.html" class="btn primary">Contact Us</a>
                                    </div>
                                    <!--/ End Button -->
                                </div>
                                <!--/ End Welcome Text -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--/ End Slider Area -->
    </section>
    <!--/ End Hero Area Slider -->

    

    <!-- Why Choose -->
    <section id="why-choose" class="why-choose section">
        <div class="container">
            <div class="row">
                <div class="col-12 wow zoomIn" data-wow-delay="0.4s">
                    <div class="title-line center">
                        <h2><span>Why Choose</span> Us?</h2>
                        <p>Lorem Ipsum is simply dummy text of the printing and industry. Lorem Ipsum is simply dummy text of the printing and typesetting industry. </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-7 col-12">
                    <div class="row">
                        <div class="col-6 col-md-6 col-12 wow fadeInLeft" data-wow-delay="0.4s">
                            <!-- Choose Single -->
                            <div class="choose-single">
                                <i class="icofont-lock"></i>
                                <div class="content">
                                    <h4>Secure Online transaction</h4>
                                    <p>Security and privacy of your transaction are 100% protected by travelia authorized.</p>
                                </div>
                            </div>
                            <!--/ End Choose Single -->
                        </div>
                        <div class="col-6 col-md-6 col-12 wow fadeInLeft" data-wow-delay="0.6s">
                            <!-- Choose Single -->
                            <div class="choose-single">
                                <i class="icofont-notebook"></i>
                                <div class="content">
                                    <h4>Manage Apply online</h4>
                                    <p>Security and privacy of your transaction are 100% protected by travelia authorized.</p>
                                </div>
                            </div>
                            <!--/ End Choose Single -->
                        </div>
                        <div class="col-6 col-md-6 col-12 wow fadeInLeft" data-wow-delay="0.8s">
                            <!-- Choose Single -->
                            <div class="choose-single">
                                <i class="icofont-search-2"></i>
                                <div class="content">
                                    <h4>Most extensive search</h4>
                                    <p>Security and privacy of your transaction are 100% protected by travelia authorized.</p>
                                </div>
                            </div>
                            <!--/ End Choose Single -->
                        </div>
                        <div class="col-6 col-md-6 col-12 wow fadeInLeft" data-wow-delay="1s">
                            <!-- Choose Single -->
                            <div class="choose-single">
                                <i class="icofont-headphone-alt"></i>
                                <div class="content">
                                    <h4>Customer service</h4>
                                    <p>Security and privacy of your transaction are 100% protected by travelia authorized.</p>
                                </div>
                            </div>
                            <!--/ End Choose Single -->
                        </div>
                        <div class="col-6 col-md-6 col-12 wow fadeInLeft" data-wow-delay="1.2s">
                            <!-- Choose Single -->
                            <div class="choose-single">
                                <i class="icofont-lock"></i>
                                <div class="content">
                                    <h4>Secure Online transaction</h4>
                                    <p>Security and privacy of your transaction are 100% protected by travelia authorized.</p>
                                </div>
                            </div>
                            <!--/ End Choose Single -->
                        </div>
                        <div class="col-6 col-md-6 col-12 wow fadeInLeft" data-wow-delay="1.4s">
                            <!-- Choose Single -->
                            <div class="choose-single">
                                <i class="icofont-notebook"></i>
                                <div class="content">
                                    <h4>Manage your bookings</h4>
                                    <p>Security and privacy of your transaction are 100% protected by travelia authorized.</p>
                                </div>
                            </div>
                            <!--/ End Choose Single -->
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 col-12 wow fadeInRight" data-wow-delay="0.6s">
                    <!-- Choose Single -->
                    <div class="why-image overlay">
                        <img src="{{asset('frontend/images/why.jpg')}}" alt="#">
                        <a href="https://www.youtube.com/watch?v=45ETZ1xvHS0" class="video video-popup mfp-iframe"><i class="fa fa-play"></i></a>
                    </div>
                    <!--/ End Choose Single -->
                </div>
            </div>
        </div>
    </section>
    <!-- End Why Choose -->

  

   

    <!-- Counter -->
    <section id="counter" class="counter overlay section" data-stellar-background-ratio="0.5">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-12">
                    <!-- Single Count -->
                    <div class="single-count">
                        <i class="icofont-ui-user-group"></i>
                        <h2><span class="number">2500</span> Registration</h2>
                    </div>
                    <!--/ End Single Count -->
                </div>
                <div class="col-lg-3 col-md-6 col-12">
                    <!-- Single Count -->
                    <div class="single-count">
                        <i class="icofont-airplane-alt"></i>
                        <h2><span class="number">5533</span> Loan Apply</h2>
                    </div>
                    <!--/ End Single Count -->
                </div>
                <div class="col-lg-3 col-md-6 col-12">
                    <!-- Single Count -->
                    <div class="single-count">
                        <i class="icofont-island"></i>
                        <h2><span class="number">232</span> Loan Approve</h2>
                    </div>
                    <!--/ End Single Count -->
                </div>
                <div class="col-lg-3 col-md-6 col-12">
                    <!-- Single Count -->
                    <div class="single-count">
                        <i class="icofont-bus-alt-1"></i>
                        <h2><span class="number">542</span> User</h2>
                    </div>
                    <!--/ End Single Count -->
                </div>
            </div>
        </div>
    </section>
    <!--/ End Counter -->

    

    <!-- Testimonials -->
    <section id="testimonials" class="testimonials overlay section wow fadeInUp" data-wow-delay="0.4s" data-stellar-background-ratio="0.5">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="testimonial-slider-two">
                        <!-- Single Slider -->
                        <div class="single-slider">
                            <div class="author">
                                
                                <h2><i class="icofont-quote-left"></i>Mr.Rahim<i class="icofont-quote-right"></i><span>Managing Director</span></h2>
                            </div>
                            <div class="t-content">
                                <p>ultricies. Phasellus At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti providen"</p>
                            </div>
                        </div>
                        <!--/ End Single Slider -->
                        <!-- Single Slider -->
                        <div class="single-slider">
                            <div class="author">
                                
                                <h2><i class="icofont-quote-left"></i>Mr.Rsel<i class="icofont-quote-right"></i><span>Dhaka, BD</span></h2>
                            </div>
                            <div class="t-content">
                                <p>ultricies. Phasellus At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti providen"</p>
                            </div>
                        </div>
                        <!--/ End Single Slider -->
                        <!-- Single Slider -->
                        <div class="single-slider">
                            <div class="author">
                              
                                <h2><i class="icofont-quote-left"></i>Mr.Korim McLaren<i class="icofont-quote-right"></i><span>Dhaka, BD</span></h2>
                            </div>
                            <div class="t-content">
                                <p>ultricies. Phasellus At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti providen"</p>
                            </div>
                        </div>
                        <!--/ End Single Slider -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--/ End Testimonials -->



@endsection
