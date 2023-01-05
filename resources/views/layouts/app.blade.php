<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    @include('layouts.head')
    @stack('styles')
    @yield('custom-style')
</head>
<body>
<div id="app">
    <div class="scroller"></div>

    @include('layouts.navbar')
    @include('layouts.flash_messages')
    @include('layouts.sidebar')

    <main class="py-4">
        @yield('content')
    </main>
</div>

@include('layouts.scripts')

@include('layouts.footer')
</body>
</html>

