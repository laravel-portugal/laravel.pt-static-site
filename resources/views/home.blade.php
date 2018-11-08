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
<body class="h-full text-black antialiased overflow-hidden">
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 84.1 57.6" class="w-full max-h-screen mt-20 laravel-logo absolute fill-current text-red-lightest opacity-50">
        <path d="M83.8 26.9c-.6-.6-8.3-10.3-9.6-11.9-1.4-1.6-2-1.3-2.9-1.2s-10.6 1.8-11.7 1.9c-1.1.2-1.8.6-1.1 1.6.6.9 7 9.9 8.4 12l-25.5 6.1L21.2 1.5c-.8-1.2-1-1.6-2.8-1.5C16.6.1 2.5 1.3 1.5 1.3c-1 .1-2.1.5-1.1 2.9S17.4 41 17.8 42c.4 1 1.6 2.6 4.3 2 2.8-.7 12.4-3.2 17.7-4.6 2.8 5 8.4 15.2 9.5 16.7 1.4 2 2.4 1.6 4.5 1 1.7-.5 26.2-9.3 27.3-9.8 1.1-.5 1.8-.8 1-1.9-.6-.8-7-9.5-10.4-14 2.3-.6 10.6-2.8 11.5-3.1 1-.3 1.2-.8.6-1.4zm-46.3 9.5c-.3.1-14.6 3.5-15.3 3.7-.8.2-.8.1-.8-.2-.2-.3-17-35.1-17.3-35.5-.2-.4-.2-.8 0-.8S17.6 2.4 18 2.4c.5 0 .4.1.6.4 0 0 18.7 32.3 19 32.8.4.5.2.7-.1.8zm40.2 7.5c.2.4.5.6-.3.8-.7.3-24.1 8.2-24.6 8.4-.5.2-.8.3-1.4-.6s-8.2-14-8.2-14L68.1 32c.6-.2.8-.3 1.2.3.4.7 8.2 11.3 8.4 11.6zm1.6-17.6c-.6.1-9.7 2.4-9.7 2.4l-7.5-10.2c-.2-.3-.4-.6.1-.7.5-.1 9-1.6 9.4-1.7.4-.1.7-.2 1.2.5.5.6 6.9 8.8 7.2 9.1.3.3-.1.5-.7.6z"></path>
    </svg>
    <div id="app" class="h-full pt-6 px-6">
        <nav class="flex items-baseline justify-between">
            <h1 class="tracking-normal font-normal text-grey-darker">laravel.pt</h1>
            <div class="flex">
                <a href="https://twitter.com/LaravelPortugal" target="_blank" class="text-grey-darker hover:text-blue-light">
                    <svg class="fill-current w-5 h-5 mx-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                        <title>Twitter</title>
                        <path d="M6.29 18.25c7.55 0 11.67-6.25 11.67-11.67v-.53c.8-.59 1.49-1.3 2.04-2.13-.75.33-1.54.55-2.36.65a4.12 4.12 0 0 0 1.8-2.27c-.8.48-1.68.81-2.6 1a4.1 4.1 0 0 0-7 3.74 11.65 11.65 0 0 1-8.45-4.3 4.1 4.1 0 0 0 1.27 5.49C2.01 8.2 1.37 8.03.8 7.7v.05a4.1 4.1 0 0 0 3.3 4.03 4.1 4.1 0 0 1-1.86.07 4.1 4.1 0 0 0 3.83 2.85A8.23 8.23 0 0 1 0 16.4a11.62 11.62 0 0 0 6.29 1.84"></path>
                    </svg>
                </a>

                <a href="https://laravelportugal.simplecast.fm/" target="_blank" class="text-grey-darker hover:text-blue-light">
                    <title>Podcast</title>
                    <svg class="fill-current w-5 h-5 mx-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512.001 512.001">
                        <g><path d="M412.113,170.747c-6.637,0-12.02,5.381-12.02,12.02v75.104c0,79.452-64.639,144.09-144.092,144.09    S111.91,337.321,111.91,257.87v-75.104c0-6.639-5.383-12.02-12.02-12.02c-6.639,0-12.02,5.381-12.02,12.02v75.104    c0,88.666,68.993,161.512,156.111,167.696v62.395h-62.174c-6.637,0-12.02,5.381-12.02,12.02c0,6.639,5.382,12.02,12.02,12.02    h148.386c6.637,0,12.02-5.381,12.02-12.02c0-6.639-5.382-12.02-12.02-12.02H268.02v-62.395    c87.119-6.184,156.111-79.031,156.111-167.696v-75.104C424.133,176.128,418.75,170.747,412.113,170.747z"></path></g>
	                    <g><path d="M264.011,0h-16.02c-54.949,0-99.653,44.704-99.653,99.653V265.88c0,54.949,44.704,99.653,99.653,99.653h16.02    c54.949,0,99.653-44.704,99.653-99.653V99.653C363.664,44.704,318.96,0,264.011,0z M339.625,130.853h-43.572    c-6.639,0-12.02,5.381-12.02,12.02c0,6.639,5.381,12.02,12.02,12.02h43.572v33.458h-43.572c-6.639,0-12.02,5.381-12.02,12.02    s5.381,12.02,12.02,12.02h43.572v33.46h-43.572c-6.639,0-12.02,5.381-12.02,12.02s5.381,12.02,12.02,12.02h43.464    c-2.091,39.836-35.157,71.603-75.505,71.603h-16.02c-40.348,0-73.414-31.767-75.505-71.603h43.464    c6.639,0,12.02-5.381,12.02-12.02s-5.381-12.02-12.02-12.02h-43.572v-33.46h43.572c6.639,0,12.02-5.381,12.02-12.02    s-5.381-12.02-12.02-12.02h-43.572v-33.458h43.572c6.639,0,12.02-5.381,12.02-12.02c0-6.639-5.381-12.02-12.02-12.02h-43.572    v-31.2c0-29.964,17.52-55.914,42.854-68.143v33.983c0,6.639,5.382,12.02,12.02,12.02s12.02-5.381,12.02-12.02V24.558    c2.863-0.331,30.595-0.331,33.458,0v40.935c0,6.639,5.381,12.02,12.02,12.02c6.637,0,12.02-5.381,12.02-12.02V31.51    c25.334,12.229,42.854,38.177,42.854,68.142V130.853z"></path></g>
                    </svg>
                </a>
            </div>
        </nav>

        <div class="w-5/6 mx-auto mt-16">
            <h2 class="logo text-grey-darkest text-5xl">Bem-vindo à maior comunidade portuguesa de <span class="text-red-light opacity-75">Laravel</span></h2>

            <div class="flex mt-20">
                <div class="flex-1 flex flex-col text-center mr-2">
                    <h3 class="text-2xl text-grey-darker font-semibold">LaravelPT Live</h3>
                    <p class="text-lg text-grey-darker mt-6 flex-1 w-3/4 mx-auto">Os nossos membros discutem tópicos da comunidade, em direto, no Youtube. Todas as sextas-feiras, às 21h00!</p>
                    <a href="#" class="btn bg-blue text-white mx-auto">
                        <svg viewBox="0 0 100 100" class="fill-current h-8 w-8 mr-2">
                            <path d="M50,3.8C24.5,3.8,3.8,24.5,3.8,50S24.5,96.2,50,96.2S96.2,75.5,96.2,50S75.5,3.8,50,3.8z M71.2,53.3l-30.8,18  c-0.6,0.4-1.3,0.5-1.9,0.5c-0.6,0-1.3-0.1-1.9-0.5c-1.2-0.6-1.9-1.9-1.9-3.3V32c0-1.4,0.8-2.7,1.9-3.3c1.2-0.6,2.7-0.6,3.8,0  l30.8,18c1.2,0.6,1.9,1.9,1.9,3.3S72.3,52.7,71.2,53.3z"></path>
                        </svg>
                        <span class="tracking-wide font-semibold text-lg mr-2">ASSISTIR</span>
                    </a>
                </div>

                <div class="flex-1 flex flex-col text-center ml-2">
                    <h3 class="text-2xl text-grey-darker font-semibold">Junta-te a nós no Slack!</h3>
                    <p class="text-lg text-grey-darker mt-6 flex-1">Convidamos-te a entrar  no nosso canal no Slack, partilhares as tuas experiências, a expores as tuas dúvidas e desafiamos-te a criar amizades na melhor comunidade portuguesa de Laravel!</p>
                    <a href="#" class="btn bg-blue text-white mx-auto">
                        <svg viewBox="0 0 126 126" class="fill-current w-8 h-8 mr-2" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                            <g><path d="M68.186 51.784l-16.688 5.59 5.399 16.12 16.688-5.59-5.399-16.12z"></path><path fill-rule="evenodd" d="M45.343 5.243c43-12.9 61.6-2.9 74.5 40.1 12.9 43 2.9 61.6-40.1 74.5-43 12.9-61.6 2.9-74.5-40.1-12.9-43-2.9-61.6 40.1-74.5zm44.7 70.7l8.1-2.7c3.4-1.1 5.2-4.8 4.1-8.2-1.1-3.4-4.8-5.2-8.2-4.1l-8.1 2.7-5.4-16.1 8.1-2.7c3.4-1.1 5.2-4.8 4.1-8.2-1.1-3.4-4.8-5.2-8.2-4.1l-8.1 2.7-2.8-8.4c-1.1-3.4-4.8-5.2-8.2-4.1-3.4 1.1-5.2 4.8-4.1 8.2l2.8 8.4-16.7 5.6-2.8-8.4c-1.1-3.4-4.8-5.2-8.2-4.1-3.4 1.1-5.2 4.8-4.1 8.2l2.8 8.4-8.1 2.7c-3.4 1.1-5.2 4.8-4.1 8.2.9 2.6 3.4 4.3 6 4.4.7.1 1.5-.1 2.2-.3l8.1-2.7 5.4 16.1-8.1 2.7c-3.4 1.1-5.2 4.8-4.1 8.2.9 2.6 3.4 4.3 6 4.4.7.1 1.5-.1 2.2-.3l8.1-2.7 2.8 8.4c.9 2.6 3.4 4.3 6 4.4.7.1 1.5-.1 2.2-.3 3.4-1.1 5.2-4.8 4.1-8.2l-2.8-8.4 16.7-5.6 2.8 8.4c.9 2.6 3.4 4.3 6 4.4.7.1 1.5-.1 2.2-.3 3.4-1.1 5.2-4.8 4.1-8.2l-2.8-8.4z"></path></g>
                        </svg>
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
