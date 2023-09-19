<!DOCTYPE html>
<html class="dark scroll-smooth" lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    {!! \Artesaos\SEOTools\Facades\SEOTools::generate() !!}
    <x-constants.favicon />

    <title>{{ $title }} &mdash; {{ config('app.name') }}</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="body-app">
    <div id="body-texture"></div>
    <header class="relative w-full bg-accent-1 dark:bg-slate-900">
        <div id="shadow-navbar" class="hidden w-full bg-transparent lg:h-[90px]"></div>
        <x-navbar />
    </header>

    @if (in_array(url()->current(), [route('home'), route('login'), route('register')]))
        <main class="mb-12 px-6 dark:bg-slate-900">
            {{ $slot }}
        </main>
    @else
        <main class="grid px-24 py-12 dark:bg-slate-900 md:grid-cols-9 md:place-content-center md:gap-10">
            <div class="col-span-7 h-fit rounded-md border border-slate-300/20 p-6 md:col-span-6">
                {{ $slot }}
            </div>
            <x-navside />
        </main>
    @endif

    <div id="btnToTop"
        class="fixed bottom-10 right-5 z-[100] flex items-center rounded-full bg-orange-400 p-2 text-white hover:bg-orange-500 dark:bg-amber-600 dark:hover:bg-amber-700"
        role="button" aria-label="to top">
        @svg('icon-arrow-up', 'h-5 w-5')
    </div>
</body>

</html>
