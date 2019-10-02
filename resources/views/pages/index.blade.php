@extends('layout')

@section('title', 'Boryan Electronics')

@section('content')

    <!-- banner part start-->
    <section class="banner_part">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-xl-6">
                    <div class="banner_text">
                        <div class="banner_text_iner">
                            <h1>Committed
                                to <span>Superior</span> Quality
                                and Results</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- banner part start-->

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

    <!-- our_service start-->
    <section class="our_service padding_top" style="    padding-bottom: 100px;">
        <div class="container">
            <div class="row">
                <div class="col-xl-5">
                    <div class="section_tittle">
                        <h2>our services</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6 col-xl-4">
                    <div class="single_feature">
                        <div class="single_service">
                            <i class="big fas fa-tools"></i>
                            <h4>Repair Services</h4>
                            <a href="/services/repair" class="btn_3">read more</a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-xl-4">
                    <div class="single_feature">
                        <div class="single_service">
                            <i class="big fas fa-toolbox"></i>
                            <h4>Installation Services</h4>
                            <a href="/services/installation" class="btn_3">read more</a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-xl-4">
                    <div class="single_feature">
                        <div class="single_service single_service_2">
                            <i class="big fas fa-cog"></i>
                            <h4>Set Up Services</h4>
                            <a href="/services/setup" class="btn_3">read more</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <a href="/services" class="btn_3" style="text-align: center;">See all services</a>
            </div>
        </div>
    </section>
    <!-- our_service part end-->

    <!-- member_counter counter start -->
    <section class="member_counter padding_bottom">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-sm-6">
                    <div class="single_counter_icon">
                        <img src="img/icon/Icon_1.svg" alt="">
                    </div>
                    <div class="single_member_counter">
                        <span class="counter">114</span>
                        <h4> <span>Satisfied</span> Client</h4>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="single_counter_icon">
                        <img src="img/icon/Icon_2.svg" alt="">
                    </div>
                    <div class="single_member_counter">
                        <span class="counter">10</span>
                        <h4> <span>Worldwide</span> Partners</h4>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="single_counter_icon">
                        <img src="img/icon/Icon_4.svg" alt="">
                    </div>
                    <div class="single_member_counter">
                        <span class="counter">250</span>
                        <h4> <span>Work</span> Finished</h4>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- member_counter counter end -->


@endsection

@section('end')

    <!-- jquery plugins here-->
    <!-- jquery -->
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