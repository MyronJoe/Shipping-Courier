<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="author" content="">
    <meta name="keywords" content="">

    <!-- <script src="https://cdn.ckeditor.com/4.20.0/standard/ckeditor.js"></script> -->

    <title>Dashboard</title>

    <!-- STYLES -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="shortcut icon" href="../backend/img/icons/icon-48x48.png" />

    <link rel="canonical" href="https://demo-basic.adminkit.io/" />

    <link href="../backend/css/app.css" rel="stylesheet">
    <link href="../backend/css/style.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap" rel="stylesheet">

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

</head>

<body>
    <div class="wrapper">
        <!-- NAV-SIDE -->
        @include('admin.includes.sidebar')

        <div class="main">
            <!-- NAV-TOP -->
            @include('admin.includes.nav')



            <form action="{{url('update_service_card', $data->id)}}" method="POST" novalidate enctype="multipart/form-data">

                @csrf

                <main class="content">
                    <div class="container-fluid p-0">

                        <div class="mb-3">
                            <h1 class="h3 d-inline align-middle">Update Service</h1>

                            <a href="{{url('service')}}" class="btn btn-primary" style="float: right;">All Service</a>
                        </div>
                        <hr>
                        <div>
                            <div class="row">
                                <div class="input col-sm-12 col-md-6">
                                    <div>
                                        <label for="title" class="my-2">Title</label>
                                        <input type="text" class="form-control" name="title" id="title" value="{{ $data->card_title }}">
                                        @error('title')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>


                                </div>

                                <div class="input col-sm-12 col-md-6">
                                    <div>
                                        <label for="sub_title" class="my-2">Sub Title</label>
                                        <input type="text" class="form-control" name="sub_title" id="sub_title" value="{{ $data->card_sub_title }}">
                                        @error('sub_title')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>

                                </div>
                            </div>

                            <div class="row">
                                <div class="input col-sm-12 mt-1">
                                    <div>
                                        <label for="editor" class="my-2">Body</label>
                                        <textarea name="body" id="editor" value="" class="form-control" cols="30" rows="10">{{ $data->body }}</textarea>
                                        @error('body')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                            </div>


                            <br>
                            <div class="upload-sec">

                                <input type="file" name="image" style="display:none;" id="image" value="{{ old('image') }}" accept=".gif, .jpg, .png"><br>

                                <label for="image" class="my-2 label">

                                    <img src="../assets/img/{{$data->image}}" alt="{{$data->name}}">

                                    <span>Update Service Image</span>
                                </label>

                                @error('image')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <br>

                            <input type="submit" name="add_carousel" value="Update Service" class="btn btn-primary my-3 ">
                        </div>
                    </div>
                </main>

            </form>


        </div>
    </div>

    <script src="{{ asset('ckeditor5/ckeditor.js') }}"></script>

    <script>
        ClassicEditor
            .create(document.querySelector('#editor'), {
                ckfinder: {
                    uploadUrl: "{{ route('ckeditor.upload').'?_token='.csrf_token() }}"
                }
            })
            .then(editor => {
                console.log(editor);
            })
            .catch(error => {
                console.error(error);
            });
    </script>

    <script src="../backend/js/app.js"></script>


</body>

</html>