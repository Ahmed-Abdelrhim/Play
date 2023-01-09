@extends('layouts.app')
@section('title')
    {{ __('Datatables') }}
@endsection
@section('content')
    <div class="scroller"></div>
    <div class="container">
{{--        <div class="col-sm-4">--}}
{{--            <button class="btn btn-primary">pdf</button>--}}
{{--            <br>--}}
{{--        </div>--}}
        <table class="table table-dark" id="datatable-example">
            <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Title</th>
                <th scope="col">Content</th>
                <th scope="col">Name</th>
                <th scope="col">Diff</th>
                <th scope="col">Time</th>
                <th scope="col">Action</th>
            </tr>
            </thead>
            <tbody>
            </tbody>
        </table>
    </div>
@endsection
@push('scripts')
    @include('datatables.script')
@endpush


