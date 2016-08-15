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
    {!! Html::style('vendor/bootstrap/css/bootstrap.min.css') !!}
    <!-- Custom CSS -->
    {!! Html::style('css/layout.css') !!}
    <!-- Custom Fonts -->
    {!! Html::style('vendor/font-awesome/css/font-awesome.min.css') !!}
    {!! Html::style('css/absolute-background.css') !!}

    <!-- 2. Configure SystemJS -->
    <script src="angular2app/systemjs.config.js"></script>
    <script>
      System.import('app').catch(function(err){ console.error(err); });
    </script>
  </head>
  <!-- 3. Display the application -->
  <body>
    <app>Loading...</app>
  </body>
</html>
