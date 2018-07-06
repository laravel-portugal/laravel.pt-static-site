<!doctype html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Laravel Portugal Community Website">
    <meta name="author" content="Laravel Portugal">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name') }}</title>

    <link rel="icon" href="/favicon.ico">

    @stack('before-styles')

    @section('styles')
        <link href="{{ mix('/css/tailwind.css') }}" rel="stylesheet">
    @show

    @stack('after-styles')

</head>
<body>

<div id="app" dusk="app">
    @yield('content')
</div>

@include('application.jsvars')

@stack('before-scripts')

@section('scripts')
    {{--Tailwind app common scripts here --}}

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-116463385-1"></script>

    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }

        gtag('js', new Date());

        gtag('config', 'UA-116463385-1');
    </script>
@show

@stack('after-scripts')

</body>
</html>