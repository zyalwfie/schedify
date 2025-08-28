<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="shortcut icon" href="{{ asset('light-theme-favicon.ico') }}" type="image/x-icon"
            media="(prefers-color-scheme: no-preference)">
        <link rel="shortcut icon" href="{{ asset('dark-theme-favicon.ico') }}" type="image/x-icon"
            media="(prefers-color-scheme: dark)">
        <link rel="shortcut icon" href="{{ asset('light-theme-favicon.ico') }}" type="image/x-icon"
            media="(prefers-color-scheme: light)">
        @vite(['resources/css/app.css', 'resources/js/app.js'])

        <title>{{ $title ?? 'Page Title' }}</title>

        <script>
            const html = document.querySelector('html');
            const isLightOrAuto = localStorage.getItem('hs_theme') === 'light' || (localStorage.getItem('hs_theme') ===
                'auto' && !window.matchMedia('(prefers-color-scheme: dark)').matches);
            const isDarkOrAuto = localStorage.getItem('hs_theme') === 'dark' || (localStorage.getItem('hs_theme') === 'auto' &&
                window.matchMedia('(prefers-color-scheme: dark)').matches);

            if (isLightOrAuto && html.classList.contains('dark')) html.classList.remove('dark');
            else if (isDarkOrAuto && html.classList.contains('light')) html.classList.remove('light');
            else if (isDarkOrAuto && !html.classList.contains('dark')) html.classList.add('dark');
            else if (isLightOrAuto && !html.classList.contains('light')) html.classList.add('light');
        </script>
    </head>

    <body class="dark:bg-dark">
        <x-navbar />

        {{ $slot }}
    </body>

</html>
