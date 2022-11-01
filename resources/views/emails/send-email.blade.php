@extends('layouts.app')
@section('content')
    <form method="POST" action="{{route('send.gmail')}}">
        @csrf
        <div class="form-group">
            <label for="exampleInputEmail1">Customer Email</label>
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email">
            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
        </div>


        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    <p>Thank you for reading this, hope to hear from you soon.</p>
@endsection
