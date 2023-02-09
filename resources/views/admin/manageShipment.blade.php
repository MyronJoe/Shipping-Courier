<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="author" content="">
    <meta name="keywords" content="">

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

					<div class="mb-3">

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
											<th>Product</th>
											<th>Tracking ID</th>
											<th>Shipping Type</th>
											<th>Status</th>
											<th>Action</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td>Canabis</td>
											<td>01/01/2021</td>
											<td>Air Frieght</td>
											<td>Done</td>
											<td>
												<a href="{{url('edit_shipment')}}" class="btn btn-primary btn-sm">Edit</a>

												<a href="#" class="btn btn-danger btn-sm">Delete</a>
											</td>
										</tr>
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

	<script src="backend/js/app.js"></script>



</body>

</html>