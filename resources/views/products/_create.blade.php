<div class="row">

    <!-- Name En -->
    <div class="col-lg-4">
        <div class="form-group">
            <div class="input-group mb-3">
                <div class="input-group-prepend">
            <span class="input-group-text" id="basic-addon1">
                <i class="fa fa-user"></i>
            </span>
                </div>
                <input type="text" class="form-control" placeholder="{{__('Product Name En')}}" name="name_en" id="name_en"
                       @if(isset($doctor)) value="{{$doctor->name}}" @endif required wire:model="name_en">
            </div>
        </div>
    </div>
    @error('name_en') <span class="error">{{ $message }}</span> @enderror



    <!-- Name Ar -->
    <div class="col-lg-4">
        <div class="form-group">
            <div class="input-group mb-3">
                <div class="input-group-prepend">
            <span class="input-group-text" id="basic-addon1">
                <i class="fa fa-user"></i>
            </span>
                </div>
                <input type="text" class="form-control" placeholder="{{__('Product Name_En')}}" name="name_ar" id="name_ar"
                       @if(isset($doctor)) value="{{$doctor->name}}" @endif required  wire:model="name_ar">
            </div>
        </div>
    </div>
    @error('name_ar') <span class="error">{{ $message }}</span> @enderror


    <!-- Price -->
    <div class="col-lg-4">
        <div class="form-group">
            <div class="form-group">
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                  <span class="input-group-text" id="basic-addon1">
                    <i class="fas fa-percentage"></i>
                  </span>
                    </div>
                    <input type="number" class="form-control" placeholder="{{__('Price')}}" name="price"
                           id="price" @if(isset($doctor)) value="{{$doctor->commission}}" @endif min="0" max="100"
                           required  wire:model="price">
                </div>
            </div>
        </div>
    </div>
    @error('price') <span class="error">{{ $message }}</span> @enderror


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
                    <input type="number" class="form-control" placeholder="{{__('Discount')}}" name="discount"
                           id="discount" @if(isset($doctor)) value="{{$doctor->commission}}" @endif min="0" max="100"
                           required  wire:model="discount">
                </div>
            </div>
        </div>
    </div>
    @error('discount') <span class="error">{{ $message }}</span> @enderror


    <!-- Qty -->
    <div class="col-lg-4">
        <div class="form-group">
            <div class="form-group">
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                  <span class="input-group-text" id="basic-addon1">
                    <i class="fas fa-percentage"></i>
                  </span>
                    </div>
                    <input type="number" class="form-control" placeholder="{{__('Quantity')}}" name="qty"
                           id="qty" @if(isset($doctor)) value="{{$doctor->commission}}" @endif min="0" max="100"
                           required  wire:model="qty">
                </div>
            </div>
        </div>
    </div>
    @error('qty') <span class="error">{{ $message }}</span> @enderror


    <!-- Main Image -->
    <div class="col-lg-4">
        <div class="form-group">
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                <span class="input-group-text" id="basic-addon1">
                  <i class="fas fa-envelope"></i>
                </span>
                </div>
                <input type="file" class="form-control" placeholder="{{__('Main Image')}}" name="main_image" id="main_image"
                       @if(isset($doctor)) value="{{$doctor->email}}" @endif required  wire:model="main_image">
            </div>
        </div>
    </div>
    @error('main_image') <span class="error">{{ $message }}</span> @enderror


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
