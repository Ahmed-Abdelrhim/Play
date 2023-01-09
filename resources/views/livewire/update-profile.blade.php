<div class="container">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">
                        <i class="fa fa-user-circle"></i>
                        {{__('Profile')}}
                    </h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{route('home')}}">{{__('Home')}}</a></li>
                        <li class="breadcrumb-item active">{{ __('Profile') }}</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>


    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">{{ __('Edit Profile') }}</h3>
        </div>
        <!-- /.card-header -->
        {{--        <form method="POST" action="{{route('post.profile.data')}}" enctype="multipart/form-data" id="profile_form">--}}
        <form wire:submit.prevent="submit" enctype="multipart/form-data" id="profile_form">
            @csrf
            <div class="card-body">
                <div class="col-lg-12">
                    @include('profile_form')
                    @include('layouts.flash_messages')
                </div>
            </div>
            <div class="card-footer">
                <div class="col-lg-12">
                    <button type="submit" class="btn btn-primary">
                        <i class="fa fa-check"></i> {{__('Save')}}
                    </button>
                </div>
            </div>
        </form>

        <!-- /.card-body -->
    </div>

</div>
