<?php

namespace App\Http\Livewire;

use App\Models\Cart;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use JetBrains\PhpStorm\NoReturn;
use Livewire\Component;

class CartQty extends Component
{
    public Cart $cart;


    public function render(): Factory|View|Application
    {
        return view('livewire.cart-qty');
    }

    #[NoReturn] public function increase()
    {
        dd('Triggered');
    //        $cart = Cart::query()->find($id);
    //        $cart->qty += 1 ;
    //        $cart->save();
    }

    #[NoReturn] public function decrease($id)
    {
        dd($id);
        //        $cart = Cart::query()->find($id);
        //        if($cart->qty != 1 ) {
        //            $cart->qty -= 1;
        //            $cart->save();
        //        }
    }

    #[NoReturn] public function like()
    {
        dd('Yes Function Triggered');
    }
}
