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
                                        <label for="sender_contact" class="my-2">Sender's Contact</label>
                                        <input type="text" class="form-control" name="sender_contact" id="sender_contact" value="{{ $data->sender_contact }}">
                                        @error('sender_contact')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>

                                    <div>
                                        <label for="sender_address" class="my-2">Sender's Address</label>
                                        <input type="text" class="form-control" name="sender_address" id="sender_address" value="{{ $data->senderAddress }}">
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
                                        <label for="receiverEmail" class="my-2">Receiver's Email</label>
                                        <input type="text" class="form-control" name="receiverEmail" id="receiverEmail" value="{{ $data->receiverEmail }}">
                                        @error('receiverEmail')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>

                                    <div>
                                        <label for="receiverPhone" class="my-2">Receiver's Contact</label>
                                        <input type="text" class="form-control" name="receiverPhone" id="receiverPhone" value="{{ $data->receiverPhone}}">
                                        @error('receiverPhone')
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

                        <div>
                            <div class="row">
                                <div class="input col-sm-12 col-md-6">
                                    <h1 class="h3 d-inline align-middle" style="font-weight: bolder;">Other Info</h1>
                                    <hr>
                                    <div>
                                        <label for="status" class="my-2">Status</label>
                                        <select name="status" id="status" class="form-control">
                                            <option value="{{$data->status}}">Current Status - {{$data->status}}</option>
                                            <option value="Active">Active</option>
                                            <option value="Inactive">Inactive</option>
                                            <option value="Picked Up">Picked Up</option>
                                            <option value="Arrived">Arrived</option>
                                            <option value="Delivered">Delivered</option>
                                            <option value="On hold">On hold</option>
                                        </select>
                                        @error('status')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>

                                    <div class="input">
                                        <label for="dispatch" class="my-2">Dispatch Location</label>
                                        <input type="text" class="form-control" name="dispatch" id="dispatch" value="{{$data->dispatch_location}}">
                                        @error('dispatch')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>

                                    <div class="input">
                                        <label for="current_location" class="my-2">Current Location</label>
                                        <input type="text" class="form-control" name="current_location" id="current_location" value="{{$data->current_location}}">
                                        @error('current_location')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>

                                </div>

                                <div class="input col-sm-12 col-md-6">

                                    <h1 class="h3 d-inline align-middle" style="font-weight: bolder;">Other Info</h1>
                                    <hr>
                                    <div class="input">
                                        <label for="description" class="my-2">Package Description</label>
                                        <input type="text" class="form-control" name="description" id="description" value="{{$data->package_description}}">
                                        @error('description')
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