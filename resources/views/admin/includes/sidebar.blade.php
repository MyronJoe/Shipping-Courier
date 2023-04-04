<nav id="sidebar" class="sidebar js-sidebar">
	<div class="sidebar-content js-simplebar">
		<a class="sidebar-brand" href="{{url('/')}}">
		@foreach($utilities as $key => $utilities)
            @if($key < 1) 
				<span class="align-middle">{{$utilities->site_name}}</span>
			@endif
		@endforeach
		</a>

		<ul class="sidebar-nav">
			<li class="sidebar-header">
				Content Management
			</li>

			<li class="sidebar-item active">
				<a class="sidebar-link" href="{{ url('admin')}}">
					<i class="align-middle" data-feather="sliders"></i> <span class="align-middle">Dashboard</span>
				</a>
			</li>

			<li class="sidebar-item">
				<a class="sidebar-link" href="{{ url('shipments')}}">
					<i class="align-middle" data-feather="check-square"></i> <span class="align-middle">Shipments</span>
				</a>
			</li>


			<li class="sidebar-header">
				Create Page
			</li>


			<li class="sidebar-item">
				<a class="sidebar-link" href="{{ url('all_cat')}}">
					<i class="align-middle" data-feather="grid"></i> <span class="align-middle">Page Category</span>
				</a>
			</li>

			<li class="sidebar-item">
				<a class="sidebar-link" href="{{ url('allpages')}}">
					<i class="align-middle" data-feather="align-left"></i> <span class="align-middle">Pages</span>
				</a>
			</li>

			<li class="sidebar-header">
				Site Essentials
			</li>


			<li class="sidebar-item">
				<a class="sidebar-link" href="{{ url('utilities')}}">
					<i class="align-middle" data-feather="grid"></i> <span class="align-middle">Utilities</span>
				</a>
			</li>

			<li class="sidebar-item">
				<a class="sidebar-link" href="{{ url('carousel')}}">
					<i class="align-middle" data-feather="grid"></i> <span class="align-middle">Carousel</span>
				</a>
			</li>

			<li class="sidebar-item">
				<a class="sidebar-link" href="{{ url('about')}}">
					<i class="align-middle" data-feather="align-left"></i> <span class="align-middle">About</span>
				</a>
			</li>

			<li class="sidebar-item">
				<a class="sidebar-link" href="{{ url('service')}}">
					<i class="align-middle" data-feather="coffee"></i> <span class="align-middle">Services</span>
				</a>
			</li>

			<li class="sidebar-item">
				<a class="sidebar-link" href="{{ url('counter')}}">
					<i class="align-middle" data-feather="coffee"></i> <span class="align-middle">Counter</span>
				</a>
			</li>

			<li class="sidebar-item">
				<a class="sidebar-link" href="{{ url('features')}}">
					<i class="align-middle" data-feather="coffee"></i> <span class="align-middle">Features</span>
				</a>
			</li>

			<li class="sidebar-item">
				<a class="sidebar-link" href="{{ url('testimonial')}}">
					<i class="align-middle" data-feather="coffee"></i> <span class="align-middle">Testimonial</span>
				</a>
			</li>


			<li class="sidebar-header">
				Feedback
			</li>

			<li class="sidebar-item">
				<a class="sidebar-link" href="{{ url('message')}}">
					<i class="align-middle" data-feather="grid"></i> <span class="align-middle">Messages</span>
				</a>
			</li>

			<li class="sidebar-item">
				<a class="sidebar-link" href="charts-chartjs.html">
					<i class="align-middle" data-feather="bar-chart-2"></i> <span class="align-middle">Charts</span>
				</a>
			</li>

			<li class="sidebar-item">
				<a class="sidebar-link" href="maps-google.html">
					<i class="align-middle" data-feather="map"></i> <span class="align-middle">Maps</span>
				</a>
			</li>
		</ul>
	</div>
</nav>