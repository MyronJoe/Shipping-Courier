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

	<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

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

						<h1 class="h3 d-inline align-middle"><strong>Admin Users</strong></h1>

						<a href="{{route('add_admin')}}" class="btn btn-primary" style="float: right;">Add Admin</a>
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
											<th>Name</th>
											<th>Email</th>
											<th>User Type</th>
											<th>Action</th>
										</tr>
									</thead>
									<tbody>
                                        @foreach($super_admin as $key => $super_admin)
                                            <tr>
                                                <td>{{$key + 1}}</td>
                                                <td>{{$super_admin->name}}</td>
                                                <td>{{$super_admin->email}} </td>

                                                @if($super_admin->user_type == 2)
                                                    <td><a style="color: red; font-weight:bold">Super Admin</a></td>
                                                @else
                                                    <td><a style=" font-weight:bold">Admin</a></td>
                                                @endif
                                                <td>
                                                    <a href="{{route('edit_admin', $super_admin->id)}}" class="btn btn-primary btn-sm">Edit</a>

                                                    <a href="{{route('delete_admin', $super_admin->id)}}" class="btn btn-danger btn-sm" onclick="confirmation(event)">Delete</a>
                                                </td>
                                            </tr>
										@endforeach

										@foreach($admin_users as $key => $data)
										<tr>
											<td>{{$key + 1}}</td>
											<td>{{$data->name}}</td>
											<td>{{$data->email}} </td>

                                            @if($data->user_type == 2)
                                                <td><a style="color: red; font-weight:bold">Super Admin</a></td>
                                            @else
                                                <td><a style=" font-weight:bold">Admin</a></td>
                                            @endif
											<td>
												<a href="{{route('edit_admin', $data->id)}}" class="btn btn-primary btn-sm">Edit</a>

												<a href="{{route('delete_admin', $data->id)}}" class="btn btn-danger btn-sm" onclick="confirmation(event)">Delete</a>
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