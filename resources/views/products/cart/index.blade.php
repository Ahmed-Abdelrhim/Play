<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Shopping Cart</title>
    <link rel="shortcut icon" type="image/x-icon" href="assets/images/favicon.ico">
    <link
        href="https://fonts.googleapis.com/css?family=Lato:300,400,400italic,700,700italic,900,900italic&amp;subset=latin,latin-ext"
        rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css?family=Open%20Sans:300,400,400italic,600,600italic,700,700italic&amp;subset=latin,latin-ext"
        rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/animate.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/font-awesome.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/chosen.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/style.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/color-01.css')}}">
</head>
<body class=" shopping-cart page ">

<!-- mobile menu -->
<div class="mercado-clone-wrap">
    <div class="mercado-panels-actions-wrap">
        <a class="mercado-close-btn mercado-close-panels" href="#">x</a>
    </div>
    <div class="mercado-panels"></div>
</div>

<!--header-->

<!--main area-->
<main id="main" class="main-site">

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
                                    <figure><img src="{{}}" alt=""></figure>
                                </div>
                                <div class="product-name">
                                    <a class="link-to-product" href="#">Radiant-360 R6 Wireless Omnidirectional Speaker
                                        [White]</a>
                                </div>
                                <div class="price-field produtc-price"><p class="price">$256.00</p></div>
                                <div class="quantity">
                                    <div class="quantity-input">
                                        <input type="text" name="product-quatity" value="1" data-max="120" pattern="[0-9]*">
                                        <a class="btn btn-increase" href="#"></a>
                                        <a class="btn btn-reduce" href="#"></a>
                                    </div>
                                </div>
                                <div class="price-field sub-total"><p class="price">$256.00</p></div>
                                <div class="delete">
                                    <a href="#" class="btn btn-delete" title="">
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
                    <p class="summary-info"><span class="title">Subtotal</span><b class="index">$512.00</b></p>
                    <p class="summary-info"><span class="title">Shipping</span><b class="index">Free Shipping</b></p>
                    <p class="summary-info total-info "><span class="title">Total</span><b class="index">$512.00</b></p>
                </div>
                <div class="checkout-info">
                    <label class="checkbox-field">
                        <input class="frm-input " name="have-code" id="have-code" value="" type="checkbox"><span>I have promo code</span>
                    </label>
                    <a class="btn btn-checkout" href="checkout.html">Check out</a>
                    <a class="link-to-shop" href="shop.html">Continue Shopping<i class="fa fa-arrow-circle-right"
                                                                                 aria-hidden="true"></i></a>
                </div>
                <div class="update-clear">
                    <a class="btn btn-clear" href="#">Clear Shopping Cart</a>
                    <a class="btn btn-update" href="#">Update Shopping Cart</a>
                </div>
            </div>



        </div><!--end main content area-->
    </div><!--end container-->

</main>
<!--main area-->

<!--footer area-->
@include('layouts.footer')

<script src="assets/js/jquery-1.12.4.minb8ff.js?ver=1.12.4"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/chosen.jquery.min.js"></script>
<script src="assets/js/owl.carousel.min.js"></script>
<script src="assets/js/jquery.sticky.js"></script>
<script src="assets/js/functions.js"></script>
<!--footer area-->
</body>
</html>





















{{--<li class="pr-cart-item">
                        <div class="product-image">
                            <figure><img src="assets/images/products/digital_20.jpg" alt=""></figure>
                        </div>
                        <div class="product-name">
                            <a class="link-to-product" href="#">Radiant-360 R6 Wireless Omnidirectional Speaker
                                [White]</a>
                        </div>
                        <div class="price-field produtc-price"><p class="price">$256.00</p></div>
                        <div class="quantity">
                            <div class="quantity-input">
                                <input type="text" name="product-quatity" value="1" data-max="120" pattern="[0-9]*">
                                <a class="btn btn-increase" href="#"></a>
                                <a class="btn btn-reduce" href="#"></a>
                            </div>
                        </div>
                        <div class="price-field sub-total"><p class="price">$256.00</p></div>
                        <div class="delete">
                            <a href="#" class="btn btn-delete" title="">
                                <span>Delete from your cart</span>
                                <i class="fa fa-times-circle" aria-hidden="true"></i>
                            </a>
                        </div>
                    </li>--}}




{{--<!DOCTYPE html>--}}
{{--<html lang="en">--}}
{{--<!--divinectorweb.com-->--}}
{{--<head>--}}
{{--    <meta charset="UTF-8">--}}
{{--    <title>Responsive Shopping Cart design</title>--}}
{{--    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"--}}
{{--          type="text/css">--}}
{{--    --}}{{--    <link href="style.css" rel="stylesheet">--}}
{{--    <link href="{{asset('css/style-cart.css')}}" rel="stylesheet">--}}
{{--</head>--}}
{{--<body>--}}
{{--<div class="wrapper">--}}
{{--    <h1>Shopping Cart</h1>--}}
{{--    <div class="project">--}}
{{--        <div class="shop">--}}
{{--            @if(isset($carts))--}}
{{--                @foreach($carts as $cart)--}}
{{--                    <div class="box">--}}
{{--                        <img--}}
{{--                            src="{{asset('storage/products/'.$cart->product->main_image.'/'.$cart->product->main_image)}}"--}}
{{--                            alt="">--}}
{{--                        <div class="content">--}}
{{--                            <h3>{{$cart->product->name}}</h3>--}}
{{--                            <h4>{{$cart->product->price}}</h4>--}}
{{--                            <p class="unit">Quantity:--}}

{{--                                <livewire:cart-qty :cart="$cart"/>--}}
{{--                                <input value="{{$cart->qty}}" name="qty">--}}
{{--                            </p>--}}
{{--                            <p class="btn-area">--}}
{{--                                <a href="#">--}}
{{--                                    <i aria-hidden="true" class="fa fa-trash"></i>--}}
{{--                                    <span class="btn2">Remove</span>--}}
{{--                                </a>--}}

{{--                            </p>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                @endforeach--}}
{{--            @endif--}}

{{--        </div>--}}
{{--        <div class="right-bar">--}}
{{--            <p><span>Subtotal</span> <span>$120</span></p>--}}
{{--            <hr>--}}
{{--            <p><span>Tax (5%)</span> <span>$6</span></p>--}}
{{--            <hr>--}}
{{--            <p><span>Shipping</span> <span>$15</span></p>--}}
{{--            <hr>--}}
{{--            <p><span>Total</span> <span>$141</span></p><a href="#"><i class="fa fa-shopping-cart"></i>Checkout</a>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</div>--}}
{{--</body>--}}
{{--</html>--}}
