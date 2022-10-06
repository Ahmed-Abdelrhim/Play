@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Posts</div>
                    @foreach($posts as $post)
                        <div class="card-body ">
                            <h5 class="card-title"><a style="color: grey; text-decoration: none;" href="{{route('show.blog_post.by.id',$post->id)}}">{{$post->title}}</a></h5>
                            <p class="card-text">{{$post->content}}</p>
                            @if($post->comments_count == 0)
                                <small id="emailHelp" class="form-text text-muted">
                                    No comments yet
                                </small>
                            @endif

                            @if($post->comments_count == 1)
                                <small id="emailHelp" class="form-text text-muted">
                                    {{$post->comments_count}} comment
                                </small>
                            @endif

                            @if($post->comments_count > 1)
                                <small id="emailHelp" class="form-text text-muted">
                                    {{$post->comments_count}} comments
                                </small>
                            @endif

                            <p></p>
                            @can('update',$post)
                                <a href="{{route('update.post.form',$post->id)}}"
                                   class="btn btn-primary mb-2">Update</a>
                            @endcan
                            @can('delete',$post)
                                <a href="{{route('delete.post',$post->id)}}" class="btn btn-danger mb-2">Delete</a>
                            @endcan
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection
