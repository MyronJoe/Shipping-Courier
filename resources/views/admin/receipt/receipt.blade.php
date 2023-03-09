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
    <script src="https://use.fontawesome.com/34a4d426e8.js"></script>

    <link href="backend/css/app.css" rel="stylesheet">
    <link href="backend/css/style.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap" rel="stylesheet">

    <style>
        .top{
            display: flex;
            justify-content: space-between;
            align-items: center;
            background-color: #ddd;
        }
        .row2{
            background-color: #ddd;
            align-items: center;
        }
    </style>
 

</head>

<body>
    <div class="wrapper">
        <!-- NAV-SIDE -->


        <div class="main">
            <!-- NAV-TOP -->

            <main class="container">

                

                <div class="p-2">

                    <div class="top p-3">

                        <h1>Logistica <i class="fa fa-ship fa-1x"></i></h1>

                        <div class="details text-right">
                            <h4>Logistica</h4>
                            <p>No 434 A1 Chime Avenue Enugu Nigeria</p>
                            <p>logistica@gmail.com</p>
                        </div>

                    </div>

                    <div class="row row2 p-3 mt-4">

                        <div class="col-sm-6">
                            <p>Name: <strong>{{$data->receiverName}}</strong> </p>
                            <p>Email: <strong>{{$data->receiverEmail}}</strong> </p>
                            <p>Phone: <strong>{{$data->receiverPhone}}</strong> </p>
                            <p>Country: <strong>{{$data->receiverCountry}}</strong> </p>
                            <p>Address: <strong>{{$data->receiverAddress}}</strong> </p>
                        </div>

                        <div class="col-sm-6">
                            <p><strong class="text-success">Invoice:</strong> <strong>#{{$data->invoice_no}}</strong> </p>
                                <br>
                            <p>Destination: <strong>{{$data->destination}}</strong> </p>
                            <p>Delivery Date: <strong>{{$data->pickupDate}}</strong> </p>
                            <p>Payment type: <strong>{{$data->payment_method}}</strong> </p>
                            
                        </div>

                    </div>

                    <div class="">
                        <div class="barcode-div">
                            <img class="barcode" src="assets/img/barcode1.png" alt="">
                        </div>

                        <div class="details px-2">
                            <h4>Shipment</h4>


                            <table class="table table-hover my-0">
									<thead>
										<tr>
											
											<th>Tracking Number</th>
											<th>Parcel</th>
											<th>Quantity</th>
											<th>Weight</th>
											<th>Pickup Date</th>
											
										</tr>
									</thead>
									<tbody>
								
										<tr>
											<td class="text-danger">{{$data->trackingID}}</td>
											<td>{{$data->product}}</td>
											<td>{{$data->quality}} </td>
											<td>{{$data->weight}}</td>
											<td>{{$data->pickupDate}}</td>	
										</tr>
									
									</tbody>
								</table>



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