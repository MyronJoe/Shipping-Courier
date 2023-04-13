<div class="container-xxl wow fadeInUp mb-5" data-wow-delay="0.1s">
        <div class="container">
            <div class="text-center">
            <h6 class="text-secondary text-uppercase">Testimonial</h6>
            @foreach($header as $key => $header)
                @if($key < 1) 
                <h1 class="mb-0">{{$header->test_title}}</h1>
                @endif
            @endforeach
            </div>
            <div class="owl-carousel testimonial-carousel wow fadeInUp" data-wow-delay="0.1s">
            @foreach($testimony as $key => $testimony)
                @if($key < 4) 
                <div class="testimonial-item p-4 my-5">
                    <i class="fa fa-quote-right fa-3x text-light position-absolute top-0 end-0 mt-n3 me-4"></i>
                    <div class="d-flex align-items-end mb-4">
                        <img class="img-fluid flex-shrink-0" src="assets/img/{{$testimony->image}}" style="width: 80px; height: 80px; margin-right:10px;">
                        <div class="ms-4">
                            <h5 class="mb-1">{{$testimony->name}}</h5>
                            <p class="m-0">{{$testimony->rank}}</p>
                        </div>
                    </div>
                    <p class="mb-0">{!! $testimony->word !!}</p>
                </div>
                @endif
            @endforeach
                <!-- <div class="testimonial-item p-4 my-5">
                    <i class="fa fa-quote-right fa-3x text-light position-absolute top-0 end-0 mt-n3 me-4"></i>
                    <div class="d-flex align-items-end mb-4">
                        <img class="img-fluid flex-shrink-0" src="assets/img/testimonial-2.jpg" style="width: 80px; height: 80px;">
                        <div class="ms-4">
                            <h5 class="mb-1">Tom Bella</h5>
                            <p class="m-0">CEO, Greeny Stores</p>
                        </div>
                    </div>
                    <p class="mb-0">When I started my company in early 2009 a key component was logistics and international freight for my products. I wanted a company that would partner with me, not just be a supplier. ShipTop has been just that, a partner in my business.</p>
                    </p>
                </div> -->
                
            </div>
        </div>
    </div>