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



            <form action="{{url('addAdmin')}}" method="POST" novalidate enctype="multipart/form-data">

                @csrf

                <main class="content">
                    <div class="container-fluid p-0">

                        <div class="mb-3">
                            <h1 class="h3 d-inline align-middle">Add Admin</h1>

                            <a href="{{route('user')}}" class="btn btn-primary" style="float: right;">All Admin</a>
                        </div>
                        <hr>
                        <div>
                            <div class="row">
                                <div class="input col-sm-12">
                                    <div>
                                        <label for="name" class="my-2">Name</label>
                                        <input type="text" class="form-control" name="name" id="name" value="{{ old('name') }}">
                                        @error('name')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>


                                </div>

                                <div class="input col-sm-12">
                                    <div>
                                        <label for="email" class="my-2">Email</label>
                                        <input type="text" class="form-control" name="email" id="email" value="{{ old('email') }}">
                                        @error('email')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>

                                </div>

                                <div class="input col-sm-12">
                                    <div>
                                        <label for="password" class="my-2">Password</label>
                                        <input type="password" class="form-control" name="password" id="password" value="{{ old('password') }}">
                                        @error('password')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>

                                </div>

                                <div class="input col-sm-12">
                                    <div>
                                        <label for="confirm_password" class="my-2">Confirmirm Password</label>
                                        <input type="password" class="form-control" name="confirm_password" id="confirm_password" value="{{ old('confirm_password') }}">
                                        @error('confirm_password')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>

                                </div>

                                <div class="input col-sm-12">
                                    <div>
                                        <br>
                                        <input type="checkbox" class="my-2" name="super_admin" id="super_admin" value="{{ old('super_admin') }}">
                                        <label for="super_admin">Make Super Admin</label>
                                    </div>

                                </div>

                            </div>


                            <br>


                            <input type="submit" name="add_carousel" value="Add Admin" class="btn btn-primary my-3 ">
                        </div>
                    </div>
                </main>

            </form>


        </div>
    </div>

    <script src="backend/js/app.js"></script>


</body>

</html>