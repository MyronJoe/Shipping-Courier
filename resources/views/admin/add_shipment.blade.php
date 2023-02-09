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



            <form action="{{url('addShipment')}}" method="POST">

                @csrf

                <main class="content">
                    <div class="container-fluid p-0">

                        <div class="mb-3">
                            <h1 class="h3 d-inline align-middle">Add New Shipment</h1>

                            <a href="{{url('shipments')}}" class="btn btn-primary" style="float: right;">Manage Shipment</a>
                        </div>
                        <hr>
                        <div>
                            <div class="row">
                                <div class="input col-sm-12 col-md-6">

                                    <h4 style="font-weight: bolder;">Sender's Details</h4>

                                    <hr>

                                    <div>
                                        <label for="sender_name" class="my-2">Sender's Name</label>
                                        <input type="text" class="form-control" name="sender_name" id="sender_name">
                                    </div>

                                    <div>
                                        <label for="sender_email" class="my-2">Sender's Email</label>
                                        <input type="text" class="form-control" name="sender_email" id="sender_email">
                                    </div>

                                    <div>
                                        <label for="sender_address" class="my-2">Sender's Address</label>
                                        <input type="text" class="form-control mb-3" name="sender_address" id="sender_address">
                                    </div>

                                </div>

                                <div class="input col-sm-12 col-md-6">

                                    <h4 style="font-weight: bolder;">Receiver's Details</h4>

                                    <hr>

                                    <div>
                                        <label for="receiverName" class="my-2">Receiver's Name</label>
                                        <input type="text" class="form-control" name="receiverName" id="receiverName">
                                    </div>

                                    <div>
                                        <label for="receiverPhone" class="my-2">Receiver's Phone</label>
                                        <input type="text" class="form-control" name="receiverPhone" id="receiverPhone">
                                    </div>

                                    <div>
                                        <label for="receiverEmail" class="my-2">Receiver's Email</label>
                                        <input type="text" class="form-control" name="receiverEmail" id="receiverEmail">
                                    </div>

                                    <div>
                                        <label for="receiverCountry" class="my-2">Receiver's Country</label>
                                        <input type="text" class="form-control" name="receiverCountry" id="receiverCountry">
                                    </div>

                                    <div>
                                        <label for="receiverAddress" class="my-2">Receiver's Address</label>
                                        <input type="text" class="form-control" name="receiverAddress" id="receiverAddress">
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </main>


                <main class="content">
                    <div class="container-fluid p-0">

                        <div class="mb-3">
                            <h1 class="h3 d-inline align-middle" style="font-weight: bolder;">Shipment Details</h1>

                        </div>
                        <div>
                            <div class="row">
                                <div class="input col-sm-12 col-md-6">
                                    <div>
                                        <label for="freight" class="my-2">Shipping Type</label>
                                        <select name="freight" id="freight" class="form-control">
                                            <option value=""></option>
                                            <option value="air freight">Air Freight</option>
                                            <option value="air freight">Road Freight</option>
                                            <option value="air freight">Air Freight</option>
                                        </select>
                                    </div>

                                    <div class="input">
                                        <label for="weight" class="my-2">Weight</label>
                                        <input type="text" class="form-control" name="weight" id="weight">
                                    </div>

                                    <div class="input">
                                        <label for="product" class="my-2">Product</label>
                                        <input type="text" class="form-control" name="product" id="product">
                                    </div>

                                    <div class="input">
                                        <label for="destination" class="my-2">Destination</label>
                                        <input type="text" class="form-control" name="destination" id="destination">
                                    </div>

                                    <div class="input">
                                        <label for="comment" class="my-2">Comment</label>
                                        <input type="text" class="form-control" name="comment" id="comment">
                                    </div>



                                    <input type="submit" name="add_shipment" value="Add Shipment" class="btn btn-primary my-3">
                                </div>

                                <div class="input col-sm-12 col-md-6">

                                    <div class="input">
                                        <label for="origin" class="my-2">Origin</label>
                                        <input type="text" class="form-control" name="origin" id="origin">
                                    </div>

                                    <div class="input">
                                        <label for="quantity" class="my-2">Quantity</label>
                                        <input type="text" class="form-control" name="quantity" id="quantity">
                                    </div>

                                    <div class="input">
                                        <label for="departure_date" class="my-2">Departure Date</label>
                                        <input type="date" class="form-control" name="departure_date" id="departure_date">
                                    </div>

                                    <div class="input">
                                        <label for="pickup_date" class="my-2">Pickup Date</label>
                                        <input type="date" class="form-control" name="pickup_date" id="pickup_date">
                                    </div>

                                    <div class="input">
                                        <label for="status" class="my-2">Status</label>
                                        <input type="text" class="form-control" name="status" id="status">
                                    </div>

                                </div>


                            </div>
                        </div>
                    </div>
                </main>



            </form>

            <!-- FOOTER -->
            @include('admin.includes.footer')


        </div>
    </div>

    <script src="backend/js/app.js"></script>



</body>

</html>