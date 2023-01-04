@extends('layouts.app')
@section('content')
    <livewire:product-update :product="$product"/>
@endsection
@section('footer')
    @include('layouts.footer')
@endsection
