{{--@extends('layouts.app')--}}
{{--@section('content')--}}
{{--    <div class="container">--}}
{{--        <div class="row col-6 mx-auto">--}}
            Your Order Was Shipped To The Shipping Company It Will Arrive Very Soon So Be There And Wait For A Phone Call To Receive Your Order.
{{--        </div>--}}
{{--    </div>--}}
{{--@endsection--}}


@component('mail::message')
    Your order was shipped  wait for a phone call to receive it.
    @component('mail::button',['url' => 'https://www.google.com'])
        more details
    @endcomponent

    Thanks , <br>
    Laravel Team
@endcomponent
