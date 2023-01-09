<!-- Name -->
<div class="row">
    <div class="col-lg-12">
        <div class="input-group form-group mb-3">
            <div class="input-group-prepend">
              <span class="input-group-text">
                  <i class="fa fa-user"></i>
              </span>
            </div>
            <input type="text" class="form-control @error('name') is-invalid @enderror"
                   placeholder="{{__('Name')}}" name="name"
                   required wire:model="name">
        </div>
        @error('name') <span class="error text-danger">{{ $message }}</span> @enderror
    </div>
</div>


<!-- Email -->
<div class="row">
    <div class="col-lg-12">
        <div class="input-group form-group mb-3">
            <div class="input-group-prepend">
              <span class="input-group-text">
                    <i class="fa fa-envelope" aria-hidden="true"></i>
              </span>
            </div>
            <input type="email" class="form-control  @error('email') is-invalid @enderror"
                   placeholder="{{__('Email Address')}}" name="email"
                   value="{{auth()->guard('author')->user()->email}}" required wire:model="email">
        </div>
        @error('email') <span class="error text-danger">{{ $message }}</span> @enderror
    </div>
</div>


<!-- Phone -->
<div class="row">
    <div class="col-lg-12">
        <div class="input-group form-group mb-3">
            <div class="input-group-prepend">
              <span class="input-group-text">
                    <i class="fa fa-envelope" aria-hidden="true"></i>
              </span>
            </div>
            <input type="text" class="form-control  @error('phone') is-invalid @enderror"
                   placeholder="{{__('Phone Number')}}"
                   required wire:model="phone">
        </div>
        @error('phone') <span class="error text-danger">{{ $message }}</span> @enderror
    </div>
</div>


<!-- Password -->
<div class="row">
    <div class="col-lg-12">
        <div class="input-group form-group mb-3">
            <div class="input-group-prepend">
              <span class="input-group-text">
                    <i class="fa fa-key" aria-hidden="true"></i>
              </span>
            </div>
            <input type="password" class="form-control  @error('password') is-invalid @enderror"
                   placeholder="{{__('Password')}}" name="password" id="password">
        </div>
        @error('password') <span class="error text-danger">{{ $message }}</span> @enderror
    </div>
</div>


<!-- Password Confirmation -->
<div class="row">
    <div class="col-lg-12">
        <div class="input-group form-group mb-3">
            <div class="input-group-prepend">
              <span class="input-group-text">
                    <i class="fa fa-key" aria-hidden="true"></i>
              </span>
            </div>
            <input type="password" class="form-control  @error('password_confirmation') is-invalid @enderror"
                   placeholder="{{__('Password Confirmation')}}"
                   name="password_confirmation" id="password_confirmation">
        </div>
        @error('password_confirmation') <span class="error text-danger">{{ $message }}</span> @enderror
    </div>
</div>

{{--@can('sign_report')--}}
<!-- Avatar -->
<div class="row">
    <div class="col-lg-10">

        <div class="input-group form-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text">
                      <i class="fas fa-signature" aria-hidden="true"></i>
                </span>
            </div>
            <div class="custom-file">
                <input type="file" accept="image/*" class="custom-file-input @error('avatar') is-invalid @enderror"
                       wire:model="avatar">
                <label class="custom-file-label" for="exampleInputFile">{{__('Choose your signature')}}</label>
            </div>
            @error('avatar') <span class="error text-danger">{{ $message }}</span> @enderror
        </div>

    </div>
    <div class="col-lg-2">
        <div class="card card-primary">
            <div class="card-header">
                <h5 class="card-title" style="text-align: center!important;float: unset;">
                    {{__('Signature')}}
                </h5>
            </div>
            <div class="card-body p-1">
                <img class="img-thumbnail"
                     src="@if(!empty(auth()->guard('author')->user()->avatar))
                         {{asset('storage/profiles/'.auth()->guard('author')->user()->avatar)}} @else {{asset('storage/img/no-image.png')}} @endif"
                     alt="{{__('Signature')}}">
            </div>
        </div>
    </div>
</div>
{{--@endcan--}}
