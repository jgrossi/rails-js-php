<!doctype html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta name="csrf-param" content="_token">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Rails JS PHP Live Code</title>
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>
    <body>
        <div id="qrcode">
            <img src="/img/qrcode.jpg" width="120" alt="Qrcode">
        </div>
        <div class="container">
            @yield('content')
        </div>
        @include('dummy')
        <script src="{{ asset('js/manifest.js') }}"></script>
        <script src="{{ asset('js/app.js') }}"></script>
    </body>
</html>
