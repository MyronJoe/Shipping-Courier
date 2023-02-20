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

	<title>Dashboard</title>

	<!-- STYLES -->
	@include('admin.includes.styles')

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

						<h1 class="h3 d-inline align-middle"><strong>Shipments</strong></h1>

						<a href="{{url('add_shipment')}}" class="btn btn-primary" style="float: right;">Add Shipment</a>
					</div>

					<div class="row mt-3">

						<br>
						<br>
						<div class="col-12 d-flex">
							<div class="card flex-fill">

								<table class="table table-hover my-0">
									<thead>
										<tr>
											<th>S|N</th>
											<th>Product</th>
											<th>Tracking ID</th>
											<th>Shipping Type</th>
											<th>Status</th>
											<th>Action</th>
										</tr>
									</thead>
									<tbody>
										@foreach($datas as $key => $data)
										<tr>
											<td>{{$key + 1}}</td>
											<td>{{$data->product}}</td>
											<td>{{$data->trackingID}} </td>
											<td>{{$data->shippingType}}</td>
											<td>{{$data->status}}</td>
											<td>
												<a href="{{url('edit_shipment', $data->id)}}" class="btn btn-primary btn-sm">Edit</a>

												<a href="{{route('delete_shipment', $data->id)}}" class="btn btn-danger btn-sm">Delete</a>
											</td>
										</tr>
										@endforeach
									</tbody>
								</table>


							</div>
						</div>

					</div>

				</div>

				<div class="mt-3 text-center">
					{{ $datas->onEachSide(2)->links('pagination::bootstrap-4') }}
				</div>
			</main>
			<!-- FOOTER -->
			@include('admin.includes.footer')
		</div>
	</div>

	<script src="backend/js/app.js"></script>


</body>

</html>