<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        @php
            $seoTitle = trim(strip_tags(View::yieldContent('title', config('app.name', 'Laravel'))));
            $seoDescription = trim(strip_tags(View::yieldContent('meta_description', 'Unabhaengiges Ingenieurbuero fuer Baubegleitung, Gutachten und technische Expertise im Hochbau.')));
            $seoImage = asset('images/bausachverstaendiger_logo_dark.png');
        @endphp
        <title>{{ $seoTitle }}</title>
        <meta name="description" content="{{ $seoDescription }}">
        <link rel="canonical" href="{{ url()->current() }}">
        <link rel="icon" type="image/png" href="{{ $seoImage }}">
        <meta property="og:title" content="{{ $seoTitle }}">
        <meta property="og:description" content="{{ $seoDescription }}">
        <meta property="og:type" content="website">
        <meta property="og:locale" content="de_DE">
        <meta property="og:url" content="{{ url()->current() }}">
        <meta property="og:image" content="{{ $seoImage }}">
        <meta property="og:image:alt" content="UR Baubegleitung Logo">
        <meta name="twitter:card" content="summary_large_image">
        <meta name="twitter:title" content="{{ $seoTitle }}">
        <meta name="twitter:description" content="{{ $seoDescription }}">
        <meta name="twitter:image" content="{{ $seoImage }}">
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
