<?php

namespace App\Http\Controllers\Products;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Yajra\DataTables\Facades\DataTables;


class ProductController extends Controller
{
    public function index(): Factory|View|Application
    {
        return view('products.index');
    }

    public function ajax()
    {
        $products = Product::query();
        return DataTables::of($products)->addIndexColumn()
            ->setRowClass(function ($row) {
                return $row->id % 2 == 0 ? 'alert-primary' : 'alert-warning ' . $row->id;
            })
            ->setRowId(function ($row) {
                return $row->id;
            })
            ->addColumn('action', function ($row) {
                return view('products._action',['row' => $row]);
            })
            ->addColumn('name', function (Product $product) {
                return $product->name_en;
            })
            ->addColumn('price',function(Product $product) {
                return $product->price ;
            })
            ->editColumn('discount' , function(Product $product) {
                return $product->price;
            })
            ->rawColumns(['action'])
            ->make(true);

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
        // return 'sadasda';
        return view('products.create');
    }

    public function storeProduct()
    {

    }

    public function showUpdateProductForm($start , $id , $end)
    {
        if (!is_numeric($id))
            return view('errors.404');
        $product = Product::query()->find($id);
        if (!$product)
            return view('errors.404');
        return view('products.update',['product' => $product]);
    }

    //    public function updateProduct()
    //    {
    //
    //    }

    public function deleteProduct($id): View|Factory|RedirectResponse|Application
    {
        if (!is_numeric($id))
            return view('errors.404');
        $product = Product::query()->find($id);
        if (!$product)
            return view('errors.404');
        $product->delete();
        session()->flash('success' , 'Successfully Deleted Product');
        return redirect()->back();
    }

    public function buyProduct($start,$id,$end): Factory|View|Application
    {
        if (!is_numeric($id))
            return view('errors.404');
        $product = Product::query()->find($id);
        if (!$product)
            return view('errors.404');
        return view('products.buy' ,['intent' => auth()->guard('author')->user()->createSetupIntent()]);
    }

    public function success() {
        return 'success';
    }
    public function error() {
        return 'error';
    }


}
