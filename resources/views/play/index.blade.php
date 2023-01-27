@extends('layouts.app')
@section('content')
<div class="container">
    <div class="col-1">
        <div class="action-btn bg-info ms-2">
            @if(isset($roles))
                @foreach($roles as $role)
                    <a href="#"
                       class="mx-3 btn btn-sm  align-items-center" data-toggle="modal" data-target="#modalCreate{{$role->id}}">

                        {{$role->name}}
                        <i class="ti ti-pencil text-white"></i>
                    </a>
                    @include('play.edit')
                @endforeach
            @endif
        </div>
    </div>
</div>
    @include('play.edit')
@endsection
