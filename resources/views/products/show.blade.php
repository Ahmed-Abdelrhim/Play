@extends('layouts.app')
@section('content')
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
                    <a class="btn btn-primary" href="{{route('product.buy', $prod->id )}}">
                        Confirm
                    </a>
                    <a href="#"><i class="fa fa-heart"></i></a>
                    <a href="#"><i class="fa fa-shopping-cart"></i></a>
                </div>
            </div>
        </div>
    </div>

@endsection




    {{--    <div class="container">--}}
    {{--        <div class="card mt-3" style="width: 18rem;">--}}
    {{--            <img src="{{asset('storage/products/' . $prod->main_image . '/' . $prod->main_image)}}"--}}
    {{--                 class="card-img-top" alt="...">--}}
    {{--            <div class="card-body">--}}
    {{--                <h5 class="card-title">{{$prod->name_en}}</h5>--}}
    {{--                <p class="card-text">High quality product  , made of 100% cotton , for all programmers</p>--}}
    {{--                <a href="{{route('product.buy',[Str::random(15),$prod->id,Str::random(15)])}}" class="btn btn-primary">Buy Product</a>--}}
    {{--            </div>--}}
    {{--        </div>--}}
    {{--    </div>--}}
