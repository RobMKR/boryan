@extends('layout')

@section('title', 'Sur Home Services')

@section('content')

    <!-- breadcrumb start-->
    <section class="breadcrumb breadcrumb_bg align-items-center">
        <div class="container">
            <div class="row align-items-center justify-content-between">
                <div class="col-sm-6">
                    <div class="breadcrumb_tittle text-left">
                        <h2>repair services</h2>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="breadcrumb_content text-right">
                        <p>Home<span>/</span>services<span>/</span>repair</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- breadcrumb start-->

    <!--services part start-->
    <section class="our_service section_padding single_page_services">
        <div class="container">
            <div class="row" style="text-align: center;">
                <div class="col-xl-8" style="margin: 0 auto;">
                    <div class="section_tittle">
                        <h2>repair services</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-8 single-service-row">
                    <div class="single_feature">
                        <div class="single_service">
                            <i class="big fas fa-tv"></i>
                            <h4>TV Repairs</h4>
                            <p>Having your TV breakdown is non other than a big inconvenience.
                                We realise this that’s why we make the whole process of having your TV repaired EASY.
                                We guarantee one of our engineers to be with you at a time that is convenient for you,
                                where your TV will be collected from your front door, it will then be taken away to our state
                                of the art service centre and once your TV has been repaired we will deliver your TV back to your home and set it
                                all back up good as new.</p>
                            <p>
                                No matter what make or model of your television our experienced
                                engineers more often than not will have your pride and joy back up
                                and running before you know it. For a fixed fee of <b>$100</b>, your television can be
                                collected from your home or you can drop it off at our state of the art repair centre.
                                From there, we can provide you with a free estimate of the repair cost.
                                <br>
                                All of our repairs are charged at a fixed fee of <b>$155 (<32″)</b> and <b>$185 (>32″)</b>.
                                This fee excludes the price of a screen, and a select few high value components.
                                There is a <b>$20</b> non-refundable deposit to cover inspection costs but should you go
                                ahead with the repair the <b>$20</b> is taken off the total amount.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-8 single-service-row">
                    <div class="single_feature">
                        <div class="single_service">
                            <i class="big fas fa-toolbox"></i>
                            <h4>Domestic Appliance Repairs</h4>
                            <p>
                                We repair all domestic appliances, from Vacuum Cleaners to Microwaves to DVD Players to HiFi Systems,
                                we can fix it. Why not fill in the form below and one of our expert team will call you back.
                            </p>
                            <br>
                            <p>
                                We all have busy lives and when something ‘everyday’ breaks down it can only be
                                described as a massive inconvenience. To ensure you get your appliance working the way it
                                should as quickly as possible our expertly trained engineer team are on hand to do just that.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-8 single-service-row">
                    <div class="single_feature">
                        <div class="single_service">
                            <i class="big fas fa-recycle"></i>
                            <h4>Washing Machine and Dryer Repairs</h4>
                            <p>
                                We understand the inconvenience a broken washing machine can be,
                                that’s why we aim to have an engineer to your home within 48 hours
                                of the fault being reported to us. All repairs are carried out at your home meaning
                                there is no long period of time where you are without a washing machine because it is ‘away for repair’.
                            </p>
                            <p>
                                Although we can not fix all manufacturers of washing machines and dryers we can fix a high number,
                                therefore why not give us a call to see if we can be of assistance to you.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-8 single-service-row">
                    <div class="single_feature">
                        <div class="single_service">
                            <i class="big fas fa-asterisk"></i>
                            <h4>Fridge-Freezer Repairs</h4>
                            <p>
                                Having your fridge-freezer breakdown can be a real hassle,
                                especially if you have just done the food shopping!
                                Although we may not be able to save your latest shop we do
                                aim to have an engineer with you within 48 hours of your call,
                                and all our repairs are carried out within your home by our highly trained engineers.
                            </p>
                            <p>
                                Although we can not fix all manufacturers of
                                fridge-freezers we can fix a high number therefore why not give us a
                                call to see if we can be of assistance to you.
                                There is a <b>$40</b> non-refundable payment required to cover engineer the engineer callout.
                                Inspection reports can be provided at a cost of <b>$49</b>. Give the Boryan Electronics team a call today where they will be more than happy to help
                            </p>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--services part end-->

@endsection

@section('end')
    <!-- jquery plugins here-->
    <!-- jquery -->
    <script src="/js/jquery-1.12.1.min.js"></script>
    <!-- popper js -->
    <script src="/js/popper.min.js"></script>
    <!-- bootstrap js -->
    <script src="/js/bootstrap.min.js"></script>
    <!-- easing js -->
    <script src="/js/jquery.magnific-popup.js"></script>
    <!-- swiper js -->
    <script src="/js/swiper.min.js"></script>
    <!-- isotope js -->
    <script src="/js/isotope.pkgd.min.js"></script>
    <!-- particles js -->
    <script src="/js/owl.carousel.min.js"></script>
    <script src="/js/jquery.nice-select.min.js"></script>
    <!-- swiper js -->
    <script src="/js/slick.min.js"></script>
    <script src="/js/jquery.counterup.min.js"></script>
    <script src="/js/waypoints.min.js"></script>
    <!-- custom js -->
    <script src="/js/custom.js"></script>
@endsection