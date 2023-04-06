<div class="container overflow-hidden py-4 px-lg-0">
    <div class="container feature py-5 px-lg-0">
        <div class="row g-5 mx-lg-0">
            <div class="col-lg-6 feature-text wow fadeInUp" data-wow-delay="0.1s">
            @foreach($header as $key => $header)
            @if($key < 1) 

                <h6 class="text-secondary text-uppercase mb-3">Our Features</h6>
                <h1 class="mb-5">{{$header->feature_title}}</h1>
                <p class="mb-5">{{$header->feature_sub}}</p>

                @endif
            @endforeach

            @foreach($features as $key => $features)
            @if($key < 3) 
                <div class="d-flex mb-5 wow fadeInUp flx" data-wow-delay="0.3s">
                    <!-- <i class="fa fa-globe text-primary fa-3x flex-shrink-0"></i> -->
                    <img class="features-icon flex-shrink-0" src="assets/img/{{$features->icon}}" alt="">
                    <div class="ms-4">
                        <h5>{{$features->title}}</h5>
                        <p class="mb-0">{{$features->sub_title}}</p>
                    </div>
                </div>
                @endif
            @endforeach


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