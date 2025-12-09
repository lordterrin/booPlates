<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>@yield('title', 'BooPlates')</title>

    <!-- Global CSS -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&family=Roboto+Condensed:wght@300;400;700&family=Barlow:wght@300;400;500;600;700&family=Antonio:wght@300;400;600;700&family=News+Cycle:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>

    <header>
        @include('partials.header')
    </header>

    <main>
        <section class="sidebar">
            @include('sidebar')
        </section>    
        <section class="main">
            @yield('content')
        </section>
    </main>

    <footer>
        @include('partials.footer')
    </footer>

    <!-- Global JS (optional) -->
    <script src="{{ asset('js/app.js') }}"></script>

    <!-- Page-specific JS pushed from child views -->
    @stack('scripts')
</body>
</html>
