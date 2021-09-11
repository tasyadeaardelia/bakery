<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="format-detection" content="telephone=no">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <link href="apple-touch-icon.png" rel="apple-touch-icon">
    <link href="favicon.png" rel="icon">
    <meta name="author" content="#{author}">
    <meta name="keywords" content="#{keyword}">
    <meta name="description" content="#{description}">
    <title>@yield('title')</title>

    @stack('prepend-style')
    @include('includes.app.style')
    @stack('addon-style')
</head>

<body class="page-init">
    <div id="back2top"><i class="fa fa-angle-up"></i></div>
    <div class="loader"></div>
    
    @yield('content')
    
    @stack('prepend-script')
    @include('includes.app.script')
    @stack('addon-script')

  </body>
</html>