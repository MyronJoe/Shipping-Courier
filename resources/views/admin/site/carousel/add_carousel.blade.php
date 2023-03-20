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



            <form action="{{url('addCarousel')}}" method="POST" novalidate>

                @csrf

                <main class="content">
                    <div class="container-fluid p-0">

                        <div class="mb-3">
                            <h1 class="h3 d-inline align-middle">Add Carousel</h1>

                            <a href="{{url('carousel')}}" class="btn btn-primary" style="float: right;">All Carousel</a>
                        </div>
                        <hr>
                        <div>
                            <div class="row">
                                <div class="input col-sm-12 col-md-6">
                                    <div>
                                        <label for="title" class="my-2">Title</label>
                                        <input type="text" class="form-control" name="title" id="title" value="{{ old('title') }}">
                                        @error('title')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>


                                </div>

                                <div class="input col-sm-12 col-md-6">
                                    <div>
                                        <label for="sub_title" class="my-2">Sub Title</label>
                                        <input type="text" class="form-control" name="sub_title" id="sub_title" value="{{ old('sub_title') }}">
                                        @error('sub_title')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>

                                </div>
                            </div>


                            <br>
                            <div>
                                <label for="image" class="my-2">Carousel Image</label>
                                <br>
                                <input type="file" name="image" id="image" value="{{ old('image') }}"><br>
                                @error('image')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <input type="submit" name="add_carousel" value="Add Carousel" class="btn btn-primary my-3 " >
                        </div>
                    </div>
                </main>

            </form>


        </div>
    </div>

    <script src="backend/js/app.js"></script>


</body>

</html>