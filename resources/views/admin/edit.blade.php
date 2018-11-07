@extends('admin.master')
@section('content')
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">


    <!-- Bootstrap core CSS-->
    <link href="admin/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template-->
    <link href="admin/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

    <!-- Custom styles for this template-->
    <link href="admin/css/sb-admin.css" rel="stylesheet">

</head>

<body class="bg-dark">

    <div class="container">
        <div class="card card-register mx-auto mt-5">
            <div class="card-header">Edit News</div>
            <div class="card-body">
                <form method="post" action="{{route('admin.edit',$post->id)}}">
                    {{csrf_field()}}
                    <div class="form-group">
                        <div class="form-colum">
                            <div>
                                <label>Title</label>
                                <div class="form-group">
                                    <input value="{{$post->title}}" type="text" id="title" name="title" class="form-control" required="required" autofocus="autofocus">

                                </div>
                            </div>
                            <br>
                            <div>
                                <label>Body</label>
                                <div class="form-group">
                                    <input value="{{$post->body}}" type="text" id="body" name="body" class="form-control" required="required" autofocus="autofocus">

                                </div>
                            </div>
                        </div>
                    </div>
                    <a href="{{route('admin.post')}}">
                        <button class="btn btn-primary btn-block" type="submit" name="submit">Edit</button>
            </div>
        </div>
    </div>


    <!-- Bootstrap core JavaScript-->
    <script src="admin/admin/vendor/jquery/jquery.min.js"></script>
    <script src="admin/admin/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="admin/admin/vendor/jquery-easing/jquery.easing.min.js"></script>

</body>

</html>

@endsection
