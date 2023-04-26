<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta name="description" content="">
        <meta name="keywords" content="">
        <meta name="author" content="">
        <link rel="shortcut icon" href="{{asset('images/logos/logo_03.png')}}"/>
        <link rel="apple-touch-icon" sizes="76x76" href="{{asset('images/logos/logo_03.png')}}"/>

        <title>{{ setting('app.name') }}</title>
        <link href="{{asset('fontawesome/')}}/css/fontawesome.css" rel="stylesheet">
        <link href="{{asset('fontawesome/')}}/css/brands.css" rel="stylesheet">
        <link href="{{asset('fontawesome/')}}/css/solid.css" rel="stylesheet">
        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Nanum+Brush+Script&display=swap" rel="stylesheet">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Fira+Sans+Condensed:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body>
    <x-public.header/>
    <div class="font-sans text-gray-900 antialiased min-h-screen">
            {{ $slot }}
        </div>
     <x-public.footer/>

    </body>
</html>
