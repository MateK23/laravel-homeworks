<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>TechNews - HTML and CSS Template</title>
        <link href="{{ asset('img/favicon.png') }}" rel=icon>
        <link href='https://fonts.googleapis.com/css?family=Roboto:100,300,400,700,500' rel='stylesheet' type='text/css'>
        <link href="{{ asset(css/bootstrap.min.css) }}" rel="stylesheet">
        <link href="{{ asset(fonts/font-awesome/font-awesome.min.css) }}" rel="stylesheet">
        <link href="{{ asset(css/mobile-menu.css) }}" rel="stylesheet">
        <link href="{{ asset(css/owl.carousel.css) }}" rel="stylesheet">
        <link href="{{ asset(css/owl.theme.default.min.css) }}" rel="stylesheet">
        <link href="{{ asset(css/style.css) }}" rel="stylesheet">

    </head>
    <body>
        @include('week6.homework.body')

        @stack('')



        <script src="{{ asset(js/jquery-2.1.4.min.js) }}"></script>
        <script src="{{ asset(js/bootstrap.min.js) }}"></script>
        <script src="{{ asset(js/mobile-menu.js) }}"></script>
        <script src="{{ asset(js/owl.carousel.min.js) }}"></script>
        <script src="{{ asset(js/script.js) }}"></script>
    </body>
</html>
