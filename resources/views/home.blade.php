@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('msg.Dashboard') }}</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif


                        {{-- Success Message --}}
                        @if (Session::has('error'))
                            <script>
                                swal({
                                    text: " {!! Session::get('error') !!}",
                                    icon: "error",
                                })
                            </script>
                        @endif

                        @guest('author')
                            <div>Not Authenticated In Author Guard</div>
                        @else
                            <div>{{Auth::guard('author')->user()->name}}</div>
                        @endguest
                        {{--                            <div>Checking Here {{Auth::guard('author')->check()}}</div>--}}
                        {{ __('You are logged in!') }}
                        {{-- <div>--}}
                        {{-- <video src="{{asset('storage/third/1665768905.mp4')}}" type="mp4" controlsList="nodownload" controls >--}}
                        {{-- </video>--}}
                        {{-- </div>--}}

                    </div>
                </div>
                {{-- My Card--}}
                {{--                <div class="card mt-3">--}}
                {{--                    <div class="card-body">--}}
                {{--                        <h5 class="card-title">{{__('msg.welcome', ['name' => Auth::guard('author')->user()->name]) }}</h5>--}}
                {{--                        <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>--}}
                {{--                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of--}}
                {{--                            the card's content.</p>--}}
                {{--                        <a href="#" class="card-link">Card link</a>--}}
                {{--                        <a href="#" class="card-link">Another link</a>--}}
                {{--                    </div>--}}
                {{--                </div>--}}
                <div class="row">
                    @if(isset($products))
                        @foreach($products as $prod)
                        {{--                            <div class="card mt-3 ml-2" style="width: 18rem;">--}}
                        {{--                                <img src="{{asset('storage/products/' . $prod->main_image . '/' . $prod->main_image)}}"--}}
                        {{--                                     class="card-img-top" alt="...">--}}
                        {{--                                <div class="card-body">--}}
                        {{--                                    <h5 class="card-title">{{$prod->name_en}}</h5>--}}
                        {{--                                    <p class="card-text">{{$prod->desc}}</p>--}}
                        {{--                                    <div class="mx-auto">--}}
                        {{--                                        <a href="{{route('product.show', [\Illuminate\Support\Str::random(15),$prod->id,\Illuminate\Support\Str::random(15)] )}}"--}}
                        {{--                                           class="btn btn-primary">Show Product--}}
                        {{--                                        </a>--}}
                        {{--                                    </div>--}}
                        {{--                                </div>--}}
                        {{--                            </div>--}}



                            <div class="product-card">
                                <div class="badge">Hot</div>
                                <div class="product-tumb">
                                    <img src="{{asset('storage/products/'.$prod->main_image . '/' . $prod->main_image)}}" alt="">
                                </div>
                                <div class="product-details">
                                    <span class="product-catagory">Clothes</span>
                                    <h4><a href="">{{$prod->name}}</a></h4>
                                    <p>{{$prod->desc}}</p>
                                    <div class="product-bottom-details">
                                        <div class="product-price"><small>{{$prod->$prod + $prod->discount}}</small>{{$prod->price}} EGP</div>

                                        <div class="product-links">
                                            <a class="btn btn-primary" href="{{route('product.show',[Str::random(15) , $prod->id , Str::random(15)])}}">Buy</a>
                                            <a href="#"><i class="fa fa-heart"></i></a>
                                            <a href="#"><i class="fa fa-shopping-cart"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    @endif
                </div>
            </div>
        </div>
    </div>
@endsection
{{--  H("TRIPLE H DOT COM HEY HEY ZIZO EL-MISTRO ")--}}
