<div class="container-xxl mt-4 pt-4">
    <div class="container">
        
        @foreach($header as $key => $header)
                @if($key < 1) 
                <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                    <h6 class="text-secondary text-uppercase mb-3">Our Services</h6>
                    <h3 class="mb-2">{{$header->service_title}}</h3>
                    <p class="mb-3 text">{{$header->service_sub}}</p>
                </div>
                @endif
            @endforeach
        <div class="row g-4">

            @foreach($service as $key => $service)
                @if($key < 3) 
                    <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="service-item">
                            <div class="overflow-hidden mb-4">
                                <img class="img-fluid" src="assets/img/{{$service->	image}}" alt="{{$service->card_title}}">
                            </div>
                            <h4 class="mb-3">{{$service->card_title}}</h4>
                            <p>{{ Str::limit($service->card_sub_title, 165, '...') }}</p>
                            <a class="btn-slide mt-2" href="{{route('service_details', $service->id)}}"><i class="fa fa-arrow-right"></i><span class="read">Read More</span></a>
                        </div>
                    </div>
                @endif
            @endforeach

        <!-- <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.5s">
                <div class="service-item">
                    <div class="overflow-hidden mb-4">
                        <img class="img-fluid" src="assets/img/service-6.jpg" alt="">
                    </div>
                    <h4 class="mb-3">Warehouse Solutions</h4>
                    <p>Warehousing and storage solutions you can trust.</p>
                    <a class="btn-slide mt-2" href="/services/warehouse"><i class="fa fa-arrow-right"></i><span class="read">Read More</span></a>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.7s">
                <div class="service-item">
                    <div class="overflow-hidden mb-4">
                        <img class="img-fluid" src="assets/img/service-3.jpg" alt="">
                    </div>
                    <h4 class="mb-3">Road Freight</h4>
                    <p>Most cost-effective method of delivering your package.</p>
                    <a class="btn-slide mt-2" href="/services/road"><i class="fa fa-arrow-right"></i><span class="read">Read More</span></a>
                </div>
            </div> -->

        <!-- <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="service-item p-4">
                        <div class="overflow-hidden mb-4">
                            <img class="img-fluid" src="assets/img/service-4.jpg" alt="">
                        </div>
                        <h4 class="mb-3">Train Freight</h4>
                        <p>Stet stet justo dolor sed duo. Ut clita sea sit ipsum diam lorem diam.</p>
                        <a class="btn-slide mt-2" href=""><i class="fa fa-arrow-right"></i><span>Read More</span></a>
                    </div>
                </div> -->

        <!-- <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="service-item p-4">
                        <div class="overflow-hidden mb-4">
                            <img class="img-fluid" src="assets/img/service-5.jpg" alt="">
                        </div>
                        <h4 class="mb-3">Customs Clearance</h4>
                        <p>Stet stet justo dolor sed duo. Ut clita sea sit ipsum diam lorem diam.</p>
                        <a class="btn-slide mt-2" href=""><i class="fa fa-arrow-right"></i><span>Read More</span></a>
                    </div>
                </div> -->

        <!-- <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.7s">
                    <div class="service-item p-4">
                        <div class="overflow-hidden mb-4">
                            <img class="img-fluid" src="assets/img/service-2.jpg" alt="">
                        </div>
                        <h4 class="mb-3">Ocean Freight </h4>
                        <p>Stet stet justo dolor sed duo. Ut clita sea sit ipsum diam lorem diam.</p>
                        <a class="btn-slide mt-2" href=""><i class="fa fa-arrow-right"></i><span>Read More</span></a>
                    </div>
                </div> -->

    </div>
</div>
</div>