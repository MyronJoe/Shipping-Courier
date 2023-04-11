<footer class="footer">
    <div class="container-fluid">
        <div class="row text-muted">
            <div class="col-6 text-start">
                <p class="mb-0">
                @foreach($utilities as $key => $utilities)
            @if($key < 1) 
                    <a class="text-muted" href="#" target="_blank"><strong>{{$utilities->site_name}}</strong></a> &copy;
                    @endif
		@endforeach
                </p>
            </div>
            <div class="col-6 text-end">
                
            </div>
        </div>
    </div>
</footer>