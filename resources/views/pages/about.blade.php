@extends('layout')

@section('title', 'Boryan Electonics')

@section('content')
    <!-- breadcrumb start-->
    <section class="breadcrumb breadcrumb_bg align-items-center">
        <div class="container">
            <div class="row align-items-center justify-content-between">
                <div class="col-sm-6">
                    <div class="breadcrumb_tittle text-left">
                        <h2>About Us</h2>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="breadcrumb_content text-right">
                        <p>Home<span>/</span>About Us</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- breadcrumb start-->

    <!-- about part start-->
    <section class="about_part section_padding">
        <div class="container">
            <div class="row align-items-center justify-content-between">
                <div class="col-md-6 col-lg-6">
                    <div class="about_part_img">
                        <img src="img/about_part_img.png" alt="">
                    </div>
                </div>
                <div class="col-md-6 col-lg-5">
                    <div class="about_part_text">
                        <h2>Making Your
                            Dreams With Us</h2>
                        <p>Boryan Electronic Services is the premier electronic repair centre in Glendale.
                            We provide repair services for Television, DVD, Home Theatre, Washing Machines and Dryers, Fridge-Freezers, Microwaves and Vacuum Cleaners.
                            We also provide installation services such as Television wall mounts,
                            Home Theatre design and installation and Aerial and Satellite installation and setup.</p>
                        <ul>
                            <li>
                                <span class="flaticon-drop"></span>
                                <h3>Certified Company</h3>
                                <p>It’s our priority to respond to your enquiry as quickly as possible with engineers visiting your home at a time that is convenient for you (this also includes Saturdays). </p>
                            </li>
                            <li>
                                <span class="flaticon-ui"></span>
                                <h3>Experience Employees</h3>
                                <p>Why not give us a call today and speak with one of our award winning customer service advisors. </p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- about part end-->



    <!-- about part start-->
    <section class="about_part experiance_part section_padding">
        <div class="container">
            <div class="row align-items-center justify-content-between">
                <div class="col-md-6 col-lg-6">
                    <div class="about_part_text">
                        <h2>We Are Experienced
                            in Electronics</h2>
                        <p>
                            The key factor that sets Boryan Electronics apart from any other electronics company is our quality and pride
                            in every job. At Boryan Electronics we repair every item to a better than new state usually at
                            much less than the cost of a new unit. We are able to do all of this by using the most advanced instruments, OEM parts, and through the expertise of our technicians.
                        </p>
                        <div class="about_text_iner">
                            <div class="about_text_counter">
                                <h2>5</h2>
                            </div>
                            <div class="about_iner_content">
                                <h3>years <span>Experience</span></h3>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6">
                    <div class="about_part_img">
                        <img src="img/experiance_img.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- about part end-->

@endsection

@section('end')

    <!-- jquery plugins here-->
    <script src="js/jquery-1.12.1.min.js"></script>
    <!-- popper js -->
    <script src="js/popper.min.js"></script>
    <!-- bootstrap js -->
    <script src="js/bootstrap.min.js"></script>
    <!-- easing js -->
    <script src="js/jquery.magnific-popup.js"></script>
    <!-- swiper js -->
    <script src="js/swiper.min.js"></script>
    <!-- isotope js -->
    <script src="js/isotope.pkgd.min.js"></script>
    <!-- particles js -->
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.nice-select.min.js"></script>
    <!-- swiper js -->
    <script src="js/slick.min.js"></script>
    <script src="js/jquery.counterup.min.js"></script>
    <script src="js/waypoints.min.js"></script>
    <!-- custom js -->
    <script src="js/custom.js"></script>
@endsection