<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Laravel Portugal Community Website">
    <meta name="author" content="Laravel Portugal">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Laravel Portugal</title>

    <link rel="icon" href="/favicon.ico">

    <link href="{{mix('/css/app.css')}}" rel="stylesheet">

    <style type="text/css">
        a {
            text-decoration: none;
        }

        a:hover {
            text-decoration: none;
        }
    </style>
</head>

<body>
<div id="app">

    <header>
        <div class="collapse bg-dark" id="navbarHeader">
            <div class="container">
                <div class="row">
                    <div class="col-sm-8 col-md-7 py-4">
                        <h4 class="text-white">About</h4>
                        <p class="text-muted">Add some information about the album below, the author, or any other
                            background context. Make it a few sentences long so folks can pick up some informative
                            tidbits. Then, link them off to some social networking sites or contact information.</p>
                    </div>
                    <div class="col-sm-4 offset-md-1 py-4">
                        <h4 class="text-white">Contact</h4>
                        <ul class="list-unstyled">
                            <li><a href="#" class="text-white">Follow on Twitter</a></li>
                            <li><a href="https://www.facebook.com/laravelpt/" class="text-white">Like on Facebook</a>
                            </li>
                            <li><a href="#" class="text-white">Email me</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="navbar navbar-dark bg-dark box-shadow">
            <div class="container d-flex justify-content-between">
                <a href="/" class="navbar-brand d-flex align-items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" width="42.1" height="29.0" viewBox="0 0 84.1 57.6">
                        <path fill="#FB503B"
                              d="M83.8 26.9c-.6-.6-8.3-10.3-9.6-11.9-1.4-1.6-2-1.3-2.9-1.2s-10.6 1.8-11.7 1.9c-1.1.2-1.8.6-1.1 1.6.6.9 7 9.9 8.4 12l-25.5 6.1L21.2 1.5c-.8-1.2-1-1.6-2.8-1.5C16.6.1 2.5 1.3 1.5 1.3c-1 .1-2.1.5-1.1 2.9S17.4 41 17.8 42c.4 1 1.6 2.6 4.3 2 2.8-.7 12.4-3.2 17.7-4.6 2.8 5 8.4 15.2 9.5 16.7 1.4 2 2.4 1.6 4.5 1 1.7-.5 26.2-9.3 27.3-9.8 1.1-.5 1.8-.8 1-1.9-.6-.8-7-9.5-10.4-14 2.3-.6 10.6-2.8 11.5-3.1 1-.3 1.2-.8.6-1.4zm-46.3 9.5c-.3.1-14.6 3.5-15.3 3.7-.8.2-.8.1-.8-.2-.2-.3-17-35.1-17.3-35.5-.2-.4-.2-.8 0-.8S17.6 2.4 18 2.4c.5 0 .4.1.6.4 0 0 18.7 32.3 19 32.8.4.5.2.7-.1.8zm40.2 7.5c.2.4.5.6-.3.8-.7.3-24.1 8.2-24.6 8.4-.5.2-.8.3-1.4-.6s-8.2-14-8.2-14L68.1 32c.6-.2.8-.3 1.2.3.4.7 8.2 11.3 8.4 11.6zm1.6-17.6c-.6.1-9.7 2.4-9.7 2.4l-7.5-10.2c-.2-.3-.4-.6.1-.7.5-.1 9-1.6 9.4-1.7.4-.1.7-.2 1.2.5.5.6 6.9 8.8 7.2 9.1.3.3-.1.5-.7.6z"></path>
                    </svg>
                    <strong class="ml-3">Laravel.pt</strong>
                </a>
                {{--<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarHeader" aria-controls="navbarHeader" aria-expanded="false" aria-label="Toggle navigation">--}}
                {{--<span class="navbar-toggler-icon"></span>--}}
                {{--</button>--}}
            </div>
        </div>
    </header>

    <main role="main">

        <section class="jumbotron text-center">
            <div class="container">
                <h1 class="jumbotron-heading">Laravel.pt</h1>
                {{--<p class="lead text-muted">Something short and leading about the collection below—its contents, the creator, etc. Make it short and sweet, but not too short so folks don't simply skip over it entirely.</p>--}}
                {{--<p>--}}
                {{--<a href="https://join.slack.com/t/laravel-portugal/shared_invite/enQtMzM3NTA5NjMxMDE0LTkwYjI1MGQwM2U0NzQxYzVkNmY2ZTE2ZjFjMmRhMDlkODY2MDRiNDA2NTQwOGU4ZDMwOGJlYTY4NTZjNDBiNzM" class="btn btn-primary my-2">Slack</a>--}}
                {{--<a href="https://laravel.com" class="btn btn-secondary my-2">Laravel.com</a>--}}
                {{--</p>--}}
            </div>
        </section>

        <div class="py-5 bg-light">
            <div class="container">

                <div class="row d-flex justify-content-around">

                    <div class="col-md-3">
                        <div class="card mb-4 box-shadow">
                            <a href="https://www.youtube.com/channel/UCIbMW1h5VReAQAwJGi_zT3w"
                               target="_blank">
                                <img class="card-img-top img-fluid" src="/img/Laravel-Portugal-Logo@512x512.jpg"
                                     alt="Laravel Live Portugal">
                            </a>
                            <div class="card-body">
                                {{--<p class="card-text">Laravel Portugal Live no YouTube</p>--}}
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group">
                                        <button type="button"
                                                class="btn btn-sm btn-outline-secondary"
                                                data-url="https://www.youtube.com/channel/UCIbMW1h5VReAQAwJGi_zT3w"
                                                @click="visitExternalUrl"
                                        >
                                            YouTube
                                        </button>
                                        <button type="button"
                                                class="btn btn-sm btn-outline-secondary"
                                                data-url="https://laravelportugal.simplecast.fm/"
                                                @click="visitExternalUrl"
                                        >
                                            SimpleCast MP3
                                        </button>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>


                    <div class="col-md-3">
                        <div class="card mb-4 box-shadow">
                            <a href="https://join.slack.com/t/laravel-portugal/shared_invite/enQtMzM3NTA5NjMxMDE0LTkwYjI1MGQwM2U0NzQxYzVkNmY2ZTE2ZjFjMmRhMDlkODY2MDRiNDA2NTQwOGU4ZDMwOGJlYTY4NTZjNDBiNzM"
                               target="_blank">
                                <img class="card-img-top img-fluid" src="/img/Slack-Logo-1.png"
                                     alt="Slack Laravel Portugal">
                                <div class="card-body">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="btn-group">
                                            <button type="button"
                                                    class="btn btn-sm btn-outline-secondary"
                                                    data-url="https://join.slack.com/t/laravel-portugal/shared_invite/enQtMzM3NTA5NjMxMDE0LTkwYjI1MGQwM2U0NzQxYzVkNmY2ZTE2ZjFjMmRhMDlkODY2MDRiNDA2NTQwOGU4ZDMwOGJlYTY4NTZjNDBiNzM"
                                                    @click="visitExternalUrl"
                                            >
                                                Junta-te a nós no Slack!
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>


                </div>
            </div>
        </div>

    </main>

    <footer class="text-muted">
        <div class="container">
            <p>Laravel Portugal 2018</p>
        </div>
    </footer>

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

