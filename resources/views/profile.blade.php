@extends('layouts.app')
@section('title')
    {{ __('Profile') }}
@endsection


@section('content')
    <livewire:update-profile :user="$user"/>
@endsection
@section('scripts')
    <script src="{{asset('js/admin/profile.js')}}"></script>
@endsection

{{--  If The User Has The Permission To Create , Read , Update , Delete , Code-Ignitor --}}



{{--@section('content')--}}

{{--    <div class="container">--}}
{{--        <div class="row justify-content-center">--}}
{{--            <div class="col-md-6">--}}
{{--                <div class="card">--}}
{{--                    <div class="card-header h4 text-center">{{__('msg.Update Profile')}}</div>--}}
{{--                    <div class="card-body">--}}
{{--                        <form method="POST" action="{{ route('post.profile.data') }}" enctype="multipart/form-data">--}}
{{--                            @csrf--}}

{{--                            --}}{{-- Success Message --}}
{{--                            @if (Session::has('success'))--}}
{{--                                <script>--}}
{{--                                    swal({--}}
{{--                                        text: " {!! Session::get('success') !!}",--}}
{{--                                        icon: "success",--}}
{{--                                    })--}}
{{--                                    --}}{{--toastr.success('{{Session::get('success')}}');--}}
{{--                                </script>--}}
{{--                            @endif--}}


{{--                            <div class="row mb-3">--}}
{{--                                <label for="name"--}}
{{--                                       class="col-md-4 col-form-label text-md-end">{{__('msg.Name')}}</label>--}}

{{--                                <div class="col-md-6">--}}
{{--                                    <input id="name" type="text" placeholder="full name"--}}
{{--                                           class="form-control @error('name') is-invalid @enderror" name="name"--}}
{{--                                           value="{{ $user->name }}" required--}}
{{--                                           autocomplete="email" autofocus>--}}
{{--                                    @error('name')--}}
{{--                                    <span class="invalid-feedback mb-2" role="alert">--}}
{{--                                        <strong>{{ $message }}</strong>--}}
{{--                                    </span>--}}
{{--                                    @enderror--}}
{{--                                </div>--}}
{{--                            </div>--}}

{{--                            <div class="row mb-3">--}}
{{--                                <label for="email"--}}
{{--                                       class="col-md-4 col-form-label text-md-end">{{__('msg.Email')}}</label>--}}

{{--                                <div class="col-md-6">--}}
{{--                                    <input id="email" type="text" placeholder="email address"--}}
{{--                                           class="form-control @error('email') is-invalid @enderror" name="email"--}}
{{--                                           value="{{ $user->email }}" required--}}
{{--                                           autocomplete="email" autofocus>--}}
{{--                                    @error('email')--}}
{{--                                    <span class="invalid-feedback mb-2" role="alert">--}}
{{--                                        <strong>{{ $message }}</strong>--}}
{{--                                    </span>--}}
{{--                                    @enderror--}}
{{--                                </div>--}}
{{--                            </div>--}}

{{--                            <div class="row mb-3">--}}
{{--                                <label for="password"--}}
{{--                                       class="col-md-4 col-form-label text-md-end">{{__('msg.Password')}}</label>--}}
{{--                                <div class="col-md-6">--}}
{{--                                    <input id="password" type="password" placeholder="password"--}}
{{--                                           class="form-control @error('password') is-invalid @enderror" name="password"--}}
{{--                                           autocomplete="current-password">--}}
{{--                                    @error('password')--}}
{{--                                    <span class="invalid-feedback" role="alert">--}}
{{--                                        <strong>{{ $message }}</strong>--}}
{{--                                    </span>--}}
{{--                                    @enderror--}}

{{--                                </div>--}}
{{--                            </div>--}}


{{--                            <div class="row mb-3">--}}
{{--                                <label for="phone"--}}
{{--                                       class="col-md-4 col-form-label text-md-end">{{__('msg.Phone')}}</label>--}}
{{--                                <div class="col-md-6">--}}
{{--                                    <input type="tel" id="phone" placeholder="phone number"--}}
{{--                                           class="form-control @error('phone') is-invalid @enderror" name="phone"--}}
{{--                                           autocomplete="current-password"--}}
{{--                                           @if($user->phone != null)--}}
{{--                                               value="{{ $user->phone }}"--}}
{{--                                        @endif>--}}
{{--                                    @error('phone')--}}
{{--                                    <span class="invalid-feedback" role="alert">--}}
{{--                                        <strong>{{ $message }}</strong>--}}
{{--                                    </span>--}}
{{--                                    @enderror--}}

{{--                                </div>--}}
{{--                            </div>--}}

{{--                            <div class="row mb-3">--}}
{{--                                <label for="password"--}}
{{--                                       class="col-md-4 col-form-label text-md-end">{{__('msg.Image')}}</label>--}}
{{--                                <div class="col-md-6">--}}
{{--                                    <input id="image" type="file"--}}
{{--                                           class="form-control @error('image') is-invalid @enderror" name="image"--}}
{{--                                           autocomplete="current-password">--}}
{{--                                    @error('image')--}}
{{--                                    <span class="invalid-feedback" role="alert">--}}
{{--                                        <strong>{{ $message }}</strong>--}}
{{--                                    </span>--}}
{{--                                    @enderror--}}

{{--                                </div>--}}
{{--                            </div>--}}

{{--                            <div class="row mb-0">--}}
{{--                                <div class="col-md-8 offset-md-4">--}}
{{--                                    <button type="submit" class="btn btn-primary">--}}
{{--                                        {{__('msg.Update')}}--}}
{{--                                    </button>--}}

{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </form>--}}


{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--@endsection--}}
