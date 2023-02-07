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
                            <a href="/services/air">
                                <li class="list-group-item text-warning">Air Service</li>
                            </a>
                            <a href="/services/road">
                                <li class="list-group-item">Road Service</li>
                            </a>
                            <a href="/services/storage">
                                <li class="list-group-item">Storage Service</li>
                            </a>
                            <a href="/services/warehouse">
                                <li class="list-group-item">Warehouse Service</li>
                            </a>

                        </ul>
                    </div>

                </div>
                <div class="col-sm-12 col-md-8 pe-lg-0 wow fadeInRight contact" data-wow-delay="0.1s">

                    <h2 class="mb-3">Details</h2>

                    <p>We provide an integrated network of air and ground transport options that give you the widest range of air cargo choices – all without having to make multiple calls to find the best rates. Your shipment size and speed requirements are matched to the perfect aircraft, eliminating waste and reducing expenses. If your deadline does not support using a scheduled flight, your shipment can fly via a dedicated air cargo charter service. From the moment you call until after your shipment reaches its final destination, you can trust ShipTop to deliver your freight, high quality and superior customer service – every time.</p>

                    <p>
                        A strong logistics chain is the foundation for every successful air cargo delivery. Xpress Delivery unlocks this competitive advantage for you through its experienced expediters, business longevity, relationships in the industry, advanced freight tracking technologies, and an extensive network of vehicles and airline partners.
                    </p>


                    <img src="assets/img/services_air.jpg" alt="">

                    <h2 class="my-3">Was Our Solution Best?</h2>

                    <p>ShipTop utilizes express shipping by air, allowing us to complete any air cargo delivery globally or within the United States and Canada in a matter of hours. Instead of maintaining our own aviation fleet, we coordinate the services of multiple cargo airlines to get your freight wherever you need it to be. This is the logistical strength and knowhow ShipTop provides across all of its services. We dive deep into air cargo schedules and have an in-depth understanding of global cargo routes. We investigate each airline carefully, ensuring they have the skills and resources to keep our clients’ items safe from start to finish. These critical business partnerships benefit our customers through competitive rates, superior service, and most importantly – getting to the destination on time with your air cargo safe and secure. No matter how tight a client’s deadline or how delicate the items they’re shipping, we have the resources and expertise to deliver them anytime, anywhere.</p>


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