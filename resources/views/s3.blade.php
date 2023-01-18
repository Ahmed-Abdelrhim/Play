@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <form method="GET" action="{{route('playing.posts')}}" >
                @csrf
{{--                <div class="form-group">--}}
{{--                    <label for="exampleInputEmail1">Email address</label>--}}
{{--                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">--}}
{{--                    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>--}}
{{--                </div>--}}


{{--                <label for="posts"></label>--}}
{{--                <select class="custom-select" id="posts" name="post">--}}
{{--                    <option disabled value="0">Open this select menu</option>--}}
{{--                    @foreach($posts as $post)--}}
{{--                        <option value="{{$post->id}}">{{$post->title}}</option>--}}
{{--                    @endforeach--}}
{{--                </select>--}}


                <div class="row align-items-center justify-content-end">
                    <div class="col-xl-10">
                        <div class="row">
                            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 col-12 date">
                                <div class="btn-box">
                                    <label class="form-label" for="custom_date">{{__('Date')}}</label>
                                    <input class="form-control month-btn" name="custom_date" type="date"
                                           id="custom_date" />
                                </div>
                            </div>

                        </div>
                    </div>


                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
@endsection
{{--    <div class="container">--}}
{{--        --}}{{--        <img  src="{{Storage::disk('s3')->response('thumbnails/1666802816.jpg') }}" class="img-fluid" alt="not-found"/>--}}
{{--        <div class="d-flex flex-column">--}}
{{--            <img src="{{$image}}" class="img-thumbnail" style="width: 200px; height: 200px; border-radius: 50%;" alt="not-found"/>--}}
{{--            <h3 class="h3" style="width: 200px; margin-left: 37px;">User Profile</h3>--}}
{{--            <p class="mt-3" style="max-width: 100%;"> {{$image}} </p>--}}
{{--            <p class="mt-3" style="max-width: 100%;"> lorem </p>--}}

{{--        </div>--}}
{{--    </div>--}}
