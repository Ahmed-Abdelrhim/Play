{{--<div>--}}
    {{-- If you look to others for fulfillment, you will never truly be fulfilled. --}}
{{--</div>--}}
{{--<button  wire:click="increase('{{ $cart->id }}')">increase</button>--}}
<a href="#" wire:click.prevent="increase('{{$cart->id}}')">{{$cart->product->name}}</a>
<a href="#" wire:click.prevent="decrease('{{ $cart->id }}')"></a>
