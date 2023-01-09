<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Cart;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;


class CartController extends Controller
{
    public function addToCart($start,$product_id,$end): View|Factory|Application|RedirectResponse
    {
        if (!is_numeric($product_id))
            return view('errors.404', ['msg' => 'Product Not Found']);
        $product = Product::query()->find($product_id);
        if (!$product_id)
            return view('errors.404', ['msg' => 'Product Not Found']);
        return $this->storeToCart($product_id);
    }

    public function storeToCart($product_id): RedirectResponse
    {
        $author = auth()->guard('author')->user();
        try {
            DB::beginTransaction();
            Cart::query()->create([
                'customer_id' => $author->id,
                'product_id' => $product_id,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        } catch (\Exception $e) {
            DB::rollBack();
            // return $e;
            // Session::put('error','Something Went Wrong');
            session()->flash('error', 'Something Went Wrong');
            return redirect()->back();
        }
        DB::commit();
        session()->flash('success', 'Product Added To Cart');
        // Session::put('success', 'Product Added To Cart');
        return redirect()->back();
    }

    public function deleteFromCart($cart_id): View|Factory|RedirectResponse|Application
    {
        if (!is_numeric($cart_id))
            return view('errors.404',['msg' => 'product does not exists']);

        $cart = Cart::query()->where('product_id',$cart_id)->get();
        if (!$cart)
            return view('errors.404',['msg' => 'product does not exists']);
            foreach ($cart as $car) {
                $car->delete();
            }
        session()->flash('success' , 'Product removed From Cart');
        return redirect()->back();
    }

}
