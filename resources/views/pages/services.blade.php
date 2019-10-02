@extends('layout')

@section('title', 'Sur Home Services')

@section('content')

    <!-- breadcrumb start-->
    <section class="breadcrumb breadcrumb_bg align-items-center">
        <div class="container">
            <div class="row align-items-center justify-content-between">
                <div class="col-sm-6">
                    <div class="breadcrumb_tittle text-left">
                        <h2>services</h2>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="breadcrumb_content text-right">
                        <p>Home<span>/</span>services</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- breadcrumb start-->

    <!--services part start-->
    <section class="our_service section_padding single_page_services">
        <div class="container">
            <div class="row">
                <div class="col-xl-5">
                    <div class="section_tittle">
                        <h2>our services</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <div class="single_service">
                        <i class="big fas fa-tools"></i>
                        <h4>Repair Services</h4>
                        <p>Boryan Electronics have the expertise and equipment to perform full electronic repair of
                            virtually all electronics. We also refurbish and repair the product by replacing all electrically
                            and thermally overstressed components as a matter of course and provide a comprehensive warranty
                            on all work we perform.</p>
                        <p>
                            We operate at the full component level which reduces material costs dramatically,
                            we save our customers on average >70% of the typical costs they would incur using alternative solutions.
                            We operate in hours and days rather than weeks and Months.
                            Our Management system ensures all items are processed in a timely fashion with any issues immediately addressed.
                            Our typical turn around time on pre-authorised work is under 72 hours.
                        </p>
                        <a href="/services/repair" class="btn_3">see services list</a>
                    </div>
                </div>
                <div class="col-sm-12">
                    <div class="single_feature">
                        <div class="single_service">
                            <i class="big fas fa-toolbox"></i>
                            <h4>Installation Services</h4>
                            <p>
                                Having your TV professionally mounted onto the wall in your home may not be as expensive
                                as you first thought… Starting at $65 our expert engineers will call to your home and carry
                                out the installation ensuring to discretely conceal all cables and connect up all your existing
                                kit just the way it was before. No matter what size, make or model of your TV our guys have the
                                expertise to ensure that your TV is installed with minimal fuss and disruption leaving you to
                                enjoy your newly wall mounted TV in no time. If you are not sure what bracket you require or just
                                don’t have the time to purchase one don’t worry for a small fee we can supply the right bracket for
                                the job leaving you with one less thing to worry about.
                            </p>
                            <p>
                                Or if you wish to add to your viewing experience we can install a home cinema system that will do just that,
                                authorised by all the major manufacturers means all our engineers are up to speed on all the latest technology,
                                having this technology installed at your home will leave your friends and family talking
                                about their visit well after they leave.
                            </p>
                            <a href="/services/installation" class="btn_3">see services list</a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12">
                    <div class="single_feature">
                        <div class="single_service single_service_2">
                            <i class="big fas fa-cog"></i>
                            <h4>Set Up Services</h4>
                            <p>
                                To ensure you get the most out of your smart TV why not have it set up with a full demonstration from our experts.
                                No matter what make or model your TV is our team have the expertise to ensure that their knowledge is passed
                                over to you so that you can enjoy the full benefit of your smart TV.
                                Plus our guys will connect up all your existing equipment ensuring that all cables are managed so
                                that your TV set up looks tidy and professional.
                            </p>
                            <a href="/services/setup" class="btn_3">see services list</a>
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