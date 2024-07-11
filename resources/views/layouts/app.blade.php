<!DOCTYPE html>
<html>
<head>
    <title>Laravel 10 Task List App</title>
    @yield('styles')
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">    <style>
        *{
            margin: 0;
            padding: 0;
        }
        h1{
            margin-top: 30px;
        }
        p{
            margin-top: 10px;
            color: black;
            font-size: 17px;
            font-family: Arial, Helvetica, sans-serif;
        }
        button{
            margin: 10px 0px;
        }
        label{
            margin-top: 10px;
            margin-bottom: -2px;
        }
        .btn-close{
            margin: 0;
        }
        a{
            text-decoration: none;
        }
        .desc{
            font-size: 18px; 
        }
        .link{
            font-size: 20px; 
        }
        h2{
            margin-bottom: 15px;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h1>@yield('title')</h1>
                @if (session()->has('success'))
                    <div class="alert alert-success alert-dismissible d-flex align-items-center fade show">
                        <i class="bi bi-cloud-upload-fill"></i>
                        {{session('success')}}
                        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                    </div>
                @endif
                <div>
                    @yield('content')
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>