@extends('layouts.app')
@section('content')
<div class="container">
    <div class="col-1">
        <div class="action-btn bg-info ms-2">
            <a href="#" class="mx-3 btn btn-sm  align-items-center" data-toggle="modal" data-target="#modalCreate">

                Role
                <i class="ti ti-pencil text-white"></i>
            </a>
        </div>
    </div>
</div>
    @include('play.edit')
@endsection
