<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    {{-- TITLE --}}
    <title>{{ $title ?? config('app.name', 'TWITTERS') }}</title>

    <!-- BOOTSTRAP -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">

    <!-- SCRIPTS -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- MAIN HEADER -->
    @include('templates.layouts.main.header')
</head>

<body>
    <!-- ANY CONTENT -->
    @yield('content')

    <!-- MAIN FOOTER -->
    @include('templates.layouts.main.footer')
</body>

</html>