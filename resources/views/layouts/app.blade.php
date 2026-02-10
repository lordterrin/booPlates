<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>@yield('title', 'BooPlates')</title>

    <link rel="icon" type="image/png" href="{{ asset('img/favicon.png') }}">

    <!-- grid.js -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/gridjs/6.2.0/theme/mermaid.css" integrity="sha512-ibnRpUIPxMVyH/FKCXkBogJLSLNPbf+R6OStxW0LZCixqgbuAneGeTPuvtqi9rqSEoALv3T1Gu4aH4NYNUjvsg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Global CSS -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&family=Archivo:ital,wght@0,100..900;1,100..900&family=Atma:wght@300;400;500;600;700&family=Roboto:wght@300;400;700&family=Barlow:wght@300;400;500;600;700&family=Antonio:wght@300;400;600;700&family=News+Cycle:wght@400;700&display=swap" rel="stylesheet">
    
    <!-- booPlates CSS -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/app-mobile.css') }}">

    <script>
        window.APP_ENV = "{{ app()->environment() }}";
        window.BASE_URL = "{{ url('/') }}";
    </script>
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

    <!--- grid.js -->
    <script src="https://unpkg.com/gridjs/dist/gridjs.umd.js" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <!-- Global JS -->    
    <script src="{{ asset('js/app.js') }}"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/gridjs/6.2.0/theme/mermaid.css" integrity="sha512-ibnRpUIPxMVyH/FKCXkBogJLSLNPbf+R6OStxW0LZCixqgbuAneGeTPuvtqi9rqSEoALv3T1Gu4aH4NYNUjvsg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Page-specific JS pushed from child views, loaded with @push('scripts') in a given blade -->
    @stack('scripts')
</body>
</html>
