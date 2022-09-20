<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap">

    <!-- Scripts -->
    @vite('resources/css/app.css')
</head>
<body class="font-sans antialiased">
{{--    <div class="min-h-screen bg-gray-100">--}}
    <div class="min-h-screen">
        @include('templates.layouts.base.header')

        <!-- Page Heading -->
        <header class="bg-white shadow">
            <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
            {{-- UNDER HEADER --}}

            </div>
        </header>
        @include('templates.layouts.base.sidebar')

        <!-- Page Content -->
        <main>
            @yield('content')
        </main>

        <div>
            @include('templates.layouts.base.footer')
        </div>
    </div>
</body>
</html>
