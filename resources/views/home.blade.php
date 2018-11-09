<!doctype html>
<html lang="{{ config('app.locale') }}" class="h-full">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Laravel Portugal Community Website">
    <meta name="author" content="Laravel Portugal">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name') }}</title>

    <link rel="icon" href="/favicon.ico">

    <link href="https://fonts.googleapis.com/css?family=Poppins:700,300,600" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:700,600,400" rel="stylesheet" type="text/css">

    <link href="{{ mix('/css/app.css') }}" rel="stylesheet">
</head>
<body class="h-full text-black antialiased">


    <div id="app" class="mx-auto min-h-screen pt-6 relative overflow-hidden">
        {{-- Background SVG --}}
        @include('partials.background')

        {{-- Navbar --}}
        @include('partials.nav')

        {{-- Main content --}}
        <main class="w-5/6 mx-auto mt-16">
            <h2 class="logo text-grey-darkest text-center text-4xl sm:text-5xl">
                Bem-vindo à maior comunidade portuguesa de <span class="text-red-light opacity-75">Laravel</span>
            </h2>

            <div class="flex flex-col md:flex-row mt-20">
                {{-- Left-side CTA --}}
                @include('partials.youtube-cta')
                {{-- Right-side CTA --}}
                @include('partials.slack-cta')
            </div>
        </main>

    </div>


    <script src="{{ mix('/js/app.js') }}"></script>

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
</body>
</html>
