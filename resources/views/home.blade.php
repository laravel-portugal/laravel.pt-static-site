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
<body class="h-full text-black antialiased md:overflow-hidden">

    {{-- Background SVG --}}
    @include('partials.background')

    <div id="app" class="h-full pt-6 px-6">

        {{-- Navbar --}}
        @include('partials.nav')

        <div class="w-5/6 mx-auto mt-16">
            <h2 class="logo text-grey-darkest text-4xl md:text-5xl">Bem-vindo à maior comunidade portuguesa de <span class="text-red-light opacity-75">Laravel</span></h2>

            <div class="flex flex-col md:flex-row mt-20">
                <div class="flex-1 flex flex-col text-center mr-2">
                    <h3 class="text-2xl text-grey-darker font-semibold">LaravelPT Live</h3>
                    <p class="text-lg text-grey-darker mt-6 flex-1 w-3/4 mx-auto">Os nossos membros discutem tópicos da comunidade, em direto, no Youtube. Todas as sextas-feiras, às 21h00!</p>
                    <a href="https://www.youtube.com/channel/UCIbMW1h5VReAQAwJGi_zT3w" target="_blank" class="btn bg-blue text-white mx-auto hover:bg-blue-dark">
                        @include('partials.play')
                        <span class="tracking-wide font-semibold text-lg mr-2">ASSISTIR</span>
                    </a>
                </div>

                <div class="flex-1 flex flex-col text-center ml-2 my-16 md:my-0">
                    <h3 class="text-2xl text-grey-darker font-semibold">Junta-te a nós no Slack!</h3>
                    <p class="text-lg text-grey-darker mt-6 flex-1">Convidamos-te a entrar  no nosso canal no Slack, partilhares as tuas experiências, a expores as tuas dúvidas e desafiamos-te a criar amizades na melhor comunidade portuguesa de Laravel!</p>
                    <a href="https://join.slack.com/t/laravel-portugal/shared_invite/enQtMzM3NTA5NjMxMDE0LTkwYjI1MGQwM2U0NzQxYzVkNmY2ZTE2ZjFjMmRhMDlkODY2MDRiNDA2NTQwOGU4ZDMwOGJlYTY4NTZjNDBiNzM" target="_blank" class="btn bg-blue text-white mx-auto hover:bg-blue-dark">
                        @include('partials.slack')
                        <span class="tracking-wide font-semibold text-lg mr-2">ADERIR</span>
                    </a>
                </div>
            </div>
        </div>
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
