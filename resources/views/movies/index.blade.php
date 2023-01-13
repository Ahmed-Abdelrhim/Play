@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="navbar-brand"><h1>MovieApp</h1></div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="row">
                        @if(isset($movies))
                            @foreach($movies as $movie)
                                <div class="product-card">
                                    <div class="badge">Hot</div>
                                    <div class="product-tumb">
                                        <img src="{{'https://image.tmdb.org/t/p/w500' . $movie['poster_path']}}"
                                             alt="poster">
                                    </div>
                                    <div class="product-details">
                                        <span class="product-catagory">Section</span>
                                        <h4>
                                            <a href="{{route('movie.show',$movie['id'])}}">{{$movie['title']}}</a>
                                        </h4>
                                        <p>{{$movie['overview']}}</p>
                                        <div class="product-bottom-details">
                                            <div class="product-price">
                                                <small> Rate : </small>
                                                {{$movie['vote_average']}}
                                            </div>

                                            <div class="product-links " style="display: flex; ">
                                                <a class="btn btn-primary"
                                                   href="#">Show </a>
                                                <a href="#" style="margin-left: 20px;">
                                                    <i class="fa fa-heart"></i>
                                                </a>
                                                <a href="#">
                                                    <i class="fa fa-shopping-cart" style="color: #007bff"></i>
                                                </a>

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
    </div>
@endsection
