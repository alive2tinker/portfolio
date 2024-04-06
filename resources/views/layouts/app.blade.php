<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" dir="{{ app()->getLocale() === 'ar' ? "rtl" : "ltr" }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ config('app.name', 'laravel') }}</title>
    <meta name="description" content="I am Abdulmalik Alsufayran, Software developer and amateur SCRUM Master / Product Owner" />
    <meta name="keywords" content="{{ App\Models\Setting::where('key','seo_keywords')->first()->value ?? ''}}" />
    <link rel="canonical" href="https://www.malikthefullstack.com">
    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link href="{{ asset('js-libs/splide/dist/css/splide.min.css') }}" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.3/dist/js/splide.min.js"></script>
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('favicon/apple-touch-icon.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('favicon/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('favicon/favicon-16x16.png') }}">
    <link rel="manifest" href="{{ asset('favicon/site.webmanifest') }}">
    <link rel="mask-icon" href="{{ asset('favicon/safari-pinned-tab.svg') }}" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">
    @vite('resources/css/app.css')
    @livewireStyles
</head>

<body class="antialiased bg-gray-50 dark:bg-black">
    <div class="w-screen h-screen -z-10 absolute mb dark:dmb">

    </div>
    <div class="max-w-5xl mx-auto min-h-screen bg-white dark:bg-zinc-900">
        <livewire:navigation :social_links="[]" />
        <main>
            {{ $slot }}
        </main>
        <livewire:footer />
    </div>
    @livewireScripts
    @vite('resources/js/app.js')
</body>

</html>