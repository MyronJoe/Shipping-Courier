<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Logistica - Shipping Company</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">
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
                <h3 class="display-3 text-white mb-3 animated slideInDown" style="font-size: 45px;">SERVICE DETAILS</h3>
                <nav aria-label="breadcrumb animated slideInDown">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a class="text-white" href="#">Home</a></li>
                        <li class="breadcrumb-item"><a class="text-white" href="#">Warehouse Service</a></li>
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
                                <a href="/services/air">
                                    <li class="list-group-item ">Air Service</li>
                                </a>
                                <a href="/services/road">
                                    <li class="list-group-item">Road Service</li>
                                </a>
                                <a href="/services/storage">
                                    <li class="list-group-item">Storage Service</li>
                                </a>
                                <a href="/services/warehouse">
                                    <li class="list-group-item text-warning">Warehouse Service</li>
                                </a>

                            </ul>
                        </div>

                    </div>
                    <div class="col-sm-12 col-md-8 pe-lg-0 wow fadeInRight contact" data-wow-delay="0.1s">

                        <h2 class="mb-3">Details</h2>

                        <h6>Excellent warehousing services with GWP</h6>

                        <p>
                            With over 240,000 square meters of warehousing space spread across 91 distribution centers in the United States, we provide a unique variety of warehousing offerings, using GWP (Good Warehouse Practice) compliant facilities. Among the variety of warehousing product options and ancillary services are:
                        </p>

                        <ol>
                            <li class="mb-2">General Warehousing</li>
                            <li class="mb-2">Dedicated Warehousing</li>
                            <li class="mb-2">Customized Warehousing</li>
                            <li class="mb-2">Off-site Warehousing</li>
                            <li class="mb-2">Inventory Management</li>
                            <li class="mb-2">Sales Administration</li>
                            <li class="mb-2">Distribution Management</li>
                            <li class="mb-2">Information Management</li>
                            <li class="mb-2">Credit Control Administration</li>
                        </ol>


                        <img src="assets/img/services_warehouse.jpg" alt="">

                        <h2 class="my-3">Was Our Solution Best?</h2>

                        <p>Powered by our own fleet of new vehicles ranging from 2 ton steel vans, 3.5 and 5 MVCs (Medium Chassis Vehicles) to 12 ton trucks, 30 and 40 ton articulated trucks (flat bed and box bodies), our road haulage products offer services that ensure the integrity and safe monitoring of your products until delivery..</p>


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