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

    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <!-- <script src="https://cdn.ckeditor.com/4.20.0/standard/ckeditor.js"></script> -->

    <title>Dashboard</title>

    <!-- STYLES -->
    @include('admin.includes.styles')

    <style>
        .label img {
            width: 100%;
            height: 200px;
            margin: auto;
            object-fit: cover;
            opacity: 0.7;
            border-top-left-radius: 5px;
            border-top-right-radius: 5px;
            transition: .6s ease-out;
        }

        .label img:hover {
            opacity: 1;
        }

        .upload-sec {
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
        }

        label span {
            display: inline-block;
            text-align: center;
            background-color: #ddd;
            width: 100%;
            padding: 10px;

        }

        .label {
            cursor: pointer;
        }
    </style>

    <style>
        .flex-fill {
            overflow: auto;
        }
    </style>

</head>

<body>
    <div class="wrapper">
        <!-- NAV-SIDE -->
        @include('admin.includes.sidebar')

        <div class="main">
            <!-- NAV-TOP -->
            @include('admin.includes.nav')

            <main class="content">

                @foreach($header as $datas)

                <form action="{{url('update_about_us', $datas->id)}}" method="POST" novalidate enctype="multipart/form-data">

                    @csrf


                    <div class="container-fluid p-0">

                        <div class="mb-3">
                            <h1 class="h3 d-inline align-middle">Update About</h1>

                            <a href="#about" class="btn btn-primary" style="float: right;">All About</a>
                        </div>
                        <hr>
                        <div>
                            <div class="row">
                                <div class="input col-sm-12 mt-1">
                                    <div>
                                        <label for="editor" class="my-2">About Us</label>
                                        <textarea name="about_us" id="editor" value="" class="form-control" cols="30" rows="10">{{ $datas->about_us }}</textarea>
                                        @error('about_us')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="upload-sec">

                        <input type="file" name="image" style="display:none;" id="image" value="{{ old('image') }}" accept=".gif, .jpg, .png"><br>

                        <label for="image" class="my-2 label">

                            <img src="../assets/img/{{$datas->image}}" alt="">

                            <span>Update Tracking Background</span>
                        </label>

                        @error('image')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>


                    <input type="submit" name="add_shipment" value="Update About Us" class="btn btn-primary my-3 ">

                </form>

                <hr>

                @endforeach

                <div class="container-fluid p-0 mt-2">

                    <div class="mb-1">

                        <h1 class="h3 d-inline align-middle"><strong>About</strong></h1>

                        <a href="{{url('add_about')}}" class="btn btn-primary" style="float: right;">Add About</a>
                    </div>

                    <div class="row mt-3" id="about">

                        <br>
                        <br>
                        <div class="col-12 d-flex">
                            <div class="card flex-fill">

                                <table class="table table-hover my-0">
                                    <thead>
                                        <tr>
                                            <th>S|N</th>
                                            <th>Image</th>
                                            <th>Title</th>
                                            <th>Sub Title</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        @foreach($data as $key => $data)
                                        <tr>
                                            <td>{{$key + 1}}</td>
                                            <td>
                                                <img style="width:80px; " src="assets/img/{{$data->icon}}" alt="{{$data->name}}">
                                            </td>
                                            <td><b>{{$data->title}}</b></td>

                                            <td>{!! Str::limit($data->sub_title, 40, '...') !!}</td>
                                            <td>

                                                <a href="{{route('edit_about', $data->id)}}" class="btn btn-primary btn-sm">Edit</a>

                                                <a href="{{route('delete_about', $data->id)}}" class="btn btn-danger btn-sm" onclick="confirmation(event)">Delete</a>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>

                                </table>


                            </div>
                        </div>

                    </div>

                </div>
            </main>
            <!-- FOOTER -->
            @include('admin.includes.footer')
        </div>
    </div>

    <script>
        function confirmation(e) {

            e.preventDefault();
            var link = e.currentTarget.getAttribute('href');


            Swal.fire({
                title: 'Are you sure?',
                text: "To Deleted This Data!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                cancelButtonText: 'No',
                confirmButtonText: 'Yes, Delete!'
            }).then((result) => {
                if (result.isConfirmed) {
                    Swal.fire(
                        'Deleted!',
                        'Data Has Been Deleted Successfully.',
                        'success'
                    )
                    window.location.href = link
                }
            });

        }
    </script>

<script src="{{ asset('ckeditor5/ckeditor.js') }}"></script>

<script>
    ClassicEditor
        .create(document.querySelector('#editor'),{
            ckfinder:{
                uploadUrl:"{{ route('ckeditor.upload').'?_token='.csrf_token() }}"
            }
        })
        .then(editor => {
            console.log(editor);
        })
        .catch(error => {
            console.error(error);
        });
</script>

    <script src="backend/js/app.js"></script>

    <script src="backend/js/sweetalert2.all.min.js"></script>


</body>

</html>