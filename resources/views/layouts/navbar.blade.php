<nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
    <div class="container">
        <a class="navbar-brand" href="{{route('home')}}">
            {{--{{ config('app.name', 'Laravel') }}--}}
            Playing
        </a>
        @if(Auth::guard('author')->check())
            {{--  @if( isset(auth()->guard('author')->user()->image) && count(auth()->guard('author')->user()->image) > 0 )  --}}
            {{--      Storage::disk('s3')->url()      --}}
            @if(auth()->guard('author')->user()->avatar != null)
                <a href="{{route('home')}}">
                    <img class="img-thumbnail"

                         src="{{ asset('storage/profiles/' . auth()->guard('author')->user()->avatar)}}"
                         style="width: 55px; height: 55px; border-radius: 50%;" alt="loading..."/>
                </a>
                {{-- Pepole Are Saying To Each Other --}}
            @else
                <a href="{{route('home')}}">
                    <img class="img-thumbnail" src="{{asset('storage/profiles/pic-6.webp')}}"
                         style="width: 55px; height: 55px; border-radius: 50%;" alt="not-found"/>
                </a>
            @endif
        @endif

        <!-- Left navbar links -->
        <ul class="navbar-nav" style="margin-left: 10px;">
            {{-- <li class="nav-item">--}}
            {{--  <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>--}}
            {{-- </li>--}}
            <li class="nav-item dropdown text-uppercase">
                <button class="btn btn-primary btn-sm dropdown-toggle text-uppercase" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="fas fa-globe"></i>  {{app()->getLocale()}}
                </button>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton" style="min-width: 0px">
                    @foreach($languages as $lang)
                        @if(app()->getLocale() !== $lang->iso)
                            <a class="dropdown-item"  href="{{route('change_locale', $lang['iso'] )}}">
                                {{$lang->iso}}
                            </a>
                        @endif
                    @endforeach
                </div>
            </li>

        </ul>

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

                    @if(Route::current()->getName() != 'sending-email')
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('sending-email')}}">Mail</a>
                        </li>
                    @endif

                    @if(Route::current()->getName() != 'check.verification.code')
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('check.verification.code')}}">Check mail</a>
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

                    {{--                            @can('edit post')--}}
                    @if(Route::current()->getName() != 'dataTables' )
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('dataTables')}}">dataTables</a>
                        </li>
                    @endif
                    {{--                            @endcan--}}

                    {{-- Route::current()->getName()   show/dataTables/blogposts    --}}
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
                            <a class="dropdown-item" href="{{ route('profile') }}">
                                Profile
                            </a>

                            <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">
                                Logout
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
