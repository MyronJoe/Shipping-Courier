<div class="container overflow-hidden px-lg-0">
    <div class="container about px-lg-0">
        <div class="row g-5 mx-lg-0">
            @foreach($header as $key => $header)
            @if($key < 1) 
            <div class="col-lg-6 wow fadeInLeft Tracker" data-wow-delay="0.1s" style="background-image: url(assets/img/{{$header->image}});">
                <div class="track-box">

                    <h2>TRACK YOUR SHIPPING</h2>

                    <p>* PLEASE TYPE IN YOUR TRACKING ID TO GET YOUR TRACKING LOCATION INFORMATION</p>

                    <form action="{{route('tracking_product')}}" method="POST">
                        @csrf
                        <div>
                            <input type="text" class="noRadius form-control border-0 inputs" placeholder="ENTER TRACKING ID" style="height: 55px;" name="trackID">
                        </div>

                        <div>
                            <button class="noRadius btn btn-primary w-100 py-3 inputs" type="submit" name="track">Track Now</button>
                        </div>
                    </form>


                </div>


        </div>


        <div class="col-lg-6 about-text wow fadeInUp" data-wow-delay="0.3s">
            <h6 class="text-secondary text-uppercase mb-3">About Us</h6>
            <p class="mb-5">{!! $header->about_us !!}</p>

            @endif
            @endforeach
            <div class="row g-4 mb-4">
                <div class="col-sm-6 wow fadeIn" data-wow-delay="0.5s">
                    <i class="fa fa-clock-o fa-3x text-primary mb-3"></i>
                    <h5>24/7 Support</h5>
                    <p class="m-0">Our support is available 24/7 to attend to all your needs. Send an email to logist@gmail.com for any inquiry.</p>
                </div>
                <div class="col-sm-6 wow fadeIn" data-wow-delay="0.7s">
                    <i style="transform: scaleX(-1)" class="fa fa-truck fa-3x text-primary mb-3"></i>
                    <h5>On Time Delivery</h5>
                    <p class="m-0">With our advanced tracking system, you can get up to date information on the arrival time of your deliveries.</p>
                </div>
            </div>
            <div class="row g-4 mb-4">
                <div class="col-sm-6 wow fadeIn" data-wow-delay="0.5s">
                    <i class="fa fa-globe fa-3x text-primary mb-3"></i>
                    <h5>GLOBAL SHIPPING</h5>
                    <p class="m-0">We offer shipping solutions all over the globe in over 180 countries.</p>
                </div>
                <div class="col-sm-6 wow fadeIn" data-wow-delay="0.7s">
                    <i style="transform: scaleX(-1)" class="fa fa-users fa-3x text-primary mb-3"></i>
                    <h5>OUR EXPERT TEAM</h5>
                    <p class="m-0">We have a team of dedicated and experienced professionals working round the clock to serve you better.</p>
                </div>
            </div>
        </div>
    </div>
</div>
</div>