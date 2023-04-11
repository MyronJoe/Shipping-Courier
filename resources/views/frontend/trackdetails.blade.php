<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <style>
        .form-control {
            border-radius: 0 !important;
        }

        .form-control:focus {
            outline: none !important;
            border: none !important;
        }

        .holder-cont {
            /* background-color: seashell; */
            width: 80%;
            margin: auto;
            padding: 10px;
            box-shadow: -2px -2px 2px #eee,
                2px 2px 2px #eee;
        }

        .holder {
            background-color: whitesmoke;
            padding: 0 1em 0 1em !important;
        }

        .barcode-div {
            width: 100%;
            display: flex;
            justify-content: center;
        }

        .barcode {
            width: 200px;
            margin-bottom: 15px;
            object-fit: cover;

        }

        @media screen and (max-width: 900px) {
            .holder-cont {
            width: 100%;
            }
        }
    </style>

    <!-- Favicon -->
    <!-- <link href="assets/img/favicon.ico" rel="icon"> -->

    <!-- All Styles -->
    @include('frontend.includes.styles')

</head>

<body>
    <!-- HEADER -->
    @include('frontend.includes.header')
    <!-- /HEADER -->
    <div class="content">
        <div class="container">

            <div style="height:50px"></div>

            <div class="holder-cont">

                <h3 class="my-2">Shipping Details</h3>

                @foreach($track as $data)

                <form method="POST" novalidate class="holder">

                    @csrf

                    <main class="content">
                        <div class="container-fluid p-0">

                            <div class="barcode-div">
                                <img class="barcode" src="assets/img/barcode.png" alt="">
                            </div>

                            <div class="mb-3 text-center">
                                <h1 class="h3 d-inline text-danger">{{ $data->trackingID }}</h1>
                            </div>
                            <hr>
                            <div>
                                <div class="row">
                                    <div class="input col-sm-12 col-md-6">

                                        <h4 style="font-weight: bolder;">Sender's Details</h4>

                                        <hr>


                                        <div>
                                            <label for="sender_name" class="my-2">Sender's Name</label>
                                            <input type="text" class="form-control" readonly name="sender_name" id="sender_name" value="{{ $data->senderName }}">
                                            @error('sender_name')
                                            <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>

                                        <div>
                                            <label for="sender_email" class="my-2">Sender's Email</label>
                                            <input type="text" class="form-control" readonly name="sender_email" id="sender_email" value="{{ $data->senderEmail }}">
                                            @error('sender_email')
                                            <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>

                                        <div>
                                            <label for="sender_email" class="my-2">Sender's Email</label>
                                            <input type="text" class="form-control" readonly name="sender_email" id="sender_email" value="{{ $data->senderEmail }}">
                                            @error('sender_email')
                                            <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>

                                        <div>
                                            <label for="sender_address" class="my-2">Sender's Contact</label>
                                            <input type="text" class="form-control " readonly name="sender_address" id="sender_address" value="{{ $data->sender_contact }}">
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
                                            <input type="text" class="form-control" readonly name="receiverName" id="receiverName" value="{{ $data->receiverName }}">
                                            @error('receiverName')
                                            <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>

                                        <div>
                                            <label for="receiverEmail" class="my-2">Receiver's Email</label>
                                            <input type="text" class="form-control" readonly name="receiverEmail" id="receiverEmail" value="{{ $data->receiverEmail }}">
                                            @error('receiverEmail')
                                            <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>

                                        <div>
                                            <label for="receiverPhone" class="my-2">Receiver's Phone</label>
                                            <input type="text" class="form-control" readonly name="receiverPhone" id="receiverPhone" value="{{ $data->receiverPhone}}">
                                            @error('receiverPhone')
                                            <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>

                                        <div>
                                            <label for="receiverAddress" class="my-2">Receiver's Address</label>
                                            <input type="text" class="form-control" readonly name="receiverAddress" id="receiverAddress" value="{{ $data->receiverAddress }}">
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
                                <h5 class="h3 align-middle pt-2 " style="margin-top:20px;">Shipment Details</h5>

                            </div>
                            <div>
                                <div class="row">
                                    <div class="input col-sm-12 col-md-6">

                                        <div class="input">
                                            <label for="freight" class="my-2">Status</label>
                                            <input type="text" class="form-control" readonly name="weight" id="weight" value="{{ $data->status }}">
                                            @error('weight')
                                            <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>

                                        <div class="input">
                                            <label for="weight" class="my-2">Dispatch Location</label>
                                            <input type="text" class="form-control" readonly name="weight" id="weight" value="{{ $data->dispatch_location }}">
                                            @error('weight')
                                            <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>

                                        <div class="input">
                                            <label for="product" class="my-2">Current Location</label>
                                            <input type="text" class="form-control" readonly name="product" id="product" value="{{$data->current_location}}">
                                            @error('product')
                                            <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>

                                    </div>

                                    <div class="input col-sm-12 col-md-6">

                                        <div class="input">
                                            <label for="origin" class="my-2">Package Description</label>
                                            <input type="text" class="form-control" readonly name="origin" id="origin" value="{{$data->package_description }}">
                                            @error('origin')
                                            <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>

                                        <div class="input">
                                            <label for="departure_date" class="my-2">Departure Date</label>
                                            <input type="date" class="form-control" readonly name="departure_date" id="departure_date" value="{{ $data->departDate }}">
                                            @error('departure_date')
                                            <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>

                                        <div class="input">
                                            <label for="pickup_date" class="my-2">Estimated Delivery Date</label>
                                            <input type="date" class="form-control" readonly name="pickup_date" id="pickup_date" value="{{ $data->pickupDate }}">
                                            @error('pickup_date')
                                            <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
   
                                        <div style="height:90px">

                                        </div>


                                    </div>


                                </div>
                            </div>
                        </div>
                    </main>

                </form>

                @endforeach

            </div>
        </div>
        <div style="height:30px"></div>


        <!-- Footer Start -->
        @include('frontend.includes.footer')
        <!-- Footer End -->
    </div>
    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded-0 back-to-top"><i class="bi bi-arrow-up"></i></a>
    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="assets/lib/wow/wow.min.js"></script>
    <script src="assets/lib/easing/easing.min.js"></script>
    <script src="assets/lib/waypoints/waypoints.min.js"></script>
    <script src="assets/lib/counterup/counterup.min.js"></script>
    <script src="assets/lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="assets/js/main.js"></script>
</body>

</html>