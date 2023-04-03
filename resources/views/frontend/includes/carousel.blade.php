<div class="container-fluid p-0 ">
    <div class="owl-carousel header-carousel position-relative mb-5">
    @foreach($carousel as $key => $carousel)
        @if($key < 3)
        <div class="owl-carousel-item position-relative">
            <img class="img-fluid" src="assets/img/{{$carousel->image}}" alt="">
            <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center" style="background: rgba(6, 3, 21, .5);">
                <div class="container">
                    <div class="row justify-content-start">
                        <div class="col-10 col-lg-8">
                            <h5 class="text-warning text-uppercase mb-3 animated slideInDown">{{$carousel->sub_title}}</h5>
                            <h1 style="text-transform: uppercase;" class="display-3 text-white animated slideInDown mb-4 bold">{{$carousel->title}}</h1>
                            <a href="/tracking" class="noRadius btn btn-warning text-light py-md-3 px-md-5 me-3 animated slideInLeft mt-2">TRACK SHIPMENT</a>
                            <a href="/contact" class="noRadius btn btn-outline-warning text-light py-md-3 px-md-5 animated slideInRight mt-2">CONTACT US</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endif
    @endforeach
        <!-- <div class="owl-carousel-item position-relative">
            <img class="img-fluid" src="assets/img/carousel-2.jpg" alt="">
            <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center" style="background: rgba(6, 3, 21, .5);">
                <div class="container">
                    <div class="row justify-content-start">
                        <div class="col-10 col-lg-8">
                            <h5 class="text-warning text-uppercase mb-3 animated slideInDown ">Transport & Logistics Solution</h5>
                            <h1 style="text-transform: uppercase;" class="display-3 text-white animated slideInDown mb-4 bold">#1 Place For Your Transport Solution</h1>
                            <a href="/tracking" class="noRadius btn btn-warning text-light py-md-3 px-md-5 me-3 animated slideInLeft mt-2">TRACK SHIPMENT</a>
                            <a href="/contact" class="noRadius btn btn-outline-warning text-light py-md-3 px-md-5 animated slideInRight mt-2">CONTACT US</a>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->
    </div>
</div>