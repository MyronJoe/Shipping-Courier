<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Logistica - Shipping Company</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">
    <!-- Favicon -->
    <link href="assets/img/favicon.ico" rel="icon">
    <!-- All Styles -->
    @include('frontend.includes.styles')
</head>

<body>

    <!-- HEADER -->
    @include('frontend.includes.header')
    <!-- /HEADER -->

    <div class="content">

        <!-- Page Header Start -->
        <div class="container-fluid page-header py-5" style="margin-bottom: 6rem;">
            <div class="container py-5">
                <h1 class="display-3 text-white mb-3 animated slideInDown" style="font-size: 45px;">About Us</h1>
                <nav aria-label="breadcrumb animated slideInDown">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a class="text-white" href="#">Home</a></li>
                        <li class="breadcrumb-item"><a class="text-white" href="#">Pages</a></li>
                        <li class="breadcrumb-item text-white active" aria-current="page">About</li>
                    </ol>
                </nav>
            </div>
        </div>
        <!-- Page Header End -->


        <!-- About Start -->
        <div class="container overflow-hidden px-lg-0">
            <div class="container about px-lg-0">
                <div class="row g-5 mx-lg-0">
                    <div class="col-lg-6 wow fadeInLeft Tracker" data-wow-delay="0.1s" style="background-image: url(assets/img/about.jpg);">

                    </div>


                    <div class="col-lg-6 about-text wow fadeInUp" data-wow-delay="0.3s">
                        <h6 class="text-secondary text-uppercase mb-3">About Us</h6>
                        <p class="mb-5"><b>(Com Name)</b> is a world leader in global container shipping and a company that prides itself on offering digitized global services with local knowledge.</p>
                        <div class="row g-4 mb-4">
                            <div class="col-sm-6 wow fadeIn" data-wow-delay="0.5s">
                                <i class="fa fa-clock-o fa-3x text-primary mb-3"></i>
                                <h5>24/7 Support</h5>
                                <p class="m-0">Our support is available 24/7 to attend to all your needs. Send an email to logist@gmail.com for any inquiry.</p>
                            </div>
                            <div class="col-sm-6 wow fadeIn" data-wow-delay="0.7s">
                                <i style="transform: scaleX(-1)" class="fa fa-truck fa-3x text-primary mb-3"></i>
                                <h5>On Time Delivery</h5>
                                <p class="m-0">With our advanced tracking system, you can get up to date information on the arrival time of your deliveries.</p>
                            </div>
                        </div>
                        <div class="row g-4 mb-4">
                            <div class="col-sm-6 wow fadeIn" data-wow-delay="0.5s">
                                <i class="fa fa-globe fa-3x text-primary mb-3"></i>
                                <h5>GLOBAL SHIPPING</h5>
                                <p class="m-0">We offer shipping solutions all over the globe in over 180 countries.</p>
                            </div>
                            <div class="col-sm-6 wow fadeIn" data-wow-delay="0.7s">
                                <i style="transform: scaleX(-1)" class="fa fa-users fa-3x text-primary mb-3"></i>
                                <h5>OUR EXPERT TEAM</h5>
                                <p class="m-0">We have a team of dedicated and experienced professionals working round the clock to serve you better.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- About End -->


        <!-- Service Start -->
        @include('frontend.includes.service')
        <!-- Service End -->


        <!-- Fact Start -->
        @include('frontend.includes.fact')
        <!-- Fact End -->


        <!-- Feature Start -->
        @include('frontend.includes.feature')
        <!-- Feature End -->


        <!-- FREIGHT Start -->
        @include('frontend.includes.freight')
        <!-- FREIGHT End -->


        <!-- Footer Start -->
        @include('frontend.includes.footer')
        <!-- Footer End -->

    </div>
    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded-0 back-to-top"><i class="bi bi-arrow-up"></i></a>
    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="assets/lib/wow/wow.min.js"></script>
    <script src="assets/lib/easing/easing.min.js"></script>
    <script src="assets/lib/waypoints/waypoints.min.js"></script>
    <script src="assets/lib/counterup/counterup.min.js"></script>
    <script src="assets/lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="assets/js/main.js"></script>
</body>

</html>