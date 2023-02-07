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
                    <li class="breadcrumb-item"><a class="text-white" href="#">Storage Service</a></li>
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
                                <li class="list-group-item text-warning">Storage Service</li>
                            </a>
                            <a href="/services/warehouse">
                                <li class="list-group-item">Warehouse Service</li>
                            </a>
                        </ul>
                    </div>

                </div>
                <div class="col-sm-12 col-md-8 pe-lg-0 wow fadeInRight contact" data-wow-delay="0.1s">

                    <h2 class="mb-3">Details</h2>

                    <p>We will provide our customers and potential customer with a satisfying rental experience that is characterized by professionalism, cleanliness, security and value.</p>

                    <p>
                        We will provide our customers and potential customers with knowledgeable and well trained self storage professionals, willing, ready and able to meet their self storage needs.
                    </p>

                    <p>
                        We subscribe to the following principles:
                    </p>

                    <ul style="list-style: none;">
                        <li>Honesty</li>
                        <li>Integrity</li>
                        <li>The ability to work with our valued customers</li>
                    </ul>

                    <p>By satisfying our customers’ needs, we will prosper as a business and meet the expectations of our owners and investors.</p>


                    <img src="assets/img/services_storage.jpg" alt="">

                    <h2 class="my-3">Was Our Solution Best?</h2>

                    <p>Need to keep your belongings safe and out of the way for an extended period of time? Your stuff is in safe hands with the storage professionals at National Storage. We’ve been providing tailored storage solutions for over 20 years, so it’s safe to say we know our stuff – and how to look after yours. With over 200 centers, you won’t have a problem finding a National Storage center near you. Whether you’ve downsized home and need some extra space for your stuff, or you’re looking for somewhere to keep your belongings during a lengthy overseas trip, we can provide a long-term storage solution that suits you.</p>


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