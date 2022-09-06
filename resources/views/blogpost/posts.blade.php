@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Posts</div>
                    @foreach($posts as $post)
                        <div class="card-body ">
                            <h5 class="card-title">{{$post->title}}</h5>
                            <p class="card-text">{{$post->content}}</p>
                            <a href="{{route('update-post',$post->id)}}" class="btn btn-primary mb-5">Update</a>
                            <a href="{{route('delete.post',$post->id)}}" class="btn btn-danger mb-5">Delete</a>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection
