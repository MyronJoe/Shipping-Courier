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

    <style>
        .track-box h2,
        h5 {
            color: white;
            font-size: 18px;
            text-align: left;
            border-left: 4px solid #FF3E41;
            padding: 0px 15px;
            margin-bottom: 1em;
        }

        .track-box {
            background-color: rgba(0, 0, 128, 0.47);
            padding: 2em;
            width: 100%;
        }

        @media screen and (min-width:992px) {
            .track-box-0 {
                /* width: 60% !important; */
                margin: auto;
            }


        }
    </style>

</head>

<body>

    <!-- HEADER -->
    @include('frontend.includes.header')
    <!-- /HEADER -->

    <div class="content">

        <!-- Page Header Start -->
    <div class="container-fluid page-header py-5" style="margin-bottom: 3rem;">
        <div class="container py-5">
            <h1 class="display-3 text-white mb-3 animated slideInDown" style="font-size: 45px;">TRACK PACKAGE</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a class="text-white" href="#">Home</a></li>
                    <li class="breadcrumb-item"><a class="text-white" href="#">Track Package</a></li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->


    <!-- <span>Error Msg</span> -->


    <!-- Contact Start -->
    <div class=" container trackBox" style="margin-bottom: 3rem;">

        <div class="track-box-0" style="background-image: url(assets/img/about.jpg);">

            <div class="track-box">

                <h5>Enter Your Cargo Tracking, Door to Door Office Order Number</h5>

                <form action="{{route('tracking_product')}}" method="POST">
                    @csrf
                    <div>
                        <input type="text" class="noRadius form-control border-0 inputs" placeholder="ENTER TRACKING ID" style="height: 55px;" name="trackID">
                    </div>

                    <div>
                        <button class="noRadius btn btn-primary w-100 py-3 inputs" name="track" type="submit">Track Now</button>
                    </div>
                </form>


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