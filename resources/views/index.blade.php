<html>
  <head>
    <base href="/">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="{{asset('favicon.ico')}}" type="image/x-icon">
    <meta name="author" content="Arthur Mauricio">
    <meta name="author" content="Ouracademy">
    <meta name="author" content="Business Ideas Group">

    <title>Business Ideas Group</title>
    <!-- 1. Load libraries -->
     <!-- Polyfill(s) for older browsers -->
    <script src="angular2app/node_modules/core-js/client/shim.min.js"></script>
    <script src="angular2app/node_modules/zone.js/dist/zone.js"></script>
    <script src="angular2app/node_modules/reflect-metadata/Reflect.js"></script>
    <script src="angular2app/node_modules/systemjs/dist/system.src.js"></script>

    <!-- Bootstrap Core CSS -->
    <link rel="stylesheet" href="angular2app/node_modules/bootstrap/dist/css/bootstrap.min.css">
    <!-- Custom CSS -->
    {!! Html::style('css/layout.css') !!}
    {!! Html::style('css/absolute-background.css') !!}
    <!-- Custom Fonts -->
    {!! Html::style('vendor/font-awesome/css/font-awesome.min.css') !!}
    
    <!-- 2. Configure SystemJS -->
    <script src="angular2app/systemjs.config.js"></script>
    <script>
      System.import('app').catch(function(err){ console.error(err); });
    </script>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <!-- 3. Display the application -->
  <body>
    <app>Loading...</app>
    {!! Html::script('vendor/jquery/jquery-1.12.0.min.js') !!}
    <script src="angular2app/node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
  </body>
</html>
