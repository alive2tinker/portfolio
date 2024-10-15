<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" dir="{{ app()->getLocale() === 'ar' ? 'rtl' : 'ltr' }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Google Tag manager -->
    <!-- Google Tag Manager -->
    <script>
        (function(w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({
                'gtm.start': new Date().getTime(),
                event: 'gtm.js'
            });
            var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s),
                dl = l != 'dataLayer' ? '&l=' + l : '';
            j.async = true;
            j.src =
                'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-PWSJD7M8');
    </script>
    <!-- End Google Tag Manager -->

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
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @livewireStyles
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css"
        integrity="sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY=" crossorigin="" />
</head>

<body class="antialiased bg-gray-50 dark:bg-black">
    <!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-PWSJD7M8"
    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
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
    @livewireScripts
</body>

</html>
