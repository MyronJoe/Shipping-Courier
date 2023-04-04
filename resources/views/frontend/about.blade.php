<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

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
                    <!-- <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a class="text-white" href="#">Home</a></li>
                        <li class="breadcrumb-item"><a class="text-white" href="#">Pages</a></li>
                        <li class="breadcrumb-item text-white active" aria-current="page">About</li>
                    </ol> -->
                </nav>
            </div>
        </div>
        <!-- Page Header End -->


        <!-- About Start -->
        @include('frontend.includes.about')
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
        <!-- @include('frontend.includes.freight') -->
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