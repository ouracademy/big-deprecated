<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="{{asset('favicon.ico')}}" type="image/x-icon">
    <meta name="author" content="Arthur Mauricio">
    <meta name="author" content="Ouracademy">
    <meta name="author" content="Business Ideas Group">
    
    <title>@yield('title') - Business Ideas Group</title>
    
    @include('partials.head')
    @yield('head')
    
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    
    
</head>
<body>
    @include('partials.header')
    <main>
        @yield('content')
    </main>
    @include('partials.footer')
    @include('partials.scripts')
    @yield('scripts')
</body>
</html>