<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Yodu Ministry - @yield('title')</title>
    <!-- Stylesheets -->
    @include('partials.styles')
    
    <link rel="shortcut icon" href="{{ asset('images/favicon.png') }}" type="image/x-icon">
    <link rel="icon" href="{{ asset('images/favicon.png') }}" type="image/x-icon">

    <!-- Responsive -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

    <!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script><![endif]-->
    <!--[if lt IE 9]><script src="js/respond.js"></script><![endif]-->
</head>

<body>

    <div class="page-wrapper">

        <!-- Preloader -->
        <div class="preloader"></div>
        @include('includes.header')
        @yield('content')
        @include('includes.footer')

        <!--Scroll to top-->
        <div class="scroll-top scroll-target" data-target="html"><i class="fa fa-angle-up"></i></div>
    @include('partials.scripts')
    </div>
</body>

</html>