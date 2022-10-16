@extends('layouts.app')

@section('content')
    <div class="container ">
        <div class="card mx-auto" style="width: 26rem;">
            <div class="card-title text-center " style="background-color: lightgrey">Payment</div>
            <div class="card-body">
                <form method="POST" action="#">
                    @csrf
                    <div class="row ">
                        <div class="col-auto">
                            <label>How much you want to pay?</label>
                            <input class="form-control" type="number" step="0.5" name="value" required
                                   value="{{mt_rand(500,1000)}}">
                        </div>

                        <div class="col-auto ">
                            <label for="inputGroupSelect01">Currency</label>

                            <select class="custom-select form-control" name="currency" id="inputGroupSelect01">
                                @foreach($currencies as $cur)
                                    <option value="{{$cur->iso}}"> {{strtoupper($cur->iso)}} </option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-12">
                            <label>Select Payment Method You Want To Use</label>
                            <div class="form-group">
                                <div class="btn-group btn-group-toggle" data-toggle="buttons">
                                    @foreach($plats as $plat)
                                        <label class="btn btn-outline-secondary rounded m-2 p-1">
                                            <input type="radio" name="payment_platform" value="{{$plat->id}}">
                                            <img class="img-thumbnail"
                                                 src="{{asset('img/payment_platform/' .$plat->image)}}">
                                        </label>
                                    @endforeach
                                </div>
                                <div>
                                    @foreach($plats as $plat)
                                        @includeIf('components'.strtolower($plat->name).'-collapse')
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="text-center">
                        <button class="btn btn-primary mt-4">Pay</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@stop

