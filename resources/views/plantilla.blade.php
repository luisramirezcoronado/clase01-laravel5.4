<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="{{asset('components/bootstrap/css/bootstrap.min.css')}}">
    <title>UNP</title>
</head>
<body>
    <div class="navbar">
        <div class="container-fluid">
            <a class="navbar-brand" href="#"><img src="{{asset('imagenes/logounp.png')}}" width="50px;"></a>
            <ul class="nav navbar-nav">
                <li class="active">
                    <a href="{{url('/')}}">Home</a>
                </li>
                <li>
                    <a href="#">Link</a>
                </li>
            </ul>
        </div>
    </div>
    <div class="container">
        @yield('contenido')
    </div>

    <script src="{{asset('components/jquery/jquery.js')}}"></script>
    <script src="{{asset('components/bootstrap/js/bootstrap.min.js')}}"></script>
</body>
</html>
