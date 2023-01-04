<div class="container mt-10">


    <!-- BreadCrumb-->
    <div class="start_breadcrumb">
        <div class="col-6">
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0 text-dark">
                                <h1 class="m-0 text-dark">
                                    {{--                                    <i class="nav-icon fa fa-user-md"></i>--}}
                                    <i class="fa-brands fa-product-hunt"></i>
                                    {{__('Products')}}
                                </h1>
                            </h1>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="{{route('home')}}">{{__('Home')}}</a></li>
                                <li class="breadcrumb-item "><a href="{{route('product.index')}}">{{__('Products')}}</a>
                                </li>
                                <li class="breadcrumb-item active">{{__('Update product')}}</li>
                            </ol>
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>

        </div>
    </div>

    @if ($error_msg)
        <script>
            swal({
                text: " {{$error_msg}}",
                icon: "error",
            })
        </script>
    @endif

    <!-- Product Form -->
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">{{__('Create Product')}}</h3>
        </div>
        <form wire:submit.prevent="submit" enctype="multipart/form-data">
            <!-- /.card-header -->
            <div class="card-body">
                @csrf
                @include('products._update')
                @include('layouts.flash_messages')
            </div>
            <!-- /.card-body -->
            <div class="card-footer">
                <button type="submit" class="btn btn-primary">
                    <i class="fa fa-check"></i> {{__('Save')}}
                </button>
            </div>
        </form>
    </div>


</div>
