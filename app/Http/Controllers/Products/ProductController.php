<?php

namespace App\Http\Controllers\Products;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {

    }

    public function show($start,$id,$end): Factory|View|Application
    {
        $product = Product::query()->find($id);
        if (!$product)
            return view('errors.404');
        return view('products.show',['prod' => $product]);
    }

    public function showCreateProductForm(): Factory|View|Application
    {
        return view('products.create');
    }

    public function storeProduct()
    {

    }

    public function showUpdateProductForm()
    {

    }

    public function updateProduct()
    {

    }

    public function deleteProduct()
    {

    }

    public function buyProduct($start,$id,$end): Factory|View|Application
    {
        if (!is_numeric($id))
            return view('errors.404');
        $product = Product::query()->find($id);
        if (!$product)
            return view('errors.404');
        return view('products.buy');
    }


}
