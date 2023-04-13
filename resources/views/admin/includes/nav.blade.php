<nav class="navbar navbar-expand navbar-light navbar-bg">
	<a class="sidebar-toggle js-sidebar-toggle">
		<i class="hamburger align-self-center"></i>
	</a>

	<div class="navbar-collapse collapse">
		<ul class="navbar-nav navbar-align">

			<li class="nav-item dropdown">
				<div>
					<!-- <form action="">
						<input type="text" class="form-control1" name="search" placeholder="Search...">
					</form> -->
				</div>
			</li>

			<li class="nav-item dropdown">
				<a class="nav-icon dropdown-toggle" href="#" id="alertsDropdown" data-bs-toggle="dropdown">
					<div class="position-relative">
						<i class="align-middle" data-feather="bell"></i>
						<span class="indicator" style="background:red;">{{$message}}</span>
					</div>
				</a>
				
			</li>
			
			<li class="nav-item dropdown">
				<a class="nav-icon dropdown-toggle d-inline-block d-sm-none" href="#" data-bs-toggle="dropdown">
					<!-- <i class="align-middle" data-feather="settings"></i> -->
				</a>

				<a class="nav-link  d-none d-sm-inline-block" href="#" data-bs-toggle="dropdown">
					<!-- <img src="backend/img/avatars/avatar.jpg" class="avatar img-fluid rounded me-1"/>  -->
					<span class="text-dark">{{ Auth::user()->name }}</span>
					
					
				</a>
				
			</li>
			<a class="dropdown-item mt-1" href="{{url('logout')}}">Log out</a>
		</ul>
	</div>
</nav>

@include('sweetalert::alert')