<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="author" content="">
    <meta name="keywords" content="">

    <script src="https://cdn.ckeditor.com/4.20.0/standard/ckeditor.js"></script>

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



            <form action="{{url('addTestimonial')}}" method="POST" novalidate enctype="multipart/form-data">

                @csrf

                <main class="content">
                    <div class="container-fluid p-0">

                        <div class="mb-3">
                            <h1 class="h3 d-inline align-middle">Add Testimonial</h1>

                            <a href="{{url('testimonial')}}" class="btn btn-primary" style="float: right;">All Testimonial</a>
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
                                        <label for="rank" class="my-2">Rank/Position</label>
                                        <input type="text" class="form-control" name="rank" id="rank" value="{{ old('rank') }}">
                                        @error('rank')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>

                                </div>
                            </div>

                            <div class="row">
                                <div class="input col-sm-12 mt-1">
                                    <div>
                                        <label for="editor" class="my-2">testimonial</label>
                                        <textarea name="testimonial" id="editor1" value="" class="form-control" cols="30" rows="10"></textarea>
                                        @error('testimonial')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                            </div>


                            <br>
                            <div>
                                <label for="image" class="my-2">*Image</label>
                                <br>
                                <input type="file" name="image" id="image" value="{{ old('image') }}" accept=".gif, .jpg, .png"><br>
                                @error('image')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <br>

                            <input type="submit" name="add_carousel" value="Add Testimonial" class="btn btn-primary my-3 " >
                        </div>
                    </div>
                </main>

            </form>


        </div>
    </div>

    <script>
        CKEDITOR.replace('editor1');
    </script>

    <script src="backend/js/app.js"></script>


</body>

</html>