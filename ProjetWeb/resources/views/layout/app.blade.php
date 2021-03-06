<!doctype html>
<html lang="{{ app()->getLocale() }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="{{asset('js/app.js')}}"></script>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <title>BDE CESI La Rochelle</title>
</head>

<body>

    <!--Rajouter if connecter-->

    @include('pages.loginRe')

    @include('inc.header')

    @include('inc.messages')
    @yield('content')

    @include('inc.footer')

    <script src="{{asset('js/app.js')}}"></script>
</body>

</html>