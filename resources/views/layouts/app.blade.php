<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    @include('layouts.head')
    @stack('styles')
</head>
<body>
<div id="app">
    @include('layouts.navbar')
    <main class="py-4">
        @yield('content')
    </main>
</div>

@include('layouts.scripts')

</body>
</html>

