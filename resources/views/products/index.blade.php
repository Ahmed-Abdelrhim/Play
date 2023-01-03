@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="col-sm-4">
            <button class="btn btn-primary">pdf</button>
            <br>
        </div>
        <table class="table table-dark" id="datatable-example">
            <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Name</th>
                <th scope="col">Price</th>
                <th scope="col">Discount</th>
                <th scope="col">Action</th>
            </tr>
            </thead>
            <tbody>
            </tbody>
        </table>
    </div>
@endsection
@push('scripts')
    @include('datatables.products')
@endpush
