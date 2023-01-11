    {{-- Success is as dangerous as failure. --}}
    @if(isset($products))
        @foreach($products as $key => $prod)

            <div class="product-card">
                <div class="badge">Hot</div>
                <div class="product-tumb">
                    <img
                        src="{{asset('storage/products/'.
                                                        $prod['main_image'] . '/' .
                                                        $prod['main_image'])}}"
                        alt="">
                </div>
                <div class="product-details">
                    <span class="product-catagory">Clothes</span>
                    <h4>
                        {{-- <a href="{{route('product.buy',[Str::random(15),$prod->id,Str::random(15)])}}">{{$prod->name_en}}</a>--}}
                        <a href="{{route('product.buy',$prod->id)}}">{{$prod->name_en}}</a>
                    </h4>
                    <p>{{$prod->desc}}</p>
                    <div class="product-bottom-details">
                        <div class="product-price">
                            <small>
                                @if(($prod->price + $prod->discount)  != $prod->price)
                                    {{$prod->price + $prod->discount}}
                                @endif
                            </small>
                            {{$prod->price}} EGP
                        </div>

                        <div class="product-links " style="display: flex; ">
                            <a class="btn btn-primary"
                               href="{{route('product.show',[ $prod->id,Str::random(15),Str::random(15)])}}">Buy</a>
                            <a href="#" style="margin-left: 20px;">
                                <i class="fa fa-heart"></i>
                            </a>
                            @if(isset($prod->cart[0]))
                                <a href="{{route('product.destroy.cart',$prod->id)}}">
                                    <i class="fa fa-shopping-cart" style="color: #007bff"></i>
                                </a>
                            @else
                                 <livewire:cart.add-to-cart :product_id="$prod->id"/>
                            {{--  <a href="{{route('product.to.cart',[$prod->id,Str::random(15),Str::random(15)])}}">--}}
                            {{-- <i class="fa fa-shopping-cart"></i>--}}
                            {{--  </a>--}}
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    @endif
    {{!!$products->links()}}
