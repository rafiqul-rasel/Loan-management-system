@extends('layouts.frontend')
@section('content')

    <!-- Breadcrumb -->
    <div class="breadcrumbs overlay" data-stellar-background-ratio="0.7">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="content">
                        <h2>Contact Us</h2>
                        <ul class="list">
                            <li><a href="index.html">Home</a></li>
                            <li><a href="#">Pages</a></li>
                            <li><a href="about.html">Contact</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--/ End Breadcrumb -->

    <section id="contact" class="section">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-12 col-sm-12">
                    <div class="contact-details">
                        <div class="contact-info">
                            <div class="title">
                                <h2>Contact <span>info</span></h2>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum ut semper metus. Nullam a elit faucibus, tempor ex at, placerat ligula. Maecenas varius ex mi, elementum porttitor mauris gravida sit amet.</p>
                            </div>
                            <div class="single-info">
                                <i class="icofont-location-pin"></i>
                                <a href="#">Road-7 old Street, Dhaka</a>
                            </div>
                            <div class="single-info">
                                <i class="icofont-phone"></i>
                                <a href="#">+8801765469</a>
                            </div>
                            <div class="single-info">
                                <i class="icofont-ui-message"></i>
                                <a href="#">info@lms.com</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8 col-md-12 col-sm-12">
                    <div class="contact-head">
                        <form class="form" action="#">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input name="name" type="text" placeholder="full name">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input name="email" type="email" placeholder="enter your email">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <input name="subject" type="text" placeholder="subjects">
                                    </div>
                                    <div class="form-group">
                                        <textarea name="message" placeholder="type your message"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <div class="button">
                                            <button type="submit" class="btn">Send Message</button>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </section>

@endsection
