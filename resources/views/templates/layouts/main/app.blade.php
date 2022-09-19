<!DOCTYPE html>
<html lang="en">
<head>
    @include('templates.layouts.main.in-head')
</head>

<body>
    <div id="app">
        @include('templates.layouts.main.navbar-collapse')

        <!-- MAIN CONTENT -->
        <main class="py-4">
            @yield('content')
        </main>

        <!-- MAIN FOOTER -->
        <div>
            @include('templates.layouts.main.footer')
        </div>
    </div>
</body>
</html>