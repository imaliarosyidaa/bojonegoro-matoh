<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">
</head>
<body class="font-sans text-gray-900 antialiased">

    <div class="min-h-screen grid grid-cols-1 md:grid-cols-2">
        <!-- Left side (Image + Branding) -->
        <div class="hidden md:flex relative">

            <img src="{{ asset('images/kayangan-api.jpg') }}" 
                 alt="Bojonegoro" 
                 class="w-full h-full object-cover" />
            <div class="absolute inset-0 bg-black bg-opacity-40 flex flex-col justify-center items-center text-center px-6">
            <a href="/" class="flex items-center space-x-2">
            <img src="{{ asset('images/logo.png') }}" alt="Logo" class="h-16 mb-4">
                 </a>
            <h1 class="text-2xl font-bold text-yellow-300 mb-2">
                    Bersama Lestarikan <br> Kebudayaan di Kab. Bojonegoro
                </h1>
            </div>
        </div>

        <!-- Right side (Login/Register/Forgot Password form) -->
        <div class="flex flex-col justify-center items-center bg-white dark:bg-gray-900 px-6 py-12">
            <div class="w-full max-w-md">
                {{ $slot }}
            </div>
        </div>
    </div>

</body>
</html>
