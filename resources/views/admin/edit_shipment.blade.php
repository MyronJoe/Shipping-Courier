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



            <form action="">

                <main class="content">
                    <div class="container-fluid p-0">

                        <div class="mb-3">
                            <h1 class="h3 d-inline align-middle">Shipment Details</h1>

                        </div>
                        <div>
                            <div>
                                <div class="row">

                                    <div class="input col-sm-12 col-md-6">
                                        <label for="freight" class="my-2">Shipping Type</label>
                                        <select name="freight" id="freight" class="form-control">
                                            <option value="air freight">Air Freight</option>
                                            <option value="air freight">Road Freight</option>
                                            <option value="air freight">Air Freight</option>
                                        </select>
                                    </div>

                                    <div class="input col-sm-12 col-md-6">
                                        <label for="origin" class="my-2">Origin</label>
                                        <input type="text" class="form-control" name="origin" id="origin">
                                    </div>

                                </div>

                                <div class="row">

                                    <div class="input col-sm-12 col-md-6">
                                        <label for="weight" class="my-2">Weight</label>
                                        <input type="text" class="form-control" name="weight" id="weight">
                                    </div>

                                    <div class="input col-sm-12 col-md-6">
                                        <label for="quantity" class="my-2">Quantity</label>
                                        <input type="text" class="form-control" name="quantity" id="quantity">
                                    </div>

                                </div>

                                <div class="row">

                                    <div class="input col-sm-12 col-md-6">
                                        <label for="product" class="my-2">Product</label>
                                        <input type="text" class="form-control" name="product" id="product">
                                    </div>

                                    <div class="input col-sm-12 col-md-6">
                                        <label for="departure_date" class="my-2">Departure Date</label>
                                        <input type="date" class="form-control" name="departure_date" id="departure_date">
                                    </div>

                                </div>

                                <div class="row">

                                    <div class="input col-sm-12 col-md-6">
                                        <label for="destination" class="my-2">Destination</label>
                                        <input type="text" class="form-control" name="destination" id="destination">
                                    </div>

                                    <div class="input col-sm-12 col-md-6">
                                        <label for="pickup_date" class="my-2">Pickup Date</label>
                                        <input type="date" class="form-control" name="pickup_date" id="pickup_date">
                                    </div>

                                </div>

                                <div class="row">

                                    <div class="input col-sm-12 col-md-6">
                                        <label for="comment" class="my-2">Comment</label>
                                        <input type="text" class="form-control" name="comment" id="comment">
                                    </div>

                                    <div class="input col-sm-12 col-md-6">
                                        <label for="status" class="my-2">Status</label>
                                        <input type="text" class="form-control" name="status" id="status">
                                    </div>

                                </div>

                                <h1 class="my-3">Payment Invoice</h1>

                                <div class="row divider">

                                    <div class="input col-sm-12 col-md-5">
                                        <label for="payment_method" class="my-2">Payment Method</label>
                                        <input type="text" class="form-control mb-3" name="payment_method" id="payment_method">
                                    </div>

                                    <div class="input col-sm-12 col-md-5 mb-3">
                                        <label for="payment_status" class="my-2">Payment Status</label>
                                        <select name="payment_status" id="payment_status" class="form-control">
                                            <option value="air freight">Air Freight</option>
                                            <option value="air freight">Road Freight</option>
                                            <option value="air freight">Air Freight</option>
                                        </select>
                                    </div>

                                    <div class="input col-sm-12 col-md-2">
                                        <label for="amount" class="my-2">Amount</label>
                                        <input type="text" class="form-control mb-3" name="amount" id="amount">
                                    </div>

                                </div>


                                <a href="#" class="btn btn-primary my-3">Add Shipment</a>


                            </div>
                        </div>
                    </div>
                </main>

            </form>

            <!-- FOOTER -->
            @include('admin.includes.footer')


        </div>
    </div>

    <script src="../backend/js/app.js"></script>



</body>

</html>