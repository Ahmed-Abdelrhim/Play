<div class="row">

    <!-- Name En -->
    <div class="col-lg-4">
        <div class="form-group">
            <div class="input-group mb-3">
                <div class="input-group-prepend">
            <span class="input-group-text" id="basic-addon1">
{{--                <i class="fa fa-user"></i>--}}
                <i class="fa-solid fa-signature"></i>
            </span>
                </div>
                <input type="text" class="form-control @error('name_en') is-invalid @enderror"
                       placeholder="{{__('Product Name En')}}" name="name_en"
                       id="name_en"
                       @if(isset($doctor)) value="{{$doctor->name}}" @endif  wire:model="name_en">
            </div>
            @error('name_en') <span class="error text-danger">{{ $message }}</span> @enderror
        </div>
    </div>


    <!-- Name Ar -->
    <div class="col-lg-4">
        <div class="form-group">
            <div class="input-group mb-3">
                <div class="input-group-prepend">
            <span class="input-group-text" id="basic-addon1">
{{--                <i class="fa fa-user"></i>--}}
                <i class="fa-solid fa-signature"></i>
            </span>
                </div>
                <input type="text" class="form-control @error('name_ar') is-invalid @enderror "
                       placeholder="{{__('Product Name Ar')}}"
                       name="name_ar"
                       id="name_ar"
                       @if(isset($doctor)) value="{{$doctor->name}}" @endif   wire:model="name_ar">
            </div>
            @error('name_ar') <span class="error text-danger">{{ $message }}</span> @enderror
        </div>
    </div>


    <!-- Price -->
    <div class="col-lg-4">
        <div class="form-group">
            <div class="form-group">
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                  <span class="input-group-text" id="basic-addon1">
{{--                    <i class="fas fa-percentage"></i>--}}
                      <i class="fa-solid fa-money-bill"></i>
                  </span>
                    </div>
                    <input type="number" class="form-control @error('price') is-invalid @enderror "
                           placeholder="{{__('Price')}}"
                           name="price"
                           id="price" @if(isset($doctor)) value="{{$doctor->commission}}" @endif
                           wire:model="price">
                </div>
                @error('price') <span class="error text-danger">{{ $message }}</span> @enderror

            </div>
        </div>
    </div>


    <!-- Discount -->
    <div class="col-lg-4">
        <div class="form-group">
            <div class="form-group">
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                  <span class="input-group-text" id="basic-addon1">
                    <i class="fas fa-percentage"></i>
                  </span>
                    </div>
                    <input type="number" class="form-control @error('discount') is-invalid @enderror "
                           placeholder="{{__('Discount')}}"
                           name="discount"
                           id="discount" @if(isset($doctor)) value="{{$doctor->commission}}" @endif
                           wire:model="discount">
                </div>
                @error('discount') <span class="error text-danger">{{ $message }}</span> @enderror

            </div>
        </div>
    </div>


    <!-- Qty -->
    <div class="col-lg-4">
        <div class="form-group">
            <div class="form-group">
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                  <span class="input-group-text" id="basic-addon1">
{{--                    <i class="fas fa-percentage"></i>--}}
                      <i class="fa-solid fa-q"></i>
                  </span>
                    </div>
                    <input type="number" class="form-control @error('qty') is-invalid @enderror "
                           placeholder="{{__('Quantity')}}"
                           name="qty"
                           id="qty" @if(isset($doctor)) value="{{$doctor->commission}}" @endif
                           wire:model="qty">
                </div>
                @error('qty') <span class="error text-danger">{{ $message }}</span> @enderror

            </div>
        </div>
    </div>


    <!-- Desc  -->
    <div class="col-lg-4">
        <div class="form-group">
            <div class="form-group">
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                  <span class="input-group-text" id="basic-addon1">
{{--                    <i class="fas fa-percentage"></i>--}}
                      <i class="fa-solid fa-q"></i>
                  </span>
                    </div>
                    <input type="text" class="form-control @error('desc') is-invalid @enderror "
                           placeholder="{{__('Desc')}}"
                           name="desc"
                           id="desc" @if(isset($doctor)) value="{{$doctor->commission}}" @endif
                           wire:model="desc">
                </div>
                @error('desc') <span class="error text-danger">{{ $message }}</span> @enderror

            </div>
        </div>
    </div>


    <!-- Main Image -->
    <div class="col-lg-4">
        <div class="form-group">
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                <span class="input-group-text" id="basic-addon1">
{{--                  <i class="fas fa-envelope"></i>--}}
                    <i class="fa-solid fa-image"></i>
                </span>
                </div>
                <input type="file" class="form-control @error('main_image') is-invalid @enderror"
                       placeholder="{{__('Main Image')}}"
                       name="main_image"
                       id="main_image"
                       @if(isset($doctor)) value="{{$doctor->email}}" @endif  wire:model="main_image">
            </div>
            @error('main_image') <span class="error text-danger">{{ $message }}</span> @enderror

        </div>
    </div>


    {{--    <div class="col-lg-4">--}}
    {{--        <div class="form-group">--}}
    {{--            <div class="input-group mb-3">--}}
    {{--                <div class="input-group-prepend">--}}
    {{--                <span class="input-group-text" id="basic-addon1">--}}
    {{--                  <i class="fas fa-envelope"></i>--}}
    {{--                </span>--}}
    {{--                </div>--}}
    {{--                <input type="email" class="form-control" placeholder="{{__('Email Address')}}" name="email" id="email"--}}
    {{--                       @if(isset($doctor)) value="{{$doctor->email}}" @endif required>--}}
    {{--            </div>--}}
    {{--        </div>--}}
    {{--    </div>--}}

    {{--    <div class="col-lg-4">--}}
    {{--        <div class="form-group">--}}
    {{--            <div class="input-group mb-3">--}}
    {{--                <div class="input-group-prepend">--}}
    {{--              <span class="input-group-text" id="basic-addon1">--}}
    {{--                <i class="fas fa-phone-alt"></i>--}}
    {{--              </span>--}}
    {{--                </div>--}}
    {{--                <input type="text" class="form-control" placeholder="{{__('Phone number')}}" name="phone" id="phone"--}}
    {{--                       @if(isset($doctor)) value="{{$doctor->phone}}" @endif required>--}}
    {{--            </div>--}}
    {{--        </div>--}}
    {{--    </div>--}}

    {{--    <div class="col-lg-4">--}}
    {{--        <div class="form-group">--}}
    {{--            <div class="form-group">--}}
    {{--                <div class="input-group mb-3">--}}
    {{--                    <div class="input-group-prepend">--}}
    {{--                    <span class="input-group-text" id="basic-addon1">--}}
    {{--                      <i class="fas fa-map-marker-alt"></i>--}}
    {{--                    </span>--}}
    {{--                    </div>--}}
    {{--                    <input type="text" class="form-control" placeholder="{{__('Address')}}" name="address" id="address"--}}
    {{--                           @if(isset($doctor)) value="{{$doctor->address}}" @endif required>--}}
    {{--                </div>--}}
    {{--            </div>--}}
    {{--        </div>--}}
    {{--    </div>--}}

    {{--    <div class="col-lg-4">--}}
    {{--        <div class="form-group">--}}
    {{--            <div class="form-group">--}}
    {{--                <div class="input-group mb-3">--}}
    {{--                    <div class="input-group-prepend">--}}
    {{--                  <span class="input-group-text" id="basic-addon1">--}}
    {{--                    <i class="fas fa-percentage"></i>--}}
    {{--                  </span>--}}
    {{--                    </div>--}}
    {{--                    <input type="number" class="form-control" placeholder="{{__('Commission')}}" name="commission"--}}
    {{--                           id="commission" @if(isset($doctor)) value="{{$doctor->commission}}" @endif min="0" max="100"--}}
    {{--                           required>--}}
    {{--                </div>--}}
    {{--            </div>--}}
    {{--        </div>--}}
    {{--    </div>--}}


</div>
