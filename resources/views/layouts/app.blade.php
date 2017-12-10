<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Styles -->
    <link href="/css/stack-interface.css" rel="stylesheet" type="text/css" media="all">
    <link href="/css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
    <link href="/css/stack-interface.css" rel="stylesheet" type="text/css" media="all" />
    <link href="/css/theme.css" rel="stylesheet" type="text/css" media="all" />
    <link href="/css/custom.css" rel="stylesheet" type="text/css" media="all" />
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:200,300,400,400i,500,600,700" rel="stylesheet">    
</head>
<body data-smooth-scroll-offset="77">
    @include('layouts.partials.navbar')

    <div class="main-container">       
        @yield('content')
    </div>
    
    @include('layouts.partials.footer')
    <!-- Scripts -->
    <script src="/js/jquery-3.1.1.min.js"></script>
    <script src="/js/parallax.js"></script>
    <script src="/js/countdown.min.js"></script>
    <script src="/js/smooth-scroll.min.js"></script>
    <script src="/js/scripts.js"></script>

</body>
</html>
