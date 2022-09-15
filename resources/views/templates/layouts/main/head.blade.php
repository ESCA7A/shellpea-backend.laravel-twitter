<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>{{ $title ?? config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link href="{{ asset('css/templates/head.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap">

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <style>
        body {
            font-family: 'Nunito', sans-serif;
            background-color: #ffafbd;
        }
    </style>
</head>
<body>
    <div class="min-h-full">
        <nav class="bg-gray-800">
            <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
                <div class="flex h-16 items-center justify-between">
                    <div class="flex items-center">
                        <div class="flex-shrink-0">
                            <img class="h-8 w-8" src="https://tailwindui.com/img/logos/mark.svg?color=indigo&shade=500" alt="Your Company">
                        </div>
                        <div class="hidden md:block">
                            <div class="ml-10 flex items-baseline space-x-4">
                                <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
                                <a href="#" class="bg-gray-900 text-white px-3 py-2 rounded-md text-sm font-medium" aria-current="page">Dashboard</a>

                                <a href="#" class="text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">Team</a>

                                <a href="#" class="text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">Projects</a>

                                <a href="#" class="text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">Calendar</a>

                                <a href="#" class="text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">Reports</a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </nav>
    </div>
    <div class="font-sans antialiased">
        {{--Page Content--}}
        @if (Route::has('login'))
            <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                @auth
                    <div>
                        <span class="text-sm text-gray-700 dark:text-gray-500 underline">{{ Auth::user()->name }}</span>
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf

                            <x-responsive-nav-link :href="route('logout')"
                                                   onclick="event.preventDefault();
                                                            this.closest('form').submit();">
                                {{ __('Log Out') }}
                            </x-responsive-nav-link>
                        </form>
                    </div>
                @else
                    <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>

                    @if (Route::has('register'))
                        <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                    @endif
                @endauth
            </div>
        @endif

        {{--FOOTER INFO CONTENT--}}
        <footer>
            <div class="footer-contents">
                <a class="active" href="{{ route('homepage')}}">Home</a>
                <a class="active" href="{{ route('welcome')}}">Contact</a>
                <a class="active" href="{{ route('welcome')}}">About</a>
                <a class="active" href="{{ route('welcome')}}">welcome</a>
                <ol>
                    <li>English (UK)</li>
                    <li><button>+</button></li>
                    <small>twitters © {{date('Y')}}</small>
                </ol>
            </div>
        </footer>
    </div>
</body>
</html>