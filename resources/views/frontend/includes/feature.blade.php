<div class="container overflow-hidden py-4 px-lg-0">
    <div class="container feature py-5 px-lg-0">
        <div class="row g-5 mx-lg-0">
            <div class="col-lg-6 feature-text wow fadeInUp" data-wow-delay="0.1s">
            @foreach($header as $key => $header)
            @if($key < 1) 

                <h6 class="text-secondary text-uppercase mb-3">Our Features</h6>
                <h1 class="mb-5">{{$header->feature_title}}</h1>
                <p>{{$header->feature_sub}}</p>

                @endif
            @endforeach

            @foreach($header as $key => $header)
            @if($key < 3) 
                <div class="d-flex mb-5 wow fadeInUp" data-wow-delay="0.3s">
                    <i class="fa fa-globe text-primary fa-3x flex-shrink-0"></i>
                    <div class="ms-4">
                        <h5>Worldwide Service</h5>
                        <p class="mb-0">We provide the best logistic service for globally</p>
                    </div>
                </div>
                @endif
            @endforeach

                <div class="d-flex mb-5 wow fadeIn" data-wow-delay="0.5s">
                    <i class="fa fa-clock-o text-primary fa-3x flex-shrink-0"></i>
                    <div class="ms-4">
                        <h5>On Time Delivery</h5>
                        <p class="mb-0">We know how to make it in time and set the right terms for deliveries.</p>
                    </div>
                </div>
                <div class="d-flex mb-0 wow fadeInUp" data-wow-delay="0.7s">
                    <i class="fa fa-credit-card-alt text-primary fa-3x flex-shrink-0"></i>
                    <div class="ms-4">
                        <h5>Payment Method</h5>
                        <p class="mb-0">All payment methods are acceptable for ordering our services.</p>
                    </div>
                </div>
            </div>
            @foreach($headers as $key => $headers)
            @if($key < 1) 
            <div class="col-lg-6 wow fadeInRight" data-wow-delay="0.1s" style="min-height: 400px;">
                <div class="position-relative h-100">
                    <img class="position-absolute img-fluid w-100 h-100" src="assets/img/{{$headers->feature_image}}" style="object-fit: cover;" alt="#">
                </div>
            </div>
            @endif
            @endforeach
        </div>
    </div>
</div>