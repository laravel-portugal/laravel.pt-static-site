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

    <link href="https://fonts.googleapis.com/css?family=Poppins:700,300,600" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:700,600,200" rel="stylesheet" type="text/css">

    <link href="{{ mix('/css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <div class="container">
            <div class="logo">
                <svg xmlns="http://www.w3.org/2000/svg" width="150" height="150" viewBox="0 0 84.1 57.6">
                    <path fill="#FB503B"
                          d="M83.8 26.9c-.6-.6-8.3-10.3-9.6-11.9-1.4-1.6-2-1.3-2.9-1.2s-10.6 1.8-11.7 1.9c-1.1.2-1.8.6-1.1 1.6.6.9 7 9.9 8.4 12l-25.5 6.1L21.2 1.5c-.8-1.2-1-1.6-2.8-1.5C16.6.1 2.5 1.3 1.5 1.3c-1 .1-2.1.5-1.1 2.9S17.4 41 17.8 42c.4 1 1.6 2.6 4.3 2 2.8-.7 12.4-3.2 17.7-4.6 2.8 5 8.4 15.2 9.5 16.7 1.4 2 2.4 1.6 4.5 1 1.7-.5 26.2-9.3 27.3-9.8 1.1-.5 1.8-.8 1-1.9-.6-.8-7-9.5-10.4-14 2.3-.6 10.6-2.8 11.5-3.1 1-.3 1.2-.8.6-1.4zm-46.3 9.5c-.3.1-14.6 3.5-15.3 3.7-.8.2-.8.1-.8-.2-.2-.3-17-35.1-17.3-35.5-.2-.4-.2-.8 0-.8S17.6 2.4 18 2.4c.5 0 .4.1.6.4 0 0 18.7 32.3 19 32.8.4.5.2.7-.1.8zm40.2 7.5c.2.4.5.6-.3.8-.7.3-24.1 8.2-24.6 8.4-.5.2-.8.3-1.4-.6s-8.2-14-8.2-14L68.1 32c.6-.2.8-.3 1.2.3.4.7 8.2 11.3 8.4 11.6zm1.6-17.6c-.6.1-9.7 2.4-9.7 2.4l-7.5-10.2c-.2-.3-.4-.6.1-.7.5-.1 9-1.6 9.4-1.7.4-.1.7-.2 1.2.5.5.6 6.9 8.8 7.2 9.1.3.3-.1.5-.7.6z"></path>

                </svg>

                <h1>Laravel.pt</h1>
            </div>

            <div class="row service-areas">
                <div class="col-xs-12 col-sm-6 col-md-4 service">
                    <a href="https://www.youtube.com/channel/UCIbMW1h5VReAQAwJGi_zT3w" target="_blank">
                        <img class="service-img" src="/img/Laravel-Portugal-Logo@512x512.jpg" alt="Laravel Live Portugal">
                    </a>

                    <h2>Laravel Live Portugal</h2>

                    <p>
                        Os nossos membros discutem tópicos da comunidade, em direto, no Youtube.<br>
                        <strong>Todas as sextas-feiras, às 21h!</strong><br>
                        <small>Também podes ouvir no <a href="https://laravelportugal.simplecast.fm/" target="_blank" rel="nofollow">Simplecast</a>.</small>
                    </p>
                </div>

                <div class="col-xs-12 col-sm-6 col-md-4 service">
                    <a href="https://join.slack.com/t/laravel-portugal/shared_invite/enQtMzM3NTA5NjMxMDE0LTkwYjI1MGQwM2U0NzQxYzVkNmY2ZTE2ZjFjMmRhMDlkODY2MDRiNDA2NTQwOGU4ZDMwOGJlYTY4NTZjNDBiNzM">
                        <img class="service-img" src="/img/Slack-Logo-1.png" alt="Laravel Live Portugal">
                    </a>

                    <h2>Junta-te a nós no Slack!</h2>

                    <p>
                        Convidamos-te a entrar no nosso canal no Slack, partilhares as tuas experiências, a expores as tuas dúvidas e desafiamos-te a criar amizades <strong>na melhor comunidade portuguesa de Laravel!</strong>
                    </p>
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

