<div class="fact" style="background-image: url(assets/img/carousel-1.jpg);">
    <div class="fact-inner container-fluid py-5">
        <div class="container py-5">
            <div class="row g-4 align-items-center">
            @foreach($counter as $key => $counter)
                @if($key < 4) 
                <div class="px-2 wow fadeIn col-sm-12 col-md-6 col-lg-3" data-wow-delay="0.5s">
                    <div class="inner text-center p-2">

                        <h2 class="text-white mb-2"><span data-toggle="counter-up">{{$counter->number}}</span>+</h2>
                        <div class="divide"></div>
                        <p class="text-white mb-0">{{$counter->title}}</p>
                    </div>
                </div>
                @endif
            @endforeach
            </div>
        </div>
    </div>
</div>