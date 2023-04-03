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
            <h6 class="text-secondary text-uppercase ">About Us</h6>
            <p class="my-3">{!! $header->about_us !!}</p>

            @endif
            @endforeach


            <div class="row g-4 mb-4">
            @foreach($about as $key => $about)
                @if($key < 2) 
                <div class="col-sm-6 wow fadeIn" data-wow-delay="0.5s">
                    <img class="about-icon my-3" src="assets/img/{{$about->icon}}" alt="">
                    <h5>{{$about->title}}</h5>
                    <p class="m-0">{{$about->sub_title}}</p>
                </div>
                @endif
            @endforeach
            </div>

            <div class="row g-4 mb-4">
            @foreach($abouts as $key => $abouts)
                @if($key > 1 && $key <= 4) 
                <div class="col-sm-6 wow fadeIn" data-wow-delay="0.5s">
                    <img class="about-icon my-3" src="assets/img/{{$abouts->icon}}" alt="">
                    <h5>{{$abouts->title}}</h5>
                    <p class="m-0">{{$abouts->sub_title}}</p>
                </div>
                @endif
            @endforeach
            </div>

        </div>
    </div>
</div>
</div>