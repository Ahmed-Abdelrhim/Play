@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Dashboard') }}</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        @guest('author')
                            <div>Not Authenticated In Author Guard </div>
                        @else
                            <div>{{Auth::guard('author')->user()->name}}</div>
                        @endguest
{{--                            <div>Checking Here {{Auth::guard('author')->check()}}</div>--}}
                        {{ __('You are logged in!') }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
