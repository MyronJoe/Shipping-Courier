<div class="container-fluid bg-dark text-light footer pt-5 wow fadeIn" data-wow-delay="0.1s" style="margin-top: 1rem;">
    <div class="container">
        <div class="row g-5 pb-5">

            <div class="col-lg-6 col-md-12">
                <p>We are able to guarantee a very high level of satisfaction for our clients. Meeting & exceeding customers service expectations through our highly professional, empowered and motivated employees.</p>
            </div>

            <div class="col-lg-6 col-md-12">

                <div class="row">
                    <div class="col-sm-6">
                        <h4 class="text-light mb-4">Contact Us</h4>
                        <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>123 Street, New York, USA</p>
                        <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>+012 345 67890</p>
                        <p class="mb-2"><i class="fa fa-envelope me-3"></i>info@example.com</p>
                        <div class="d-flex pt-2">
                            <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-youtube"></i></a>
                            <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>

                    <div class=" col-sm-6 services">
                        <h4 class="text-light mb-4">Services</h4>
                        @foreach($service as $key => $title)
                        <a class="btn btn-link" href="{{route('title_details', $title->id)}}">{{$title -> card_title}}</a>
                        @endforeach
                        <!-- <a class="btn btn-link" href="">Air Freight</a>
                        <a class="btn btn-link" href="">Sea Freight</a>
                        <a class="btn btn-link" href="">Road Freight</a>
                        <a class="btn btn-link" href="">Storage</a> -->
                    </div>
                </div>

            </div>


        </div>
    </div>
    <div class="container">
        <div class="copyright">
            <div class="row">
                <div class="text-center mb-3 mb-md-0">
                    &copy; <a class="border-bottom" href="#">Your Site Name</a>, All Right Reserved.
                </div>

            </div>
        </div>
    </div>