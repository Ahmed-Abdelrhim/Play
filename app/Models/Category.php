<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Product;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Category extends Model
{
    use HasFactory;
    public $table = 'categories';
    protected $fillable = ['name_en','name_ar','image'];
    protected $hidden = [];

    protected $casts = [];

    public function products(): HasMany
    {
        return $this->hasMany(Product::class,'category_id','id');
    }
}
