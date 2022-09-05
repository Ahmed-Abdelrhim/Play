@extends('layouts.app')
{{--@section('content')--}}
{{--    {{$post->content}}--}}
{{--@stop--}}

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Update {{$post->title}}</div>
                    <div class="card-body">
                        <form action="{{route('update.post',$post->id)}}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label for="exampleInputEmail1">{{$post->title}}</label>
                                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                                value="{{$post->content}}" name="post_content">
                            </div>
                            <button type="submit" class="btn btn-primary mt-5">Submit</button>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
