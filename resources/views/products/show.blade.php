@extends('layouts.app')
@section('title')
    {{__('Product Details')}}
@endsection
@section('content')
    @include('layouts.flash_messages')

    {{-- Error Message --}}
    @if (Session::has('error'))
        <script>
            swal({
                text: " {!! Session::get('error') !!}",
                icon: "error",
            })
        </script>
    @endif


    @if (Session::has('success'))
        <script>
            swal({
                text: " {!! Session::get('success') !!}",
                icon: "success",
            })
        </script>
    @endif


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
                    <a class="btn btn-primary" href="{{route('product.buy', [Str::random(15) , $prod->id , Str::random(15) ] )}}">
                        Confirm
                    </a>
                    @if(isset($prod->cart[0]))
                        <a href="{{route('product.destroy.cart',$prod->id)}}">
                            <i class="fa fa-shopping-cart" style="color: #007bff"></i>
                        </a>
                    @else
                        <a href="#"><i class="fa fa-heart"></i></a>
                        <a href="{{route('product.to.cart',[ $prod->id ,Str::random(15) , Str::random(15) ])}}">
                            <i class="fa fa-shopping-cart"></i>
                        </a>
                    @endisset
                </div>
            </div>
        </div>
    </div>

@endsection
