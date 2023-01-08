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
                        {{ __('You are logged in!') }}

                    </div>
                </div>
                <div class="row">
                    @if(isset($products))
                        @foreach($products as $prod)

                            <div class="product-card">
                                <div class="badge">Hot</div>
                                <div class="product-tumb">
                                    <img src="{{asset('storage/products/'.$prod->main_image . '/' . $prod->main_image)}}" alt="">
                                </div>
                                <div class="product-details">
                                    <span class="product-catagory">Clothes</span>
                                    <h4><a href="{{route('product.buy',[Str::random(15),$prod->id,Str::random(15)])}}">{{$prod->name_en}}</a></h4>
                                    <p>{{$prod->desc}}</p>
                                    <div class="product-bottom-details">
                                        <div class="product-price">
                                            <small>
                                                @if(($prod->price + $prod->discount)  != $prod->price) {{$prod->price + $prod->discount}} @endif
                                            </small>
                                            {{$prod->price}} EGP
                                        </div>

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
{{--                    {{!!$products->links()}}--}}
                </div>
            </div>
        </div>
    </div>
@endsection

@section('footer')
    @include('layouts.footer')
@endsection
