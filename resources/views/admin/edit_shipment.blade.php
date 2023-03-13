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
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="shortcut icon" href="../backend/img/icons/icon-48x48.png" />

    <link rel="canonical" href="https://demo-basic.adminkit.io/" />

    <link href="../backend/css/app.css" rel="stylesheet">
    <link href="../backend/css/style.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap" rel="stylesheet">

</head>

<body>
    <div class="wrapper">
        <!-- NAV-SIDE -->
        @include('admin.includes.sidebar')

        <div class="main">
            <!-- NAV-TOP -->
            @include('admin.includes.nav')



            <form action="{{route('update_shipment', $data->id)}}" method="POST" novalidate>

                @csrf

                <main class="content">
                    <div class="container-fluid p-0">

                        <div class="mb-3">
                            <h1 class="h3 d-inline align-middle">Update Shipment</h1>

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
                                        <input type="text" class="form-control" name="sender_name" id="sender_name" value="{{ $data->senderName }}">
                                        @error('sender_name')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>

                                    <div>
                                        <label for="sender_email" class="my-2">Sender's Email</label>
                                        <input type="text" class="form-control" name="sender_email" id="sender_email" value="{{ $data->senderEmail }}">
                                        @error('sender_email')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>

                                    <div>
                                        <label for="sender_address" class="my-2">Sender's Address</label>
                                        <input type="text" class="form-control mb-3" name="sender_address" id="sender_address" value="{{ $data->senderAddress }}">
                                        @error('sender_address')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>

                                </div>

                                <div class="input col-sm-12 col-md-6">

                                    <h4 style="font-weight: bolder;">Receiver's Details</h4>

                                    <hr>

                                    <div>
                                        <label for="receiverName" class="my-2">Receiver's Name</label>
                                        <input type="text" class="form-control" name="receiverName" id="receiverName" value="{{ $data->receiverName }}">
                                        @error('receiverName')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>

                                    <div>
                                        <label for="receiverPhone" class="my-2">Receiver's Phone</label>
                                        <input type="text" class="form-control" name="receiverPhone" id="receiverPhone" value="{{ $data->receiverPhone}}">
                                        @error('receiverPhone')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>

                                    <div>
                                        <label for="receiverEmail" class="my-2">Receiver's Email</label>
                                        <input type="text" class="form-control" name="receiverEmail" id="receiverEmail" value="{{ $data->receiverEmail }}">
                                        @error('receiverEmail')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>

                                    <div>
                                        <label for="receiverCountry" class="my-2">Receiver's Country</label>
                                        <input type="text" class="form-control" name="receiverCountry" id="receiverCountry" value="{{ $data->receiverCountry }}">
                                        @error('receiverCountry')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>

                                    <div>
                                        <label for="receiverAddress" class="my-2">Receiver's Address</label>
                                        <input type="text" class="form-control" name="receiverAddress" id="receiverAddress" value="{{ $data->receiverAddress }}">
                                        @error('receiverAddress')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
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
                                            <option value="{{ $data->receiverAddress }}">{{ $data->shippingType }}</option>
                                            <option value="Air Freight">Air Freight</option>
                                            <option value="Road Freight">Road Freight</option>
                                            <option value="air freight">Air Freight</option>
                                        </select>
                                        @error('freight')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>

                                    <div class="input">
                                        <label for="weight" class="my-2">Weight</label>
                                        <input type="text" class="form-control" name="weight" id="weight" value="{{ $data->weight }}">
                                        @error('weight')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>

                                    <div class="input">
                                        <label for="product" class="my-2">Product</label>
                                        <input type="text" class="form-control" name="product" id="product" value="{{ $data->product }}">
                                        @error('product')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>

                                    <div class="input">
                                        <label for="destination" class="my-2">Destination</label>
                                        <input type="text" class="form-control" name="destination" id="destination" value="{{ $data->destination }}">
                                        @error('destination')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>

                                    <div class="input">
                                        <label for="comment" class="my-2">Comment</label>
                                        <input type="text" class="form-control" name="comment" id="comment" value="{{ $data->comment }}">
                                        @error('comment')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>




                                </div>

                                <div class="input col-sm-12 col-md-6">

                                    <div class="input">
                                        <label for="origin" class="my-2">Origin</label>
                                        <input type="text" class="form-control" name="origin" id="origin" value="{{ $data->origin }}">
                                        @error('origin')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>

                                    <div class="input">
                                        <label for="quantity" class="my-2">Quantity</label>
                                        <input type="text" class="form-control" name="quantity" id="quantity" value="{{ $data->quality }}">
                                        @error('quantity')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>

                                    <div class="input">
                                        <label for="departure_date" class="my-2">Departure Date</label>
                                        <input type="date" class="form-control" name="departure_date" id="departure_date" value="{{ $data->departDate }}">
                                        @error('departure_date')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>

                                    <div class="input">
                                        <label for="pickup_date" class="my-2">Pickup Date</label>
                                        <input type="date" class="form-control" name="pickup_date" id="pickup_date" value="{{ $data->pickupDate }}">
                                        @error('pickup_date')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>

                                    <div class="input">
                                        <label for="status" class="my-2">Status</label>
                                        <input type="text" class="form-control" name="status" id="status" value="{{ $data->status }}">
                                        @error('status')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>



                                </div>

                                <h1 class="my-3">Payment Invoice</h1>

                                <div class="input col-sm-12  px-4">

                                    <div class="row divider">
                                        <div class="input col-sm-12 col-md-5 mb-3">
                                            <label for="payment_method" class="my-2">Payment Method</label>
                                            <select name="payment_method" id="payment_method" class="form-control">
                                                <option value="{{ $data->payment_method }}">{{ $data->payment_method }}</option>
                                                <option value="Kuda">kudah</option>
                                                <option value="Opay">opay</option>
                                                <option value="Palm Pay">Palm Pay</option>
                                            </select>
                                        </div>

                                        <div class="input col-sm-12 col-md-5 mb-3">
                                            <label for="payment_status" class="my-2">Payment Status</label>
                                            <select name="payment_status" id="payment_status" class="form-control">
                                                <option value="{{ $data->payment_status }}">{{ $data->payment_status }}</option>
                                                <option value="Paid">Paid</option>
                                                <option value="Not Paid">Not Paid</option>
                                            </select>
                                        </div>

                                        <div class="input col-sm-12 col-md-2">
                                            <label for="amount" class="my-2">Amount</label>
                                            <input type="text" class="form-control mb-3" name="amount" id="amount" value="{{ $data->amount }}">
                                        </div>
                                    </div>

                                </div>

                            </div>
                        </div>
                    </div>
                </main>

                <input type="submit" name="update_shipment" value="Update Shipment" class="btn btn-primary my-3 " style="display:inline-block; margin-left:50px;">


            </form>

            <!-- FOOTER -->
            @include('admin.includes.footer')


        </div>
    </div>

    <script src="../backend/js/app.js"></script>



</body>

</html>