<?php

namespace App\Http\Controllers\Products;

use App\Http\Controllers\Controller;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {

    }

    public function show()
    {

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


}
