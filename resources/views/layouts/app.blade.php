<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" dir="{{ app()->getLocale() === 'ar' ? 'rtl' : 'ltr' }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ config('app.name', 'laravel') }}</title>
    <meta property="og:title" content="{{ config('app.name', 'laravel') }}">
    <meta property="og:description"
        content="I am Abdulmalik Alsufayran, Software developer and amateur SCRUM Master / Product Owner">
    <meta property="og:image" content="https://malikthefullstack.com/og-image.png">
    <meta property="og:url" content="https://malikthefullstack.com">
    <meta name="description"
        content="I am Abdulmalik Alsufayran, Software developer and amateur SCRUM Master / Product Owner" />
    <meta name="twitter:title" content="{{ config('app.name', 'laravel') }}">
    <meta name="twitter:description"
        content="I am Abdulmalik Alsufayran, Software developer and amateur SCRUM Master / Product Owner">
    <meta name="twitter:url" content="https://malikthefullstack.com/twitter-image.png">
    <meta name="twitter:card" content="summary">
    <meta name="keywords" content="{{ App\Models\Setting::where('key', 'seo_keywords')->first()->value ?? '' }}" />
    <link rel="canonical" href="https://malikthefullstack.com">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @livewireStyles
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css"
        integrity="sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY=" crossorigin="" />

    <!-- FAVICON -->
    <link rel="icon" type="image/png" href="{{ asset("favicon/favicon-48x48.png") }}" sizes="48x48" />
    <link rel="icon" type="image/svg+xml" href="{{ asset("favicon/favicon.svg") }}" />
    <link rel="shortcut icon" href="{{ asset('favicon/favicon.ico') }}" />
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png" />
    <meta name="apple-mobile-web-app-title" content="Malikthefullstack" />
    <link rel="manifest" href="{{ asset('favicon/site.webmanifest') }}" />
    <!-- END FAVICON -->
    <link rel="stylesheet" href="{{ asset('js/leaflet/leaflet.css') }}" />
    <script src="{{ asset('js/leaflet/leaflet.js') }}"></script>
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-YD437HKY8L"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-YD437HKY8L');
</script>
</head>

<body class="antialiased bg-gray-50 dark:bg-black">
    <div id="cursor" class="hidden sm-block"></div>
    <!-- End Google Tag Manager (noscript) -->
    <div class="w-screen h-screen -z-10 absolute mb dark:dmb">

    </div>
    <div class="max-w-5xl mx-auto min-h-screen bg-white dark:bg-zinc-900">
        <livewire:navigation :social_links="[]" />
        <main>
            {{ $slot }}
        </main>
        <livewire:footer />
    </div>
    <x-toaster-hub /> <!-- 👈 -->
    @livewireScripts
</body>

</html>
