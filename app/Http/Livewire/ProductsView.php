<?php

namespace App\Http\Livewire;

use App\Models\Product;
use Livewire\Component;
use Livewire\WithPagination;

class ProductsView extends Component
{
    use WithPagination;
//    public $products ;

    public function mount($products)
    {
//        $this->products = $products;
    }

    public function render()
    {
        $products = Product::query()->with('cart')->paginate(10);
        return view('livewire.products-view' , ['products' => $products]);
    }
}
