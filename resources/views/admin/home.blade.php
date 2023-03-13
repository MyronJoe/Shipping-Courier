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

	<style>
		.text-success {
			color: green !important;
		}

		.text-danger {
			color: red !important;
		}

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
				<div class="container-fluid p-0">

					<h1 class="h3 mb-3"><strong>Analytics</strong> Dashboard</h1>

					<div class="row">
						<div class="col-12 d-flex">
							<div class="w-100">
								<div class="row">
									<div class="row">
										<div class="p-2 col-sm-12 col-md-6 col-xl-3">
											<div class="card">
												<div class="card-body">
													<div class="row">
														<div class="col mt-0">
															<h5 class="card-title">All Shipments</h5>
														</div>

														<div class="col-auto">
															<div class="stat text-primary">
																<i class="align-middle" data-feather="truck"></i>
															</div>
														</div>
													</div>
													<h1 class="mt-1 mb-3">{{$shipments}}</h1>

												</div>
											</div>
										</div>
										<div class="p-2 col-sm-12 col-md-6 col-xl-3">
											<div class="card">
												<div class="card-body">
													<div class="row">
														<div class="col mt-0">
															<h5 class="card-title">All Users</h5>
														</div>

														<div class="col-auto">
															<div class="stat text-primary">
																<i class="align-middle" data-feather="users"></i>
															</div>
														</div>
													</div>
													<h1 class="mt-1 mb-3">{{$users}}</h1>

												</div>
											</div>
										</div>
										<div class="p-2 col-sm-12 col-md-6 col-xl-3">
											<div class="card">
												<div class="card-body">
													<div class="row">
														<div class="col mt-0">
															<h5 class="card-title">Deliverd Shipments</h5>
														</div>

														<div class="col-auto">
															<div class="stat text-primary">
																<i class="align-middle" data-feather="shopping-cart"></i>
															</div>
														</div>
													</div>
													<h1 class="mt-1 mb-3">BB</h1>

												</div>
											</div>
										</div>
										<div class="p-2 col-sm-12 col-md-6 col-xl-3">
											<div class="card">
												<div class="card-body">
													<div class="row">
														<div class="col mt-0">
															<h5 class="card-title">All Shipments Paid</h5>
														</div>

														<div class="col-auto">
															<div class="stat text-primary">
																<i class="align-middle" data-feather="dollar-sign"></i>
															</div>
														</div>
													</div>
													<h1 class="mt-1 mb-3">{{$paid}}</h1>
												</div>
											</div>
										</div>
									</div>

								</div>
							</div>
						</div>

					</div>


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
										<th>Payment Status</th>
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

										@if($data->payment_status == 'Paid')

										<td class="text-success">{{$data->payment_status}}</td>

										@else

										<td class="text-danger">{{$data->payment_status}}</td>

										@endif
										<td>
											<a href="{{route('receipt', $data->id)}}" class="btn btn-success btn-sm">Reciept</a>

											<a href="{{route('shipment_label', $data->id)}}" class="btn btn-info btn-sm">Label</a>

										</td>
									</tr>
									@endforeach
								</tbody>
							</table>


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