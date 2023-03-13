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



            <form action="{{url('addCat')}}" method="POST" novalidate>

                @csrf

                <main class="content">
                    <div class="container-fluid p-0">

                        <div class="mb-3">
                            <h1 class="h3 d-inline align-middle">Add Page Category</h1>

                            <a href="{{url('all_cat')}}" class="btn btn-primary" style="float: right;">All Categories</a>
                        </div>
                        <hr>
                        <div>
                            <div class="row">
                                <div class="input col-sm-12 col-md-6">
                                    <div>
                                        <label for="name" class="my-2">Name</label>
                                        <input type="text" class="form-control" name="name" id="name" value="{{ old('name') }}">
                                        @error('name')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="input col-sm-12 col-md-6">
                                    <div>
                                        <label for="slug" class="my-2">Slug</label>
                                        <input type="text" class="form-control" name="slug" id="slug" value="{{ old('slug') }}">
                                        @error('slug')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>


                

                <input type="submit" name="add_shipment" value="Add Category" class="btn btn-primary my-3 " style="display:inline-block; margin-left:50px;">


            </form>


        </div>
    </div>

    <script src="backend/js/app.js"></script>


</body>

</html>