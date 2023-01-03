@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="card mt-3" style="width: 18rem;">
            <img src="{{asset('storage/products/' . $prod->main_image . '/' . $prod->main_image)}}"
                 class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">{{$prod->name_en}}</h5>
                <p class="card-text">High quality product  , made of 100% cotton , for all programmers</p>
                <a href="{{route('product.buy',[Str::random(15),$prod->id,Str::random(15)])}}" class="btn btn-primary">Buy Product</a>
            </div>
        </div>
    </div>
@endsection
