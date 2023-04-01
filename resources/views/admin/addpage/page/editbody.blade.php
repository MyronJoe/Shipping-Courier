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


    <!-- <script src="https://cdn.ckeditor.com/4.20.0/standard/ckeditor.js"></script> -->

</head>

<body>
    <div class="wrapper">
        <!-- NAV-SIDE -->
        @include('admin.includes.sidebar')

        <div class="main">
            <!-- NAV-TOP -->
            @include('admin.includes.nav')



            <form action="{{url('updatebody', $data->id)}}" method="POST" novalidate>

                @csrf

                <main class="content">
                    <div class="container-fluid p-0">

                        <div class="mb-3">
                            <h1 class="h3 d-inline align-middle">Update Page</h1>

                            <a href="{{url('allpages')}}" class="btn btn-primary" style="float: right;">All Pages</a>
                        </div>
                        <hr>
                        <div>
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
                        </div>
                    </div>
                </main>

                <input type="submit" name="add_shipment" value="Update Page" class="btn btn-primary my-3 " style="display:inline-block; margin-left:50px;">

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