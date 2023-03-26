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

</head>

<body>

    <!-- HEADER -->
    @include('frontend.includes.header')
    <!-- /HEADER -->

    <div class="content">

        <!-- Page Header Start -->
        <div class="container-fluid page-header py-5" style="margin-bottom: 6rem;">
            <div class="container py-5">
                <h1 class="display-3 text-white mb-3 animated slideInDown" style="font-size: 45px;">Contact Us</h1>
                <nav aria-label="breadcrumb animated slideInDown">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a class="text-white" href="#">Home</a></li>
                        <li class="breadcrumb-item"><a class="text-white" href="#">Pages</a></li>
                        <li class="breadcrumb-item text-white active" aria-current="page">Contact</li>
                    </ol>
                </nav>
            </div>
        </div>
        <!-- Page Header End -->

        <!-- Contact Start -->
        <div class="container-fluid overflow-hidden px-lg-0 mb-5">
            <div class="container contact-page px-lg-0">
                <div class="row g-5 mx-lg-0">
                    <div class="col-md-6 contact-form wow fadeIn" data-wow-delay="0.1s">
                        <h6 class="text-secondary text-uppercase">Get In Touch</h6>
                        <h1 class="mb-4">Contact For Any Query</h1>
                        <div class="bg-light p-4">
                            <form action="{{url('send_message')}}" method="POST" enctype="multipart/form-data">
                                <div class="row g-3">
                                    <div class="col-md-6">
                                        <div class="form-floating">
                                            <input type="text" class="form-control" id="name" placeholder="Your Name">
                                            <label for="name">Your Name</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-floating">
                                            <input type="email" class="form-control" id="email" placeholder="Your Email">
                                            <label for="email">Your Email</label>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-floating">
                                            <input type="text" class="form-control" id="subject" placeholder="Subject">
                                            <label for="subject">Subject</label>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-floating">
                                            <textarea class="form-control" placeholder="Leave a message here" id="message" style="height: 100px"></textarea>
                                            <label for="message">Message</label>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <button class="btn btn-primary w-100 py-3" type="submit">Send Message</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-md-6 pe-lg-0 wow fadeInRight contact" data-wow-delay="0.1s">

                        <h2>KEEP IN TOUCH WITH US</h2>

                        <div class="d-flex mt-4">
                            <h4 class="m-0 pe-lg-5 d-none d-lg-block"><i class="fa fa-envelope text-primary me-3"></i></h4>
                            <div>
                                <h5>
                                    Mail Us
                                </h5>
                                <p>compName@gmail.com</p>
                            </div>
                        </div>

                        <div class="d-flex mt-4">
                            <h4 class="m-0 pe-lg-5 d-none d-lg-block"><i class="fa fa-phone text-primary me-3"></i></h4>
                            <div>
                                <h5>
                                    Whatsapp Us
                                </h5>
                                <p>+447466578065</p>
                            </div>
                        </div>


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