
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="author" content="RT Suvro" />
    <meta name="keywords" content="Feello HTML Template" />
    <meta name="description" content="Feello HTML Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>@yield('title') - {{ config('app.name') }}</title>

    <!-- Apple Favicon -->
    <link rel="apple-touch-icon" href="img/logo/icon.png">
    <!-- All Device Favicon -->
    <link rel="icon" href="img/logo/favicon.png">
    <!-- Bootstrap -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <!-- Animate -->
    <link rel="stylesheet" href="{{ asset('css/animate.min.css') }}">
    <!-- Slick -->
    <link rel="stylesheet" href="{{ asset('css/slick.css') }}">
    <!-- Selection Sharer -->
    <link rel="stylesheet" href="{{ asset('css/selection-sharer.css') }}">
    <!-- Normalize -->
    <link rel="stylesheet" href="{{ asset('css/normalize.css') }}">
    <!-- Default -->
    <link rel="stylesheet" href="{{ asset('css/default.css') }}">
    <!-- Style -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/custom.css') }}">
    <!-- Responsive -->
    <link rel="stylesheet" href="{{ asset('css/responsive.css') }}">
</head>

<body>
    <div id="main-wrapper">
        @include('layouts.menu')
        <main class="v3">
           @yield('content')
        </main>
        @include('layouts.footer')
    </div>

    <!-- jQuery -->
    <script src="{{asset('js/vendor/jquery-3.5.1.min.js') }}"></script>
    <!-- Bootstrap -->
    <script src="{{asset('js/vendor/bootstrap.min.js') }}"></script>
    <!-- Popper -->
    <script src="{{asset('js/vendor/popper.min.js') }}"></script>
    <!-- Retina -->
    <script src="{{asset('js/vendor/retina.min.js') }}"></script>
    <!-- Slick -->
    <script src="{{asset('js/vendor/slick.min.js') }}"></script>
    <!-- Queryloader2 -->
    <script src="{{asset('js/vendor/queryloader2.min.js') }}"></script>
    <!-- Selection Sharer -->
    <script src="{{asset('js/vendor/selection-sharer.js') }}"></script>
    <!-- Index -->
    <script src="{{asset('js/index.js') }}"></script>
</body>

</html>
