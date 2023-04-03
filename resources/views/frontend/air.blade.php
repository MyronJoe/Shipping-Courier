<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Logistica - Shipping Company</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">
    <!-- Favicon -->
    <!-- <link href="assets/img/favicon.ico" rel="icon"> -->
    <!-- All Styles -->
    @include('frontend.includes.styles')
    <style>
        .image img {
            width: 100%;
        }
    </style>
</head>

<body>

    <!-- HEADER -->
    @include('frontend.includes.header')
    <!-- /HEADER -->

    <div class="content">

        <!-- Page Header Start -->
        <div class="container-fluid page-header py-5" style="margin-bottom: 6rem;">
            <div class="container py-5">
                <h3 class="display-3 text-white mb-3 animated slideInDown" style="font-size: 45px;">SERVICE DETAILS</h3>
                <nav aria-label="breadcrumb animated slideInDown">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a class="text-white" href="#">Home</a></li>
                        <li class="breadcrumb-item"><a class="text-white" href="#">Air Service</a></li>
                    </ol>
                </nav>
            </div>
        </div>
        <!-- Page Header End -->

        <!-- Contact Start -->
        <div class="container overflow-hidden px-lg-0">
            <div class="container contact-page px-lg-0">
                <div class="row g-5 mx-lg-0">
                    <div class="col-sm-12 col-md-4 contact-form wow fadeIn" data-wow-delay="0.1s">

                        <div class="card">
                            <div class="card-header">
                                <h6>Service Category</h6>
                            </div>
                            <ul class="list-group list-group-flush">
                                @foreach($title as $key => $title)
                                <a href="{{route('title_details', $title->id)}}">
                                    <li class="list-group-item">{{$title -> card_title}}</li>
                                </a>
                                @endforeach

                            </ul>
                        </div>

                    </div>
                    <div class="col-sm-12 col-md-8 pe-lg-0 wow fadeInRight contact" data-wow-delay="0.1s">

                        <!-- {{ $data->body }} -->
                        {!! $data->body !!}

                    </div>
                </div>
            </div>
        </div>
        <!-- Contact End -->

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