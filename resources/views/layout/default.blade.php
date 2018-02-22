<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="stylesheet" type="text/css" href="{{ asset('public/css/app.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('public/css/layout.css') }}">
        
        <title>Ask Sachin</title>

    </head>
    <body>

@yield('side_bar')

@yield('wrapper')

    </body>
</html>
