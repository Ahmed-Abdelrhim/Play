
    <form wire:submit.prevent="submit" style="margin-left: 10px;">
        {{--        <button href="{{route('product.to.cart',[Str::random(15),$prod->id,Str::random(15)])}}">--}}
        <button type="submit" wire:model="product_id">
            <i class="fa fa-shopping-cart"></i>
        </button>
    </form>

