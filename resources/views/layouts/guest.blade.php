<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta name="description" content="{{setting('seo.description')}}">
        <meta name="keywords" content="{{setting('seo.keywords')}}">
        <meta name="author" content="{{setting('seo.author')}}">
        <link rel="shortcut icon" href="{{asset('images/logos/logo_03.png')}}"/>
        <link rel="apple-touch-icon" sizes="76x76" href="{{asset('images/logos/logo_03.png')}}"/>
        <title>{{ setting('public.title') }}</title>
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
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;500;600;700;800;900;1000&display=swap" rel="stylesheet">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;500;600;700;800;900;1000&family=Lemonada:wght@300;400;500;600;700&display=swap" rel="stylesheet">
        <!-- UIkit JS -->
        <script src="https://cdn.jsdelivr.net/npm/uikit@3.16.15/dist/js/uikit.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/uikit@3.16.15/dist/js/uikit-icons.min.js"></script>
        <!-- Scripts -->
          @vite(['resources/css/app.css', 'resources/js/app.js'])
        <link rel="stylesheet" href="{{asset('build/assets/app-4d265f7d.css')}}">
        @livewireStyles
        <style>
            @if(app()->getLocale() == 'ar')
            h1,h2,h3,h4,h5,h6,div,a,button,p,input,textarea,span
            {
                font-family: 'Cairo', sans-serif
            }
            @else
            h1,h2,h3,h4,h5,h6,div,a,button,p,input,textarea,span
            {
                font-family: "Fira Sans Condensed" ;
            }
            @endif

        </style>
    </head>
    <body dir="{{app()->getLocale() == 'ar' ? 'rtl' : 'ltr'}}" >
    <x-public.header/>
    <div class="{{app()->getLocale() == 'ar' ? 'font-Cairo' : 'font-sans'}} text-gray-900 relative h-auto">
            {{ $slot }}
        <x-public.footer/>
    </div>
    <script href="{{asset('build/assets/app-549d8df7.js')}}"></script>
    @livewireScripts
    </body>
</html>
