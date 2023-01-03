<?php

namespace App\Http\Livewire;

use App\Models\Product;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
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
    public $error_msg;

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
        $image_name = Str::random(8) . time() .$this->main_image->guessExtension();
        $this->main_image->storeAs('products/'.$image_name,$image_name , 'public');
        try {
            DB::beginTransaction();
            Product::query()->create([
                'name_en'    => $this->name_en,
                'name_ar'    => $this->name_ar,
                'price'      => $this->price,
                'discount'   => $this->discount,
                'qty'        => $this->qty,
                'main_image' => '',
            ]);
            session()->flash('subscription', 'Product Added Successfully');

        } catch (\Exception $e) {
            DB::rollBack();
            $this->addError('error', 'something went wrong');
            $this->error_msg = 'Something Went Wrong Try Again Later~';
        }
        DB::commit();
        $this->name_en = '';
        $this->name_ar = '';
        $this->price = '';
        $this->discount = '';
        $this->qty = '';
        $this->main_image = '';
    }
}
