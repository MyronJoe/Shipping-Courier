<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="author" content="">
	<meta name="keywords" content="">

	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

	<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

	<title>Dashboard</title>

	<!-- STYLES -->
	@include('admin.includes.styles')

	<style>
		.flex-fill {
			overflow: auto;
		}
	</style>

</head>

<body>
	<div class="wrapper">
		<!-- NAV-SIDE -->
		@include('admin.includes.sidebar')

		<div class="main">
			<!-- NAV-TOP -->
			@include('admin.includes.nav')

			<main class="content">

				@include('admin.includes.successmsg')

				<div class="container-fluid p-0 mt-2">

					<div class="mb-1">

						<h1 class="h3 d-inline align-middle"><strong>Page Categories</strong></h1>

						<hr>
					</div>

					<div class="row mt-3">


						<div class="input col-sm-12 col-md-6 col-lg-4">
							<form action="{{url('addCat')}}" method="POST" novalidate>

								@csrf

								<div>
									<label for="name" class="my-2">Name</label>
									<input type="text" class="form-control" placeholder="Add Category" name="name" id="name" value="{{ old('name') }}">
									@error('name')
									<span class="text-danger">{{ $message }}</span>
									@enderror
								</div>


								<input type="submit" name="add_shipment" value="Add Category" class="btn btn-primary my-3 ">


							</form>
						</div>


						<div class="col-sm-12 col-md-6 col-lg-8 d-flex my-4">
							<div class="card flex-fill ">

								<table class="table table-hover my-0">
									<thead>
										<tr>
											<th>S|N</th>
											<th>Name</th>
											<th>Slug</th>
											<th>Action</th>
										</tr>
									</thead>
									<tbody>
										@foreach($data as $key => $data)
										<tr>
											<td>{{$key + 1}}</td>
											<td>{{$data->name}}</td>
											<td>{{$data->slug}} </td>
											<td>
												<a href="{{route('add_page', $data->id)}}" class="btn btn-primary btn-sm">Add Body</a>

												<a href="{{route('delete_cat', $data->id)}}" class="btn btn-danger btn-sm" onclick="confirmation(event)">Delete</a>
											</td>
										</tr>
										@endforeach
									</tbody>
								</table>


							</div>
						</div>

					</div>

				</div>
			</main>
			<!-- FOOTER -->
			@include('admin.includes.footer')
		</div>
	</div>

	<script>
		function confirmation(e) {

			e.preventDefault();
			var link = e.currentTarget.getAttribute('href');


			Swal.fire({
				title: 'Are you sure?',
				text: "To Deleted This Data!",
				icon: 'warning',
				showCancelButton: true,
				confirmButtonColor: '#3085d6',
				cancelButtonColor: '#d33',
				cancelButtonText: 'No',
				confirmButtonText: 'Yes, Delete!'
			}).then((result) => {
				if (result.isConfirmed) {
					Swal.fire(
						'Deleted!',
						'Data Has Been Deleted Successfully.',
						'success'
					)
					window.location.href = link
				}
			});

		}
	</script>

	<script src="backend/js/app.js"></script>

	<script src="backend/js/sweetalert2.all.min.js"></script>


</body>

</html>