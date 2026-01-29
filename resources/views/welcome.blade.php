<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>{{ config('app.name', 'Laravel') }}</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
        @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
            @vite(['resources/css/app.css', 'resources/js/app.js'])
        @endif
        <style>
            body {
                margin: 0;
                background: #ffffff;
                color: #000000;
                font-family: Arial, sans-serif;
                display: flex;
                align-items: center;
                justify-content: center;
                min-height: 100vh;
            }
            .content {
                display: flex;
                flex-direction: column;
                align-items: center;
                gap: 16px;
            }
            .icons {
                display: flex;
                gap: 16px;
                font-size: 24px;
            }
        </style>
    </head>
    <body>
        <div class="content">
            <div>HELLO...</div>
            <div class="icons" aria-label="Font Awesome icons test">
                <i class="fa-solid fa-user"></i>
            </div>
        </div>
    </body>
</html>
