<div class="container-fluid bg-dark text-light footer pt-5 wow fadeIn" data-wow-delay="0.1s" style="margin-top: 1rem;">
    <div class="container">
        <div class="row g-5 pb-5">

            @foreach($utilities as $key => $utilities)
            @if($key < 1) 
            <div class="col-lg-6 col-md-12">
                <p>{{$utilities->footer_note}}</p>
        </div>

        <div class="col-lg-6 col-md-12">

            <div class="row">
                <div class="col-sm-6">
                    <h4 class="text-light mb-4">Contact Us</h4>
                    <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>{{$utilities->address}}</p>
                    <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>{{$utilities->phone_number}}</p>
                    <p class="mb-2"><i class="fa fa-envelope me-3"></i>{{$utilities->mail}}</p>
                    <div class="d-flex pt-2">
                        <a class="btn btn-outline-light btn-social" href="{{$utilities->twitter}}"><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-outline-light btn-social" href="{{$utilities->facebook}}"><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-outline-light btn-social" href="{{$utilities->youtube}}"><i class="fab fa-youtube"></i></a>
                        <a class="btn btn-outline-light btn-social" href="{{$utilities->linkedin}}"><i class="fab fa-linkedin-in"></i></a>
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
                &copy; <a class="border-bottom" href="#">{{$utilities->site_name}}</a>, All Right Reserved, <span>{{$utilities->year}}.</span>
            </div>

        </div>
    </div>
</div>

@endif
@endforeach