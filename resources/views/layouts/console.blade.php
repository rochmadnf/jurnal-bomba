<!DOCTYPE html>
<html class="dark scroll-smooth" lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <x-constants.favicon />

    <title>{{ $title }} &mdash; {{ config('app.name') }}</title>

    @vite(['resources/css/console.css'])
</head>

<body class="antialiased dark:bg-slate-900 dark:text-white">
    {{ $slot }}
</body>

</html>
