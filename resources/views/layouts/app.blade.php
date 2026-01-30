<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>@yield('title', config('app.name', 'Laravel'))</title>
        <meta name="description" content="@yield('meta_description', 'Unabhaengiges Ingenieurbuero fuer Baubegleitung, Gutachten und technische Expertise im Hochbau.')">
        <meta property="og:title" content="@yield('title', config('app.name', 'Laravel'))">
        <meta property="og:description" content="@yield('meta_description', 'Unabhaengiges Ingenieurbuero fuer Baubegleitung, Gutachten und technische Expertise im Hochbau.')">
        <meta property="og:type" content="website">
        <meta property="og:locale" content="de_DE">
        <meta name="robots" content="index, follow">
        @stack('head')
        @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
            @vite(['resources/css/app.css', 'resources/js/app.js'])
        @endif
    </head>
    <body class="bg-slate-50 text-slate-900 antialiased">
        <x-header />
        <main class="pt-0">
            @yield('content')
        </main>
        <x-footer />
        @stack('scripts')
    </body>
</html>
