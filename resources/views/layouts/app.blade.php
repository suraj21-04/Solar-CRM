<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'Solar CRM')</title>
    
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    
    <!-- Global CSS -->
    <link rel="stylesheet" href="{{ asset('css/global.css') }}">
    <link rel="stylesheet" href="{{ asset('css/components/navbar.css') }}">
    
    <!-- Page Specific Styles -->
    @stack('styles')
</head>
<body>
    @include('components.navbar')
    
    <main class="main-content">
        @yield('content')
    </main>

    <!-- Global Scripts -->
    <script src="{{ asset('js/components/navbar.js') }}"></script>
    
    <!-- Page Specific Scripts -->
    @stack('scripts')
</body>
</html>
