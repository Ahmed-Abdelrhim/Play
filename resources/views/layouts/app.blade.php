<!doctype html>
{{--<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">--}}
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    {{--Bootstrap Js Scripts--}}
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
            integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
            crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
            integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN"
            crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js"
            integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+"
            crossorigin="anonymous"></script>
    @livewireStyles

    {{--    <link rel="stylesheet" href="{{asset('css/style.css')}}">--}}
    @stack('styles')
</head>
<body>
<div id="app">
    <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
        <div class="container">
            <a class="navbar-brand" href="{{route('home')}}">
                {{--{{ config('app.name', 'Laravel') }}--}}
                Play
            </a>
            <img src="
            @if(Auth::guard('author')->check() && \App\Models\Images::where('imageable_id',Auth::guard('author')->user()->id)->first())
            {{asset('storage/'.\App\Models\Images::where('imageable_id',Auth::guard('author')->user()->id)->first()->src)}}
            @else
            {{asset('storage/profiles/1666143280.webp')}}
            @endif
            " class="img-thumbnail" style="width: 55px; height: 55px; border-radius: 50%;"/>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <!-- Left Side Of Navbar -->
                <ul class="navbar-nav me-auto">

                </ul>

                <!-- Right Side Of Navbar -->
                <ul class="navbar-nav ms-auto">
                    <!-- Authentication Links -->
                    @guest('author')
                        @if (Route::has('login'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('login') }}</a>
                            </li>
                        @endif

                        @if (Route::has('register'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                            </li>
                        @endif
                    @else

                        @if(Route::current()->getName() != 'blog_posts' )
                            <li class="nav-item">
                                <a class="nav-link" href="{{route('blog_posts')}}">BlogPost</a>
                            </li>
                        @endif


                        @if(Route::current()->getName() != 'add.blog_post' )
                            <li class="nav-item">
                                <a class="nav-link" href="{{route('add.blog_post')}}">Add</a>
                            </li>
                        @endif

                        @if(Route::current()->getName() != 'livewire' )
                            <li class="nav-item">
                                <a class="nav-link" href="{{route('livewire')}}">livewire</a>
                            </li>
                        @endif

                        @if(Route::current()->getName() != 'upload.form' )
                            <li class="nav-item">
                                <a class="nav-link" href="{{route('upload.form')}}">Upload</a>
                            </li>
                        @endif

                        {{-- Route::current()->getName() --}}
                        {{-- Request::route()->getPrefix() --}}

                        @if(Route::current()->getName() != 'pay' )
                            <li class="nav-item">
                                <a class="nav-link" href="{{route('pay')}}">Payment</a>
                            </li>
                        @endif


                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown"
                               aria-expanded="false">
                                {{ Auth::guard('author')->user()->name }}
                            </a>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>

                            </div>
                        </li>
                    @endguest
                </ul>
            </div>
        </div>
    </nav>

    <main class="py-4">
        @yield('content')
    </main>
</div>
@stack('scripts')
@livewireScripts
</body>
</html>
