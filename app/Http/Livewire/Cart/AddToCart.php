<?php

namespace App\Http\Livewire\Cart;

use App\Models\Cart;
use App\Models\Product;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class AddToCart extends Component
{
    public $product_id;

    public function rules():array
    {
        return [
            'product_id' => 'required|exists:products,id'
        ];
    }
    public function render(): Factory|View|Application
    {
        return view('livewire.cart.add-to-cart');
    }

    public function submit()
    {
        $this->validate();
        if (!is_numeric($this->product_id))
            return view('errors.404', ['msg' => 'Product Not Found']);
        $product = Product::query()->find($this->product_id);
        if (!$product)
            return view('errors.404', ['msg' => 'Product Not Found']);
        $author = auth()->guard('author')->user();
        try {
            DB::beginTransaction();
            Cart::query()->create([
                'customer_id' => $author->id,
                'product_id' => $this->product_id,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        } catch (\Exception $e) {
            DB::rollBack();
            return $e;
            session()->flash('error', 'Something Went Wrong');
            return redirect()->back();
        }
        DB::commit();
        session()->flash('success', 'Product Added To Cart');
        return route('session');
    }


}
