<!DOCTYPE html>
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

    <title>{{$data->product}}</title>

    <!-- STYLES -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="shortcut icon" href="backend/img/icons/icon-48x48.png" />

    <link rel="canonical" href="https://demo-basic.adminkit.io/" />

    <link href="backend/css/app.css" rel="stylesheet">
    <link href="backend/css/style.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap" rel="stylesheet">

    <style>
        .left{
            background: #ddd;
            margin-bottom: 15px;
        }
        .left h1{
            font-size: 50px;
            text-transform: uppercase;
        }
        .barcode{
            width: 100%;
            height: 150px;
        }
        .table2{
            width: 100% !important;
            overflow: auto !important;
        }
    </style>

</head>

<body>
    <div class="wrapper">
        <!-- NAV-SIDE -->


        <div class="main">
            <!-- NAV-TOP -->

            <main class="content">

                

                <div class="row px-2">

                    <div class="col-sm-12 col-md-3 left p-3">

                        <h1>Logistica</h1>

                    </div>

                    <div class="col-sm-12 col-md-9">
                        <div class="barcode-div">
                            <img class="barcode" src="assets/img/barcode1.png" alt="">
                        </div>

                        <div class="details px-2">
                            <h4>{{$data->trackingID}}</h4>


                            <h1>Order Information</h1>

                            <p>Tracking Number: <strong>{{$data->trackingID}}</strong> </p>
                            <p>Reference Number: <strong>{{$data->ref_no}}</strong> </p>

                            <hr>

                            <h1>Shipping To:</h1>

                            <p>Name: <strong>{{$data->receiverName}}</strong> </p>
                            <p>Email: <strong>{{$data->receiverEmail}}</strong> </p>
                            <p>Country: <strong>{{$data->receiverCountry}}</strong> </p>
                            <p>Address: <strong>{{$data->receiverAddress}}</strong> </p>

                            <hr>

                            <h1>Shipping From:</h1>

                            <p>Name: <strong>{{$data->senderName}}</strong> </p>
                            <p>Email: <strong>{{$data->senderEmail}}</strong> </p>

                            <br>

                            <div class="table2 card flex-fill">

                                <h1 class="my-2 mx-3">Parcel Details</h1>

								<table class="table table-hover my-0">
									<thead>
										<tr>
											
											<th>Product</th>
											<th>Origin</th>
											<th>Destination</th>
											<th>Shipping Type</th>
											<th>Pickup Date</th>
											<th>Status</th>
											
										</tr>
									</thead>
									<tbody>
								
										<tr>
											
											<td>{{$data->product}}</td>
											<td>{{$data->origin}} </td>
											<td>{{$data->destination}}</td>
											<td>{{$data->shippingType}}</td>
											<td>{{$data->pickupDate}}</td>
											<td>{{$data->status}}</td>
											
										</tr>
									
									</tbody>
								</table>


							</div>

                        </div>
                    </div>

                </div>

    

            </main>
            <!-- FOOTER -->

        </div>
    </div>

    <script src="backend/js/app.js"></script>


</body>

</html>