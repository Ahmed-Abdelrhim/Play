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
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Session;


class CartController extends Controller
{
    public string $token = 'eyJhbGciOiJIUzI1NiJ9.eyJhdWQiOiI3MDVkMjU4ZDQxMWE2MzVjMDIyZjYyOWEwMzI0YjkxNSIsInN1YiI6IjYyMWMxOWQzMmZhZjRkMDA0MzdiOTQwOSIsInNjb3BlcyI6WyJhcGlfcmVhZCJdLCJ2ZXJzaW9uIjoxfQ.TmXbQbpSqB2LWNX-fpivUi8mBaQvewaLKEoJr_tIxZM';

    public function addToCart($product_id, $start = null ,$end = null): View|Factory|Application|RedirectResponse
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
        // Session::put('success', 'Product Added To Your Cart');
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

    public function viewCartPage()
    {
        $author = auth()->guard('author')->user();
        $carts = Cart::query()
            ->where('customer_id',$author->id)
            ->with('product')
            ->get();
        // return $carts;

        return view('products.cart.index',['carts' => $carts]);
    }

    public function incrementQty($id): View|Factory|RedirectResponse|Application
    {
        $cart = Cart::query()->find($id);
        if (!$cart)
            return view('errors.404',['msg' => 'product not found']);
        $cart->qty +=1 ;
        $cart->save();
        return redirect()->back();
    }

    public function decrementQty($id)
    {
        $cart = Cart::query()->find($id);
        if (!$cart)
            return view('errors.404',['msg' => 'product not found']);
        if ($cart->qty >=2) {
            $cart->qty -=1 ;
            $cart->save();
        }
        return redirect()->back();
    }


    public function movies()
    {
        $token = env('MOVIE_TOKEN');
        $uri = 'https://api.themoviedb.org/3/movie/popular';
        $movies = Http::withToken($this->token)->get($uri)->json()['results'];
        return view('movies.index',['movies' => $movies]);
    }

}
