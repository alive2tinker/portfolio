<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" dir="{{ app()->getLocale() === 'ar' ? "rtl" : "ltr" }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ config('app.name', 'laravel') }}</title>
        <meta name="description" content="I am Abdulmalik Alsufayran, Software developer and amateur SCRUM Master / Product Owner" />
        <meta name="keywords" content="laravel,tailwind,alpinejs,livewire,inertiajs,flutter,html,css,javascript,ui,ux,design,scrum" />

        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link href="{{ asset('js-libs/splide/dist/css/splide.min.css') }}" rel="stylesheet" />
        <script src="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.3/dist/js/splide.min.js"></script>
        @vite('resources/css/app.css')
        @livewireStyles
    </head>
    <body class="antialiased bg-gray-50 dark:bg-black">
    <div class="max-w-5xl mx-auto min-h-screen bg-white dark:bg-zinc-900">
        <livewire:navigation />
        <main>
            {{ $slot }}
        </main>
        <livewire:footer />
    </div>
    @livewireScripts
    @vite('resources/js/app.js')
    <script src="https://kit.fontawesome.com/e5c23f6a2a.js" crossorigin="anonymous"></script>
    </body>
</html>
