<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1.0, user-scalable=no">
<title>Moat/Login</title>
<link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.min.css')}}">
<link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap-slider.min.css')}}">
<link rel="stylesheet" type="text/css" href="{{ asset('css/fontawesome-all.min.css')}}">
<link rel="stylesheet" type="text/css" href="{{ asset('css/slick.css')}}">
<link rel="stylesheet" type="text/css" href="{{ asset('css/style.css')}}">
<link rel="stylesheet" type="text/css" href="{{ asset('css/custom.css')}}">
</head>

<body class="fullpage">
<div id="form-section" class="container-fluid signin">
    <div class="website-logo">
        <a href="index.html">
            <div class="logo" style="width:62px;height:18px"></div>
        </a>
    </div>

    <div class="row">
        <div class="info-slider-holder">
            <div class="info-holder">
                <div class="bold-title">Unete a la nueva plataforma de comunicacion Versatil.</div>
            </div>
        </div>
        
            @yield('content')

        </div>
    </div>
</div>
<script src="{{ asset('js/jquery.min.js')}}"></script>
<script src="{{ asset('js/bootstrap.min.js')}}"></script>
<script src="{{ asset('js/bootstrap-slider.min.js')}}"></script>
<script src="{{ asset('js/slick.min.js')}}"></script>
<script src="{{ asset('js/main.js')}}"></script>
</body>
</html>
