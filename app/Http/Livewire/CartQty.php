<?php

namespace App\Http\Livewire;

use App\Models\Cart;
use Livewire\Component;

class CartQty extends Component
{
    public $cart;


    public function render()
    {
        return view('livewire.cart-qty');
    }

    public function increase($id)
    {
        dd($id);
        $cart = Cart::query()->find($id);
        $cart->qty += 1 ;
        $cart->save();
    }

    public function decrease($id)
    {
        dd($id);
        $cart = Cart::query()->find($id);
        if($cart->qty != 1 ) {
            $cart->qty -= 1;
            $cart->save();
        }
    }
}
