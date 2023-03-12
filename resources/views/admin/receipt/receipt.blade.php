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

    <style>
        .top {
            display: flex;
            justify-content: space-between;
            align-items: center;
            background-color: #ddd;
        }


        .total {
            display: flex;
            justify-content: center;
            flex-direction: column;
            align-items: flex-end;
        }

        th {
            border: 4px solid white;
            background: #28A745;
            padding: 5px 10px;
            color: white;
        }

        td {

            padding: 5px 15px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }
    </style>


</head>

<body>


    <div class="p-2">

        <div class="top p-3">

            <h1>Logistica <i class="fa fa-ship fa-1x"></i></h1>

            <div class="details text-right">
                <h4>Logistica</h4>
                <p>No 434 A1 Chime Avenue Enugu Nigeria</p>
                <p>logistica@gmail.com</p>
            </div>

        </div>

        <div class="top mt-4 p-3">

            <div class="">
                <p>Name: <strong>{{$data->receiverName}}</strong> </p>
                <p>Email: <strong>{{$data->receiverEmail}}</strong> </p>
                <p>Phone: <strong>{{$data->receiverPhone}}</strong> </p>
                <p>Country: <strong>{{$data->receiverCountry}}</strong> </p>
                <p>Address: <strong>{{$data->receiverAddress}}</strong> </p>
            </div>

            <div class="text-right">
                <p><strong class="text-success">Invoice:</strong> <strong>#{{$data->invoice_no}}</strong> </p>
                <br>
                <p>Destination: <strong>{{$data->destination}}</strong> </p>
                <p>Delivery Date: <strong>{{$data->pickupDate}}</strong> </p>
                <p>Payment type: <strong>{{$data->payment_method}}</strong> </p>

            </div>

        </div>

        <div class="mt-3">
            <div class="details px-2">
                <h4>Shipment</h4>


                <table>
                    <tr>
                        <th>Tracking Number</th>
                        <th>Parcel</th>
                        <th>Quantity</th>
                        <th>Weight</th>
                        <th>Pickup Date</th>
                    </tr>
                    <tr>
                        <td class="text-danger">{{$data->trackingID}}</td>
                        <td>{{$data->product}}</td>
                        <td>{{$data->quality}} </td>
                        <td>{{$data->weight}}</td>
                        <td>{{$data->pickupDate}}</td>
                    </tr>
                </table>

            </div>
        </div>

        <div class="total mt-4">

            <h4 class="mb-3"><span class="text-success">Subtotal: </span>${{$data->amount}}</h4>

            <h4 class="mb-3"><span class="text-success">Total: </span>${{$data->amount * $data->quality}}</h4>

            <h4 class="mb-3"><span class="text-success">Payment Status: </span>{{$data->payment_status}}</h4>

        </div>

    </div>


    <!-- <script src="backend/js/app.js"></script> -->


</body>

</html>