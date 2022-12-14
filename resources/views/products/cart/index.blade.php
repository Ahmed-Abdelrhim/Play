@extends('layouts.cart')
@section('cart')
    <div class="container">

        <div class="wrap-breadcrumb">
            <ul>
                <li class="item-link"><a href="{{route('home')}}" class="link">home</a></li>
                <li class="item-link"><span>Cart</span></li>
            </ul>
        </div>
        <div class=" main-content-area">

            <div class="wrap-iten-in-cart">
                <h3 class="box-title">Products Name</h3>
                <ul class="products-cart">
                    @if(isset($carts))
                        @foreach($carts as $cart)
                            <li class="pr-cart-item">
                                <div class="product-image">
                                    <figure><img
                                            src="{{asset('storage/products/'.$cart->product->main_image.'/'.$cart->product->main_image)}}"
                                            alt=""></figure>
                                </div>
                                <div class="product-name">
                                    <a class="link-to-product" href="#">
                                        {{--Radiant-360 R6 Wireless Omnidirectional Speaker [White]--}}
                                        {{$cart->product->name}}
                                    </a>
                                </div>
                                <div class="price-field produtc-price"><p class="price">{{$cart->product->price}}</p>
                                </div>
                                <div class="quantity">
                                    <div class="quantity-input">
                                        <input type="text" name="product-quatity" value="{{$cart->qty}}" data-max="120"
                                               pattern="[0-9]*">
                                        <a class="btn btn-increase" href="{{route('product.inc.qty',[$cart->id])}}">
                                        </a>
                                        @if($cart->qty >=2)
                                            <a class="btn btn-reduce"
                                               href="{{route('product.dec.qty',[$cart->id])}}"></a>
                                        @else
                                            <a class="btn btn-reduce" href="#"></a>
                                        @endif

                                        <!-- < livewire:cart-qty :cart="$cart"/ >  -->
                                    </div>
                                </div>
                                <div class="price-field sub-total"><p
                                        class="price">{{$cart->product->price * $cart->qty }} </p></div>
                                <div class="delete">
                                    <a href="{{route('product.destroy.cart',$cart->id)}}" class="btn btn-delete"
                                       title="">
                                        <span>Delete from your cart</span>
                                        <i class="fa fa-times-circle" aria-hidden="true"></i>
                                    </a>
                                </div>
                            </li>
                        @endforeach
                    @endif
                </ul>
            </div>


            <div class="summary">
                <div class="order-summary">
                    <h4 class="title-box">Order Summary</h4>
                    <p class="summary-info"><span class="title">Subtotal</span>
                        <b class="index">
                            @if(isset($carts))
                                @php
                                    $total = 0;
                                    $ids = [];
                                        foreach($carts as $cart ) {
                                            $total += $cart->product->price;
                                            // $ids[] .= $cart->product_id;
                                            array_push($ids,$cart->product_id);
                                        }
                                         $serializedArray = serialize($ids);
                                         // $serializedArray = json_encode($ids);
                                @endphp
                                ${{$total}}
                            @endif
                        </b>
                    </p>
                    <p class="summary-info"><span class="title">Shipping</span><b class="index">Free Shipping</b></p>
                    {{-- <p class="summary-info"><span class="title">Shipping</span><b class="index">{{var_dump($serializedArray)}}</b></p>--}}
                    <p class="summary-info total-info "><span class="title">Total</span>
                        <b class="index">
                            @if(isset($total))
                                ${{$total}}
                            @endif
                        </b>
                    </p>
                </div>
                <div class="checkout-info">
                    <label class="checkbox-field">
                        <input class="frm-input " name="have-code" id="have-code" value="" type="checkbox"><span>I have promo code</span>
                    </label>
                    <a class="btn btn-checkout" href="{{route('product.checkout',json_encode($ids) ,'{}') }}">Check
                        out</a>
                    <a class="link-to-shop" href="#">Continue Shopping<i class="fa fa-arrow-circle-right"
                                                                         aria-hidden="true"></i></a>
                </div>
                <div class="update-clear">
                    <a class="btn btn-clear" href="#">Clear Shopping Cart</a>
                    <a class="btn btn-update" href="#">Update Shopping Cart</a>
                </div>
            </div>
        </div>
        <!--end main content area-->
    </div>
    <!--end container-->
@endsection
{{--@section('script')--}}

{{--@endsection--}}

