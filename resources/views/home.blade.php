@extends('layouts.app')
@section('title')
    {{ __('Home') }}
@endsection

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('msg.Dashboard') }}</div>
                    <div class="card-body">
                        @guest('author')
                            <div>Not Authenticated In Author Guard</div>
                        @else
                            <div>{{Auth::guard('author')->user()->name}}</div>
                        @endguest
                        {{ __('You are logged in!') }}
                    </div>
                </div>
                @if (Session::has('success'))
                    <script>
                        swal({
                            text: " {!! Session::get('success') !!}",
                            icon: "success",
                        })
                        {{--toastr.success('{{Session::get('success')}} ');--}}
                    </script>
                @endif

                <div class="row">
                    <livewire:products-view :products="$products"/>

                </div>
            </div>
        </div>
    </div>
@endsection
@section('footer')
    @include('layouts.footer')
@endsection
