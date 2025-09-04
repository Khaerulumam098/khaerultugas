<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="font-sans text-gray-900 antialiased bg-gray-100">
    <section class="min-h-screen flex items-center justify-center bg-gradient-to-br from-indigo-600 via-purple-700 to-pink-600">
        <div class="w-full min-h-screen flex flex-col items-center justify-center p-12">
            
            <!-- Logo -->
            <div class="flex justify-center mb-8">
                <a href="/">
                    <x-application-logo class="w-28 h-28 fill-current text-white drop-shadow-lg" />
                </a>
            </div>

            <!-- Slot konten -->
            <div class="w-full bg-white rounded-2xl shadow-2xl p-12">
                {{ $slot }}
            </div>

        </div>
    </section>
</body>

</html>
