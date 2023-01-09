@extends('layouts.app')
@include('layouts.flash_messages')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('msg.Dashboard') }}</div>
                    @foreach($products as $key => $prod)
{{--                        {{$prod->cart}}--}}
                    @endforeach

                    <div class="card-body">

                        @guest('author')
                            <div>Not Authenticated In Author Guard</div>
                        @else
                            <div>{{Auth::guard('author')->user()->name}}</div>
                        @endguest
                        {{ __('You are logged in!') }}

                    </div>
                </div>
                @if (Session::has('success'))
                    <script>
                        swal({
                            text: " {!! Session::get('success') !!}",
                            icon: "success",
                        })
                        {{--toastr.success('{{Session::get('success')}} ');--}}
                    </script>
                @endif

                <div class="row">
                    @if(isset($products))
                        @foreach($products as $key => $prod)

                            <div class="product-card">
                                <div class="badge">Hot</div>
                                <div class="product-tumb">
                                    <img
                                        src="{{asset('storage/products/'.
                                                        $prod['main_image'] . '/' .
                                                        $prod['main_image'])}}"
                                        alt="">
                                </div>
                                <div class="product-details">
                                    <span class="product-catagory">Clothes</span>
                                    <h4>
                                        <a href="{{route('product.buy',[Str::random(15),$prod->id,Str::random(15)])}}">{{$prod->name_en}}</a>
                                    </h4>
                                    <p>{{$prod->desc}}</p>
                                    <div class="product-bottom-details">
                                        <div class="product-price">
                                            <small>
                                                @if(($prod->price + $prod->discount)  != $prod->price)
                                                    {{$prod->price + $prod->discount}}
                                                @endif
                                            </small>
                                            {{$prod->price}} EGP
                                        </div>

                                        <div class="product-links">
                                            <a class="btn btn-primary"
                                               href="{{route('product.show',[Str::random(15) , $prod->id , Str::random(15)])}}">Buy</a>
                                            <a href="#">
                                                <i class="fa fa-heart"></i>
                                            </a>
                                            <a href="{{route('product.to.cart',$prod->id)}}">
                                                @if(isset($prod->cart[0]))
                                                    <i class="fa fa-shopping-cart" style="color: #007bff"></i>
                                                @else
                                                    <i class="fa fa-shopping-cart"></i>
                                                @endif
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    @endif
                    {{!!$products->links()}}
                </div>

            </div>
        </div>
    </div>

@endsection

@section('footer')
    @include('layouts.footer')
@endsection
