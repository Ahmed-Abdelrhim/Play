@extends('layouts.app')
@section('content')
    @foreach($avatars as $img)
        {{$img}}
    @endforeach
@endsection
