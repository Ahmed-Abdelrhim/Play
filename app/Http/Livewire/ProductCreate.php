<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithFileUploads;

class ProductCreate extends Component
{
    use WithFileUploads;

    public $name_en;
    public $name_ar;
    public $price;
    public $discount;
    public $qty;
    public $main_image;

    protected function rules(): array
    {
        return [
            'name_en'    => 'required|string|min:8',
            'name_ar'    => 'required|string|min:8',
            'price'      => 'required|numeric|between:10,100000',
            'discount'   => 'required|numeric|between:10,1000',
            'qty'        => 'required|numeric|between:0,100000',
            'main_image' => 'required|mimes:jpg,jpeg,png,webp|max:1024',
        ];
    }

    public function render()
    {
        return view('livewire.product-create');
    }

    public function submit()
    {
        $this->validate();
        dd($this->name_ar);
    }
}
