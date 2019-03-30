<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Website da Comunidade Portguesa de Laravel (Laravel Portugal)">
    <meta name="author" content="Membros da Comunidade Laravel Portugal">

    <title>Laravel Portugal</title>

    <link rel="icon" href="/favicon.ico">

    <link href="https://fonts.googleapis.com/css?family=Poppins:700,300,600" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:700,600,200" rel="stylesheet" type="text/css">

    <link href="{{ mix('css/main.css', 'assets/build') }}" rel="stylesheet">
</head>
<body>
    @yield('body')

    <script src="{{ mix('js/main.js', 'assets/build') }}"></script>

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
